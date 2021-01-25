@extends('layouts.app')

@section('pagename')
Welcome to ElevenLux
@endsection

@section('content')
<div class="container">
    <!-- <div class="mt-md-5 pt-lg-2"></div> -->

    <!-- ======= Hero Section ======= -->
    <div id="hero" class="d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">Grow with us at ElevenLux</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">
                        Team of talented recruiters who are here to change the way you look at recruitment.
                    </h2>
                    <div data-aos="fade-up" data-aos-delay="800">
                        <a href="#about" class="btn-get-started scrollto">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
                    <img src="{{ asset('img/hero-img.png') }}" class="img-fluid animated" height="100%" alt="" />
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero -->

    <main id="main">
        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>About Us</h2>
                </div>

                <div class="row content">
                    <div class="col" data-aos="fade-up" data-aos-delay="150">
                        <p class="px-2">
                            With over ten years of sales and recruitment experience,
                            ElevenLux is an agency that specialises in Sales, Marketing and
                            Back office roles. We were created to offer support for
                            jobseekers and job providers with innovative and cost-effective
                            solutions. Having sat on both sides of the fence, ElevenLux
                            understands that providing a pain-free recruitment service is
                            priceless therefore we have created innovative and cost
                            effective solutions to help businesses.
                            <br />
                            <br />
                            We deliver a range of
                            recruitment services which include TheElevenLux and PayRecruit
                            which are two unique services that can be custom made to fit all
                            budget requirements. For further information please email us on
                            support@elevenlux.co.uk and a member of our wonderful team will
                            contact you.
                        </p>
                        <div class="text-center">
                            <a href="#services" class="btn-learn-more">Our Services
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Us Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container">
                <div class="row">
                    <div class="image col-xl-5 d-flex justify-content-center justify-content-xl-start" data-aos="fade-right" data-aos-delay="150">
                        <img src="{{ asset('img/counts-img.png') }}" alt="" class="img-fluid" />
                    </div>

                    <div class="col-xl-7 d-flex align-items-stretch pt-4 pt-xl-0" data-aos="fade-left" data-aos-delay="300">
                        <div class="content d-flex flex-column justify-content-center">
                            <div class="row">
                                <div class="col-md-6 d-md-flex align-items-md-stretch">
                                    <div class="count-box">
                                        <i class="icofont-bag-alt"></i>
                                        <span data-toggle="counter-up">35</span>
                                        <p class="text-justify">
                                            <strong>Employers</strong> have reached out globally for our services.
                                        </p>
                                    </div>
                                </div>

                                <div class="col-md-6 d-md-flex align-items-md-stretch">
                                    <div class="count-box">
                                        <i class="icofont-document-folder"></i>
                                        <span data-toggle="counter-up" class="ml-3" style="float: left;">200</span> <span>+</span>
                                        <p class="text-justify">
                                            <strong>Candidates</strong> placed within roles.
                                        </p>
                                    </div>
                                </div>

                                <div class="col-md-6 d-md-flex align-items-md-stretch">
                                    <div class="count-box">
                                        <i class="icofont-clock-time"></i>
                                        <span data-toggle="counter-up" class="ml-3" style="float: left;">10</span> <span>+</span>
                                        <p class="text-justify">
                                            <strong>Years of experience</strong> in sales and recruitment.
                                        </p>
                                    </div>
                                </div>

                                <div class="col-md-6 d-md-flex align-items-md-stretch">
                                    <div class="count-box">
                                        <i class="icofont-money"></i>
                                        <span class="ml-3" style="float: left;">£</span> <span data-toggle="counter-up" class="m-0" style="float: left;">100000</span> <span>+</span>
                                        <p class="text-justify">
                                            <strong>Revenue</strong> saved for clients.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End .content-->
                    </div>
                </div>
            </div>
        </section>
        <!-- End Counts Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">
                <div.cont class="section-title" data-aos="fade-up">
                    <h2>Services</h2>
                    </div.container>

                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 d-flex align-items-stretch mt-4">
                                <div class="card" style="background-image: url('{{ asset('img/services-4.jpg') }}')" data-aos="fade-up" data-aos-delay="200">
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="">Employers</a></h5>
                                        <p class="card-text">
                                            We help you find the best talent in the market whilst helping you keep cost's low....
                                        </p>
                                        <div class="read-more">
                                            <a href="{{ url('/services') }}"><i class="icofont-arrow-right"></i> Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 d-flex align-items-stretch mt-4">
                                <div class="card" style="background-image: url('{{ asset('img/services-3.jpg') }}')" data-aos="fade-up" data-aos-delay="100">
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="">Jobseekers</a></h5>
                                        <p class="card-text">
                                            Let us help you find your dream job...
                                        </p>
                                        <div class="read-more">
                                            <a href="{{ url('/candidates') }}"><i class="icofont-arrow-right"></i> Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </section>
        <!-- End More Services Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>Testimonials</h2>
                </div>

                <div class="owl-carousel testimonials-carousel" data-aos="fade-up" data-aos-delay="200">
                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                            <h3>Website Personalisation Manager for Webeo</h3>
                            <h4></h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                I came into contact with Mills when applying for a marketing
                                assistant role. He was amazing at helping me secure my dream
                                position. Mills is great at building rapport and making you
                                feel at ease. Anything I needed he was there and so helpful.
                                Friendly yet professional. Couldn’t recommend him enough
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>

                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                            <h3>Business Development Manager at BTP
                            </h3>
                            <h4></h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Having worked with Mills for a number of years he has always stood out as being committed to
                                recruitment, both in finding the best talent and matching individuals to the best suited roles. His
                                enthusiasm always shines through as well as his professionalism. Any candidates he has worked with
                                have always spoken highly of him, which is a testament to the fact he has looked after them well. I
                                have seen first hand how much individuals have flourished in their roles as a result of Mills'
                                recruitment and can't recommend him enough
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>

                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                            <h3>Senior Ad Operations Executive at News UK</h3>
                            <h4></h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Mills is a top recruiting professional that was fundamental in the process of starting my
                                collaboration with Centaur Media. His helpful and approachable manner made the experience as stress
                                free as possible and his enthusiasm revealed passion and dedication for his role. I definitely
                                recommend reaching out to him for his top professionalism and friendly nature
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>

                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                            <h3>Sales Executive at MarketMakers</h3>
                            <h4></h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Mills was brilliant in helping me secure my first role at MarketMakers. Overall through the whole
                                interview process he helped every step of the way and made the interviews both enjoyable and simple.
                                Since MarketMakers unfortunately ended he has been extremely helpful in helping me secure a new
                                position and was always recommending me positions available. Please contact Mills for any help you
                                need in finding new positions
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Testimonials Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>Contact Us</h2>
                </div>

                <div class="row">
                    <div class="col-md-6 mt-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="info text-center">
                            <div>
                                <i class="ri-map-pin-line"></i>
                                <p>Portsmouth, Hampshire, UK</p>
                            </div>

                            <div>
                                <i class="ri-mail-send-line"></i>
                                <p>Mills@elevenlux.co.uk</p>
                            </div>

                            <div>
                                <i class="ri-phone-line"></i>
                                <p>(+44) 0723 704 076</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="mb-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">
                                    Your message has been sent. Thank you!
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Section -->
    </main>
    <!-- End #main -->
</div>
@endsection