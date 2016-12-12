<!-- student_advisor.html -->
<!-- Gets information from a potential student compares it to make sure
 there is not a match by username in the database then creates and logs in a new advisor 
--> 
<?php session_start(); ?>
<html lang="en">
  <head>
    <!-- <meta charset="UTF-8" />  -->
    <title>Advising Homepage</title>
    <link rel='stylesheet' type='text/css' href='../standard.css'/>
    <link rel="icon" type="image/png" href="../corner.png" />
  </head>
  <body>



<div id="background">
  <!--<img src='dognologo.jpg' height='100%' width='100%'/>-->
<left><div id="wrapper">
  <!--<p><img src='umbc50logo.jpg' height='13%' width='25%'/></p>-->
  <h1>Welcome to CMNS Advising</h1>

  <h2>
<?php 
if( isset($_SESSION["error_message"]))
{
echo $_SESSION["error_message"]; 
session_destroy();
}
?> 

</h2>

    <h1>Student Registration</h1>
    <form method='post' action='../../php/validate/validate_student_register.php'>
      <!-- Gets information from the potential student, username, major --> 
      <pre><h4>First Name: <input type='text' name="firstName"/></h4></pre>
      <pre><h4>Last Name: <input type='text' name="lastName"/></h4></pre>
	<pre><h4>Preffered Name: <input type='text' name="prefName"/></h4></pre>

      <pre><h4>Campus ID: <input type='text' name="studentID"/></h4></pre>
      <pre><h4>UMBC Email: <input type='text' name="email"/></h4></pre>
      <pre><h4>Password: <input type='password' name="password"/></h4></pre>
      <pre><h4>Re-Type Password: <input type='password' name="rePassword"/></h4></pre>
      <pre><h4>Major: <select name="major"></h4></pre><br>
	  
	  <!-- This creates a drop down box of the possible major choices -->
	  <option value = "Biological Sciences BA">Biological Sciences BA</option>
	  <option value = "Biological Sciences BS">Biological Sciences BS</option>
	  <option value = "Biochemistry & Molecular Biology BS">Biochemistry & Molecular Biology BS</option>
	  <option value = "Bioinformatics & Computational Biology BS">Bioinformatics & Computational Biology BS</option>
	  <option value = "Biology Education BA">Biology Education BA</option>
	  <option value = "Chemistry BA">Chemistry BA</option>
	  <option value = "Chemistry BS">Chemistry BS</option>
	  <option value = "Chemistry Education BA">Chemistry Education BA</option>
	  <option value = "Other">Other</option>
	  
	  </select>
	  <otherText>Select the major that you intend to pursue NEXT SEMESTER (this may be different from your current officially declared major).
The major selected can be either your primary or secondary major. If you are only planning to pursue ONE major, and your
major of choice is not listed, please choose Other</otherText>
	  
      <p><input type=submit value="Submit"/></p>
    </form>



    	<!-- Hyperlink to the login student page -->
	<p style='color: #FF0000;'>Already signed up? Click <a href = "login_student.php">here</a> to log in.</p>

<h3 style='color: #FF0000;'>Copyright © umbc.edu</h3>

</div>
</div>
</left>
</body>
</html>
<?php require('../footer.html'); ?>
