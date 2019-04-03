<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%use_case}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%scenario}}`
 */
class m190328_084005_create_use_case_table extends Migration
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
        $this->createTable('{{%use_case}}', [
            'id' => $this->primaryKey(),
            'scenario_id' => $this->integer(),
            'title' => $this->string(),
            'description' => $this->text(),
            'count' => $this->integer(),

            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'updated_at' => $this->integer()->notNull(),
            'created_at' => $this->integer()->notNull()
        ],$tableOptions);

        // creates index for column `scenario_id`
        $this->createIndex(
            '{{%idx-use_case-scenario_id}}',
            '{{%use_case}}',
            'scenario_id'
        );

        // add foreign key for table `{{%scenario}}`
        $this->addForeignKey(
            '{{%fk-use_case-scenario_id}}',
            '{{%use_case}}',
            'scenario_id',
            '{{%scenario}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%scenario}}`
        $this->dropForeignKey(
            '{{%fk-use_case-scenario_id}}',
            '{{%use_case}}'
        );

        // drops index for column `scenario_id`
        $this->dropIndex(
            '{{%idx-use_case-scenario_id}}',
            '{{%use_case}}'
        );

        $this->dropTable('{{%use_case}}');
    }
}
