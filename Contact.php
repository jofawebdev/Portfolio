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
                            <a class="nav-link text-white" href="Portfolio">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="Blog">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-primary" href="Contact">Contact</a>
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
            <img src="images/portfolio-banner.jpg" alt="About us Banner" class="img-fluid w-100">

            <!-- Overlay Content Container -->
            <div class="position-absolute top-50 start-50 translate-middle text-center text-white">
                <!-- Heading with Icon -->
                <h1 class="fs-6 d-flex align-items-center justify-content-center">
                    <span class="px-3 bg-dark bg-opacity-45 fw-bold p-2">CONTACT</span>
                </h1>
            </div>
        </header>


        <!-- Contact Section -->
        <section class="container py-5">
            <div class="text-center mb-5">
                <h2 class="display-4 fw-bold mb-3">
                    <span class="text-primary">Let's Create</span> 
                    <span class="text-gradient bg-gradient-to-r from-primary to-info">Something Amazing</span>
                </h2>
                <p class="text-muted">Digital Solutions for Visionary Businesses</p>
            </div>

            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="pe-xl-5">
                        <div class="d-flex align-items-start mb-4">
                            <div class="bg-primary text-white rounded-circle p-3 me-3">
                                <i class="bi bi-lightbulb fs-3"></i>
                            </div>
                            <div>
                                <h4 class="mb-3">Tailored Digital Solutions</h4>
                                <p class="text-muted">We specialize in custom web development and targeted digital strategies that grow with your business. Our passion? Transforming complex challenges into elegant solutions.</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-start mb-4">
                            <div class="bg-info text-white rounded-circle p-3 me-3">
                                <i class="bi bi-bar-chart-line fs-3"></i>
                            </div>
                            <div>
                                <h4 class="mb-3">Full-Spectrum Services</h4>
                                <ul class="list-unstyled text-muted">
                                    <li class="mb-2"><i class="bi bi-check2-circle text-success me-2"></i>Web Design & Development</li>
                                    <li class="mb-2"><i class="bi bi-check2-circle text-success me-2"></i>Digital Brand Strategy</li>
                                    <li class="mb-2"><i class="bi bi-check2-circle text-success me-2"></i>Conversion Optimization</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="contact-form bg-white p-4 p-lg-5 shadow-lg rounded-4">
                        <h3 class="mb-4">
                            <span class="text-primary">Start Your</span> 
                            <span class="text-danger">Project</span>
                            <i class="bi bi-chat-dots ms-2 text-primary"></i>
                        </h3>

                        <form class="needs-validation" novalidate>
                            <div class="mb-3 form-floating">
                                <input type="text" class="form-control border-0 border-bottom rounded-0" id="name" placeholder=" " required>
                                <label for="name" class="form-label">Your Name</label>
                            </div>
                            
                            <div class="mb-3 form-floating">
                                <input type="email" class="form-control border-0 border-bottom rounded-0" id="email" placeholder=" " required>
                                <label for="email" class="form-label">Business Email</label>
                            </div>
                            
                            <div class="mb-4 form-floating">
                                <textarea class="form-control border-0 border-bottom rounded-0" id="message" style="height: 120px" placeholder=" " required></textarea>
                                <label for="message" class="form-label">Project Details</label>
                            </div>

                            <button type="submit" class="btn btn-primary btn-lg w-100 py-3">
                                Launch Project
                                <i class="bi bi-send-arrow-up ms-2"></i>
                            </button>
                            
                            <p class="text-muted small mt-3">
                                <i class="bi bi-lock me-2"></i>
                                We respect your privacy. No spam, ever.
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <hr class="my-0">


        <!-- Begin Pagination -->
        <div class="container py-3">
            <ul class="pagination justify-content-center">
                <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                <li class="page-item"><a class="page-link" href="index">1</a></li>
                <li class="page-item"><a class="page-link" href="About">2</a></li>
                <li class="page-item"><a class="page-link" href="Services">3</a></li>
                <li class="page-item"><a class="page-link" href="Portfolio">4</a></li>
                <li class="page-item"><a class="page-link" href="Blog">5</a></li>
                <li class="page-item active"><a class="page-link" href="Contact">6</a></li>
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
                        <p><a href="Contact" target="_blank" class="text-decoration-none text-white"><i class="fas fa-headset fa-lg me-1"></i> QUESTIONS</a></p>
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