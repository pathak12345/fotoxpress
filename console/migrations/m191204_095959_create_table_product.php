<?php

use yii\db\Migration;

class m191204_095959_create_table_product extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%product}}', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer(),
            'name' => $this->string()->notNull(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer()

        ], $tableOptions);

        $this->addForeignKey("fk_product_category", "product", "category_id", "category", "id", "SET NULL", "SET NULL");

    }

    public function safeDown()
    {
        $this->dropForeignKey("fk_product_category", "product");
        $this->dropTable('category');
    }
}
