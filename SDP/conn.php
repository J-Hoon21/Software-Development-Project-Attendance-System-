
<?php
//first '' -> server ip address
//second '' ->username for login database
//third '' ->password
//fourth '' ->database name
$link = mysqli_connect('localhost','root','','SDP Assignment','3308');

if(mysqli_connect_errno())
{
die('<script>alert("Connection failed: Please check your SQL connection!");</script>');
}
?>