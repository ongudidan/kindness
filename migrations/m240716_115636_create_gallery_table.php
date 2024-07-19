<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%gallery}}`.
 */
class m240716_115636_create_gallery_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%gallery}}', [
            'id' => $this->primaryKey(),
            'title'=>$this->string(50)->notNull(),
            'image'=>$this->string(50)->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%gallery}}');
    }
}
