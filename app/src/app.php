<?php
    require_once __DIR__ . "/db.php";
    
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $message = trim($_POST['message']);

        if(!empty($name) && !empty($email) && !empty($message)){

            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                
                $stmt = $mysqli->prepare("INSERT INTO `contact_us` (`name`, `email`, `message`) VALUES(?, ?, ?)");
                $stmt->bind_param("sss", $name, $email, $message);
                $stmt->execute();
            }
        }
    }
?>