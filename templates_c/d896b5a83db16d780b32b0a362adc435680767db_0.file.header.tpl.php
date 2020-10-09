<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-09 20:46:02
  from 'C:\xampp\htdocs\tpe-web2\Shelby-New\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f80afea3486f1_11906019',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd896b5a83db16d780b32b0a362adc435680767db' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe-web2\\Shelby-New\\templates\\header.tpl',
      1 => 1602269107,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f80afea3486f1_11906019 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <base href="<?php echo BASE_URL;?>
">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shelby Beer</title>
    <link href="https://fonts.googleapis.com/css?family=Poiret+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/estilo.css">
    <?php echo '<script'; ?>
 src="./js/control.js"><?php echo '</script'; ?>
>
</head>

<body>
    <!--       header          -->
    <header>
        <!--       logo shelby          -->
        <div class="logo">
            <img id="logo-shelby" src="imagenes/Shelby Beer logo.png" alt="logo" srcset="">
           
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
            <li class="li-item"><a href="contacto">Contacto</a></li>
        </ul>    
        

    </nav><?php }
}
