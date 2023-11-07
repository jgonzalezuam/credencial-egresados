
function cargarUnidades2() {
    var array = ["Azcapotzalco", "Cuajimalpa", "Iztapalapa", "Lerma", "Xochimilco"];
    array.sort();
    addOptions("opcion_dos", array);
}


function addOptions(domElement, array) {
    var selector = document.getElementsByName(domElement)[0];
    for (opcion_dos in array) {
        var opcion = document.createElement("option");
        opcion.text = array[opcion_dos] ;
        // Añadimos un value a los option para hacer mas facil escoger los pueblos
        opcion.value = array[opcion_dos] .toLowerCase()
        selector.add(opcion);
    }
}


function cargarDivisiones2() {
    // Objeto de provincias con pueblos
    var listaDivisiones = {
      azcapotzalco: ["División de Ciencias Básicas e Ingeniería (CBI)", "División de Ciencias y Artes para el Diseño (CyAD)", "División de Ciencias Sociales y Humanidades (CSH)"],
      cuajimalpa: ["División de Ciencias Naturales e Ingeniería (CNI)", "División de Ciencias de la Comunicación y Diseño (CCD)", "División de Ciencias Sociales y Humanidades (CSH)"],
      iztapalapa: ["División de Ciencias Básicas e Ingeniería (CBI)", "División de Ciencias Biológicas y de la Salud (CBS)", "División de Ciencias Sociales y Humanidades (CSH)"],
      lerma: ["División de Ciencias Básicas e Ingeniería (CBI)", "División de Ciencias Biológicas y de la Salud (CBS)", "División de Ciencias Sociales y Humanidades (CSH)"],
      xochimilco: ["División de Ciencias y Artes para el Diseño (CyAD)", "División de Ciencias Biológicas y de la Salud (CBS)", "División de Ciencias Sociales y Humanidades (CSH)"]
    }
    
    var opcion_dos = document.getElementById('opcion_dos')
    var divisiones = document.getElementById('division_dos')
    var opcion_dosSeleccionada = opcion_dos.value
    
    // Se limpian los pueblos
    divisiones.innerHTML = '<option value="">Seleccione una División ...</option>'
    
    if(opcion_dosSeleccionada !== ''){
      // Se seleccionan los pueblos y se ordenan
      opcion_dosSeleccionada = listaDivisiones[opcion_dosSeleccionada]
      opcion_dosSeleccionada.sort()
    
      // Insertamos los pueblos
      opcion_dosSeleccionada.forEach(function(division_dos){
        let opcion = document.createElement('option')
        opcion.value = division_dos
        opcion.text = division_dos
        divisiones.add(opcion)
      });
    }
    
  }

  
