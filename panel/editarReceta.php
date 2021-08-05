<?php
    
    require_once("database/sabores.php");
    require_once("database/recetas.php");
	
	$rta =  isset( $_GET['rta'] ) ? $_GET['rta'] : 'ok';
	$id =  isset( $_GET['id'] ) ? $_GET['id'] : '1';
	
	$recetaAeditar = [];
	
	foreach ($recetas as $receta){
	
		if($receta["id"] == $id){
			$recetaAeditar = $receta;
		}
	}
	

	

?>

<div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="page-header">Editar receta <?php echo $recetaAeditar["nombre"];?></h1>
            </div>
        </div>
		
		<p>
		<?php 
			if ($rta == "error"){
				echo "El nombre, los ingredientes y los pasos deben ser obligatorios";
			}
		

		?>
		
		</p>

        <div class="row">

          <div class="col-xs-12">
            <form action="panel/editar_receta.php" method="post" enctype="multipart/form-data">
                
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" value="<?php echo $recetaAeditar["nombre"];?>" name="nombre" class="form-control">
                </div>
                
                <div class="form-group">
                    <label>Sabor</label>
                    <select name="sabor"  class="form-control">
                        <?php
                            foreach($sabores as $sabor):
                        ?>                                                
                                <option value="<?= $sabor["id"]; ?>"><?= $sabor["nombre"]; ?></option>
                        <?php
                            endforeach;
                        
                        ?>
                    </select>                    
                </div>
				
				<div class="form-group">
                    <label>Ingredientes</label>
                    <textarea name="ingredientes" ><?php echo $recetaAeditar["ingredientes"];?></textarea>
                </div>
				
				<div class="form-group">
                    <label>Pasos</label>
                    <textarea name="pasos"><?php echo $recetaAeditar["pasos"];?></textarea>
                </div>
                
                <div class="form-group">
                    <label>Imágen</label>
                    <input type="file" name="imagen" class="form-control">
                </div>
                
                <div>
                    <input type="submit" value="Guardar">
                </div>
                
            </form>        
                    
          </div>
                     
            
        </div>

    </div>