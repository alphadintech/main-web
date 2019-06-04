<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%bank_acount}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 */
class m190531_113413_create_bank_acount_table extends Migration
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
        $this->createTable('{{%bank_acount}}', [
            'id' => $this->primaryKey(),
            'bank_name' => $this->string(),
            'sheba' => $this->string(),
            'card_num' => $this->string(),
            'acount_num' => $this->string(),
            'user_id' => $this->integer(),
        ],$tableOptions);

        // creates index for column `user_id`
        $this->createIndex(
            '{{%idx-bank_acount-user_id}}',
            '{{%bank_acount}}',
            'user_id'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-bank_acount-user_id}}',
            '{{%bank_acount}}',
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
            '{{%fk-bank_acount-user_id}}',
            '{{%bank_acount}}'
        );

        // drops index for column `user_id`
        $this->dropIndex(
            '{{%idx-bank_acount-user_id}}',
            '{{%bank_acount}}'
        );

        $this->dropTable('{{%bank_acount}}');
    }
}
