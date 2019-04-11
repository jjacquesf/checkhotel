<?php

use yii\db\Migration;

/**
 * Handles adding name to table `{{%banner}}`.
 */
class m190411_152647_add_name_column_to_banner_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%banner}}', 'name', $this->string(60)->notNull());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%banner}}', 'name');
    }
}
