<?php
//Porta Principal:
	//	$valor_portaPrin = file_get_contents("api/files/Porta_principal/valor.txt");

//Gateway de Descarregamento:
	//	$valor_portaDes = file_get_contents("api/files/Porta_descarga/valor.txt");

//Gateway de carregamento:
	//	$valor_portaCar = file_get_contents("api/files/Porta_carga/valor.txt");
//Luz:
	//	$valor_luz = file_get_contents("api/files/Luz/valor.txt");

//Trabalhadores:
	//	$valor_trabal = file_get_contents("api/files/Trabalhador/valor.txt");

//Aspersor de água:
	//	$valor_aspersor = file_get_contents("api/files/Aspersor/valor.txt");

//Humidade:
	//	$valor_humedade = file_get_contents("api/files/Humedade/valor.txt");

//Luminosidade:
	//	$valor_luminosidade = file_get_contents("api/files/Luminosidade/valor.txt");

//WebCam:
	//	$valor_cam = file_get_contents("api/files/Cam/valor.txt");

//Temperatura:
	//	$valor_temperatura = file_get_contents("api/files/Temperatura/valor.txt");


?>


<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    
	<style>
		body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
		body {font-size:16px;}
		.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
		.w3-half img:hover{opacity:1}
	</style>


    <title>Dashboard | The Vault</title> 

    
</head>


    
<body style="background-color:#ADD8E6;">

        <!-- Sidebar/menu -->
    <nav class="w3-sidebar w3-blue w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
        <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
        
        <div class="w3-container"> 
            <img src="api/img/logo.png" alt="" width="277" height="152" style="position: relative; right: 23px; padding: 1px;">
        </div>
        
        <div class="w3-bar-block">
            <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Dashboard</a> 
            <a href="#historico" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Histórico</a> 
            <a href="logout.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Logout</a> 
        
        </div>
    </nav>

        <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:340px;margin-right:40px">

            <!-- Header -->
        <div class="w3-container" style="margin-top:80px;" id="showcase">

            <h1 class="w3-jumbo w3-text-white"><b>Dashboard</b></h1>
            <h1 class="w3-medium w3-text-white"><b>Dados sobre Sensores e Atuadores</b></h1>
            <hr style="width:1100px;border:3px solid white" class="w3-round">

        </div>

        <!-- Sensors -->
        <div class="container">
			<div class="row">
				<div class="col-sm-5">
					<div class="card">
					<div class="card-header">Porta Principal: Fechada</div>
					<div class="card-body"><img alt="porta" src="api/img/cat.png" style="display: block; margin-left: auto; margin-right: auto;"></div>
					<div class="card-footer">Actualização: 2020/03/01 14:31 - <a href= "#">Histórico</a></div>
					</div>
				</div><div class="col-sm-5">
					<div class="card">
					<div class="card-header">Gateway de Descarregamento: Fechada</div>
					<div class="card-body"><img alt="porta" src="api/img/cat.png" style="display: block; margin-left: auto; margin-right: auto;"></div>
					<div class="card-footer">Actualização: 2020/03/01 14:31 - <a href= "#">Histórico</a></div>
					</div>
				</div><div class="col-sm-5" style="top:15px;">
					<div class="card">
					<div class="card-header">Gateway de Carregamento: Fechada</div>
					<div class="card-body"><img alt="porta" src="api/img/cat.png" style="display: block; margin-left: auto; margin-right: auto;"></div>
					<div class="card-footer">Actualização: 2020/03/01 14:31 - <a href= "#">Histórico</a></div>
					</div>
				</div><div class="col-sm-5" style="top:15px;">
					<div class="card">
					<div class="card-header">Luz: Desligada</div>
					<div class="card-body"><img alt="porta" src="api/img/cat.png" style="display: block; margin-left: auto; margin-right: auto;"></div>
					<div class="card-footer">Actualização: 2020/03/01 14:31 - <a href= "#">Histórico</a></div>
					</div>
				</div><div class="col-sm-5" style="top:30px;">
					<div class="card">
					<div class="card-header">Trabalhadores: 45 </div>
					<div class="card-body"><img alt="porta" src="api/img/cat.png" style="display: block; margin-left: auto; margin-right: auto;"></div>
					<div class="card-footer">Actualização: 2020/03/01 14:31 - <a href= "#">Histórico</a></div>
					</div>
				</div><div class="col-sm-5" style="top:30px;">
					<div class="card">
					<div class="card-header">Aspersor de água: Desligado</div>
					<div class="card-body"><img alt="porta" src="api/img/cat.png" style="display: block; margin-left: auto; margin-right: auto;"></div>
					<div class="card-footer">Actualização: 2020/03/01 14:31 - <a href= "#">Histórico</a></div>
					</div>
				</div><div class="col-sm-5" style="top:45px;">
					<div class="card">
					<div class="card-header">Humidade: 75%</div>
					<div class="card-body"><img alt="porta" src="api/img/cat.png" style="display: block; margin-left: auto; margin-right: auto;"></div>
					<div class="card-footer">Actualização: 2020/03/01 14:31 - <a href= "#">Histórico</a></div>
					</div>
				</div><div class="col-sm-5" style="top:45px;">
					<div class="card">
					<div class="card-header">CO2/Fumo: Não detectado</div>
					<div class="card-body"><img alt="porta" src="api/img/cat.png" style="display: block; margin-left: auto; margin-right: auto;"></div>
					<div class="card-footer">Actualização: 2020/03/01 14:31 - <a href= "#">Histórico</a></div>
					</div>
				</div><div class="col-sm-5" style="top:60px;">
					<div class="card">
					<div class="card-header">Luminosidade: 196</div>
					<div class="card-body"><img alt="porta" src="api/img/cat.png" style="display: block; margin-left: auto; margin-right: auto;"></div>
					<div class="card-footer">Actualização: 2020/03/01 14:31 - <a href= "#">Histórico</a></div>
					</div>
				</div> <div class="col-sm-5" style="top:60px;">
					<div class="card">
					<div class="card-header">WebCam: Off</div>
					<div class="card-body"><img alt="porta" src="api/img/cat.png" style="display: block; margin-left: auto; margin-right: auto;"></div>
					<div class="card-footer">Actualização: 2020/03/01 14:31 - <a href= "#">Histórico</a></div>
					</div>
				</div> <div class="col-sm-5" style="top:75px; left:250px">
					<div class="card">
					<div class="card-header">Temperatura: 17ºC</div>
					<div class="card-body"><img alt="porta" src="api/img/cat.png" style="display: block; margin-left: auto; margin-right: auto;"></div>
					<div class="card-footer">Actualização: 2020/03/01 14:31 - <a href= "#">Histórico</a></div>
					</div>
				</div> 
			</div>
		</div>
    </div>

    <!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-40" style="margin-top:150px;padding-right:58px"><p class="w3-right">Made by Ivan and Edisson</p></div>

</body>


