<?php

use yii\db\Migration;

class m191219_070015_create_table_media extends Migration
{
    public function safeUp()
    {

        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        
        $this->createTable("media",[
            'id' => $this->primaryKey(),
            'media_type' => $this->smallInteger(4),
            'alt' => $this->string(255),
            'file_name' => $this->string(255),
            'file_type' => $this->string(45),
            'file_size' => $this->integer(11),
            'created_at' => $this->integer(11),
            'updated_at' => $this->integer(11),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('media');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191219_070015_create_table_media cannot be reverted.\n";

        return false;
    }
    */
}
