
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

    // Create a Table
    $sql = "INSERT INTO users (firstname, lastname, email) 
    VALUES ('Nwafor', 'Benjamin', 'benjaminn@gmail.com')";

    $result = $con->query($sql);

    if ($result === true) {
        echo 'Record inserted successfully';
    } else {
        echo 'Error inserting record: ' . $con->error;
    }

    // Close connection
    $con->close();
?>