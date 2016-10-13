<?php
include('php/security.php');
protectPage();
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>MasterMind</title>
	<meta name="viewport" content="width=device-width , initial-scale=1">
	<script src="js/jquery-3.1.1.min.js"></script>
	<link rel="stylesheet" href="css/styles.css">
	<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">

</head>

<body>

	<ul class="bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>

		<header>
			<div class="instructions">
				<p>Bem-vindo <?php echo $_SESSION['userid']; ?>!</p>
				<p>Neste fantástico e original jogo deves tentar adivinhar um número utilizando menos tentativas possíveis.
					Podes selecionar a quantidade de digitos que o número vai ter e até quando vai.
					A coluna "Correto" apenas diz quantos digitos é que acertou.</p>
			</div>
		</header>

		<div class="container">
		<div id="gameOptions" class="gameOptions clearfix">
			<li class="full-width">
				<p> Seleciona quantos digitos queres que o número tenha.
				<select id="digitSelector">
					<option value="2">2 digitos</option>
					<option value="3">3 digitos</option>
					<option value="4" selected>4 digitos</option>
					<option value="5">5 digitos</option>
					<option value="6">6 digitos</option>
					<option value="7">7 digitos</option>
					<option value="8">8 digitos</option>
					<option value="9">9 digitos</option>
				</select>
				</p>
			</li>
			<li class="full-width">
				<p> Selecione até onde vai o digito. De 1 até ...
				<select id="rangingSelector" style="margin-left: 116px">
					<option value="3"> 3 </option>
					<option value="4"> 4 </option>
					<option value="5" selected> 5 </option>
					<option value="6"> 6 </option>
					<option value="7"> 7 </option>
					<option value="8"> 8 </option>
					<option value="9"> 9 </option>
				</select>
				</p>
			</li>
		</div>

		<div class="main clearfix">

			<div id="divJogo" class="jogo">
				<form>
					Carregue no botão para gerar um número novo.<br><br>
					<button type="button" id="btnGerar" class="button1" onclick="GenerateNumber()">Gerar</button>
					<br><br><br><br>
					Qual o seu número: <br>
					<input type="text" class="tbcheck" id="tbGuessNumber" name="tbGuessNumbers"></input>
					<br><br>
					<button type="button" id="btnVerificar" class="button2" onclick="Check()">Check</button>
				</form>
			</div>
			<div id="divTabela" class="tabela">
				<li class="liTitle">O seu número</li>
				<li class="liTitle">Números corretos</li>
				<div class="clearfix"></div>
				<ul id="ulGuessedNumbers" class="GuessedUL">

				</ul>
				<ul id="ulCorrects" class="CorrectUL">

				</ul>
			</div>
	</div>

	<div class="container2">
		<div class="highScore">
			<ul>
				<li><h3>Highscore</h3></li>
				<li>User:</li>
				<li>Score:</li>
			</ul>
		</div>
	</div>
</div>




		<footer>
			<div id="FinishedGame" class=""></div>
			<div id="FilipeSousa" class="gameCreator">
				<p>Game Created by Filipe Sousa, João Vieira e Edgar Gomes</p>
			</div>
		</footer>

</body>

<script type="text/javascript" src="js/jogo.js"></script>
</html>
