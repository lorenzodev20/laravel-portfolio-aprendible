@extends('layout')

@section('title')
@lang('Projects') | {{$project->title}}
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
            <h2>{{$project->title}} </h2>
            <p class="text-secondary">
                {{ $project->description}}
            </p>
            <p class="text-black-50">{{ $project->created_at->diffForHumans() }}</p>
            <div class="d-flex justify-content-between aling-items-center">
                <a href="{{ route('projects.index')}}">
                    @lang('Go back')
                </a>
                @auth
                <div class="btn-group btn-group-sm">
                    <a class="btn btn-primary" href="{{ route('projects.edit', $project)}}" > 
                        @lang('Edit Project')
                    </a>
                    <a class="btn btn-danger" href="#" onclick="event.preventDefault();
                    document.getElementById('delete-project').submit();">
                    @lang('Delete Project')
                    </a>
                </div>
                <form method="POST" class="d-none" id="delete-project" action="{{ route('projects.destroy', $project) }}">
                    @csrf
                    @method('DELETE')
                </form>
                @endauth
            </div>
        </div>
    </div>
</div>
@endsection