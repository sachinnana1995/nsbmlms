<html>
<head>
<meta name='viewport'content='width=device-width, initial-scale=1.0'>
<title>Learning Mangement System</title>
<style type='text/css'>

body{
	background-color:#FFF;
	font-size:87.5%;
	font-family:Verdana, Geneva, sans-serif;
	line-height:1.5;
	text-align:left;
	
	border-top-color:#FFF;
	border-bottom-color:#FFF;
	border-left-color:#FFF;
	border-right-color:#FFF;
	
	}


header img {
	width:17%;
	height:150px;
	float:left;
	border-right:#333 1px solid;
	}
	
header {
	position:relative;
	height:152px;
	width:100%;
	border:1px #333333 solid;
	
	}
	
	
#header_div1 {
	margin-right:0px;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 10px;
	font-style: normal;
	background-color: #0F0;
	margin: 100px;
	height: 50px;
	width: 92%;
}

a {
	text-decoration:none;
	}

nav {
	position:relative;
	border:#333 solid 1px;
	margin-top:0.5%;
	background: #666;
	height:40px;
	border-radius:5px;
	width:99.5%;
	margin-bottom:0.5%;
	}
	
nav ul{
	list-style:none;
	margin: 0 20%;
	
	}
nav ul li{
	float:left;
	display:inline;
	text-align:left;
	
		}
nav ul li a{
	transition:all 0.3s;
	margin-left:35px;
	margin-right:35px;
	font-weight:500;
	font-family:Verdana, Geneva, sans-serif;
	}

nav ul li a:link , nav ul li a:visited {
	color:#FFF;
	display:inline-block;
	padding:10px 20px;
	}
nav ul li a:hover{
	background-color:#CF5C3F;	
	}

.bottomleftmargin{

  	 margin: auto;
   
    border: 3px solid #73AD21;
    padding: 20px;
    height: 95%;
   
    
  }

  .footer_image{
     width: 1300px;
    height: 120px;


 }	

 table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
 
 button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 90px;
}

</style>

<body>
<center>


<h2>Event Managment</h2>
<table>
  <tr>
    <th>Event ID</th>
    <th>Event Name</th>
    <th>Date</th>
    <th>pm</th>
    <th>am</th>
    <th>Location</th>
  </tr>


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
//$event_id=$_GET['EventID'];
$sql = "SELECT * FROM event_table";
$result= mysqli_query($conn,$sql);
$row=mysqli_num_rows($result);

	while ($row = mysqli_fetch_array($result)) {
	echo"<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td></tr>";
	//echo json_encode($sd);
	}
mysqli_close($conn);
?>

</table>
 <button class='pure-button pure-button-primary' onclick="window.location.href='Timetable.html'">Back</button>
	
</body>
</html>




















