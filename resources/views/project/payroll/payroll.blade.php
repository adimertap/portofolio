@extends('layout.layout')

@section('name')
Payroll Management - PORTOFOLIO
@endsection

<main>
    <body>
        <section class="section-project-detail research-moodboard">
            <div class="container">
                <div class="head">
                    <h1 class="judul">Payroll Management</h1>
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
                            <p>Kantor Pelayanan Pajak Pratama Gianyar needed a payroll application to streamline
                                employee salary management and enhance data transparency for both employees and treasury
                                staff. The manual processing of salaries led to inefficiencies and increased the
                                likelihood of errors, necessitating an automated solution that was user-friendly and
                                aligned with governmental payroll standards.</p>
                            <p></p>
                            <h3>Our Solution</h3>
                            <p>To address these needs, we developed a comprehensive payroll application with a
                                centralized database for employee records, salary grades, and payroll details. This
                                application simplifies payroll management by allowing authorized users to input, modify,
                                and retrieve salary data while providing employees secure access to their own salary
                                slips. The solution also supports data upload from Excel and generates downloadable
                                salary reports for record-keeping.</p>
                            <p></p>
                            <h3>Design Approach</h3>
                            <p>Our approach began with a collaborative brainstorming session with Kantor Pelayanan Pajak
                                Pratama Gianyar to map out the specific requirements of the payroll process. We then
                                developed a workflow for the payroll application, which was reviewed and approved by the
                                client before moving into the database design and development phases. Key design
                                elements include:</p>
                            <ul>
                                <li><b>Database Design:</b> A Physical Data Model (PDM) was created using MySQL,
                                    comprising 6 entities to support efficient data management and retrieval.</li>
                                <li><b>System Flow Design:</b> Detailed flow charts to define the roles and interactions
                                    within the payroll process, ensuring seamless user experience and functionality.
                                </li>
                            </ul>
                            <h3>Key Features</h3>
                            <ul>
                                <li><b>Login and User Authentication:</b> Secure login for all users with role-based
                                    access.</li>
                                <li><b>Employee Master Data Management:</b> Manage employee records, including personal
                                    information, salary grades, and roles.</li>
                                <li><b>Salary Management:</b> Configurable salary components, including basic salary,
                                    allowances, deductions, and performance-based bonuses.</li>
                                <li><b>Excel Format Upload:</b> Support for data uploads in Excel format to streamline
                                    payroll processing.</li>
                                <li><b>Salary Slip Generation:</b> Generate and download salary slips for individual
                                    employees on a monthly basis.</li>
                            </ul>

                            <!-- Roles on System Section -->
                            {{-- <h3>Roles on System</h3>
                            <p>The application includes <b>2 main roles</b> to ensure smooth operations:</p>
                            <ul>
                                <li><b>Treasurer Role:</b> Manages all employee payroll data, including master data and
                                    salary components, ensuring accurate payroll processing.</li>
                                <li><b>Employee Role:</b> Allows employees to securely view their monthly salary data
                                    and download their salary slips.</li>
                            </ul> --}}

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
                                Front-End HTML and CSS (Bootstrap 4), Backend PHP and Javascript.
                                Business process design tools include Notion and Visual Studio Code for
                                code implementation.
                                The application has been tested and is running normally until now.
                            </p>
                            <p>
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
                            <p>The appearance of the website in this application consists of a view from the treasurer's
                                side and a view from the employee's side.

                        </div>
                    </div>
                    <div class="col-md-12 col-sticky">
                        <div class="section-project-img">
                            <div><img src="{{ asset('assets/img/Project/Payroll/pajak.png') }}"
                                    class="resmood-1">
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
                                    Talk</b> button or button below.
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
