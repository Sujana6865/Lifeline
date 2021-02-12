<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Life Line</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mystyle.css') }}">
</head>
<body>
   
    <div class="container">
        {{-- navbar --}}
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#" style="color:red;"><h1>Lifeline</h1></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-primary text-sm text-gray-700 underline ">Login</a>
    
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-primary ml-4 text-sm text-gray-700 underline">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </nav>

        {{-- background --}}
        <div class="row mt-5">
            <div class="col-md-6 pt-md-2 p-0 order-md-last">
                <img src="{{ asset('svg/background.svg') }}" alt=""  width="600px" class="img-fluid">
            </div>
            <div class="col-md-6 pt-md-5 pt-0 ">
                <h1 class="font-weight-bolder display-4" style="color:#FF636F; font-family:Roboto;">DO YOU KNOW??</h1>
                <p class="text-secondary pt-md-3 pt-0" style=" line-height:30px; font-size:20px;">
                   Every second, someone in the country is in urgent need of blood. It is curcial surgeries, emergencies and accidents.
                </p>
                <p class="font-weight-bold display-5" style="color:#3F3D56;">Be a donor and save life. </p>
                <div class="pt-md-3 pt-0">
                    <a href="/dashboard" class="btn btn-primary w-25">Get Started</a>
                </div>
            </div>    
        </div>
    </div>

    
</body>
</html>