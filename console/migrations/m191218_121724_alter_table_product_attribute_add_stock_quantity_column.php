<?php

use yii\db\Migration;

class m191218_121724_alter_table_product_attribute_add_stock_quantity_column extends Migration
{
    public function safeUp()
    {

    }

    public function safeDown()
    {
        echo "m191218_121724_alter_table_product_attribute_add_stock_quantity_column cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191218_121724_alter_table_product_attribute_add_stock_quantity_column cannot be reverted.\n";

        return false;
    }
    */
}
