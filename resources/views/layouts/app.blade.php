<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login System</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    <body>
       <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom mb-5">
            <div class="container">
                <a href="/" class="navbar-brand">Laravel</a>

                <button 
                    class="navbar-toggler" 
                    type="button" 
                    data-toggle="collapse" 
                    data-target="#navbarSupportedContent" 
                    aria-controls="navbarSupportedContent" 
                    aria-expanded="false" 
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
    
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">

                        @if (Auth::guest())
                            <li class="nav-item active">
                                <a class="nav-link" href="/register">Register</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="/login">Login</a>
                            </li>
                        @else
                            <li class="nav-item active">
                                <a class="nav-link" href="#">
                                    {{ Auth::user()->email }}
                                </a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="/logout">Logout</a>
                            </li>
                        @endif
                        
                    </ul>
                </div>
            </div>
       </nav>

       <div class="container">
            @yield('content')
       </div>
    </body>
</html>
