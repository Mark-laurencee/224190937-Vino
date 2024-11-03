<?php
    $password = "hesoyam123";  
        do {
            $inputPassword = readline("Please enter the password: ");

            if ($inputPassword !== $password) {
                echo "Incorrect password.\n";
            }
            
        } while ($inputPassword !== $password);
            echo "Access Granted.\n";
?>
