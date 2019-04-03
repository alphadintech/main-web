<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tester_device}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 * - `{{%device}}`
 */
class m190328_082413_create_tester_device_table extends Migration
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
        $this->createTable('{{%tester_device}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'device_id' => $this->integer(),
        ],$tableOptions);

        // creates index for column `user_id`
        $this->createIndex(
            '{{%idx-tester_device-user_id}}',
            '{{%tester_device}}',
            'user_id'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-tester_device-user_id}}',
            '{{%tester_device}}',
            'user_id',
            '{{%user}}',
            'id',
            'CASCADE'
        );

        // creates index for column `device_id`
        $this->createIndex(
            '{{%idx-tester_device-device_id}}',
            '{{%tester_device}}',
            'device_id'
        );

        // add foreign key for table `{{%device}}`
        $this->addForeignKey(
            '{{%fk-tester_device-device_id}}',
            '{{%tester_device}}',
            'device_id',
            '{{%device}}',
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
            '{{%fk-tester_device-user_id}}',
            '{{%tester_device}}'
        );

        // drops index for column `user_id`
        $this->dropIndex(
            '{{%idx-tester_device-user_id}}',
            '{{%tester_device}}'
        );

        // drops foreign key for table `{{%device}}`
        $this->dropForeignKey(
            '{{%fk-tester_device-device_id}}',
            '{{%tester_device}}'
        );

        // drops index for column `device_id`
        $this->dropIndex(
            '{{%idx-tester_device-device_id}}',
            '{{%tester_device}}'
        );

        $this->dropTable('{{%tester_device}}');
    }
}
