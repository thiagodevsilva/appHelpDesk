<?php

session_start();

//variavel que ve se a auth foi feita
$user_auth =  false;
$id_usuario = null;
$perfil = null;
$email_usuario = null;

$perfis = [1 => 'Administrador', 2 => 'Usuário'];

//usuários
$usuaios_app = [
    ['id' => 1, 'email' => 'adm@teste.com', 'senha' => '123', 'perfil' => 1],
    ['id' => 2, 'email' => 'ti@teste.com', 'senha' => '123', 'perfil' => 1],
    ['id' => 3, 'email' => 'financeiro@teste.com', 'senha' => '123', 'perfil' => 2],
    ['id' => 4, 'email' => 'suporte@teste.com', 'senha' => '123', 'perfil' => 2]
];

foreach($usuaios_app as $user) {
    if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
        $user_auth =  true;  
        $id_usuario = $user['id'];
        $perfil = $user['perfil']; 
        $email = $user['email'];
    };   
};

if($user_auth) {
    echo 'Login realizado com sucesso!';
    $_SESSION['auth'] = 'autorizado';
    $_SESSION['id'] = $id_usuario;
    $_SESSION['perfil'] = $perfil;
    $_SESSION['email'] = $email;
    header('Location: home.php');
} else {
    $_SESSION['auth'] = 'nao_autorizado';
    header('Location: index.php?login=erro');
};



?>