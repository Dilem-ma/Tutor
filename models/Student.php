<?php
/**
 * Created by PhpStorm.
 * User: Vam
 * Date: 2017/3/16
 * Time: 13:55
 */

namespace app\models;


use yii\db\ActiveRecord;

class Student extends ActiveRecord
{
    public static function tableName()
    {
        return 'student';
    }

    public function fields()
    {
        return [
            'id',
            'u_id',
            'grade',
            'describe'
        ];
    }

    public function rules()
    {
        return [
            [['u_id'], 'integer'],
            [['grade'], 'integer'],
            [['describe'], 'string', 'max' => 200],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'u_id' => 'User ID',
            'grade' => 'Grade',
            'describe' => 'Describe',
        ];
    }

    public static function findIdentity($id)
    {
        $stu = Student::find()
            ->where(['id' => $id])
            ->asArray()
            ->one();

        if ($stu) {
            return new static($stu);
        }

        return null;
    }

    public static function findByUID($uid)
    {
        $stu = Student::find()
            ->where(['u_id' => $uid])
            ->asArray()
            ->one();

        if ($stu){
            return new static($stu);
        }
    }

}