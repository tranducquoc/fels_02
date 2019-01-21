<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Framgia E-Learning">
    <meta name="author" content="Framgia E-Learning">
    <meta name="keywords" content="Framgia E-Learning">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    {{ Html::style(asset('layouts/admin/css/font-face.css')) }}
    {{ Html::style(asset('layouts/admin/vendor/font-awesome-4.7/css/font-awesome.min.css')) }}
    {{ Html::style(asset('layouts/admin/vendor/font-awesome-5/css/fontawesome-all.min.css')) }}
    {{ Html::style(asset('layouts/admin/vendor/mdi-font/css/material-design-iconic-font.min.css')) }}
    {{ Html::style(asset('layouts/admin/vendor/bootstrap-4.1/bootstrap.min.css')) }}
    {{ Html::style(asset('layouts/admin/vendor/animsition/animsition.min.css')) }}
    {{ Html::style(asset('layouts/admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')) }}
    {{ Html::style(asset('layouts/admin/vendor/wow/animate.css')) }}
    {{ Html::style(asset('layouts/admin/vendor/css-hamburgers/hamburgers.min.css')) }}
    {{ Html::style(asset('layouts/admin/vendor/slick/slick.css')) }}
    {{ Html::style(asset('layouts/admin/vendor/select2/select2.min.css')) }}
    {{ Html::style(asset('layouts/admin/vendor/perfect-scrollbar/perfect-scrollbar.css')) }}
    {{ Html::style(asset('layouts/admin/css/theme.css')) }}
    {{ Html::style(asset('layouts/admin/css/adminStyle.css')) }}
    {{ Html::style(asset('https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css')) }}
    {{ Html::script(asset('https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js')) }}
    {{ Html::script(asset('https://code.jquery.com/jquery-3.3.1.slim.min.js')) }}
    {{ Html::script(asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js')) }}
    {{ Html::script(asset('https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js')) }}

</head>
<body class="animsition">
<div class="page-wrapper">
    @include('layouts.admin.leftbar')
    <div class="page-container">
        <header class="header-desktop">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="header-wrap">
                        {!! Form::open(['class'=>'form-header', 'method'=>'POST']) !!}
                            {!! Form::text('search', '', ['class'=>'au-input au-input--xl', 'placeholder'=>trans('adminMess.lb_search...')]) !!}
                            {!! Form::submit(trans('adminMess.btn_search'), ['class'=>'au-btn--submit search-admin']) !!}
                        {!! Form::close() !!}
                        <div class="header-button">
                            <div class="noti-wrap">
                                <div class="noti__item js-item-menu"id="markasread" onclick="return markNotificationAsRead({{count(Auth()->user()->unreadNotifications)}})">
                                    <i class="zmdi zmdi-notifications"></i>
                                    <span class="quantity">{{count(Auth()->user()->unreadNotifications)}}</span>
                                    <div class="notifi-dropdown js-dropdown" >
                                        <div class="notifi__title">
                                            <p>
                                                @lang('adminMess.lb_youHave')
                                                <span>{{count(Auth()->user()->unreadNotifications)}}</span>
                                                @lang('adminMess.lb_newNoti')
                                            </p>
                                        </div>
                                        @foreach(Auth()->user()->Notifications as $notification)
                                            @include('layouts.admin.notifications.test_lesson_notify')
                                        @endforeach
                                        <div class="notifi__footer footer-notification">
                                            <a href="">@lang('adminMess.btn_allNoti')</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="account-wrap">
                                <div class="account-item clearfix js-item-menu">
                                    <div class="image">
                                        <img src="/images/users/{{ Auth()->user()->avatar }}" />
                                    </div>
                                    <div class="content">
                                        <a class="js-acc-btn" href="#">{{ Auth()->user()->username }}</a>
                                    </div>
                                    <div class="account-dropdown js-dropdown">
                                        <div class="info clearfix">
                                            <div class="image">
                                                <a href="#">
                                                    <img src="/images/users/{{ Auth()->user()->avatar }}" />
                                                </a>
                                            </div>
                                            <div class="content">
                                                <h5 class="name">
                                                    <a href="#">{{ Auth::user()->username }}</a>
                                                </h5>
                                                <span class="email">{{ Auth::user()->email }}</span>
                                            </div>
                                        </div>

                                        <div class="account-dropdown__footer ">
                                            <a href="{{route('logout.index')}}"><i class="zmdi zmdi-power"></i>@lang('adminMess.btn_logout')</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
