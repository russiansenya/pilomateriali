<header>
    <div class="container top-menu">
        <div class="nav">
            <a href="/">Главная страница</a>
            <a href="/contact">Контакты</a>
            <a href="/contact/about">Про компанию</a>
        </div>
        <div class="tel">
            <i class="fa-solid fa-phone"></i> +7(995)395-27-08
        </div>
    </div>
    <div class="container middle">
        <div class="logo">
            <img src="/public/img/logo.svg" alt="Logo">
            <span>Лес и точка!</span>
        </div>
        <div class="auth-checkout">
            <a href="/basket">

                <?php
                    require_once 'app/models/BasketModel.php';
                    $basketModel = new BasketModel();
                ?>

                <button class="btn basket">Корзина <b>(<?=$basketModel->countItems()?>)</b></button>
            </a><br>
            <?php if ($_COOKIE['login'] == ''): ?>
            <a href="/user/auth">
                <button class="btn auth">Войти</button>
            </a>
            <a href="/user/reg">
                <button class="btn">Регистрация</button>
            </a>
            <?php else: ?>
                <a href="/user/dashboard">
                    <button class="btn dashboard">Кабинет пользователя</button>
                </a>
            <?php endif; ?>
        </div>
    </div>
    <div class="container menu">
        <ul>
            <li><a href="/categories">Все товары</a></li>
            <li><a href="/categories/board">Обрезная доска</a></li>
            <li><a href="/categories/board1">Необрезная доска</a></li>
            <li><a href="/categories/board2">Строганная доска</a></li>
            <li><a href="/categories/balk">Брус</a></li>
            <li><a href="/categories/pallet">Паллеты</a></li>
        </ul>
    </div>
</header>