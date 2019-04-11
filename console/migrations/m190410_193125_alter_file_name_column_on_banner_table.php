<?php

use yii\db\Migration;

/**
 * Class m190410_193125_alter_file_name_column_on_banner_table
 */
class m190410_193125_alter_file_name_column_on_banner_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
      $this->alterColumn('banner', 'file_name', $this->integer()->notNull());
      $this->renameColumn('banner', 'file_name', 'file_id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
      $this->alterColumn('banner', 'file_id', $this->string(255)->notNull());
      $this->renameColumn('banner', 'file_id', 'file_name');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190410_193125_alter_file_name_column_on_banner_table cannot be reverted.\n";

        return false;
    }
    */
}
