<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Redsoc</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <link href="/css/app.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizLand - v1.2.1
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i> <a href="mailto:contact@example.com">contact@example.com</a>
        <i class="icofont-phone"></i> +1 5589 55488 55
      </div>
      <div class="social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="skype"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">Redsoc<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>-->

     
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>Bienvenido a <span>Redsoc</spa>
      </h1>
      <h2></h2>
    
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Listado de ONG</h2>
          <h3>Organizaciones no gubernamentales</h3>
        </div>

        <div class="row">
          
            @foreach($organizations as $organization)
            <div href="#" 
            onclick="show('{{$organization->nombre ?? 'N/A'}}','{{$organization->siglas ?? 'N/A'}}',
            '{{$organization->ano_creacion ?? 'N/A'}}','{{$organization->direccion ?? 'N/A'}}','{{$organization->telefonos ?? 'N/A'}}'
            ,'{{$organization->mision ?? 'N/A'}}','{{$organization->vision ?? 'N/A'}}'
            ,'{{$organization->pagina_web ?? 'N/A'}}','{{$organization->nombre_persona ?? 'N/A'}}'
            ,'{{$organization->telefono_persona ?? 'N/A'}}','{{$organization->email_persona ?? 'N/A'}}'
            ,'{{$organization->twitter ?? 'N/A'}}','{{$organization->facebook ?? 'N/A'}}','{{$organization->instagram ?? 'N/A'}}');"
            data-toggle="modal" data-target="#showModal" class="show col-lg-4 col-md-6  align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon-box">
                <div class="icon"><i class="icofont-building"></i></div>
                <h4><a href="#">{{ $organization->nombre }}</a></h4>
                <p>Web: {{ $organization->web }}</p>
                @if(isset($organization->facebook))
                  <p>facebook: {{ $organization->facebook }}</p>
                @endif
                @if(isset($organization->instagram))
                  <p>instagram: {{ $organization->instagram }}</p>
                @endif
                @if(isset($organization->twitter))
                  <p>twitter: {{ $organization->twitter }}</p>
                @endif
                @if(isset($organization->youtube))
                  <p>youtube: {{ $organization->youtube }}</p>
                @endif
                
                </div>
            </div>
            @endforeach
            

        </div>

      </div>
    </section><!-- End Services Section -->

  
  </main><!-- End #main -->
