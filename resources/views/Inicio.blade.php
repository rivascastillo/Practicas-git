<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    
    <Style>
    
body{
    margin: 0;
    padding: 0;
    <font-family: sans serif;
    }
    .color-container{
     width: 16px;º
     height: 16px;
     Display: inline-block;
     border-radius: 4px;
    }
    a{
        text-decoration: none;
     }
    </Style>
    </head>
<body>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">INICIO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">


      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Discapacidad
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="Auditiva.blade.php">Auditiva</a></li>
            <li><a class="dropdown-item" href="#">visual</a></li>
            <li><a class="dropdown-item" href="#">Mental</a></li>
            <li><a class="dropdown-item" href="#">fisica</a></li>
            <li><a class="dropdown-item" href="#">Sensorial</a></li>
            <li><a class="dropdown-item" href="#">Psicosocial</a></li>
            <li><a class="dropdown-item" href="#">visual</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cursos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">manualidades</a></li>
            <li><a class="dropdown-item" href="#">Reparacione de electrodomesticos</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Servicios
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">manualidades</a></li>
            <li><a class="dropdown-item" href="#">Reparacione de electrodomesticos</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cuenta
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Registrarse</a></li>
            <li><a class="dropdown-item" href="#">Iniciar Sesio</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>

<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="https://st.depositphotos.com/1003697/53670/v/600/depositphotos_536705274-stock-video-a-person-with-disabilities-playing.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="https://img.freepik.com/vector-premium/concepto-inclusion-social-personas-silla-ruedas-hombre-discapacitado-silla-ruedas-reunion-persona-discapacidad-sociedad-estudiantil-ilustracion-vector-plano-coloreado-aislado-sobre-fondo-blanco_198278-13092.jpg?w=2000" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://img.freepik.com/vector-gratis/ninos-discapacitados-patio-escuela-saludandose_107791-649.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<style>
    .card-body{
    padding-top: 56px;
  }
  
      .carousel-item {
    height: 75vh;
    min-height: 3px;
    width: 200vh;
    background: no-repeat center center scroll;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
  }
</style>

<div class="container">
<center>
    <h1 class="my-4">Bienvenid@s <br> "Camino virtual  para vida independiente"<br>De personas con discapacidad</h1>
  </center>
</div>
<div class="row">

<div class="col-lg-4 col-sm-6 portfolio-item">
    <div class="card h-100"> 
      <a onmouseover="cambiar();" onmouseout="volver();" href="#"><img class="card-img-top"  src="https://th.bing.com/th/id/R.93cbac5e93539745e3b92794643a39b8?rik=Iqlvan%2f%2bwRYUEQ&pid=ImgRaw&r=0" id="matrix"></a> 
      <div class="card-body">
        <h4 class="card-title">
          <a href="empleos.html">Empleos</a>
        </h4>
        <p class="card-text">En ésta sección de empleos, están las ofertas o vacantes disponibles de algunas empresas que necesitan de tus habilidades.</p>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-sm-6 portfolio-item">
    <div class="card h-100">
      <a onmouseover="cambio();" onmouseout="vuelve();"><img class="card-img-top" src="https://blog.educaweb.mx/wp-content/uploads/2016/10/iStock_70334397_SMALL-805x594.jpg"   id="matrixa"></a>
      <div class="card-body">
        <h4 class="card-title">
          <a href="portfolio-1-col.html">Cursos</a>
        </h4>
        <p class="card-text">Todos los cursos disponibles los encuentras en ésta sección, a los que puedes aplicar una vez que tengas una cuenta.</p>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-sm-6 portfolio-item">
    <div class="card h-100">
      <a href="#" onmouseover="cambios2();" onmouseout="vuelves2();"><img class="card-img-top" src="https://cdn.slidesharecdn.com/ss_thumbnails/losserviciosdeinternet-140528025138-phpapp01-150602110915-lva1-app6891-thumbnail-4.jpg?cb=1433243401" id="matrixd"></a>
      <div class="card-body">
        <h4 class="card-title">
          <a href="listaServicios.html">Servicios</a>
        </h4>
        <p class="card-text">Información de los usuarios que se han registrado, datos que permitiran a empresas hacer contrato con ellos.</p>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-sm-6 portfolio-item">
    <div class="card h-100">
      <a href="#" onmouseover="cambios1();" onmouseout="vuelves1();"><img class="card-img-top" src="https://observatorio.uraccan.edu.ni/sites/default/files/imagenes/URACCAN%20Logo%20web2.png" id="matrixc" ></a>
      <div class="card-body">
        <h4 class="card-title">
          <a href="NuestrosSocios.html">Nuestros socios</a>
        </h4>
        <p class="card-text">Toda la información relacionada con nuestros socios está en ésta sección(Sitios web, teléfonos, correos, etc).</p>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-sm-6 portfolio-item">
    <div class="card h-100">
      <a href="#" onmouseover="cambios();" onmouseout="vuelves();"><img class="card-img-top" src="https://estudiantes.ucontinental.edu.pe/wp-content/uploads/2019/01/biblioteca-virtual-3.jpg" id="matrixb"></a>
      <div class="card-body">
        <h4 class="card-title">
          <a href="#">Biblioteca virtual</a>
        </h4>
        <p class="card-text">En este capitulo, la imagen nos representa el logo de nuestro reto como identificacion y ser reconocido por los usuarios.</p>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-sm-6 portfolio-item">
    <div class="card h-100">
      <a href="#" onmouseover="cambios3();" onmouseout="vuelves3();"><img class="card-img-top" src="https://eagendas.cgu.gov.br/assets/images/ascom-eagendas.png" id="matrixe" alt=""></a>    
      <div class="card-body">
        <h4 class="card-title">
          <a href="#">Agendas</a>
        </h4>
        <p class="card-text">En esta imagen obcervamos la discapacidad que sufren algunas personas, es por ello que hemos diseñado este marco.</p>
      </div>      
    </div>
  </div>
</div>
<br>
<footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Plataforma en proceso de creacion 2022 <br> URACCAN LAS MINAS 2022</p>
   </div>
    <!-- /.container -->
  </footer>

</body>
</html>