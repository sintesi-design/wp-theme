<?php get_header(); ?>
<div id="row2">
  <div class="wrapper">
    <div id="main">
     <h1>Risultati per: <span>"<?php echo esc_html( get_search_query( false ) ); ?>"</span></h1>
   <p>
  <?php
    global $wp_query;
    $total_results = $wp_query->found_posts;
		
		echo "Pagine trovate: <span>$total_results</span>";
  ?>  </p>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <!-- Questo blocco viene eseguito per ciascun post visualizzato -->
      <article <?php post_class(); ?>>
        <h2 class="post-title" id="post-<?php echo the_ID() ?>"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
          <?php the_title(); ?>
          </a></h2>
        <div class="meta">
          <p>
            Pubblicato il <?php the_time(' j F Y'); ?> in <?php the_category(' '); ?> &raquo; <?php the_tags('', ', ', ''); ?>
          </p>
        </div>
        <div class="content">
          <?php the_content("Leggi l'articolo..."); ?>
        </div>
      </article>
      <!-- Fine del blocco -->
      <?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
     <?php endif; ?>
    </div>
    <?php get_sidebar(); ?>
  </div>
</div>
<!-- /#row2 -->
<?php get_footer(); ?>
