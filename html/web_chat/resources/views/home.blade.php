<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Inbox | WebChat</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
      <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
      <link rel="stylesheet" href="{{ asset('css/home.css') }}">
  </head>
  <body>
    <div class="container">
      <div class="row clearfix">
          <div class="col-lg-12">
              <div class="card chat-app">
                  <div id="plist" class="people-list">
                      <div class="input-group">
                          <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fa fa-search"></i></span>
                          </div>
                          <input type="text" class="form-control" placeholder="Search...">
                      </div>
                      <ul class="list-unstyled chat-list mt-2 mb-0">
                           @foreach ($chatHeads as $chatHead)
                           @if($loop->index == 0)
                              <script>window.current_chat_id = {{ $chatHead->id }};</script>
                           @endif
                           <li class="clearfix {{ $loop->index == 0 ? 'active' : '' }}" onclick="changeChat(event, {{ $chatHead->id }})">
                               <img src="{{ 'https://ui-avatars.com/api/?name='.$chatHead->name.'&color=7F9CF5&background=0f0230' }}" alt="avatar">
                               <div class="about">
                                   <div class="name">{{ $chatHead->name }}</div>
                                   <div class="status"> <i class="fa fa-circle online"></i> active </div>
                               </div>
                            </li>
                           @endforeach
                      </ul>
                  </div>
                  <div class="chat">
                      <div class="chat-header clearfix">
                          <div class="row">
                              <div class="col-lg-6">
                                  <a href="javascript:void(0);" data-toggle="modal" data-target="#view_info">
                                      <img src="" id="chat-image"  alt="avatar">
                                  </a>
                                  <div class="chat-about">
                                      <h6 class="m-b-0" id="chat-name"></h6>
                                      <small>Active</small>
                                  </div>
                              </div>
                              <div class="col-lg-6 hidden-sm text-right">
                                  <a href="javascript:void(0);" class="btn btn-outline-secondary"><i class="fa fa-camera"></i></a>
                                  <a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-image"></i></a>
                                  <a href="javascript:void(0);" class="btn btn-outline-info"><i class="fa fa-cogs"></i></a>
                                  <a href="javascript:void(0);" class="btn btn-outline-warning"><i class="fa fa-question"></i></a>
                              </div>
                          </div>
                      </div>
                      <div class="chat-history">
                          <ul class="m-b-0">
                              <li class="clearfix">
                                  <div class="message-data text-right">
                                      <span class="message-data-time">10:10 AM, Today</span>
                                      <img src="{{ 'https://ui-avatars.com/api/?name='.auth()->user()->name.'&color=7F9CF5&background=0f0230' }}" alt="avatar">
                                  </div>
                                  <div class="message other-message float-right"> Hi Aiden, how are you? How is the project coming along? </div>
                              </li>
                              <li class="clearfix">
                                  <div class="message-data">
                                      <span class="message-data-time">10:12 AM, Today</span>
                                  </div>
                                  <div class="message my-message">Are we meeting today?</div>
                              </li>
                              <li class="clearfix">
                                  <div class="message-data">
                                      <span class="message-data-time">10:15 AM, Today</span>
                                  </div>
                                  <div class="message my-message">Project has been already finished and I have results to show you.</div>
                              </li>
                          </ul>
                      </div>
                      <div class="chat-message clearfix">
                          <div class="input-group mb-0">
                              <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="fa fa-send"></i></span>
                              </div>
                              <input type="text" class="form-control" placeholder="Enter text here...">
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
    <script type="text/javascript" src="{{ asset('js/home.js') }}"></script>
  </body>
</html>
