<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Jofawebdev - Website Development | IT Consulting | Digital Marketing</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/Services.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    
    <body>
        <!-- Begin Top navbar -->
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top">
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
                            <a class="nav-link dropdown-toggle active text-primary" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Services</a>
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
                            <a class="nav-link text-white" href="Portfolio">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="Blog">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="Contact">Contact</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="text" placeholder="Search">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </form>
                </div>
            </div>
        </nav>
        <!-- End Navigation Bar-->

        <!-- Header Section -->
        <header class="position-relative w-100" id="home">
            <!-- Full-width responsive image as a background -->
            <img src="images/innerpage-banner.png" alt="Services Banner" class="img-fluid w-100">

            <!-- Overlay Content Container -->
            <div class="position-absolute top-50 start-50 translate-middle text-center text-white">
                <!-- Heading with Icon -->
                <h1 class="fs-6 d-flex align-items-center justify-content-center">
                    <span class="px-3 bg-dark bg-opacity-45 fw-bold p-2">SERVICES</span>
                </h1>
            </div>
        </header>

        
        <!-- Hero Statement -->
        <div class="container py-4">
            <div class="text-center">
                <span class="fw-bold">Digital Transformation Experts</span>
                <p class="lead fs-3 text-dark-emphasis">JOFAWEBDEV redefines digital excellence through <span class="text-primary">strategic innovation</span></p>
                <p class="fw-light">We fuse cutting-edge technology with human-centric design to create digital experiences that convert, engage, and scale.</p>
            </div>
        </div>


        <!-- Services Section -->
        <section class="container py-4 py-lg-4">
            <div class="text-center mb-4">
                <h2 class="display-5 fw-bold text-primary mb-3">Elevate Your Digital Presence</h2>
                <p class="fs-4 text-muted">Next-generation solutions for modern businesses</p>
            </div>

            <div class="row g-4">
                <!-- Custom Web Development -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card h-100 shadow border-0">
                        <div class="card-body p-4">
                            <div class="icon-wrapper bg-primary bg-opacity-10 rounded-circle p-3 mb-4 mx-auto" style="width: fit-content;">
                                <i class="bi bi-code-square fs-1 text-primary"></i>
                            </div>
                            <h3 class="h5 fw-bold mb-3">Custom Website Development</h3>
                            <p class="text-secondary">We build performance-driven websites that combine stunning aesthetics with conversion-optimized functionality. Our full-stack development approach ensures seamless user journeys, light-speed loading, and future-ready scalability.</p>
                            <a href="Web Design & Development" class="btn btn-danger rounded-pill px-4 mt-2">Explore Solutions <i class="bi bi-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>

                <!-- E-commerce Development -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card h-100 shadow border-0">
                        <div class="card-body p-4">
                            <div class="icon-wrapper bg-success bg-opacity-10 rounded-circle p-3 mb-4 mx-auto" style="width: fit-content;">
                                <i class="bi bi-cart3 fs-1 text-success"></i>
                            </div>
                            <h3 class="h5 fw-bold mb-3">E-commerce Development</h3>
                            <p class="text-secondary">Convert browsers into buyers with intelligent storefronts featuring AI-powered recommendations, one-click checkout, and multi-channel integration. Our platforms average 35% higher conversion rates than industry standards.</p>
                            <a href="E-commerce Website Development" class="btn btn-danger rounded-pill px-4 mt-2">Boost Sales <i class="bi bi-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Digital Marketing -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card h-100 shadow border-0">
                        <div class="card-body p-4">
                            <div class="icon-wrapper bg-info bg-opacity-10 rounded-circle p-3 mb-4 mx-auto" style="width: fit-content;">
                                <i class="bi bi-bar-chart-line fs-1 text-info"></i>
                            </div>
                            <h3 class="h5 fw-bold mb-3">Digital Growth Marketing</h3>
                            <p class="text-secondary">Our ROI-focused strategies combine SEO precision with social media mastery and conversion rate optimization. We've generated over $50M in client revenue through targeted digital campaigns.</p>
                            <a href="Digital Marketing" class="btn btn-danger rounded-pill px-4 mt-2">Grow Traffic <i class="bi bi-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>

                <!-- SEO -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card h-100 shadow border-0">
                        <div class="card-body p-4">
                            <div class="icon-wrapper bg-warning bg-opacity-10 rounded-circle p-3 mb-4 mx-auto" style="width: fit-content;">
                                <i class="bi bi-search fs-1 text-warning"></i>
                            </div>
                            <h3 class="h5 fw-bold mb-3">Search Engine Optimization</h3>
                            <p class="text-secondary">Dominate search rankings with our technical SEO audits and content strategies that boost organic traffic by 200%+ on average. Our holistic approach targets both local visibility and national market penetration.</p>
                            <a href="Search Engine Optimization" class="btn btn-danger rounded-pill px-4 mt-2">Rank Higher <i class="bi bi-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>

                <!-- WordPress -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card h-100 shadow border-0">
                        <div class="card-body p-4">
                            <div class="icon-wrapper bg-danger bg-opacity-10 rounded-circle p-3 mb-4 mx-auto" style="width: fit-content;">
                                <i class="bi bi-wordpress fs-1 text-danger"></i>
                            </div>
                            <h3 class="h5 fw-bold mb-3">WordPress Development</h3>
                            <p class="text-secondary">Leverage the world's most popular CMS with enterprise-grade security and custom functionality. Our optimized WordPress solutions load 60% faster than typical implementations while maintaining complete design flexibility.</p>
                            <a href="WordPress Development" class="btn btn-danger rounded-pill px-4 mt-2">Customize CMS <i class="bi bi-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>

                <!-- UI/UX -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card h-100 shadow border-0">
                        <div class="card-body p-4">
                            <div class="icon-wrapper bg-purple bg-opacity-10 rounded-circle p-3 mb-4 mx-auto" style="width: fit-content;">
                                <i class="bi bi-magic fs-1 text-purple"></i>
                            </div>
                            <h3 class="h5 fw-bold mb-3">UI/UX Design</h3>
                            <p class="text-secondary">Through user testing and behavioral analysis, we create interfaces that increase engagement by 45% on average. Our human-centered designs remove friction while strengthening brand identity across all touchpoints.</p>
                            <a href="UI & UX Design" class="btn btn-danger rounded-pill px-4 mt-2">Enhance UX <i class="bi bi-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr>


        <!-- Begin Pagination -->
        <div class="container my-2 py-3">
            <ul class="pagination justify-content-center">
                <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                <li class="page-item"><a class="page-link" href="index">1</a></li>
                <li class="page-item"><a class="page-link" href="About">2</a></li>
                <li class="page-item active"><a class="page-link" href="Services">3</a></li>
                <li class="page-item"><a class="page-link" href="Portfolio">4</a></li>
                <li class="page-item"><a class="page-link" href="Blog">5</a></li>
                <li class="page-item"><a class="page-link" href="Contact">6</a></li>
                <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
            </ul>
        </div>
        <!-- End Pagination -->


        <!-- Begin Footer -->
        <footer class="container-fluid bg-dark text-white py-4 my-2">
            <div class="container my-4">
                <div class="row">

                    <!-- Footer Social -->
                    <div class="col-sm p-3">
                        <h6 class="text-primary"><b>FOLLOW US</b></h6>
                        <p>You Can Follow Us On:</p>
                        <a href="https://www.github.com/jofawebdev/" target="_blank"><i class="fab fa-github-alt text-white fa-xl me-1"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-instagram text-white fa-xl me-1"></i></a>
                        <a href="https://www.pinterest.com/jofawebdev" target="_blank"><i class="fab fa-pinterest text-white fa-xl me-1"></i></a>
                        <a href="https://www.linkedin.com/in/geoffrey-mbungi-86a6411ba/" target="_blank"><i class="fab fa-linkedin text-white fa-xl me-1"></i></a>
                    </div>

                    <!-- Footer Contact -->
                    <div class="col-sm p-3">
                        <h6 class="text-primary"><b>GET IN TOUCH</b></h6>
                        <p><a href="#" target="_blank" class="text-decoration-none text-white"><i class="fas fa-headset fa-lg me-1"></i> QUESTIONS</a></p>
                        <p><i class="fas fa-envelope fa-lg me-1"></i>info@jofawebdev.co.ke</p>
                        <p><i class="fas fa-phone-square-alt fa-lg me-1"></i>+254-793-004-632</p>
                        <p><a href="#" target="_blank" class="text-decoration-none text-white"><i class="fas fa-map-marked-alt fa-lg me-1"></i> Utawala, NAIROBI</a></p>
                        <p><i class="fas fa-business-time fa-lg me-1"></i>Monday - Saturday</p>
                    </div>
                    
                    <!-- Footer Quick Links -->
                    <div class="col-sm p-3">
                        <h6 class="text-primary"><b>QUICK LINKS</b></h6>
                        <p><a href="index" class="text-decoration-none text-white">Home</a></p>
                        <p><a href="About" class="text-decoration-none text-white">About Us</a></p>
                        <p><a href="Services" class="text-decoration-none text-white">Services</a></p>
                        <p><a href="Portfolio" class="text-decoration-none text-white">Portfolio</a></p>
                        <p><a href="Contact" class="text-decoration-none text-white">Contact</a></p>
                        <p><a href="Blog" class="text-decoration-none text-white">Blog</a></p>
                    </div>
                    
                    <!-- Footer Services -->
                    <div class="col-sm p-3">
                        <h6 class="text-primary"><b>OUR SERVICES</b></h6>
                        <p><a href="custom website development" class="text-decoration-none text-white">Web Design & Development</a></p>
                        <p><a href="ecommerce development" class="text-decoration-none text-white">E-commerce Website Development</a></p>
                        <p><a href="digital marketing" class="text-decoration-none text-white">Digital Marketing</a></p>
                        <p><a href="search engine optimization" class="text-decoration-none text-white">Search Engine Optimization</a></p>
                        <p><a href="wordpress development" class="text-decoration-none text-white">WordPress Development</a></p>
                        <p><a href="ui & ux design" class="text-decoration-none text-white">UI & UX Design</a></p>
                    </div>

                </div>

            </div>

            <!-- Scroll to Top Button -->
            <div class="d-flex justify-content-center align-items-center">
                <button id="scrollToTop" class="btn btn-primary">Scroll to Top</button>
            </div>
        </footer>

        <!-- Copyright Section -->
        <div class="container-fluid text-center p-2">
            Copyright &copy; 2019 - 2025 Jofawebdev. All Rights Reserved.
        </div>


        <!-- Scroll To Top Script -->
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