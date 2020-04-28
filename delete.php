<?php
  session_start();

	
	
	function test_input($data)
	{
	$data=trim($data);
    $data=stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;	
	}

	$id=test_input($_GET['id']);
	


      include 'config.php';
	
	$sql = "delete  from afg where id=$id";
if($conn->query($sql))
{
	echo "<script type='text/javascript'>alert('Record Deleted ')</script>";
	echo "<script>location.href='logpage.php'</script>";
}else
{
	echo "<script type='text/javascript'>alert('Error  ')</script>";
	 
	echo "<script>location.href='logpage.php'</script>";
}


$conn->close();

?>
