<!DOCTYPE html>
<html>
<head>
<title>User Details</title>
</head>
<body>

<table>
<tr>
<th>ID</th>
<th>Username</th>
<th>Email</th>
</tr>
<?php

foreach ($userArray as $key => $value) {
  // echo "<pre>";
  // print_r($value);
  // echo "<pre>";
	echo "<tr>
    <td>".$value['idUser']."</td>
    <td>".$value['Username']."</td>
    <td>".$value['createdDtm']."</td>
    </tr>";
}

?>
</table>
</body>
</html>