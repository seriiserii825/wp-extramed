<?php

if( ! defined('ABSPATH') ) exit;

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_principal_post_meta' );
function crb_principal_post_meta() {
	Container::make( 'post_meta', __( 'Main page', 'extramed' ) )
	 ->where( 'post_type', '=', 'page' )
	 ->where( 'post_id', '=', 6 )
	 ->add_tab( 'Шапка', array(
		 Field::make( 'text', 'crb_header_slogan', __( 'Slogain in header', 'extramed' ) ),
	 ) )
	 ->add_tab( 'Slider', array(
		 Field::make( 'complex', 'crb_slider_item' )
			  ->add_fields( array(
				  Field::make( 'image', 'crb_slider_image' )
					   ->set_help_text( 'Incarcati imagini cu dimensiunile de 1920x900' ),
			  ) )
	 ) )
	 ->add_tab( 'Timer', array(
		 Field::make( 'text', 'crb_timer_title', __( 'Denumire de timer', 'extramed' ) ),
		 Field::make( 'separator', 'crb_separator_timer', __( 'Luni-Vineri', 'extramed' ) ),
		 Field::make( 'time', 'crb_monday_start', 'Inceput de timp' )
			  ->set_width(50),
		 Field::make( 'time', 'crb_monday_end', 'Sfirsit de timp' )
			  ->set_width(50),
		 Field::make( 'separator', 'crb_separator_timer_1', __( 'Simbata', 'extramed' ) ),
		 Field::make( 'time', 'crb_saturday_start', 'Inceput de timp' )
			  ->set_width(50),
		 Field::make( 'time', 'crb_saturday_end', 'Sfirsit de timp' )
			  ->set_width(50),
		 Field::make( 'separator', 'crb_separator_timer_2', __( 'Duminica', 'extramed' ) ),
		 Field::make( 'time', 'crb_sunday_start', 'Inceput de timp' )
			  ->set_width(50),
		 Field::make( 'time', 'crb_sunday_end', 'Sfirsit de timp' )
			  ->set_width(50),
	 ) )
	 ->add_tab( 'Medical guide', array(
		 Field::make( 'separator', 'crb_sep_gid_title', __( 'Gidul medical titlu', 'extramed' ) ),
		 Field::make( 'text', 'crb_guid_title_1', 'Titlu de gid 1' )
			  ->set_width(50),
		 Field::make( 'text', 'crb_guid_title_2', 'Titlu de gid 2' )
			  ->set_width(50),
		 Field::make( 'text', 'crb_gid_descr', 'Gidul descriere' ),
	 ) )
	 ->add_tab( 'Specialisti', array(
		 Field::make( 'text', 'crb_specialist_block_title_1', 'Titlu bloculue de specialisti 1' )
			  ->set_width(50),
		 Field::make( 'text', 'crb_specialist_block_title_2', 'Titlu bloculue de specialisti 2' )
			  ->set_width(50),
		 Field::make( 'text', 'crb_specialist_description', 'Descrierea bloculue de specialisti' ),
	 ) )
	 ->add_tab( 'Citata', array(
		 Field::make( 'text', 'crb_cite_text', 'Text pentru citata de pe Principala' ),
		 Field::make( 'text', 'crb_cite_author', 'Author pentru citata de pe Principala' ),
	 ) );
}
