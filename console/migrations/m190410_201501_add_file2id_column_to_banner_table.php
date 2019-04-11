<?php

use yii\db\Migration;

/**
 * Handles adding file2id to table `{{%banner}}`.
 */
class m190410_201501_add_file2id_column_to_banner_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%banner}}', 'file2_id', $this->integer()->notNull());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%banner}}', 'file2_id');
    }
}
