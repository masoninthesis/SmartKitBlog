<article <?php post_class(); ?>>
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <small class="timestamp"><?php the_time('F jS, Y') ?></small>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-summary">
      <?php the_content('<button class="btn btn-primary">Read More..</button>'); ?>
    <br />
  </div>
</article>
