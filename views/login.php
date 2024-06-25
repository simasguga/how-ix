<?php
$d = 'd-none';
if ($_POST) {
    if ($_POST['email'] != "" && $_POST['pwd'] != "") {
        $_SESSION['id'] = 1;
        header('Location: /');
    } else {
        $d = 'd-flex';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "./includes/head.php"; ?>
    <title>Perfil - Alimento Solidário</title>
    <link rel="stylesheet" href="./css/home.css">
</head>

<body>
    <?php include "./components/HeaderLogin/index.php"; ?>
    <div class="container d-flex justify-content-center align-items-center py-5">
        <form class="form-control w-25 my-5 d-flex flex-column gap-2" method="post">
            <label for="email">E-mail*</label>
            <input type="text" class="form-control" name="email" id="email" placeholder="Ex: email@email.com">
            <label for="pwd">Senha*</label>
            <input type="password" class="form-control" name="pwd" id="pwd" placeholder="*********">
            <div class="container <?php echo $d; ?>">
                <div class="text-danger">
                    E-mail ou senha inválidos!
                </div>
            </div>
            <input type="submit" class="btn btn-success align-self-center" id="btn_login">
        </form>
    </div>
    <?php include "./includes/footer.php"; ?>
</body>

</html>