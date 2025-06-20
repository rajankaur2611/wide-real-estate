@extends('layouts/frontend/default')
@section('styles')
    @vite(['resources/scss/contact.scss'])
@endsection
@section('content')
    <main>
        <section class="section-top fade-down-smooth">
            <div class="section-top-content container">
                <div class="top-headings">
                    <p>looking for help?</p>
                    <div class="line"></div>
                    <h1>contact us</h1>
                </div>
                <div class="locate">
                    <a href="/">home</a>
                    <a class="active" href="/contact">contact us</a>
                </div>
            </div>
        </section>

        <!-- <section class="in-touch padding-y">
            <div class="in-touch-content container">
                <div class="contact-form fade-left">
                    <h2>Get in touch</h2>
                    <form method="post" id="contact" action="{{ route('contact-submit') }}">
                        @csrf
                        <div>
                            <p>What are you looking for?</p>
                            <div class="property-type">
                                <div>
                                    <p> <input type="radio" name="property" id="villa" value="villa"> </p>
                                    <p><label for="villa">Villa</label></p>
                                </div>
                                <div>
                                    <p><input type="radio" name="property" id="apartment" value="apartment"></p>
                                    <p><label for="apartment">apartment</label></p>
                                </div>
                                <div>
                                    <p> <input type="radio" name="property" id="comerical" value="comercial"></p>
                                    <p> <label for="comerical">comerical</label></p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label for="name">full name</label>
                            <input type="text" name="name" id="contact_name">
                        </div>
                        <div class="user-info">
                            <div>
                                <label for="email">email address <span>*</span></label>
                                <input type="email" name="email" id="contact_email" required>
                            </div>
                            <div>
                                <label for="number">phone number <span>*</span></label>
                                <input type="number" name="number" id="contact_number">
                            </div>
                        </div>
                        <div>
                            <label for="message">message</label>
                            <textarea name="message" id="contact_message" cols="30" rows="10"></textarea>
                        </div>
                        <div class="submit">
                            <button type="submit" class="btn-primary">submit</button>
                        </div>
                    </form>
                </div>
                <div class="contact-image fade-right">
                    <img src="{{ url('images/contact-form.png') }}" alt="contact image">
                </div>
            </div>
        </section> -->

        <section class="in-touch padding-y">
            <div class="in-touch-content container">
                <div class="get-in-touch fade-left">
                <div class="heading">
                <h2>Get in touch</h2>
                <p>If you’d like to get in touch, send us a message or simply contact us directly using the details below.</p>
                </div>
                <div class="address">
                    <h3>address</h3>
                    <address>SCO 35, Jubilee Junction, Airport road, Sector 66, <br> Sahibzada Ajit Singh Nagar, <br> Punjab 160062</address>
                    <h3>phone</h3>
                    <a href="tel:+9876543211">+91 987 654 3211</a>
                    <h3>email</h3>
                    <a href="mailto:info@widerealestate.in">info@widerealestate.in</a>

                </div>
                

                </div>
                <div class="contact-form fade-right">
                    <form method="post" id="contact" action="{{ route('contact-submit') }}">
                        @csrf
                        <div>
                            <p>What are you looking for?</p>
                            <div class="property-type">
                                <div>
                                    <p> <input type="radio" name="property_type" id="contact_property_type" value="villa"> </p>
                                    <p><label for="villa">Villa</label></p>
                                </div>
                                <div>
                                    <p><input type="radio" name="property_type" id="contact_property_type" value="apartment"></p>
                                    <p><label for="apartment">apartment</label></p>
                                </div>
                                <div>
                                    <p> <input type="radio" name="property_type" id="contact_property_type" value="comercial"></p>
                                    <p> <label for="comerical">comerical</label></p>
                                </div>
                            </div>
                        </div> 
                        <div>
                            <label for="name">full name</label>
                            <input type="text" name="name" id="contact_name">
                        </div>
                        <div class="user-info">
                            <div>
                                <label for="email">email address <span>*</span></label>
                                <input type="email" name="email" id="contact_email" required>
                            </div>
                            <div>
                                <label for="number">phone number <span>*</span></label>
                                <input type="number" name="number" id="contact_number">
                            </div>
                        </div>
                        <div>
                            <label for="message">message</label>
                            <textarea name="message" id="contact_message" cols="30" rows="10"></textarea>
                        </div>
                        <div class="submit">
                            <button type="submit" class="btn-primary">submit</button>
                        </div>
                    </form>
                </div>
                
            </div>
        </section>

        <section class="map fade-up">
            <div class="map-content ">
                <div class="sec-heading">
                    <h2>find us on map</h2>
                </div>
                <div class="map-area">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3431.6668388382545!2d76.72563567472808!3d30.671508774613798!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fef0024dee3f5%3A0xd9837b41d4a91c93!2sWIDE%20Real%20Estate%20Group!5e0!3m2!1sen!2sin!4v1749642719033!5m2!1sen!2sin" width="600"
                    height="450"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                    
                </div>
            </div>
        </section>

       
    </main>
@endsection
@section('js')
    @vite(['resources/js/contact.js'])
@endsection
