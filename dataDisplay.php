<?php
$connection = new mysqli(localhost, anjal, root, aayur);

?>
<!DOCTYPE html>
<html lang="en">
<head>

     <!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!--Import materialize.css-->
     <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

     <!--Let browser know website is optimized for mobile-->
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aayur all in one Shoppy</title>
</head>
<body>
<?php 
$data = $connection->query("SELECT * FROM PRODUCTS;");
while($row = $data->fetch_assoc()){
$product = $row['Products'];
$price   = $row['Price'];

?>
<div class="container">
<div class="row">
    <div class="col s12 m7 l4 offset-m1">
      <div class="card">
        <div style="font-color: black" class="card-image">
          <img src="images/sample-1.jpg">
          <span class="card-title"><?php echo "$product"; ?></span>
        </div>
        <div class="card-content">
          <p><?php echo "$price"; ?></p>
        </div>
      </div>
    </div>
  </div>
</div>


<?php
}

?>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
