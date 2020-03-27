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
<div class="grid-container">

<?php 
$data         = $connection->query("SELECT * FROM PRODUCTS;");
while($row    = $data->fetch_assoc()){
$product      = $row['products'];
$price        = $row['price'];
$description  = $row['description'];
$image        = $row['image'];

?>

<div class="container">
<div class="row">
    <div class="">
<div class="card ">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator"<?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $image ).'"/>';?> 
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4"><?php echo "$product";?></span>
      <a class="btn-floating halfway-fab center waves-light red"><b><?php echo "$price"; ?></b></a><p class="truncate"><?php  echo "$description"; ?> </p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4 activator"><?php echo "$product";?></span>
      <p>  <p><?php  echo "$description"; ?> </p>
    </div>
  </div>
  </div>
  </div> 
</div>
            



<?php
}

?>
    <script type="text/javascript" src="js/materialize.min.js">

  </script>
<style>
.grid-container{
  display: grid;
  grid-auto-flow: column;
}

img{
  width: 500px;
     height: 500px;
     background-position: 50% 50%;
     background-repeat: no-repeat;
     background-size: cover;
}
</style>

</div>
</body>
</html>
