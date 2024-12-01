@extends('layout.layout')

@section('name')
Land or Building Rental Management - PORTOFOLIO
@endsection

<main>

    <body>
        <section class="section-project-detail research-moodboard">
            <div class="container">
                <div class="head">
                    <h1 class="judul">Land or Building Rental for Admin</h1>
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
                            <p>Managing land and building rental data poses significant challenges for local government offices, including disorganized records, difficulties in tracking payments and rental status, and inefficient handling of interest rate increases and reports. These inefficiencies hinder accountability and delay administrative processes. A streamlined, centralized solution was essential to simplify data management and ensure accurate, reliable information tracking.</p>
                            <p></p>
                            <h3>Our Solution</h3>
                            <p>We developed a Land and Building Rental Registration System tailored to the needs of the local government in Bali. This system centralizes rental management operations, offering features such as recording rental data, generating and printing reports, tracking annual payment histories, managing interest rate increases, and enabling multiple file uploads. The solution improves efficiency, ensures data accuracy, and provides robust administrative support.</p>
                            <p></p>
                            <h3>Design Approach</h3>
                            <ul>
                                <li><b>Business Process Design:</b> Collaborated with the client to map operational workflows, ensuring the system aligns with administrative processes for rental and payment management. SOPs and detailed workflows were developed to streamline operations.</li>
                                <li><b>Database Design:</b> Created a robust database using MySQL, structuring tables to efficiently store and retrieve data, including tenant records, payment history, and rental agreements.</li>
                            </ul>
                            <p></p>
                            <h3>Key Features</h3>
                            <ul>
                                <li><b>Rental Data Management:</b> Enables the admin to record detailed data for each tenant and property, including rental start and end dates.</li>
                                <li><b>Payment Tracking:</b> Allows yearly payment records to be logged and reviewed, ensuring transparency and accountability.</li>
                                <li><b>Interest Rate Management:</b> Tracks and updates interest rate increases for long-term rental agreements.</li>
                                <li><b>Report Generation:</b> Automatically generates detailed reports on rental data, payments, and property statistics, available in PDF and Excel formats.</li>
                                <li><b>Multiple File Uploads:</b> Supports uploading of rental agreements, payment receipts, and other relevant documents for each tenant.</li>
                                <li><b>Print Functionality:</b> Allows printed records of tenant data and reports for offline use or archiving.</li>
                            </ul>
                            <p></p>
                            <h3>Roles on System</h3>
                            <p>The application supports <b>1 key role:</b>
                            <ul>
                                <li><b>Admin:</b> Responsible for managing rental data, recording payments, generating reports, handling interest rate adjustments, and maintaining uploaded documents.</li>
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
                                employee roles. Multiple views of the Inventory Management.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-12 col-sticky">
                        <div class="section-project-img">
                            <div><img src="{{ asset('assets/img/Project/Sewa/sewa.png') }}" class="resmood-1">
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
