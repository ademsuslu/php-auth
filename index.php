<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Auth</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <style>
    body {
        background: rgb(2,0,36);
        background: linear-gradient(90deg, rgba(0,36,20,1) 0%, rgba(16,255,27,1) 0%, rgba(0,212,255,1) 100%);

    }
  </style>
  <body>
    

<div class="container my-5">
    <div class="row">
        <div class="col-md-6 com-xm-12">
            <h1 class="text-center">Kayıt Ol</h1>
            <form action="signup.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Enter Username">
                </div>
        
                <div class="form-group my-3">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                
                <div class="form-group my-3">
                    <label for="confirmpassword">Confirm Password</label>
                    <input type="password" name="confirmpassword" class="form-control" id="confirmpassword" placeholder="Confirm Password">
                </div>
                
                <button name="signup" type="submit" class="btn btn-primary w-100">Kayıt ol</button>
            </form>
        </div>
        <div class="col-md-6 com-xm-12">
             <h1 class="text-center">Giriş Yap</h1>
            <form method="post" action="login.php">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Enter Username">
                </div>
                <div class="form-group my-3">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
                </div>
                <button name="login" type="submit" class="btn btn-primary w-100">Giriş Yap</button>
            </form>
        </div>
    </div>
</div>

  </body>
</html>