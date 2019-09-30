<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ $title ->site_name}}</title>
@yield('styles')

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
 <script src="{{ asset('js/toastr.min.js') }}"></script>
<script src="{{ asset('css/toastr.min.css') }}"></script> 



<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{asset('js/toastr.min.js')}}" rel="stylesheet">
<link href="{{asset('css/toastr.min.css')}}" rel="stylesheet">
{{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script> --}}
    
    
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
    {{ $title }}
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav mr-auto">
        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            @endif
            @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="">Dashboard</a>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
            @endguest
        </ul>
    </div>
    </div>
    </nav>
    <div class="container">
        <div class="row">
            @if(Auth::check())
            <div class="col-lg-4">
                <main class="py-4">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="{{route('home')}}">Home</a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{route('categories')}}">Categories</a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{route('category.create')}}">Create a new category</a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{route('tags')}}">Tags</a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{route('tag.create')}}">Create a new tag</a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{route('posts')}}">All Posts</a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{route('posts.trashed')}}">All Trashed Posts</a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{route('post.create')}}">Create a new post</a>
                        </li>
                        @if(Auth::user()->admin)
                        <li class="list-group-item">
                            <a href="{{route('users')}}">Users</a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{route('user.create')}}">New user</a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{route('settings')}}">Settings</a>
                        </li>
                        @endif
                        <li class="list-group-item">
                            <a href="{{route('user.profile')}}">My Profile</a>
                        </li>
                    </ul>
                </main>
            </div>
            @endif
            <div class="col-lg-8">
                <main class="py-4">
                    @yield('content')
                </main>
            </div>
        </div>
    </div>
</div>
    <script>
        @if(Session::has('success'))
            toastr.success( "{{ Session::get('success') }}" )
        @endif
        @if(Session::has('info'))
        toastr.info( "{{ Session::get('info') }}" )
        @endif
    </script>
    @yield('scripts')
</body>
</html>
