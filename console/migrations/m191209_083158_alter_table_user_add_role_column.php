<?php

use yii\db\Migration;

class m191209_083158_alter_table_user_add_role_column extends Migration
{
    public function safeUp()
    {
        $this->addColumn("user", "role", "SMALLINT(4) AFTER `name`");
    }

    public function safeDown()
    {
        
    }
}