function cargarCarreras2() {
    // Objeto de provincias con pueblos
    var listaCarreras = {
        azcapotzalco: ["Arquitectura", "Diseño de la Comunicación Gráfica", "Diseño Industrial", "Ingeniería Ambiental", "Ingeniería Civil", "Ingeniería en Computación", "Ingeniería Eléctrica", "Ingeniería Electrónica", "Ingeniería Física", "Ingeniería Industrial", "Ingeniería Mecánica", "Ingeniería Metalúrgica", "Ingeniería Química", "Administración", "Derecho", "Economía", "Sociología"],
        cuajimalpa: ["Ciencias de la Comunicación", "Diseño", "Tecnologías y Sistemas de la Información", "Biología Molecular", "Ingeniería Biológica ", "Ingeniería en Computación", "Matemáticas Aplicadas", "Administración", "Derecho", "Estudios Socioterritoriales", "Humanidades"],
        iztapalapa: ["Ciencias Atmosféricas", "Computación", "Fisíca", "Ingeniería Biomédica", "Ingeniería Electrónica", "Ingeniería en Energía", "Ingeniería Hidrológica", "Ingeniería Química", "Matemáticas", "Química", "Biología", "Biología Experimental", "Hidrobiología", "Ingeniería de los Alimentos", "Ingeniería Bioquimica Industrial", "Producción Animal", "Administración", "Antropología Social", "Ciencia Política", "Economía", "Filosofía", "Geografía Humana", "Historia", "Letras Hispanicas", "Lingüistica", "Psicología Social", "Sociología"],
        lerma: ["Ingeniería en Computación y Telecomunicaciones", "Ingeniería en Recursos Hibrícos", "Ingeniería en Sistemas Mecatronicos Industriales", "Biología Ambiental", "Ciencia y Tecnología de los Alimentos", "Psicología Biomédica", "Arte y Comunicación Digitales", "Educación y Tecnologías Digitales", "Políticas Públicas"],
        xochimilco: ["Arquitectura", "Diseño de la Comunicación Gráfica", "Diseño Industrial", "Planeación Territorial", "Agronomía", "Biología", "Enfermería", "Estomatología", "Medicina", "Medicina Veterinaria y Zooctenia", "Nutrición Humana", "Química Farmaceutica Biológica", "Administración", "Comunicación Social", "Economía", "Política y Gestión Social", "Psicología", "Sociología"]
    }
    
    var opcion_dos = document.getElementById('opcion_dos')
    var carreras = document.getElementById('carrera_dos')
    var opcion_dosSeleccionada = opcion_dos.value
    
    // Se limpian los pueblos
    carreras.innerHTML = '<option value="">Seleccione una carrera ...</option>'
    
    if(opcion_dosSeleccionada !== ''){
      // Se seleccionan los pueblos y se ordenan
      opcion_dosSeleccionada = listaCarreras[opcion_dosSeleccionada]
      opcion_dosSeleccionada.sort()
    
      // Insertamos los pueblos
      opcion_dosSeleccionada.forEach(function(carrera_dos){
        let opcion = document.createElement('option')
        opcion.value = carrera_dos
        opcion.text = carrera_dos
        carreras.add(opcion)
      });
    }
    
  }
  
 // Iniciar la carga de provincias solo para comprobar que funciona

cargarUnidades2();


//termino de la funcion 2


function cargarUnidades3() {
    var array = ["Azcapotzalco", "Cuajimalpa", "Iztapalapa", "Lerma", "Xochimilco"];
    array.sort();
    addOptions("opcion_tres", array);
}


function addOptions(domElement, array) {
    var selector = document.getElementsByName(domElement)[0];
    for (opcion_tres in array) {
        var opcion = document.createElement("option");
        opcion.text = array[opcion_tres] ;
        // Añadimos un value a los option para hacer mas facil escoger los pueblos
        opcion.value = array[opcion_tres] .toLowerCase()
        selector.add(opcion);
    }
}


function cargarDivisiones3() {
    // Objeto de provincias con pueblos
    var listaDivisiones = {
      azcapotzalco: ["División de Ciencias Básicas e Ingeniería (CBI)", "División de Ciencias y Artes para el Diseño (CyAD)", "División de Ciencias Sociales y Humanidades (CSH)"],
      cuajimalpa: ["División de Ciencias Naturales e Ingeniería (CNI)", "División de Ciencias de la Comunicación y Diseño (CCD)", "División de Ciencias Sociales y Humanidades (CSH)"],
      iztapalapa: ["División de Ciencias Básicas e Ingeniería (CBI)", "División de Ciencias Biológicas y de la Salud (CBS)", "División de Ciencias Sociales y Humanidades (CSH)"],
      lerma: ["División de Ciencias Básicas e Ingeniería (CBI)", "División de Ciencias Biológicas y de la Salud (CBS)", "División de Ciencias Sociales y Humanidades (CSH)"],
      xochimilco: ["División de Ciencias y Artes para el Diseño (CyAD)", "División de Ciencias Biológicas y de la Salud (CBS)", "División de Ciencias Sociales y Humanidades (CSH)"]
    }
    
    var opcion_tres = document.getElementById('opcion_tres')
    var divisiones = document.getElementById('division_tres')
    var opcion_tresSeleccionada = opcion_tres.value
    
    // Se limpian los pueblos
    divisiones.innerHTML = '<option value="">Seleccione una División ...</option>'
    
    if(opcion_tresSeleccionada !== ''){
      // Se seleccionan los pueblos y se ordenan
      opcion_tresSeleccionada = listaDivisiones[opcion_tresSeleccionada]
      opcion_tresSeleccionada.sort()
    
      // Insertamos los pueblos
      opcion_tresSeleccionada.forEach(function(division_tres){
        let opcion = document.createElement('option')
        opcion.value = division_tres
        opcion.text = division_tres
        divisiones.add(opcion)
      });
    }
    
  }

  
