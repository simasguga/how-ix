<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "./includes/head.php"; ?>
    <title>A.S. - Solicitar Doação</title>
    <link rel="stylesheet" href="./css/receber.css">
    <script src="./js/receber.js" defer></script>
</head>

<body>
    <?php include "./components/Header/index.php"; ?>
    <div class="container">
        <div class="text-dark fs-3">
            Solicitar Doação
        </div>
    </div>
    <div class="container d-flex justify-content-center" style="margin-top: 5rem;">
        <div class="col-md-5 d-flex justify-content-center">
            <form method="post" class="d-flex flex-column form-control gap-2 needs-validation" id="form_receber" novalidate>
                <label for="nome_doador">Nome:</label>
                <input class="form-control" type="text" id="nome_doador" name="nome_doador" required placeholder="Ex: Nome">
                <label for="sobrenome_doador">Sobrenome:</label>
                <input class="form-control" type="text" id="sobrenome_doador" name="sobrenome_doador" required placeholder="Ex: Sobrenome">
                <label for="email_doador">E-mail:</label>
                <input class="form-control" type="text" id="email_doador" name="email_doador" placeholder="Ex: email@email.com.br">
                <label for="telefone_doador">Telefone:</label>
                <input class="form-control" type="text" id="telefone_doador" name="telefone_doador" required placeholder="Ex: (47) 9 9999-9999">
                <label for="endereco_doador">Endereço:</label>
                <input class="form-control" type="text" id="endereco_doador" name="endereco_doador" required placeholder="Ex: Rua Nome da rua tal">
                <button class="btn btn-success w-25 align-self-center" type="submit">Adicionar</button>
            </form>
        </div>
    </div>
</body>

</html>