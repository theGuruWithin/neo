<?php
/**
 * Utility functions
 */
<<<<<<< HEAD
function add_filters($tags, $function) {
  foreach($tags as $tag) {
    add_filter($tag, $function);
  }
}

=======
>>>>>>> upstream/master
function is_element_empty($element) {
  $element = trim($element);
  return !empty($element);
}
<<<<<<< HEAD
=======

// Tell WordPress to use searchform.php from the templates/ directory
function roots_get_search_form($form) {
  $form = '';
  locate_template('/templates/searchform.php', true, false);
  return $form;
}
add_filter('get_search_form', 'roots_get_search_form');
>>>>>>> upstream/master
