<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Watch shop | eCommers</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="/design/assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="/design/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/design/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/design/assets/css/flaticon.css">
    <link rel="stylesheet" href="/design/assets/css/slicknav.css">
    <link rel="stylesheet" href="/design/assets/css/animate.min.css">
    <link rel="stylesheet" href="/design/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="/design/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="/design/assets/css/themify-icons.css">
    <link rel="stylesheet" href="/design/assets/css/slick.css">
    <link rel="stylesheet" href="/design/assets/css/nice-select.css">
    <link rel="stylesheet" href="/design/assets/css/style.css">
    <link href="design/assets/css/form.css" rel="stylesheet">

     <link rel="stylesheet" href="https://cdn.datatables.net/v/bs5/dt-1.11.3/datatables.min.css">



    <!-- <link rel="stylesheet" href="taaluma/MDB5-STANDARD-UI-KIT-Free-6.4.1/css/mdb.min.css" /> -->

    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  />
  <!-- Google Fonts Roboto -->
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
  />
</head>

<body>
    <!--? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="/design/assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="menu-wrapper">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.html"><img src="/design/assets/img/logo/logo.png" alt=""></a>
                        </div>
                        <!-- Main-menu -->
                        <div class="main-menu d-none d-lg-block">
                            <nav>                                                
                                <ul id="navigation">  
                                    <li><a href="/admin/">Mon Profil</a></li>
                                    <li><a href="/admin/produits">Nos Produits</a></li>
                                    <li><a href="/admin/offres">Nos Offres</a></li>
                                    <li><a href="/admin/categorie">Categorie</a></li>

                                </ul>
                            </nav>
                        </div>

                        <div class="header-right">
                            <ul>
                                
                                <li><img src=""></li>
                                <li><a href="">{{ $userInfo->NomUser }}</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>

    <main>
        <!-- Hero Area Start-->
        <div class="slider-area ">
            <div class="single-slider slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Créer des categories d'articles</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Area End-->
        <!-- Latest Products Start -->
        <section class="popular-items latest-padding">
            <div class="container">
                
                <div class="tab-content" id="nav-tabContent">
                    <!-- card one -->
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="row">
                            
                            <div class="col-xl-1 col-lg-1 col-md-12 col-sm-12"></div>

                            <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12">

                                <a href="#" class="genric-btn primary" style="text-align: left;" data-toggle="modal" data-target="#categories">Ajouter une categorie</a><br>
                                
                                <br><table id="example1" class="table table-bordered table-striped" style="text-align: center; font-family: Gill sans Mt;">
                                    <thead>
                                        <tr>
                                            <th>Nom de la catégorie</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>

                                                <a href="#" class="delete"><button style="background: rgb(29, 163, 64); border-radius: 5px; color: white; width: 30px; border: 2px white solid; text-align: center;"><span class="fa fa-pencil"></span></button></a>

                                                <a href="#" class="delete"><button style="background: rgb(237, 22, 33); border-radius: 5px; color: white; width: 30px; border: 2px white solid; text-align: center;"><span class="fa fa-trash"></span></button></a>

                                            </td>
                                        </tr>
                                        
