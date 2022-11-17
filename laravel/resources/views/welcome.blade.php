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
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px; ">
                <li class="nav-item" style="font-family: 'Raleway'">
                    <a class="nav-link active" aria-current="page" href="/">Головна сторінка</a>
                </li>
                <li class="nav-item" style="font-family: 'Raleway'">
                    <a class="nav-link" href="{{route('contact')}}">Контакти</a>
                </li>
                <li class="nav-item " style="font-family: 'Raleway'">
                    <a class="nav-link" href="{{route('all-product')}}">Наша продукція</a>
                </li>
                <li class="nav-item " style="font-family: 'Raleway'">
                    <a class="nav-link" href="{{route('about-us')}}">Про нас</a>
                </li>
                <li class="nav-item " style="font-family: 'Raleway'">
                    <a class="nav-link" href="{{route('request')}}">Залишити заявку</a>
                </li>
            </ul>
            <form class="d-flex main_font" role="search">
                <a type="button" class="btn btn-outline-dark nav__padding " style="font-family: 'Raleway'"
                   href="{{route('user.login')}}">Log in</a>

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
        <div class="main_products__block" style="font-family: 'Raleway'">
            @for($i = 0; $i < 4; $i++)
                <div class="main_products__container">
                    <div class="card main_products__card">
                        <img src="{{ asset('/storage/' . $data[$i]->image) }}"
                             class="card-img-top main_products__img" alt="...">
                        <div class="card-body" style=" height: 80px">
                            <p class="card-text main_font" style="text-align: center">{{$data[$i]->name}}</p>
                        </div>
                    </div>
                    <a type="button" class="btn btn-outline-info" style="font-family: 'Raleway'"
                       href="{{route('request')}}">Замовити</a>
                </div>
            @endfor
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
                <div class="footer__title">Наша геолокація</div>
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
