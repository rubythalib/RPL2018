<?php

namespace backend\models;

use Yii;
use common\models\User;
/**
 * This is the model class for table "produk".
 *
 * @property int $id
 * @property int $codeProduk
 * @property string $namaProduk
 * @property string $username
 * @property string $deskripsiProduk
 * @property int $Harga
 * @property string $uploadDate
 *
 * @property User $id0
 */
class Produk extends \yii\db\ActiveRecord
{
    public $image1;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'produk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'namaProduk', 'deskripsiProduk', 'Harga', 'uploadDate'], 'required'],
            [['id', 'Harga'], 'integer'],
            [['image1'],'file'],
            [['deskripsiProduk'], 'string'],
            [['uploadDate'], 'safe'],
            [['namaProduk'], 'string', 'max' => 50],
            [['image'],'string', 'max'=>200],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'codeProduk' => 'Code Produk',
            'namaProduk' => 'Nama Produk',
            'deskripsiProduk' => 'Deskripsi Produk',
            'Harga' => 'Harga',
            'uploadDate' => 'Upload Date',
            'image1'=>'Image',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(User::className(), ['id' => 'id']);
    }
}
