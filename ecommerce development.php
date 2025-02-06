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
                                <li><a class="dropdown-item active" href="ecommerce development">E-commerce Development</a></li>
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
            <img class="img-fluid w-100" src="images/ECommerce Development.jpg" alt="Custom Services">
        </header>


        <!-- First Section -->
        <section class="container py-5">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold mb-4">Digital Growth Architects</h2>
                <p class="lead">Transforming digital visions into high-performing web experiences</p>
            </div>

            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="pe-lg-4">
                        <div class="d-flex mb-4">
                            <div class="me-4 text-primary">
                                <i class="fas fa-rocket fa-2x"></i>
                            </div>
                            <div>
                                <h3 class="h4 mb-3">Full-Cycle Web Solutions</h3>
                                <p>Our team crafts responsive websites that combine aesthetic appeal with technical excellence. From initial concept to final deployment, we ensure seamless integration with modern tools and platforms.</p>
                            </div>
                        </div>

                        <div class="d-flex mb-4">
                            <div class="me-4 text-primary">
                                <i class="fas fa-shield-alt fa-2x"></i>
                            </div>
                            <div>
                                <h3 class="h4 mb-3">E-Commerce Expertise</h3>
                                <p>We build secure, scalable online stores optimized for conversion. Our solutions include payment gateway integration, inventory management, and PCI-compliant security protocols.</p>
                            </div>
                        </div>

                        <a href="Contact" class="btn btn-dark btn-lg mt-3 shadow-sm">
                            Start Your Project <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="position-relative">
                        <img src="images/5e05d386ab3ae.jpg" class="img-fluid rounded-3 shadow" 
                            alt="Team collaborating on web project" loading="lazy">
                        <div class="position-absolute bottom-0 start-0 bg-white p-3 m-3 rounded-2 shadow-sm">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-trophy text-warning me-2"></i>
                                <span class="small">Award-Winning Development</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        
        <!-- Second Grid -->
        <section class="bg-black text-white py-5">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="display-5 fw-bold mb-4">Elevate Your Digital Presence</h2>
                    <p class="lead mx-auto" style="max-width: 600px;">We craft high-performing web solutions that drive growth and engage customers</p>
                </div>

                <div class="row g-4">
                    <!-- Tailored Development -->
                    <div class="col-lg-3 col-md-6">
                        <div class="p-4 h-100 text-center">
                            <i class="bi bi-code-square text-danger fs-1 mb-4"></i>
                            <h3 class="h4 mb-3">Tailored Development</h3>
                            <p class="text-secondary text-start">Our team builds custom web solutions that align perfectly with your business objectives and customer needs.</p>
                        </div>
                    </div>

                    <!-- Responsive Excellence -->
                    <div class="col-lg-3 col-md-6">
                        <div class="p-4 h-100 text-center">
                            <i class="bi bi-phone text-danger fs-1 mb-4"></i>
                            <h3 class="h4 mb-3">Responsive Excellence</h3>
                            <p class="text-secondary text-start">We create flawless mobile-first experiences that adapt beautifully to every screen size and device.</p>
                        </div>
                    </div>

                    <!-- Scalable Architecture -->
                    <div class="col-lg-3 col-md-6">
                        <div class="p-4 h-100 text-center">
                            <i class="bi bi-diagram-3 text-danger fs-1 mb-4"></i>
                            <h3 class="h4 mb-3">Scalable Architecture</h3>
                            <p class="text-secondary text-start">Our solutions grow with your business, featuring robust infrastructure and flexible content management.</p>
                        </div>
                    </div>

                    <!-- Continuous Optimization -->
                    <div class="col-lg-3 col-md-6">
                        <div class="p-4 h-100 text-center">
                            <i class="bi bi-shield-check text-danger fs-1 mb-4"></i>
                            <h3 class="h4 mb-3">Continuous Optimization</h3>
                            <p class="text-secondary text-start">We provide ongoing support with performance tuning, security updates, and conversion rate optimization.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Web Solutions Section -->
        <section class="container my-5 py-lg-5">
            <div class="row gx-lg-5 align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <img src="images/qtq80-jGE1Md-2048x1365-2125300721.jpeg" 
                        class="img-fluid rounded-3 shadow-lg" 
                        alt="Team collaborating on web project">
                </div>

                <div class="col-lg-6">
                    <h2 class="display-5 fw-bold mb-4">Elevate Your Digital Presence with Expert Web Solutions</h2>
                    
                    <p class="lead text-muted mb-4">We deliver tailored web experiences that convert visitors into customers. Our full-spectrum services combine cutting-edge development with strategic digital insights.</p>

                    <div class="row g-4 mb-4">
                        <div class="col-md-6">
                            <div class="p-3 border rounded bg-light">
                                <h3 class="h5 mb-2">E-Commerce Excellence</h3>
                                <p class="mb-0 small">Scalable platforms built for growth and conversions</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-3 border rounded bg-light">
                                <h3 class="h5 mb-2">Web Optimization</h3>
                                <p class="mb-0 small">Speed, SEO, and performance engineered to perfection</p>
                            </div>
                        </div>
                    </div>

                    <a href="Contact" class="btn btn-primary btn-lg px-4">Schedule Free Consultation</a>
                </div>
            </div>
        </section>
        <hr>


        <!-- Web Development Services -->
        <div class="container my-5 py-lg-5">
            <div class="row g-5 align-items-center">
                <!-- Text Content (Left on desktop) -->
                <div class="col-lg-6 order-lg-1 order-2">
                    <h2 class="display-5 fw-bold mb-4">Your Premier WooCommerce Development Partner</h2>
                    
                    <div class="fs-5 text-secondary">
                        <p class="mb-4">We craft high-performance e-commerce solutions that drive conversions and scale with your business. Our full-stack expertise ensures every aspect of your digital presence works seamlessly together.</p>

                        <ul class="list-unstyled">
                            <li class="mb-3 d-flex align-items-center">
                                <span class="text-primary me-2">✔</span>
                                Custom store development & optimization
                            </li>
                            <li class="mb-3 d-flex align-items-center">
                                <span class="text-primary me-2">✔</span>
                                Secure payment gateway integration
                            </li>
                            <li class="mb-3 d-flex align-items-center">
                                <span class="text-primary me-2">✔</span>
                                Mobile-first responsive design
                            </li>
                        </ul>
                    </div>

                    <a href="Contact" class="btn btn-primary btn-lg px-4 mt-3">Start Your Project Today</a>
                </div>

                <!-- Image (Right on desktop) -->
                <div class="col-lg-6 order-lg-2 order-1">
                    <img src="images/woocommerce-website-development-service-provider-company-in-india.jpg" 
                        alt="Professional WooCommerce Development Team" 
                        class="img-fluid rounded-3 shadow-lg">
                </div>
            </div>
        </div>


        <!-- WooCommerce Development Solutions -->
        <section class="container-fluid bg-dark py-5">
            <div class="container py-lg-5">
                <header class="text-center mb-5">
                    <h2 class="display-5 fw-bolder mb-3 text-white">
                        Transform Your eCommerce Experience
                        <span class="d-block text-gradient-primary mt-2">Premium WooCommerce Solutions</span>
                    </h2>
                    <p class="lead text-muted">Full-service platform development tailored to grow your online business</p>
                </header>

                <div class="row g-4 row-cols-1 row-cols-lg-2 row-cols-xl-3">
                    <article class="col">
                        <div class="card h-100 border-0 shadow-lg hover-shadow-primary">
                            <div class="card-body p-4">
                                <div class="icon-xl bg-primary-soft rounded-circle mb-4">
                                    <i class="bi bi-gear text-primary"></i>
                                </div>
                                <h3 class="h4 mb-3">Custom Store Development</h3>
                                <p class="text-muted">Our expert developers craft tailored WooCommerce solutions that scale with your business. From complex product configurators to subscription models - we build what your marketplace demands.</p>
                            </div>
                        </div>
                    </article>

                    <article class="col">
                        <div class="card h-100 border-0 shadow-lg hover-shadow-primary">
                            <div class="card-body p-4">
                                <div class="icon-xl bg-primary-soft rounded-circle mb-4">
                                    <i class="bi bi-palette text-primary"></i>
                                </div>
                                <h3 class="h4 mb-3">Conversion-Focused Design</h3>
                                <p class="text-muted">Our design team creates mobile-first storefronts that balance brand aesthetics with data-driven UX principles. Watch bounce rates drop and conversions soar with our strategic approach.</p>
                            </div>
                        </div>
                    </article>

                    <article class="col">
                        <div class="card h-100 border-0 shadow-lg hover-shadow-primary">
                            <div class="card-body p-4">
                                <div class="icon-xl bg-primary-soft rounded-circle mb-4">
                                    <i class="bi bi-plug text-primary"></i>
                                </div>
                                <h3 class="h4 mb-3">Extension Ecosystem</h3>
                                <p class="text-muted">Need custom payment gateways or ERP integrations? Our certified developers extend WooCommerce's capabilities while maintaining peak performance and security standards.</p>
                            </div>
                        </div>
                    </article>

                    <article class="col">
                        <div class="card h-100 border-0 shadow-lg hover-shadow-primary">
                            <div class="card-body p-4">
                                <div class="icon-xl bg-primary-soft rounded-circle mb-4">
                                    <i class="bi bi-speedometer2 text-primary"></i>
                                </div>
                                <h3 class="h4 mb-3">Performance Optimization</h3>
                                <p class="text-muted">We transform sluggish stores into speed demons. Our optimization process includes server-level tuning, lean code practices, and intelligent caching strategies for sub-second load times.</p>
                            </div>
                        </div>
                    </article>

                    <article class="col">
                        <div class="card h-100 border-0 shadow-lg hover-shadow-primary">
                            <div class="card-body p-4">
                                <div class="icon-xl bg-primary-soft rounded-circle mb-4">
                                    <i class="bi bi-shield-check text-primary"></i>
                                </div>
                                <h3 class="h4 mb-3">Ongoing Protection</h3>
                                <p class="text-muted">Rest easy with our 24/7 monitoring and maintenance plans. We handle security patches, PCI compliance, and disaster recovery so you can focus on sales.</p>
                            </div>
                        </div>
                    </article>

                    <article class="col">
                        <div class="card h-100 border-0 shadow-lg hover-shadow-primary">
                            <div class="card-body p-4">
                                <div class="icon-xl bg-primary-soft rounded-circle mb-4">
                                    <i class="bi bi-graph-up-arrow text-primary"></i>
                                </div>
                                <h3 class="h4 mb-3">Growth Strategy</h3>
                                <p class="text-muted">Beyond development - we partner in your success. Our analytics team provides conversion rate optimization and customer journey mapping to maximize LTV.</p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        
        <!-- WooCommerce Development Services -->
        <div class="container py-5 my-4">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center mb-5">
                    <h2 class="display-5 fw-semibold mb-4">Elevate Your eCommerce Presence</h2>
                    <p class="lead text-muted">As award-winning WooCommerce experts, we craft high-conversion online stores that combine stunning design with cutting-edge functionality. Our full-service approach ensures your digital storefront delivers exceptional user experiences across all devices while accelerating business growth.</p>
                </div>
            </div>

            <div class="row g-5 align-items-center">
                <div class="col-md-6">
                    <div class="shadow-lg rounded-3 overflow-hidden">
                        <img src="images/Top-eCommerce-Development-Companies-in-India.jpg" class="img-fluid" alt="Modern WooCommerce Store Development" loading="lazy">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="ps-xl-4">
                        <h3 class="h4 mb-4">Our Comprehensive WooCommerce Solutions</h3>
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="d-flex">
                                    <div class="me-3 text-primary">✓</div>
                                    <div>
                                        <h4 class="h6 mb-2">Custom Store Development</h4>
                                        <p class="small mb-0">Tailored solutions with 300+ built-in features and mobile-optimized layouts</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="d-flex">
                                    <div class="me-3 text-primary">✓</div>
                                    <div>
                                        <h4 class="h6 mb-2">Conversion-Focused Design</h4>
                                        <p class="small mb-0">SEO-friendly architecture with intuitive navigation and streamlined checkout</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="d-flex">
                                    <div class="me-3 text-primary">✓</div>
                                    <div>
                                        <h4 class="h6 mb-2">Enterprise-Grade Security</h4>
                                        <p class="small mb-0">PCI-compliant infrastructure with regular audits and malware protection</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="d-flex">
                                    <div class="me-3 text-primary">✓</div>
                                    <div>
                                        <h4 class="h6 mb-2">Advanced Integration</h4>
                                        <p class="small mb-0">ERP/CRM connectivity, multi-carrier shipping, and global payment gateways</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5 g-4 text-center">
                <div class="col-md-4">
                    <div class="border rounded-3 p-4 h-100">
                        <div class="text-success mb-3">■</div>
                        <h4 class="h5">Performance Optimization</h4>
                        <p class="small">Lightning-fast load times with advanced caching and CDN integration</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="border rounded-3 p-4 h-100">
                        <div class="text-success mb-3">■</div>
                        <h4 class="h5">Ongoing Support</h4>
                        <p class="small">24/7 monitoring, regular updates, and strategic maintenance plans</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="border rounded-3 p-4 h-100">
                        <div class="text-success mb-3">■</div>
                        <h4 class="h5">Data-Driven Analytics</h4>
                        <p class="small">Advanced reporting dashboards with conversion rate optimization insights</p>
                    </div>
                </div>
            </div>
        </div>


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