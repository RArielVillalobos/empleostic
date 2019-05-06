<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<div class="container" style="margin-top:80px ">

    <div class="text">
        <h3>Formulario para postularse a la vacante</h3>

    </div>
    <div class="form-group">
        <?php
        $form=ActiveForm::begin([
            //"action"=>"index.php?r=inscripcion%2Fstore",
            'method'=>'post',
            "enableClientValidation"=>true,
            //"action"=>'index.php?r=inscripcion/store'
        ])
        ?>



        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <?php echo  $form->field($model, 'busqueda_id')->hiddenInput(['value'=>$busqueda_id])->label(false);?>

                    <?php echo $form->field($model,"nombre")->input("text");?>

                </div>

            </div>


        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">

                    <?php echo $form->field($model,"apellido")->input("text");?>

                </div>

            </div>


        </div>

        <div class="form-group">
            <?= Html::submitButton('Inscribirme', ['class' => 'btn btn-primary']) ?>
        </div>

        <?php
        ActiveForm::end();
        ?>

    </div>


</div>


