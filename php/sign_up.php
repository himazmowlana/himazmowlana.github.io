<?php
$servername = "us-cdbr-east-05.cleardb.net";
$username = "b3ad6a10dab11a";
$password = "d580063c";
$dbname = "heroku_e0ed7e9fc06918d";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "INSERT INTO sign_up (username, email, password)
VALUES ('".$_POST['username']."', '".$_POST['email']."', '".$_POST['password']."')";

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

if ($conn->query($sql) === TRUE) {
    header("Location: login.php");
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<!-----Remarks
Username: S. M Himaz H. Mowlana
Start Date: 14-09-2021
End Date: 19-12-2021----->