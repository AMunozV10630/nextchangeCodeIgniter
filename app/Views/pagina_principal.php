<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NextChange</title>
    <!--Colocar ícono NextChange-->
    <link rel="icon" href="/images/icon-nextchange.ico">
    <!--Enlazar con hoja CSS-->
    <link rel="stylesheet" href="<?= base_url() ?>/styles.css">
    <!--Enlazar con hoja JavaScript-->  
    <script src="<?= base_url() ?>/main.js" defer></script>
    <!--Enlazar con Font Awesome-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <!--Enlazar con Bootstrap-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT"
      crossorigin="anonymous">
    <!--Enlazar con fuentes de letra de Google-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
      rel="preconnect"
      href="https://fonts.gstatic.com"
      crossorigin>
    <link
      href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap"
      rel="stylesheet">
</head>

<!--Configuraciones dentro de la página web-->

<body>
    <!--Contenido pantalla principal-->
    <div class="container">
      <!--Menú barra lateral-->     
      <aside class="col-3 sidebar">
          <div class="logo">
              <img src="/images/logo-nextchange.png" alt="Logo NextChange">
              <div class="logo-texto"> 
                  <h2>NextChange</h2>
              </div>
          </div>
          <div class="search-bar">
              <i class="fa-solid fa-magnifying-glass" id="searchIcon"></i>
              <input type="text" placeholder="Buscar..." id="searchInput">
          </div>
          <nav class="menu">
              <ul class="sin-sangria">
                  <li><a href="#" class="no-underline" onclick="mostrarPaginaPrincipal()"><i class="fa-solid fa-house"></i>Página Principal</a></li>
                  <li><a href="#" class="no-underline" onclick="mostrarSeccion('ropa')"><i class="fa-solid fa-shirt"></i>Ropa</a></li>
                  <li><a href="#" class="no-underline" onclick="mostrarSeccion('zapatos')"><i class="fa-solid fa-shoe-prints"></i>Zapatos</a></li>
                  <li><a href="#" class="no-underline" onclick="mostrarSeccion('accesorios')"><i class="fa-solid fa-ring"></i>Accesorios</a></li>
                  <li><a href="#" class="no-underline" onclick="mostrarSeccion('publicar')"><i class="fa-solid fa-bullhorn"></i>¡Publica aquí!</a></li>
                  <li><button class="secondary-button btn-button4"><i class="fa-solid fa-question-circle"></i>¿Cómo funciona?</button></li>
                  <li><button class="secondary-button btn-button5"><i class="fa-solid fa-comments"></i>¿Quiénes somos?</button></li>                 
              </ul>     
          </nav>
      </aside>

      <main class="col-9 content">
      <!-- Página principal -->
      <section id="pagina-principal" style="margin-left: 30px; margin-right: 30px;">
          <header class="main-header">
              <h1>NextChange</h1>
              <p>¡Intercambia tu prenda con estilo y apoya la sostenibilidad!</p>
              <div class="header-buttons">
                <a href="<?= base_url('inicioSesion') ?>"><button class="primary-button btn-button1">Inicia Sesión</button></a>
                <a href="<?= base_url('registro') ?>"><button class="secondary-button btn-button2">Regístrate</button></a>
              </div>
          </header>
          <div class="parrafo-publications">
                <p>Últimos artículos publicados:</p>
          </div>

          <div class="publications">
            <div class="publication-card"><a href="#"><img src="/images/ropa-vestido-rojo.jpg" class="img-fluid"
                          onmouseover="ChangeImage(1,this)" onmouseout="ChangeImage(2,this)" alt="vestido rojo"></a>
              </div>
              <div class="publication-card"><a href="#"><img src="images/zapatos-cafe-hombre.png" class="img-fluid"
                          onmouseover="ChangeImage(3,this)" onmouseout="ChangeImage(4,this)" alt="zapatos cafés"></a>
              </div>
              <div class="publication-card"><a href="#"><img src="/images/accesorio-cinturon-mujer.jpg"
                          class="img-fluid" onmouseover="ChangeImage(5,this)" onmouseout="ChangeImage(6,this)"
                          alt="accesorio cinturón vinotinto mujer"></a>
              </div>
              <div class="publication-card"><a href="#"><img src="/images/ropa-chaqueta-negra-hombre.png"
                          class="img-fluid" onmouseover="ChangeImage(7,this)" onmouseout="ChangeImage(8,this)"
                          alt="chaqueta negra hombre"></a>
              </div>
          </div>
      </section>

      <!-- Sección Publicar artículo -->
      <section id="seccion-publicar" class="seccion-publicaciones" style="display:none; margin-left: 30px; margin-right: 30px;">
        <h2>Publicar artículo</h2>
        <button class="btn btn-secondary mb-3" onclick="mostrarPaginaPrincipal()">Volver a inicio</button>
        
        <form id="form-publicar">
          <div class="mb-3">
            <label for="nombreArticulo" class="form-label">Nombre del artículo</label>
            <input type="text" class="form-control" id="nombreArticulo" required>
          </div>

          <div class="mb-3">
            <label for="tipoArticulo" class="form-label">Tipo de artículo</label>
            <select id="tipoArticulo" class="form-select" required>
              <option value="" disabled selected>Selecciona una opción</option>
              <option value="ropa">Ropa</option>
              <option value="zapatos">Zapatos</option>
              <option value="accesorios">Accesorios</option>
            </select>
          </div>
          
          <div class="mb-3">
            <label for="usuarioArticulo" class="form-label">Tipo de usuario</label>
            <select id="usuarioArticulo" class="form-select" required>
              <option value="" disabled selected>Selecciona una opción</option>
              <option value="hombre">Hombre</option>
              <option value="mujer">Mujer</option>
              <option value="nino">Niño</option>
            </select>
          </div>

          <div class="mb-3">
            <label for="marcaArticulo" class="form-label">Marca</label>
            <select id="marcaArticulo" class="form-select" required>
              <option value="" disabled selected>Selecciona una opción</option>
              <option value="nike">Nike</option>
              <option value="adidas">Adidas</option>
              <option value="levis">Levi's</option>
              <option value="puma">Puma</option>
              <option value="gucci">Gucci</option>
              <option value="prada">Prada</option>
              <option value="prada">Otros</option>
              <option value="prada">Sin marca</option>
              <option value="lv">Louis Vuitton</option>
            </select>
          </div>

          <div class="mb-3">
            <label for="fotosArticulo" class="form-label">Subir fotos del artículo</label>
            <input type="file" class="form-control" id="fotosArticulo" accept="image/*" multiple required>
          </div>

          <div class="mb-3">
            <label for="descripcionArticulo" class="form-label">Descripción</label>
            <textarea class="form-control" id="descripcionArticulo" rows="4" required></textarea>
          </div>

          <hr>

          <h4>Información del vendedor</h4>

          <div class="mb-3">
            <label for="nombreUsuario" class="form-label">Nombre y apellido</label>
            <input type="text" class="form-control" id="nombreUsuario" required>
          </div>

          <div class="mb-3">
            <label for="correoVendedor" class="form-label">Correo</label>
            <input type="text" class="form-control" id="correoVendedor" placeholder="Correo electrónico" required>
          </div>

          <div class="mb-3">
            <label for="telefonoVendedor" class="form-label">Número Telefónico</label>
            <input type="text" class="form-control" id="telefonoVendedor" placeholder="teléfono" required>
          </div>

          <div class="mb-3">
            <label for="mensajeAdicional" class="form-label">Mensaje adicional</label>
            <textarea class="form-control" id="mensajeAdicional" rows="3"></textarea>
          </div>

          <button type="submit" class="btn btn-primary">Intercambiar</button>
        </form>
      </section>
      
      <!-- Sección Ropa -->
      <section id="seccion-ropa" class="seccion-publicaciones" style="display:none; margin-left: 30px; margin-right: 30px;">
          <h2>Ropa</h2>
          <button class="btn btn-secondary mb-3" onclick="mostrarPaginaPrincipal()">Volver a inicio</button>

          <div class="filtros mb-3">
              <strong>Filtrar por tipo de usuario:</strong>
              <button class="btn btn-outline-primary filtro-usuario" data-usuario="hombre">Hombre</button>
              <button class="btn btn-outline-primary filtro-usuario" data-usuario="mujer">Mujer</button>
              <button class="btn btn-outline-primary filtro-usuario" data-usuario="nino">Niño</button>
          </div>

          <div class="filtros mb-3">
              <strong>Filtrar por marca:</strong>
              <button class="btn btn-outline-primary filtro-marca" data-marca="nike">Nike</button>
              <button class="btn btn-outline-primary filtro-marca" data-marca="adidas">Adidas</button>
              <button class="btn btn-outline-primary filtro-marca" data-marca="levis">Levi's</button>
              <button class="btn btn-outline-primary filtro-marca" data-marca="otra">Otra</button>
          </div>

          <button class="btn btn-outline-danger mb-3" onclick="limpiarFiltros('ropa')">Limpiar filtros</button>

          <div class="publications">
              <div class="publication-card" data-usuario="mujer" data-marca="otra">
                  <img src="/images/ropa-vestido-rojo.jpg" class="img-fluid" alt="vestido rojo">
              </div>
              <div class="publication-card" data-usuario="hombre" data-marca="otra">
                  <img src="/images/ropa-chaqueta-negra-hombre.png" class="img-fluid" alt="chaqueta negra">
              </div>
          </div>
      </section>

      <!-- Sección Zapatos -->
      <section id="seccion-zapatos" class="seccion-publicaciones" style="display:none; margin-left: 30px; margin-right: 30px;">
          <h2>Zapatos</h2>
          <button class="btn btn-secondary mb-3" onclick="mostrarPaginaPrincipal()">Volver a inicio</button>

          <div class="filtros mb-3">
              <strong>Filtrar por tipo de usuario:</strong>
              <button class="btn btn-outline-primary filtro-usuario" data-usuario="hombre">Hombre</button>
              <button class="btn btn-outline-primary filtro-usuario" data-usuario="mujer">Mujer</button>
              <button class="btn btn-outline-primary filtro-usuario" data-usuario="nino">Niño</button>
          </div>

          <div class="filtros mb-3">
              <strong>Filtrar por marca:</strong>
              <button class="btn btn-outline-primary filtro-marca" data-marca="nike">Nike</button>
              <button class="btn btn-outline-primary filtro-marca" data-marca="adidas">Adidas</button>
              <button class="btn btn-outline-primary filtro-marca" data-marca="puma">Puma</button>
              <button class="btn btn-outline-primary filtro-marca" data-marca="otra">Otra</button>
          </div>

          <button class="btn btn-outline-danger mb-3" onclick="limpiarFiltros('zapatos')">Limpiar filtros</button>

          <div class="publications">
              <div class="publication-card" data-usuario="hombre" data-marca="otra">
                  <img src="/images/zapatos-cafe-hombre.png" class="img-fluid" alt="zapatos cafés">
              </div>
          </div>
      </section>

      <!-- Sección Accesorios -->
      <section id="seccion-accesorios" class="seccion-publicaciones" style="display:none; margin-left: 30px; margin-right: 30px;">
          <h2>Accesorios</h2>
          <button class="btn btn-secondary mb-3" onclick="mostrarPaginaPrincipal()">Volver a inicio</button>

          <div class="filtros mb-3">
              <strong>Filtrar por tipo de usuario:</strong>
              <button class="btn btn-outline-primary filtro-usuario" data-usuario="hombre">Hombre</button>
              <button class="btn btn-outline-primary filtro-usuario" data-usuario="mujer">Mujer</button>
              <button class="btn btn-outline-primary filtro-usuario" data-usuario="nino">Niño</button>
          </div>

          <div class="filtros mb-3">
              <strong>Filtrar por marca:</strong>
              <button class="btn btn-outline-primary filtro-marca" data-marca="gucci">Gucci</button>
              <button class="btn btn-outline-primary filtro-marca" data-marca="prada">Prada</button>
              <button class="btn btn-outline-primary filtro-marca" data-marca="lv">Louis Vuitton</button>
          </div>

          <button class="btn btn-outline-danger mb-3" onclick="limpiarFiltros('accesorios')">Limpiar filtros</button>

          <div class="publications">
              <div class="publication-card" data-usuario="mujer" data-marca="gucci">
                  <img src="/images/accesorio-cinturon-mujer.jpg" class="img-fluid" alt="cinturón mujer">
              </div>
          </div>
      </section>

      <div class="container">
        <!-- Sección Como Funciona -->
        <section id="como-funciona" class="seccion-publicaciones" style="display:none; margin-left: 30px; margin-right: 30px;">
            <h2>¿Cómo Funciona?</h2>
            <dl>
              <dt><strong>Registrarse en la página:</strong></dt>
              <dd>Crea una cuenta para comenzar a formar parte de la comunidad.</dd>
              <dt><strong>Publicar los artículos que se quiere intercambiar:</strong></dt>
              <dd>Sube fotos y detalles de las prendas que deseas ofrecer.</dd>
              <dt><strong>Estar pendiente de posibles preguntas sobre el artículo:</strong></dt>
              <dd>Responde dudas de otros usuarios interesados en tus prendas.</dd>
              <dt><strong>Una vez recibida la oferta, aceptarla y validar las condiciones de entrega y envío:</strong></dt>
              <dd>Coordina con la otra persona cómo se realizará el intercambio.</dd>
              <dt><strong>Finalmente, disfruta de tu prenda:</strong></dt>
              <dd>Recibe tu nueva prenda y dale una segunda vida.</dd>
            </dl>

            <button class="btn btn-secondary mb-3" onclick="mostrarPaginaPrincipal()">Volver a inicio</button>
        </section>
      </div>

      <!-- Sección Quienes Somos -->
        <section id="quienes-somos" class="seccion-publicaciones" style="display:none; margin-left: 30px; margin-right: 30px;">
            <h2>¿Quiénes somos?</h2>
            <p style="margin-top: 90px;">
            Somos una plataforma dedicada al intercambio de prendas usadas, creada para darle una segunda vida a la ropa y reducir el impacto ambiental de la industria textil. Aquí puedes subir las prendas que ya no usas, descubrir piezas únicas de otras personas y hacer intercambios de manera sencilla y segura. Al alargar la vida útil de la ropa, promovemos el consumo consciente, fomentamos la economía circular y contribuimos juntos a un futuro más sostenible. ¡Únete a la comunidad y transforma tu forma de vestir!
            </p>
            <button class="btn btn-secondary mb-3" onclick="mostrarPaginaPrincipal()">Volver a inicio</button>
        </section>
      </main>
    </div>

      <!--Contenido Información legal-->
      <div class="container mt-5">
        <div class="col-3 info-box">
            <h3>Términos y condiciones</h3>
            <p>Haga clic <a href="#" style="text-decoration: underline;" data-bs-toggle="modal"
                    data-bs-target="#miModal1">acá</a> para ver los términos y condiciones.</p>
            <br>
            <h3>Uso de datos personales</h3>
            <p>Haga clic <a href="#" style="text-decoration: underline;" data-bs-toggle="modal"
                    data-bs-target="#miModal2">acá</a> para ver el uso de datos
                personales.</p>
        </div>
        <div class="col-3 info-box">
            <h3>Aviso de privacidad</h3>
            <p>Haga clic <a href="#" style="text-decoration: underline;" data-bs-toggle="modal"
                    data-bs-target="#miModal3">acá</a> para ver el aviso de privacidad.
            </p>
            <br>
            <h3>Uso de Cookies</h3>
            <p>Haga clic <a href="#" style="text-decoration: underline;" data-bs-toggle="modal"
                    data-bs-target="#miModal4">acá</a> para ver el uso de cookies.</p>
        </div>

        <div class="col-6">
          <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d254508.51141489705!2d-74.107807!3d4.64829755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9bfd2da6cb29%3A0x239d635520a33914!2zQm9nb3TDoQ!5e0!3m2!1ses!2sco!4v1745572250678!5m2!1ses!2sco">
          </iframe>
        </div>
      </div>

      <!--Contenido ventanas modales-->
      <div class="modal fade" id="miModal1" tabindex="-1" aria-labelledby="ModalLabel1" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="ModalLabel1">TÉRMINOS Y CONDICIONES</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                  </div>
                  <div class="modal-body">
                      <p> ¡Te damos la bienvenida a NextChange! ¡Intercambia tu prenda con estilo y apoya la
                          sostenibilidad! El sitio que ofrece variadas opciones de prendas sostenibles y de segunda mano
                          que se dan a cambio de los créditos obtenidos por publicar otra prenda similar en buen estado.
                      </p>
                      <p> En esta sección encontrarás los Términos y Condiciones que rigen la navegación y uso de nuestra
                          web, en adelante, el “Sitio web” o el “Sitio. Recuerda que, de acuerdo con los usos y costumbres
                          comerciales colombianas, se entiende que una persona acepta las condiciones de uso, normas y
                          contenido de propiedad intelectual de una página web por el solo hecho de navegar en ella, por
                          lo que, antes de comenzar, te invitamos a que dediques unos minutos para conocerlos.</p>
                      <h3>Términos y condiciones</h3>
                  </div>
              </div>
          </div>
      </div>

      <div class="modal fade" id="miModal2" tabindex="-1" aria-labelledby="ModalLabel2" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="ModalLabel2">USO DE DATOS PERSONALES</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                  </div>
                  <div class="modal-body">
                      <p> NextChange, identificada bajo el Nit. 999.999.999-9, con domicilio en Bogotá, correo electrónico
                          info@nextchange.com.co, en adelante la (“SOCIEDAD”), adopta y da a conocer a los Titulares de
                          los Datos Personales, la presente política, con la finalidad de informar el alcance y la
                          finalidad del Tratamiento al cual serán sometidos los Datos Personales en caso de que el Titular
                          otorgue su autorización expresa, previa e informada, así como los derechos que les asisten, los
                          procedimientos y mecanismos dispuestos por la SOCIEDAD, para hacer efectivos esos derechos.
                      </p>
                      <p> El artículo 15 de la Constitución Política, consagra el derecho a la intimidad personal,
                          familiar y habeas data, así mismo el derecho del Titular del dato a conocer, actualizar y
                          rectificar la información recogida sobre el en bancos de datos y archivos de entidades públicas
                          o privadas. En desarrollo del artículo constitucional antes mencionado, se expidió la Ley
                          Estatutaria 1581 el 17 de octubre de 2012, que constituye el marco general de la protección de
                          los datos personales en Colombia. El artículo 17 literal k de esta ley, exige a los responsables
                          del tratamiento de datos personales "adoptar un manual interno de políticas y procedimientos
                          para garantizar el adecuado cumplimiento de la presente ley y en especial, para la atención de
                          consultas y reclamos". Posteriormente se expide el Decreto 1377 de 2013, con el fin de facilitar
                          la implementación y cumplimiento de la Ley 1581 de 2012 y reglamentar entre otros los aspectos
                          relacionados con la autorización del Titular de información para el Tratamiento de sus datos
                          personales, las políticas de Tratamiento de los responsables y Encargados, el ejercicio de los
                          derechos de los Titulares de información.</p>
                      <h3>Política de protección de datos personales</h3>
                  </div>
              </div>
          </div>
      </div>

      <div class="modal fade" id="miModal3" tabindex="-1" aria-labelledby="ModalLabel3" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="ModalLabel3">AVISO DE PRIVACIDAD</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                  </div>
                  <div class="modal-body">
                      <p> De acuerdo con la Ley Estatutaria 1581 de 2012 de Protección de Datos, la Ley 1266 de 2008, la
                          Circular Única de la Superintendencia de Industria y Comercio título V, sus decretos
                          reglamentarios y demás disposiciones aplicables y concordantes, por medio de este aviso de
                          privacidad, te informamos, tal como se definen en los Términos y Condiciones que rigen los
                          sitios web, acerca de la existencia de las políticas de tratamiento de información indicadas a
                          continuación, que les serán aplicables, la forma de acceder a las mismas, las finalidades del
                          tratamiento que se pretende dar a los datos personales, y los derechos que le asisten a los
                          titulares de los datos.</p>
                      <p> NextChange administrador del sitio y las aplicaciones disponibles para los dispositivos móviles
                          (en adelante y conjuntamente, los “Sitios”) trabaja de manera constante para resguardar y
                          garantizar la seguridad de tu información personal en nuestros sistemas.</p>
                      <p> A continuación, encontrarás información sobre cómo se recogen y tratan tus datos de carácter
                          personal.</p>
                      <h3>Información tratamiento de datos</h3>
                  </div>
              </div>
          </div>
      </div>

      <div class="modal fade" id="miModal4" tabindex="-1" aria-labelledby="ModalLabel4" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="ModalLabel4">USO DE COOKIES</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                  </div>
                  <div class="modal-body">
                      <p> Nuestra página web NextChange (en adelante y conjuntamente, los “Sitios”), utiliza cookies para
                          mejorar nuestros servicios, personalizar nuestros Sitios, facilitar tu navegación, distinguirte
                          de los otros usuarios, proporcionarte una mejor experiencia en el uso de los Sitios e
                          identificar problemas para mejorar los mismos.</p>
                      <p> Así mismo, te informamos de que podemos utilizar cookies en tu dispositivo a condición de que
                          hayas dado tu consentimiento, salvo en los supuestos en los que las cookies sean necesarias para
                          la navegación por nuestra App. En caso de que prestes tu consentimiento, podremos utilizar
                          cookies que nos permitirán tener más información acerca de tus preferencias y personalizar
                          nuestra App de conformidad con tus intereses individuales.</p>
                      <p> Te recomendamos leer atentamente la presente política de cookies (en adelante, la “Política”)
                          para entender qué son las cookies, para qué sirven, qué tipo de cookies se utilizan en los
                          Sitios, con qué finalidad y cómo configurarlas o desactivarlas, si así lo deseas.</p>
                      <h3>Política de cookies</h3>
                  </div>
              </div>
          </div>
      </div>

  <!--Contenido pie de página-->    
  <footer class="mobile-footer">
      <hr>
      <h3>NextChange</h3>
      <p>Copyright © 2025 All rights reserved</p>
      <div class="social-buttons">
        <a href="https://www.whatsapp.com/" target="_blank" class="social-icon whatsapp"><i class="fab fa-whatsapp"></i></a>
        <a href="https://www.facebook.com/" target="_blank" class="social-icon facebook"><i class="fab fa-facebook-f"></i></a>
        <a href="https://www.instagram.com/" target="_blank" class="social-icon instagram"><i class="fab fa-instagram"></i></a>
      </div>
  </footer> 

<div id="contenedor-vistas">
    Numero de vistas: <span type="number" id="numero_vistas">0</span>
  <script defer>
    window.addEventListener("load", contarCargaPagina);
  </script>
</div>

  <!--Enlace de Bootstrap con js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>