
<?php
 if(!empty($_POST['nameInp'])) {
    var_dump($_POST);
 }
?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <title>Euroclinic</title>

        <meta charset="UTF-8">
        <meta name="theme-color" content="rgb(255, 255, 255)">
        <meta name="author" content="Emirmed">
        <meta name="description" content="Медицинский центр Emirmed, режим работы круглосуточно без выходных и праздников. Вывод из запоя">
        <meta name="keywords" content="Вывод из запоя круглосуточно, медицинский центр круглосуточно, круглосуточный таксиколог, круглосуточный нарколог">
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
            
                <div class="one">
                    <p class="textS">КРУГЛОСУТОЧНО 24/7</p>
                    <img src="/public/img/24.svg" alt="icons 24 hours">
                </div>
                <a href="#">
                    <div class="two">
                        <img src="/public/img/logoEmirmed.png" alt="Logotype emirmed">
                    </div>
                 </a>
                <div class="three">
                    <p class="callBack" onclick="handlerForm();">заказать звонок</p>
                    <p class="number">
                        +7 707 555 05 78
                    </p>
                        <br>
                    <p class="number">
                        +7 727 354 46 86
                    </p>
                </div>

            </header>
            
            <div id="content">
                    

                <div class="meddleText">
                    <h2>Все процедуры оказываются круглосуточно</h2>
                    <h2 style="font-size: 2em;">Без праздников и выходных</h2>
                </div>

                
                
            </div>

            <footer>


                   
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

