<?php

use yii\db\Migration;

/**
 * Handles adding city_id to table `{{%tester}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%city}}`
 */
class m190515_134828_add_city_id_column_to_tester_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%tester}}', 'city_id', $this->integer());

        // creates index for column `city_id`
        $this->createIndex(
            '{{%idx-tester-city_id}}',
            '{{%tester}}',
            'city_id'
        );

        // add foreign key for table `{{%city}}`
        $this->addForeignKey(
            '{{%fk-tester-city_id}}',
            '{{%tester}}',
            'city_id',
            '{{%city}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%city}}`
        $this->dropForeignKey(
            '{{%fk-tester-city_id}}',
            '{{%tester}}'
        );

        // drops index for column `city_id`
        $this->dropIndex(
            '{{%idx-tester-city_id}}',
            '{{%tester}}'
        );

        $this->dropColumn('{{%tester}}', 'city_id');
    }
}
