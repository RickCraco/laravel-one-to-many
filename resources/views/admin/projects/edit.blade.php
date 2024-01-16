@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>Edit {{$project->title}}</h1>
        <form action="{{ route('admin.projects.update', $project) }}"  method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
     <div class="mb-3">
            <label for="title">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                required minlength="3" maxlength="200" value="{{ old('title', $project->title) }}">
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
    </div>

    <div class="mb-3">
        <label for="body">Body</label>
        <textarea class="form-control @error('body') is-invalid @enderror" name="body" id="body" cols="30" rows="10">
        {{ old('body', $project->body) }}
        </textarea>
        @error('body')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
                <label for="image">Image</label>
                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" id="image" value="{{old('image', $project->image)}}">
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
    </div>

    <div class="mb-3">
        <label for="category">Select a category</label>
        <select class="form-control @error('category_id') is-invalid @enderror" name="category_id" id="category_id">
            <option value="">All</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-success">Save</button>
    <button type="reset" class="btn btn-primary">Reset</button>
    <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">Back</a>
        </form>
    </section>
@endsection