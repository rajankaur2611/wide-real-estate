@extends('layouts/frontend/default')
@section('styles')
    @vite(['resources/scss/contact.scss'])
@endsection
@section('content')
<div class="about-us-page">
  <section class="section-top fade-down-smooth">
      <div class="section-top-content container">
          <div class="top-headings">
              <p>want to know more ?</p>
              <h1>about us</h1>
          </div>
      </div>
  </section>

  <section class="about-us padding-y">
      <div class="about-us-content container">
          <div class="about-us-image">
              <figure>
                  <img src="{{ url('images/mission.webp') }}" alt="image">
              </figure>
          </div>
          <div class="about-us-info">
              <div class="sec-heading">
                  <h2>mission & values</h2>
                  <p>
                      It is a long established fact that a reader will be distracted by the readable content of a
                      page when looking at its layout. The point of using Lorem Ipsum is that it has a
                      more-or-less normal distribution of letters, as opposed to using 'Content here, content
                      here', making it look like readable English.It is a long established fact that a reader.
                  </p>
                  <p>
                      There are many variations of passages of Lorem Ipsum available, but the majority
                      havesuffered alteration in some form, by injected humour, or randomised words which don't
                      look
                      even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be
                      sure there isn't anything.
                  </p>
              </div>
          </div>
      </div>
  </section>

  <section class="our-work padding-y">
      <div class="our-work-content container">
          <div class="our-work-image">
              <figure>
                  <img src="{{ url('images/what-we-do.webp') }}" alt="image">
              </figure>
          </div>
          <div class="our-work-info">
              <div class="sec-heading">
                  <h2>what we do</h2>
                  <p>It is a long established fact that a reader will be distracted by the readable content of a
                      page when looking at its layout. The point of using Lorem Ipsum is that it has a
                      more-or-less normal distribution of letters, as opposed to using 'Content here, content
                      here', making it look like readable English.It is a long established fact that a reader.
                  </p>
                  <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                      suffered alteration in some form, by injected humour, or randomised words which don't look
                      even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be
                      sure there isn't anything. </p>
              </div>
          </div>
      </div>
  </section>

  <section class="our-approach padding-y">
      <div class="our-approach-content container">
          <div class="sec-heading">
              <h2>our approach</h2>
          </div>
          <div class="our-approach-wrappers">
              <div class="our-approach-wrapper">
                  <span>open communication</span>
              </div>
              <div class="our-approach-wrapper">
                  <span>Spatial Expression</span>
              </div>
              <div class="our-approach-wrapper">
                  <span>From Idea To Space</span>
              </div>
              <div class="our-approach-wrapper">
                  <span>Realization</span>
              </div>
          </div>
          <div class="content">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt nesciunt non mollitia delectus
                  illum. Architecto accusantium maiores, est autem fugit consectetur asperiores quas hic non
                  dignissimos. Similique, reiciendis! Incidunt, voluptate!</p>
          </div>
      </div>

  </section>

  <section class="founders padding-y">
      <div class="founders-content container">
          <div class="team-wrappers">
              <div class="team-wrapper">
                  <div class="team-image">
                      <img src="{{ url('images/team-member-1.webp') }}" alt="contact image">
                  </div>
                  <div class="team-info">
                      <h5>Harshit Bisht</h5>
                      <h6>founder</h6>
                      <p>Lorem Ipsum is simply dummy text of the for printing and typesetting industry. Lorem
                          hasIpsum has been the industry's standard is dummy text ever since.</p>
                  </div>
              </div>
              <div class="team-wrapper">
                  <div class="sec-heading">
                      <h2>meet the masterminds</h2>
                  </div>
              </div>
              <div class="team-wrapper">
                  <div class="team-info">
                      <h5>Priyanka Kaur</h5>
                      <h6>co founder & director</h6>
                      <p>Lorem Ipsum is simply dummy text of the for printing and typesetting industry. Lorem
                          hasIpsum has been the industry's standard is dummy text ever since.</p>
                  </div>
                  <div class="team-image">
                      <img src="{{ url('images/team-member-2.webp') }}" alt="contact image">
                  </div>
              </div>
          </div>
      </div>
  </section>

</div>
@endsection