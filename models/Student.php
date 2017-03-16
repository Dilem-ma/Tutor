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

    public function rules()
    {
        return [
            [['name', 'phone', 'gender', 'grade'], 'required'],
            [['name', 'phone'], 'unique'],
            [['name'], 'string', 'max' => 10],
            [['phone'], 'string', 'max' => 20],
            [['grade'], 'integer'],
            [['gender'], 'integer'],
            [['area'], 'integer'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'phone' => 'Phone',
            'gender' => 'Gender',
            'grade' => 'Grade',
            'area' => 'Area',
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

    public static function findByUsername($username){
        $stu = Student::find()
            ->where(['name' => $username])
            ->asArray()
            ->one();

        if ($stu) {
            return new static($stu);
        }

        return null;
    }

    public static function findByPhone($phone){
        $stu = Student::find()
            ->where(['phone' => $phone])
            ->asArray()
            ->one();

        if ($stu) {
            return new static($stu);
        }

        return null;
    }

}