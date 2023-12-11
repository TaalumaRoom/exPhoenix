<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Taaluma Afrika | Admin | Client</title>
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
  <link rel="stylesheet" href="https://cdn.datatables.net/v/bs5/dt-1.11.3/datatables.min.css">

  <link href="/design/css/style.css" rel="stylesheet">
  <link href="/design/Css/form.css" rel="stylesheet">

</head>

<body id="ok">

  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="" style="font-family: Monotype Corsiva;"><img src="/design/images/logo/le_logo.png"><span></span></a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="/admin/">Mon Profil</a></li>
          <li class="dropdown"><a href="#"><span>Site</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/admin/actualites">Actualit&eacute;s</a></li>
              <!--<li><a href="/admin/galerie">Galerie</a></li>-->
              <li><a href="/admin/partenaire">Partenaires</a></li>
              <li><a href="/admin/abonnes">Newsletter</a></li>
              <li><a href="/admin/temoignage">Témoignage</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Gerer</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/admin/personnel">Personnel</a></li>
              <li><a href="/admin/client">Clients</a></li>
              <li><a href="/admin/archive">Archives</a></li>
              <li><a href="/admin/offre">Offres</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Projets</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/admin/affectation">Affectations</a></li>
              <li><a href="/admin/projet">Projet en cours</a></li>
              <li><a href="/admin/reception">Taches Affect&eacute;es</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="/admin/contact">Contact</a></li>
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

  <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Nos clients</h2>
          <br>
        </div>

          <div class="card">
              <div class="card-header" style="background: rgb(128, 128, 128);">
                <div class="container">
                  <div class="row">
                    <div class="col-md-6"></div>
                  </div>
                </div>
                <h6 class="card-title" style="color: white; font-family: Gill sans MT; text-transform: uppercase;">
                  Liste des clients
                  <div style="float: right;">
                    <a href="" style="text-transform: capitalize;" class="get-started-btn scrollto" data-bs-toggle="modal" data-bs-target="#myClient"><i class="bi bi-person-plus"></i> Nouveau Client</a>
                  </div>
                </h6>

              </div>

              
              <div class="table-responsive" id="orderTable">
                <div class="card-body" id="voirclients">
                  <h3 style="font-family: Gill sans Mt; text-align: center;">Chargement en cours ...</h3>
                </div>  
              </div>
          </div>

        </div>

      </div>
    </section>

    <div class="modal" id="myClient">
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header">
            <h4 class="modal-title" style="font-family: Gill sans Mt; text-transform: uppercase;">Ajouter un client</h4>
            <button type="button" style="color: #e03a3c; font-weight: bold;" class="btn-close" data-bs-dismiss="modal"></button>
          </div>

          <div class="modal-body">
              <div class="container" data-aos="fade-up">

                <div class="row" data-aos="fade-up" data-aos-delay="100">

                  <div class="col-lg-12">
                    <form action="#" method="post" role="form" id="NewClient" class="php-email-form" enctype="multipart/form-data" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <input type="text" class="form-control" id="NomClient" name="NomClient"  placeholder="Entrer le nom du client" required>
                        </div>

                        <div class="form-group">
                          <input type="tel" class="form-control" id="PhoneClient" name="PhoneClient"  placeholder="Entrer le numero t&eacute;l&eacute;phone du client" required>
                        </div>

                        <div class="form-group">
                          <input type="email" class="form-control" id="EmailClient" name="EmailClient"  placeholder="Entrer l'adresse email du client" required>
                        </div>

                        <div class="form-group">
                          <select class="form-control" name="Categorie">
                            <option value="">Entrer la categorie du client</option>
                            <option value="Eglise">Eglise</option>
                            <option value="Ecole">Ecole</option>
                            <option value="Restaurant">Restaurant</option>
                            <option value="Hotel">Hotel</option>
                            <option value="Location immobilière">Location immobilière</option>
                            <option value="Agence commerciale">Agence Commerciale</option>

                          </select>
                        </div>

                        <div class="form-group">
                          <input type="text" class="form-control" id="SiteInternet" name="SiteInternet"  placeholder="Entrer le site internet du client" required>
                        </div>

                        <div class="form-group">
                          <label style="font-family: Gill sans Mt; font-size: 15px;">Upload la photo du client</label>
                          <input type="file" id="PhotoClient" class="form-control" name="PhotoClient" required>
                        </div>
                      
                      <div class="text-center"><button type="submit" name="Client" id="Client"><i class="bi bi-person-plus"></i> Ajouter</button>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script src="/design/js/main.js"></script>
  <script src="/design/js/Main/main.js"></script>

  <script src="https://cdn.datatables.net/v/bs5/dt-1.11.3/datatables.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

 

  <script>
    $(function() {
      $('table').DataTable();
    })
  </script>

  <script>
    fetchAllClient();

    function fetchAllClient(){
      $.ajax({
        url: '{{ route('voirclient') }}',
        method: 'get',
        success: function(res){
          $("#voirclients").html(res);
          $('table').DataTable();
        }
      });
    }

    $("#NewClient").submit(function(e){
      e.preventDefault();
      const fd = new FormData(this);
      $("#Client").text('En cours d\'ajout');
      $.ajax({
        url: '{{ route('addclient') }}',
        method: 'post',
        data: fd,
        cache: false,
        processData: false,
        contentType: false,
        success:function(res){
          if (res.status == 200) {
            Swal.fire(
              'Taaluma Afrika',
              'Nouveau Client Ajouté !', 
              'success'
            )
            fetchAllClient();
          }
          $("#Client").text('Client Ajouté !');
          $("#NewClient")[0].reset();
          $("#myClient").modal('hide');
        }
      });
    })

    $(document).on('click', '.disable', function(e){
      e.preventDefault();
      let id = $(this).attr('id');
      Swal.fire({
        title: 'Taaluma Afrika',
        text: "Voulez-vous désactiver le compte de cet utilisateur ?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#31A5DF',
        cancelButtonColor: 'rgb(237, 22, 33)',
        confirmButtonText: 'Biensur'
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: '{{ route('desactiveclient') }}',
            method: 'post',
            data: {
              id: id,
              _token: '{{ csrf_token() }}' 
            },
            success: function(res){
              Swal.fire(
                'Taaluma Afrika',
                'Compte Client Désactivé !', 
                'success'
              )
              fetchAllClient();
            }
          });
        }
      });
    });

    $(document).on('click', '.enable', function(e){
      e.preventDefault();
      let id = $(this).attr('id');
      Swal.fire({
        title: 'Taaluma Afrika',
        text: "Voulez-vous activer le compte de cet utilisateur ?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#31A5DF',
        cancelButtonColor: 'rgb(237, 22, 33)',
        confirmButtonText: 'Biensur'
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: '{{ route('activeclient') }}',
            method: 'post',
            data: {
              id: id,
              _token: '{{ csrf_token() }}' 
            },
            success: function(res){
              Swal.fire(
                'Taaluma Afrika',
                'Compte Client Activé !', 
                'success'
              )
              fetchAllClient();
            }
          });
        }
      });
    });

    $(document).on('click', '.delete', function(e){
      e.preventDefault();
      let id = $(this).attr('id');
      Swal.fire({
        title: 'Taaluma Afrika',
        text: "Etes-vous sur de supprimer le compte de cet utilisateur ?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#31A5DF',
        cancelButtonColor: 'rgb(237, 22, 33)',
        confirmButtonText: 'Biensur'
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: '{{ route('deleteclient') }}',
            method: 'post',
            data: {
              id: id,
              _token: '{{ csrf_token() }}' 
            },
            success: function(res){
              Swal.fire(
                'Taaluma Afrika',
                'Compte supprimé !', 
                'success'
              )
              fetchAllClient();
            }
          });
        }
      });
    });
  </script>

</body>

</html>
