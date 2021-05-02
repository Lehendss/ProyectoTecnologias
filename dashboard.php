<?php
//	$valor_temperatura = file_get_contents("api/files/temperatura/valor.txt");
//	$hora_temperatura = file_get_contents("api/files/temperatura/hora.txt");
//	$nome_temperatura = file_get_contents("api/files/temperatura/nome.txt");

?>


<!DOCTYPE html>


<html lang="pt">
   <head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

		<title>Controlo de Armazém</title>
		
		<style>
			.card-header{font-size: 20px; font-weight: bold;}
			.cad-footer a{font-size: 14px;}
		</style>
		
		<meta http-equiv="refresh" content="5">
		
   </head>
   <body>

		<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<a class="navbar-brand" href="#">Dashboard - The Vault</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Histórico</a>
					</li>
				</ul>
				
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">
					<a style="color:black" href="logout.php">Logout</a>
				</button>
				</form>
				</div>
		</nav>
   
   
		<div class="jumbotron">
			<h1>Servidor The Vault <img src="logo.png" alt="" width="323" height="176" style="position: sticky; left: 0px; padding: 10px;"></h1>
			<p>Dados sobre Sensores e Atuadores</p>

		</div>
		
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="card">
					<div class="card-header">Alarma: Fechada</div>
					<div class="card-body"><img alt="porta" src="images\pilha.png"></div>
					<div class="card-footer">Actualização: 2020/03/01 14:31 - <a href= "#">Histórico</a></div>
					</div>
				</div><div class="col-sm-4">
					<div class="card">
					<div class="card-header">Porta: Fechada</div>
					<div class="card-body"><img alt="porta" src="api\imagens\door.png"></div>
					<div class="card-footer">Actualização: 2020/03/01 14:31 - <a href= "#">Histórico</a></div>
					</div>
				</div><div class="col-sm-4">
					<div class="card">
					<div class="card-header">Porta de Garagem: Fechada</div>
					<div class="card-body"><img alt="porta" src="api\imagens\door.png"></div>
					<div class="card-footer">Actualização: 2020/03/01 14:31 - <a href= "#">Histórico</a></div>
					</div>
				</div><div class="col-sm-4">
					<div class="card">
					<div class="card-header">Luz: Fechada</div>
					<div class="card-body"><img alt="porta" src="api\imagens\door.png"></div>
					<div class="card-footer">Actualização: 2020/03/01 14:31 - <a href= "#">Histórico</a></div>
					</div>
				</div><div class="col-sm-4">
					<div class="card">
					<div class="card-header">drenagem de água</div>
					<div class="card-body"><img alt="porta" src="api\imagens\door.png"></div>
					<div class="card-footer">Actualização: 2020/03/01 14:31 - <a href= "#">Histórico</a></div>
					</div>
				</div><div class="col-sm-4">
					<div class="card">
					<div class="card-header">Aspersor de água</div>
					<div class="card-body"><img alt="porta" src="api\imagens\door.png"></div>
					<div class="card-footer">Actualização: 2020/03/01 14:31 - <a href= "#">Histórico</a></div>
					</div>
				</div>
			</div>
		</div>
		

		<div class="container">
			<div class="card">
				<div class="card-header">Tabela de Sensores</div>
				<div class="card-body">
					<table class="table">
						<thead>
							<tr>
							  <th>Tipo de Dispositivo</th>
							  <th>Valor</th>
							  <th>Data de Actualização</th>
							  <th>Estado de Alertas</th>
							</tr>
						</thead>
						<tbody>
							<tr>
							  <th>temp</th>
							  <td>º</td>
							  <td>h</td>
							  <td><span class="badge badge-pill badge-danger">Desativo</td>
							</tr>
							<tr>
							  <th>Humidade</th>
							  <td>85%</td>
							  <td>2020/03/01 14:31</td>
							  <td><span class="badge badge-pill badge-warning">Warning</td>
							</tr>
							<tr>
							  <<th>Movimento</th>
							  <td>80%</td>
							  <td>2020/03/01 14:31</td>
							  <td><span class="badge badge-pill badge-danger">Muito Forte</td>
							</tr>
							<tr>
							  <<th>Fumo</th>
							  <td>80%</td>
							  <td>2020/03/01 14:31</td>
							  <td><span class="badge badge-pill badge-danger">Muito Forte</td>
							</tr>
							<tr>
							  <<th>Água</th>
							  <td>80%</td>
							  <td>2020/03/01 14:31</td>
							  <td><span class="badge badge-pill badge-danger">Muito Forte</td>
							</tr>
						</tbody>
					</table>
				
				
				</div>

			</div>

		</div>
		
		

		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

  </body>
</html>