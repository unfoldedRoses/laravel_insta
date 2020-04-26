@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <div class="col-3 p-5">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRbt9XEiZkVoKQYJ_C9rfeKD4o_V9UL4Shxc7TKwUob-StHsZBE&usqp=CAU" alt="">

    </div>

 <form action="/p" enctype="multipart/form-data" method="post">
   @csrf
    <div class="col-9 offset-2">
        
        <div class="form-group row">
            <label for="caption" class="col-md-4 col-form-label text-md-right">{{ __('caption') }}</label>

            <div class="col-md-6">
                <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}" required autocomplete="caption" autofocus>

                @error('caption')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="form-group row">
            <input type="file" id="image"  class="form-control-files" name="image" >
            
            @error('image')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
        <div class="row">
            <button class="btn btn-primary">Add Post</button>
        </div>
    </div>

 </form>
    </div>    
</div>    
@endsection