<?php
    include "config.php";
    session_start();
if(isset($_POST['email'])){
      $email=$_POST['email'];
      $password=md5($_POST['password']);

      $sel = "SELECT * FROM login_tb where email='".$email."' AND password='".$password."'";

      $result = mysqli_query($con,$sel);

      if(mysqli_num_rows($result)==1){
        $_SESSION['useremail'] = $email;
        $_SESSION['userpassword'] = $password;
        header("location:dash.php");
      }
}
?>
<!DOCTYPE html>
<html>
<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- css -->
    <link href="assets/css/login.css" rel="stylesheet">
</head>
<body>
    <!-- new -->
    <div class="logincontainer">
      <div class="form p-3">         
        <h1 class="text-center text-white">Only admin can login here</h1>
        <div>
          <form class="p-3" action="login.php" method="POST">
            <!-- Email input -->
            <div class="p-3">
                <input type="email" id="form2Example1" class="form-control" placeholder="Email" name="email"/>
              </div>
              <!-- Password input -->
              <div class="p-3">
                <input type="password" id="form2Example2" class="form-control" placeholder="Password" name="password"/>
              </div>
              <div class="p-3">
              <!-- Submit button -->
              <input class="button" type="submit" name="submit" value="Login">
              </div>
        </form>
</div>
</body>
</html>
