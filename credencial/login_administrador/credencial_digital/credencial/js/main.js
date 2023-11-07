let $departemento = document.getElementById('departamento')
let $provincia = document.getElementById('provincia')
let $distrito = document.getElementById('distrito')

let departamentos = ['Azcapotzalco', 'Cuajimalpa', 'Iztapalapa', 'Lerma', 'Xochimilco']
let provincias = ['División de Ciencias y Artes para el Diseño', 'División de Ciencias Básicas e Ingeniería','División de Ciencias Biológicas y de la Salud', 'División de Ciencias de la Comunicación y Diseño', 'División Ciencias Naturales e Ingeniería', 'División de Ciencias Sociales y Humanidades']
let azcapotzalco = ['División de Ciencias y Artes para el Diseño', 'División de Ciencias Básicas e Ingeniería', 'División de Ciencias Sociales y Humanidades']
let cuajimalpa = ['División de Ciencias de la Comunicación y Diseño','División de Ciencias Naturales e Ingeniería', 'División de Ciencias Sociales y Humanidades']
let iztapalapa = ['División de Ciencias Básicas e Ingeniería','División de Ciencias Biológicas y de la Salud', 'División de Ciencias Sociales y Humanidades']
let lerma = ['División de Ciencias Básicas e Ingeniería','División de Ciencias Biológicas y de la Salud', 'División de Ciencias Sociales y Humanidades']
let xochimilco = ['División de Ciencias y Artes para el Diseño','División de Ciencias Biológicas y de la Salud', 'División de Ciencias Sociales y Humanidades']
let distritos = ['Imperial', 'San Vicente', 'Asia', 'Mala', 'Pacaraos', 'Sumbilca', 'Aucallama', 'Andahua', 'Ayo']
let azc_dep = ['Departamento de Ciencias Básicas', 'Departamento de Electrónica', 'Departamento de Energía', 'Departamento de Materiales', 'Departamento de Sistemas']
let azc_dep_d = ['Departamento de Evaluación del Diseño en el Tiempo', 'Departamento de Investigación y Conocimiento del Diseño', 'Departamento de Medio Ambiente', 'Departamento de Procesos y Técnicas de Realización']
let azc_dep_t = ['Departamento de Administración', 'Departamento de Derecho', 'Departamento de Economía', 'Departamento de Humanidades', 'Departamento de Sociología']
let cua_dep = ['Departamento de Ciencias de la Comunicación', 'Departamento de Teoría y Procesos de Diseño', 'Departamento de Tecnologías de la Información']
let cua_dep_d = ['Departamento de Ciencias Naturales', 'Departamento de Matemáticas Aplicadas y Sistemas', 'Departamento de Procesos y Tecnología']
let cua_dep_t = ['Departamento de Ciencias Sociales', 'Departamento de Estudios Institucionales', 'Departamento de Humanidades']
let izt_dep = ['Departamento de Ingeniería Electrica', 'Departamento de Ingeniería de Procesos e Hidráulica', 'Departamento de Matemáticas', 'Departamento de Química', 'Departamento de Física']
let izt_dep_d = ['Departamento de Biología', 'Departamento de Biología de la Reproducción', 'Departamento de Biotecnología', 'Departamento de Ciencias de la Salud', 'Departamento de Hidrobiología']
let izt_dep_t = ['Departamento de Antropología', 'Departamento de Economía', 'Departamento de Filosofía', 'Departamento de Sociología']
let ler_dep = ['Departamento de Procesos Productivos', 'Departamento de Recursos de la Tierra', 'Departamento de Sistema de Información y Comunicación']
let ler_dep_d = ['Departamento de Ciencias Ambientales', 'Departamento de Ciencias de la Alimentación', 'Departamento de Ciencias de la Salud']
let ler_dep_t = ['Departamento de Artes y Humanidades', 'Departamento de Estudios Culturales', 'Departamento de Procesos Sociales']
let xoc_dep = ['Departamento de Teoría y Análisis', 'Departamento de Tecnología y Producción', 'Departamento de Síntesis Creativa', 'Departamento de Métodos y Sistemas']
let xoc_dep_d = ['Departamento de Sistemas Biológicos', 'Departamento de Producción Agrícola y Animal', 'Departamento de El Hombre y su Ambiente', 'Departamento de Atención a la Salud']
let xoc_dep_t = ['Departamento de Producción Económica', 'Departamento de Relaciones Sociales', 'Departamento de Educación y Comunicación', 'Departamento de Política y Cultura']

