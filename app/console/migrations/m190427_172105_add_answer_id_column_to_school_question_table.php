<?php

use yii\db\Migration;

/**
 * Handles adding answer_id to table `{{%school_question}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%school_answer}}`
 */
class m190427_172105_add_answer_id_column_to_school_question_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%school_question}}', 'answer_id', $this->integer());

        // creates index for column `answer_id`
        $this->createIndex(
            '{{%idx-school_question-answer_id}}',
            '{{%school_question}}',
            'answer_id'
        );

        // add foreign key for table `{{%school_answer}}`
        $this->addForeignKey(
            '{{%fk-school_question-answer_id}}',
            '{{%school_question}}',
            'answer_id',
            '{{%school_answer}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%school_answer}}`
        $this->dropForeignKey(
            '{{%fk-school_question-answer_id}}',
            '{{%school_question}}'
        );

        // drops index for column `answer_id`
        $this->dropIndex(
            '{{%idx-school_question-answer_id}}',
            '{{%school_question}}'
        );

        $this->dropColumn('{{%school_question}}', 'answer_id');
    }
}
