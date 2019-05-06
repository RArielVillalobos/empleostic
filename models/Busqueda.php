<?php

namespace app\models;

use Yii;
use app\models\Rubro;

/**
 * This is the model class for table "busquedas".
 *
 * @property int $id
 * @property int $idRubro
 * @property string $Empresa
 * @property string $Titulo
 * @property string $Descripcion
 *
 * @property Rubros $rubro
 * @property Inscripciones[] $inscripciones
 */
class Busqueda extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'busquedas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idRubro'], 'required'],
            [['idRubro'], 'integer'],
            [['Empresa', 'Titulo', 'Descripcion'], 'string', 'max' => 255],
            [['idRubro'], 'exist', 'skipOnError' => true, 'targetClass' => Rubros::className(), 'targetAttribute' => ['idRubro' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'idRubro' => 'Id Rubro',
            'Empresa' => 'Empresa',
            'Titulo' => 'Titulo',
            'Descripcion' => 'Descripcion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRubro()
    {
        return $this->hasOne(Rubro::className(), ['id' => 'idRubro']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInscripciones()
    {
        return $this->hasMany(Inscripciones::className(), ['idBusqueda' => 'id']);
    }
}
