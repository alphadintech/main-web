<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%media_report}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%media}}`
 * - `{{%report}}`
 */
class m190328_085138_create_media_report_table extends Migration
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
        $this->createTable('{{%media_report}}', [
            'id' => $this->primaryKey(),
            'media_id' => $this->integer(),
            'report_id' => $this->integer(),
        ],$tableOptions);

        // creates index for column `media_id`
        $this->createIndex(
            '{{%idx-media_report-media_id}}',
            '{{%media_report}}',
            'media_id'
        );

        // add foreign key for table `{{%media}}`
        $this->addForeignKey(
            '{{%fk-media_report-media_id}}',
            '{{%media_report}}',
            'media_id',
            '{{%media}}',
            'id',
            'CASCADE'
        );

        // creates index for column `report_id`
        $this->createIndex(
            '{{%idx-media_report-report_id}}',
            '{{%media_report}}',
            'report_id'
        );

        // add foreign key for table `{{%report}}`
        $this->addForeignKey(
            '{{%fk-media_report-report_id}}',
            '{{%media_report}}',
            'report_id',
            '{{%report}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%media}}`
        $this->dropForeignKey(
            '{{%fk-media_report-media_id}}',
            '{{%media_report}}'
        );

        // drops index for column `media_id`
        $this->dropIndex(
            '{{%idx-media_report-media_id}}',
            '{{%media_report}}'
        );

        // drops foreign key for table `{{%report}}`
        $this->dropForeignKey(
            '{{%fk-media_report-report_id}}',
            '{{%media_report}}'
        );

        // drops index for column `report_id`
        $this->dropIndex(
            '{{%idx-media_report-report_id}}',
            '{{%media_report}}'
        );

        $this->dropTable('{{%media_report}}');
    }
}
