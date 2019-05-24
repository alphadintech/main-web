<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tester_language}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 * - `{{%language}}`
 */
class m190515_135921_create_tester_language_table extends Migration
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
        $this->createTable('{{%tester_language}}', [
            'id' => $this->primaryKey(),
            'tester_id' => $this->integer(),
            'language_id' => $this->integer(),
            'read_rate' => $this->integer(),
            'write_rate' => $this->integer(),
            'speak_rate' => $this->integer(),

        ],$tableOptions);

        // creates index for column `tester_id`
        $this->createIndex(
            '{{%idx-tester_language-tester_id}}',
            '{{%tester_language}}',
            'tester_id'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-tester_language-tester_id}}',
            '{{%tester_language}}',
            'tester_id',
            '{{%user}}',
            'id',
            'CASCADE'
        );

        // creates index for column `language_id`
        $this->createIndex(
            '{{%idx-tester_language-language_id}}',
            '{{%tester_language}}',
            'language_id'
        );

        // add foreign key for table `{{%language}}`
        $this->addForeignKey(
            '{{%fk-tester_language-language_id}}',
            '{{%tester_language}}',
            'language_id',
            '{{%language}}',
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
            '{{%fk-tester_language-tester_id}}',
            '{{%tester_language}}'
        );

        // drops index for column `tester_id`
        $this->dropIndex(
            '{{%idx-tester_language-tester_id}}',
            '{{%tester_language}}'
        );

        // drops foreign key for table `{{%language}}`
        $this->dropForeignKey(
            '{{%fk-tester_language-language_id}}',
            '{{%tester_language}}'
        );

        // drops index for column `language_id`
        $this->dropIndex(
            '{{%idx-tester_language-language_id}}',
            '{{%tester_language}}'
        );

        $this->dropTable('{{%tester_language}}');
    }
}
