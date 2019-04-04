
<?php
 if(!empty($_POST['nameInp']) && !empty($_POST['phoneInp'])) {

    $name = htmlspecialchars($_POST['nameInp']);
    $phone = htmlspecialchars($_POST['phoneInp']);
    
    $to      = 'emirmed@mail.ru';
    $subject = 'Вывод из запоя';
    $message = 'Имя: ' . $name . '; Номер телефона для связи: ' . $phone . ';';
    $headers = 'From: lead@euroclinic.kz' . "\r\n" .
    'Reply-To: dbqqbq@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

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
                        +7 707 394 99 81
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
                    <h1 style="font-size: 2em;">Без праздников и выходных</h1>
                        <hr style="border-color: rgb(255, 255, 255); margin: 10px;">
                    <h3>+7 707 394 99 81 или</h3>
                    <h3>+7 727 354 46 86</h3>

                        <a href="https://emirmed.kz/vyvod-iz-zapoya/" class="hr">подробней</a>
                </div>

                
                
            </div>

            <footer>

            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1728.3879109509546!2d76.90879461367192!3d43.23485405832976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2skz!4v1554352800652!5m2!1sru!2skz" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                   
            </footer>

        </div> <!-- END DIV #ALL-->

        <a href="tel:+77073949981" style="text-decoration: none; outline: none;">
            <div class="phone">
                <img src="/public/img/phone-call.svg" alt="pnone icon" class="phone_icon">
            </div>
        </a>        

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

