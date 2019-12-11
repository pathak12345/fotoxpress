<?php

use yii\db\Migration;

class m170710_095514_add_user_admin extends Migration
{
    public function safeUp()
    {
        $this->insert('user', [
			'username' => 'admin',
			'password_hash' => '$2y$13$f.4XCpKSVfOJ8BBtYLmzoefa4mQQDy5inb4Iy5khKsVDQ2eljzBYi',
            'email' => 'ravindra@fierydevs.com',
			'created_at' => time(),
			'updated_at' => time(),
		]);
    }

    public function safeDown()
    {
        echo "m170710_095514_add_user_admin cannot be reverted.\n";

        return false;
    }
}