<!-- Delete Warning Modal -->
<div class="modal modal-danger fade " id="showModal" tabindex="-1" role="dialog" aria-labelledby="Delete" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Organizaci??n</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <div class="form-group row">
                  <label for="nombre" class="col-sm-2 col-form-label text-md-right">Nombre:</label>
                  <div class="col-sm-10">
                      <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" required autocomplete="nombre">
                  </div>
              </div>
               <div class="form-group row">
                  <label for="siglas" class="col-sm-2 col-form-label text-md-right">Siglas:</label>
                  <div class="col-sm-3">
                      <input id="siglas" type="text" class="form-control @error('siglas') is-invalid @enderror" name="siglas" required autocomplete="siglas">
                  </div>
                   <label for="ano" class="col-sm-3 col-form-label text-md-right">A??o de Creaci??n:</label>
                  <div class="col-sm-3">
                      <input id="ano" type="text" class="form-control @error('ano') is-invalid @enderror" name="ano" required autocomplete="ano">
                  </div>
              </div>
               <div class="form-group row">
                  <label for="direccion" class="col-sm-2 col-form-label text-md-right">Direcci??n:</label>
                  <div class="col-sm-10">
                      <input id="direccion" type="text" class="form-control @error('direccion') is-invalid @enderror" name="direccion" required autocomplete="direccion">
                  </div>
              </div>
               <div class="form-group row">
                  <label for="telefonos" class="col-sm-2 col-form-label text-md-right">Tel??fonos:</label>
                  <div class="col-sm-10">
                      <input id="telefonos" type="text" class="form-control @error('telefonos') is-invalid @enderror" name="telefonos" required autocomplete="telefonos">
                  </div>
              </div>
               <div class="form-group row">
                  <label for="mision" class="col-sm-2 col-form-label text-md-right">Misi??n:</label>
                  <div class="col-sm-10">
                      <input id="mision" type="text" class="form-control @error('mision') is-invalid @enderror" name="mision" required autocomplete="mision">
                  </div>
              </div>
               <div class="form-group row">
                  <label for="vision" class="col-sm-2 col-form-label text-md-right">Visi??n:</label>
                  <div class="col-sm-10">
                      <input id="vision" type="text" class="form-control @error('vision') is-invalid @enderror" name="vision" required autocomplete="vision">
                  </div>
              </div>
               <div class="form-group row">
                  <label for="pagina_web" class="col-sm-2 col-form-label text-md-right">P??gina Web:</label>
                  <div class="col-sm-10">
                      <input id="pagina_web" type="text" class="form-control @error('pagina_web') is-invalid @enderror" name="pagina_web" required autocomplete="pagina_web">
                  </div>
              </div>
               <div class="form-group row">
                  <label for="nombre_persona" class="col-sm-2 col-form-label text-md-right">Nombre Contacto:</label>
                  <div class="col-sm-4">
                      <input id="nombre_persona" type="text" class="form-control @error('nombre_persona') is-invalid @enderror" name="nombre_persona" required autocomplete="nombre_persona">
                  </div>
                  <label for="telefono_persona" class="col-sm-2 col-form-label text-md-right">Tel??fono Contacto:</label>
                  <div class="col-sm-4">
                      <input id="telefono_persona" type="text" class="form-control @error('telefono_persona') is-invalid @enderror" name="telefono_persona" required autocomplete="telefono_persona">
                  </div>
              </div>
              <div class="form-group row">
                  <label for="email_persona" class="col-sm-2 col-form-label text-md-right">Correo Electr??nico:</label>
                  <div class="col-sm-4">
                      <input id="email_persona" type="text" class="form-control @error('email_persona') is-invalid @enderror" name="email_persona" required autocomplete="email_persona">
                  </div>
                   <label for="twitter" class="col-sm-2 col-form-label text-md-right">Twitter:</label>
                  <div class="col-sm-4">
                      <input id="twitter" type="text" class="form-control @error('twitter') is-invalid @enderror" name="twitter" required autocomplete="twitter">
                  </div>
              </div>
               <div class="form-group row">
                  <label for="facebook" class="col-sm-2 col-form-label text-md-right">Facebook:</label>
                  <div class="col-sm-4">
                      <input id="facebook" type="text" class="form-control @error('facebook') is-invalid @enderror" name="facebook" required autocomplete="facebook">
                  </div>
                   <label for="instagram" class="col-sm-2 col-form-label text-md-right">Instagram:</label>
                  <div class="col-sm-4">
                      <input id="instagram" type="text" class="form-control @error('instagram') is-invalid @enderror" name="instagram" required autocomplete="instagram">
                  </div>
              </div>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-primary">Actualizar</button>
          </div>
         
      </div>
  </div>
</div>
  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>BizLand<span>.</span></h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>BizLand</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/counterup/counterup.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/venobox/venobox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

<script>
   

    function show(nombre,siglas,ano,direccion,telefonos,mision,vision,pagina_web,nombre_persona,telefono_persona
    ,email_persona,twitter,facebook,instagram){
      
       $('#nombre').val(nombre);
       $('#siglas').val(siglas);
       $('#ano').val(ano);
       $('#direccion').val(direccion);
       $('#telefonos').val(telefonos);
       $('#mision').val(mision);
       $('#vision').val(vision);
       $('#pagina_web').val(pagina_web);
       $('#nombre_persona').val(nombre_persona);
       $('#telefono_persona').val(telefono_persona);
       $('#email_persona').val(email_persona);
       $('#twitter').val(twitter);
       $('#facebook').val(facebook);
       $('#instagram').val(instagram);
    }

</script>
</body>

</html>