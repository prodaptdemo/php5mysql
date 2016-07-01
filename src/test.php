<?php
$servername = $_ENV['DB1V1_DOMAINNAME'];
$username = $_ENV['DB1V1_DBUSERNAME'];
$password = $_ENV['DB1V1_DBPASSWORD'];

$dbname = "wordpress";

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST["author"]) && $_POST["author"] != '')
{
	$sql = "INSERT INTO wp_comments (comment_author, comment_author_email, comment_author_url, comment_author_IP, comment_date, comment_date_gmt, comment_content, comment_karma, comment_approved, comment_agent, comment_type, comment_parent, user_id) VALUES
('".$_POST["author"]."', '', 'https://wordpress.org/', '', '2016-03-15 06:00:49', '2016-03-15 06:00:49', '".$_POST["comment"]."', 0, 'post-trashed', '', '', 0, 0)";
	$conn->query($sql);
	unset($_POST["author"]);unset($_POST["comment"]);
	/*if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}*/
}

?>
<style>
	table {
		border:1px solid;
	}
	table tr td, table tr th{
		border:1px solid;
	}
</style>
<body>
	<div style="width: 100%; display: inline-block;">
		<h2 style="margin:0px;float:left;"> Comments </h2> <a href="addcomment.php" style="margin-left:50px;cursor:pointer;font-size:12px;padding:10px;color:red;">(+) Add New Command</a>
	</div>
	<hr>
	<table style="margin-top:20px">
		<tr>
			<th> S.No </th>
			<th> Comment Id </th>
			<th> Commented By </th>
			<th> Comment </th>
		</tr>
<?php
//$sql = "SELECT id, firstname FROM test";
$sql = "Select comment_ID,comment_author,comment_content from wp_comments";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
	$i = 1;
    while($row = mysqli_fetch_assoc($result)) {
        //echo "id: " . $row["id"]. " - Name: " . $row["firstname"];
        echo "<tr><td>" .$i. "</td><td>" . $row["comment_ID"]. "</td><td>" . $row["comment_author"]. "</td><td>" . $row["comment_content"]. "</td></tr>";
		$i++;
    }
} else {
	echo "<tr><td colspan='4'>No row</td></tr>";
}
$conn->close();
?>
	</table>
</body>
