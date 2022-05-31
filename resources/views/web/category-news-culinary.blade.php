@extends('layouts.master')

@section('title') {{ __('messages.title.food') }} @endsection

@section('content')
    <div class="container video-production">
        @if (session()->get('locale') == 'vi' || empty(session()->get('locale')))
            <h1 class="title">{{ $category->name_vi }}</h1>
        @elseif (session()->get('locale') == 'en')
            <h1 class="title">{{ $category->name_en }}</h1>
        @elseif (session()->get('locale') == 'ja')
            <h1 class="title">{{ $category->name_ja }}</h1>
        @endif

        <div class="search">
            <h2 class="title mt-3">{{ __('messages.search') }}</h2>
            <form class="mt-3">
                <input type="text" name="search" name="search">
            </form>
        </div>
        <div class="row mt-5">
            @foreach ($data_news as $news)
            <div class="col-lg-3 col-md-9 col-sm-10 col-10 news mb-4">
                <a href="{{ route('web.news-detail', $news->id) }}" class="c-img">
                    <img src="{{ asset($news->image) }}">
                </a>

                @if (session()->get('locale') == 'vi' || empty(session()->get('locale')))
                    <h3 class="mt-2"><a href="{{ route('web.news-detail', $news->id) }}">{{ $news->title_vi }}</a></h3>
                @elseif (session()->get('locale') == 'en')
                    <h3 class="mt-2"><a href="{{ route('web.news-detail', $news->id) }}">{{ $news->title_en }}</a></h3>
                @elseif (session()->get('locale') == 'ja')
                    <h3 class="mt-2"><a href="{{ route('web.news-detail', $news->id) }}">{{ $news->title_ja }}</a></h3>
                @endif
                
                <time>{{ date('d-m-Y', strtotime($news->created_at)) }}</time>
                <p class="float-right"><i class="fa fa-eye" aria-hidden="true"></i> {{ $news->view }}</p>
            </div>
            @endforeach

            <div class="m-auto">
                {{ $data_news->links() }}
            </div>
        </div>
    </div>
@endsection