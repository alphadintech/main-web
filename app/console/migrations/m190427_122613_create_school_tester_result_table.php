<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%school_tester_result}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 * - `{{%school_tree}}`
 */
class m190427_122613_create_school_tester_result_table extends Migration
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

        $this->createTable('{{%school_tester_result}}', [
            'id' => $this->primaryKey(),
            'tester_id' => $this->integer()->notNull(),
            'section_id' => $this->integer()->notNull(),
            'result' => $this->string(),
            'time' => $this->integer(),

            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'updated_at' => $this->integer(),
            'created_at' => $this->integer()
        ],$tableOptions);

        // creates index for column `tester_id`
        $this->createIndex(
            '{{%idx-school_tester_result-tester_id}}',
            '{{%school_tester_result}}',
            'tester_id'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-school_tester_result-tester_id}}',
            '{{%school_tester_result}}',
            'tester_id',
            '{{%user}}',
            'id',
            'CASCADE'
        );

        // creates index for column `section_id`
        $this->createIndex(
            '{{%idx-school_tester_result-section_id}}',
            '{{%school_tester_result}}',
            'section_id'
        );

        // add foreign key for table `{{%school_tree}}`
        $this->addForeignKey(
            '{{%fk-school_tester_result-section_id}}',
            '{{%school_tester_result}}',
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
        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-school_tester_result-tester_id}}',
            '{{%school_tester_result}}'
        );

        // drops index for column `tester_id`
        $this->dropIndex(
            '{{%idx-school_tester_result-tester_id}}',
            '{{%school_tester_result}}'
        );

        // drops foreign key for table `{{%school_tree}}`
        $this->dropForeignKey(
            '{{%fk-school_tester_result-section_id}}',
            '{{%school_tester_result}}'
        );

        // drops index for column `section_id`
        $this->dropIndex(
            '{{%idx-school_tester_result-section_id}}',
            '{{%school_tester_result}}'
        );

        $this->dropTable('{{%school_tester_result}}');
    }
}
