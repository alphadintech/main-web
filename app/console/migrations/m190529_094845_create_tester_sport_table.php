<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tester_sport}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 * - `{{%sport}}`
 */
class m190529_094845_create_tester_sport_table extends Migration
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
        $this->createTable('{{%tester_sport}}', [
            'id' => $this->primaryKey(),
            'user_id'=>$this->integer(),
            'sport_id'=>$this->integer(),
        ],$tableOptions);

        // creates index for column `user_id`
        $this->createIndex(
            '{{%idx-tester_sport-user_id}}',
            '{{%tester_sport}}',
            'user_id'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-tester_sport-user_id}}',
            '{{%tester_sport}}',
            'user_id',
            '{{%user}}',
            'id',
            'CASCADE'
        );

        // creates index for column `sport_id`
        $this->createIndex(
            '{{%idx-tester_sport-sport_id}}',
            '{{%tester_sport}}',
            'sport_id'
        );

        // add foreign key for table `{{%sport}}`
        $this->addForeignKey(
            '{{%fk-tester_sport-sport_id}}',
            '{{%tester_sport}}',
            'sport_id',
            '{{%sport}}',
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
            '{{%fk-tester_sport-user_id}}',
            '{{%tester_sport}}'
        );

        // drops index for column `user_id`
        $this->dropIndex(
            '{{%idx-tester_sport-user_id}}',
            '{{%tester_sport}}'
        );

        // drops foreign key for table `{{%sport}}`
        $this->dropForeignKey(
            '{{%fk-tester_sport-sport_id}}',
            '{{%tester_sport}}'
        );

        // drops index for column `sport_id`
        $this->dropIndex(
            '{{%idx-tester_sport-sport_id}}',
            '{{%tester_sport}}'
        );

        $this->dropTable('{{%tester_sport}}');
    }
}
