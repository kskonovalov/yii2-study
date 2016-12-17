<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "drugs".
 *
 * @property integer $id
 * @property string $url
 * @property string $title
 * @property string $latin
 * @property string $pokazaniya
 * @property string $protivopokazaniya
 * @property string $beremennost
 * @property string $pobochnye
 * @property integer $homeopathy
 * @property string $content
 * @property integer $status
 */
class Drugs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'drugs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['url', 'title', 'latin', 'pokazaniya', 'protivopokazaniya', 'beremennost', 'pobochnye', 'content'], 'required'],
            [['pokazaniya', 'protivopokazaniya', 'beremennost', 'pobochnye', 'content'], 'string'],
            [['homeopathy', 'status'], 'integer'],
            [['url', 'title', 'latin'], 'string', 'max' => 500],
            [['url'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'url' => 'Url',
            'title' => 'Title',
            'latin' => 'Latin',
            'pokazaniya' => 'Pokazaniya',
            'protivopokazaniya' => 'Protivopokazaniya',
            'beremennost' => 'Beremennost',
            'pobochnye' => 'Pobochnye',
            'homeopathy' => 'Homeopathy',
            'content' => 'Content',
            'status' => 'Status',
        ];
    }

    /**
     * @inheritdoc
     * @return DrugsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new DrugsQuery(get_called_class());
    }
}
