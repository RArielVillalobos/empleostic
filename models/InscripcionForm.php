<?php
/**
 * Created by PhpStorm.
 * User: ariel
 * Date: 2/may/2019
 * Time: 12:01
 */
namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class InscripcionForm extends Model
{
    public $nombre;
    public $apellido;



    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [

            ['nombre','required','message'=>'el nombre requerido'],
            ['nombre','string','min'=>4],
            //['nombre','string',['min'=>'3'],'message'=>'formato no valido'],
            ['apellido','required','message'=>'el apellido requerido'],
            ['apellido','string','min'=>4],
           // [['nombre', 'apellido'], 'required','message'=>'campo requerido'],


        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributelabels(){
        return [
            'nombre'=>'Nombre:',
            'email'=>'Email:',

        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param string $email the target email address
     * @return bool whether the model passes validation
     */

}
