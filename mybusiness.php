<!-- $conn = mysqli_connect('localhost', 'root', '', 'db_name');
$query = mysqli_query($conn, 'SELECT * FROM table');
echo '
<table>
  <thead>
  <tr>
    <th>ID</th>
    <th>MOVIE TITLE</th>
    <th>LEADING ACTOR</th>
  </tr>
  </thead>
  <tbody>';
  
while ($r = mysqli_fetch_assoc($query)) {
	echo '<tr>
    <td>' . $r['id'] . '</td>
    <td>' . $r['movietitle'] . '</td>
    <td>' . $r['leading_actor'] . '</td>
    </tr>';
}

echo '</tbody>
</table>';
 -->

<?php 
//make connection
$conn = mysqli_connect('localhost', 'root', '', 'eplanner');
$query = mysqli_query($conn, 'SELECT * FROM createbusiness');
//mysqli_connect('localhost', 'root', '', 'eplanner');
//select db
//mysql_select_db('eplanner');

//$sql="SELECT * FROM createbusiness";

//$records=mysql_query($sql);
echo '
<table>
  <h2 style="text-align: center;">My Business</h2><br>            
  <table class="table table-bordered">
    <thead>
      <tr class="active">
        <th> ID</th>
		<th>Name</th>
		<th>City</th>
		<th>Area</th>
		<th>Location</th>
		<th>Open Days</th>
		<th>Services</th>
		<th>Business Charges</th>
		<th>Business Contact</th>
      </tr>
    </thead>
  <tbody>';

  while ($r = mysqli_fetch_assoc($query)) {
	echo '<tr>
	<td>' . $r['id'] . '</td>

	<td>'. $r['bname'] .'</td>;
    <td>' . $r['city'] . '</td>
    <td>' . $r['area'] . '</td>
    <td>' . $r['location'] . '</td>
    <td>' . $r['opendays'] . '</td>
    <td>' . $r['services'] . '</td>
    <td>' . $r['bcharges'] . '</td>
    <td>' . $r['bcontact'] . '</td>
    </tr>';
    echo '</tbody>
</table>';
}

 ?>

<!-- 
<!DOCTYPE html>
<html>
<head>
	<title> Welcome || My Business</title>
</head>
<body>

<table width="600" border="1" cellpadding="1" cellspacing="1">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>City</th>
		<th>Area</th>
		<th>Location</th>
		<th>Open Days</th>
		<th>Services</th>
		<th>Business Charges</th>
		<th>Business Contact</th>
	</tr>

	<?php 
	while ($createbusiness=mysql_fetch_assoc($records)) {
		echo "<tr>";

		echo "<td>".$createbusiness['id']."</td>";

		echo "<td>".$createbusiness['bname']."</td>";

		echo "<td>".$createbusiness['city']."</td>";

		echo "<td>".$createbusiness['area']."</td>";

		echo "<td>".$createbusiness['location']."</td>";

		echo "<td>".$createbusiness['opendays']."</td>";

		echo "<td>".$createbusiness['services']."</td>";

		echo "<td>".$createbusiness['bcharges']."</td>";

		echo "<td>".$createbusiness['bcontact']."</td>";

		echo "</tr>";


	}//end while

	 ?>


</table>

</body>
</html> -->