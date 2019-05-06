<?php

namespace app\models;

use Yii;
use app\models\Busqueda;

/**
 * This is the model class for table "rubros".
 *
 * @property int $id
 * @property string $Descripcion
 *
 * @property Busqueda[] $busquedas
 */
class Rubro extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rubros';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Descripcion'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Descripcion' => 'Descripcion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBusquedas()
    {
        return $this->hasMany(Busqueda::className(), ['idRubro' => 'id']);
    }

}
