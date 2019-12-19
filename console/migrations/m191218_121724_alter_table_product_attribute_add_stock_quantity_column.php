<?php

use yii\db\Migration;

class m191218_121724_alter_table_product_attribute_add_stock_quantity_column extends Migration
{
    public function safeUp()
    {
        $this->addColumn("product_attribute", "stock_quantity", "INTEGER(11) DEFAULT 0");
    }

    public function safeDown()
    {
        
    }
}
