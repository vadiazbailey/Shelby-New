<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{BASE_URL}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shelby Beer</title>
    <link href="https://fonts.googleapis.com/css?family=Poiret+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/estilo.css">
    <script src="./js/control.js"></script>
     <!-- development version, includes helpful console warnings -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>

<body>
    <!--       header          -->
    <header>
        <!--       logo shelby          -->
        <div class="logo">
            <img id="logo-shelby" src="imagenes/Shelby Beer logo.png" alt="logo" srcset="">
           {if $loggedIn==true}
            <li class="li-item"><a href="user">Hola, {$user}</a></li>
            <li class="li-item"><a href="logout">Logout</a></li>
            {else}
            <li class="li-item"><a href="login">Login</a></li>
            <li class="li-item"><a href="logout">Logout</a></li>
            {/if}
        </div>


    </header>

    <div class="btn-menu"><a href="#">Menú</a></div>
    <!--       navegador          -->
    <nav class="navegador">

        <ul class="botonera">
            <li class="li-item"><a href="home">Home</a></li>
            <li class="li-item"><a href="cerveza">Cervezas</a></li>
            <li class="li-item"><a href="color">Color</a></li>
            <li class="li-item"><a href="reserva">Reservas</a></li>
            <li class="li-item"><a href="opinion">Opinion</a></li>
            <li class="li-item"><a href="contacto">Contacto</a></li>
        </ul>


    </nav>