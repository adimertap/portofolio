<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--==================== UNICONS ====================-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!--==================== SWIPER CSS ====================-->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">

    <!--==================== CSS ====================-->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <title>Responsive Portfolio Website</title>
</head>

<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">Adim</a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list grid">
                    <li class="nav__item">
                        <a href="#home" class="nav__link">
                            <i class="uil uil-estate nav__icon"></i>Home
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#about" class="nav__link">
                            <i class="uil uil-user nav__icon"></i> About
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#skills" class="nav__link">
                            <i class="uil uil-file-alt nav__icon"></i> Skills
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="#services" class="nav__link">
                            <i class="uil uil-briefcase nav__icon"></i> Services
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#portfolio" class="nav__link">
                            <i class="uil uil-scenery nav__icon"></i> Portofolio
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#contact" class="nav__link">
                            <i class="uil uil-message nav__icon"></i> Contact
                        </a>
                    </li>


                </ul>
                <i class="uil uil-times nav__close" id="nav-close"></i>
            </div>
            <div class="nav__btns">
                <div class="nav__toggle" id="nav-toggle">
                    <i class="uil uil-apps"></i>
                </div>
            </div>
        </nav>
    </header>

    <!--==================== MAIN ====================-->
    <main class="main">
        <!--==================== HOME ====================-->
        <section class="home section" id="home">
            <div class="home_container container grid">
                <div class="home__content grid">
                    <div class="home__social">
                        <a href="https://www.linkedin.com/" target="_blank" class="home__social-icon">
                            <i class="uil uil-linkedin"></i>
                        </a>
                        <a href="https://www.instagram.com" target="_blank" class="home__social-icon">
                            <i class="uil uil-instagram"></i>
                        </a>
                        <a href="https://github.com" target="_blank" class="home__social-icon">
                            <i class="uil uil-github"></i>
                        </a>
                    </div>

                    <div class="home__img">
                        <svg class="home_blob" viewBox="0 0 200 187" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <mask id="mask0" mask-type="alpha">
                                <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547 
                                130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775 
                                97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666 
                                0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z" />
                            </mask>
                            <g mask="url(#mask0)">
                                <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 
                                165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 
                                129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 
                                -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z" />

                                <image class="home__blob-img" x='12' y='18'
                                    href="{{ asset('assets/img/perfil.png') }}" />
                            </g>
                        </svg>
                    </div>
                    <div class="home__data">
                        <h1 class="home__title">Hi, I'am Adim</h1>
                        <h3 class="home__subtitle">Full Stack Developer</h3>
                        <p class="home_description">
                            Testing Deskripsi, Testing Deskripsi, Testing Deskripsi, Testing Deskripsi, Testing
                            Deskripsi, Testing Deskripsi, Testing Deskripsi,
                            Testing Deskripsi, Testing Deskripsi, Testing Deskripsi, Testing Deskripsi,
                        </p>
                        <a href="#contact" class="button button--flex">
                            Contact Me<i class="uil uil-message button__icon"></i>
                        </a>
                    </div>
                </div>
                <div class="home__scroll">
                    <a href="#about" class="home__scroll-button button--flex">
                        <i class="uil uil-mouse-alt home__scroll-mouse"></i>
                        <span class="home__scroll-name">Scroll down</span>
                        <i class="uil uil-arrow-down home__scroll-arrow"></i>
                    </a>
                </div>
            </div>
        </section>

        <!--==================== ABOUT ====================-->
        <section class="about section" id="about">
            <h2 class="section__title">About Me</h2>
            <span class="section__subtitle">My Introduction</span>

            <div class="about__container container grid">
                <img src="{{ asset('assets/img/about.jpg') }}" alt="" class="about__img">
                <div class="about__data">
                    <p class="about__description">
                        Testing Deskripsi, Testing Deskripsi, Testing Deskripsi, Testing Deskripsi, Testing Deskripsi,
                        Testing Deskripsi, Testing Deskripsi, Testing Deskripsi, Testing Deskripsi
                    </p>
                    <div class="about__info">
                        <div>
                            <span class="about__info-title">
                                08+
                            </span>
                            <span class="about__info-name">
                                Years <br> experience
                            </span>
                        </div>
                        <div>
                            <span class="about__info-title">
                                20+
                            </span>
                            <span class="about__info-name">
                                Completed <br> project
                            </span>
                        </div>
                        <div>
                            <span class="about__info-title">
                                05+
                            </span>
                            <span class="about__info-name">
                                Companies <br> worked
                            </span>
                        </div>
                    </div>
                    <div class="about__buttons">
                        <a download="" href="{{ asset('assets/img/perfil.png') }}" class="button button--flex">
                            Download CV <i class="uil uil-download-alt button__icon"></i>
                        </a>
                    </div>

                </div>

            </div>
        </section>

        <!--==================== SKILLS ====================-->
        <section class="skills section" id="skills">
            <h2 class="section__title">Skills</h2>
            <span class="section__subtitle">My Technical Level</span>

            <div class="skills__container container grid">
                <div>
                    <!--==================== SKILLS 1 ====================-->
                    <div class="skills__content skills__open">
                        <div class="skills__header">
                            <i class="uil uil-brackets-curly skills__icon"></i>

                            <div>
                                <h1 class="skills__titles">
                                    Frontend Developer
                                </h1>
                                <span class="skills__subtitle">More than 4 years</span>
                            </div>
                            <i class="uil uil-angle-down skills__arrow"></i>
                        </div>

                        <div class="skills__list grid">
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">HTML</h3>
                                    <span class="skills_number">90%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__html">

                                    </span>
                                </div>
                            </div>
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">CSS</h3>
                                    <span class="skills_number">80%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__css">

                                    </span>
                                </div>
                            </div>
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Javascript</h3>
                                    <span class="skills_number">60%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__js">

                                    </span>
                                </div>
                            </div>
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">React</h3>
                                    <span class="skills_number">85%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__react">

                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--==================== SKILLS 2 ====================-->
                    <div class="skills__content skills__close">
                        <div class="skills__header">
                            <i class="uil uil-server-network skills__icon"></i>

                            <div>
                                <h1 class="skills__titles">
                                    Backend Developer
                                </h1>
                                <span class="skills__subtitle">More than 2 years</span>
                            </div>
                            <i class="uil uil-angle-down skills__arrow"></i>
                        </div>

                        <div class="skills__list grid">
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">PHP</h3>
                                    <span class="skills_number">80%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__php">

                                    </span>
                                </div>
                            </div>
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Node JS</h3>
                                    <span class="skills_number">70%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__node">

                                    </span>
                                </div>
                            </div>
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Firebase</h3>
                                    <span class="skills_number">60%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__firebase">

                                    </span>
                                </div>
                            </div>
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Python</h3>
                                    <span class="skills_number">55%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__python">

                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <!--==================== SKILLS 3 ====================-->
                    <div class="skills__content skills__close">
                        <div class="skills__header">
                            <i class="uil uil-swatchbook skills__icon"></i>

                            <div>
                                <h1 class="skills__titles">
                                    Designer
                                </h1>
                                <span class="skills__subtitle">More than 2 years</span>
                            </div>
                            <i class="uil uil-angle-down skills__arrow"></i>
                        </div>

                        <div class="skills__list grid">
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Figma</h3>
                                    <span class="skills_number">90%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__figma">

                                    </span>
                                </div>
                            </div>
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Sketch</h3>
                                    <span class="skills_number">85%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__sketch">

                                    </span>
                                </div>
                            </div>
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Photoshop</h3>
                                    <span class="skills_number">80%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__photoshop">

                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== QUALIFICATION ====================-->
        <section class="qualification section">
            <h2 class="section__title">Qualification</h2>
            <span class="section__subtitle">My Personal Journey</span>

            <div class="qualification__container container">
                <div class="qualification__tabs">
                    <div class="qualification__button button--flex qualification__active" data-target='#education'>
                        <i class="uil uil-graduation-cap qualification__icon"></i>
                        Education
                    </div>

                    <div class="qualification__button button--flex" data-target="#work">
                        <i class="uil uil-briefcase-alt qualification__icon"></i>
                        Work
                    </div>
                </div>

                <div class="qualification__sections">
                    <!--==================== QUALIFICATION CONTENT 1 ====================-->
                    <div class="qualification__content qualification__active" data-content id="education">
                        <!--==================== QUALIFICATION 1====================-->
                        <div class="qualification__data">
                            <div>
                                <h3 class="qualification__title">Computer Enginner</h3>
                                <span class="qualification__subtitle">Peru - University</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2009 - 2014
                                </div>
                            </div>
                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>
                            </div>
                        </div>

                        <!--==================== QUALIFICATION 2 ====================-->
                        <div class="qualification__data">
                            <div>

                            </div>

                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>
                            </div>

                            <div>
                                <h3 class="qualification__title">Web Design</h3>
                                <span class="qualification__subtitle">Spain - Institute</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2014 - 2017
                                </div>
                            </div>

                        </div>

                        <!--==================== QUALIFICATION 3 ====================-->
                        <div class="qualification__data">
                            <div>
                                <h3 class="qualification__title">Web Development</h3>
                                <span class="qualification__subtitle">Peru - Institute</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2017 - 2019
                                </div>
                            </div>
                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>
                            </div>
                        </div>

                        <!--==================== QUALIFICATION 4 ====================-->
                        <div class="qualification__data">
                            <div></div>
                            <div>
                                <span class="qualification__rounder"></span>
                                {{-- <span class="qualification__line"></span> --}}
                            </div>
                            <div>
                                <h3 class="qualification__title">Master in UI/UX</h3>
                                <span class="qualification__subtitle">Peru - Institute</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2019 - 2021
                                </div>
                            </div>

                        </div>
                    </div>

                    <!--==================== QUALIFICATION CONTENT 2 ====================-->
                    <div class="qualification__content" data-content id="work">
                        <!--==================== QUALIFICATION 1====================-->
                        <div class="qualification__data">
                            <div>
                                <h3 class="qualification__title">Software Enginner</h3>
                                <span class="qualification__subtitle">Microsoft</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2016 - 2018
                                </div>
                            </div>
                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>
                            </div>
                        </div>

                        <!--==================== QUALIFICATION 2 ====================-->
                        <div class="qualification__data">
                            <div>

                            </div>

                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>
                            </div>

                            <div>
                                <h3 class="qualification__title">Frontend Developer</h3>
                                <span class="qualification__subtitle">Apple Inc - Spain</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2018 - 2019
                                </div>
                            </div>

                        </div>

                        <!--==================== QUALIFICATION 3 ====================-->
                        <div class="qualification__data">
                            <div>
                                <h3 class="qualification__title">UI Designer</h3>
                                <span class="qualification__subtitle">Figma - Spain</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2017 - 2019
                                </div>
                            </div>
                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>

        <!--==================== SERVICES ====================-->
        <section class="services section" id="services">
            <h2 class="section__title">Services</h2>
            <span class="section__subtitle">What i offer</span>


            <div class="services__container container grid">
                <!--==================== SERVICES 1====================-->
                <div class="services__content">
                    <div>
                        <i class="uil uil-web-grid services__icon"></i>
                        <h3 class="services__title">UI/UX <br> Designer</h3>

                        <span class="button button--flex button--small button--link services__button">
                            View More
                            <i class="uil uil-arrow-right button__icon"></i>
                        </span>

                        <div class="services__modal">
                            <div class="services__modal-content">
                                <h4 class="services__modal-title">UI/UX <br> Designer</h4>
                                <i class="uil uil-times services__modal-close"></i>

                                <ul class="services__modal-services grid">
                                    <li class="services__modal-service">
                                        <i class="uil uil-check-circle services__modal-icon"></i>
                                        <p>I Develop the User Interface</p>
                                    </li>
                                    <li class="services__modal-service">
                                        <i class="uil uil-check-circle services__modal-icon"></i>
                                        <p>I Develop the User Interface</p>
                                    </li>
                                    <li class="services__modal-service">
                                        <i class="uil uil-check-circle services__modal-icon"></i>
                                        <p>I Develop the User Interface</p>
                                    </li>
                                    <li class="services__modal-service">
                                        <i class="uil uil-check-circle services__modal-icon"></i>
                                        <p>I Develop the User Interface</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--==================== SERVICES 2====================-->
                <div class="services__content">
                    <div>
                        <i class="uil uil-arrow services__icon"></i>
                        <h3 class="services__title">FrontEnd <br> Developer</h3>

                        <span class="button button--flex button--small button--link services__button">
                            View More
                            <i class="uil uil-arrow-right button__icon"></i>
                        </span>

                        <div class="services__modal">
                            <div class="services__modal-content">
                                <h4 class="services__modal-title">FrontEnd <br> Developer</h4>
                                <i class="uil uil-times services__modal-close"></i>

                                <ul class="services__modal-services grid">
                                    <li class="services__modal-service">
                                        <i class="uil uil-check-circle services__modal-icon"></i>
                                        <p>I Develop the User Interface</p>
                                    </li>
                                    <li class="services__modal-service">
                                        <i class="uil uil-check-circle services__modal-icon"></i>
                                        <p>I Develop the User Interface</p>
                                    </li>
                                    <li class="services__modal-service">
                                        <i class="uil uil-check-circle services__modal-icon"></i>
                                        <p>I Develop the User Interface</p>
                                    </li>
                                    <li class="services__modal-service">
                                        <i class="uil uil-check-circle services__modal-icon"></i>
                                        <p>I Develop the User Interface</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--==================== SERVICES 3====================-->
                <div class="services__content">
                    <div>
                        <i class="uil uil-pen services__icon"></i>
                        <h3 class="services__title">Branding <br> Designer</h3>

                        <span class="button button--flex button--small button--link services__button">
                            View More
                            <i class="uil uil-arrow-right button__icon"></i>
                        </span>

                        <div class="services__modal">
                            <div class="services__modal-content">
                                <h4 class="services__modal-title">Branding <br> Designer</h4>
                                <i class="uil uil-times services__modal-close"></i>

                                <ul class="services__modal-services grid">
                                    <li class="services__modal-service">
                                        <i class="uil uil-check-circle services__modal-icon"></i>
                                        <p>I Develop the User Interface</p>
                                    </li>
                                    <li class="services__modal-service">
                                        <i class="uil uil-check-circle services__modal-icon"></i>
                                        <p>I Develop the User Interface</p>
                                    </li>
                                    <li class="services__modal-service">
                                        <i class="uil uil-check-circle services__modal-icon"></i>
                                        <p>I Develop the User Interface</p>
                                    </li>
                                    <li class="services__modal-service">
                                        <i class="uil uil-check-circle services__modal-icon"></i>
                                        <p>I Develop the User Interface</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== PORTFOLIO ====================-->
        <section class="portfolio section" id="portfolio">
            <h2 class="section__title">Portofolio</h2>
            <span class="section__subtitle">
                Most recent work
            </span>

            <div class="portofolio__container container swiper mySwiper">
                <div class="swiper-wrapper">
                    <!--==================== PORTFOLIO 1====================-->
                    <div class="portofolio__content grid swiper-slide">
                        <img src="{{ asset('assets/img/portfolio1.jpg') }}" alt="" class="portofolio__img">

                        <div class="portofolio__data">
                            <h3 class="portofolio__title">Modern Website</h3>
                            <p class="portofolio__description">Website adaptable to all devices, Website adaptable to
                                all devices, Website adaptable to all devices, Website adaptable to all devices
                                Website adaptable to all devices
                            </p>
                            <a href="#" class="button button--flex button--small portofolio__button">
                                Demo
                                <i class="uil uil-arrow-right button__icon"></i>
                            </a>

                        </div>
                    </div>
                    <!--==================== PORTFOLIO 2====================-->
                    <div class="portofolio__content grid swiper-slide">
                        <img src="{{ asset('assets/img/portfolio2.jpg') }}" alt="" class="portofolio__img">

                        <div class="portofolio__data">
                            <h3 class="portofolio__title">Brand Design</h3>
                            <p class="portofolio__description">Website adaptable to all devices, Website adaptable to
                                all devices, Website adaptable to all devices, Website adaptable to all devices
                                Website adaptable to all devices
                            </p>
                            <a href="#" class="button button--flex button--small portofolio__button">
                                Demo
                                <i class="uil uil-arrow-right button__icon"></i>
                            </a>

                        </div>
                    </div>
                    <!--==================== PORTFOLIO 3====================-->
                    <div class="portofolio__content grid swiper-slide">
                        <img src="{{ asset('assets/img/portfolio3.jpg') }}" alt="" class="portofolio__img">

                        <div class="portofolio__data">
                            <h3 class="portofolio__title">Online Store</h3>
                            <p class="portofolio__description">Website adaptable to all devices, Website adaptable to
                                all devices, Website adaptable to all devices, Website adaptable to all devices
                                Website adaptable to all devices
                            </p>
                            <a href="#" class="button button--flex button--small portofolio__button">
                                Demo
                                <i class="uil uil-arrow-right button__icon"></i>
                            </a>

                        </div>
                    </div>
                </div>

                <div class="swiper-button-next">
                    <i class="uil uil-angle-right swiper-portofolio-icon"></i>
                </div>
                <div class="swiper-button-prev">
                    <i class="uil uil-angle-left swiper-portofolio-icon"></i>
                </div>

                <div class="swiper-pagination"></div>
            </div>
        </section>

        <!--==================== PROJECT IN MIND ====================-->
        <section class="project section">
            <div class="project__bg">
                <div class="project__container container grid">
                    <div class="project__data">
                        <h2 class="project__title">
                            You have a new project
                        </h2>
                        <p class="project__description">
                            Contact me now and get a 30% discount
                        </p>
                        <a href="#contact" class="button button--flex button--white">Contact Me
                            <i class="uil uil-message project__icon button__icon"></i>
                        </a>
                    </div>

                    <img src="{{ asset('assets/img/project.png') }}" alt="" class="project__img">
                </div>
            </div>
        </section>

        <!--==================== TESTIMONIAL ====================-->
        <section class="testimonial section">

        </section>

        <!--==================== CONTACT ME ====================-->
        <section class="contact section" id="contact">

        </section>
    </main>

    <!--==================== FOOTER ====================-->
    <footer class="footer">

    </footer>

    <!--==================== SCROLL TOP ====================-->


    <!--==================== SWIPER JS ====================-->
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>

    <!--==================== MAIN JS ====================-->
    {{-- <script src="{{ asset('assets/js/main.js') }}"></script> --}}
</body>

</html>
