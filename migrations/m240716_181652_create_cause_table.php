<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%cause}}`.
 */
class m240716_181652_create_cause_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%cause}}', [
            'id' => $this->primaryKey(),
            'title'=>$this->string(50)->notNull(),
            'short_description'=>$this->text()->notNull(),
            'full_description'=>$this->text()->notNull(),
            'goal'=>$this->string(50)->notNull(),
            'image'=>$this->string(50)->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%cause}}');
    }
}
