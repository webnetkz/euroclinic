
<?php
 if(!empty($_POST['nameInp'])) {
    var_dump($_POST);
 }
?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <title>Emirmed</title>

        <meta charset="UTF-8">
        <meta name="theme-color" content="rgb(255, 255, 255)">
        <meta name="author" content="Emirmed">
        <meta name="description" content="Медицинский центр Emirmed, режим работы круглосуточно без выходных и праздников.">
        <meta name="keywords" content="УЗИ круглосуточно,
        уролог круглосуточно,
        гинеколог круглосуточно,
        анализы круглосуточно,
        ЛОР круглосуточно">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="index, follow">

        <link rel="shortcut icon" href="/public/img/miniLogoEmirmed.png" type="image/png">
        <link rel="stylesheet" href="/public/styles/style.css">
        <link rel="stylesheet" href="/public/styles/mobileStyle.css">
        <link rel="manifest" href="/manifest.json">

    </head>

    <body>

        <div id="all">

            <header>
                
                <ul class="menuHeader">
                    <li>
                        <a href="#" class="menuLink">
                            Главная
                        </a>
                    </li>
                    <li>
                        <a href="/pages/uslugi.php" class="menuLink">
                            Услуги
                        </a>
                    </li>
                    <li>
                        <a href="/pages/price.php" class="menuLink">
                            Цены
                        </a>
                    </li>
                    <li>
                        <a href="/pages/doctors.php" class="menuLink">
                            Врачи
                        </a>
                    </li>
                    <li>
                        <a href="/pages/clinik.php" class="menuLink">
                            Клиника
                        </a>
                    </li>
                    <li>
                        <a href="/pages/news.php" class="menuLink">
                            Новости
                        </a>
                    </li>
                    <li>
                        <a href="/pages/contact.php" class="menuLink">
                            Контакты
                        </a>
                    </li>
                </ul>

                <p class="numberPhone">+7 707 555-05-78 / +7 727 354-46-86</p>    

                <div class="blockLogo">
                    <a href="#">
                        <img src="/public/img/logoEmirmed.png" alt="logotype for Emirmed" class="logotype">
                    </a>
                </div>

            </header>

            <div id="content">
                <div class="decoration1"></div>
                <div class="decoration2"></div>
                <div class="decoration3"></div>
                    <div class="decoration4"></div>
                    <div class="decoration5"></div>
                    <div class="decoration6"></div>
                    <div class="decoration7"></div>
                    <div class="decoration8"></div>
            </div>

            <footer>

                    <div id="footerStart">
                            <h3 class="contactHeader">Навигация по сайту:</h3>
                        <hr class="footer">
                        <ul class="menuFooter">
                            <li>
                                <a href="#" class="footerMenuItem">
                                    Главная
                                </a>
                            </li>
                            <li>
                                <a href="/pages/uslugi.php" class="footerMenuItem">
                                    Услуги
                                </a>
                            </li>
                            <li>
                                <a href="/pages/price.php" class="footerMenuItem">
                                    Цены
                                </a>
                            </li>
                            <li>
                                <a href="/pages/doctors.php" class="footerMenuItem">
                                    Врачи
                                </a>
                            </li>
                            <li>
                                <a href="/pages/clinik.php" class="footerMenuItem">
                                    Клиника
                                </a>
                            </li>
                            <li>
                                <a href="/pages/news.php" class="footerMenuItem">
                                    Новости
                                </a>
                            </li>
                            <li>
                                <a href="/pages/contact.php" class="footerMenuItem">
                                    Контакты
                                </a>
                            </li>
                        </ul>
                    </div>

                <a href="#">
                    <img src="/public/img/logoEmirmed.png" alt="logotype emirmed" class="footerLogotype">
                </a>
                <p class="date">
                    © 2019 Все права защищены.
                    <a href="#" class="indexLink">Emirmed</a>
                </p>

                    <div id="footerEnd">
                            <h3 class="contactHeader">Контакты:</h3>
                        <hr class="footer">
                    </div>

            </footer>

        </div> <!-- END DIV #ALL-->

        <div class="phone" onclick="handlerForm();">
            <img src="/public/img/phone-call.svg" alt="pnone icon" class="phone_icon">
        </div>

        <form action="index.php" method="POST" class="hiddenForm" id="formPhone">
            <input type="text" autocomplete="off" class="inpPhone" placeholder="Ваше имя" name="nameInp">
            <input type="text" autocomplete="off" class="inpPhone" placeholder="номер телефона" name="phoneInp">
            <input type="submit" value="заказать звонок" class="inpPhone phoneBtn" name="btnInp">
        </form>

        <div class="workTime">
            <p>Круглосуточно 24/7</p>
        </div>

        <script>
             // Проверка на поддержку service worker
            if('serviceWorker' in navigator) {
                navigator.serviceWorker
                    .register('/sw.js')
                    .then(function() { console.log("Service Worker Registered"); });
            }
        </script>
        <script>
            // PHONE FORM FUNCTION VISIBLE AND HIDDEN
            function handlerForm() {
                var form = document.querySelector('#formPhone');
                var formClass = form.getAttribute('class');

                switch(formClass) {
                    case 'hiddenForm':
                    form.setAttribute('class', 'visibleForm');
                    break;

                    case 'visibleForm':
                    form.setAttribute('class', 'hiddenForm');
                    break;
                }
            }

            setInterval(
                `var form = document.querySelector('.phone');
                form.setAttribute('onclick', 'handlerForm();');`
            ,500
            );
        </script>
        <script src="/public/scripts/main.js"></script>
    </body>
</html>

