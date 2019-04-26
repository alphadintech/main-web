<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%media}}`.
 */
class m100310_062328_create_media_table extends Migration
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

        $this->createTable('{{%media}}', [
            'id' => $this->primaryKey(),
            'url' => $this->string(),
            'height' => $this->integer(),
            'width' => $this->integer(),
            'size' => $this->integer(),

            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'updated_at' => $this->integer()->notNull(),
            'created_at' => $this->integer()->notNull()
        ], $tableOptions);
    }


    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%media}}');
    }
}
