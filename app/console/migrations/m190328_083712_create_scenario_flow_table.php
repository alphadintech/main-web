<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%scenario_flow}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%scenario}}`
 * - `{{%flow}}`
 */
class m190328_083712_create_scenario_flow_table extends Migration
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
        $this->createTable('{{%scenario_flow}}', [
            'id' => $this->primaryKey(),
            'scenario_id' => $this->integer(),
            'flow_id' => $this->integer(),
            'parent' => $this->integer(),
            'name' => $this->string(),

            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'updated_at' => $this->integer()->notNull(),
            'created_at' => $this->integer()->notNull()
        ],$tableOptions);

        // creates index for column `scenario_id`
        $this->createIndex(
            '{{%idx-scenario_flow-scenario_id}}',
            '{{%scenario_flow}}',
            'scenario_id'
        );

        // add foreign key for table `{{%scenario}}`
        $this->addForeignKey(
            '{{%fk-scenario_flow-scenario_id}}',
            '{{%scenario_flow}}',
            'scenario_id',
            '{{%scenario}}',
            'id',
            'CASCADE'
        );

        // creates index for column `flow_id`
        $this->createIndex(
            '{{%idx-scenario_flow-flow_id}}',
            '{{%scenario_flow}}',
            'flow_id'
        );

        // add foreign key for table `{{%flow}}`
        $this->addForeignKey(
            '{{%fk-scenario_flow-flow_id}}',
            '{{%scenario_flow}}',
            'flow_id',
            '{{%flow}}',
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
            '{{%fk-scenario_flow-scenario_id}}',
            '{{%scenario_flow}}'
        );

        // drops index for column `scenario_id`
        $this->dropIndex(
            '{{%idx-scenario_flow-scenario_id}}',
            '{{%scenario_flow}}'
        );

        // drops foreign key for table `{{%flow}}`
        $this->dropForeignKey(
            '{{%fk-scenario_flow-flow_id}}',
            '{{%scenario_flow}}'
        );

        // drops index for column `flow_id`
        $this->dropIndex(
            '{{%idx-scenario_flow-flow_id}}',
            '{{%scenario_flow}}'
        );

        $this->dropTable('{{%scenario_flow}}');
    }
}
