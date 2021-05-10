@extends('layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
            <form class="bg-white shadow rounded py-3 px-4" method="POST" action="{{ route('contact') }}">
                @csrf
                <legend>{{__('Contact')}} </legend>
                
                <div class="form-group">
                    <label for="name">@lang('Your Name')</label>
                    <input class="form-control bg-light shadow-sm  @error('name') is-invalid @else border-0 @enderror" id="name" name="name" placeholder="Nombre..." value="{{ old('name') }}">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
        
                <div class="form-group">
                    <label for="email">@lang('Your email')</label>
                    <input class="form-control bg-light shadow-sm @error('email') is-invalid @else border-0 @enderror" type="email" id="email" name="email" placeholder="Email..." value="{{ old('email') }}"><br>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
        
                <div class="form-group">
                    <label for="subject">@lang('Subject')</label>
                    <input class="form-control bg-light shadow-sm @error('subject') is-invalid @else border-0 @enderror" type="text" id="subject" name="subject" placeholder="Asunto..." value="{{ old('subject') }}"><br>
                    @error('subject')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
        
                <div class="form-group">
                    <label for="content">@lang('Content')</label>
                    <textarea class="form-control bg-light shadow-sm @error('content') is-invalid @else border-0 @enderror" id="content" name="content" placeholder="Mensaje..." value="{{ old('content') }}"></textarea><br>
                    @error('content')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
        
                <button class="btn-primary btn-lg btn-block">@lang('Submit Message')</button>
            </form>  
        </div>
    </div>
</div>
@endsection