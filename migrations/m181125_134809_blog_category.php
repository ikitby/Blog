<?php

use yii\db\Migration;

/**
 * Class m181125_134809_blog_category
 */
class m181125_134809_blog_category extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('blog_category', [
            'id' => $this->primaryKey(),
            'category' => $this->string('50')->notNull()->unique(),
            'alias' => $this->string('50')->notNull()->unique(),
            'parent' => $this->smallInteger('5'),
            'state' => $this->smallInteger('2')
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('blog_category');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181125_134809_blog_category cannot be reverted.\n";

        return false;
    }
    */
}
