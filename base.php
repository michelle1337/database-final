<html>
    <head>
 <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="FontAwesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<script  src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
     <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css ">
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script> 
		<script src="/js/bootstrap.min.js"></script>
        <title>sdssd</title>
    </head>
    <body>
        <div class="containter">
        <form action="sta.php" method="post">
            <table border='3'>
                <tr><td>id</td><td><input name="id" maxlength=30  class="form-control" size=30></td></tr>
                <tr><td>Name</td><td><input name="name" maxlength=30 class="form-control" size=30></td></tr>
                <tr><td>rating</td><td><input name="rating" maxlength=60 class="form-control" size=30></td></tr>
                <tr><td>producer</td><td><input name="producer" maxlength=3 class="form-control" size=3></td></tr>
                <tr><td colspan=2><input type="submit" class="btn btn-primary" value="Add"></td></tr>
           </table>
        </form>
<table border='3'>
      
	<th>ID</th>
	<th>Name</th>
	<th>Producer</th>
        <th>Rating</th>
<?php
session_start();	
$user = $_SESSION["user"]; 
$stat = $_SESSION["auth"];
if ((!is_null($user))&&($stat == "ok" )) {
$name = $user;
}
else header('Location: http://homepage.local/studapp/signin.php');
require 'connectdb.php';
$mysqli = connectdb::getInstance()->connect();
echo mb_internal_encoding();
$dsn = "mysql:host={$dbloc}";
try{ 
$conn = new PDO($dsn, $dbuser, $dbpass);
}catch(PDOException $e){
echo "Error connection: ".$e->getMessage();
exit;
}
$conn-> exec("SET CHARACTER SET utf8");
$sql = "SELECT * FROM `u247479859_mihai`.`kin4ik`";
$result = $conn -> query($sql);
while ($row = $result->fetch(PDO::FETCH_ASSOC)){
	print "<tr>";
foreach($row as $r){
	echo "<td>"."" . ($r) . "</td>";
		}
	print "</tr>";
}
?>
</table>
<h3>Delete</h3>
 <form action="delete.php" method="post">
            <table>
                <tr><td>id</td><td><input name="id" maxlength=30 class="form-control" size=30></td></tr>
				<tr><td colspan=2><input type="submit" class="btn btn-primary" value="&#1059;&#1076;&#1072;&#1083;&#1080;&#1090;&#1100;"></td></tr>
           </table>
        </form>
		<h3>Edite</h3>
		 <form action="edite.php" method="post">
            <table>
                <tr><td>id</td><td><input name="id" maxlength=30 class="form-control" size=30></td></tr>
				<tr><td>Name</td><td><input name="name" maxlength=30 class="form-control" size=30></td></tr>
                <tr><td>rating</td><td><input name="rating" maxlength=60 class="form-control" size=30></td></tr>
                <tr><td>producer</td><td><input name="producer" maxlength=3 class="form-control" size=3></td></tr>
				<tr><td colspan=2><input type="submit" class="btn btn-primary" value="Edite"></td></tr>
           </table>
        </form>
<form action="destroy.php" method="post">
<input type="submit" class="btn btn-primary" value="Exit">
</form>
</div>
    </body>
</html>	