function cargarCarreras3() {
    // Objeto de provincias con pueblos
    var listaCarreras = {
        azcapotzalco: ["Arquitectura", "Diseño de la Comunicación Gráfica", "Diseño Industrial", "Ingeniería Ambiental", "Ingeniería Civil", "Ingeniería en Computación", "Ingeniería Eléctrica", "Ingeniería Electrónica", "Ingeniería Física", "Ingeniería Industrial", "Ingeniería Mecánica", "Ingeniería Metalúrgica", "Ingeniería Química", "Administración", "Derecho", "Economía", "Sociología"],
        cuajimalpa: ["Ciencias de la Comunicación", "Diseño", "Tecnologías y Sistemas de la Información", "Biología Molecular", "Ingeniería Biológica ", "Ingeniería en Computación", "Matemáticas Aplicadas", "Administración", "Derecho", "Estudios Socioterritoriales", "Humanidades"],
        iztapalapa: ["Ciencias Atmosféricas", "Computación", "Fisíca", "Ingeniería Biomédica", "Ingeniería Electrónica", "Ingeniería en Energía", "Ingeniería Hidrológica", "Ingeniería Química", "Matemáticas", "Química", "Biología", "Biología Experimental", "Hidrobiología", "Ingeniería de los Alimentos", "Ingeniería Bioquimica Industrial", "Producción Animal", "Administración", "Antropología Social", "Ciencia Política", "Economía", "Filosofía", "Geografía Humana", "Historia", "Letras Hispanicas", "Lingüistica", "Psicología Social", "Sociología"],
        lerma: ["Ingeniería en Computación y Telecomunicaciones", "Ingeniería en Recursos Hibrícos", "Ingeniería en Sistemas Mecatronicos Industriales", "Biología Ambiental", "Ciencia y Tecnología de los Alimentos", "Psicología Biomédica", "Arte y Comunicación Digitales", "Educación y Tecnologías Digitales", "Políticas Públicas"],
        xochimilco: ["Arquitectura", "Diseño de la Comunicación Gráfica", "Diseño Industrial", "Planeación Territorial", "Agronomía", "Biología", "Enfermería", "Estomatología", "Medicina", "Medicina Veterinaria y Zooctenia", "Nutrición Humana", "Química Farmaceutica Biológica", "Administración", "Comunicación Social", "Economía", "Política y Gestión Social", "Psicología", "Sociología"]
    }
    
    var opcion_tres = document.getElementById('opcion_tres')
    var carreras = document.getElementById('carrera_tres')
    var opcion_tresSeleccionada = opcion_tres.value
    
    // Se limpian los pueblos
    carreras.innerHTML = '<option value="">Seleccione una carrera ...</option>'
    
    if(opcion_tresSeleccionada !== ''){
      // Se seleccionan los pueblos y se ordenan
      opcion_tresSeleccionada = listaCarreras[opcion_tresSeleccionada]
      opcion_tresSeleccionada.sort()
    
      // Insertamos los pueblos
      opcion_tresSeleccionada.forEach(function(carrera_tres){
        let opcion = document.createElement('option')
        opcion.value = carrera_tres
        opcion.text = carrera_tres
        carreras.add(opcion)
      });
    }
    
  }
  
 // Iniciar la carga de provincias solo para comprobar que funciona

cargarUnidades3();

//termino de la funcion 3


