<!-- view_students.php -->
<!-- This file prints out the students that are signed up for a specific appointment --> 

<html>
<head>
<title>View Students</title>
<link rel='stylesheet' type='text/css' href='../../html/standard.css'/>
<link rel='icon' type='image/png' href='../../html/corner.png'/>
<style>
table, th, td {
border: 1px solid black;
}

td {
text-align:center; 
vertical-align:middle;
}

form {
position:relative;
top:8px;
}
</style>
</head>
<body>

<div id="background">
<left><div id="wrapper">
<h1>CMNS Advising</h1>

<?php
require_once('../mysql_connect.php'); 
session_start();

// Select all the students that have the selected appointment 
$sql = "SELECT * FROM students WHERE Appt=" . $_POST['ID'];
$rs = mysql_query($sql, $conn);
$student = mysql_fetch_array($rs);

// Print out the titles of the table
if ($student)
{
  echo "<h3>Students Registered</h3>";
  echo "<table>";
  echo "<tr>";
  echo "<th>Email</th>";
  echo "<th>First Name</th>";
  echo "<th>Last Name</th>";
  echo "<th>Major</th>";
  echo "<th>Student ID</th>";
  echo "</tr>";
  
  // Print out the information about each student signed up 
  while ($student)
  {
    echo "<tr>";
    echo "<td>" . $student['Email'] . "</td>";
    echo "<td>" . $student['firstName'] . "</td>";
    echo "<td>" . $student['lastName'] . "</td>";
    echo "<td>" . $student['Major'] . "</td>";
    echo "<td>" . $student['studentID'] . "</td>";
    echo "</tr>";
    $student = mysql_fetch_array($rs);
  }
  echo "</table>";
}

?>

<p><a href = "advisor_view.php"> Go Back to Advisor View </a></p>

</div>
</left>
</div>
</body>
</html>