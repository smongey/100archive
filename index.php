<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/app.css">
</head>
<body>
    


<section class="index_intro intro">
	<div class="intro_title">
      <h2>The 100 Archive charts the past, present and future of Irish design by publishing 100 notable communication design projects, selected each year following an open call.</h2>
    </div>
    <div class="stack">
    	<ul>
            <li><img src="http://placehold.it/600x400" alt=""></li>
            <li><img src="http://placehold.it/600x400" alt=""></li>
            <li><img src="http://placehold.it/600x400" alt=""></li>
        </ul>
    </div>
</section>

<section class="index_archiveis">
	<header>
        <h4>The Archive is…</h4>
    </header>
    <div class="index_four"> 
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
                <img src="http://placehold.it/560x380" attr="image title"/>
                <time>3 Mar 2019</time>
                <h3>Article Title<br/>Article Author</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis facere eius corporis blanditiis autem magnam fuga quis, culpa hic dicta.</p>
            </div>
            <?php } ?>
        </div>
    </div>
    <div class="articles_news">
        <header>
            <h4>News</h4>
        </header>
        <div>
        <!-- {exp:channel:entries channel="news" cache="yes" refresh="120" limit="1" offset="2" status="open"} -->
            <div class="articles_article">
              <a href="{title_permalink="article"}">
                <!-- {article_cover_image}<img src="{cdn_url}{exp:ce_img:single src="{image:url}" url_only="yes" crop="yes" quality="75" width="560" height="380"}" alt="{title}"/>{/article_cover_image} -->
                <time>{entry_date format="%j %M %Y"}</time>
                <div class="date"></div>
                <h3>{title}<br/>{news_author}</h3>
                <!-- {exp:trunchtml chars="200" inline="..."}
                  {if article_text != ""}{article_text}{if:else}{news_text}{/if}
                {/exp:trunchtml} -->
              </a>
            </div>
        <!-- {/exp:channel:entries} -->
        </div>
    </div>

</section>


<section class="projects">
    <header>
        <h4>Projects</h4>
        <ul>
            <li><a href="#" class="btn">+ Submit a project</a></li>
            <li><a href="#" class="btn">View All</a></li>
        </ul>
    </header>
    <div>
      <!-- {exp:channel:entries channel="submissions" limit="8" start_on="2018-10-12 20:00" status="showcase" orderby="random" cache="yes" refresh="1200"} -->
        <div class="projects_project">
            <a href="{title_permalink="project"}">
            <!-- {submission_images limit="1"}
          		<img src="{cdn_url}{exp:ce_img:make src="{image}" url_only="yes" crop="yes" quality="75" width="400" height="300"}" attr="{title}"/>
            {/submission_images} -->
            <h3>{title}</h3>
			<p class="credit">
            	Designed by 
            	<!-- {exp:playa:children field="submission_members" status="not closed"}
                 {if total_results > 1 AND count == total_results}&nbsp;and&nbsp;{if:elseif count == 1}{if:else}, {/if}{title}  
                {/exp:playa:children}
                {exp:playa:children field="submission_practices" limit="1"}
                	{if {count} > 0 AND title != "Freelance"}
                    	at&nbsp;{title}
                    {/if}
                {/exp:playa:children}</p> -->
            </a>
        </div>
      <!-- {/exp:channel:entries} -->
    </div>
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



<!-- {embed="new/_footer"} -->