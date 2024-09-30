<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        include ('connect.php');
        if(isset($_POST['signup'])){
            $username=$_POST['username'];
            $password=md5($_POST['password']);
            $confirmpassword=md5($_POST['confirmpassword']);
        }{


            // $sql="insert into  `data` (username,password) values('$username','$password')";
            // $result = mysqli_query($con,$sql);
            // if($result){
            //     echo "You have successfully registered";
            // }else {
            //     echo "Error: ". $sql. "<br>". mysqli_error($con);
            // }

            //! username is already registered ? check your username
            $sql = "SELECT * FROM `data` WHERE `username` = '$username'";
            $result = mysqli_query($con,$sql);
            if($result){
                $num = mysqli_num_rows($result);
                if($num > 0){
                    echo "Username already exists";
                } else {
                      if($password !== $confirmpassword){
                        echo "Password is incorrect";
                      }else{
                        $sql="insert into  `data` (username,password) values('$username','$password')";
                        $result = mysqli_query($con,$sql);
                       if($result){
                           echo "You have successfully registered";
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