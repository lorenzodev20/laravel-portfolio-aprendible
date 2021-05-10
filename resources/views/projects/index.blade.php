@extends('layout')

@section('title')
@lang('Projects')
@endsection

@section('content')
<div class="container">
    <div class="d-flex justify-content-between aling-items-center mb-3">
        <h2> @lang('Projects') </h2>
        @auth
        <a class="btn btn-primary" href="{{ route('projects.create') }}">
            @lang('Create Project')
        </a>
        @endauth
    </div>
    
    <ul class="list-group">
        @forelse ($projects as $project)
            <li class="list-group-item border-0 mb-3 shadow-sm">
                <a class="text-secondary d-flex justify-content-between aling-items-center" href="{{route('projects.show', $project)}}">
                    <span class="font-weight-bold">
                        {{ $project->title}}
                    </span>
                    <span class="text-black-50">
                        {{ $project->created_at->format('d/m/Y')}}
                    </span>
                </a>
            </li>   
        @empty
            <li class="list-group-item border-0 mb-3 shadow-sm">
                @lang('No Projects')
            </li>
        @endforelse
        {{ $projects->links()}}
    </ul>  
</div>
@endsection