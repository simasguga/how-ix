<?php
$d = 'd-none';
if ($_POST) {
    if ($_POST['email'] != "" && $_POST['pwd'] != "") {
        $aut = new Authentication();
        $aut->setUserId(1);
        $aut->setUserLogged(true);
        $aut->save();
        $status_user = true;
        $_SESSION["newsession"] = true;
        $user_on = $_SESSION["newsession"];
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
    <title>Login - Alimento Solidário</title>
    <link rel="stylesheet" href="./css/home.css">
</head>

<body>
    <?php include "./components/HeaderLogin/index.php"; ?>
    <div class="container d-flex justify-content-center">
        <div class="col-md-5 mt-5 text-center fs-3">
            <button class="btn border border-1" onclick="location.href = '/registrar'">Registrar</button>
            <button class="btn border border-1 text-white" onclick="location.href = '/login'" style="background-color: #6f42c1;">Login</button>
        </div>
    </div>
    <div class=" container d-flex justify-content-center align-items-center">
        <form class="form-control w-25 my-3 d-flex flex-column gap-2" method="post">
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