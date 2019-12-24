<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;
use yii\imagine\Image;

/**
 * This is the model class for table "project".
 *
 * @property int $id
 * @property string $location
 * @property string $square
 * @property string $year
 * @property string $client
 * @property string $plan_picture
 * @property string $poster_picture
 * @property string $some_picture
 * @property int $order_of
 * @property int $status
 */
class Project extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $filePicture;
    public $filePoster;
    public $fileSome;
    public $slider;

    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }

    public static function tableName()
    {
        return 'project';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['location', 'square', 'year', 'client', 'plan_picture', 'poster_picture', 'some_picture', 'order_of'], 'required'],
            [['client'], 'string'],
            [['order_of', 'status'], 'integer'],
            [['location', 'square', 'plan_picture', 'poster_picture', 'some_picture'], 'string', 'max' => 255],
            [['year'], 'string', 'max' => 10],
            [['filePicture', 'filePoster', 'fileSome'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],
            [['slider'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg', 'maxFiles' => 8],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'location' => 'Локация',
            'square' => 'Категория',
            'year' => 'Год',
            'client' => 'Описание',
            'plan_picture' => 'Главная фото',
            'poster_picture' => 'Фото ДО',
            'some_picture' => 'Фото ПОСЛЕ',
            'order_of' => 'Порядок',
            'status' => 'Статус',
        ];
    }

    public function setImage($time)
    {
        $this->filePicture = UploadedFile::getInstance($this, 'filePicture');
        if ($this->filePicture) {
            $this->deleteImage($this->plan_picture);
            $this->plan_picture = 'uploads/' . $this->filePicture->baseName . $time . '.' . $this->filePicture->extension;
        }

        $this->filePoster = UploadedFile::getInstance($this, 'filePoster');
        if ($this->filePoster) {
            $this->deleteImage($this->poster_picture);
            $this->poster_picture = 'uploads/' . $this->filePoster->baseName . $time . '.' . $this->filePoster->extension;
        }

        $this->fileSome = UploadedFile::getInstance($this, 'fileSome');
        if ($this->fileSome) {
            $this->deleteImage($this->some_picture);
            $this->some_picture = 'uploads/' . $this->fileSome->baseName . $time . '.' . $this->fileSome->extension;
        }

        $this->slider = UploadedFile::getInstances($this, 'slider');
        if ($this->slider) {

//            $this->deleteImage($this->some_picture);
//            $this->some_picture = 'uploads/' . $this->fileSome->baseName . date('YmdHis') . '.' . $this->fileSome->extension;
        }

    }

    public function saveImage($time)
    {
        if ($this->validate()) {
            if ($this->filePicture) {
                $this->filePicture->saveAs('uploads/' . $this->filePicture->baseName. '.' . $this->filePicture->extension);
                Image::thumbnail('uploads/' . $this->filePicture, 800, 600)
                    ->save('uploads/' . $this->filePicture->baseName . $time. '.' . $this->filePicture->extension,
                        ['quality' => 70]);
                unlink('uploads/' . $this->filePicture->baseName . '.'  . $this->filePicture->extension);

            }

            if ($this->filePoster) {
                $this->filePoster->saveAs('uploads/' . $this->filePoster->baseName . '.' . $this->filePoster->extension);
                Image::thumbnail('uploads/' . $this->filePoster, 800, 600)
                    ->save('uploads/' . $this->filePoster->baseName . $time. '.' . $this->filePoster->extension,
                        ['quality' => 70]);
                unlink('uploads/' . $this->filePoster->baseName . '.'  . $this->filePoster->extension);
            }

            if ($this->fileSome) {
                $this->fileSome->saveAs('uploads/' . $this->fileSome->baseName . '.' . $this->fileSome->extension);
                Image::thumbnail('uploads/' . $this->fileSome, 800, 600)
                    ->save('uploads/' . $this->fileSome->baseName . $time. '.' . $this->fileSome->extension,
                        ['quality' => 70]);
                unlink('uploads/' . $this->fileSome->baseName . '.'  . $this->fileSome->extension);
            }
            foreach ($this->slider as $file) {
                $file->saveAs('uploads/slider/' . $file->baseName . $time . '.' . $file->extension);
                $this->attachImage('uploads/slider/' . $file->baseName . $time . '.' . $file->extension);
                $this->deleteImage('uploads/slider/' . $file->baseName . $time . '.' . $file->extension);
            }
            return true;
        } else {
            return false;
        }
    }

    public function deleteImage($filePic) {
        if (file_exists($filePic)) {
            unlink($filePic);
        }
    }
}