function cargarUnidades4() {
    var array = ["Azcapotzalco", "Cuajimalpa", "Iztapalapa", "Lerma", "Xochimilco"];
    array.sort();
    addOptions("opcion_cuatro", array);
}


function addOptions(domElement, array) {
    var selector = document.getElementsByName(domElement)[0];
    for (opcion_cuatro in array) {
        var opcion = document.createElement("option");
        opcion.text = array[opcion_cuatro] ;
        // Añadimos un value a los option para hacer mas facil escoger los pueblos
        opcion.value = array[opcion_cuatro] .toLowerCase()
        selector.add(opcion);
    }
}


function cargarDivisiones4() {
    // Objeto de provincias con pueblos
    var listaDivisiones = {
      azcapotzalco: ["División de Ciencias Básicas e Ingeniería (CBI)", "División de Ciencias y Artes para el Diseño (CyAD)", "División de Ciencias Sociales y Humanidades (CSH)"],
      cuajimalpa: ["División de Ciencias Naturales e Ingeniería (CNI)", "División de Ciencias de la Comunicación y Diseño (CCD)", "División de Ciencias Sociales y Humanidades (CSH)"],
      iztapalapa: ["División de Ciencias Básicas e Ingeniería (CBI)", "División de Ciencias Biológicas y de la Salud (CBS)", "División de Ciencias Sociales y Humanidades (CSH)"],
      lerma: ["División de Ciencias Básicas e Ingeniería (CBI)", "División de Ciencias Biológicas y de la Salud (CBS)", "División de Ciencias Sociales y Humanidades (CSH)"],
      xochimilco: ["División de Ciencias y Artes para el Diseño (CyAD)", "División de Ciencias Biológicas y de la Salud (CBS)", "División de Ciencias Sociales y Humanidades (CSH)"]
    }
    
    var opcion_cuatro = document.getElementById('opcion_cuatro')
    var divisiones = document.getElementById('division_cuatro')
    var opcion_cuatroSeleccionada = opcion_cuatro.value
    
    // Se limpian los pueblos
    divisiones.innerHTML = '<option value="">Seleccione una División ...</option>'
    
    if(opcion_cuatroSeleccionada !== ''){
      // Se seleccionan los pueblos y se ordenan
      opcion_cuatroSeleccionada = listaDivisiones[opcion_cuatroSeleccionada]
      opcion_cuatroSeleccionada.sort()
    
      // Insertamos los pueblos
      opcion_cuatroSeleccionada.forEach(function(division_cuatro){
        let opcion = document.createElement('option')
        opcion.value = division_cuatro
        opcion.text = division_cuatro
        divisiones.add(opcion)
      });
    }
    
  }

  
