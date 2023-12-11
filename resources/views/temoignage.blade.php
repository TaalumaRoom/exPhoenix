<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">

      <title>Taaluma Afrika | Témoignages</title>
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
          <h2>Ecrire mon témoignage</h2>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-2"></div>
          <div class="col-lg-8">
            <form action="#" method="post" id="Testimonies" role="form" class="php-email-form" enctype="multipart/form-data">
                 
              @csrf
                <div class="form-group">
                  <input type="text" class="form-control" name="Nom"  placeholder="Entrez votre nom" required>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control" name="Fonction"  placeholder="Entrez la fonction que vous occupez dans l'entreprise" required>
                </div>

                <div class="form-group">
                  <textarea class="form-control" name="Commentaire" rows="2" placeholder="Entrer le contenu du témoignage" required></textarea>
                </div>
                
                <div class="form-group">
                  <label style="font-family: Gill sans Mt; font-size: 15px;">Uploadez votre photo</label>
                  <input type="file" class="form-control" name="Fichier" required>
                </div>

              
              <div class="text-center"><button type="submit" id="Testify">Publier</button></div>
              
            </form>
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
    
    
    $("#Testimonies").submit(function(e){
      e.preventDefault();
      const fd = new FormData(this);
      $("#Testify").text('En cours de publication...');
      $.ajax({
        url: '{{ route('testimony') }}',
        method: 'post',
        data: fd,
        cache: false,
        processData: false,
        contentType: false,
        success:function(res){
          if (res.status == 200) {
            Swal.fire(
              'Taaluma Afrika',
              'Votre témoignage a été enregistré ! <br> Merci pour votre collaboration', 
              'success'
              )
          }
          $("#Testify").text('Publié !');
          $("#Testimonies")[0].reset();
        }
      });
    })
  </script>

    </body>


</html>