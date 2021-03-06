@extends('layouts.app')
<!-- banner section start -->
@section('content')
@if(session()->has('success'))
<div class="alert alert-success">
   {{ session()->get('success') }}
</div>
@endif
<div class="banner_section">
  <section class="slide-wrapper">
    <div class="container">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="image_1"><img src="images/img-1.png"></div>
                        </div>
                        <div class="col-md-6">
                          <h1 class="achive_text">Achive Your Style</h1>
                          <p class="best_text">The best place for your hairstyle</p>
                          <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
                          <div class="appointment_bt apt-bt" data-toggle="modal" data-target="#exampleModal"><a href="#">Make an appointment</a></div>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="image_1"><img src="images/img-1.png"></div>
                        </div>
                        <div class="col-md-6">
                          <h1 class="achive_text">Achive Your Style</h1>
                          <p class="best_text">The best place for your hairstyle</p>
                          <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
                          <div class="appointment_bt apt-bt" data-toggle="modal" data-target="#exampleModal"><a href="#">Make an appointment</a></div>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="image_1"><img src="images/img-1.png"></div>
                        </div>
                        <div class="col-md-6">
                          <h1 class="achive_text">Achive Your Style</h1>
                          <p class="best_text">The best place for your hairstyle</p>
                          <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
                          <div class="appointment_bt apt-bt" data-toggle="modal" data-target="#exampleModal"><a href="#">Make an appointment</a></div>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="image_1"><img src="images/img-1.png"></div>
                        </div>
                        <div class="col-md-6">
                          <h1 class="achive_text">Achive Your Style</h1>
                          <p class="best_text">The best place for your hairstyle</p>
                          <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
                          <div class="appointment_bt apt-bt" data-toggle="modal" data-target="#exampleModal"><a href="#">Make an appointment</a></div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
</div>
<!-- banner section end -->
<!--about section start
<div class="about_section layout_padding">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <p class="unique_text">The unique story</p>
        <h1 class="years_text">52 Years of Experience</h1>
        <p class="ipsum_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velitLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit</p>
        <div class="read_more_bt"><a href="#">READ MORE</a></div>
      </div>
      <div class="col-md-6">
        <div class="image_2"><img src="images/img-2.png"></div>
      </div>
    </div>
  </div>
</div>
about section end -->
<!-- service section start -->
<div class="service_section layout_padding">
  <div class="container">
    <h1 class="services_text">Our Services</h1>
    <p class="dolor_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
    <div class="service_section_2">
      <div class="row">
        <div class="col-sm-4">
          <div class="image_3"><img src="images/img-3.png"></div>
          <h1 class="classic_text">CLASSIC HAIR CUT</h1>
          <p class="consectetur_text">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
          <div class="read_bt_main">
            <div class="read_bt"><a href="#">Read More</a></div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="image_3"><img src="images/img-4.png"></div>
          <h1 class="classic_text">CLASSIC HAIR CUT</h1>
          <p class="consectetur_text">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
          <div class="read_bt_main">
            <div class="read_bt"><a href="#">Read More</a></div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="image_3"><img src="images/img-5.png"></div>
          <h1 class="classic_text">CLASSIC HAIR CUT</h1>
          <p class="consectetur_text">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
          <div class="read_bt_main">
            <div class="read_bt"><a href="#">Read More</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- service section end -->
<!--discount section start -->
<div class="discount_section layout_padding">
  <div class="container">
    <div class="discount_bg">
      <div class="row">
        <div class="col-sm-8">
          <h1 class="get_tetx">GET FLAT 25% DISCOUNT</h1>
          <h1 class="every_tetx">ON EVERY SUNDAY OF DECEMBER</h1>
          <h1 class="promo_tetx">USE PROMO CODE: BARBERDIS</h1>
        </div>
        <div class="col-sm-4">
          <div class="image_6"><img src="images/img-6.png"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- discount section end -->
<!-- client section start -->
<div class="client_section layout_padding">
  <h1 class="client_taital">What is Say Our Customer</h1>
  <div class="container">
    <div id="main_slider" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row">
            <div class="col-md-6">
              <div class="alex_bg">
                <h3 class="alex_text">Alex jorze</h3>
                <p class="reader_text">t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="alex_bg">
                <h3 class="alex_text">Stip mark</h3>
                <p class="reader_text">t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look</p>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="col-md-6">
              <div class="alex_bg">
                <h3 class="alex_text">Alex jorze</h3>
                <p class="reader_text">t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="alex_bg">
                <h3 class="alex_text">Stip mark</h3>
                <p class="reader_text">t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look</p>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="col-md-6">
              <div class="alex_bg">
                <h3 class="alex_text">Alex jorze</h3>
                <p class="reader_text">t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="alex_bg">
                <h3 class="alex_text">Stip mark</h3>
                <p class="reader_text">t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
        <i class="fa fa-long-arrow-left"></i>
      </a>
      <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
        <i class="fa fa-long-arrow-right"></i>
      </a>
    </div>
  </div>
</div>
<!-- client section end -->
<!-- contact section start
<div class="contact_section layout_padding">
  <div class="container">
    <h1 class="contact_taital">Contact Us</h1>
    <div class="contact_section_2">
      <div class="row">
        <div class="col-md-6">
          <div class="mail_section">
            <input type="text" class="mail_text" placeholder="Name" name="text">
            <input type="text" class="mail_text" placeholder="Email" name="text">
            <input type="text" class="mail_text" placeholder="Phone Number" name="text">
            <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
            <div class="send_bt"><a href="#">SEND</a></div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="map_text"><img src="images/call-icon-1.png"><span class="call_text_left">+01 9876543210</span>
          <div class="map_text"><img src="images/mail-icon-1.png"><span class="call_text_left">democheck@gmail.com</span>
          <div class="map_text_1"><img src="images/map-icon-1.png"><span class="call_text_left">t is a long established fact that a reader will be distracted by the readable conten</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
 contact section end -->
<!-- join us section start -->
<div class="join_section">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h1 class="member_text">Want To Be A Member? Join With Us</h1>
      </div>
      <div class="col-md-6">
        <div class="join_bt"><a href="#">SEND</a></div>
      </div>
    </div>
  </div>
</div>
<!-- join us section end -->
@endsection
