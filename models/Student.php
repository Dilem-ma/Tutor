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
            [['name', 'phone', 'birthday'], 'required'],
            [['name', 'phone'], 'unique'],
            [['name'], 'string', 'max' => 10],
            [['phone'], 'string', 'max' => 20],
            [['birthday'], 'string', 'max' => 10],
            [['grade'], 'integer'],
            [['gender'], 'integer'],
            [['area'], 'integer'],
            [['describe'], 'string', 'max' => 200],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'phone' => 'Phone',
            'birthday' => 'Birthday',
            'gender' => 'Gender',
            'grade' => 'Grade',
            'area' => 'Area',
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