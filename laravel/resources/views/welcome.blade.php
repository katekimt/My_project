<!doctype html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&family=Roboto:wght@400;700&display=swap"
          rel="stylesheet">

    <script src="https://kit.fontawesome.com/72e39ab0de.js" crossorigin="anonymous"></script>
    <title>Home page</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light nav_container">
    <div class="container-fluid">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Головна сторінка</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contact')}}">Контакти</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('all-product')}}">Наша продукція</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('about-us')}}">Про нас</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('request')}}">Залишити заявку</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <a type="button" class="btn btn-outline-dark nav__padding" href="{{route('user.login')}}">Log in</a>

            </form>
        </div>
    </div>
</nav>



<section class="home__banner ">

</section>

<section class="main_products">
    <div class="container">
        <div class="main_products__label">
            <div class="main_products__title">Найпопулярніша продукція</div>
            <a class="main_products__view" href="{{route('all-product')}}">Переглянути все</a>
        </div>
        <div class="main_products__block">
            <div class="main_products__container">
                <div class="card main_products__card">
                    <img src="{{ asset('/img/main_products/автомат.png') }}" class="card-img-top main_products__img" alt="...">
                    <div class="card-body">
                        <p class="card-text">Провід ПВС, ШВВП, ВВГнгП</p>
                    </div>
                </div>
                <a type="button" class="btn btn-outline-info" href="{{route('request')}}">Замовити</a>
            </div>
            <div class="main_products__container">
                <div class="card main_products__card">
                    <img src="{{ asset('/img/main_products/кабель.png') }}" class="card-img-top main_products__img" alt="...">
                    <div class="card-body">
                        <p class="card-text">Світлодіодна лампочки</p>
                    </div>
                </div>
                <a type="button" class="btn btn-outline-info" href="{{route('request')}}">Замовити</a>
            </div>
            <div class="main_products__container">
                <div class="card main_products__card">
                    <img src="{{ asset('/img/main_products/лампы.png') }}" class="card-img-top main_products__img" alt="...">
                    <div class="card-body">
                        <p class="card-text">Вимикачі автоматичні Аско</p>
                    </div>
                </div>
                <a type="button" class="btn btn-outline-info" href="{{route('request')}}">Замовити</a>
            </div>
            <div class="main_products__container">
                <div class="card main_products__card">
                    <img src="{{ asset('/img/main_products/прожектор.png') }}" class="card-img-top main_products__img" alt="...">
                    <div class="card-body">
                        <p class="card-text">Світлодіодні прожектори</p>
                    </div>
                </div>
                <a type="button" class="btn btn-outline-info" href="{{route('request')}}">Замовити</a>
            </div>
        </div>
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
                    <a class="footer__link" href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a class="footer__link" href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a class="footer__link" href="#"><i class="fa-brands fa-youtube"></i></a>
                    <a class="footer__link" href="#"><i class="fa-brands fa-pinterest"></i></a>
                    <a class="footer__link" href="#"><i class="fa-brands fa-behance-square"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__sub ">2022 | Rozghon Kate</div>

</footer>

</body>
</html>
