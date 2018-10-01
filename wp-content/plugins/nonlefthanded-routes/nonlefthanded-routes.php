<?php
   /*
   Plugin Name: Nonlefthanded Routes
   Plugin URI: http://nonlefthanded.com/plugins
   description: a plugin to create awesomeness and spread joy
   Version: 1.2
   Author: CJ Stritzel
   Author URI: http://nonlefthanded.com
   License: Blackjack, Food Handlers
   */
   require_once('Classes/Routes.php');
   add_action( 'rest_api_init', 'routesInit');
