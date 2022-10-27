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
    <script async src="bootstrap/js/bootstrap.bundle.js"></script>
    <script src="https://kit.fontawesome.com/72e39ab0de.js" crossorigin="anonymous"></script>
    <title>All product</title>
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


<section class="container">
    <div class="product">
        @foreach($data as $element)
        <div class="card product__card">
            <div class="card-body">
                <h5 class="card-title">{{$element->name}}</h5>
                <p class="card-text">Код товару: {{$element->code}}</p>
                @isset($element->image)
                <img src="{{ asset('/storage/' . $element->image) }}" class="card-img-top rounded" alt="fff">
                @endisset
                <a type="button" class="btn btn-outline-dark product__button" href="{{route('request')}}">Замовити</a>
            </div>
        </div>
        @endforeach

    </div>
    <div class="pagination">
        {{$data->links()}}
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
