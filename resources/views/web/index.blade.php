{{-- @extends('layouts.master')

@section('title') Trang chủ @endsection

@section('content')
    <div class="container">
  
        <h1>How to Create Multi Language Website in Laravel - ItSolutionStuff.com</h1>
  
        <div class="row">
            <div class="col-md-2 col-md-offset-6 text-right">
                <strong>Select Language: </strong>
            </div>
            <div class="col-md-4">
                <select class="form-control changeLang">
                    <option value="vi" {{ session()->get('locale') == 'vi' ? 'selected' : '' }}>VietNam</option>
                    <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                    <option value="ja" {{ session()->get('locale') == 'ja' ? 'selected' : '' }}>Japan</option>
                </select>
            </div>
        </div>
    
        <h1>{{ __('messages.title') }}</h1>
        <h1>{{ __('messages.array.array1') }}</h1>
        <h1>{{ __('messages.array.array2') }}</h1>
     
    </div>
@endsection

@push('js')
<script type="text/javascript">
  
    var url = "{{ route('web.change') }}";
  
    $(".changeLang").change(function(){
        window.location.href = url + "?lang="+ $(this).val();
    });
  
</script>
@endpush --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
    <meta content="Themesbrand" name="author">
    <!-- App favicon -->
    {{-- <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}"> --}}

    @yield('css')
    @stack('css')


    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('scss/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('scss/media.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('slick/slick.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('jquery-fancybox/dist/jquery.fancybox.min.css') }}" type="text/css">
</head>
<body>
    <header class="header-index">
        <div class="container">
            <div class="row">
                <div class="col-auto">
                    <a href="{{ route('web.index') }}" title="" class="c-img logo">
                        <img src="{{ asset('images/logo.png') }}" alt="" title="">
                    </a>
                    <h1>Asia & Beyond</h1>
                    <a href="{{ route('web.ads') }}" title="" class="link-web">Advertise</a>
                    <div class="icon">
                        <a href="#" title=""><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
                        <a href="#" title=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#" title=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="#" title=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <video loop muted autoplay class="video-index">
        <source src="{{ asset('video/video.mp4') }}" type="video/mp4">
    </video>

    <script src="{{ asset('js/jquery-2.2.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('slick/slick.js') }}"></script>
    <script src="{{ asset('js/select2.min.js') }}"></script>
    <script src="{{ asset('jquery-fancybox/dist/jquery.fancybox.min.js') }}"></script>

    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

      // add class paginate theme
      $('ul.pagination').addClass('pagination-rounded justify-content-center mt-4 mb-4');

      // toastr noti
        @if(Session::has('alert-success'))
            Command: toastr["success"]("{{ Session::get('alert-success') }}")

            toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": 300,
                "hideDuration": 1000,
                "timeOut": 0,
                "extendedTimeOut": 1000,
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
        @endif

        @if(Session::has('alert-error'))
        Command: toastr["error"]("{{ Session::get('alert-error') }}")

        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": 300,
            "hideDuration": 1000,
            "timeOut": 5000,
            "extendedTimeOut": 1000,
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
        @endif
    </script>

    @yield('js')
    @stack('js')
</body>
</html>