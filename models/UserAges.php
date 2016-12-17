<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "std_user_ages".
 *
 * @property integer $id
 * @property integer $age
 */
class UserAges extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'std_user_ages';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'age'], 'required'],
            [['id', 'age'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'age' => 'Age',
        ];
    }

    /**
     * @inheritdoc
     * @return UserAgesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new UserAgesQuery(get_called_class());
    }
}
