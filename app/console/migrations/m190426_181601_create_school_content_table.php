<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%school_content}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%school_tree}}`
 * - `{{%user}}`
 */
class m190426_181601_create_school_content_table extends Migration
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
        $this->createTable('{{%school_content}}', [
            'id' => $this->primaryKey(),
            'part_id' => $this->integer()->notNull(),
            'author_id' => $this->integer()->notNull(),
            'body' => $this->text()->notNull(),

            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'updated_at' => $this->integer(),
            'created_at' => $this->integer()
        ],$tableOptions);

        // creates index for column `part_id`
        $this->createIndex(
            '{{%idx-school_content-part_id}}',
            '{{%school_content}}',
            'part_id'
        );

        // add foreign key for table `{{%school_tree}}`
        $this->addForeignKey(
            '{{%fk-school_content-part_id}}',
            '{{%school_content}}',
            'part_id',
            '{{%school_tree}}',
            'id',
            'CASCADE'
        );

        // creates index for column `author_id`
        $this->createIndex(
            '{{%idx-school_content-author_id}}',
            '{{%school_content}}',
            'author_id'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-school_content-author_id}}',
            '{{%school_content}}',
            'author_id',
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
        // drops foreign key for table `{{%school_tree}}`
        $this->dropForeignKey(
            '{{%fk-school_content-part_id}}',
            '{{%school_content}}'
        );

        // drops index for column `part_id`
        $this->dropIndex(
            '{{%idx-school_content-part_id}}',
            '{{%school_content}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-school_content-author_id}}',
            '{{%school_content}}'
        );

        // drops index for column `author_id`
        $this->dropIndex(
            '{{%idx-school_content-author_id}}',
            '{{%school_content}}'
        );

        $this->dropTable('{{%school_content}}');
    }
}
