<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>oi html</h1>
</body>
</html>

<?php
echo 'oi php';
exit;
ob_start();
session_start();

$grupo1 = trim($_POST['grup-1']);
$grupo2 = trim(($_POST['grup-2']));
$grupo3 = trim(($_POST['grup-3']));
$grupo4 = trim(($_POST['grup-4']));

$grupo5 = trim($_POST['grup-5']);
$grupo6 = trim(($_POST['grup-6']));
$grupo7 = trim(($_POST['grup-7']));
$grupo8 = trim(($_POST['grup-8']));

$grupo9 = trim($_POST['grup-9']);
$grupo10 = trim(($_POST['grup-10']));
$grupo11 = trim(($_POST['grup-11']));
$grupo12 = trim(($_POST['grup-12']));

$grupo13 = trim($_POST['grup-13']);
$grupo14 = trim(($_POST['grup-14']));
$grupo15 = trim(($_POST['grup-15']));
$grupo16 = trim(($_POST['grup-16']));


echo $grupo1;
echo '</br>';
echo $grupo2;
echo '</br>';
echo $grupo3;
echo '</br>';
echo $grupo4;
echo '</br>';
echo $grupo5;
echo '</br>';
echo $grupo6;
echo '</br>';
echo $grupo7;
echo '</br>';
echo $grupo8;
echo '</br>';
echo $grupo9;
echo '</br>';
echo $grupo10;
echo '</br>';
echo $grupo11;
echo '</br>';
echo $grupo12;
echo '</br>';
echo $grupo13;
echo '</br>';
echo $grupo14;
echo '</br>';
echo $grupo15;
echo '</br>';
echo $grupo16;
echo '</br>';



$str = $grupo1 . ' ' . $grupo2 . ' ' . $grupo3 . ' ' . $grupo4 . ' ' . $grupo5 . ' ' . $grupo6 . ' ' . $grupo7 . ' ' . $grupo8 . ' ' . $grupo9 . ' ' . $grupo10 . ' ' . $grupo11 . ' ' . $grupo12 . ' ' . $grupo13 . ' ' . $grupo14 . ' ' . $grupo15 . ' ' . $grupo16;
echo '</br>';

$contagemA = preg_match_all('/\bA\b/i', $str);
echo $contagemA;
echo '</br>';

$contagemB = preg_match_all('/\bB\b/i', $str);
echo $contagemB;
echo '</br>';

$contagemC = preg_match_all('/\bC\b/i', $str);
echo $contagemC;
echo '</br>';

$contagemD = preg_match_all('/\bD\b/i', $str);
echo $contagemD;
echo '</br>';
echo '</br>';

exit;

if ($contagemA > $contagemB and $contagemA > $contagemC and $contagemA > $contagemD) {
	echo 'Redirecionar pagina com mais numeros de A';
	$_SESSION['descricao'] = 'Influenciador';

	$_SESSION['in'] = $contagemA;
	$_SESSION['do'] =  $contagemB;
	$_SESSION['pe'] =  $contagemC;
	$_SESSION['es'] =  $contagemD;

	header('Location: ../pages/');
	exit;
}

if ($contagemB > $contagemA and $contagemB > $contagemC and $contagemB > $contagemD) {
	echo 'Redirecionar pagina com mais numeros de B';
	$_SESSION['descricao'] = 'Dominante';

	$_SESSION['in'] = $contagemA;
	$_SESSION['do'] =  $contagemB;
	$_SESSION['pe'] =  $contagemC;
	$_SESSION['es'] =  $contagemD;

	header('Location: ../pages/');
	exit;
}

if ($contagemC > $contagemA and $contagemC > $contagemB and $contagemC > $contagemD) {
	echo 'Redirecionar pagina com mais numeros de C';
	$_SESSION['descricao'] = 'Perfeccionista';

	$_SESSION['in'] = $contagemA;
	$_SESSION['do'] =  $contagemB;
	$_SESSION['pe'] =  $contagemC;
	$_SESSION['es'] =  $contagemD;

	header('Location: ../pages/');
	exit;
}

if ($contagemD > $contagemA and $contagemD > $contagemB and $contagemD > $contagemC) {
	echo 'Redirecionar pagina com mais numeros de D';
	$_SESSION['descricao'] = 'Estável';

	$_SESSION['in'] = $contagemA;
	$_SESSION['do'] =  $contagemB;
	$_SESSION['pe'] =  $contagemC;
	$_SESSION['es'] =  $contagemD;

	header('Location: ../pages/');
	exit;
}
