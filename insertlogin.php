<html>
<body>
<?php
include("confi.php");
$email=$_POST["emailname"];
//$title=$_POST["password"];
//$author=$_POST["author"];
//$edition=$_POST["edition"];
//$publication=$_POST["publication"];
$query = "insert into emailt(email) values('$email')";
$result = mysqli_query($db,$query);

?>
<h1>Subscribed To Our Website</h1>
<a href="http://localhost/wpproject/index.html">To go to homepage click here</a><br/>

</body>
</html>
