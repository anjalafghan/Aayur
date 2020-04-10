<?php
include_once('config.php');
$connect -> set_charset("utf8");

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
        <div class="col-sm-3 col-lg-3 col-md-4">
            <div class="col portfolio-item">
                <div class="portfolio-hover-content ">
                </div>
                <img class="img-fluid" src="img/portfolio/5.jpg" alt="" />
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