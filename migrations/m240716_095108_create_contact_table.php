<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%contact}}`.
 */
class m240716_095108_create_contact_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%contact}}', [
            'id' => $this->primaryKey(),
            'key'=>$this->string(50)->notNull(),
            'value'=>$this->string(50)->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%contact}}');
    }
}
