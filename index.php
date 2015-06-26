<?php get_header(); ?>

<div id="row2">
  <div class="wrapper">
    <div id="main">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <!-- Questo blocco viene eseguito per ciascun post visualizzato -->
      <article <?php post_class(); ?>>
        <h2 class="post-title" id="post-<?php echo the_ID() ?>"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
          <?php the_title(); ?>
          </a></h2>
        <div class="meta">
          <p> Pubblicato il
            <?php the_time(' j F Y'); ?>
            in
            <?php the_category(' '); ?>
            &raquo;
            <?php the_tags('', ', ', ''); ?>
          </p>
        </div>
        <div class="content">
          <?php 
			  if ( has_post_thumbnail() ) {
				?>
					  <div class="cover"><a href="<?php the_permalink()?>">
						<?php the_post_thumbnail()?>
						</a></div>
					  <?php
			  } 
		  ?>
          <?php the_content("Leggi l'articolo..."); ?>
        </div>
      </article>
      <!-- Fine del blocco 2 2 -->
      <?php endwhile; ?>
      <?php endif; ?>
    </div>
       <div class="nav">
     <p class="prev"><?php previous_posts_link(); ?></p><p class="next"><?php next_posts_link(); ?></p>
   </div>
    <?php get_sidebar(); ?>
  </div>
</div>
<!-- /#row2 -->
<?php get_footer(); ?>
