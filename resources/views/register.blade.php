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
        <form action="/register" method="post" class="col-md-6">
            <div class="form-group">
                <label for="name">Name</label>
                <input 
                    type="text" 
                    name="name" 
                    class="form-control"
                    value={{ old('name') }}
                >
            </div>
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
            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input 
                type="password" 
                name="password_confirmation"
                class="form-control"
                >
            </div>

            {{-- CSRF Token --}}
            @csrf

            <input 
                type="submit" 
                value="Register"
                class="btn btn-lg btn-primary float-right"
            >
        </form>
    </div>
@endsection