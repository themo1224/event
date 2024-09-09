<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Center Services</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>

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
            <a class="navbar-brand d-flex align-items-center " href="{{route('home')}}">
                <img src="{{ asset('/storage/images/Group.png') }}" alt="Logo" class="me-2 h-25">
                <span class="h4 fw-bold fst-italic" style="color:#225DA1">Spad Server</span>
            </a>
        </div>
    </nav>
@yield('content')
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
