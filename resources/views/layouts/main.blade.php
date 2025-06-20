<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <link href="{{ asset('css/main.css') }}" type="text/css" rel="stylesheet">
  <!-- Seccion para colocar CSS espeficico -->
  @yield('cssp')
  <!-- Seccion para colocar el titulo de la pagina -->
  <title>@yield('title')</title>
</head>

<body>
  <div class="container1">
    <header>
      <!-- Header de la pagina(logos del UsaLab) -->
      <div class="header">
        <img src="{{ asset('img/Logo UTM Color 1.png') }}"  class="logoutm"   alt="UTM">
        <img src="{{ asset('img/logo Usalab 3-03 1.png') }}" class="logousalab" alt="UsaLab">
      </div>
      <!-- Barra de navegacion -->
      <div class="navbar-wrapper" id="navbarWrapper">   
        <div class="navbar1">
          <img src="{{ asset('img/Logo-UTM-1.png') }}" class="logo-mini" alt="UTM mini">
          <img src="{{ asset('img/logo Usalab 3-03 1.png') }}" class="logo-mini usalab-mini" alt="UsaLab mini">
        <!-- Seccion Inicio -->
        <div class="inicio" onclick="window.location.href='{{ url('/') }}'">
              
              <!-- logo mini -->
              
              <span class="iniciotxt">Inicio</span>
          </div>
        <!-- Termina seccion Inicio -->
        <div class="mobile-menu-toggle"
          onclick="document.querySelector('.menu1').classList.toggle('active')">
          <span class="hamburger-icon">&#9776;</span>
          <span class="menu-text">Menú</span>
        </div>
       <div class="menu1">
          <div class="inicio-mobile" onclick="window.location.href='{{ url('/') }}'">
            <div class="navbartxt">Inicio</div>
          </div>

          <div class="acercade">
            <div onclick="window.location.href='{{ url('/nosotros') }}'" class="navbartxt">Acerca de</div>
            <!-- Contenido acerca de -->
            <div class="acercadeCont">
              <div onclick="window.location.href='{{ url('/nosotros#mision') }}'"class="adcontent">
                <div class="navbartxt">Misión y Visión</div>
              </div>
              <div onclick="window.location.href='{{ url('/nosotros#instalaciones') }}'" class="adcontent">
                <div class="navbartxt">Instalaciones</div>
              </div>
              <div onclick="window.location.href='{{ url('/nosotros#equipo') }}'" class="adcontent">
                <div class="navbartxt">Equipo a cargo</div>
              </div>
              <div onclick="window.location.href='{{ url('/nosotros#trayectoria') }}'" class="adcontent">
                <div class="navbartxt">Trayectoria</div>
              </div>
              <div onclick="window.location.href='{{ url('/nosotros#colab') }}'" class="adcontent">
                <div class="navbartxt">Colaboración</div>
              </div>
              <div onclick="window.location.href='{{ url('/nosotros#logros') }}'" class="adcontent">
                <div class="navbartxt">Logros</div>
              </div>
              <div onclick="window.location.href='{{ url('/nosotros#testimonios') }}'" class="adcontent">
                <div class="navbartxt">Testimonios</div>
              </div>
            </div>
          </div>
          <!-- Termina seccion Acerca de -->

          <!-- Seccion servicios -->
          <div class="servicios">
  <div class="navbartxt">Servicios</div>
  <!-- Nivel 1: Contenedor de primer nivel de "Servicios" -->
  <div class="serviciosCont">

    <!-- Bloque 1: Industria -->
    <div class="srcontent">
      <!-- Texto clickable "Industria" -->
      <div onclick="window.location.href='{{ url('/servicios-industria') }}'" class="navbartxt">Industria</div>
      <!-- Sub-submenú: se despliega a la derecha al hacer hover en .srcontent -->
      <div class="servicioindustriaCont">
        <!-- Aquí van las subopciones específicas de Industria -->
        <div class="sricontent">
          <div onclick="window.location.href='{{ url('/servicios-industria#estudios-de-usabilidad') }}'" class="navbartxt">Estudios de Usabilidad</div>
        </div>
        <div class="sricontent">
          <div onclick="window.location.href='{{ url('/servicios-industria#consultoria-de-UX-UI') }}'" class="navbartxt">Consultoría de UX/UI</div>
        </div>
        <div class="sricontent">
          <div onclick="window.location.href='{{ url('/servicios-industria#capacitacion-y-formacion') }}'" class="navbartxt">Capacitación y formación</div>
        </div>
        <div class="sricontent">
          <div onclick="window.location.href='{{ url('/servicios-industria#desarrollo-de-prototipos') }}'" class="navbartxt">Desarrollo de prototipos</div>
        </div>
        <div class="sricontent">
          <div onclick="window.location.href='{{ url('/en-construccion') }}'" class="navbartxt">Análisis de UX/UI</div>
        </div>
        <div class="sricontent">
          <div onclick="window.location.href='{{ url('/en-construccion') }}'" class="navbartxt">Proyectos a medida</div>
        </div>
      </div>
    </div><!-- srcontent (Industria) -->

    <!-- Bloque 2: Academia -->
    <div class="srcontent">
      <!-- Texto clickable "Academia" -->
      <div onclick="window.location.href='{{ url('/servicios-academia') }}'" class="navbartxt">Academia</div>
      <!-- Sub-submenú: se despliega a la derecha al hacer hover en .srcontent -->
      <div class="servicioacademiaCont">
        <!-- Aquí van las subopciones específicas de Academia -->
        <div class="sracontent">
          <div onclick="window.location.href='{{ url('/servicios-academia#planes-de-estudio') }}'" class="navbartxt">Planes de estudio</div>
        </div>
        <div class="sracontent">
          <div onclick="window.location.href='{{ url('/servicios-academia#cursos-especializados') }}'" class="navbartxt">Cursos Especializados</div>
        </div>
        <div class="sracontent">
          <div onclick="window.location.href='{{ url('/servicios-academia#asesorias') }}'" class="navbartxt">Asesorías</div>
        </div>
        <div class="sracontent">
          <div onclick="window.location.href='{{ url('/servicios-academia#acceso-a-laboratorio') }}'" class="navbartxt">Acceso a Laboratorio</div>
        </div>
      </div>
    </div><!-- srcontent (Academia) -->

  </div><!-- serviciosCont -->
