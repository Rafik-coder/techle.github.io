
<?php
// error_reporting(1);
  require '../functions.php';
  require_once '../partials/posts/hearder.html' ;
  require_once '../partials/posts/top-nav.html' ;

  $title = "Affilate Program";
  $intro = "
      This course Teaches Affiliate Marketing.
  ";
  $category = "Bussiness";
  $post = "Affiliate";
  $link = "../bussiness.php";
  $img = "";
  
?>
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <?php bread_crump($title, $intro, $category, $post, $link, $img) ?>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-5">

          <div class="col-lg-8">

            <article class="blog-details">
                
            </article><!-- End blog post -->

          </div>

          <div class="col-lg-4">

            <div class="sidebar">

              <div class="sidebar-item search-form">
                <h3 class="sidebar-title">Search</h3>
                <form action="" class="mt-3">
                  <input type="text">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div><!-- End sidebar search formn-->

              <div class="sidebar-item categories">
                <h3 class="sidebar-title">Categories</h3>
                <ul class="mt-3">
                  <li><a href="#">Bussiness <span>(25)</span></a></li>
                  <li><a href="#">Programing <span>(12)</span></a></li>
                  <li><a href="#">Other<span>(5)</span></a></li>
                </ul>
              </div><!-- End sidebar categories-->

              <div class="sidebar-item recent-posts">
                <h3 class="sidebar-title">Recent Posts</h3>

              </div><!-- End sidebar recent posts-->

              <div class="sidebar-item tags">
                <h3 class="sidebar-title">Tags</h3>
                <ul class="mt-3">
                  <li><a href="#">Business</a></li>
                  <li><a href="#">Marketing</a></li>
                </ul>
              </div><!-- End sidebar tags-->

            </div><!-- End Blog Sidebar -->

          </div>
        </div>

      </div>
    </section><!-- End Blog Details Section -->

  </main><!-- End #main -->

<?php require "../partials/posts/footer.html" ?>