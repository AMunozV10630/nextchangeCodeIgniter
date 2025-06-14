//función buscar para filtrar el texto con el alt de las imágenes
document.addEventListener("DOMContentLoaded", () => {
    const searchInput = document.getElementById("searchInput");
    const searchIcon = document.getElementById("searchIcon");
    const publicationCards = document.querySelectorAll(".publication-card");

    const buscar = () => {
        const textoBusqueda = searchInput.value.toLowerCase();
        publicationCards.forEach(articulo => {
            const textoContenido = articulo.textContent.toLowerCase();
            const imagen = articulo.querySelector("img");
            const textoAlt = imagen ? imagen.alt.toLowerCase() : "";

            if (textoContenido.includes(textoBusqueda) || textoAlt.includes(textoBusqueda)) {
                articulo.classList.remove("filtro");
            } else {
                articulo.classList.add("filtro");
            }
        });
    };

    searchInput.addEventListener("keyup", e => {
        if (e.key === "Enter") e.target.value = "";
        buscar();
    });

    searchIcon.addEventListener("click", () => {
        buscar();
        searchInput.focus();
    });
});

//función ChangeImage para cambiar las imágenes según onmouseover y onmouseout
function ChangeImage(x, image){
  switch (x){
    case 1:
      image.src="/images/info-ropa-vestido-rojo.png";
    break;

    case 2:
      image.src="/images/ropa-vestido-rojo.jpg";
    break;

    case 3:
      image.src="/images/info-zapatos-cafe-hombre.png";
    break;

    case 4:
      image.src="/images/zapatos-cafe-hombre.png";
    break;

    case 5:
      image.src="/images/info-accesorio-cinturon-mujer.png";
    break;

    case 6:
      image.src="/images/accesorio-cinturon-mujer.jpg";
    break;

    case 7:
      image.src="/images/info-ropa-chaqueta-negra-hombre.png";
    break;

    case 8:
      image.src="/images/ropa-chaqueta-negra-hombre.png";
    break;
  }
}

// Función que muestra un sección específica ('ropa', 'zapatos', 'publicar')
function mostrarSeccion(seccion) {
  //Oculta todas la secciones y la página principal
  const todasSecciones = document.querySelectorAll('main .seccion-publicaciones, #pagina-principal, #inicia-sesion, #como-funciona, #quienes-somos, #seccion-registro');
  todasSecciones.forEach(sec => sec.style.display = 'none');

  //Muestra la sección solicitada
  const elemento = document.getElementById('seccion-' + seccion);
  if (elemento) {
      elemento.style.display = 'block';
  } else if (seccion === 'publicar') { 
      document.getElementById('seccion-publicar').style.display = 'block';
  } else if (seccion === 'como-funciona') {
      document.getElementById('como-funciona').style.display = 'block';
  } else if (seccion === 'quienes-somos') { 
      document.getElementById('quienes-somos').style.display = 'block';
  } else if (seccion === 'inicioSesion') {
      document.getElementById('inicia-sesion').style.display = 'block';
  //Visualiza el mensaje
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.get('status') === 'success') {
      const mensajeExitoPHP = document.getElementById('mensaje-inicio-sesion-php');
      if (mensajeExitoPHP) {
        mensajeExitoPHP.style.display = 'block';
          //Se oculta un tiempo después
          setTimeout(() => {
            mensajeExitoPHP.style.display = 'none';
          }, 3000);
      }
    }
  } else if (seccion === 'registro') {
      document.getElementById('seccion-registro').style.display = 'block';
      //Visualiza el mensaje
      const urlParams = new URLSearchParams(window.location.search);
      if (urlParams.get('status') === 'success') {
        const mensajeExitoPHP = document.getElementById('mensaje-exito'); // Use the ID from registro_view.php
        if (mensajeExitoPHP) {
          mensajeExitoPHP.style.display = 'block';
            //Se oculta un tiempo después
            setTimeout(() => {
                  mensajeExitoPHP.style.display = 'none';
            }, 3000);
        }
      }
  }
}

//Función que muestra la página principal
function mostrarPaginaPrincipal() {
  const todasSecciones = document.querySelectorAll('main .seccion-publicaciones, #inicia-sesion, #como-funciona, #quienes-somos, #seccion-registro');
  todasSecciones.forEach(sec => sec.style.display = 'none');
  document.getElementById('pagina-principal').style.display = 'block';
}

function filtrarPublicaciones(seccionId) {
    const seccion = document.getElementById('seccion-' + seccionId);

    // Obtener filtros activos
    const filtroUsuarioBtn = seccion.querySelector('.filtro-usuario.active');
    const filtroMarcaBtn = seccion.querySelector('.filtro-marca.active');

    const filtroUsuario = filtroUsuarioBtn ? filtroUsuarioBtn.getAttribute('data-usuario') : null;
    const filtroMarca = filtroMarcaBtn ? filtroMarcaBtn.getAttribute('data-marca') : null;

    const publicaciones = seccion.querySelectorAll('.publication-card');

    publicaciones.forEach(pub => {
        const usuario = pub.getAttribute('data-usuario');
        const marca = pub.getAttribute('data-marca');

        let mostrar = true;
        if (filtroUsuario && usuario !== filtroUsuario) mostrar = false;
        if (filtroMarca && marca !== filtroMarca) mostrar = false;

        pub.style.display = mostrar ? 'flex' : 'none';
    });
}

