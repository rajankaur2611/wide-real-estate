@extends('layouts/frontend/default')
@section('content')
    <main>

        <section class="hero-banner">
            <div class="hero-content">
                <div class="hero-slider">
                    <div class="hero-slides">
                        <div class="main-slide main-slide-image-1">
                            {{-- <img src="{{ url('images/main-slide-1.png') }}" alt="main slide image"> --}}
                            <h1>Discover Your Perfect Property with Us</h1>
                        </div>
                        <div class="main-slide main-slide-image-2">
                            {{-- <img src="{{ url('images/main-slide-2.png') }}" alt="main slide image"> --}}
                        </div>
                        <div class="main-slide main-slide-image-3">
                            {{-- <img src="{{ url('images/main-slide-3.png') }}" alt="main slide image"> --}}
                        </div>
                        <div class="main-slide main-slide-image-4">
                            {{-- <img src="{{ url('images/main-slide-4.png') }}" alt="main slide image"> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="sponsers padding-y">
            <div class="sponsers-content">
                <div class="sponsers-slider">
                    <div class="sponser-slide">
                        <div class="slide-content">
                            {{-- <img src="{{ url('images/DLF.png') }}" alt="sponser slide image"> --}}
                            <img src="{{ url('images/PRESTIGE.png') }}" alt="sponser slide image">
                        </div>
                    </div>
                    <div class="sponser-slide">
                        <div class="slide-content">
                            <img src="{{ url('images/Lodha.png') }}" alt="sponser slide image">
                        </div>
                    </div>
                    <div class="sponser-slide">
                        <div class="slide-content">
                            <img src="{{ url('images/DLF.png') }}" alt="sponser slide image">
                            {{-- <img src="{{ url('images/PRESTIGE.png') }}" alt="sponser slide image"> --}}
                        </div>
                    </div>
                    <div class="sponser-slide">
                        <div class="slide-content">
                            <img src="{{ url('images/brigade.png') }}" alt="sponser slide image">
                        </div>
                    </div>
                    <div class="sponser-slide">
                        <div class="slide-content">
                            <img src="{{ url('images/OBEROIRLTY.png') }}" alt="sponser slide image">
                        </div>
                    </div>
                    <div class="sponser-slide">
                        <div class="slide-content">
                            <img src="{{ url('images/DLF.png') }}" alt="sponser slide image">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="featured-properties">
            <div class="featured-properties-content container">
                <div class="sec-heading">
                    <h2>our featured properties</h2>
                </div>
                <div class="properties-slider">
                    <div class="property-slider">
                        <div class="property-slide-content">
                            <div class="property-slide-header">
                                <img src="{{ url('images/featured-prop-1.png') }}" alt="property image">
                            </div>
                            <div class="property-slide-body">
                                <h4>Anwa by Omniyat</h4>
                                <p>Developed By Al Habtoor City Real Estate Development</p>
                                <span class="location">
                                    <i class="fa-solid fa-location-dot"></i> dubai maritime
                                    city
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
                                <a class="btn-primary" href="#">reauest info</a>
                                <a class="btn-secondary" href="#">view more</a>
                            </div>
                        </div>
                    </div>
                    <div class="property-slider">
                        <div class="property-slide-content">
                            <div class="property-slide-header">
                                <img src="{{ url('images/featured-prop-1.png') }}" alt="property image">
                            </div>
                            <div class="property-slide-body">
                                <h4>Anwa by Omniyat</h4>
                                <p>Developed By Al Habtoor City Real Estate Development</p>
                                <span class="location">
                                    <i class="fa-solid fa-location-dot"></i> dubai maritime
                                    city
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
                                <a class="btn-primary" href="#">reauest info</a>
                                <a class="btn-secondary" href="#">view more</a>
                            </div>
                        </div>
                    </div>
                    <div class="property-slider">
                        <div class="property-slide-content">
                            <div class="property-slide-header">
                                <img src="{{ url('images/featured-prop-1.png') }}" alt="property image">
                            </div>
                            <div class="property-slide-body">
                                <h4>Anwa by Omniyat</h4>
                                <p>Developed By Al Habtoor City Real Estate Development</p>
                                <span class="location">
                                    <i class="fa-solid fa-location-dot"></i> dubai maritime
                                    city
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
                                <a class="btn-primary" href="#">reauest info</a>
                                <a class="btn-secondary" href="#">view more</a>
                            </div>
                        </div>
                    </div>
                    <div class="property-slider">
                        <div class="property-slide-content">
                            <div class="property-slide-header">
                                <img src="{{ url('images/featured-prop-1.png') }}" alt="property image">
                            </div>
                            <div class="property-slide-body">
                                <h4>Anwa by Omniyat</h4>
                                <p>Developed By Al Habtoor City Real Estate Development</p>
                                <span class="location">
                                    <i class="fa-solid fa-location-dot"></i> dubai maritime
                                    city
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
                                <a class="btn-primary" href="#">reauest info</a>
                                <a class="btn-secondary" href="#">view more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- <section class="our-services padding-y">
            <div class="our-services-content container">
                <div class="sec-heading">
                    <h2>what we do</h2>
                </div>
                <div class="services-content">
                    <div class="service">
                        <div class="service-heading">
                            <p>Insights & Research</p>
                            <h3>Deliver market knowledge and global insights </h3>
                        </div>
                        <div class="service-info">
                            <p>Our 500 global researchers offer actionable intelligence and a multi-dimensional perspective
                                that
                                is unparalleled in the industry.</p>
                            <a class="btn-primary" href="#">Explore Insights & Research</a>
                        </div>
                    </div>
                    <div class="service">
                        <div class="service-heading">
                            <p>Services</p>
                            <h3>Create the real estate solutions of tomorrow </h3>
                        </div>
                        <div class="service-info">
                            <p>Our 500 global researchers offer actionable intelligence and a multi-dimensional perspective
                                that
                                is unparalleled in the industry.</p>
                            <a class="btn-primary" href="#">Explore Insights & Research</a>
                        </div>
                    </div>
                    <div class="service">
                        <div class="service-heading">
                            <p>Insights & Research</p>
                            <h3>Deliver market knowledge and global insights </h3>
                        </div>
                        <div class="service-info">
                            <p>Our 500 global researchers offer actionable intelligence and a multi-dimensional perspective
                                that
                                is unparalleled in the industry.</p>
                            <a class="btn-primary" href="#">Explore Insights & Research</a>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

        {{-- <section class="video padding-y">
            <div class="video-content">
                <video width="" height="" controls muted>
                    <source src="{{ url('videos/Real_Estate_Video.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </section> --}}

        <section class="choose-us padding-y">
            <div class="choose-us-content container">
                <div class="sec-heading">
                    <h2>why choose us</h2>
                    <p>Wide was founded on the basis of providing solid investment advice on the new-build and off-plan
                        market across the Dubai residential property sector, if that’s an apartment, villa, holiday home,
                        residence or investment, we aim to provide best-in-class customer service.</p>
                </div>
                <div class="choose-feature-wrappers">
                    <div class="choose-feature-wrapper">
                        <img src="{{ url('images/hand.svg') }}" alt="feature icon">
                        <h4>no additional fees</h4>
                        <p>We help property investors purchase property, we guide you all the way through the process and
                            the best thing of all, it’s a completely FREE service, there is no commission or admin fees</p>
                    </div>
                    <div class="choose-feature-wrapper">
                        <img src="{{ url('images/hand.svg') }}" alt="feature icon">
                        <h4>no additional fees</h4>
                        <p>We help property investors purchase property, we guide you all the way through the process and
                            the best thing of all, it’s a completely FREE service, there is no commission or admin fees</p>
                    </div>
                    <div class="choose-feature-wrapper">
                        <img src="{{ url('images/hand.svg') }}" alt="feature icon">
                        <h4>no additional fees</h4>
                        <p>We help property investors purchase property, we guide you all the way through the process and
                            the best thing of all, it’s a completely FREE service, there is no commission or admin fees</p>
                    </div>
                    <div class="choose-feature-wrapper">
                        <img src="{{ url('images/hand.svg') }}" alt="feature icon">
                        <h4>no additional fees</h4>
                        <p>We help property investors purchase property, we guide you all the way through the process and
                            the best thing of all, it’s a completely FREE service, there is no commission or admin fees</p>
                    </div>
                    <div class="choose-feature-wrapper">
                        <img src="{{ url('images/hand.svg') }}" alt="feature icon">
                        <h4>no additional fees</h4>
                        <p>We help property investors purchase property, we guide you all the way through the process and
                            the best thing of all, it’s a completely FREE service, there is no commission or admin fees</p>
                    </div>
                    <div class="choose-feature-wrapper">
                        <img src="{{ url('images/hand.svg') }}" alt="feature icon">
                        <h4>no additional fees</h4>
                        <p>We help property investors purchase property, we guide you all the way through the process and
                            the best thing of all, it’s a completely FREE service, there is no commission or admin fees</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="safe-workplace">
            <div class="safe-workplace-content container">
                <div class="safe-workplace-image">
                    <img src="{{ url('images/safe-workplace.png') }}" alt="image">
                </div>
                <div class="safe-workplace-content">
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

        {{-- <section class="leadership-culture padding-y">
          <div class="leadership-culture-content container"></div>
        </section> --}}

        <section class="globally-trusted padding-y">
            <div class="globally-trusted-content container">
                <div class="sec-heading">
                    <h2>trusted by investors globally</h2>
                </div>
                <div class="testimonials">
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
                                    <h5><span>Rishabh Arora</span> <span> Happy Customer</span></h5>
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
                                    <h5><span>Rishabh Arora</span> <span> Happy Customer</span></h5>
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
                                    <h5><span>Rishabh Arora</span> <span> Happy Customer</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="footer padding-y">
            <div class="footer-content container">
                <div class="sec-heading">
                    <h2>contact us</h2>
                    <p>We are here for you, always, even when you just want to ask question.</p>
                    <p>Thank you for trusting us all the way to the key. to the apartment of your dreams.</p>
                    <a class="btn-primary" href="#">explore insights & research</a>
                </div>
                <div class="footer-below">
                  <div class="footer-below-content"></div>
                </div>
            </div>
        </footer>

    </main>
@endsection
