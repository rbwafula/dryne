<div class="body">

	<div class="container-fluid d-flex flex-column">
		<div class="row align-items-center min-height-100vh">
			<div class="col-md-6 align-self-stretch p-0">
				<div class="image-frame h-100">
					<div class="image-frame-wrapper">
						<div class="image-frame-background min-height-370 appear-animation" data-appear-animation="scaleOut" data-appear-animation-duration="8s" data-plugin-image-background data-plugin-options="{'imageUrl': '<?php echo base_url(); ?>assets/img/background960x980.png'}"></div>
					</div>
				</div>
			</div>
			<div class="col-md-6 p-0">
				<header id="header" class="p-4 p-md-5">
					<a href="index.html">
						<img alt="EZ" height="59" src="<?php echo base_url(); ?>assets/img/logo.png" class="appear-animation" data-appear-animation="fadeInRightShorter" data-plugin-options="{'accY': 100}">
					</a>
				</header>
				<hr class="opacity-4 my-0">
				<section class="section">
					<div class="row m-0">
						<div class="col-half-section pl-md-5">
							<div role="main" class="main">
								<div class="overflow-hidden">
									<span class="d-block top-sub-title text-color-primary appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="600">COMING SOON</span>
								</div>
								<div class="overflow-hidden mb-2">
									<h1 class="font-weight-bold text-6 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="800">We Are Cleaning House!</h1>
								</div>
								<div class="overflow-hidden mb-5">
									<p class="text-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="1000">We are getting ready to launch our new website. Please stay tuned as we prepare to serve you better. Our contact channels remain open. </p>
								</div>

								<div class="card bg-primary border-0 rounded mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1200">
									<div class="card-body p-5">
										<div class="icon-box icon-box-style-1 align-items-center mb-0">
											<div class="icon-box-icon pr-2">
												<img width="60" src="<?php echo base_url(); ?>assets/img/icons/envelope.svg" alt="" data-icon data-plugin-options="{'color': '#FFF', 'animated': true, 'delay': 600}" />
											</div>
											<div class="icon-box-info">
												<div class="icon-box-info-title">
													<span class="icon-box-sub-title text-color-light">SUBSCRIBE AND</span>
													<h4 class="text-color-light font-weight-bold line-height-1 mb-0">BE THE FIRST TO KNOW!</h4>
												</div>
											</div>
										</div>
										<p class="text-color-light opacity-6 mb-3">Enter your email address to subscribe to get notified.</p>
										<form class="newsletter-form newsletter-form-error-pos-2 form-errors-light" action="<?php echo base_url(); ?>assets/php/newsletter-subscribe.php" method="post">
											<div class="newsletter-form-success alert alert-success d-none">
												<strong>Success!</strong> You've been added to our email list.
											</div>
											<div class="newsletter-form-error alert alert-danger d-none">
												<strong>Error!</strong> There was an error to add your email.
											</div>
											<div class="form-row">
												<div class="form-group col-lg-6 pr-lg-0 mb-lg-0">
													<input type="email" class="newsletter-email form-control rounded-0 border-0 line-height-1" placeholder="Email address" aria-label="Email Address" required>
												</div>
												<div class="form-group col-lg-6 pl-lg-0 mb-lg-0">
													<input type="submit" value="SUBSCRIBE" class="btn btn-quaternary btn-v-3 font-weight-semibold justify-content-center w-100 h-100 rounded-0">
												</div>
											</div>
										</form>
									</div>
								</div>
								
								<div class="d-flex flex-column flex-lg-row justify-content-between align-items-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1400">
									<ul class="social-icons social-icons-icon-primary social-icons-transparent social-icons-3 d-inline-flex">
										<li class="social-icons-facebook">
											<a href="<? echo $sociallinks[2]->link; ?>" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
										</li>
										<li class="social-icons-twitter">
											<a href="<? echo $sociallinks[3]->link; ?>" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
										</li>
										<li class="social-icons-instagram">
											<a href="<? echo $sociallinks[4]->link; ?>" target="_blank" title="Instragram"><i class="fab fa-instagram"></i></a>
										</li>
										<li class="social-icons-whatsapp">
											<a href="whatsapp://send?abid=+254<?echo substr($sociallinks[0]->link,-9);?>&phone=+254<?echo substr($sociallinks[0]->link,-9);?>&text=Hi%2C%20I%27m%20interested%20in%20your%20services." target="_blank" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
										</li>
									</ul>
									<div class="vertical-divider vertical-divider-size-1 opacity-4 d-none d-lg-block"></div>
									<div class="d-flex align-items-center my-2 my-lg-0">
										<i class="lnr lnr-phone-handset text-3 font-weight-bold text-color-primary mr-2"></i>
										<a href="tel:+254<? echo substr($sociallinks[0]->link, -9); ?>" class="font-weight-semibold">
											<?php echo substr_replace(substr_replace($sociallinks[0]->link,' ', 4, 0),' ', 8, 0); ?>
										</a>
									</div>
									<div class="vertical-divider vertical-divider-size-1 opacity-4 d-none d-lg-block"></div>
									<div class="d-flex align-items-center">
										<i class="lnr lnr-envelope text-4 font-weight-bold text-color-primary mr-2"></i>
										<a href="mailto:<? echo $sociallinks[1]->link; ?>" class="font-weight-semibold"><? echo $sociallinks[1]->link; ?></a>
									</div>
								</div>
							</div>
							<footer id="footer" class="bg-transparent">
								<p class="text-color-light-3 text-center text-lg-left appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1600">Copyright © 2020 All Rights Reserved by DryneGroup</p>
							</footer>

						</div>
					</div>
				</section>	
				
			</div>
		</div>
	</div>

</div>