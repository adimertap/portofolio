@extends('layout.layout')

@section('name')
Project Movie Apps - Portofolio Adim
@endsection

<main>

    <body>
        <section class="section-project-detail research-moodboard">
            <div class="container">
                <div class="row-sticky-parent">
                    <div class="col-md-2 col-sticky">
                        <div class="section-project-title title-sticky">
                            <div><img src="{{ asset('assets/img/Project/tools-step.png') }}" class="btn-step"></div>
                        </div>
                    </div>
                    <div class="col-md-8 col-sticky">
                        <div class="section-project-description">
                            <h3>Tech Stack and Third Party</h3>
                            <p>Tech stack in application design which includes MySQL for databases, Laravel 9 Framework, Front-End ReactJs, HTML, Tailwind, Backend PHP. Third Party includes Laravel Breeze, Intertia Client Side Rendered, Spatie Roles & Permissions and Gitflow.
                            </p>
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
                            <div><img src="{{ asset('assets/img/Project/database-step.png') }}" class="btn-step"></div>
                        </div>
                    </div>
                    <div class="col-md-8 col-sticky">
                        <div class="section-project-description ">
                            <h3>Database Design</h3>
                            <p>Database design is carried out on the Sequel Pro application which is described in the form of PDM or Physical Data Model. PDM which was built as a guide in making Movie Apps consisting of <b>13 entitas (table)</b>. 
                            </p>
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
                            <div><img src="{{ asset('assets/img/Project/website-step.png') }}" class="btn-step"></div>
                        </div>
                    </div>
                    <div class="col-md-8 col-sticky">
                        <div class="section-project-description ">
                            <h3>Website Look</h3>
                            <p>Some of the website displays in this application are in the form of user roles. Multiple views of the Movie Streaming Web Apps, for more details you can see the section on project demos.
                            </p>
                        </div>
                    </div>
                    <div class="container-fluid mt-10">
                        <div class="project-image">
                            <img src="{{ asset('assets/img/Project/Movie/movie-landing.png') }}">
                        </div>
                    </div>
                    <div class="col-md-12 col-sticky">
                        <div class="section-project-img">
                            <div><img src="{{ asset('assets/img/Project/Movie/1.png') }}" class="resmood-1">
                            </div>
                            <div><img src="{{ asset('assets/img/Project/Movie/2.png') }}" class="resmood-1">
                            </div>
                            <div><img src="{{ asset('assets/img/Project/Movie/3.png') }}" class="resmood-1">
                            </div>
                            <div><img src="{{ asset('assets/img/Project/Movie/4.png') }}" class="resmood-1">
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
