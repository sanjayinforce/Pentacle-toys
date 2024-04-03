<?php

include 'head.php';


$category_1 = mysqli_query($conn, "SELECT * FROM category  ORDER BY id DESC");
$collection = mysqli_query($conn, "SELECT * FROM collections  ORDER BY id DESC");
$home_video = mysqli_query($conn, "SELECT * FROM home_videos  ORDER BY id DESC");

$getBestSelling = mysqli_query($conn, "SELECT COUNT(aa.product_id) as pid, bb.* FROM `order_item` as aa JOIN products as bb ON aa.product_id = bb.id GROUP BY product_id LIMIT 20");


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Pentacle - Newyork Company</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name="google-site-verification" content="qLc3lXHVUts7Nt-DKqBBdHxbV3Et2vct4wqa81w_3-k" />
     <link rel="canonical" href="https://www.pentacletoys.com/index.php" />
    <!-- ==== CSS files Include start ===== -->
    <?php include('css-include.php') ?>
    <!-- ==== CSS files Include end===== -->
  </head>
  <body>
 <!-- ==== Header Menu Include start ===== -->    
 <?php include 'header-menu.php'; ?>
<!-- ==== Header Menu Include end ===== -->

<?php
$getbanner = mysqli_query($conn, "SELECT * FROM banners ORDER BY id DESC");
$gettesti = mysqli_query($conn, "SELECT * FROM testimonial ORDER BY id DESC");
?>
<div class="pentacle-home-slider-master">
  <header>
    <div id="slidermaster" class="owl-carousel owl-theme">
      <?php foreach ($getbanner as $key => $value) { ?>
      
      <div class="item">
        <img src="<?= $baseurl.$value['banner_image_path']; ?>" alt="Pentacle">
        <div class="cover">
          <div class="container">
            <div class="header-content">
              <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <!--<h2>Great day for playing Toy is Today.</h2>-->
                  <h1>Great day for playing Toy is Today.</h1>
                  <h4>Choose the best toys for you growing one and make your day today!!!</h4>
                  <a href="<?= MAINURL; ?>getproducts"><button class="btn btn-primary">explore now</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    <?php } ?>
<!--       <div class="item">
        <img src="assets/img/slider/1.jpg" alt="Pentacle">
        <div class="cover">
          <div class="container">
            <div class="header-content">
              <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <h2>there are</h2>
                  <h1>Wooden toys <br> for all ages</h1>
                  <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h4>
                  <button class="btn btn-primary">explore now</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <img src="assets/img/slider/4.jpg" alt="Pentacle">
        <div class="cover">
          <div class="container">
            <div class="header-content">
              <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <h2>there are</h2>
                  <h1>Wooden toys <br> for all ages</h1>
                  <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h4>
                  <button class="btn btn-primary">explore now</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->
    </div>
  </header>
