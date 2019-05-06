<?php
/* @var $this yii\web\View */
?>
<div class="row">

    <?php
    foreach ($rubros as $rubro){


        ?>

            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">
                        <h3> <strong><?php echo $rubro['Descripcion']?></strong></h3>
                    </div>
                    <div class="card-body">

                        <a href="index.php?r=busqueda/index&id=<?php echo $rubro['id']?>" class="btn btn-primary">Busquedas Activas</a>

                    </div>
                </div>
            </div>




    <?php
    }


    ?>


</div>
