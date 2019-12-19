<?php

use yii\db\Migration;

class m191219_073326_alter_table_product_attribute_add_media_id_column extends Migration
{
    public function safeUp()
    {

        $this->addColumn("product_attribute", "media_id", $this->integer());
        $this->addForeignKey("fk_product_attribute_media", "product_attribute", "media_id", "media", "id", "CASCADE", "SET NULL");
    }

    public function safeDown()
    {
        $this->dropForeignKey("fk_product_attribute_media", "product_attribute");
        $this->dropColumn("media_id");
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191219_073326_alter_table_product_attribute_add_media_id_column cannot be reverted.\n";

        return false;
    }
    */
}
