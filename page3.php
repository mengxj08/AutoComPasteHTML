<?php
/**
 * Created by JetBrains PhpStorm.
 * User: tjmonsi
 * Date: 10/7/13
 * Time: 3:59 PM
 * To change this template use File | Settings | File Templates.
 */

if (!isset ($_COOKIE["interface"])) {
    if (!empty($_POST)) {
        $interface = $_POST["interface"];
        setcookie("interface", $interface, time()+(3600*3));
        //echo "hello";
    } else {
        header("Location: index.php");
        /* Make sure that code below does not get executed when we redirect. */
        exit;
    }
} else {
    $interface = $_COOKIE["interface"];
    if (strcmp($interface, "acp")==0) {
        $interface = "xwindow";
    } else {
        $interface = "acp";
    }
}

if (!isset($_COOKIE["user"])){
    $message = "Please use a username";
    header("Location: index.php?message=".$message);
    exit;
}

$user = $_COOKIE["user"];

if (strcmp($interface, "acp")==0) {
    $msg = "Read the instruction from the experimenter when using AutoComPaste Interface";
    $acpflag = "true";
} else {
    $msg = "Read the instruction from the experimenter when using XWindow Interface";
    $acpflag = "false";
}

require_once("external_files.php");

if($user == "0" || $user == "4" || $user == "8")
{
	$tasklist = "tasks_0";
}
else if ($user == "1" || $user == "5" || $user == "9")
{
	$tasklist = "tasks_1";
}
else if ($user == "2" || $user == "6" || $user == "10")
{
	$tasklist = "tasks_2";
}
else if ($user == "3" || $user == "7" || $user == "11")
{
	$tasklist = "tasks_3";
}
else
{
	$message = "Wrong Participant ID!";
    header("Location: index.php?message=".$message);
    exit;
}
?>
<html>
<head>
    <title>Experiment Run Template 1</title>
</head>
<body>
<div>
    <p>
        Before continuing the experiment, you should read the corresponding instruction of the technique you will use.
    </p>
    <p>
       <?php echo $msg; ?>
    </p>
    <form action="interface1.php?user=<?php echo $user; ?>&acp=<?php echo $acpflag; ?>&data=<?php echo $data; ?>&jslist=<?php echo $jslist; ?>&tasklist=<?php echo $tasklist; ?>" method="post">
        <input id="submit" type="submit" style="width:100px; height:30px; font-weight:bold; font-size:20px" value="start">
    </form>
</div>


</body>
</html>
