<!doctype html>
<html lang="en">
  <head>
    <title>Posty</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="bg-gradient-to-r from-pink-200 to-blue-300">
      <nav class="p-6 bg-white flex justify-between mb-6">
               <ul class="flex items-center">

            @auth
                <li class="p-3">
                   {{ auth()->user()->name }}
                </li>
                <li>
                    <form action="{{ route('logout') }}" method="POST" class="inline p-2">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                   
                </li>
            @endauth

        @guest
            <li>
                <a href="{{ route('register') }}"class="p-3">Register</a>
            </li>
            <li>
                <a href="{{ /login }}"class="p-3">Admin</a>
            </li>
            <li>
                <a href="{{ /login }}"class="p-3">Login</a>
            </li>
        @endguest
                

        </ul>
      </nav>

      <style>
          body{
                font-family: Arial, Helvetica, sans-serif;
              }
          </style>
    @yield('content')
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>