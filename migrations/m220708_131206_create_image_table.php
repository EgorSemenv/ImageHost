<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%image}}`.
 */
class m220708_131206_create_image_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%image}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'data' => $this->dateTime(),
            'image' => $this->string(),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%image}}');
    }
}
