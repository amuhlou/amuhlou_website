<?php
//custom HTML for comments section
function amuhlou_comment($comment, $args, $depth) {
 
$GLOBALS['comment'] = $comment; ?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
<div id="comment-<?php comment_ID(); ?>">
<div class="comment-author vcard">
<?php echo get_avatar($comment,$size='69',$default='<path_to_url>' ); ?>
 
<?php printf(__('<cite class="fn">%s</cite> <span class="says">said on </span>'), get_comment_author_link()) ?><?php printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?>:
</div>
<?php if ($comment->comment_approved == '0') : ?>
<em><?php _e('Your comment is awaiting moderation.') ?></em>
<br />
<?php endif; ?>
 
<?php comment_text() ?>
 <?php edit_comment_link(__('(Edit)'),'  ','') ?>
<div class="reply">
<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
</div>
</div>
<?php
}
//widgetize sidebar...
if ( function_exists('register_sidebar') )
register_sidebar(array(
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h2>',
'after_title' => '</h2>',
));
//Modify the_excerpt so that the [...] becomes ...
function new_excerpt_more($excerpt) {
	return str_replace('[...]', '...', $excerpt);
}
add_filter('wp_trim_excerpt', 'new_excerpt_more');

//Remove default behavior of "Read More" link so it does not jump to an anchor within the post.
function remove_more_jump_link($link) { 
	$offset = strpos($link, '#more-');
	if ($offset) {
		$end = strpos($link, '"',$offset);
	}
	if ($end) {
		$link = substr_replace($link, '', $offset, $end-$offset);
	}
	return $link;
}
add_filter('the_content_more_link', 'remove_more_jump_link');

