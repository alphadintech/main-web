<?php

use yii\db\Migration;

/**
 * Handles adding credit to table `{{%school_tree}}`.
 */
class m190606_143528_add_credit_column_to_school_tree_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%school_tree}}', 'credit', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%school_tree}}', 'credit');
    }
}
