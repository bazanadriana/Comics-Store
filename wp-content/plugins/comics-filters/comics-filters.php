<?php
/**
 * Plugin Name: Comics Filters (Shortcode)
 * Description: Adds [comic_filters] to filter WooCommerce products by Publisher and Grade (basic front-end only).
 */
add_shortcode('comic_filters', function () {
  ob_start(); ?>
  <form class="comic-filters" method="get" action="<?php echo esc_url( wc_get_page_permalink('shop') ); ?>">
    <select name="publisher"><option value="">Publisher</option>
      <option>Marvel</option><option>DC</option><option>Image</option>
    </select>
    <select name="grade"><option value="">Grade</option>
      <option>CGC 9.8</option><option>CGC 9.6</option><option>Raw VF/NM</option>
    </select>
    <button type="submit">Filter</button>
  </form>
  <?php return ob_get_clean();
});
