<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Taaluma Afrika | Admin | Contact</title>
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

  <section style="background-color: #F2F2F2;">
  <div class="container py-5">

    <div class="row">
      <div class="col-md-12">

        <div class="section-title">
          <h2>Conversion avec le personnel</h2>
        </div>

        <div class="card" id="chat3" style="border-radius: 15px;">
          <div class="card-body">

            <div class="row">
              <div class="col-md-6 col-lg-5 col-xl-4 mb-4 mb-md-0">

                <div class="p-3" style="overflow: auto;">

                  <div class="input-group rounded mb-3">
                    <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                      aria-describedby="search-addon" />
                    <span class="input-group-text border-0" id="search-addon">
                      <i class="bi bi-search"></i>
                    </span>
                  </div>

                  <div data-mdb-perfect-scrollbar="true" style="position: relative; height: 400px">
                    <ul class="list-unstyled mb-0" id="Personnel">
                      
                    </ul>
                  </div>

                </div>

              </div>

              <div class="col-md-6 col-lg-7 col-xl-8">

                <div class="pt-3 pe-3" data-mdb-perfect-scrollbar="true"
                  style="position: relative; height: 400px; overflow: auto;">

                  <div class="d-flex flex-row justify-content-start">
                    <img src="/design/images/team/team-2.jpg"
                      alt="avatar 1" style="width: 45px; height: 100%; border-radius: 50%;">
                    <div>
                      <p class="small p-2 ms-3 mb-1 rounded-3" style="background-color: #f5f6f7; font-family: Yu Gothic; text-align: justify">Lorem ipsum
                        dolor
                        sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore
                        magna aliqua.</p>
                      <p class="small ms-3 mb-3 rounded-3 text-muted float-end" style="font-family: Yu Gothic; text-align: justify">12:00 PM | Aug 13</p>
                    </div>
                  </div>

                  <div class="d-flex flex-row justify-content-end">
                    <div>
                      <p class="small p-2 me-3 mb-1 text-white rounded-3" style="background-color: #31A5DF; font-family: Yu Gothic; text-align: justify">Ut enim ad minim veniam,
                        quis
                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                      <p class="small me-3 mb-3 rounded-3 text-muted" style="font-family: Yu Gothic; text-align: justify">12:00 PM | Aug 13</p>
                    </div>
                    <img src="/design/images/team/team-4.jpg"
                      alt="avatar 1" style="width: 45px; height: 100%; border-radius: 50%;">
                  </div>

                  <div class="d-flex flex-row justify-content-start">
                    <img src="/design/images/team/team-2.jpg"
                      alt="avatar 1" style="width: 45px; height: 100%; border-radius: 50%;">
                    <div>
                      <p class="small p-2 ms-3 mb-1 rounded-3" style="background-color: #f5f6f7; font-family: Yu Gothic; text-align: justify">Duis aute
                        irure
                        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                      </p>
                      <p class="small ms-3 mb-3 rounded-3 text-muted float-end" style="font-family: Yu Gothic; text-align: justify">12:00 PM | Aug 13</p>
                    </div>
                  </div>

                  <div class="d-flex flex-row justify-content-end">
                    <div>
                      <p class="small p-2 me-3 mb-1 text-white rounded-3" style="background-color: #31A5DF; font-family: Yu Gothic; text-align: justify">Excepteur sint occaecat
                        cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                      <p class="small me-3 mb-3 rounded-3 text-muted" style="font-family: Yu Gothic; text-align: justify">12:00 PM | Aug 13</p>
                    </div>
                    <img src="/design/images/team/team-4.jpg"
                      alt="avatar 1" style="width: 45px; height: 100%; border-radius: 50%;">
                  </div>

                  <div class="d-flex flex-row justify-content-start">
                    <img src="/design/images/team/team-2.jpg"
                      alt="avatar 1" style="width: 45px; height: 100%; border-radius: 50%;">
                    <div>
                      <p class="small p-2 ms-3 mb-1 rounded-3" style="background-color: #f5f6f7; font-family: Yu Gothic; text-align: justify">Sed ut
                        perspiciatis
                        unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
                        rem
                        aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                        dicta
                        sunt explicabo.</p>
                      <p class="small ms-3 mb-3 rounded-3 text-muted float-end" style="font-family: Yu Gothic; text-align: justify">12:00 PM | Aug 13</p>
                    </div>
                  </div>

                  <div class="d-flex flex-row justify-content-end">
                    <div>
                      <p class="small p-2 me-3 mb-1 text-white rounded-3" style="background-color: #31A5DF; font-family: Yu Gothic; text-align: justify">Nemo enim ipsam
                        voluptatem quia
                        voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos
                        qui
                        ratione voluptatem sequi nesciunt.</p>
                      <p class="small me-3 mb-3 rounded-3 text-muted">12:00 PM | Aug 13</p>
                    </div>
                    <img src="/design/images/team/team-4.jpg"
                      alt="avatar 1" style="width: 45px; height: 100%; border-radius: 50%;">
                  </div>

                  <div class="d-flex flex-row justify-content-start">
                    <img src="/design/images/team/team-2.jpg"
                      alt="avatar 1" style="width: 45px; height: 100%; border-radius: 50%;">
                    <div>
                      <p class="small p-2 ms-3 mb-1 rounded-3" style="background-color: #f5f6f7; font-family: Yu Gothic; text-align: justify">Neque porro
                        quisquam
                        est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non
                        numquam
                        eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                      <p class="small ms-3 mb-3 rounded-3 text-muted float-end" style="font-family: Yu Gothic; text-align: justify">12:00 PM | Aug 13</p>
                    </div>
                  </div>

                  <div class="d-flex flex-row justify-content-end">
                    <div>
                      <p class="small p-2 me-3 mb-1 text-white rounded-3" style="background-color: #31A5DF; font-family: Yu Gothic; text-align: justify;">Ut enim ad minima veniam,
                        quis
                        nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea
                        commodi
                        consequatur?</p>
                      <p class="small me-3 mb-3 rounded-3 text-muted" style="font-family: Yu Gothic; text-align: justify">12:00 PM | Aug 13</p>
                    </div>
                    <img src="/design/images/team/team-4.jpg"
                      alt="avatar 1" style="width: 45px; height: 100%; border-radius: 50%;">
                  </div>

                </div>

                <div class="text-muted d-flex justify-content-start align-items-center pe-3 pt-3 mt-2">
                  <img src="/design/images/team/team-2.jpg"
                    alt="avatar 3" style="width: 40px; border-radius: 50%; height: 100%;">
                  <input type="text" class="form-control form-control-lg" id="exampleFormControlInput2"
                    placeholder="Type message" style="font-family: Gill sans Mt; border-radius: 10px; box-shadow: none; font-size: 20px; border-radius: 6px;">
                  <a class="ms-1 text-muted" href="#!"><i class="bi bi-paperclip"></i></a>
                  <a class="ms-3 text-muted" href="#!"><i class="bi bi-emoji-smile"></i></a>
                  <a class="ms-3" href="#!"><i class="bi bi-send"></i></a>
                </div>

              </div>

              </div>
            </div>

          </div>
        </div>

      </div>
    </div>

  </div>
