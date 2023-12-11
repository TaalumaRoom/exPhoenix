<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">

      <title>Taaluma Afrika | Mot de passe oubli&eacute;</title>
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

    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Changez votre mot de passe</h2>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-2"></div>
          <div class="col-lg-8">

            <form action="#" id="PassForgot" method="post" role="form" class="php-email-form">
                @csrf

                <div class="col-md-12">
                  <div id="alertForgot" style="color: #ce1219; font-family: Gill sans Mt; text-align: center; font-size: 18px;">
                         
                  </div>
                </div>

                <div class="form-group">
                  <input type="email" class="form-control" name="Email"  placeholder="Entrer votre adresse email" required>
                </div>
              
              <div class="text-center"><button type="submit" name="Change" id="Change">Réinitialisez</button></div>

            </form>
            <br>

          </div>
          <div class="col-lg-2"></div>

        </div>

      </div>
    </section>

  </main>


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
        $("#PassForgot").submit(function(e){
          e.preventDefault();
          const fd = new FormData(this);
          $("#Change").text('Veuillez patienter...');
          $.ajax({
            url: '{{ route('forgotpassword') }}',
            method: 'post',
            data: fd,
            cache: false,
            processData: false,
            contentType: false,
            success:function(res){
              if(res.status == 400){
                showError('Email', res.messages.Email);
                $("#Change").text('Réinitialisez');
              }else if(res.status == 200){
                $("#alertForgot").html(showMessages('success', res.messages));
                $("#Change").text('Réinitialisez');
                removeValidationClasses("#PassForgot");
                $("#PassForgot")[0].reset();
              }else{
                $("#Change").text('Réinitialisez');
                $("#alertForgot").html(showMessage('danger', res.messages));
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
          return '<div class="alert alert-${type} alert-dismissible fade show" role="alert">  <strong> Aucune correspondance pour cet email ! </strong><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button></div>';
        }

        function showMessages(type, message){
          return '<div class="alert alert-${type} alert-dismissible fade show" role="alert">  <strong> Consultez votre email pour réinitialer le mode passe ! </strong><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button></div>';
        }
      </script>

    </body>

</html>