<?php

use yii\db\Migration;

/**
 * Class m190410_184706_rename_banner_table_fields
 */
class m190410_184706_rename_banner_table_fields extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
      $this->renameColumn('banner', 'bannerType', 'type');
      $this->renameColumn('banner', 'fileName', 'file_name');
      $this->alterColumn('banner', 'type', $this->tinyInteger());
      $this->alterColumn('banner', 'position', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->renameColumn('banner', 'type', 'bannerType');
        $this->renameColumn('banner', 'file_name', 'fileName');
        $this->alterColumn('banner', 'type', $this->string(60));
        $this->alterColumn('banner', 'position', $this->string(255));
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190410_184706_rename_banner_table_fields cannot be reverted.\n";

        return false;
    }
    */
}
