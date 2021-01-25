<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "mitra".
 *
 * @property int $id
 * @property string $nama_mitra
 * @property string $alamat
 * @property string $no_telp
 * @property string $email
 * @property int $user_id
 */
class Mitra extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mitra';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'nama_mitra', 'alamat', 'no_telp', 'email', 'user_id'], 'required'],
            [['id', 'user_id'], 'integer'],
            [['alamat'], 'string'],
            [['nama_mitra', 'email'], 'string', 'max' => 100],
            [['no_telp'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_mitra' => 'Nama Mitra',
            'alamat' => 'Alamat',
            'no_telp' => 'No Telp',
            'email' => 'Email',
            'user_id' => 'User ID',
        ];
    }
}
