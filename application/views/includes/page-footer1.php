<footer id="footer" class="bg-light mt-0">
	<div class="container">
		<div class="row text-center">
			<div class="col">
				<div class="overflow-hidden">
					<span class="d-block top-sub-title text-color-primary" data-appear-animation="maskUp">Need a Quote?</span>
				</div>
				<div class="overflow-hidden mb-2">
					<h2 class="font-secondary text-color-dark mb-0" data-appear-animation="maskUp" data-appear-animation-delay="200">Send Us a Message</h2>
				</div>
				<div class="overflow-hidden mb-3">
					<p class="lead mb-0" data-appear-animation="maskUp" data-appear-animation-delay="400">If you have any further questions or queries please do not hesitate to get in touch.</p>
				</div>
			</div>
		</div>
		<div class="row pt-5 pb-5 mb-0" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
			<div class="col-lg-4">
				<div class="row">
					<div class="col-12 col-md-4 col-lg-12 mb-lg-4">
						<div class="icon-box icon-box-style-1">
							<div class="icon-box-icon icon-box-icon-no-top pt-1">
								<i class="lnr lnr-apartment text-color-primary"></i>
							</div>
							<div class="icon-box-info mt-1">
								<div class="icon-box-info-title">
									<h3 class="font-weight-bold text-color-dark text-4 mb-0">Address</h3>
								</div>
								<p class="font-weight-semibold"><? echo $sociallinks[5]->link; ?></p>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-4 col-lg-12 mb-lg-4">
						<div class="icon-box icon-box-style-1">
							<a href="mailto:<? echo $sociallinks[1]->link; ?>">
								<div class="icon-box-icon icon-box-icon-no-top pt-1">
									<i class="lnr lnr-envelope text-color-primary"></i>
								</div>
								<div class="icon-box-info mt-1">
									<div class="icon-box-info-title">
										<h3 class="font-weight-bold text-color-dark text-4 mb-0">Email Address</h3>
									</div>
									<p><a href="mailto:<? echo $sociallinks[1]->link; ?>" class="font-weight-semibold"><? echo $sociallinks[1]->link; ?></a>
									</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-12 col-md-4 col-lg-12">
						<div class="icon-box icon-box-style-1">
							<a href="tel:+254<? echo substr($sociallinks[0]->link, -9); ?>">
								<div class="icon-box-icon icon-box-icon-no-top pt-1">
									<i class="lnr lnr-phone-handset text-color-primary"></i>
								</div>
								<div class="icon-box-info mt-1">
									<div class="icon-box-info-title">
										<h3 class="font-weight-bold text-color-dark text-4 mb-0">Phone Number</h3>
									</div>
									<p class="font-weight-semibold">
										<a href="tel:+254<? echo substr($sociallinks[0]->link, -9); ?>" class="font-weight-semibold">
											<?php echo substr_replace(substr_replace($sociallinks[0]->link,' ', 4, 0),' ', 8, 0); ?>
										</a>
									</p>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-8 mb-5">
				<form class="contact-form form-style-2" action="php/contact-form.php" method="POST">
					<div class="contact-form-success alert alert-success d-none">
						<strong>Success!</strong> Your message has been sent to us.
					</div>
					<div class="contact-form-error alert alert-danger d-none">
						<strong>Error!</strong> There was an error sending your message.
						<span class="mail-error-message d-block"></span>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" placeholder="Name" required>
						</div>
						<div class="form-group col-md-6">
							<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" placeholder="E-mail" required>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col">
							<input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" placeholder="Subject" required>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col">
							<textarea maxlength="5000" data-msg-required="Please enter your message." rows="5" class="form-control" name="message" id="message" placeholder="Details of service required" required></textarea>
						</div>
					</div>
					<div class="form-row mt-2">
						<div class="col">
							<input type="submit" value="SEND MESSAGE" class="btn btn-primary btn-rounded btn-4 font-weight-semibold text-0" data-loading-text="Loading...">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="footer-copyright footer-copyright-border-top bg-dark-5 py-5 mt-0">
		<div class="container">
			<div class="row align-items-center justify-content-md-center">
				<div class="col-12 col-lg-4 text-center text-lg-right order-3 order-lg-1">
					<p class="mb-0">Copyright © 2020 All Rights Reserved by DryneGroup</p>
				</div>
				<div class="col-12 col-lg-2 text-center order-1 order-lg-2">
					<a href="index.html"><img src="<?php echo base_url(); ?>assets/img/logo-dark.png" width="78" height="70" alt="DryneGroup" class="img-fluid" /></a>
				</div>	
				<div class="col-12 col-lg-4 text-center text-lg-left order-2 order-lg-3 mb-2 mb-lg-0">	
					<a href="#" class="link-underline-dark mr-3">Privacy Policy</a>
					<a href="#" class="link-underline-dark">Terms of Use</a>
				</div>
			</div>
		</div>
	</div>
</footer>