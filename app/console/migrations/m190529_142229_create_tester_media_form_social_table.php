<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tester_media_form_social}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%social}}`
 * - `{{%tester_media_form}}`
 */
class m190529_142229_create_tester_media_form_social_table extends Migration
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
        $this->createTable('{{%tester_media_form_social}}', [
            'id' => $this->primaryKey(),
            'social_id' => $this->integer(),
            'form_id' => $this->integer(),
        ],$tableOptions);

        // creates index for column `social_id`
        $this->createIndex(
            '{{%idx-tester_media_form_social-social_id}}',
            '{{%tester_media_form_social}}',
            'social_id'
        );

        // add foreign key for table `{{%social}}`
        $this->addForeignKey(
            '{{%fk-tester_media_form_social-social_id}}',
            '{{%tester_media_form_social}}',
            'social_id',
            '{{%social}}',
            'id',
            'CASCADE'
        );

        // creates index for column `form_id`
        $this->createIndex(
            '{{%idx-tester_media_form_social-form_id}}',
            '{{%tester_media_form_social}}',
            'form_id'
        );

        // add foreign key for table `{{%tester_media_form}}`
        $this->addForeignKey(
            '{{%fk-tester_media_form_social-form_id}}',
            '{{%tester_media_form_social}}',
            'form_id',
            '{{%tester_media_form}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%social}}`
        $this->dropForeignKey(
            '{{%fk-tester_media_form_social-social_id}}',
            '{{%tester_media_form_social}}'
        );

        // drops index for column `social_id`
        $this->dropIndex(
            '{{%idx-tester_media_form_social-social_id}}',
            '{{%tester_media_form_social}}'
        );

        // drops foreign key for table `{{%tester_media_form}}`
        $this->dropForeignKey(
            '{{%fk-tester_media_form_social-form_id}}',
            '{{%tester_media_form_social}}'
        );

        // drops index for column `form_id`
        $this->dropIndex(
            '{{%idx-tester_media_form_social-form_id}}',
            '{{%tester_media_form_social}}'
        );

        $this->dropTable('{{%tester_media_form_social}}');
    }
}
