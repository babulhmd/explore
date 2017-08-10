<?php
include "connect.php";
$sql = "SELECT * FROM `admin`";
$result = $conn->query($sql);
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>States</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>
    <div class="container">
      <div class="jumbotron">

        <h1 align = "center">Admin</h1>
      </div>
      <table style = "width:50%; margin:auto;" class="table table-bordered table-hover table-striped">
        <thead>
          <tr>
            <th style = "width:35%; text-align:center;">adminId</th>
            <th style = "width:35%; text-align:center;">userName</th>
            <th style = "width:30%; text-align:center;">password</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i = 0;
    				// our code goes here;
    				while ( $row = $result->fetch_assoc() ) {
    					//echo $i . ". " . $row['name'] . "(" . $row['id'] . ")";
    					// echo "<tr><td>1</td><td>Doe</td></tr>";
    					// echo "<tr><td>____</td><td>Doe</td></tr>";
    					// echo "<tr><td>" .  . "</td><td>Doe</td></tr>";
    					echo "<tr><td style = \"text-align:center;\">". $row['adminId'] ."</td><td style = \"text-align:center;\">". $row['userName'] ."</td><td style = \"text-align:center;\">". $row['password'] ."</td></tr>";
    					$i++;
    				};

    			?>
        </tbody>
      </table>
    </div>
  </body>
</html>
