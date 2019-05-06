<?php
use yii\widgets\LinkPager;
?>

    <div class="row"style="margin-top: 100px">
        <div class="col-sm-12 col-md-12">

        </div>

    </div>
    <table class="table table-bordered" >
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Fecha</th>
        </tr>

        </thead>
        <tbody>
            <?php
                foreach ($inscripciones as $inscripcion){
             ?>
                    <tr>
                        <td><?php echo $inscripcion['Nombre'];?></td>
                        <td><?php echo $inscripcion['Apellido'];?></td>
                        <td><?php echo $inscripcion['fecha'];?></td>
                    </tr>
            <?php
                }
            // display pagination
            ?>


        </tbody>

    </table>
<div class="container">
    <?php
    echo LinkPager::widget([
        'pagination' => $pages,
    ]);
    ?>

</div>