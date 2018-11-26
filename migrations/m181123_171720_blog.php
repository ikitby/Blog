<?php

use yii\db\Migration;

/**
 * Class m181123_171720_blog
 */
class m181123_171720_blog extends Migration
{
    /**
     * {@inheritdoc}
     */

    public function safeUp()
    {
        $this->createTable('blog', [
            'id' => $this->primaryKey(),
            'image' => $this->string('250'),
            'titte' => $this->string('250')->notNull(),
            'text' => $this->text(),
            'media' => $this->string('250'),
            'author_id' => $this->smallInteger(5),
            'meta_title' => $this->string('250'),
            'meta_keyworlds' => $this->string('250'),
            'meta_descr' => $this->string('500'),
            'rate' => $this->smallInteger(5),
            'rate_hits' => $this->smallInteger(5),
            'hits' => $this->smallInteger(6)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('blog');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181123_171720_blog cannot be reverted.\n";

        return false;
    }
    */
}
