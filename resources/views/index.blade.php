<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Meyawo landing page.">
    <meta name="author" content="Devcrud">
    <title>Personal Portfolio</title>
    <!-- font icons -->
    <link rel="stylesheet" href="{{asset('Frontend/vendors/themify-icons/css/themify-icons.css')}}">
    <!-- Bootstrap + Meyawo main styles -->
    <link rel="stylesheet" href="{{asset('Frontend/css/meyawo.css')}}">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <!-- Page Navbar -->
    <nav class="custom-navbar" data-spy="affix" data-offset-top="20">
        <div class="container">
            <a class="logo" href="#">Meyawo</a>
            <ul class="nav">
                <li class="item">
                    <a class="link" href="#home">Home</a>
                </li>
                <li class="item">
                    <a class="link" href="#about">About</a>
                </li>
                <li class="item">
                    <a class="link" href="#portfolio">Portfolio</a>
                </li>
                <li class="item">
                    <a class="link" href="#testmonial">Testmonial</a>
                </li>
                <li class="item">
                    <a class="link" href="#contact">Contact</a>
                </li>
                <li class="item">
                    <a class="link" href="{{route('login')}}">Login</a>
                </li>
               
            </ul>
            <a href="javascript:void(0)" id="nav-toggle" class="hamburger hamburger--elastic">
                <div class="hamburger-box">
                    <div class="hamburger-inner"></div>
                </div>
            </a>
        </div>
    </nav><!-- End of Page Navbar -->

    <!-- page header -->
    <header id="home" class="header">
        <div class="overlay"></div>
        <div class="header-content container">
            <h1 class="header-title">
                <span class="up">HI!</span>            
                <span class="down">I am {{$header->name}}</span>
            </h1>
            <p class="header-subtitle">{{$header->designation}}</p>

            <a class="btn btn-primary" target="_blank" href="https://github.com/ShahidulLaravel?tab=repositories">Visit My Works</a>
        </div>
    </header><!-- end of page header -->

    <!-- about section -->
    <section class="section pt-0" id="about">
        <!-- container -->
        <div class="container text-center">
            <!-- about wrapper -->
            <div class="about">
                <div class="about-img-holder">
                    <img src="{{asset('Uploads/about')}}/{{$about_all->photo}}" class="about-img"
                        alt="image">
                </div>
                <div class="about-caption">
                    <p class="section-subtitle">Who Am I ?</p>
                    <h2 class="section-title mb-3">About Me</h2>
                    <p class="text-capitalize">
                        {{$about_all->desp}}
                    </p>
                    <button class="btn-rounded btn btn-outline-primary mt-4">Download CV</button>
                </div>
            </div><!-- end of about wrapper -->
        </div><!-- end of container -->
    </section> <!-- end of about section -->

    <!-- service section -->
    <section class="section" id="service">
        <div class="container text-center">
            <p class="section-subtitle">What I Do ?</p>
            <h6 class="section-title mb-6">Service</h6>
            <!-- row -->
            <div class="row">
                @foreach ($services as $service )
                <div class="col-md-6 col-lg-3">
                    
                        <div class="service-card">
                        <div class="body">
                            <img src="{{asset('Uploads/service')}}/{{$service->service_image}}" alt="service_image" class="icon">
                            <h6 class="title">{{$service->service_title}}</h6>
                            <p class="subtitle">{{$service->service_detail}}</p>
                        </div>
                    </div>              
                </div>
                @endforeach
            </div><!-- end of row -->
        </div>
    </section><!-- end of service section -->

    <!-- portfolio section -->
    <section class="section" id="portfolio">
        <div class="container text-center">
            <p class="section-subtitle">What I Did ?</p>
            <h6 class="section-title mb-6">Portfolio</h6>
            <!-- row -->
            <div class="row">
                @foreach ($portfolio as $port )
                  <div class="col-md-4">
                    <a href="#" class="portfolio-card">
                        <img style="height: 520px;" src="{{asset('Uploads/portfolio')}}/{{$port->portfolio_image}}" class="portfolio-card-img"
                            alt="Image Here">
                        <span class="portfolio-card-overlay">
                            <span class="portfolio-card-caption">
                                <h4>{{$port->portfolio_title}}</h5>                      
                            </span>
                        </span>
                    </a>
                </div>  
                @endforeach
            </div><!-- end of row -->
        </div><!-- end of container -->
    </section> <!-- end of portfolio section -->

    <!-- pricing section -->
    <section class="section" id="pricing">
        <div class="container text-center">
            <p class="section-subtitle">How Much I Charge ?</p>
            <h6 class="section-title mb-6">My Pricing</h6>
            <!-- row -->
            <div class="pricing-wrapper">
                
                   <div class="pricing-card">
                    <div class="pricing-card-header">
                        <img class="pricing-card-icon" src="{{asset('Uploads/pricing')}}/{{$free_prices->pricing_image}}"
                            alt="image">
                    </div>
                    <div class="pricing-card-body">
                        <h6 class="pricing-card-title">{{$free_prices->pricing_name}}</h6>
                        <div class="pricing-card-list">
                            @foreach ($free_prices_serv as $free)
                                <p>{{$free->pricing_service}}</p>
                            @endforeach
                        </div>
                    </div>
                    <div class="pricing-card-footer">
                        <span>$</span>
                        <span>{{$free_prices->pricing_rate}}/Project</span>
                    </div>
                    <a href="#" class="btn btn-primary mt-3 pricing-card-btn">Subscribe</a>
                </div> 
                
                <div class="pricing-card">
                    <div class="pricing-card-header">
                        <img class="pricing-card-icon" src="{{asset('Frontend/imgs/shipped.svg')}}"
                            alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                    </div>
                    <div class="pricing-card-body">
                        <h6 class="pricing-card-title">Basic</h6>
                        <div class="pricing-card-list">
                            <p>accusamus reprehenderit</p>
                            <p>provident dolorem </p>
                            <p>quos neque</p>
                            <p>fugiat quibusdam</p>
                            <p>accusamus laboriosam</p>
                            <p><i class="ti-close"></i></p>
                        </div>
                    </div>
                    <div class="pricing-card-footer">
                        <span>$</span>
                        <span>9.99/Month</span>
                    </div>
                    <a href="#" class="btn btn-primary mt-3 pricing-card-btn">Subscribe</a>
                </div>
                <div class="pricing-card">
                    <div class="pricing-card-header">
                        <img class="pricing-card-icon" src="{{asset('Frontend/imgs/startup.svg')}}"
                            alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                    </div>
                    <div class="pricing-card-body">
                        <h6 class="pricing-card-title">Premium</h6>
                        <div class="pricing-card-list">
                            <p>accusamus reprehenderit</p>
                            <p>provident dolorem </p>
                            <p>quos neque</p>
                            <p>fugiat quibusdam</p>
                            <p>accusamus laboriosam</p>
                            <p>inventore omnis</p>
                        </div>
                    </div>
                    <div class="pricing-card-footer">
                        <span>$</span>
                        <span>99.9/Month</span>
                    </div>
                    <a href="#" class="btn btn-primary mt-3 pricing-card-btn">Subscribe</a>
                </div>

            </div><!-- end of pricing wrapper -->
        </div> <!-- end of container -->
    </section><!-- end of pricing section -->

    <!-- section -->
    <section class="section-sm bg-primary">
        <!-- container -->
        <div class="container text-center text-sm-left">
            <!-- row -->
            <div class="row align-items-center">
                <div class="col-sm offset-md-1 mb-4 mb-md-0">
                    <h6 class="title text-light">Want to work with me?</h6>
                    <p class="m-0 text-light">Always feel Free to Contact & Hire me</p>
                </div>
                <div class="col-sm offset-sm-2 offset-md-3">
                    <button class="btn btn-lg my-font btn-light rounded">Hire Me</button>
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section> <!-- end of section -->

    <!-- testimonial section -->
    <section class="section" id="testmonial">
        <div class="container text-center">
            <p class="section-subtitle">What Think Client About Me ?</p>
            <h6 class="section-title mb-6">Testmonial</h6>

            <!-- row -->
            <div class="row">
                <div class="col-md-6">
                    <div class="testimonial-card">
                        <div class="testimonial-card-img-holder">
                            <img src="{{asset('Frontend/imgs/avatar2.jpg')}}" class="testimonial-card-img"
                                alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                        </div>
                        <div class="testimonial-card-body">
                            <p class="testimonial-card-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit. Eaque doloribus autem aperiam earum nostrum omnis blanditiis corporis perspiciatis
                                adipisci nihil.</p>
                            <h6 class="testimonial-card-title">Emily Reb</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="testimonial-card">
                        <div class="testimonial-card-img-holder">
                            <img src="{{asset('Frontend/imgs/avatar3.jpg')}}" class="testimonial-card-img"
                                alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                        </div>
                        <div class="testimonial-card-body">
                            <p class="testimonial-card-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit. Eaque doloribus autem aperiam earum nostrum omnis blanditiis corporis perspiciatis
                                adipisci nihil.</p>
                            <h6 class="testimonial-card-title">Emily Reb</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end of container -->
    </section> <!-- end of testimonial section -->

    <!-- contact section -->
    <section class="section" id="contact">
        <div class="container text-center">
            <p class="section-subtitle">How can you communicate?</p>
            <h6 class="section-title mb-5">Contact Me</h6>
            <!-- contact form -->
            <form action="" class="contact-form col-md-10 col-lg-8 m-auto">
                <div class="form-row">
                    <div class="form-group col-sm-6">
                        <input type="text" size="50" class="form-control" placeholder="Your Name" required>
                    </div>
                    <div class="form-group col-sm-6">
                        <input type="email" class="form-control" placeholder="Enter Email" requried>
                    </div>
                    <div class="form-group col-sm-12">
                        <textarea name="comment" id="comment" rows="6" class="form-control"
                            placeholder="Write Something"></textarea>
                    </div>
                    <div class="form-group col-sm-12 mt-3">
                        <input type="submit" value="Send Message" class="btn btn-outline-primary rounded">
                    </div>
                </div>
            </form><!-- end of contact form -->
        </div><!-- end of container -->
    </section><!-- end of contact section -->

    <!-- footer -->
    <div class="container">
        <footer class="footer">
            <p class="mb-0">Copyright
                <script>document.write(new Date().getFullYear())</script> &copy; <a
                    href="">All Rights</a> Reserved By <a
                    href="#">Shahidul Islam Khan</a>
            </p>
            <div class="social-links text-right m-auto ml-sm-auto">
                <a href="javascript:void(0)" class="link"><i class="ti-facebook"></i></a>
                <a href="javascript:void(0)" class="link"><i class="ti-twitter-alt"></i></a>
                <a href="javascript:void(0)" class="link"><i class="ti-instagram"></i></a>
                <a href="javascript:void(0)" class="link"><i class="ti-rss"></i></a>
            </div>
        </footer>
    </div> <!-- end of page footer -->

    <!-- core  -->
    <script src="{{asset('Frontend/vendors/jquery/jquery-3.4.1.js')}}"></script>
    <script src="{{asset('Frontend/vendors/bootstrap/bootstrap.bundle.js')}}"></script>
    <!-- bootstrap 3 affix -->
    <script src="{{asset('Frontend/vendors/bootstrap/bootstrap.affix.js')}}"></script>
    <!-- Meyawo js -->
    <script src="{{asset('Frontend/js/meyawo.js')}}"></script>

</body>
</html>