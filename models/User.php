<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%std_user}}".
 *
 * @property integer $id
 * @property string $username
 * @property string $name
 * @property string $surname
 * @property string $password
 * @property string $salt
 * @property string $access_token
 * @property string $create_date
 */
class User extends \yii\db\ActiveRecord
{
    public $rememberMe;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%std_user}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'name', 'surname', 'password', 'salt'], 'required'],
            [['create_date'], 'safe'],
            [['username'], 'string', 'max' => 128],
            [['name', 'surname'], 'string', 'max' => 45],
            [['password', 'salt', 'access_token'], 'string', 'max' => 255],
            [['username'], 'unique'],
            [['access_token'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'name' => 'Name',
            'surname' => 'Surname',
            'password' => 'Password',
            'salt' => 'Salt',
            'access_token' => 'Access Token',
            'create_date' => 'Create Date',
        ];
    }

    /**
     * @inheritdoc
     * @return UserQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new UserQuery(get_called_class());
    }

    public function login()
    {
        return $this->hasOne(
            UserAges::className(), ["user_id" => "id"]
        );
    }
}
