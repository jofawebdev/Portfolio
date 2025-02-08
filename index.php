<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Jofawebdev - Website Development | SEO | Digital Marketing</title>

        <!-- Open Graph Meta Tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/jpg" href="https://jofawebdev.co.ke/images/logo.jpg">

        <!-- Essential OG Tags -->
        <meta property="og:title" content="Conversion-Driven Web Development & Optimization Services">
        <meta property="og:type" content="website" />
        <meta property="og:description" content="Transform your online presence with tailored web development, SEO, and digital marketing solutions for measurable business growth.">
        <meta property="og:url" content="https://jofawebdev.co.ke/">
        <meta property="og:image" content="https://jofawebdev.co.ke/images/logo.jpg">
        <meta property="og:image:secure_url" content="https://jofawebdev.co.ke/images/logo.jpg">
        <meta property="og:site_name" content="Jofawebdev">

        <!-- Optional but Recommended -->
        <meta property="og:locale" content="en_US">

        <link rel="stylesheet" type="text/css" href="css/index.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
                            <a class="nav-link active text-primary" href="index">Home</a>
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
        
        <!-- Begin Top Carousel -->
        <div id="demo" class="carousel slide" data-bs-ride="carousel">

            <!-- Indicators/dots -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>

            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/web-development.jpg" alt="Dev" class="d-block w-100" style="width: 100%;">
                </div>

                <div class="carousel-item">
                    <img src="images/Custom-Web.jpg" alt="custom-web" class="d-block w-100" style="width: 100%;">
                </div>
                
                <div class="carousel-item">
                    <img src="images/internet-marketing2.jpg" alt="internet-marketing2" class="d-block w-100" style="width: 100%;">
                </div>
            </div>

            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
        <!-- End Carousel -->


        <!-- Begin First Section -->
        <div class="container p-3 py-5 py-md-6 text-center">
            <h2 class="display-5 fw-bold text-uppercase mb-4">
                Web Development & Optimization Services
                <span class="text-danger d-block mt-2">For Your Business Success</span>
            </h2>
            
            <p class="text-muted fw-medium fs-5 mb-5">
                Enhance Performance, Elevate User Experience, Dominate Search Rankings
            </p>

            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <img class="img-fluid rounded-4 shadow-lg" src="images/design dev.jpg" alt="design dev.jpg">
                </div>

                <div class="col-lg-6 text-start">
                    <div class="mb-4">
                        <p class="lead text-dark fw-medium gradient-text">
                            Nairobi-based digital architects crafting high-performance web solutions. Jofawebdev empowers Kenyan and global businesses to conquer the digital landscape through precision-coded websites, strategic SEO, and intuitive UX design.
                        </p>
                        
                        <div class="border-start border-3 border-danger ps-4">
                            <p class="text-secondary mb-0">
                                Seasoned experts in delivering secure, scalable web experiences. We collaborate with startups to enterprises, solving complex challenges - from responsive design and e-commerce integration to site migrations and performance optimization. Our technology-driven approach ensures your digital presence accelerates growth and sustains competitive advantage.
                            </p>
                        </div>
                    </div>

                    <div class="d-flex gap-3">
                        <a href="Services" class="btn btn-danger btn-lg px-5 py-3 rounded-1 fw-bold hover-effect">
                            Explore Our Solutions
                            <i class="bi bi-arrow-right-circle ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End First Section -->
         
        
        <!-- Begin Second Section -->
        <div class="container-fluid bg-light text-dark py-5">
            <div class="container-lg text-center">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8">
                        <h2 class="display-4 fw-bolder mb-4">
                            Tailored Web Solutions 
                            <span class="text-primary d-block mt-2">GROW YOUR BUSINESS</span>
                        </h2>
                    </div>
                </div>

                <div class="row justify-content-center g-5">
                    <div class="col-lg-6 text-lg-start">
                        <div class="fs-5 text-black-70">
                            <p class="mb-4">
                                As your dedicated Web Development & Optimization Specialist, we engineer growth-focused digital solutions tailored to your business. From selecting the ideal platform to crafting pixel-perfect, conversion-driven designs, we develop secure, scalable code that safeguards your e-commerce operations.
                            </p>
                            <p class="mb-4">
                                What sets our services apart? A blend of deep technical expertise and data-driven optimizations—transforming complex challenges into frictionless user experiences. We prioritize proactive collaboration, aligning every line of code with your unique business objectives.
                            </p>
                        </div>
                    </div>
                    
                    <div class="col-lg-6 text-lg-start">
                        <div class="fs-5 text-black-70">
                            <p class="mb-4">
                                Whether building a new e-commerce store or modernizing an outdated website, our technical precision and strategic approach ensure your digital goals are achieved. As seasoned web specialists, we engineer high-performance online stores using industry-leading platforms like WordPress/WooCommerce, Shopify (for scalable growth), Magento (enterprise-grade solutions), and headless CMS frameworks.
                            </p>
                            <p>
                                We adopt a platform-agnostic approach while analyzing your business model, target audience, and growth objectives to recommend the ideal CMS, framework, or custom stack that balances speed, security, and scalability. From architecture to launch, we build websites designed to convert, perform, and evolve with your business.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="mt-5 pt-3">
                    <a href="Contact" class="btn btn-lg btn-danger px-5 py-3 rounded-pill shadow-lg hover-shadow transition-all d-inline-flex align-items-center gap-2" title="Start Your Journey">
                        <i class="bi bi-rocket-fill fs-4"></i>
                        Launch Your Success
                    </a>
                </div>
            </div>
        </div>
        <hr>
        <!-- End Section -->


        <!-- Third Section -->
        <div class="container-fluid bg-primary text-light py-5">
            <div class="container text-center">
                <h2 class="display-5 fw-bold mb-5 text-uppercase">
                    Performance-Driven<br class="d-block d-md-none">
                    <span class="text-light">Web Design & Development Experts</span>
                </h2>

                <div class="row g-5 align-items-center">
                    <div class="col-md-6">
                        <div class="shadow-lg rounded-4 overflow-hidden">
                            <img class="img-fluid rounded-4" src="images/Modern-Creative-Corporate image.png" 
                                alt="Modern-Creative-Corporate image.png">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="ps-lg-4">
                            <ol class="list-group list-group-numbered border-0">
                                <li class="list-group-item d-flex text-start mb-3 bg-dark text-light rounded-3 shadow-sm">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Responsive Development</div>
                                        Mobile-first customized solutions
                                    </div>
                                </li>
                                <li class="list-group-item d-flex text-start mb-3 bg-dark text-light rounded-3 shadow-sm">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">CMS Integration</div>
                                        Seamless content management systems
                                    </div>
                                </li>
                                <li class="list-group-item d-flex text-start mb-3 bg-dark text-light rounded-3 shadow-sm">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Secure Hosting</div>
                                        Protected payment gateways integration
                                    </div>
                                </li>
                                <li class="list-group-item d-flex text-start mb-3 bg-dark text-light rounded-3 shadow-sm">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Performance Optimization</div>
                                        Fast loading & cross-browser support
                                    </div>
                                </li>
                                <li class="list-group-item d-flex text-start mb-3 bg-dark text-light rounded-3 shadow-sm">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">UX/UI Excellence</div>
                                        Enhanced CTAs & user journeys
                                    </div>
                                </li>
                                <li class="list-group-item d-flex text-start mb-3 bg-dark text-light rounded-3 shadow-sm">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Digital Marketing</div>
                                        SEO & social media integration
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>

                <blockquote class="blockquote bg-dark rounded-4 p-4 mt-5 shadow-lg">
                    <p class="mb-0 fst-italic">Our precision-engineered workflow combines technical mastery with user-centric design, delivering SEO-optimized, scalable solutions that consistently exceed client objectives through responsive builds and performance excellence.</p>
                    <footer class="blockquote-footer mt-3 text-white">Digital Solutions Framework</footer>
                </blockquote>
            </div>
        </div>
        <!-- End Third Section -->


        <!-- Services Section -->
        <section class="container py-5">
            <div class="text-center mb-5">
                <h2 class="display-4 fw-bold mb-3">
                    <span class="text-danger">Digital Excellence</span> 
                    <span class="text-primary">Made Simple</span>
                </h2>
                <p class="lead text-muted">Full-spectrum digital solutions transforming brands in the modern marketplace</p>
            </div>

            <!-- Services Grid -->
            <div class="row g-4">
                <!-- Web Development -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm hover-shadow">
                        <div class="card-header bg-transparent border-0 text-center pt-4">
                            <i class="bi bi-code-square display-5 text-danger"></i>
                        </div>
                        <div class="card-body">
                            <h3 class="h4 fw-bold mb-3">Custom Web Solutions</h3>
                            <p class="text-secondary">Transform your digital presence with pixel-perfect websites built on modern stacks. We specialize in React and Node.js development, creating scalable solutions with CI/CD integration and cloud-ready architectures.</p>
                            <a href="custom website development" class="btn btn-danger stretched-link" aria-label="Custom development details">
                                Explore Capabilities
                                <i class="bi bi-chevron-double-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- E-Commerce -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm hover-shadow">
                        <div class="card-header bg-transparent border-0 text-center pt-4">
                            <i class="bi bi-cart-check display-5 text-primary"></i>
                        </div>
                        <div class="card-body">
                            <h3 class="h4 fw-bold mb-3">E-Commerce Evolution</h3>
                            <p class="text-secondary">Convert browsers into buyers with Shopify and WooCommerce solutions featuring AI-powered recommendations, 1-click upsells, and multi-channel inventory sync. Includes PCI compliance and payment gateway integration.</p>
                            <a href="ecommerce development" class="btn btn-primary stretched-link" aria-label="E-commerce solutions">
                                Boost Conversions
                                <i class="bi bi-lightning-charge ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Digital Marketing -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm hover-shadow">
                        <div class="card-header bg-transparent border-0 text-center pt-4">
                            <i class="bi bi-bar-chart-line display-5 text-warning"></i>
                        </div>
                        <div class="card-body">
                            <h3 class="h4 fw-bold mb-3">Growth Marketing</h3>
                            <p class="text-secondary">Data-driven campaigns leveraging GA4 analytics and machine learning. Our full-funnel strategies encompass programmatic ads, conversion rate optimization, and hyper-personalized retargeting.</p>
                            <a href="digital marketing" class="btn btn-warning stretched-link" aria-label="Marketing strategies">
                                Accelerate Growth
                                <i class="bi bi-rocket-takeoff ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Additional Cards Maintain Similar Structure -->
                <!-- SEO -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm hover-shadow">
                        <div class="card-header bg-transparent border-0 text-center pt-4">
                            <i class="bi bi-search-heart display-5 text-success"></i>
                        </div>
                        <div class="card-body">
                            <h3 class="h4 fw-bold mb-3">Search Intelligence</h3>
                            <p class="text-secondary">Dominate SERPs with our semantic SEO framework combining technical audits, content clusters, and entity optimization. Includes featured snippet strategies and local search domination.</p>
                            <a href="search engine optimization" class="btn btn-success stretched-link" aria-label="SEO services">
                                Claim Visibility
                                <i class="bi bi-trophy ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- WordPress -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm hover-shadow">
                        <div class="card-header bg-transparent border-0 text-center pt-4">
                            <i class="bi bi-wordpress display-5 text-info"></i>
                        </div>
                        <div class="card-body">
                            <h3 class="h4 fw-bold mb-3">WordPress Excellence</h3>
                            <p class="text-secondary">Enterprise-grade WordPress solutions with headless configurations, custom plugin development, and WP Engine optimization. Includes multisite management and VIP compliance.</p>
                            <a href="wordpress development" class="btn btn-info stretched-link" aria-label="WordPress expertise">
                                Empower CMS
                                <i class="bi bi-gear-wide-connected ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- UX Design -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm hover-shadow">
                        <div class="card-header bg-transparent border-0 text-center pt-4">
                            <i class="bi bi-magic display-5 text-purple"></i>
                        </div>
                        <div class="card-body">
                            <h3 class="h4 fw-bold mb-3">Experience Design</h3>
                            <p class="text-secondary">User-centric interfaces powered by Figma prototypes and usability testing. We implement micro-interactions, accessibility compliance, and cognitive load optimization.</p>
                            <a href="ui & ux design" class="btn btn-dark stretched-link" aria-label="UX design services">
                                Craft Experiences
                                <i class="bi bi-hand-index-thumb ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        
        <!-- Case Study -->
        <div class="container-fluid bg-dark py-5 text-light">
            <div class="container text-center">
                <h2 class="fw-bold display-4 mb-4"><span class="text-danger">OUR</span> PROJECTS <span class="d-block mt-2 border-bottom border-danger border-3 w-25 mx-auto"></span></h2>
                
                <div class="row g-4 mb-5 text-center text-md-start">
                    <div class="col-md-6">
                        <p class="lead mb-4">Your website should be user-friendly and effectively communicate your unique selling point. Our team specializes in designing and developing high-performing, revenue-generating websites that drive growth and enhance your online presence.</p>
                    </div>
                    <div class="col-md-6">
                        <p class="lead mb-4">From landing pages to product descriptions and blog posts, our team crafts compelling content that aligns with your brand identity and enhances user engagement. As web specialists, we have the expertise to develop high-performance websites that look great and drive measurable results.</p>
                    </div>
                </div>

                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card border-0 shadow-lg-hover h-100 transition-all">
                            <a href="https://www.sinepowerelectrics.com" target="_blank">
                                <img class="card-img-top object-fit-cover" src="images/Screenshot (1).png" alt="Sinepower Electrics" style="height: 250px;">
                            </a>
                            <div class="card-body bg-light text-dark text-center py-4">
                                <p class="fw-bold fs-5 mb-0">SINEPOWER ELECTRICS</p>
                                <span class="text-muted">Industrial Solutions</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card border-0 shadow-lg-hover h-100 transition-all">
                            <a href="https://www.niacreation.com/" target="_blank">
                                <img src="images/Screenshot (2).png" class="card-img-top object-fit-cover" alt="Nia Creation" style="height: 250px;">
                            </a>
                            <div class="card-body bg-light text-dark text-center py-4">
                                <p class="fw-bold fs-5 mb-0">NIA CREATION LTD</p>
                                <span class="text-muted">Fashion Design</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card border-0 shadow-lg-hover h-100 transition-all">
                            <a href="https://www.nilababyshop.com/" target="_blank">
                                <img src="images/Screenshot (3).png" class="card-img-top object-fit-cover" alt="Nila Baby Shop" style="height: 250px;">
                            </a>
                            <div class="card-body bg-light text-dark text-center py-4">
                                <p class="fw-bold fs-5 mb-0">NILA BABY SHOP</p>
                                <span class="text-muted">Children's Retail</span>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="Portfolio" class="btn btn-danger btn-lg rounded-pill mt-5 px-5 py-3">
                    View More Projects <i class="bi bi-arrow-right-circle ms-2"></i>
                </a>
            </div>
        </div>
        <!-- End case study -->


        <!-- Work Process Section -->
        <section class="py-5 text-dark">
            <div class="container">
                <div class="text-center mb-4">
                    <h2 class="display-5 fw-bold mb-3">Our <span class="text-primary">Work Process</span></h2>
                    <p class="lead text-muted mx-lg-5">
                        We combine strategic planning with cutting-edge execution to deliver exceptional results. 
                        Our proven methodology ensures every project's success.
                    </p>
                </div>

                <div class="row g-4">
                    <!-- Consultation -->
                    <div class="col-lg-3 col-md-6">
                        <div class="bg-primary bg-gradient text-white p-4 rounded-4 h-100 shadow-sm">
                            <div class="d-flex flex-column gap-3">
                                <i class="bi bi-chat-square-text fs-2"></i>
                                <h3 class="h4 fw-semibold mb-0">Consultation</h3>
                                <p class="mb-0">We start with in-depth discussions to understand your business goals, target audience, and technical requirements, laying the groundwork for success.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Strategy -->
                    <div class="col-lg-3 col-md-6">
                        <div class="bg-dark bg-gradient text-white p-4 rounded-4 h-100 shadow-sm">
                            <div class="d-flex flex-column gap-3">
                                <i class="bi bi-lightbulb fs-2"></i>
                                <h3 class="h4 fw-semibold mb-0">Strategy</h3>
                                <p class="mb-0">Crafting a data-driven plan combining modern web design, SEO fundamentals, and conversion optimization strategies tailored to your market.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Implementation -->
                    <div class="col-lg-3 col-md-6">
                        <div class="bg-primary bg-gradient text-white p-4 rounded-4 h-100 shadow-sm">
                            <div class="d-flex flex-column gap-3">
                                <i class="bi bi-tools fs-2"></i>
                                <h3 class="h4 fw-semibold mb-0">Implementation</h3>
                                <p class="mb-0">Agile development process with continuous client collaboration, ensuring perfect alignment with your vision and business objectives.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Launch -->
                    <div class="col-lg-3 col-md-6">
                        <div class="bg-dark bg-gradient text-white p-4 rounded-4 h-100 shadow-sm">
                            <div class="d-flex flex-column gap-3">
                                <i class="bi bi-rocket-takeoff fs-2"></i>
                                <h3 class="h4 fw-semibold mb-0">Launch</h3>
                                <p class="mb-0">Flawless deployment with comprehensive testing, performance optimization, and post-launch support to ensure sustained success.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr>

        
        <!-- Inquiry Section -->
        <section class="bg-dark text-light py-5 my-4 text-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8">
                        <h2 class="display-5 text-primary fw-bold mb-4">Make An Enquiry</h2>
                        <p class="lead fs-3 text-light mb-4">Have questions about our services? Let's Connect!</p>
                        
                        <div class="d-flex flex-column gap-3 mb-4">
                            <div class="bg-light rounded-4 p-4 border border-2 border-primary-subtle">
                                <p class="fs-5 text-muted mb-0">
                                    Reach us via phone or chat at
                                    <a href="tel:+254793004632" 
                                    class="d-inline-block d-sm-inline bg-primary text-white text-decoration-none px-3 py-2 rounded-pill ms-2 w-100 text-wrap" 
                                    style="word-break: break-word; max-width: 100%;">
                                        <i class="bi bi-telephone me-2"></i>+254 793-004-632
                                    </a>
                                </p>
                            </div>

                            <div class="bg-light rounded-4 p-4 border border-2 border-primary-subtle">
                                <p class="fs-5 text-muted mb-0">
                                    Email us at
                                    <a href="mailto:info@jofawebdev.co.ke" 
                                    class="d-inline-block d-sm-inline bg-dark text-white px-3 py-2 rounded-pill ms-2 text-decoration-none w-100 text-wrap" 
                                    style="word-break: break-word; max-width: 100%;">
                                        <i class="bi bi-envelope me-2"></i>info@jofawebdev.co.ke
                                    </a>
                                </p>
                            </div>
                        </div>

                        <div class="alert alert-primary border-primary-subtle">
                            <p class="mb-0 fs-6">
                                <i class="bi bi-info-circle me-2"></i>
                                Response within 2 business hours. Office hours: Mon-Sat, 8:00 AM - 6:00 PM<br>
                                Closed Sundays and national holidays
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Begin Pagination -->
        <div class="container py-3 my-2">
            <ul class="pagination justify-content-center">
                <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                <li class="page-item active"><a class="page-link" href="index">1</a></li>
                <li class="page-item"><a class="page-link" href="About">2</a></li>
                <li class="page-item"><a class="page-link" href="Services">3</a></li>
                <li class="page-item"><a class="page-link" href="Portfolio">4</a></li>
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
                                    <a href="mailto:info@jofawebdev.co.ke" class="text-white text-decoration-none">
                                        <i class="bi bi-envelope me-2"></i>
                                        info@jofawebdev.co.ke
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="tel:+254793004632" class="text-white text-decoration-none">
                                        <i class="bi bi-telephone me-2"></i>+254-793-004-632
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="https://www.google.com/maps/dir//Utawala+Cres+Ct,+Nairobi/@-1.294693,36.8860262,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x182f3fa4bc27ee03:0x34a3cbb7fb101b39!2m2!1d36.9577074!2d-1.284496?entry=ttu&g_ep=EgoyMDI1MDIwNC4wIKXMDSoASAFQAw%3D%3D" target="_blank" class="text-white text-decoration-none">
                                        <i class="bi bi-geo-alt me-2"></i>Nairobi, KENYA
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

    </body>
</html>