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
    <script async src="bootstrap/js/bootstrap.bundle.js"></script>
    <script src="https://kit.fontawesome.com/72e39ab0de.js" crossorigin="anonymous"></script>
    <title>About us</title>
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
                <li class="nav-item main_font">
                    <a class="nav-link active" aria-current="page" href="/">Головна сторінка</a>
                </li>
                <li class="nav-item main_font">
                    <a class="nav-link" href="{{route('contact')}}">Контакти</a>
                </li>
                <li class="nav-item main_font">
                    <a class="nav-link" href="{{route('all-product')}}">Наша продукція</a>
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

<section class="container">
    <h1 class="about__title">Підприємство «КабельЕлектроТехніка»</h1>
</section>


<section class="container container__photo">

    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card">
                <img src="{{ asset('/img/aboutUs/11.png') }}" class="card-img-top" alt="">
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="{{ asset('/img/aboutUs/22.png') }}" class="card-img-top" alt="">
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="{{ asset('/img/aboutUs/33.png') }}" class="card-img-top" alt="">
            </div>
        </div>
    </div>
</section>



<section class="container text__about">
    <div class="text__stile">
        <div class="text__part">Підприємство «КабельЕлектроТехніка» зареєстровано 01.03.2004 р. та понад 10 років працює
            на ринку України.
        </div>

        <div class="text__part">Ми є провідною компанією, акредитованою до продажу підприємствам концерну
            "Укроборонпрому"
            кабельно-провідникової та електротехнічної продукції. Наша продукція широко представлена у Черкаській та
            інших
            областях. У нас завжди є кабель в Черкасах, провід в Черкасах.
        </div>

        <div class="text__part"> Багаторічний досвід та позитивні відгуки наших клієнтів дозволяють нам впевнено брати
            участь у тендерах та інших
            конкурсах на постачання будь-якої кількості товару. Постійне оновлення складських залишків та номенклатурних
            позицій допомагає нашій компанії йти в ногу з технологічним прогресом та інноваційними технологіями.
        </div>

        <div class="text__part"> Ми є офіційними представниками багатьох товарних брендів, які добре зарекомендували
            себе на світовому ринку.
            ACKO, ABB, EATON, IEK, OSRAM, PHILIPS, MAXUS, GE, DELUX, MEPA, VI-KO, El-BI, LEZARD - ось перелік далеко не
            всіх
            виробників, електротехнічна продукція яких широко представлена в асортименті нашої компанії. Ви в будь-який
            час можете у нас на магазині підібрати потрібний вам товар, чи то світильник у Черкасах, розетка у Черкасах
            чи
            вимикач у Черкасах. Наші фахівці, які працюють із першого дня заснування компанії та мають величезний досвід
            роботи, з радістю запропонують свої високопрофесійні консультації.
        </div>
        <div class="text__part">Кабельно-провідникова продукція від заводів гігантів як Південкабель, ЗЗЦМ та інших як
            вітчизняного так і
            імпортного виробництва завдяки величезній складській площі уможливлює підібрати для Вас потрібний кабель в
            Черкасах у найкоротші терміни.
        </div>

        <div class="text__part"> Провід в Черкасах, інструмент, вимірювальні прилади, арматура, вимикач в Черкасах,
            гільзи, наконечники, щитки,
            шини, лічильники в Черкасах, стабілізатори та інвертора, електростанції, розетка в Черкасах, лампа в
            Черкасах та
            багато іншого наша компанія готова надати Вам на вигідних Вам умовах.
        </div>

        <div class="text__part">Наша команда висококваліфікованих менеджерів в індивідуальному порядку допоможе Вам
            зробити правильний вибір та
            вирішити Ваші найамбітніші завдання. А гнучка система знижок не дасть Вам переплатити зайвого та допоможе
            заощадити Ваші гроші.
        </div>

        <div class="text__part"> Наявність власної транспортно-технічної бази дозволяє за бажанням клієнта організувати
            доставку товару до зазначеного пункту призначення. Вашу заявку ми готові прийняти у будь-якому зручному для Вас вигляді та форматі
            даних. Ми здійснюємо продаж у будь-яких кількостях. Сподіваємось на плідну співпрацю.</div>

        <a type="button about__download main_font" class="btn btn-outline-secondary" href="{{ asset('/files/file.doc') }}" download>Детальна інформація про компанію</a>
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
