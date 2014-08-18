<?php if( !is_home() && !is_category() && !is_front_page() && !is_page(contact) ) { ?>
	
	<div class="page-header">
  	<h1>
    	<?php echo roots_title(); ?>
  	</h1>
	</div>

<?php } ?>