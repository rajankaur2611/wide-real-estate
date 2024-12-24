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

        <section class="in-touch">
            <div class="in-touch-content ">
                <div class="contact-form">
                    <h2>Get in touch</h2>
                    <form method="post" id="contact" action="{{route('contact-submit')}}">
                        @csrf
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
@section('js')
@vite(['resources/js/contact.js'])
@endsection
