<?php

use yii\db\Migration;

class m170805_055433_alter_table_user_add_app_password_field extends Migration
{
    public function safeUp()
    {
        $this->addColumn("user", 'app_password', 'VARCHAR(255) after password_hash');
    }

    public function safeDown()
    {
        
    }
}
