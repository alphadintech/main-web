<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tester_media_form}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 */
class m190529_133243_create_tester_media_form_table extends Migration
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
        $this->createTable('{{%tester_media_form}}', [
            'id' => $this->primaryKey(),
            'user_id'=>$this->integer(),
            'q1' => $this->integer()->defaultValue(0),
            'q2' => $this->integer()->defaultValue(0),
            'q3' => $this->integer()->defaultValue(0),
            'q4' => $this->integer()->defaultValue(0),
            'q5' => $this->integer()->defaultValue(0),
            'q6' => $this->integer()->defaultValue(0),
            'q7' => $this->integer()->defaultValue(0),
            'q8' => $this->text(),
        ],$tableOptions);

        // creates index for column `user_id`
        $this->createIndex(
            '{{%idx-tester_media_form-user_id}}',
            '{{%tester_media_form}}',
            'user_id'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-tester_media_form-user_id}}',
            '{{%tester_media_form}}',
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
            '{{%fk-tester_media_form-user_id}}',
            '{{%tester_media_form}}'
        );

        // drops index for column `user_id`
        $this->dropIndex(
            '{{%idx-tester_media_form-user_id}}',
            '{{%tester_media_form}}'
        );

        $this->dropTable('{{%tester_media_form}}');
    }
}
