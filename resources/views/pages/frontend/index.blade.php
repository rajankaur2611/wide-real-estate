@extends('layouts/frontend/default')
@section('styles')
    <link rel="stylesheet" href="{{ url('assets/css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/slick.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/slick.min.css.map') }}">
    @vite(['resources/scss/home.scss'])
@endsection
@section('content')
    <main>
        <section class="hero-banner fade-down-smooth">
            <div class="hero-content">
                <div class="hero-slider">
                    <div class="hero-slides">
                        <div class="main-slide main-slide-image-1">
                            <h1 id="abc" class="scale">Discover Your Perfect Property with Us</h1>
                        </div>
                        <div class="main-slide main-slide-image-2">
                            <h1>Find your dream home here</h1>
                        </div>
                        <div class="main-slide main-slide-image-3">
                            <h1>Let us find your dream land</h1>
                        </div>
                        <div class="main-slide main-slide-image-4">
                            <h1>Come here for your best purchase</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="sponsers padding-y fade-up">
            <div class="sponsers-content">
                <div class="sponsers-slider">
                    <a href="/contact" class="sponser-slide">
                        <div class="slide-content">
                            <img src="{{ url('images/PRESTIGE.png') }}" alt="sponser slide image">
                        </div>
                    </a>
                    <a href="/contact" class="sponser-slide">
                        <div class="slide-content">
                            <img src="{{ url('images/Lodha.png') }}" alt="sponser slide image">
                        </div>
                    </a>
                    <a href="/contact" class="sponser-slide">
                        <div class="slide-content">
                            <img src="{{ url('images/DLF.png') }}" alt="sponser slide image">
                        </div>
                    </a>
                    <a href="/contact" class="sponser-slide">
                        <div class="slide-content">
                            <img src="{{ url('images/brigade.png') }}" alt="sponser slide image">
                        </div>
                    </a>
                    <a href="/contact" class="sponser-slide">
                        <div class="slide-content">
                            <img src="{{ url('images/OBEROIRLTY.png') }}" alt="sponser slide image">
                        </div>
                    </a>
                    <a href="/contact" class="sponser-slide">
                        <div class="slide-content">
                            <img src="{{ url('images/DLF.png') }}" alt="sponser slide image">
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <section class="featured-properties fade-up">
            <div class="featured-properties-content container">
                <div class="sec-heading">
                    <h2>our featured properties</h2>
                </div>
                <div class="properties-slider">
                    <div class="property-slider">
                        <div class="property-slide-content fade-left">
                            <div class="property-slide-header">
                                <img src="{{ url('images/featured-prop-1.webp') }}" alt="property image">
                            </div>
                            <div class="property-slide-body">
                                <h3>Anwa by Omniyat</h3>
                                <p>Developed By Al Habtoor City Real Estate Development</p>
                                <span class="location">
                                    
                                    {{-- <i class="fa-solid fa-location-dot"></i> dubai maritime city --}}
                                    <a href="#"><img src="{{ url('images/location.png') }}" alt="" width="20px">dubai maritime city</a>
                                </span>
                                <div class="amenities">
                                    <ul>
                                        <li>1</li>
                                        <li>2</li>
                                        <li>3</li>
                                        <li>5</li>
                                    </ul>
                                    <span>- bedrooms</span>
                                </div>
                                <div class="status">
                                    status :<span> off plan</span>
                                </div>
                                <div class="price">
                                    <strong> price : <span><i class="fa-solid fa-indian-rupee-sign"></i> 100
                                            Cr</span></strong>
                                </div>
                            </div>
                            <div class="property-slide-footer">
                                <a class="btn-primary" href="/contact">request info</a>
                                <a class="btn-secondary" href="/contact">view more</a>
                            </div>
                        </div>
                    </div>
                    <div class="property-slider">
                        <div class="property-slide-content fade-down">
                            <div class="property-slide-header">
                                <img src="{{ url('images/featured-prop-1.webp') }}" alt="property image">
                            </div>
                            <div class="property-slide-body">
                                <h3>Verde by sobha</h3>
                                <p>Developed By Al Habtoor City Real Estate Development</p>
                                <span class="location">
                                    {{-- <i class="fa-solid fa-location-dot"></i> dubai maritime
                                    city --}}
                                    <a href="#"><img src="{{ url('images/location.png') }}" alt="" width="20px">dubai maritime city</a>
                                </span>
                                <div class="amenities">
                                    <ul class="bed-bth">
                                        <li>1</li>
                                        <li>2</li>
                                        <li>3</li>
                                        <li>5</li>
                                    </ul>
                                    <span>- bedroom</span>
                                </div>
                                <div class="status">
                                    status :<span>off plan</span>
                                </div>
                                <div class="price">
                                    <strong>price : <span>98 lacs</span></strong>
                                </div>
                            </div>
                            <div class="property-slide-footer">
                                <a class="btn-primary" href="/contact">request info</a>
                                <a class="btn-secondary" href="/contact">view more</a>
                            </div>
                        </div>
                    </div>
                    <div class="property-slider">
                        <div class="property-slide-content fade-right">
                            <div class="property-slide-header">
                                <img src="{{ url('images/featured-prop-1.webp') }}" alt="property image">
                            </div>
                            <div class="property-slide-body">
                                <h3>Sobha heartland villas</h3>
                                <p>Developed By Al Habtoor City Real Estate Development</p>
                                <span class="location">
                                    {{-- <i class="fa-solid fa-location-dot"></i> dubai maritime
                                    city --}}
                                    <a href="#"><img src="{{ url('images/location.png') }}" alt="" width="20px">dubai maritime city</a>
                                </span>
                                <div class="amenities">
                                    <ul class="bed-bth">
                                        <li>1</li>
                                        <li>2</li>
                                        <li>3</li>
                                        <li>5</li>
                                    </ul>
                                    <span>- bedroom</span>
                                </div>
                                <div class="status">
                                    status :<span>off plan</span>
                                </div>
                                <div class="price">
                                    <strong>price : <span>37 Cr</span></strong>
                                </div>
                            </div>
                            <div class="property-slide-footer">
                                <a class="btn-primary" href="/contact">request info</a>
                                <a class="btn-secondary" href="/contact">view more</a>
                            </div>
                        </div>
                    </div>
                    <div class="property-slider">
                        <div class="property-slide-content">
                            <div class="property-slide-header">
                                <img src="{{ url('images/featured-prop-1.webp') }}" alt="property image">
                            </div>
                            <div class="property-slide-body">
                                <h3>Anwa by Omniyat</h3>
                                <p>Developed By Al Habtoor City Real Estate Development</p>
                                <span class="location">
                                    {{-- <i class="fa-solid fa-location-dot"></i> dubai maritime
                                    city --}}
                                    <a href="#"><img src="{{ url('images/location.png') }}" alt="" width="20px">dubai maritime city</a>
                                </span>
                                <div class="amenities">
                                    <ul class="bed-bth">
                                        <li>1</li>
                                        <li>2</li>
                                        <li>3</li>
                                        <li>5</li>
                                    </ul>
                                    <span>- bedroom</span>
                                </div>
                                <div class="status">
                                    status :<span>off plan</span>
                                </div>
                                <div class="price">
                                    <strong>price : <span>100 Cr</span></strong>
                                </div>
                            </div>
                            <div class="property-slide-footer">
                                <a class="btn-primary" href="/contact">reauest info</a>
                                <a class="btn-secondary" href="/contact">view more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="our-services fade-up">
            <div class="our-services-content container">
                <div class="sec-heading">
                    <h2>what we do</h2>
                </div>
                <div class="services-content">
                    <div class="service fade-up">
                        <p class="research">Insights & Research</p>
                        <div class="service-heading">
                            <h3>Deliver market knowledge and global insights</h3>
                        </div>
                        <div class="service-info">
                            <p>Our 500 global researchers offer actionable intelligence and a multi-dimensional perspective
                                that
                                is unparalleled in the industry.</p>
                            <a class="btn-secondary" href="#">Explore Insights & Research</a>
                        </div>
                    </div>
                    <div class="service fade-up">
                        <p>Services</p>
                        <div class="service-heading">
                            <h3>Create the real estate solutions of tomorrow</h3>
                        </div>
                        <div class="service-info">
                            <ul>
                                <p>Let's help you:</p>
                                <li>Invest in real estate</li>
                                <li>Plan, lease & occupy</li>
                                <li>Design & build</li>
                                <li>Manage properties & portfolios</li>
                                <li>Transform business outcomes</li>
                            </ul>
                            <a class="btn-secondary" href="#">Explore services</a>
                        </div>
                    </div>
                    <div class="service fade-up">
                        <p>Careers</p>
                        <div class="service-heading">
                            <h3>join us</h3>
                        </div>
                        <div class="service-info">
                            <p>We don't just realise the potential in real estate. We help you realise your potential.</p>
                            <a class="btn-secondary" href="#">Explore Careers</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- <section class="video">
            <div class="video-content">
                <video width="" height="" controls muted>
                    <source src="{{ url('videos/Real_Estate_Video.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </section> -->

        <!-- <section class="services-feature padding-y">
            <div class="services-feature-content container">
                <div class="sec-heading">
                    <h2>services</h2>
                </div>
                <div class="services-feature-info">
                    <div class="info-headings">
                        <h4>optimize</h4>
                        <p>Get smart with real time data on operations and performance.</p>
                        <ul>
                            <li>engage</li>
                            <li>enhance</li>
                            <li>manage or outsource</li>
                            <li>control</li>
                        </ul>
                    </div>
                    <div class="information">
                        <div class="information-wrapper">
                            <h4>dynamic OP</h4>
                            <p>A revolutionary method to manage dynamic occupancy in the built environment using digitally
                                intense delivery.</p>
                        </div>
                        <div class="information-wrapper">
                            <h4>Smart buildings</h4>
                            <p>Introduce new technology and connect systems to enhance the productivity of buildings,
                                workplaces, and people.</p>
                        </div>
                        <div class="information-wrapper">
                            <h4>Technology optimization</h4>
                            <p>Use technology to track and assess every facet of building management.</p>
                        </div>
                        <div class="information-wrapper">
                            <h4>Portfolio planning</h4>
                            <p>Collect and interpret real-time data on your business, markets, locations and workforce.</p>
                        </div>
                        <div class="information-wrapper">
                            <h4>Workplace strategy</h4>
                            <p>Create a vision for your workplace that fosters innovation and improves business performance.
                            </p>
                        </div>
                        <div class="information-wrapper">
                            <h4>Property & asset management</h4>
                            <p>Optimise costs and continuously improve and innovate your property and asset management
                                services through process improvement, deployment of disruptive technologies and changes to
                                operating models.</p>
                        </div>
                        <div class="information-wrapper">
                            <h4>Business intelligence</h4>
                            <p>Bring all your data together with powerful overlays to visualize trends and deliver
                                predictive insights against your real estate performance.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <section class="choose-us padding-y">
            <div class="choose-us-content container">
                <div class="sec-heading fade-left">
                    <h2>why choose us</h2>
                    <p>Wide was founded on the basis of providing solid investment advice on the new-build and off-plan
                        market across the Dubai residential property sector, if that’s an apartment, villa, holiday home,
                        residence or investment, we aim to provide best-in-class customer service.</p>
                </div>
                <div class="choose-feature-wrappers">
                    <div class="choose-feature-wrapper fade-left">
                        <img src="{{ url('images/hand.svg') }}" alt="feature icon">
                        <h5>no additional fees</h5>
                        <p>We help property investors purchase property, we guide you all the way through the process and
                            the best thing of all, it’s a completely FREE service, there is no commission or admin fees</p>
                    </div>
                    <div class="choose-feature-wrapper fade-down">
                        <img src="{{ url('images/Industry_Regulated.svg') }}" alt="feature icon">
                        <h5>Industry Regulated</h5>
                        <p>We are proudly regulated by the Dubai Real Estate Regulatory Authority. Our ORN is 28382. Rest
                            assured you’re dealing with a qualified team with strict standards. </p>
                    </div>
                    <div class="choose-feature-wrapper fade-right">
                        <img src="{{ url('images/Extensive_Due.svg') }}" alt="feature icon">
                        <h5>Extensive Due Diligence</h5>
                        <p>We have a due diligence process to evaluate chosen development companies, aiming to reduce
                            construction risk and boost financial security for our clients.</p>
                    </div>
                    <div class="choose-feature-wrapper fade-left">
                        <img src="{{ url('images/After-Sales.svg') }}" alt="feature icon">
                        <h5>After-Sales Support</h5>
                        <p>Following your purchase, our customer service team are here every step of the way offering
                            construction updates and assistance with site visits, as well as any questions on handover of
                            the property.</p>
                    </div>
                    <div class="choose-feature-wrapper fade-up">
                        <img src="{{ url('images/High_Performing.svg') }}" alt="feature icon">
                        <h5>High Performing</h5>
                        <p>The properties that we focus on are handpicked to ensure above-average rental yields and strong
                            capital growth, an attractive ROI is our core objective, whilst balancing risk.</p>
                    </div>
                    <div class="choose-feature-wrapper fade-right">
                        <img src="{{ url('images/Fully_Managed.svg') }}" alt="feature icon">
                        <h5>Fully Managed</h5>
                        <p>Regardless of whether you’re based in or out of Dubai, we ensure there are property management
                            companies to handle everything on your behalf. Ensuring a hands-off experience.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="safe-workplace padding-y">
            <div class="safe-workplace-content container">
                <div class="safe-workplace-image fade-left">
                    <img src="{{ url('images/safe-workplace.png') }}" alt="image">
                </div>
                <div class="safe-workplace-info fade-right">
                    <div class="sec-heading">
                        <h2>(re)creating safe workplaces</h2>
                        <p>Creating safe workplaces involves developing an environment where employees feel physically,
                            emotionally, and mentally secure. This includes implementing safety protocols, ergonomic
                            designs, and emergency preparedness plans to prevent accidents and health issues.</p>
                        <a class="btn-primary" href="#">know more</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="leadership-culture padding-y fade-up">
            <div class="leadership-culture-content container">
                <div class="leadership-sec-heading fade-down">
                    <h2>A culture of leadership</h2>
                </div>
                <div class="leadership-info fade-up">
                    <p>Landlords are missing out on US$40 billion in unrealised income from aging and underutilised
                        properties in Asia Pacific. Find out how asset enhancement drives business.</p>
                    <a class="btn-primary" href="#">know more</a>
                </div>
            </div>
        </section>

        <section class="globally-trusted padding-y fade-up">
            <div class="globally-trusted-content container">
                <div class="sec-heading fade-down">
                    <h2>trusted by investors globally</h2>
                </div>
                <div class="testimonials fade-up">
                    <div class="testimonials-slider">
                        <div class="testimonioal-slide">
                            <p>The team delivered exceptional quality and efficiency in our commercial construction project.
                                Their attention to detail and commitment to deadlines made all the difference. We are
                                thrilled with the outcome and look forward to working together again.</p>
                            <div class="testimonial-info">
                                {{-- <div class="info-image">
                                    <img src="{{ url('images/testimonial-1.png') }}" alt="image">
                                </div> --}}
                                <div class="info-name">
                                    <h5><span>Rishabh Arora</span> <br> <span> Happy Customer</span></h5>
                                </div>
                            </div>
                        </div>
                        <div class="testimonioal-slide">
                            <p>The team delivered exceptional quality and efficiency in our commercial construction project.
                                Their attention to detail and commitment to deadlines made all the difference. We are
                                thrilled with the outcome and look forward to working together again.</p>
                            <div class="testimonial-info">
                                {{-- <div class="info-image">
                                    <img src="{{ url('images/testimonial-1.png') }}" alt="image">
                                </div> --}}
                                <div class="info-name">
                                    <h5><span>Rishabh Arora</span> <br> <span> Happy Customer</span></h5>
                                </div>
                            </div>
                        </div>
                        <div class="testimonioal-slide">
                            <p>The team delivered exceptional quality and efficiency in our commercial construction project.
                                Their attention to detail and commitment to deadlines made all the difference. We are
                                thrilled with the outcome and look forward to working together again.</p>
                            <div class="testimonial-info">
                                {{-- <div class="info-image">
                                    <img src="{{ url('images/testimonial-1.png') }}" alt="image">
                                </div> --}}
                                <div class="info-name">
                                    <h5><span>Rishabh Arora</span> <br> <span> Happy Customer</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- <section class="query-form">
            <div class="query-form-content container">
                <div class="query-content">

                </div>
            </div>
        </section> --}}

        <section class="insights padding-y">
            <div class="insights-content container">
                <div class="insignts-headings  fade-down">
                    <div class="sec-heading">
                        <h2>trending & insights</h2>
                    </div>
                    <a class="btn-primary" href="#">view all</a>
                </div>
                <div class="insights-blog">
                    <div class="blog-wrapper fade-left">
                        <div class="blog-wrapper-image">
                            <img src="{{ url('images/blog-1.png') }}" alt="blog image">
                        </div>
                        <div class="blog-wrapper-info">
                            <h4>Aliquam feugiat feugiat velit, in viverra nisi vulputate magna metus</h4>
                            <a href="#">read more</a>
                        </div>
                    </div>
                    <div class="blog-wrapper fade-up">
                        <div class="blog-wrapper-image">
                            <img src="{{ url('images/blog-2.png') }}" alt="blog image">
                        </div>
                        <div class="blog-wrapper-info">
                            <h4>Quisque ac dolor lorem lobortis, interdum libero at, dictum odio.</h4>
                            <a href="#">read more</a>
                        </div>
                    </div>
                    <div class="blog-wrapper fade-right">
                        <div class="blog-wrapper-image">
                            <img src="{{ url('images/blog-3.png') }}" alt="blog image">
                        </div>
                        <div class="blog-wrapper-info">
                            <h4>Maecenas tempus, nisl ut gravida posuere urna quis eleifend libero velit</h4>
                            <a href="#">read more</a>
                        </div>
                    </div>
                </div>
                <div class="insights-btn">
                    <a class="btn-primary" href="#">view all</a>
                </div>
            </div>
        </section>

    </main>

@endsection
