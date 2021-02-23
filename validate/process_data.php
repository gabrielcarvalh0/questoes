<?php
ob_start();
session_start();
include_once("../bd/conexao.php");


$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_URL => 'https://www.google.com/recaptcha/api/siteverify',
    CURLOPT_POSTFIELDS => [
        'secret' => '6LenwN8ZAAAAAFSdAlSS4BDbxhZDubOcu-ITlYus',
        'response' => $_POST['g-recaptcha-response'],
        'remoteip' => $_SERVER['REMOTE_ADDR']
    ]
]);

$response = json_decode(curl_exec($curl));
curl_close($curl);

if (!$response->success == true) {
    $_SESSION['erro-captcha'] = true;
    header("Location:  ../");
    exit;
} else {
	date_default_timezone_set('America/Sao_Paulo');
    $date = date('Y-m-d');
    $name = mysqli_real_escape_string($conexao, trim($_POST['name']));
    $phone = mysqli_real_escape_string($conexao, trim($_POST['phone']));
    $email = mysqli_real_escape_string($conexao, trim($_POST['email']));
    $pass = mysqli_real_escape_string($conexao, trim(md5($_POST['pass'])));
    $re_pass = mysqli_real_escape_string($conexao, trim(md5($_POST['re_pass'])));

    if ($pass == 'd41d8cd98f00b204e9800998ecf8427e' && $name == '' && $email == '') {
        echo 'error 1 ';
        exit;
    }
    if ($pass != $re_pass) {
        echo 'error 2 ';
        exit;
    }
    $sql2 = "select count(*) as total_email from candidate_user where email = '$email'";
    $result2 = mysqli_query($conexao, $sql2);
    $row2 = mysqli_fetch_assoc($result2);

    if ($row2['total_email'] == 1) {
        $_SESSION['email-existe'] = true;
        header('Location: ../');
        exit;
    }

    $sql = "INSERT INTO candidate_user (nameUser, email, pass, phone, dataRegister) VALUES ('$name', '$email' , '$pass', '$phone', '$date')";

    if ($conexao->query($sql) === TRUE) {
        $conexao->close();
        echo 'deu certo';
        // $_SESSION['link_confirmacao'] = $link;
        // $_SESSION['email_cadastro'] = $email;
        header("Location: ../mission/");
        exit;
    }else{
        echo   'n fez a conexao';
    }
}
