<?php
/**
 * Module/Layout template - Testimonials.
 *
 * @package bigbang
 */

$module_name = 'testimonials';

// Common Fields.
include( locate_template( '/plugins/helpers/common-fields.php' ) );

// Add Heading Fields.
include( locate_template( '/plugins/helpers/add-heading.php' ) );

// Testimonials Fields.
$clients = get_sub_field( 'clients' );
$quotes = get_sub_field( 'quotes' );
?>

<section <?php echo $module_attr; ?>>

	<div class="container">

		<?php include( locate_template( $GLOBALS['framework_path'] . '/partials/card-add-heading.php' ) ); ?>
		
		<?php
		if ( count($clients) >= 1 && count($quotes) >= 1 ) {
			$column_class = 'col-md-6';
			$logo_grid = 'col-sm-4';
		} else {
			$column_class = 'col-md-12';
			$logo_grid = 'col-sm-3';
		} ?>

		<div class="row quotes-clients">

		<?php
		if ( $quotes ) : ?>
		
			<div id="quotes-slideshow" class="columns <?php echo esc_attr( $column_class ); ?>">

				<div class="quotes slides" data-slick='{
					"autoplay": true,
					"autoplaySpeed": 10000,
					"arrows": true,
					"slidesToShow": 1,
					"slidesToScroll": 1,
					"infinite": true,
					"dots": false,
					"prevArrow": "<button type=\"button\" class=\"slick-prev\"><i class=\"fa fa-angle-left\"></i></button>",
					"nextArrow": "<button type=\"button\" class=\"slick-next\"><i class=\"fa fa-angle-right\"></i></button>"
				}'>
				
				<?php
				foreach( $quotes as $quote ) :
					$author = $quote['author'];
					$author_position = $quote['author_position'];
					$author_photo = $quote['author_photo']['sizes']['custom-xsmall'];
					if ( $author_photo == false ) {
						$author_photo = get_template_directory_uri() . '/img/author-placeholder.png';
					}
					?>
				
					<div class="quote">
						<p class="quote-text">"<?php echo esc_html( $quote['quote'] ); ?>"</p>
						<figure class="quote-author">
						  	<div class="avatar-container">
						  		<img class="avatar" src="<?php echo esc_url( $author_photo ); ?>" alt="<?php echo esc_attr( $author ); ?>" width="304" height="228">
					  		</div>
						  <figcaption><strong>- <?php echo esc_html( $author ); ?></strong><?php echo esc_html( ', ' . $author_position ); ?></figcaption>
						</figure>
					</div>

				<?php
				endforeach; ?>
				</div>
				
			</div>

			<?php
		endif; ?>

		<?php
		if ( $clients ) : ?>
		
			<div class="columns <?php echo esc_attr( $column_class ); ?>">

				<div class="row clients">
				
				<?php
				foreach( $clients as $client ) :
					$client_name = $client['name'];
					$client_url = $client['url'];
					$client_logo = $client['logo']['sizes']['custom-small'];
					?>
					
					<div class="client <?php echo esc_attr( $logo_grid ); ?>">

					<?php if ( $client_url ) { ?>
						<a href="<?php echo esc_url( $client_url ); ?>" target="_blank" title="<?php echo esc_attr( $client_name ); ?>">
					<?php } ?>

							<div class="logo-bkg">
								<?php if ( $client_logo ) { ?>
									<img class="client-logo" src="<?php echo esc_url( $client_logo ); ?>" alt="<?php echo esc_attr( $client_name ); ?>">
								<?php } else { ?>
									<div class="client-text"><?php echo esc_attr( $client_name ); ?></div>
								<?php } ?>
							</div>

					<?php if ( $client_url ) { ?>	
						</a>
					<?php } ?>

					</div>

				<?php
				endforeach; ?>
				</div>
				
			</div>

			<?php
		endif; ?>

		</div>
		
	</div>

</section>

<?php
// Initiate Slick Carousel.
$slideshow_id = '#quotes-slideshow';
include( locate_template( '/plugins/helpers/slick.php' ) );
?>
