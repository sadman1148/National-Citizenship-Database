<?php
//conneting webpage to db
require_once('dbconnect.php');

//checking if input field is empty or not
if(isset($_POST['id']) && isset($_POST['att']) && isset($_POST['info']) && isset($_POST['cn'])){
	
    $att = $_POST['att'];
    $rank = $_POST['id'];
    $info = $_POST['info'];
    $cn = $_POST['cn'];
    $sql = "UPDATE jobs set $att='$info' WHERE rank='$rank' AND cn='$cn'";
	$result = mysqli_query($conn,$sql);
    //Execute above query and return result
	    if(mysqli_affected_rows($conn)){
		    header("Location: edit_suc.php");
	    }
	    else{
		    header("Location: edit_fail.php");
        }
}
?>