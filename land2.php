<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <script type="text/javascript" src="scripts/jquery.maskedinput.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="container-fluid">

    <!-- Header -->
    <div class="row">
        <div class="col-md-12 header">
                    <img src="img/logo.png" class="logo">
        </div>
    </div>
    <!-- //Header -->

    <!-- Content -->
    <div class="row content">
        <div class="col-md-6 content-block">

            <div class="leftInfoBlock">
                <div class="leftInfoBlockHeader">
                    <p>Требование к лицу, для успешного рассмотрения заявки на кредит:</p>
                </div>
                <div class="leftInfoBlockBody">
                    <p>
                    <ul>
                        <li>Проживание Алматы, Астана</li>
                        <li>Наличие пенсионных отчислений</li>
                        <li>Возраст от 21 до 58 лет</li>
                        <li>Наличие Паспорта или водительских прав</li>
                    </ul>
                    <h2>Условия пакета "Кредит без залога"</h2>
                    <ul>
                        <li>Максимальная сумма кредита 2 500 000 KZT/ 13 000 USD</li>
                        <li>Срок кредита от 3 до 48 месяцев</li>
                        <li>Годовая ставка от 12% KZT \ 17% USD годовых*</li>
                        <li>Максимальная годовая ставка 32% KZT*</li>
                    </ul>
                    <h6>*ГЭСВ 27% KZT \ 19,7% USD</h6>
                    <p style="font-size: 10px;">(Пример расчета: 100 000 KZT под 32% годовых = сумма к оплате 132 000 KZT)</p>
                    </p>
                </div>
            </div>

        </div>
        <div class="col-md-6 content-block">

            <div class="form">
                <div class="formHeaderBG"></div>
                <div class="formHeader">Для оформления кредита обязательно наличие пенсионных отчислений</div>
                <div class="formBody">
                    <form method="post" action="thanks.php">
                        <input type="hidden" name="transaction_id" value="<?php echo $_GET["utm_campaign"] ?>">
                        <input type="hidden" name="affiliate_id" value="<?php echo $_GET["utm_term"] ?>">
                        <input type="hidden" name="source" value="<?php echo $_GET["utm_content"] ?>">
                        <input type="hidden" name="land" value="landing_2">
                        <div class="input">
                            <input type="text" name="name" value="Имя" onfocus="if (this.value == 'Имя') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Имя';}">
                            <!--<img src="img/form_icon_name.png">-->
                        </div>
                        <div class="input">
                            <input type="text" id="phone" name="phone" placeholder="Телефон">
                            <!--<img src="img/form_icon_phone.png">-->
                        </div>
                        <div class="input">
                            <input type="text" name="earn" value="Ежемесячный доход" onfocus="if (this.value == 'Ежемесячный доход') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Ежемесячный доход';}">
                            <!--<img src="img/form_icon_t.png" style="margin: 0 9px 9px 0;">-->
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" id="age" name="age" checked> Подтверждаю, что мой возраст от 21 года до 58 лет</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" id="age" name="age" checked> Подтверждаю, что согласен с
                            <a href="data.php" style="color: #f0f0f0;" target="_blank">обработкой моих
                                персональных данных</a></label>
                        </div>
                        <input id="credit-button" type="submit" value="ОТПРАВИТЬ ЗАЯВКУ">
                    </form>

                </div>
            </div>
            <div>
                <div class="cities"><p class="text-center">Предложение действует <b>ТОЛЬКО</b> для жителей городов Алматы и Астана</p></div>
            </div>

        </div>
    </div>
    <!-- //Content -->

    <!-- Content bottom -->
    <div class="row info-block">
        <!--<div class="">-->
            <div class="col-md-4">
                <span class="big-red">1&nbsp;</span>
                <span class="big_black">ДОКУМЕНТ</span>
            </div>
            <div class="col-md-4 info-block-middle">
                <span class="big_black">ДО&nbsp;</span><span class="big-red">2 500 000&nbsp; Т&nbsp;</span>
                <span class="big_black">БЕЗ ЗАЛОГА</span>
            </div>
            <div class="col-md-4">
                <span class="big_black">ДО&nbsp;</span><span class="big-red">48&nbsp;</span>
                <span class="big_black">МЕСЯЦЕВ</span>
            </div>
        <!--</div>-->
    </div>
    <!-- //Content bottom -->

    <!-- Footer -->
    <div class="row">
        <div class="col-md-12 footer">
            <div class="col-md-4">
                <img src="img/copyright.png" class="footer-img"></br>
                <img src="img/license.png" class="footer-img"></br>
                <a href="privacy.php" target="_blank">Политика конфеденциальности</a>
            </div>
            <div class="col-md-4" style="height: 40px;"></div>
            <div class="col-md-4">
                <p class="footer_p">г. Алматы, ул. Фурманова, 103, т. 331-66-77</p>
                <p class="footer_p">г. Алматы, ул. Фурманова, 187 Б, т. 331-66-77</p>
                <p class="footer_p">г. Астана, ул. Байтурсынова, 5 ЖК Highvill, Блок D2, т. 55-41-44</p>
                <p class="footer_p">Call-center: 6161</p>
            </div>
        </div>
    </div>
    </div>
    <!-- //Footer -->
</div>
</div>
<script type="text/javascript">
    jQuery(function($){
        $("#phone").mask("+7 (999) 999-9999");
    });
</script>

<script>
    $('#credit-button').click(function() {
        ga('send', 'event', 'credit-button', 'click');
    });
</script>
<!-- Rating@Mail.ru counter -->
<script type="text/javascript">
    var _tmr = window._tmr || (window._tmr = []);
    _tmr.push({id: "2793446", type: "pageView", start: (new Date()).getTime()});
    (function (d, w, id) {
        if (d.getElementById(id)) return;
        var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;
        ts.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//top-fwz1.mail.ru/js/code.js";
        var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
        if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
    })(document, window, "topmailru-code");
</script><noscript><div style="position:absolute;left:-10000px;">
        <img src="//top-fwz1.mail.ru/counter?id=2793446;js=na" style="border:0;" height="1" width="1" alt="Рейтинг@Mail.ru" />
    </div></noscript>
<!-- //Rating@Mail.ru counter -->



<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter38303090 = new Ya.Metrika({
                    id:38303090,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true,
                    trackHash:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/38303090" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-72231509-13', 'auto');
    ga('send', 'pageview');

</script>
</body>
</html>