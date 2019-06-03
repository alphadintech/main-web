<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tester_job_and_edu}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 */
class m190527_113558_create_tester_job_and_edu_table extends Migration
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
        $this->createTable('{{%tester_job_and_edu}}', [
            'user_id' =>  $this->integer()->notNull()->unique(),
            'education' => $this->integer(),
            'major' => $this->string(),
            'job_title' => $this->string(),
            'job_description' => $this->text(),
            'job_scale' => $this->integer(),
            'employment_status' => $this->integer(),
            'income' => $this->integer(),
        ],$tableOptions);

        // creates index for column `user_id`
        $this->createIndex(
            '{{%idx-tester_job_and_edu-user_id}}',
            '{{%tester_job_and_edu}}',
            'user_id'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-tester_job_and_edu-user_id}}',
            '{{%tester_job_and_edu}}',
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
            '{{%fk-tester_job_and_edu-user_id}}',
            '{{%tester_job_and_edu}}'
        );

        // drops index for column `user_id`
        $this->dropIndex(
            '{{%idx-tester_job_and_edu-user_id}}',
            '{{%tester_job_and_edu}}'
        );

        $this->dropTable('{{%tester_job_and_edu}}');
    }
}
