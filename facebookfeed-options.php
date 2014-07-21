<?php
function acf_facebook_styles() {
  wp_register_style( 'acf-facebookfeed-style', plugin_dir_url( __FILE__ ) . 'css/input.css', false, '1' );
  wp_enqueue_style( 'acf-facebookfeed-style' );
}
add_action('admin_enqueue_scripts', 'acf_facebook_styles');
add_action('admin_init', 'facebookfeed_register_settings');

function facebookfeed_register_settings() {
  register_setting( 'acf_facebookfeed_options', 'acf_facebook' );
}


function facebookfeed_register_options_page() {
  add_options_page('ACF Facebook Feed', 'ACF Facebook', 'manage_options', 'facebookfeed-options', 'facebookfeed_options_page');
}
add_action('admin_menu', 'facebookfeed_register_options_page');




function facebookfeed_options_page() {
?>

<style type="text/css">
  .facebook_class {
    min-width: 350px
  }
</style>
<div class="wrap">
  <h2>Your ACF facebook Options</h2>
  <form method="post" action="options.php">
    <?php settings_fields('acf_facebookfeed_options'); ?>
    <?php $options = get_option('acf_facebook'); ?>
    <h3>Your App's API info from Facebook</h3>
    <table class="form-table acf_postbox field_type-facebookfeed ">
      <tr valign="top" class="field">
        <th scope="row"><label for="acf_facebook_app_id">App ID</label></th>
        <td>
          <div class="input-group">
            <span class="input-group-addon">facebook_app_id</span>
            <input type="text" class="facebook_class" id="acf_facebook_app_id" name="acf_facebook[facebook_app_id]" value="<?php echo $options['facebook_app_id']; ?>" />
          </div>
        </td>
      </tr>
      <tr valign="top">
        <th scope="row"><label for="acf_facebook_app_secret">App Secret</label></th>
        <td>
          <div class="input-group">
            <span class="input-group-addon">facebook_app_secret</span>
            <input type="text" class="facebook_class" id="acf_facebook_app_secret" name="acf_facebook[facebook_app_secret]" value="<?php echo $options['facebook_app_secret']; ?>" />
          </div>
        </td>
      </tr>

    </table>
    <?php submit_button(); ?>
  </form>
</div>
<?php
}
?>
