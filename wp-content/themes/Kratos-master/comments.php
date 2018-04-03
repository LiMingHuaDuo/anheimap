<?php
/**
 * The template for displaying comments
 *
 * @package Vtrois
 * @version 2.5(17/12/23)
 */

if ( post_password_required() ) {
	return;
}
?>
<div id="comments" class="comments-area">
	<?php if ( have_comments() ) : ?>
		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style' => 'ol',
					'short_ping' => true,
					'avatar_size'=> 50,
				) );
			?>
		</ol>
		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
	<div id="comments-nav">
<?php paginate_comments_links('prev_text=上一页&next_text=下一页');?>
</div>
		<?php endif; ?>
	<?php endif; ?>
	<?php
		if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
	<?php endif; ?>
	<?php 
		$fields =  array(
   			 'author' => '<div class="comment-form-author form-group has-feedback"><div class="input-group"><div class="input-group-addon"><i class="fa fa-user"></i></div><input class="form-control" placeholder="昵称" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" /><span class="form-control-feedback required">*</span></div></div>',
   			 'email'  => '<div class="comment-form-email form-group has-feedback"><div class="input-group"><div class="input-group-addon"><i class="fa fa-envelope-o"></i></div><input class="form-control" placeholder="邮箱" id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" /><span class="form-control-feedback required">*</span></div></div>',
   			 'url'  => '<div class="comment-form-url form-group has-feedback"><div class="input-group"><div class="input-group-addon"><i class="fa fa-link"></i></div><input class="form-control" placeholder="网站" id="url" name="url" type="text" value="' . esc_attr(  $commenter['comment_author_url'] ) . '" size="30" /></div></div>',
		);
		$args = array(
			'title_reply_before' => '<h4 id="reply-title" class="comment-reply-title">',
			'title_reply_after'  => '</h4>',
			'fields' =>  $fields,
			'class_submit' => 'btn btn-primary',
			'comment_field' =>  '<div class="comment form-group has-feedback"><div class="input-group"><textarea class="form-control" id="comment" placeholder="|´・ω・)ノ还不快点说点什么呀poi~" name="comment" rows="5" aria-required="true" required  onkeydown="if(event.ctrlKey){if(event.keyCode==13){document.getElementById(\'submit\').click();return false}};"></textarea></div><div class="OwO"></div></div>',
		);
		comment_form($args);
	?>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/js/OwO.min.js"></script>
	<script>
	var OwO_demo = new OwO({
		logo: 'OωO表情',
		container: document.getElementsByClassName('OwO')[0],
		target: document.getElementsByClassName('OwO')[0],
		api: '<?php echo get_stylesheet_directory_uri();?>/inc/OwO.json',
		position: 'down',
		width: '90%',
		maxHeight: '250px'
	});
	function grin(tag) {
		var myField;
		tag = ' ' + tag + ' ';
		if (document.getElementById('comment') && document.getElementById('comment').type == 'textarea') {
		myField = document.getElementById('comment');
		} else {
			return false;
		}
		if (document.selection) {
			myField.focus();
		sel = document.selection.createRange();
		sel.text = tag;
		myField.focus();
		} else if (myField.selectionStart || myField.selectionStart == '0') {
			var startPos = myField.selectionStart;
			var endPos = myField.selectionEnd;
			var cursorPos = endPos;
			myField.value = myField.value.substring(0, startPos)
				+ tag
				+ myField.value.substring(endPos, myField.value.length);
			cursorPos += tag.length;
			myField.focus();
			myField.selectionStart = cursorPos;
			myField.selectionEnd = cursorPos;
			var owoopen = document.getElementsByClassName('OwO OwO-open')[0];
			owoopen.className = "OwO";
		} else {
			myField.value += tag;
			myField.focus();
		}
	}
</script>
</div>
