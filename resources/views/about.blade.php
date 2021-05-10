@extends('layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6">
            <img class="img-fluid mb-4" src="/img/developer_activity.svg" alt="Desarrollo Web">
        </div>
        <div class="col-12 col-lg-6">
            <h1 class="display-4 text-primary">
                @lang('About me')
            </h1>
            <p class="lead text-secondary">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis architecto illo optio cupiditate iste odit quo veniam cumque dolorem commodi modi magni harum exercitationem a tempora nemo sunt, placeat neque?
            </p>
            <a class="btn btn-lg btn-block btn-primary" href="{{route('contact')}}"> @lang('Contact me')</a>
            <a class="btn btn-lg btn-block btn-outline-primary" href="{{route('projects.index')}}"> @lang('Projects')</a>
        </div>
    </div>
</div>
@endsection