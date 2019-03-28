<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%project}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 */
class m190328_080456_create_project_table extends Migration
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
        $this->createTable('{{%project}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'user_id' => $this->integer(),

            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'updated_at' => $this->integer()->notNull(),
            'created_at' => $this->integer()->notNull()
        ],$tableOptions);

        // creates index for column `user_id`
        $this->createIndex(
            '{{%idx-project-user_id}}',
            '{{%project}}',
            'user_id'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-project-user_id}}',
            '{{%project}}',
            'user_id',
            '{{%user}}',
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
            '{{%fk-project-user_id}}',
            '{{%project}}'
        );

        // drops index for column `user_id`
        $this->dropIndex(
            '{{%idx-project-user_id}}',
            '{{%project}}'
        );

        $this->dropTable('{{%project}}');
    }
}
