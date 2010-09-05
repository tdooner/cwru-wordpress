<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
</div>
</div>
<div id="simpleFooter"><!--footer content-->
<div class="simpleFooterContent"><!--footer left column-->
<div class="simpleFooterLeftCol"><!--footer search field-->
<div class="simpleFooterSearch">
<form action="http://www.google.com/u/cw" target="_parent" method="get" name="searchForm" class="searchForm" id="searchForm"><input type="hidden" name="q" value="inurl:www.case.edu/umc" /> <input name="" type="text" value="search school/dept..." onfocus="if(!this._haschanged){this.value=''};this._haschanged=true;" /><input name="submit" type="image" class="btn" src="http://case.edu/webdev/umc_test/images/searchIcon.jpg" /></form>
</div>
<!--end of footer search field-->
</div>
<div class="simpleFooterMCol">
<div>
</div>
<?php wp_nav_menu( array('theme_location' => 'secondary') );?>
</div>
</div><!--end of footer content-->
<div class="legal">&copy; 2010 Case Western Reserve University, Cleveland, Ohio 44106, 216.368.2000 (<a href="http://www.case.edu/legal.html">legal notice</a>)</div>
</div><!--end of footer-->
<?php wp_footer();?>

