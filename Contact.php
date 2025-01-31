<!DOCTYPE html>
<html lang="en">
    <head>
        <title>About Jofawebdev - Website Development | IT Consulting | Digital Marketing</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
            <div class="text-center mb-3">
                <h2 class="display-5 fw-bold mb-4">
                    <span class="text-primary">GET IN</span> TOUCH
                </h2>
            </div>

            <div class="row g-4">
                <div class="col-md-6 mt-3">
                    <div class="pe-lg-4">
                        <p class="lead mb-4">Because every business is unique, we provide specialized website development and digital marketing services to meet your requirements. Identifying new ideas and better solutions to business problems excites and drives us.</p>
                        <p class="mb-4">Whether you need website design & development, website redesign, brand marketing, digital marketing, or business marketing services, we'd love to hear from you.</p>
                        <p class="mb-0">We love working with businesses who are forward-thinkers and desire to stretch the bounds of mediocrity. If that's you, let's talk about how together we can elevate your business through innovation and creativity.</p>
                    </div>
                </div>


                <div class="col-md-6 mt-3">
                    <div class="contact-form bg-light p-4 rounded-3">
                        <h3 class="text-danger fw-bold mb-4">Questions? Go Ahead</h3>

                        <form action="" method="post">
                            <div class="mb-3">
                                <input type="text" class="form-control form-control-lg" name="name" placeholder="Name" required>
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control form-control-lg" name="email" placeholder="Email" required>
                            </div>
                            <div class="mb-4">
                                <textarea class="form-control form-control-lg" name="message" placeholder="Message" rows="4" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg w-100" name="submit">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <hr>


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