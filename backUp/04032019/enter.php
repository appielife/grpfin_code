<?php
 include 'connection.php';
// $servername = "localhost";
// $username = "root";
// $password = "password";
// $dbname="fincorp";
$uid = $_POST['uid'];
$name = $_POST['name'];
$add = $_POST['add'];
$comp = $_POST['comp'];
$phone = $_POST['phone'];
$pan = $_POST['pan'];
$ref = $_POST['ref'];
$email = $_POST['email'];
$gst_billing = $_POST['gst_billing'];
$gst=	$_POST['gst'];	
	
	
	

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	
}


 
echo "Connected successfully";
 $SQL="INSERT INTO `clients_info` (`UID`, `NAME`, `ADDRESS`, `COMPANY`, `PHONE`,`PAN`,`REFERENCE`,`EMAIL`,`GST_BILLING`,`GST`) VALUES ('$uid', '$name', '$add', '$comp', '$phone','$pan','$ref','$email', '$gst_billing', '$gst')";
if (mysqli_query($conn,$SQL)) {
    echo "<center><h3>Record updated successfully";
}	
 else {
    echo "Error updating record  saa: " . mysqli_error($conn);
}


include 'footer.php';


?>