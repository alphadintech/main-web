<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%flow}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%project}}`
 * - `{{%media}}`
 */
class m190328_083249_create_flow_table extends Migration
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
        $this->createTable('{{%flow}}', [
            'id' => $this->primaryKey(),
            'project_id' => $this->integer(),
            'media_id' => $this->integer(),
            'parent' => $this->integer(),
            'name' => $this->string(),

            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'updated_at' => $this->integer()->notNull(),
            'created_at' => $this->integer()->notNull()
        ],$tableOptions);

        // creates index for column `project_id`
        $this->createIndex(
            '{{%idx-flow-project_id}}',
            '{{%flow}}',
            'project_id'
        );

        // add foreign key for table `{{%project}}`
        $this->addForeignKey(
            '{{%fk-flow-project_id}}',
            '{{%flow}}',
            'project_id',
            '{{%project}}',
            'id',
            'CASCADE'
        );

        // creates index for column `media_id`
        $this->createIndex(
            '{{%idx-flow-media_id}}',
            '{{%flow}}',
            'media_id'
        );

        // add foreign key for table `{{%media}}`
        $this->addForeignKey(
            '{{%fk-flow-media_id}}',
            '{{%flow}}',
            'media_id',
            '{{%media}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%project}}`
        $this->dropForeignKey(
            '{{%fk-flow-project_id}}',
            '{{%flow}}'
        );

        // drops index for column `project_id`
        $this->dropIndex(
            '{{%idx-flow-project_id}}',
            '{{%flow}}'
        );

        // drops foreign key for table `{{%media}}`
        $this->dropForeignKey(
            '{{%fk-flow-media_id}}',
            '{{%flow}}'
        );

        // drops index for column `media_id`
        $this->dropIndex(
            '{{%idx-flow-media_id}}',
            '{{%flow}}'
        );

        $this->dropTable('{{%flow}}');
    }
}
