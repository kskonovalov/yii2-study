<?php
/**
 * Created by PhpStorm.
 * User: konstantin
 * Date: 11.12.16
 * Time: 12.16
 */

namespace app\models;
use yii\base\Model;

class Test extends Model
{
    public $title;
    public $content;
    public $name;

    public function rules()
    {
        return [
            ["title",
            "content",
            "name"], 'safe'
        ];
    }


}