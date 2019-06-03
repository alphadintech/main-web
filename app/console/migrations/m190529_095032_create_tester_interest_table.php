<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tester_interest}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 * - `{{%interest}}`
 */
class m190529_095032_create_tester_interest_table extends Migration
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
        $this->createTable('{{%tester_interest}}', [
            'id' => $this->primaryKey(),
            'user_id'=>$this->integer(),
            'interest_id'=>$this->integer(),
        ],$tableOptions);

        // creates index for column `user_id`
        $this->createIndex(
            '{{%idx-tester_interest-user_id}}',
            '{{%tester_interest}}',
            'user_id'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-tester_interest-user_id}}',
            '{{%tester_interest}}',
            'user_id',
            '{{%user}}',
            'id',
            'CASCADE'
        );

        // creates index for column `interest_id`
        $this->createIndex(
            '{{%idx-tester_interest-interest_id}}',
            '{{%tester_interest}}',
            'interest_id'
        );

        // add foreign key for table `{{%interest}}`
        $this->addForeignKey(
            '{{%fk-tester_interest-interest_id}}',
            '{{%tester_interest}}',
            'interest_id',
            '{{%interest}}',
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
            '{{%fk-tester_interest-user_id}}',
            '{{%tester_interest}}'
        );

        // drops index for column `user_id`
        $this->dropIndex(
            '{{%idx-tester_interest-user_id}}',
            '{{%tester_interest}}'
        );

        // drops foreign key for table `{{%interest}}`
        $this->dropForeignKey(
            '{{%fk-tester_interest-interest_id}}',
            '{{%tester_interest}}'
        );

        // drops index for column `interest_id`
        $this->dropIndex(
            '{{%idx-tester_interest-interest_id}}',
            '{{%tester_interest}}'
        );

        $this->dropTable('{{%tester_interest}}');
    }
}
