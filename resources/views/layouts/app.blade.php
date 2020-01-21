<html>


    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Il progetto italiano open source di raccolta risorse e tutorial per i programmatori.
        Visualizza i miei tutorial su come diventare un sistemista professionista ed impara i segreti di Linux.
        Automatizza la manutenzione dei tuoi server.
        Scopri come migliorare il tuo lavoro con la metodologia agile ed il contiuous integration pattern grazie a Docker.
        Vuoi conoscere meglio i servizi di Amazon Web Service? Segui i miei tutorial.
        Impara a sviluppare con Laravel e Vuejs applicazioni professionali, scattanti e gradevoli.">
        <meta name="author" content="Mattia Toselli">
        <title>App Name - @yield('title')</title>
        <link href="{{ asset('assets/startbootstrap-freelancer/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/startbootstrap-freelancer/css/freelancer.css') }}">
    </head>
    
    <body id="page-top">
        @section('navbar')    
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
  <div class="container">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">Home</a>
    <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      Menu
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
      <li class="nav-item mx-0 mx-lg-1">
        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#chi-siamo">Chi siamo</a>
      </li>
      </ul>
    </div>
  </div>
</nav>
        @show

        <div class="container">
            @yield('content')
        </div>
        
        @section('footer')
            <!-- Footer -->
  <footer class="footer text-center" id="contact">
    <div class="container">
      <div class="row">

        <!-- Footer Location -->
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Contattami</h4>
          <p class="lead mb-0">toselli.mattia@gmail.com</p>
        </div>

        <!-- Footer Social Icons -->
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Seguimi</h4>
          <a class="btn btn-outline-light btn-social mx-1" href="https://www.facebook.com/mattia.toselli">
            <i class="fab fa-fw fa-facebook-f"></i>
          </a>
          <a class="btn btn-outline-light btn-social mx-1" href="https://www.linkedin.com/in/mattia-toselli-21041993/">
            <i class="fab fa-fw fa-linkedin-in"></i>
          </a>
          <a class="btn btn-outline-light btn-social mx-1" href="https://www.linkedin.com/in/mattia-toselli-21041993/">
            <i class="fa fa-github" style="font-size:36px"></i>
          </a>
        </div>

        <!-- Footer About Text -->
        <div class="col-lg-4" style="align:left;">
          <h4 class="text-uppercase mb-4">Risorse utili</h4>
          <p class="lead mb-0">Temi Bootstrap:
            <a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
            <p class="lead mb-0">Guida ufficiale Laravel:
            <a href="https://laravel.com/docs/4.2/introduction">Laravel docs</a>.</p>
        </div>

      </div>
    </div>
  </footer>

  <!-- Copyright Section -->
  <section class="copyright py-4 text-center text-white">
    <div class="container">
      <small>Copyright &copy; Kernel.it è un progetto Open Source.
        <br>
        Per contribuire o per eventuali richieste fare riferimento ai contatti sopra indicati.
        <br>
        Le repository su GitHub sono accessibili a tutti, ogni cambiamento sarà valutato, e se utile inserito nel master del progetto.
      </small>
    </div>
  </section>
        @show
        
        
        <!-- other javascript libraries and scroll to top function -->
        <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
  <div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
      <i class="fa fa-chevron-up"></i>
    </a>
  </div>



  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('assets/startbootstrap-freelancer/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/startbootstrap-freelancer/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Plugin JavaScript -->
  <script src="{{ asset('assets/startbootstrap-freelancer/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    </body>
</html>
