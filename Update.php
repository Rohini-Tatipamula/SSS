<?php
include("links.html");
$rno=$_POST['regno'];
$eid=$_POST['email'];
$mno=$_POST['mobile'];
$servername="localhost"; //local server name default localhost
$username="root"; //mysql username default is root.
$password=""; //blank if no password is set for mysql.
$dbname = "lbrce"; 
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);// Check connection
if(!$conn)
{
die("Connection failed:".mysqli_connect_error());
}
$sql="UPDATE student_info SET emailid='$eid',mobileno=$mno WHERE regno='$rno'";
if($conn->query($sql)===TRUE)
{
    ?>
    <script>
        alert("Record Updated Successfully");
    </script>
    <?php 
}
else{
    echo "Error updating record: ".$conn->error;
}
    mysqli_close($conn);
    ?>
