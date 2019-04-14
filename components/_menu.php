    <?php if ($colorMode == 'black'): ?>
    	<div class="menu black">
    <?php else: ?>
    	<div class="menu">
    <?php endif ?>
        <div class="menu_search">
            <a href="#">Search</a>
        </div>
        <div class="menu_burger">
            <a href="#"><span></span><span></span><span></span></a>
        </div>
    </div>

    <div class="menu_menu">
        <ul>
            <li><a href="#">Sign In</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contributors</a></li>
            <li><a href="#">Directory</a></li>
            <li><a href="#">How to Submit</a></li>
            <li><?php $btnTitle='Join Us'; include('./components/_btn.php'); ?></li>
        </ul>
    </div>

    <div class="menu_results">
        <input type="text" class="search" placeholder="search">
        <ul>
            <li><a href="#" target="_blank">Search Result</a></li>
            <li><a href="#" target="_blank">Search Result</a></li>
            <li><a href="#" target="_blank">Search Result</a></li>
            <li><a href="#" target="_blank">Search Result</a></li>
            <li><a href="#" target="_blank">Search Result</a></li>
        </ul>
    </div>
