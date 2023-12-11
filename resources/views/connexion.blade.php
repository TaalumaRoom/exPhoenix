<!doctype html>
<html lang="zxx">
<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Phoenix | Connexion</title>
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


    <!-- <link rel="stylesheet" href="taaluma/MDB5-STANDARD-UI-KIT-Free-6.4.1/css/mdb.min.css" /> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    

<body>
    
    
    <main>
        
        <!-- Hero Area End-->
        <!--================login_part Area =================-->
        <section class="login_part section_padding ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6">
                        <div class="login_part_text text-center">
                            <div class="login_part_text_iner">
                                <h2>Si vous n'avez pas de compte</h2>
                                <a href="/registration" class="btn_3">Créez  un compte
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="login_part_form">
                            <div class="login_part_form_iner">
                                <h4>Bienvenue ! <br>
                                    Veuillez vous connecter pour passer vos commandes</h4>

                                <form class="row contact_form" action="#" method="post" id="LoginUs">

                                    <div class="col-md-12 form-group p_star">

                                        <div id="alertLog" style="color: #ce1219; font-family: Gill sans Mt; text-align: center; font-size: 18px;">
                                        </div>
                                    </div>

                                    @csrf
                                  
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="Matricule" name="Matricule"  value=""
                                            placeholder="Adresse Email">

                                        <div class="invalid-feedback" style="font-family: Gill sans Mt;"></div>
                                    </div>

                                    <div class="col-md-12 form-group p_star">
                                        <input type="password" class="form-control" id="Password" name="Password" value=""
                                            placeholder="Mot de passe">

                                        <div class="invalid-feedback" style="font-family: Gill sans Mt;"></div>
                                    </div>

                                    <div class="col-md-12 form-group">
                                        <button type="submit" value="submit" class="btn_3" id="Connect">
                                            Connecter
                                        </button>
                                        <a class="lost_pass" href="#">Mot de passe oublié ?</a>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================login_part end =================-->
    </main>

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

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

      <script>

        $("#LoginUs").submit(function(e){
          e.preventDefault();
          const fd = new FormData(this);
          $("#Connect").text('Veuillez patienter...');
          $.ajax({
            url: '{{ route('login_user') }}',
            method: 'post',
            data: fd,
            cache: false,
            processData: false,
            contentType: false,
            success:function(res){
              if(res.status == 400){
                showError('Matricule', res.messages.Matricule);
                showError('Password', res.messages.Password);
                $("#Connect").text('Connexion');
              }else if(res.status == 401){
                $("#alertLog").html(showMessage('danger', res.messages));
                $("#Connect").text('Connexion');
              }else{
                if(res.status == 200 && res.messages == 'success' && res.role == 'Administrateur'){
                 window.location = '{{ route('profile') }}';
                }else if(res.status == 200 && res.messages == 'success' && res.role == 'Client'){
                  window.location = '{{ route('profileclient') }}';
                }else if(res.status == 204 && res.messages == 'error' && res.role == 'Administrateur'){
                  $("#alertLog").html(showMessages('danger', res.messages));
                  $("#Connect").text('Connexion');
               }else if(res.status == 204 && res.messages == 'error' && res.role == 'Client'){
                  $("#alertLog").html(showMessages('danger', res.messages));
                  $("#Connect").text('Connexion');
                }
              }
            }
          });
        })
      </script>

      <script>
        function showError(field, message){
          if(!message){
            $("#" + field).addClass("is-valid").removeClass("is-invalid").siblings(".invalid-feedback").text("");
          }
          else{
            $("#" + field).addClass("is-invalid").removeClass("is-valid").siblings(".invalid-feedback").text(message);
          }
        }

        function removeValidationClasses(form){
          $(form).each(function(){
            $(form).find(":input").removeClass("is-valid is-invalid")
          });
        }
        
        function showMessage(type, message){
          return '<div class="alert alert-${type} alert-dismissible fade show" role="alert">  <strong> Matricule ou mot de passe incorrect</strong> <button type="button" class="close"  data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
        }

        function showMessages(type, message){
          return '<div class="alert alert-${type} alert-dismissible fade show" role="alert">Votre compte est desactivé,<strong> <a href="mailto:admin@taaluma-afrika.com" style="color: #31A5DF;">Contactez l\'administrateur</a></strong><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button></div>';
        }
      </script>

</body>

</html>