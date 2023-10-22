<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <form action="" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1">Username</label>
                      <input type="username" class="form-control" name="username" placeholder="Enter Username">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter email">
                      </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" name="password" placeholder="Password">
                    </div><br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                  @if (session()->has('status'))
                  <div class="alert alert-success">
                    {{session('status')}}
                  </div>
                  @endif
                  
            </div>
            <div class="col-md-6">
                <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Password</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($usersInfo as $users)
                            
                        <tr>
                            <th scope="row">{{ $users->id }}</th>
                            <td>{{ $users->username }}</td>
                            <td>{{ $users->email }}</td>
                            <td>{{ $users->password }}</td>
                            <td>
                                <a href="{{url('/editform',$users->id)}}" class="btn btn-primary">Edit</a>
                                <a href="{{url('/editform',$users->id)}}" class="btn btn-danger">Delete</a>
                            </td>
                          </tr>

                          @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>