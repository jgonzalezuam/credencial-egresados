<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Archivo</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="icon" type="imagen/x-icon" href="../img/variacion1.jpg">
</head>
<body>
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container"  >
        <a class="navbar-brand js-scroll-trigger" ><img src="../img/variacion6.png" alt=""></a>
          <a class="navbar-brand js-scroll-trigger" ><img src="../img/egresados.png" alt="" style="height:75px;" ></a>
           
           
        </div>
    </nav>
    <br>
        <form class="m-auto w-50 mt-2 mb-2 p-5" method="POST" enctype="multipart/form-data" action="acciones/insertar.php">
            <div class="mb-2">
                <label class="form-label">Nombre del Plan, Programa o Proyecto</label>
                <input class='form-control form-control-sm' type="text" name="nombreArchivo" required> 
            </div>
            <div class="mb-2">
                <label class="form-label">Nombre de la Empresa</label>
                <input class='form-control form-control-sm' type="text" name="nombreEmpresa" required> 
            </div>
            <div class="mb-2">
                <label class="form-label">Proceso</label>
                <select class="form-select col-12" style="font-size: 13px;" name="proceso" required>
                        <!--<option selected>En que proceso se encuentra tu documento </option>
                        <option value="INICIO DEL PROCESO">INICIO DEL PROCESO</option>-->
                        <option selected value="REVISION">REVISIÓN</option>           
                      <!--  <option value="APROBADO">APROBADO</option>
                        <option value="RECHAZADO">RECHAZADO</option>-->       
                    </select>
            </div>
            <div class="mb-2">
                <label class="form-label">Unidad</label>
                <select class='form-control form-control-sm' type="text" name="unidad" id="unidad" required onchange="cargarCoordinaciones(); cargarDepartamentos();">
                <option value="">Selecciona la Unidad </option>
                       <!-- <option value="AZCAPOTZALCO">AZCAPOTZALCO</option>
                        <option value="CUAJIMALPA">CUAJIMALPA</option>
                        <option value="IZTAPALAPA">IZTAPALAPA</option>                        
                        <option value="LERMA">LERMA</option>
                        <option value="XOCHIMILCO">XOCHIMILCO</option>-->
                    </select>
            </div>
            <div class="mb-2">
                <label class="form-label">División</label>
                <select class='form-control form-control-sm' type="text" name="coordinacion" id="coordinacion" required> 
                <option value="">Selecciona la División </option>
                       <!-- <option value="AZCAPOTZALCO">AZCAPOTZALCO</option>
                        <option value="CUAJIMALPA">CUAJIMALPA</option>
                        <option value="IZTAPALAPA">IZTAPALAPA</option>                        
                        <option value="LERMA">LERMA</option>
                        <option value="XOCHIMILCO">XOCHIMILCO</option>-->
                    </select>
            </div>
            <div class="mb-2">
                <label class="form-label">Departamento</label>
                <select class='form-control form-control-sm' type="text" name="departamento" id="departamento" required> 
                <option value="">Selecciona el Departamento </option>
                       <!-- <option value="AZCAPOTZALCO">AZCAPOTZALCO</option>
                        <option value="CUAJIMALPA">CUAJIMALPA</option>
                        <option value="IZTAPALAPA">IZTAPALAPA</option>                        
                        <option value="LERMA">LERMA</option>
                        <option value="XOCHIMILCO">XOCHIMILCO</option>-->
                    </select>
            </div>
           <!-- <div class="mb-2">
                    <label class="form-label">Clave de Aprobación</label>
                    <input class='form-control form-control-sm' type="text" name="nombreAprobacion" placeholder="Ingresa clave de aprobación">
                    <label class="form-label"><strong><h6>Nota: No se cuenta con la clave de aprobación </h6></strong></label>
                </div>-->
                <div class="mb-2">
                    <label class="form-label">Fecha de Inicio</label>
                    <input class='form-control form-control-sm' type="date" name="nombreInicio" id="nombreInicio" >
                </div>

                <div class="mb-2">
                    <label class="form-label">Fecha de Término</label>
                    <input class='form-control form-control-sm' type="date" name="nombreTermino" id="nombreTermino" >
                </div>
            <div class="mb-2">
                <label class="form-label">Selecciona un archivo</label>
                <input class='form-control form-control-sm' type="file" name="archivo" required>
                <label class="form-label"><h6><strong>Nota: Solo se permite archivos en formato pdf</strong></h6></label>
            </div>
            <center><button class="btn btn-dark text-center btn-sm mb-1">Cargar archivo</button></center>



            
        </form>
        


    </div>
    

<script src="bootstrap/bootstrap.bundle.min.js"></script>

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
        opcion.value = array[unidad].toUpperCase()
        selector.add(opcion);
    }
}



