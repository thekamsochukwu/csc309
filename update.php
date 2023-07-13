
<?php
    $server = 'localhost'; // 127.0.0.1
    $username = 'root';
    $password = 'rootroot';
    $db = 'csc309';

    // Open a new connection
    $con = new mysqli($server, $username, $password, $db);

    // Check connection
    if ($con->connect_error){
        die("Connection failed: " . $con->connect_error);
    }

    // Query
    $sql = "UPDATE users SET firstname = 'Iruoma' WHERE id = 3";

    $result = $con->query($sql);

    if ($result === true) {
        echo 'Record updated successfully';
    } else {
        echo 'Error updating record: ' . $con->error;
    }

    // Close connection
    $con->close();
?>