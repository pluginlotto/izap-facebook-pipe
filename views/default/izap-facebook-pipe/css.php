<?php
$enable_fb_like_comment_buttion = elgg_get_plugin_setting('facebook_settings_enable_like_comments_box', GLOBAL_IZAP_FACEBOOK_PIPE_PLUGIN) ;
    if ($enable_fb_like_comment_buttion =='false'){ ?>

.fb_edge_comment_widget.fb_iframe_widget {
  display: none !important
}

<?php } ?>