<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%app_version}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%app}}`
 */
class m190328_081231_create_app_version_table extends Migration
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
        $this->createTable('{{%app_version}}', [
            'id' => $this->primaryKey(),
            'app_id' => $this->integer(),
            'version_name' => $this->string(),
            'version_number' => $this->integer(),
            'min_version' => $this->integer(),
            'url' => $this->string(),

            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'updated_at' => $this->integer()->notNull(),
            'created_at' => $this->integer()->notNull()
        ],$tableOptions);

        // creates index for column `app_id`
        $this->createIndex(
            '{{%idx-app_version-app_id}}',
            '{{%app_version}}',
            'app_id'
        );

        // add foreign key for table `{{%app}}`
        $this->addForeignKey(
            '{{%fk-app_version-app_id}}',
            '{{%app_version}}',
            'app_id',
            '{{%app}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%app}}`
        $this->dropForeignKey(
            '{{%fk-app_version-app_id}}',
            '{{%app_version}}'
        );

        // drops index for column `app_id`
        $this->dropIndex(
            '{{%idx-app_version-app_id}}',
            '{{%app_version}}'
        );

        $this->dropTable('{{%app_version}}');
    }
}
