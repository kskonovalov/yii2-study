<?php

use yii\db\Migration;

class m161211_100821_users extends Migration
{

    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
        $this->execute(file_get_contents(__DIR__ . '/yii2_study_1.sql'));
    }

    public function safeDown()
    {
    }
}
