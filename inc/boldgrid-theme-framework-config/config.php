<?php
/**
 * This is responsible for setting the theme's configurable options.
 *
 * @package Venetian
 */

/**
 * Set Theme's Configuration Options.
 *
 * @since 1.0.0
 * @param array $boldgrid_framework_configs Array of boldgrid framework configurations.
 */
function boldgrid_theme_framework_config( $boldgrid_framework_configs ) {

	// Text Domain.
	$boldgrid_framework_configs['theme_name'] = 'boldgrid-venetian';

	// Enable Sticky Footer.
	$boldgrid_framework_configs['scripts']['boldgrid-sticky-footer'] = true;

	// Enable typography controls.
	$boldgrid_framework_configs['customizer-options']['typography']['enabled'] = true;

	// Enable attribution links.
	$boldgrid_framework_configs['temp']['attribution_links'] = true;

	// Enable template wrapper.
	$boldgrid_framework_configs['boldgrid-parent-theme'] = true;

	// Specify the parent theme's name.
	$boldgrid_framework_configs['parent-theme-name'] = 'prime';

	// Select the footer template to use.
	$boldgrid_framework_configs['template']['footer'] = 'generic';

	// Assign Locations for Generic Header.
	$boldgrid_framework_configs['template']['locations']['header'] = array(
			'1' => array( '[menu]secondary', '[action]venetian_columns' ),
			'5' => array( '[widget]boldgrid-widget-2' ),
			'8' => array( '[menu]tertiary' ),
	);

	// Assign Locations for Generic Footer.
	$boldgrid_framework_configs['template']['locations']['footer'] = array(
			'1' => array( '[widget]boldgrid-widget-3' ),
			'5' => array( '[menu]footer_center' ),
			'8' => array( '[action]boldgrid_display_attribution_links' ),
	);

	// Set the Call To Action Widget to be on Home Page Only.
	$boldgrid_framework_configs['template']['call-to-action'] = 'home-only';

	// Add container to call to action widget.
	$boldgrid_framework_configs['template']['pages']['global']['call-to-action'] = 'container';

	// No container is needed on home page for this theme.
	$boldgrid_framework_configs['template']['pages']['page_home.php']['entry-content'] = '';

	// Enable BoldGrid Color Palette System.
	$boldgrid_framework_configs['customizer-options']['colors']['enabled'] = true;

	// Default Color Palettes.
	$boldgrid_framework_configs['customizer-options']['colors']['defaults'] = array(
		array(
			'default' => true,
			'format' => 'palette-primary',
			'colors' => array(
				'#0076a3',
				'#777777',
				'#ffffff',
				'#2c3e50',
			),
		),
		array(
			'format' => 'palette-primary',
			'colors' => array(
				'#5695bc',
				'#07c0ea',
				'#aedd2b',
				'#0a5483',
			),
		),
		array(
			'format' => 'palette-primary',
			'colors' => array(
				'#576d46',
				'#cde5a9',
				'#effce5',
				'#9cad9a',
			),
		),
		array(
			'format' => 'palette-primary',
			'colors' => array(
				'#5695bc',
				'#7c516a',
				'#c6ab95',
				'#2b222c',
			),
		),
		array(
			'format' => 'palette-primary',
			'colors' => array(
				'#d1b09a',
				'#f4a6b3',
				'#eac9ca',
				'#6c5b7b',
			),
		),
	);

	// Override Options per Subcategory.
	switch ( $boldgrid_framework_configs['inspiration']['subcategory_key'] ) {
		case 'Consulting':
			$cta_h2 = 'MAKE BETTER BUSINESS DECISIONS TODAY';
			$cta_h3 = 'Contact us and schedule your consultation now.';
			break;
		case 'Design':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][3]['default'] = true;
			$cta_h2 = 'DESIGN SOLUTIONS FOR ANY APPLICATION';
			$cta_h3 = 'We design, develop, and communicate custom work that suits you.';
			break;
		case 'Fashion':
			$cta_h2 = 'ENDLESS VARIETY FOR THE FASHION ECLECTIC';
			$cta_h3 = 'Our locations stock trends for everyone.';
			break;
		case 'Fitness':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][2]['default'] = true;
			$cta_h2 = 'A UNIQUE ANGLE ON PHYSICAL FITNESS';
			$cta_h3 = 'Join one of our fitness clubs today.';
			break;
		case 'General':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][2]['default'] = true;
			$cta_h2 = 'PROFESSIONAL CONTENT WRITING FOR ALL';
			$cta_h3 = 'No project is too small for our talented writers.';
			break;
		case 'Home Repair':
			$cta_h2 = 'WE NEVER MET A SINK THAT COULDN\'T BE FIXED';
			$cta_h3 = 'Call us today and receive a free estimate on your next repair.';
			break;
		case 'Music':
			$cta_h2 = 'MUSIC PICKS UP WHERE THE WORDS FALL SHORT';
			$cta_h3 = 'A love letter to our fans.';
			break;
		case 'Photography':
			$cta_h2 = 'LET US CAPTURE YOUR MEMORIES FOREVER';
			$cta_h3 = 'Exceptional moments deserve exceptional images.';
			break;
		case 'Property Management':
			$cta_h2 = 'WE SET THE STANDARD IN PROPERTY MANAGEMENT';
			$cta_h3 = 'Personalized Service. Proven Results.';
			break;
		case 'Real Estate':
			$cta_h2 = 'CHOOSE A PLACE TO LIVE. WE\'LL DO THE REST';
			$cta_h3 = 'Let us sort through the mess of securing your dream home.';
			break;
		case 'Restaurant':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][2]['default'] = true;
			$cta_h2 = 'WE\'RE PASSIONATE ABOUT FILLING YOUR STOMACH';
			$cta_h3 = 'Breakfast, lunch, or dinner. Dine in any time.';
			break;

		// Default Behavior.
		default :
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][0]['default'] = true;
			$cta_h2 = 'GREAT IDEAS DESERVE GREAT CAMPAIGNS';
			$cta_h3 = 'Where strategy and creativity meet.';
			break;
	}

	// Text Contrast Colors.
	$boldgrid_framework_configs['customizer-options']['colors']['light_text'] = '#ffffff';
	$boldgrid_framework_configs['customizer-options']['colors']['dark_text'] = '#333333';

	// Typography Headings.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_font_family'] = 'Oswald';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_font_size'] = 16;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_text_transform'] = 'none';

	// Typography Alternate Headings.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_font_family'] = 'Droid Serif';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_font_size'] = 18;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_text_transform'] = 'none';

	$boldgrid_framework_configs['template']['tagline-classes'] = 'h5 alt-font';

	// Typography Navigation.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_font_family'] = 'Oswald';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_font_size'] = 14;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_text_transform'] = 'uppercase';

	// Typography Body.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_font_family'] = 'Droid Serif';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_font_size'] = 14;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_line_height'] = 160;

	// Add a Typography Selector for Call To Action.
	$boldgrid_framework_configs['customizer-options']['typography']['selectors']['.call-to-action h2'] = array(
		'type' => 'headings',
		'round' => 'floor',
		'amount' => 5.9,
	);

	// Add a Typography Selector for buttons
	$boldgrid_framework_configs['customizer-options']['typography']['selectors']['.button-primary, .button-secondary, input[type="submit"], button, #commentsubmit'] = array(
		'type' => 'headings',
		'round' => 'ceil',
		'amount' => 1.4,
	);

	// Icons.
	$boldgrid_framework_configs['social-icons']['size'] = 'large';
	$boldgrid_framework_configs['social-icons']['type'] = 'icon-circle';

	/**
	 * Widgets
	 */
	$widget_markup['call-to-action'] = <<<HTML
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="call-to-action">
					<h2>$cta_h2</h2>
					<h3>$cta_h3</h3>
					<p class="p-button-primary">
						<a class="button-primary" href="contact-us">CONTACT US</a>
					</p>
				</div>
			</div>
			<div class="col-md-6"></div>
		</div><!-- .row -->
