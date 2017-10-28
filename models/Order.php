<?php
/**
 * Created by PhpStorm.
 * User: №zero
 * Date: 2017/10/26
 * Time: 15:10
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
            'gender',
            'price' => function($model){
                if ($model->is_urgent == true){
                    return $model->price / 1.5;
                }
                else return $model->price;
            },
            'teach_time',
            'is_urgent',
            'status' => function($model){
                if ($model->status == -1){
                    return "等待接单";
                } else {
                    return "已有".$model->status."人接单";
                }
            },
            't_id' => function($model){
                return explode(',', $model->t_id);
            }
        ];
    }

    public function rules()
    {
        return [
            [['s_id', 'technique', 'area', 'title', 'description', 'is_urgent', 'teach_time', 'price'], 'required'],
            [['s_id', 'price'], 'integer'],
            [['technique'], 'string', 'max' => 20],
            [['area'], 'string', 'max' => 20],
            [['title'], 'string', 'max' => 20],
            [['description'], 'string', 'max' => 100],
            [['gender'], 'integer'],
            [['teach_time'], 'string'],
            [['is_urgent'], 'boolean'],
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
            'teach_time' => 'Teach Time',
            'is_urgent' => 'Is Urgent',
            'price' => 'Price',
        ];
    }
}