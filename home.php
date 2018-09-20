<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>App42 Sample Php-MySQL Application</title>
<link rel="icon" href="images/dryic_icon.ico" type="image/x-icon"/>
<link rel="shortcut icon" href="images/dryic_icon.ico" type="image/x-icon"/>
<link href="css/style-User-Input-Form.css" rel="stylesheet" type="text/css">
</head>

<body>
	<img height="400" width="1350" src="images/banner.png"/>
<!------------------------------------Header Closed------------------------------------------->
	<div class="App42PaaS_body_wrapper">
    	<div class="App42PaaS_body">
        	<div class="App42PaaS_body_inner">
            <div class="contactPage_title">
            	<table>
                	<thead class="table-head">
                    	<tr>
                        <td>Name</td>
                        <td>Email</td>
                        <td>Description</td>
                        <td>Mail Status</td>
			</tr>
                	</thead><tbody>
<?php 
//connection to the database
require_once "DBManager.php";
$client = new DBManager();

$result = $client->getAllData();
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
   echo "<tr><td>".$row{'name'}."</td><td>".$row{'email'}."</td><td>".$row{'description'}."</td><td>".$row{'mail'}."</td></tr>";
}
?>
</tbody>
         </table>
			<div align="left"></div><br/><br/><a href="index.php"><img src="images/home.png" /></a>
            </div>
            </div>
    	</div>
    </div>
</body>
</html>
