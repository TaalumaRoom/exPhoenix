<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">

      <title>exPhoenix | Partenariat</title>
      <meta content="" name="description">
      <meta content="" name="keywords">

      <link href="/design/images/favicon.png" rel="icon">
      <link href="/design/images/apple-touch-icon.png" rel="apple-touch-icon">

      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

      <link href="/design/vendor/aos/aos.css" rel="stylesheet">
      <link href="/design/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="/design/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
      <link href="/design/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
      <link href="/design/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
      <link href="/design/vendor/remixicon/remixicon.css" rel="stylesheet">
      <link href="/design/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

      <link href="/design/css/style.css" rel="stylesheet">

    </head>

    <body>

      <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">
          <h1 class="logo me-auto"><a href="/" style="font-family: Monotype Corsiva;"><img src="/design/images/logo/le_logo.png"><span></span></a></h1>

          <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
              <li><a class="nav-link scrollto" href="/">Accueil</a></li>
              <li><a class="nav-link scrollto" href="/services">Nos Services</a></li>
              <!--<li><a class="nav-link scrollto" href="/galerie">Notre Galerie</a></li>-->
              <li><a class="nav-link scrollto " href="/apropos">A Propos</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav>

        </div>
      </header>

        <section class="breadcrumbs">
      <div class="container">

        <ol style="font-family: Gill sans Mt; font-size: 18px">
          <li><a href="/">Accueil</a></li>
          <li>D&eacute;tail du partenaire</li>
        </ol>

      </div>
  </section>

  <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-2">
          
          </div>

          <div class="col-lg-8">
            <div class="portfolio-info">
              <h3 style="color: #31A5DF;">Informations du partenaire</h3>
              <p style="text-align: center;"><img id="photopartner" src="/storage/upload/partenaires/{{ $partnerInfo->Photo }}"></p> <br>
              <ul>
                <li><strong>Nom du partenaire </strong>: {{ $partnerInfo->NomPartenaire }}</li>
                <li><strong>Date de la signature </strong>: {{ (new DateTime($partnerInfo->Signature))->format('d - m - Y') }}</li>
                <li><strong>Contact </strong>: <a href="mailto:{{ $partnerInfo->Contact }}">Envoyez un mail</a></li>
                <li><strong>Site internet </strong>: <a href="{{ $partnerInfo->SiteInternet }}">Visitez le site</a></li>
                <li style="text-align: justify;"><strong>Description </strong>: {{ $partnerInfo->Description }}.</li>
              </ul>
            </div>
          </div>

          <div class="col-lg-2">
          
          </div>

        </div>

      </div>
    </section>

      <footer id="footer">
              

        <div class="container d-md-flex py-4">

          <div class="me-md-auto text-center text-md-start" style="font-family: Gill Sans MT; font-size: 17px;">
            <div class="copyright">
            Copyright &copy; <strong><span>Taaluma Afrika</span></strong>. Tous les droits sont reserv&eacute;s
            </div>
            <div class="credits">
              Conçu par <a href="">Taaluma Afrika</a>
            </div>
          </div>
          <div class="social-links text-center text-md-end pt-3 pt-md-0">
            <a href="tel:+243898694460" class="google-plus"><i class="bx bx-phone"></i></a>
            <a href="mailto:taalumaafrika@gmail.com" class="google-plus"><i class="bx bx-envelope"></i></a>
            <a href="https://twitter.com/AfrikaTaaluma?t=OVqjPs85N0IMlB4nRKc1Vw&s=09" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="https://www.linkedin.com/company/taaluma-afrika/" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            <a href="https://www.instagram.com/invites/contact/?i=171wu9gchm58r&utm_content=pfk5y7l" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="https://web.facebook.com/profile.php?id=100086201033165" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
          </div>
        </div>
      </footer>

      <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

      <script src="/design/vendor/purecounter/purecounter.js"></script>
      <script src="/design/vendor/aos/aos.js"></script>
      <script src="/design/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="/design/vendor/glightbox/js/glightbox.min.js"></script>
      <script src="/design/vendor/isotope-layout/isotope.pkgd.min.js"></script>
      <script src="/design/vendor/swiper/swiper-bundle.min.js"></script>

      <script src="/design/js/main.js"></script>
      <script src="/design/js/Main/main.js"></script>

    </body>

</html>