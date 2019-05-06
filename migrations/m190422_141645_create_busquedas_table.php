<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%busquedas}}`.
 */
class m190422_141645_create_busquedas_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%busquedas}}', [
            'id' => $this->primaryKey(),
            'idRubro'=>$this->integer()->notNull(),
            'Empresa'=>$this->string(),
            'Titulo'=>$this->string(),
            'Descripcion'=>$this->string(),


        ]);

        $this->createIndex(
            'idx-busquedas-idRubro',
            'busquedas',
            'idRubro'
        );
        $this->addForeignKey(
            'fk-busquedas-idRubro',
            'busquedas',
            'idRubro',
            'rubros',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%busquedas}}');
    }
}
