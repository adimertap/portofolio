@extends('layout.layout')

@section('name')
Bootcamp - PORTOFOLIO
@endsection

<main>
    <body>


        <section class="section-project-detail research-moodboard">
            <div class="container">
                <div class="head">
                    <h1 class="judul">Bootcamp Web Application</h1>
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
                            <p>An outsourcing company wanted to create a website that offers accessible, high-quality training programs available for purchase. The goal was to provide a platform where individuals could develop essential hard skills, increasing their employability and enhancing the quality of talent available to organizations.</p>
                            <p></p>
                            <h3>Our Solution</h3>
                            <p>To meet this need, we developed a robust online training platform that enables users to explore and purchase a wide range of skill-building courses. This platform is designed to make professional development accessible, empowering users to enhance their skills and improve career prospects through structured, interactive training modules.</p>
                            <p></p>
                            <h3>Application Design Approach</h3>
                            <p>Our approach began with comprehensive research and design thinking, ensuring the business processes aligned with both user needs and organizational goals. Key components of the design include an Application Overview, Standard Operating Procedures (SOPs), and organized workflows with Data Flow and Use Case Diagrams to streamline user journeys.
                            </p>
                            <p></p>
                            <ul> <li>Master Data Management: Manage Courses, Mentors, Discounts, and Course Types</li> <li>User Achievement Tracking: Track Evaluations, Certifications, Portfolios, and Course Reviews</li> <li>Course Management: Create and Approve Modules, Quizzes, and Final Assignments</li> <li>Payment Integration: Secure payments through Midtrans</li> <li>Community Page: Job vacancy listings to support ongoing career development</li> </ul>
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
                            <p>Tech stack in application design which includes MySQL for databases, Laravel 8 Framework, Front-End HTML and CSS, Backend PHP and Javascript. <br>Business process design tools include Notion, Microsoft Visio and Visual Studio Code for code implementation.
                            </p>
                            <p></p>
                            <p>The application has passed the testing phase with 3 testers using <b>black-box testing</b> that tests the system's functionalities.</p>
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
                            <p>The platform’s interface is tailored to each role, offering unique views for Admins, Users, Mentors, and Partner Companies. This role-based design provides users with streamlined access to relevant tools and information.</p>
                            <p></p>
                        </div>
                    </div>
                    <div class="col-md-12 col-sticky">
                        <div class="section-project-img">
                            <div><img src="{{ asset('assets/img/Project/bootcamp-destkop-1.png') }}" class="resmood-1">
                            </div>
                            <div><img src="{{ asset('assets/img/Project/bootcamp-destkop-2.png') }}" class="resmood-1">
                            </div>
                            <div><img src="{{ asset('assets/img/Project/bootcamp-destkop-3.png') }}" class="resmood-1">
                            </div>
                            <div><img src="{{ asset('assets/img/Project/bootcamp-destkop-4.png') }}" class="resmood-1">
                            </div>
                            <div><img src="{{ asset('assets/img/Project/bootcamp-destkop-6.png') }}" class="resmood-1">
                            </div>
                            <div><img src="{{ asset('assets/img/Project/bootcamp-destkop-5.png') }}" class="resmood-1">
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
                            <p>Thank you, you have looked at this project carefully. Hope you enjoy it! If you have any questions and are interested in this project, you can contact me on the button <b>Let's Talk</b> or button below.
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

