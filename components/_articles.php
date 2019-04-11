<section class="articles grey">
    <div class="articles_featured">
      <header>
        <h4>Articles</h4>
      </header>
      <div class="c2">
        <?php for($x = 0; $x < 2; $x++): ?>
            <?php $type ='Article'; include('./components/_thumb.php'); ?>
        <?php endfor; ?>
      </div>
    </div>
    <div class="articles_news">
        <header>
            <h4>News</h4>
        </header>
        <div>
            <?php $type ='News'; include('./components/_thumb.php'); ?>
        </div>
    </div>
</section>
