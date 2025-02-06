<!doctype html> 
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> 
<head> 
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <!-- CSRF Token --> 
    <meta name="csrf-token" content="{{ csrf_token() }}"> 
 
    <title>{{ config('app.name', 'NMU Blogs') }}</title> 
 
    <!-- Fonts --> 
    <link rel="dns-prefetch" href="//fonts.bunny.net"> 
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet"> 
 
    <!-- Custom Styles -->
    <!-- <style>
        .navbar-custom {
            background-color:rgb(207, 189, 223) !important; /* Soft pastel green */
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); /* Light shadow */
            padding: 10px 15px; /* More comfortable spacing */
        }
        .content-container {
            background: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 90%;
            margin: 20px auto;
        }
    </style> -->
    <style>  
    .navbar-custom {  
        background: linear-gradient(135deg, #6a11cb, #2575fc); /* Keeping original gradient */
        border-radius: 12px; /* Smooth rounded corners */
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); /* Stronger shadow for depth */
        padding: 15px 20px;  
        display: flex;
        align-items: center;
        justify-content: space-between; /* Spacing elements */
    }  

    .navbar-brand {  
        font-weight: bold;  
        color: white !important;  
        font-size: 1.8rem;  
        margin-left: 20px;
    }  

    .nav-link {  
        color: rgba(255, 255, 255, 0.9) !important;  
        font-weight: 500;  
        transition: color 0.3s ease-in-out;  
        padding: 8px 15px;
    }  

    .nav-link:hover {  
        color: #ffdd57 !important; /* Bright yellow hover effect */ 
    }  

    .navbar-toggler {  
        border: none;  
        background: rgba(255, 255, 255, 0.2);  
        padding: 10px 14px;  
        border-radius: 6px;  
        margin-right: 20px;
    }  

    .dropdown-menu {  
        border-radius: 8px;  
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.15);  
        background: #ffffff;
    }  

    /* Centering the brand */
    .navbar-container {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    /* Adjust menu on smaller screens */
    @media (max-width: 768px) {
        .navbar-custom {
            flex-direction: column;
            padding: 10px;
        }
        .navbar-brand {
            margin: 10px 0;
        }
    }
</style>


    <!-- Scripts --> 
    @vite(['resources/sass/app.scss', 'resources/js/app.js']) 
</head> 
<body> 
    <div id="app"> 
        <nav class="navbar navbar-custom">  
            <div class="container"> 
                <a class="navbar-brand" href="{{ url('/') }}"> 
                    NMU Plogs 
                </a> 
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}"> 
                    <span class="navbar-toggler-icon"></span> 
                </button> 
 
                <div class="collapse navbar-collapse" id="navbarSupportedContent"> 
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0"> 
                        <li class="nav-item"> 
                            <a class="nav-link active" href="/posts">Home</a> 
                        </li> 
                    </ul> 
                </div>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent"> 
                    <ul class="navbar-nav ms-auto"> 
                        @guest 
                            @if (Route::has('login')) 
                                <li class="nav-item"> 
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a> 
                                </li> 
                            @endif 
 
                            @if (Route::has('register')) 
                                <li class="nav-item"> 
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a> 
                                </li> 
                            @endif 
                        @else 
                            <li class="nav-item dropdown"> 
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre> 
                                    {{ Auth::user()->name }} 
                                </a> 

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown"> 
                                    <a class="dropdown-item" href="{{ route('logout') }}" 
                                       onclick="event.preventDefault(); 
                                                     document.getElementById('logout-form').submit();"> 
                                        {{ __('Logout') }} 
                                    </a> 

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none"> 
                                        @csrf 
                                    </form> 
                                </div> 
                            </li> 
                        @endguest 
                    </ul> 
                </div> 
            </div> 
        </nav> 

        <main class="py-4"> 
        <div class="content-container">
            @yield('content') 
        </main> 
    </div> 
</body> 
</html>

<style>  
    .navbar-custom {  
        background: linear-gradient(135deg, #6a11cb, #2575fc); /* Keeping original gradient */
        border-radius: 15px; /* More rounded corners */
        box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.3); /* Deeper shadow */
        padding: 15px 30px;  
        display: flex;
        align-items: center;
        justify-content: space-between; /* Proper spacing */
        margin: 10px auto; /* Adds margin for floating effect */
        width: 95%; /* Slightly smaller than full-width */
    }  

    .navbar-brand {  
        font-weight: bold;  
        color: white !important;  
        font-size: 1.8rem;  
    }  

    .nav-link {  
        color: rgba(255, 255, 255, 0.9) !important;  
        font-weight: 600;  
        transition: color 0.3s ease-in-out;  
        padding: 10px 20px;
        border-radius: 8px;
    }  

    .nav-link:hover {  
        background: rgba(255, 255, 255, 0.2); /* Subtle hover effect */
    }  

    .navbar-toggler {  
        border: none;  
        background: rgba(255, 255, 255, 0.3);  
        padding: 12px;  
        border-radius: 8px;  
    }  

    .dropdown-menu {  
        border-radius: 10px;  
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);  
        background: #ffffff;
    }  

    /* Centering the brand */
    .navbar-container {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    /* Mobile Responsive Adjustments */
    @media (max-width: 768px) {
        .navbar-custom {
            flex-direction: column;
            padding: 12px;
            width: 100%;
            border-radius: 0; /* Remove rounding on small screens */
        }
        .navbar-brand {
            margin-bottom: 10px;
        }
    }
</style>
<style> 
    .navbar-custom { 
        background: linear-gradient(135deg, #6a11cb, #2575fc); /* Gradient background */
        border-radius: 12px; /* Rounded corners */
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); 
        padding: 12px 20px; 
    } 

    .navbar-brand { 
        font-weight: bold; 
        color: white !important; 
        font-size: 1.5rem; 
    } 

    .nav-link { 
        color: rgba(255, 255, 255, 0.9) !important; 
        font-weight: 500; 
        transition: color 0.3s ease-in-out; 
    } 

    .nav-link:hover { 
        color: #ffdd57 !important; /* Bright yellow hover effect */
    } 

    .navbar-toggler { 
        border: none; 
        background: rgba(255, 255, 255, 0.2); 
        padding: 8px 12px; 
        border-radius: 6px; 
    } 

    .dropdown-menu { 
        border-radius: 8px; 
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.15); 
    } 
</style>