function cargarCarreras4() {
    // Objeto de provincias con pueblos
    var listaCarreras = {
        azcapotzalco: ["Arquitectura", "Diseño de la Comunicación Gráfica", "Diseño Industrial", "Ingeniería Ambiental", "Ingeniería Civil", "Ingeniería en Computación", "Ingeniería Eléctrica", "Ingeniería Electrónica", "Ingeniería Física", "Ingeniería Industrial", "Ingeniería Mecánica", "Ingeniería Metalúrgica", "Ingeniería Química", "Administración", "Derecho", "Economía", "Sociología"],
        cuajimalpa: ["Ciencias de la Comunicación", "Diseño", "Tecnologías y Sistemas de la Información", "Biología Molecular", "Ingeniería Biológica ", "Ingeniería en Computación", "Matemáticas Aplicadas", "Administración", "Derecho", "Estudios Socioterritoriales", "Humanidades"],
        iztapalapa: ["Ciencias Atmosféricas", "Computación", "Fisíca", "Ingeniería Biomédica", "Ingeniería Electrónica", "Ingeniería en Energía", "Ingeniería Hidrológica", "Ingeniería Química", "Matemáticas", "Química", "Biología", "Biología Experimental", "Hidrobiología", "Ingeniería de los Alimentos", "Ingeniería Bioquimica Industrial", "Producción Animal", "Administración", "Antropología Social", "Ciencia Política", "Economía", "Filosofía", "Geografía Humana", "Historia", "Letras Hispanicas", "Lingüistica", "Psicología Social", "Sociología"],
        lerma: ["Ingeniería en Computación y Telecomunicaciones", "Ingeniería en Recursos Hibrícos", "Ingeniería en Sistemas Mecatronicos Industriales", "Biología Ambiental", "Ciencia y Tecnología de los Alimentos", "Psicología Biomédica", "Arte y Comunicación Digitales", "Educación y Tecnologías Digitales", "Políticas Públicas"],
        xochimilco: ["Arquitectura", "Diseño de la Comunicación Gráfica", "Diseño Industrial", "Planeación Territorial", "Agronomía", "Biología", "Enfermería", "Estomatología", "Medicina", "Medicina Veterinaria y Zooctenia", "Nutrición Humana", "Química Farmaceutica Biológica", "Administración", "Comunicación Social", "Economía", "Política y Gestión Social", "Psicología", "Sociología"]
    }
    
    var opcion_cuatro = document.getElementById('opcion_cuatro')
    var carreras = document.getElementById('carrera_cuatro')
    var opcion_cuatroSeleccionada = opcion_cuatro.value
    
    // Se limpian los pueblos
    carreras.innerHTML = '<option value="">Seleccione una carrera ...</option>'
    
    if(opcion_cuatroSeleccionada !== ''){
      // Se seleccionan los pueblos y se ordenan
      opcion_cuatroSeleccionada = listaCarreras[opcion_cuatroSeleccionada]
      opcion_cuatroSeleccionada.sort()
    
      // Insertamos los pueblos
      opcion_cuatroSeleccionada.forEach(function(carrera_cuatro){
        let opcion = document.createElement('option')
        opcion.value = carrera_cuatro
        opcion.text = carrera_cuatro
        carreras.add(opcion)
      });
    }
    
  }
  
 // Iniciar la carga de provincias solo para comprobar que funciona

cargarUnidades4();

//final de la funcion 4



function cargarUnidades5() {
    var array = ["Azcapotzalco", "Cuajimalpa", "Iztapalapa", "Lerma", "Xochimilco"];
    array.sort();
    addOptions("opcion_cinco", array);
}


function addOptions(domElement, array) {
    var selector = document.getElementsByName(domElement)[0];
    for (opcion_cinco in array) {
        var opcion = document.createElement("option");
        opcion.text = array[opcion_cinco] ;
        // Añadimos un value a los option para hacer mas facil escoger los pueblos
        opcion.value = array[opcion_cinco] .toLowerCase()
        selector.add(opcion);
    }
}


function cargarDivisiones5() {
    // Objeto de provincias con pueblos
    var listaDivisiones = {
      azcapotzalco: ["División de Ciencias Básicas e Ingeniería (CBI)", "División de Ciencias y Artes para el Diseño (CyAD)", "División de Ciencias Sociales y Humanidades (CSH)"],
      cuajimalpa: ["División de Ciencias Naturales e Ingeniería (CNI)", "División de Ciencias de la Comunicación y Diseño (CCD)", "División de Ciencias Sociales y Humanidades (CSH)"],
      iztapalapa: ["División de Ciencias Básicas e Ingeniería (CBI)", "División de Ciencias Biológicas y de la Salud (CBS)", "División de Ciencias Sociales y Humanidades (CSH)"],
      lerma: ["División de Ciencias Básicas e Ingeniería (CBI)", "División de Ciencias Biológicas y de la Salud (CBS)", "División de Ciencias Sociales y Humanidades (CSH)"],
      xochimilco: ["División de Ciencias y Artes para el Diseño (CyAD)", "División de Ciencias Biológicas y de la Salud (CBS)", "División de Ciencias Sociales y Humanidades (CSH)"]
    }
    
    var opcion_cinco = document.getElementById('opcion_cinco')
    var divisiones = document.getElementById('division_cinco')
    var opcion_cincoSeleccionada = opcion_cinco.value
    
    // Se limpian los pueblos
    divisiones.innerHTML = '<option value="">Seleccione una División ...</option>'
    
    if(opcion_cincoSeleccionada !== ''){
      // Se seleccionan los pueblos y se ordenan
      opcion_cincoSeleccionada = listaDivisiones[opcion_cincoSeleccionada]
      opcion_cincoSeleccionada.sort()
    
      // Insertamos los pueblos
      opcion_cincoSeleccionada.forEach(function(division_cinco){
        let opcion = document.createElement('option')
        opcion.value = division_cinco
        opcion.text = division_cinco
        divisiones.add(opcion)
      });
    }
    
  }

  
