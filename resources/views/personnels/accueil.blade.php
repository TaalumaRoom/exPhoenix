<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Taaluma Afrika | Personnel | Profil</title>
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
  <link href="/design/Css/form.css" rel="stylesheet">

</head>

<body id="ok">

  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="" style="font-family: Monotype Corsiva;"><img src="/design/images/logo/le_logo.png"><span></span></a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="/personnel/">Mon Profil</a></li>
          @if ($profile->Grade == "Manager" or $profile->Grade == "Surintendant")
          <li><a class="nav-link scrollto" href="/personnel/equipe">Mon Equipe</a></li>
          @endif
          <li><a class="nav-link scrollto" href="/personnel/affectation">Mes Taches</a></li>
          <li><a class="nav-link scrollto" href="/personnel/contact">Contactez-nous</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

      <a href="{{ route('login_user') }}" class="get-started-btn scrollto">Deconnexion</a>

    </div>
  </header>

  <section class="breadcrumbs">
      <div class="container">

        <ol style="font-family: Gill sans Mt; font-size: 18px">
          <li><a href="/admin/">{{ $userInfo->NomUser }}</a></li>
          <li>{{ $userInfo->MatriculeUser }}</li>
          <li>
            <a href="/storage/users/{{ $userInfo->PhotoUser }}" data-gallery="portfolioGallery" class="portfolio-lightbox"><img src="/storage/users/{{ $userInfo->PhotoUser }}" style="border: 2px white solid; border-radius: 50%;" height="35" width="35" /></i></a>
          </li>
        </ol>
      </div>
  </section>

   <section id="counts" class="counts">

    <div class="container">
      <div class="row gutters">
      <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
      <div class="card h-100">
        <div class="card-body">
          <div class="account-settings">
            <div class="user-profile">
              <div class="user-avatar">
                <img src="/storage/users/{{ $userInfo->PhotoUser }}" alt="Maxwell Admin">
              </div>
              <h5 class="user-name">{{ $userInfo->NomUser }}</h5>
              <h6 class="user-email" id="code" style="font-size: 18px;">{{ $userInfo->MatriculeUser }}</h6>
              <h6 class="user-email" style="font-size: 17px; text-transform: lowercase;">{{ $userInfo->EmailUser }}</h6>
              <h6 class="user-email" style="font-size: 0px;">{{ $userInfo->id }}</h6>
            </div>
            <div class="about">
              <h5>A Propos</h5>
              <p><span style="font-weight: bold;">{{ $userInfo->RoleUser }}</span> de Taaluma Afrika, au poste : <span style="font-weight: bold;">{{ $userInfo->GradeUser }}</span>.</p>
            </div>
          </div>
        </div>
      </div>
      </div>
      <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">

      <div class="card h-100">
        <div class="card-body">
          <div class="section-title">
          <h2>Modifier mes informations</h2>
        </div>
          <div class="row gutters">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <h6 class="mb-2 text-primary">Details personnels</h6>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
              <div class="form-group">
                <input type="text" class="form-control" id="Name" name="Name" value="{{ $profile->Nom }}">
              </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
              <div class="form-group">
                <input type="text" class="form-control" id="FullName" name="FullName" value="{{ $profile->Postnom }}">
              </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
              <div class="form-group">
                <input type="text" class="form-control" id="LastName" name="LastName" value="{{ $profile->Prenom }}">
              </div>
            </div>

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="form-group">
                <input type="text" class="form-control"  id="Matricule" name="Matricule" value="{{ $profile->Matricule }}" hidden>
              </div>
            </div>


            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="form-group">
                <label style="font-family: Gill sans Mt; font-size: 15px;"><br>Uploadez la photo (si vous voulez la modifier)</label>
                <input type="file" class="form-control" id="Picture" name="Picture">
              </div>
            </div>
          </div><br><br>

          <div class="row gutters">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <h6 class="mt-3 mb-2 text-primary">Mes coordonnés</h6>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
              <div class="form-group">
                <input type="tel" class="form-control" id="Phone" name="Phone" value="{{ $profile->Phone }}">
              </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
              <div class="form-group">
                <input type="email" class="form-control" id="Email" style="text-transform: lowercase;" name="Email" value="{{ $profile->Email }}">
              </div>
            </div>

          </div>
          <div class="row gutters">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <br><br>
              <div class="text-right" style="text-align: center;">
                <a href="" id="Modify" class="get-started-btn scrollto">Modifier</a>
              </div>
            </div>
          </div>
        </div>
      </div>
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
            <a href="https://instagram.com/taaluma_afrika?igshid=MzNlNGNkZWQ4Mg==" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
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
