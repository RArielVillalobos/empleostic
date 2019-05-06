<?php

namespace app\controllers;

use app\models\Busqueda;
use app\models\Inscripcion;
use app\models\Rubro;
use yii\data\Pagination;

class BusquedaController extends \yii\web\Controller
{
    public function actionIndex($id=null)
    {

        $id=$_REQUEST['id'];

        /*$busquedasPorRubro = (new \yii\db\Query())

            ->from('busquedas')
            ->where(['idRubro' => $id])

            ->all();*/
        $busquedasPorRubro=Busqueda::find()->where(['idRubro'=>$id])->all();
        $rubro=Rubro::find()->where(['id' => $id])
            ->one();;


        return $this->render('index',['busquedas'=>$busquedasPorRubro,'rubro'=>$rubro]);
    }

    public function actionSearch(){

        $search=\Yii::$app->request->get()['search'];
        $id=$_REQUEST['id'];
        $busquedas=Busqueda::find()->andFilterWhere(['like', 'Titulo', $search])->andFilterWhere(['=','idRubro',$id])->all();


        $rubro=Rubro::find()->where(['id' => $id])
            ->one();;

        return $this->render('index',['busquedas'=>$busquedas,'rubro'=>$rubro,'search'=>$search]);


    }

    public function actionInscripciones(){
        $idBusqueda=$_REQUEST['id'];
        $query = Inscripcion::find()->where(['idBusqueda' => $idBusqueda]);
        //$inscripcionesDeEstaBusqueda=Inscripcion::find()->where(['idBusqueda' => $idBusqueda])->all();
        $count = $query->count();
        // crea un objeto paginación con dicho total
        $pages= new Pagination(['totalCount' => $count]);

        // limita la consulta utilizando la paginación y recupera los artículos
        $inscripcionesDeEstaBusqueda = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();


        return $this->render('inscripciones',[
            'inscripciones' => $inscripcionesDeEstaBusqueda,
            'pages' => $pages,
        ]);
    }

}
