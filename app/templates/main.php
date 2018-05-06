<!DOCTYPE html>
<html>
    <head>
        <title><?= app::getRouter()->getController() ?></title>
        <link rel="stylesheet" href="/web/css/style.css">
        <link rel="icon" href="/web/img/favicon.png">
        <script src="/web/js/jquery-3.2.0.min.js"></script>
        <script src="/web/js/script.js"></script>
    </head>
    <body>
        
        <header>
            <a href="<?= Config::get('domain')?>"><img class="logo" src="/web/img/logo.png"/></a>
        </header>
        
        <div class="main_menu">
            <form class="search" action="action" method="post">
                <input type="text" name="tb_search">
                <input type="submit" value="">
            </form>
            <span class="bt_addAd">ДОБАВИТЬ ОБЬЯВЛЕНИЕ</span>
        </div>
        
        <section>
            <?=$content?>
        </section>
        
        <footer>
            <br><p>2018 All right reserved. Created by Miniline</p>
        </footer>
        
    </body>
</html>