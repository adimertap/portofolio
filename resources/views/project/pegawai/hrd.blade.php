@extends('layout.layout')

@section('name')
HRIS - PORTOFOLIO
@endsection

<main>

    <body>
        <section class="section-project-detail research-moodboard">
            <div class="container">
                <div class="head">
                    <h1 class="judul">Human Resources Information System </h1>
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
                            <p>The client required a comprehensive HR management application to streamline employee data
                                handling, recruitment, and performance management, enhancing data accuracy and
                                transparency across multiple roles. The existing manual processes were leading to
                                inefficiencies, data inconsistencies, and increased potential for errors, necessitating
                                a robust, automated solution tailored to HR needs.</p>
                            <p></p>
                            <h3>Our Solution</h3>
                            <p>We developed a sophisticated HR management application that centralizes and streamlines
                                all HR functions. This solution provides user-friendly access for HR and employees,
                                covering essential HR aspects from recruitment and onboarding to employee scheduling,
                                history tracking, and performance evaluation. The centralized database securely manages
                                employee records, roles, and responsibilities, ensuring efficient workflows and
                                comprehensive data accessibility.</p>
                            <p></p>
                            <h3>Design Approach</h3>
                            <p>Our design approach was grounded in thorough research and collaborative design thinking.
                                We worked closely with the client to map out required workflows and data structures. Key
                                design elements include:Application Overview, Standard Operating Procedures (SOPs), Physical Data Model (PDM). </p>
                            <p></p>
                            <h3>Key Features</h3>
                            <ul>
                                <li><b>Login and Master Data Management:</b> Secure login and comprehensive data
                                    management for Employees, Positions, Ranks, Groups, Work Units, and Sub Units.</li>
                                <li><b>Recruitment and Onboarding:</b> Job posting requirements, recruitment workflows,
                                    and onboarding processes accessible both internally and externally.</li>
                                <li><b>Employee Management:</b> Modules for employee scheduling, leave management,
                                    history tracking (including family, education, achievements, etc.), and disciplinary
                                    actions.</li>
                                <li><b>Role and Performance Management:</b> Tools for employee self-assessment,
                                    validation processes, and historical records for promotions, demotions, and role
                                    adjustments.</li>
                                <li><b>Employee Records and History Tracking:</b> Detailed records of employee history,
                                    from orientation and placements to achievements and performance evaluations.</li>
                            </ul>
                            <h3>Roles on System</h3>
                            <p>The application supports <b>7 distinct roles</b> to ensure role-based access and
                                responsibilities within the organization:</p>
                            <ul>
                                <li><b>Main Director Role:</b> Access to high-level insights and system-wide HR
                                    operations.</li>
                                <li><b>HRD Head Role:</b> Management of all HR functions and oversight of employee data.
                                </li>
                                <li><b>HRD Employee Role:</b> Support for HR tasks, including data entry and
                                    maintenance.</li>
                                <li><b>Unit Director Role, Unit Manager Role:</b> Oversight of specific unit operations
                                    and approvals.</li>
                                <li><b>Sub Unit Head Role, Sub Unit Employee Role:</b> Day-to-day operational roles with
                                    access to relevant data and employee management functions.</li>
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
                            <p>Tech stack in application design which includes MySQL for databases, Laravel Framework,
                                HTML and CSS, Backend PHP and Javascript.
                            </p>
                            <p></p>
                            <p>The application has passed the testing using <b>black-box system's functionalities</b>
                                testing with 3 testers and <b>UAT (User Acceptance Testing)</b> with 11 testers by
                                distributing questionnaires, The scale used is Likert Summated Rating (LSR) with a very
                                positive score </p>
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
                            <p>Some of the appearances of the website in this application consist of displaying the user
                                role of HRD employees. Some of the Payroll Web Application views.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-12 col-sticky">
                        <div class="section-project-img">
                            <div><img src="{{ asset('assets/img/Project/HRD/hrd-1.png') }}" class="resmood-1">
                            </div>
                            <div><img src="{{ asset('assets/img/Project/HRD/hrd-2.png') }}" class="resmood-1">
                            </div>
                            <div><img src="{{ asset('assets/img/Project/HRD/hrd-3.png') }}" class="resmood-1">
                            </div>
                            <div><img src="{{ asset('assets/img/Project/HRD/hrd-4.png') }}" class="resmood-1">
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
