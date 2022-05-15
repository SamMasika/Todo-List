<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Custom Authentication</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top:20px">
                <h4>Registration</h4>
                <hr> 
                <form action="{{route('registeruser')}}" method="POST">
                    @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('success')}}
                    </div>
                    @endif
                    @if(Session::has('fail'))
                    <div class="alert alert-danger" role="alert">
                        {{Session::get('fail')}}
                    </div>
                    @endif
                    @csrf

                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" class="form-control" placeholder="Enter the Name" name="name" value="{{old('name')}}">
                    </div>
                    <span class="span text-danger">@error('name') {{$message}} @enderror</span>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" placeholder="Enter the Name" name="email" value="{{old('email')}}">
                    </div>
                    <span class="span text-danger">@error('email') {{$message}} @enderror</span>
                    
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" placeholder="Enter the Name" name="password" value="{{old('password')}}">
                    </div>
                    <span class="span text-danger">@error('password') {{$message}} @enderror</span>

                    <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                </div>
                <br>
                <a href="/">Already Registered!!   Login Here.</a>
                </form>
            </div>
        </div>
    </div>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</html>