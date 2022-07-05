<?php

// Читаем куку языка
$lang = @$_COOKIE['lang'];
if (!$lang) {
    $localePreferences = explode(",",$_SERVER['HTTP_ACCEPT_LANGUAGE']);
    if(is_array($localePreferences) && count($localePreferences) > 0) $_SESSION['browser_locale'] = $localePreferences[0];
    if(strpos($_SESSION['browser_locale'], 'ru')!==false) $lang = 'ru';
    if(strpos($_SESSION['browser_locale'], 'de')!==false) $lang = 'de';
    if(strpos($_SESSION['browser_locale'], 'sv')!==false) $lang = 'sv';
    if(strpos($_SESSION['browser_locale'], 'en')!==false ||
    (strpos($_SESSION['browser_locale'], 'ru')==true &&
        strpos($_SESSION['browser_locale'], 'de')==true &&
        strpos($_SESSION['browser_locale'], 'sv')==true)) $lang = 'en';
}
//$titleRU = 'Дизайн-бюро Артёма Горбунова';
//$titleEN = 'Artem Gorbunov Design Bureau';
?>


<!DOCTYPE html>
<!--<html lang="en">-->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/logo.png" type="image/png">
    <title>NORDPROMOTION - Создание и продвижение сайтов.</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <link rel="stylesheet" type="text/css" href="/css/dd.min.css" />
    <script src="js/dd.min.js"></script>
</head>

