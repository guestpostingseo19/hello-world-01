<?php
/**
 * Customizer options for the contact details shown in the footer and contact page.
 *
 * @package PawlogicTech
 */

defined( 'ABSPATH' ) || exit;

/**
 * Register customizer settings.
 *
 * @param WP_Customize_Manager $wp_customize Customizer.
 */
function pwt_customize_register( $wp_customize ) {
	$company = pwt_company();

	$wp_customize->add_section(
		'pwt_contact',
		array(
			'title'    => __( 'PawlogicTech Contact Details', 'pawlogictech' ),
			'priority' => 30,
		)
	);

	$fields = array(
		'pwt_email'          => array( __( 'Email address', 'pawlogictech' ), $company['email'] ),
		'pwt_phone'          => array( __( 'Phone number', 'pawlogictech' ), $company['phone'] ),
		'pwt_hours'          => array( __( 'Opening hours', 'pawlogictech' ), $company['hours'] ),
		'pwt_contact_recipient' => array( __( 'Enquiry recipient email', 'pawlogictech' ), $company['email'] ),
	);

	foreach ( $fields as $id => $field ) {
		$wp_customize->add_setting(
			$id,
			array(
				'default'           => $field[1],
				'sanitize_callback' => 'sanitize_text_field',
				'transport'         => 'refresh',
			)
		);
		$wp_customize->add_control(
			$id,
			array(
				'label'   => $field[0],
				'section' => 'pwt_contact',
				'type'    => 'text',
			)
		);
	}
}
add_action( 'customize_register', 'pwt_customize_register' );

/**
 * Company details with customizer overrides applied.
 *
 * @return array
 */
function pwt_company_settings() {
	$company = pwt_company();

	$company['email'] = get_theme_mod( 'pwt_email', $company['email'] );
	$company['phone'] = get_theme_mod( 'pwt_phone', $company['phone'] );
	$company['hours'] = get_theme_mod( 'pwt_hours', $company['hours'] );

	return $company;
}
