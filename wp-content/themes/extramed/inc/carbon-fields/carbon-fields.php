<?php 
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
//	 Add second options page under 'Basic Options'
	Container::make( 'theme_options', __( 'Setari generale', 'extramed' ) )
	 ->add_tab( 'Socials', array(
		 Field::make( 'text', 'crb_email', __( 'Email', 'extramed' ) ),
		 Field::make( 'text', 'crb_facebook', __( 'Facebook', 'extramed' ) )
			  ->set_help_text( 'url se incepe cu с https://' ),
		 Field::make( 'text', 'crb_twitter', __( 'Twitter', 'extramed' ) )
			  ->set_help_text( 'url se incepe cu с https://' ),
		 Field::make( 'text', 'crb_google', __( 'Google', 'extramed' ) )
			  ->set_help_text( 'url se incepe cu с https://' ),
		 Field::make( 'text', 'crb_vimeo', __( 'Vimeo', 'extramed' ) )
			  ->set_help_text( 'url se incepe cu с https://' ),
		 Field::make( 'text', 'crb_phone', __( 'Telefon', 'extramed' ) )
			  ->set_help_text( 'Utilizati urmatoarele simbole: ()-+' ),
		 Field::make( 'text', 'crb_address', __( 'Adresa', 'extramed' ) )
	 ))
	 ->add_tab( 'Footer', array(
		 Field::make( 'separator', 'crb_sep_footer', __( 'Telefon de urgenta', 'extramed' ) ),
		 Field::make( 'text', 'crb_emergency_title', 'Titlu de urgenta' )
			  ->set_width(50),
		 Field::make( 'text', 'crb_emergency_phone', 'Telefon de urgenta' )
			  ->set_width(50),
		 Field::make( 'separator', 'crb_sep_footer_1', __( 'Copyright', 'extramed' ) ),
		 Field::make( 'text', 'crb_copyright_text', 'Copyright text' ),
	 ) )
	 ->add_tab( 'Images', array(
		 Field::make('image', 'crb_subanner_img', 'Adauga imagine pentru banner')
			  ->set_help_text('Dimensiunile imaginei 1900x290')
	 ) )
	 ->add_tab( 'Articole', array(
		 Field::make( 'separator', 'crb_sep_post_1', __( 'Articole cu categoria ambulator si stationar', 'extramed' ) ),
		 Field::make('text', 'crb_category_amb_stat_default_img', 'Id pentru poza')
			  ->set_help_text('Adauga id la poza de default din media biblioteca'),
		 Field::make( 'separator', 'crb_sep_post_2', __( 'Articole pentru specialist', 'extramed' ) ),
		 Field::make( 'text', 'crb_specialist_post_title_1', 'Titlu pagina specialist 1' )
			  ->set_width(50),
		 Field::make( 'text', 'crb_specialist_post_title_2', 'Titlu pagina specialist 2' )
			  ->set_width(50),
		 Field::make( 'text', 'crb_specialist_post_desription', __( 'Descriere pentru pagina specialist', 'extramed' ) )
	 ) );


	Container::make( 'theme_options', __( 'Basic Options', 'extramed' ) )
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



    // Add second options page under 'Basic Options'
    Container::make( 'theme_options', __( 'Setari categorie Servicii', 'extramed' ) )
    ->add_tab( 'Titlu', array(
        Field::make( 'text', 'crb_services_post_title_1', 'Titlu pagina Servicii 1' )
        ->set_width(50),
        Field::make( 'text', 'crb_services_post_title_2', 'Titlu pagina Servicii 2' )
        ->set_width(50),
        Field::make( 'text', 'crb_services_post_desription', __( 'Descriere pentru pagina Servicii', 'extramed' ) )
    ) );

	// Add second options page under 'Basic Options'
	Container::make( 'theme_options', __( 'Setari Pagina Contacte' ) )
		 ->add_tab( 'Map', array(
			Field::make( 'separator', 'crb_sep_contacts', __( 'Titlu  pentru forma de contact', 'extramed' ) ),
			Field::make( 'text', 'crb_contacts_title_1', 'Titlu  1 pagina contact' )
				 ->set_width(30),
			Field::make( 'text', 'crb_contacts_title_2', 'Titlu 2 pagina contact' )
				 ->set_width(30),
			Field::make( 'text', 'crb_contacts_title_3', 'Titlu 3 pagina contact' )
				 ->set_width(30),

			Field::make( 'separator', 'crb_sep_address_contacts', __( 'Titlu  de adresa', 'extramed' ) ),
			Field::make( 'text', 'crb_contacts_address_1', 'Titlu  1 pagina contact' )
				 ->set_width(50),
			Field::make( 'text', 'crb_contacts_address_2', 'Titlu 2 pagina contact' )
				 ->set_width(50),
	) );
}
