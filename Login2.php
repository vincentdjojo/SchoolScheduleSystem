<?php
		$user_name = "root";
		$pass_word = "";
		$database = "schoolschedule";
		$server = "127.0.0.1";
		
		$db_handle = mysql_connect($server,$user_name,$pass_word);
		$db_found = mysql_select_db($database,$db_handle);

		$SQLteacher = "SELECT * FROM admin";
   		$TeacherIDResult = mysql_query($SQLteacher);
   	$TeacherID=$_POST['TeacherID'];
   	$Password=$_POST['Password'];
   	$ErrorMessage='';
  		
  		$SQLCheckPassword = "SELECT * FROM admin WHERE TeacherID='$TeacherID' AND Password='$Password'";
   		$CheckPasswordResult = mysql_query($SQLCheckPassword);
		$num_rows = mysql_num_rows($CheckPasswordResult); 

		if($num_rows==1) {
  			$GetTeacherName = "SELECT * FROM teacher WHERE TeacherID='$TeacherID'";
   			$TeacherNameResult = mysql_query($GetTeacherName);
   	 	while ($row = mysql_fetch_assoc($TeacherNameResult)) {
				$TeacherName = $row['FirstName'].' '.$row['LastName'];   	 	
   	 	}
			session_start();
			$_SESSION['login']='1';
			$_SESSION['UserName']=$TeacherName;
			$_SESSION['ID']=$TeacherID;
			header("location: Login3.php");
		}else {
			$ErrorMessage='Wrong Password';		
		}
		
?>
<html>
<head>
<link href="MyStyle.css" type="text/css" rel="stylesheet">
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1"><title>Login</title>

</head>
<body>
	<ul>	
 		<li2>
 			<img src="logo.png" height="46" width="40">
  		</li2>
  		<li><a href="home.php">Home</a></li>
		<?php if(@$_SESSION['login']==1) { ?>	
  		<li><a href="InsertionMenu.php">Data Insertion</a></li>
		<li><a href="assignement.php">Teacher Assignment</a></li> 
		<li><a href="selectclassparallelsubject.php">Parallel Subject Assignment</a></li>			
		<li><a href="ScheduleGeneration.php">Generate Schedule</a></li>
		<?php } ?>
 		<li><a href="search.php">Search Schedule</a></li>
  		<li><a   href="contact.php">Contact</a></li>

	<ul style="float: right; list-style-type: none;">
		<li>
			<a href="about.php">About</a></li>
		<li>
			<a class="active" href="login.php"><?php if(@$_SESSION['login']==1) {
																	 echo @$_SESSION['UserName'];
																	}else {
																		echo 'Login';	
																	} ?></a></li>
		</ul>
	</ul>

<div style="text-align: center; font-family: Arial; font-size:100%; ">
	<h1>Login</h1>
<table style="width: 100%; height: 516px; text-align: left; margin-left: auto; margin-right: auto;" background="tablebackground.png" border="1" cellpadding="0" cellspacing="0">

	<tr>
		<td>
			<table style="width:25%; height:516px;" background="backgroundforcontact.png" border="0" cellpadding="0" align='center'>
				<tr>
					<td align='center'>
					<?php 
						if($ErrorMessage='Wrong Password'){
					?><img src="wrongpassword.png"><?php } ?><img src="baka2.gif" alt="" width="162" height="224">
					<table background="backgroundforcontact2.png" style="background-size: 100% 100%; width:80%; height:249px;">
						<tr>
							<td align='center'>
								<table background="backgroundforcontact3.png "style="background-size: 100% 100%";>
									<tr>
										<td align='center'>									
											<br>	<br><br>
											<img src="575346.gif" width="68" height="76">
											<table background="backgroundforcontact4.png "style="background-size: 100% 100%; font-size:90%;";>
												<tr>
													<td align='center'>
														<table border="0" cellpadding="0" cellspacing="0">
														<br><br>
														<form action="Login2.php" method="post">
																														
															<tr>
																<td>
																	TeacherID: 
																</td>		
																<td>
																	<select name='TeacherID'>
																<?php
   	 															while ($row = mysql_fetch_assoc($TeacherIDResult)) {
   	 														?>
   	 				
   																<option value="<?php echo $row['TeacherID'];?>" ><?php echo $row['TeacherID']; ?></option>
																<?php				
																	} 
																?>
																	</select>
																</td>	
															</tr>
															<tr>
																<td>	
																	Password:
																</td>
																<td>
																	<input type="password" name="Password">
																</td>															
															</tr>
															<tr>
																<td>
																	<input type="submit" value="Submit">
																</td>
																<td>
																	<a href="home.php"><button type="button">Return</button></a>
																</td>															
															</tr>
															</form>												
															</tr>
														</table>
																			
													</td>
												</tr>
											</table>
												
										</td>
									</tr>								
								</table>
																						
							</td>
						</tr>
					</table>
					</td>				
				</tr>
			</table>	
		</td>
	</tr>

</table>
</div>
</body></html> 	