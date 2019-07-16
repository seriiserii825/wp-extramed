<?php

if( ! defined('ABSPATH') ) exit;

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_prezentare_post_meta' );
function crb_prezentare_post_meta() {
	Container::make('post_meta', __('Setari Pagina Prezentare', 'medical'))
	->where( 'post_type', '=', 'page' )
	->where( 'post_id', '=', 16 )
	->add_tab( 'Intro', array(
		Field::make( 'text', 'crb_presentation_intro_title', 'Titlu block intro' ),
		Field::make( 'rich_text', 'crb_presentation__intro_text', __( 'Text pentru blocul intro', 'medical' ) ),
		Field::make( 'image', 'crb_presentation__intro_img', __( 'Imagine pentru blocul intro', 'medical' ) ),
	) )

	->add_tab( 'Parter', array(
		Field::make( 'text', 'crb_presentation_parter_title', 'Titlu block parter' ),
		Field::make( 'rich_text', 'crb_presentation_parter_text', 'Text block parter' ),
	) )

	->add_tab( 'Etajul 1', array(
		Field::make( 'separator', 'crb_sep_presentation', __( 'Slider', 'medical' ) ),
		Field::make( 'complex', 'crb_presentation_slider', __( 'Slider', 'medical' ) )
		     ->add_fields( array(
			     Field::make( 'image', 'crb_presentation_slider_img', __( 'Slide Photo', 'medical' ) ),
		     ) )
			->set_layout('tabbed-horizontal'),
		Field::make( 'separator', 'crb_sep_presentation_text', __( 'Text', 'medical' ) ),
		Field::make( 'text', 'crb_presentation_first_title', 'Titlu block first' ),
		Field::make( 'rich_text', 'crb_presentation_first_text', 'Text block first' ),
	) )

	->add_tab( 'Etajul 2 si 3', array(
		Field::make( 'separator', 'crb_sep_presentation_3', __( 'Slider', 'medical' ) ),
		Field::make( 'complex', 'crb_presentation_slider3', __( 'Slider', 'medical' ) )
		     ->add_fields( array(
			     Field::make( 'image', 'crb_presentation_slider_third_img', __( 'Slide Photo', 'medical' ) ),
		     ) )
		     ->set_layout('tabbed-horizontal'),
		Field::make( 'text', 'crb_presentation_second_title', 'Titlu block second' ),
		Field::make( 'rich_text', 'crb_presentation_second_second_text', 'Text block second' ),
	) )

	->add_tab( 'Etajul 4', array(
		Field::make( 'text', 'crb_presentation_four_title', 'Titlu block four' ),
		Field::make( 'rich_text', 'crb_presentation_four_text', 'Text block four' ),
	) );
}



