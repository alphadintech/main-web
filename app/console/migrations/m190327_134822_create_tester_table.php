<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tester}}`.
 */
class m190327_134822_create_tester_table extends Migration
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
        $this->createTable('{{%tester}}', [
            'user_id' => $this->integer()->notNull()->unique(),
            'name' => $this->string(),
            'avatar_id'=>$this->integer(),
            'family' => $this->string(),
            'nationality_code' => $this->integer()->unique(),
            'gender' => $this->smallInteger(),

            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'updated_at' => $this->integer(),
            'created_at' => $this->integer()
        ],$tableOptions);
        $this->addPrimaryKey('user-id_pk','{{%tester}}','user_id');

        // creates index for column `user_id`
        $this->createIndex(
            '{{%idx-tester-user_id}}',
            '{{%tester}}',
            'user_id'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-tester-user_id}}',
            '{{%tester}}',
            'user_id',
            '{{%user}}',
            'id',
            'CASCADE'
        );

        // creates index for column `avatar_id`
        $this->createIndex(
            '{{%idx-tester-avatar_id}}',
            '{{%tester}}',
            'avatar_id'
        );

        // add foreign key for table `{{%media}}`
        $this->addForeignKey(
            '{{%fk-tester-avatar_id}}',
            '{{%tester}}',
            'avatar_id',
            '{{%media}}',
            'id',
            'RESTRICT'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%media}}`
        $this->dropForeignKey(
            '{{%fk-tester-avatar_id}}',
            '{{%media}}'
        );

        // drops index for column `avatar_id`
        $this->dropIndex(
            '{{%idx-tester-avatar_id}}',
            '{{%tester}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-tester-user_id}}',
            '{{%tester}}'
        );

        // drops index for column `user_id`
        $this->dropIndex(
            '{{%idx-tester-user_id}}',
            '{{%tester}}'
        );

        $this->dropTable('{{%tester}}');
    }
}