function cargarCarreras5() {
    // Objeto de provincias con pueblos
    var listaCarreras = {
        azcapotzalco: ["Arquitectura", "Diseño de la Comunicación Gráfica", "Diseño Industrial", "Ingeniería Ambiental", "Ingeniería Civil", "Ingeniería en Computación", "Ingeniería Eléctrica", "Ingeniería Electrónica", "Ingeniería Física", "Ingeniería Industrial", "Ingeniería Mecánica", "Ingeniería Metalúrgica", "Ingeniería Química", "Administración", "Derecho", "Economía", "Sociología"],
        cuajimalpa: ["Ciencias de la Comunicación", "Diseño", "Tecnologías y Sistemas de la Información", "Biología Molecular", "Ingeniería Biológica ", "Ingeniería en Computación", "Matemáticas Aplicadas", "Administración", "Derecho", "Estudios Socioterritoriales", "Humanidades"],
        iztapalapa: ["Ciencias Atmosféricas", "Computación", "Fisíca", "Ingeniería Biomédica", "Ingeniería Electrónica", "Ingeniería en Energía", "Ingeniería Hidrológica", "Ingeniería Química", "Matemáticas", "Química", "Biología", "Biología Experimental", "Hidrobiología", "Ingeniería de los Alimentos", "Ingeniería Bioquimica Industrial", "Producción Animal", "Administración", "Antropología Social", "Ciencia Política", "Economía", "Filosofía", "Geografía Humana", "Historia", "Letras Hispanicas", "Lingüistica", "Psicología Social", "Sociología"],
        lerma: ["Ingeniería en Computación y Telecomunicaciones", "Ingeniería en Recursos Hibrícos", "Ingeniería en Sistemas Mecatronicos Industriales", "Biología Ambiental", "Ciencia y Tecnología de los Alimentos", "Psicología Biomédica", "Arte y Comunicación Digitales", "Educación y Tecnologías Digitales", "Políticas Públicas"],
        xochimilco: ["Arquitectura", "Diseño de la Comunicación Gráfica", "Diseño Industrial", "Planeación Territorial", "Agronomía", "Biología", "Enfermería", "Estomatología", "Medicina", "Medicina Veterinaria y Zooctenia", "Nutrición Humana", "Química Farmaceutica Biológica", "Administración", "Comunicación Social", "Economía", "Política y Gestión Social", "Psicología", "Sociología"]
    }
    
    var opcion_cinco = document.getElementById('opcion_cinco')
    var carreras = document.getElementById('carrera_cinco')
    var opcion_cincoSeleccionada = opcion_cinco.value
    
    // Se limpian los pueblos
    carreras.innerHTML = '<option value="">Seleccione una carrera ...</option>'
    
    if(opcion_cincoSeleccionada !== ''){
      // Se seleccionan los pueblos y se ordenan
      opcion_cincoSeleccionada = listaCarreras[opcion_cincoSeleccionada]
      opcion_cincoSeleccionada.sort()
    
      // Insertamos los pueblos
      opcion_cincoSeleccionada.forEach(function(carrera_cinco){
        let opcion = document.createElement('option')
        opcion.value = carrera_cinco
        opcion.text = carrera_cinco
        carreras.add(opcion)
      });
    }
    
  }
  
 // Iniciar la carga de provincias solo para comprobar que funciona

cargarUnidades5();