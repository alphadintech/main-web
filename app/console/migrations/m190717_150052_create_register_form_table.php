<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%register_form}}`.
 */
class m190717_150052_create_register_form_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%register_form}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'company_name' => $this->string()->notNull(),
            'phone' => $this->string()->notNull(),
            'email' => $this->string()->notNull(),
            'desc' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%register_form}}');
    }
}
