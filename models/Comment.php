<?php
/**
 * Created by PhpStorm.
 * User: №zero
 * Date: 2017/11/6
 * Time: 16:38
 */

namespace app\models;


use yii\db\ActiveRecord;

class Comment extends ActiveRecord
{
    public static function tableName()
    {
        return 'comment';
    }

    public function fields()
    {
        return [
            'id',
            'o_id',
            't_id',
            'u_id',
            'content',
            'date',
            'star',
        ];
    }

    public function rules()
    {
        return [
            [['o_id', 't_id', 'u_id', 'star'], 'integer'],
            [['content'], 'string', 'max' => 140],
            [['o_id', 't_id', 'u_id', 'content', 'star'], 'required', 'on' => 'add_comment'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'o_id' => 'Order ID',
            't_id' => 'Teacher ID',
            'u_id' => 'User ID',
            'content' => 'Content',
        ];
    }
}