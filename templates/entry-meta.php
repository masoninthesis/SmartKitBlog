<div class="entry-meta">
	<?php echo __('<em>By</em>', 'roots'); ?> 
		<em>Mason Lawlor | Follow him on <a href="http://twitter.com/masoninthesis" target="_blank">Twitter</a></em>
	<div style="float:right;">
		<?php
			echo '<span class="comments-link">'; ?>
			<div class="comments-box">
				<?php
			comments_popup_link( '<span class="leave-reply">' . '</span>', __( '1 Reply', 'twentytwelve' ), __( '% Comments', 'twentytwelve' ) );
			echo '</span>';
		?>
			</div>
	</div>
</div>
<br />

<!-- comments_popup_link( '<span class="leave-reply">' . '</span>', __( '1 Reply', 'twentytwelve' ), __( '%', 'twentytwelve' ), '<p>Comments</p>' ); -->