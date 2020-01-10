<?php

use yii\db\Migration;

class m200110_053237_create_table_product extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        
        $this->createTable("product",[
            'id' => $this->primaryKey(),
            'category_id' => $this->integer(),
            'media_id' => $this->integer(),
            'name' => $this->string()->notNull(),
            'description' => $this->text(),

            'stock_quantity' => $this->integer()->defaultValue(0),
            'purchase_cost' => $this->float(),
            'selling_price' => $this->float(),

            'max_height' => $this->integer(),
            'max_width' => $this->integer(),

            'delivery_information' => $this->text(),
            'care_instruction' => $this->text(),

            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer()
            ], $tableOptions);

        $this->addForeignKey("fk_product_category", "product", "category_id", "category", "id", "SET NULL", "SET NULL");
        $this->addForeignKey("fk_product_media", "product", "media_id", "media", "id", "CASCADE", "SET NULL");
    }

    public function safeDown()
    {
        
    }
}
