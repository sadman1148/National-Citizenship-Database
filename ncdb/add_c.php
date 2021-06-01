<?php
//conneting webpage to db
require_once('dbconnect.php');

//checking if input field is empty or not
if(isset($_POST['nid']) && isset($_POST['name']) && isset($_POST['age'])){
	//query for checking if user with valid password exists
	$id = $_POST['nid'];
    $n = $_POST['name'];
    $a = $_POST['age'];
        $sql = "UPDATE citizens set ms='Married' where id='$id'";
        $result = mysqli_query($conn,$sql);
        $sql = "UPDATE citizens set ms='Married' where id='$n'";
        $result = mysqli_query($conn,$sql);
        $sql = "INSERT INTO spouse VALUES('$id','$n','$a')";
	    $result = mysqli_query($conn,$sql);
	    if(mysqli_affected_rows($conn)){
		    header("Location: success.php");
	    }
	    else{
		    header("Location: failed.php");
        }
}
?>