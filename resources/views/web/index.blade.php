@extends('layouts.master')

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
@endpush