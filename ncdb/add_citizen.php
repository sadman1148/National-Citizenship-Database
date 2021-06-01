<?php
//conneting webpage to db
require_once('dbconnect.php');

//checking if input field is empty or not
if(isset($_POST['nid']) && isset($_POST['name']) && isset($_POST['age']) && isset($_POST['dob']) &&
isset($_POST['height']) && isset($_POST['sex']) && isset($_POST['ms']) && isset($_POST['ecolor']) && isset($_POST['bg'])&&
isset($_POST['dname']) && isset($_POST['jname'])){
	//query for checking if user with valid password exists
	$id = $_POST['nid'];
    $n = $_POST['name'];
    $a = $_POST['age'];
    $dob = $_POST['dob'];
    $h = $_POST['height'];
    $x = $_POST['sex'];
    $ms = $_POST['ms'];
    $ec = $_POST['ecolor'];
    $bg = $_POST['bg'];
    $dn = $_POST['dname'];
    $jn = $_POST['jname'];
	$sql = "INSERT INTO citizens VALUES('$id','$n','$a','$dob','$h','$x','$ms','$ec','$bg','$dn','$jn')";
	
	//Execute above query and return result
	$result = mysqli_query($conn,$sql);
	if(mysqli_affected_rows($conn)){
		header("Location: success.php");
	}
	else{
		header("Location: failed.php");
	}
}
?>