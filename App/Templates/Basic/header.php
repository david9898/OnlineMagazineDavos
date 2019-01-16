<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Menu template</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script
        src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"
        integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E="
        crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" media="all" href="http://localhost:82/OnlineMagazine/Public/css/details.css" />
    <link rel="stylesheet" type="text/css" media="all" href="http://localhost:82/OnlineMagazine/Public/css/menu.css" />
    <link rel="stylesheet" type="text/css" media="all" href="http://localhost:82/OnlineMagazine/Public/css/login.css" />
    <link rel="stylesheet" type="text/css" media="all" href="http://localhost:82/OnlineMagazine/Public/css/main.css" />
    <link rel="stylesheet" type="text/css" media="all" href="http://localhost:82/OnlineMagazine/Public/css/aside.css" />
    <link rel="stylesheet" type="text/css" media="all" href="http://localhost:82/OnlineMagazine/Public/css/footer.css" />
    <link rel="stylesheet" type="text/css" media="all" href="http://localhost:82/OnlineMagazine/Public/css/profile.css" />
    <link rel="stylesheet" type="text/css" media="all" href="http://localhost:82/OnlineMagazine/Public/css/buyProduct.css" />
    <link rel="stylesheet" type="text/css" media="all" href="http://localhost:82/OnlineMagazine/Public/css/addSecurityPicture.css" />
    <link rel="stylesheet" type="text/css" media="all" href="http://localhost:82/OnlineMagazine/Public/css/register.css" />
    <link rel="stylesheet" type="text/css" media="all" href="http://localhost:82/OnlineMagazine/Public/css/addProduct.css" />
    <link rel="stylesheet" type="text/css" href="http://localhost:82/OnlineMagazine/node_modules/toastr/build/toastr.min.css" />
    <script type="text/javascript" src="http://localhost:82/OnlineMagazine/Public/js/menu.js" ></script>
    <script type="text/javascript" src="http://localhost:82/OnlineMagazine/Public/js/aside.js" ></script>
    <script type="text/javascript" src="http://localhost:82/OnlineMagazine/Public/js/buyProduct.js" ></script>
    <script type="text/javascript" src="http://localhost:82/OnlineMagazine/Public/js/main.js" ></script>
    <script type="text/javascript" src="http://localhost:82/OnlineMagazine/Public/js/details.js" ></script>
    <script type="text/javascript" src="http://localhost:82/OnlineMagazine/Public/js/login.js" ></script>
    <script type="text/javascript" src="http://localhost:82/OnlineMagazine/node_modules/toastr/build/toastr.min.js"></script>
