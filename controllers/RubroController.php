<?php

namespace app\controllers;

use app\models\Rubro;

class RubroController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $rubros=Rubro::find()->all();



        return $this->render('index',['rubros'=>$rubros]);
    }

}
