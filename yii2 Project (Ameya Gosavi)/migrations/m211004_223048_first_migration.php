<?php

use yii\db\Migration;

/**
 * Class m211004_223048_first_migration
 */
class m211004_223048_first_migration extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable(
            'project',
            [
                'project_id' => $this->primaryKey(),
                'project_title' => $this->string(255)->notNull(),
                'project_description' => $this->text()->notNull(),
                'created_at' => $this->timestamp()->notNull(),
            ]
        );
        $this->createTable(
            'modules',
            [
                'module_id' => $this->primaryKey(),
                'module_title' => $this->string(255)->notNull(),
                'module_description' => $this->text()->notNull(),
                'project_id' => $this->integer()->notNull(),
                'created_at' => $this->timestamp()->notNull(),
            ]
        );
        $this->createTable
        (
            'api',
            [
                'id' => $this->primaryKey(),
                'project_id' => $this->integer(),
                'module_id' => $this->integer(),
                'url' => $this->string(255)->notNull(),
                'title' => $this->string(255)->notNull(),
                'description' => $this->text()->notNull(),
                'method' => $this->string(255)->notNull(),
                'request' => $this->string(255)->notNull(),
                'response' => $this->string(255)->notNull(),
                'created_at' => $this->timestamp()->notNull(),
            ]
        );

        $this->addForeignKey('FK_api_project','api','project_id','project','project_id');
        $this->addForeignKey('FK_api_module','api','module_id','modules','module_id');
        $this->addForeignKey('FK_project_id','modules','project_id','project','project_id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('FK_project_id','modules');
        $this->dropForeignKey('FK_api_project','api');
        $this->dropForeignKey('FK_api_module','api');
        $this->dropTable('api');
        $this->dropTable('modules');
        $this->dropTable('project');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211004_223048_first_migration cannot be reverted.\n";

        return false;
    }
    */
}
