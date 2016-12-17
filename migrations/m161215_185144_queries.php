<?php

use yii\db\Migration;

class m161215_185144_queries extends Migration
{
    public function safeUp()
    {
        $this->createTable("std_user_ages",
            [
                "user_id" => $this->primaryKey(),
                "age" => \yii\db\Schema::TYPE_INTEGER
            ]
        );
    }

    public function safeDown()
    {
        $this->dropTable("std_user_ages");
    }
}
