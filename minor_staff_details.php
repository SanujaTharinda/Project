<!DOCTYPE html>
<?php
include 'header.php';
?>
<html>
<head>
<title>miner_staff_details</title>

<style>
table {
	border-collapse: collapse;
	width: 100%;
	color: #588c7e;
	font-family: monospace;
	font-size: 20px;
	text-align: left;
	table-layout:fixed;
	}
th {
	overflow: hidden; 
    text-overflow: ellipsis; 
    word-wrap: break-word;
	background-color: #588c7e;
	color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}

td { 
    overflow: hidden; 
    text-overflow: ellipsis; 
    word-wrap: break-word;
}
</style>

</head>

<body>

<table>
	<tr>
		<th>Id</th>
		<th>Full Name</th>
		<th>NIC</th>
		<th>Address</th>
		<th>Telephone</th>
		<th>Gender</th>
		<th>First Date</th>
		<th>Registered Date</th>
		<th>Permenent Date</th>
		<th>Carrier</th>
		<th>Reg</th>
	</tr>

<?php
//
//include "EmployeeDatabase.php";
////create connection
//$conn = mysqli_connect("localhost", "root", "1234", "employeedatabase");
//
//// Check connection
//if ($conn->connect_error) {
//die("Connection failed: " . $conn->connect_error);
//}
//$sql = "SELECT id, full_name,nic,address,telephone,gender,firstday,registered_day,permenent_day,carrier,reg FROM employee";
//
////query
//$result = $conn->query($sql);
//if ($result->num_rows > 0) {
//
//// output data of each row
//while($row = $result->fetch_assoc()) {
//echo "<tr><td>" . $row["id"]. "</td><td>" . $row["full_name"] . "</td><td>"
//. $row["nic"] . "</td><td>"
//	. $row["address"] . "</td><td>"
//	. $row["telephone"] . "</td><td>"
//	. $row["gender"] . "</td><td>"
//	. $row["firstday"] . "</td><td>"
//	. $row["registered_day"] . "</td><td>"
//	. $row["permenent_day"] . "</td><td>"
//	. $row["carrier"] . "</td><td>"
//	. $row["reg"] . "</td></tr>";
//}
//echo "</table>";
//} else { echo "0 results"; }
//$conn->close();
//?>

<?php
include "EmployeeDatabase.php";

session_start();

$employeeDatabase = EmployeeDatabase::defaultConstruct();

$result = $employeeDatabase->getTable("employee");

foreach ($result as $row) {
echo "<tr><td>" . $row["id"]. "</td><td>" . $row["full_name"] . "</td><td>"
. $row["nic"] . "</td><td>"
	. $row["address"] . "</td><td>"
	. $row["telephone"] . "</td><td>"
	. $row["gender"] . "</td><td>"
	. $row["firstday"] . "</td><td>"
	. $row["registered_day"] . "</td><td>"
	. $row["permenent_day"] . "</td><td>"
	. $row["carrier"] . "</td><td>"
	. $row["reg"] . "</td></tr>";
}











?>




</table>

</body>

</html>