HTML;

	// Widget 1.
	$boldgrid_framework_configs['widget']['widget_instances']['boldgrid-widget-1'][] = array(
		'title' => 'Call To Action',
		'text' => $widget_markup['call-to-action'],
		'type' => 'visual',
		'filter' => 1,
		'label' => 'black-studio-tinymce',
	);

	// Menu Locations.
	$boldgrid_framework_configs['menu']['locations']['secondary'] = 'Above Header';
	$boldgrid_framework_configs['menu']['locations']['tertiary'] = 'Below Header';
	$boldgrid_framework_configs['menu']['locations']['social'] = 'Upper Right';

	// Name Widget Areas.
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-1']['name'] = 'Below Header';
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-2']['name'] = 'Below Site Title';

	return $boldgrid_framework_configs;
}
add_filter( 'boldgrid_theme_framework_config', 'boldgrid_theme_framework_config' );

/**
 * Site Title & Logo Controls
 *
 * @since 1.0.0
 * @param array $controls Controls to override defaults for.
 */
function filter_logo_controls( $controls ) {
	$controls['logo_font_family']['default'] = 'Oswald';
	$controls['logo_font_size']['default'] = 27;
	$controls['logo_margin_top']['default'] = 30;
	$controls['logo_margin_bottom']['default'] = 30;
	$controls['logo_text_transform']['default'] = 'uppercase';

	return $controls;
}
add_filter( 'kirki/fields', 'filter_logo_controls' );

/**
 * Creates additional column sizes in the header template.
 */
function venetian_columns() { ?>
	<div class="row">
		<div class="col-sm-4">
			<?php do_action( 'boldgrid_site_identity' ); ?>
		</div>
		<div class="col-sm-8">
			<div class="row">
				<?php do_action( 'boldgrid_menu_social' ); ?>
			</div>
			<div class="row">
				<?php do_action( 'boldgrid_primary_navigation' ); ?>
			</div>
		</div>
	</div>
<?php }

add_action( 'venetian_columns', 'venetian_columns' );
