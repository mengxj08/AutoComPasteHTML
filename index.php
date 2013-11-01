<?php
/**
 * Created by JetBrains PhpStorm.
 * User: tjmonsi
 * Date: 10/7/13
 * Time: 11:32 AM
 * To change this template use File | Settings | File Templates.
 */

?>
<html>
<head>
    <title>Experiment Run Template 1</title>
</head>
<body>
	<div align="center">
		<a href="http://hci.comp.nus.edu.sg/index.html"><img src="image/lab.png"></a>
		<hr/>	
	</div>
	<div align="center">
		<font size="+2" color="#FF0033" face="Georgia, Times New Roman, Times, serif"> Welcome to the AutoCompaste vs Traditional-copy-paste experiment! </font>
		<br /><br />
	</div>	
    <div align="center">
        <p>
            <font size="+1">Please write your participant number ID given by your experimenter:</font>
			<br />
        </p>
    </div>
    <div align="center">
        <form action="page1.php" method="post">
            <span>Participant ID:</span><input type="text" name="user" />
            <input id="submit" type="submit" value="start">
        </form>
    </div>

</body>
</html>