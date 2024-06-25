<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "./includes/head.php"; ?>
    <title>A.S. - Realizar Doação</title>
    <link rel="stylesheet" href="./css/doar.css">
    <script src="./js/doar.js" defer></script>
</head>

<body>
    <?php include "./components/Header/index.php"; ?>
    <div class="container">
        <div class="text-dark fs-3">
            Realizar doação
        </div>
    </div>
    <div class="container d-flex justify-content-center" style="margin-top: 5rem;">
        <div class="col-md-5 d-flex justify-content-center">
            <form method="post" class="d-flex flex-column form-control gap-2 needs-validation" id="form_doar" novalidate>
                <label for="nome_doador">Nome:</label>
                <input class="form-control" type="text" id="nome_doador" name="nome_doador" required placeholder="Ex: Nome">
                <label for="sobrenome_doador">Sobrenome:</label>
                <input class="form-control" type="text" id="sobrenome_doador" name="sobrenome_doador" required placeholder="Ex: Sobrenome">
                <label for="telefone_doador">Telefone:</label>
                <input class="form-control" type="text" id="telefone_doador" name="telefone_doador" required placeholder="Ex: (47) 9 9999-9999">
                <button class="btn btn-success w-25 align-self-center" type="submit">Adicionar</button>
            </form>
        </div>
    </div>
    <?php include "./includes/footer.php"; ?>
</body>

</html>