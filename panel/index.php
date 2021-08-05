<?php
    require_once("database/sabores.php");
    require_once("database/recetas.php");
	
	$rta =  isset( $_GET['rta'] ) ? $_GET['rta'] : 'ok';
?>


<div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="page-header">Panel de control</h1>
            </div>
        </div>

        <div class="row">
		
		<?php 
		if ($rta == "borradoOk"){
			echo "Se ha borrado la receta correctamente";
		}
		
		?>

            <div class="col-xs-12">
                <a href="index.php?s=crearReceta" class="btn btn-primary btn-sm pull-right">
                    <span class="glyphicon glyphicon-plus"></span>
					Nueva receta
                </a>

                <table class="table">
                    <tr>
                        <th>id</th>
                        <th>Nombre</th>
                        <th>Sabor</th>
                        <th>Acciones</th>
                    </tr>

                   <?php
	
						if(!empty($recetas)){
					
                        foreach($recetas as $receta):
                    ?>
                   
                        <tr>
                            <td><?php echo $receta["id"]; ?></td>
                            <td><?php echo $receta["nombre"]; ?></td>
                            <td><?php echo $receta["sabor"]; ?></td>
                            
                            <td>
                                <a href="index.php?s=editarReceta&id=<?php echo $receta["id"]; ?>" class="btn btn-success btn-sm pull-left">
                                    <span class="glyphicon glyphicon-pencil"></span>
                                </a>

                                <form action="panel/borrar_receta.php" method="post" class="pull-left">
                                    <input type="hidden" value="<?php echo $receta["id"]; ?>" name="id">
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <span class="glyphicon glyphicon-minus"></span>
                                    </button>
                                </form>

                            </td>
                        </tr>
                    
                    <?php
                        endforeach;
						}
                    ?>

                </table>

            </div>

        </div>

    </div>
