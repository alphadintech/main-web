<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%scenario}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%app_version}}`
 */
class m190328_082740_create_scenario_table extends Migration
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
        $this->createTable('{{%scenario}}', [
            'id' => $this->primaryKey(),
            'app_version_id' => $this->integer(),
            'description' => $this->text(),

            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'updated_at' => $this->integer()->notNull(),
            'created_at' => $this->integer()->notNull()
        ],$tableOptions);

        // creates index for column `app_version_id`
        $this->createIndex(
            '{{%idx-scenario-app_version_id}}',
            '{{%scenario}}',
            'app_version_id'
        );

        // add foreign key for table `{{%app_version}}`
        $this->addForeignKey(
            '{{%fk-scenario-app_version_id}}',
            '{{%scenario}}',
            'app_version_id',
            '{{%app_version}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%app_version}}`
        $this->dropForeignKey(
            '{{%fk-scenario-app_version_id}}',
            '{{%scenario}}'
        );

        // drops index for column `app_version_id`
        $this->dropIndex(
            '{{%idx-scenario-app_version_id}}',
            '{{%scenario}}'
        );

        $this->dropTable('{{%scenario}}');
    }
}
