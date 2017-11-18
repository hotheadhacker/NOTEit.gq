<?php
         $dbhost = 'localhost';
         $dbuser = 'noteusr';
         $dbpass = '!11';
         $db = 'notedb';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
         if(! $conn ) {
            die('Could not connect: ' . mysql_error());
         }
         echo 'Connected successfully';
        
//Loading GET vaiables
echo "<br><br><br>";
$t=$_POST['title'];
$tt=$_POST['text'];
//mysqli_select_db('pro', $conn);
$sqli = "INSERT INTO notes (title,note) values ('$t','$tt')";
 $retval = mysqli_query($conn,$sqli);
   if(! $retval ) {
      die('Could not enter data: ' . mysqli_error());
   }
  
   echo "Entered data successfully\n";
echo "<br>";
echo "<center>";
echo "<h1>Your ID is:</h1>";
$result = mysqli_query($conn,"SELECT * FROM notes ORDER BY ID DESC LIMIT 1");
echo "<br><br>";


while($row = mysqli_fetch_array($result))
{

echo $row['id'];

}
echo "<br>";
echo "<i color='red'>*Kindly Copy it for tracking purposes!<i>";
echo "</center>";

echo "<br>";

mysqli_close($conn);
?>
<html>
	<head>
		<title>Submission completed! Copy You ID!</title>
		

<script>
function goBack() {
    window.history.back();
}
</script>
	</head>
	<body bgcolor="#90a7cc">
		<button onclick="goBack()">Go Back</button>
		
	</body>
</html>
