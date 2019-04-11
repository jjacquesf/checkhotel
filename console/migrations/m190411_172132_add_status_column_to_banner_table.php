<?php

use yii\db\Migration;

/**
 * Handles adding status to table `{{%banner}}`.
 */
class m190411_172132_add_status_column_to_banner_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%banner}}', 'status', $this->integer()->notNull());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%banner}}', 'status');
    }
}
