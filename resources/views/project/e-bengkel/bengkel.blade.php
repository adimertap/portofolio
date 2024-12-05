@extends('layout.layout')

@section('name')
E-Bengkel - PORTOFOLIO
@endsection

<main>
    <body>
        <section class="section-project-detail research-moodboard">
            <div class="container">
                <div class="head">
                    <h1 class="judul">E-Bengkel Web Application</h1>
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
                            <p>Vehicle repair shops often struggle with fragmented workflows across various departments,
                                from customer management to inventory tracking and payroll. To streamline operations,
                                reduce inefficiencies, and improve customer experience, a digital solution was required
                                that could manage everything from appointments to inventory, service scheduling, and
                                sales—all within a single integrated system.</p>
                            <p></p>
                            <!-- Solution Section -->
                            <h3>Our Solution</h3>
                            <p>We developed an all-in-one platform, E-Bengkel, to support a wide range of automotive
                                workshop operations. Our solution includes secure single sign-on, dynamic service and
                                sales management, comprehensive inventory and purchasing modules, and robust payroll and
                                finance tracking features. The system also enables seamless collaboration across
                                multiple roles, from mechanics to accountants, ensuring that every aspect of the
                                business process is synchronized and optimized.</p>
                            <p></p>
                            <!-- Design Approach Section -->
                            <h3>Design Approach</h3>
                            <p>Our design process started with in-depth research and design thinking to align the
                                platform with automotive repair shop workflows. We created detailed business process
                                designs, including: Application Overview, SOP, Database Design.</p>
                            <ul>
                                <li><b>Single Sign-On:</b> User management, branch management, Midtrans payment
                                    registration, and more.</li>
                                <li><b>Front Office:</b> Vehicle and service management, discount systems, and customer
                                    registration.</li>
                                <li><b>Service Management:</b> Service acceptance, mechanical scheduling, and parts
                                    inventory tracking.</li>
                                <li><b>Point of Sales (POS):</b> Service and spare parts sales, payment processing, and
                                    reporting.</li>
                                <li><b>Inventory & Purchasing:</b> Comprehensive spare parts and supplier management,
                                    with order and stock tracking.</li>
                                <li><b>Staffing:</b> Employee data management, attendance tracking, and scheduling.</li>
                                <li><b>Payroll:</b> Monthly payroll management, tax calculations, and reporting.</li>
                                <li><b>Accounting & Finance:</b> Transaction management, invoicing, salary disbursement,
                                    and financial reporting.</li>
                            </ul>
                            <p></p>
                            <p></p>
                            <h3>Roles on System</h3>
                            <p>The application accommodates <b>8 distinct roles</b> including Owner, Front Office, Service Advisor, Mechanic, Warehouse Manager, Purchaser, Accountant, and Branch Head. Each role is tailored to meet the specific needs of automotive repair shop operations, enhancing efficiency and role-specific functionalities.</p>
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
                            <h3>Tech Stack & Testing</h3>
                            <p>Tech stack in application design which includes MySQL for databases, Laravel 8 Framework,
                                Front-End HTML and CSS, Backend PHP and Javascript. Business process design tools
                                include Notion, Microsoft Visio and Visual Studio Code for code implementation.
                            </p>
                            <p></p>
                            <p>The application has passed the testing using <b>black-box system's functionalities</b>
                                testing with 3 testers and <b>UAT (User Acceptance Testing)</b> with 16 testers by
                                distributing questionnaires, The scale used is Likert Summated Rating (LSR) with a very
                                positive score.</p>

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
                            <p>The following is a website display of this application by displaying several modules.To
                                see more details, you can visit the demo website in the about section.</p>
                        </div>
                    </div>
                </div>
                {{-- CENTER THIS ON BELOW --}}
                <div class="col-sticky d-flex justify-content-center" style="width: 100%;">
                    <div class="section-project-img">
                        <div><img src="{{ asset('assets/img/Project/Bengkel/bengkel.png') }}" class="resmood-1"></div>
                        {{-- <div><img src="{{ asset('assets/img/Project/Bengkel/Inv.png') }}" class="resmood-1"></div>
                        <div><img src="{{ asset('assets/img/Project/Bengkel/Kepeg.png') }}" class="resmood-1"></div>
                        <div><img src="{{ asset('assets/img/Project/Bengkel/Payroll.png') }}" class="resmood-1"></div>
                        <div><img src="{{ asset('assets/img/Project/Bengkel/Acc.png') }}" class="resmood-1"></div> --}}
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
                            <p>Thank you, you have looked at this project carefully. Hope you enjoy it! If you have any
                                questions and are interested in this project, you can contact me on the <b>Let's
                                    Talk</b> button.
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
