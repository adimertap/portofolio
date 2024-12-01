@extends('layout.layout')

@section('name')
Travel Apps - PORTOFOLIO
@endsection

<main>
    <body>
        <section class="section-project-detail research-moodboard">
            <div class="container">
                <div class="head">
                    <h1 class="judul">Travel Application</h1>
                    <p class="sub-judul">Business Process and Web View</p>
                </div>
                <div class="row-sticky-parent">
                    <div class="col-md-2 col-sticky">
                        <div class="section-project-title title-sticky">
                            <div><img src="{{ asset('assets/img/Project/business-step.png') }}" class="btn-step"></div>
                        </div>
                    </div>
                    <div class="col-md-8 col-sticky">
                        <div class="section-project-description">
                            <h3>Business</h3>
                            <p class="text-desc">Travel web apps are my learning progress that I followed at the MERN Stack bootcamp, application development starts from design on figma, ReactJS Component, ReactHooks. Next, we will continue to learn about MongoDB, NodeJS and Redux.</p>
                            <br><p> <b>Feature Apps:</b>  Homepage, Detail Page, Checkout Page, Booking Calendar, Admin, Midtrans Payment </p>

                        </div>

                    </div>
                </div>
            </div>
        </section>

        {{-- <section class="section-bootcamp pt-200 pb-50">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6 text-center col-12 d-none d-sm-block pr-50 fitur-img">

                        <div class="slider">
                            <div class="slides">
                                <input type="radio" name="radio-btn" id="radio1">
                                <input type="radio" name="radio-btn" id="radio2">
                                <input type="radio" name="radio-btn" id="radio3">
                                <input type="radio" name="radio-btn" id="radio4">
                                <div class="slide first">
                                    <img src="{{ asset('assets/img/Project/Travel/tr-1.png') }}" alt="" style="object-fit: contain; border-radius:30px">
                                </div>
                                <div class="slide">
                                    <img src="{{ asset('assets/img/Project/Travel/tr-2.png') }}" alt="" style="object-fit: contain; border-radius:30px">
                                </div>
                                <div class="slide">
                                    <img src="{{ asset('assets/img/Project/Travel/tr-3.png') }}" alt="" style="object-fit: contain; border-radius:30px">
                                </div>
                                <div class="slide">
                                    <img src="{{ asset('assets/img/Project/Travel/tr-4.png') }}" alt="" style="object-fit: contain; border-radius:30px">
                                </div>

                                <div class="navigation-auto">
                                    <div class="auto-btn1"></div>
                                    <div class="auto-btn2"></div>
                                    <div class="auto-btn3"></div>
                                    <div class="auto-btn4"></div>
                                </div>
                            </div>
                            <div class="navigation-manual">
                                <label for="radio1" class="manual-btn"></label>
                                <label for="radio2" class="manual-btn"></label>
                                <label for="radio3" class="manual-btn"></label>
                                <label for="radio4" class="manual-btn"></label>
                            </div>
                        </div>


                    </div>
                    <div class="text-left col-12 col-lg-6 fitur-info">
                        <h3 class="header-section">
                            Travel Website
                        </h3>
                        <hr>
                        <div class="subtitles about-bootcamp max-w-550">
                            <p class="text-desc">Travel web apps are my learning progress that I followed at the MERN Stack bootcamp, application development starts from design on figma, ReactJS Component, ReactHooks. Next, we will continue to learn about MongoDB, NodeJS and Redux.</p>
                            <br><p> <b>Feature Apps:</b>  Homepage, Detail Page, Checkout Page, Booking Calendar, Admin, Midtrans Payment </p>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

        <div class="container-fluid">
            <div class="project-image">
                <img src="{{ asset('assets/img/Project/Travel/tr-landing.png') }}">
            </div>
        </div>


        <section class="section-project-detail research-moodboard">
            <div class="container">
                <div class="row-sticky-parent">
                    <div class="col-md-2 col-sticky">
                        <div class="section-project-title title-sticky">
                            <div><img src="{{ asset('assets/img/Project/website-step.png') }}" class="btn-step"></div>
                        </div>
                    </div>
                    <div class="col-md-8 col-sticky">
                        <div class="section-project-description ">
                            <h3>Website Look</h3>
                            <p>Some of the website displays in this application are in the form of user roles. Multiple views of the Travel Web Apps, for more details you can see the section on project demos.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-12 col-sticky">
                        <div class="section-project-img">
                            <div><img src="{{ asset('assets/img/Project/Travel/2.png') }}" class="resmood-1">
                            </div>
                            <div><img src="{{ asset('assets/img/Project/Travel/1.png') }}" class="resmood-1">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-project-detail research-moodboard">
            <div class="container">
                <div class="row-sticky-parent">
                    <div class="col-md-2 col-sticky">
                        <div class="section-project-title title-sticky">
                            <div><img src="{{ asset('assets/img/Project/thank-step.png') }}" class="btn-step"></div>
                        </div>
                    </div>
                    <div class="col-md-8 col-sticky">
                        <div class="section-project-description ">
                            <h3>Thank You</h3>
                            <p>It should be noted that all data used in the image is not original data, but made up data for portfolio needs.
                            </p>
                            <p>Thank you, you have looked at this project carefully. Hope you enjoy it! If you have any questions and are interested in this project, you can contact me on the <b>Let's Talk</b> button below.
                            </p>
                            <p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <p class="mt-5 mb-100 text-center btn-project">
            <a href="/" class="btn btn-master btn-secondary">
                Back to Portofolio
            </a>
        </p>

        <section class="section-row lets-talk lets-talk-2019">
            <div class="container">
                <div class="text-content-talk">
                    <h4>Interested in Collaboration?</h4>
                    <p>Challenge us. We want to work with you to create the really cool stuff.</p>
                </div>
                <a class="btn-below btn-default btn-foot " href="https://sebostudio.com/contact-us/"
                    data-toggle="form-modal">Let's Talk <i class="fa fa-chevron-right"></i></a>
            </div>
        </section>
    </body>

</main>
