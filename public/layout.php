<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Fitness</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/assets/css/styles.css">
</head>

<body>
    <div id="layout">
        <header class="header">
            <div class="header-user_info">
                <div class="user_info-title">Victor Hugo</div>
                <img class="user_info-avatar" src="https://www.w3schools.com/howto/img_avatar.png" alt="Avatar">
            </div>
        </header>

        <aside class="aside">
            <div class="aside-title">
                <a href="#" class="brand-logo">Strong Fitness</a>
            </div>
            <div class="aside-links">
                <a href="/modalidades"><i class="fa fa-plus mr-2" aria-hidden="true"></i>Modalidade</a>
                <a href=""><i class="fa fa-plus mr-2" aria-hidden="true"></i>Aluno</a>
                <a href=""><i class="fa fa-user mr-2" aria-hidden="true"></i>Perfil</a>
                <a href=""><i class="fa fa-sign-out mr-2" aria-hidden="true"></i>Sair</a>

            </div>
        </aside>

        <main class="main">
            <section class="content shadow-lg">
                <?php require $layout->load(); ?>
            </section>
        </main>
        <footer class="footer">

        </footer>
    </div>

    <script src="public/assets/js/jquery.min.js"></script>
    <script src="public/assets/js/bootstrap.min.js"></script>
    <script src="public/assets/js/geral.js"></script>
    <script src="public/assets/js/app/modalidade/index.js"></script>
</body>

</html>