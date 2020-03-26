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
$data         = $connection->query("SELECT * FROM PRODUCTS;");
while($row    = $data->fetch_assoc()){
$product      = $row['products'];
$price        = $row['price'];
$description  = $row['description'];
$image        = $row['image'];

?>
<div class="container">

    <div class="col s12 m7 l4 ">
      <div class="card z-depth-3">
        <div style="font-color: black" class="card-image">
          <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $image ).'"/>'; ?>
            <span class="card-title "><?php echo "$product";?></span>
            <a class="btn-floating halfway-fab center waves-light red"><b><?php echo "$price"; ?></b></a>
        </div>
          <div class="card-content">
            <p><?php  echo "$description"; ?> </p>
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
