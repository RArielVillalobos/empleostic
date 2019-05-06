<?php

namespace app\controllers;

use app\models\Inscripcion;
use app\models\InscripcionForm;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;


class InscripcionController extends Controller
{

    public function actionInscripcion(){


        if(isset($_REQUEST['busqueda_id'])){
            $busqueda_id=$_REQUEST['busqueda_id'];
        }
        else{
            $busqueda_id=$_REQUEST['InscripcionForm']['busqueda_id'];
        }



        $model=new InscripcionForm();
        if($model->load(Yii::$app->request->post())){
            if($model->validate()){
                $this->actionStore($model);
                $this->redirect('index.php?r=rubro');
                

            }else{
                $model->getErrors();
            }
        }

        return $this->render('inscripcion',['busqueda_id'=>$busqueda_id,'model'=>$model]);



    }

    public function actionStore($model){

        $fecha=new \DateTime();
        $fechaActual=$fecha->format('Y-m-d H:i:sP');
        $busqueda_id=$_REQUEST['InscripcionForm']['busqueda_id'];


        $inscripcion=new Inscripcion();
        $inscripcion->idBusqueda=$busqueda_id;
        $inscripcion->fecha=$fechaActual;
        $inscripcion->Apellido=$model->apellido;
        $inscripcion->Nombre=$model->nombre;
        $inscripcion->save();


    }







}
