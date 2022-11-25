<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
    <title>gererES</title>
</head>
<body>
    <style>
        body{
            font-family: 'Dancing Script', cursive;
        }
        .hero{
            min-height:100vh;
            background: linear-gradient(rgb(0,0,0),transparent) ,url(img/GN1.jpg);
            background-size:cover;
            background-position:bottom;
            display:flex;
            flex-direction:column;
            color:#197829;
            align-items:center;
            font-size:1.8rem;
        }
        .button{
            padding:2rem 6rem;
            background:#4DBC5F;
            color:black;
            font-size:1.8rem;
            cursor:pointer;
            border:none;
            border-radius: 10px;

        }
    </style>
    <section class="hero">
        <h2>Gestion des entrées et des sorties</h2>
        <h3>de marchandises </h3>
        <a href="/entrees" class="button">Gérer les entrées</a>
        <br>
        <br>
        <a href="/sorties" class="button">Gérer les sorties</a>
        
    </section>
</body>
</html>