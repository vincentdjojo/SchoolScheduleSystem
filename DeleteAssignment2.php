<?php
		$user_name = "root";
		$pass_word = "";
		$database = "schoolschedule";
		$server = "127.0.0.1";


		
		$db_handle = mysql_connect($server,$user_name,$pass_word);
		$db_found = mysql_select_db($database,$db_handle);
	
		$TeacherID=$_GET["tid"];	
		$SubjectID=$_GET["sid"];
		$ClassID=$_GET["cid"];	
		$Periods=$_GET["periods"];	
	
		//$InitializeAssignmentTable = "TRUNCATE TABLE periodassignment";
			//$InitializeAssignmentTableResult = mysql_query($InitializeAssignmentTable);

		//$InitializeAssembly = "DELETE from periodassignment WHERE SubjectID='ASS'";
			//$InitializeAssemblyResult = mysql_query($InitializeAssembly);
	//	$InitializeAssembly2 = "DELETE from assignment WHERE SubjectID='ASS'";
		//	$InitializeAssemblyResult2 = mysql_query($InitializeAssembly2);  
	//	$InitializeChapel2 = "DELETE from assignment WHERE SubjectID='CPL'";
	//		$InitializeChapelResult2 = mysql_query($InitializeChapel2);
		//$InitializeChapel = "DELETE from periodassignment WHERE SubjectID='CPL'";
		//	$InitializeChapelResult = mysql_query($InitializeChapel);
	//	$InitializeMergeInfo = "UPDATE assignment SET MergeInfo='',IsFirstSubjectParallel='0' WHERE MergeInfo!=''";
	//		$InitializeMergeInfoResult = mysql_query($InitializeMergeInfo);
	//	$InitializeFirstParallelSubject = "UPDATE assignment SET IsFirstSubjectParallel='0' WHERE IsFirstSubjectParallel='1'";
	//		$InitializeFirstParallelSubjectResult = mysql_query($InitializeFirstParallelSubject);
	//	$InitializeMus = "DELETE from assignment WHERE SubjectID='MUS'";
	//		$InitializeMusResult = mysql_query($InitializeMus);
			
		$DeleteAssignment= "DELETE from assignment WHERE SubjectID='$SubjectID' AND TeacherID='$TeacherID' AND ClassID='$ClassID' AND Periods='$Periods'";
			$DeleteAssignmentResult=mysql_query($DeleteAssignment); 

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link href="MyStyle.css" type="text/css" rel="stylesheet">
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1"><title>Data Insertion</title>

</head>
<body>
	<ul>	
 		<li2>
 			<img src="logo.png" height="46" width="40">
  		</li2>
  		<li><a href="home.php">Home</a></li>
  		<li><a class="active" href="InsertionMenu.php">Data Insertion</a></li>
		<li><a href="assignement.php">Teacher Assignment</a></li> 		
 		<li><a  href="ScheduleGeneration.php">Generate Schedule</a></li>
  		<li><a href="#contact">Contact</a></li>
	
	<ul style="float: right; list-style-type: none;">
			<li>
				<a href="#about">About</a></li>
			<li>
			<a href="#login">Login</a></li>
		</ul>
	</ul>
<div style="text-align: center; font-family: Arial;">
	<h1>Teacher Assignment</h1>
<table style="width: 100%; height: 514px; text-align: left; margin-left: auto; margin-right: auto;" background="tablebackground.png" border="1" cellpadding="0" cellspacing="0">
<tr><td>
<center>
<img src="check-mark.png"><font  color="green"><h2>Success</h2>
<center>
		Assignment successfully deleted
</font>
</center>
<br>
<table>
<tr>
	<td>
		<a href="assignement.php"><button type="button" style="height:50px; width:100px">Done</button></a>
	</td>
</tr>

</tr></td>
</table>
</center>
</table>
</div>
</body></html> 	