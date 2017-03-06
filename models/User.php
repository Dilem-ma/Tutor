<?php
namespace app\models;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;
class User extends ActiveRecord implements IdentityInterface
{
    public $id;
    public $username;
    public $password;
    public $url;
    public $authKey;
    public $accessToken;

    public static function tableName()
    {
        return 'User';
    }

    public function rules()
    {
        return [
            [['username', 'password'], 'required'],
            [['username', 'password'], 'string', 'max' => 11]
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
            'accessToken' => 'Access Token'
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
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->password === $password;
    }
}