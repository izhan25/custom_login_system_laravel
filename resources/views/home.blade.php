@extends('layouts.app')

@section('content')
    @if (Auth::guest())
        <h2 class="text-center text-muted">Please Login or Register</h2>
    @else
        <h2 class="text-center text-muted">Welcome {{ Auth::user()->name }}</h2>
    @endif
        
@endsection