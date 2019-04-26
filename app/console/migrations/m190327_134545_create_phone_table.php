<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%phone}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 */
class m190327_134545_create_phone_table extends Migration
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

        $this->createTable('{{%phone}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'phone' => $this->string()->notNull(),

            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'updated_at' => $this->integer()->notNull(),
            'created_at' => $this->integer()->notNull()

        ],$tableOptions);

        // creates index for column `user_id`
        $this->createIndex(
            '{{%idx-phone-user_id}}',
            '{{%phone}}',
            'user_id'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-phone-user_id}}',
            '{{%phone}}',
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
            '{{%fk-phone-user_id}}',
            '{{%phone}}'
        );

        // drops index for column `user_id`
        $this->dropIndex(
            '{{%idx-phone-user_id}}',
            '{{%phone}}'
        );

        $this->dropTable('{{%phone}}');
    }
}
