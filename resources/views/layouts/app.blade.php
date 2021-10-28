<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset("css/glide.core.min.css") }}">
    <link rel="stylesheet" href="{{ asset("css/glide.theme.min.css") }}">
    <link rel="stylesheet" href="@yield('css')">
</head>
<body>
    <div class="container__preheader">
        <picture class="container__preheader_picture">
           <a href="http://kushugum-rada.gov.ua/" class="link_img"><img src="images/gerb.png" alt="logo_Kushugum"></a>
        </picture>
        <div class="preheader_info">
            <div class="info_tel">
                <p class="tel_p">Номер реєстратури:</p>
                <a href="tel:+123456789" class="tel_a">+38 (093) 828 7330</a>
            </div>
            <div class="info_button">
                <button class="btn">
                    <p class="btn_p">Напишіть нам</p>
                </button>
                <div class="main-form" style="display: none;">
                    <div class="form">
                        <div class="flex-btn">
                            <p class="form-name">Ваше Зверненя</p>
                            <span class="closebtn">&times;</span>
                        </div>
                            <form action="send.php" method="GET">
                                <input type="text" name="name" placeholder="Ваше ім'я" required>
                                <input type="text" name="secondName" placeholder="Ваше прізвище" required>
                                <br>
                                <input type="email" name="email" placeholder="Ваша електрона пошта" required>
                                <br>
                                <label for="prop">Оберіть будь ласка причину звернення</label>
                                <br>
                                <select name="prop" id="prop">
                                    <option value="пропозиція">Пропозиція</option>
                                    <option value="питання">Питання</option>
                                    <option value="СКАРГА">Скарга</option>
                                </select>
                                <br>
                                <textarea name="message" id="message" cols="50" rows="10" placeholder="Текст вашого листа"></textarea>
                                <br>
                                <input type="submit" value="Надіслати" name="sub" class="send-btn">
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header class="container__header">
        <picture class="container__header_picture">
            <a href="" class="header__link_img"><img src="images/logo.png" alt="logo_hospital"></a>
        </picture>
        <nav class="menu">
            <ul class="menu_list">
                <li class="menu_item">
                    <a href="/" class="menu_link @yield('main')">Головна</a>
                </li>
                <li class="menu_item">
                    <a href="/services" class="menu_link @yield('services')">Послуги</a>
                </li>
                <li class="menu_item">
                    <a href="/doctors" class="menu_link @yield('doctors')">Лікарі</a>
                </li>
                <li class="menu_item">
                    <a href="/admin" class="menu_link @yield('admin')">Адмiнiстрацiя</a>
                </li>
                <li class="menu_item">
                    <a href="/news" class="menu_link @yield('news')" id="news">Новини</a>
                </li>
            </ul>
        </nav>
    </header>







    @yield('main-content')
    @yield('admin-content')
    @yield('doctors-content')
    @yield('news-content')
    @yield('services-content')







    <section class="footer-link">
        <div class="link-logo">
            <img src="images/logo.png" alt="logo_Kushugum">
        </div>
        <div class="link-contact">
            <div class="link-contact-block">
                <div class="for-flex" id="call">
                    <img src="images/call.png" alt="tel">
                  <div class="tell-block">
                    <p class="hotline"><span>Гаряча лінія:</span> (093) 828 7330</p>
                    <p class="hotline">(093) 828 7330</p>
                    <p class="hotline">(093) 828 7330</p>
                    <p class="hotline">(з 8:00 - 14:00)</p>
                    <p class="cons"><span>Консультацiя:</span> (061) 321 34 52</p>
                    <p class="buh"><span>Бухгалтерiя:</span> 423 43 56</p>
                  </div>
                </div>
                <div class="for-flex">
                    <img src="images/clock.png" alt="clock">
                    <div class="clock-block">
                        <p class="clock"><span>Пн - пт</span> з 8:00 до 16:00</p>
                        <p class="clock"><span>Сб</span> Вихідний</p>
                        <p class="clock"><span>Вс</span> Вихідний</p>
                    </div>
                </div>
            </div>
            <div class="link-contact-block" id="impact">
                <div class="impact-link">
                    <span id="impact-header">Корисні посиланя</span>
                    <div class="impact-link-VOZ">
                        <p><a href="https://nszu.gov.ua/">НСЗУ</a></p>
                        <p><a href="https://moz.gov.ua/">МОЗ</a></p>
                        <p><a href="https://www.who.int/ru">ВОЗ</a></p>
                    </div>
                </div>
                <div class="social-link">
                    <div class="for-flex-link">
                        <p><a href="https://uk-ua.facebook.com/"><img src="images/facebook.png" alt="FACEBOOK"></a></p>
                        <p><a href="https://www.youtube.com/watch?v=C5WTGOdOek0"><img src="images/you.png" alt="YOUTUBE"></a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<footer class="container__footer">
    <div class="author">
        <p>design Egor Miller</p>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{ asset("js/script.js") }}"></script>
</body>
</html>