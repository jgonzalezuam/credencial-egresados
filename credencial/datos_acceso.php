<?php 
//session_start(); 
//if (!isset ($_SESSION['email'])){ 
   // header("location: ini_ses/iniciar_sesion.php"); 
  //  exit(); 
//} 
?>

<?php
$matricula = $_POST['matricula'];  
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Solicitud de Acceso</title>
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
							<h2> Solicitud de Acceso para la <strong>Credencial de Egresada y Egresado UAM</strong></h2>
						</div> <br><br><br>		    
               		</div>
			</div>
		</div>
</div>


	<div class="container">
		<div class="row mt-3">
			<div class="col">
				<form action="insertar_accesos.php" method="POST" id="formulario" class="formulario" enctype="multipart/form-data">
					<div class="form-group row">
					
					<div class="col-12 col-md-12  p-2">
                    <center><label>Matrícula</label></center>
						<input type="text"  class="form-control " placeholder="Matrícula" name="matricula" id="matricula" required value="<?php echo $matricula = $_POST['matricula'];   ?>"  >
					</div>

                    <div class="col-12 col-md-12 mb-2 p-2 text-center" >
							<h5> Escriba sus datos tal como fueron registrados en el Sistema de Administración Escolar.</h5>
					</div> <br>

                         
					<div class="col-6 col-md-6  p-2">
                    <label>Apellido Paterno:</label>
						<input type="text" class="form-control" placeholder="Apellido Paterno" name="apellido_paterno" id="apellido_paterno" required>
					</div>
					<div class="col-6 col-md-6  p-2">
                    <label>Apellido Materno:</label>
						<input type="text" class="form-control" placeholder="Apellido Materno"  name="apellido_materno" id="apellido_materno" required >
					</div>
					<div class="col-6 col-md-6  p-2">
                    <label>Nombre(s):</label>
						<input type="text" class="form-control" placeholder="Nombre(s)"  name="nombre" id="nombre" required>
					</div>
					<div class="col-6 col-md-6  p-2">
                    <label>Fecha de Nacimiento:</label>
						<input type="date" class="form-control" placeholder="Fecha de Nacimiento"  name="fec_nac" id="fec_nac" required >
					</div>

                    <div class="col-6 col-md-6  p-2">
                    <label>Unidad Universitaria:</label>
                    <select class="custom-select" style="font-size: 13px;" name="unidad" id="unidad" required onchange="cargarCoordinaciones(); cargarDepartamentos();">
                        <option value="">Selecciona la Unidad </option>
                       <!-- <option value="AZCAPOTZALCO">AZCAPOTZALCO</option>
                        <option value="CUAJIMALPA">CUAJIMALPA</option>
                        <option value="IZTAPALAPA">IZTAPALAPA</option>                        
                        <option value="LERMA">LERMA</option>
                        <option value="XOCHIMILCO">XOCHIMILCO</option>-->
                    </select>
					</div>

                    <!--<div class="col-6 col-md-6  p-2">
                    <label>Unidad Universitaria:</label>
						<input type="text" class="form-control" placeholder="Unidad Universitaria"  name="unidad" id="unidad"  onchange="cargarCoordinaciones(); cargarDepartamentos();">
					</div>-->

                    <div class="col-6 col-md-6  p-2">
                    <label>División:</label>
                    <select class="custom-select col-12" style="font-size: 13px;" name="division" id="division" required>
                        <option value="">Elige una División </option>
                        <!--<option value="DIVISION EN CIENCIAS BASICAS E INGENIERIA (DCBI)">DIVISIÓN EN CIENCIAS BÁSICAS E INGENIERÍA (DCBI)</option>
                        <option value="DIVISION EN CIENCIAS BIOLOGICAS Y DE LA SALUD (DCBS) ">DIVISIÓN EN CIENCIAS BIOLÓGICAS Y DE LA SALUD (DCBS) </option>
                        <option value="DIVISION EN CIENCIAS DE LA COMUNICACION Y DISENO (DCCD)">DIVISIÓN EN CIENCIAS DE LA COMUNICACIÓN Y DISEÑO (DCCD)</option>                        
                        <option value="DIVISION EN CIENCIAS NATURALES E INGENIERIA (DCNI)">DIVISIÓN EN CIENCIAS NATURALES E INGENIERÍA (DCNI)</option>
                        <option value="DIVISION EN CIENCIAS SOCIALES Y HUMANIDADES (DCSH)">DIVISIÓN EN CIENCIAS SOCIALES Y HUMANIDADES (DCSH)</option>
                        <option value="DIVISION EN CIENCIAS Y ARTES PARA EL DISENO (DCYAD)">DIVISIÓN EN CIENCIAS Y ARTES PARA EL DISEÑO (DCYAD)</option>-->
                    </select>
					</div>

                    <!--<div class="col-6 col-md-6  p-2">
                    <label>División:</label>
						<input type="text" class="form-control" placeholder="División"  name="division" id="division"  >
					</div>-->

                       <div class="col-6 col-md-6  p-2">
                    <label>Carrera:</label>
                    <select class="custom-select col-12" style="font-size: 13px;" name="carrera" id="carrera" required> 
                        <option value="">Elige una Carrera </option>
                        <!--<option value="DIVISION EN CIENCIAS BASICAS E INGENIERIA (DCBI)">DIVISIÓN EN CIENCIAS BÁSICAS E INGENIERÍA (DCBI)</option>
                        <option value="DIVISION EN CIENCIAS BIOLOGICAS Y DE LA SALUD (DCBS) ">DIVISIÓN EN CIENCIAS BIOLÓGICAS Y DE LA SALUD (DCBS) </option>
                        <option value="DIVISION EN CIENCIAS DE LA COMUNICACION Y DISENO (DCCD)">DIVISIÓN EN CIENCIAS DE LA COMUNICACIÓN Y DISEÑO (DCCD)</option>                        
                        <option value="DIVISION EN CIENCIAS NATURALES E INGENIERIA (DCNI)">DIVISIÓN EN CIENCIAS NATURALES E INGENIERÍA (DCNI)</option>
                        <option value="DIVISION EN CIENCIAS SOCIALES Y HUMANIDADES (DCSH)">DIVISIÓN EN CIENCIAS SOCIALES Y HUMANIDADES (DCSH)</option>
                        <option value="DIVISION EN CIENCIAS Y ARTES PARA EL DISENO (DCYAD)">DIVISIÓN EN CIENCIAS Y ARTES PARA EL DISEÑO (DCYAD)</option>-->
                    </select>
					</div>


                   <!-- <div class="col-6 col-md-6  p-2">
                    <label>Carrera:</label>
						<input type="text" class="form-control" placeholder="Carrera"  name="carrera" id="carrera"  >
					</div>-->

                    <div class="col-12 col-md-12 mb-2 p-2 text-center" >
							<h5>Proporcione una dirección de correo electrónico, a través de la cual estará interactuando para completar el proceso para acceder al módulo.</h5>
					</div> <br>		
                    <label>Correo Electrónico:</label>
						<input type="email" class="form-control" placeholder="Correo Electrónico"  name="email" id="email" required >
					</div>

	

                   
					<div class="form-group row">
						<div class="col-12 text-center">
							<div class="row justify-content-center">
								<div class="col-12 col-sm-9 col-md-4">
									<button class="btn btn-dark  form-inline" type="submit" name="cargar_datos" onchange="toggleButton()"  >Enviar</button>
									<!--<a class="btn btn-dark text-white" href="ini_ses/php/salir.php">Salir</a>-->
									<!--<a class="btn btn-dark text-white" href="index.php">Regresar</a>-->
									<!--<button class="btn btn-dark  form-inline" type="reset">Reiniciar</button>-->
								   <!--<a href="../index.php"><button class="btn btn-success  form-inline" type="button" >Inicio</button></a>-->
								</div>
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
    


     <script>
    
    function cargarUnidades() {
    var array = ["Azcapotzalco", "Cuajimalpa", "Iztapalapa", "Lerma", "Xochimilco"];
    array.sort();
    addOptions("unidad", array);
}




