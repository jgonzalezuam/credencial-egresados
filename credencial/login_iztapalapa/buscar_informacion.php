<?php session_start();

// Comprobamos tenga sesion, si no entonces redirigimos y MATAMOS LA EJECUCION DE LA PAGINA.
if (isset($_SESSION['usuario'])) {
} else {
	header('Location: login.php');
	die();
}

?>
<?php
$matricula = $_REQUEST['matricula'];	

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
  if(isset($campos[2])){$respuesta[] = ['matricula' =>$campos[2], 'rfc'=>$campos[3], 'nombre'=>$campos[4], 'numero'=>$campos[5], 'grado'=>$campos[6], 'numero_dos'=>$campos[7], 'plan'=>$campos[8], 'unidad'=>$campos[9], 'egreso'=>$campos[10], 'estado'=>$campos[11], 'nomgra'=>$campos[12]];}
	if(isset($campos[12])){$respuesta[] = ['matricula' =>$campos[12], 'rfc'=>$campos[13], 'nombre'=>$campos[14], 'numero'=>$campos[15], 'grado'=>$campos[16], 'numero_dos'=>$campos[17], 'plan'=>$campos[18], 'unidad'=>$campos[19], 'egreso'=>$campos[20], 'estado'=>$campos[21], 'nomgra'=>$campos[22]];}
	if(isset($campos[22])){$respuesta[] = ['matricula' =>$campos[22], 'rfc'=>$campos[23], 'nombre'=>$campos[24], 'numero'=>$campos[25], 'grado'=>$campos[26], 'numero_dos'=>$campos[27], 'plan'=>$campos[28], 'unidad'=>$campos[29], 'egreso'=>$campos[30], 'estado'=>$campos[31], 'nomgra'=>$campos[32]];}

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
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="shortcut icon" href="../img/variacion1.jpg" type="image/x-icon">
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
<?php foreach($datos as $i=>$alumno){
		$matricula = intval(preg_replace('/[^0-9]+/', '', $datos[$i]['matricula']), 10);
		$estado_academico = preg_replace('/[^A-Z <]+/', '', $datos[$i]['nomgra']);
		$estado_filtrado = explode('<', $estado_academico);
		?>
				<form action="" method="POST" id="formulario_<?php echo $i;?> " class="formulario" enctype="multipart/form-data">
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
								<input type="text"  class="form-control maxle" placeholder="Matrícula" name="matricula" id="matricula" required value="<?php echo $matricula; ?>"  disabled>
								<!--<h5 style="font-size: 12px;">Nota: </h5>-->
							
						</div>

                        <div class="col-2 col-md-2 mb-3">
								<label for="matricula">Clave Nivel:</label>
								<input type="text" class="form-control" placeholder="Clave Nivel" name="clave_nivel" id="clave_nivel" value="<?php echo $datos[$i]['numero']; ?>"  disabled>
								<!--<h5 style="font-size: 12px;">Nota: </h5>-->
                        </div>

                        <div class="col-2 col-md-2 mb-3">
								<label for="matricula">Descripción Nivel:</label>
                <?php //$tmp = explode('&', $datos[$i]['grado']);?>
								<input type="text" class="form-control" placeholder="Descripción Nivel" name="nivel" id="nivel" value="<?php echo $datos[$i]['grado']; //echo $tmp[0];   ?>"  disabled>
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
								<input type="text" class="form-control" placeholder="Estado" name="nomgra" id="nomgra" value="<?php echo $estado_filtrado[0];?>" disabled>
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
<?php }

