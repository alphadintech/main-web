<?php

use yii\db\Migration;

/**
 * Handles adding details to table `{{%tester}}`.
 */
class m190515_134907_add_details_column_to_tester_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%tester}}', 'phone', $this->string());
        $this->addColumn('{{%tester}}', 'mobile', $this->string());
        $this->addColumn('{{%tester}}', 'postal_code', $this->string());
        $this->addColumn('{{%tester}}', 'birthday', $this->integer());
        $this->addColumn('{{%tester}}', 'maried', $this->boolean());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%tester}}', 'phone');
        $this->dropColumn('{{%tester}}', 'mobile');
        $this->dropColumn('{{%tester}}', 'postal_code');
        $this->dropColumn('{{%tester}}', 'birthday');
        $this->dropColumn('{{%tester}}', 'maried');
    }
}