<tr>
                                            <td>Tiger Nixon</td>
                                            <td>

                                                <a href="#" class="delete"><button style="background: rgb(29, 163, 64); border-radius: 5px; color: white; width: 30px; border: 2px white solid; text-align: center;"><span class="fa fa-pencil"></span></button></a>

                                                <a href="#" class="delete"><button style="background: rgb(237, 22, 33); border-radius: 5px; color: white; width: 30px; border: 2px white solid; text-align: center;"><span class="fa fa-trash"></span></button></a>

                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>

                                                <a href="#" class="delete"><button style="background: rgb(29, 163, 64); border-radius: 5px; color: white; width: 30px; border: 2px white solid; text-align: center;"><span class="fa fa-pencil"></span></button></a>

                                                <a href="#" class="delete"><button style="background: rgb(237, 22, 33); border-radius: 5px; color: white; width: 30px; border: 2px white solid; text-align: center;"><span class="fa fa-trash"></span></button></a>

                                            </td>
                                        </tr>

                                    </tbody>

                                </table>

                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- End Nav Card -->
            </div>
        </section>
        <!-- Latest Products End -->
      
    </main>
    
    <footer>
        <!-- Footer Start-->
        <div class="footer-area footer-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="single-footer-caption mb-30">
                                <!-- logo -->
                                <div class="footer-logo">
                                    <a href="index.html"><img src="/design/assets/img/logo/logo2_footer.png" alt=""></a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p>Asorem ipsum adipolor sdit amet, consectetur adipisicing elitcf sed do eiusmod tem.</p>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Lien Rapides</h4>
                                <ul>
                                    <li><a href="about.html">A propos </a></li>
                                    <li><a href="shop.html"> Shop</a></li>
                                    <li><a href="#"> Get Coupon</a></li>
                                    <li><a href="#">  Contactez nous </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Nouveaux Produits </h4>
                                <ul>
                                    <li><a href="#">Woman Cloth</a></li>
                                    <li><a href="#">Fashion Accessories</a></li>
                                    <li><a href="#"> Man Accessories</a></li>
                                    <li><a href="#"> Rubber made Toys</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7">
                        <div class="single-footer-caption mb-50">
                            
                        </div>
                    </div>
                </div>
                <!-- Footer bottom -->
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-8 col-md-7">
                        <div class="footer-copy-right">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with  by <a href="https://colorlib.com" target="_blank">Taaluma Africa</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>                  
                                    </div>
                                </div>
                                <div class="col-xl-5 col-lg-4 col-md-5">
                                    <div class="footer-copy-right f-right">
                                        <!-- social -->
                                        <div class="footer-social">
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="https://www.facebook.com/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-behance"></i></a>
                                            <a href="#"><i class="fas fa-globe"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Footer End-->
    </footer>


    <div class="modal" id="categories">
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header">
            <h4 class="modal-title" style="font-family: Gill sans Mt; text-transform: uppercase;">Ajouter une categorie</h4>
    
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>

          </div>

          <div class="modal-body">
              <div class="container" data-aos="fade-up">

                <div class="row" data-aos="fade-up" data-aos-delay="100">

                  <div class="col-lg-12">
                    <form action="#" id="formArchive" method="post" role="form" class="php-email-form" enctype="multipart/form-data">

                        @csrf

                        <div class="row">                                    

                            <div class="col-lg-12">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="Intitule" placeholder="Categorie du Produit" style="box-shadow: none; font-size: 13px; border-radius: 4px; font-family: Gill sans Mt;">
                                </div>
                            </div>
                        
                      
                            <div class="text-center" style="text-align: center;"> 
                                <a href="#" class="genric-btn info-border circle" style="text-align: center;">Ajouter la categorie</a>
                            </div>
                    </form>
                  </div>

                </div>

              </div>
          </div>


    <!--? Search model Begin -->
    <div class="search-model-box">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-btn">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Searching key.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- JS here -->

    <script src="/design/assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="/design/assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="/design/assets/js/popper.min.js"></script>
    <script src="/design/assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="design/assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="/design/assets/js/owl.carousel.min.js"></script>
    <script src="/design/assets/js/slick.min.js"></script>

    <!-- One Page, Animated-HeadLin -->
    <script src="/design/assets/js/wow.min.js"></script>
    <script src="/design/assets/js/animated.headline.js"></script>
    <script src="/design/assets/js/jquery.magnific-popup.js"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="/design/assets/js/jquery.scrollUp.min.js"></script>
    <script src="/design/assets/js/jquery.nice-select.min.js"></script>
    <script src="/design/assets/js/jquery.sticky.js"></script>
    
    <!-- contact js -->
    <script src="/design/assets/js/contact.js"></script>
    <script src="/design/assets/js/jquery.form.js"></script>
    <script src="/design/assets/js/jquery.validate.min.js"></script>
    <script src="/design/assets/js/mail-script.js"></script>
    <script src="/design/assets/js/jquery.ajaxchimp.min.js"></script>
    
    <!-- Jquery Plugins, main Jquery -->  
    <script src="/design/assets/js/plugins.js"></script>
    <script src="/design/assets/js/main.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://cdn.datatables.net/v/bs5/dt-1.11.3/datatables.min.js"></script>

    <script>
        $(function() {
          $('table').DataTable();
        })
    </script>
    
</body>
</html>