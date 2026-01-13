<?php
  $ex = null;
  $dbConnection = null;

  function connectDB($dbConnection){
    try{
      $dbConnection = new PDO("mysql:host=mysql;dbname=bugreporter;charset=utf8", "root", "qwerty");
      return $dbConnection;
    }catch(Exception $ex){
      die($ex->getMessage());
    }
  }

  function getAllBugs($dbConnection){
    $dbConnection = connectDB($dbConnection);
    if($dbConnection){
      try{
        $stmt = $dbConnection->prepare(
          "
            SELECT *
            FROM `bugs`
          "
        );

        $stmt->bindColumn("id", $id);
        $stmt->bindColumn("productname", $productName);
        $stmt->bindColumn("version", $version);
        $stmt->bindColumn("hardwaretype", $hardwareType);
        $stmt->bindColumn("os", $OS);
        $stmt->bindColumn("frequency", $frequency);
        $stmt->bindColumn("solution", $solution);

        $stmt->execute();

        while($result = $stmt->fetch()){
          echo '
                <tr>
                  <td>' . $productName . '</td>
                  <td>' . $version . '</td>
                  <td>' . $hardwareType . '</td>
                  <td>' . $OS . '</td>
                  <td>' . $frequency . '</td>
                  <td>' . $solution . '</td>
                  <td><a href="Edit link">Edit</a></td>
                </tr>
          ';
        }
        $stmt->closeCursor();
      }catch(Exception $ex){
        return $ex;
      }
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bugreporter</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <table>
      <tr>
        <th>Product Name</th>
        <th>Version</th>
        <th>Hardware Type</th>
        <th>OS</th>
        <th>Frequency</th>
        <th>Solution</th>
        <th>Edit link</th>
      </tr>
      <?php
        if($ex === null){
          getAllBugs($dbConnection);
        }else{
          echo "Hij dut nie:";
          echo $ex;
        };
      ?>
</table>

</body>
</html>