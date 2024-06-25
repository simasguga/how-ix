<?php
session_start();
function render($template, $data = [])
{
    extract($data);
    include $template;
}

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
        render('views/home.php');
        break;

    case 'doar':
        render('views/doar.php');
        break;

    case 'receber':
        render('views/receber_doacao.php');
        break;

    case 'localidades':
        render('views/localidades.php');
        break;

    case 'trabalhos':
        render('views/trabalhos.php');
        break;

    case 'perfil':
        render('views/perfil.php');
        break;

    case 'login':
        render('views/login.php');
        break;

    case 'mensagens':
        render('views/mensagens.php');
        break;

    case 'logout':
        render('views/logout.php');
        break;

    case 'registrar':
        render('views/registrar.php');
        break;

    case 'doacao':
        if (isset($params[1]) && isset($doacoes[$params[1]])) {
            render('views/doacao.php', ['doacao' => $doacoes[$params[1]]]);
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
            render('views/adicionar.php');
        }
        break;

    default:
        render('views/not-found.php');
        break;
}
