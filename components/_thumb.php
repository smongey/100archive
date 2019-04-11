
    <?php if($type == 'Article'): ?>
        <div class="thumb">
          <a href="#">
            <img src="http://placehold.it/500x350" alt="">
            <date>7 Sep 2018</date>
            <h3 class="thumb_indent">Article Title</h3>
          </a>
          <p class="thumb_doubleindent">Lorem, ipsum dolor <a href="#">sit amet</a> consectetur adipisicing elit. Obcaecati labore quia quidem dolore eius deserunt.</p>
        </div>
        
    <?php elseif($type == 'News'): ?>

        <div class="thumb">
          <a href="#">
            <img src="http://placehold.it/500x350" alt="">
            <date>7 Sep 2018</date>
            <h3 class="thumb_indent">News Title</h3>
          </a>
          <p class="thumb_doubleindent">Lorem, ipsum dolor <a href="#">sit amet</a> consectetur adipisicing elit. Obcaecati labore quia quidem dolore eius deserunt.</p>
        </div>


    <?php elseif($type == 'Series'): ?>
        <div class="thumb">
            <a href="#" class="btn btn-series">Series Title</a>
            <a href="#">
                <img src="http://placehold.it/500x350" alt="">
                <date>7 Sep 2018</date>
                <h3 class="thumb_indent">News Title</h3>
            </a>
            <p class="thumb_doubleindent">Lorem, ipsum <a href="#">dolor sit</a> amet consectetur adipisicing elit. Obcaecati labore quia quidem dolore eius deserunt.</p>
        </div>


    <?php else: ?>
        <div class="thumb">
            <a href="#">
            <img src="http://placehold.it/300x200" alt="Title">
            <h3>Kate Moylan</h3>
            </a>
            <p class="indent">Lorem ipsum dolor sit amet <a href="#" class="ul">consectetur</a> adipisicing elit.</p>
        </div>

    <?php endif; ?>