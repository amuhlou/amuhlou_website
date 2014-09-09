<form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<p>
<label for="s">Search by keywords</label><input type="text" alt="search" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" />
<input type="submit" value="<?php _e('Search'); ?>" />
</p>
</form>