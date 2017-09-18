<?php
/**
 * Created by PhpStorm.
 * User: radik
 * Date: 9/15/17
 * Time: 10:42 AM
 */

namespace app\models;
use Yii;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

class Admin extends ActiveRecord implements IdentityInterface
{

    public function rules()
    {
        return [
            ['id', 'number'],
            ['email', 'unique'],
            ['password', 'string']
        ];
    }

    public static function tableName()
    {
        return '{{admins}}';
    }


    public static function findIdentity($id)
    {
        return Admin::findOne($id);
    }


    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }


    public function getId()
    {
        return $this->id;
    }


    public function getAuthKey()
    {
        return $this->auth_key;
    }

    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    public static function findByEmail($email)
    {
        return Admin::find()->where(['email'=>$email])->one();
    }

    public function validatePassword($password)
    {
        return Yii::$app->getSecurity()->validatePassword($password, $this->password);
//        return Security::validatePassword($password, $this->password_hash);
//        return ($this->password === $password) ? true : false;
    }

    public function beforeSave($insert) {
        if(isset($this->password))
            $this->password = Yii::$app->getSecurity()->generatePasswordHash($this->password);
        return parent::beforeSave($insert);
    }

}