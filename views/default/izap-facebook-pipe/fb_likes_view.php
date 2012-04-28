<?php
/* * ************************************************
 * PluginLotto.com                                 *
 * Copyrights (c) 2005-2010. iZAP                  *
 * All rights reserved                             *
 * **************************************************
 * @author iZAP Team "<support@izap.in>"
 * @link http://www.izap.in/
 * Under this agreement, No one has rights to sell this script further.
 * For more information. Contact "Tarun Jangra<tarun@izap.in>"
 * For discussion about corresponding plugins, visit http://www.pluginlotto.com/pg/forums/
 * Follow us on http://facebook.com/PluginLotto and http://twitter.com/PluginLotto
 */

/**
 * setting from admin panel
 */
$send_button = IzapBase::pluginSetting(array(
      'name' => 'facebook_settings_sendbutton',
      'value' => 'false',
      'plugin' => GLOBAL_IZAP_FACEBOOK_PIPE_PLUGIN,
    ));

$layout_style = IzapBase::pluginSetting(array(
      'name' => 'facebook_settings_like_layout_style',
      'value' => 'standard',
      'plugin' => GLOBAL_IZAP_FACEBOOK_PIPE_PLUGIN,
    ));

$like_color_scheme = IzapBase::pluginSetting(array(
      'name' => 'facebook_settings_like_color_scheme',
      'value' => 'light',
      'plugin' => GLOBAL_IZAP_FACEBOOK_PIPE_PLUGIN,
    ));

$object = $vars['entity'];
//c($vars['item']);
$enable_fb_like_buttion = elgg_get_plugin_setting('facebook_settings_enable_like_buttion', GLOBAL_IZAP_FACEBOOK_PIPE_PLUGIN);
if ($enable_fb_like_buttion == 'true') {
?>
<?php // facebook like view  ?>
  
  <div class="fb-like" data-href="<?php echo $object->getUrl(); ?>"
       data-send="<?php echo $send_button; ?>"
       data-layout="<?php echo $layout_style; ?>"
       data-colorscheme="<?php echo $like_color_scheme; ?>"
       data-width="auto" data-show-faces="false">
  </div>

<?php } ?>