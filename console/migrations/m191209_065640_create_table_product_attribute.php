<?php

use yii\db\Migration;

class m191209_065640_create_table_product_attribute extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        
        $this->createTable('{{%product_attribute}}', [
            'id' => $this->primaryKey(),
            'product_id' => $this->integer(),
            'attribute_name' => $this->string(),
            'attribute_value' => $this->string(),
            'purchase_cost' => $this->float(),
            'selling_price' => $this->float(),
            'max_height' => $this->integer(),
            'max_width' => $this->integer(),

        ], $tableOptions);

        $this->addForeignKey("fk_product_attribute_product", "product_attribute", "product_id", "product", "id", "CASCADE", "CASCADE");
    }

    public function safeDown()
    {
        $this->dropForeignKey("fk_product_attribute_product", "product_attribute");
        $this->dropTable('product_attribute');
    }
}
