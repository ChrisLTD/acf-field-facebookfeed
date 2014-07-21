<?php
// function get_fb_images($fbid){
//   global $facebook;
//   $photos = array();
//   $trans_name = 'fb_photos_'.$fbid;

//   if(is_user_logged_in()) delete_site_transient( $trans_name );
//   if ( false === ( $photos = get_site_transient( $trans_name ) ) ) {
//     // It wasn't there, so regenerate the data and save the transient
//     $fqlResult  =  $facebook->api($fbid.'/photos');

//     foreach($fqlResult['data'] as $data ){
//       $name = ( isset($data['name']) ?  $data['name'] : '');
//       $image_sizes = $data['images'];
//       $thumbnail = array_slice($image_sizes, -1, 1); // last image size
//       $photos[] = array('id' => $data['id'],
//                 'url' => $data['source'],
//                 'width' => $data['width'],
//                 'height' => $data['height'],
//                 'thumbnail' => $thumbnail[0]['source'],
//                 'caption' => $name
//       );
//     }

//     set_site_transient( $trans_name,  $photos, 12 * HOUR_IN_SECONDS );
//   }

//   return $photos;
// }

// function get_fbid_from_url($fb_url){
//   $re1='.*?'; # Non-greedy match on filler
//   $re2='(\\d+)';  # Integer Number 1

//   if ($c=preg_match_all ("/".$re1.$re2."/is", $fb_url, $matches)) {
//       $fbid=$matches[1][0];
//       return $fbid;
//   }
//   return false;
// }

// function get_fb_album_info($fbid){
//   global $facebook;
//   $album_array = array();
//   // Create our Application instance (replace this with your appId and secret).
//   if ( false === ( $album_array = get_site_transient( 'fb_album_'.$fbid ) ) ) {
//     // It wasn't there, so regenerate the data and save the transient
//     $fqlResult = $facebook->api($fbid);
//     if(isset($fqlResult['name']))
//       $album_array['name'] = $fqlResult['name'];
//     if(isset($fqlResult['description']))
//       $album_array['description'] = $fqlResult['description'];
//     if(isset($fqlResult['cover_photo']))
//       $album_array['cover_photo'] = 'http://graph.facebook.com/'.$fqlResult['cover_photo'].'/picture';

//     set_site_transient( 'fb_album_'.$fbid ,  $album_array , 12 * HOUR_IN_SECONDS );
//   }
//   return $album_array;
// }
?>
