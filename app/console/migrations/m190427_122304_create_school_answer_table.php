<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%school_answer}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%school_question}}`
 */
class m190427_122304_create_school_answer_table extends Migration
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
        $this->createTable('{{%school_answer}}', [
            'id' => $this->primaryKey(),
            'text'=>$this->text()->notNull(),
            'question_id' => $this->integer()->notNull(),

        ],$tableOptions);

        // creates index for column `question_id`
        $this->createIndex(
            '{{%idx-school_answer-question_id}}',
            '{{%school_answer}}',
            'question_id'
        );

        // add foreign key for table `{{%school_question}}`
        $this->addForeignKey(
            '{{%fk-school_answer-question_id}}',
            '{{%school_answer}}',
            'question_id',
            '{{%school_question}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%school_question}}`
        $this->dropForeignKey(
            '{{%fk-school_answer-question_id}}',
            '{{%school_answer}}'
        );

        // drops index for column `question_id`
        $this->dropIndex(
            '{{%idx-school_answer-question_id}}',
            '{{%school_answer}}'
        );

        $this->dropTable('{{%school_answer}}');
    }
}
