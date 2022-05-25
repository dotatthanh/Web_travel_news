@extends('layouts.master')

@section('title') Tin tức du lịch @endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-9">
                @if (session()->get('locale') == 'vi' || empty(session()->get('locale')))
                    <h1 class="title">{{ $news->title_vi }}</h1>
                @elseif (session()->get('locale') == 'en')
                    <h1 class="title">{{ $news->title_en }}</h1>
                @elseif (session()->get('locale') == 'ja')
                    <h1 class="title">{{ $news->title_ja }}</h1>
                @endif

                <div class="summary mt-3">
                    @if (session()->get('locale') == 'vi' || empty(session()->get('locale')))
                        {!! $news->summary_vi !!}
                    @elseif (session()->get('locale') == 'en')
                        {!! $news->summary_en !!}
                    @elseif (session()->get('locale') == 'ja')
                        {!! $news->summary_ja !!}
                    @endif
                </div>
                
                <div class="content mt-3">
                    @if (session()->get('locale') == 'vi' || empty(session()->get('locale')))
                        {!! $news->content_vi !!}
                    @elseif (session()->get('locale') == 'en')
                        {!! $news->content_en !!}
                    @elseif (session()->get('locale') == 'ja')
                        {!! $news->content_ja !!}
                    @endif
                </div>
            </div>

            <div class="col-3 mb-4">
                <div class="slider-client-list-detail">
                    <div>
                        <a target="_blank" href="https://monquang.com.vn/" class="c-img"><img src="{{ asset('images/9.png') }}" alt=""></a>
                    </div>
                    <div>
                        <a target="_blank" href="https://popeyes.vn/" class="c-img"><img src="{{ asset('images/10.png') }}" alt=""></a>
                    </div>
                    <div>
                        <a target="_blank" href="https://banhcanhghetrang.vn/" class="c-img"><img src="{{ asset('images/3.png') }}" alt=""></a>
                    </div>
                    <div>
                        <a target="_blank" href="https://www.kingsbbq.com/" class="c-img"><img src="{{ asset('images/4.png') }}" alt=""></a>
                    </div>
                    <div>
                        <a target="_blank" href="https://nhahangphuongnam.vn/" class="c-img"><img src="{{ asset('images/5.png') }}" alt=""></a>
                    </div>
                    <div>
                        <a target="_blank" href="https://www.abay.vn/" class="c-img"><img src="{{ asset('images/11.png') }}" alt=""></a>
                    </div>
                    <div>
                        <a target="_blank" href="https://www.booking.com/index.vi.html" class="c-img"><img src="{{ asset('images/12.png') }}" alt=""></a>
                    </div>
                    <div>
                        <a target="_blank" href="https://www.agoda.com/" class="c-img"><img src="{{ asset('images/6.png') }}" alt=""></a>
                    </div>
                    <div>
                        <a target="_blank" href="https://www.vietnambooking.com/du-lich" class="c-img"><img src="{{ asset('images/7.png') }}" alt=""></a>
                    </div>
                    <div>
                        <a target="_blank" href="https://bookvedulich.blogspot.com/" class="c-img"><img src="{{ asset('images/8.png') }}" alt=""></a>
                    </div>
                </div>

                @foreach ($random_news as $news)
                <div class="news-other mt-4">
                    <a href="{{ route('web.news-detail', $news->id) }}" class="c-img">
                        <img src="{{ asset($news->image) }}">
                    </a>

                    @if (session()->get('locale') == 'vi' || empty(session()->get('locale')))
                        <h3 class="mt-2 text-danger"><a href="{{ route('web.news-detail', $news->id) }}">{{ $news->title_vi }}</a></h3>
                    @elseif (session()->get('locale') == 'en')
                        <h3 class="mt-2 text-danger"><a href="{{ route('web.news-detail', $news->id) }}">{{ $news->title_en }}</a></h3>
                    @elseif (session()->get('locale') == 'ja')
                        <h3 class="mt-2 text-danger"><a href="{{ route('web.news-detail', $news->id) }}">{{ $news->title_ja }}</a></h3>
                    @endif
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@push('js')
@endpush