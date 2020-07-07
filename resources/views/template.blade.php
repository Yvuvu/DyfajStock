<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield ('title')</title>

    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    
    <link href="{{asset('assets/css/business-casual.css')}}" rel="stylesheet">
    <link href="{{asset('assets/img/favicon.jpg')}}" rel="icon">
</head>

<body>
    <h1 class="site-heading text-center text-white d-none d-lg-block">
        <span class="site-heading-upper text-primary mb-3">Application de gestion de stock</span>
        <span class="site-heading-lower">Dyfaj Stock</span>
    </h1>
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
        <div class="container">            
            <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav mx-auto">
                @yield('menu')
            </ul>
            </div>
        </div>
    </nav>

    @yield('contenu')

    <footer class="footer text-faded text-center py-5">
        <div class="container ">
            <p class="m-0 small">Copyright &copy; Simplon &nbsp;/ &nbsp;Groupe &nbsp;4</p>
        </div>
    </footer>
    <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>