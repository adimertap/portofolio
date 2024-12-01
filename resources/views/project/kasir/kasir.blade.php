@extends('layout.layout')

@section('name')
Money Changer - PORTOFOLIO
@endsection

<main>

    <body>
        <section class="section-project-detail research-moodboard">
            <div class="container">
                <div class="head">
                    <h1 class="judul">Money Changer Cashier</h1>
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
                            <p>The client needed a robust cashier application tailored for a money-changing business,
                                requiring accurate, efficient transaction processing, daily cash flow management, and
                                reliable reporting to improve operational efficiency. Manual transaction handling and
                                reporting presented challenges, including potential for errors and delays in financial
                                tracking.</p>
                                <p></p>
                            <h3>Our Solution</h3>
                            <p>We developed a custom cashier application designed to meet the unique needs of a money
                                changer business. This application centralizes all cashier functions, from transaction
                                management to reporting, allowing for seamless daily operations, secure data handling,
                                and streamlined reporting. The system is user-friendly, ensuring staff can efficiently
                                manage transactions and generate reports with minimal training.</p>
                                <p></p>
                            <h3>Design Approach</h3>
                            <ul>
                                <li><b>Business Process Design:</b> Conducted in-depth research with the client to align
                                    processes with standard operating procedures, resulting in a tailored Application
                                    Overview and SOPs.</li>
                                <li><b>Database Design:</b> Created a Physical Data Model (PDM) using MySQL, organizing
                                    essential data across <b>6 tables</b> for efficient data management and retrieval.
                                </li>
                            </ul>
                            <p></p>
                            <h3>Key Features</h3>
                            <ul>
                                <li><b>Secure Login and Master Data Management:</b> Access control with management for
                                    employee and currency data.</li>
                                <li><b>Transaction Processing:</b> Cashier transactions, daily cash management, and
                                    transaction reporting.</li>
                                <li><b>Financial Reporting:</b> Daily and monthly transaction reports, debit and credit
                                    journal entries.</li>
                                <li><b>Data Export:</b> Downloadable Excel and PDF reports, with print options for
                                    transaction receipts.</li>
                            </ul>
                            <p></p>
                            <h3>Roles on System</h3>
                            <p>The application supports <b>2 key roles</b>:
                            <ul>
                                <li><b>Owner Role:</b> Manages all master data, oversees business processes, and
                                    accesses transaction reports.</li>
                                <li><b>Employee Role:</b> Handles daily transaction recording and cashier functions.
                                </li>
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
                            <p>Tech stack in application design which includes MySQL for databases, Laravel
                                Framework,HTML and CSS, Backend PHP and Javascript. The application has been tested and
                                is running normally until now.
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
                                employee roles. Multiple views of the Payroll Web Application, for more details you can
                                see the section on project demos.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-12 col-sticky">
                        <div class="section-project-img">
                            <div><img src="{{ asset('assets/img/Project/Money/money1.png') }}" class="resmood-1">
                            </div>
                            <div><img src="{{ asset('assets/img/Project/Money/money2.png') }}" class="resmood-1">
                            </div>
                            <div><img src="{{ asset('assets/img/Project/Money/money3.png') }}" class="resmood-1">
                            </div>
                            <div><img src="{{ asset('assets/img/Project/Money/money4.png') }}" class="resmood-1">
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
