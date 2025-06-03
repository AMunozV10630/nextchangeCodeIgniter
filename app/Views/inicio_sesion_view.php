<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NextChange</title>
    <!--Colocar ícono NextChange-->
    <link rel="icon" href="../nextchange/images/icon-nextchange.ico">
    <!--Enlazar con hoja CSS-->
    <link rel="stylesheet" href="styles.css">
    <!--Enlazar con hoja JavaScript-->  
    <script src="main.js"></script> 
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
              <img src="../nextchange/Images/logo-nextchange.png" alt="Logo NextChange">
              <h2>NextChange</h2>
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

      <!-- Sección Inicia Sesión -->
      <section id="inicia-sesion" style="display:none; margin: 30px;">
        <h2>Inicia Sesión</h2>
        <form id="form-inicio-sesion">
          <!-- correo electrónico y contraseña -->
          <div class="mb-3">
            <label for="usuario" class="form-label">Usuario (correo electrónico)</label>
            <input type="email" class="form-control" id="usuario" required>
          </div>
          <div class="mb-3">
            <label for="contraseña" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="contraseña" required>
          </div>
          <div class="mb-3 form-check">
            <label><a href="#olvido-contraseña">Olvidó su contraseña</a></label>
          </div>
              <button class="primary-button btn-button3">Iniciar</button>
        </form>
      </section>

      <!-- Contenedor para mensaje de inicio de sesion -->
      <div id="mensaje-inicio-sesion" class="alert alert-success mt-3" style="display:none;">
        ¡Sesión Iniciada! Bienvenido a NextChange.
      </div>
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

        <div class="col-6 imageSostenibilidad">
            <img src="../nextchange/Images/tulipan.jpg" class="img-fluid" alt="tulipan">
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
  </footer>   

  <!--Enlace de Bootstrap con js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>