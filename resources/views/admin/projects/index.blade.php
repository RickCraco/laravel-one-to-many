@extends('layouts.app')
@section('content')
    <section class="container">
        <h1 class="my-4 text-danger">Projects List</h1>

        <a href="{{ route('admin.projects.create') }}" class="btn btn-danger mb-4">Add Project</a>

        @if(session()->has('message'))
            <div class="alert alert-success mt-4">{{ session()->get('message') }}</div>
        @endif

        <ul class="list-group my-3">
            <li class="list-group-item d-flex align-items-center justify-content-between bg-dark text-white">
                <h3>Title</h3>
                <div class="d-flex">
                    <span class="mx-2 btn btn-primary">Show</span>
                    <span class="mx-2 btn btn-secondary">Edit</span>
                    <span class="mx-2 btn btn-danger">Delete</span>
                </div>
            </li>
        </ul>

        <ul class="list-group">
            @foreach($projects as $project)
                <li class="list-group-item d-flex align-items-center justify-content-between bg-dark text-white">
                    {{ $project->title }}
                    <div class="d-flex">
                        <a href="{{ route('admin.projects.show', $project) }}" class="btn btn-primary mx-2"><i class="fa-solid fa-eye"></i></a>
                        <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-secondary mx-2"><i class="fa-solid fa-pen-to-square"></i></a>
                        <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" class="mx-2">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>

    </section>
@endsection