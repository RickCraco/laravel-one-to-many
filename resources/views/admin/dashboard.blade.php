@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fs-4 text-danger my-4">
        {{ __('Dashboard') }}
    </h2>
    <div class="row justify-content-center">
        <div class="col">
            <div class="card bg-dark text-white border-white">
                <div class="card-header border-white">{{ __('Admin Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    You are logged in as {{ Auth::user()->name }}.
                    <div class="mt-3">
                        <div class="my-4">If you want to see all your projects click below <i class="fa-solid fa-arrow-down"></i></div>
                        <a href="{{ route('admin.projects.index') }}" class="btn btn-danger">Control Panel</a>
                        <div class="my-4">If you want to see all your categories click here <i class="fa-solid fa-arrow-down"></i></div>
                        <a href="{{ route('admin.categories.index') }}" class="btn btn-danger">Control Panel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
