@extends('layouts.app')
<!-- banner section start -->
@section('content')
<!-- contact section start -->
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
<!-- contact section end -->
@endsection
