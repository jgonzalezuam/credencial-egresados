<?php 
//session_start(); 
//if (!isset ($_SESSION['email'])){ 
   // header("location: ini_ses/iniciar_sesion.php"); 
  //  exit(); 
//} 
?>

<?php
$matricula = $_POST['matricula'];	

try{
    $client = new SoapClient ("https://siae.uam.mx:8443/sae/webservices/aeugwssiv005dlw.wsdl", 
    array('cache_wsdl'=> WSDL_CACHE_NONE, 'trace' => TRUE, 'connection_timeout'=>150));
    $param = array(
        'PCUENTA' => $matricula,
        'PUSUARIO' => 'rcgvdiod00ow',
        'PIDKEY' => 31,
        'PHASH' => '30313C18FFE728C680EF10B3B87892146485D99397D7C1238CC5348958CD69EF');
    $ready = $client->oSelDatEgrCtaUsr($param);
    //var_dump($ready);
    //echo "RESPONSE: \n" . $client->__getLastResponse() . "\n";
} catch(Exception $e){
    trigger_error($e->getMessage(), E_USER_WARNING);
}

function separaArreglo($cadena){
	
	$campos = explode('|', $cadena);
	$respuesta[] = ['matricula' =>$campos[2], 'rfc'=>$campos[3], 'nombre'=>$campos[4], 'numero'=>$campos[5], 'grado'=>$campos[6], 'numero_dos'=>$campos[7], 'plan'=>$campos[8], 'unidad'=>$campos[9], 'egreso'=>$campos[10], 'estado'=>$campos[11], 'nomgra'=>$campos[12]];
	$respuesta[] = ['matricula' =>$campos[12], 'rfc'=>$campos[13], 'nombre'=>$campos[14], 'numero'=>$campos[15], 'grado'=>$campos[16], 'numero_dos'=>$campos[17], 'plan'=>$campos[18], 'unidad'=>$campos[19], 'egreso'=>$campos[20], 'estado'=>$campos[21], 'nomgra'=>$campos[22]];
	$respuesta[] = ['matricula' =>$campos[22], 'rfc'=>$campos[23], 'nombre'=>$campos[24], 'numero'=>$campos[25], 'grado'=>$campos[26], 'numero_dos'=>$campos[27], 'plan'=>$campos[28], 'unidad'=>$campos[29], 'egreso'=>$campos[30], 'estado'=>$campos[31], 'nomgra'=>$campos[32]];

	return $respuesta;
}

$datos = separaArreglo($client->__getLastResponse());

//echo $client->__getLastResponse();

  
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Registro de Credencial de Egresada y Egresado UAM</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="shortcut icon" href="img/variacion1.jpg" type="image/x-icon">
	<script> 
			function mayus(e) {
		e.value = e.value.toUpperCase();
			}
		</script>
</head>

<div class="container">
		<div class="row mt-3">
			<div class="col">
					<div class="form-group row">
						<div class="col-4 col-md-4 mb-3">
							<img src="img/variacion6.png" alt="">
						</div>
						<div class="col-4 col-md-4 mb-3" >
							<!--	<center><img  src="img/vinculacion_logo.png" width="90px" align="center" alt=""></center>-->
						</div>

						<div class="col-4 col-md-4 mb-3" >
								<img src="img/egresados.png" width="200px" align="right" alt="">
						</div> <br><br>		

						<div class="col-12 col-md-12 mb-2 p-3 text-center" >
							<h2> Proceso para obtener la <strong>Credencial de Egresada y Egresado UAM</strong></h2>
						</div> <br><br><br>		    
               		</div>
			</div>
		</div>
</div>

<div class="container">
		<div class="row mt-3">
			<div class="col">
