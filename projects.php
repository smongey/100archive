<?php include('./components/_header.php'); ?>


<section class="current standard-grid">

  <div class="title">Current Submissions</div>

  <div class="text text_right">
    <p>Below are the latest submissions to the site, now in the running to be in this year’s Archive.
    <a href="#">See how it works</a></p>
  </div>

  <div class="filter_container">
      <?php include('./components/_filter.php'); ?>
  </div>

  <div class="projects_container">
    <?php $archiveYear='2019'; include('./components/_archive.php'); ?>
  </div>

</section>


<?php include('./components/_footer.php'); ?>
