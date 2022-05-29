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
            <form action="{{route('contact')}}" method="post">
              @csrf
            <input type="text" class="mail_text" placeholder="Name" id="name" name="name" required>
            <input type="text" class="mail_text" placeholder="Email" id="email" name="email" required>
            <input type="text" class="mail_text" placeholder="Phone Number"  id="phone" name="phone" required>
            <textarea class="massage-bt" placeholder="Massage" rows="5" id="messege" name="Massage"></textarea>
            <div class="send_bt"><a href="#"><button class="btn btn-border-none"type="submit">SEND</button></a></div>
          </form>
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
