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
            'name',
            'star',
            'image',
        ];
    }

    public function rules()
    {
        return [
            [['name', 'phone', 'image'], 'required'],
            [['name', 'phone'], 'unique'],
            [['name'], 'string', 'max' => 10],
            [['phone'], 'string', 'max' => 20],
            [['birthday'], 'string', 'max' => 10],
            [['major'], 'string', 'max' => 10],
            //[['grade'], 'integer'],
            [['gender'], 'integer'],
            // [['area'], 'integer'],
            [['describe'], 'string', 'max' => 200],
            [['image'], 'string', 'max' => 200],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'phone' => 'Phone',
            'gender' => 'Gender',
            //'grade' => 'Grade',
            // 'area' => 'Area',
            'birthday' => 'Birthday',
            'describe' => 'Describe',

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

    public static function findByUsername($username){
        $tea = Teacher::find()
            ->where(['name' => $username])
            ->asArray()
            ->one();

        if ($tea) {
            return new static($tea);
        }

        return null;
    }

    public static function findByPhone($phone){
        $tea = Teacher::find()
            ->where(['phone' => $phone])
            ->asArray()
            ->one();

        if ($tea) {
            return new static($tea);
        }

        return null;
    }

}