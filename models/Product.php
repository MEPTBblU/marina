<?php

namespace app\models;

use Yii;
use yii\imagine\Image;
use yii\web\UploadedFile;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string $name
 * @property int $qty
 * @property int $price
 * @property string $img
 * @property int $ord
 * @property int $status
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */

    public $image;


    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'qty', 'price', 'img', 'ord', 'status'], 'required'],
            [['qty', 'price', 'ord', 'status'], 'integer'],
            [['name', 'img'], 'string', 'max' => 255],
            [['image'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Наименование',
            'qty' => 'Количество',
            'price' => 'Цена',
            'img' => 'Изображение',
            'ord' => 'Порядок',
            'status' => 'Статус',
        ];
    }

    public function setImage($time)
    {
        $this->image = UploadedFile::getInstance($this, 'image');
        if ($this->image) {
            $this->deleteImage($this->img);
            $this->img = 'uploads/' . $this->image->baseName . $time . '.' . $this->image->extension;
        }
    }

    public function saveImage($time)
    {
        if ($this->validate()) {
            if ($this->image) {
                $this->image->saveAs('uploads/' . $this->image->baseName. '.' . $this->image->extension);
                Image::thumbnail('uploads/' . $this->image, 800, 600)
                    ->save('uploads/' . $this->image->baseName . $time. '.' . $this->image->extension,
                        ['quality' => 70]);
                unlink('uploads/' . $this->image->baseName . '.'  . $this->image->extension);

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
