
<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

?>

<div class="row " style="margin-top:70px ">
    <div class="text-center">
        <h2><?php echo count($busquedas);?> ofertas de empleo de <?php echo isset($search) ?$search.' /' : '';?>  <?php echo 'en '. $rubro->Descripcion;?></h2>
    </div>


</div>

<div class="row mb-1">
    <div class="col-md-3">
        <div class="panel panel-primary">
            <div class="panel-heading">Buscar</div>
            <div class="panel-body">
                <?php
                $form=ActiveForm::begin([
                    //"action"=>"index.php?r=inscripcion%2Fstore",
                    'method'=>'get',

                    "action"=>'index.php?r=busqueda/search'
                ])
                ?>
                    <input type="hidden" name="id" value="<?php echo $rubro->id;?>">

                    <div class="form-group">
                        <label>Buscador</label>
                        <input type="text" class="form-control" name="search" placeholder="Ingrese palabra clave">

                    </div>
                <div class="form-group">
                    <?= Html::submitButton('Buscar', ['class' => 'btn btn-primary']) ?>
                </div>
                <?php
                ActiveForm::end();
                ?>


            </div>


        </div>


    </div>


    <div class="col-md-9">
<?php
        foreach ($busquedas as $busqueda){
            ?>

            <div class="panel panel-primary">
                <div class="panel-heading"><h4><?php echo $busqueda['Titulo'].'-'. $busqueda['Empresa']?></h4></div>
                    <div class="panel-body">
                        <h5><?php echo $busqueda['Descripcion']?></h5>
                        <?php
                        $form=ActiveForm::begin([
                             "action"=>'index.php?r=inscripcion/inscripcion',
                            "method"=>'post',

                        ]);
                        ?>

                            <input type="hidden" name="busqueda_id" value="<?php echo $busqueda->id;?>">
                            <div class="form-group">
                                <?= Html::submitButton('Postularme', ['class' => 'btn btn-primary']) ?>
                                <a href="index.php?r=busqueda/inscripciones&id=<?php echo $busqueda['id']?>" class="btn btn-primary">Inscripciones de esta busqueda</a>
                            </div>


                            <?php ActiveForm::end(); ?>

                    </div>
            </div>



<?php
}
?>
    </div>
</div>
<script>
    function enviar_formulario(){

    }
</script>