<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <title>@yield('title')</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="keywords" content="Framgia E-learning System" />
      <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
      {{ Html::style(asset('layouts/home/css/bootstrap-3.1.1.min.css')) }}
      {{ Html::style(asset('//fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700')) }}
      {{ Html::style(asset('layouts/home/css/style.css')) }}
      {{ Html::style(asset('layouts/home/css/jquery.countdown.css')) }}
      {{ Html::style(asset('layouts/home/css/font-awesome.css')) }}
      {{ Html::style(asset('layouts/home/css/mystyle.css')) }}
      {{ Html::style(asset('layouts/home/css/flag-icon.css')) }}
      {{ Html::script(asset('layouts/home/js/jquery.min.js')) }}
      {{ Html::script(asset('layouts/home/js/bootstrap.min.js')) }}
      {{ Html::script(asset('layouts/home/js/dropdownHead.js')) }}
   </head>
   <body>
      <nav class="navbar navbar-default" role="navigation">
         <div class="container">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand" href="#">Framgia E-learning</a>
            </div>
            <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav">
                  <li class="dropdown">
                     <a href="#"><i class="fa fa-user"></i><span>@lang('messages.btn_login')</span></a>
                  </li>
                  <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-globe"></i><span>Vietnamese</span></a>
                     <ul class="dropdown-menu">
                        <li><a href="#"><span><i class="flag-icon flag-icon-vn"></i><span> Vietnamese</span></span></a></li>
                        <li><a href="#"><span><i class="flag-icon flag-icon-us"></i><span> English</span></span></a></li>
                     </ul>
                  </li>
                  <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search"></i><span>@lang('messages.btn_search')</span></a>
                     <ul class="dropdown-menu search-form">
                        {!! Form::open(['method'=>'POST']) !!}
                           {!! Form::text('search', '', ['class'=>'search-text', 'placeholder'=>trans('messages.lb_search')]) !!}
                           {!! Form::button('<i class="fa fa-search"></i>', ['type'=>'submit', 'class'=>'search-submit']) !!}
                        {!! Form::close() !!}
                     </ul>
                  </li>
               </ul>
            </div>
            <div class="clearfix"> </div>
         </div>
      </nav>
      <nav class="navbar nav_bottom" role="navigation">
         <div class="container">
            <div class="navbar-header nav_2">
               <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand" href="#"></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
               <ul class="nav navbar-nav nav_1">
                  <li><a href="#">@lang('messages.btn_home')</a></li>
                  <li><a href="#">@lang('messages.btn_about')</a></li>
                  <li class="dropdown mega-dropdown active">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">@lang('messages.btn_topic')<span class="caret"></span></a>        
                     <div class="dropdown-menu mega-dropdown-menu">
                        <div class="container-fluid">
                           <!-- Tab panes -->
                           <div class="tab-content">
                              <div class="tab-pane active" id="men">
                                 <ul class="nav-list list-inline">
                                    <li><a href="#"><img src="layouts/home/images/t7.jpg" class="img-responsive" alt=""/></a></li>
                                    <li><a href="#"><img src="layouts/home/images/t8.jpg" class="img-responsive" alt=""/></a></li>
                                    <li><a href="#"><img src="layouts/home/images/t9.jpg" class="img-responsive" alt=""/></a></li>
                                    <li><a href="#"><img src="layouts/home/images/t1.jpg" class="img-responsive" alt=""/></a></li>
                                 </ul>
                              </div>
                              <div class="tab-pane" id="women">
                                 <ul class="nav-list list-inline">
                                    <li><a href="#"><img src="layouts/home/images/t1.jpg" class="img-responsive" alt=""/></a></li>
                                    <li><a href="#"><img src="layouts/home/images/t2.jpg" class="img-responsive" alt=""/></a></li>
                                    <li><a href="#"><img src="layouts/home/images/t3.jpg" class="img-responsive" alt=""/></a></li>
                                    <li><a href="#"><img src="layouts/home/images/t4.jpg" class="img-responsive" alt=""/></a></li>
                                    <li><a href="#"><img src="layouts/home/images/t5.jpg" class="img-responsive" alt=""/></a></li>
                                    <li><a href="#"><img src="layouts/home/images/t6.jpg" class="img-responsive" alt=""/></a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <ul class="nav nav-tabs" role="tablist">
                           <li class="active"><a href="#men" role="tab" data-toggle="tab">School</a></li>
                           <li><a href="#women" role="tab" data-toggle="tab">College</a></li>
                        </ul>
                     </div>
                  </li>
                  <li class="last"><a href="contact.php">@lang('messages.btn_contact')</a></li>
               </ul>
            </div>
         </div>
      </nav>
