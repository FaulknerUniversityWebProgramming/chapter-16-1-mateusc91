<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $expiredTime = time() + (360 * 24);
        
        setcookie("Theme", $_POST['theme'], $expiryTime);
        setcookie("Philosopher", $_POST['philosopher'], 0);
        
        header("Location: chapter16-project1.php");
    }
?>