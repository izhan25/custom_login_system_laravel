@extends('layouts.app')

@section('content')

@if ($errors->any())
    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        {{ $error }}
                        <br>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endif

<div class="row d-flex justify-content-center">
    <form action="/login" method="post" class="col-md-6">
        <div class="form-group">
            <label for="email">Email</label>
            <input 
                type="email" 
                name="email" 
                class="form-control"
                value={{ old('email') }}
            >
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input 
                type="password" 
                name="password" 
                class="form-control"
                value={{ old('password') }}
            >
        </div>

        {{-- CSRF Token --}}
        @csrf

        <input 
            type="submit" 
            value="login"
            class="btn btn-lg btn-primary float-right"
        >
    </form>
</div>
@endsection