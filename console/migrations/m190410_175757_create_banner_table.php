<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%banner}}`.
 */
class m190410_175757_create_banner_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%banner}}', [
            'id' => $this->primaryKey(),
            'fileName' => $this->string()->notNull(),
            'position' => $this->string()->notNull(),
            'bannerType' => $this->string(60)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%banner}}');
    }
}