//Función para agregar opciones a un <select>.
function addOptions(domElement, array) {
    var selector = document.getElementsByName(domElement)[0];
    for (unidad in array) {
        var opcion = document.createElement("option");
        opcion.text = array[unidad];
        // Añadimos un value a los option para hacer mas facil escoger los pueblos
        opcion.value = array[unidad].toLowerCase()
        selector.add(opcion);
    }
}



function cargarCoordinaciones() {
    // Objeto de provincias con pueblos
    var listaCoordinaciones = {
      azcapotzalco: ["Division de Ciencias Basicas e Ingenieria (CBI)", "Division de Ciencias y Artes para el Diseño (CyAD)", "Division de Ciencias Sociales y Humanidades (CSH)"],
      cuajimalpa: ["Division de Ciencias Naturales e Ingenieria (CNI)", "Division de Ciencias de la Comunicación y Diseño (CCD)", "Division de Ciencias Sociales y Humanidades (CSH)"],
      iztapalapa: ["Division de Ciencias Basicas e Ingenieria (CBI)", "Division de Ciencias Biologicas y de la Salud (CBS)", "Division de Ciencias Sociales y Humanidades (CSH)"],
      lerma: ["Division de Ciencias Basicas e Ingenieria (CBI)", "Division de Ciencias Biologicas y de la Salud (CBS)", "Division de Ciencias Sociales y Humanidades (CSH)"],
      xochimilco: ["Division de Ciencias y Artes para el Diseño (CyAD)", "Division de Ciencias Biologicas y de la Salud (CBS)", "Division de Ciencias Sociales y Humanidades (CSH)"]
    }
    
    var unidades = document.getElementById('unidad')
    var coordinaciones = document.getElementById('division')
    var unidadSeleccionada = unidades.value
    
    // Se limpian los pueblos
    coordinaciones.innerHTML = '<option value="">Seleccione una División </option>'
    
    if(unidadSeleccionada !== ''){
      // Se seleccionan los pueblos y se ordenan
      unidadSeleccionada = listaCoordinaciones[unidadSeleccionada]
      unidadSeleccionada.sort()
    
      // Insertamos los pueblos
      unidadSeleccionada.forEach(function(division){
        let opcion = document.createElement('option')
        opcion.value = division
        opcion.text = division
        coordinaciones.add(opcion)
      });
    }
    
  }

  
