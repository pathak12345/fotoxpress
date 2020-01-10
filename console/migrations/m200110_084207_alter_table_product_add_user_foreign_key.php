<?php

use yii\db\Migration;

class m200110_084207_alter_table_product_add_user_foreign_key extends Migration
{
    public function safeUp()
    {
        $this->addForeignKey("fk_product_created_by_user", "product", "created_by", "user", "id", "CASCADE", "SET NULL");
        $this->addForeignKey("fk_product_updated_by_user", "product", "updated_by", "user", "id", "CASCADE", "SET NULL");
    }

    public function safeDown()
    {
    
    }
}