include("../conexion_1.php");
try {
 $query = "SELECT * FROM egresados_multimedia"; // Reemplaza 'tu_tabla' con el nombre real de la tabla
 $stmt = $db->query($query);
} catch (PDOException $e) {
 echo "Error de consulta: " . $e->getMessage();
}
?>                
               
			</div>
		</div>
	</div>


	<div class="container">
		<div class="row mt-3">
			<div class="col"> 
				<form action="disenos_credencial.php" method="POST" id="formulario" class="formulario" enctype="multipart/form-data">
					<div class="form-group row">
					
					<!--<div class="col-3 col-md-3 p-3">
					<label >Última matrícula:</label>-->
					<?php //$tmp2 = explode('&', $datos[$i]['matricula']);?>
					<!--	<input type="text"  class="form-control " placeholder="Matrícula" name="matricula" id="matricula" required value="<?php echo substr($tmp2[1],0,15); //echo $datos[$i]['matricula']; ?>"  >
					</div>
					<div class="col-4 col-md-4  p-3">
                    <label >Nombre del solicitante:</label>
						<input type="text" class="form-control" placeholder="Nombre Completo" name="nombre" id="nombre" value="<?php echo $datos[$i]['nombre'];  ?> " >
					</div>
					<div class="col-2 col-md-2  p-3">
                    <label >RFC:</label>
						<input type="text" class="form-control" placeholder="Registro Federal de Contribuyentes" maxlength="13" name="rfc" id="rfc" value="<?php echo $datos[$i]['rfc']; ?>"  >
					</div>
					<div class="col-3 col-md-3  p-3">
                    <label >Última unidad de egreso:</label>
						<input type="text" class="form-control" placeholder="Unidad Universitaria"  name="unidad" id="unidad" value="<?php echo $datos[$i]['unidad']; ?>"  >
					</div>
					<div class="col-3 col-md-3  p-3">
                    <label >Último nivel de egreso:</label>
						<input type="text" class="form-control" placeholder="Nivel"  name="nivel" id="nivel" value="<?php echo $datos[$i]['grado']; ?>"  >
					</div>-->

                    <div class="col-4 col-md-4  p-3">
                    <label>N° de programas de Egreso del solicitante</label>
                		<select class="form-control col-12" style="font-size: 13px;" type="text" name="diseno" id="diseno" required>
                            <option >Elige una opción</option>
                            <option value="1">Diseño 1 - Credencial Fisica </option>
							<option value="2">Diseño 2 - Credencial Fisica</option>
                       		<option value="3">Diseño 3 - Credencial Fisica</option>
							<option value="4">Diseño 1 - Credencial Digital </option>
							<option value="5">Diseño 2 - Credencial Digital</option>
                       		<option value="6">Diseño 3 - Credencial Digital</option>
                        </select>
					</div>

<?php //while ($dato = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>  

                   <!-- <div class="col-3 col-md-3  p-3">						
					<label >Fecha de solicitud:</label>
						<input type="date" class="form-control" placeholder="Nivel"  name="fec_emision" id="fec_emision" value="<?php echo $dato['fec_emision']; ?>" >
					</div>-->

 
                    
					

   
                <!--    <div class="col-4 col-md-4  p-3">-->
                <!--        <label>Código de barras (matrícula):</label>-->
                <!--        <img width="80%" height="55px" src="data:image/jpg;base64,<?php //echo base64_encode($dato["codigo"]); ?>" alt="">-->
				<!--	</div>-->
                <!--    <div class="col-4 col-md-4  p-3">-->
                <!--        <label> Fotografía del solicitante:</label>-->
                <!--        <img width="120px" height="120px" src="data:image/jpg;base64,<?php //echo base64_encode($dato["foto"]); ?>" alt=""></td>-->
                <!--    </div>-->
                <!--    <div class="col-4 col-md-4  p-3">-->
                <!--        <label>Firma del solicitante:</label>-->
                <!--        <img width="120px" height="100px" src="data:image/jpg;base64,<?php //echo base64_encode($dato["firma"]); ?>" alt=""></td>-->
                <!--    </div>-->
<?php
          //          }

?>
						
					</div>				

					<div class="form-group row">
						<div class="col-12 text-center">
							<div class="row justify-content-center">
								<div class="col-12 col-sm-9 col-md-4">
									<button class="btn btn-dark  form-inline" type="submit" name="cargar_datos" onchange="toggleButton()" >Generar Credencial</button>
									<a href="login_registro/cerrar.php"><button class="btn btn-dark  form-inline" type="button"> Cerrar Sesión</button></a>
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