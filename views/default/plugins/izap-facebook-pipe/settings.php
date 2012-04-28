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
 * setting for facebook like and comments
 */
?>


<fieldset class="izap_admin_fieldset">
  <legend><?php echo elgg_echo('izap_seo:index:izap:facebook_pipe_comment_settings') ?></legend>

  <?php
    echo IzapBase::input('radio', array(
      'input_title' => elgg_echo('izap_seo:index:izap:facebook_settings_enable_comments_box'),
      'options' => array(
        elgg_echo('izap-bridge:yes') => 'true',
        elgg_echo('izap-bridge:no') => 'false',
      ),
      'value' => IzapBase::pluginSetting(array(
        'plugin' => GLOBAL_IZAP_FACEBOOK_PIPE_PLUGIN,
        'name' => 'facebook_settings_enable_comments_box',
        'value' => 'false'
      )),
      'name' => 'params[facebook_settings_enable_comments_box]',
    ));

    $enable_fb_like_buttion = elgg_get_plugin_setting('facebook_settings_enable_comments_box', GLOBAL_IZAP_FACEBOOK_PIPE_PLUGIN) ;
    if ($enable_fb_like_buttion =='true'){

  ?>
  <p>
    <label><?php echo elgg_echo('izap_seo:index:izap:facebook_settings_no_of_posts'); ?></label><br />
    <?php
    echo elgg_view('input/text', array(
      'name' => 'params[facebook_settings_no_of_posts]',
      'value' => $vars['entity']->facebook_settings_no_of_posts
    ));
    ?>
  </p>

  <p>
    <label><?php echo elgg_echo('izap_seo:index:izap:facebook_settings_width'); ?></label><br />
    <?php
    echo elgg_view('input/text', array(
      'name' => 'params[facebook_settings_width]',
      'value' => $vars['entity']->facebook_settings_width
    ));
    ?>
  </p>

  <p>
    <label><?php echo elgg_echo('izap_seo:index:izap:facebook_settings_color_scheme'); ?></label><br />
    <?php
    echo elgg_view('input/dropdown', array(
      'name' => 'params[facebook_settings_color_scheme]',
      'value' => IzapBase::pluginSetting(array(
        'name' => 'facebook_settings_color_scheme',
        'plugin' => GLOBAL_IZAP_FACEBOOK_PIPE_PLUGIN,
      )), 'options_values' => elgg_trigger_plugin_hook('izap-bridge:currency_array', 'izap', null, array(
        'dark' => 'Dark',
        'light' => 'Light'
      )),
    ));
    ?>
  </p><br/>
</fieldset>
<?php } ?>
<fieldset class="izap_admin_fieldset">
  <legend><?php echo elgg_echo('izap_seo:index:izap:facebook_pipe_like_settings') ?></legend>

  <?php
    echo IzapBase::input('radio', array(
      'input_title' => elgg_echo('izap_seo:index:izap:facebook_settings_enable_like_buttion'),
      'options' => array(
        elgg_echo('izap-bridge:yes') => 'true',
        elgg_echo('izap-bridge:no') => 'false',
      ),
      'value' => IzapBase::pluginSetting(array(
        'plugin' => GLOBAL_IZAP_FACEBOOK_PIPE_PLUGIN,
        'name' => 'facebook_settings_enable_like_buttion',
        'value' => 'false'
      )),
      'name' => 'params[facebook_settings_enable_like_buttion]',
    ));

    echo IzapBase::input('radio', array(
      'input_title' => elgg_echo('izap_seo:index:izap:facebook_settings_enable_like_comments_box'),
      'options' => array(
        elgg_echo('izap-bridge:yes') => 'true',
        elgg_echo('izap-bridge:no') => 'false',
      ),
      'value' => IzapBase::pluginSetting(array(
        'plugin' => GLOBAL_IZAP_FACEBOOK_PIPE_PLUGIN,
        'name' => 'facebook_settings_enable_like_comments_box',
        'value' => 'false'
      )),
      'name' => 'params[facebook_settings_enable_like_comments_box]',
    ));

    $enable_fb_like_buttion = elgg_get_plugin_setting('facebook_settings_enable_like_buttion', GLOBAL_IZAP_FACEBOOK_PIPE_PLUGIN) ;
    if ($enable_fb_like_buttion =='true'){

    echo IzapBase::input('radio', array(
      'input_title' => elgg_echo('izap_seo:index:izap:facebook_settings_sendbutton'),
      'options' => array(
        elgg_echo('izap-bridge:yes') => 'true',
        elgg_echo('izap-bridge:no') => 'false',
      ),
      'value' => IzapBase::pluginSetting(array(
        'plugin' => GLOBAL_IZAP_FACEBOOK_PIPE_PLUGIN,
        'name' => 'facebook_settings_sendbutton',
        'value' => 'false'
      )),
      'name' => 'params[facebook_settings_sendbutton]',
    ));
  ?>

    <p>
      <label><?php echo elgg_echo('izap_seo:index:izap:facebook_settings_like_layout_style'); ?></label><br />
    <?php
    echo elgg_view('input/dropdown', array(
      'name' => 'params[facebook_settings_like_layout_style]',
      'value' => IzapBase::pluginSetting(array(
        'name' => 'facebook_settings_like_layout_style',
        'plugin' => GLOBAL_IZAP_FACEBOOK_PIPE_PLUGIN,
      )), 'options_values' => elgg_trigger_plugin_hook('izap-bridge:currency_array', 'izap', null, array(
        'standard' => 'standard',
        'button_count' => 'button count',
        'box_count' => 'box count'
      )),
    ));
    ?>
  </p>

  <p>
    <label><?php echo elgg_echo('izap_seo:index:izap:facebook_settings_like_color_scheme'); ?></label><br />
    <?php
    echo elgg_view('input/dropdown', array(
      'name' => 'params[facebook_settings_like_color_scheme]',
      'value' => IzapBase::pluginSetting(array(
        'name' => 'facebook_settings_like_color_scheme',
        'plugin' => GLOBAL_IZAP_FACEBOOK_PIPE_PLUGIN,
      )), 'options_values' => elgg_trigger_plugin_hook('izap-bridge:currency_array', 'izap', null, array(
        'dark' => 'Dark',
        'light' => 'Light'
      )),
    ));
    ?><br/><br/>
    <?php echo elgg_echo('izap_seo:index:izap:facebook_settings_clear_cash');?>
  </p>
  <?php } ?>
  
</fieldset>