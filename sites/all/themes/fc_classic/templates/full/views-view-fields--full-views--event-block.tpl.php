<?php
  // "Geo" microformat, see http://microformats.org/wiki/geo
  if ($fields['latitude']->content && $fields['longitude']->content) {
    // Assume that 0, 0 is invalid.
    if ($fields['latitude']->content != 0 || $fields['longitude']->content != 0) {
      
      $map_link = 'http://maps.google.com/maps?saddr=&daddr=' . $fields['latitude']->content . ',' . $fields['longitude']->content;
      $marker = '<div class="map-marker">' . $fields['address']->content . '<div class=""><a href=' . $map_link . ' target="_blank">Get Directions</a></div></div>';
      print gmap_simple_map($fields['latitude']->content, $fields['longitude']->content, '', $marker, 'default');
      
      
  
  print '<div class="get-dir"><a href=' . $map_link . ' target="_blank">Get Directions</a></div>';
      
    }
  }
  
 
?>

