<?php include('./components/_header.php'); ?>

<div class="wrap">

    <section class="intro">
        <div class="intro_title">
            <h2>The 100 Archive charts the past, present and future of Irish design by publishing 100 notable communication design projects, selected each year following an&nbsp;open&nbsp;call.</h2>
        </div>
        <div class="stack intro_stack">
            <ul>
            <li class="stack_one" data-caption="Caption A"><img src="http://placehold.it/500x325" alt=""></li>
            <li class="stack_two" data-caption="Caption B"><img src="http://placehold.it/500x325/333" alt=""></li>
            <li class="stack_three" data-caption="Caption C"><img src="http://placehold.it/500x325/666" alt=""></li>
            </ul>
        </div>
    </section>

    <section class="index_archiveis">
        <header>
            <h4>The Archive is…</h4>
        </header>
        <div class="index_links"> 
            <div>
                <p>An annual archive that captures important and distinctive communication design and its impact on life, society, commerce and culture.</p>
                <a href="#">Explore the archives</a>
            </div>
            <div>
                <p>A forum for ideas and activity exploring what is happening in design now and what our future holds </p>
                <a href="#">Browse the articles</a>
            </div>
            <div>
                <p>A map of the design industry in Ireland and the people, institutions and associates worldwide who support it </p>
                <a href="#">See the map</a>
            </div>
            <div>
                <p>A community led platform committed to developing, presenting and preserving Irish design </p>
                <a href="#">Learn more</a>
            </div>
        </div>
    </section>

    <section class="articles">
        <div class="articles_featured">
            <header>
                <h4>Articles</h4>
            </header>
            <div>
                <?php for($x = 0; $x < 2; $x++) { ?>
                <div class="articles_article">
                    <a href="#">
                        <img src="http://100archive-d95a.kxcdn.com/images/made/images/articles/5556/belfast_1_560_380_75_c1.jpg" attr="image title"/>
                        <time>3 Mar 2019</time>
                        <h3>Article Title<br/>Article Author</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis facere eius corporis blanditiis autem magnam fuga quis, culpa hic dicta.</p>
                    </a>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="articles_news">
            <header>
                <h4>News</h4>
            </header>
            <div>
                <div class="articles_article">
                    <a href="#">
                        <img src="http://100archive-d95a.kxcdn.com/images/made/images/articles/5556/belfast_1_560_380_75_c1.jpg" attr="image title"/>
                        <time>3 Mar 2019</time>
                        <h3>Article Title<br/>Article Author</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis facere eius corporis blanditiis autem magnam fuga quis, culpa hic dicta.</p>
                    </a>
                </div>
            </div>
        </div>

    </section>


    <section class="projects">
        <header class="projects_nav">
            <div>
            <h4>Projects</h4>
            </div>
            <div>
                <ul>
                    <li><a href="#" class="btn">+ Submit a project</a></li>
                    <li><a href="#">View All</a></li>
                </ul>
            </div>
        </header>
        <?php include($path . '_projects.php'); ?>
    </section>

    <section class="past">
        <header>
            <h4>Past Archives</h4>
            <ul>
                <li><a href="#">View All</a></li>
            </ul>
        </header>
        <ul>
        <!-- {exp:channel:entries channel="past_archives" status="open"} -->
        <li><a href="{title_permalink="projects/archive"}">{title}</a></li>
        <!-- {/exp:channel:entries}     -->
        </ul>
    </section>

    <section class="newsletter">
        <header>
            <h4>Newsletter</h4>
        </header>
    </section>

    <section class="joinus">
        <header>
            <h4>Newsletter</h4>
        </header>
    </section>

</div>
<?php include('./components/_footer.php'); ?>