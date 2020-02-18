<div class="mkdf-vertical-showcase mkdf-vs-ready-animation <?php echo esc_attr( $holder_classes ); ?>">
	<div class="mkdf-vs-holder">
		<div class="mkdf-vs-stripe">
		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 3000 3000" style="" xml:space="preserve">
			<style type="text/css">
				.st0{fill-rule:evenodd;clip-rule:evenodd;fill:url(#SVGID_1_);}
			</style>
			<linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="1543.491" y1="1474.8508" x2="2952.8528" y2="659.8721">
				<stop offset="0" style="stop-color:#131217"></stop>
				<stop offset="1" style="stop-color:#292A33"></stop>
			</linearGradient>
			<path class="st0" d="M0,3000h3000V0c0,0-540,0-570.14,0C2071,0,1861.65,130,1500.33,130C1138.55,130,929,0,569.66,0  C539.99,0,0,0,0,0V3000L0,3000z" style=""></path>
		</svg>
		</div>
		<div class="mkdf-vs-frame-holder">
			<div class="mkdf-vs-frame-mobile-holder">
				<img src="../wp-content/plugins/foton-core/assets/img/mobile-frame-shadow.png"
				     alt="<?php esc_attr_e( 'Mobile frame image', 'foton-core' ); ?>">
				<div class="mkdf-vs-inner-frame"></div>
			</div>
		</div>
		<div class="mkdf-vs-frame-info mkdf-vs-frame-animate-out">
			<div class="mkdf-vs-frame-info-top">
				<div class="mkdf-vs-frame-title-image"></div>
				<div class="mkdf-vs-frame-title"></div>
				<div class="mkdf-vs-frame-subtitle"></div>
			</div>
			<div class="mkdf-vs-frame-info-bottom">
				<div class="mkdf-vs-frame-slide-number">01</div>
				<div class="mkdf-vs-frame-slide-text"></div>
				<?php if ( $bg_text !== "" ) { ?>
					<div class="mkdf-vs-frame-bg-text">
						<div class="mkdf-vs-frame-bg-text-placeholder"><?php echo esc_html( $bg_text ); ?></div>
						<div class="mkdf-vs-frame-bg-text-content"><?php echo esc_html( $bg_text ); ?></div>
					</div>
				<?php } ?>
			</div>
			<div class="mkdf-vs-frame-info-other">
				<?php if ( $enable_app_store_link == "yes" ) { ?>
					<a itemprop="url" class="mkdf-vs-item-app-store-link"
					   href="<?php echo esc_url( $app_store_link ); ?>" target="_blank">
						<img src="../wp-content/plugins/foton-core/assets/img/android.png"
						     alt="<?php esc_attr_e( 'Apple store logo', 'foton-core' ); ?>">
					</a>
				<?php } ?>
				<?php if ( $enable_play_store_link == "yes" ) { ?>
					<a itemprop="url" class="mkdf-vs-item-play-store-link"
					   href="<?php echo esc_url( $play_store_link ); ?>" target="_blank">
						<img src="../wp-content/plugins/foton-core/assets/img/ios.png"
						     alt="<?php esc_attr_e( 'Play store logo', 'foton-core' ); ?>">
					</a>
				<?php } ?>
			</div>
		</div>
		<div class="swiper-container">
			<div class="swiper-wrapper">
				<?php if ( ! empty( $link_items ) ) { ?>
					<?php foreach ( $link_items as $link_item ): ?>
						<div class="swiper-slide">
							<div class="mkdf-vs-item">
								<?php
								if ( isset( $params['elementor'] ) ) {
									$link_item['image']      = $link_item['image']['id'];
									$link_item['icon_image'] = $link_item['icon_image']['id'];
								}
								?>
								<?php if ( isset( $link_item['image'] ) ) { ?>
									<?php echo wp_get_attachment_image( $link_item['image'], 'full' ); ?>
								<?php } ?>
								<div class="mkdf-vs-item-info">
									<?php if ( isset( $link_item['slide_text'] ) ) { ?>
										<span class="mkdf-vs-item-slide-text">
	                                        <?php echo esc_html( $link_item['slide_text'] ); ?>
                                        </span>
									<?php } ?>
									<?php if ( isset( $link_item['icon_image'] ) ) { ?>
										<span class="mkdf-vs-item-title-image"><?php echo wp_get_attachment_image( $link_item['icon_image'], 'full' ); ?></span>
									<?php } ?>
									<?php if ( isset( $link_item['title'] ) ) { ?>
										<span class="mkdf-vs-item-title"><?php echo esc_html( $link_item['title'] ); ?></span>
									<?php } ?>
									<?php if ( isset( $link_item['subtitle'] ) ) { ?>
										<span class="mkdf-vs-item-subtitle"><?php echo esc_html( $link_item['subtitle'] ); ?></span>
									<?php } ?>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
					<div class="swiper-slide">
						<div class="mkdf-vs-contact-form">
							<div class="mkdf-vs-contact-form-info">
								<?php if ( ! empty( $contact_form_title ) ) { ?>
									<div class="mkdf-vs-contact-form-title">
										<h3><?php echo esc_html( $contact_form_title ); ?></h3>
									</div>
								<?php } ?>
								<?php if ( ! empty( $contact_form_subtitle ) ) { ?>
									<div class="mkdf-vs-contact-form-subtitle">
										<h3><?php echo esc_html( $contact_form_subtitle ); ?></h3>
									</div>
								<?php } ?>
							</div>
							<?php if ( ! empty( $contact_form ) ) {
								echo do_shortcode( '[contact-form-7 id="' . esc_attr( $contact_form ) . '"]' );
							} ?>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
		<div class="swiper-pagination"></div>
	</div>
</div>
