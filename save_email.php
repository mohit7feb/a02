<?php
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
    
        // Open the file in append mode
        $file = fopen('index.txt', 'a');
    
        if ($file) {
            // Write the email to the file
            fwrite($file, $email . PHP_EOL);
    
            // Close the file
            fclose($file);
    
            // Send a success response back to the client
           
            // header("location:index.php");
        } else {
            // Handle errors if unable to open the file
            http_response_code(500);
            echo 'Error: Unable to open file';
        }
    } else {
        // Handle invalid requests
        http_response_code(400);
        echo 'Invalid request';
    }
    ?>