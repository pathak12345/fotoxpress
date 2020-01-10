<?php

use yii\db\Migration;

class m200110_121950_alter_table_product_change_media_foreign_key_contraint extends Migration
{
    public function safeUp()
    {
        $this->dropForeignKey("fk_product_media", "product");
        $this->addForeignKey("fk_product_media", "product", "media_id", "media", "id", "SET NULL", "SET NULL");
    }

    public function safeDown()
    {
        echo "m200110_121950_alter_table_product_change_media_foreign_key_contraint cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200110_121950_alter_table_product_change_media_foreign_key_contraint cannot be reverted.\n";

        return false;
    }
    */
}
