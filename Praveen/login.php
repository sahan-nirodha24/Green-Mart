<?php
    include 'db.php';
    session_start();


    if(isset($_POST["login"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
        require_once "db.php";
        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_array($result, MYSQLI_ASSOC);

        if($user){
          if($password === $user["password"]){
            session_start();
            $_SESSION["user"] = $user["username"];
            header("Location: ../Sahan/index.html");
            
            exit();
          }else{
            echo '<script>alert("Password does not match!");</script>';
          }

        }else{
          echo '<script>alert("Check Credentials!");</script>';
        }

      }
?>