</head>
<body>
<header>
    <div class="header">
        <h1>Купете от нас още сега</h1>
        <div class="header_container">
            <div >
                <?php if ( !isset($_SESSION['id']) ):?>
                    <p><i class="fas fa-sign-in-alt"></i> <a href="http://localhost:82/OnlineMagazine/login">Вход</a></p>
                    <p><i class="fas fa-registered"></i> <a href="http://localhost:82/OnlineMagazine/register">Регистрация</a></p>
                <?php endif; ?>
                <?php if ( isset($_SESSION['id']) ): ?>
                    <?php if ( $_SESSION['status'] === 'admin' ): ?>
                        <p><i class="fas fa-toolbox"></i>Админ</p>
                        <div id="admin_panel">
                            <p><i class="fas fa-plus"></i> <a href="http://localhost:82/OnlineMagazine/add">Добави</a></p>
                            <p><i class="fas fa-users-cog"></i><a href="http://localhost:82/OnlineMagazine/add">Потребители</a></p>
                            <p><i class="fas fa-calendar-check"></i><a href="http://localhost:82/OnlineMagazine/add">Най-продавани</a></p>
                            <p><i class="fas fa-eye"></i><a href="http://localhost:82/OnlineMagazine/add">Най-разглеждани</a></p>
                            <p><i class="fas fa-shield-alt"></i><a href="http://localhost:82/OnlineMagazine/addSecurityImage">Добави защитена картинка</a></p>
                        </div>
                    <?php endif; ?>
                    <p><i class="fas fa-user"></i> <a href="http://localhost:82/OnlineMagazine/profile">Профил</a></p>
                    <p><i class="fas fa-sign-out-alt"></i> <a href="http://localhost:82/OnlineMagazine/logout">Изход</a></p>
                <?php endif; ?>
            </div>
            <div>
                <p>
                    Онлайн магазин <br>
                    DAVOSSS
                </p>
            </div>
            <div>
                <p>Количка</p>
                <span class="basket_span">0</span>
                <a href="http://localhost:82/OnlineMagazine/basket"><i class="fas fa-shopping-cart"></i></a>
            </div>
        </div>
    </div>
    <hr>
    <nav>
        <ul id="menu">
            <li  id="home"><p class="menu_li"><a href="http://localhost:82/OnlineMagazine/home">Начало</a></p></li>

            <li><p class="menu_li men_menu">Мъже</p>
                <ul class="drop_down" id="men_menu">
                    <li class="down_menu"><a href="http://localhost:82/OnlineMagazine/mens/pants/1">Панталони</a></li>
                    <li class="down_menu"><a href="http://localhost:82/OnlineMagazine/mens/shoes/1">Обувки</a></li>
                    <li class="down_menu"><a href="http://localhost:82/OnlineMagazine/mens/suits/1">Костюми</a></li>
                    <li class="down_menu"><a href="http://localhost:82/OnlineMagazine/mens/t-shirts/1">Тениски</a></li>
                    <li class="down_menu"><a href="http://localhost:82/OnlineMagazine/mens/sunglasses/1">Очила</a></li>
                </ul>
            </li>

            <li><p class="menu_li women_menu">Жени</p>
                <ul class="drop_down" id="women_menu">
                    <li class="down_menu"><a href="http://localhost:82/OnlineMagazine/women/pants/1">Панталони</a></li>
                    <li class="down_menu"><a href="http://localhost:82/OnlineMagazine/women/shoes/1">Обувки</a></li>
                    <li class="down_menu"><a href="http://localhost:82/OnlineMagazine/women/suits/1">Костюми</a></li>
                    <li class="down_menu"><a href="http://localhost:82/OnlineMagazine/women/t-shirts/1">Тениски</a></li>
                    <li class="down_menu"><a href="http://localhost:82/OnlineMagazine/women/sunglasses/1">Очила</a></li>
                </ul>
            </li>
            <li><p class="menu_li promotion_menu">Промоции</p>
                <ul class="drop_down" id="promotion_menu">
                    <li class="down_menu"><a href="http://localhost:82/OnlineMagazine/promotion/pants/1">Панталони</a></li>
                    <li class="down_menu"><a href="http://localhost:82/OnlineMagazine/promotion/shoes/1">Обувки</a></li>
                    <li class="down_menu"><a href="http://localhost:82/OnlineMagazine/promotion/suits/1">Костюми</a></li>
                    <li class="down_menu"><a href="http://localhost:82/OnlineMagazine/promotion/t-shirts/1">Тениски</a></li>
                    <li class="down_menu"><a href="http://localhost:82/OnlineMagazine/promotion/sunglasses/1">Очила</a></li>
                </ul>
            </li>
            <li><p class="menu_li new_menu">Най-нови</p>
                <ul class="drop_down" id="new_menu">
                    <li class="down_menu"><a href="http://localhost:82/OnlineMagazine/new/pants/1">Панталони</a></li>
                    <li class="down_menu"><a href="http://localhost:82/OnlineMagazine/new/shoes/1">Обувки</a></li>
                    <li class="down_menu"><a href="http://localhost:82/OnlineMagazine/new/suits/1">Костюми</a></li>
                    <li class="down_menu"><a href="http://localhost:82/OnlineMagazine/new/t-shirts/1">Тениски</a></li>
                    <li class="down_menu"><a href="http://localhost:82/OnlineMagazine/new/sunglasses/1">Очила</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</header>
<div>

</div>
<main id="main">