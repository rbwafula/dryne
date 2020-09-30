<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 120}">
    <div class="header-body">
        <div class="header-top">
            <div class="header-top-container container">
                <div class="header-row">
                    <div class="header-column justify-content-start">
                        <span class="d-none d-sm-flex align-items-center">
							<i class="fas fa-map-marker-alt mr-1"></i>
							<? echo $sociallinks[5]->link; ?>
						</span>
                        <span class="d-none d-sm-flex align-items-center ml-4">
							<i class="fas fa-phone mr-1"></i>
							<a href="tel:+254<? echo substr($sociallinks[0]->link, -9); ?>" class="font-weight-semibold">
								<?php echo substr_replace(substr_replace($sociallinks[0]->link,' ', 4, 0),' ', 8, 0); ?>
							</a>
						</span>
                    </div>
                    <div class="header-column justify-content-end">
                        <ul class="header-top-social-icons social-icons social-icons-transparent d-none d-md-block">
                            <? include_once( 'social.php'); ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column justify-content-start">
                    <div class="header-logo">
                        <a href="<?php echo base_url(); ?>">
							<img alt="DryneGroup" height="45" src="<?php echo base_url(); ?>assets/img/logo.png">
						</a>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-nav">
                        <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
                            <nav class="collapse">
                                <ul class="nav flex-column flex-lg-row" id="mainNav">
                                    <? include_once( 'mainmenu.php'); ?>
                                </ul>
                            </nav>
                        </div>
                        <div class="header-button d-none d-sm-flex ml-3">
                            <a href=".contact-form" data-hash data-hash-offset="120" class="btn btn-outline btn-rounded btn-primary btn-4 btn-icon-effect-1">
							<span class="wrap">
								<span class="font-weight-bold">Book Now</span>
								<i class="fas fa-angle-right"></i>
							</span>
						</a>
                        </div>
                        <button class="header-btn-collapse-nav ml-3" data-toggle="collapse" data-target=".header-nav-main nav">
                            <span class="hamburguer">
								<span></span>
                            <span></span>
                            <span></span>
                            </span>
                            <span class="close">
								<span></span>
                            <span></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>