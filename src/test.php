<?php
$servername = $_ENV['DBIP'];
$username = $_ENV['DBUSER'];
$password = $_ENV['DBPASS'];
$dbname = $_ENV['DBNAME'];


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, firstname FROM test";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"];
    }
} else {
	echo "No row";
}

?>
