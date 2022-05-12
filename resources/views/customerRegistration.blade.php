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
  <body class="bg-dark">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">MT Studio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="{{ url('') }}">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="{{ url('/register') }}">Register</a>
      <a class="nav-item nav-link" href="{{ url('/customer') }}">Customer</a>
      {{-- <a class="nav-item nav-link disabled" href="#">Disabled</a> --}}
    </div>
  </div>
      </nav>
      {{-- <div class="container"> --}}
          <form action="{{ url("/") }}/customer" method="post">
            @csrf
            <div class="container mt-4 card p-3 bg-white">
                <h3 class="text-center text-primary">
                    Customer Registration
                </h3>
                <div class="row">
                    <div class="required form-group col-md-6">
                        <label for="">Name:</label>
                        <input type="text" name="name" id="" class="form-controll">
                        <span class="text-danger">
                            @error("name")
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="required form-group col-md-6">
                        <label for="">Email:</label>
                        <input type="email" name="email" id="" class="form-controll">
                            <span class="text-danger">
                            @error("email")
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="required form-group col-md-6">
                        <label for="">Password:</label>
                        <input type="password" name="password" id="" class="form-controll">
                        <span class="text-danger">
                            @error("password")
                            {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="required form-group col-md-6">
                        <label for="">Confirm password:</label>
                        <input type="password" name="password_confirmation" id="" class="form-controll">
                        <span class="text-danger">
                            @error("password_confirmation")
                            {{ $message }}
                            @enderror
                        </span>
                    </div>
                </div>
                <div class="row">
                        <div class="required form-group col-md-6">
                            <label for="">State:</label>
                            <input type="text" name="state" id="" class="form-controll">
                            <span class="text-danger">
                                @error("state")
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="required form-group col-md-6">
                            <label for="">City:</label>
                            <input type="text" name="city" id="" class="form-controll">
                                <span class="text-danger">
                                @error("city")
                                    {{ $message }}
                                @enderror
                            </span>
                </div>
                <div class="row">
                     <div class="required form-group col-md-6">
                            <label for="">Address:</label>
                            <textarea name="address" id="" cols="100" rows="3"></textarea>
                     </div>
                </div>
                <div class="row">
                  <div class="required form-group col-md-6">
                    <label for="">Gender:</label>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="M"/>
                    <label class="form-check-label" for="flexRadioDefault1"> M </label>
                    </div>
                    <div class="form-check form-check-inline">

                     <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="F"/>
                     <label  class="form-check-label" for="flexRadioDefault2"> F </label>
                    </div>
                    <div class="form-check form-check-inline">
                     <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault3" value="O"/>
                     <label class="form-check-label" for="flexRadioDefault3"> O </label>
                    </div>
                  </div>
                  <div class="required form-group col-md-6">
                      <label for="">Date of Birth</label>
                      <input class="form-controll" type="date" name="dob" id="">
                  </div>
                  <button class="btn btn-primary" type="submit">submit</button>
                </div>

                </div>
                {{-- </div> --}}
                {{-- <h1 class="text-center">Customer Registration</h1>
                <x-input name="name" type="text" label="Name"/>
                <x-input name="email" type="email" label="Email"/>
                <x-input name="password" type="password" label="Password"/>
                <x-input name="confirm_password" type="password" label="Confirm Password"/>
                <x-input name="country" type="text" label="Country"/>
                <x-input name="state" type="text" label="State"/>
          <x-input name="dob" type="date" label="Date of Birth"/>
          <div>
           <label for="">Gender</label>
            <input type="radio" name="" id="">
           </div> 
        </div>
        <button class="btn btn-primary" type="submit">Submit</button> --}}
        </form>
        
  </body>
</html>