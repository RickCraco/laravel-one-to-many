@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>Edit {{$category->name}}</h1>
        <form action="{{ route('admin.categories.update', $category) }}"  method="POST">
        @csrf
        @method('PUT')
     <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                required minlength="3" maxlength="200" value="{{ old('name', $category->name) }}">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
    </div>

    <button type="submit" class="btn btn-success">Save</button>
    <button type="reset" class="btn btn-primary">Reset</button>

        </form>
    </section>
@endsection