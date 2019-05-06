<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class="container" style="margin-top: 100px">
        <div class="text">
            <h3>Rubros</h3>

        </div>
        <div class="row">
            <div class="col-md-4">
                <?php
                 foreach ($rubros as $rubro){
                 ?>

                     <li><a href="index.php?r=busqueda/index&id=<?php echo $rubro['id']?>"><?php echo $rubro->Descripcion;?></a></li>
                <?php
                 }
                ?>

            </div>

        </div>
        <div class="text text-center">
            <h1>Encontrá hoy tu trabajo!!</h1>
        </div>

        <div class="row">
            <form>
                <div class="col-md-6">
                    <div class="form-group">
                        <input style="height: 70px;" type="text" name="search" placeholder="Ingresa palabra clave" class="form-control input-lg">

                    </div>


                </div>

                <div class="col-md-6">
                    <button style="height: 80px; width: 80%" type="submit" class="btn btn-primary">Buscar Empleos</button>

                </div>
            </form>


        </div>

    </div>

</div>
