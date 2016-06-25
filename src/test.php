<?php
$servername = $_ENV['AGINSTANCE2_DOMAINNAME'];
$username = $_ENV['AGINSTANCE2_DBUSERNAME'];
$password = $_ENV['AGINSTANCE2_DBPASSWORD'];

$dbname = "wordpress";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//$sql = "SELECT id, firstname FROM test";
$sql = "Select comment_ID,comment_author,comment_content from wp_comments";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        //echo "id: " . $row["id"]. " - Name: " . $row["firstname"];
        echo "id: " . $row["comment_ID"]. " ; Author: " . $row["comment_author"]. " ; Comment: " . $row["comment_content"];
    }
} else {
	echo "No row";
}

?>
