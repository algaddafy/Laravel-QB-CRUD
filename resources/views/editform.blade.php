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
                    @method('PUT')
                    <div class="form-group">
                      <label for="exampleInputEmail1">Username</label>
                      <input type="username" class="form-control" value="{{$userInfo->username}}" name="username" placeholder="Enter Username">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" value="{{$userInfo->email}}" name="email" placeholder="Enter email">
                      </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input class="form-control" value="{{$userInfo->password}}" name="password" placeholder="Password">
                    </div><br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>