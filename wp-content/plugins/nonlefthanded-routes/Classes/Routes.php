<?php
  function routesInit(){
    header('Content-Type: application/json');
    define('API_BASE','/wp/v2');
    register_rest_route( API_BASE, '/(?P<post_type>[a-z-]+)/(?P<id>\d+)/meta', array(
      'methods' => 'GET',
      'callback' => 'routes_meta_func',
    ));
  }

  function routes_meta_func(WP_REST_Request $request){
    $_ = (object)array();
    $post_id = $request->get_param('id');
    foreach(get_metadata('post',$post_id) as $k => $v):
      if (substr($k,0,1) !== '_'):
        $_->{$k} = maybe_unserialize($v[0]);
      endif;
    endforeach;
    // print_r($_);
    return new WP_REST_Response( $_, 200 );
  }
