    <?php
    $dbServer = "localhost";
    $dbUsername = "root";    // This is the same username as phpMyAdmin
    $dbPassword = "";    // This is the same password as phpMyAdmin
    $dbName = "blog_cms";

    // Create connection
    $conn = mysqli_connect($dbServer, $dbUsername, $dbPassword, $dbName);
?>