<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php echo $__env->yieldContent('title'); ?></title>

    <!-- Favicons -->
  <link href="<?php echo e(asset('assets/img/logo.jpg')); ?>" rel="icon">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- Styles -->
  <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

  <!-- Bootstrap core CSS -->
  <link href="<?php echo e(asset('assets/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">

  <link href="<?php echo e(asset('assets/vendor/DataTables/DataTables-1.10.20/css/jquery.dataTables.min.css')); ?>" rel="stylesheet"/>

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">



  <!-- Custom styles for this template -->
  <link href="<?php echo e(asset('assets/css/business-casual.css')); ?>" rel="stylesheet">

</head>

<body>
    <div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    <?php if(auth()->guard()->guest()): ?>
                        
                        <?php if(Route::has('register')): ?>
                            
                        <?php endif; ?>
                    <?php else: ?>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <img src="<?php echo e(asset('assets/img/avatar.png')); ?>"> <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                            </a>

                            <div id="cible" class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            
                                <a class="dropdown-item" href="<?php echo e(route('profile')); ?>">
                                    <?php echo e(__('Profil')); ?>

                                 </a>

                                 <a class="dropdown-item" href="<?php echo e(route('home')); ?>">
                                     <?php echo e(__('Accueil')); ?>

                                  </a>
                                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    <?php echo e(__('Déconnexion')); ?>

                                </a>

                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                    <?php echo csrf_field(); ?>
                                </form>
                            </div>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>


  <h1 class="site-heading text-center text-white d-none d-lg-block">
    <span class="site-heading-upper text-primary mb-3">Application de gestion de stock</span>
    <span class="site-heading-lower">Dyfaj Stock</span>
  </h1>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
      <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Dyfaj Stock</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
            <?php echo $__env->yieldContent('menu'); ?>
        </ul>
      </div>
    </div>
  </nav>

  <?php echo $__env->yieldContent('contenu'); ?>

  <footer class="footer text-faded text-center py-5">
    <div class="container">
      <p class="m-0 small">Copyright &copy; Simplon / Groupe 4</p>
    </div>
  </footer>
</div>
  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo e(asset('assets/vendor/jquery/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/DataTables/jQuery-3.3.1/jquery-3.3.1.min.js')); ?>" type="text/javascript"></script>
  <script src="<?php echo e(asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/DataTables/DataTables-1.10.20/js/jquery.dataTables.min.js')); ?>" type="text/javascript"></script>
  <script src="<?php echo e(asset('assets/js/script.js')); ?>"></script>




  <script>$(document).ready(function () {
    // $.noConflict();
    var table = $('#produits').DataTable();
});

    // $(document).ready(function() {
    //     var table = $('#list').DataTable();
     
    //     $('#list tbody').on( 'click', 'tr', function () {
    //         if ( $(this).hasClass('selected') ) {
    //             $(this).removeClass('selected');
    //         }
    //         else {
    //             table.$('tr.selected').removeClass('selected');
    //             $(this).addClass('selected');
    //         }
    //     } );
     
    //     $('#button').click( function () {
    //         table.row('.selected').remove().draw( false );
    //     } );
    // } );

    </script> 
</body>

</html>
<?php /**PATH C:\laragon\www\DyfajStock\resources\views/template.blade.php ENDPATH**/ ?>