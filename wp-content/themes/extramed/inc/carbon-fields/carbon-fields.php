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
