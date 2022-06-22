<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="/css/catalog.css">
    <link rel="stylesheet" href="/css/checkbox.css">
    <link rel="stylesheet" href="/css/faq.css">
    <link rel="stylesheet" href="/css/menu.css">
    <link rel="stylesheet" href="/css/plans.css">
    <link rel="stylesheet" href="/css/scrollDown.css">

    <link rel="stylesheet" href="/js/faq.js">
    <link rel="stylesheet" href="/js/faq2.js">
    <link rel="stylesheet" href="/bootstrap/bootstrap-grid.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter&family=Mulish&family=Oswald:wght@300;400;500&family=Rubik&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@500&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>
<header class="header">
    <div class="header_in">
        <div class="logo">
            <a href="">Protected</a>
        </div>
        <div class="v1"></div>
        <div class="menu">
            <nav>
                <ul>
                    <li>
                        <a href="{{route('index')}}">Про нас</a>
                    </li>
                    <li>
                        <a href="./plans/1">Плани</a>
                    </li>
                    <li>
                        <a href="{{route('index')}}">Відгуки</a>
                    </li>
                    <li>
                        <a href="{{route('faq')}}">FAQ</a>
                    </li>
                    <li class="language">
                        <a class="language" href="#">EN</a>
                    </li>
                    <li class="languageEn">
                        <a class="languageEn" href="#">/</a>
                    </li>
                    <li class="languageUk">
                        <a class="languageUk" href="#">UA</a>
                    </li>
                </ul>

            </nav>
        </div>
        <a href="#">
        <button class="button success">Log in</button>
        </a>
    </div>
    <div class="line"></div>
    <div class="header_in_mobile">
        <div class="logo">
            <a href="index.html">Protected</a>
        </div>
        <div class="icons">
            <nav role="navigation">
                <div id="menuToggle">
                    <input type="checkbox"/>
                    <span></span>
                    <span></span>
                    <span></span>

                    <ul id="menu">
                        <a href="">
                            <li>Про нас</li>
                        </a>
                        <a href="?page=catalog">
                            <li>Плани</li>
                        </a>
                        <a href="#">
                            <li>Відгуки</li>
                        </a>
                        <a href="faq.html">
                            <li>FAQ</li>
                        </a>
                        <a href="https://erikterwan.com/" target="_blank">
                            <li>Show me more</li>
                        </a>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="line"></div>

</header>

<main class="main">
    @yield('content')
</main>
<script src="/js/faq.js"></script>
<script src="/js/faq2.js"></script>
<footer class="footer">
    <div class="line"></div>
    <div class="protected_footer">Protected</div>
    <div class="container">
        <div class="foot">
            <div class="row">
                <div class="col-md-2">
                    <div>
                        <a class="menu">МЕНЮ</a><br>
                        <a href="">Про нас</a><br>
                        <a href="?page=plans">Плани</a><br>
                        <a href="?page=faq">FAQ</a><br>
                        <a href="">Відгуки</a>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="contact_box">
                        <a class="menu" href="#">КОНТАКТИ</a><br>
                        <a href="tel:+380507517161" class="contact_text">protected@io.com</a><br>
                        <a href="#" class="contact_text">Vinnytsa, Ukraine</a><br>
                        <a href="#" class="contact_text">+38 (097)-11-22-33-4</a><br>
                    </div>
                </div>
                <div class="col-4">
                    <img src="/img/Badgues%20_3.png" alt="">
                </div>
                <div class="col-4 ">
                    <a class="menu" href="#">ОНОВЛЕННЯ</a><br>
                    <div class="text_update">
                        Тут ми поширюємо всю інформацію<br> пов’язану з нашими проектами.<br>
                        Залиште тут свій емаіл.
                    </div>
                    <input class="c-form__input" placeholder="E-mail" type="email"
                           pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" required>
                </div>
            </div>
        </div>
        <div class="foot_900px">
            <div class="row">
                <div class="col-md-6">
                    <div class="h12">КОНТАКТИ</div>
                    <div>
                        <a href="tel:+380685059650">+380 44 545 77 26</a><br>
                        <a href="tel:+380971122334">+38 (097)-11-22-33-4</a><br>
                        <a href="#">Email: protected@io.com</a><br>
                        <a href="#">м. Вінниця</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="h12">ПОСЛУГИ</div>
                    <div class="posl">Наш сервіс дозволяє придбати ліцензію на антивірус,
                        що найбільше підходить для Ваших потреб та цілей.
                    </div>
                </div>
            </div>
        </div>


        <div class="foot_mobile">
            <h3>Protected</h3>
            <a href="tel:+380685059650">+380 44 545 77 26</a><br>
            <a href="tel:+380971122334">+38 (097)-11-22-33-4</a><br>
            <a href="#">Email: protected@io.com</a><br>
            <a href="#">м. Вінниця</a>
        </div>

    </div>
    <div class="last_foot">
        <div class="container">
            © Антивірус Protected, 2022
        </div>
    </div>

</footer>
