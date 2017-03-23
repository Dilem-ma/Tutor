<?php
namespace app\models;

use yii\behaviors\AttributeBehavior;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

class User extends ActiveRecord implements IdentityInterface
{
    public function behaviors()
    {
        return [
            [
                'class' => AttributeBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => 'password',
                    ActiveRecord::EVENT_BEFORE_UPDATE => 'password',
                ],
                'value' => function ($event) {
                    return \Yii::$app->security->generatePasswordHash($this->password);
                },
            ],
        ];
    }

    public static function tableName()
    {
        return 'User';
    }

    public function rules()
    {
        return [
            [['username', 'password'], 'required'],
            [['username', 'password'], 'string'],
            [['username'], 'unique'],
        ];
    }

    public function fields()
    {
        return [
            'id',
            'username',
            'name',
            'birthday',
            'gender',
            'area',
            'url',
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'url' => 'Url',
            'authKey' => 'Auth Key',
            'accessToken' => 'Access Token',
        ];
    }

    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        $user = User::find()
            ->where(['id' => $id])
            ->asArray()
            ->one();

        if ($user) {
            return new static($user);
        }

        return null;
    }
    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        $user = User::find()
            ->where(['accessToken' => $token])
            ->asArray()
            ->one();

        if ($user) {
            return new static($user);
        }

        return null;
    }
    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        $user = User::find()
            ->where(['username' => $username])
            ->asArray()
            ->one();

        if ($user) {
            return new static($user);
        }

        return null;
    }
    public function getUsername(){
        return $this->username;
    }
    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }
    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }
    /**
     * Validates password
     *
     * @param string $pw password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($pw)
    {
        return \Yii::$app->security->validatePassword($pw, $this->password);
    }

    public static function getUser($model)
    {
        $user = null;
        $user = self::findByUsername($model->username);
        if (is_null($user)){
            $model->addError('password', 'Username does not exist.');
        }
        return $user;
    }

    public function login($duration = 0)
    {
        return \Yii::$app->user->login($this, $duration);
    }
}