</div>
<main id="main">
  <div class="pentacle-home-first-section">
    <div class="container">
      <div class="home-hen-img"><img src="assets/img/slider/hen.png" class="img-fluid" alt="Pentacle"></div>
      <div class="home-clock-img"><img src="assets/img/slider/clock.png" class="img-fluid" alt="Pentacle"></div>
      <h2 class="home-shop-by-title">shop by category</h2>
      <p class="home-shop-by-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="owl-slider home-best-seller-slider">
            <div id="carouselc1" class="owl-carousel">
              <?php foreach ($category_1 as $key => $value) { ?>
              <div class="item">
                <a href="<?= MAINURL ?>productsList/<?= $value['code']; ?>"><img class="owl-lazy" data-src="<?= $baseurl.$value['image_path']; ?>" alt="Pentacle"></a>
                <div class="contentboxbestsell">
                  <div class="contentmasterbestsell"> <a href="<?= MAINURL ?>productsList/<?= $value['code']; ?>"><img src="<?= MAINURL; ?>assets/img/slider/c1-icon-0.png" class="img-fluid" alt="Pentacle"></a> </div>
                </div>
                <!--<h4 class="best-seller-title"><?= $value['title']; ?></h4>-->
                <h4 class="best-seller-title"><a class="best-seller-title" href="<?= MAINURL ?>productsList/<?= $value['code']; ?>"><?= $value['title']; ?></a></h4>
                <h6 class="best-seller-para">
                  <span class="best-span-2"> 
<!--                    <a id="penwish_<?= $value['id']; ?>" class="addwishicon"><img src="<?= MAINURL; ?>assets/img/slider/c1-icon-1.png" class="img-fluid" alt="Pentacle"></a> --> 
                  </span>
                </h6>
              </div>
            <?php  } ?>
            </div>
          </div>
        </div>
    </div>
  </div>
  <section class="home-best-seller-slider">
    <div class="container">
      <h2 class="best-sellers-title">best sellers</h2>
      <p class="best-sellers-para"></p>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="owl-slider">
            <div id="carouselbestseller" class="owl-carousel">
              <?php foreach ($getBestSelling as $key => $value) { ?>
              <div class="item">
                <a href="<?= MAINURL; ?>details/<?= $value['sku']; ?>"><img class="owl-lazy" data-src="<?= $baseurl.$value['image1']; ?>" alt="Pentacle"></a>
                <div class="contentboxbestsell">
                  <div class="contentmasterbestsell"> <a href="<?= MAINURL; ?>details/<?= $value['sku']; ?>"><img src="<?= MAINURL; ?>assets/img/slider/c1-icon-0.png" class="img-fluid" alt="Pentacle"></a> </div>
                </div>
                <a href="<?= MAINURL; ?>details/<?= $value['sku']; ?>"><h4 class="best-seller-title"><?= $value['p_name']; ?></h4></a>
                <h6 class="best-seller-para">



                  <?php if($value['discount_price'] != 0) { 

                          
                          ?>
                  <div style="text-decoration: line-through;"> 
                 <?php if(isset($symbol) && $symbol == '₹') {
                    echo '&#8377;';
                  } else {
                    echo $symbol;
                  } ?>
                <?= $value[$currency]; ?> </div> 
                
                 <?php if(isset($symbol) && $symbol == '₹') {
                    echo '&#8377;';
                  } else {
                    echo $symbol;
                  } ?><?php $final_price = $value[$currency] -($value[$currency]*$value['discount_price']/100); ?>
                  <?= number_format($final_price,2 ); ?> 
                  <span class="best-span-1">Discount <?= $value['discount_price']; ?> %</span>
              <?php } else { ?>
            <?php if(isset($symbol) && $symbol == '₹') {
                    echo '&#8377;';
                  } else {
                    echo $symbol;
                  } ?>
                  <?= number_format($value[$currency] ,2 ); ?> <?php } ?> 
                  <span class="best-span-2"> 
                   <a id="penwish_<?= $value['id']; ?>" class="addwishicon"><img src="<?= MAINURL; ?>assets/img/slider/c1-icon-1.png" class="img-fluid" alt="Pentacle"></a> 
<!--                         <a id="pencart_<?= $value['id']; ?>" class="proaddCarticon"><img src="<?= MAINURL; ?>assets/img/slider/c1-icon-2.png" class="img-fluid" alt="Pentacle"></a> 
 -->                  </span>
                </h6>
              </div>
            <?php  } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php

  $getnewarrivals = mysqli_query($conn, "SELECT * FROM products ORDER BY id DESC");

  ?>
  <section class="home-new-arrivals-slider">
    <div class="container">
      <h2 class="new-arrivals-title">new arrivals</h2>
     <!--  <p class="new-arrivals-para">Risus commodo viverra maecenas accumsan lacus vel facilisis.</p> -->
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="owl-slider">
            <div id="carouselnewarrivals" class="owl-carousel">
              <?php foreach ($getnewarrivals as $key => $value) { ?>
              <div class="item">
                <a href="<?= MAINURL; ?>details/<?= $value['sku']; ?>"><img class="owl-lazy" data-src="<?= $baseurl.$value['image1']; ?>" alt="Pentacle"></a>
                <div class="contentboxnewarrivals">
                  <div class="contentmasternewarrivals"> <a href="<?= MAINURL; ?>details/<?= $value['sku']; ?>"><img src="assets/img/slider/c1-icon-0.png" class="img-fluid" alt="Pentacle"></a> </div>
                </div>
                <div class="item-content-box">
                  <a href="<?= MAINURL; ?>details/<?= $value['sku']; ?>"><h4 class="new-arrivals-prd-title"><?= $value['p_name']; ?></h4></a>
                  <h6 class="new-arrivals-prd-para">
                     <?php if($value['discount_price'] != 0) { ?>
                 <?php if(isset($symbol) && $symbol == '₹') {
                    echo '&#8377;';
                  } else {
                    echo $symbol;
                  } ?> <span style="text-decoration: line-through;"> <?= $value[$currency]; ?> </span> </p><p>  <?php if(isset($symbol) && $symbol == '₹') {
                    echo '&#8377;';
                  } else {
                    echo $symbol;
                  } ?>  <?php $final_price = $value[$currency] -($value[$currency]*$value['discount_price']/100); ?>
                  <?= number_format($final_price,2 ); ?> 
                  <span class="newarrivals-span-1">Discount <?= $value['discount_price']; ?> %</span>
              <?php } else { ?>
                    <?php if(isset($symbol) && $symbol == '₹') {
                    echo '&#8377;';
                  } else {
                    echo $symbol;
                  } ?>  <?= $value[$currency]; ?> 
              <?php } ?> 
                    <span class="newarrivals-span-2"> 
                   <!--  <a href=""><img src="assets/img/slider/c1-icon-1.png" class="img-fluid" alt="Pentacle"></a> 
                    <a href=""><img src="assets/img/slider/c1-icon-2.png" class="img-fluid" alt="Pentacle"></a>  -->
                     <input type="hidden" value="<?= number_format($value['final_price']*$currency ,2 ); ?>" id="pprice<?= $value['id']; ?>">
                        <a id="penwish_<?= $value['id']; ?>" class="addwishicon"><img src="<?= MAINURL; ?>assets/img/slider/c1-icon-1.png" class="img-fluid" alt="Pentacle"></a> 
<!--                         <a id="pencart_<?= $value['id']; ?>" class="proaddCarticon"><img src="<?= MAINURL; ?>assets/img/slider/c1-icon-2.png" class="img-fluid" alt="Pentacle"></a> 
 -->                    </span>
                  </h6>
                </div>
              </div>
            <?php } ?>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  
    <header>
    <div id="videomaster" class="owl-carousel owl-theme">
      <?php foreach ($home_video as $key => $video) { ?>      
      <div class="item">
            <video id="video_id" width="100%" height="642" autoplay muted loop>
              <source src="<?= $baseurl.$video['video_path'] ?>" type="video/mp4">
            </video>
      </div>
      <?php } ?> 
    </div>
  </header>
  
  
  
  
  <section id="about" class="about">
    <div class="container">
      <h3 class="home-collections-title">collections</h3>
      <p class="home-collections-para"> Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
      <div class="row" style="background-color: #e1980e;">
        <?php foreach ($collection as $key => $value) { ?>
        <div class="col-xl-5 col-lg-4 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
          <h3><?= $value['title']; ?></h3>
          <p class="about-child-para"><?= str_ireplace('<p>','',$value['content']);;?></p>
        </div>
        <div class="col-xl-7 col-lg-8 video-box d-flex justify-content-center align-items-stretch position-relative" style="background:url(<?= $baseurl.$value['image_path']; ?>);">
        </div>
      <?php } ?> 
      </div>
    </div>
  </section>
  
  <section class="home-testimonials-master">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 d-flex flex-column align-items-stretch justify-content-center">
          <h4 class="home-testi-sub-title">we are best any other</h4>
          <h3 class="home-testi-master-title">People After Using <br> Our Products</h3>
          <p class="home-testi-para">
            Lorem ipsum dolor sit amet, luctus posuere semper felis consectetuer hendrerit, enim varius enim, tellus tincidunt tellus est sed mattis, libero elit mi suscipit. A nulla. 
          </p>
