
    <?php if($type == 'Article'): ?>
        <div class="thumb">
          <a href="#">
            <img src="http://placehold.it/500x350" alt="">
            <date>7 Sep 2018</date>
            <h3 class="largetext thumb_indent">Beyond the Border<br/>Alex Synge</h3>
          </a>
          <p class="thumb_doubleindent">The idea of setting up a studio began in Dublin 5 years ago, however we moved to Limerick to realise the plan. Limerick is an affordable place to be, so in the early days we could take more risks...</p>
        </div>
        
    <?php elseif($type == 'News'): ?>

        <div class="thumb">
          <a href="#">
            <img src="http://placehold.it/500x350" alt="">
            <date>7 Sep 2018</date>
            <h3 class="largetext thumb_indent">Evolving the Archive<br/>Aideen McCole</h3>
          </a>
          <p class="thumb_doubleindent">This year we were delighted to receive funding from The Heritage Council in order to <a href="http://google.com">help</a> us evolved the archive and identify key areas on the website in particular where we needed improvement…</p>
        </div>


    <?php elseif($type == 'Series'): ?>
        <div class="thumb">
            <a href="#" class="btn btn-series">Collaboration</a>
            <a href="#">
                <img src="http://placehold.it/500x350" alt="">
                <date>7 Sep 2018</date>
                <h3 class="largetext thumb_indent">Designer as Collaborator: Simon Finney</h3>
            </a>
            <p class="thumb_doubleindent">To round out our Designer as Collaborator series, Simon Finney gives us an insight into front end development and UX design at IBM. Based at IBM Studios Dublin, Simon is the front end development practice lead for the IBM Security portfolio.</p>
        </div>

    <?php else: ?>

        <div class="thumb">
            <a href="#">
            <img src="http://placehold.it/300x200" alt="Title">
            <h3>Kate Moylan</h3>
            </a>
            <p class="thumb_indent">Lorem ipsum dolor sit amet <a href="#" class="ul">consectetur</a> adipisicing elit.</p>
        </div>

    <?php endif; ?>