let paso = 1;
const pasoInicial = 1;
const pasoFinal = 3;

const cita = {
    nombre: '',
    fecha: '',
    hora: '',
    servicios: []
}

document.addEventListener('DOMContentLoaded', function() {
    iniciarApp();
});

function iniciarApp() {
    mostrarSeccion(); // Muestra y oculta las secciones
    tabs(); //Cambia la seccion cuando se hace click en una de las pestañas
    botonesPaginador(); //Agrega el evento para ocultar y mostrar los botones
    paginaSiguiente(); //Agrega el evento click a los botones de paginacion
    paginaAnterior(); //Agrega el evento click a los botones de paginacion

    consultarAPI(); //Consulta la API en el backend de PHP

}

function mostrarSeccion() {

    //Ocultar la seccion que tenga la clase mostrar 
    const seccionAnterior = document.querySelector('.mostrar');
    if (seccionAnterior) {
        seccionAnterior.classList.remove('mostrar');
    }

    //Selecionar la secion de con el paso
    const pasoSelector = `#paso-${paso}`;
    const seccion = document.querySelector(pasoSelector);
    seccion.classList.add('mostrar');

    //Quita la clase de actual al tab anterior
    const tabAnterior = document.querySelector('.actual');
    if (tabAnterior) {
        tabAnterior.classList.remove('actual');
    }

    //Resalta el tab actually 
    const tab = document.querySelector(`[data-paso="${paso}"]`);
    tab.classList.add('actual');
}

function tabs() {
   const botones = document.querySelectorAll('.tabs button');
   botones.forEach( boton => {
         boton.addEventListener('click', function(e) {
            paso = parseInt(e.target.dataset.paso);
            mostrarSeccion();
            botonesPaginador();
         });
   }) 
}

function botonesPaginador() {
    const paginaAnterior = document.querySelector('#anterior');
    const paginaSiguiente = document.querySelector('#siguiente');

  if (paso === 1) {
    paginaAnterior.classList.add('ocultar');
    paginaSiguiente.classList.remove('ocultar');
    
  }else if (paso === 3) {
    paginaAnterior.classList.remove('ocultar');
    paginaSiguiente.classList.add('ocultar');

  }else {
    paginaAnterior.classList.remove('ocultar');
    paginaSiguiente.classList.remove('ocultar');
  }

  mostrarSeccion();

}

function paginaAnterior() {
    const paginaAnterior = document.querySelector('#anterior');
    paginaAnterior.addEventListener('click', function() {
        if (paso <= pasoInicial) return;
        paso--;
       
        botonesPaginador();
    });
}
function paginaSiguiente() {
    const paginaSiguiente = document.querySelector('#siguiente');
    paginaSiguiente.addEventListener('click', function() {
        if (paso >= pasoFinal) return;
        paso++;
       
        botonesPaginador();
    });
}

 async function consultarAPI() {
    try {
        const url = 'http://localhost:3000/api/servicios';
        const resultado = await fetch(url);
        const servicios = await resultado.json();
        mostrarServicios(servicios);
    } catch (error) {
        
    }
  
}

function mostrarServicios(servicios) {
    servicios.forEach(servicio => {
        const {id,nombre,precio} = servicio;
        const nombreServicios = document.createElement('P');
        nombreServicios.classList.add('nombre-servicio');
        nombreServicios.textContent = nombre;

        const precioServicios = document.createElement('P');
        precioServicios.classList.add('precio-servicio');
        precioServicios.textContent = `$${precio}`;

        const servicioDiv = document.createElement('DIV');
        servicioDiv.classList.add('servicio');
        servicioDiv.dataset.idServicio = id;
        servicioDiv.onclick = function() {
           seleccionarServicio(servicio);
        }
        servicioDiv.appendChild(nombreServicios);
        servicioDiv.appendChild(precioServicios);

        document.querySelector('#servicios').appendChild(servicioDiv);
    });

}

function seleccionarServicio(servicio) {
    const {id} = servicio;
   const {servicios} = cita;

   cita.servicios = [...servicios, servicio];

   const divServicio = document.querySelector(`[data-id-servicio="${id}"]`);
   divServicio.classList.add('seleccionado');

   console.log(servicio);

}


