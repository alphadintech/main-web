<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%app}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%projrct}}`
 */
class m190328_080906_create_app_table extends Migration
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
        $this->createTable('{{%app}}', [
            'id' => $this->primaryKey(),
            'project_id' => $this->integer(),
            'package_name' => $this->string(),
            'os_type' => $this->smallInteger()->notNull()->defaultValue(1),

            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'updated_at' => $this->integer()->notNull(),
            'created_at' => $this->integer()->notNull()
        ],$tableOptions);

        // creates index for column `project_id`
        $this->createIndex(
            '{{%idx-app-project_id}}',
            '{{%app}}',
            'project_id'
        );

        // add foreign key for table `{{%project}}`
        $this->addForeignKey(
            '{{%fk-app-project_id}}',
            '{{%app}}',
            'project_id',
            '{{%project}}',
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
            '{{%fk-app-project_id}}',
            '{{%app}}'
        );

        // drops index for column `project_id`
        $this->dropIndex(
            '{{%idx-app-project_id}}',
            '{{%app}}'
        );

        $this->dropTable('{{%app}}');
    }
}
