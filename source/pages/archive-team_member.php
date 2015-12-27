<?php get_header(); ?>

  <div id="content">
    <div id="inner-content" class="wrap cf">
      <main id="main" class="m-all t-all d-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

        <?php
        the_archive_title( '<h1 class="page-title">', '</h1>' );
        the_archive_description( '<div class="taxonomy-description">', '</div>' );
        ?>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">

            <header class="entry-header article-header">
              <h3 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
            </header>

            <section class="entry-content cf">
		<?php $post_fields = get_post_custom(); ?>
		<?php the_post_thumbnail('profile'); ?>
		<p><?php echo get_post_meta( get_the_ID(), Subteam, true); ?></p>
		<p><?php echo get_post_meta( get_the_ID(), Year, true); ?></p>
		<p><?php echo get_post_meta( get_the_ID(), Major, true); ?></p>
            </section>

            <footer class="article-footer"></footer>

          </article>

        <?php endwhile; ?>
        <?php bones_page_navi(); ?>
        <?php else : ?>

          <article id="post-not-found" class="hentry cf">
            <header class="article-header">
              <h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
            </header>
            <section class="entry-content">
              <p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
            </section>
            <footer class="article-footer">
              <p><?php _e( 'This is the error message in the archive.php template.', 'bonestheme' ); ?></p>
            </footer>
          </article>

        <?php endif; ?>

      </main>
    </div>
  </div>

<?php get_footer(); ?>
