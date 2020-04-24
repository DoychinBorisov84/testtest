<?php
for ($i=0; $i < 10; $i++) { 
	echo 'Welcome from website'.$i.'<br/>	';
}
	
$servername = "localhost";
$username = "root";
$password = "root!Admin1";
$dbname = "test_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// $sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('John', 'Doe', 'john@example.com')";
$sql = "INSERT INTO users(name, phone) VALUES('Doychin', '00000000')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

	
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>hello</title>
</head>
<body>
<h1>Ubuntu Apache TEST Website 1 root</h1>
</body>
</html>