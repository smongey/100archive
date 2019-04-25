<section class="articles grey">
    <div class="articles_featured">
      <header>
        <h4>Articles</h4>
        <ul class="subnav">
            <li><a href="/articles.php">View All</a></li>
        </ul>
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
            <div class="subnav">
                <li><a href="/news.php">View All</a></li>
            </div>
        </header>
        <div>
            <?php $type ='News'; include('./components/_thumb.php'); ?>
        </div>
    </div>
</section>
