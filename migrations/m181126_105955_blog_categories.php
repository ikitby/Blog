<?php

use yii\db\Migration;

/**
 * Class m181126_105955_blog_categories
 */
class m181126_105955_blog_categories extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('blog_categories', [
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
        $this->dropTable('blog_categories');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181126_105955_blog_categories cannot be reverted.\n";

        return false;
    }
    */
}
