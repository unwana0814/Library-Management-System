<!doctype html>
<html lang="en">
  <head>
    <title>Library System</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="bg-white">
      <nav class="p-4 bg-white flex justify-between mb-2">
        <ul class="flex items-center">
            <li>
                <a href=""><img src="../Images/logo.jpg" alt="Logo" width="15%"></a>
            </li>
        </ul>

        <ul class="flex items-center">
            <li>
                <a href=""class="p-3">About Us</a>
            </li>

            @guest
                <li>
                <button class="border-b-2 p-1 m-2 bg-primary rounded text-white"><a href="{{ route('author.register') }}"class="p-3">Register</a></button>
            </li>

            <li>
              <button class="border-b-2 p-1 m-2 bg-primary rounded text-white"><a href="{{ route('login') }}"class="p-3">Admin</a></button>
          </li>


            <li>
              <button class="border-b-2 p-1 m-2 bg-primary rounded text-white"><a href="{{ route('login') }}"class="p-3">Login</a></button>
          </li>

            @endguest
          
            @auth
              <li class="p-3">
            {{-- {{ auth()->user()->name }} --}}
         </li>
         <li>
             <form action="" method="POST" class="inline p-2"> {{-- route('logout'){{ route('logout') }} --}}
                 @csrf
                 <button type="submit" class="border-b-2 p-1 m-2 bg-danger rounded text-white">Logout</button>
             </form>
         </li> 
            @endauth
         
        </ul>
      </nav>

      <style>

          body{
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
              }
          </style>

<div class="flex items-center min-h-screen bg-gray-100">
    <div class="flex-1 h-full max-w-5xl mx-auto bg-white rounded-lg shadow-xl">
      <div class="flex flex-col md:flex-row">
        <div class="h-32 md:h-auto md:w-2/2">
          <img class="object-cover w-10/12 h-10/12 mt-10 ml-15" src="../Images/classroom.jpg"
            alt="img" />
        </div>

        <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
          <div class="w-full">
            <div class="flex justify-center">
                <h1 class="mb-4 text-3xl font-bold text-center text-gray-700">Online <pre class="text-blue-500 text-3xl"> Library</h1>
                    
            </div>
           <div>
               <p class="text-center text-gray-700" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui quibusdam consequuntur saepe alias nesciunt mollitia reprehenderit libero, ab consectetur laudantium ea id accusantium aliquam suscipit? Harum alias repellendus cum reiciendis!Ex omnis similique adipisci doloremque, modi eaque eum quas vero consequuntur nulla enim ut! Corporis mollitia saepe voluptatibus praesentium voluptas eos at! Saepe nesciunt sit rerum itaque provident eaque reiciendis?</p>
           </div>
            
        </div>
      </div>
    </div>
  </div>
 
   </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>