</div><!-- .servicios -->
          <!-- Termina seccion Servicos -->

          <!-- Seccion Investigaciones -->
          <div class="investigaciones">
            <!-- Redirección a la ventana "Investigaciones" -->
            <div onclick="window.location.href='{{ url('/investigaciones') }}'" class="navbartxt">Investigaciones</div>
            <div class="investigacionesCont">
              <div class="incontent">
                <!-- Redirección a la sección "Proyectos actuales" en la ventana "Investigaciones" -->
                <div onclick="window.location.href='{{ url('/investigaciones#proyectos-actuales') }}'" class="navbartxt">Proyectos Actuales</div>
              </div>
              <div class="incontent">
                <!-- Redirección a la sección "Publicaciones" en la ventana "Investigaciones" -->
                <div onclick="window.location.href='{{ url('/investigaciones#publicaciones') }}'" class="navbartxt">Publicaciones</div>
              </div>
              <div class="incontent">
                <!-- Redirección a la sección "Líneas de investigación" en la ventana "Investigaciones" -->
                <div onclick="window.location.href='{{ url('/investigaciones#lineas-de-investigacion') }}'" class="navbartxt">Líneas de investigación</div>
              </div>
              <div class="incontent">
                <!-- Redirección a la sección "Investigaciones más destacados" en la ventana "Investigaciones" -->
                <div onclick="window.location.href='{{ url('/investigaciones#investigaciones-mas-destacadas') }}'" class="navbartxt">Más destacados</div>
              </div>
            </div>
          </div>
          <!-- Termina seccion Investigaciones -->

          <!-- Seccion formacion academica -->
          <div class="formacion">
            <div onclick="window.location.href='{{ url('/academica') }}'" class="navbartxt">Academia</div>
            <div class="formacionCont">
              <div onclick="window.location.href='{{ url('/academica#pruebausalab') }}'" class="facontent">
                <div class="navbartxt">Pruebas de Usabilidad</div>
              </div>
              <div onclick="window.location.href='{{ url('/academica#practicas') }}'" class="facontent">
                <div class="navbartxt">Prácticas Profesionales</div>
              </div>
              <div onclick="window.location.href='{{ url('/academica#servicio') }}'" class="facontent">
                <div class="navbartxt">Servicio Social</div>
              </div>
              <div onclick="window.location.href='{{ url('/academica#tesis') }}'" class="facontent">
                <div class="navbartxt">Tesis</div>
              </div>
              <div onclick="window.location.href='{{ url('/academica#maestria') }}'" class="facontent">
                <div class="navbartxt">Maestría</div>
              </div>
            </div>
          </div>
          <!-- Termina seccion formacion academica -->

          <!-- Seccion Eventos -->
          <div class="eventos">
            <div onclick="window.location.href='{{ url('/eventos') }}'" class="navbartxt">Eventos</div>
            <div class="eventosCont">
              <div class="evcontent">
                <!-- Redirección a la sección ultimos eventos -->
                 <div onclick="window.location.href='{{ url('/eventos#ultimos-eventos') }}'" class="navbartxt">Últimos Eventos</div>
              </div>
              <div class="evcontent">
                <div onclick="window.location.href='{{ url('/eventos#conferencias') }}'" class="navbartxt">Conferencias</div>
              </div>
              <div class="evcontent">
                <div onclick="window.location.href='{{ url('/eventos#talleres') }}'" class="navbartxt">Talleres</div>
              </div>
              <div class="evcontent">
                <div onclick="window.location.href='{{ url('/eventos#cursos') }}'" class="navbartxt">Cursos</div>
              </div>
              <div class="evcontent">
                <div onclick="window.location.href='{{ url('/eventos#concursos') }}'" class="navbartxt">Concursos</div>
              </div>
            </div>
          </div>
          <!-- seccion de idiomas de la barra de navegacion -->
          <div class="idioma">
            <img src="{{ asset('icons/fontisto_world-o.svg') }}" alt="">
            <div onclick="window.location.href='{{ url('/en-construccion') }}'" class="idiomatxt">Eng</div>
          </div>
        </div>
      </div>
      </div>
      <div id="navSpacer"></div>
      <!-- Termina barra de navegación -->
      <div class="separador"></div>
    </header>
    <!-- Seccion principal -->
    <main>
      <!-- Carrusel de la página principal -->
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
              <!-- Imagenes del carrusel -->
              @yield('img')
          </div>
          <div class="carousel-caption">
              <!-- Titulo del carrusel -->
              <div class="titulousalab">
                  <p class="titulousalabtxt">@yield('tituloc')</p>
              </div>
              <!-- Contenido del carrusel -->
              <div class="contenidousalab">
                  <p class="contenidousalabtxt">@yield('contc')</p>
              </div>
          </div>
      </div>
      <!-- Termina carrusel de la pagina principal -->
      @yield('content')
    </main>
    <!-- pie de pagina de la pagina -->
    <footer>
      <div class="footerinformacion">
        <div class="logosfooter">
          <img class="utmfooter" src="{{ asset('img/Logo-UTM-1.png') }}" />
          <img class="usalabfooter" src="{{ asset('img/logo Usalab 3-03 1.png') }}" />
        </div>  
        <div class="sf1"></div>
        <div class="footertxt">+52 953 532 0399<br /><br />Av. Doctor Modesto Seara Vázquez #1, Acatlima, 69000 Heroica
          Cdad. de Huajuapan de León, Oax. México<br /><br /></div>
        <div class="sf2"></div>
        <div class="logoslink">
          <a href="https://www.facebook.com/profile.php?id=100057657099727">
            <img class="facebook" src="{{ asset('icons/mdi_facebook.svg') }}" />
          </a>
          <a href="">
            <img class="link12" src="{{ asset('icons/ic_round-link.svg') }}" />
          </a>
        </div>
      </div>
    <!-- Seccion menú rápido -->
      <div class="footermenu">
        <div class="menurapido">
          <p class="menurapidotxt">&lt;Menú rápido&gt;</p>
          <br>
          <br>
          <div class="footeroptions">
            <p onclick="window.location.href='{{ url('/') }}'" class="optiontxt">Inicio</p>
            <p onclick="window.location.href='{{ url('/nosotros') }}'"  class="optiontxt">Acerca de</p>
            <p onclick="window.location.href='{{ url('/servicios-industria') }}'" class="optiontxt">Industria</p>
            <p onclick="window.location.href='{{ url('/servicios-academia') }}'" class="optiontxt">Academia</p>
            <p onclick="window.location.href='{{ url('/investigaciones') }}'" class="optiontxt">Investigaciones</p>
            <p onclick="window.location.href='{{ url('/academica') }}'" class="optiontxt">Formación Académica</p>
            <p onclick="window.location.href='{{ url('/eventos') }}'" class="optiontxt">Eventos</p>
          </div>
        </div>
      </div>
    <!-- Termina seccion menú rapido -->
    </footer>

  </div>
  <script>
