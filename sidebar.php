<?php 
/*
	this is the main sidebar
*/
?>
<?php if (is_page('2') || $post ->post_parent == '2') { ?>

<? } else { ?>
<div class="sidebar">
     <ul>
     <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Default Sidebar') ) : ?>
     <?php endif; ?>
     </ul>
    <div class="spacer-10"></div>
    <div class="twitterfollow"><a href="http://www.twitter.com/VineInstitute" id="VineInstitute">Follow @VineInstitute on Twitter</a></div>
    <div class="spacer-10"></div>
    <script type="text/javascript" src="http://static.ak.connect.facebook.com/connect.php/en_US"></script><script type="text/javascript">FB.init("876b1db1327786487f4df92a4560abe0");</script><fb:fan profile_id="130766476940097" stream="0" connections="8" logobar="0" width="240"></fb:fan>
    <div class="spacer-10"></div> 
<?php } ?>
</div>