<style>
    BODY.en :lang(ru),
    BODY.en :lang(sv),
    BODY.en :lang(de),

    BODY.de :lang(en),
    BODY.de :lang(sv),
    BODY.de :lang(ru),

    BODY.sv :lang(ru),
    BODY.sv :lang(en),
    BODY.sv :lang(de),

    BODY.ru :lang(en),
    BODY.ru :lang(sv),
    BODY.ru :lang(de) {
        display: none;
    }

    .social{display:inline-block}.social a{display:block;width:48px;height:48px;margin:0 10px 10px 0;text-align:center;color:#fff;border:1px solid #ccc;border-radius:24px;box-shadow:0 2px 4px rgba(0,0,0,0.15)}.social a:hover{border-color:#888;opacity:.8}.social svg{margin-top:7px;width:32px;height:32px}.facebook a{background:#3b5998}.instagram a{background:#3f729b}.telegram a{background:#249bd7}.vk a{background:#4a76a8}.whatsapp a{background:#50b154}

    .footer_t
    {
        padding: 10px; display: table-cell;justify-content: center;width:32%;float: left; display: inline-block;margin-left: 5px
    }
    @media (max-width: 768px) {
        .footer_t
        {
            width: 100%;
        }
    }
</style>

<body data-spy="scroll" data-target="#mainNav" data-offset="70" class="<?= $lang; ?>">

<!--================Header Menu Area =================-->
<header class="header_area">
    <div class="main_menu" id="mainNav">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="/"><img src="img/logo.png" alt="" style="height: 50px;">
                    <span style="color: rgb(38, 0, 118);"><span style="font-size: 24px; color: white">
									<span style="font-family: &quot;Montserrat Bold&quot;;"><strong>NordPromotion</strong></span></span></span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--RU-->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent" lang="ru">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="#home">О НАС</a></li>
                        <li class="nav-item"><a class="nav-link" href="#feature">Продвижение в интернете</a></li>
                        <li class="nav-item"><a class="nav-link" href="#price">Прайс</a>
                        <li class="nav-item"><a class="nav-link" href="#reviews">Отзывы</a>
                        <li class="nav-item"><a class="nav-link" href="#contacts">Контакты</a></li>
                    </ul>
                </div>
                <!--DE-->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent" lang="de">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="#home">Über uns</a></li>
                        <li class="nav-item"><a class="nav-link" href="#feature">Förderung der Internetpräsenz</a></li>
                        <li class="nav-item"><a class="nav-link" href="#price">Preis</a>
                        <li class="nav-item"><a class="nav-link" href="#reviews">Bewertungen</a>
                        <li class="nav-item"><a class="nav-link" href="#contacts">Kontakt</a></li>
                    </ul>
                </div>
                <!--EN-->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent" lang="en">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="#home">ABOUT US</a></li>
                        <li class="nav-item"><a class="nav-link" href="#feature">Internet promotion</a></li>
                        <li class="nav-item"><a class="nav-link" href="#price">Price</a>
                        <li class="nav-item"><a class="nav-link" href="#reviews">Reviews</a>
                        <li class="nav-item"><a class="nav-link" href="#contacts">Contacts</a></li>
                    </ul>
                </div>
            </div>
            <select name="lang_menu" is="ms-dropdown" id="tech">
                <option value="ru" <?php if($lang=='ru') echo 'selected="selected"';?> data-image="img/lang/ru.png">RU</option>
                <option value="en" <?php if($lang=='en') echo 'selected="selected"';?> data-image="img/lang/eng.png">ENG</option>
                <option value="sv" <?php if($lang=='sv') echo 'selected="selected"';?> data-image="img/lang/swe.png">SWE</option>
                <option value="de" <?php if($lang=='de') echo 'selected="selected"';?> data-image="img/lang/de.png">DE</option>
            </select>
            <style>
                .nice-select{
                    display: none;
                }
            </style>

        </nav>
    </div>
</header>
<!--================Header Menu Area =================-->
<!--================Home Banner Area =================-->
<section class="home_banner_area">
    <div class="banner_inner">
        <div class="container">
            <div class="row banner_content" lang="ru">
                <div class="col-lg-9">
                    <h2>Разработка и продвижение продающих сайтов!</h2>
                    <p><h3>Закажите качественный сайт
                        по разумной цене!</h3></p>
                </div>
                <div class="col-lg-33">
                    <div class="banner_map_img" style="width: 130%">
                        <img class="img-fluid" src="img/banner/Bg_Img.png" alt=""><!--<img class="img-fluid" src="img/banner/right-mobile.png" alt="">-->
                    </div>
                </div>
            </div>
            <div class="row banner_content" lang="de">
                <div class="col-lg-9">
                    <h2>Entwicklung und Förderung von
                        Verkaufsseiten!</h2>
                    <p><h3>Lassen Sie sich eine qualitativ hochwertige
                        Website zu einem vernünftigen Preis
                        erstellen!
                    </h3></p>
                </div>
                <div class="col-lg-33">
                    <div class="banner_map_img" style="width: 130%">
                        <img class="img-fluid" src="img/banner/Bg_Img.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row banner_content" lang="en">
                <div class="col-lg-9">
                    <h2>Development and promotion of selling sites!</h2>
                    <p><h3>Order a quality website at a reasonable price!</h3></p>
                </div>
                <div class="col-lg-33">
                    <div class="banner_map_img" style="width: 130%">
                        <img class="img-fluid" src="img/banner/Bg_Img.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

<!--================Home Banner Area =================-->
<section class="interior_area" id="home" lang="ru">
    <div class="container">
        <div align="center">
            <h1 style="color: #000000; font-size: 50px">ВАШИ ЦЕЛИ = НАШИ ЦЕЛИ</h1><h4>Пара слов о том как мы работаем и что делаем.</h4>
        </div>
        <div class="interior_inner row">
            <div class="col-lg-6">
                <img class="img-fluid" src="img/banner/banner-1.png" alt="">
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="interior_text">
                    <p>Наша команда уже более 10 лет занимается созданием и продвижением сайтов.
                        <br><br>
                        Наш приоритет - достижение целей заказчика. Как правило, мы работаем с коммерческими проектами, целью которых является получение прибыли. Нам важно не просто сдать красивый сайт заказчику, а вместе прийти к нужному результату - эффективному прибыльному сайту, с трафиком, лидами и прибылью.
                        <br><br>
                        Уже на этапе разработки мы продумываем как будет работать сайт, как лучше его продвигать, с какими сервисами понадобиться интеграция, какая должны быть структура сайта для более высокой конверсии и прорабатываем другие важные вопросы, о которых не задумывается узкий специалист - дизайнер или программист.</p>
                    <!--<a class="main_btn" href="#">See Details</a>-->
                </div>
            </div>
        </div>
    </div>
</section>
<section class="interior_area" id="home" lang="de">
    <div class="container">
        <div align="center">
            <h1 style="color: #000000; font-size: 50px">IHRE ZIELE = UNSERE ZIELE</h1><h4>Ein paar Worte darüber, wie wir arbeiten
                und was wir tun.</h4>
        </div>
        <div class="interior_inner row">
            <div class="col-lg-6">
                <img class="img-fluid" src="img/banner/banner-1.png" alt="">
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="interior_text">
                    <p>Unser Team beschäftigt sich seit mehr als
                        10 Jahren mit der Erstellung, Positionierung
                        und Weiterentwicklung von Websites.
                        <br><br>
                        Unsere Priorität ist die Verwirklichung der
                        Ziele des Kunden. In der Regel arbeiten wir
                        an kommerziellen Projekten mit der
                        Zielsetzung den gewünschten Gewinn zu
                        erreichen. Es ist uns wichtig, nicht nur eine
                        schöne Website an den Kunden zu
                        übergeben, sondern gemeinsam das
                        vereinbarte Ergebnis zu erzielen - eine
                        effektive, profitable Website mit Traffic,
                        Leads und Gewinnen.
                        <br><br>
                        Bereits in der Entwicklungsphase überlegen
                        wir, wie die Website funktionieren soll, wir
                        sie am besten verbessern können, welche
                        Dienste und Website-Struktur für eine
                        höhere Konvertierung benötigt wird.
                        Darüber hinaus stellen wir uns auch
                        unvorhersehbaren Fragen, an die kaum ein
                        Designer oder Programmierer denkt.
                </div>
            </div>
        </div>
    </div>
</section>
<section class="interior_area" id="home" lang="en">
    <div class="container">
        <div align="center">
            <h1 style="color: #000000; font-size: 50px">YOUR GOALS = OUR GOALS</h1><h4>A few words about how we work and what we do.</h4>
        </div>
        <div class="interior_inner row">
            <div class="col-lg-6">
                <img class="img-fluid" src="img/banner/banner-1.png" alt="">
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="interior_text">
                    <p>Our team has been creating and promoting websites for over 10 years.
                        <br><br>
                        Our priority is to achieve the goals of the customer. As a rule, we work with commercial projects, the purpose of which is to make a profit. It is important for us not just to hand over a beautiful site to the customer, but to come together to the desired result - an effective profitable site, with traffic, leads and profit.
                        <br><br>
                        Already at the development stage, we think over how the site will work, how best to promote it, what services will need integration, what should be the structure of the site for higher conversion and work out other important issues that a narrow specialist - a designer or a programmer - does not think about.
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

<!--================Feature Area =================-->
<section lang="ru" class="feature_area p_120">
    <div class="container">
        <div class="main_title">
            <h4>Вот что мы делаем особенно хорошо:</h4>
        </div>

        <div class="feature_inner row">
            <div class="col-lg-3 col-md-6">
                <div class="feature_item" align="center">
                    <svg class="svgicon" id="svg27" style="fill: rgb(38, 0, 118);width: 75px" preserveAspectRatio="xMidYMid meet"
                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
                        <rect x="0" y="0" width="128" height="128" style="fill: transparent" rx="0%" ry="0%"></rect>
                        <g transform="scale(1) translate(0, 0)">
                            <path class="st0" d="M117.022,23.504H17.756c-5.483,0-9.779,3.572-9.779,8.133v1.647v10.032v51.398 c0,5.393,4.388,9.779,9.779,9.779h92.487c5.392,0,9.778-4.387,9.778-9.779V43.632V26.504 C120.022,24.848,118.679,23.504,117.022,23.504z M81.971,33.933c0-1.641,1.328-2.97,2.966-2.97c1.64,0,2.968,1.329,2.968,2.97 c0,1.64-1.328,2.966-2.968,2.966C83.299,36.899,81.971,35.573,81.971,33.933z M91.75,33.933c0-1.641,1.328-2.97,2.968-2.97 c1.638,0,2.967,1.329,2.967,2.97c0,1.64-1.329,2.966-2.967,2.966C93.079,36.899,91.75,35.573,91.75,33.933z M101.53,33.933 c0-1.641,1.33-2.97,2.969-2.97c1.638,0,2.967,1.329,2.967,2.97c0,1.64-1.329,2.966-2.967,2.966 C102.86,36.899,101.53,35.573,101.53,33.933z M110.244,98.495H17.756c-2.084,0-3.779-1.695-3.779-3.779V46.133l100.045,0.484 v48.098C114.022,96.799,112.327,98.495,110.244,98.495z"></path><g id="Go_to_Web"></g></g></svg>
                    <h4>Создание сайта с нуля</h4>
                    <p>Сайты-визитки, сайты электронной коммерции, интернет-порталы, социальные платформы, вики-сайты, лэндинг</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="feature_item" align="center">
                    <svg class="svgicon" id="svg32" style="fill: rgb(38, 0, 118);width: 75px" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128"><rect x="0" y="0" width="128" height="128" style="fill: transparent" rx="0%" ry="0%"></rect><g transform="scale(1) translate(0, 0)"><path d="M101.322,27.826h-6.712H26.68c-2.796,0-5.06,2.265-5.06,5.059v49.971c0,2.795,2.264,5.061,5.06,5.061 c0,0,0.063,0.01,0.156,0.02c0.108,0.015,0.275,0.037,0.49,0.063c0.087,0.01,0.182,0.022,0.284,0.034 c0.07,0.01,0.144,0.018,0.222,0.027c0.045,0.005,0.095,0.012,0.143,0.017c0.339,0.042,0.739,0.091,1.196,0.146 c0.075,0.008,0.151,0.018,0.229,0.027c0.132,0.015,0.27,0.031,0.41,0.049c0.108,0.012,0.22,0.024,0.333,0.039 c0.15,0.017,0.301,0.034,0.459,0.054c0.202,0.021,0.409,0.046,0.623,0.07c0.182,0.022,0.373,0.044,0.563,0.066 c0.082,0.01,0.163,0.02,0.246,0.026c0.196,0.024,0.396,0.047,0.599,0.068c0.087,0.01,0.177,0.02,0.266,0.032 c0.421,0.046,0.856,0.095,1.308,0.144c0.052,0.005,0.104,0.013,0.157,0.018c0.233,0.026,0.473,0.051,0.714,0.078 c0.086,0.01,0.173,0.02,0.261,0.029c0.251,0.026,0.504,0.054,0.763,0.08c0.06,0.008,0.122,0.013,0.183,0.02 c0.478,0.052,0.968,0.103,1.469,0.154c0.113,0.012,0.225,0.021,0.338,0.034c0.251,0.026,0.505,0.051,0.76,0.078 c0.129,0.012,0.26,0.026,0.39,0.039c0.251,0.024,0.503,0.051,0.759,0.075c0.146,0.015,0.295,0.029,0.443,0.044 c0.427,0.042,0.857,0.083,1.293,0.125c0.178,0.017,0.356,0.034,0.536,0.051c0.228,0.02,0.456,0.042,0.685,0.063 c0.226,0.02,0.452,0.042,0.68,0.062c0.198,0.02,0.395,0.036,0.593,0.054c0.395,0.036,0.791,0.07,1.189,0.104 c0.179,0.015,0.359,0.032,0.54,0.047c0.266,0.021,0.532,0.046,0.8,0.068c0.191,0.015,0.382,0.031,0.574,0.046 c0.3,0.024,0.6,0.049,0.901,0.073c0.143,0.01,0.286,0.022,0.43,0.034c0.427,0.032,0.854,0.063,1.28,0.096 c0.147,0.012,0.294,0.021,0.441,0.031c0.229,0.018,0.459,0.034,0.688,0.049c0.985,0.068,1.966,0.135,2.937,0.19 c0.05,0.003,0.1,0.008,0.15,0.01c1,0.059,1.988,0.11,2.956,0.151c0.044,0.003,0.089,0.005,0.133,0.008 c0.354,0.015,0.705,0.029,1.053,0.041c-0.248,0.615-0.497,1.289-0.759,2.044c-6.009,0.581-10.226,1.945-10.226,3.537 c0,2.119,7.492,3.841,16.729,3.841c9.24,0,16.729-1.722,16.729-3.841c0-1.592-4.215-2.954-10.222-3.537 c-0.266-0.774-0.516-1.46-0.758-2.078c15.691-0.571,31.527-2.803,31.527-2.803c2.794,0,5.059-2.266,5.059-5.061V32.885 C106.38,30.091,104.116,27.826,101.322,27.826z M101.377,32.885v49.771H26.444V32.885H101.377z"></path><path d="M34.574,59.743h12.259l2.32,3.278c0.193,0.192,0.501,0.192,0.695,0l2.32-3.278h0.878c1.345,0,2.435-1.091,2.435-2.435 V46.551c0-1.347-1.09-2.437-2.435-2.437H34.574c-1.345,0-2.436,1.09-2.436,2.437v10.756C32.138,58.652,33.229,59.743,34.574,59.743 z M36.524,47.369h14.514c0.49,0,0.886,0.396,0.886,0.885c0,0.488-0.396,0.885-0.886,0.885H36.524c-0.488,0-0.885-0.397-0.885-0.885 C35.64,47.765,36.036,47.369,36.524,47.369z M36.524,50.909h14.514c0.49,0,0.886,0.396,0.886,0.885s-0.396,0.885-0.886,0.885 H36.524c-0.488,0-0.885-0.396-0.885-0.885S36.036,50.909,36.524,50.909z M36.524,54.449h14.514c0.49,0,0.886,0.396,0.886,0.884 s-0.396,0.886-0.886,0.886H36.524c-0.488,0-0.885-0.397-0.885-0.886S36.036,54.449,36.524,54.449z"></path><path d="M75.749,55.114h12.259l2.32,3.278c0.191,0.191,0.5,0.191,0.692,0l2.321-3.278h0.877c1.344,0,2.435-1.091,2.435-2.436 V41.921c0-1.345-1.091-2.435-2.435-2.435h-18.47c-1.345,0-2.435,1.09-2.435,2.435v10.757 C73.314,54.023,74.404,55.114,75.749,55.114z M77.698,42.74h14.516c0.488,0,0.884,0.396,0.884,0.885 c0,0.488-0.396,0.885-0.884,0.885H77.698c-0.488,0-0.883-0.397-0.883-0.885C76.815,43.135,77.21,42.74,77.698,42.74z M77.698,46.28 h14.516c0.488,0,0.884,0.396,0.884,0.885s-0.396,0.885-0.884,0.885H77.698c-0.488,0-0.883-0.396-0.883-0.885 S77.21,46.28,77.698,46.28z M77.698,49.819h14.516c0.488,0,0.884,0.397,0.884,0.886s-0.396,0.886-0.884,0.886H77.698 c-0.488,0-0.883-0.397-0.883-0.886S77.21,49.819,77.698,49.819z"></path><path d="M61.277,76.764h12.259l2.319,3.279c0.191,0.19,0.501,0.19,0.692,0l2.32-3.279h0.878c1.344,0,2.436-1.089,2.436-2.437 V63.573c0-1.345-1.092-2.437-2.436-2.437h-18.47c-1.345,0-2.436,1.091-2.436,2.437v10.755 C58.842,75.675,59.933,76.764,61.277,76.764z M63.226,64.391h14.516c0.489,0,0.884,0.396,0.884,0.885 c0,0.487-0.396,0.886-0.884,0.886H63.226c-0.488,0-0.883-0.398-0.883-0.886C62.343,64.787,62.738,64.391,63.226,64.391z M63.226,67.931h14.516c0.489,0,0.884,0.396,0.884,0.887c0,0.488-0.396,0.884-0.884,0.884H63.226c-0.488,0-0.883-0.396-0.883-0.884 C62.343,68.327,62.738,67.931,63.226,67.931z M63.226,71.471h14.516c0.489,0,0.884,0.396,0.884,0.884 c0,0.491-0.396,0.887-0.884,0.887H63.226c-0.488,0-0.883-0.396-0.883-0.887C62.343,71.867,62.738,71.471,63.226,71.471z"></path></g></svg>
                    <h4>Эффективная контекстная реклама</h4>
                    <p>Создание, настройка и ведение эффективных рекламных кампаний в Google Ads и Яндекс Директ</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="feature_item" align="center">
                    <svg class="svgicon" id="svg37" style="fill: rgb(38, 0, 118);width: 75px" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128"><rect x="0" y="0" width="128" height="128" style="fill: transparent" rx="0%" ry="0%"></rect><g transform="scale(1) translate(0, 0)"><path d="M64.001,7C32.521,7,7,32.519,7,64.001C7,95.479,32.521,121,64.001,121C95.479,121,121,95.479,121,64.001 C121,32.519,95.479,7,64.001,7z M83.317,97.11l2.88,6.86l-10.117,4.248l-2.936-6.995c-2.887,0.701-5.899,1.082-9.003,1.082 c-20.995,0-38.015-17.02-38.015-38.013c0-20.996,17.02-38.015,38.015-38.015c20.993,0,38.013,17.019,38.013,38.015 C102.154,78.29,94.582,90.512,83.317,97.11z"></path><path d="M61.355,59.245l18.046,17.186c2.653-3.332,4.243-7.548,4.243-12.138c0-10.772-8.732-19.504-19.503-19.504 c-10.772,0-19.505,8.731-19.505,19.504c0,9.823,7.267,17.949,16.719,19.302V59.245z"></path><polygon points="76.513,87.875 86.073,86.514 64.056,65.545 64.056,95.703 71.346,89.958 77.525,104.684 82.663,102.526 "></polygon></g></svg>
                    <h4>Маркетинг в социальных сетях</h4>
                    <p>Создание, настройка и ведение эффективных рекламных кампаний в социальных сетях.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section lang="en" class="feature_area p_120">
    <div class="container">
        <div class="main_title">
            <h4>Here's what we do especially well:</h4>
        </div>

        <div class="feature_inner row">
            <div class="col-lg-3 col-md-6">
                <div class="feature_item" align="center">
                    <svg class="svgicon" id="svg27" style="fill: rgb(38, 0, 118);width: 75px" preserveAspectRatio="xMidYMid meet"
                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
                        <rect x="0" y="0" width="128" height="128" style="fill: transparent" rx="0%" ry="0%"></rect>
                        <g transform="scale(1) translate(0, 0)">
                            <path class="st0" d="M117.022,23.504H17.756c-5.483,0-9.779,3.572-9.779,8.133v1.647v10.032v51.398 c0,5.393,4.388,9.779,9.779,9.779h92.487c5.392,0,9.778-4.387,9.778-9.779V43.632V26.504 C120.022,24.848,118.679,23.504,117.022,23.504z M81.971,33.933c0-1.641,1.328-2.97,2.966-2.97c1.64,0,2.968,1.329,2.968,2.97 c0,1.64-1.328,2.966-2.968,2.966C83.299,36.899,81.971,35.573,81.971,33.933z M91.75,33.933c0-1.641,1.328-2.97,2.968-2.97 c1.638,0,2.967,1.329,2.967,2.97c0,1.64-1.329,2.966-2.967,2.966C93.079,36.899,91.75,35.573,91.75,33.933z M101.53,33.933 c0-1.641,1.33-2.97,2.969-2.97c1.638,0,2.967,1.329,2.967,2.97c0,1.64-1.329,2.966-2.967,2.966 C102.86,36.899,101.53,35.573,101.53,33.933z M110.244,98.495H17.756c-2.084,0-3.779-1.695-3.779-3.779V46.133l100.045,0.484 v48.098C114.022,96.799,112.327,98.495,110.244,98.495z"></path><g id="Go_to_Web"></g></g></svg>
                    <h4>Building a website from scratch</h4>
                    <p>Business card sites, e-commerce sites, Internet portals, social platforms, wiki sites, landing pages</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="feature_item" align="center">
                    <svg class="svgicon" id="svg32" style="fill: rgb(38, 0, 118);width: 75px" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128"><rect x="0" y="0" width="128" height="128" style="fill: transparent" rx="0%" ry="0%"></rect><g transform="scale(1) translate(0, 0)"><path d="M101.322,27.826h-6.712H26.68c-2.796,0-5.06,2.265-5.06,5.059v49.971c0,2.795,2.264,5.061,5.06,5.061 c0,0,0.063,0.01,0.156,0.02c0.108,0.015,0.275,0.037,0.49,0.063c0.087,0.01,0.182,0.022,0.284,0.034 c0.07,0.01,0.144,0.018,0.222,0.027c0.045,0.005,0.095,0.012,0.143,0.017c0.339,0.042,0.739,0.091,1.196,0.146 c0.075,0.008,0.151,0.018,0.229,0.027c0.132,0.015,0.27,0.031,0.41,0.049c0.108,0.012,0.22,0.024,0.333,0.039 c0.15,0.017,0.301,0.034,0.459,0.054c0.202,0.021,0.409,0.046,0.623,0.07c0.182,0.022,0.373,0.044,0.563,0.066 c0.082,0.01,0.163,0.02,0.246,0.026c0.196,0.024,0.396,0.047,0.599,0.068c0.087,0.01,0.177,0.02,0.266,0.032 c0.421,0.046,0.856,0.095,1.308,0.144c0.052,0.005,0.104,0.013,0.157,0.018c0.233,0.026,0.473,0.051,0.714,0.078 c0.086,0.01,0.173,0.02,0.261,0.029c0.251,0.026,0.504,0.054,0.763,0.08c0.06,0.008,0.122,0.013,0.183,0.02 c0.478,0.052,0.968,0.103,1.469,0.154c0.113,0.012,0.225,0.021,0.338,0.034c0.251,0.026,0.505,0.051,0.76,0.078 c0.129,0.012,0.26,0.026,0.39,0.039c0.251,0.024,0.503,0.051,0.759,0.075c0.146,0.015,0.295,0.029,0.443,0.044 c0.427,0.042,0.857,0.083,1.293,0.125c0.178,0.017,0.356,0.034,0.536,0.051c0.228,0.02,0.456,0.042,0.685,0.063 c0.226,0.02,0.452,0.042,0.68,0.062c0.198,0.02,0.395,0.036,0.593,0.054c0.395,0.036,0.791,0.07,1.189,0.104 c0.179,0.015,0.359,0.032,0.54,0.047c0.266,0.021,0.532,0.046,0.8,0.068c0.191,0.015,0.382,0.031,0.574,0.046 c0.3,0.024,0.6,0.049,0.901,0.073c0.143,0.01,0.286,0.022,0.43,0.034c0.427,0.032,0.854,0.063,1.28,0.096 c0.147,0.012,0.294,0.021,0.441,0.031c0.229,0.018,0.459,0.034,0.688,0.049c0.985,0.068,1.966,0.135,2.937,0.19 c0.05,0.003,0.1,0.008,0.15,0.01c1,0.059,1.988,0.11,2.956,0.151c0.044,0.003,0.089,0.005,0.133,0.008 c0.354,0.015,0.705,0.029,1.053,0.041c-0.248,0.615-0.497,1.289-0.759,2.044c-6.009,0.581-10.226,1.945-10.226,3.537 c0,2.119,7.492,3.841,16.729,3.841c9.24,0,16.729-1.722,16.729-3.841c0-1.592-4.215-2.954-10.222-3.537 c-0.266-0.774-0.516-1.46-0.758-2.078c15.691-0.571,31.527-2.803,31.527-2.803c2.794,0,5.059-2.266,5.059-5.061V32.885 C106.38,30.091,104.116,27.826,101.322,27.826z M101.377,32.885v49.771H26.444V32.885H101.377z"></path><path d="M34.574,59.743h12.259l2.32,3.278c0.193,0.192,0.501,0.192,0.695,0l2.32-3.278h0.878c1.345,0,2.435-1.091,2.435-2.435 V46.551c0-1.347-1.09-2.437-2.435-2.437H34.574c-1.345,0-2.436,1.09-2.436,2.437v10.756C32.138,58.652,33.229,59.743,34.574,59.743 z M36.524,47.369h14.514c0.49,0,0.886,0.396,0.886,0.885c0,0.488-0.396,0.885-0.886,0.885H36.524c-0.488,0-0.885-0.397-0.885-0.885 C35.64,47.765,36.036,47.369,36.524,47.369z M36.524,50.909h14.514c0.49,0,0.886,0.396,0.886,0.885s-0.396,0.885-0.886,0.885 H36.524c-0.488,0-0.885-0.396-0.885-0.885S36.036,50.909,36.524,50.909z M36.524,54.449h14.514c0.49,0,0.886,0.396,0.886,0.884 s-0.396,0.886-0.886,0.886H36.524c-0.488,0-0.885-0.397-0.885-0.886S36.036,54.449,36.524,54.449z"></path><path d="M75.749,55.114h12.259l2.32,3.278c0.191,0.191,0.5,0.191,0.692,0l2.321-3.278h0.877c1.344,0,2.435-1.091,2.435-2.436 V41.921c0-1.345-1.091-2.435-2.435-2.435h-18.47c-1.345,0-2.435,1.09-2.435,2.435v10.757 C73.314,54.023,74.404,55.114,75.749,55.114z M77.698,42.74h14.516c0.488,0,0.884,0.396,0.884,0.885 c0,0.488-0.396,0.885-0.884,0.885H77.698c-0.488,0-0.883-0.397-0.883-0.885C76.815,43.135,77.21,42.74,77.698,42.74z M77.698,46.28 h14.516c0.488,0,0.884,0.396,0.884,0.885s-0.396,0.885-0.884,0.885H77.698c-0.488,0-0.883-0.396-0.883-0.885 S77.21,46.28,77.698,46.28z M77.698,49.819h14.516c0.488,0,0.884,0.397,0.884,0.886s-0.396,0.886-0.884,0.886H77.698 c-0.488,0-0.883-0.397-0.883-0.886S77.21,49.819,77.698,49.819z"></path><path d="M61.277,76.764h12.259l2.319,3.279c0.191,0.19,0.501,0.19,0.692,0l2.32-3.279h0.878c1.344,0,2.436-1.089,2.436-2.437 V63.573c0-1.345-1.092-2.437-2.436-2.437h-18.47c-1.345,0-2.436,1.091-2.436,2.437v10.755 C58.842,75.675,59.933,76.764,61.277,76.764z M63.226,64.391h14.516c0.489,0,0.884,0.396,0.884,0.885 c0,0.487-0.396,0.886-0.884,0.886H63.226c-0.488,0-0.883-0.398-0.883-0.886C62.343,64.787,62.738,64.391,63.226,64.391z M63.226,67.931h14.516c0.489,0,0.884,0.396,0.884,0.887c0,0.488-0.396,0.884-0.884,0.884H63.226c-0.488,0-0.883-0.396-0.883-0.884 C62.343,68.327,62.738,67.931,63.226,67.931z M63.226,71.471h14.516c0.489,0,0.884,0.396,0.884,0.884 c0,0.491-0.396,0.887-0.884,0.887H63.226c-0.488,0-0.883-0.396-0.883-0.887C62.343,71.867,62.738,71.471,63.226,71.471z"></path></g></svg>
                    <h4>Effective contextual advertising</h4>
                    <p>Creation, setup and maintenance of effective advertising campaigns in Google Ads and Yandex Direct</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="feature_item" align="center">
                    <svg class="svgicon" id="svg37" style="fill: rgb(38, 0, 118);width: 75px" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128"><rect x="0" y="0" width="128" height="128" style="fill: transparent" rx="0%" ry="0%"></rect><g transform="scale(1) translate(0, 0)"><path d="M64.001,7C32.521,7,7,32.519,7,64.001C7,95.479,32.521,121,64.001,121C95.479,121,121,95.479,121,64.001 C121,32.519,95.479,7,64.001,7z M83.317,97.11l2.88,6.86l-10.117,4.248l-2.936-6.995c-2.887,0.701-5.899,1.082-9.003,1.082 c-20.995,0-38.015-17.02-38.015-38.013c0-20.996,17.02-38.015,38.015-38.015c20.993,0,38.013,17.019,38.013,38.015 C102.154,78.29,94.582,90.512,83.317,97.11z"></path><path d="M61.355,59.245l18.046,17.186c2.653-3.332,4.243-7.548,4.243-12.138c0-10.772-8.732-19.504-19.503-19.504 c-10.772,0-19.505,8.731-19.505,19.504c0,9.823,7.267,17.949,16.719,19.302V59.245z"></path><polygon points="76.513,87.875 86.073,86.514 64.056,65.545 64.056,95.703 71.346,89.958 77.525,104.684 82.663,102.526 "></polygon></g></svg>
                    <h4>Social media marketing</h4>
                    <p>Creation, setup and maintenance of effective advertising campaigns in social networks.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section lang="de" class="feature_area p_120">
    <div class="container">
        <div class="main_title">
            <h4>Das machen wir besonders gut:</h4>
        </div>

        <div class="feature_inner row">
            <div class="col-lg-3 col-md-6">
                <div class="feature_item" align="center">
                    <svg class="svgicon" id="svg27" style="fill: rgb(38, 0, 118);width: 75px" preserveAspectRatio="xMidYMid meet"
                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
                        <rect x="0" y="0" width="128" height="128" style="fill: transparent" rx="0%" ry="0%"></rect>
                        <g transform="scale(1) translate(0, 0)">
                            <path class="st0" d="M117.022,23.504H17.756c-5.483,0-9.779,3.572-9.779,8.133v1.647v10.032v51.398 c0,5.393,4.388,9.779,9.779,9.779h92.487c5.392,0,9.778-4.387,9.778-9.779V43.632V26.504 C120.022,24.848,118.679,23.504,117.022,23.504z M81.971,33.933c0-1.641,1.328-2.97,2.966-2.97c1.64,0,2.968,1.329,2.968,2.97 c0,1.64-1.328,2.966-2.968,2.966C83.299,36.899,81.971,35.573,81.971,33.933z M91.75,33.933c0-1.641,1.328-2.97,2.968-2.97 c1.638,0,2.967,1.329,2.967,2.97c0,1.64-1.329,2.966-2.967,2.966C93.079,36.899,91.75,35.573,91.75,33.933z M101.53,33.933 c0-1.641,1.33-2.97,2.969-2.97c1.638,0,2.967,1.329,2.967,2.97c0,1.64-1.329,2.966-2.967,2.966 C102.86,36.899,101.53,35.573,101.53,33.933z M110.244,98.495H17.756c-2.084,0-3.779-1.695-3.779-3.779V46.133l100.045,0.484 v48.098C114.022,96.799,112.327,98.495,110.244,98.495z"></path><g id="Go_to_Web"></g></g></svg>
                    <h4>Webseiten Erstellung</h4>
                    <p>Visitenkarten-Websites,
                        E-Commerce-Websites, Internetportale,
                        soziale Plattformen, Wiki-Websites, Landing
                        Pages
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="feature_item" align="center">
                    <svg class="svgicon" id="svg32" style="fill: rgb(38, 0, 118);width: 75px" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128"><rect x="0" y="0" width="128" height="128" style="fill: transparent" rx="0%" ry="0%"></rect><g transform="scale(1) translate(0, 0)"><path d="M101.322,27.826h-6.712H26.68c-2.796,0-5.06,2.265-5.06,5.059v49.971c0,2.795,2.264,5.061,5.06,5.061 c0,0,0.063,0.01,0.156,0.02c0.108,0.015,0.275,0.037,0.49,0.063c0.087,0.01,0.182,0.022,0.284,0.034 c0.07,0.01,0.144,0.018,0.222,0.027c0.045,0.005,0.095,0.012,0.143,0.017c0.339,0.042,0.739,0.091,1.196,0.146 c0.075,0.008,0.151,0.018,0.229,0.027c0.132,0.015,0.27,0.031,0.41,0.049c0.108,0.012,0.22,0.024,0.333,0.039 c0.15,0.017,0.301,0.034,0.459,0.054c0.202,0.021,0.409,0.046,0.623,0.07c0.182,0.022,0.373,0.044,0.563,0.066 c0.082,0.01,0.163,0.02,0.246,0.026c0.196,0.024,0.396,0.047,0.599,0.068c0.087,0.01,0.177,0.02,0.266,0.032 c0.421,0.046,0.856,0.095,1.308,0.144c0.052,0.005,0.104,0.013,0.157,0.018c0.233,0.026,0.473,0.051,0.714,0.078 c0.086,0.01,0.173,0.02,0.261,0.029c0.251,0.026,0.504,0.054,0.763,0.08c0.06,0.008,0.122,0.013,0.183,0.02 c0.478,0.052,0.968,0.103,1.469,0.154c0.113,0.012,0.225,0.021,0.338,0.034c0.251,0.026,0.505,0.051,0.76,0.078 c0.129,0.012,0.26,0.026,0.39,0.039c0.251,0.024,0.503,0.051,0.759,0.075c0.146,0.015,0.295,0.029,0.443,0.044 c0.427,0.042,0.857,0.083,1.293,0.125c0.178,0.017,0.356,0.034,0.536,0.051c0.228,0.02,0.456,0.042,0.685,0.063 c0.226,0.02,0.452,0.042,0.68,0.062c0.198,0.02,0.395,0.036,0.593,0.054c0.395,0.036,0.791,0.07,1.189,0.104 c0.179,0.015,0.359,0.032,0.54,0.047c0.266,0.021,0.532,0.046,0.8,0.068c0.191,0.015,0.382,0.031,0.574,0.046 c0.3,0.024,0.6,0.049,0.901,0.073c0.143,0.01,0.286,0.022,0.43,0.034c0.427,0.032,0.854,0.063,1.28,0.096 c0.147,0.012,0.294,0.021,0.441,0.031c0.229,0.018,0.459,0.034,0.688,0.049c0.985,0.068,1.966,0.135,2.937,0.19 c0.05,0.003,0.1,0.008,0.15,0.01c1,0.059,1.988,0.11,2.956,0.151c0.044,0.003,0.089,0.005,0.133,0.008 c0.354,0.015,0.705,0.029,1.053,0.041c-0.248,0.615-0.497,1.289-0.759,2.044c-6.009,0.581-10.226,1.945-10.226,3.537 c0,2.119,7.492,3.841,16.729,3.841c9.24,0,16.729-1.722,16.729-3.841c0-1.592-4.215-2.954-10.222-3.537 c-0.266-0.774-0.516-1.46-0.758-2.078c15.691-0.571,31.527-2.803,31.527-2.803c2.794,0,5.059-2.266,5.059-5.061V32.885 C106.38,30.091,104.116,27.826,101.322,27.826z M101.377,32.885v49.771H26.444V32.885H101.377z"></path><path d="M34.574,59.743h12.259l2.32,3.278c0.193,0.192,0.501,0.192,0.695,0l2.32-3.278h0.878c1.345,0,2.435-1.091,2.435-2.435 V46.551c0-1.347-1.09-2.437-2.435-2.437H34.574c-1.345,0-2.436,1.09-2.436,2.437v10.756C32.138,58.652,33.229,59.743,34.574,59.743 z M36.524,47.369h14.514c0.49,0,0.886,0.396,0.886,0.885c0,0.488-0.396,0.885-0.886,0.885H36.524c-0.488,0-0.885-0.397-0.885-0.885 C35.64,47.765,36.036,47.369,36.524,47.369z M36.524,50.909h14.514c0.49,0,0.886,0.396,0.886,0.885s-0.396,0.885-0.886,0.885 H36.524c-0.488,0-0.885-0.396-0.885-0.885S36.036,50.909,36.524,50.909z M36.524,54.449h14.514c0.49,0,0.886,0.396,0.886,0.884 s-0.396,0.886-0.886,0.886H36.524c-0.488,0-0.885-0.397-0.885-0.886S36.036,54.449,36.524,54.449z"></path><path d="M75.749,55.114h12.259l2.32,3.278c0.191,0.191,0.5,0.191,0.692,0l2.321-3.278h0.877c1.344,0,2.435-1.091,2.435-2.436 V41.921c0-1.345-1.091-2.435-2.435-2.435h-18.47c-1.345,0-2.435,1.09-2.435,2.435v10.757 C73.314,54.023,74.404,55.114,75.749,55.114z M77.698,42.74h14.516c0.488,0,0.884,0.396,0.884,0.885 c0,0.488-0.396,0.885-0.884,0.885H77.698c-0.488,0-0.883-0.397-0.883-0.885C76.815,43.135,77.21,42.74,77.698,42.74z M77.698,46.28 h14.516c0.488,0,0.884,0.396,0.884,0.885s-0.396,0.885-0.884,0.885H77.698c-0.488,0-0.883-0.396-0.883-0.885 S77.21,46.28,77.698,46.28z M77.698,49.819h14.516c0.488,0,0.884,0.397,0.884,0.886s-0.396,0.886-0.884,0.886H77.698 c-0.488,0-0.883-0.397-0.883-0.886S77.21,49.819,77.698,49.819z"></path><path d="M61.277,76.764h12.259l2.319,3.279c0.191,0.19,0.501,0.19,0.692,0l2.32-3.279h0.878c1.344,0,2.436-1.089,2.436-2.437 V63.573c0-1.345-1.092-2.437-2.436-2.437h-18.47c-1.345,0-2.436,1.091-2.436,2.437v10.755 C58.842,75.675,59.933,76.764,61.277,76.764z M63.226,64.391h14.516c0.489,0,0.884,0.396,0.884,0.885 c0,0.487-0.396,0.886-0.884,0.886H63.226c-0.488,0-0.883-0.398-0.883-0.886C62.343,64.787,62.738,64.391,63.226,64.391z M63.226,67.931h14.516c0.489,0,0.884,0.396,0.884,0.887c0,0.488-0.396,0.884-0.884,0.884H63.226c-0.488,0-0.883-0.396-0.883-0.884 C62.343,68.327,62.738,67.931,63.226,67.931z M63.226,71.471h14.516c0.489,0,0.884,0.396,0.884,0.884 c0,0.491-0.396,0.887-0.884,0.887H63.226c-0.488,0-0.883-0.396-0.883-0.887C62.343,71.867,62.738,71.471,63.226,71.471z"></path></g></svg>
                    <h4>Effektive kontextbezogene Werbung</h4>
                    <p>Erstellung, Konfiguration und Verwaltung
                        von effektiven Werbekampagnen in Google
                        Ads und Yandex Direct
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="feature_item" align="center">
                    <svg class="svgicon" id="svg37" style="fill: rgb(38, 0, 118);width: 75px" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128"><rect x="0" y="0" width="128" height="128" style="fill: transparent" rx="0%" ry="0%"></rect><g transform="scale(1) translate(0, 0)"><path d="M64.001,7C32.521,7,7,32.519,7,64.001C7,95.479,32.521,121,64.001,121C95.479,121,121,95.479,121,64.001 C121,32.519,95.479,7,64.001,7z M83.317,97.11l2.88,6.86l-10.117,4.248l-2.936-6.995c-2.887,0.701-5.899,1.082-9.003,1.082 c-20.995,0-38.015-17.02-38.015-38.013c0-20.996,17.02-38.015,38.015-38.015c20.993,0,38.013,17.019,38.013,38.015 C102.154,78.29,94.582,90.512,83.317,97.11z"></path><path d="M61.355,59.245l18.046,17.186c2.653-3.332,4.243-7.548,4.243-12.138c0-10.772-8.732-19.504-19.503-19.504 c-10.772,0-19.505,8.731-19.505,19.504c0,9.823,7.267,17.949,16.719,19.302V59.245z"></path><polygon points="76.513,87.875 86.073,86.514 64.056,65.545 64.056,95.703 71.346,89.958 77.525,104.684 82.663,102.526 "></polygon></g></svg>
                    <h4>Social Media Marketing</h4>
                    <p>Erstellung, Konfiguration und Verwaltung
                        von effektiven Werbekampagnen in
                        sozialen Netzwerken.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Feature Area =================-->

<!--================Interior Area =================-->
<section lang="ru" class="interior_area" id="feature">
    <div class="container">
        <div align="center">
            <h1 style="color: #000000; font-size: 50px">Продвижение в Интернете</h1>
            <h3 style="color: #000000">Поможем привлечь клиентов на Ваш сайт</h3>
            <h4>Наши эксперты создадут эффективные рекламные кампании в социальных сетях и на поиске Google и Yandex</h4>
            <br>
        </div>
        <div class="interior_inner row">
            <div class="col-lg-6">
                <img class="img-fluid" src="img/banner/banner-2.png" alt="">
            </div>
            <div class="col-lg-5 offset-lg-1" style="margin-left: 0%;">
                <div class="interior_text xxx">

                    <div id="carouselExampleIndicators" class="carousel_slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div align="center">
                                    <svg class="svgicon" id="svg59" style="fill: rgb(38, 0, 118);width: 75px" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128"><rect x="0" y="0" width="128" height="128" style="fill: transparent" rx="0%" ry="0%"></rect>
                                        <g transform="scale(1) translate(0, 0)"><path d="M101.322,27.826h-6.712H26.68c-2.796,0-5.06,2.265-5.06,5.059v49.971c0,2.795,2.264,5.061,5.06,5.061 c0,0,0.063,0.01,0.156,0.02c0.108,0.015,0.275,0.037,0.49,0.063c0.087,0.01,0.182,0.022,0.284,0.034 c0.07,0.01,0.144,0.018,0.222,0.027c0.045,0.005,0.095,0.012,0.143,0.017c0.339,0.042,0.739,0.091,1.196,0.146 c0.075,0.008,0.151,0.018,0.229,0.027c0.132,0.015,0.27,0.031,0.41,0.049c0.108,0.012,0.22,0.024,0.333,0.039 c0.15,0.017,0.301,0.034,0.459,0.054c0.202,0.021,0.409,0.046,0.623,0.07c0.182,0.022,0.373,0.044,0.563,0.066 c0.082,0.01,0.163,0.02,0.246,0.026c0.196,0.024,0.396,0.047,0.599,0.068c0.087,0.01,0.177,0.02,0.266,0.032 c0.421,0.046,0.856,0.095,1.308,0.144c0.052,0.005,0.104,0.013,0.157,0.018c0.233,0.026,0.473,0.051,0.714,0.078 c0.086,0.01,0.173,0.02,0.261,0.029c0.251,0.026,0.504,0.054,0.763,0.08c0.06,0.008,0.122,0.013,0.183,0.02 c0.478,0.052,0.968,0.103,1.469,0.154c0.113,0.012,0.225,0.021,0.338,0.034c0.251,0.026,0.505,0.051,0.76,0.078 c0.129,0.012,0.26,0.026,0.39,0.039c0.251,0.024,0.503,0.051,0.759,0.075c0.146,0.015,0.295,0.029,0.443,0.044 c0.427,0.042,0.857,0.083,1.293,0.125c0.178,0.017,0.356,0.034,0.536,0.051c0.228,0.02,0.456,0.042,0.685,0.063 c0.226,0.02,0.452,0.042,0.68,0.062c0.198,0.02,0.395,0.036,0.593,0.054c0.395,0.036,0.791,0.07,1.189,0.104 c0.179,0.015,0.359,0.032,0.54,0.047c0.266,0.021,0.532,0.046,0.8,0.068c0.191,0.015,0.382,0.031,0.574,0.046 c0.3,0.024,0.6,0.049,0.901,0.073c0.143,0.01,0.286,0.022,0.43,0.034c0.427,0.032,0.854,0.063,1.28,0.096 c0.147,0.012,0.294,0.021,0.441,0.031c0.229,0.018,0.459,0.034,0.688,0.049c0.985,0.068,1.966,0.135,2.937,0.19 c0.05,0.003,0.1,0.008,0.15,0.01c1,0.059,1.988,0.11,2.956,0.151c0.044,0.003,0.089,0.005,0.133,0.008 c0.354,0.015,0.705,0.029,1.053,0.041c-0.248,0.615-0.497,1.289-0.759,2.044c-6.009,0.581-10.226,1.945-10.226,3.537 c0,2.119,7.492,3.841,16.729,3.841c9.24,0,16.729-1.722,16.729-3.841c0-1.592-4.215-2.954-10.222-3.537 c-0.266-0.774-0.516-1.46-0.758-2.078c15.691-0.571,31.527-2.803,31.527-2.803c2.794,0,5.059-2.266,5.059-5.061V32.885 C106.38,30.091,104.116,27.826,101.322,27.826z M101.377,32.885v49.771H26.444V32.885H101.377z"></path><path d="M34.574,59.743h12.259l2.32,3.278c0.193,0.192,0.501,0.192,0.695,0l2.32-3.278h0.878c1.345,0,2.435-1.091,2.435-2.435 V46.551c0-1.347-1.09-2.437-2.435-2.437H34.574c-1.345,0-2.436,1.09-2.436,2.437v10.756C32.138,58.652,33.229,59.743,34.574,59.743 z M36.524,47.369h14.514c0.49,0,0.886,0.396,0.886,0.885c0,0.488-0.396,0.885-0.886,0.885H36.524c-0.488,0-0.885-0.397-0.885-0.885 C35.64,47.765,36.036,47.369,36.524,47.369z M36.524,50.909h14.514c0.49,0,0.886,0.396,0.886,0.885s-0.396,0.885-0.886,0.885 H36.524c-0.488,0-0.885-0.396-0.885-0.885S36.036,50.909,36.524,50.909z M36.524,54.449h14.514c0.49,0,0.886,0.396,0.886,0.884 s-0.396,0.886-0.886,0.886H36.524c-0.488,0-0.885-0.397-0.885-0.886S36.036,54.449,36.524,54.449z"></path><path d="M75.749,55.114h12.259l2.32,3.278c0.191,0.191,0.5,0.191,0.692,0l2.321-3.278h0.877c1.344,0,2.435-1.091,2.435-2.436 V41.921c0-1.345-1.091-2.435-2.435-2.435h-18.47c-1.345,0-2.435,1.09-2.435,2.435v10.757 C73.314,54.023,74.404,55.114,75.749,55.114z M77.698,42.74h14.516c0.488,0,0.884,0.396,0.884,0.885 c0,0.488-0.396,0.885-0.884,0.885H77.698c-0.488,0-0.883-0.397-0.883-0.885C76.815,43.135,77.21,42.74,77.698,42.74z M77.698,46.28 h14.516c0.488,0,0.884,0.396,0.884,0.885s-0.396,0.885-0.884,0.885H77.698c-0.488,0-0.883-0.396-0.883-0.885 S77.21,46.28,77.698,46.28z M77.698,49.819h14.516c0.488,0,0.884,0.397,0.884,0.886s-0.396,0.886-0.884,0.886H77.698 c-0.488,0-0.883-0.397-0.883-0.886S77.21,49.819,77.698,49.819z"></path><path d="M61.277,76.764h12.259l2.319,3.279c0.191,0.19,0.501,0.19,0.692,0l2.32-3.279h0.878c1.344,0,2.436-1.089,2.436-2.437 V63.573c0-1.345-1.092-2.437-2.436-2.437h-18.47c-1.345,0-2.436,1.091-2.436,2.437v10.755 C58.842,75.675,59.933,76.764,61.277,76.764z M63.226,64.391h14.516c0.489,0,0.884,0.396,0.884,0.885 c0,0.487-0.396,0.886-0.884,0.886H63.226c-0.488,0-0.883-0.398-0.883-0.886C62.343,64.787,62.738,64.391,63.226,64.391z M63.226,67.931h14.516c0.489,0,0.884,0.396,0.884,0.887c0,0.488-0.396,0.884-0.884,0.884H63.226c-0.488,0-0.883-0.396-0.883-0.884 C62.343,68.327,62.738,67.931,63.226,67.931z M63.226,71.471h14.516c0.489,0,0.884,0.396,0.884,0.884 c0,0.491-0.396,0.887-0.884,0.887H63.226c-0.488,0-0.883-0.396-0.883-0.887C62.343,71.867,62.738,71.471,63.226,71.471z"></path></g></svg>
                                </div><p style="text-align: center;margin-bottom: 0px;"><font style="font-size: 25px;color: #000;">Контексная реклама</font></p>
                                <br>
                                <p style="text-align: center;margin-bottom: 0px;">Создаем и ведем эффективные рекламные кампании в Google Ads и Yandex.Direct.</p>
                            </div>

                            <div class="carousel-item">
                                <div align="center">
                                    <svg class="svgicon" id="svg60" style="fill: rgb(38, 0, 118);width: 75px" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128"><rect x="0" y="0" width="128" height="128" style="fill: transparent" rx="0%" ry="0%"></rect><g transform="scale(1) translate(0, 0)"><path d="M64.001,7C32.521,7,7,32.519,7,64.001C7,95.479,32.521,121,64.001,121C95.479,121,121,95.479,121,64.001 C121,32.519,95.479,7,64.001,7z M83.317,97.11l2.88,6.86l-10.117,4.248l-2.936-6.995c-2.887,0.701-5.899,1.082-9.003,1.082 c-20.995,0-38.015-17.02-38.015-38.013c0-20.996,17.02-38.015,38.015-38.015c20.993,0,38.013,17.019,38.013,38.015 C102.154,78.29,94.582,90.512,83.317,97.11z"></path><path d="M61.355,59.245l18.046,17.186c2.653-3.332,4.243-7.548,4.243-12.138c0-10.772-8.732-19.504-19.503-19.504 c-10.772,0-19.505,8.731-19.505,19.504c0,9.823,7.267,17.949,16.719,19.302V59.245z"></path><polygon points="76.513,87.875 86.073,86.514 64.056,65.545 64.056,95.703 71.346,89.958 77.525,104.684 82.663,102.526 "></polygon></g></svg>
                                </div>
                                <p style="text-align: center;margin-bottom: 0px;"><font style="font-size: 25px;color: #000;">Таргетированная реклама</font></p>
                                <br>
                                <p style="text-align: center;margin-bottom: 0px;">Реклама в социальных сетях. VKontakte, Instagram, Facebook.</p>
                            </div>
                            <div class="carousel-item">
                                <div align="center">
                                    <svg class="svgicon" id="svg61" style="fill: rgb(38, 0, 118);width: 75px" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128"><rect x="0" y="0" width="128" height="128" style="fill: transparent" rx="0%" ry="0%"></rect><g transform="scale(1) translate(0, 0)"><path d="M106.926,21.075c-15.424-15.425-40.424-15.425-55.85,0C37.98,34.168,36.01,54.166,45.148,69.344l-2.934,2.932 c0,0,0.02,0.042,0.059,0.121l-32.082,32.085c-1.129,1.129-0.812,3.418,0.588,5.901c-1.137,1.922-0.895,4.431,0.758,6.083 c1.648,1.649,4.158,1.891,6.082,0.756c2.482,1.398,4.771,1.716,5.902,0.588l35.027-35.028c15.193,9.217,35.252,7.271,48.377-5.854 C122.35,61.504,122.35,36.497,106.926,21.075z M58.115,69.887c-11.537-11.533-11.537-30.24,0-41.771 c11.537-11.537,30.24-11.537,41.771-0.003c11.539,11.537,11.535,30.241,0,41.774C88.355,81.421,69.652,81.424,58.115,69.887z"></path><path d="M82.76,29.285c-16.783,1.726-23.141,15.525-23.305,15.852c-0.738,1.611-0.037,3.53,1.574,4.271 c1.617,0.753,3.535,0.036,4.275-1.568c0,0,0.033-0.074,0.189-0.357c1.115-2.046,6.5-10.728,17.887-11.786 c1.379-0.135,2.469-1.116,2.805-2.384c0.092-0.357,0.129-0.737,0.092-1.133C86.1,30.41,84.531,29.107,82.76,29.285z"></path></g></svg>
                                </div>
                                <p style="text-align: center;margin-bottom: 0px;"><font style="font-size: 25px;color: #000;">SEO продвижение</font></p>
                                <br>
                                <p style="text-align: center;margin-bottom: 0px;">Продвижение Вашего сайта в поисковой выдаче. Улучшение позиций сайта в поисковиках</p>
                            </div>
                            <div class="carousel-item">
                                <div align="center">
                                    <svg class="svgicon" id="svg62" style="fill: rgb(38, 0, 118);width: 75px" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128"><rect x="0" y="0" width="128" height="128" style="fill: transparent" rx="0%" ry="0%"></rect><g transform="scale(1) translate(0, 0)"><path class="st0" d="M90.504,48.631L81.71,37.974c-1.526-1.86-4.3-2.126-6.157-0.595L26.523,77.827 c-1.854,1.532-2.126,4.303-0.589,6.16l3.537,4.297l1.997,2.422l3.256,3.938c1.532,1.862,4.304,2.127,6.162,0.594l49.027-40.446 C91.77,53.26,92.037,50.486,90.504,48.631z"></path><path class="st0" d="M38.902,56.704l14.325-11.815l3.544-2.925l4.882-4.022l2.066-1.704l8.414-6.95L55.507,9.13 c-2.382-2.884-6.684-3.296-9.572-0.92c-2.884,2.378-3.298,6.689-0.917,9.571l4.604,5.586c-1.437,0.051-2.874,0.56-4.065,1.54 c-0.592,0.492-1.082,1.06-1.464,1.687l-3.527-4.276c-4.491-5.449-12.614-6.224-18.059-1.732c-5.443,4.489-6.222,12.618-1.73,18.058 l3.346,4.061c-3.836-0.969-8.061-0.172-11.326,2.521c-5.444,4.492-6.224,12.621-1.732,18.061l8.046,9.749L36.983,58.29 L38.902,56.704z"></path><path class="st0" d="M119.229,110.369L98.795,85.601c0,0,0.567-0.282,1.612-1.329c1.046-1.047,1.458-10.333-0.716-10.454 c-2.177-0.118-11.327,9.34-11.327,9.34l-0.586-0.71c-0.379-0.468-0.905-1.071-1.361-1.588c-1.124-1.295-1.847-1.905-1.06-3.044 l18.399-26.649c1.999-3.751,2.117-3.966-1.122-7.892l-3.657-4.427c-4.356-5.288-5.163-4.591-9.121-1.184l-0.095,0.078l1.992,2.414 l0.139-0.121c1.945-1.668,2.337-2.007,4.661,0.813l3.656,4.426c1.909,2.314,1.847,2.422,0.786,4.418l-18.529,26.79 c-1.906,2.745-0.826,3.659,1.582,6.423c0.312,0.36,0.676,0.778,1.306,1.54l0.592,0.709c0,0-11.248,7.158-11.248,9.284 s8.823,4.025,10.333,2.516c1.507-1.506,1.685-1.386,1.685-1.386l20.435,24.768c0.963,1.17,2.715,1.339,3.885,0.368l7.821-6.445 C120.024,113.29,120.197,111.543,119.229,110.369z"></path></g></svg>
                                </div>
                                <p style="text-align: center;margin-bottom: 0px;"><font style="font-size: 25px;color: #000;">Дизайн и графика</font></p>
                                <br>
                                <p style="text-align: center;margin-bottom: 0px;">Разработка фирменного стиля, логотипов, картинок и иконок, рекламных креативов.</p>
                            </div>
                            <div class="carousel-item">
                                <div align="center">
                                    <svg class="svgicon" id="svg63" style="fill: rgb(38, 0, 118);width: 75px" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128"><rect x="0" y="0" width="128" height="128" style="fill: transparent" rx="0%" ry="0%"></rect><g transform="scale(1) translate(0, 0)"><path d="M111.221,17.876H94.933H16.779c-3.537,0-6.403,2.866-6.403,6.403v55.53v7.695c0,3.537,2.866,6.402,6.403,6.402h35.91 l0.05,7.362l-3.973,6.949v1.16c0,0.938,0.761,0.724,1.702,0.724h27.063c0.938,0,1.703,0.214,1.703-0.724v-1.16l-3.968-6.915 l0.049-7.396h35.904c3.537,0,6.403-2.865,6.403-6.402V79.81v-55.53C117.624,20.742,114.758,17.876,111.221,17.876z M17.641,23.701 h92.525v50.416H17.641V23.701z M67.59,84.748c0.07,1.054,0.757,1.771,1.575,2.151c-0.189,0.555-0.416,1.045-0.695,1.494 c-0.366,0.58-0.888,1.437-1.662,1.602c-0.889,0.183-1.444-0.505-2.419-0.434c-0.739,0.058-1.404,0.666-2.151,0.416 c-0.36-0.126-0.74-0.513-0.984-0.804c-0.755-0.905-1.464-2.314-1.643-3.669c-0.153-1.165,0.004-2.175,0.474-2.949 c0.491-0.807,1.404-1.577,2.623-1.437c0.302,0.031,0.605,0.139,0.883,0.246c0.235,0.09,0.548,0.269,0.843,0.269 c0.274-0.003,0.626-0.193,0.899-0.29c0.315-0.115,0.645-0.236,0.984-0.265c1.236-0.115,1.988,0.494,2.523,1.147 C68.058,82.78,67.499,83.512,67.59,84.748z M65.969,80.258c-0.383,0.413-0.893,0.735-1.603,0.696 c-0.139-1.495,1.051-2.538,2.275-2.728c0.011,0,0.016,0,0.022,0C66.822,79.083,66.409,79.785,65.969,80.258z"></path></g></svg></div>
                                <p style="text-align: center;margin-bottom: 0px;"><font style="font-size: 25px;color: #000;">WEB программирование</font></p>
                                <br>
                                <p style="text-align: center;margin-bottom: 0px;">Решаем задачи по расширению функционала сайта и интеграции со сторонними сервисами.</p>
                            </div>
                        </div>
                    </div>




                </div>
            </div>
        </div>
    </div>
</section>
<section lang="en" class="interior_area" id="feature">
    <div class="container">
        <div align="center">
            <h1 style="color: #000000; font-size: 50px">Internet promotion</h1>
            <h3 style="color: #000000">Let us help you attract customers to your website</h3>
            <h4>Our experts will create effective advertising campaigns in social networks and on Google and Yandex search</h4>
            <br>
        </div>
        <div class="interior_inner row">
            <div class="col-lg-6">
                <img class="img-fluid" src="img/banner/banner-2.png" alt="">
            </div>
            <div class="col-lg-5 offset-lg-1" style="margin-left: 0%;">
                <div class="interior_text xxx">

                    <div id="carouselExampleIndicators" class="carousel_slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div align="center">
                                    <svg class="svgicon" id="svg59" style="fill: rgb(38, 0, 118);width: 75px" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128"><rect x="0" y="0" width="128" height="128" style="fill: transparent" rx="0%" ry="0%"></rect>
                                        <g transform="scale(1) translate(0, 0)"><path d="M101.322,27.826h-6.712H26.68c-2.796,0-5.06,2.265-5.06,5.059v49.971c0,2.795,2.264,5.061,5.06,5.061 c0,0,0.063,0.01,0.156,0.02c0.108,0.015,0.275,0.037,0.49,0.063c0.087,0.01,0.182,0.022,0.284,0.034 c0.07,0.01,0.144,0.018,0.222,0.027c0.045,0.005,0.095,0.012,0.143,0.017c0.339,0.042,0.739,0.091,1.196,0.146 c0.075,0.008,0.151,0.018,0.229,0.027c0.132,0.015,0.27,0.031,0.41,0.049c0.108,0.012,0.22,0.024,0.333,0.039 c0.15,0.017,0.301,0.034,0.459,0.054c0.202,0.021,0.409,0.046,0.623,0.07c0.182,0.022,0.373,0.044,0.563,0.066 c0.082,0.01,0.163,0.02,0.246,0.026c0.196,0.024,0.396,0.047,0.599,0.068c0.087,0.01,0.177,0.02,0.266,0.032 c0.421,0.046,0.856,0.095,1.308,0.144c0.052,0.005,0.104,0.013,0.157,0.018c0.233,0.026,0.473,0.051,0.714,0.078 c0.086,0.01,0.173,0.02,0.261,0.029c0.251,0.026,0.504,0.054,0.763,0.08c0.06,0.008,0.122,0.013,0.183,0.02 c0.478,0.052,0.968,0.103,1.469,0.154c0.113,0.012,0.225,0.021,0.338,0.034c0.251,0.026,0.505,0.051,0.76,0.078 c0.129,0.012,0.26,0.026,0.39,0.039c0.251,0.024,0.503,0.051,0.759,0.075c0.146,0.015,0.295,0.029,0.443,0.044 c0.427,0.042,0.857,0.083,1.293,0.125c0.178,0.017,0.356,0.034,0.536,0.051c0.228,0.02,0.456,0.042,0.685,0.063 c0.226,0.02,0.452,0.042,0.68,0.062c0.198,0.02,0.395,0.036,0.593,0.054c0.395,0.036,0.791,0.07,1.189,0.104 c0.179,0.015,0.359,0.032,0.54,0.047c0.266,0.021,0.532,0.046,0.8,0.068c0.191,0.015,0.382,0.031,0.574,0.046 c0.3,0.024,0.6,0.049,0.901,0.073c0.143,0.01,0.286,0.022,0.43,0.034c0.427,0.032,0.854,0.063,1.28,0.096 c0.147,0.012,0.294,0.021,0.441,0.031c0.229,0.018,0.459,0.034,0.688,0.049c0.985,0.068,1.966,0.135,2.937,0.19 c0.05,0.003,0.1,0.008,0.15,0.01c1,0.059,1.988,0.11,2.956,0.151c0.044,0.003,0.089,0.005,0.133,0.008 c0.354,0.015,0.705,0.029,1.053,0.041c-0.248,0.615-0.497,1.289-0.759,2.044c-6.009,0.581-10.226,1.945-10.226,3.537 c0,2.119,7.492,3.841,16.729,3.841c9.24,0,16.729-1.722,16.729-3.841c0-1.592-4.215-2.954-10.222-3.537 c-0.266-0.774-0.516-1.46-0.758-2.078c15.691-0.571,31.527-2.803,31.527-2.803c2.794,0,5.059-2.266,5.059-5.061V32.885 C106.38,30.091,104.116,27.826,101.322,27.826z M101.377,32.885v49.771H26.444V32.885H101.377z"></path><path d="M34.574,59.743h12.259l2.32,3.278c0.193,0.192,0.501,0.192,0.695,0l2.32-3.278h0.878c1.345,0,2.435-1.091,2.435-2.435 V46.551c0-1.347-1.09-2.437-2.435-2.437H34.574c-1.345,0-2.436,1.09-2.436,2.437v10.756C32.138,58.652,33.229,59.743,34.574,59.743 z M36.524,47.369h14.514c0.49,0,0.886,0.396,0.886,0.885c0,0.488-0.396,0.885-0.886,0.885H36.524c-0.488,0-0.885-0.397-0.885-0.885 C35.64,47.765,36.036,47.369,36.524,47.369z M36.524,50.909h14.514c0.49,0,0.886,0.396,0.886,0.885s-0.396,0.885-0.886,0.885 H36.524c-0.488,0-0.885-0.396-0.885-0.885S36.036,50.909,36.524,50.909z M36.524,54.449h14.514c0.49,0,0.886,0.396,0.886,0.884 s-0.396,0.886-0.886,0.886H36.524c-0.488,0-0.885-0.397-0.885-0.886S36.036,54.449,36.524,54.449z"></path><path d="M75.749,55.114h12.259l2.32,3.278c0.191,0.191,0.5,0.191,0.692,0l2.321-3.278h0.877c1.344,0,2.435-1.091,2.435-2.436 V41.921c0-1.345-1.091-2.435-2.435-2.435h-18.47c-1.345,0-2.435,1.09-2.435,2.435v10.757 C73.314,54.023,74.404,55.114,75.749,55.114z M77.698,42.74h14.516c0.488,0,0.884,0.396,0.884,0.885 c0,0.488-0.396,0.885-0.884,0.885H77.698c-0.488,0-0.883-0.397-0.883-0.885C76.815,43.135,77.21,42.74,77.698,42.74z M77.698,46.28 h14.516c0.488,0,0.884,0.396,0.884,0.885s-0.396,0.885-0.884,0.885H77.698c-0.488,0-0.883-0.396-0.883-0.885 S77.21,46.28,77.698,46.28z M77.698,49.819h14.516c0.488,0,0.884,0.397,0.884,0.886s-0.396,0.886-0.884,0.886H77.698 c-0.488,0-0.883-0.397-0.883-0.886S77.21,49.819,77.698,49.819z"></path><path d="M61.277,76.764h12.259l2.319,3.279c0.191,0.19,0.501,0.19,0.692,0l2.32-3.279h0.878c1.344,0,2.436-1.089,2.436-2.437 V63.573c0-1.345-1.092-2.437-2.436-2.437h-18.47c-1.345,0-2.436,1.091-2.436,2.437v10.755 C58.842,75.675,59.933,76.764,61.277,76.764z M63.226,64.391h14.516c0.489,0,0.884,0.396,0.884,0.885 c0,0.487-0.396,0.886-0.884,0.886H63.226c-0.488,0-0.883-0.398-0.883-0.886C62.343,64.787,62.738,64.391,63.226,64.391z M63.226,67.931h14.516c0.489,0,0.884,0.396,0.884,0.887c0,0.488-0.396,0.884-0.884,0.884H63.226c-0.488,0-0.883-0.396-0.883-0.884 C62.343,68.327,62.738,67.931,63.226,67.931z M63.226,71.471h14.516c0.489,0,0.884,0.396,0.884,0.884 c0,0.491-0.396,0.887-0.884,0.887H63.226c-0.488,0-0.883-0.396-0.883-0.887C62.343,71.867,62.738,71.471,63.226,71.471z"></path></g></svg>
                                </div><p style="text-align: center;margin-bottom: 0px;"><font style="font-size: 25px;color: #000;">Contextual advertising</font></p>
                                <br>
                                <p style="text-align: center;margin-bottom: 0px;">We create and manage effective advertising campaigns in Google Ads and Yandex.Direct.</p>
                            </div>

                            <div class="carousel-item">
                                <div align="center">
                                    <svg class="svgicon" id="svg60" style="fill: rgb(38, 0, 118);width: 75px" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128"><rect x="0" y="0" width="128" height="128" style="fill: transparent" rx="0%" ry="0%"></rect><g transform="scale(1) translate(0, 0)"><path d="M64.001,7C32.521,7,7,32.519,7,64.001C7,95.479,32.521,121,64.001,121C95.479,121,121,95.479,121,64.001 C121,32.519,95.479,7,64.001,7z M83.317,97.11l2.88,6.86l-10.117,4.248l-2.936-6.995c-2.887,0.701-5.899,1.082-9.003,1.082 c-20.995,0-38.015-17.02-38.015-38.013c0-20.996,17.02-38.015,38.015-38.015c20.993,0,38.013,17.019,38.013,38.015 C102.154,78.29,94.582,90.512,83.317,97.11z"></path><path d="M61.355,59.245l18.046,17.186c2.653-3.332,4.243-7.548,4.243-12.138c0-10.772-8.732-19.504-19.503-19.504 c-10.772,0-19.505,8.731-19.505,19.504c0,9.823,7.267,17.949,16.719,19.302V59.245z"></path><polygon points="76.513,87.875 86.073,86.514 64.056,65.545 64.056,95.703 71.346,89.958 77.525,104.684 82.663,102.526 "></polygon></g></svg>
                                </div>
                                <p style="text-align: center;margin-bottom: 0px;"><font style="font-size: 25px;color: #000;">Targeted advertising</font></p>
                                <br>
                                <p style="text-align: center;margin-bottom: 0px;">Advertising in social networks. Vkontakte, Instagram, Facebook.</p>
                            </div>
                            <div class="carousel-item">
                                <div align="center">
                                    <svg class="svgicon" id="svg61" style="fill: rgb(38, 0, 118);width: 75px" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128"><rect x="0" y="0" width="128" height="128" style="fill: transparent" rx="0%" ry="0%"></rect><g transform="scale(1) translate(0, 0)"><path d="M106.926,21.075c-15.424-15.425-40.424-15.425-55.85,0C37.98,34.168,36.01,54.166,45.148,69.344l-2.934,2.932 c0,0,0.02,0.042,0.059,0.121l-32.082,32.085c-1.129,1.129-0.812,3.418,0.588,5.901c-1.137,1.922-0.895,4.431,0.758,6.083 c1.648,1.649,4.158,1.891,6.082,0.756c2.482,1.398,4.771,1.716,5.902,0.588l35.027-35.028c15.193,9.217,35.252,7.271,48.377-5.854 C122.35,61.504,122.35,36.497,106.926,21.075z M58.115,69.887c-11.537-11.533-11.537-30.24,0-41.771 c11.537-11.537,30.24-11.537,41.771-0.003c11.539,11.537,11.535,30.241,0,41.774C88.355,81.421,69.652,81.424,58.115,69.887z"></path><path d="M82.76,29.285c-16.783,1.726-23.141,15.525-23.305,15.852c-0.738,1.611-0.037,3.53,1.574,4.271 c1.617,0.753,3.535,0.036,4.275-1.568c0,0,0.033-0.074,0.189-0.357c1.115-2.046,6.5-10.728,17.887-11.786 c1.379-0.135,2.469-1.116,2.805-2.384c0.092-0.357,0.129-0.737,0.092-1.133C86.1,30.41,84.531,29.107,82.76,29.285z"></path></g></svg>
                                </div>
                                <p style="text-align: center;margin-bottom: 0px;"><font style="font-size: 25px;color: #000;">SEO promotion</font></p>
                                <br>
                                <p style="text-align: center;margin-bottom: 0px;">Promotion of your site in search results. Improving the position of the site in search engines</p>
                            </div>
                            <div class="carousel-item">
                                <div align="center">
                                    <svg class="svgicon" id="svg62" style="fill: rgb(38, 0, 118);width: 75px" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128"><rect x="0" y="0" width="128" height="128" style="fill: transparent" rx="0%" ry="0%"></rect><g transform="scale(1) translate(0, 0)"><path class="st0" d="M90.504,48.631L81.71,37.974c-1.526-1.86-4.3-2.126-6.157-0.595L26.523,77.827 c-1.854,1.532-2.126,4.303-0.589,6.16l3.537,4.297l1.997,2.422l3.256,3.938c1.532,1.862,4.304,2.127,6.162,0.594l49.027-40.446 C91.77,53.26,92.037,50.486,90.504,48.631z"></path><path class="st0" d="M38.902,56.704l14.325-11.815l3.544-2.925l4.882-4.022l2.066-1.704l8.414-6.95L55.507,9.13 c-2.382-2.884-6.684-3.296-9.572-0.92c-2.884,2.378-3.298,6.689-0.917,9.571l4.604,5.586c-1.437,0.051-2.874,0.56-4.065,1.54 c-0.592,0.492-1.082,1.06-1.464,1.687l-3.527-4.276c-4.491-5.449-12.614-6.224-18.059-1.732c-5.443,4.489-6.222,12.618-1.73,18.058 l3.346,4.061c-3.836-0.969-8.061-0.172-11.326,2.521c-5.444,4.492-6.224,12.621-1.732,18.061l8.046,9.749L36.983,58.29 L38.902,56.704z"></path><path class="st0" d="M119.229,110.369L98.795,85.601c0,0,0.567-0.282,1.612-1.329c1.046-1.047,1.458-10.333-0.716-10.454 c-2.177-0.118-11.327,9.34-11.327,9.34l-0.586-0.71c-0.379-0.468-0.905-1.071-1.361-1.588c-1.124-1.295-1.847-1.905-1.06-3.044 l18.399-26.649c1.999-3.751,2.117-3.966-1.122-7.892l-3.657-4.427c-4.356-5.288-5.163-4.591-9.121-1.184l-0.095,0.078l1.992,2.414 l0.139-0.121c1.945-1.668,2.337-2.007,4.661,0.813l3.656,4.426c1.909,2.314,1.847,2.422,0.786,4.418l-18.529,26.79 c-1.906,2.745-0.826,3.659,1.582,6.423c0.312,0.36,0.676,0.778,1.306,1.54l0.592,0.709c0,0-11.248,7.158-11.248,9.284 s8.823,4.025,10.333,2.516c1.507-1.506,1.685-1.386,1.685-1.386l20.435,24.768c0.963,1.17,2.715,1.339,3.885,0.368l7.821-6.445 C120.024,113.29,120.197,111.543,119.229,110.369z"></path></g></svg>
                                </div>
                                <p style="text-align: center;margin-bottom: 0px;"><font style="font-size: 25px;color: #000;">Design and graphics</font></p>
                                <br>
                                <p style="text-align: center;margin-bottom: 0px;">Development of corporate identity, logos, pictures and icons, advertising creatives.</p>
                            </div>
                            <div class="carousel-item">
                                <div align="center">
                                    <svg class="svgicon" id="svg63" style="fill: rgb(38, 0, 118);width: 75px" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128"><rect x="0" y="0" width="128" height="128" style="fill: transparent" rx="0%" ry="0%"></rect><g transform="scale(1) translate(0, 0)"><path d="M111.221,17.876H94.933H16.779c-3.537,0-6.403,2.866-6.403,6.403v55.53v7.695c0,3.537,2.866,6.402,6.403,6.402h35.91 l0.05,7.362l-3.973,6.949v1.16c0,0.938,0.761,0.724,1.702,0.724h27.063c0.938,0,1.703,0.214,1.703-0.724v-1.16l-3.968-6.915 l0.049-7.396h35.904c3.537,0,6.403-2.865,6.403-6.402V79.81v-55.53C117.624,20.742,114.758,17.876,111.221,17.876z M17.641,23.701 h92.525v50.416H17.641V23.701z M67.59,84.748c0.07,1.054,0.757,1.771,1.575,2.151c-0.189,0.555-0.416,1.045-0.695,1.494 c-0.366,0.58-0.888,1.437-1.662,1.602c-0.889,0.183-1.444-0.505-2.419-0.434c-0.739,0.058-1.404,0.666-2.151,0.416 c-0.36-0.126-0.74-0.513-0.984-0.804c-0.755-0.905-1.464-2.314-1.643-3.669c-0.153-1.165,0.004-2.175,0.474-2.949 c0.491-0.807,1.404-1.577,2.623-1.437c0.302,0.031,0.605,0.139,0.883,0.246c0.235,0.09,0.548,0.269,0.843,0.269 c0.274-0.003,0.626-0.193,0.899-0.29c0.315-0.115,0.645-0.236,0.984-0.265c1.236-0.115,1.988,0.494,2.523,1.147 C68.058,82.78,67.499,83.512,67.59,84.748z M65.969,80.258c-0.383,0.413-0.893,0.735-1.603,0.696 c-0.139-1.495,1.051-2.538,2.275-2.728c0.011,0,0.016,0,0.022,0C66.822,79.083,66.409,79.785,65.969,80.258z"></path></g></svg></div>
                                <p style="text-align: center;margin-bottom: 0px;"><font style="font-size: 25px;color: #000;">WEB programming</font></p>
                                <br>
                                <p style="text-align: center;margin-bottom: 0px;">We solve the problems of expanding the functionality of the site and integrating with third-party services.</p>
                            </div>
                        </div>
                    </div>




                </div>
            </div>
        </div>
    </div>
</section>
<section lang="de" class="interior_area" id="feature">
    <div class="container">
        <div align="center">
            <h1 style="color: #000000; font-size: 50px">Verbesserung der Positionierung im Internet</h1>
            <h3 style="color: #000000">Wir helfen Ihnen, Kunden auf Ihre Website
                zu bringen
            </h3>
            <h4>Unsere Experten werden zielgerichtete
                Werbekampagnen in sozialen Netzwerken
                und auf der Google- und Yandex-Suche
                erstellen
            </h4>
            <br>
        </div>
        <div class="interior_inner row">
            <div class="col-lg-6">
                <img class="img-fluid" src="img/banner/banner-2.png" alt="">
            </div>
            <div class="col-lg-5 offset-lg-1" style="margin-left: 0%;">
                <div class="interior_text xxx">

                    <div id="carouselExampleIndicators" class="carousel_slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div align="center">
                                    <svg class="svgicon" id="svg59" style="fill: rgb(38, 0, 118);width: 75px" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128"><rect x="0" y="0" width="128" height="128" style="fill: transparent" rx="0%" ry="0%"></rect>
                                        <g transform="scale(1) translate(0, 0)"><path d="M101.322,27.826h-6.712H26.68c-2.796,0-5.06,2.265-5.06,5.059v49.971c0,2.795,2.264,5.061,5.06,5.061 c0,0,0.063,0.01,0.156,0.02c0.108,0.015,0.275,0.037,0.49,0.063c0.087,0.01,0.182,0.022,0.284,0.034 c0.07,0.01,0.144,0.018,0.222,0.027c0.045,0.005,0.095,0.012,0.143,0.017c0.339,0.042,0.739,0.091,1.196,0.146 c0.075,0.008,0.151,0.018,0.229,0.027c0.132,0.015,0.27,0.031,0.41,0.049c0.108,0.012,0.22,0.024,0.333,0.039 c0.15,0.017,0.301,0.034,0.459,0.054c0.202,0.021,0.409,0.046,0.623,0.07c0.182,0.022,0.373,0.044,0.563,0.066 c0.082,0.01,0.163,0.02,0.246,0.026c0.196,0.024,0.396,0.047,0.599,0.068c0.087,0.01,0.177,0.02,0.266,0.032 c0.421,0.046,0.856,0.095,1.308,0.144c0.052,0.005,0.104,0.013,0.157,0.018c0.233,0.026,0.473,0.051,0.714,0.078 c0.086,0.01,0.173,0.02,0.261,0.029c0.251,0.026,0.504,0.054,0.763,0.08c0.06,0.008,0.122,0.013,0.183,0.02 c0.478,0.052,0.968,0.103,1.469,0.154c0.113,0.012,0.225,0.021,0.338,0.034c0.251,0.026,0.505,0.051,0.76,0.078 c0.129,0.012,0.26,0.026,0.39,0.039c0.251,0.024,0.503,0.051,0.759,0.075c0.146,0.015,0.295,0.029,0.443,0.044 c0.427,0.042,0.857,0.083,1.293,0.125c0.178,0.017,0.356,0.034,0.536,0.051c0.228,0.02,0.456,0.042,0.685,0.063 c0.226,0.02,0.452,0.042,0.68,0.062c0.198,0.02,0.395,0.036,0.593,0.054c0.395,0.036,0.791,0.07,1.189,0.104 c0.179,0.015,0.359,0.032,0.54,0.047c0.266,0.021,0.532,0.046,0.8,0.068c0.191,0.015,0.382,0.031,0.574,0.046 c0.3,0.024,0.6,0.049,0.901,0.073c0.143,0.01,0.286,0.022,0.43,0.034c0.427,0.032,0.854,0.063,1.28,0.096 c0.147,0.012,0.294,0.021,0.441,0.031c0.229,0.018,0.459,0.034,0.688,0.049c0.985,0.068,1.966,0.135,2.937,0.19 c0.05,0.003,0.1,0.008,0.15,0.01c1,0.059,1.988,0.11,2.956,0.151c0.044,0.003,0.089,0.005,0.133,0.008 c0.354,0.015,0.705,0.029,1.053,0.041c-0.248,0.615-0.497,1.289-0.759,2.044c-6.009,0.581-10.226,1.945-10.226,3.537 c0,2.119,7.492,3.841,16.729,3.841c9.24,0,16.729-1.722,16.729-3.841c0-1.592-4.215-2.954-10.222-3.537 c-0.266-0.774-0.516-1.46-0.758-2.078c15.691-0.571,31.527-2.803,31.527-2.803c2.794,0,5.059-2.266,5.059-5.061V32.885 C106.38,30.091,104.116,27.826,101.322,27.826z M101.377,32.885v49.771H26.444V32.885H101.377z"></path><path d="M34.574,59.743h12.259l2.32,3.278c0.193,0.192,0.501,0.192,0.695,0l2.32-3.278h0.878c1.345,0,2.435-1.091,2.435-2.435 V46.551c0-1.347-1.09-2.437-2.435-2.437H34.574c-1.345,0-2.436,1.09-2.436,2.437v10.756C32.138,58.652,33.229,59.743,34.574,59.743 z M36.524,47.369h14.514c0.49,0,0.886,0.396,0.886,0.885c0,0.488-0.396,0.885-0.886,0.885H36.524c-0.488,0-0.885-0.397-0.885-0.885 C35.64,47.765,36.036,47.369,36.524,47.369z M36.524,50.909h14.514c0.49,0,0.886,0.396,0.886,0.885s-0.396,0.885-0.886,0.885 H36.524c-0.488,0-0.885-0.396-0.885-0.885S36.036,50.909,36.524,50.909z M36.524,54.449h14.514c0.49,0,0.886,0.396,0.886,0.884 s-0.396,0.886-0.886,0.886H36.524c-0.488,0-0.885-0.397-0.885-0.886S36.036,54.449,36.524,54.449z"></path><path d="M75.749,55.114h12.259l2.32,3.278c0.191,0.191,0.5,0.191,0.692,0l2.321-3.278h0.877c1.344,0,2.435-1.091,2.435-2.436 V41.921c0-1.345-1.091-2.435-2.435-2.435h-18.47c-1.345,0-2.435,1.09-2.435,2.435v10.757 C73.314,54.023,74.404,55.114,75.749,55.114z M77.698,42.74h14.516c0.488,0,0.884,0.396,0.884,0.885 c0,0.488-0.396,0.885-0.884,0.885H77.698c-0.488,0-0.883-0.397-0.883-0.885C76.815,43.135,77.21,42.74,77.698,42.74z M77.698,46.28 h14.516c0.488,0,0.884,0.396,0.884,0.885s-0.396,0.885-0.884,0.885H77.698c-0.488,0-0.883-0.396-0.883-0.885 S77.21,46.28,77.698,46.28z M77.698,49.819h14.516c0.488,0,0.884,0.397,0.884,0.886s-0.396,0.886-0.884,0.886H77.698 c-0.488,0-0.883-0.397-0.883-0.886S77.21,49.819,77.698,49.819z"></path><path d="M61.277,76.764h12.259l2.319,3.279c0.191,0.19,0.501,0.19,0.692,0l2.32-3.279h0.878c1.344,0,2.436-1.089,2.436-2.437 V63.573c0-1.345-1.092-2.437-2.436-2.437h-18.47c-1.345,0-2.436,1.091-2.436,2.437v10.755 C58.842,75.675,59.933,76.764,61.277,76.764z M63.226,64.391h14.516c0.489,0,0.884,0.396,0.884,0.885 c0,0.487-0.396,0.886-0.884,0.886H63.226c-0.488,0-0.883-0.398-0.883-0.886C62.343,64.787,62.738,64.391,63.226,64.391z M63.226,67.931h14.516c0.489,0,0.884,0.396,0.884,0.887c0,0.488-0.396,0.884-0.884,0.884H63.226c-0.488,0-0.883-0.396-0.883-0.884 C62.343,68.327,62.738,67.931,63.226,67.931z M63.226,71.471h14.516c0.489,0,0.884,0.396,0.884,0.884 c0,0.491-0.396,0.887-0.884,0.887H63.226c-0.488,0-0.883-0.396-0.883-0.887C62.343,71.867,62.738,71.471,63.226,71.471z"></path></g></svg>
                                </div><p style="text-align: center;margin-bottom: 0px;"><font style="font-size: 25px;color: #000;">Kontextbezogene Werbung</font></p>
                                <br>
                                <p style="text-align: center;margin-bottom: 0px;">Wir erstellen und führen effektive
                                    Werbekampagnen für Google Ads und
                                    Yandex.Direct.</p>
                            </div>

                            <div class="carousel-item">
                                <div align="center">
                                    <svg class="svgicon" id="svg60" style="fill: rgb(38, 0, 118);width: 75px" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128"><rect x="0" y="0" width="128" height="128" style="fill: transparent" rx="0%" ry="0%"></rect><g transform="scale(1) translate(0, 0)"><path d="M64.001,7C32.521,7,7,32.519,7,64.001C7,95.479,32.521,121,64.001,121C95.479,121,121,95.479,121,64.001 C121,32.519,95.479,7,64.001,7z M83.317,97.11l2.88,6.86l-10.117,4.248l-2.936-6.995c-2.887,0.701-5.899,1.082-9.003,1.082 c-20.995,0-38.015-17.02-38.015-38.013c0-20.996,17.02-38.015,38.015-38.015c20.993,0,38.013,17.019,38.013,38.015 C102.154,78.29,94.582,90.512,83.317,97.11z"></path><path d="M61.355,59.245l18.046,17.186c2.653-3.332,4.243-7.548,4.243-12.138c0-10.772-8.732-19.504-19.503-19.504 c-10.772,0-19.505,8.731-19.505,19.504c0,9.823,7.267,17.949,16.719,19.302V59.245z"></path><polygon points="76.513,87.875 86.073,86.514 64.056,65.545 64.056,95.703 71.346,89.958 77.525,104.684 82.663,102.526 "></polygon></g></svg>
                                </div>
                                <p style="text-align: center;margin-bottom: 0px;"><font style="font-size: 25px;color: #000;">Gezielte Werbung</font></p>
                                <br>
                                <p style="text-align: center;margin-bottom: 0px;">Werbung in sozialen Netzwerken.
                                    VKontakte, Instagram, Facebook</p>
                            </div>
                            <div class="carousel-item">
                                <div align="center">
                                    <svg class="svgicon" id="svg61" style="fill: rgb(38, 0, 118);width: 75px" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128"><rect x="0" y="0" width="128" height="128" style="fill: transparent" rx="0%" ry="0%"></rect><g transform="scale(1) translate(0, 0)"><path d="M106.926,21.075c-15.424-15.425-40.424-15.425-55.85,0C37.98,34.168,36.01,54.166,45.148,69.344l-2.934,2.932 c0,0,0.02,0.042,0.059,0.121l-32.082,32.085c-1.129,1.129-0.812,3.418,0.588,5.901c-1.137,1.922-0.895,4.431,0.758,6.083 c1.648,1.649,4.158,1.891,6.082,0.756c2.482,1.398,4.771,1.716,5.902,0.588l35.027-35.028c15.193,9.217,35.252,7.271,48.377-5.854 C122.35,61.504,122.35,36.497,106.926,21.075z M58.115,69.887c-11.537-11.533-11.537-30.24,0-41.771 c11.537-11.537,30.24-11.537,41.771-0.003c11.539,11.537,11.535,30.241,0,41.774C88.355,81.421,69.652,81.424,58.115,69.887z"></path><path d="M82.76,29.285c-16.783,1.726-23.141,15.525-23.305,15.852c-0.738,1.611-0.037,3.53,1.574,4.271 c1.617,0.753,3.535,0.036,4.275-1.568c0,0,0.033-0.074,0.189-0.357c1.115-2.046,6.5-10.728,17.887-11.786 c1.379-0.135,2.469-1.116,2.805-2.384c0.092-0.357,0.129-0.737,0.092-1.133C86.1,30.41,84.531,29.107,82.76,29.285z"></path></g></svg>
                                </div>
                                <p style="text-align: center;margin-bottom: 0px;"><font style="font-size: 25px;color: #000;">SEO (Förderung & Verbesserung)</font></p>
                                <br>
                                <p style="text-align: center;margin-bottom: 0px;">Werbung für Ihre Website in
                                    Suchmaschinen. Verbesserung der
                                    Positionierung der Website in
                                    Suchmaschinen.</p>
                            </div>
                            <div class="carousel-item">
                                <div align="center">
                                    <svg class="svgicon" id="svg62" style="fill: rgb(38, 0, 118);width: 75px" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128"><rect x="0" y="0" width="128" height="128" style="fill: transparent" rx="0%" ry="0%"></rect><g transform="scale(1) translate(0, 0)"><path class="st0" d="M90.504,48.631L81.71,37.974c-1.526-1.86-4.3-2.126-6.157-0.595L26.523,77.827 c-1.854,1.532-2.126,4.303-0.589,6.16l3.537,4.297l1.997,2.422l3.256,3.938c1.532,1.862,4.304,2.127,6.162,0.594l49.027-40.446 C91.77,53.26,92.037,50.486,90.504,48.631z"></path><path class="st0" d="M38.902,56.704l14.325-11.815l3.544-2.925l4.882-4.022l2.066-1.704l8.414-6.95L55.507,9.13 c-2.382-2.884-6.684-3.296-9.572-0.92c-2.884,2.378-3.298,6.689-0.917,9.571l4.604,5.586c-1.437,0.051-2.874,0.56-4.065,1.54 c-0.592,0.492-1.082,1.06-1.464,1.687l-3.527-4.276c-4.491-5.449-12.614-6.224-18.059-1.732c-5.443,4.489-6.222,12.618-1.73,18.058 l3.346,4.061c-3.836-0.969-8.061-0.172-11.326,2.521c-5.444,4.492-6.224,12.621-1.732,18.061l8.046,9.749L36.983,58.29 L38.902,56.704z"></path><path class="st0" d="M119.229,110.369L98.795,85.601c0,0,0.567-0.282,1.612-1.329c1.046-1.047,1.458-10.333-0.716-10.454 c-2.177-0.118-11.327,9.34-11.327,9.34l-0.586-0.71c-0.379-0.468-0.905-1.071-1.361-1.588c-1.124-1.295-1.847-1.905-1.06-3.044 l18.399-26.649c1.999-3.751,2.117-3.966-1.122-7.892l-3.657-4.427c-4.356-5.288-5.163-4.591-9.121-1.184l-0.095,0.078l1.992,2.414 l0.139-0.121c1.945-1.668,2.337-2.007,4.661,0.813l3.656,4.426c1.909,2.314,1.847,2.422,0.786,4.418l-18.529,26.79 c-1.906,2.745-0.826,3.659,1.582,6.423c0.312,0.36,0.676,0.778,1.306,1.54l0.592,0.709c0,0-11.248,7.158-11.248,9.284 s8.823,4.025,10.333,2.516c1.507-1.506,1.685-1.386,1.685-1.386l20.435,24.768c0.963,1.17,2.715,1.339,3.885,0.368l7.821-6.445 C120.024,113.29,120.197,111.543,119.229,110.369z"></path></g></svg>
                                </div>
                                <p style="text-align: center;margin-bottom: 0px;"><font style="font-size: 25px;color: #000;">Design und Grafik (Webseiten Gestaltung)</font></p>
                                <br>
                                <p style="text-align: center;margin-bottom: 0px;">Entwicklung einer Corporate Identity,
                                    Logos, Bildern, Symbolen und
                                    Werbekreativen.
                                </p>
                            </div>
                            <div class="carousel-item">
                                <div align="center">
                                    <svg class="svgicon" id="svg63" style="fill: rgb(38, 0, 118);width: 75px" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128"><rect x="0" y="0" width="128" height="128" style="fill: transparent" rx="0%" ry="0%"></rect><g transform="scale(1) translate(0, 0)"><path d="M111.221,17.876H94.933H16.779c-3.537,0-6.403,2.866-6.403,6.403v55.53v7.695c0,3.537,2.866,6.402,6.403,6.402h35.91 l0.05,7.362l-3.973,6.949v1.16c0,0.938,0.761,0.724,1.702,0.724h27.063c0.938,0,1.703,0.214,1.703-0.724v-1.16l-3.968-6.915 l0.049-7.396h35.904c3.537,0,6.403-2.865,6.403-6.402V79.81v-55.53C117.624,20.742,114.758,17.876,111.221,17.876z M17.641,23.701 h92.525v50.416H17.641V23.701z M67.59,84.748c0.07,1.054,0.757,1.771,1.575,2.151c-0.189,0.555-0.416,1.045-0.695,1.494 c-0.366,0.58-0.888,1.437-1.662,1.602c-0.889,0.183-1.444-0.505-2.419-0.434c-0.739,0.058-1.404,0.666-2.151,0.416 c-0.36-0.126-0.74-0.513-0.984-0.804c-0.755-0.905-1.464-2.314-1.643-3.669c-0.153-1.165,0.004-2.175,0.474-2.949 c0.491-0.807,1.404-1.577,2.623-1.437c0.302,0.031,0.605,0.139,0.883,0.246c0.235,0.09,0.548,0.269,0.843,0.269 c0.274-0.003,0.626-0.193,0.899-0.29c0.315-0.115,0.645-0.236,0.984-0.265c1.236-0.115,1.988,0.494,2.523,1.147 C68.058,82.78,67.499,83.512,67.59,84.748z M65.969,80.258c-0.383,0.413-0.893,0.735-1.603,0.696 c-0.139-1.495,1.051-2.538,2.275-2.728c0.011,0,0.016,0,0.022,0C66.822,79.083,66.409,79.785,65.969,80.258z"></path></g></svg></div>
                                <p style="text-align: center;margin-bottom: 0px;"><font style="font-size: 25px;color: #000;">WEB-Programmierung</font></p>
                                <br>
                                <p style="text-align: center;margin-bottom: 0px;">Wir lösen Probleme, die bei der
                                    Erweiterung der Funktionalität und
                                    Integration von Drittanbieter-Diensten bei
                                    Webseiten auftauchen können.
                                </p>
                            </div>
                        </div>
                    </div>




                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Interior Area =================-->

<!--================Price Area =================-->
<section lang="ru" class="price_area p_120" id="price">
    <div class="container">
        <div class="main_title">
            <h2>Теперь ваша очередь привлекать новых клиентов и зарабатывать в Интернете!</h2>
            <font style="vertical-align: inherit;">Мы позаботимся обо всем от начала до конца.</font>
            <font style="vertical-align: inherit;">От эскиза и настройки веб-хостинга до разработки и доставки.</font>
        </div>
        <div class="price_item_inner row">

            <div class="col-lg-4">
                <div class="price_item">
                    <div class="price_head">
                        <div class="float-left" style="width: 100%">
                            <h3>WEB-START</h3>
                            <font style="vertical-align: inherit;">Сайт-визитка или конверсионный лендинг с отличным дизайном по доступной цене.</font>
                        </div>
                        <div class="float-right">
                            <h2 style="color: rgb(38, 0, 118);">€ 1000</h2>
                        </div>
                    </div>
                    <div class="price_body">
                        <div class="eapps-pricing-table-column-features-container eapps-pricing-table-column-item
    ">

                            <div class="eapps-pricing-table-column-features
									eapps-pricing-table-column-features-clean eapps-pricing-table-column-features-left" eapps-link="inner">
                                <div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon">
                                    <div class="eapps-pricing-table-column-features-item-inner">

                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Одностраничный сайт</font></font></span>



                                    </div>
                                </div>
                                <div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon">
                                    <div class="eapps-pricing-table-column-features-item-inner">

                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Доменное имя</font></font></span>



                                    </div>
                                </div><div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon">
                                    <div class="eapps-pricing-table-column-features-item-inner">
                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Индивидуальный дизайн</font></font></span>



                                    </div>
                                </div><div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon">
                                    <div class="eapps-pricing-table-column-features-item-inner">
                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Адаптация под мобильные устройства</font></font></span>



                                    </div>
                                </div><div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon">
                                    <div class="eapps-pricing-table-column-features-item-inner">
                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Настройка хостинга</font></font></span>



                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="price_footer">
                        <a class="main_btn2" href="#">Начать сейчас</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="price_item">
                    <div class="price_head">
                        <div class="float-left" style="width: 100%">
                            <h3>WEB-PORTAL</h3>
                            <font style="vertical-align: inherit;">Многостраничный сайт с базовым функционалом и продвинутыми настройками&nbsp;&nbsp;&nbsp;&nbsp;</font>
                        </div>
                        <div class="float-right">
                            <h2 style="color: rgb(38, 0, 118);">€ 2000</h2>
                        </div>
                    </div>
                    <div class="price_body">
                        <div class="eapps-pricing-table-column-features-container eapps-pricing-table-column-item
    ">

                            <div class="eapps-pricing-table-column-features eapps-pricing-table-column-features-clean eapps-pricing-table-column-features-left" eapps-link="inner"><div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon">
                                    <div class="eapps-pricing-table-column-features-item-inner">
                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Сайт до 15 страниц</font></font></span>



                                    </div>
                                </div>
                                <div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon
    ">
                                    <div class="eapps-pricing-table-column-features-item-inner">
                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Доменное имя</font></font></span>



                                    </div>
                                </div><div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon
    ">
                                    <div class="eapps-pricing-table-column-features-item-inner">
                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Индивидуальный дизайн</font></font></span>



                                    </div>
                                </div><div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon
    ">
                                    <div class="eapps-pricing-table-column-features-item-inner">
                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Адаптация под мобильные устройства</font></font></span>



                                    </div>
                                </div><div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon
    ">
                                    <div class="eapps-pricing-table-column-features-item-inner">
                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Настройка хостинга</font></font><br></span>



                                    </div>
                                </div><div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon
    ">
                                    <div class="eapps-pricing-table-column-features-item-inner">
                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Собственный E-mail</font></font></span>



                                    </div>
                                </div><div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon
    ">
                                    <div class="eapps-pricing-table-column-features-item-inner">
                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Базовые SEO настройки</font></font></span>
                                    </div>
                                </div><div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon
    ">
                                    <div class="eapps-pricing-table-column-features-item-inner">
                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Счетчики и аналитика</font></font></span>



                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="price_footer">
                        <a class="main_btn2" href="#">Начать сейчас</a>
                    </div>
                </div>
            </div>



            <div class="col-lg-4">
                <div class="price_item">
                    <div class="price_head">
                        <div class="float-left" style="width: 100%">
                            <h3>E-Commerce</h3>
                            <font style="vertical-align: inherit;">
                                Интернет-магазин с корзиной, приемом платежей и настройками для продвижения в интернете
                            </font>
                        </div>
                        <div class="float-right">
                            <h2 style="color: rgb(38, 0, 118);">€ 3000</h2>
                        </div>
                    </div>
                    <div class="price_body">
                        <div class="eapps-pricing-table-column-features-container eapps-pricing-table-column-item
    ">

                            <div class="eapps-pricing-table-column-features eapps-pricing-table-column-features-clean eapps-pricing-table-column-features-left" eapps-link="inner"><div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon
    ">
                                    <div class="eapps-pricing-table-column-features-item-inner">
                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Сайт до 50 страниц</font></font></span>

                                    </div>
                                </div>
                                <div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon
    ">
                                    <div class="eapps-pricing-table-column-features-item-inner">
                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Доменное имя</font></font></span>



                                    </div>
                                </div><div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon
    ">
                                    <div class="eapps-pricing-table-column-features-item-inner">
                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Индивидуальный дизайн</font></font></span>



                                    </div>
                                </div><div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon
    ">
                                    <div class="eapps-pricing-table-column-features-item-inner">
                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Адаптация под мобильные устройства</font></font></span>

                                    </div>
                                </div><div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon
    ">
                                    <div class="eapps-pricing-table-column-features-item-inner">
                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Настройка хостинга</font></font></span>



                                    </div>
                                </div><div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon
    ">
                                    <div class="eapps-pricing-table-column-features-item-inner">
                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Собственный E-mail</font></font></span>



                                    </div>
                                </div><div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon
    ">
                                    <div class="eapps-pricing-table-column-features-item-inner">
                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Продвинутые SEO настройки</font></font></span>



                                    </div>
                                </div><div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon
    ">
                                    <div class="eapps-pricing-table-column-features-item-inner">
                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Счетчики и аналитика</font></font></span>



                                    </div>
                                </div><div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon
    ">
                                    <div class="eapps-pricing-table-column-features-item-inner">
                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Корзина и оформление заказов на сайте</font></font></span>



                                    </div>
                                </div><div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon
    ">
                                    <div class="eapps-pricing-table-column-features-item-inner">
                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Прием платежей</font></font></span>



                                    </div>
                                </div><div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon
    ">
                                    <div class="eapps-pricing-table-column-features-item-inner">
                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Личный кабинет клиента</font></font></span>



                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="price_footer">
                        <a class="main_btn2" href="#">Начать сейчас</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section lang="en" class="price_area p_120" id="price">
    <div class="container">
        <div class="main_title">
            <h2>Now it's your turn to attract new clients and make money online!</h2>
            <font style="vertical-align: inherit;">We take care of everything from start to finish.</font>
            <font style="vertical-align: inherit;">From sketching and setting up web hosting to development and delivery.</font>
        </div>
        <div class="price_item_inner row">

            <div class="col-lg-4">
                <div class="price_item">
                    <div class="price_head">
                        <div class="float-left" style="width: 100%">
                            <h3>WEB-START</h3>
                            <font style="vertical-align: inherit;">A business card site or conversion landing page with an excellent design at an affordable price.</font>
                        </div>
                        <div class="float-right">
                            <h2 style="color: rgb(38, 0, 118);">€ 1000</h2>
                        </div>
                    </div>
                    <div class="price_body">
                        <div class="eapps-pricing-table-column-features-container eapps-pricing-table-column-item
    ">

                            <div class="eapps-pricing-table-column-features
									eapps-pricing-table-column-features-clean eapps-pricing-table-column-features-left" eapps-link="inner">
                                <div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon">
                                    <div class="eapps-pricing-table-column-features-item-inner">

                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">One page website</font></font></span>



                                    </div>
                                </div>
                                <div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon">
                                    <div class="eapps-pricing-table-column-features-item-inner">

                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Domain name</font></font></span>



                                    </div>
                                </div><div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon">
                                    <div class="eapps-pricing-table-column-features-item-inner">
                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Individual design</font></font></span>



                                    </div>
                                </div><div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon">
                                    <div class="eapps-pricing-table-column-features-item-inner">
                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Adaptation for mobile devices</font></font></span>



                                    </div>
                                </div><div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon">
                                    <div class="eapps-pricing-table-column-features-item-inner">
                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hosting setup</font></font></span>



                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="price_footer">
                        <a class="main_btn2" href="#">Start now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="price_item">
                    <div class="price_head">
                        <div class="float-left" style="width: 100%">
                            <h3>WEB-PORTAL</h3>
                            <font style="vertical-align: inherit;">Multi-page site with basic functionality and advanced settings&nbsp;&nbsp;&nbsp;&nbsp;</font>
                        </div>
                        <div class="float-right"><br>
                            <h2 style="color: rgb(38, 0, 118);">€ 2000</h2>
                        </div>
                    </div>
                    <div class="price_body">
                        <div class="eapps-pricing-table-column-features-container eapps-pricing-table-column-item
    ">

                            <div class="eapps-pricing-table-column-features eapps-pricing-table-column-features-clean eapps-pricing-table-column-features-left" eapps-link="inner"><div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon">
                                    <div class="eapps-pricing-table-column-features-item-inner">
                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Website up to 15 pages</font></font></span>



                                    </div>
                                </div>
                                <div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon
    ">
                                    <div class="eapps-pricing-table-column-features-item-inner">
                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Domain name</font></font></span>



                                    </div>
                                </div><div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon
    ">
                                    <div class="eapps-pricing-table-column-features-item-inner">
                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Individual design</font></font></span>



                                    </div>
                                </div><div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon
    ">
                                    <div class="eapps-pricing-table-column-features-item-inner">
                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Adaptation for mobile devices</font></font></span>



                                    </div>
                                </div><div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon
    ">
                                    <div class="eapps-pricing-table-column-features-item-inner">
                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hosting setup</font></font><br></span>



                                    </div>
                                </div><div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon
    ">
                                    <div class="eapps-pricing-table-column-features-item-inner">
                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Own E-mail</font></font></span>



                                    </div>
                                </div><div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon
    ">
                                    <div class="eapps-pricing-table-column-features-item-inner">
                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Basic SEO settings</font></font></span>
                                    </div>
                                </div><div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon
    ">
                                    <div class="eapps-pricing-table-column-features-item-inner">
                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Counters and analytics</font></font></span>



                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="price_footer">
                        <a class="main_btn2" href="#">Start now</a>
                    </div>
                </div>
            </div>



            <div class="col-lg-4">
                <div class="price_item">
                    <div class="price_head">
                        <div class="float-left" style="width: 100%">
                            <h3>E-Commerce</h3>
                            <font style="vertical-align: inherit;">
                                An online store with a shopping cart, accepting payments and settings for online promotion
                            </font>
                        </div>
                        <div class="float-right">
                            <h2 style="color: rgb(38, 0, 118);">€ 3000</h2>
                        </div>
                    </div>
                    <div class="price_body">
                        <div class="eapps-pricing-table-column-features-container eapps-pricing-table-column-item
    ">

                            <div class="eapps-pricing-table-column-features eapps-pricing-table-column-features-clean eapps-pricing-table-column-features-left" eapps-link="inner"><div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon
    ">
                                    <div class="eapps-pricing-table-column-features-item-inner">
                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Website up to 50 pages</font></font></span>

                                    </div>
                                </div>
                                <div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon
    ">
                                    <div class="eapps-pricing-table-column-features-item-inner">
                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Domain name</font></font></span>



                                    </div>
                                </div><div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon
    ">
                                    <div class="eapps-pricing-table-column-features-item-inner">
                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Individual design</font></font></span>



                                    </div>
                                </div><div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon
    ">
                                    <div class="eapps-pricing-table-column-features-item-inner">
                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Adaptation for mobile devices</font></font></span>

                                    </div>
                                </div><div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon
    ">
                                    <div class="eapps-pricing-table-column-features-item-inner">
                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hosting setup</font></font></span>



                                    </div>
                                </div><div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon
    ">
                                    <div class="eapps-pricing-table-column-features-item-inner">
                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Own E-mail</font></font></span>



                                    </div>
                                </div><div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon
    ">
                                    <div class="eapps-pricing-table-column-features-item-inner">
                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Advanced SEO settings</font></font></span>



                                    </div>
                                </div><div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon
    ">
                                    <div class="eapps-pricing-table-column-features-item-inner">
                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Counters and analytics</font></font></span>



                                    </div>
                                </div><div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon
    ">
                                    <div class="eapps-pricing-table-column-features-item-inner">
                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Shopping cart and online ordering</font></font></span>



                                    </div>
                                </div><div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon
    ">
                                    <div class="eapps-pricing-table-column-features-item-inner">
                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Acceptance of payments</font></font></span>



                                    </div>
                                </div><div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon
    ">
                                    <div class="eapps-pricing-table-column-features-item-inner">
                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Client's personal account</font></font></span>



                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="price_footer">
                        <a class="main_btn2" href="#">Start now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section lang="de" class="price_area p_120" id="price">
    <div class="container">
        <div class="main_title">
            <h2>Теперь ваша очередь привлекать новых клиентов и зарабатывать в Интернете!</h2>
            <font style="vertical-align: inherit;">Мы позаботимся обо всем от начала до конца.</font>
            <font style="vertical-align: inherit;">От эскиза и настройки веб-хостинга до разработки и доставки.</font>
        </div>
        <div class="price_item_inner row">

            <div class="col-lg-4">
                <div class="price_item">
                    <div class="price_head">
                        <div class="float-left" style="width: 100%">
                            <h3>WEB-START</h3>
                            <font style="vertical-align: inherit;">Visitenkarte oder Zielseite für die
                                Konvertierung mit ausgezeichnetem Design
                                zu einem erschwinglichen Preis.</font>
                        </div>
                        <div class="float-right">
                            <h2 style="color: rgb(38, 0, 118);">€ 1000</h2>
                        </div>
                    </div>
                    <div class="price_body">
                        <div class="eapps-pricing-table-column-features-container eapps-pricing-table-column-item
    ">

                            <div class="eapps-pricing-table-column-features
									eapps-pricing-table-column-features-clean eapps-pricing-table-column-features-left" eapps-link="inner">
                                <div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon">
                                    <div class="eapps-pricing-table-column-features-item-inner">

                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Einseitige Website</font></font></span>



                                    </div>
                                </div>
                                <div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon">
                                    <div class="eapps-pricing-table-column-features-item-inner">

                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Domain-Name</font></font></span>



                                    </div>
                                </div><div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon">
                                    <div class="eapps-pricing-table-column-features-item-inner">
                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Individuelles Design</font></font></span>



                                    </div>
                                </div><div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon">
                                    <div class="eapps-pricing-table-column-features-item-inner">
                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Anpassung an mobile Geräte</font></font></span>



                                    </div>
                                </div><div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon">
                                    <div class="eapps-pricing-table-column-features-item-inner">
                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hosting einrichten</font></font></span>



                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="price_footer">
                        <a class="main_btn2" href="#">Jetzt starten</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="price_item">
                    <div class="price_head">
                        <div class="float-left" style="width: 100%">
                            <h3>WEB-PORTAL</h3>
                            <font style="vertical-align: inherit;">Mehrseitige Website mit grundlegenden
                                Funktionen und erweiterten Einstellungen&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font>
                        </div>
                        <div class="float-right"><br>
                            <h2 style="color: rgb(38, 0, 118);">€ 2000</h2>
                        </div>
                    </div>
                    <div class="price_body">
                        <div class="eapps-pricing-table-column-features-container eapps-pricing-table-column-item
    ">

                            <div class="eapps-pricing-table-column-features eapps-pricing-table-column-features-clean eapps-pricing-table-column-features-left" eapps-link="inner"><div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon">
                                    <div class="eapps-pricing-table-column-features-item-inner">
                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Website bis zu 15 Seiten</font></font></span>



                                    </div>
                                </div>
                                <div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon
    ">
                                    <div class="eapps-pricing-table-column-features-item-inner">
                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Domain-Name</font></font></span>



                                    </div>
                                </div><div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon
    ">
                                    <div class="eapps-pricing-table-column-features-item-inner">
                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Individuelles Design</font></font></span>



                                    </div>
                                </div><div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon
    ">
                                    <div class="eapps-pricing-table-column-features-item-inner">
                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Anpassung an mobile Geräte</font></font></span>



                                    </div>
                                </div><div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon
    ">
                                    <div class="eapps-pricing-table-column-features-item-inner">
                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hosting einrichten</font></font><br></span>



                                    </div>
                                </div><div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon
    ">
                                    <div class="eapps-pricing-table-column-features-item-inner">
                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Eigene E-Mail</font></font></span>



                                    </div>
                                </div><div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon
    ">
                                    <div class="eapps-pricing-table-column-features-item-inner">
                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Grundlegende SEO-Einstellungen</font></font></span>
                                    </div>
                                </div><div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon
    ">
                                    <div class="eapps-pricing-table-column-features-item-inner">
                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Zähler und Analysen</font></font></span>



                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="price_footer">
                        <a class="main_btn2" href="#">Jetzt starten</a>
                    </div>
                </div>
            </div>



            <div class="col-lg-4">
                <div class="price_item">
                    <div class="price_head">
                        <div class="float-left" style="width: 100%">
                            <h3>E-Commerce</h3>
                            <font style="vertical-align: inherit;">
                                Online-Shop mit Warenkorb,
                                Zahlungsannahme und Einstellungen für
                                die Online-Promotion
                            </font>
                        </div>
                        <div class="float-right">
                            <h2 style="color: rgb(38, 0, 118);">€ 3000</h2>
                        </div>
                    </div>
                    <div class="price_body">
                        <div class="eapps-pricing-table-column-features-container eapps-pricing-table-column-item
    ">

                            <div class="eapps-pricing-table-column-features eapps-pricing-table-column-features-clean eapps-pricing-table-column-features-left" eapps-link="inner"><div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon
    ">
                                    <div class="eapps-pricing-table-column-features-item-inner">
                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Website bis zu 50 Seiten</font></font></span>

                                    </div>
                                </div>
                                <div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon
    ">
                                    <div class="eapps-pricing-table-column-features-item-inner">
                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Domain-Name</font></font></span>



                                    </div>
                                </div><div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon
    ">
                                    <div class="eapps-pricing-table-column-features-item-inner">
                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Individuelles Design</font></font></span>



                                    </div>
                                </div><div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon
    ">
                                    <div class="eapps-pricing-table-column-features-item-inner">
                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Anpassung an mobile Geräte</font></font></span>

                                    </div>
                                </div><div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon
    ">
                                    <div class="eapps-pricing-table-column-features-item-inner">
                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hosting einrichten</font></font></span>



                                    </div>
                                </div><div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon
    ">
                                    <div class="eapps-pricing-table-column-features-item-inner">
                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Eigene E-Mail</font></font></span>



                                    </div>
                                </div><div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon
    ">
                                    <div class="eapps-pricing-table-column-features-item-inner">
                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Erweiterte SEO-Einstellungen</font></font></span>



                                    </div>
                                </div><div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon
    ">
                                    <div class="eapps-pricing-table-column-features-item-inner">
                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Zähler und Analysen</font></font></span>



                                    </div>
                                </div><div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon
    ">
                                    <div class="eapps-pricing-table-column-features-item-inner">
                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Warenkorb und Bestellungen auf der Website</font></font></span>



                                    </div>
                                </div><div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon
    ">
                                    <div class="eapps-pricing-table-column-features-item-inner">
                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Zahlungen akzeptieren</font></font></span>



                                    </div>
                                </div><div class="eapps-pricing-table-column-features-item
    eapps-pricing-table-column-features-item-with-icon
    ">
                                    <div class="eapps-pricing-table-column-features-item-inner">
                                        <span eapps-link="icon" style="color: rgb(38, 0, 118);font-weight: bold;font-size: 20px">&check;</span>
                                        <span class="eapps-pricing-table-column-features-item-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Persönliches Kundenkabinett</font></font></span>



                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="price_footer">
                        <a class="main_btn2" href="#">Jetzt starten</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Price Area =================-->

<!--================Testimonials Area =================-->
<section class="testimonials_area p_120" id="reviews">
    <div class="container">
        <div class="main_title" lang="ru">
            <h2>Что говорят наши клиенты?</h2>
        </div>
        <div class="main_title" lang="en">
            <h2>What do our clients say?</h2>
        </div>
        <div class="main_title" lang="de">
            <h2>Was sagen unsere Kunden?</h2>
        </div>
        <div class="testi_slider owl-carousel">
            <div class="item">
                <div class="testi_item">
                    <div class="media">
                        <div class="d-flex">
                            <img src="https://lh3.googleusercontent.com/a/AATXAJyCkcLLmcwg0Nrh-cBvlL4cba3dtluCj3apHk8K=s120-c-c-rp-w64-h64-mo-br100" alt="Никлас Кресснер" data-lazy-src="https://lh3.googleusercontent.com/a/AATXAJyCkcLLmcwg0Nrh-cBvlL4cba3dtluCj3apHk8K=s120-c-c-rp-w64-h64-mo-br100" data-ll-status="loaded" class="entered lazyloaded">
                        </div>
                        <div class="media-body">
                            <p>Никлас Кресснер</p>
                            <p>Я очень доволен Sitea! Быстрое и хорошее обслуживание. Настоятельно рекомендуется!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testi_item">
                    <div class="media">
                        <div class="d-flex">
                            <img src="https://lh3.googleusercontent.com/a-/AOh14GgjGkvL2vTIIB4MNjJftJPCx1fZR15n2IJH9uV4=s120-c-c-rp-w64-h64-mo-br100" alt="Хокан Мелин" data-lazy-src="https://lh3.googleusercontent.com/a-/AOh14GgjGkvL2vTIIB4MNjJftJPCx1fZR15n2IJH9uV4=s120-c-c-rp-w64-h64-mo-br100" data-ll-status="loaded" class="entered lazyloaded">
                        </div>
                        <div class="media-body">
                            <p>Хокан Мелин</p>
                            <p>Использовал Sitea для настройки веб-сайта и начала работы с Google Analytics и Google Ads и очень доволен обслуживанием и реакцией. Хокан Мелин - Настройка продаж</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testi_item">
                    <div class="media">
                        <div class="d-flex">
                            <img src="https://lh3.googleusercontent.com/a-/AOh14Gg4vupiV1LgyouOkzHS3HLNkLPrNhGJuiq3GCVP=s120-c-c-rp-w64-h64-mo-br100" alt="Лена Магисте" data-lazy-src="https://lh3.googleusercontent.com/a-/AOh14Gg4vupiV1LgyouOkzHS3HLNkLPrNhGJuiq3GCVP=s120-c-c-rp-w64-h64-mo-br100" data-ll-status="loaded" class="entered lazyloaded">
                        </div>
                        <div class="media-body">
                            <p>Лена Магисте</p>
                            <p>Мы в LM Travel очень довольны нашим сайтом! Сайта отзывчивый, профессиональный и с отличным личным обслуживанием.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testi_item">
                    <div class="media">
                        <div class="d-flex">
                            <img src="https://lh3.googleusercontent.com/a-/AOh14GhDGS7fGU8wuURE7eY5mZ_SDXE0_d2WnsHrlv0XTg=s120-c-c-rp-w64-h64-mo-br100" alt="Фарис I" data-lazy-src="https://lh3.googleusercontent.com/a-/AOh14GhDGS7fGU8wuURE7eY5mZ_SDXE0_d2WnsHrlv0XTg=s120-c-c-rp-w64-h64-mo-br100" data-ll-status="loaded" class="entered lazyloaded">
                        </div>
                        <div class="media-body">
                            <p>Фарис I</p>
                            <p>Получил помощь в разработке моего музыкального сайта. Быстрое обслуживание и дружелюбный персонал. Большое спасибо Дэну за помощь!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Testimonials Area =================-->

<!--================ start footer Area  =================-->
<footer class="footer-area p_120" id="contacts" style="display: table;width: 100%">
<div lang="ru">
    <div class="footer_t" >
        <h4 class="font-header spans xs-force-center textable"><span class="p"><strong>
                        <span style="font-size: 14px;color: white;">О КОМПАНИИ:</span></strong></span></h4>
        <p><span style="color: rgb(215, 215, 215);">
                        <span style="font-size: 14px;">Компания NORDPROMOTION создает отличные сайты и настраивает эффективные рекламные кампании в интернете.</span></span></p>
    </div>
    <div class="footer_t" >
        <h4 class="font-header spans xs-force-center textable"><span class="p">
                    <span style="font-size: 14px;color: white;"><strong>КОНТАКТЫ</strong></span></span></h4>
        <div>
            <div style="float: left;">
                <svg class="svgicon" id="svg67" style="fill: rgb(38, 0, 118);width: 25px" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 128 128"><rect x="0" y="0" width="128" height="128" style="fill: transparent" rx="50%" ry="50%">
                    </rect><g transform="scale(0.6) translate(42.66666666666667, 42.66666666666667)">
                        <path class="st0" d="M48.097,15.739c0.042-0.004,0.079-0.006,0.112-0.008c0.031,0.075,0.068,0.179,0.109,0.313 c0.017,0.057,0.036,0.112,0.057,0.168l8.195,22.154c0.035,0.092,0.058,0.192,0.069,0.281c-1.168,0.762-1.632,2.285-1.027,3.587 c0.482,1.04,1.513,1.651,2.587,1.651c0.402,0,0.81-0.085,1.198-0.266c2.961-1.374,3.493-4.719,2.503-7.272l-8.152-22.037 c-0.935-3-3.111-4.505-6.136-4.252c-1.568,0.134-2.731,1.515-2.598,3.082C45.149,14.709,46.518,15.865,48.097,15.739z"></path><path class="st0" d="M79.297,82.402c-0.534-0.539-1.26-0.843-2.019-0.845c-0.003,0-0.005,0-0.007,0 c-0.756,0-1.48,0.301-2.016,0.835c-0.507,0.506-0.895,0.949-1.257,1.363c-0.622,0.712-0.996,1.142-1.903,1.748 c-0.697,0.463-1.681,0.13-2.222-0.68l-22.249-33.52c-0.615-0.921-0.49-2.266,0.25-2.762c0.883-0.587,1.017-0.636,1.66-0.863 c0.447-0.159,1.057-0.375,2.029-0.788c1.419-0.602,2.103-2.221,1.544-3.657L41.862,14.338c-0.285-0.731-0.858-1.313-1.585-1.608 c-0.729-0.294-1.544-0.276-2.257,0.05c-3.831,1.753-7.168,4.017-10.226,6.945c-3.212,3.148-6.564,7.769-7.799,10.745 c-0.172,0.412-0.243,0.859-0.21,1.304c0.908,12.188,9.079,31.691,20.329,48.529c11.075,16.58,26.313,31.943,37.057,37.36 c0.398,0.2,0.838,0.305,1.283,0.305h0.003c4.213-0.004,9.75-2.174,11.962-3.118c4.092-1.797,8.318-4.367,10.518-6.397 c0.568-0.524,0.899-1.257,0.917-2.03s-0.28-1.52-0.824-2.069L79.297,82.402z"></path><path class="st0" d="M106.854,94.795c-0.063-0.078-0.132-0.152-0.204-0.223L89.336,77.573c-1.947-1.847-5.317-2.623-7.724-0.427 c-1.163,1.061-1.245,2.864-0.184,4.025c0.987,1.081,2.615,1.229,3.772,0.391c0.067,0.033,0.136,0.074,0.177,0.112l17.089,16.778 c0.078,0.19,0.109,0.616-0.062,0.926c-0.76,1.379-0.259,3.112,1.119,3.873c0.437,0.24,0.908,0.354,1.374,0.354 c1.005,0,1.979-0.532,2.498-1.474C108.674,99.816,108.447,96.73,106.854,94.795z">
                        </path></g></svg>
            </div>
            <div style="float: left; justify-content: center"><span style="color: white;font-size: 14px;">
                <a href="tel:4917632364735" style="color: white" target="_blank">+49-176-323-647-35</a></span></div>
        </div>
        <div style="clear:both;">
            <div style="float:left; ">
                <svg class="svgicon" id="svg68" style="fill: rgb(38, 0, 118);width: 25px" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128"><rect x="0" y="0" width="128" height="128" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.6) translate(42.66666666666667, 42.66666666666667)"><path d="M102.58,48.734L64.26,71.228L25.357,48.698l-0.005,33.551v2.917c0,1.911,1.554,3.462,3.462,3.462h70.369 c1.914,0,3.464-1.551,3.464-3.462l-0.005-2.868L102.58,48.734z"></path><path d="M102.647,42.833c0-1.911-1.55-3.461-3.464-3.461H28.814c-1.908,0-3.462,1.551-3.462,3.461L64.26,63.622L102.647,42.833z"></path></g></svg>
            </div>
            <div style="float: left;justify-content: center"><span style="color: white;font-size: 14px;">
                <a href="mailto:nordiskapromo@gmail.com" style="color: white" target="_blank">nordiskapromo@gmail.com</a></span></div></div>


        <div style="clear:both;">
            <div style="float:left; ">
                <svg class="svgicon" id="svg69" style="fill: rgb(38, 0, 118);width: 25px" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128"><rect x="0" y="0" width="128" height="128" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.6) translate(42.66666666666667, 42.66666666666667)"><path class="st0" d="M63.998,13.879c-18.965,0-34.393,15.43-34.393,34.395c0,18.066,30.621,62.662,31.924,64.551 c0.561,0.812,1.482,1.297,2.469,1.297s1.91-0.484,2.471-1.297c1.303-1.889,31.926-46.484,31.926-64.551 C98.395,29.309,82.965,13.879,63.998,13.879z M63.998,27.27c11.381,0,20.639,9.259,20.639,20.639s-9.258,20.638-20.639,20.638 c-11.379,0-20.637-9.258-20.637-20.638S52.619,27.27,63.998,27.27z"></path></g></svg>
            </div>
            <div style="float: left;justify-content: center">
                <span style="color: white;font-size: 14px;">14057 Berlin, Friedbergstr, 5</a></span></div></div>

    </div>
     <div class="footer_t">
        <h4 class="font-header spans xs-force-center textable">
                            <span class="p"><strong><span style="font-size: 14px;color: white;">
                                ПРИСОЕДИНЯЙТЕСЬ</span></strong></span></h4>
        <br>

        <div class="social facebook">
            <a href="http://facebook.com/groupname" target="_blank"" target="_blank">
            <svg role="img" viewBox="0 0 320 512">
                <path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/>
            </svg>
            </a>
        </div>
        <div class="social instagram">
            <a href="https://instagram.com" target="_blank">
                <svg role="img" viewBox="0 0 448 512">
                    <path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/>
                </svg>
            </a>
        </div>
        <div class="social telegram">
            <a href="https://t.me" target="_blank">
                <svg role="img" viewBox="0 0 448 512">
                    <path fill="currentColor" d="M446.7 98.6l-67.6 318.8c-5.1 22.5-18.4 28.1-37.3 17.5l-103-75.9-49.7 47.8c-5.5 5.5-10.1 10.1-20.7 10.1l7.4-104.9 190.9-172.5c8.3-7.4-1.8-11.5-12.9-4.1L117.8 284 16.2 252.2c-22.1-6.9-22.5-22.1 4.6-32.7L418.2 66.4c18.4-6.9 34.5 4.1 28.5 32.2z"/>
                </svg>
            </a>
        </div>
        <div class="social vk">
            <a href="http://vk.com/groupname" target="_blank">
                <svg role="img" viewBox="0 0 576 512">
                    <path fill="currentColor" d="M545 117.7c3.7-12.5 0-21.7-17.8-21.7h-58.9c-15 0-21.9 7.9-25.6 16.7 0 0-30 73.1-72.4 120.5-13.7 13.7-20 18.1-27.5 18.1-3.7 0-9.4-4.4-9.4-16.9V117.7c0-15-4.2-21.7-16.6-21.7h-92.6c-9.4 0-15 7-15 13.5 0 14.2 21.2 17.5 23.4 57.5v86.8c0 19-3.4 22.5-10.9 22.5-20 0-68.6-73.4-97.4-157.4-5.8-16.3-11.5-22.9-26.6-22.9H38.8c-16.8 0-20.2 7.9-20.2 16.7 0 15.6 20 93.1 93.1 195.5C160.4 378.1 229 416 291.4 416c37.5 0 42.1-8.4 42.1-22.9 0-66.8-3.4-73.1 15.4-73.1 8.7 0 23.7 4.4 58.7 38.1 40 40 46.6 57.9 69 57.9h58.9c16.8 0 25.3-8.4 20.4-25-11.2-34.9-86.9-106.7-90.3-111.5-8.7-11.2-6.2-16.2 0-26.2.1-.1 72-101.3 79.4-135.6z"/>
                </svg>
            </a>
        </div>
        <div class="social whatsapp">
            <a href="https://api.whatsapp.com/send?phone=4917632364735" target="_blank">
                <svg role="img" viewBox="0 0 448 512">
                    <path fill="currentColor" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/>
                </svg>
            </a>
        </div>
    </div>
    </div>
    <div lang="en">
        <div class="footer_t" >
            <h4 class="font-header spans xs-force-center textable"><span class="p"><strong>
                        <span style="font-size: 14px;color: white;">ABOUT COMPANY:</span></strong></span></h4>
            <p><span style="color: rgb(215, 215, 215);">
                        <span style="font-size: 14px;">NORDPROMOTION creates excellent websites and sets up effective advertising campaigns on the Internet.</span></span></p>
        </div>
        <div class="footer_t" >
            <h4 class="font-header spans xs-force-center textable"><span class="p">
                    <span style="font-size: 14px;color: white;"><strong>CONTACTS</strong></span></span></h4>
            <div>
                <div style="float: left;">
                    <svg class="svgicon" id="svg67" style="fill: rgb(38, 0, 118);width: 25px" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 128 128"><rect x="0" y="0" width="128" height="128" style="fill: transparent" rx="50%" ry="50%">
                        </rect><g transform="scale(0.6) translate(42.66666666666667, 42.66666666666667)">
                            <path class="st0" d="M48.097,15.739c0.042-0.004,0.079-0.006,0.112-0.008c0.031,0.075,0.068,0.179,0.109,0.313 c0.017,0.057,0.036,0.112,0.057,0.168l8.195,22.154c0.035,0.092,0.058,0.192,0.069,0.281c-1.168,0.762-1.632,2.285-1.027,3.587 c0.482,1.04,1.513,1.651,2.587,1.651c0.402,0,0.81-0.085,1.198-0.266c2.961-1.374,3.493-4.719,2.503-7.272l-8.152-22.037 c-0.935-3-3.111-4.505-6.136-4.252c-1.568,0.134-2.731,1.515-2.598,3.082C45.149,14.709,46.518,15.865,48.097,15.739z"></path><path class="st0" d="M79.297,82.402c-0.534-0.539-1.26-0.843-2.019-0.845c-0.003,0-0.005,0-0.007,0 c-0.756,0-1.48,0.301-2.016,0.835c-0.507,0.506-0.895,0.949-1.257,1.363c-0.622,0.712-0.996,1.142-1.903,1.748 c-0.697,0.463-1.681,0.13-2.222-0.68l-22.249-33.52c-0.615-0.921-0.49-2.266,0.25-2.762c0.883-0.587,1.017-0.636,1.66-0.863 c0.447-0.159,1.057-0.375,2.029-0.788c1.419-0.602,2.103-2.221,1.544-3.657L41.862,14.338c-0.285-0.731-0.858-1.313-1.585-1.608 c-0.729-0.294-1.544-0.276-2.257,0.05c-3.831,1.753-7.168,4.017-10.226,6.945c-3.212,3.148-6.564,7.769-7.799,10.745 c-0.172,0.412-0.243,0.859-0.21,1.304c0.908,12.188,9.079,31.691,20.329,48.529c11.075,16.58,26.313,31.943,37.057,37.36 c0.398,0.2,0.838,0.305,1.283,0.305h0.003c4.213-0.004,9.75-2.174,11.962-3.118c4.092-1.797,8.318-4.367,10.518-6.397 c0.568-0.524,0.899-1.257,0.917-2.03s-0.28-1.52-0.824-2.069L79.297,82.402z"></path><path class="st0" d="M106.854,94.795c-0.063-0.078-0.132-0.152-0.204-0.223L89.336,77.573c-1.947-1.847-5.317-2.623-7.724-0.427 c-1.163,1.061-1.245,2.864-0.184,4.025c0.987,1.081,2.615,1.229,3.772,0.391c0.067,0.033,0.136,0.074,0.177,0.112l17.089,16.778 c0.078,0.19,0.109,0.616-0.062,0.926c-0.76,1.379-0.259,3.112,1.119,3.873c0.437,0.24,0.908,0.354,1.374,0.354 c1.005,0,1.979-0.532,2.498-1.474C108.674,99.816,108.447,96.73,106.854,94.795z">
                            </path></g></svg>
                </div>
                <div style="float: left; justify-content: center"><span style="color: white;font-size: 14px;">
                <a href="tel:4917632364735" style="color: white" target="_blank">+49-176-323-647-35</a></span></div>
            </div>
            <div style="clear:both;">
                <div style="float:left; ">
                    <svg class="svgicon" id="svg68" style="fill: rgb(38, 0, 118);width: 25px" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128"><rect x="0" y="0" width="128" height="128" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.6) translate(42.66666666666667, 42.66666666666667)"><path d="M102.58,48.734L64.26,71.228L25.357,48.698l-0.005,33.551v2.917c0,1.911,1.554,3.462,3.462,3.462h70.369 c1.914,0,3.464-1.551,3.464-3.462l-0.005-2.868L102.58,48.734z"></path><path d="M102.647,42.833c0-1.911-1.55-3.461-3.464-3.461H28.814c-1.908,0-3.462,1.551-3.462,3.461L64.26,63.622L102.647,42.833z"></path></g></svg>
                </div>
                <div style="float: left;justify-content: center"><span style="color: white;font-size: 14px;">
                <a href="mailto:nordiskapromo@gmail.com" style="color: white" target="_blank">nordiskapromo@gmail.com</a></span></div></div>


            <div style="clear:both;">
                <div style="float:left; ">
                    <svg class="svgicon" id="svg69" style="fill: rgb(38, 0, 118);width: 25px" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128"><rect x="0" y="0" width="128" height="128" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.6) translate(42.66666666666667, 42.66666666666667)"><path class="st0" d="M63.998,13.879c-18.965,0-34.393,15.43-34.393,34.395c0,18.066,30.621,62.662,31.924,64.551 c0.561,0.812,1.482,1.297,2.469,1.297s1.91-0.484,2.471-1.297c1.303-1.889,31.926-46.484,31.926-64.551 C98.395,29.309,82.965,13.879,63.998,13.879z M63.998,27.27c11.381,0,20.639,9.259,20.639,20.639s-9.258,20.638-20.639,20.638 c-11.379,0-20.637-9.258-20.637-20.638S52.619,27.27,63.998,27.27z"></path></g></svg>
                </div>
                <div style="float: left;justify-content: center">
                    <span style="color: white;font-size: 14px;">14057 Berlin, Friedbergstr, 5</a></span></div></div>

        </div>
        <div class="footer_t">
            <h4 class="font-header spans xs-force-center textable">
                            <span class="p"><strong><span style="font-size: 14px;color: white;">
                                JOIN</span></strong></span></h4>
            <br>

            <div class="social facebook">
                <a href="http://facebook.com/groupname" target="_blank"" target="_blank">
                <svg role="img" viewBox="0 0 320 512">
                    <path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/>
                </svg>
                </a>
            </div>
            <div class="social instagram">
                <a href="https://instagram.com" target="_blank">
                    <svg role="img" viewBox="0 0 448 512">
                        <path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/>
                    </svg>
                </a>
            </div>
            <div class="social telegram">
                <a href="https://t.me" target="_blank">
                    <svg role="img" viewBox="0 0 448 512">
                        <path fill="currentColor" d="M446.7 98.6l-67.6 318.8c-5.1 22.5-18.4 28.1-37.3 17.5l-103-75.9-49.7 47.8c-5.5 5.5-10.1 10.1-20.7 10.1l7.4-104.9 190.9-172.5c8.3-7.4-1.8-11.5-12.9-4.1L117.8 284 16.2 252.2c-22.1-6.9-22.5-22.1 4.6-32.7L418.2 66.4c18.4-6.9 34.5 4.1 28.5 32.2z"/>
                    </svg>
                </a>
            </div>
            <div class="social vk">
                <a href="http://vk.com/groupname" target="_blank">
                    <svg role="img" viewBox="0 0 576 512">
                        <path fill="currentColor" d="M545 117.7c3.7-12.5 0-21.7-17.8-21.7h-58.9c-15 0-21.9 7.9-25.6 16.7 0 0-30 73.1-72.4 120.5-13.7 13.7-20 18.1-27.5 18.1-3.7 0-9.4-4.4-9.4-16.9V117.7c0-15-4.2-21.7-16.6-21.7h-92.6c-9.4 0-15 7-15 13.5 0 14.2 21.2 17.5 23.4 57.5v86.8c0 19-3.4 22.5-10.9 22.5-20 0-68.6-73.4-97.4-157.4-5.8-16.3-11.5-22.9-26.6-22.9H38.8c-16.8 0-20.2 7.9-20.2 16.7 0 15.6 20 93.1 93.1 195.5C160.4 378.1 229 416 291.4 416c37.5 0 42.1-8.4 42.1-22.9 0-66.8-3.4-73.1 15.4-73.1 8.7 0 23.7 4.4 58.7 38.1 40 40 46.6 57.9 69 57.9h58.9c16.8 0 25.3-8.4 20.4-25-11.2-34.9-86.9-106.7-90.3-111.5-8.7-11.2-6.2-16.2 0-26.2.1-.1 72-101.3 79.4-135.6z"/>
                    </svg>
                </a>
            </div>
            <div class="social whatsapp">
                <a href="https://api.whatsapp.com/send?phone=4917632364735" target="_blank">
                    <svg role="img" viewBox="0 0 448 512">
                        <path fill="currentColor" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <div lang="de">
        <div class="footer_t" >
            <h4 class="font-header spans xs-force-center textable"><span class="p"><strong>
                        <span style="font-size: 14px;color: white;">ÜBER NORDPROMOTION:</span></strong></span></h4>
            <p><span style="color: rgb(215, 215, 215);">
                        <span style="font-size: 14px;">NORD PROMOTION erstellt großartige
Websites und richtet effektive
Online-Werbekampagnen ein.
</span></span></p>
        </div>
        <div class="footer_t" >
            <h4 class="font-header spans xs-force-center textable"><span class="p">
                    <span style="font-size: 14px;color: white;"><strong>Kontakte</strong></span></span></h4>
            <div>
                <div style="float: left;">
                    <svg class="svgicon" id="svg67" style="fill: rgb(38, 0, 118);width: 25px" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 128 128"><rect x="0" y="0" width="128" height="128" style="fill: transparent" rx="50%" ry="50%">
                        </rect><g transform="scale(0.6) translate(42.66666666666667, 42.66666666666667)">
                            <path class="st0" d="M48.097,15.739c0.042-0.004,0.079-0.006,0.112-0.008c0.031,0.075,0.068,0.179,0.109,0.313 c0.017,0.057,0.036,0.112,0.057,0.168l8.195,22.154c0.035,0.092,0.058,0.192,0.069,0.281c-1.168,0.762-1.632,2.285-1.027,3.587 c0.482,1.04,1.513,1.651,2.587,1.651c0.402,0,0.81-0.085,1.198-0.266c2.961-1.374,3.493-4.719,2.503-7.272l-8.152-22.037 c-0.935-3-3.111-4.505-6.136-4.252c-1.568,0.134-2.731,1.515-2.598,3.082C45.149,14.709,46.518,15.865,48.097,15.739z"></path><path class="st0" d="M79.297,82.402c-0.534-0.539-1.26-0.843-2.019-0.845c-0.003,0-0.005,0-0.007,0 c-0.756,0-1.48,0.301-2.016,0.835c-0.507,0.506-0.895,0.949-1.257,1.363c-0.622,0.712-0.996,1.142-1.903,1.748 c-0.697,0.463-1.681,0.13-2.222-0.68l-22.249-33.52c-0.615-0.921-0.49-2.266,0.25-2.762c0.883-0.587,1.017-0.636,1.66-0.863 c0.447-0.159,1.057-0.375,2.029-0.788c1.419-0.602,2.103-2.221,1.544-3.657L41.862,14.338c-0.285-0.731-0.858-1.313-1.585-1.608 c-0.729-0.294-1.544-0.276-2.257,0.05c-3.831,1.753-7.168,4.017-10.226,6.945c-3.212,3.148-6.564,7.769-7.799,10.745 c-0.172,0.412-0.243,0.859-0.21,1.304c0.908,12.188,9.079,31.691,20.329,48.529c11.075,16.58,26.313,31.943,37.057,37.36 c0.398,0.2,0.838,0.305,1.283,0.305h0.003c4.213-0.004,9.75-2.174,11.962-3.118c4.092-1.797,8.318-4.367,10.518-6.397 c0.568-0.524,0.899-1.257,0.917-2.03s-0.28-1.52-0.824-2.069L79.297,82.402z"></path><path class="st0" d="M106.854,94.795c-0.063-0.078-0.132-0.152-0.204-0.223L89.336,77.573c-1.947-1.847-5.317-2.623-7.724-0.427 c-1.163,1.061-1.245,2.864-0.184,4.025c0.987,1.081,2.615,1.229,3.772,0.391c0.067,0.033,0.136,0.074,0.177,0.112l17.089,16.778 c0.078,0.19,0.109,0.616-0.062,0.926c-0.76,1.379-0.259,3.112,1.119,3.873c0.437,0.24,0.908,0.354,1.374,0.354 c1.005,0,1.979-0.532,2.498-1.474C108.674,99.816,108.447,96.73,106.854,94.795z">
                            </path></g></svg>
                </div>
                <div style="float: left; justify-content: center"><span style="color: white;font-size: 14px;">
                <a href="tel:4917632364735" style="color: white" target="_blank">+49-176-323-647-35</a></span></div>
            </div>
            <div style="clear:both;">
                <div style="float:left; ">
                    <svg class="svgicon" id="svg68" style="fill: rgb(38, 0, 118);width: 25px" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128"><rect x="0" y="0" width="128" height="128" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.6) translate(42.66666666666667, 42.66666666666667)"><path d="M102.58,48.734L64.26,71.228L25.357,48.698l-0.005,33.551v2.917c0,1.911,1.554,3.462,3.462,3.462h70.369 c1.914,0,3.464-1.551,3.464-3.462l-0.005-2.868L102.58,48.734z"></path><path d="M102.647,42.833c0-1.911-1.55-3.461-3.464-3.461H28.814c-1.908,0-3.462,1.551-3.462,3.461L64.26,63.622L102.647,42.833z"></path></g></svg>
                </div>
                <div style="float: left;justify-content: center"><span style="color: white;font-size: 14px;">
                <a href="mailto:nordiskapromo@gmail.com" style="color: white" target="_blank">nordiskapromo@gmail.com</a></span></div></div>


            <div style="clear:both;">
                <div style="float:left; ">
                    <svg class="svgicon" id="svg69" style="fill: rgb(38, 0, 118);width: 25px" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128"><rect x="0" y="0" width="128" height="128" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.6) translate(42.66666666666667, 42.66666666666667)"><path class="st0" d="M63.998,13.879c-18.965,0-34.393,15.43-34.393,34.395c0,18.066,30.621,62.662,31.924,64.551 c0.561,0.812,1.482,1.297,2.469,1.297s1.91-0.484,2.471-1.297c1.303-1.889,31.926-46.484,31.926-64.551 C98.395,29.309,82.965,13.879,63.998,13.879z M63.998,27.27c11.381,0,20.639,9.259,20.639,20.639s-9.258,20.638-20.639,20.638 c-11.379,0-20.637-9.258-20.637-20.638S52.619,27.27,63.998,27.27z"></path></g></svg>
                </div>
                <div style="float: left;justify-content: center">
                    <span style="color: white;font-size: 14px;">14057 Berlin, Friedbergstr, 5</a></span></div></div>

        </div>
        <div class="footer_t">
            <h4 class="font-header spans xs-force-center textable">
                            <span class="p"><strong><span style="font-size: 14px;color: white;">
                                Kommen Sie dazu - Entscheiden Sie sich
für NORDPROMOTION.</span></strong></span></h4>
            <br>

            <div class="social facebook">
                <a href="http://facebook.com/groupname" target="_blank"" target="_blank">
                <svg role="img" viewBox="0 0 320 512">
                    <path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/>
                </svg>
                </a>
            </div>
            <div class="social instagram">
                <a href="https://instagram.com" target="_blank">
                    <svg role="img" viewBox="0 0 448 512">
                        <path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/>
                    </svg>
                </a>
            </div>
            <div class="social telegram">
                <a href="https://t.me" target="_blank">
                    <svg role="img" viewBox="0 0 448 512">
                        <path fill="currentColor" d="M446.7 98.6l-67.6 318.8c-5.1 22.5-18.4 28.1-37.3 17.5l-103-75.9-49.7 47.8c-5.5 5.5-10.1 10.1-20.7 10.1l7.4-104.9 190.9-172.5c8.3-7.4-1.8-11.5-12.9-4.1L117.8 284 16.2 252.2c-22.1-6.9-22.5-22.1 4.6-32.7L418.2 66.4c18.4-6.9 34.5 4.1 28.5 32.2z"/>
                    </svg>
                </a>
            </div>
            <div class="social vk">
                <a href="http://vk.com/groupname" target="_blank">
                    <svg role="img" viewBox="0 0 576 512">
                        <path fill="currentColor" d="M545 117.7c3.7-12.5 0-21.7-17.8-21.7h-58.9c-15 0-21.9 7.9-25.6 16.7 0 0-30 73.1-72.4 120.5-13.7 13.7-20 18.1-27.5 18.1-3.7 0-9.4-4.4-9.4-16.9V117.7c0-15-4.2-21.7-16.6-21.7h-92.6c-9.4 0-15 7-15 13.5 0 14.2 21.2 17.5 23.4 57.5v86.8c0 19-3.4 22.5-10.9 22.5-20 0-68.6-73.4-97.4-157.4-5.8-16.3-11.5-22.9-26.6-22.9H38.8c-16.8 0-20.2 7.9-20.2 16.7 0 15.6 20 93.1 93.1 195.5C160.4 378.1 229 416 291.4 416c37.5 0 42.1-8.4 42.1-22.9 0-66.8-3.4-73.1 15.4-73.1 8.7 0 23.7 4.4 58.7 38.1 40 40 46.6 57.9 69 57.9h58.9c16.8 0 25.3-8.4 20.4-25-11.2-34.9-86.9-106.7-90.3-111.5-8.7-11.2-6.2-16.2 0-26.2.1-.1 72-101.3 79.4-135.6z"/>
                    </svg>
                </a>
            </div>
            <div class="social whatsapp">
                <a href="https://api.whatsapp.com/send?phone=4917632364735" target="_blank">
                    <svg role="img" viewBox="0 0 448 512">
                        <path fill="currentColor" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</footer>
<!--================ End footer Area  =================-->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/stellar.js"></script>
<script src="vendors/lightbox/simpleLightbox.min.js"></script>
<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
<script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
<script src="vendors/isotope/isotope-min.js"></script>
<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="vendors/counter-up/jquery.waypoints.min.js"></script>
<script src="vendors/counter-up/jquery.counterup.js"></script>
<script src="js/mail-script.js"></script>
<script src="vendors/popup/jquery.magnific-popup.min.js"></script>
<script src="js/theme.js"></script>
</body>
</html>

<script>
    $('.carousel_slide').carousel({
        interval: 1500,
    })
</script>


<script>
        function lang(word) {
            var body = document.getElementsByTagName('body')[0];
            // Заранее считаем срок хранения кук
            var expires = new Date();
            expires.setDate(expires.getDate() + 366);
            expires.toUTCString();

            switch (word)
            {
                case 'ru':
                    body.className = 'ru';
                    break;
                case 'de':
                    body.className = 'de';
                    break;
                case 'sv':
                   /* body.className = 'sv';
                    break;*/
                case 'en':
                default:
                    body.className = 'en';
                    break;
            }
            // Записываем куки
            document.cookie = [
                'lang=' + lang
                ,'; expires=' + expires // используем expires, max-age не поддерживается в ИЕ
                ,'; path=/'
                ,'; domain=' + document.location.host
            ].join('');
        }
        ddSelect = document.getElementById("tech").msDropdown;

        lang(ddSelect.value.toString());

        ddSelect.on("change", function() {
            lang(ddSelect.value.toString());
        });



</script>