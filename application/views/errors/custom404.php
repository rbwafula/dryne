<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="body">
	<? include_once(dirname(__FILE__) . '/../includes/page-header1.php'); ?>
	<div role="main" class="main">
		<section class="section bg-light-5">
			<div class="container">
				<div class="row justify-content-center text-center py-1 mb-3">
					<div class="col-md-8 col-lg-6 pt-4 mt-5">
						<h1 class="font-weight-bold text-6 mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"><strong class="d-block font-weight-bold text-20">404!</strong>PAGE NOT FOUND</h1>
						<p class="mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">The page you were looking for could not be found. This could mean the content you are looking for has been removed, or your address had a typo. Please use the menu above to return to your preferred page. </p>
						<a href="<?php echo base_url(); ?>home" class="btn btn-primary btn-rounded btn-v-3 btn-h-3 font-weight-bold appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800"><i class="fas fa-angle-left mr-3 text-3"></i> BACK TO HOMEPAGE</a>
					</div>
				</div>
			</div>
		</section>
	</div>
	<?php include_once(dirname(__FILE__) . '/../includes/page-footer1.php'); ?>
</div>