function cargarDepartamentos() {
    // Objeto de provincias con pueblos
    var listaDepartamentos = {
        azcapotzalco: ["Licenciatura en Ingenieria Ambiental","Licenciatura en Ingenieria Civil","Licenciatura en Ingenieria en Computacion","Licenciatura en Ingenieria Electrica","Licenciatura en Ingenieria Electronica","Licenciatura en Ingenieria Fisica","Licenciatura en Ingenieria Industrial","Licenciatura en Ingenieria Mecanica","Licenciatura en Ingenieria Metalurgica","Licenciatura en Ingenieria Quimica","Licenciatura en Administracion","Licenciatura en Derecho","Licenciatura en Economia","Licenciatura en Sociologia","Licenciatura en Arquitectura","Licenciatura en Diseño de la Comunicacion Grafica","Licenciatura en Diseño de Proyectos Sustentables","Licenciatura en Diseño Industrial",
      "Maestria en Ciencias de la Computacion","Maestria en Ciencias en Ingenieria Electromagnetica","Maestria y Doctorado en Ingenieria Estructural","Maestria en Ingenieria de Procesos","Maestria en Optimizacion","Posgrado en Ciencias e Ingenieria (Ambientales, de Materiales)","Maestria en Derecho","Maestria en Economia","Posgrado en Historiografia","Maestria en Literatura Mexicana Contemporanea","Maestria en Planeacion y Politicas Metropolitanas","Maestria en Sociologia","Maestria en Ciencias Economicas","Posgrado Integral en Ciencias Administrativas (PICA)","Maestria en Diseño Bioclimatico","Maestria en Diseño y Desarrollo de Productos","Maestria en Diseño y Estudios Urbanos","Maestria en Diseño, Planificacion y Conservacion de Paisajes y Jardines","Maestria en Diseño para la Rehabilitacion, Recuperacion y Conservacion del Patrimonio Construido","Maestria en Diseño y Visualizacion de la Informacion","Posgrado en Procesos Culturales para el Diseño y el Arte",
      "Doctorado en Ingenieria Estructural","Doctorado en Ingenieria de Procesos","Doctorado en Optimizacion","Doctorado en Intervencion en las Organizaciones","Doctorado en Sociologia","Doctorado en Ciencias Economicas","Posgrado Integral en Ciencias Administrativas","Doctorado en Diseño Bioclimatico","Doctorado en Diseño y Desarrollo de Productos","Doctorado en Diseño y Estudios Urbanos","Doctorado en Diseño, Planificacion y Conservacion de Paisajes y Jardines","Doctorado en Diseño para la Rehabilitacion, Recuperacion y Conservacion del Patrimonio Construido","Doctorado en Diseño y Visualizacion de la Informacion",
      "Especializacion en Diseño Ambiental","Especializacion en Diseño, Planificacion y Conservacion de Paisajes y Jardines","Especializacion en Economia y Gestion del Agua","Especializacion en Etnografia Politica y Espacio Publico","Especializacion en Literatura Mexicana del Siglo XX","Especializacion en Sociologia de Educacion Superior"],
      cuajimalpa: ["Licenciatura en Biologia Molecular","Licenciatura en Ingenieria Biologica","Licenciatura en Ingenieria en Computacion","Licenciatura en Matematicas Aplicadas","Licenciatura en Administracion","Licenciatura en Derecho","Licenciatura en Estudios Socioterritoriales","Licenciatura en Humanidades","Licenciatura en Ciencias de la Comunicacion","Licenciatura en Diseño","Licenciatura en Tecnologias y Sistemas de Informacion",
      "Maestria en Ciencias Naturales e Ingenieria","Maestria en Ciencias Sociales y Humanidades","Maestria en Diseño, Informacion y Comunicacion",
      "Doctorado en Ciencias Biologicas y de la Salud","Doctorado en Ciencias Naturales e Ingenieria","Doctorado en Ciencias Sociales y Humanidades",
      "Especializacion en Ciencias Naturales e Ingenieria"],
      iztapalapa: ["Licenciatura en Biologia","Licenciatura en Biologia Experimental","Licenciatura en Hidrobiologia","Licenciatura en Ingenieria de los Alimentos","Licenciatura en Ingenieria Bioquimica Industrial","Licenciatura en Produccion Animal","Licenciatura en Ciencias Atmosfericas","Licenciatura en Computacion", "Licenciatura en Fisica","Licenciatura en Ingenieria Biomedica","Licenciatura en Ingenieria Electronica","Licenciatura en Ingenieria en Energia","Licenciatura en Ingenieria Hidrologica","Licenciatura en Ingenieria Quimica","Licenciatura en Matematicas","Licenciatura en Quimica","Licenciatura en Administracion","Licenciatura en Antropologia Social","Licenciatura en Ciencia Politica","Licenciatura en Economia","Licenciatura en Filosofia","Licenciatura en Geografia Humana","Licenciatura en Historia","Licenciatura en Lingüistica","Licenciatura en Psicologia Social","Licenciatura en Sociologia",
      "Maestria en Biologia","Maestria en Biologia Experimental","Maestria en Biologia de la Reproduccion Animal","Maestria en Biotecnologia","Maestria en Ciencias (Fisica)","Maestria en Ciencias (Ingenieria Biomedica)","Maestria en Ciencias (Ingenieria Quimica)","Maestria en Ciencias (Matematicas)","Maestria en Ciencias (Matematicas Aplicadas e Industriales)","Maestria en Ciencias (Quimica)","Maestria en Ciencias y Tecnologias de la Informacion","Maestria en Energia y Medio Ambiente","Maestria en Ciencias Antropologicas","Maestria en Estudios Organizacionales","Maestria en Estudios Sociales","Maestria en Humanidades","Maestria en Psicologia Social",
      "Doctorado en Ciencias (Fisica)","Doctorado en Ciencias (Ingenieria Biomedica)","Doctorado en Ciencias (Ingenieria Quimica)","Doctorado en Ciencias (Matematicas)","Doctorado en Ciencias (Quimica)","Doctorado en Ciencias y Tecnologias de la Informacion", "Doctorado en Energia y Medio Ambiente","Doctorado en Biologia Experimental","Doctorado en Biotecnologia","Doctorado en Ciencias Biologicas y de la Salud","Doctorado en Ciencias Antropologicas","Doctorado en Estudios Organizacionales","Doctorado en Estudios Sociales","Doctorado en Humanidades","Doctorado en Ciencias Economicas","Posgrado Integral en Ciencias Administrativas",
      "Especializacion en Acupuntura y Fitoterapia","Especializacion en Biotecnologia","Especializacion en Ciencias Antropologicas","Especializacion en Fisica Medica Clinica","Especializacion en Politicas Culturales y Gestion Cultural"],
      lerma: ["Licenciatura en Biologia Ambiental","Licenciatura en Ciencia y Tecnologia de Alimentos","Licenciatura en Psicologia Biomedica","Licenciatura en Ingenieria en Computacion y Telecomunicaciones","Licenciatura en Ingenieria en Recursos Hidricos","Licenciatura en Ingenieria en Sistemas Mecatronicos Industriales","Licenciatura en Arte y Comunicacion Digitales","Licenciatura en Educacion y Tecnologias Digitales","Licenciatura en Politicas Publicas",
      "Maestria en Ciencias Sociales",
      "Doctorado en Ciencias Biologicas y de la Salud","Doctorado en Ciencias Sociales"],
      xochimilco: ["Licenciatura en Agronomia","Licenciatura en Biologia","Licenciatura en Enfermeria","Licenciatura en Estomatologia (Odontologia)","Licenciatura en Medicina","Licenciatura en Medicina Veterinaria y Zootecnia","Licenciatura en Nutricion Humana","Licenciatura en Quimica Farmaceutica Biologica","Licenciatura en Administracion","Licenciatura en Comunicacion Social","Licenciatura en Economia","Licenciatura en Politica y Gestion Social","Licenciatura en Psicologia","Licenciatura en Sociologia","Licenciatura en Arquitectura","Licenciatura en Diseño de la Comunicacion Grafica","Licenciatura en Diseño Industrial","Licenciatura en Planeacion Territorial",
      "Maestria en Ciencias Agropecuarias","Maestria y Doctorado en Ciencias Farmaceuticas","Maestria en Ciencias Odontologicas","Maestria en Ciencias en Salud de los Trabajadores","Maestria en Ecologia Aplicada","Maestria en Enfermeria de Practica Avanzada","Maestria en Medicina Social","Maestria en Patologia y Medicina Bucal","Maestria en Poblacion y Salud","Maestria en Rehabilitacion Neurologica","Maestria en Comunicacion y Politica","Maestria en Desarrollo y Planeacion de la Educacion","Maestria en Desarrollo Rural","Maestria en Economia, Gestion y Politicas de Innovacion","Maestria en Estudios de la Mujer","Maestria en Politicas Publicas","Maestria en Psicologia Social de Grupos e Instituciones","Maestria en Relaciones Internacionales","Maestria en Sociedades Sustentables","Maestria en Ciencias Economicas","Posgrado Integral en Ciencias Administrativas (PICA)","Maestria en Ciencias y Artes para el Diseño","Maestria en Diseño y Produccion Editorial","Maestria en Reutilizacion del Patrimonio Edificado",
      "Doctorado en Ciencias Agropecuarias","Doctorado en Ciencias Farmaceuticas","Doctorado en Ciencias en Salud Colectiva","Doctorado en Ciencias Biologicas y de la Salud","Doctorado en Ciencias Sociales","Doctorado en Desarrollo Rural","Doctorado en Estudios Feministas","Doctorado en Humanidades","Doctorado en Ciencias Economicas","Posgrado Integral en Ciencias Administrativas","Doctorado en Ciencias y Artes para el Diseño",
      "Especializacion en Desarrollo Rural","Especializacion en Poblacion y Salud"]
    }
    
    var unidades = document.getElementById('unidad')
    var departamentos = document.getElementById('carrera')
    var unidadSeleccionada = unidades.value
    
    // Se limpian los pueblos
    departamentos.innerHTML = '<option value="">Selecciona una Carrera</option>'
    
    if(unidadSeleccionada !== ''){
      // Se seleccionan los pueblos y se ordenan
      unidadSeleccionada = listaDepartamentos[unidadSeleccionada]
      unidadSeleccionada.sort()
    
      // Insertamos los pueblos
      unidadSeleccionada.forEach(function(carrera){
        let opcion = document.createElement('option')
        opcion.value = carrera
        opcion.text = carrera
        departamentos.add(opcion)
      });
    }
    
  }
  
 // Iniciar la carga de provincias solo para comprobar que funciona
cargarUnidades();

    </script>
</body>
</html>