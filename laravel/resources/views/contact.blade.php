<!doctype html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/72e39ab0de.js" crossorigin="anonymous"></script>
    <title>Contact</title>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-light nav_container">
    <div class="container-fluid">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll" style="font-family: 'Raleway'">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item main_font">
                    <a class="nav-link active" aria-current="page" href="/">Головна сторінка</a>
                </li>
                <li class="nav-item main_font">
                    <a class="nav-link" href="{{route('contact')}}">Контакти</a>
                </li>
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle" href="{{route('all-product')}}" role="button"
                       data-bs-toggle="dropdown">
                        Наша продукція
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('all-product')}}">Уся продукція</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                    </ul>
                </li>
                <li class="nav-item main_font">
                    <a class="nav-link" href="{{route('about-us')}}">Про нас</a>
                </li>
                <li class="nav-item main_font">
                    <a class="nav-link" href="{{route('request')}}">Залишити заявку</a>
                </li>
            </ul>
            <form class="d-flex main_font" role="search">
                <a type="button" class="btn btn-outline-dark nav__padding" href="{{route('user.login')}}">Log in</a>
            </form>
        </div>
    </div>
</nav>

<section class="contact">
    <div class="container">
        <div class="contact__title">Наші контакти</div>
        <div class="contact__information">Телефон:<a class="contact__tel" href="tel:+380472666618">(0472) 66-66-18</a>,
            <a class="contact__tel" href="tel:+380472654707">(0472) 65-47-07</a>
            <hr>
        </div>
        <div class="contact__information">Пошта:<a class="contact__email" href="mailto:kaeltech@ukr.net">kaeltech@ukr.net</a>
            <hr>
        </div>
        <div class="contact__information"> Адреса: 18000, місто Черкаси, проспект Хіміків, 1
            <hr>
        </div>
    </div>
    <div id="map-container-google-3" class="z-depth-1-half map-container-3">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2595.674041577824!2d32.032340399999995!3d49.415069599999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d14bf12c8a195b%3A0x4cfc41962f2f457a!2z0L_RgNC-0YHQv9C10LrRgiDQpdGW0LzRltC60ZbQsiwgMSwg0KfQtdGA0LrQsNGB0LgsINCn0LXRgNC60LDRgdGM0LrQsCDQvtCx0LvQsNGB0YLRjCwgMTgwMDA!5e0!3m2!1suk!2sua!4v1661327029923!5m2!1suk!2sua"
            frameborder="0"
            style="border:0" allowfullscreen></iframe>
    </div>
</section>


<footer class="footer">
    <div class="container">
        <div class="footer__container">
            <div class="footer__block">
                <div class="footer__title">Контакти</div>
                <a class="footer__email" href="mailto:kaeltech@ukr.net">kaeltech@ukr.net</a>
                <br>
                <a class="footer__tel" href="tel:+380472666618">(0472) 66-66-18</a>
            </div>
            <div class="footer__block">
                <div class="footer__title">Адреса</div>
                <div class="footer__address">Місто Черкаси,<br>
                    проспект Хіміків, 1
                </div>
            </div>
            <div class="footer__block">
                <div class="footer__title">Зв'язок з нами</div>
                <div class="footer__link">
                    <a class="footer__link"
                       href="https://www.google.com/maps?q=%D0%BF%D1%80%D0%BE%D1%81%D0%BF%D0%B5%D0%BA%D1%82+%D0%A5%D1%96%D0%BC%D1%96%D0%BA%D1%96%D0%B2,+1,+%D0%A7%D0%B5%D1%80%D0%BA%D0%B0%D1%81%D0%B8,+%D0%A7%D0%B5%D1%80%D0%BA%D0%B0%D1%81%D1%8C%D0%BA%D0%B0+%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C,+18000&um=1&ie=UTF-8&sa=X&ved=2ahUKEwjwvsH3n7X7AhX7_7sIHfw4DHkQ_AUoAXoECAIQAw">Наша
                        локація : <i class="fa-sharp fa-solid fa-location-dot"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__sub ">2022 | Rozghon Kate</div>

</footer>

</body>
</html>
