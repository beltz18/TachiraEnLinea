<?php
  $page = "404";
  require './server/controllers/__init__.php';
  require './client/partials/head.php';
?>
<body>
  <div class="container-xxl position-relative bg-white d-flex p-0">
    <?php
      require './client/partials/spinner.php';
      require './client/partials/sidebar.php';
    ?>

    <!-- Content Start -->
    <div class="content">
      <?php
        require './client/partials/navbar.php';
        require './client/partials/404.php';
      ?>
    </div>
    <!-- Content End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
  </div>
</body>
<?php require './client/partials/footer.php'; ?>