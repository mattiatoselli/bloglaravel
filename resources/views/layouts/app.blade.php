!-- Stored in resources/views/layouts/app.blade.php -->

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
    
    
    <body>
        @section('navbar')
            This is the master sidebar.
        @show

        <div class="container">
            @yield('content')
        </div>
        
        @section('footer')
            This is the master footer.
        @show
    </body>
</html>
