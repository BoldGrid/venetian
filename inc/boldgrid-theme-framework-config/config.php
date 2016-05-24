<?php 
function boldgrid_theme_framework_config( $boldgrid_framework_configs ) {
	/**
	 * General Configs
	 */
	$boldgrid_framework_configs['theme_name'] = 'boldgrid-venetian'; // Text domains
	$boldgrid_framework_configs['scripts']['boldgrid-sticky-footer'] = true;
	$boldgrid_framework_configs['customizer-options']['typography']['enabled'] = true;
	$boldgrid_framework_configs['temp']['attribution_links'] = true;

	/**
	 * Customizer Configs
	 */
	$boldgrid_framework_configs['customizer-options']['colors']['enabled'] = true;
	$boldgrid_framework_configs['customizer-options']['colors']['defaults'] = array (
		array (
			'default' => true,
			'format' => 'palette-primary',
			'colors' => array(
				'#0076a3',
				'#777777',
				'#ffffff',
				'#2c3e50',
			) 
		),
		array (
			'format' => 'palette-primary',
			'colors' => array(
				'#5695bc',
				'#07c0ea',
				'#aedd2b',
				'#0a5483',
			) 
		),
		array (
			'format' => 'palette-primary',
			'colors' => array(
				'#576d46',
				'#cde5a9',
				'#effce5',
				'#9cad9a',
			) 
		),
		array (
			'format' => 'palette-primary',
			'colors' => array(
				'#5695bc',
				'#7c516a',
				'#c6ab95',
				'#2b222c',
			) 
		),
		array (
			'format' => 'palette-primary',
			'colors' => array(
				'#d1b09a',
				'#f4a6b3',
				'#eac9ca',
				'#6c5b7b',
			) 
		),
	);

	// Get Subcategory ID from the Database
	$boldgrid_install_options = get_option( 'boldgrid_install_options', array() );
	$subcategory_id = null;
	if ( !empty( $boldgrid_install_options['subcategory_id'] ) ) {
		$subcategory_id = $boldgrid_install_options['subcategory_id'];
	}
	
	// Override Options per Subcategory
	switch ( $subcategory_id ) {
		case 11: //<-- Design
			$cta_h2 = 'DESIGN SOLUTIONS FOR ANY APPLICATION';
			$cta_h3 = 'We design, develop, and communicate custom work that suits you.';
			break;
		case 12: //<-- Photography
			$cta_h2 = 'LET US CAPTURE YOUR MEMORIES FOREVER';
			$cta_h3 = 'Exceptional moments deserve exceptional images.';
			break;
		case 18: //<-- Property Management
			$cta_h2 = 'WE SET THE STANDARD IN PROPERTY MANAGEMENT';
			$cta_h3 = 'Personalized Service. Proven Results.';
			break;
		case 22: //<-- Marketing
			$cta_h2 = 'GREAT IDEAS DESERVE GREAT CAMPAIGNS';
			$cta_h3 = 'Where strategy and creativity meet.';
			break;
		case 24: //<-- Music
			$cta_h2 = 'MUSIC PICKS UP WHERE THE WORDS FALL SHORT';
			$cta_h3 = 'A love letter to our fans.';
			break;
		case 26: //<-- Restaurant
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][2]['default'] = true;
			$cta_h2 = 'IT\'S TIME FOR A GREAT MEAL';
			$cta_h3 = 'Come in and see our specials. We want to be your go-to restaurant!';
			break;

		// Default Behavior
		default:
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][0]['default'] = true;
			$cta_h2 = 'GREAT IDEAS DESERVE GREAT CAMPAIGNS';
			$cta_h3 = 'Where strategy and creativity meet.';
			break;
	}

	// Text Contrast Colors
	$boldgrid_framework_configs['customizer-options']['colors']['light_text'] = '#ffffff';
	$boldgrid_framework_configs['customizer-options']['colors']['dark_text'] = '#333333';

	// Typography Headings
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_font_family'] = 'Oswald';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_font_size'] = 16;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_text_transform'] = 'none';

	// Typography Alternate Headings
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_font_family'] = 'Droid Serif';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_font_size'] = 18;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_text_transform'] = 'none';

	$boldgrid_framework_configs['template']['tagline-classes'] = 'h5 alt-font';


	// Typography Navigation
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_font_family'] = 'Oswald';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_font_size'] = 14;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_text_transform'] = 'uppercase';

	// Typography Body
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_font_family'] = 'Droid Serif';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_font_size'] = 14;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_line_height'] = 160;

	// Icons
	$boldgrid_framework_configs['social-icons']['size'] = 'large';
	$boldgrid_framework_configs['social-icons']['type'] = 'icon-circle';

	// Menu Locations
	$boldgrid_framework_configs['menu']['locations']['secondary'] = "Above Header";
	$boldgrid_framework_configs['menu']['locations']['tertiary'] = "Below Header";
	$boldgrid_framework_configs['menu']['locations']['social'] = "Upper Right";
	
	/**
	 * Widgets
	 */
	$widget_markup['call-to-action'] = <<<HTML
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="call-to-action">
					<h2>$cta_h2</h2>
					<h3 class="alt-font">$cta_h3</h3>
					<p class="p-button-primary">
						<a class="button-primary" href="contact-us">CONTACT US</a>
					</p>
				</div>
			</div> 
			<div class="col-md-6"></div>
		</div><!-- .row -->
HTML;

	// Widget 1
	$boldgrid_framework_configs['widget']['widget_instances']['boldgrid-widget-1'][] = array (
		'title' => 'Call To Action',
		'text' => $widget_markup['call-to-action'],
		'type' => 'visual',
		'filter' => 1,
		'label' => 'black-studio-tinymce'
	);

	// Name Widget Areas
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-1']['name'] = 'Below Header';
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-2']['name'] = 'Below Site Title';

	// Configs above will override framework defaults
	return $boldgrid_framework_configs;
}
add_filter( 'boldgrid_theme_framework_config', 'boldgrid_theme_framework_config' );

/**
 * Site Title & Logo Controls
 */
function filter_logo_controls( $controls ) {
	$controls['logo_font_family']['default'] = 'Oswald';
	$controls['logo_font_size']['default'] = 27;
	$controls['logo_margin_top']['default'] = 30;
	$controls['logo_margin_bottom']['default'] = 30;
	$controls['logo_text_transform']['default'] = 'uppercase';

	// Controls above will override framework defaults
	return $controls;
}
add_filter( 'kirki/fields', 'filter_logo_controls' );
