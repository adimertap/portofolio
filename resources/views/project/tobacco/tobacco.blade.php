@extends('layout.layout')

@section('name')
Tobacco Export - PORTOFOLIO
@endsection

<main>

    <body>
        <section class="section-project-detail research-moodboard">
            <div class="container">
                <div class="head">
                    <h1 class="judul">Tobacco Export Management System</h1>
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
                            <p> Our client in the tobacco export industry needed a comprehensive solution to streamline
                                their operations across inventory, finance, and customer service. The key challenges
                                included managing complex workflows such as inventory requests, purchase orders, and
                                financial transactions, all while ensuring seamless communication with suppliers and
                                clients. The absence of a unified platform led to inefficiencies, slow decision-making,
                                and difficulty in managing multiple user roles. This called for a centralized, scalable
                                system to optimize these processes and improve overall business performance. </p>
                            <p></p>
                                <h3>Our Solution</h3>
                            <p> We developed a robust Tobacco Export Management System that addresses the client's needs
                                by integrating four main features: inventory management, finance tracking, customer
                                service, and dynamic landing pages. The system offers real-time data access for
                                decision-makers and supports roles such as purchasing, finance, and management. Key
                                functionalities include secure authentication, master data management, purchase and
                                delivery requests, invoicing, income and outcome reporting, and customer order tracking.
                                This comprehensive solution improves efficiency, enhances communication, and ensures
                                smoother day-to-day operations. </p>
                            <p></p>
                                <h3>Design Approach</h3>
                            <ul>
                                <li><b>Business Process Design:</b> Worked closely with the client to understand the
                                    operational workflow and ensure the platform met their needs for inventory, finance,
                                    and customer service. The design was tailored to automate key processes and support
                                    real-time decision-making.</li>
                                <li><b>Database Design:</b> Developed a robust Physical Data Model (PDM) to manage and
                                    secure transactional data, user roles, inventory, and financial records, ensuring
                                    seamless integration across the system.</li>
                                <li><b>UI/UX Design:</b> Utilized Figma for user interface design, focusing on usability
                                    and accessibility for both admin users and managers, to deliver a smooth and
                                    intuitive experience.</li>
                            </ul>
                            <h3>Key Features</h3>
                            <ul>
                                <li><b>Inventory Management:</b> Includes store requests, delivery and purchase
                                    requests, purchase orders, receiving, warehouse cards, master data, and approval
                                    workflows.</li>
                                <li><b>Finance Management:</b> Facilitates B2B transactions, supplier invoicing, order
                                    payments, and detailed income and outcome reporting.</li>
                                <li><b>Customer Service:</b> Enables tracking of item availability, customer orders via
                                    web interface, and efficient content and contact management.</li>
                                <li><b>Landing Page & Supporting Features:</b> Engaging landing page with dynamic
                                    content, along with supporting features for employee and department management.</li>
                            </ul>
                            <h3>Roles on System</h3>
                            <p>The application supports <b>5 key roles</b>: <ul>
                                    <li><b>Purchasing/Inventory:</b> Manages inventory requests, purchase orders, and
                                        warehouse operations.</li>
                                    <li><b>Admin:</b> Oversees system configuration, user management, and ensures smooth
                                        system operations.</li>
                                    <li><b>Finance:</b> Handles financial transactions, invoicing, and reporting for all
                                        business processes.</li>
                                    <li><b>Director:</b> Provides oversight and makes high-level strategic decisions
                                        based on system insights.</li>
                                    <li><b>Manager:</b> Manages day-to-day activities within specific departments,
                                        ensuring operational efficiency.</li>
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
                            <div><img src="{{ asset('assets/img/Project/tobacco/tobacco.png') }}" class="resmood-1">
                            </div>
                            {{-- <div><img src="{{ asset('assets/img/Project/Inventory/inv-2.png') }}"
                            class="resmood-1">
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
