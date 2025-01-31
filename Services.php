<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Jofawebdev - Website Development | IT Consulting | Digital Marketing</title>
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

        <!-- First Container -->
        <div class="container mt-3">
            <p class="lead">At JOFAWEBDEV, we are experts at helping businesses prosper. People, technology, and processes must work together well in many organizations to succeed. Talk to us about how we can help your businesses grow. Let us assist you in developing and implementing a plan that leverages technology and the power of the internet. How can a contemporary firm distinguish itself in a world of fierce competition? By using technology to provide a fantastic client experience.</p>
        </div>


        <!-- Begin Services Section -->
        <div class="container my-2 py-4 text-center">
            <h2 class="text-primary"><b>OUR SERVICES</b></h2>
            <h4>Key Features Of Our Company</h4>
            
            <!-- Begin First Row -->
            <div class="row d-flex align-items-stretch">
                <div class="col-sm-12 col-md-6 col-lg-4 p-3 d-flex">
                    <div class="card flex-fill">
                        <img class="card-img-top img-fluid" src="images/web-design-development-blog.jpg" alt="">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title"><b>Custom Website Development</b></h5>
                            <p class="card-text text-start">Our software engineers have a wealth of experience in building web applications. There are two major aspects of web design that we take into consideration when reinventing your business: user experience and branding. The colors, layout, and other web design elements serve as a carefully crafted experience to help client's have confidence in you and pick up the phone.</p>
                            <a href="custom website development" class="btn btn-danger rounded-pill mt-auto">Read More</a>
                        </div>
                    </div>
                </div>


                <div class="col-sm-12 col-md-6 col-lg-4 p-3 d-flex">
                    <div class="card flex-fill">
                        <img class="card-img-top img-fluid" src="images/web-design-development-blog.jpg" alt="">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title"><b>E-commerce Website Development</b></h5>
                            <p class="card-text text-start">All our eCommerce clients have benefitted from our edge-cutting technology in eCommerce websites. We have ensured that their websites have been optimized on mobile devices and multiple browsers, streamlined the checkout process for increased conversions and incorporated product reviews, ratings and recommendations and continued website maintenance.</p>
                            <a href="ecommerce development" class="btn btn-danger rounded-pill mt-auto">Read More</a>
                        </div>
                    </div>
                </div>


                <div class="col-sm-12 col-md-6 col-lg-4 p-3 d-flex">
                    <div class="card flex-fill">
                        <img class="card-img-top img-fluid" src="images/web-design-development-blog.jpg" alt="">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title"><b>Digital Growth | Marketing Services</b></h5>
                            <p class="card-text text-start">Our Digital Marketing service offers comprehensive internet marketing solutions for companies and brands of all sizes. Social media is such an important part of many people's lives that it makes sense to be in their feeds. We have a team of digital marketing experts devoted throughout their careers to finding innovative and creative ways of increasing Brand Awareness.</p>
                            <a href="digital marketing" class="btn btn-danger rounded-pill mt-auto">Read More</a>
                        </div>
                    </div>
                </div>

            </div>
            <!-- End First Row -->

            <!-- Begin Second Row -->
            <div class="row d-flex align-items-stretch">
                <div class="col-sm-12 col-md-6 col-lg-4 p-3 d-flex">
                    <div class="card flex-fill">
                        <img class="card-img-top img-fluid" src="images/web-design-development-blog.jpg" alt="">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title"><b>Search Engine Optimization</b></h5>
                            <p class="card-text text-start">Our agency offers comprehensive local SEO services to help businesses boost their visibility and rankings in local organic search results. Search engine optimization (SEO) is the process of optimizing a website to rank higher in search engine results (SERPS) and increase organic traffic. Recent studies have proved that internet users only click on the results that appear on the first page, hence its crucial that your business is optimized for search engines to benefit from this traffic.</p>
                            <a href="search engine optimization" class="btn btn-danger rounded-pill mt-auto">Read More</a>
                        </div>
                    </div>
                </div>


                <div class="col-sm-12 col-md-6 col-lg-4 p-3 d-flex">
                    <div class="card flex-fill">
                        <img class="card-img-top img-fluid" src="images/web-design-development-blog.jpg" alt="">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title"><b>WordPress Development</b></h5>
                            <p class="card-text text-start">We develop e-Commerce websites on wordpress platform. We believe wordpress is the best place for security, flexibility, added functionality through plugins. Our wordpress developers have a vast experience in custom wordpress development and integration. Our experts will help you customize your shop to suit your desires and customers' needs. We also have premium eCommerce themes that you can choose from in case you want a web design from a template.</p>
                            <a href="wordpress development" class="btn btn-danger rounded-pill mt-auto">Read More</a>
                        </div>
                    </div>
                </div>


                <div class="col-sm-12 col-md-6 col-lg-4 p-3 d-flex">
                    <div class="card flex-fill">
                        <img class="card-img-top img-fluid" src="images/web-design-development-blog.jpg" alt="">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title"><b>UI & UX Design</b></h5>
                            <p class="card-text text-start">Is your website or app causing frustration for users? Are you struggling to retain visitors or customers due to a confusing or clunky interface? Our UX researchers have specialized in transforming digital product or service experiences into user-friendly ones. Our expert designers and developers are here to work with you through consultation and comprehensive market research, understand your users' needs and create a customized solution that meets your business goals.</p>
                            <a href="ui & ux design" class="btn btn-danger rounded-pill mt-auto">Read More</a>
                        </div>
                    </div>
                </div>

            </div>
            <!-- End Second Row -->
        </div>
        <!-- End Services -->


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