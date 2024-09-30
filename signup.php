<?php
$user=0;
$success = 0;
$match = 0;
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        include ('connect.php');
        if(isset($_POST['signup'])){
            $username=$_POST['username'];
            $password=md5($_POST['password']);
            $confirmpassword=md5($_POST['confirmpassword']);
        }{
            //! username is already registered ? check your username
            $sql = "SELECT * FROM `data` WHERE `username` = '$username'";
            $result = mysqli_query($con,$sql);
            if($result){
                $num = mysqli_num_rows($result);
                if($num > 0){
                    $user=1;
                    //echo "Username already exists";
                } else {
                      if($password !== $confirmpassword){
                        $match = 1;
                      }else{
                        $sql="insert into  `data` (username,password) values('$username','$password')";
                        $result = mysqli_query($con,$sql);
                       if($result){
                          $success = 1;
                       }else {
                            die(mysqli_error($con));
                       }
                      }
                }

            }else {
                 die(mysqli_error($con));
            }


        }
    }


?>

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
<?php
if($user){

    echo "
    <div class='container mx-auto mt-3'>
        <div class='alert alert-danger' role='alert'>
    User Allready Exists
    </div>
</div>
";
}
else{
    if($success){
        echo "
        <div class='container mx-auto mt-3'>
            <div class='alert alert-success' role='alert'>
                 User Registered Successfully
            </div>
        </div>
    ";
    }else {
        if ($match) {
            echo "
    <div class='container mx-auto mt-3'>
        <div class='alert alert-danger' role='alert'>
    Password did'nt match
    </div>
</div>
";
        }
    }

}
?>

    
</body>
</html>