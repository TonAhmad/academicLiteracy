<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Academic Literacy')</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    <link rel="shortcut icon" href="{{ asset('https://academicliteracy.id/assets/img/alm_logo.png') }}">
    @yield('styles')
</head>
<body>
    <!-- Header -->
    <header class="site-header">
        <div class="container">
            <div class="row align-items-center">
                <!-- Logo -->
                <div class="col-auto">
                    <a href="/" class="navbar-brand">
                        <img src="{{ asset('https://academicliteracy.id/assets/img/alm_logo.png') }}" alt="Academic Literature" class="logo">
                    </a>
                </div>
                
                <!-- Main Navigation -->
                <div class="col">
                    <nav class="navbar navbar-expand-lg">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarMain">
                            <ul class="navbar-nav ms-auto me-3">
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Our Work</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#" class="dropdown-item">Governance</a></li>
                                        <li><a href="#" class="dropdown-item">Economic Growth</a></li>
                                        <li><a href="#" class="dropdown-item">Environmental Resilience</a></li>
                                        <li><a href="#" class="dropdown-item">Education</a></li>
                                        <li><a href="#" class="dropdown-item">Gender Equality</a></li>
                                        <li><a href="#" class="dropdown-item">International Cooperation</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">About Us</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#" class="dropdown-item">Our Leadership</a></li>
                                        <li><a href="#" class="dropdown-item">Mission & Vision</a></li>
                                        <li><a href="#" class="dropdown-item">Financial Information</a></li>
                                        <li><a href="#" class="dropdown-item">Careers</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">News and Insights</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#" class="dropdown-item">Blog</a></li>
                                        <li><a href="#" class="dropdown-item">Publications</a></li>
                                        <li><a href="#" class="dropdown-item">Events</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Get Involved</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#" class="dropdown-item">Volunteer</a></li>
                                        <li><a href="#" class="dropdown-item">Partner With Us</a></li>
                                        <li><a href="#" class="dropdown-item">Careers</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <!-- Search Icon -->
                            <div class="search-icon me-3">
                                <a href="#" class="search-toggle">
                                    <i class="bi bi-search"></i>
                                </a>
                            </div>
                            <!-- Donate Button -->
                            <div class="donate-btn">
                                <a href="#" class="btn btn-donate">Donate</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    
    <!-- Hero Section (if needed on specific pages) -->
    @hasSection('hero')
        @yield('hero')
    @else
        <div class="hero-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 hero-content">
                        <h1>@yield('hero-title', 'Academic Literacy')</h1>
                        <p class="lead">@yield('hero-subtitle', '70 years of enduring impact')</p>
                        <a href="#" class="btn btn-light">@yield('hero-button', 'Learn More')</a>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <!-- About Us Column -->
                <div class="col-md-3 mb-4">
                    <h5>About Us</h5>
                    <ul class="footer-links">
                        <li><a href="#">Our Leadership</a></li>
                        <li><a href="#">Mission, Vision, and Values</a></li>
                        <li><a href="#">Financial Information</a></li>
                        <li><a href="#">Grant Guidelines</a></li>
                        <li><a href="#">Safeguarding Commitments</a></li>
                        <li><a href="#">Careers and Opportunities</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                
                <!-- Quick Links Column -->
                <div class="col-md-3 mb-4">
                    <h5>Quick Links</h5>
                    <ul class="footer-links">
                        <li><a href="#">Where We Work</a></li>
                        <li><a href="#">Our Program Areas</a></li>
                        <li><a href="#">Events</a></li>
                        <li><a href="#">Get Involved</a></li>
                        <li><a href="#">News and Insights</a></li>
                        <li><a href="#">Donate</a></li>
                    </ul>
                </div>
                
                <!-- Connect Column -->
                <div class="col-md-6 mb-4">
                    <h5>Connect</h5>
                    <p>Stay informed. Sign up for our newsletter.</p>
                    
                    <form class="newsletter-form">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email <span class="required">(required)</span></label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    
                    <div class="social-icons mt-4">
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-twitter-x"></i></a>
                        <a href="#"><i class="bi bi-linkedin"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>
            </div>
            
            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <p>Copyright © {{ date('Y') }} Academic Literacy | <a href="#">Privacy Policy</a> | <a href="#">Accessibility Statement</a></p>
                <a href="#" class="back-to-top"><i class="bi bi-arrow-up"></i></a>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @yield('scripts')
</body>
</html>