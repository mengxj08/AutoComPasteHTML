<?php
/**
 * Created by JetBrains PhpStorm.
 * User: tjmonsi
 * Date: 10/7/13
 * Time: 3:45 PM
 * To change this template use File | Settings | File Templates.
 */

// Process your information here
$name = "";
if (!empty($_POST)) {
    $demodata = $_POST;
    foreach ($_POST as $key => $value) {
        setcookie("demodata_".$key, $value, time()+(3600*3));
		if($key == "name")
		{
			$name = $value;
		}
    }

    //echo "hello";
} else {
    header("Location: index.php");
    /* Make sure that code below does not get executed when we redirect. */
    exit;
}

if (!isset($_COOKIE["user"])){
    $message = "Please use a username";
    header("Location: index.php?message=".$message);
    exit;
}

$user = $_COOKIE["user"];

$experiment = "";
$msg1 = "";
$msg2 = "";
$msg3 = "";
$msg4 = "";
if($user == "0" || $user == "4" || $user == "8")
{
	$experiment = "acp";
	$msg1 = "AutoComPaste";
	$msg2 = "Traditional Copy-and-Paste";
	$msg3 = "isolated Copy-and-Paste";
	$msg4 = "typing before Copy-and-Paste";
}
else if ($user == "1" || $user == "5" || $user == "9")
{
	$experiment = "acp";
	$msg1 = "AutoComPaste";
	$msg2 = "Traditional Copy-and-Paste";
	$msg3 = "typing before Copy-and-Paste";
	$msg4 = "isolated Copy-and-Paste";
}
else if ($user == "2" || $user == "6" || $user == "10")
{
	$experiment = "xwindow";
	$msg1 = "Traditional Copy-and-Paste";
	$msg2 = "AutoComPaste";
	$msg3 = "isolated Copy-and-Paste";
	$msg4 = "typing before Copy-and-Paste";	
}
else if ($user == "3" || $user == "7" || $user == "11")
{
	$experiment = "xwindow";
	$msg1 = "Traditional Copy-and-Paste";
	$msg2 = "AutoComPaste";
	$msg3 = "typing before Copy-and-Paste";
	$msg4 = "isolated Copy-and-Paste";
}
?>

<html>
<head>
    <title>Experiment Run</title>
</head>
<body>
<div>
    <p> <font size="+2"> The experimental arrangement for <?php echo $name; ?> ( participant ID: <?php echo $user; ?>) is as follows: </font></p>
    <P>1:	<?php echo $msg1; ?></p>
	<p>---1.1:	<?php echo $msg3; ?></p>
	<p>------1.1.1: phrases(2 trials)</p>
	<p>------1.1.2: sentences(2 trials)</p>
	<p>------1.1.3: paragraohs(2 trials)</p>
	<p>---1.2:	<?php echo $msg4; ?></p>
	<p>------1.2.1: phrases(2 trials)</p>
	<p>------1.2.2: sentences(2 trials)</p>
	<p>------1.2.3: paragraohs(2 trials)</p>
	<p>2:	<?php echo $msg2; ?></p>
	<p>---2.1:	<?php echo $msg3; ?></p>
	<p>------2.1.1: phrases(2 trials)</p>
	<p>------2.1.2: sentences(2 trials)</p>
	<p>------2.1.3: paragraohs(2 trials)</p>
	<p>---2.2:	<?php echo $msg4; ?></p>
	<p>------2.2.1: phrases(2 trials)</p>
	<p>------2.2.2: sentences(2 trials)</p>
	<p>------2.2.3: paragraohs(2 trials)</p>
	<br />
<form action="page3.php" method="post">
	<input name="interface" type="hidden" value="<?php echo $experiment; ?>" >
    <input id="submit" type="submit" style="width:100px; height:30px; font-weight:bold; font-size:20px" value="Submit">
</form>
</div>

</body>
</html>