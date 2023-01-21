
<?php 
  require 'functions.php';
  require_once './partials/hearder.html' ;
  require_once './partials/top-nav.html' ;

  $title = "Bussiness";
  $intro = "Below are a list of Bussiness course you can asscess in this portal.
        <p>
          <span class='text-center fw-bolder'>Note.</span><br>
          The Udemy Courses are Free at time of posting.
          But might be Paid later on. So try to Join as early as possible. 
        </p>
  ";
  $category = "";
  // $post_item = "Bussiness/affiliate1.php";
  // $link = "bussiness.php";
  $img = "";
  
?>
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <?php bread_crump($title, $intro, $post, $link, $img) ?>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4 posts-list">

          <div class="col-xl-4 col-md-6">
            <a href="Bussiness/affiliate1.php">
              <article>
  
                <div class="post-img">
                  <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
                </div>
  
                <p class="post-category">Affiliate</p>
  
                <h2 class="title">
                  <a href="">Learn Affiliate Marketing</a>
                </h2>
  
              </article>
            </a>
          </div><!-- End post list item -->
          <?php 
            create_post("Bussiness/dropshipping1", "imgs/blog/blog-1.jpg", "Drop Shiping", ""); 
          
          ?>

        </div><!-- End blog posts list -->

        <div class="blog-pagination">
          <ul class="justify-content-center">
            <li><a href="#">1</a></li>
            <li class="active"><a href="#">2</a></li>
            <li><a href="#">3</a></li>
          </ul>
        </div><!-- End blog pagination -->

      </div>
    </section><!-- End Blog Section -->

    <!-- News Leter Section -->
    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php require_once 'partials/footer.html' ?>