function cargarCoordinaciones() {
    // Objeto de provincias con pueblos
    var listaCoordinaciones = {
      AZCAPOTZALCO: ["División de Ciencias Básicas e Ingeniería (CBI)", "División de Ciencias y Artes para el Diseño (CyAD)", "División de Ciencias Sociales y Humanidades (CSH)"],
      CUAJIMALPA: ["División de Ciencias Naturales e Ingeniería (CNI)", "División de Ciencias de la Comunicación y Diseño (CCD)", "División de Ciencias Sociales y Humanidades (CSH)"],
      IZTAPALAPA: ["División de Ciencias Básicas e Ingeniería (CBI)", "División de Ciencias Biológicas y de la Salud (CBS)", "División de Ciencias Sociales y Humanidades (CSH)"],
      LERMA: ["División de Ciencias Básicas e Ingeniería (CBI)", "División de Ciencias Biológicas y de la Salud (CBS)", "División de Ciencias Sociales y Humanidades (CSH)"],
      XOCHIMILCO: ["División de Ciencias y Artes para el Diseño (CyAD)", "División de Ciencias Biológicas y de la Salud (CBS)", "División de Ciencias Sociales y Humanidades (CSH)"]
    }
     
    var unidades = document.getElementById('unidad')
    var coordinaciones = document.getElementById('coordinacion')
    var unidadSeleccionada = unidades.value
    
    // Se limpian los pueblos
    coordinaciones.innerHTML = '<option value="">Seleccione una División, Dirección o Coordinación ...</option>'
    
    if(unidadSeleccionada !== ''){
      // Se seleccionan los pueblos y se ordenan
      unidadSeleccionada = listaCoordinaciones[unidadSeleccionada]
      unidadSeleccionada.sort()
    
      // Insertamos los pueblos
      unidadSeleccionada.forEach(function(coordinacion){
        let opcion = document.createElement('option')
        opcion.value = coordinacion
        opcion.text = coordinacion
        coordinaciones.add(opcion)
      });
    }
    
  }

  
function cargarDepartamentos() {
    // Objeto de provincias con pueblos
    var listaDepartamentos = {
      AZCAPOTZALCO: ["Departamento de Ciencias Básicas", "Departamento de Electrónica", "Departamento de Energía", "Departamento de Materiales", "Departamento de Sistemas", "Departamento de Evaluación del Diseño en el Tiempo", "Departamento de Medio Ambiente", "Departamento de Procesos y Técnicas de Realización", "Departamento de Administración", "Departamento de Derecho", "Departamento de Economía", "Departamento de Humanidades", "Departamento de Sociología"],
      CUAJIMALPA: ["Departamento de Ciencias Naturales", "Departamento de Matemáticas Aplicadas y Sistemas", "Departamento de Procesos y Tecnología", "Departamento de Ciencias de la Comunicación", "Departamento de Teoría y Procesos del Diseño", "Departamento de Tecnologías de la Información", "Departamento de Ciencias Sociales", "Departamento de Estudios Institucionales", "Departamento de Humanidades"],
      IZTAPALAPA: ["Departamento de Ingeniería Eléctrica", "Departamento de Ingeniería de Procesos e Hidráulica", "Departamento de Matemáticas", "Departamento de Química", "Departamento de Física", "Departamento de Biología", "Departamento de Biología de la Reproducción", "Departamento de Biotecnología", "Departamento de Ciencias de la Salud", "Departamento de Hidrobiología", "Departamento de Antropología", "Departamento de Economía", "Departamento de Filosofía", "Departamento de Sociología"],
      LERMA: ["Departamento de Procesos Productivos", "Departamento de Recursos de la Tierra", "Departamento de Sistemas de Información y Comunicaciones", "Departamento de Ciencias Ambientales", "Departamento de Ciencias de la Alimentación", "Departamento de Ciencias de la Salud", "Departamento de Artes y Humanidades", "Departamento de Estudios Culturales", "Departamento de Procesos Sociales"],
      XOCHIMILCO: ["Departamento de Teóría y Análisis", "Departamento de Tecnología y Producción", "Departamento de Síntesis Creativa", "Departamento de Métodos y Sistemas", "Departamento de Sistemas Biológicos", "Departamento de Producción Agrícola y Animal", "Departamento de El Hombre y su Ambiente", "Departamento de Atención a la Salud", "Departamento de Producción Económica", "Departamento de Relaciones Sociales", "Departamento de Educación y Comunicación", "Departamento de Política y Cultura"]
    }
    
    var unidades = document.getElementById('unidad')
    var departamentos = document.getElementById('departamento')
    var unidadSeleccionada = unidades.value
    
    // Se limpian los pueblos
    departamentos.innerHTML = '<option value="">Seleccione una Departamento o Sección ...</option>'
    
    if(unidadSeleccionada !== ''){
      // Se seleccionan los pueblos y se ordenan
      unidadSeleccionada = listaDepartamentos[unidadSeleccionada]
      unidadSeleccionada.sort()
    
      // Insertamos los pueblos
      unidadSeleccionada.forEach(function(departamento){
        let opcion = document.createElement('option')
        opcion.value = departamento
        opcion.text = departamento
        departamentos.add(opcion)
      });
    }
    
  }
  
 // Iniciar la carga de provincias solo para comprobar que funciona
cargarUnidades();

    </script>

</body>
</html>