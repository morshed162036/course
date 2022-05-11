<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        @php
            $demo = 1;
        @endphp
        <form action="{{url('/')}}/register" method="post">
            @csrf
            <p class="text-center">Registration
            </p>
            <x-input type="text" name="name" label="Name" :demo="$demo"/>
            <x-input type="email" name="email" label="Email"/>
            <x-input type="password" name="password" label="Password"/>
            <x-input type="password" name="password_confirmation" label="Confirmed Password"/>
            <button class="btn btn-primary" type="submit">submit</button>
        </form>
    </div>  
    
  </body>
</html>