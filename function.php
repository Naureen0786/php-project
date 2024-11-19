<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
// Function to make a database connection
function makeconnection()
{
    // Attempt to connect to the MySQL database
    $cn = mysqli_connect("localhost", "root", password: "", database: "travel");

    // Check for connection errors
    if(mysqli_connect_errno())
    {
        // Output the connection error
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    
    // Return the connection object
    return $cn;
}

// Call the function to establish the connection
$cn = makeconnection();
?>
</body>
</html>
