<?php
/**
 * Created by JetBrains PhpStorm.
 * User: tjmonsi
 * Date: 10/7/13
 * Time: 1:02 PM
 * To change this template use File | Settings | File Templates.
 */

// Process your information here

if (!empty($_POST)) {
    $user = $_POST['user'];
    //echo "hello";
} else {
    header("Location: index.php");
    /* Make sure that code below does not get executed when we redirect. */
    exit;
}

// save $user as cookie as a carry on data for the next pages
setcookie("user", $user, time()+(3600*3)); // time of expiration is 3 hours

?>
<html>
<head>
    <title>AutoComPaste Experiment</title>
</head>
<body>
	<div align="center">
		<a href="http://hci.comp.nus.edu.sg/index.html"><img src="image/lab.png"></a>
		<hr/>	
	</div>
	<div align="center">
		<font size="+2" color="#FF0033" face="Georgia, Times New Roman, Times, serif"> Welcome to the AutoCompaste vs Traditional-copy-paste experiment! </font>
		<br /><br />
		<br /><br />
		<br /><br />
	</div>	
<div align="center">
    <form action="page2.php" method="post">
	<table>
		<tr style="text-align:center">
			<div> <font size="+1">Please input your personal informational needed for Participant <?php echo $user; ?> </font></div>
			<br />
		</tr>
		
		<tr height="35px">
			<td style="width:auto" align="left">
				<font style="font-weight:bold">Name: </font>
			</td>
			<td>
				<input type="text" class="Inputtext" name="name" value="XXX">
			</td>
		</tr>
		
		<tr height="35px">
		<td style="width:auto" align="left">
			<font style="font-weight:bold">Sex: </font>
		</td>
		<td>	
			<select name="sex" style="width:auto">
					<option value="female">Female</option>
					<option value="male">Male</option>
			</select>		
		</td>
		</tr>
		
		<tr height="35px">
		<td style="width:auto" align="left">
			<font style="font-weight:bold">Age: </font>
		</td>	
		<td>	
			<select name="age" style="width:auto">
					<option value="< 20"> < 20 </option>			
					<option value="20-25"> 20-25</option>
					<option value="26-30"> 26-30</option>
					<option value="31-35"> 31-35</option>
					<option value="36-40"> 36-40</option>
					<option value="> 40"> > 40</option>
			</select>	
		</td>
		</tr>
		
		<tr height="35px">
			<td>
				<font style="font-weight:bold">Occupation: &nbsp </font>
			</td>
			<td>
				<input type="text" class="Inputtext" name="occupation" name="txt_input" value="XXX">
			</td>
		</tr>
	</table>
	<table>
		<br /><br />
		<td>
			<input id="submit" type="submit" style="width:100px; height:30px; font-weight:bold; font-size:20px" value="submit">
		</td>
	</table>
    </form>
</div>

</body>
</html>