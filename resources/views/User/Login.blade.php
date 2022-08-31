<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('style/bootstrap.min.css')}}">
</head>
<body>
   <div class="container">
    <div class="row" style="margin-top: 45px">
        <div class="col-md-4 col-md-offset-4">
            <form action="">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" id="email" class="form-control" name="email" placeholder="Enter Your Email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" class="form-control" name="password" placeholder="Enter Password">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-block btn-primary">Login</button>
                </div>
                <br>
                <a href="register">Create New Account Now ....</a>
            </form>
        </div>
    </div>
   </div>
</body>
</html>