document.addEventListener('DOMContentLoaded', () => {

    const bar      = document.getElementById('navbarWrapper'); // franja azul
    const spacer   = document.getElementById('navSpacer');     // espaciador invisible
    const desktop  = 992;                                      // mismo break‑point que en el CSS
    let   barTop   = 0;                                        // se calculará al vuelo

    /* --- calcula la posición ORIGINAL de la barra en el flujo del documento --- */
    function recalcBarTop(){
        bar.classList.remove('sticky');        // la devolvemos a su sitio normal
        spacer.style.height = 0;               // borramos la altura anterior
        /* offsetTop relativo al documento (= posición vertical real) */
        barTop = bar.getBoundingClientRect().top + window.scrollY;
    }

    /* --- decide si la barra debe o no estar pegada --- */
    function updateSticky(){
        /* en escritorio – pegamos solo después de que la franja blanca salga */
        if (window.scrollY >= barTop){
            if (!bar.classList.contains('sticky')){
                bar.classList.add('sticky');
                spacer.style.height = bar.offsetHeight + 'px'; // compensación
            }
        } else {
            bar.classList.remove('sticky');
            spacer.style.height = 0;
        }
    }

    /* --- eventos --- */
    recalcBarTop();                 // 1) justo al cargar el DOM
    updateSticky();                 // 2) y comprobamos el estado inicial

    window.addEventListener('scroll',  updateSticky);           // al hacer scroll
    window.addEventListener('resize',  () => {                  // al redimensionar
        recalcBarTop();
        updateSticky();
    });
    window.addEventListener('load',    () => {                  // cuando todo (imágenes, fuentes…) ha terminado de cargar
        recalcBarTop();
        updateSticky();
    });

    const menuContainer = document.querySelector('.menu1');
    // Selecciona todos los elementos que tienen un evento onclick dentro del menú.
    const menuLinks = menuContainer.querySelectorAll('[onclick]');

    menuLinks.forEach(link => {
        link.addEventListener('click', () => {
            // Si el menú está activo (abierto en móvil), le quita la clase para cerrarlo.
            if (menuContainer.classList.contains('active')) {
                menuContainer.classList.remove('active');
            }
        });
    });
});
</script>
</body>

</html>