<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- Datatables --}}
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
</head>
<body>
    <div id="app">

        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand" id="knjigeeee" href="/book/books">Knjige</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    @if (Auth::user())
                        <a class="nav-link" id="nav" href="{{route("authors")}}">Autori</a>
                        <a class="nav-link" href="{{route("genres")}}">Zanrovi</a>
                        <a class="nav-link" href="{{route("publishers")}}">Izdavaci</a>
                        @if(Auth::user()->privilegeLevel =='ADMINISTRATOR')  

                            <a class="nav-link" href="{{route("users")}}">Korisnici</a>    
                            <a class="nav-link" href="/editor">Editorska stranica</a>
                            <a class="nav-link" href="{{route("rentBooks")}}">Izdavanje</a> 

                        @endif
                        @if (Auth::user()->privilegeLevel =='EDITOR')

                            <a class="nav-link" href="/editor">Editorska stranica</a>
                            <a class="nav-link" href="{{route("rentBooks")}}">Izdavanje</a>
                                   
                        @endif
                        <a class="nav-link" href="/kontakt">Kontakt</a>
                        <a class="nav-link" href="/oNama">O nama</a>
                        <a class="nav-link" href="#">{{Auth::user()->email}} </a>
                        <form action="{{route("logout")}}" method="POST" >
                            @csrf
                            <button type="submit" class="btn btn-default " style="color: gray" >Logout</button>
                        </form>
                    @else
                        <a class="nav-link" href="{{route("authors")}}">Autori</a>
                        <a class="nav-link" href="{{route("genres")}}">Zanrovi</a>
                        <a class="nav-link" href="{{route("publishers")}}">Izdavaci</a>
                        <a class="nav-link" href="/kontakt">Kontakt</a>
                        <a class="nav-link" href="/oNama">O nama</a>
                        <a class="nav-link" href="{{route("register")}}">Register</a> 
                        <a class="nav-link" href="{{route("login")}}">Login</a>
                    @endif

                  
                </div>
              </div>
            </div>
          </nav>

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif


        <main class="py-4">
            @yield('content')
        </main>
    </div>

</body>
</html>
