<?php
get_header('sub-banner');
?>

	<!--Start Content-->
    <div class="presentation">
		<div class="presentation__content">
		<?php if(have_posts()): ?>
			<?php the_post(); ?>

			<?php
				$intro_title = carbon_get_the_post_meta('crb_presentation_intro_title');
				$intro_text = carbon_get_the_post_meta('crb_presentation__intro_text');
				$intro_img_id = carbon_get_the_post_meta('crb_presentation__intro_img');
				$intro_img_src = wp_get_attachment_image_src($intro_img_id, 'full');
			?>


			<div class="presentation-block">
                <div class="container">
					<div class="main-title">
						<h2><?php echo $intro_title; ?></h2>
					</div>

					<div class="presentation_flex presentation_flex--img">
						<a class="popup" href="<?php echo $intro_img_src[0]; ?>">
							<img src="<?php echo $intro_img_src[0]; ?>" width="360" alt="">
						</a>

						<div class="presentation-text">
							<?php echo $intro_text; ?>
						</div>
					</div>

				</div>
			</div>

			<?php
				$parter_title = carbon_get_the_post_meta('crb_presentation_parter_title');
				$parter_text = carbon_get_the_post_meta('crb_presentation_parter_text');
			?>

			<div class="presentation-block dark-back">
                <div class="container">
					<div class="main-title">
						<h2><?php echo $parter_title; ?></h2>
					</div>

					<p><?php echo $parter_text; ?></p>
				</div>
			</div>

			<?php
			$first_title = carbon_get_the_post_meta('crb_presentation_first_title');
			$first_text = carbon_get_the_post_meta('crb_presentation_first_text');
			?>


            <div class="presentation-block">
                <div class="container">
                    <div class="main-title">
                        <h2><?php echo $first_title; ?></h2>
                    </div>

                    <div class="presentation-text">
		                <?php echo $first_text; ?>
                    </div>

	                <?php
	                $presentation_gallery = carbon_get_the_post_meta('crb_presentation_slider');
	                ?>
                    <div class="presentation-slider-wrap" id="js-presentation-slider-wrap">
                        <div class="presentation-arrows">
                            <button class="presentation-arrow presentation-arrow-prev">
                               <i class="fas fa-chevron-left"></i>
                            </button>
                            <button class="presentation-arrow presentation-arrow-next">
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        </div>
						<div class="presentation-slider" id="js-presentation-slider">
							<?php foreach($presentation_gallery as $item): ?>
                                <div class="presentation-slider__item">
									<?php $item_url = wp_get_attachment_image_src($item['crb_presentation_slider_img'], 'full'); ?>
									<img src="<?php echo $item_url[0]; ?>" alt="">
								</div>
							<?php endforeach; ?>
						</div>
					</div>
                </div>
            </div>

			<?php
			$second_title = carbon_get_the_post_meta('crb_presentation_second_title');
			$second_text = carbon_get_the_post_meta('crb_presentation_second_second_text');
			?>

            <div class="presentation-block dark-back">
                <div class="container">
                    <div class="main-title">
                        <h2><?php echo $second_title; ?></h2>
                    </div>

                    <div class="presentation-text">
						<?php echo $second_text; ?>
					</div>

	                <?php
	                $presentation_gallery_third = carbon_get_the_post_meta('crb_presentation_slider3');
	                ?>
                    <div class="presentation-slider-wrap" id="js-presentation-slider3-wrap">
                        <div class="presentation-arrows">
                            <button class="presentation-arrow presentation-arrow-prev">
                                <i class="fas fa-chevron-left"></i>
                            </button>
                            <button class="presentation-arrow presentation-arrow-next">
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        </div>
                        <div class="presentation-slider" id="js-presentation-slider-3">
			                <?php foreach($presentation_gallery_third as $item): ?>
                                <div class="presentation-slider__item">
					                <?php $item_url = wp_get_attachment_image_src($item['crb_presentation_slider_third_img'], 'full'); ?>
                                    <img src="<?php echo $item_url[0]; ?>" alt="">
                                </div>
			                <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>

			<?php
			$four_title = carbon_get_the_post_meta('crb_presentation_four_title');
			$four_text = carbon_get_the_post_meta('crb_presentation_four_text');
			?>

            <div class="presentation-block">
                <div class="container">
                    <div class="main-title">
                        <h2><?php echo $four_title; ?></h2>
                    </div>

                    <div class="presentation-text">
						<?php echo $four_text; ?>
                    </div>
                </div>
            </div>

			<?php else: ?>
		<?php endif; ?>

		</div>
    </div>
	<!--End Content-->


<?php
get_footer();

