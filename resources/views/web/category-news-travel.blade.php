@extends('layouts.master')

@section('title') Tin tức du lịch @endsection

@section('content')
    <div class="container video-production">
        <h1 class="title">BLOG</h1>
        <div class="search">
            <h2 class="title mt-3">SEARCH</h2>
            <form class="mt-3">
                <input type="text" name="search">
            </form>
        </div>
        <div class="row mt-5">
            <div class="col-lg-3 col-md-9 col-sm-10 col-10 news mb-4">
                <a href="" class="c-img">
                    <img src="theme/frontend/images/B1101386-Brighter.jpg">
                </a>
                <h3 class="mt-2">Crowne Plaza Phu Quoc Star Bay</h3>
                <time>Mar 25, 2022</time>
            </div>

            <div class="col-lg-3 col-md-9 col-sm-10 col-10 news mb-4">
                <a href="" class="c-img">
                    <img src="theme/frontend/images/Hotel+and+Resort+Photography+Vietnam_008.jpg">
                </a>
                <h3 class="mt-2">Crowne Plaza Phu Quoc Star Bay</h3>
                <time>Mar 25, 2022</time>
            </div>

            <div class="col-lg-3 col-md-9 col-sm-10 col-10 news mb-4">
                <a href="" class="c-img">
                    <img src="theme/frontend/images/Screen+Shot+2020-10-19+at+12.57.42.jpg">
                </a>
                <h3 class="mt-2">Crowne Plaza Phu Quoc Star Bay</h3>
                <time>Mar 25, 2022</time>
            </div>

            <div class="col-lg-3 col-md-9 col-sm-10 col-10 news mb-4">
                <a href="" class="c-img">
                    <img src="theme/frontend/images/WhatsApp+Image+2020-11-18+at+2.08.58+PM.jpeg">
                </a>
                <h3 class="mt-2">Crowne Plaza Phu Quoc Star Bay</h3>
                <time>Mar 25, 2022</time>
            </div>

            <div class="col-lg-3 col-md-9 col-sm-10 col-10 news mb-4">
                <a href="" class="c-img">
                    <img src="theme/frontend/images/B1101386-Brighter.jpg">
                </a>
                <h3 class="mt-2">Crowne Plaza Phu Quoc Star Bay</h3>
                <time>Mar 25, 2022</time>
            </div>
        </div>
    </div>
@endsection

@push('js')
@endpush