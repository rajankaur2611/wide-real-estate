@extends('layouts/frontend/default')
@section('styles')
    @vite(['resources/scss/about.scss'])
@endsection
@section('content')
    <div class="about-us-page">
        <section class="section-top fade-down-smooth">
            <div class="section-top-content container">
                <div class="top-headings">
                    <p>want to know more ?</p>
                    <h1>about us</h1>
                </div>
                <div class="locate">
                    <a href="/">home</a>
                    <a class="active" href="/about-us">about</a>
                </div>
            </div>
        </section>

        <section class="about-company padding-y">
            <div class="about-company-content container">
                <div class="about-company-image">
                    <figure>
                        <!-- <img src="{{ url('images/about-company.webp') }}" alt="image"> -->
                        <img src="{{ url('https://images.pexels.com/photos/3801167/pexels-photo-3801167.jpeg') }}" alt="image">
                    </figure>
                </div>
                <div class="about-company-text">
                    <div class="sec-heading">
                        <h2>Delivering Luxury, Trust, and
                            Customer Excellence Since 2010</h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its layout. The point of using Lorem Ipsum is that it has a
                            more-or-less normal distribution of letters, as opposed to using 'Content here, content
                            here', making it look like readable English.It is a long established fact that a reader.
                        </p>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by injected humour, or randomised words which don't look
                            even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be
                            sure there isn't anything. </p>
                            
                            <p>For buying, we truly aspire to get you:</p>
                            
                    </div>
                </div>
            </div>
        </section>

        <section class="call-us padding-y">
            <div class="call-us-content container">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium saepe, corrupti quaerat commodi placeat veritatis tempore? Quo voluptatem a commodi veniam numquam ratione porro maxime quae vitae consequatur, quaerat nesciunt!</p>
                <div class="button">
                <a class="btn-primary" href="#">call now</a>
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

        <section class="our-work ">
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

        <!-- <section class="our-approach padding-y">
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

      </section> -->

      <section class="founder-message padding-y">
        <div class="founder-message-content container">
            <div class="founder-image">
                <img src="{{ url('images/team-member-1.webp') }}" alt="contact image">
            </div>
            <div class="founder-message-text">
            <div class="sec-heading">
                        <h2>founder's message</h2>
                        <p>Passion for property... we were born with it!</p>
                        <p>Dear Clients <br> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione enim iusto, nisi porro, molestias mollitia alias voluptas debitis non totam vitae reprehenderit voluptates consectetur commodi corrupti. Maxime, sit! Explicabo, quo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, nesciunt explicabo eaque, quas, commodi non sunt itaque vel ut velit animi impedit iste dolorem qui numquam distinctio expedita. Sit, provident.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum ab iste in earum ex aspernatur provident nesciunt, a quisquam, quia delectus beatae? Natus ipsum quidem in, voluptate qui at nesciunt. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit sunt nam aut consectetur error laboriosam minus a officiis optio inventore explicabo, omnis excepturi rem laborum recusandae dolore rerum. Sapiente, error?</p>
                        <p>Yours Sincerely, <br> Virat Kohli</p>
                        
                    </div>
            </div>
        </div>
      </section>

        <!-- <section class="founders padding-y">
            <div class="founders-content container">
                <div class="team-wrappers">
                <div class="team-wrapper ">
                        <div class="sec-heading">
                            <h2>meet the masterminds</h2>
                        </div>
                    </div>
                    <div class="team-wrapper">
                        <div class="team-image">
                            <img src="{{ url('images/team-member-1.webp') }}" alt="contact image">
                        </div>
                        <div class="team-info">
                            <h5>Harshit Bisht</h5>
                            <h6>founder</h6>
                            <p>Lorem Ipsum is simply dummy text of the for printing and typesetting industry. Lorem</p>
                        </div>
                    </div>
                    
                    <div class="team-wrapper">
                        <div class="team-info">
                            <h5>Priyanka Kaur</h5>
                            <h6>co founder & director</h6>
                            <p>Lorem Ipsum is simply dummy text of the for printing and typesetting industry. Lorem</p>
                        </div>
                        <div class="team-image">
                            <img src="{{ url('images/team-member-2.webp') }}" alt="contact image">
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <section class="founders padding-y">
            <div class="founders-content container">
                <div class="team-wrappers">
                <div class="team-wrapper ">
                        <div class="sec-heading">
                            <h2>meet the masterminds</h2>
                        </div>
                    </div>
                    <div class="team-wrapper">
                        <div class="team-image">
                            <img src="{{ url('images/team-member-1.webp') }}" alt="contact image">
                        </div>
                        <div class="team-info">
                            <h5>Harshit Bisht</h5>
                            <h6>founder</h6>
                            <p>Lorem Ipsum is simply dummy text of the for printing and typesetting industry. Lorem</p>
                        </div>
                    </div>
                    
                    <div class="team-wrapper">
                        <div class="team-info">
                            <h5>Priyanka Kaur</h5>
                            <h6>co founder & director</h6>
                            <p>Lorem Ipsum is simply dummy text of the for printing and typesetting industry. Lorem</p>
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
