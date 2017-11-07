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
            'describe',
            'stu_id',
        ];
    }

    public function rules()
    {
        return [
            [['u_id', 'grade', 'school'], 'integer'],
            [['describe'], 'string', 'max' => 200],
            [['stu_id'], 'string'],
            [['u_id', 'grade', 'school', 'stu_id', 'describe'], 'required'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'u_id' => 'User ID',
            'grade' => 'Grade',
            'describe' => 'Describe',
            'stu_id' => 'Student ID',
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