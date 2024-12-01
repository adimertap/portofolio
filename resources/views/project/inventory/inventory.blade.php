@extends('layout.layout')

@section('name')
Inventory & Sales Gas Supplier - PORTOFOLIO
@endsection

<main>

    <body>
        <section class="section-project-detail research-moodboard">
            <div class="container">
                <div class="head">
                    <h1 class="judul">Inventory and Sales Gas Supplier</h1>
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
                        <p>PT. Suksesberkahbertumbuh required a comprehensive web-based solution to streamline the
                            management of inventory and sales for gas and aqua products. Manual tracking methods led to
                            inefficiencies and made it challenging to generate timely reports, necessitating an
                            automated, user-friendly solution to support back-office operations.</p>
                            <p></p>
                        <h3>Our Solution</h3>
                        <p>We developed a tailored web application to manage inventory and sales operations seamlessly.
                            The application centralizes all core processes, providing real-time access to inventory
                            dashboards, purchase orders, receiving, and sales tracking. This solution optimizes
                            workflow, enhances data accuracy, and provides robust reporting capabilities to meet the
                            unique needs of PT. Suksesberkahbertumbuh.</p>
                            <p></p>
                        <h3>Design Approach</h3>
                        <ul>
                            <li><b>Business Process Design:</b> Conducted collaborative research with the client to
                                align workflows with standard operating procedures, producing a structured Application
                                Overview, SOPs, and business process maps for inventory and sales functions.</li>
                            <li><b>Database Design:</b> Developed a Physical Data Model (PDM) using MySQL, structuring
                                data across <b>13 tables</b> to support efficient inventory and sales management.</li>
                        </ul>
                        <p></p>
                        <h3>Key Features</h3>
                        <ul>
                            <li><b>Login and Master Data Management:</b> Secure login and management of Employees,
                                Suppliers, Supplier Types, Categories, Products, and Customer data.</li>
                            <li><b>Inventory Management:</b> Real-time inventory dashboard, purchase orders, receiving,
                                and BIN card tracking.</li>
                            <li><b>Reporting:</b> Daily and monthly reports for both purchases and sales, accessible in
                                various formats.</li>
                            <li><b>Sales Management:</b> Dashboard for tracking overall sales, individual sales
                                transactions, and employee-specific sales.</li>
                        </ul>
                        <p></p>
                        <h3>Roles on System</h3>
                        <p>The application supports <b>2 key roles</b>:
                        <ul>
                            <li><b>Owner Role:</b> Manages all master data, oversees business processes, and accesses
                                comprehensive transaction reports.</li>
                            <li><b>Employee Role:</b> Records daily sales transactions and supports inventory management
                                functions.</li>
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
                                employee roles. Multiple views of the Inventory and Sales Web Application.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-12 col-sticky">
                        <div class="section-project-img">
                            <div><img src="{{ asset('assets/img/Project/Inventory/inv-1.png') }}" class="resmood-1">
                            </div>
                            <div><img src="{{ asset('assets/img/Project/Inventory/inv-2.png') }}" class="resmood-1">
                            </div>
                            <div><img src="{{ asset('assets/img/Project/Inventory/inv-3.png') }}" class="resmood-1">
                            </div>
                            <div><img src="{{ asset('assets/img/Project/Inventory/inv-4.png') }}" class="resmood-1">
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
