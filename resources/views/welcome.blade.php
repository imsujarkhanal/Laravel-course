<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark custom-navbar fixed-top">
    <div class="container">

        <!-- Logo on left -->
        <a class="navbar-brand d-flex align-items-center logo-group order-1" href="#home">
          <span class="logo-dot"></span>
          <span class="brand-text">Business</span>
        </a>

        <!-- Toggle Button -->
        <button class="navbar-toggler collapsed order-2 ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <!-- <span class="navbar-toggler-icon"></span> -->
        </button>

        <!-- Nav Links -->
        <div class="collapse navbar-collapse justify-content-between order-3" id="navbarContent">
          <div class="navbar-left d-flex align-items-center">
            <ul class="navbar-nav d-flex align-items-center gap-3">
              <li class="nav-item"><a class="nav-link active" href="#" data-page="home">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="#" data-page="about">About</a></li>

              <!-- Dropdown -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                  Our Services
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#" data-page="services">Services</a></li>
                  <li><a class="dropdown-item" href="#">Service 2</a></li>
                </ul>
              </li>

              <li class="nav-item"><a class="nav-link" href="#" data-page="blog">Blog</a></li>
              <li class="nav-item"><a class="nav-link" href="#" data-page="contact">Contact</a></li>
              <!-- <li class="nav-item"><a class="nav-link" href="#" data-page="404">404</a></li> -->
            </ul>
          </div>

          <!-- Social Icons -->
          <div class="social-icon d-flex">
            <a href="#" class="icon fb"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="icon tw"><i class="fab fa-twitter"></i></a>
            <a href="#" class="icon yt"><i class="fab fa-youtube"></i></a>
            <a href="#" class="icon ig"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
    </div>
</nav>
</body>
</html>