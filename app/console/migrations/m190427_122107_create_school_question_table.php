<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%school_question}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%school_tree}}`
 * - `{{%school_answer}}`
 */
class m190427_122107_create_school_question_table extends Migration
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
        $this->createTable('{{%school_question}}', [
            'id' => $this->primaryKey(),
            'question' => $this->text()->notNull(),
            'section_id' => $this->integer()->notNull(),

            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'updated_at' => $this->integer(),
            'created_at' => $this->integer()
        ],$tableOptions);

        // creates index for column `section_id`
        $this->createIndex(
            '{{%idx-school_question-section_id}}',
            '{{%school_question}}',
            'section_id'
        );

        // add foreign key for table `{{%school_tree}}`
        $this->addForeignKey(
            '{{%fk-school_question-section_id}}',
            '{{%school_question}}',
            'section_id',
            '{{%school_tree}}',
            'id',
            'CASCADE'
        );


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%school_tree}}`
        $this->dropForeignKey(
            '{{%fk-school_question-section_id}}',
            '{{%school_question}}'
        );

        // drops index for column `section_id`
        $this->dropIndex(
            '{{%idx-school_question-section_id}}',
            '{{%school_question}}'
        );


        $this->dropTable('{{%school_question}}');
    }
}
