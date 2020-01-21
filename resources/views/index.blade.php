<!DOCTYPE html>
<html lang="it">
<?php require("components/index/head.php"); ?>
<body id="page-top">
<?php require("components/index/navbar.php"); ?>

<!-- sezione chi siamo -->
  <section class="page-section portfolio" id="chi-siamo">
    <div class="container">
      <h1 class="page-section-heading text-center text-uppercase text-secondary mb-0">Chi siamo</h1>
      <?php require("components/index/divider.php"); ?>
      <div class="row">
        <?php require("components/index/profile_card.php"); ?>
      </div>
    </div>
  </section>
<!-- fine chi siamo -->

  <!--Sezione DevOps-->
  <section class="page-section portfolio" id="devops">
    <div class="container">

      <!-- Portfolio Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">DevOps</h2>
      <br>
      <h5 class="text-center mb-0">La strada per chi vuole gestire sistemi sicuri e scalabili</h5>

      <!-- Icon Divider -->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!--descrizione devops -->
      <div class="row">
        <p class="mb-5">
          Il compito di un DevOps è automatizzare e rendere il più veloce e sicure possibili le delicate operazioni di messa in produzione ed integrazione e sviluppo continuo.
          Un DevOps è una figura professionale completa, che deve avere diverse conoscenze di automazione, sviluppo, sicurezza, reti e linguaggi, sistemi operativi e database.
        </p>
      </div>

      <!-- Portfolio Grid Items -->
      <div class="row">

        <!-- Docker immagine -->
        <div class="col-md-6 col-lg-4">
          <div class="title-image">Docker</div>
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModalDocker1">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/docky.jpeg" alt="docker linux golang funny logo">
          </div>
        </div>

        <!-- modale docker -->
        <div class="portfolio-modal modal fade" id="portfolioModalDocker1" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
          <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">
                  <i class="fas fa-times"></i>
                </span>
              </button>
              <div class="modal-body text-center">
                <div class="container">
                  <div class="row justify-content-center">
                    <div class="col-lg-8">
                      <!-- Portfolio Modal - Text -->
                      <h4>Uilizzare i container Linux con Docker</h4>
                      <hr>
                      <p class="mb-5" style="text-align: justify;">
                      <strong>
                        Ma sul mio computer funzionava!
                      </strong>
                      <br>
                        Quante volte ce lo siamo sentito dire? Quante volte ci è capitato di dirlo?
                        Questa frase raccoglie in sè un grosso, anzi annoso problema che prima o poi tutti gli sviluppatori si sono trovati a dover affrontare: la mancanza di compatibilità
                        tra un ambiente ed un altro.
                        Docker, questo simpatico strumento con un design cartoonesco, è qualcosa che si pone l'obiettivo di risolverlo, e non solo ci prova, ci riesce. Come?
                      </p>
                      <hr>
                      <a href="Docker/indice.html">
                      <button class="btn btn-primary" >
                        Scopriamolo insieme.
                      </button>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </section>
  <!-- fine devops -->

  <!-- inizio linguaggi -->
  <!--Sezione DevOps-->
  <section class="page-section portfolio" id="linguaggi">
    <div class="container">

      <!-- Portfolio Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Linguaggi</h2>
      <br>
      <h5 class="text-center mb-0">Il primo passo per chi vuole imparare a pensare da informatico</h5>

      <!-- Icon Divider -->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!--descrizione devops -->
      <div class="row">
        <p class="mb-5">
          Per imparare un linguaggio di programmazione possono bastare settimane. Per usarlo bene uno o due mesi.
          Ragionare algoritmicamente è qualcosa che richiede tempo, dedizione, esperienza.
          Ogni linguaggio porta con se qualcosa, un differente modo di pensare e di approcciarsi ai problemi.
          Partire dal salutare il mondo col tuo terminale sarà solo l'inizio.
        </p>
      </div>

      <!-- Portfolio Grid Items -->
      <div class="row">

        <!-- Docker immagine -->
        <div class="col-md-6 col-lg-4">
          <div class="title-image">Docker</div>
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModalDocker1">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/docky.jpeg" alt="docker linux golang funny logo">
          </div>
        </div>

        <!-- modale docker -->
        <div class="portfolio-modal modal fade" id="portfolioModalDocker1" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
          <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">
                  <i class="fas fa-times"></i>
                </span>
              </button>
              <div class="modal-body text-center">
                <div class="container">
                  <div class="row justify-content-center">
                    <div class="col-lg-8">
                      <!-- Portfolio Modal - Text -->
                      <h4>Uilizzare i container Linux con Docker</h4>
                      <hr>
                      <p class="mb-5" style="text-align: justify;">
                      <strong>
                        Ma sul mio computer funzionava!
                      </strong>
                      <br>
                        Quante volte ce lo siamo sentito dire? Quante volte ci è capitato di dirlo?
                        Questa frase raccoglie in sè un grosso, anzi annoso problema che prima o poi tutti gli sviluppatori si sono trovati a dover affrontare: la mancanza di compatibilità
                        tra un ambiente ed un altro.
                        Docker, questo simpatico strumento con un design cartoonesco, è qualcosa che si pone l'obiettivo di risolverlo, e non solo ci prova, ci riesce. Come?
                      </p>
                      <hr>
                      <a href="Docker/indice.html">
                      <button class="btn btn-primary" >
                        Scopriamolo insieme.
                      </button>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </section>

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

  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
  <div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
      <i class="fa fa-chevron-up"></i>
    </a>
  </div>



  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/freelancer.min.js"></script>

</body>

</html>
