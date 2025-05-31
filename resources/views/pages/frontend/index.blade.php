@extends('layouts/frontend/default') 
@section('styles')
<meta name="csrf_token" id="csrf-token" content="{{ csrf_token() }}" /> 
<link rel="stylesheet" href="{{ url('assets/css/slick-theme.css') }}">
<link rel="stylesheet" href="{{ url('assets/css/slick.min.css') }}">
<link rel="stylesheet" href="{{ url('assets/css/slick.min.css.map') }}">

@vite(['resources/scss/home.scss']) @endsection 
@section('content')
<main>
    <div class="contact">
        <div>
        <a href="https://web.whatsapp.com/"  target="_blank">
        <div class="contact-image"><img src="{{ url('images/whatsapp.png') }}" alt="image"></div>
        <div class="contact-text">contact via <br> whatsapp</div>
        </a>
        </div>
    </div>
    <section class="hero-banner fade-down-smooth">
        <div class="hero-content">
            <div class="hero-slider">
                <div class="hero-slides">
                    <div class="main-slide main-slide-image-1">
                        <div class="residential-image">                        
                            <img src="{{ url('https://images.pexels.com/photos/3709404/pexels-photo-3709404.jpeg') }}" alt="image">
                        </div>
                        <div class="commercial-image">
                            <img src="{{ url('https://images.pexels.com/photos/3288102/pexels-photo-3288102.png') }}" alt="image">
                        </div>
                    </div>
                    <div class="main-slide main-slide-image-2">
                        <div class="residential-image"> 
                            <img src="{{ url('https://images.pexels.com/photos/3288102/pexels-photo-3288102.png') }}" alt="image">                    
                        </div>
                        <div class="commercial-image">
                            <img src="{{ url('https://images.pexels.com/photos/3709404/pexels-photo-3709404.jpeg') }}" alt="image">
                        </div>
                    </div>
                    <div class="main-slide main-slide-image-3">
                        <div class="residential-image">                        
                            <img src="{{ url('https://images.pexels.com/photos/3709404/pexels-photo-3709404.jpeg') }}" alt="image">
                        </div>
                        <div class="commercial-image">
                            <img src="{{ url('https://images.pexels.com/photos/3288102/pexels-photo-3288102.png') }}" alt="image">
                        </div>
                    </div>
                    <div class="main-slide main-slide-image-4">
                        <div class="residential-image"> 
                            <img src="{{ url('https://images.pexels.com/photos/3288102/pexels-photo-3288102.png') }}" alt="image">                    
                        </div>
                        <div class="commercial-image">
                            <img src="{{ url('https://images.pexels.com/photos/3709404/pexels-photo-3709404.jpeg') }}" alt="image">
                        </div>
                    </div>
                </div>
                <div class="main-btns">
                    <a class="btn-primary" href="{{url('/our-project/residential')}}">residential</a>
                    <a class="btn-primary" href="{{url('/our-project/commercial')}}">commercial</a>
                </div>
            </div>
        </div>
    </section>
    <section class="sponsers padding-y fade-up">
        <div class="sec-heading">
            <h2>Top real estate Developers</h2>
        </div>
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

    <section class="about-us padding-y fade-up">
        <div class="about-us-content container">
            <!-- <div class="about-us-image fade-left">
                <img src="{{ url('images/safe-workplace.png') }}" alt="image">
            </div> -->
            <div class="about-us-info ">
                <div class="sec-heading">
                    <p>welcome to</p>
                    <h2>wide real estate</h2>
                    <p><strong><a href="#">wide real estate</a></strong> is Mohali's leading real estate agency taking care of your dreams and your dreamlands. Establish in 2020 having a broad range of property services across various types of real estate, including residential, commercial, and industrial properties. These agencies often have an extensive portfolio of listings, catering to different client needs, whether it's buying, selling, renting, or property management. </p>
                    <p><strong>Creating safe workplaces involves</strong> developing an environment where employees feel physically, emotionally, and mentally secure. This includes implementing safety protocols, ergonomic designs, and emergency preparedness plans to prevent
                        accidents and health issues.</p>
                </div>
                <div class="about-btn">
                <a class="btn-primary" href="#">know more</a>
                </div>
            </div>
        </div>
    </section>

    <section class="featured-properties padding-y">
        <div class="featured-properties-content container">
            <div class="sec-heading">
                <h2>our featured properties</h2>
                <p>Check out some of our listed properties</p>
            </div>
            <div class="property-type">
                <ul>
                    <li data-type="residential" data-category="1">Residential</li>
                    <li data-type="commercial" data-category="2">Commercial</li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="content" id="residential">
                    <div class="properties-slider"></div>
                </div>
                
                <div class="clone-data" style="display:none">
                    <div class="property-slider">
                        <div class="property-slide-content ">
                            <div class="property-slide-header">
                                <img src="{{ url('images/featured-prop-1.webp') }}" alt="property image">
                            </div>
                            <div class="property-slide-body">
                                <div class="property-title">
                                    <h3>Anwa by Omniyat 1</h3>
                                    <p>residential 104, Gurgaon</p>
                                </div>
                                <div class="area">
                                    <div><span>Area :</span><span> 6967 - 8750 sq. ft.  </span></div>
                                    <div>3BHK and 4BHK</div>
                                </div>
                                <div class="property-slider-footer">
                                    <div class="price"><strong><span>60.00Lacs - 90.00Lac</span></strong></div>
                                    <div class="button"><a class="btn-secondary" href="/project/commerical/1">view detail &nbsp; 
                                    <span class="arrow">&rarr;</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section>
    <div class="popularareas_wrapper">
        <div class="container popularareas_inner">
            <div class="row">
                <div class="specialityBox "> 
                    <ul class="img-icon">
                        <li><img src="https://www.realtimerealtors.in/user/images/icon/0-prcnt.png" class="figure-img img-fluid rounded" alt="img"> <strong>Zero <br>
                            Brokerage Fees</strong>
                        </li>
                        <li><img src="https://www.realtimerealtors.in/user/images/icon/lowest-price.png" class="figure-img img-fluid rounded" alt="img"><strong>Lowest Price <br>
                            Guaranteed</strong> </li>
                        <li><img src="https://www.realtimerealtors.in/user/images/icon/market-analysis.png" class="figure-img img-fluid rounded" alt="img"> <strong>Comparative <br>
                            Market Analysis</strong> </li>
                        <li><img src="https://www.realtimerealtors.in/user/images/icon/exclusive-inventory.png" class="figure-img img-fluid rounded" alt="img"> <strong>Exclusive <br>
                            Inventory</strong> </li>
                        <li><img src="https://www.realtimerealtors.in/user/images/icon/project-site-visit.png" class="figure-img img-fluid rounded" alt="img"> <strong>Project <br>
                            Site Visits</strong> </li>
                        <li><img src="https://www.realtimerealtors.in/user/images/icon/post-sale.png" class="figure-img img-fluid rounded" alt="img"> <strong>Post Sales <br>
                            Services</strong> </li>
                        </ul>
                    </div>
            
                </div>
            </div>
        </div>
    </section>
    
    @if($allCats)
    <section class="explore-properties padding-y">
        <div class="explore-properties-content container">
            <div class="sec-heading ">
                <h2>Explore prime properties</h2>
                <p>Explore our prime properties based on your need.</p>
            </div>
            <div class="properties-widgets">
                @foreach($allCats as $cat)
                <div class="property-widget" >
                    <a href="{{url('/our-project/'.$cat['category_name'])}}">
                        <div class="image">
                            <img src="http://localhost:8000/images/featured-prop-1.webp" alt="property image">
                        </div>
                        <div class="content">
                            <h5>{{preg_replace('~-~', ' ', $cat['category_name'])}}</h5>
                            <p>{{$cat['project_count']}} properties</p>
                        </div>
                    </a>
                </div>
                @endforeach
                <!-- <div class="property-widget">
                    <a href="#">
                        <div class="image">
                            <img src="http://localhost:8000/images/featured-prop-1.webp" alt="property image">
                        </div>
                        <div class="content">
                            <h5>ready to move</h5>
                            <p>20 properties</p>
                        </div>
                    </a>
                </div>
                <div class="property-widget">
                    <a href="#">
                        <div class="image">
                            <img src="http://localhost:8000/images/featured-prop-1.webp" alt="property image">
                        </div>
                        <div class="content">
                            <h5>luxury</h5>
                            <p>20 properties</p>
                        </div>
                    </a>
                </div>
                <div class="property-widget">
                    <a href="#">
                        <div class="image">
                            <img src="http://localhost:8000/images/featured-prop-1.webp" alt="property image">
                        </div>
                        <div class="content">
                            <h5>Independent villas</h5>
                            <p>20 properties</p>
                        </div>
                    </a>
                </div>
                <div class="property-widget">
                    <a href="#">
                        <div class="image">
                            <img src="http://localhost:8000/images/featured-prop-1.webp" alt="property image">
                        </div>
                        <div class="content">
                            <h5>Plots</h5>
                            <p>20 properties</p>
                        </div>
                    </a>
                </div>
                <div class="property-widget">
                    <a href="#">
                        <div class="image">
                            <img src="http://localhost:8000/images/featured-prop-1.webp" alt="property image">
                        </div>
                        <div class="content">
                            <h5>commercial</h5>
                            <p>20 properties</p>
                        </div>
                    </a>
                </div> -->
            </div>
        </div>
    </section>
    @endif
    <section class="leadership-culture padding-y fade-up">
        <div class="leadership-culture-content container">
            <div class="leadership-sec-heading fade-down">
                <h2>A culture of leadership</h2>
            </div>
            <div class="leadership-info fade-up">
                <p>Landlords are missing out on US$40 billion in unrealised income from aging and underutilised properties in Asia Pacific. Find out how asset enhancement drives business.</p>
                <a class="btn-primary" href="#">know more</a>
            </div>
        </div>
    </section>

    <section class="news">
        <div class="container padding-y">
            <div class="news-content">
                <div class="latest-news">
                    <h3>latest news</h3>
                    <div class="news-slides">
                        @if($newses)
                        @foreach($newses as $news)
                        <div class="news-widget">
                            <div class="news-image">
                                <img src="https://images.pexels.com/photos/30885924/pexels-photo-30885924/free-photo-of-wooden-letter-tiles-spelling-trash-tv-news.jpeg" alt="img">
                            </div>
                            <div class="news-content">
                                <div class="date">{{date_format($news->created_at,"d M Y")}}</div>
                                <div class="title-content">
                                    <div class="title">{{$news->title}}</div>
                                    <a href="{{$news->link}}" target="_blank">read more &rarr;</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        
                        @endif
                    </div>
                </div>
                <div class="customers-say">
                    <h3>Testimonials</h3>
                    <div class="testimonials">
                        <div class="testimonial-slide">
                            <div class="slide-content">
                            <p class="review">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum nam placeat a vel ex atque vitae dolore odit, debitis sit magni asperiores minima quam odio. Maiores voluptatibus quaerat excepturi facilis.</p>
                            <div class="reviewr">Lorem ipsum</div>
                            <ul class="rating">
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                            </div>
                        </div>
                        <div class="testimonial-slide">
                            <div class="slide-content">
                            <p class="review">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum nam placeat a vel ex atque vitae dolore odit, debitis sit magni asperiores minima quam odio. Maiores voluptatibus quaerat excepturi facilis.</p>
                            <div class="reviewr">Lorem ipsum</div>
                            <ul class="rating">
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                            </div>
                        </div>
                        <div class="testimonial-slide">
                           <div class="slide-content">
                            <p class="review">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum nam placeat a vel ex atque vitae dolore odit, debitis sit magni asperiores minima quam odio. Maiores voluptatibus quaerat excepturi facilis.</p>
                            <div class="reviewr">Lorem ipsum</div>
                            <ul class="rating">
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                           </div>
                        </div>
                    </div> 
                    
                </div>
                <div class="property-blogs">
                    <h3>Important Links</h3>
                    <div class="blog-slides">
                    
                    @if($importantLinks)
                    
                    @foreach($importantLinks as $importantLink)
                        <div class="property-blog-widget">
                            <div class="blog-image">
                                <img src="https://images.pexels.com/photos/30885924/pexels-photo-30885924/free-photo-of-wooden-letter-tiles-spelling-trash-tv-news.jpeg" alt="img">
                            </div>
                            <div class="blog-content">
                                <h5 class="title">{{$importantLink->title}}</h5>
                                <p>{{$importantLink->description}}</p>
                                <a href="{{$news->link}}">read more &rarr;</a>
                            </div>
                        </div>
                    @endforeach
                    @endif    
                    </div>
                        
                </div>
            </div>
        </div>
    </section>

    

    <section class="news padding-y">
        <div class="news-content container "></div>
    </section>

     

</main>
@endsection
@section('js')
    @vite(['resources/js/index.js'])
@endsection