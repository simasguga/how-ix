<?php

require_once "./vendor/autoload.php";
include "./includes/importants.php";
function render($template, $data = [])
{
    extract($data);
    include $template;
}

$status_user = null;

// Simulação de banco de dados em memória
$doacoes = [
    1 => ['id' => 1, 'item' => 'Arroz', 'quantidade' => 10, 'doador' => 'Maria'],
    2 => ['id' => 2, 'item' => 'Feijão', 'quantidade' => 5, 'doador' => 'José'],
];

// Captura da URL para roteamento
$request = $_SERVER['REQUEST_URI'];
$params = explode('/', trim($request, '/'));

// Roteamento básico
switch ($params[0]) {
    case '':
    case 'home':
        render('views/home.php', ['status_user' => $status_user]);
        break;

    case 'doar':
        render('views/doar.php', ['status_user' => $status_user]);
        break;

    case 'receber':
        render('views/receber_doacao.php', ['status_user' => $status_user]);
        break;

    case 'localidades':
        render('views/localidades.php', ['status_user' => $status_user]);
        break;

    case 'trabalhos':
        render('views/trabalhos.php', ['status_user' => $status_user]);
        break;

    case 'perfil':
        render('views/perfil.php', ['status_user' => $status_user]);
        break;

    case 'login':
        render('views/login.php', ['status_user' => $status_user]);
        break;

    case 'mensagens':
        render('views/mensagens.php', ['status_user' => $status_user]);
        break;

    case 'logout':
        render('views/logout.php', ['status_user' => $status_user]);
        break;

    case 'registrar':
        render('views/registrar.php', ['status_user' => $status_user]);
        break;

    case 'doacao':
        if (isset($params[1]) && isset($doacoes[$params[1]])) {
            render('views/doacao.php', ['doacao' => $doacoes[$params[1]], 'status_user' => $status_user]);
        } else {
            http_response_code(404);
            echo 'Doação não encontrada';
        }
        break;

    case 'adicionar':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Processar dados do formulário (simplificado)
            $novoId = count($doacoes) + 1;
            $doacoes[$novoId] = [
                'id' => $novoId,
                'item' => $_POST['item'],
                'quantidade' => $_POST['quantidade'],
                'doador' => $_POST['doador'],
            ];
            echo 'Doação adicionada com sucesso!';
        } else {
            render('views/adicionar.php', ['status_user' => $status_user]);
        }
        break;

    default:
        render('views/not-found.php', ['status_user' => $status_user]);
        break;
}
