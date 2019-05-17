<?php


require('conn.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
<link rel="stylesheet" href=".css" />
</head>
<body>
<div class="form">
<p><a href="dashboard.php">DASHBOARD</a> | <a href="registeruser.php">Register New User</a> | <a href="logout.php">Logout</a></p>
<h2>View Users</h2>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
  <th><strong>S.No</strong></th>
  <th><strong>User Name</strong></th>
  <th><strong>Email</strong></th>

  <th><strong>Edit</strong></th>
  <th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from users ORDER BY id desc;";
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td><td align="center"><?php echo $row["username"]; ?>
</td><td align="center"><?php echo $row["email"]; ?>

</td><td align="center"><a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a></td><td align="center"><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td></tr>
<?php $count++; } ?>
</tbody>
</table>

<br /><br /><br /><br />
<a href="https://www.allphptricks.com/insert-view-edit-and-delete-record-from-database-using-php-and-mysqli/">Tutorial Link</a> <br /><br />
For More Web Development Tutorials Visit: <a href="https://www.allphptricks.com/">AllPHPTricks.com</a>
</div>
</body>
</html>
