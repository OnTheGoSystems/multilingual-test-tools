<div class="wrap">
    <div id="icon-wpml" class="icon32"><br/></div>
    <h2><?php _e( 'Multilingual Tools Overview', 'wpml-compatibility-test-tools' ); ?></h2>
    <table id="wctt-generator" class="widefat general_options_table">
        <tbody>
        <tr>
            <td>
                <table class="widefat">
                    <thead>
                    <tr>
                        <th colspan="3"><h3><?php _e( 'Configuration files loaded', 'wpml-compatibility-test-tools' ); ?></h3>
                    </tr>
                    </thead>
                    <tbody class="wctt">
                    <tr>
                        <td><?php WPML_Config::load_config_run(); ?></td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
		<?php
		global $wpml_config_debug;

		$data = array();
		if ( ! empty( $wpml_config_debug['wpml-config']['custom-types']['custom-type'] ) ) {
			$data['Custom posts'] = $wpml_config_debug['wpml-config']['custom-types']['custom-type'];
		}
		if ( ! empty( $wpml_config_debug['wpml-config']['taxonomies']['taxonomy'] ) ) {
			$data['Custom taxonomies'] = $wpml_config_debug['wpml-config']['taxonomies']['taxonomy'];
		}
		if ( ! empty( $wpml_config_debug['wpml-config']['custom-fields']['custom-field'] ) ) {
			$data['Custom fields translation'] = $wpml_config_debug['wpml-config']['custom-fields']['custom-field'];
		}
		if ( ! empty( $wpml_config_debug['wpml-config']['custom-term-fields']['custom-term-field'] ) ) {
			$data['Custom Term Meta Translation'] = $wpml_config_debug['wpml-config']['custom-term-fields']['custom-term-field'];
		}
		if ( ! empty( $wpml_config_debug['wpml-config']['shortcodes']['shortcode'] ) ) {
			$data['Shortcodes'] = $wpml_config_debug['wpml-config']['shortcodes']['shortcode'];
		}
		if ( ! empty( $wpml_config_debug['wpml-config']['admin-texts']['key'] ) ) {
			$data['Admin Strings to Translate'] = $wpml_config_debug['wpml-config']['admin-texts']['key'];
		}
		if ( ! empty( $wpml_config_debug['wpml-config']['language-switcher-settings']['key'] ) ) {
			$data['Language Switcher Settings'] = $wpml_config_debug['wpml-config']['language-switcher-settings']['key'];
		}
		?>
		<?php foreach ( $data as $type => $config ) : ?>
			<?php if ( ! empty( $config ) ) : ?>
                <tr>
                    <td>
                        <table class="widefat">
                            <thead>
                            <tr>
                                <th colspan="3"><h3><?php _e( $type, 'sitepress' ) ?></h3>
                            </tr>
                            </thead>
                            <tbody class="wctt">
							<?php foreach ( $config as $entry ) : ?>
                                <tr>
                                    <td><?php wpml_ctt_parse_entry( $entry ); ?></td>
                                </tr>
							<?php endforeach; ?>
                            </tbody>
                        </table>
                    </td>
                </tr>
			<?php endif; ?>
		<?php endforeach; ?>
        </tbody>
    </table>
</div>
