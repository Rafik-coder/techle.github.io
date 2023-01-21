<?php require_once 'partials/hearder.html' ?>
  <?php require_once 'partials/top-nav.html' ?>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>Welcome to <span>Tech Le</span></h2>
          <p>
            Your No.1 FREE resource Suggestion Website.
          </p>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started">Get Started</a>
            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="assets/img/hero-img.svg" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
        </div>
      </div>
    </div>

    <div class="icon-boxes position-relative">
      <div class="container position-relative">
        <div class="row gy-4 mt-5 d-md-flex justify-content-center">

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-bag-dash"></i></div>
              <h4 class="title"><a href="bussiness.php" class="stretched-link">Bussiness</a></h4>
            </div>
          </div>
          <!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-code-slash"></i></div>
              <h4 class="title"><a href="programing.php" class="stretched-link">Programming</a></h4>
            </div>
          </div>
          <!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-plus"></i></div>
              <h4 class="title"><a href="other.php" class="stretched-link">Other</a></h4>
            </div>
          </div>
          <!--End Icon Box -->

        </div>
      </div>
    </div>

    </div>
  </section>
  <!-- End Hero Section -->

  <main id="main">

    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4 align-items-center">

          <div class="col-lg-6">
            <img src="assets/img/stats-img.svg" alt="" class="img-fluid">
          </div>

          <div class="col-lg-6">

            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="0" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Active Visiters</strong> over the past 28 days</p>
            </div><!-- End Stats Item -->

            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="0" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Posts</strong> in Total</p>
            </div><!-- End Stats Item -->

            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="0" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Interactions</strong> over-all</p>
            </div><!-- End Stats Item -->

          </div>

        </div>

      </div>
    </section><!-- End Stats Counter Section -->

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-posts" class="recent-posts sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Recent Blog Posts</h2>
          <p>Consequatur libero assumenda est voluptatem est quidem illum et officia imilique qui vel architecto accusamus fugit aut qui distinctio</p>
        </div>

        <div class="row gy-4">

          <div class="col-xl-4 col-md-6">
            <article>

              <div class="post-img">
                <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Politics</p>

              <h2 class="title">
                <a href="blog-details.html">Dolorum optio tempore voluptas dignissimos</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="assets/img/blog/blog-author.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Maria Doe</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jan 1, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

        </div><!-- End recent posts list -->

      </div>
    </section><!-- End Recent Blog Posts Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php require_once 'partials/footer.html' ?>