</section>
<section style="background-color: #F2F2F2;">
  <div class="container py-5">

    <div class="row">
      <div class="col-md-12">

        <div class="section-title">
          <h2>Conversion avec les clients</h2>
        </div>

        <div class="card" id="chat3" style="border-radius: 15px;">
          <div class="card-body">

            <div class="row">
              <div class="col-md-6 col-lg-5 col-xl-4 mb-4 mb-md-0">

                <div class="p-3" style="overflow: auto;">

                  <div class="input-group rounded mb-3">
                    <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                      aria-describedby="search-addon" />
                    <span class="input-group-text border-0" id="search-addon">
                      <i class="bi bi-search"></i>
                    </span>
                  </div>

                  <div data-mdb-perfect-scrollbar="true" style="position: relative; height: 400px">
                    <ul class="list-unstyled mb-0" id="Client">
                      
                    </ul>
                  </div>

                </div>

              </div>

              <div class="col-md-6 col-lg-7 col-xl-8">

                <div class="pt-3 pe-3" data-mdb-perfect-scrollbar="true"
                  style="position: relative; height: 400px; overflow: auto;">

                  <div class="d-flex flex-row justify-content-start">
                    <img src="/design/images/team/team-2.jpg"
                      alt="avatar 1" style="width: 45px; height: 100%; border-radius: 50%;">
                    <div>
                      <p class="small p-2 ms-3 mb-1 rounded-3" style="background-color: #f5f6f7; font-family: Yu Gothic; text-align: justify">Lorem ipsum
                        dolor
                        sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore
                        magna aliqua.</p>
                      <p class="small ms-3 mb-3 rounded-3 text-muted float-end" style="font-family: Yu Gothic; text-align: justify">12:00 PM | Aug 13</p>
                    </div>
                  </div>

                  <div class="d-flex flex-row justify-content-end">
                    <div>
                      <p class="small p-2 me-3 mb-1 text-white rounded-3" style="background-color: #31A5DF; font-family: Yu Gothic; text-align: justify">Ut enim ad minim veniam,
                        quis
                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                      <p class="small me-3 mb-3 rounded-3 text-muted" style="font-family: Yu Gothic; text-align: justify">12:00 PM | Aug 13</p>
                    </div>
                    <img src="/design/images/team/team-4.jpg"
                      alt="avatar 1" style="width: 45px; height: 100%; border-radius: 50%;">
                  </div>

                  <div class="d-flex flex-row justify-content-start">
                    <img src="/design/images/team/team-2.jpg"
                      alt="avatar 1" style="width: 45px; height: 100%; border-radius: 50%;">
                    <div>
                      <p class="small p-2 ms-3 mb-1 rounded-3" style="background-color: #f5f6f7; font-family: Yu Gothic; text-align: justify">Duis aute
                        irure
                        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                      </p>
                      <p class="small ms-3 mb-3 rounded-3 text-muted float-end" style="font-family: Yu Gothic; text-align: justify">12:00 PM | Aug 13</p>
                    </div>
                  </div>

                  <div class="d-flex flex-row justify-content-end">
                    <div>
                      <p class="small p-2 me-3 mb-1 text-white rounded-3" style="background-color: #31A5DF; font-family: Yu Gothic; text-align: justify">Excepteur sint occaecat
                        cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                      <p class="small me-3 mb-3 rounded-3 text-muted" style="font-family: Yu Gothic; text-align: justify">12:00 PM | Aug 13</p>
                    </div>
                    <img src="/design/images/team/team-4.jpg"
                      alt="avatar 1" style="width: 45px; height: 100%; border-radius: 50%;">
                  </div>

                  <div class="d-flex flex-row justify-content-start">
                    <img src="/design/images/team/team-2.jpg"
                      alt="avatar 1" style="width: 45px; height: 100%; border-radius: 50%;">
                    <div>
                      <p class="small p-2 ms-3 mb-1 rounded-3" style="background-color: #f5f6f7; font-family: Yu Gothic; text-align: justify">Sed ut
                        perspiciatis
                        unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
                        rem
                        aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                        dicta
                        sunt explicabo.</p>
                      <p class="small ms-3 mb-3 rounded-3 text-muted float-end" style="font-family: Yu Gothic; text-align: justify">12:00 PM | Aug 13</p>
                    </div>
                  </div>

                  <div class="d-flex flex-row justify-content-end">
                    <div>
                      <p class="small p-2 me-3 mb-1 text-white rounded-3" style="background-color: #31A5DF; font-family: Yu Gothic; text-align: justify">Nemo enim ipsam
                        voluptatem quia
                        voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos
                        qui
                        ratione voluptatem sequi nesciunt.</p>
                      <p class="small me-3 mb-3 rounded-3 text-muted">12:00 PM | Aug 13</p>
                    </div>
                    <img src="/design/images/team/team-4.jpg"
                      alt="avatar 1" style="width: 45px; height: 100%; border-radius: 50%;">
                  </div>

                  <div class="d-flex flex-row justify-content-start">
                    <img src="/design/images/team/team-2.jpg"
                      alt="avatar 1" style="width: 45px; height: 100%; border-radius: 50%;">
                    <div>
                      <p class="small p-2 ms-3 mb-1 rounded-3" style="background-color: #f5f6f7; font-family: Yu Gothic; text-align: justify">Neque porro
                        quisquam
                        est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non
                        numquam
                        eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                      <p class="small ms-3 mb-3 rounded-3 text-muted float-end" style="font-family: Yu Gothic; text-align: justify">12:00 PM | Aug 13</p>
                    </div>
                  </div>

                  <div class="d-flex flex-row justify-content-end">
                    <div>
                      <p class="small p-2 me-3 mb-1 text-white rounded-3" style="background-color: #31A5DF; font-family: Yu Gothic; text-align: justify;">Ut enim ad minima veniam,
                        quis
                        nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea
                        commodi
                        consequatur?</p>
                      <p class="small me-3 mb-3 rounded-3 text-muted" style="font-family: Yu Gothic; text-align: justify">12:00 PM | Aug 13</p>
                    </div>
                    <img src="/design/images/team/team-4.jpg"
                      alt="avatar 1" style="width: 45px; height: 100%; border-radius: 50%;">
                  </div>

                </div>

                <div class="text-muted d-flex justify-content-start align-items-center pe-3 pt-3 mt-2">
                  <img src="/design/images/team/team-2.jpg"
                    alt="avatar 3" style="width: 40px; border-radius: 50%; height: 100%;">
                  <input type="text" class="form-control form-control-lg" id="exampleFormControlInput2"
                    placeholder="Type message" style="font-family: Gill sans Mt; border-radius: 10px; box-shadow: none; font-size: 20px; border-radius: 6px;">
                  <a class="ms-1 text-muted" href="#!"><i class="bi bi-paperclip"></i></a>
                  <a class="ms-3 text-muted" href="#!"><i class="bi bi-emoji-smile"></i></a>
                  <a class="ms-3" href="#!"><i class="bi bi-send"></i></a>
                </div>

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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.datatables.net/v/bs5/dt-1.11.3/datatables.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script>
    fetchPersonnel();

    function fetchPersonnel(){
      $.ajax({
        url: '{{ route('affpersonnechat') }}',
        method: 'get',
        success: function(res){
          $("#Personnel").html(res);
        }
      });
    }

    fetchClient();

    function fetchClient(){
      $.ajax({
        url: '{{ route('affclientchat') }}',
        method: 'get',
        success: function(res){
          $("#Client").html(res);
        }
      });
    }
  </script>

</body>

</html>
