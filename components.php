<?php include('./components/_header.php'); ?>
  
    <?php include('./components/_intro.php'); ?>

    <section class="black">
        <header>
            <h4>Header Title</h4>    
        </header>
        <div class="c4">
            <div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque ducimus doloribus molestias asperiores sit excepturi laboriosam vitae voluptas eius ullam suscipit fugit, sunt tempore odit repellat, quis accusamus voluptate? Nobis!</p>
                <a class="ul" href="#">Explore</a>
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque ducimus doloribus molestias asperiores sit excepturi laboriosam vitae voluptas eius ullam suscipit fugit, sunt tempore odit repellat, quis accusamus voluptate? Nobis!</p>
                <a class="ul" href="#">Browse</a>
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque ducimus doloribus molestias asperiores sit excepturi laboriosam vitae voluptas eius ullam suscipit fugit, sunt tempore odit repellat, quis accusamus voluptate? Nobis!</p>
                <a class="ul" href="#">See</a>
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque ducimus doloribus molestias asperiores sit excepturi laboriosam vitae voluptas eius ullam suscipit fugit, sunt tempore odit repellat, quis accusamus voluptate? Nobis!</p>
                <a class="ul" href="#">Learn</a>
            </div>
        </div>
    </section>
    
    <?php include('./components/_articles.php'); ?>

    <section>
        <header>
            <h4>Projects</h4>
            <ul class="subnav right inline">
                <li>
                <?php $btnTitle='+ Submit a Project'; include('./components/_btn.php'); ?>
                </li>
                <li><a class="/projects.php" href="#">View All</a></li>
            </ul>
        </header>
        <div class="c4">
            <?php for($x = 0; $x < 4; $x++): ?>
            <?php $type ='Project'; include('./components/_thumb.php'); ?>
            <?php endfor; ?>
        </div>
    </section>
  
    <section class="c3">
        <?php for($x = 0; $x < 3; $x++): ?>
        <?php $type ='Series'; include('./components/_thumb.php'); ?>
        <?php endfor; ?>
    </section>
  
    <?php include('./components/_pagination.php'); ?>

    <?php include('./components/_subnav.php'); ?>

    <section class="subnav">
        <?php include('./components/_filter.php'); ?>
        <a href="#" class="enter">Enter a Project</a>
    </section>
  
    <?php // include('./components/_title.php'); ?>
    
    <?php include('./components/_text.php'); ?>

    <?php include('./components/_atoz.php'); ?>

    <?php include('./components/_images.php'); ?>

    <?php $archiveYear='2017'; include('./components/_archive.php'); ?>

    <?php include('./components/_accordion.php'); ?>
    
    <?php $stackType='stack-full'; include('./components/_stack.php'); ?>
   
    <?php include('./components/_map.php'); ?>
    
    <div class="text c2">
        <div></div>
        <div>
            <h3>Become a Member</h3>
            <?php include('./components/_form.php'); ?>
        </div>
    </div>
    
    <?php $stripType="Join"; include('./components/_strip.php'); ?>
    <?php $stripType="Past"; include('./components/_strip.php'); ?>

    <div class="c2">
        <?php $color= "lightgrey"; $footblockTitle='Newsletter'; include('./components/_footblock.php'); ?>    
        <?php $color= "green"; $footblockTitle='Launch'; include('./components/_footblock.php'); ?>
    </div>
  
    <div class="c2">
        <?php $color= "midgrey"; $footblockTitle='Join Us'; include('./components/_footblock.php'); ?>    
        <?php $color= "peach"; $footblockTitle='Upgrade'; ?>
    
        <div class="footblock <?php echo $color; ?>">
            <a href="#">
                <header>
                <h5><?php echo $footblockTitle; ?></h5>
                </header>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta expedita recusandae Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta expedita recusandae Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta expedita recusandae consequuntur nam quaerat enim, consequatur assumenda deserunt ullam, sequi, sit quibusdam natus dolore eos sed! Perferendis magnam at incidunt?</p>
            </a>
        </div>
    
    </div>
  
    <div class="c2">
        <?php $color= "sky"; $footblockTitle='Join Us'; include('./components/_footblock.php'); ?>    
        <?php $color= "purple"; $footblockTitle='Upgrade'; include('./components/_footblock.php'); ?>
    </div>

    <div class="c2">
        <?php $color= "flesh"; $footblockTitle='Join Us'; include('./components/_footblock.php'); ?>    
        <?php $color= "mint"; $footblockTitle='Upgrade'; include('./components/_footblock.php'); ?>
    </div>

<?php include('components/_footer.php'); ?>