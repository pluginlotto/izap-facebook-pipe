<?php

/* * ************************************************
 * PluginLotto.com                                 *
 * Copyrights (c) 2005-2011. iZAP                  *
 * All rights reserved                             *
 * *************************************************
 * @author iZAP Team "<support@izap.in>"
 * @link http://www.izap.in/
 * Under this agreement, No one has rights to sell this script further.
 * For more information. Contact "Tarun Jangra<tarun@izap.in>"
 * For discussion about corresponding plugins, visit http://www.pluginlotto.com/pg/forums/
 * Follow us on http://facebook.com/PluginLotto and http://twitter.com/PluginLotto
 */

/**
 * Define some globals
 */
define('GLOBAL_IZAP_FACEBOOK_PIPE_PLUGIN', 'izap-facebook-pipe');

// Hook the pluugin with the system

if (elgg_is_active_plugin('izap-elgg-bridge')) {
  elgg_register_event_handler('init', 'system', 'izap_fb_pipe_init');
}

/**
 * main init function, that will be hooked
 */
function izap_fb_pipe_init() {
//start plugin
  izap_plugin_init(GLOBAL_IZAP_FACEBOOK_PIPE_PLUGIN);

  elgg_register_plugin_hook_handler('comments', 'object', 'func_fb_replace_comments');

// register plugin hook handler for
  elgg_register_plugin_hook_handler('register', 'menu:river', 'func_fb_like_river_menu_set', 500);
  elgg_register_plugin_hook_handler('register', 'menu:entity', 'func_fb_like_entity_menu_set', 500);
  elgg_register_plugin_hook_handler('register', 'menu:river', 'func_fb_comment_river_menu_set', 700);
}

//overriding elgg comments with fb comments
function func_fb_replace_comments($hook, $entity_type, $ElggComments, $params) {

  return elgg_view('input/fb_comments', array(
    'entity' => $params['entity'],
    'paging' => 'off',
    'limit' => 200,
  ));
}

// removing comment icom from river
function func_fb_comment_river_menu_set($hook, $type, $return, $params) {
  $options = array(
    'name' => 'comment',
    'href' => false,
    'text' => '',
    'priority' => 1020,
  );
  $return[] = ElggMenuItem::factory($options);

  return $return;
}

//removing like icom from river
function func_fb_like_river_menu_set($hook, $type, $return, $params) {

  $entity = $params['item']->getObjectEntity();
  $options = array(
    'name' => 'likes',
    'text' => elgg_view(
        GLOBAL_IZAP_FACEBOOK_PIPE_PLUGIN . DIRECTORY_SEPARATOR . 'fb_likes_view',
        array('entity' => $entity)
    ),
    'href' => false,
    'priority' => 1001,
  );
  $return[] = ElggMenuItem::factory($options);

  $options = array(
    'name' => 'likes_count',
    'text' => '',
    'href' => false,
    'priority' => 1001,
  );
  $return[] = ElggMenuItem::factory($options);



  return $return;
}

// removing like icon from detail page
function func_fb_like_entity_menu_set($hook, $type, $return, $params) {

  $entity = $params['entity'];
  $options = array(
    'name' => 'likes',
    'text' => elgg_view(
        GLOBAL_IZAP_FACEBOOK_PIPE_PLUGIN . DIRECTORY_SEPARATOR . 'fb_likes_view',
        array('entity' => $entity)
    ),
    'href' => false,
    'priority' => 1001,
  );
  $return[] = ElggMenuItem::factory($options);

  $options = array(
    'name' => 'likes_count',
    'text' => '',
    'href' => false,
    'priority' => 1001,
  );
  $return[] = ElggMenuItem::factory($options);

  return $return;
}