<?php foreach($datos as $i=>$alumno){?>
				<form action="" method="POST" id="formulario" class="formulario" enctype="multipart/form-data">
					<div class="form-group row">
						
                        <div class="col-2 col-md-2 mb-3">
							<label for="nombre">RFC:</label>
							<input type="text" class="form-control" placeholder="Registro Federal de Contribuyentes" maxlength="13" name="rfc" id="rfc" value="<?php echo $datos[$i]['rfc']; ?>"  disabled>
							<!--<h5 style="font-size: 12px;">Nota: </h5>-->
						</div>
						
						<div class="col-12 col-md-6 mb-3">
							<label for="nombre">Nombre(s) Completo:</label>
							<input type="text" class="form-control" placeholder="Nombre Completo" name="nombre" id="nombre" value="<?php echo $datos[$i]['nombre'];  ?> " disabled>
							<!--<h5 style="font-size: 12px;">Nota: Formato: Nombre(s) / Apellido Paterno / Apellido Materno</h5>-->
						</div>

						<div class="col-2 col-md-2 mb-3">
								<label for="matricula">Matrícula:</label>
								<input type="text"  class="form-control maxle" placeholder="Matrícula" name="matricula" id="matricula" required value="<?php echo $datos[$i]['matricula']; ?>"  disabled>
								<!--<h5 style="font-size: 12px;">Nota: </h5>-->
							
						</div>

                        <div class="col-2 col-md-2 mb-3">
								<label for="matricula">Clave Nivel:</label>
								<input type="text" class="form-control" placeholder="Clave Nivel" name="clave_nivel" id="clave_nivel" value="<?php echo $datos[$i]['numero']; ?>"  disabled>
								<!--<h5 style="font-size: 12px;">Nota: </h5>-->
                        </div>

                        <div class="col-2 col-md-2 mb-3">
								<label for="matricula">Descripción Nivel:</label>
								<input type="text" class="form-control" placeholder="Descripción Nivel" name="nivel" id="nivel" value="<?php echo $datos[$i]['grado']; ?>"  disabled>
								<!--<h5 style="font-size: 12px;">Nota: </h5>-->
                        </div>

                        <div class="col-2 col-md-2 mb-3">
								<label for="matricula">Clave del Plan:</label>
								<input type="text" class="form-control" placeholder="Clave del Plan" name="clave_plan" id="clave_plan" value="<?php echo $datos[$i]['numero_dos']; ?>"  disabled>
								<!--<h5 style="font-size: 12px;">Nota: </h5>-->
                        </div>
                        
                        <div class="col-6 col-md-6 mb-3">
								<label for="matricula">Descripción del Plan:</label>
								<input type="text" class="form-control" placeholder="Descripción del Plan" name="plan" id="plan" value="<?php echo $datos[$i]['plan']; ?>" disabled>
								<!--<h5 style="font-size: 12px;">Nota: </h5>-->
						</div>

                        <div class="col-2 col-md-2 mb-3">
								<label for="matricula">Unidad Universitaria:</label>
								<input type="text" class="form-control" placeholder="Unidad Universitaria" name="unidad" id="unidad" value="<?php echo $datos[$i]['unidad']; ?>" disabled>
								<!--<h5 style="font-size: 12px;">Nota: </h5>-->
                        </div>
                        
                        <div class="col-2 col-md-2 mb-3">
								<label >Año de Egreso:</label>
								<input type="text" class="form-control" placeholder="Año de Egreso" name="egreso" id="egreso" value="<?php echo $datos[$i]['egreso']; ?>" disabled>
								<!--<h5 style="font-size: 12px;">Nota: </h5>-->
						</div>

						<div class="col-4 col-md-4 mb-3">
								<label>Estado Académico:</label>
								<input type="text" class="form-control" placeholder="Estado" name="nomgra" id="nomgra" value="<?php echo $datos[$i]['nomgra']; ?>" disabled>
								<!--<h5 style="font-size: 12px;">Nota: </h5>-->
								
						</div>
					</div>				

					<div class="form-group row">
						<div class="col-12 text-center">
							<div class="row justify-content-center">
								<div class="col-12 col-sm-9 col-md-4">
									<!--<button class="btn btn-dark  form-inline" type="submit" name="cargar_datos" onchange="toggleButton()" >Verificar datos</button>-->
									<!--<a class="btn btn-dark text-white" href="ini_ses/php/salir.php">Salir</a>-->
									<!--<a class="btn btn-dark text-white" href="index.php">Regresar</a>-->
									<!--<button class="btn btn-dark  form-inline" type="reset">Reiniciar</button>-->
								   <!--<a href="../index.php"><button class="btn btn-success  form-inline" type="button" >Inicio</button></a>-->
								</div>
							</div>					
						</div>
					</div>

        </form>
<?php }?>                
               
			</div>
		</div>
	</div>


	<div class="container">
		<div class="row mt-3">
			<div class="col">
				<form action="insertar_archivos.php" method="POST" id="formulario" class="formulario" enctype="multipart/form-data">
					<div class="form-group row">
					
					<div class="col-4 col-md-4  p-4">
						<input type="text"  class="form-control " placeholder="Matrícula" name="matricula" id="matricula" required value="<?php echo $datos[$i]['matricula']; ?>"  >
					</div>
					<div class="col-4 col-md-4  p-4">
						<input type="text" class="form-control" placeholder="Nombre Completo" name="nombre" id="nombre" value="<?php echo $datos[$i]['nombre'];  ?> " >
					</div>
					<div class="col-4 col-md-4  p-4">
						<input type="text" class="form-control" placeholder="Registro Federal de Contribuyentes" maxlength="13" name="rfc" id="rfc" value="<?php echo $datos[$i]['rfc']; ?>"  >
					</div>
					<div class="col-4 col-md-4  p-4">
						<input type="text" class="form-control" placeholder="Unidad Universitaria"  name="unidad" id="unidad" value="<?php echo $datos[$i]['unidad']; ?>"  >
					</div>
					<div class="col-3 col-md-3  p-4">
						<input type="text" class="form-control" placeholder="Nivel"  name="nivel" id="nivel" value="<?php echo $datos[$i]['grado']; ?>"  >
					</div>

					<div class="col-2 col-md-2  p-4">
                		<select class="form-control col-12" style="font-size: 18px;" type="text" name="gra" id="gra" required>
                			<option value="">Elige </option>
							<option value="Lic.">Lic.</option>
                       		<option value="Mtr.">Mtr.</option>
                       		<option value="Dr.">Dr.</option>
                        </select>
					</div>
					
					<div class="col-3 col-md-3  p-4">
                		<select class="form-control col-12" style="font-size: 13px;" type="text" name="estado" id="estado" required>
                			<option value="">Selecciona una opción </option>
							<option value="EGRESADA">EGRESADA</option>
                       		<option value="EGRESADO">EGRESADO</option>
                        </select>
					</div>
				
                        
						<div class="col-2 col-md-2  p-4">
						<a class="btn btn-dark text-white" href="codigo_barra/index.php" target="_blank">Obtener código</a>
						</div>

						
						<div class="col-5 col-md-5 mb-3">
							<label for="foto">Código de Barras de la Matrícula:</label>
							<input type="file" name="codigo" id="codigo" class="form-control" required>
							<!--<h5 style="font-size: 12px;">Nota: La Fotografía debe estar en formato PNG en un tamaño de 480px X 640px</h5>-->
						</div>

						<div class="col-4 col-md-5 mb-3">
							<label for="foto">Fotografía:</label>
							<input type="file" name="foto" id="foto" class="form-control" required>
							<h5 style="font-size: 12px;">Nota: La fotografía debe estar en formato PNG en un tamaño de 480px X 640px</h5>
						</div>

						<div class="col-6 col-md-6 mb-3">
							<label for="foto">Firma:</label>
							<input type="file" name="firma" id="firma" class="form-control" required>
							<h5 style="font-size: 12px;">Nota: La firma debe estar en formato PNG </h5>
						</div>

						<div class="col-6 col-md-6 mb-3">
							<label for="foto">Código QR:</label>
							<input type="file" name="qr" id="qr" class="form-control" required>
							<!--<h5 style="font-size: 12px;">Nota: La Fotografía debe estar en formato PNG en un tamaño de 480px X 640px</h5>-->
						</div>
						
					</div>				

					<div class="form-group row">
						<div class="col-12 text-center">
							<div class="row justify-content-center">
								<div class="col-12 col-sm-9 col-md-4">
									<button class="btn btn-dark  form-inline" type="submit" name="cargar_datos" onchange="toggleButton()" >Cargar archivos</button>
									<!--<a class="btn btn-dark text-white" href="ini_ses/php/salir.php">Salir</a>-->
									<!--<a class="btn btn-dark text-white" href="index.php">Regresar</a>-->
									<!--<button class="btn btn-dark  form-inline" type="reset">Reiniciar</button>-->
								   <!--<a href="../index.php"><button class="btn btn-success  form-inline" type="button" >Inicio</button></a>-->
								</div>
							</div>					
						</div>
					</div>

        </form>
              
               
			</div>
		</div>
	</div>
	
    
    <script src="../js/jquery-3.2.1.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>