// Manejador para togglear botones filtros
document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.filtro-usuario, .filtro-marca').forEach(btn => {
        btn.addEventListener('click', function () {
            const grupo = this.classList.contains('filtro-usuario') ? 'filtro-usuario' : 'filtro-marca';

            // Desactivar otros botones del grupo
            const botonesGrupo = this.parentNode.querySelectorAll('.' + grupo);
            botonesGrupo.forEach(b => {
                if (b !== this) b.classList.remove('active');
            });

            this.classList.toggle('active');

            const seccion = this.closest('.seccion-publicaciones');
            if (seccion) {
                filtrarPublicaciones(seccion.id.replace('seccion-', ''));
            }
        });
    });
});

function limpiarFiltros(seccionId) {
    const seccion = document.getElementById('seccion-' + seccionId);

    seccion.querySelectorAll('.filtro-usuario, .filtro-marca').forEach(btn => btn.classList.remove('active'));

    seccion.querySelectorAll('.publication-card').forEach(pub => pub.style.display = 'flex');
}


// Manejar envío del formulario de publicación de artículo
document.getElementById('form-publicar').addEventListener('submit', function (event) {
  event.preventDefault();

  // Leer datos
  const nombre = document.getElementById('nombreArticulo').value;
  const tipo = document.getElementById('tipoArticulo').value;
  const fotosInput = document.getElementById('fotosArticulo');
  const descripcion = document.getElementById('descripcionArticulo').value;
  const usuario = document.getElementById('nombreUsuario').value;
  const correo = document.getElementById('correoVendedor').value;
  const telefono = document.getElementById('telefonoVendedor').value;
  const mensaje = document.getElementById('mensajeAdicional').value;

  //Nuevos campos
  const usuarioArticulo = document.getElementById('usuarioArticulo').value;
  const marcaArticulo = document.getElementById('marcaArticulo').value;

  // Validar que haya al menos una foto
  if (fotosInput.files.length === 0) {
    alert('Por favor sube al menos una foto.');
    return;
  }

  //Crear contenedor para la nueva publicación
  const nuevaPublicacion = document.createElement('div');
  nuevaPublicacion.className = 'publication-card';

  //Usaremos la primera foto para mostrar
  const fotoURL = URL.createObjectURL(fotosInput.files[0]);
  const img = document.createElement('img');
  img.src = fotoURL;
  img.className = 'img-fluid';
  img.alt = nombre;

  //Agregar imagen y datos como tooltip o descripción
  nuevaPublicacion.appendChild(img);

  //Guardar en atributos data para luego filtrar con JS
  nuevaPublicacion.setAttribute('data-usuario', usuarioArticulo);
  nuevaPublicacion.setAttribute('data-marca', marcaArticulo);

  //Crear un tooltip con la descripción y datos básicos
  nuevaPublicacion.title = `${nombre}\nTipo: ${tipo}\nDescripción: ${descripcion}\nVendedor: ${usuario}\nCorreo: ${correo}\nTeléfono: ${telefono}\nMensaje: ${mensaje}\nUsuario Artículo: ${usuarioArticulo}\nMarca: ${marcaArticulo}`;

  //Agregar a la página principal
  const contenedorPrincipal = document.querySelector('#pagina-principal .publications');
  contenedorPrincipal.appendChild(nuevaPublicacion);

  //Agregar a la sección correspondiente
  const contenedorCategoria = document.querySelector(`#seccion-${tipo} .publications`);
  if (contenedorCategoria) {
    // Clonar para que aparezca en ambas secciones (o crear uno nuevo si prefieres)
    const clonPublicacion = nuevaPublicacion.cloneNode(true);
    contenedorCategoria.appendChild(clonPublicacion);
  }

  // Limpiar el formulario para la próxima publicación
  this.reset();

  // Mostrar página principal
  mostrarPaginaPrincipal();

  alert('¡Tu artículo fue publicado exitosamente!');
});

// Manejadores de clic para la navegación
document.querySelector('.btn-button4').addEventListener('click', function (event) {
  event.preventDefault();
  mostrarSeccion('como-funciona');
});

document.querySelector('.btn-button5').addEventListener('click', function (event) {
  event.preventDefault();
  mostrarSeccion('quienes-somos');
});

// Link de navegacion en el sidebar
document.querySelector('a[onclick="mostrarPaginaPrincipal()"]').addEventListener('click', function(event) {
    event.preventDefault();
    mostrarPaginaPrincipal();
});
document.querySelector('a[onclick="mostrarSeccion(\'ropa\')"]').addEventListener('click', function(event) {
    event.preventDefault();
    mostrarSeccion('ropa');
});
document.querySelector('a[onclick="mostrarSeccion(\'zapatos\')"]').addEventListener('click', function(event) {
    event.preventDefault();
    mostrarSeccion('zapatos');
});
document.querySelector('a[onclick="mostrarSeccion(\'accesorios\')"]').addEventListener('click', function(event) {
    event.preventDefault();
    mostrarSeccion('accesorios');
});
document.querySelector('a[onclick="mostrarSeccion(\'publicar\')"]').addEventListener('click', function(event) {
    event.preventDefault();
    mostrarSeccion('publicar');
});

//Contador visitas
function contarCargaPagina() {
  let elementoContador = localStorage.getItem("numero_vistas");
  if (elementoContador === null || parseInt(elementoContador) === 0) {
    elementoContador = 1;
  } else {
    elementoContador = parseInt(elementoContador) + 1;
  }

  localStorage.setItem("numero_vistas", elementoContador.toString());
  const numeroVistasElement = document.getElementById("numero_vistas");
  if (numeroVistasElement) {
    numeroVistasElement.textContent = elementoContador;
  }
}

//Llama a la función cuando se cargue la página
document.addEventListener('DOMContentLoaded', contarCargaPagina);