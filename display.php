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

<div class="container">
    <div class="header"><span>Expand</span>

    </div>
    <div class="content" style="background-color:white">
        <ul>
            <li>This is just some random content.</li>
            <li>This is just some random content.</li>
            <li>This is just some random content.</li>
            <li>This is just some random content.</li>
        </ul>
    </div>
</div>

<?php 
$result = $connect->query("SELECT product_image FROM products WHERE product_id =  1");
$res=mysqli_fetch_array($result);
echo '<img src="data:image/jpeg;base64,'.base64_encode( $res['product_image'] ).'"/>';


?>

<script>
$(".header").click(function () {

$header = $(this);
//getting the next element
$content = $header.next();
//open up the content needed - toggle the slide- if visible, slide up, if not slidedown.
$content.slideToggle(500, function () {
    //execute this after slideToggle is done
    //change text of header based on visibility of content div
    $header.text(function () {
        //change text based on condition
        return $content.is(":visible") ? "Collapse" : "Expand";
    });
});

});
</script>
<style>

.container .content {
    display: none;
    padding : 5px;
}</style>