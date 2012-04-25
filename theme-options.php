<?php
add_action( 'admin_init', 'theme_options_init' );
add_action( 'admin_menu', 'theme_options_add_page' );

/**
 * Init plugin options to white list our options
 */
function theme_options_init(){
	register_setting( 'threattocreativity_options', 'threattocreativity_theme_options', 'theme_options_validate' );
}

/**
 * Load up the menu page
 */
function theme_options_add_page() {
	add_theme_page( __( 'Theme Options' ), __( 'Theme Options' ), 'edit_theme_options', 'theme_options', 'theme_options_do_page' );
}

/**
 * Create arrays for our select and radio options
 */
$select_options = array(
	'traditional' => array(
		'value' =>	'traditional',
		'label' => __( 'Original (Same as previous versions)' )
	),
	'red' => array(
		'value' =>	'red',
		'label' => __( 'Autumn (Red/Yellow/Orange)' )
	),
	'blue' => array(
		'value' => 'blue',
		'label' => __( 'Winter (Blues)' )
	),
	'green' => array(
		'value' => 'green',
		'label' => __( 'Forest (Greens)' )
	),
	'black' => array(
		'value' => 'black',
		'label' => __( 'Grays' )
	),
	'crayola' => array(
		'value' => 'crayola',
		'label' => __( 'Crayola Colors' )
	)
);

$radio_options = array(
	'no' => array(
		'value' => 'no',
		'label' => __( 'No, I will use the color schemes above.' )
	),
	'yes' => array(
		'value' => 'yes',
		'label' => __( 'Yes, I will use my own color scheme and understand that I must format my hex colors below or else it will fail.' )
	)
);

/**
 * Create the options page
 */
function theme_options_do_page() {
	global $select_options, $radio_options;

	if ( ! isset( $_REQUEST['updated'] ) )
		$_REQUEST['updated'] = false;

	?>
	<div class="wrap">
		<?php screen_icon(); echo "<h2>" . get_current_theme() . __( ' Theme Options' ) . "</h2>"; ?>

		<?php if ( false !== $_REQUEST['updated'] ) : ?>
		<div class="updated fade"><p><strong>Options saved</strong></p></div>
		<?php endif; ?>

		<form method="post" action="options.php">
			<?php settings_fields( 'threattocreativity_options' ); ?>
			<?php $options = get_option( 'threattocreativity_theme_options' ); ?>

			<table class="form-table">

				

				
				<?php
				/**
				 * A threattocreativity select input option
				 */
				?>
				<tr valign="top"><th scope="row">Select Color Scheme</th>
					<td>
						<select name="threattocreativity_theme_options[colorscheme]">
							<?php
								$selected = $options['colorscheme'];
								$p = '';
								$r = '';

								foreach ( $select_options as $option ) {
									$label = $option['label'];
									if ( $selected == $option['value'] ) // Make default first in list
										$p = "\n\t<option style=\"padding-right: 10px;\" selected='selected' value='" . esc_attr( $option['value'] ) . "'>$label</option>";
									else
										$r .= "\n\t<option style=\"padding-right: 10px;\" value='" . esc_attr( $option['value'] ) . "'>$label</option>";
								}
								echo $p . $r;
							?>
						</select>
						<label class="description" for="threattocreativity_theme_options[colorscheme]">These schemes change all randomly displayed colors.</label>
					</td>
				</tr>

				<?php
				/**
				 * Custom Color Scheme Toggle
				 */
				?>
				<tr valign="top"><th scope="row">Use a custom color scheme?</th>
					<td>
						<fieldset><legend class="screen-reader-text"><span>Radio buttons</span></legend>
						<?php
							if ( ! isset( $checked ) )
								$checked = '';
							foreach ( $radio_options as $option ) {
								$radio_setting = $options['customoption'];

								if ( '' != $radio_setting ) {
									if ( $options['customoption'] == $option['value'] ) {
										$checked = "checked=\"checked\"";
									} else {
										$checked = '';
									}
								}
								?>
								<label class="description"><input type="radio" name="threattocreativity_theme_options[customoption]" value="<?php esc_attr_e( $option['value'] ); ?>" <?php echo $checked; ?> /> <?php echo $option['label']; ?></label><br />
								<?php
							}
						?>
						</fieldset>
					</td>
				</tr>

				<?php
				/**
				 * A threattocreativity textarea option
				 */
				?>
				<tr valign="top"><th scope="row">Custom color scheme</th>
					<td>
						<textarea id="threattocreativity_theme_options[customcolors]" class="large-text" cols="50" rows="10" name="threattocreativity_theme_options[customcolors]"><?php echo stripslashes( $options['customcolors'] ); ?></textarea>
						<label class="description" for="threattocreativity_theme_options[customcolors]">Your color scheme must contain ONLY <a href='http://www.google.com/search?ie=UTF-8&oe=UTF-8&sourceid=navclient&gfns=1&q=hexadecimal+colors#sclient=psy&hl=en&q=what+are+hexidecimal+color+codes&aq=f&aqi=&aql=&oq=&pbx=1&bav=on.1,or.&fp=eb3207f822e70c41' target='colorcodes'>hexadecimal color codes</a> and should be formatted like the follow: #00ff00, #002345, #203555</label>
					</td>
				</tr>
			</table>

			<p class="submit">
				<input type="submit" class="button-primary" value="Save Options" />
			</p>
		</form>
	</div>
	<?php
}

/**
 * Sanitize and validate input. Accepts an array, return a sanitized array.
 */
function theme_options_validate( $input ) {
	global $select_options, $radio_options;

	

	
	// Our select option must actually be in our array of select options
	if ( ! array_key_exists( $input['colorscheme'], $select_options ) )
		$input['colorscheme'] = null;

	// Our radio option must actually be in our array of radio options
	if ( ! isset( $input['customoption'] ) )
		$input['customoption'] = null;
	if ( ! array_key_exists( $input['customoption'], $radio_options ) )
		$input['customoption'] = null;

	// Say our textarea option must be safe text with the allowed tags for posts
	$input['customcolors'] = wp_filter_post_kses( $input['customcolors'] );

	return $input;
}

// adapted from http://planetozh.com/blog/2009/05/handling-plugins-options-in-wordpress-28-with-register_setting/