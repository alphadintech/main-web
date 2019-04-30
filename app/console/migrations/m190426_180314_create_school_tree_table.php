<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%school_tree}}`.
 */
class m190426_180314_create_school_tree_table extends Migration
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
        $this->createTable('{{%school_tree}}', [
            'id' => $this->primaryKey(),
            'parent_id' => $this->integer()->notNull()->defaultValue(0),
            'type' => $this->string(20),
            'title' => $this->string()->notNull(),
            'description' => $this->text(),
            'part_order' => $this->integer()->notNull()->defaultValue(0),
            'section_order' => $this->integer()->notNull()->defaultValue(0),

        ],$tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%school_tree}}');
    }
}