<!--           <div class="home-testi-btn"> <button class="btn btn-primary">view all</button> </div>
 -->        </div>
        <div class="col-lg-8 col-md-8 col-sm-12 d-flex flex-column align-items-stretch justify-content-center">
          <div class="home-testimonials">
            <div class="owl-carousel owl-carouseltesti owl-theme">
              <?php foreach ($gettesti as $key => $value) { ?>

              <div>
                <div class="card">
                  <img class="card-img-top" src="<?= $baseurl.$value['testiimagepath']; ?>" alt="Pentacle">
                  <div class="card-body">
                    <h5><?= $value['testiname']; ?></h5>
                    <hr class="home-testi-hr">
                    <p class="card-text">
                      <?= $value['testicontent']; ?>
                    </p>
                    <!-- <div class="home-testi-rating">
                      <a href=""> <i class="bi bi-star-fill"></i> </a>
                      <a href=""> <i class="bi bi-star-fill"></i> </a>
                      <a href=""> <i class="bi bi-star-fill"></i> </a>
                      <a href=""> <i class="bi bi-star-fill"></i> </a>
                      <a href=""> <span><i class="bi bi-star"></i></span> </a>
                    </div> -->
                  </div>
                </div>
              </div>
            <?php } ?>
<!--               <div>
                <div class="card">
                  <img class="card-img-top" src="assets/img/testimonials-2.png" alt="Pentacle">
                  <div class="card-body">
                    <h5>Andria <span> CEO </span></h5>
                    <hr class="home-testi-hr">
                    <p class="card-text">
                      Lorem ipsum dolor sit amet, luctus posuere semper felis consectetuer hendrerit, enim varius enim, tellus tincidunt tellus est sed.
                    </p>
                    <div class="home-testi-rating">
                      <a href=""> <i class="bi bi-star-fill"></i> </a>
                      <a href=""> <i class="bi bi-star-fill"></i> </a>
                      <a href=""> <i class="bi bi-star-fill"></i> </a>
                      <a href=""> <i class="bi bi-star-fill"></i> </a>
                      <a href=""> <i class="bi bi-star-fill"></i> </a>
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <div class="card">
                  <img class="card-img-top" src="assets/img/testimonials-1.png" alt="Pentacle">
                  <div class="card-body">
                    <h5>John <span> Business Man </span></h5>
                    <hr class="home-testi-hr">
                    <p class="card-text">
                      Lorem ipsum dolor sit amet, luctus posuere semper felis consectetuer hendrerit, enim varius enim, tellus tincidunt tellus est sed.
                    </p>
                    <div class="home-testi-rating">
                      <a href=""> <i class="bi bi-star-fill"></i> </a>
                      <a href=""> <i class="bi bi-star-fill"></i> </a>
                      <a href=""> <i class="bi bi-star-fill"></i> </a>
                      <a href=""> <i class="bi bi-star-fill"></i> </a>
                      <a href=""> <span><i class="bi bi-star"></i></span> </a>
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <div class="card">
                  <img class="card-img-top" src="assets/img/testimonials-2.png" alt="Pentacle">
                  <div class="card-body">
                    <h5>Andria <span> CEO </span></h5>
                    <hr class="home-testi-hr">
                    <p class="card-text">
                      Lorem ipsum dolor sit amet, luctus posuere semper felis consectetuer hendrerit, enim varius enim, tellus tincidunt tellus est sed.
                    </p>
                    <div class="home-testi-rating">
                      <a href=""> <i class="bi bi-star-fill"></i> </a>
                      <a href=""> <i class="bi bi-star-fill"></i> </a>
                      <a href=""> <i class="bi bi-star-fill"></i> </a>
                      <a href=""> <i class="bi bi-star-fill"></i> </a>
                      <a href=""> <i class="bi bi-star-fill"></i> </a>
                    </div>
                  </div>
                </div>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="home-why-choose-us">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-1 col-md-1 col-sm-12"></div>
        <div class="col-lg-5 col-md-5 col-sm-12 d-flex flex-column align-items-stretch justify-content-center">
          <div class="why-choose-box-1">
            <h3>
              Work with <br>
              our talented <br>
              design team
            </h3>
            <p>
              Choose from our leavers, ski, society or team <br> designs, or contact us with your ideas.
            </p>
            <p>
              Our team will help you create a design that's <br> both personal and professional.
            </p>
            <div class="home-why-btn"> <button class="btn btn-primary">contact us</button> </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="why-choose-box-2">
            <img src="assets/img/home-why-us.jpg" class="img-fluid" alt="Pentacle">
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<!-- ====== Footer Include start  ========= -->
<?php include 'footer.php'; ?>
<!-- ====== Footer Include end  ========= -->

   <script type="text/javascript">
    $('#videomaster').owlCarousel({
    loop:true,
    margin:10,
    dots:true,
    nav:true,
    navText : ["<i class='bx bxs-chevron-left'></i>","<i class='bx bxs-chevron-right'></i>"],
    mouseDrag:false,
    autoplay:true,
    animateOut: 'slideOutUp',
    responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });
  </script>

</body>
</html>