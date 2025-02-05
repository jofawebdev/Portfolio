<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Jofawebdev - Website Development | IT Consulting | Digital Marketing</title>
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
                            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Services</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="custom website development.php">Web Design & Development</a></li>
                                <li><a class="dropdown-item" href="ecommerce development">E-commerce Development</a></li>
                                <li><a class="dropdown-item" href="digital marketing">Digital Marketing</a></li>
                                <li><a class="dropdown-item" href="search engine optimization">Search Engine Optimization</a></li>
                                <li><a class="dropdown-item active" href="wordpress development">WordPress Development</a></li>
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
            <img class="img-fluid w-100" src="images/wordpressbanner.jpg" alt="">
        </header>


        <!-- WordPress Development -->
        <section class="container py-5">
            <div class="text-center mb-5">
                <i class="bi bi-wordpress display-4 text-primary"></i>
                <h2 class="display-5 fw-bold mb-3">Modern WordPress Solutions</h2>
                <p class="lead">Transform your digital presence with our cutting-edge WordPress development expertise</p>
            </div>

            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="rounded-4 overflow-hidden shadow-lg">
                        <img src="images/221744001e109d11d487eec7f4c90504.jpg" class="img-fluid" alt="WordPress development process">
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="ps-lg-4">
                        <p class="fs-5 mb-4">As certified WordPress specialists, we craft dynamic platforms that combine powerful functionality with seamless user experiences. Leverage our full-stack WordPress capabilities:</p>
                        
                        <div class="d-flex gap-3 mb-4">
                            <i class="bi bi-puzzle-fill text-primary fs-3"></i>
                            <div>
                                <h3 class="h5 fw-bold">Plugin Ecosystem</h3>
                                <p>Integrate 55,000+ plugins for enhanced capabilities</p>
                            </div>
                        </div>

                        <div class="d-flex gap-3 mb-4">
                            <i class="bi bi-shield-check text-success fs-3"></i>
                            <div>
                                <h3 class="h5 fw-bold">Enterprise Security</h3>
                                <p>Multi-layer protection for mission-critical operations</p>
                            </div>
                        </div>

                        <a href="Contact" target="_blank">
                            <button class="btn btn-primary px-4 py-2">Explore Capabilities 
                                <i class="bi bi-arrow-right ms-2"></i>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </section>


        <!-- WordPress Maintenance -->
        <section class="bg-dark text-white py-5">
            <div class="container">
                <div class="text-center mb-5">
                    <i class="bi bi-clipboard2-pulse display-4 text-info"></i>
                    <h2 class="display-5 fw-bold mb-3">Proactive Care Plans</h2>
                    <p class="text-light opacity-75">24/7 monitoring and expert maintenance for peak performance</p>
                </div>

                <div class="row g-4">
                    <div class="col-md-6 col-xl-4">
                        <div class="bg-black bg-opacity-25 p-4 rounded-4 h-100">
                            <i class="bi bi-cloud-arrow-up fs-2 text-danger"></i>
                            <h3 class="h4 mt-3">Continuous Optimization</h3>
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="bi bi-check2-circle text-success me-2"></i>Automated core updates</li>
                                <li class="mb-2"><i class="bi bi-check2-circle text-success me-2"></i>Performance audits</li>
                                <li class="mb-0"><i class="bi bi-check2-circle text-success me-2"></i>Security hardening</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-4">
                        <div class="bg-black bg-opacity-25 p-4 rounded-4 h-100">
                            <i class="bi bi-shield-lock fs-2 text-warning"></i>
                            <h3 class="h4 mt-3">Enterprise Protection</h3>
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="bi bi-check2-circle text-success me-2"></i>Malware scanning</li>
                                <li class="mb-2"><i class="bi bi-check2-circle text-success me-2"></i>DDoS mitigation</li>
                                <li class="mb-0"><i class="bi bi-check2-circle text-success me-2"></i>Backup management</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-4">
                        <div class="bg-black bg-opacity-25 p-4 rounded-4 h-100">
                            <i class="bi bi-graph-up fs-2 text-info"></i>
                            <h3 class="h4 mt-3">Growth Engineering</h3>
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="bi bi-check2-circle text-success me-2"></i>Conversion optimization</li>
                                <li class="mb-2"><i class="bi bi-check2-circle text-success me-2"></i>Scalability planning</li>
                                <li class="mb-0"><i class="bi bi-check2-circle text-success me-2"></i>API integrations</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- WordPress Advantages -->
        <section class="container py-5">
            <div class="text-center mb-4">
                <h2 class="display-5 fw-bold mb-3">Why Enterprises Choose WordPress</h2>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <p class="lead">Powering 43% of the web, WordPress delivers unmatched flexibility for ambitious digital strategies</p>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="p-4 border rounded-4 h-100">
                        <i class="bi bi-lightning-charge-fill text-warning fs-1"></i>
                        <h3 class="h4 mt-3 mb-2">Rapid Deployment</h3>
                        <p class="text-secondary">Launch MVP solutions in days using our pre-built framework components</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="p-4 border rounded-4 h-100">
                        <i class="bi bi-currency-dollar text-success fs-1"></i>
                        <h3 class="h4 mt-3 mb-2">Cost Efficiency</h3>
                        <p class="text-secondary">Reduce TCO with open-source flexibility and reusable components</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="p-4 border rounded-4 h-100">
                        <i class="bi bi-globe2 text-primary fs-1"></i>
                        <h3 class="h4 mt-3 mb-2">Global Ecosystem</h3>
                        <p class="text-secondary">Access 100,000+ developers worldwide for continuous innovation</p>
                    </div>
                </div>
            </div>
        </section>
        
        
        <!-- WordPress Services -->
        <section class="bg-light py-5">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="display-5 fw-bold mb-3">Full-Cycle Development Services</h2>
                    <p class="text-muted">End-to-end solutions from strategy to scaling</p>
                </div>

                <div class="row g-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body p-4">
                                <i class="bi bi-search-heart fs-2 text-danger"></i>
                                <h3 class="h5 mt-3">Technical SEO</h3>
                                <p class="text-muted">Architecture optimization for search dominance</p>
                                <ul class="list-unstyled">
                                    <li class="mb-2"><i class="bi bi-check2 text-primary me-2"></i>Schema markup</li>
                                    <li class="mb-2"><i class="bi bi-check2 text-primary me-2"></i>Core Web Vitals</li>
                                    <li><i class="bi bi-check2 text-primary me-2"></i>Indexation strategy</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body p-4">
                                <i class="bi bi-gear-wide-connected fs-2 text-primary"></i>
                                <h3 class="h5 mt-3">System Integration</h3>
                                <p class="text-muted">Unified tech stack orchestration</p>
                                <ul class="list-unstyled">
                                    <li class="mb-2"><i class="bi bi-check2 text-primary me-2"></i>CRM connectivity</li>
                                    <li class="mb-2"><i class="bi bi-check2 text-primary me-2"></i>Payment gateways</li>
                                    <li><i class="bi bi-check2 text-primary me-2"></i>ERP bridges</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body p-4">
                                <i class="bi bi-graph-up-arrow fs-2 text-success"></i>
                                <h3 class="h5 mt-3">Revenue Operations</h3>
                                <p class="text-muted">Conversion-focused engineering</p>
                                <ul class="list-unstyled">
                                    <li class="mb-2"><i class="bi bi-check2 text-primary me-2"></i>Checkout optimization</li>
                                    <li class="mb-2"><i class="bi bi-check2 text-primary me-2"></i>Personalization engines</li>
                                    <li><i class="bi bi-check2 text-primary me-2"></i>Analytics integration</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- WooCommerce Section -->
        <section class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="position-relative">
                        <img src="images/wordpress-development-1024x355.jpg" class="img-fluid rounded-4 shadow" alt="WooCommerce integration">
                        <div class="position-absolute bottom-0 start-0 bg-primary text-white p-3 m-3 rounded-3">
                            <i class="bi bi-cart3 fs-1"></i>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 order-lg-1">
                    <h2 class="display-6 fw-bold mb-4">Commerce-Ready Architecture</h2>
                    <p class="lead mb-4">Build enterprise marketplaces with our WooCommerce solutions</p>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="p-3 border rounded-3">
                                <i class="bi bi-currency-exchange text-success fs-4"></i>
                                <p class="mb-0 mt-2 fw-medium">Multi-currency Support</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-3 border rounded-3">
                                <i class="bi bi-globe2 text-info fs-4"></i>
                                <p class="mb-0 mt-2 fw-medium">Global Tax Compliance</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-3 border rounded-3">
                                <i class="bi bi-box-seam text-warning fs-4"></i>
                                <p class="mb-0 mt-2 fw-medium">Inventory Syncing</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-3 border rounded-3">
                                <i class="bi bi-shield-check text-danger fs-4"></i>
                                <p class="mb-0 mt-2 fw-medium">PCI Compliance</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


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


    </body>
</html>