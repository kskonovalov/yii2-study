<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[UserAges]].
 *
 * @see UserAges
 */
class UserAgesQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return UserAges[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return UserAges|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
