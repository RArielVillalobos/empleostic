<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%inscripcion}}`.
 */
class m190422_141707_create_inscripciones_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%inscripcion}}', [
            'id' => $this->primaryKey(),
            'idBusqueda'=>$this->integer()->notNull(),
            'Fecha'=>$this->dateTime(),
            'Apellido'=>$this->string(),
            'Nombre'=>$this->string(),

        ]);

        $this->createIndex(
            'idx-incripciones-idBusqueda',
            'inscripcion',
            'idBusqueda'
        );
        $this->addForeignKey(
            'fk-inscripcion-idBusqueda',
            'inscripcion',
            'idBusqueda',
            'busquedas',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%inscripcion}}');
    }
}
