<?php
    include 'db.php';
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $nic = $_POST['nic'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $stmt = $conn->prepare("INSERT INTO users (firstname, lastname, email, phone, nic, username, password) VALUES (?,?,?,?,?,?,?)");
        $stmt->bind_param("sssssss", $firstname,  $lastname, $email, $phone, $nic,  $username, $password);

        if($stmt->execute()){
            header('Location: login.html');
            exit();
        } else {
            echo "ERROR : " . $stmt->error;
        }

        $stmt->close();
        $conn->close();
    }
?>
