<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
<div><input type="text" value="search this site" name="s" id="s" onfocus="if (this.value == 'search this site')
{this.value = '';}" onblur="if (this.value == '') {this.value = 'search this site';}" />
<input type="submit" id="searchsubmit" value="Go" />
</div>
</form>