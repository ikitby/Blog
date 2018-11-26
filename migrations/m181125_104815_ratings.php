<?php

use yii\db\Migration;

/**
 * Class m181125_104815_ratings
 */
class m181125_104815_ratings extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('ratings_blog', [
            'id' => $this->primaryKey(),
            'user_id' => $this->smallInteger(5)->notNull(),
            'item_id' => $this->smallInteger(5)->notNull(),
            'rating' => $this->smallInteger(5)->notNull(),
            'raiting_date' => $this->dateTime()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('ratings_blog');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181125_104815_ratings cannot be reverted.\n";

        return false;
    }
    */
}
