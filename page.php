<?php get_header(); ?>
<div id="row2">
  <div class="wrapper">
    <div id="main">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <!-- Questo blocco viene eseguito per ciascun post visualizzato -->
      <article <?php post_class(); ?>>
        <h1 class="post-title" id="post-<?php echo the_ID() ?>">
          <?php the_title(); ?>
          </h1>
        
        <div class="content">
          <?php the_content(); ?>
        </div>
      </article>
      <!-- Fine del blocco -->
      <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <?php get_sidebar(); ?>
  </div>
</div>
<!-- /#row2 -->
<?php get_footer(); ?>
