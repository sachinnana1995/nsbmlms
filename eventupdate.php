<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eventmanagement";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get values from form 
$event_id=$_POST['EventID'];
$event_name=$_POST['EventName'];
$date=$_POST['Date'];
$start_time=$_POST['Start'];
$end_time=$_POST['End'];
$location=$_POST['Location'];
$sql = "UPDATE event SET event_name='$event_name',date='$date',start_time='$start_time',end_time='$end_time',location='$location' WHERE event_id=$event_id";
if (mysqli_query($conn, $sql)) {

echo "<script>
alert('Created Successfully');
window.location.href='../Eventmanagmensearch.html';
</script>";
} else {
  echo "<script>
alert('Fail');
window.location.href='../Eventmanagmensearch.html';
</script>"; 

//. $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>