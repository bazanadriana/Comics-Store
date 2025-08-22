<?php
add_action('wp_enqueue_scripts', function () {
  wp_enqueue_style('comics-child', get_stylesheet_uri(), [], null);
});
