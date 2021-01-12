<?php
/**
 * Template Name: Test Template

 */

$months = array( 1 => 'Январь' , 'Февраль' , 'Март' , 'Апрель' , 'Май' , 'Июнь' , 'Июль' , 'Август' , 'Сентябрь' , 'Октябрь' , 'Ноябрь' , 'Декабрь' );

$terms = get_terms(
  array(
    'taxonomy'   => 'events_tags',
    'hide_empty' => true,
    'hierarchical' => false,
    'orderby' => 'name',
    'order' => 'ASC',
    'parent' => 0
  )
);
 
foreach ( $terms as $term ) {
  echo '<h2>'.$term->name.'</h2>';
  echo '<div class="partners-list">';

  $args = array(
    'post_type' => 'events',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'tax_query' => array(
      array(
        'taxonomy' => 'events_tags',
        'field' => 'name',
        'terms' => $term->name
      )
    ),
    'meta_query' => array(
      array(
        'key' => 'events_finish',
        'value' => date('Y-m-d H:i:s'),
        'compare' => '>=',
        'type' => 'DATETIME',
      )
    ),
    'orderby' => 'events_start',
    'order' => 'asc'
  );

  $get_posts = get_posts($args);
  $months_array = array();
  $posts_array = array();
  $count_posts = 0;

  foreach ($get_posts as $get_post) {
    $count_posts++;
    $events_start = $months[date( 'n', strtotime(get_field( "events_start", $get_post->ID )))] . date(' Y',strtotime(get_field( "events_start", $get_post->ID )) );
    if (!in_array($events_start, $months_array)) {
      $months_array[] = $events_start;
    }
    $posts_array[] = array(
      'name'=> $get_post->post_title, 
      'href' => get_permalink($get_post->ID),
      'date' => get_field( "events_start", $get_post->ID ).' - '.get_field( "events_finish", $get_post->ID )
    );

    if (count($months_array) == 5) {
      break 1;
    }
  }
  echo '<h3>Список "месяцев-годов"</h3>';
  echo '<ul>';
  foreach ($months_array as $month) {
    echo '<li>'.$month.'</li>';
  }
  echo '</ul>';

  echo '<h3>Список мероприятий</h3>';
  echo '<ul>';
  foreach ($posts_array as $postik) {
    echo '<li><a href"'.$postik['href'].'">'.$postik['name'].'</a> ('.$postik['date'].')</li>';
  }
  echo '</ul>';

}
