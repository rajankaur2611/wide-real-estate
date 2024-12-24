@extends('layouts/frontend/default')
@section('styles')
    @vite(['resources/scss/contact.scss'])
@endsection
@section('content')
    <main>
        <section class="section-top">
            <div class="section-top-content container">
                <div class="top-headings">
                    <p>looking for help?</p>
                    <div class="line"></div>
                    <h1>contact us</h1>
                </div>
            </div>
        </section>

        <section class="in-touch padding-y">
            <div class="in-touch-content container">
                <div class="contact-form">
                    <h2>get in touch</h2>
                    <form action="#">
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
                            <input type="text" name="name" id="name">
                        </div>
                        <div class="user-info">
                            <div>
                                <label for="email">email address <span>*</span></label>
                                <input type="email" name="email" id="email" required>
                            </div>
                            <div>
                                <label for="number">phone number <span>*</span></label>
                                <input type="number" name="number" id="number">
                            </div>
                        </div>
                        <div>
                            <label for="message">message</label>
                            <textarea name="message" id="message" cols="30" rows="10"></textarea>
                        </div>
                        <div class="submit">
                            <button class="btn-primary">submit</button>
                        </div>
                    </form>
                </div>
                <div class="contact-image">
                    <img src="{{ url('images/contact-form.png') }}" alt="contact image">
                </div>
            </div>
        </section>

        <section class="map">
            <div class="map-content ">
                <div class="sec-heading">
                    <h2>find us on map</h2>
                </div>
                <div class="map-area">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2828.4440172357304!2d76.7256356745973!3d30.67151338859043!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fef0024dee3f5%3A0xd9837b41d4a91c93!2sWIDE%20Real%20Estate%20Group!5e1!3m2!1sen!2sin!4v1734592095523!5m2!1sen!2sin"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>

    </main>
@endsection
