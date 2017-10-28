<?php
/**
 * Created by PhpStorm.
 * User: Vam
 * Date: 2017/3/16
 * Time: 13:55
 */

namespace app\models;


use yii\db\ActiveRecord;

class Teacher extends ActiveRecord
{
    public static function tableName()
    {
        return 'teacher';
    }

    public function fields()
    {
        return [
            'id',
            'u_id',
            'star',
            'major',
            'education',
            'describe',
        ];
    }

    public function rules()
    {
        return [
            [['major'] ,'string', 'max' => 10],
            [['describe'], 'string', 'max' => 200],
            [['star'], 'integer'],
            [['education'], 'integer'],
            [['u_id'], 'integer'],
            [['major', 'education', 'u_id'], 'required'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'u_id' => 'User ID',
            'describe' => 'Describe',
            'major' => 'Major',
            'star' => 'Star',
            'education' => 'Education',
        ];
    }

    public static function findIdentity($id)
    {
        $tea = Teacher::find()
            ->where(['id' => $id])
            ->asArray()
            ->one();

        if ($tea) {
            return new static($tea);
        }

        return null;
    }

    public static function findByUID($uid){
        $tea = Teacher::find()
            ->where(['u_id' => $uid])
            ->asArray()
            ->one();

        if ($tea) {
            return new static($tea);
        }

        return null;
    }

}