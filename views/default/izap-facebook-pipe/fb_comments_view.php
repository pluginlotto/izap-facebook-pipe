<?php
/* * *************************************************
 * PluginLotto.com                                 *
 * Copyrights (c) 2005-2011. iZAP                  *
 * All rights reserved                             *
 * **************************************************
 * @author iZAP Team "<support@izap.in>"
 * @link http://www.izap.in/
 * Under this agreement, No one has rights to sell this script further.
 * For more information. Contact "Tarun Jangra<tarun@izap.in>"
 * For discussion about corresponding plugins, visit http://www.pluginlotto.com/forum/
 * Follow us on http://facebook.com/PluginLotto and http://twitter.com/PluginLotto
 */

/**
 * setting from admin panel
 */
$width = IzapBase::pluginSetting(array(
      'name' => 'facebook_settings_width',
      'value' => 470,
      'plugin' => GLOBAL_IZAP_FACEBOOK_PIPE_PLUGIN,
    ));

$no_of_posts = IzapBase::pluginSetting(array(
      'name' => 'facebook_settings_no_of_posts',
      'value' => 2,
      'plugin' => GLOBAL_IZAP_FACEBOOK_PIPE_PLUGIN,
    ));

$color_scheme = IzapBase::pluginSetting(array(
      'name' => 'facebook_settings_color_scheme',
      'value' => 'light',
      'plugin' => GLOBAL_IZAP_FACEBOOK_PIPE_PLUGIN,
    ));

$object = $vars['entity'];
$enable_fb_like_buttion = elgg_get_plugin_setting('facebook_settings_enable_comments_box', GLOBAL_IZAP_FACEBOOK_PIPE_PLUGIN);
if ($enable_fb_like_buttion == 'true') {
?>

<?php //facebook comment view ?>
  
  <div style="overflow: hidden" class="fb-comments" data-href="<?php echo $object->getUrl(); ?>"
       data-num-posts="<?php echo $no_of_posts; ?>"
       data-width="<?php echo $width; ?>"
       data-colorscheme="<? echo $color_scheme; ?>"></div>

<?php } ?>