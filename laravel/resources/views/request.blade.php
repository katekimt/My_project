<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js'])
    <title>Requests</title>
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
                <a type="button" class="btn btn-outline-dark" href="{{route('user.registration')}}">Register</a>
            </form>
        </div>
    </div>
</nav>

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

<section class="container request request__container">
    <h1 class="request request__title request__container">Щоб ми могли зв'язатися з вами, будь ласка, заповніть форму</h1>
    <form action="{{route('request-form')}}" method="post" class="request__container">
        @csrf
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label request__label">Введіть своє ім'я</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Ім'я" name="name">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label request__label">Введіть свій телефон, щоб ми могли зв'язатися з
                вами</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Телефон" name="phone">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label request__label">Введіть свою пошту, якщо вам зручно спілкуватися за
                допомогою неї</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Пошта" name="email">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label request__label">Що б ви хотіли замовити або які маєте
                запитання?</label>
            <input type="text" class="form-control" id="exampleFormControlTextarea1" name="information"></input>
        </div>
        <div class="request__label">Який спосіб звʼязку буде зручним?</div>
        <div class="form-check form-switch">
            <input class="form-check-input " type="checkbox" role="switch" id="flexSwitchCheckDefault" name="byPhone"
                   value="1">
            <label class="form-check-label" for="flexSwitchCheckDefault">Дзвінок</label>
        </div>
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" name="byEmail"
                   value="1">
            <label class="form-check-label" for="flexSwitchCheckChecked">Пошта</label>
        </div>
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" name="byViber"
                   value="1">
            <label class="form-check-label" for="flexSwitchCheckDefault">Viber</label>
        </div>
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" name="byTelegram"
                   value="1">
            <label class="form-check-label" for="flexSwitchCheckChecked">Telegram</label>
        </div>
        <button type="submit" class="btn btn-outline-dark request__btn">Відправити інформацію</button>
    </form>
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
