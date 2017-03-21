<?php
/**
 * Created by PhpStorm.
 * User: Vam
 * Date: 2017/3/20
 * Time: 15:36
 */

namespace app\models;


use yii\db\ActiveRecord;

class Order extends ActiveRecord
{
    public static function tableName()
    {
        return 'order';
    }

    public function fields()
    {
        return [
            'id',
            'technique',
            'area',
            'title',
            'description',
//            'keyword',
            'gender',
            'price'
        ];
    }

    public function rules()
    {
        return [
            [['s_id', 'technique', 'area', 'title', 'description'], 'required'],
            [['s_id'], 'integer'],
            [['technique'], 'string', 'max' => 20],
            [['area'], 'string', 'max' => 20],
            [['title'], 'string', 'max' => 20],
            [['description'], 'string', 'max' => 100],
//            [['keyword'], 'string', 'max' => 20],
            [['gender'], 'integer'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            's_id' => 'Student ID',
            'technique' => 'Technique',
            'area' => 'Area',
            'title' => 'Title',
            'description' => 'Description',
            'keyword' => 'Keyword',
            'gender' => 'Gender',
        ];
    }
}