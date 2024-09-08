<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Center Services</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom styling to match your description */
        .hero-section {
            background-image: url('{{ asset('/storage/images/Hero.jpg') }}'); /* Use Laravel asset helper */
            background-size: cover;
            background-position: center;
            height: 100vh; /* Full viewport height */
            display: flex;
            align-items: center; /* Center vertically */
        }

        .hero-content {
            color: white;
        }
        .service-box {
            border: 1px solid #e3e3e3;
            border-radius: 8px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }
        .service-box:hover {
            transform: translateY(-10px); /* Lift effect on hover */
        }
        .icon {
            font-size: 40px;
            color: #f5a742; /* Customize icon color */
        }
        .about-section {
            padding: 50px 0;
        }
        .about-content {
            background-color: #2c54cc; /* Blue background color */
            color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            position: relative; /* Reset positioning for smaller screens */
            width: 100%;
            z-index: 10; /* Ensure the blue section appears on top */
        }
        .about-content h3 {
            font-weight: bold;
        }
        .about-content p {
            line-height: 1.8;
        }
        .about-illustration img {
            height:33rem;
            max-width: 100%; /* Ensure the image scales properly */
            z-index: 5; /* Lower z-index to ensure it is behind the blue section */
            box-shadow: -4px 6px 12px 1px rgba(0,0,0,0.17);
-webkit-box-shadow: -4px 6px 12px 1px rgba(0,0,0,0.17);
-moz-box-shadow: -4px 6px 12px 1px rgba(0,0,0,0.17);
        }
        .btn-custom {
            background-color: white;
            color: #2c54cc;
            border: 2px solid white;
            padding: 10px 20px;
            font-weight: bold;
        }
        .btn-custom:hover {
            background-color: #f7f7f7;
            color: #2c54cc;
            border-color: #2c54cc;
        }

        /* Larger Screens */
        @media (min-width: 768px) {
            .about-content {
                position: absolute;
                right: 0;
                top: 50%;
                transform: translateY(-50%);
                width: 40%; /* Width of the blue section on larger screens */
            }

        }

        /* Smaller Screens */
        @media (max-width: 767px) {
            .about-content {
                max-width: 90%; /* Limit the width on smaller screens */
                margin: 0 auto; /* Center the blue section on small screens */
                padding: 20px; /* Adjust padding for smaller screens */
            }
            .about-illustration img {
        max-height: 18rem; /* Limit the maximum height on smaller screens */
    }
        }

 /* Background and card styling */
 .services-section {
            background-color: #f6f7f9; /* Light gray background */
            padding: 50px 0;
        }
        .services-header {
            font-weight: bold;
            margin-bottom: 40px;
        }
        .service-card {
            border: none;
            border-radius: 10px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            padding: 30px;
            transition: transform 0.3s ease;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            min-height: 150px; /* Ensure consistent height */
        }
        .service-card:hover {
            transform: translateY(-10px);
        }
        .service-card img {
            width: 50px;
            margin-bottom: 15px;
        }
        .service-card h5 {
            font-size: 1.2rem;
            margin-bottom: 15px;
            min-height: 50px; /* Ensure enough space for multiline titles */
        }
        .service-card p {
            font-size: 1rem;
            flex-grow: 1; /* Allow the description to fill the remaining space */
        }
        .service-card-white {
            background-color: white;
        }
        .service-card-blue {
            background-color: #2c54cc;
            color: white;
        }
        .service-card img {
            width: 50px;
            margin-bottom: 15px;
            border-bottom: 2px solid #ddd; /* Add bottom border */
            padding-bottom: 10px;
        }

        .img-center {
            margin: 0 auto; /* Center the image horizontally */
            display: block;
        }
        .btn-contact{
            background-color: #2947A9;
            color:white;
            padding: 12px 35px 12px 35px;
        }

         /* Website design section styling */
         .website-design-section {
            background-color: #4a4a4a; /* Dark background */
            color: white; /* White text */
            padding: 80px 0;
            position: relative;
            text-align: center;
        }

        .website-design-section .btn-custom {
            background-color: transparent;
            color: white;
            border: 2px solid white;
            font-weight: bold;
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        .website-design-section .btn-custom:hover {
            background-color: white;
            color: #4a4a4a;
        }
        .website-design-section img {
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            max-width: 100%;
            height: 100%;
            opacity: 0.2; /* Lighten the background image */
        }
         /* Styling for the project section */
         .projects-section {
            padding: 50px 0;
        }
        .projects-header {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 40px;
        }
        /* Sidebar styling */
        .projects-sidebar {
            list-style-type: none;
            padding-left: 0;
            margin-bottom: 0;
        }
        .projects-sidebar li {
            font-size: 1.2rem;
            margin-bottom: 15px;
        }
        .projects-sidebar .active {
            color: #2c54cc;
            font-weight: bold;
            border-left: 3px solid #2c54cc;
            padding-left: 10px;
        }
        .projects-sidebar li a {
            text-decoration: none;
            color: #c0c0c0;
            transition: color 0.3s ease;
        }
        .projects-sidebar li a:hover {
            color: #2c54cc;
        }
        /* Project card styling */
        .project-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            padding: 20px;
            transition: transform 0.3s ease;
        }
        .project-card:hover {
            transform: translateY(-10px);
        }
        .project-card img {
            max-width: 100%;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        .project-card .project-title {
            background-color: #2c54cc;
            color: white;
            padding: 10px;
            font-weight: bold;
            text-align: center;
            border-radius: 5px;
        }
        .blue{
            background-color: #2c54cc;
            padding: 40px 0;
        }

   /* Our Customers Section */
   .customers-section {
            background-color: #2c54cc;
            color: white;
            padding: 50px 0;
            text-align: center;
        }
        .customers-section h3 {
            margin-bottom: 40px;
            font-weight: bold;
        }
        .customer-logo {
            padding: 15px;
            background-color: white;
            border-radius: 10px;
            transition: transform 0.3s ease;
        }
        .customer-logo:hover {
            transform: scale(1.05);
        }
        /* Footer Section */
        .footer-section {
            color: #2947A9;

        }
        .footer-section .contact-info {
            text-align: left;

        }
        .contact-info a {
            color: #2947A9;
            text-decoration: none;
        }
        .footer-section a {
            color: black;
            text-decoration: none;
        }
        .footer-section a:hover {
            text-decoration: underline;
        }
        .footer-section .partner-logo {
            max-height: 28px;
            margin-right: 9px;
        }
        .partner-logo {
            max-height: 47px;
            margin-right: 30px;
        }
        .footer-bottom {
            background-color: #2342a2;
            color: #2947A9;
            padding: 10px;
            text-align: center;
            font-size: 0.9rem;
        }
                /* Section styling */
                .contact-section {
            background-color: #f6f7f9; /* Light gray background */
            padding: 60px 0;
        }
        .contact-section h2 {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .contact-section p {
            font-size: 1.1rem;
            margin-bottom: 40px;
        }
        .form-control,
        .form-select {
            border-radius: 0.375rem;
            padding: 15px;
        }
        .form-control::placeholder {
            color: #adb5bd;
        }
        .submit-btn {
            background-color: #2c54cc;
            color: white;
            padding: 15px 30px;
            font-weight: bold;
            border: none;
            transition: background-color 0.3s ease;
        }
        .submit-btn:hover {
            background-color: #2342a2;
        }
        .required-note {
            color: red;
            font-size: 0.9rem;
            margin-top: 10px;
        }
          /* Our Customers Section */
          .customers-section {
            background-color: #2c54cc;
            color: white;
            padding: 50px 0;
            text-align: center;
        }
        .customers-section h3 {
            margin-bottom: 40px;
            font-weight: bold;
        }
        .customer-logo {
            width: 150px; /* Fixed width */
            height: 100px; /* Fixed height */
            object-fit: contain; /* Ensure the logo scales to fit the box without stretching */
            padding: 15px;
            background-color: white;
            border-radius: 10px;
            transition: transform 0.3s ease;
        }
        .customer-logo:hover {
            transform: scale(1.05);
        }
        /* Footer Section */
        .footer-section {
            background-color: #2c54cc;
            color: white;
            padding: 40px 0;
        }
        .footer-section .contact-info {
            text-align: left;
        }
        .footer-section a {
            color: white;
            text-decoration: none;
        }
        .footer-section a:hover {
            text-decoration: underline;
        }
        .footer-section .partner-logo {
            max-height: 40px;
            margin-right: 15px;
        }
        .footer-bottom {
            background-color: #2342a2;
            color: white;
            padding: 10px;
            text-align: center;
            font-size: 0.9rem;
        }
    </style>
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar h-25">
        <div class="container h-25">
            <a class="navbar-brand d-flex align-items-center " href="#">
                <img src="{{ asset('/storage/images/Group.png') }}" alt="Logo" class="me-2 h-25">
                <span class="h4 fw-bold fst-italic" style="color:#225DA1">Spad Server</span>
            </a>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="hero-content">
                        <h1 class="display-3 text-dark fw-bold">Spad Server Services</h1>
                        <!-- <p class="lead">High-performance, reliable data center solutions for your business.</p> -->
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="my-5">
        <div class="container text-center">
            <h2 class=" mb-4 fw-bold">Our Reputation</h2>
        </div>
    </section>

    <!-- Services Boxes -->
    <section class="mb-5">
        <div class="container">
            <div class="row text-center">
                <!-- Box 1: Best Services -->
                <div class="col-md-4">
                    <div class="service-box">
                        <div class="icon mb-3">
                            <i class="bi bi-headset"></i> <!-- Bootstrap Icon for headset -->
                        </div>
                        <h5 class="mb-3">Best Services</h5>
                        <p>Providing fast and expert support that improves your experience.</p>
                    </div>
                </div>

                <!-- Box 2: Stable Technology -->
                <div class="col-md-4">
                    <div class="service-box">
                        <div class="icon mb-3">
                            <i class="bi bi-stack"></i> <!-- Bootstrap Icon for stack -->
                        </div>
                        <h5 class="mb-3">Stable Technology</h5>
                        <p>Using up-to-date technologies to ensure quality and efficiency.</p>
                    </div>
                </div>

                <!-- Box 3: Dedicated Infrastructure -->
                <div class="col-md-4">
                    <div class="service-box">
                        <div class="icon mb-3">
                            <i class="bi bi-server"></i> <!-- Bootstrap Icon for server -->
                        </div>
                        <h5 class="mb-3">Dedicated Infrastructure</h5>
                        <p>Powerful and exclusive infrastructure that provides fast and secure performance.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <!-- About Us Section -->
        <section class="about-section">
        <div class="container">
            <div class="row position-relative">
                <!-- Left: Illustration -->
                <div class="col-12 col-md-8 about-illustration">
                    <img src="{{ asset('storage/images/about-us.jpg') }}" alt="Illustration">
                    <!-- Replace 'illustration.png' with your actual illustration image path -->
                </div>

                <!-- Right: About Us Content -->
                <div class="col-12 col-md-4">
                    <div class="about-content">
                        <h3>About us</h3>
                        <p>
                            Spad Server Company was established with the aim of providing quality web hosting and cloud servers.
                            We provide safe and stable services to various businesses using advanced infrastructure and modern technologies.
                        </p>
                        <p>
                            Our expert team helps clients grow and succeed by providing professional support and innovative solutions. 
                            With a focus on customer satisfaction, Spad Server offers a reliable and efficient web hosting experience.
                        </p>
                        <a href="#" class="btn btn-custom">More on Our History</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <!-- Services Section -->
     <section class="services-section">
        <div class="container text-center">
            <!-- Section Header -->
            <h2 class="services-header">Services</h2>

            <!-- Services Cards -->
            <div class="row g-4">
                <!-- Card 1: White Background -->
                <div class="col-md-4">
                    <div class="service-card service-card-white">
                        <img src="{{asset('/storage/images/cloud-service.png')}}" alt="Icon"   class="img-center">
                        <h5>Iranian and European cloud servers</h5>
                    </div>
                </div>

                <!-- Card 2: Blue Background -->
                <div class="col-md-4">
                    <div class="service-card service-card-blue">
                        <img src="{{asset('/storage/images/database-management.png')}}" alt="Icon"  class="img-center">
                        <h5>Technical support and DevOps</h5>
                    </div>
                </div>

                <!-- Card 3: White Background -->
                <div class="col-md-4">
                    <div class="service-card service-card-white">
                        <img src="{{asset('/storage/images/security-pin.png')}}" alt="Icon"  class="img-center">
                        <h5>Infrastructure security consulting</h5>
                    </div>
                </div>

                <!-- Card 4: Blue Background -->
                <div class="col-md-4">
                    <div class="service-card service-card-blue">
                        <img src="{{asset('/storage/images/cloud-computing.png')}}" alt="Icon"  class="img-center">
                        <h5>Website and platform design</h5>
                    </div>
                </div>

                <!-- Card 5: White Background -->
                <div class="col-md-4">
                    <div class="service-card service-card-white">
                        <img src="{{asset('/storage/images/data-server (1).png')}}" alt="Icon"  class="img-center">
                        <h5>Iran static IP service</h5>
                    </div>
                </div>

                <!-- Card 6: Blue Background -->
                <div class="col-md-4">
                    <div class="service-card service-card-blue">
                        <img src="{{asset('/storage/images/data-analysis.png')}}" alt="Icon"  class="img-center">
                        <h5>Support and launch educational platforms</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-section">
        <div class="container">
            <div class="row position-relative">
                <!-- Left: Illustration -->
                <div class="col-12 col-md-8  d-flex justify-content-center mb-5">
                    <img src="{{ asset('storage/images/rate.png') }}" alt="Illustration" class="w-75 ">
                    <!-- Replace 'illustration.png' with your actual illustration image path -->
                </div>

                <!-- Right: About Us Content -->
                <div class="col-12 col-md-4">
                    <div class="">
                        <h2 class="display-3 fw-bold" style="color:#225DA1">16 Years Experience</h3>
                        
                        <p class="my-5 fs-6">
                        Our company has been a leader in providing hosting services to customers all over Iran since 2008.                        </p>
                        <a href="#" class="btn-contact text-decoration-none mt-5">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Website Design Section -->
    <section class="website-design-section">
        <!-- Background image -->
        <img src="{{asset('/storage/images/web.jpg')}}" alt="Website Design Background">

        <!-- Overlay Content -->
        <div class="container position-relative d-flex justify-content-between">
            <h2>Website design for you</h2>
            <a href="#" class="btn btn-custom">Get started now</a>
        </div>
    </section>

     <!-- Projects Section -->
     <section class="projects-section">
        <div class="container">
            <div class="row">
                <!-- Left Sidebar (Categories) -->
                <div class="col-md-3">
                    <h2 class="projects-header">Projects</h2>
                    <ul class="projects-sidebar">
                        <li><a href="#" class="active">All</a></li>
                        <li><a href="#">E-commerce Website</a></li>
                        <li><a href="#">Corporate Website</a></li>
                        <li><a href="#">Service Website</a></li>
                        <li><a href="#">Educational Website</a></li>
                    </ul>
                </div>

                <!-- Right Side (Project Cards) -->
                <div class="col-md-9">
                    <div class="row g-4">
                        <!-- Project Card 1 -->
                        <div class="col-md-6">
                            <div class="project-card">
                                <img src="{{asset('/storage/images/project1.png')}}" alt="Project Image">
                                <div class="project-title">Educational website</div>
                            </div>
                        </div>

                        <!-- Project Card 2 -->
                        <div class="col-md-6">
                            <div class="project-card">
                                <img src="{{asset('/storage/images/project2.png')}}" alt="Project Image">
                                <div class="project-title">E-commerce Website</div>
                            </div>
                        </div>

                        <!-- Project Card 3 -->
                        <div class="col-md-6">
                            <div class="project-card">
                                <img src="{{asset('/storage/images/project3.jpg')}}" alt="Project Image">
                                <div class="project-title">Service website</div>
                            </div>
                        </div>

                        <!-- Project Card 4 -->
                        <div class="col-md-6">
                            <div class="project-card">
                                <img src="{{asset('/storage/images/project4.png')}}" alt="Project Image">
                                <div class="project-title">Corporate website</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>  

    <section class="contact-section text-center">
        <div class="container">
            <h2>What can we do for you?</h2>
            <p>We are ready to work on a project of any complexity.</p>

            <!-- Contact Form -->
            <form action="#" method="POST">
                <div class="row g-3">
                    <!-- Name Field -->
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Your Name*" required>
                    </div>
                    <!-- Email Field -->
                    <div class="col-md-6">
                        <input type="email" class="form-control" placeholder="Email*" required>
                    </div>
                </div>

                <div class="row g-3 mt-3">
                    <!-- Reason for Contacting -->
                    <div class="col-md-6">
                        <select class="form-select" required>
                            <option value="" disabled selected>Reason for Contacting*</option>
                            <option value="support">Support</option>
                            <option value="inquiry">General Inquiry</option>
                            <option value="project">Start a New Project</option>
                        </select>
                    </div>
                    <!-- Phone Field -->
                    <div class="col-md-6">
                        <input type="tel" class="form-control" placeholder="Phone" required>
                    </div>
                </div>

                <div class="row mt-3">
                    <!-- Message Field -->
                    <div class="col-12">
                        <textarea class="form-control" rows="5" placeholder="Message" required></textarea>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="row mt-4">
                    <div class="col-12">
                        <button type="submit" class="submit-btn">Submit</button>
                    </div>
                </div>

                <!-- Required Note -->
                <p class="required-note mt-3">* indicates a required field</p>
            </form>
        </div>
    </section>


     <!-- Our Customers Section -->
     <section class="customers-section">
        <div class="container">

            <div class="row g-4">
                <!-- Customer Logos -->
                <div class="col-md-2 col-6">
                <h3 class="customer-logo text-dark text-left w-100">Our customers</h3>
                </div>
                <div class="col-md-2 col-6">
                    <img src="{{asset('/storage/images/ACECR_logo.png')}}" class="img-fluid customer-logo" alt="Customer 1">
                </div>
                <div class="col-md-2 col-6">
                    <img src="{{asset('/storage/images/logo_164-1.png')}}" class="img-fluid customer-logo" alt="Customer 2">
                </div>
                <div class="col-md-2 col-6">
                    <img src="{{asset('/storage/images/سازمان-تنظیم-مقررات-ساترا-صداسیما-لوگو 1.png')}}" class="img-fluid customer-logo" alt="Customer 3">
                </div>
                <div class="col-md-2 col-6">
                    <img src="{{asset('/storage/images/logo (1).png')}}" class="img-fluid customer-logo" alt="Customer 4">
                </div>

                <div class="col-md-2 col-6">
                    <img src="{{asset('/storage/images/bazarmaj.webp')}}" class="img-fluid customer-logo" alt="Customer 6">
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="footer">
        <div class="container">
            <div class="row   h-100 text-dark pt-5 ">
                <!-- Contact Info -->
                <div class="col-md-4 contact-info ">
                    <p><strong>Phone:</strong> +98 996 614 6640</p>
                    <p><strong>Email:</strong> <a href="mailto:info@spadserver.com" class="text-dark">info@spadserver.com</a></p>
                    <p><strong>Social:</strong></p>
                    <a href="#"><i class="bi bi-instagram text-dark fs-3"></i></a>
                    <a href="#"><i class="bi bi-linkedin text-dark fs-3"></i></a>
                    <a href="#"><i class="bi bi-whatsapp text-dark fs-3"></i></a>
                </div>

                <!-- Partner Logos -->
                <div class="col-md-8">
                    <p><strong>Partner Companies:</strong></p>
                     <!-- First Row -->
    <div class="row">
        <div class="col-md-4 col-6">
            <img src="{{asset('/storage/images/لوگو 1.png')}}" class="partner-logo" alt="Partner 1">
        </div>
        <div class="col-md-4 col-6">
            <img src="{{asset('/storage/images/logo_cowork_new 1.png')}}" class="partner-logo" alt="Partner 2">
        </div>
        <div class="col-md-4 col-6">
            <img src="{{asset('/storage/images/mammut_2-75x70-1.png')}}" class="partner-logo" alt="Partner 3">
        </div>
    </div>

    <!-- Second Row -->
    <div class="row mt-3">
        <div class="col-md-4 col-6">
            <img src="{{asset('/storage/images/logo.svg')}}" class="partner-logo" alt="Partner 4">
        </div>
        <div class="col-md-4 col-6">
            <img src="{{asset('/storage/images/headerLogo-1.png')}}" class="partner-logo" alt="Partner 5">
        </div>
        <div class="col-md-4 col-6">
            <img src="{{asset('/storage/images/headerLogo-1.png')}}" class="partner-logo" alt="Partner 6">
        </div>
    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>Spad Cloud Company © 2022. All Rights Reserved.</p>
        </div>
    </footer>


    <!-- Footer (Optional) -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

</body>
</html>
