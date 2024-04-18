Contributions:
Calen Dollens
Eashwar Ediga
Garikipati Sai Krishna Teja

School Management System (SMS) - SaaS based application

This School Management System (SMS) is an Open Source project. It is a complete web based portal application to manage all school related activities. It has features to automate all the process and functions of any school. It is Easy to use.

# Technologies:
Front-end: HTML, CSS, Javascript, JQuery, AJAX Server-side: PHP CodeIgniter Framework Database: MySQL

# Modules :
	Login Module
	Student Module
	Staff Module
	Admission Module
	Attendance Module
	Fees Module
	Examination Module
	Library Module
	Books Module
	Hostel Module
	Admin Module
	Expenditure Module
	Reports Module

School management system built using PHP and MySQL:
Popular computer language PHP/JavaScript is used to create dynamic online applications, such as school management systems.
A relational database management system called MySQL is employed by a school management system to store and manage data.
 
	CRUD operations, which let users interact with data in a database, stand for Create, Read, Update, and Delete actions.
	Session management is the process of controlling user sessions, which includes session timeouts, authentication, and authorization.
	Data validation is the process of confirming the validity, accuracy, and consistency of data entered into a school administration system.
	The process of making a school administration system more search engine-friendly, including the use of keywords, meta descriptions, and other techniques.
	A design strategy known as responsive design makes ensuring that a school administration system is designed for use on a variety of platforms, including as desktop computers, tablets, and smartphones.
	Scalability: A school management system's capacity to accommodate growing traffic and data volumes as the school expands.
	The practice of backing up data from the school management system and making sure it can be recovered in the event of data loss or system failure.



Source-Code:



Index.php:

<?php	ob_start();	include('class/School.php');	if(!empty($_SESSION["adminUserid"]))	{ header("location: dashboard.php");
}
 
$school = new School();

$errorMessage = $school->adminLogin(); include('inc/header.php');

?>

<title>School Management System</title>

<?php include('include_files.php');?>

<?php include('inc/container.php');?>

<div class="container">

<div class="col-md-6">

<div class="panel panel-info">

<div class="panel-heading" style="background:#000;color:white;">

<div class="panel-title">Admin Login</div>
</div>

<div style="padding-top:30px" class="panel-body" >

<?php if ($errorMessage != '') { ?>

<div id="login-alert" class="alert alert-danger col-sm-

12"><?php echo $errorMessage; ?></div>	<?php } ?>

<form	id="loginform"	class="form-horizontal"	role="form"	method="POST" action="">

<div style="margin-bottom: 25px" class="input-group">	<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input	type="text"	class="form-control"	id="email"	name="email" placeholder="email" required>
</div>
 
<div style="margin-bottom: 25px" class="input-group">	<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
<input type="password" class="form-control" id="password" name="password" placeholder="password" required>
</div>

<div style="margin-top:10px" class="formgroup">

<div class="col-sm-12 controls">

<input type="submit" name="login" value="Login" class="btn btn-success">

</div>

</div>

<div style="margin-top:10px" class="formgroup">

<div class="col-sm-12 controls">	Admin: eediga@sms.com<br> password:123	<br><br>
</div>

</div>

</form>

</div>

</div>

</div>

</div>

<?php include('inc/footer.php');?>
