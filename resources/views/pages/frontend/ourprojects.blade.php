@extends('layouts/frontend/default')
@section('styles')
    @vite(['resources/scss/contact.scss'])
@endsection
@section('content')
    <main>
         <div class="our-project-page">

            <section class="section-top fade-down-smooth">
                <div class="section-top-content container">
                    <div class="top-headings">
                        <p>looking for your properties ?</p>
                        <h1>our projects</h1>
                    </div>
                </div>
            </section>

            <section class="our-projects padding-y">
                <div class="our-projects-content container">
                    <div class="sec-heading">
                        <h2>properties</h2>
                    </div>
                    <div class="projects-list">
                        {{-- <div class="property-slide-content fade-left visible">
                                <div class="property-slide-header">
                                    <img src="http://localhost:8000/images/featured-prop-1.webp" alt="property image">
                                </div>
                                <div class="property-slide-body">
                                    <h3>Anwa by Omniyat</h3>
                                    <p>Developed By Al Habtoor City Real Estate Development</p>
                                    <span class="location">
    
    
                                        <a href="#" tabindex="0"><img src="http://localhost:8000/images/location.png"
                                                alt="" width="20px">dubai maritime city</a>
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
                                    <a class="btn-primary" href="/contact" tabindex="0">request info</a>
                                    <a class="btn-secondary" href="/contact" tabindex="0">view more</a>
                                </div>
                            </div> --}}

                    </div>
                    <div class="btn">
                        <a class="btn-primary" href="#">view all</a>
                    </div>
                </div>
            </section>

            <script>
                const properties = [{
                        id: 1,
                        image: "http://localhost:8000/images/featured-prop-1.webp",
                        title: "Anwa by Omniyat",
                        developer: "Developed By Al Habtoor City Real Estate Development",
                        location: "dubai maritime city",
                        bedrooms: [1, 2, 3, 5],
                        status: "off plan",
                        price: "100 Cr",
                        contactLink: "/contact"
                    },
                    {
                        id: 2,
                        image: "http://localhost:8000/images/featured-prop-1.webp",
                        title: "Anwa by Omniyat 2",
                        developer: "Developed By Al Habtoor City Real Estate Development",
                        location: "dubai maritime city",
                        bedrooms: [1, 2, 3, 5],
                        status: "off plan",
                        price: "100 Cr",
                        contactLink: "/contact"
                    },
                    {
                        id: 3,
                        image: "http://localhost:8000/images/featured-prop-1.webp",
                        title: "Anwa by Omniyat 3",
                        developer: "Developed By Al Habtoor City Real Estate Development",
                        location: "dubai maritime city",
                        bedrooms: [1, 2, 3, 5],
                        status: "off plan",
                        price: "100 Cr",
                        contactLink: "/contact"
                    },
                    {
                        id: 4,
                        image: "http://localhost:8000/images/featured-prop-1.webp",
                        title: "Anwa by Omniyat 4",
                        developer: "Developed By Al Habtoor City Real Estate Development",
                        location: "dubai maritime city",
                        bedrooms: [1, 2, 3, 5],
                        status: "off plan",
                        price: "100 Cr",
                        contactLink: "/contact"
                    },
                    {
                        id: 5,
                        image: "http://localhost:8000/images/featured-prop-1.webp",
                        title: "Anwa by Omniyat 5",
                        developer: "Developed By Al Habtoor City Real Estate Development",
                        location: "dubai maritime city",
                        bedrooms: [1, 2, 3, 5],
                        status: "off plan",
                        price: "100 Cr",
                        contactLink: "/contact"
                    },
                    {
                        id: 6,
                        image: "http://localhost:8000/images/featured-prop-1.webp",
                        title: "Anwa by Omniyat 6",
                        developer: "Developed By Al Habtoor City Real Estate Development",
                        location: "dubai maritime city",
                        bedrooms: [1, 2, 3, 5],
                        status: "off plan",
                        price: "100 Cr",
                        contactLink: "/contact"
                    },
                    {
                        id: 7,
                        image: "http://localhost:8000/images/featured-prop-1.webp",
                        title: "Anwa by Omniyat 7",
                        developer: "Developed By Al Habtoor City Real Estate Development",
                        location: "dubai maritime city",
                        bedrooms: [1, 2, 3, 5],
                        status: "off plan",
                        price: "100 Cr",
                        contactLink: "/contact"
                    },
                    {
                        id: 8,
                        image: "http://localhost:8000/images/featured-prop-1.webp",
                        title: "Anwa by Omniyat 8",
                        developer: "Developed By Al Habtoor City Real Estate Development",
                        location: "dubai maritime city",
                        bedrooms: [1, 2, 3, 5],
                        status: "off plan",
                        price: "100 Cr",
                        contactLink: "/contact"
                    },
                    {
                        id: 9,
                        image: "http://localhost:8000/images/featured-prop-1.webp",
                        title: "Anwa by Omniyat 9",
                        developer: "Developed By Al Habtoor City Real Estate Development",
                        location: "dubai maritime city",
                        bedrooms: [1, 2, 3, 5],
                        status: "off plan",
                        price: "100 Cr",
                        contactLink: "/contact"
                    },
                    // Add more property objects as needed
                ];

                function generatePropertySlides(properties) {
                    return properties.map(property => `
                     <div class="property-slide-content">
                      <div class="property-slide-header">
                        <img src="${property.image}" alt="property image">
                      </div>
                       <div class="property-slide-body">
                        <h3>${property.title}</h3>
                        <p>${property.developer}</p>
                        <span class="location">
                            <a href="#" tabindex="0">
                                <img src="http://localhost:8000/images/location.png" alt="" width="20px">
                                ${property.location}
                            </a>
                        </span>
                        <div class="amenities">
                            <ul>
                                ${property.bedrooms.map(bedroom => `<li>${bedroom}</li>`).join('')}
                            </ul>
                            <span>- bedrooms</span>
                        </div>
                        <div class="status">
                            status :<span> ${property.status}</span>
                        </div>
                        <div class="price">
                            <strong> price : <span><i class="fa-solid fa-indian-rupee-sign"></i>
                                    ${property.price}</span></strong>
                        </div>
                    </div>
                    <div class="property-slide-footer">
                        <a class="btn-primary" href="${property.contactLink}" tabindex="0">request info</a>
                        <a class="btn-secondary" href="${property.contactLink}" tabindex="0">view more</a>
                    </div>
                </div>`).join('');
                }

                document.querySelector('.projects-list').innerHTML = generatePropertySlides(properties);
            </script>
        </div>
    </main>
@endsection
@section('js')
    @vite(['resources/js/ourprojects.js'])
@endsection
