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
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  {{-- <a class="navbar-brand" href="#">@if (session()->get('user_name')=='')
    Guest
  
    
  @else
    {{ session()->get('user_name') }}
    
  @endif</a> --}}
  <a class="navbar-brand" href="#">@if (session()->has('user_name'))
    {{ session()->get('user_name') }}
    
  @else
    Guest
    
  @endif</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="{{ url('') }}">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="{{ url('/customer/create') }}">Register</a>
      <a class="nav-item nav-link" href="{{ url('/customer') }}">Customer</a>
      {{-- <a class="nav-item nav-link disabled" href="#">Disabled</a> --}}
    </div>
  </div>
      </nav>
    <div class="container">
      {{-- <a href="{{ url('/') }}/customer/create"><button class="btn btn-primary">Add</button></a> --}}
      <a href="{{url('/customer')}}"><button class="btn btn-primary">Customer list</button></a>
      
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Date of Birth</th>
                    <th>Address</th>
                    <th>State</th>
                    <th>Country</th>
                    <th>Status</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                
                <tr>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>@if ($customer->gender == "M")
                        Male
                        @elseif ($customer->gender == "F")
                        Female
                        @else
                        Other
                        @endif
                    </td>
                    {{-- <td>{{get_formatted_date( $customer->dob, "d-M-Y") }}</td> --}}
                    <td>{{ $customer->dob }}</td>
                    <td>{{ $customer->address }}</td>
                    <td>{{ $customer->state }}</td>
                    <td>{{ $customer->country }}</td>
                    <td>@if ($customer->status == 1)
                        <button class="btn">
                          <span class="badge badge-success">Active</span>
                        </button> 
                        @else
                        <button class="btn">
                          <span class="badge badge-danger">Inactive</span>
                        </button> 
                        
                        @endif
                    </td>
                    <td>
                      {{-- <a href="{{ url('customer/delete') }}/{{ $customer->customer_id }}">
                        <button class="btn btn-danger">Delete</button>
                      </a> --}}
                      <a href="{{ route('customer.forceDelete',['id'=> $customer->customer_id ])}}">
                        <button class="btn btn-danger">Delete</button>
                      </a>
                      <a href="{{ route('customer.restore',['id'=> $customer->customer_id ])}}"><button class="btn btn-primary">Restore</button></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
  </body>
</html>