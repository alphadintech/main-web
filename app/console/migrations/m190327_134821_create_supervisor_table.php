<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%supervisor}}`.
 */
class m190327_134821_create_supervisor_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%supervisor}}', [
            'user_id' => $this->integer()->notNull()->unique(),
            'username' => $this->string()->notNull()->unique(),

            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'updated_at' => $this->integer(),
            'created_at' => $this->integer()
        ],$tableOptions);
        $this->addPrimaryKey('user-id_pk','{{%supervisor}}','user_id');

        // creates index for column `user_id`
        $this->createIndex(
            '{{%idx-supervisor-user_id}}',
            '{{%supervisor}}',
            'user_id'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-supervisor-user_id}}',
            '{{%supervisor}}',
            'user_id',
            '{{%user}}',
            'id',
            'CASCADE'
        );
    }


    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-supervisor-user_id}}',
            '{{%supervisor}}'
        );

        // drops index for column `user_id`
        $this->dropIndex(
            '{{%idx-supervisor-user_id}}',
            '{{%supervisor}}'
        );

        $this->dropTable('{{%supervisor}}');
    }
}
