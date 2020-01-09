<?php

use yii\db\Migration;

class m200109_115754_alter_table_product_media_id_column_product_description_column_deliver_instruction_column_care_instuction_column_and_price_column extends Migration
{
    public function safeUp()
    {
        $this->addColumn("product", "media_id", $this->integer());
        $this->addForeignKey("fk_product_media", "product", "media_id", "media", "id", "CASCADE", "SET NULL");

        $this->addColumn("product", "description", $this->text());
        $this->addColumn("product", "delivery_information", $this->text());
        $this->addColumn("product", "care_instruction", $this->text());
    }

    public function safeDown()
    {
        
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200109_115754_alter_table_product_media_id_column_product_description_column_deliver_instruction_column_care_instuction_column_and_price_column cannot be reverted.\n";

        return false;
    }
    */
}
