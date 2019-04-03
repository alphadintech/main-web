<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%customer}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 */
class m190316_063939_create_customer_table extends Migration
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
        $this->createTable('{{%customer}}', [
            'user_id' => $this->integer()->notNull()->unique(),
            'organization' => $this->string(),
            'address' => $this->text(),
            'contract_num' => $this->integer(),

            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'updated_at' => $this->integer()->notNull(),
            'created_at' => $this->integer()->notNull()
        ],$tableOptions);
        $this->addPrimaryKey('user-id_pk','{{%customer}}','user_id');

        // creates index for column `user_id`
        $this->createIndex(
            '{{%idx-customer-user_id}}',
            '{{%customer}}',
            'user_id'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-customer-user_id}}',
            '{{%customer}}',
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
            '{{%fk-customer-user_id}}',
            '{{%customer}}'
        );

        // drops index for column `user_id`
        $this->dropIndex(
            '{{%idx-customer-user_id}}',
            '{{%customer}}'
        );

        $this->dropTable('{{%customer}}');
    }
}
