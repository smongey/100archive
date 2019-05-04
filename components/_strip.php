


<?php if($stripType == 'Join'): ?>

    <section class="strip strip-join">
        <header>
            <h5>Join Us</h5>
            <a href="/sign-up" class="right">View Membership Plans</a>
        </header>
        <div class="strip_content">
            <div class="marquee3k" data-speed="1.5" data-pausable="true">
                <ul class="strip_members">
                    <li><a href="#">Friend</a></li>
                    <li><a href="#">Designer</a></li>
                    <li><a href="#">Associate</a></li>
                    <li><a href="#">Studio</a></li>
                    <li><a href="#">Institute</a></li>
                </ul>
            </div>   
        </div>
    </section>


<?php else: ?>

    <section class="strip strip-archive">
        <header>
            <h5>Past Archives</h5>
            <a href="#" class="right">View All</a>
        </header>

        <div class="strip_content">
            <div class="marquee3k" data-speed="0.5" data-reverse="false" data-pausable="true">
                <ul class="strip_members">
                    <li><a href="#">2018</a></li>
                    <li><a href="#">2017</a></li>
                    <li><a href="#">2016</a></li>
                    <li><a href="#">2015</a></li>
                    <li><a href="#">2014</a></li>
                    <li><a href="#">2013</a></li>
                    <li><a href="#">2012</a></li>
                    <li><a href="#">2011</a></li>
                    <li><a href="#">2010</a></li>
                </ul>
            </div>   
        </div>
    </section>

<?php endif; ?>