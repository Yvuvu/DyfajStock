@extends('template')
@section('title', 'Accueil administrateur')
    <meta content="" name="descriptison">
    <meta content="" name="keywords">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">

    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">    
    <link href="{{asset('assets/css/style1.css')}}" rel="stylesheet">
@section('menu')
    <li class="nav-item active px-lg-4">
        <a class="nav-link text-uppercase text-expanded" href="{{url('produit')}}">PRODUITS
            <span class="sr-only">(current)</span>
        </a>
    </li>
    <li class="nav-item px-lg-4">
        <a class="nav-link text-uppercase text-expanded" href="{{url('nouveau-produit')}}">NOUVEAU&nbsp;&nbsp;PRODUIT</a>
    </li>
    <li class="nav-item px-lg-4">
        <a class="nav-link text-uppercase text-expanded" href="{{url('entree')}}">NOUVELLE&nbsp;&nbsp;ENTREE</a>
    </li>
    <li class="nav-item px-lg-4">
        <a class="nav-link text-uppercase text-expanded" href="{{url('vente')}}">VENTE</a>
    </li>
    <li class="nav-item px-lg-4">
        <a class="nav-link text-uppercase text-expanded" href="mouvements">MOUVEMENTS</a>
    </li>
    <li class="nav-item px-lg-4">
        <a class="nav-link text-uppercase text-expanded" href="{{url('utilisateurs')}}">UTILISATEURS</a>
    </li>
@endsection
@section('contenu')
    <main id="main">
        <section id="features" class="features">
          <div class="container">
    
            <div class="section-title" data-aos="fade-up">
              <h2>Nos produits</h2>
              <p>Nos produits par categorie</p>
            </div>
    
            <div class="row" data-aos="fade-left">
              <div class="col-lg-3 col-md-4">
                <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
                  <i class="ri-store-line" style="color: #ffbb2c;"></i>
                  <h3><a href="">Pâtisserie</a></h3>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                  <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
                  <h3><a href="">Produits de consommation</a></h3>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                <div class="icon-box" data-aos="zoom-in" data-aos-delay="150">
                  <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
                  <h3><a href="">Produits divers</a></h3>
                </div>
              </div>
                        
            </div>
    
          </div>
        </section><!-- End Features Section -->
    
        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container">
        
                <div class="row" data-aos="fade-up">
        
                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                        <i class="icofont-simple-smile"></i>
                        <span data-toggle="counter-up">232</span>
                        <p>Happy Clients</p>
                        </div>
                    </div>
            
                    <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                        <div class="count-box">
                        <i class="icofont-document-folder"></i>
                        <span data-toggle="counter-up">521</span>
                        <p>Projects</p>
                        </div>
                    </div>
            
                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                        <i class="icofont-live-support"></i>
                        <span data-toggle="counter-up">1,463</span>
                        <p>Hours Of Support</p>
                        </div>
                    </div>
            
                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                        <i class="icofont-users-alt-5"></i>
                        <span data-toggle="counter-up">15</span>
                        <p>Hard Workers</p>
                        </div>
                    </div>
            
                </div>
        
            </div>
        </section>
    </main>
    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
    <div id="preloader"></div>
@endsection
    <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
    <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
    <script src="{{asset('assets/vendor/venobox/venobox.min.js')}}"></script>
    <script src="{{asset('assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('assets/vendor/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>