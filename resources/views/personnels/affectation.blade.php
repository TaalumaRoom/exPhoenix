<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Taaluma Afrika | Personnel | Affectation</title>
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

<body>

  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="" style="font-family: Monotype Corsiva;"><img src="/design/images/logo/le_logo.png"><span></span></a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="/personnel/">Mon Profil</a></li>
          @if ($profile->Grade == "Manager" or $profile->Grade == "Surintendant")
          <li><a class="nav-link scrollto" href="/personnel/equipe">Mon Equipe</a></li>
          @endif
          <li><a class="nav-link scrollto active" href="/personnel/affectation">Mes Taches</a></li>
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

   <section id="pricing" class="pricing section-bg" style="background-color: white;">
      <div class="container" data-aos="fade-up">

        <!--<div class="col-lg-12 mt-5" style="text-align: center;">
            <a href="" style="text-transform: capitalize;" class="get-started-btn scrollto" data-bs-toggle="modal" data-bs-target="#Projet"><i class="bi bi-folder-plus"></i> Proposer un Projet</a>
            <p id="result"></p>
        </div><br>-->

        <div class="section-title">
          <h2>Liste d'affectations</h2>
        </div>

        <div class="row" id="affect">

          <!--<div class="col-lg-4 col-md-6">
            <div class="box" data-aos="fade-up" data-aos-delay="100">
              <h3><i class="bi bi-list-task"> </i>Ma Tâche</h3>
              <h6 style="font-size: 13px;">Nom du projet</h6><br>
              <ul>
                <li style="text-align: justify;">Description : T&eacute;l&eacute;chargez la description de votre tâche dans ce fichier : <a href="" download="">Fichier  <i class="bi-cloud-download"> </i></a></li>
                <li style="text-align: justify;">Délai : 5 jours.</li>
              </ul>
              <div class="btn-wrap">
                <a href="/personnel/envoi" class="btn-buy">Envoyer la r&eacute;alisation</a>
              </div>
            </div>
          </div>-->

        </div>

      </div>
    </section>

    <div class="modal" id="Projet">
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header">
            <h4 class="modal-title" style="font-family: Gill sans Mt; text-transform: uppercase;">Proposer un projet</h4>
            <button type="button" style="color: #e03a3c; font-weight: bold;" class="btn-close" data-bs-dismiss="modal"></button>
          </div>

          <div class="modal-body">
              <div class="container" data-aos="fade-up">

                <div class="row" data-aos="fade-up" data-aos-delay="100">

                  <div class="col-lg-12">
                    <form id="formProjet" action="#" method="post" role="form" id="form" class="php-email-form" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <input type="text" class="form-control" id="NomProjet" name="NomProjet"  placeholder="Entrer le nom du projet" required>
                        </div>

                        <div class="form-group">
                          <input type="text" class="form-control" id="Delai" name="Delai"  placeholder="Entrer le delai d'ex&eacute;cution du projet" required>
                        </div>

                        <div class="form-group">
                          <textarea class="form-control" rows="2" name="Description" id="Description" rows="2" placeholder="Decrire le projet" required></textarea>
                        </div>

                        <div class="form-group">
                          <input type="text" class="form-control" id="Redacteur" name="Redacteur"  value="Josueta PRISCA" hidden>
                        </div>

                        <div class="form-group">
                          <input type="text" class="form-control" id="Contact" name="Contact"  value="josueta8@gmail.com" hidden>
                        </div>
                      
                      <div class="text-center">
                        <button type="submit" name="Project" id="AddProjet"><i class="bi bi-folder-plus"></i> Ajouter</button>
                      </div>
                    </form>
                  </div>

                </div>

              </div>
          </div>

        </div>
      </div>
    </div>

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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.datatables.net/v/bs5/dt-1.11.3/datatables.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script>
    fetchAllAffectation();

    function fetchAllAffectation(){
      $.ajax({
        url: '{{ route('viewaffect') }}',
        method: 'get',
        success: function(res){
          $("#affect").html(res);
        }
      });
    }
    
    $("#formProjet").submit(function(e){
      e.preventDefault();
      const fd = new FormData(this);
      $("#AddProjet").text('En cours d\'ajout...');
      $.ajax({
        url: '{{ route('project') }}',
        method: 'post',
        data: fd,
        cache: false,
        processData: false,
        contentType: false,
        success:function(res){
          if (res.status == 200) {
            Swal.fire(
              'Taaluma Afrika',
              'Projet Ajouté !', 
              'success'
              )
          }
          $("#AddProjet").text('Projet Ajouté !');
          $("#formProjet")[0].reset();
          $("#Projet").modal('hide');
        }
      });
    })
  </script>

</body>

</html>
