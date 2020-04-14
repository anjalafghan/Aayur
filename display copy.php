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
            $data = $connect->query("SELECT product_category,product_category_mr,product_image,product_name_en FROM products");
                while($row = $data->fetch_assoc()){
        ?>
        <div class="col-sm-3 col-lg-3 col-md-4">
            <div class="col portfolio-item">
                <div class="portfolio-hover-content">
                </div>
                <?php 
                if ($row['product_image']==NULL) {
                    echo '<img class="img-fluid" src="img/compressed/2.jpg"/>'; 
                }
                else
                    echo '<img class="img-fluid" src="data:image/jpeg;base64,'.base64_encode( $row['product_image'] ).'"/>'; ?>
            <div class="portfolio-caption ">
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

<p>
  <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Link with href
  </a>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
  </div>
</div>
