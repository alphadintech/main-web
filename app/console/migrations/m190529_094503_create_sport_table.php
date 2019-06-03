<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%sport}}`.
 */
class m190529_094503_create_sport_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {$tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%sport}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),


        ],$tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%sport}}');
    }
}
