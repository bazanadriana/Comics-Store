<?php
/* Template Name: Comics Landing */
get_header(); ?>
<main class="site-main" style="max-width:1100px;margin:2rem auto;padding:0 1rem;">
  <section style="margin:2rem 0;">
    <h1>Comic Collectibles</h1>
    <p>Browse key issues, graded slabs, and raw copies.</p>
  </section>
  <section>
    <?php if (shortcode_exists('comic_filters')) echo do_shortcode('[comic_filters]'); ?>
  </section>
  <section style="margin-top:1rem;">
    <?php echo do_shortcode('[products limit="8" columns="4" paginate="true"]'); ?>
  </section>
</main>
<?php get_footer();
