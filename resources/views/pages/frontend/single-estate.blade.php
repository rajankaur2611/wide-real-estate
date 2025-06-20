@extends('layouts/frontend/default')
@section('styles')
<link rel="stylesheet" href="{{ url('assets/css/slick-theme.css') }}">
<link rel="stylesheet" href="{{ url('assets/css/slick.min.css') }}">
<link rel="stylesheet" href="{{ url('assets/css/slick.min.css.map') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@vite(['resources/scss/single_estate.scss'])
@endsection
@section('content')
    <main>
         <div class="property-detail-page">

            <div class="enquire-popup-overlay">
                <div class="enquire-popup">
                    <div class="popup-closer">
                        <i class="fa-solid fa-xmark"></i>
                    </div>
                    <div class="pop-up-content">
                        <div class="popup-image">
                        <img src="{{ url('images/safe-workplace.png') }}" alt="image">
                        </div>
                        <div class="contact-form">
                          <form method="post" id="contact" action="{{ route('contact-submit') }}">
                            @csrf
                            <div class="heading">
                                <p>What are you looking for?</p>
                                <div class="property-type">
                                    <div class="item-name">
                                    <p> <input type="radio" name="property_type" id="contact_property_type" value="villa"> </p>
                                    <p><label for="villa">Villa</label></p>
                                    </div>
                                    <div class="item-name">
                                    <p><input type="radio" name="property_type" id="contact_property_type" value="apartment"></p>
                                    <p><label for="apartment">apartment</label></p>
                                    </div>
                                    <div class="item-name">
                                    <p> <input type="radio" name="property_type" id="contact_property_type" value="comercial"></p>
                                    <p> <label for="comerical">comerical</label></p>
                                    </div>
                                </div>
                            </div>
                            <div class="input-item input-item-name">
                                <label for="name">full name</label>
                                <input type="text" name="name" id="contact_name" fdprocessedid="gk9oy7">
                            </div>
                            <div class="user-info">
                                <div class="input-item input-item-email">
                                    <label for="email">email address <span>*</span></label>
                                    <input type="email" name="email" id="contact_email" required="" fdprocessedid="zmuie8">
                                </div>
                                <div class="input-item input-item-phone">
                                    <label for="number">phone number <span>*</span></label>
                                    <input type="number" name="number" id="contact_number" fdprocessedid="w646s">
                                </div>
                            </div>
                            <div class="input-item input-item-message">
                                <label for="message">message (optional)</label>
                                <textarea name="message" id="contact_message" cols="30" rows="5"></textarea>
                            </div>
                            <div class="input-item input-item-submit">
                                <button type="submit" class="btn-primary" fdprocessedid="vb68mb">submit</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>

            <section class="single-property-detail ">
                <div class="single-property-detail-data">
                    <div class="single-property-detail-slider">
                        <!-- <div class="single-property-detail-slide">
                            <div class="single-property-detail-slide-content">
                                <div class="single-property-detail-slide-image">                        
                                    <img src="{{ url('https://images.pexels.com/photos/3709404/pexels-photo-3709404.jpeg') }}" alt="image">
                                </div>
                            </div>
                        </div> -->
                        @if($images->isEmpty())
                        <div class="single-property-detail-slide">
                            <div class="single-property-detail-slide-content">
                                <div class="single-property-detail-slide-image">                        
                                    <img src="{{ url('https://images.pexels.com/photos/3288102/pexels-photo-3288102.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                        @else
                        @foreach($images as $image)
                        <div class="single-property-detail-slide">
                            <div class="single-property-detail-slide-content">
                                <div class="single-property-detail-slide-image">                        
                                    <img src="{{ url('images/large/'.$image->image) }}" alt="image">
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                    <div class="single-property-detail">
                        <div class="single-property-detail-content">
                        <div class="heading">
                        <h3>@if($project->title){{$project->title}}@endif</h3>
                        <p><span>by</span> <span class="owner"><a href="#">Mapsko Builders</a></span></p>
                        </div>
                        <div class="location">
                            <span><i class="fa-solid fa-location-dot"></i></span><span>sector 18, chandigarh</span>
                        </div>
                        <ul class="amenities">
                            <li>
                                <div><i class="fa-solid fa-building"></i></div>
                                <div>property type: @if($project->category == '1'){{'Residential'}}@elseif($project->category == '2'){{'Commercial'}}@elseif($project->category == '3'){{'Farmhouse/Villas'}}@elseif($project->category == '4'){{'Investments'}}@endif</div>
                            </li>
                            <!-- <li>
                                <div><i class="fa-solid fa-circle-notch"></i></div>
                                <div>status: booking open</div>
                            </li> -->
                            <li>
                                <div><i class="fa-solid fa-coins"></i></div>
                                <div>@if($project->price){{$project->price}}@endif</div>
                            </li>
                            <li>
                                <div><i class="fa-solid fa-maximize"></i></div>
                                <div>Size: 1,490 - 2,710 sq ft</div>
                            </li>
                            <li>
                                best deal guaranteed
                            </li>
                        </ul>
                        <div class="btn">
                            <a class="btn-primary enquire-now" >enquire now</a>
                        </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="overview padding-y">
                <div class="overview-content container">
                    <h2>overview</h2>
                    <div class="overview-features">
                        <div class="features-text">
                        <p>@if($project->description){{$project->description}}@endif</p>
                        </div>
                        <!-- <div class="feature-items">
                            <h4>features</h4>
                            <ul>
                                <li>Luxurious Resort Living </li>
                            <li>3 Golf Courses in Nearby Location</li>
                            <li>Easy Connectivity With SPR, NPR and NH8</li>
                            <li>Architect Hafeez Contractor</li>
                            <li>Landscape Design by LSG INC USA</li>
                            <li>Structure Raised by Shapoorji Pallonji</li>
                            <li>Exclusive Terrace Apartments</li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection
@section('js')
    @vite(['resources/js/contact.js'])
@endsection