<?php
$servername     =   "localhost";
$user           =   "anjal";
$password       =   "anjal";
$databaseName   =   "aayur";
$connect = mysqli_connect($servername,$user,$password,$databaseName);
$connect -> set_charset("utf8");

if (!isset($_SESSION['lang'])) 
    $_SESSION['lang'] = "en";

    else if(isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])){
        if ($_GET['lang'] == "en") {
            $_SESSION['lang'] = "en"; 
        }
        else{
            $_SESSION['lang'] = "mr";
        }
    }


?>

<section class="bg-light page-section" id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase"><?php echo $lang['products'];?></h2>
          <h3 class="section-subheading text-muted">
          <!-- TODO: browse Shopping here etc -->
          </h3>
        </div>
      </div>

<div class="container">
    <div class="row">
        <?php
            $data = $connect->query("SELECT product_category,product_category_mr,product_name_en FROM products");
                while($row = $data->fetch_assoc()){
        ?>
        <div class="col">
            <div class="col portfolio-item">
                <div class="portfolio-hover-content ">
                </div>
            <div class="portfolio-caption">
                <h4><?php
                if ($_SESSION['lang'] == "mr") {
                    echo $row['product_category_mr'];
                }
                else{
                    echo $row['product_category'];
                }
                ?></h4>
            </div>
            </div>
        </div>
  <?php
}

?>

    </div>
</div>