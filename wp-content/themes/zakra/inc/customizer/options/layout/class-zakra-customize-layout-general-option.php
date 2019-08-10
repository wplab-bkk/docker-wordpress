<?php
/**
 * Layout general layout.
 *
 * @package     zakra
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/*========================================== LAYOUT > General ==========================================*/
if ( ! class_exists( 'Zakra_Customize_Layout_General_Option' ) ) :

	/**
	 * Layout general option.
	 */
	class Zakra_Customize_Layout_General_Option extends Zakra_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(

				/**
				 * Option: Default.
				 */
				'zakra_structure_default'    => array(
					'setting' => array(
						'default'           => 'tg-site-layout--right',
						'sanitize_callback' => array( 'Zakra_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'     => 'radio_image',
						'priority' => 10,
						'label'    => esc_html__( 'Default', 'zakra' ),
						'section'  => 'zakra_layout_structure',
						'choices'  => array(
							'tg-site-layout--default'    => ZAKRA_PARENT_INC_ICON_URI . '/layout-default.png',
							'tg-site-layout--left'       => ZAKRA_PARENT_INC_ICON_URI . '/left-sidebar.png',
							'tg-site-layout--right'      => ZAKRA_PARENT_INC_ICON_URI . '/right-sidebar.png',
							'tg-site-layout--no-sidebar' => ZAKRA_PARENT_INC_ICON_URI . '/full-width.png',
							'tg-site-layout--stretched'  => ZAKRA_PARENT_INC_ICON_URI . '/stretched.png',
						),
					),
				),

				/**
				 * Option: Blog/Archive.
				 */
				'zakra_structure_archive'    => array(
					'setting' => array(
						'default'           => 'tg-site-layout--right',
						'sanitize_callback' => array( 'Zakra_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'     => 'radio_image',
						'priority' => 20,
						'label'    => esc_html__( 'Blog/Archive', 'zakra' ),
						'section'  => 'zakra_layout_structure',
						'choices'  => array(
							'tg-site-layout--default'    => ZAKRA_PARENT_INC_ICON_URI . '/layout-default.png',
							'tg-site-layout--left'       => ZAKRA_PARENT_INC_ICON_URI . '/left-sidebar.png',
							'tg-site-layout--right'      => ZAKRA_PARENT_INC_ICON_URI . '/right-sidebar.png',
							'tg-site-layout--no-sidebar' => ZAKRA_PARENT_INC_ICON_URI . '/full-width.png',
							'tg-site-layout--stretched'  => ZAKRA_PARENT_INC_ICON_URI . '/stretched.png',
						),
					),
				),

				/**
				 * Option: Blog post.
				 */
				'zakra_structure_post'       => array(
					'setting' => array(
						'default'           => 'tg-site-layout--right',
						'sanitize_callback' => array( 'Zakra_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'     => 'radio_image',
						'priority' => 30,
						'label'    => esc_html__( 'Single Post', 'zakra' ),
						'section'  => 'zakra_layout_structure',
						'choices'  => array(
							'tg-site-layout--default'    => ZAKRA_PARENT_INC_ICON_URI . '/layout-default.png',
							'tg-site-layout--left'       => ZAKRA_PARENT_INC_ICON_URI . '/left-sidebar.png',
							'tg-site-layout--right'      => ZAKRA_PARENT_INC_ICON_URI . '/right-sidebar.png',
							'tg-site-layout--no-sidebar' => ZAKRA_PARENT_INC_ICON_URI . '/full-width.png',
							'tg-site-layout--stretched'  => ZAKRA_PARENT_INC_ICON_URI . '/stretched.png',
						),
					),
				),

				/**
				 * Option: Page.
				 */
				'zakra_structure_page'       => array(
					'setting' => array(
						'default'           => 'tg-site-layout--right',
						'sanitize_callback' => array( 'Zakra_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'     => 'radio_image',
						'priority' => 40,
						'label'    => esc_html__( 'Page', 'zakra' ),
						'section'  => 'zakra_layout_structure',
						'choices'  => array(
							'tg-site-layout--default'    => ZAKRA_PARENT_INC_ICON_URI . '/layout-default.png',
							'tg-site-layout--left'       => ZAKRA_PARENT_INC_ICON_URI . '/left-sidebar.png',
							'tg-site-layout--right'      => ZAKRA_PARENT_INC_ICON_URI . '/right-sidebar.png',
							'tg-site-layout--no-sidebar' => ZAKRA_PARENT_INC_ICON_URI . '/full-width.png',
							'tg-site-layout--stretched'  => ZAKRA_PARENT_INC_ICON_URI . '/stretched.png',
						),
					),
				),

				/**
				 * Option: WooCommerce.
				 */
				'zakra_structure_wc'         => array(
					'setting' => array(
						'default'           => 'tg-site-layout--right',
						'sanitize_callback' => array( 'Zakra_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'     => 'radio_image',
						'priority' => 50,
						'label'    => esc_html__( 'WooCommerce', 'zakra' ),
						'section'  => 'zakra_layout_structure',
						'choices'  => array(
							'tg-site-layout--default'    => ZAKRA_PARENT_INC_ICON_URI . '/layout-default.png',
							'tg-site-layout--left'       => ZAKRA_PARENT_INC_ICON_URI . '/left-sidebar.png',
							'tg-site-layout--right'      => ZAKRA_PARENT_INC_ICON_URI . '/right-sidebar.png',
							'tg-site-layout--no-sidebar' => ZAKRA_PARENT_INC_ICON_URI . '/full-width.png',
							'tg-site-layout--stretched'  => ZAKRA_PARENT_INC_ICON_URI . '/stretched.png',
						),
					),
				),

				/**
				 * Option: WooCommerce.
				 */
				'zakra_structure_wc_product' => array(
					'setting' => array(
						'default'           => 'tg-site-layout--right',
						'sanitize_callback' => array( 'Zakra_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'     => 'radio_image',
						'priority' => 60,
						'label'    => esc_html__( 'Single Product', 'zakra' ),
						'section'  => 'zakra_layout_structure',
						'choices'  => array(
							'tg-site-layout--default'    => ZAKRA_PARENT_INC_ICON_URI . '/layout-default.png',
							'tg-site-layout--left'       => ZAKRA_PARENT_INC_ICON_URI . '/left-sidebar.png',
							'tg-site-layout--right'      => ZAKRA_PARENT_INC_ICON_URI . '/right-sidebar.png',
							'tg-site-layout--no-sidebar' => ZAKRA_PARENT_INC_ICON_URI . '/full-width.png',
							'tg-site-layout--stretched'  => ZAKRA_PARENT_INC_ICON_URI . '/stretched.png',
						),
					),
				),

			);

		}

	}

	new Zakra_Customize_Layout_General_Option();

endif;
