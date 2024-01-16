@extends('layouts.app')
@section('content')
    <section class="container my-4">
        <h1 class="text-danger">{{ $project->title }}</h1>
        <div class="card w-50 bg-dark text-white border-white mt-5">
            <img src="{{asset('storage/' . $project->img) }}" class="card-img-top" alt="{{ $project->title }}">
            <div class="card-body">
                <h5 class="card-title">{{ $project->title }}</h5>
                <p class="card-text">{{ $project->body }}</p>
                <p>{{$project->category ? $project->category->name : 'Uncategorized'}}</p>
                @for($i = 0; $i < count($project->technologies); $i++)
                    @if($project->technologies[0] !== '')
                        <div><i class="fa-solid {{ $project->technologies[$i]}}"></i></div>
                    @else

                    <p>No technologies</p>

                    @endif
                @endfor
                <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-danger">Edit</a>
                <a href="{{ route('admin.projects.index') }}" class="btn btn-danger">Back</a>
            </div>
        </div>
    </section>
@endsection