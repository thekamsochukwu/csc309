
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
    // $sql = "SELECT * FROM users WHERE id = 1";
    // $sql = "SELECT * FROM users WHERE lastname = 'Igwe'";
    // $sql = "SELECT * FROM users WHERE email like '%@gmail.com'";
    // $sql = "SELECT * FROM users WHERE id > 0 ORDER BY id";
    $sql = "SELECT * FROM users ORDER BY id DESC";
    
    $result = $con->query($sql);

    if ($result->num_rows > 0){
        
        while($row = $result->fetch_assoc()){
            echo $row['id'] . ' ' . $row['firstname'] . ' ' . $row['lastname'] . 
            ' ' .$row['email'] . '<br>';
        }

    } else {
        echo "No result";
    }

    // Close connection
    $con->close();
?>