
  <!-- TODO: Passing Archive Year variable downwards, not sure if it's necessary. -->
  <!-- <?php $archiveYear=$_GET["archiveYear"] ; include('./components/_projects.php'); ?> -->

  <div class="archive_thumbs">
      <?php for($x = 0; $x < 40; $x++): ?>
      <?php $type ='Project'; include('./components/_thumb.php'); ?>
      <?php endfor; ?>
  </div>
