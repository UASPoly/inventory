<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Rental Management System</title>
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }

    .navbar {
      background-color: white;
      border-bottom: 4px solid #007bff;
    }

    .navbar-brand {
      color: #fff;
      font-size: 24px;
    }

    .welcome-container {
      text-align: center;
      padding: 100px 20px;
    }

    h1 {
      color: #007bff;
    }

    p {
      font-size: 18px;
      margin-top: 20px;
      color: #495057;
    }

    ul li a{
        color: #007bff;
    }

    .hero-section {
      background-color: #ffffff;
      padding: 80px 20px;
      text-align: center;
      
    }

    .services-section {
      background-color: #f8f9fa;
      padding: 80px 20px;
      text-align: center;
    }

    .testimonials-section {
      background-color: #ffffff;
      padding: 80px 20px;
      text-align: center;
    }

    .footer-section {
      background-color: #007bff;
      color: #fff;
      padding: 40px 20px;
      text-align: center;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark">
  <a class="navbar-brand" href="#"><img src="{{asset('images/logo.jpg')}}" width="80" height="80" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#" style="color: #007bff; font-weight: bold;"><i class="fa fa-dashboard"></i>Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#services" style="color: #007bff; font-weight: bold;">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#testimonials" style="color: #007bff; font-weight: bold;">Testimonials</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#footer" style="color: #007bff; font-weight: bold;">Contact</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container welcome-container">
  <h1>Welcome to the Rental Management System</h1>
  <p>Effortlessly manage your rental properties with our user-friendly platform. Sign in to get started!</p>
  <a href="{{route('login')}}" class="btn btn-primary btn-lg">Sign In</a>
</div>

<section id="services" class="services-section">
  <div class="container">
    <h2>Our Services</h2>
    <div class="row">
      <div class="col-md-4 shadow">
        <h4>Property Listing</h4>
        <p>Easily list and showcase your rental properties to a wide audience.</p>
      </div>
      <div class="col-md-4 shadow">
        <h4>Lease Management</h4>
        <p>Create, manage, and store digital lease agreements for your properties.</p>
      </div>
      <div class="col-md-4 shadow">
        <h4>Online Payments</h4>
        <p>Facilitate secure online rent payments for your tenants.</p>
      </div>
    </div>
  </div>
</section>

<section id="testimonials" class="testimonials-section">
  <div class="container">
    <h2>What People Say About Us</h2>
    <div class="row">
      <div class="col-md-4">
        <p>"The Rental Management System has made property management a breeze. Highly recommended!"</p>
        <p class="testimonial-author">- John Doe</p>
      </div>
      <div class="col-md-4">
        <p>"Efficient, user-friendly, and a great tool for both landlords and tenants."</p>
        <p class="testimonial-author">- Jane Smith</p>
      </div>
      <div class="col-md-4">
        <p>"I've been using RMS for years, and it has simplified my rental property management tasks."</p>
        <p class="testimonial-author">- Mike Johnson</p>
      </div>
    </div>
  </div>
</section>

<footer id="footer" class="footer-section">
  <div class="container">
    <p>Contact us at info@rms.com | Follow us on social media</p>
  </div>
</footer>

<!-- Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
