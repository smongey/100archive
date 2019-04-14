<?php $colorMode='black'; include('./components/_header.php'); ?>

    <section class="archive black">

      <div class="title">2017 Archive</div>

      <div class="text text_right">
        <p>The work has been selected for inclusion in the 100 Past for 2014 either because it demonstrates: a great idea, sophistication and excellence, an honesty of intent, great craft, a current trend or a mixture of these things. As is always the case, projects which were particularly strong were those in which the designer(s) were involved in all aspects of the project and there seems to be a greater degree of involvement in strategy and content generation as our profession matures and is understood by those who commission the work we produce.</p>
        <p class="indent">Kathryn Wilson, Slater</p>
      </div>

      <div class="filter_container">
          <?php include('./components/_filter.php'); ?>
      </div>

      <div class="projects_container">
        <?php $archiveYear='2017'; include('./components/_archive.php'); ?>
      </div>

    </section>

<?php include('./components/_footer.php'); ?>