<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tester_type}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%type}}`
 * - `{{%user}}`
 */
class m190328_074921_create_tester_type_table extends Migration
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
        $this->createTable('{{%tester_type}}', [
            'id' => $this->primaryKey(),
            'type_id' => $this->integer(),
            'user_id' => $this->integer(),
        ],$tableOptions);

        // creates index for column `type_id`
        $this->createIndex(
            '{{%idx-tester_type-type_id}}',
            '{{%tester_type}}',
            'type_id'
        );

        // add foreign key for table `{{%type}}`
        $this->addForeignKey(
            '{{%fk-tester_type-type_id}}',
            '{{%tester_type}}',
            'type_id',
            '{{%type}}',
            'id',
            'CASCADE'
        );

        // creates index for column `user_id`
        $this->createIndex(
            '{{%idx-tester_type-user_id}}',
            '{{%tester_type}}',
            'user_id'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-tester_type-user_id}}',
            '{{%tester_type}}',
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
        // drops foreign key for table `{{%type}}`
        $this->dropForeignKey(
            '{{%fk-tester_type-type_id}}',
            '{{%tester_type}}'
        );

        // drops index for column `type_id`
        $this->dropIndex(
            '{{%idx-tester_type-type_id}}',
            '{{%tester_type}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-tester_type-user_id}}',
            '{{%tester_type}}'
        );

        // drops index for column `user_id`
        $this->dropIndex(
            '{{%idx-tester_type-user_id}}',
            '{{%tester_type}}'
        );

        $this->dropTable('{{%tester_type}}');
    }
}
