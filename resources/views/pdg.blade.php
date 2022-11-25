<!DOCTYPE html>
<html >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
<link rel="stylesheet" href="css/style2.css">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <title>E-Stock PDG</title>


        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
h1,h2,h3,h4,h5,h6 {font-family: "Oswald"}
body {font-family: "Open Sans"}

</style>
    </head>
    <body class="w3-light-grey">



<!-- Navigation bar with social media icons -->

<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1600px">

  <!-- Header -->
  <header class="w3-container w3-center w3-padding-48 w3-white">
    <h1 class="w3-xxxlarge"><b>GESTION DES STOCKS</b></h1>
    <h6>Bienvenue sur la meilleure application pour  <span class="w3-tag">la gestion des stocks</span></h6>
  </header>

  <!-- Image header -->
  <header class="w3-display-container w3-wide" id="home">
    <img class="w3-image" src="img/GN.jpg" alt="Fashion Blog" width="1600" height="1000">
    <div class="w3-display-left w3-padding-large">
      <h1 class="w3-text-white">Gestion des </h1>
      <h1 class="w3-jumbo w3-text-white w3-hide-small"><b>STOCKS</b></h1>
      <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-green-900 underline">Menu</a>
                    @else
                    <h6> <a href="{{ route('login') }}" class="w3-button w3-white w3-padding-large w3-large w3-opacity w3-hover-opacity-off">LOG IN</a></h6>

                        @if (Route::has('register'))
                        <h6> <a href="{{ route('register') }}"class="w3-button w3-white w3-padding-large w3-large w3-opacity w3-hover-opacity-off">SING UP</a></h6>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>
  </header>
  
   



    </body>
</html>
