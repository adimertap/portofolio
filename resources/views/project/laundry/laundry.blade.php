@extends('layout.layout')

@section('name')
Laundry Management - PORTOFOLIO
@endsection

<main>

    <body>
        <section class="section-project-detail research-moodboard">
            <div class="container">
                <div class="head">
                    <h1 class="judul">Laundry Cashier Application</h1>
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
                            <p>PT. Riastavalasindo required a robust extension to their existing Money Changer Cashier
                                program to cater to their laundry management needs. The focus was on accurate
                                transaction recording, effective master data management, and reliable reporting.
                                Previous manual methods for tracking transactions and maintaining records introduced
                                inefficiencies and errors, impacting overall operational accuracy.</p>
                            <p>Additionally, the client emphasized the need for a geotagging-based employee absence
                                feature. Employees would be required to mark their attendance within a 1km radius of the
                                office to ensure accountability and operational efficiency. This requirement aimed to
                                improve punctuality and maintain transparency in attendance records. Seamlessly
                                integrating this feature into the Money Changer Cashier program ensured that operational
                                and financial workflows were unified for better management.</p>
                            <h3>Our Solution</h3>
                            <p></p>
                            <p>We enhanced the Money Changer Cashier system to support laundry management operations
                                seamlessly, while also integrating a geotagging-based employee absence feature. The
                                upgraded application centralizes transaction processing, master data organization, and
                                reporting while maintaining a user-friendly interface. Employees are now required to
                                clock in and out using the geotagging feature, which restricts attendance to within a
                                1km radius of the office. This ensures operational transparency, prevents fraudulent
                                attendance, and provides reliable data for payroll calculations. The system also retains
                                its core Money Changer Cashier functionality to address financial needs effectively.</p>
                            <p></p>
                                <h3>Design Approach</h3>
                            <ul>
                                <li><b>Business Process Design:</b> Conducted detailed discussions with the client to
                                    refine workflows and align them with operational standards, creating an updated
                                    Application Overview and SOPs specific to laundry management while integrating
                                    geotagging-based attendance requirements.</li>
                                <li><b>Database Design:</b> Enhanced the existing MySQL-based Physical Data Model (PDM)
                                    by integrating tables and relationships to accommodate laundry service data,
                                    geotagging-based attendance tracking, and employee absence data, ensuring efficient
                                    data handling.</li>
                            </ul>
                            <p></p>
                            <h3>Key Features</h3>
                            <ul>
                                <li><b>Secure Login and Master Data Management:</b> User authentication with management
                                    of laundry services, customer information, employee data, and geotagging-based
                                    attendance settings.</li>
                                <li><b>Transaction Recording:</b> Streamlined processes for logging laundry orders,
                                    tracking payments, and managing service completion.</li>
                                <li><b>Employee Absence Management with Geotagging:</b> Attendance tracking that
                                    requires employees to clock in and out within a 1km radius of the office, ensuring
                                    accurate and reliable attendance records.</li>
                                <li><b>Reporting:</b> Automated generation of daily and monthly reports, including
                                    financial summaries, service tracking, and attendance records linked to geotagging
                                    data.</li>
                                <li><b>Data Export and Print Options:</b> Easy download of reports in Excel or PDF
                                    formats, with receipt printing capabilities.</li>
                            </ul>
                            <p></p>
                            <h3>Roles on System</h3>
                            <p>The application supports <b>2 key roles</b>:</p>
                            <ul>
                                <li><b>Owner Role:</b> Manages all master data, monitors overall operations, accesses
                                    detailed reports, and oversees geotagging-based attendance and employee shifts.</li>
                                <li><b>Employee Role:</b> Handles daily transaction recording, customer service updates,
                                    operational support, and marks attendance within the geotagging radius.</li>
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
                                employee roles. Multiple views of the Laundry Application.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-12 col-sticky">
                        <div class="section-project-img">
                            <div><img src="{{ asset('assets/img/Project/laundry/laundry.png') }}" class="resmood-1">
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
