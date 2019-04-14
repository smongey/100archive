


<?php if($stripType == 'Join'): ?>

    <section class="strip two join">
        <div class="header smallcaps">
            <h5>Join</h5>
        </div>
        <div class="content text">
            Powered by the design community — your support allows us to keep building the 100 Archive project
        </div>
    </section>

<?php elseif($stripType == 'Newsletter'): ?>

        <section class="strip two newsletter">
            <div class="header smallcaps">
                <h5>Newsletter</h5>
            </div>
            <div class="content text">
                Sign up to get the inside track on the project, our latest articles and upcoming events!
            </div>
        </section>


<?php else: ?>

    <section class="strip two">
        <header>
            <h5>Past</h5>
            <a href="#" class="right">View All</a>
        </header>

        <h1><a href="#">2017</a> 2016 2015 2014</h1>
    </section>



<?php endif; ?>
