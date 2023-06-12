<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!--Autor: Gabriel Ramirez | Diseñador Web
    Tema:Login Class="Gabriel".
    Fecha:11/01/2019.
    pagina Web: https://www.tonygabriel.ga/
    -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--====================================================================================================================================-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<!--====================================================================================================================================-->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/mybots.scss">
<!--====================================================================================================================================-->
	<title>LOGIN</title>
</head>
<body>
<div align="center"><a href="https://www.tonygabriel.ga/" target="_blank"><img src="https://i.imgur.com/yv9jx9A.gif" width="auto"     height="auto"
   alt="" class="rounded mx-auto d-block img-fluid"></a></div>

   <br>	<br> <br>

		<div class="container" > <br>	<br>	<br>	<br>
 	<div class="row">
    	<div class="col"><img src="img\page12.jpg" width="450" height="450" class="Avatar" ></div>
    	<div class="col">

        <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
        @csrf
        <br>
        <br>
        <br>
        <div class="container">
		<i class="fa fa-users"></i>
        <label for="">LOGIN</label>
        <br>
            <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <br>
            <br>
		<i class="fa fa-key"></i>
		<label for="">MOT DE PASSE</label>
        <br>
            <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
        </div>

        <div class="block mt-4">
            <label for="remember_me" class="flex items-center">
                <x-jet-checkbox id="remember_me" name="remember" />
                <span class="ml-2 text-sm text-gray-600">{{ __('Se rappeler de moi') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">


            <x-jet-button class="ml-4" class="btn btn-success btn-lg btn-block " >
                {{ __('Log in') }}
            </x-jet-button>
        </div>
    </form>
		</div>
 	</div>

								<br> <br> <br> <br>
                                    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2023 MAROC-TASWIQ Copyright
    </div>
                                    <!-- Fin de Copyright -->
</footer>
<!--==============================FINDE FOOOTER==============================================-->


<!--====================================================================================================================================-->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<!--====================================================================================================================================-->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!--====================================================================================================================================-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
