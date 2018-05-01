<html>
<body>
<?php
include("confi.php");
$name=$_POST["name"];
$email=$_POST["email"];
$message =$_POST["message"];
//$message=$_POST["message"];
//$title=$_POST["password"];
//$author=$_POST["author"];
//$edition=$_POST["edition"];
//$publication=$_POST["publication"];
$query = "insert into query(name,email,message) values('$name','$email','$message')";
$result = mysqli_query($db,$query);

?>
<h1>query is accepted</h1>
<a href="http://localhost/wpproject/index.html">To go to homepage click here</a><br/>

</body>
</html>
