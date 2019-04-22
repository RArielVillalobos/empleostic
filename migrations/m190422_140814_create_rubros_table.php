<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%rubros}}`.
 */
class m190422_140814_create_rubros_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%rubros}}', [
            'id' => $this->primaryKey(),
            'Descripcion'=>$this->string(),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%rubros}}');
    }
}
