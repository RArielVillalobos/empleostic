<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "inscripciones".
 *
 * @property int $id
 * @property int $idBusqueda
 * @property string $fecha
 * @property string $Apellido
 * @property string $Nombre
 *
 * @property Busquedas $busqueda
 */
class Inscripcion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */

    public static function tableName()
    {
        return 'inscripciones';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idBusqueda'], 'required'],
            [['idBusqueda'], 'integer'],
            [['fecha'], 'safe'],
            [['Apellido', 'Nombre'], 'string', 'max' => 255],
            [['idBusqueda'], 'exist', 'skipOnError' => true, 'targetClass' => Busqueda::className(), 'targetAttribute' => ['idBusqueda' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'idBusqueda' => 'Id Busqueda',
            'fecha' => 'Fecha',
            'Apellido' => 'Apellido',
            'Nombre' => 'Nombre',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBusqueda()
    {
        return $this->hasOne(Busqueda::className(), ['id' => 'idBusqueda']);
    }
}
