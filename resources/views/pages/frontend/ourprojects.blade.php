@extends('layouts/frontend/default')
@section('styles')
<link rel="stylesheet" href="{{ url('assets/css/slick-theme.css') }}">
<link rel="stylesheet" href="{{ url('assets/css/slick.min.css') }}">
<link rel="stylesheet" href="{{ url('assets/css/slick.min.css.map') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@vite(['resources/scss/our_projects.scss'])
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
               <div class="locate">
                  <a href="/">home</a>
                  <a class="active" href="/our-project">our projects</a>
               </div>
            </div>
         </section>
         <section class="our-projects padding-y">
            <div class="our-projects-content container">
               <div class="sec-heading">
                  <h2>properties</h2>
               </div>
               <div class="prop-catgs">
                  <div class="select-cat">
                     <div class="select">
                        <select name="prop-catg" id="prop-catg">
                           <option value="" hidden>select</option>
                           <option value="residential">residential</option>
                           <option value="commercial">commercial</option>
                           <option value="villas">villas</option>
                           <option value="lnvestments">investments</option>
                        </select>
                     </div>
                  </div>
                  <div class="call-req">
                     <div class="call-btns">
                        <a class="btn-primary" href="https://web.whatsapp.com/"><i class="fa-brands fa-whatsapp"></i></a>
                        <a class="btn-primary" href="tel:+9876543211"><i class="fa-solid fa-phone"></i></i></a>
                        <a class="btn-primary" href="tel:+9876543210"> request callback</a>
                     </div>
                  </div>
               </div>
               <div class="projects-list-widgets">
                  
               </div>
               <div class="btn">
                  <a class="btn-primary view-more-estate" href="javascript:void(0)">View More</a>
               </div>
               <div class="clone-data" style="display:none">
                  <div class="project-list-widget">
                     <div class="project-list-widget-content ">
                        <div class="project-list-header">
                           <img src="{{ url('images/featured-prop-1.webp') }}" alt="property image">
                        </div>
                        <div class="project-list-body">
                           <div class="property-title">
                              <h3>Anwa by Omniyat 1</h3>
                              <p>residential 104, Gurgaon</p>
                           </div>
                           <div class="area">
                              <div><span>Area :</span><span> 6967 - 8750 sq. ft.  </span></div>
                              <div>3BHK and 4BHK</div>
                           </div>
                           <div class="project-list-footer">
                              <div class="price"><strong><span>60.00Lacs - 90.00Lac</span></strong></div>
                              <div class="button"><a class="btn-secondary" href="/contact">view detail &nbsp; 
                              <span class="arrow">&rarr;</span></a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </div>
   </main>
   
@endsection
@section('js')
    <script>
      $(document).ready(function () {
         show_estates();
         $('.view-more-estate').click(function() {
            show_estates();
         })
      })
      function show_estates() {
         for(var i = 0; i < 6; i++){
            $(".clone-data .project-list-widget").clone().appendTo(".projects-list-widgets");
         }
      }
    </script>
@endsection