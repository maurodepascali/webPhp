<nav class="navbar navbar-inverse navbar-fixed-top  " role="navigation">
	<div class="container">
		<!--Boton menu para los moviles-->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion">
				<span class="sr-only">Desplegar / Ocultar</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="index.php" class="navbar-brand"><img src="img/gorro-chef-2.png"><h4>COCINATE</h4><br><p>Las mejores recetas</p></a>
		</div>
		<!--Inicio Menu-->
		<div class="collapse navbar-collapse" id="navegacion">
		
			<ul class="nav navbar-nav">
				<?php foreach($menu as $itemMenu){ ?>
					<li>
						<a href="index.php?s=<?php echo $itemMenu["href"]?>" class="botonera <?php if($_GET['s'] == $itemMenu["href"]){ echo 'active';}?>">
							<?php echo $itemMenu["nombre"];?>
						</a>
					</li>
				<?php } ?>
			</ul>	
			
            <form class="navbar-form navbar-left form-horizontal">
                <input type="text" class="form-control" placeholder="Usuario" name="usuario">
                <input type="password" class="form-control" placeholder="Contraseña" name="password">
                <button type="submit" class="btn btn-default">Ingresar</button>
            </form>
                <ul class="nav navbar-nav navbar-right">
                    <!-- SI ESTA LOGUEADO -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <span class="gly"></span>
                            Mauro <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-header">RECETAS</li>

                            <li><a href="#">Dulce</a></li>
                            <li><a href="#">Salado</a></li>

                            <li role="separator" class="divider"></li>

                            <li class="dropdown-header">MIS DATOS</li>
                            <li><a href="#">Perfil</a></li>
                        </ul>
                    </li>
                    <!-- SI NO  ESTA LOGUEADO -->
                    <!--li>
                        <a href="#">
                            <span class="glyphicon glyphicon-user"></span>
                            Registrarse
                        </a>
                    </li-->
					
					<li>
                        <a href="index.php?s=panel">
                            Panel de control
						</a>
                    </li>
                </ul>
		</div>
	</div>
</nav>