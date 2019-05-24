<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%city}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%state}}`
 */
class m190515_134535_create_city_table extends Migration
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
        $this->createTable('{{%city}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'state_id' => $this->integer(),
        ],$tableOptions);

        // creates index for column `state_id`
        $this->createIndex(
            '{{%idx-city-state_id}}',
            '{{%city}}',
            'state_id'
        );

        // add foreign key for table `{{%state}}`
        $this->addForeignKey(
            '{{%fk-city-state_id}}',
            '{{%city}}',
            'state_id',
            '{{%state}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%state}}`
        $this->dropForeignKey(
            '{{%fk-city-state_id}}',
            '{{%city}}'
        );

        // drops index for column `state_id`
        $this->dropIndex(
            '{{%idx-city-state_id}}',
            '{{%city}}'
        );

        $this->dropTable('{{%city}}');
    }
}
