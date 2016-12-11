<?php
/**
 * Created by PhpStorm.
 * User: konstantin
 * Date: 11.12.16
 * Time: 11.23
 */

namespace app\components;

class myComponent extends \yii\base\Component
{
    public $a;
    public $b;

    /**
     * @return mixed
     */
    public function getA()
    {
        return $this->a;
    }

    /**
     * @param mixed $a
     */
    public function setA($a)
    {
        $this->a = $a;
    }

    /**
     * @return mixed
     */
    public function getB()
    {
        return $this->b;
    }

    /**
     * @param mixed $b
     */
    public function setB($b)
    {
        $this->b = $b;
    }

    public function calculate()
    {
        return $this->a + $this->b;
    }
}