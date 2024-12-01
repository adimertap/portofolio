<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--==================== UNICONS ====================-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('../assets/img/logos.png') }}" />

    <!--==================== SWIPER CSS ====================-->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">

    <!--==================== CSS ====================-->
    <link rel="stylesheet" href="{{ asset('assets/css/project.css') }}">

    {{-- SCROLL REVEAL LIBRARY --}}
    <script src="https://unpkg.com/scrollreveal"></script>
    <title>
        @yield('name')
    </title>
</head>



@yield('content')



<!-- <footer class="footer footer-2019" id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-xs-6 foot-contact">
                <h2>- Adim Porto</h2>
                <div class="contact-items">
                    <div class="contact-item">
                        <label>A.</label>
                        <span>Jl. Anyelir Bongan Kauh Kaja Tabanan, Bali</span>
                    </div>
                    <div class="contact-item">
                        <label>T.</label>
                        <a href="tel:+6281246602400">+6281246602400</a>
                    </div>
                    <div class="contact-item">
                        <label>E.</label>
                        <a href="mailto:contact.adimertap@gmail.com">contact.adimertap@gmail.com</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-xs-6 foot-about">
                <h4>About Me</h4>
                <ul class="menu">
                    <li><a href="https://sebostudio.com/about/" class="menu-item">Introduction</a></li>
                    <li><a href="https://sebostudio.com/projects/" class="menu-item">My Journey</a></li>
                    <li><a href="https://sebostudio.com/what-we-do/" class="menu-item">Services</a></li>
                    <li><a href="https://sebostudio.com/customer-stories/" class="menu-item">My Skill</a></li>
                    <li><a href="https://sebostudio.com/startup/" class="menu-item">My Project</a></li>
                </ul>
            </div>
            <div class="col-sm-2 col-xs-6 foot-social">
                <h4>Follow Me</h4>
                <ul class="menu">
                    <li><a rel="noreferrer" target="_blank" href="https://www.facebook.com/sebostudio">LinkedIn</a></li>
                    <li><a rel="noreferrer" target="_blank" href="https://www.instagram.com/sebostudio/">Instagram</a>
                    </li>
                    <li><a rel="noreferrer" target="_blank" href="https://www.instagram.com/sebostudio/">Twitter</a>
                    </li>
                    <li><a rel="noreferrer" target="_blank" href="https://www.instagram.com/sebostudio/">Github</a></li>
                </ul>
            </div>
            <div class="col-sm-2 col-xs-6 foot-social">
                <h4>Thank You</h4>

            </div>
        </div>
        <div class="copyright">2022 © <a href="https://sebostudio.com"></a>. Portofolio Adim</div>
    </div>
</footer> -->

<!--==================== SCROLL TOP ====================-->


<!--==================== SWIPER JS ====================-->
<script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>

<!--==================== MAIN JS ====================-->
<script src="{{ asset('assets/js/main.js') }}"></script>

<script type="text/javascript">
    var counter = 1;
    setInterval(function () {
        document.getElementById('radio' + counter).checked = true;
        counter++;
        if (counter > 4) {
            counter = 1
        }
    }, 4000);

</script>
</body>

</html>
