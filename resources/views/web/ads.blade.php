@extends('layouts.master')

@section('title') Tin tức du lịch @endsection

@section('content')
    <div class="container client-list">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-9 col-sm-10 col-10">
                <h1 class="title">Newtimes Media</h1>
            </div>
            <div class="col-12">
                <div class="slider-client-list">
                    <div>
                        <a href="{{ asset('images/11.jpg') }}" class="c-img" data-fancybox="fgh"><img src="{{ asset('images/11.jpg') }}" alt=""></a>
                        <h2>Newtimes Media</h2>
                    </div>
                    <div>
                        <a href="{{ asset('images/22.jpg') }}" class="c-img" data-fancybox="fgh"><img src="{{ asset('images/22.jpg') }}" alt=""></a>
                        <h2>Newtimes Media</h2>
                    </div>
                    <div>
                        <a href="{{ asset('images/33.jpg') }}" class="c-img" data-fancybox="fgh"><img src="{{ asset('images/33.jpg') }}" alt=""></a>
                        <h2>Newtimes Media</h2>
                    </div>
                    <div>
                        <a href="{{ asset('images/44.jpg') }}" class="c-img" data-fancybox="fgh"><img src="{{ asset('images/44.jpg') }}" alt=""></a>
                        <h2>Newtimes Media</h2>
                    </div>
                    <div>
                        <a href="{{ asset('images/55.jpg') }}" class="c-img" data-fancybox="fgh"><img src="{{ asset('images/55.jpg') }}" alt=""></a>
                        <h2>Newtimes Media</h2>
                    </div>
                    <div>
                        <a href="{{ asset('images/66.jpg') }}" class="c-img" data-fancybox="fgh"><img src="{{ asset('images/66.jpg') }}" alt=""></a>
                        <h2>Newtimes Media</h2>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
@endpush