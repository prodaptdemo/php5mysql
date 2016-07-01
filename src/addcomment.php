<?php

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
		<h2 style="margin:0px;float:left;"> Add Your Comment </h2> 
	</div>
	<hr>
	<form method="POST" action="test.php">
		<table>
			<tr>
				<td> Name </td>
				<td> <input style="width:100%" type="text" name="author" />
			</tr>
			<tr>
				<td> Comment </td>
				<td> <textarea name="comment" rows="4" cols="50"></textarea>
			</tr>
		</table>
		<input type="submit" value="Add Comment"/>
	</form>
</body>
