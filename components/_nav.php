<?php if ($colorMode == 'black'): ?>
	<header class="nav black">
<?php else: ?>
	<header class="nav">
<?php endif ?>

        <div class="nav_logo">
        <?php include('./components/_logo.php'); ?>
        </div>
        <nav class="nav_nav">
            <ul>
                <li><a href="/components.php">Components</a></li>
                <li><a href="/projects.php">Projects</a></li>
                <li><a href="/archives.php">Archives</a></li>
                <li><a href="/articles.php">Articles</a></li>
                <li><a href="/community.php">Community</a></li>
                <!-- <li><a href="#">Events</a></li> -->
            </ul>
        </nav>
    </header>
