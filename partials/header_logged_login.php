<div class="col-md-3 text-end">
    <?php
    $user_id = $_SESSION['id'];
    if ($user_id != 1) {
    ?>
        <button class="btn border border-1 rounded text-white">Login</button>
        <button class="btn border border-1 rounded text-white">Cadastrar-se</button>
    <?php
    } else {

    ?>


        <div class="dropdown d-flex justify-content-end">
            <a href="#" class="d-flex link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/simasguga.png" alt="mdo" width="32" height="32" class="rounded-circle">
            </a>
            <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                <li><a class="dropdown-item" href="/perfil">Perfil</a></li>
                <li><a class="dropdown-item" href="/mensagens">Mensagens</a></li>
                <li><a class="dropdown-item" href="/relatorio">Relatório</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="/">Sair</a></li>
            </ul>
        </div>
    <?php } ?>
</div>