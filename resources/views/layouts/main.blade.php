<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('styles/styles.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">
    <title>Alena Makouskaya</title>
</head>

<body>
<!-- Header -->
<header class="header">
    <!-- Header Container -->
    <div class="header-container">
        <!-- Header Logo -->
        <a href="{{route('index')}}" class="header-logo">
            <span class="header-logo__name">Alena</span>
            <span class="header-logo__surname">Makouskaya</span>
        </a>

        <!-- Header Navigation -->
        <div class="header-navigation">
            <ul class="header-menu">
                <li class="header-menu__item"><a href="articles.html" class="header-menu__link">Articles</a></li>
                <li class="header-menu__item"><a href="" class="header-menu__link">Case Studies</a></li>
                <li class="header-menu__item"><a href="about.html" class="header-menu__link">About</a></li>
                <li class="header-menu__item"><a href="" class="header-menu__link">Menu</a></li>
            </ul>
        </div>

    </div>
</header>

<!-- Main -->
@yield('content')

<!-- Footer -->
<footer class="footer">
    <div class="footer-container">
        <div class="footer-main">
            <div class="footer-main__logo-section">
                <a href="index.html" class="footer-logo">
                    <span class="footer-logo__name">Alena</span>
                    <span class="footer-logo__surname">Makouskaya</span>
                </a>
            </div>

        </div>

        <div class="footer-aside">
            <div class="footer-navigation">
                <ul class="footer-menu">
                    <li class="footer-menu__item"><a href="articles.html"
                                                     class="footer-menu__link">Articles</a></li>
                    <li class="footer-menu__item"><a href="" class="footer-menu__link">Case Studies</a>
                    </li>
                    <li class="footer-menu__item"><a href="about.html"
                                                     class="footer-menu__link">About</a></li>
                </ul>
            </div>

            <div class="footer-smm-navigation">
                <a href="" class="footer-smm-navigation__link"><img src="icons/linkedin.svg" alt=""></a>
                <a href="" class="footer-smm-navigation__link"><img src="icons/medium.svg" alt=""></a>
            </div>
        </div>
    </div>

</footer>

</body>

</html>
