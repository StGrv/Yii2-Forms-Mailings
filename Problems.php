<?php

namespace frontend\models;

use Yii;

class Problems extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'problems';
    }

    public function rules()
    {
        return [
            [['name', 'address', 'email'], 'required'],
            [['phonenum'], 'integer'],
            [['info'], 'string'],
            [['name'], 'string', 'max' => 50],
            [['email'], 'string', 'max' => 50],
            [['address'], 'string', 'max' => 100],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => 'Email',
            'name' => 'Name',
            'address' => 'Address',
            'phonenum' => 'Phonenum',
            'info' => 'Info',
        ];
    }
}