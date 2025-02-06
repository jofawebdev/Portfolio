<!DOCTYPE html>
<html lang="en">
    <head>
        <title>About Jofawebdev - Website Development | IT Consulting | Digital Marketing</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    
    <body>
        <!-- Begin Top navbar -->
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="index"><b>Jofawebdev</b></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mynavbar">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="index">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="About">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Services</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="custom website development">Web Design & Development</a></li>
                                <li><a class="dropdown-item" href="ecommerce development">E-commerce Development</a></li>
                                <li><a class="dropdown-item" href="digital marketing">Digital Marketing</a></li>
                                <li><a class="dropdown-item" href="search engine optimization">Search Engine Optimization</a></li>
                                <li><a class="dropdown-item" href="wordpress development">WordPress Development</a></li>
                                <li><a class="dropdown-item" href="ui & ux design">UI & UX Design</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-primary" href="Portfolio">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="Blog">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="Contact">Contact</a>
                        </li>
                    </ul>
                    
                    <!-- New Right-aligned elements -->
                    <div class="d-flex align-items-center gap-3 ms-md-3">
                        <!-- Social Icons -->
                        <div class="d-flex gap-3">
                            <a href="https://www.github.com/jofawebdev/" class="text-white text-decoration-none" target="_blank">
                                <i class="fab fa-github fa-lg"></i>
                            </a>
                            <a href="https://www.linkedin.com/in/geoffrey-mbungi-86a6411ba/" class="text-white text-decoration-none" target="_blank">
                                <i class="fab fa-linkedin fa-lg"></i>
                            </a>
                        </div>
                        
                        <!-- CTA Button -->
                        <a href="Contact" class="btn btn-primary btn-sm rounded-pill px-3">
                            Get Started <i class="fas fa-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- End Navigation Bar-->

        <!-- Header Section -->
        <header class="position-relative w-100" id="home">
            <!-- Full-width responsive image as a background -->
            <img src="images/web-design-top-banner.jpg" alt="About us Banner" class="img-fluid w-100">

            <!-- Overlay Content Container -->
            <div class="position-absolute top-50 start-50 translate-middle text-center text-white">
                <!-- Heading with Icon -->
                <h1 class="fs-6 d-flex align-items-center justify-content-center">
                    <i class="fa fa-question-circle text-dark opacity-40 me-2"></i>
                    <span class="px-3 bg-dark bg-opacity-45 fw-bold p-2">CASE STUDY</span>
                </h1>
            </div>
        </header>


        <!-- Success Stories -->
        <div class="container-fluid py-5 bg-gradient-light text-dark">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="display-5 fw-bold mb-3">Transforming Digital Presence</h2>
                    <p class="lead text-muted">Explore our success stories where we amplified brand visibility and accelerated business growth</p>
                </div>

                <div class="row g-5 align-items-center">
                    <!-- Image Section -->
                    <div class="col-lg-6">
                        <div class="position-relative rounded-4 overflow-hidden shadow-lg">
                            <img src="images/UX-UI-Design.jpg" class="img-fluid" alt="Digital transformation process" loading="lazy">
                            <div class="position-absolute bottom-0 start-0 p-4 bg-dark bg-opacity-75 text-white">
                                <h3 class="h5 mb-0">From Concept to Conversion</h3>
                            </div>
                        </div>
                    </div>

                    <!-- Strategy Breakdown -->
                    <div class="col-lg-6">
                        <div class="d-flex flex-column gap-4">
                            <div class="d-flex align-items-start gap-3">
                                <i class="bi bi-bar-chart-line fs-3 text-primary"></i>
                                <div>
                                    <h3 class="h5 mb-2">Measurable Results</h3>
                                    <p class="mb-0">Each case study reveals key performance indicators, demonstrating tangible business impact through digital innovation.</p>
                                </div>
                            </div>

                            <div class="d-flex align-items-start gap-3">
                                <i class="bi bi-lightbulb fs-3 text-warning"></i>
                                <div>
                                    <h3 class="h5 mb-2">Strategic Insights</h3>
                                    <p class="mb-0">Discover how we combine cutting-edge technology with market intelligence to create competitive advantages.</p>
                                </div>
                            </div>

                            <a href="Portfolio" class="btn btn-outline-dark btn-lg mt-3 align-self-start">
                                View Case Studies <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>


        <!-- Portfolio Showcase -->
        <div class="container py-5" id="projects">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">Digital Innovation Portfolio</h2>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <p class="text-muted">Websites engineered for performance, aesthetics, and user engagement</p>
                        <hr class="mx-auto bg-primary opacity-75" style="width: 100px; height: 2px">
                    </div>
                </div>
            </div>

            <div class="row g-4">
                <!-- Project 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-hover">
                        <div class="position-relative overflow-hidden rounded-top">
                            <img src="images/Screenshot (1).png" class="card-img-top" alt="Sinepower Electrics Platform" loading="lazy">
                            <span class="badge bg-dark position-absolute top-0 end-0 m-3">Industrial Solutions</span>
                        </div>
                        <div class="card-body">
                            <h3 class="h5 card-title">Sinepower Electrics</h3>
                            <p class="card-text text-muted small">Enterprise-grade electrical solutions platform</p>
                            <a href="https://www.sinepowerelectrics.com" target="_blank" class="stretched-link" aria-label="Visit Sinepower Electrics website"></a>
                        </div>
                        <div class="card-footer bg-transparent border-0">
                            <div class="d-flex gap-2">
                                <span class="badge rounded-pill bg-light text-dark border">Web Design</span>
                                <span class="badge rounded-pill bg-light text-dark border">E-Commerce</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-hover">
                        <div class="position-relative overflow-hidden rounded-top">
                            <img src="images/Screenshot (2).png" class="card-img-top" alt="NIA Creation Platform" loading="lazy">
                            <span class="badge bg-dark position-absolute top-0 end-0 m-3">Fashion Tech</span>
                        </div>
                        <div class="card-body">
                            <h3 class="h5 card-title">NIA Creation Ltd</h3>
                            <p class="card-text text-muted small">Boutique fashion e-commerce experience</p>
                            <a href="https://www.niacreation.com/" target="_blank" class="stretched-link" aria-label="Visit NIA Creation website"></a>
                        </div>
                        <div class="card-footer bg-transparent border-0">
                            <div class="d-flex gap-2">
                                <span class="badge rounded-pill bg-light text-dark border">UI/UX</span>
                                <span class="badge rounded-pill bg-light text-dark border">CMS Integration</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-hover">
                        <div class="position-relative overflow-hidden rounded-top">
                            <img src="images/Screenshot (3).png" class="card-img-top" alt="NILA Baby Shop Platform" loading="lazy">
                            <span class="badge bg-dark position-absolute top-0 end-0 m-3">Parenting Tech</span>
                        </div>
                        <div class="card-body">
                            <h3 class="h5 card-title">Nila Baby Shop</h3>
                            <p class="card-text text-muted small">Next-gen parenting retail ecosystem</p>
                            <a href="https://www.nilababyshop.com/" target="_blank" class="stretched-link" aria-label="Visit NILA Baby Shop website"></a>
                        </div>
                        <div class="card-footer bg-transparent border-0">
                            <div class="d-flex gap-2">
                                <span class="badge rounded-pill bg-light text-dark border">Mobile First</span>
                                <span class="badge rounded-pill bg-light text-dark border">SEO Optimized</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5">
                <a href="Contact" class="btn btn-primary px-4 py-2">
                    Start Your Project <i class="bi bi-lightning-charge"></i>
                </a>
            </div>
        </div>
        <hr>


        <!-- Begin Pagination -->
        <div class="container py-3">
            <ul class="pagination justify-content-center">
                <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                <li class="page-item"><a class="page-link" href="index">1</a></li>
                <li class="page-item"><a class="page-link" href="About">2</a></li>
                <li class="page-item"><a class="page-link" href="Services">3</a></li>
                <li class="page-item active"><a class="page-link" href="Portfolio">4</a></li>
                <li class="page-item"><a class="page-link" href="Blog">5</a></li>
                <li class="page-item"><a class="page-link" href="Contact">6</a></li>
                <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
            </ul>
        </div>
        <!-- End Pagination -->



        <!-- Begin Footer -->
        <footer class="container-fluid bg-dark text-white py-5">
            <div class="container">
                <div class="row g-4">

                    <!-- Footer Social -->
                    <div class="col-md-6 col-lg-3">
                        <div class="h-100 p-3">
                            <h5 class="text-primary mb-4">FOLLOW US</h5>
                            <p class="text-secondary">Connect with us on social media:</p>
                            <div class="d-flex gap-3">
                                <a href="https://www.github.com/jofawebdev/" target="_blank" class="text-decoration-none" aria-label="GitHub">
                                    <i class="bi bi-github text-white fs-3"></i>
                                </a>
                                <a href="https://www.linkedin.com/in/geoffrey-mbungi-86a6411ba/" target="_blank" class="text-decoration-none" aria-label="LinkedIn">
                                    <i class="bi bi-linkedin text-white fs-3"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Footer Contact -->
                    <div class="col-md-6 col-lg-3">
                        <div class="h-100 p-3">
                            <h5 class="text-primary mb-4">CONTACT</h5>
                            <ul class="list-unstyled text-secondary">
                                <li class="mb-3">
                                    <a href="Contact" class="text-white text-decoration-none">
                                        <i class="bi bi-headset me-2"></i>Support Questions
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <i class="bi bi-envelope me-2"></i>info@jofawebdev.co.ke
                                </li>
                                <li class="mb-3">
                                    <i class="bi bi-telephone me-2"></i>+254-793-004-632
                                </li>
                                <li class="mb-3">
                                    <a href="#" class="text-white text-decoration-none">
                                        <i class="bi bi-geo-alt me-2"></i>Utawala, Nairobi
                                    </a>
                                </li>
                                <li>
                                    <i class="bi bi-clock me-2"></i>Mon-Sat: 8:00 AM - 6:00 PM
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Quick Links -->
                    <div class="col-md-6 col-lg-3">
                        <div class="h-100 p-3">
                            <h5 class="text-primary mb-4">QUICK LINKS</h5>
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <a href="index" class="text-decoration-none text-white">Home</a>
                                </li>
                                <li class="mb-2">
                                    <a href="About" class="text-decoration-none text-white">About Us</a>
                                </li>
                                <li class="mb-2">
                                    <a href="Services" class="text-decoration-none text-white">Services</a>
                                </li>
                                <li class="mb-2">
                                    <a href="Portfolio" class="text-decoration-none text-white">Portfolio</a>
                                </li>
                                <li class="mb-2">
                                    <a href="Contact" class="text-decoration-none text-white">Contact</a>
                                </li>
                                <li>
                                    <a href="Blog" class="text-decoration-none text-white">Blog</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Services -->
                    <div class="col-md-6 col-lg-3">
                        <div class="h-100 p-3">
                            <h5 class="text-primary mb-4">SERVICES</h5>
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <a href="custom website development" class="text-decoration-none text-white">
                                        Web Design & Development
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="ecommerce development" class="text-decoration-none text-white">
                                        E-commerce Solutions
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="digital marketing" class="text-decoration-none text-white">
                                        Digital Marketing
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="search engine optimization" class="text-decoration-none text-white">
                                        SEO Services
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="wordpress development" class="text-decoration-none text-white">
                                        WordPress Development
                                    </a>
                                </li>
                                <li>
                                    <a href="ui & ux design" class="text-decoration-none text-white">
                                        UI/UX Design
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Copyright & Scroll Top -->
            <div class="border-top border-secondary mt-2">
                <div class="container py-4">
                    <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
                        <div class="text-secondary mb-3 mb-md-0">
                            © 2019 - 2025 Jofawebdev. All Rights Reserved.
                        </div>
                        <button id="scrollToTop" class="btn btn-primary rounded-circle p-2" 
                                title="Back to top" aria-label="Scroll to top">
                            <i class="bi bi-arrow-up-circle-fill fs-4"></i>
                        </button>
                    </div>
                </div>
            </div>
        </footer>


        <!--- Scroll to Top Script -->
        <script>
            // Get the button
            var mybutton = document.getElementById("scrollToTop");

            // Scroll to the top when the button is clicked
            mybutton.onclick = function() {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            };
        </script>
        <!-- End Script -->


    </body>
</html>