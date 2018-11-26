<?php

use yii\db\Migration;

/**
 * Class m181123_171751_comments
 */
class m181123_171751_comments extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('comments', [
            'id' => $this->primaryKey(),
            'source_comment' => $this->smallInteger('5'),
            'parent_comment' => $this->smallInteger('5'),
            'text' => $this->string(1000),
            'author_id' => $this->smallInteger(5),
            'comment_likes' => $this->smallInteger(5),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('comments');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181123_171751_comments cannot be reverted.\n";

        return false;
    }
    */
}