function mostrarLugares(arreglo, lugar) {
    let elementos = '<option selected disables>-- Elige una opción    --</option>'

    for(let i = 0; i < arreglo.length; i++) {
        elementos += '<option value="' + arreglo[i] +'">' + arreglo[i] +'</option>'
    }

    lugar.innerHTML = elementos
}

mostrarLugares(departamentos, $departemento)

function recortar(array, inicio, fin, lugar) {
    let recortar = array.slice(inicio, fin)
    mostrarLugares(recortar, lugar)
}

$departemento.addEventListener('change', function() {
    let valor = $departemento.value

    switch(valor) {
        case 'Azcapotzalco':
            recortar(azcapotzalco, 0, 3, $provincia)
        break
        case 'Cuajimalpa':
            recortar(cuajimalpa, 0, 3, $provincia)
        break
        case 'Iztapalapa':
            recortar(iztapalapa, 0, 3, $provincia)
        break
        case 'Lerma':
            recortar(lerma, 0, 3, $provincia)
        break
        case 'Xochimilco':
            recortar(xochimilco, 0, 3, $provincia)
        break
    }

    $distrito.innerHTML = ''
})

$provincia.addEventListener('change', function() {
    let valor = $provincia.value

    if(valor == 'División de Ciencias y Artes para el Diseño') {
        recortar(azc_dep_d, 0, 4, $distrito)
    } 
    if(valor == 'División de Ciencias Básicas e Ingeniería') {
        recortar(azc_dep, 0, 5, $distrito)
    }
    if(valor == 'División de Ciencias Sociales y Humanidades') {
        recortar(azc_dep_t, 0, 5, $distrito)
    }
    if(valor == 'División de Ciencias Naturales e Ingeniería') {
        recortar(cua_dep_d, 0, 3, $distrito)
    } 
    if(valor == 'División de Ciencias de la Comunicación y Diseño') {
        recortar(cua_dep, 0, 3, $distrito)
    }
    if(valor == 'División de Ciencias Sociales y Humanidades') {
        recortar(cua_dep_t, 0, 3, $distrito)
    }
    if(valor == 'División de Ciencias Biológicas y de la Salud') {
        recortar(izt_dep_d, 0, 5, $distrito)
    } 
    if(valor == 'División de Ciencias Básicas e Ingeniería') {
        recortar(izt_dep, 0, 5, $distrito)
    }
    if(valor == 'División de Ciencias Sociales y Humanidades') {
        recortar(izt_dep_t, 0, 4, $distrito)
    }
    if(valor == 'División de Ciencias Biológicas y de la Salud') {
        recortar(ler_dep_d, 0, 3, $distrito)
    } 
    if(valor == 'División de Ciencias Básicas e Ingeniería') {
        recortar(ler_dep, 0, 3, $distrito)
    }
    if(valor == 'División de Ciencias Sociales y Humanidades') {
        recortar(ler_dep_t, 0, 3, $distrito)
    }
    if(valor == 'División de Ciencias Biológicas y de la Salud') {
        recortar(xoc_dep_d, 0, 4, $distrito)
    } 
    if(valor == 'División de Ciencias y Artes para el Diseño') {
        recortar(xoc_dep, 0, 4, $distrito)
    }
    if(valor == 'División de Ciencias Sociales y Humanidades') {
        recortar(xoc_dep_t, 0, 4, $distrito)
    }
})

