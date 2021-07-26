<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Credit Card</title>
</head>

<body>
    <!-- Header =============================================== -->
    <header class="header">
        <div class="head_top">
            <div class="auto_container">
                <div class="head_top_wrap">
                    <div class="top_link">
                        <div class="top_item active" data-tab="#top_nav-1">
                            Физические лица
                        </div>
                        <div class="top_item" data-tab="#top_nav-2">
                            Предприниматели
                        </div>
                        <div class="top_item" data-tab="#top_nav-3">
                            Юридические лица
                        </div>
                    </div>
                    <div class="top_contact">
                        <div class="top_contact_item">
                            <div class="top_icon">
                                <img src="images/svg/phone.svg" alt="icon">
                            </div>
                            <div class="top_contact_text">
                                Контакты
                            </div>
                        </div>
                        <div class="top_contact_item">
                            <div class="lang_group">
                                <div class="top_icon">
                                    <img src="images/svg/globus.svg" alt="icon">
                                </div>
                                <div class="top_contact_text">
                                    РУС
                                </div>
                            </div>
                            <div class="drop_lang">
                                <a href="#" class="other_lang">
                                    Eng
                                </a>
                                <a href="#" class="other_lang">
                                    Tm
                                </a>
                            </div>
                        </div>
                        <div class="top_contact_item">
                            <div class="top_icon">
                                <img src="images/svg/login.svg" alt="icon">
                            </div>
                            <div class="top_contact_text">
                                Internet - Banking
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ----------------------------- -->
        <div class="head_inner">
            <div class="auto_container">
                <div class="head_wrap">
                    <div class="head_logo">
                        <div class="head_photo">
                            <img src="images/logo.png" alt="logo">
                        </div>
                        <div class="logo_text">
                            Халкбанк <br>
                            <span>
                                "Главная ценность Банка-наши Клиенты"
                            </span>
                        </div>
                    </div>

                    <div class="head_menu">
                        <a href="#" class="menu_item">
                            <div class="menu_icon">
                                <img src="images/svg/gps.svg" alt="icon">
                            </div>
                            <div class="menu_text">
                                Филиалы банка
                            </div>
                        </a>
                        <a href="#" class="menu_item">
                            <div class="menu_icon">
                                <img src="images/svg/bank.svg" alt="icon">
                            </div>
                            <div class="menu_text">
                                Банкоматы
                            </div>
                        </a>
                        <!-- <a href="#" class="menu_item">
                            <div class="menu_icon">
                                <img src="images/svg/ask.svg" alt="icon">
                            </div>
                            <div class="menu_text">
                                Помощь
                            </div>
                        </a> -->
                        <form action="#" class="search_form">
                            <div class="search_input">
                                <input type="text" placeholder="Поиск">
                            </div>
                            <div class="loupe">
                                <img src="images/svg/search.svg" alt="icon">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- ---------------------------- -->
        <nav class="navs">
            <div class="auto_container">
                <div class="nav_wrap active" id="top_nav-1">
                    <a href="#" class="nav_link">
                        Платежи
                    </a>
                    <a href="#" class="nav_link">
                        Кредиты
                    </a>
                    <a href="#" class="nav_link">
                        Вклады
                    </a>
                    <a href="#" class="nav_link">
                        Денежные пеереводы
                    </a>
                    <a href="#" class="nav_link">
                        Карты
                    </a>
                    <a href="#" class="nav_link">
                        Онлайн - заявки
                    </a>
                    <a href="#" class="nav_link">
                        О банке
                    </a>
                </div>
                <div class="nav_wrap" id="top_nav-2">
                    <a href="#" class="nav_link">
                        Кредиты
                    </a>
                    <a href="#" class="nav_link">
                        Вклады
                    </a>
                    <a href="#" class="nav_link">
                        Денежные пеереводы
                    </a>
                    <a href="#" class="nav_link">
                        Карты
                    </a>
                    <a href="#" class="nav_link">
                        Онлайн - заявки
                    </a>
                </div>
                <div class="nav_wrap" id="top_nav-3">
                    <a href="#" class="nav_link">
                        Карты
                    </a>
                    <a href="#" class="nav_link">
                        Онлайн - заявки
                    </a>
                    <a href="#" class="nav_link">
                        О банке
                    </a>
                </div>
            </div>
        </nav>
    </header>
    <!-- Header end =========================================== -->

    <!-- Breadcrumb =============================================== -->
    <div class="breadcrumb">
        <div class="auto_container">
            <div class="crumb_wrap">
                <a href="#" class="crumb_item">
                    Главная
                </a>
                <a href="#" class="crumb_item">
                    Физические лица
                </a>
                <div class="crumb_item">
                    Карты
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb end =========================================== -->





    @yield('page')







<!-- Footer ================================================ -->
<footer class="footer">
        <div class="auto_container">
            <div class="footer_wrap">
                <div class="footer_inner">
                    <div class="foot_col">
                        <div class="foot_title">
                            Физические лица
                        </div>
                        <div class="foot_box">
                            <a href="#" class="foot_link">Платежи</a>
                            <a href="#" class="foot_link">Кредиты</a>
                            <a href="#" class="foot_link">Вклады</a>
                            <a href="#" class="foot_link">Денежные переводы</a>
                            <a href="#" class="foot_link">Карты</a>
                            <a href="#" class="foot_link">Тарифы</a>
                            <a href="#" class="foot_link">Оплата коммунальных услуг</a>
                        </div>
                    </div>

                    <div class="foot_col">
                        <div class="foot_title">
                            Предприниматели
                        </div>
                        <div class="foot_box">
                            <a href="#" class="foot_link">Расчетно-кассовые операции</a>
                            <a href="#" class="foot_link">Кредиты</a>
                            <a href="#" class="foot_link">Тарифы</a>
                            <a href="#" class="foot_link">E-commerce</a>
                        </div>
                    </div>

                    <div class="foot_col">
                        <div class="foot_title">
                            Юридические лица
                        </div>
                        <div class="foot_box">
                            <a href="#" class="foot_link">Расчетно-кассовые операции</a>
                            <a href="#" class="foot_link">Кредиты</a>
                            <a href="#" class="foot_link">Тарифы</a>
                            <a href="#" class="foot_link">Помощь</a>
                            <a href="#" class="foot_link">Филиалы банка</a>
                            <a href="#" class="foot_link">Банкоматы</a>
                        </div>
                    </div>

                    <div class="foot_col">
                        <div class="foot_title">
                            Контакты
                        </div>
                        <div class="foot_box">
                            <div class="foot_link">
                                744013, Туркменистан, г.Ашхабад, ул. Героя Туркменистана Атамурата
                                Ниязова, 154
                            </div>
                            <div class="foot_link">(99312) 44-48-37</div>
                            <div class="foot_link">(99312) 22-73-23</div>
                            <a href="#" class="foot_link">E-mail:info@halkbank.gov.tm</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>

    <section class="copyright">
        <div class="auto_container">
            <div class="copy_text">
                © TPTB "HALKBANK", 2013-2019 All rights reserved | Политика Конфиденциальности
            </div>
        </div>
    </section>
    <!-- Footer end ============================================ -->

    <script src="js/jquery.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/slider.js"></script>
    <script src="js/custom-select.js"></script>
    <script src="js/mian.js"></script>
</body>

</html>