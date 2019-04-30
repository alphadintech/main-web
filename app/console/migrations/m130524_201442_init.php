<?php

use yii\db\Migration;

class m130524_201442_init extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string()->unique(),
            'email' => $this->string()->notNull()->unique(),


            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ], $tableOptions);



    }

    public function down()
    {
        // drops foreign key for table `{{%media}}`
        $this->dropForeignKey(
            '{{%fk-user-avatar_id}}',
            '{{%media}}'
        );

        // drops index for column `avatar_id`
        $this->dropIndex(
            '{{%idx-user-avatar_id}}',
            '{{%user}}'
        );

        $this->dropTable('{{%user}}');
    }
}
