@extends('layout.layout')

@section('name')
IC-Education - PORTOFOLIO
@endsection

<main>

    <body>
        <section class="section-project-detail research-moodboard">
            <div class="container">
                <div class="head">
                    <h1 class="judul">IC Education E-Learning</h1>
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
                        <h3>The Challenge</h3>
                        <p>
                            IC Consultant faced the challenge of creating a comprehensive platform to deliver training, seminars, and USKP preparation efficiently. The primary requirement was a system that enabled participants to purchase training, attend sessions, and take multi-stage exams to earn certificates, which are vital for agency compliance and job applications. The lack of a centralized, user-friendly solution hindered seamless operations, certificate management, and participant tracking, necessitating an innovative and reliable system.
                        </p>
                            <p></p>
                        <h3>Our Solution</h3>
                        <p>
                            We developed a tailored e-learning platform, IC Education, to address IC Consultant's needs. The system integrates modern features, including secure login and registration, master data management, seamless transactions with the Midtrans payment gateway (supporting discount management), multi-stage exams with time controls, automated certificate issuance, and institute management capabilities. Designed for accessibility and scalability, this solution enhances operational efficiency while providing a superior user experience for participants.
                        </p>
                            <p></p>
                        <h3>Design Approach</h3>
                        <ul>
                            <li><b>Business Process Design:</b> Collaborated with IC Consultant to ensure the platform's workflow aligns with their training and certification processes. Structured application workflows, operational procedures, and data flows to meet training goals.
                            </li>
                            <li><b>Database Design:</b> Built a robust Physical Data Model (PDM) using MySQL, ensuring secure and efficient data management across user roles, transactions, and certificate tracking.</li>
                        </ul>
                        <p></p>
                        <h3>Key Features</h3>
                        <ul>
                            <li><b>Landing Page:</b>  A visually engaging landing page displaying all available classes and training programs, allowing users to explore and select options easily.</li>
                            <li><b>Login and Master Data Management:</b> Secure access for participants, admins, and super admins to manage their roles and activities.</li>
                            <li><b>Master Data Management :</b>Centralized handling of participant data, product, product price, discount, learning syllabus, institute, training schedules, and certificate records.</li>
                            <li><b>Transactions with Payment Gateway:</b>Seamless purchase experience using the Midtrans API, including flexible discount management.</li>
                            <li><b>Multi-Stage Exams :</b>  Structured exams in three stages with time constraints, ensuring proper assessment for certification.</li>
                            <li><b>Certificate Management :</b>  Automated generation and issuance of certificates for participants meeting the requirements.</li>

                        </ul>
                        <p></p>
                        <h3>Roles on System</h3>
                        <p>The application supports <b>3 key roles</b>:
                        <ul>
                            <li><b>Super Admin Role :</b> Oversees the entire system, manages roles, and ensures smooth operations.</li>
                            <li><b>Admin Role:</b> Manages training data, participant records, and exam schedules.</li>
                            <li><b>User (Training Participants) Role:</b> Purchases training, attends sessions, and completes exams to earn certifications.</li>
                        </ul>
                    </div>
                </div>

            </div>
            </div>
        </section>

        {{-- <section class="section-project-detail research-moodboard">
            <div class="container">
                <div class="row-sticky-parent">
                    <div class="col-md-2 col-sticky">
                        <div class="section-project-title title-sticky">
                            <div><img src="{{ asset('assets/img/Project/tools-step.png') }}" class="btn-step"></div>
                        </div>
                    </div>
                    <div class="col-md-8 col-sticky">
                        <div class="section-project-description">
                            <h3>Tech Stack and Testing</h3>
                            <p>Tech stack in application design which includes MySQL for databases, Laravel 8 Framework,
                                Front-End HTML and CSS (Bootstrap 5), Backend PHP and Javascript. Business process
                                design tools include Notion and Visual Studio Code for code implementation. The
                                application has been tested and is running normally until now.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section> --}}
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
                            <p>Some of the website displays in this application are in the form of owner roles and
                                employee roles. Multiple views of the IC Education.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-12 col-sticky">
                        <div class="section-project-img">
                            <div><img src="{{ asset('assets/img/Project/ic/ic.png') }}" class="resmood-1">
                            </div>
                            {{-- <div><img src="{{ asset('assets/img/Project/Inventory/inv-2.png') }}" class="resmood-1">
                            </div>
                            <div><img src="{{ asset('assets/img/Project/Inventory/inv-3.png') }}" class="resmood-1">
                            </div>
                            <div><img src="{{ asset('assets/img/Project/Inventory/inv-4.png') }}" class="resmood-1">
                            </div> --}}
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
                            <p>It should be noted that all data used in the image is not original data, but made up data
                                for portfolio needs.
                            </p>
                            <p>Thank you, you have looked at this project carefully. Hope you enjoy it! If you have any
                                questions and are interested in this project, you can contact me on the <b>Let's
                                    Talk</b> button below.
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
