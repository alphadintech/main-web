<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%report}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%use_case}}`
 * - `{{%tester_device}}`
 */
class m190328_084545_create_report_table extends Migration
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
        $this->createTable('{{%report}}', [
            'id' => $this->primaryKey(),
            'use_case_id' => $this->integer(),
            'tester_device_id' => $this->integer(),
            'title' => $this->integer(),
            'description' => $this->text(),
            'suggestion' => $this->text(),
            'is_success' => $this->smallInteger(),
            'rate' => $this->integer(),

            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'updated_at' => $this->integer()->notNull(),
            'created_at' => $this->integer()->notNull()
        ],$tableOptions);

        // creates index for column `use_case_id`
        $this->createIndex(
            '{{%idx-report-use_case_id}}',
            '{{%report}}',
            'use_case_id'
        );

        // add foreign key for table `{{%use_case}}`
        $this->addForeignKey(
            '{{%fk-report-use_case_id}}',
            '{{%report}}',
            'use_case_id',
            '{{%use_case}}',
            'id',
            'CASCADE'
        );

        // creates index for column `tester_device_id`
        $this->createIndex(
            '{{%idx-report-tester_device_id}}',
            '{{%report}}',
            'tester_device_id'
        );

        // add foreign key for table `{{%tester_device}}`
        $this->addForeignKey(
            '{{%fk-report-tester_device_id}}',
            '{{%report}}',
            'tester_device_id',
            '{{%tester_device}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%use_case}}`
        $this->dropForeignKey(
            '{{%fk-report-use_case_id}}',
            '{{%report}}'
        );

        // drops index for column `use_case_id`
        $this->dropIndex(
            '{{%idx-report-use_case_id}}',
            '{{%report}}'
        );

        // drops foreign key for table `{{%tester_device}}`
        $this->dropForeignKey(
            '{{%fk-report-tester_device_id}}',
            '{{%report}}'
        );

        // drops index for column `tester_device_id`
        $this->dropIndex(
            '{{%idx-report-tester_device_id}}',
            '{{%report}}'
        );

        $this->dropTable('{{%report}}');
    }
}
