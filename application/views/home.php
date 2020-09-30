<div class="body">
    <? include_once( 'includes/page-header1.php'); ?>

    <div role="main" class="main">
        <div class="slider-container slider-container-height-550 rev_slider_wrapper">
            <div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': [1140,960,720,540], 'gridheight': [550,550,550,550], 'responsiveLevels': [4096,1200,992,576], 'parallax': { 'type': 'mouse', 'origo': 'slidercenter', 'speed': 2000, 'levels': [2,3,4,5,6,7,12,16,10,50], 'disable_onmobile': 'on' }, 'navigation' : {'arrows': { 'enable': false, 'hide_under': 767, 'style': 'slider-arrows-style-1' }, 'bullets': {'enable': false, 'style': 'bullets-style-1', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 25, 'h_offset': 0}}}">
                <ul style="padding-left:0px">
                    <li data-transition="fade">
                        <img src="<?php echo base_url(); ?>assets/img/slides/multi-purpose/slide-1-1.jpg" alt="" data-bgposition="50% 20%" data-bgfit="cover" data-bgrepeat="no-repeat" data-kenburns="on" data-duration="12000" data-ease="Linear.easeNone" data-scalestart="110" data-scaleend="100" data-offsetstart="250 100" class="rev-slidebg">

                        <div class="tp-caption bg-primary d-none d-md-block" data-frames='[{"delay":3000,"speed":1300,"frame":"0","from":"opacity:0;x:-10%;skX:15deg;","to":"opacity:1;x:0;skX:15deg;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-x="0" data-y="center" data-voffset="['-50','-50','-50','-50']" data-width="['20','20','20','20']" data-height="['98','98','98','98']"></div>

                        <div class="tp-caption text-color-light font-weight-light ws-normal letter-spacing-0" data-frames='[{"delay":2600,"speed":1300,"frame":"0","from":"opacity:0;y:10%;","to":"opacity:1;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-x="35" data-y="center" data-voffset="['-85','-85','-85','-85']" data-width="['631','631','631','463']" data-textAlign="['left','left','left','center']" data-fontsize="['29','29','29','29']" data-lineheight="['34','34','34','34']">HERE'S YOUR NEW</div>

                        <h1 class="tp-caption text-color-light font-alternative font-weight-extra-bold ws-normal letter-spacing-0" data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-x="35" data-y="center" data-voffset="['-25','10','10','10']" data-width="['635','635','635','468']" data-textAlign="['left','left','left','center']" data-fontsize="['67','67','67','55']" data-lineheight="['81','81','81','60']">WEBSITE DESIGN</h1>

                        <div class="tp-caption text-color-light font-weight-extra-light ws-normal letter-spacing-0" data-frames='[{"delay":2600,"speed":1300,"frame":"0","from":"opacity:0;y:-10%;","to":"opacity:0.8;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-x="35" data-hoffset="['-11','-11','-11','0']" data-y="center" data-voffset="['25','25','25','25']" data-width="['631','631','631','463']" data-textAlign="['right','right','right','center']" data-fontsize="['19','19','19','21']" data-lineheight="['23','23','23','26']">Create amazing solutions the easiest way.</div>

                        <a class="tp-caption btn btn-rounded btn-primary font-weight-semibold letter-spacing-0" href="#start" data-hash data-hash-offset="65" data-frames='[{"delay":3400,"speed":1300,"frame":"0","from":"opacity:0;y:10%;","to":"opacity:1;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-x="center" data-hoffset="['-10','-10','-10','0']" data-y="center" data-voffset="['100','100','100','100']" data-start="2100" data-whitespace="nowrap" data-fontsize="['14','14','14','19']" data-paddingtop="['17','17','17','21']" data-paddingbottom="['17','17','17','21']" data-paddingleft="['65','65','65','75']" data-paddingright="['65','65','65','75']">Get Started</a>

                    </li>
                </ul>
            </div>
        </div>
        <section id="start" class="section call-to-action bg-light-5 call-to-action-height-2">
			<div class="container">
				<div class="row">
					<div class="col-md-9 col-lg-9 appear-animation" data-appear-animation="fadeInRightShorter">
						<div class="call-to-action-content appear-animation" data-appear-animation="fadeInLeftShorter">
							<h2 class="font-weight-bold text-5">Call us now <a href="tel:+254<? echo substr($sociallinks[0]->link, -9); ?>" class="text-color-primary"><?php echo substr_replace(substr_replace($sociallinks[0]->link,' ', 4, 0),' ', 8, 0); ?></a> or send an email <a href="mailto:<? echo $sociallinks[1]->link; ?>" class="text-underline text-color-primary"><? echo $sociallinks[1]->link; ?></a></h2>
							<p class="font-weight-light mb-0">Lorem ipsum dolor sit amet, coctetur adipiscing elit. Phasellus blandit assa enim. Nullam id varius.</p>
						</div>
					</div>
					<div class="col-md-3 col-lg-3 appear-animation" data-appear-animation="fadeInLeftShorter">
						<div class="call-to-action-btn appear-animation" data-appear-animation="fadeInRightShorter">
							<a href=".contact-form" data-hash data-hash-offset="120" class="btn btn-outline btn-rounded btn-dark btn-4 btn-h-3 btn-icon-effect-1 font-weight-semibold">
								<span class="wrap">
									<span class="font-weight-bold">Get your Quote</span>
									<i class="fas fa-angle-right"></i>
								</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
        <section id="start" class="section bg-light-5 curved-border">
            <div class="container container-lg-custom">
                <div class="row align-items-baseline px-lg-4 mt-2">
                    <div class="col-lg-4">
                        <div class="icon-box icon-box-style-1 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
                            <div class="icon-box-icon pr-3">
                                <img width="42" src="<?php echo base_url(); ?>assets/vendor/linear-icons/home.svg" alt="" data-icon data-plugin-options="{'color': '#2388ED', 'animated': true, 'delay': 600}" />
                            </div>
                            <div class="icon-box-info">
                                <span class="top-sub-title">Cleaning house</span>
                                <h2 class="font-weight-extra-bold line-height-1 text-5 mb-3">Domestic Solutions</h2>
                                <p class="text-alternative-style pr-lg-4">Lorem ipsum dolor sit amet, sectetur adipiscing elit. Phasellus blanmassa enim. Nullam id varius.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 my-4 my-lg-0">
                        <div class="icon-box icon-box-style-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                            <div class="icon-box-icon pr-3">
                                <img width="42" src="<?php echo base_url(); ?>assets/vendor/linear-icons/store.svg" alt="" data-icon data-plugin-options="{'color': '#2388ED', 'animated': true, 'delay': 900}" />
                            </div>
                            <div class="icon-box-info">
                                <span class="top-sub-title">Work environment</span>
                                <h2 class="font-weight-extra-bold line-height-1 text-5 mb-3">Industrial Solutions</h2>
                                <p class="text-alternative-style pr-lg-4">Lorem ipsum dolor sit amet, sectetur adipiscing elit. Phasellus blanmassa enim. Nullam id varius.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="icon-box icon-box-style-1 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
                            <div class="icon-box-icon pr-3">
                                <img width="42" src="<?php echo base_url(); ?>assets/vendor/linear-icons/construction.svg" alt="" data-icon data-plugin-options="{'color': '#2388ED', 'animated': true, 'delay': 1200}" />
                            </div>
                            <div class="icon-box-info">
                                <span class="top-sub-title">Your Custom Solution</span>
                                <h2 class="font-weight-extra-bold line-height-1 text-5 mb-3">Bespoke Solutions</h2>
                                <p class="text-alternative-style pr-lg-4">Lorem ipsum dolor sit amet, sectetur adipiscing elit. Phasellus blanmassa enim. Nullam id varius.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="container container-lg-custom mb-3">
                <div class="row">
                    <div class="col-md-6 mb-4 mb-md-0">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="100">
                            <span class="top-sub-title">THE RIGHT CHOICE</span>

                            <h2 class="word-rotator letters type font-weight-extra-bold text-6 mb-3">
								<span>Dryne. Your </span> 
								<span class="word-rotator-words waiting">
									<b class="is-visible">ultimate service provider.</b>
									<b>reliable cleaning solutions.</b>
									<b>dependandable partner.</b>
								</span>
							</h2>
                        </div>
                        <p class="lead text-4 font-weight-light pr-md-4 mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Dryne Limited strives and focuses on giving your home and business the professional  clean touch that it deserves at an affordable cost.</p>

                        <p class="text-alternative-style font-weight-normal text-3 mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">We offer both domestic and industrial cleaning solutions and are specialized in home & office carpet and upholstery cleaning, floor sanding and scrubbing, windows cleaning, post construction cleaning etc. we clean all sorts of premises which  include but are not limited to commercial buildings, law firms, banks, NGO’s, theatres, Churches, shopping malls, colleges, food courts among others.</p>

                        <p class="text-alternative-style font-weight-normal text-3 mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">With over 4 years experience in this industry we have a myriad of well trained professionals that are ready to provide  you with the most professional and satisfactory service as we strive to use the latest technology for the best results, no need for you to lift a finger we will do it for you.</p>

                        <a href="<?php echo base_url(); ?>about" class="btn btn-outline btn-rounded btn-primary btn-4 font-weight-bold mt-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">More About Us</a>
                    </div>
                    <div class="col-10 col-md-5 mx-auto ml-md-auto appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
                        <div class="particles d-flex align-items-center pr-0 pr-lg-3 pr-xl-5">
                            <svg class="svg-particles d-none d-sm-block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 493.72 405.79">
                                <g class="g-particles g-particles-group-1 appear-animation" data-appear-animation="expandParticles" data-appear-animation-delay="500">
                                    <line class="cls-1" fill="none" stroke="#969da0" stroke-miterlimit="10" x1="150.28" y1="108.35" x2="159.03" y2="102.1" />
                                    <line class="cls-1" fill="none" stroke="#969da0" stroke-miterlimit="10" x1="325.51" y1="118.98" x2="334.26" y2="112.73" />
                                    <line class="cls-1" fill="none" stroke="#969da0" stroke-miterlimit="10" x1="483.33" y1="94.52" x2="492.08" y2="88.27" />
                                    <line class="cls-1" fill="none" stroke="#969da0" stroke-miterlimit="10" x1="321.14" y1="279.22" x2="329.89" y2="272.97" />
                                    <line class="cls-1" fill="none" stroke="#969da0" stroke-miterlimit="10" x1="148.47" y1="279.22" x2="157.22" y2="272.97" />
                                    <line class="cls-1" fill="none" stroke="#969da0" stroke-miterlimit="10" x1="11.14" y1="305.17" x2="19.89" y2="298.92" />
                                </g>
                                <g class="g-particles g-particles-group-2 appear-animation" data-appear-animation="expandParticles" data-appear-animation-delay="800">
                                    <path class="cls-1" fill="none" stroke="#969da0" stroke-miterlimit="10" d="M51.78,105.64s-.37-12.75,5.25-3.5.38,7.13,0,7.13" transform="translate(-3.14 -1.85)" />
                                    <path class="cls-1" fill="none" stroke="#969da0" stroke-miterlimit="10" d="M229.34,103.24s-.37-12.75,5.25-3.5.38,7.12,0,7.12" transform="translate(-3.14 -1.85)" />
                                    <path class="cls-1" fill="none" stroke="#969da0" stroke-miterlimit="10" d="M401,103.24s-.37-12.75,5.25-3.5.38,7.12,0,7.12" transform="translate(-3.14 -1.85)" />
                                    <path class="cls-1" fill="none" stroke="#969da0" stroke-miterlimit="10" d="M401,274.1s-.37-12.75,5.25-3.5.38,7.13,0,7.13" transform="translate(-3.14 -1.85)" />
                                    <path class="cls-1" fill="none" stroke="#969da0" stroke-miterlimit="10" d="M227.33,276.14s-.37-12.75,5.25-3.5.38,7.13,0,7.13" transform="translate(-3.14 -1.85)" />
                                    <path class="cls-1" fill="none" stroke="#969da0" stroke-miterlimit="10" d="M55.49,276.14s-.37-12.75,5.25-3.5.38,7.13,0,7.13" transform="translate(-3.14 -1.85)" />
                                    <path class="cls-1" fill="none" stroke="#969da0" stroke-miterlimit="10" d="M97.76,41.59s-2.5,4.83,2.83,2.33.67,2.67.67,2.67" transform="translate(-3.14 -1.85)" />
                                    <path class="cls-1" fill="none" stroke="#969da0" stroke-miterlimit="10" d="M448.14,22.85s-2.5,4.83,2.83,2.33.67,2.67.67,2.67" transform="translate(-3.14 -1.85)" />
                                    <path class="cls-1" fill="none" stroke="#969da0" stroke-miterlimit="10" d="M246,44.18s.1,5.85,4.41-.28,2.26,1.66,2.26,1.66" transform="translate(-3.14 -1.85)" />
                                </g>
                                <g class="g-particles g-particles-group-3 appear-animation" data-appear-animation="expandParticles" data-appear-animation-delay="1100">
                                    <circle class="cls-2" fill="#969da0" stroke="#969da0" cx="4.77" cy="151" r="1.14" transform="translate(-108.51 45.76) rotate(-45)" />
                                    <circle class="cls-2" fill="#969da0" stroke="#969da0" cx="149.72" cy="30.16" r="1.14" transform="translate(19.39 112.85) rotate(-45)" />
                                    <circle class="cls-2" fill="#969da0" stroke="#969da0" cx="304.7" cy="3.48" r="1.14" transform="translate(83.64 214.63) rotate(-45)" />
                                    <circle class="cls-2" fill="#969da0" stroke="#969da0" cx="495.22" cy="155.04" r="1.14" transform="translate(32.28 393.74) rotate(-45)" />
                                    <circle class="cls-2" fill="#969da0" stroke="#969da0" cx="315.2" cy="163.8" r="1.14" transform="translate(-26.64 269.01) rotate(-45)" />
                                    <circle class="cls-2" fill="#969da0" stroke="#969da0" cx="153.42" cy="344.7" r="1.14" transform="translate(-201.94 207.59) rotate(-45)" />
                                    <circle class="cls-2" fill="#969da0" stroke="#969da0" cx="249.61" cy="406" r="1.14" transform="translate(-217.11 293.57) rotate(-45)" />
                                    <circle class="cls-2" fill="#969da0" stroke="#969da0" cx="313.32" cy="336.94" r="1.14" transform="translate(-149.62 318.39) rotate(-45)" />
                                    <circle class="cls-2" fill="#969da0" stroke="#969da0" cx="148.58" cy="172.2" r="1.14" transform="translate(-81.38 153.65) rotate(-45)" />
                                </g>
                                <g class="g-particles g-particles-group-4 appear-animation" data-appear-animation="expandParticles" data-appear-animation-delay="1400">
                                    <polyline class="cls-3" fill="none" stroke="#969da0" points="200.87 18.34 197.2 18.34 199.03 21" />
                                    <polyline class="cls-3" fill="none" stroke="#969da0" points="179.66 368.64 180.47 364.7 176.12 365.86" />
                                    <polyline class="cls-3" fill="none" stroke="#969da0" points="369.87 368.64 370.67 364.7 366.31 365.86" />
                                    <polyline class="cls-3" fill="none" stroke="#969da0" points="369.31 5.73 371.83 1.9 367.27 1.65" />
                                    <polyline class="cls-3" fill="none" stroke="#969da0" points="217.7 153.19 210.32 153.19 214.01 158.56" />
                                    <polyline class="cls-3" fill="none" stroke="#969da0" points="385.03 153.19 377.66 153.19 381.34 158.56" />
                                    <polyline class="cls-3" fill="none" stroke="#969da0" points="385.03 324.15 377.66 324.15 381.34 329.52" />
                                    <polyline class="cls-3" fill="none" stroke="#969da0" points="213.01 324.15 205.64 324.15 209.32 329.52" />
                                    <polyline class="cls-3" fill="none" stroke="#969da0" points="52.35 324.15 44.98 324.15 48.66 329.52" />
                                </g>
                                <g class="g-particles g-particles-group-5 appear-animation" data-appear-animation="expandParticles" data-appear-animation-delay="1700">
                                    <path class="cls-4" fill="none" stroke="#969da0" d="M264.48,188.12s-4,8.83,3.33,6.17,5.67-.5,5.67-.5-1.33,3.67-2.17,3.5" transform="translate(-3.14 -1.85)" />
                                    <path class="cls-4" fill="none" stroke="#969da0" d="M444.52,179.07s-4,8.83,3.33,6.17,5.67-.5,5.67-.5-1.33,3.67-2.17,3.5" transform="translate(-3.14 -1.85)" />
                                    <path class="cls-4" fill="none" stroke="#969da0" d="M94.23,196.91s-4,8.83,3.33,6.17,5.67-.5,5.67-.5-1.33,3.67-2.17,3.5" transform="translate(-3.14 -1.85)" />
                                    <path class="cls-4" fill="none" stroke="#969da0" d="M92.81,369.86s-2.63,6.55,2.19,4.57,3.73-.37,3.73-.37-.88,2.72-1.43,2.6" transform="translate(-3.14 -1.85)" />
                                    <path class="cls-4" fill="none" stroke="#969da0" d="M269.94,368.71c.06-.09,3.2,5.44,4.68,2,2-4.8,2.54-2.76,2.54-2.76s1.15,2.61.66,2.89" transform="translate(-3.14 -1.85)" />
                                </g>
                                <g class="g-particles g-particles-group-6 appear-animation" data-appear-animation="expandParticles" data-appear-animation-delay="2000">
                                    <polyline class="cls-5" fill="#969da0" stroke="#969da0" points="8.58 76.55 13.71 78.42 12.58 72.8" />
                                    <polyline class="cls-5" fill="#969da0" stroke="#969da0" points="8.58 228.65 13.71 230.53 12.58 224.9" />
                                    <polyline class="cls-5" fill="#969da0" stroke="#969da0" points="178.55 238.99 183.68 240.86 182.55 235.24" />
                                    <polyline class="cls-5" fill="#969da0" stroke="#969da0" points="349.47 240.53 354.59 242.4 353.47 236.78" />
                                    <polyline class="cls-5" fill="#969da0" stroke="#969da0" points="338.72 402.28 343.84 404.15 342.72 398.53" />
                                    <polyline class="cls-5" fill="#969da0" stroke="#969da0" points="147.72 399.46 152.84 401.34 151.72 395.71" />
                                    <polyline class="cls-5" fill="#969da0" stroke="#969da0" points="482.39 209.27 485.95 213.4 487.71 207.94" />
                                    <polyline class="cls-5" fill="#969da0" stroke="#969da0" points="349.58 66.58 354.83 68.06 353.29 62.54" />
                                </g>
                            </svg>
                            <div class="particles-rect bg-primary d-none d-md-block" data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 4, 'transition': true}"></div>
                            <img src="<?php echo base_url(); ?>assets/img/home403x272.png" class="img-fluid box-shadow-5" alt="" data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 4, 'horizontal': true, 'transition': true}" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="parallax section section-height-3 section-text-light curved-border curved-border-style-2 overlay overlay-color-dark overlay-show overlay-op-5" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="<?php echo base_url(); ?>assets/img/backgrounds/background-1.jpg">
            <div class="container container-lg-custom pb-4 mb-md-5">
                <div class="counters counters-light">
                    <div class="row">
                        <div class="col-sm-6 col-lg-3">
                            <div class="counter">
                                <strong data-to="100" data-append="+">0</strong>
                                <label class="font-weight-light">Happy Clients</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="counter">
                                <strong data-to="36">0</strong>
                                <label class="font-weight-light">Houses Cleaned</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="counter">
                                <strong data-to="12" data-append="+">0</strong>
                                <label class="font-weight-light">Offices Cleaned</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="counter">
                                <strong data-to="300" data-append="+">0</strong>
                                <label class="font-weight-light">Queries Responded</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section bg-light-5 pt-0">
            <div class="container-fluid pt-5 pt-md-0 pt-lg-5 pt-xl-0">
                <div class="row text-center">
                    <div class="col">
                        <span class="top-sub-title">WHAT THEY SAY</span>
                        <h2 class="font-weight-extra-bold line-height-1 mb-3">We Are Not Alone</h2>
                        <p class="lead mb-4">Our esteemed clients have made their opinions on the quality of our work.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-9 col-md-12 mx-auto double-carousel double-carousel-style-1" data-plugin-double-carousel data-plugin-options="{'autoplay': false, 'responsive': { '0': {'items': 1}, '479': {'items': 1}, '768': {'items': 1, 'dotsEach': 3}, '979': {'items': 2}, '1199': {'items': 3}}}">
                        <div class="nav bg-light-5">
                            <div class="title-left">
                                <span>Testimonials <span>&</span></span>
                            </div>
                            <div class="title-right">
                                <span>Partners</span>
                            </div>
                            <div class="arrows">
                                <div class="arrow-left">
                                    <i class="fas fa-chevron-left text-2"></i>
                                </div>
                                <div class="arrow-right">
                                    <i class="fas fa-chevron-right text-2"></i>
                                </div>
                            </div>
                        </div>
                        <div class="wrapper-left appear-animation" data-appear-animation="doubleCarouselFadeInRight">
                            <div class="owl-carousel owl">
                                <div>
                                    <div class="testimonial testimonial-style-3">
                                        <div class="card rounded border-0">
                                            <div class="card-body p-4">
                                                <div class="text-primary text-0 mb-1">
                                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                                </div>
                                                <p class="mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                <strong class="text-color-dark font-italic">John Doe</strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="testimonial testimonial-style-3">
                                        <div class="card rounded border-0">
                                            <div class="card-body p-4">
                                                <div class="text-primary text-0 mb-1">
                                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                                </div>
                                                <p class="mb-1">Lorem ipsum dolor sit amet, consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                <strong class="text-color-dark font-italic">Bob Doe</strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="testimonial testimonial-style-3">
                                        <div class="card rounded border-0">
                                            <div class="card-body p-4">
                                                <div class="text-primary text-0 mb-1">
                                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                                </div>
                                                <p class="mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                <strong class="text-color-dark font-italic">Monica Doe</strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="testimonial testimonial-style-3">
                                        <div class="card rounded border-0">
                                            <div class="card-body p-4">
                                                <div class="text-primary text-0 mb-1">
                                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                                </div>
                                                <p class="mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                <strong class="text-color-dark font-italic">Greg Doe</strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="testimonial testimonial-style-3">
                                        <div class="card rounded border-0">
                                            <div class="card-body p-4">
                                                <div class="text-primary text-0 mb-1">
                                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                                </div>
                                                <p class="mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                <strong class="text-color-dark font-italic">Robert Doe</strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="testimonial testimonial-style-3">
                                        <div class="card rounded border-0">
                                            <div class="card-body p-4">
                                                <div class="text-primary text-0 mb-1">
                                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                                </div>
                                                <p class="mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                <strong class="text-color-dark font-italic">Greg Doe</strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="testimonial testimonial-style-3">
                                        <div class="card rounded border-0">
                                            <div class="card-body p-4">
                                                <div class="text-primary text-0 mb-1">
                                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                                </div>
                                                <p class="mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                <strong class="text-color-dark font-italic">Robert Doe</strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wrapper-right appear-animation" data-appear-animation="doubleCarouselFadeInLeft">
                            <div class="owl-carousel owl">
                                <div>
                                    <div class="card card-logo rounded border-0">
                                        <div class="card-body p-0">
                                            <img src="<?php echo base_url(); ?>assets/img/logos/logo-2.png" class="img-fluid" alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="card card-logo rounded border-0">
                                        <div class="card-body p-0">
                                            <img src="<?php echo base_url(); ?>assets/img/logos/logo-3.png" class="img-fluid" alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="card card-logo rounded border-0">
                                        <div class="card-body p-0">
                                            <img src="<?php echo base_url(); ?>assets/img/logos/logo-5.png" class="img-fluid" alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="card card-logo rounded border-0">
                                        <div class="card-body p-0">
                                            <img src="<?php echo base_url(); ?>assets/img/logos/logo-6.png" class="img-fluid" alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="card card-logo rounded border-0">
                                        <div class="card-body p-0">
                                            <img src="<?php echo base_url(); ?>assets/img/logos/logo-7.png" class="img-fluid" alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="card card-logo rounded border-0">
                                        <div class="card-body p-0">
                                            <img src="<?php echo base_url(); ?>assets/img/logos/logo-8.png" class="img-fluid" alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="card card-logo rounded border-0">
                                        <div class="card-body p-0">
                                            <img src="<?php echo base_url(); ?>assets/img/logos/logo-9.png" class="img-fluid" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
			<div class="row pt-5 pb-5 mb-5" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
				<div class="col-lg-4">
					<div class="row">
						<div class="col-12 col-md-4 col-lg-12 mb-lg-4">
							<div class="icon-box icon-box-style-1">
								<div class="icon-box-icon icon-box-icon-no-top pt-1">
									<img width="32" src="img/icons/icon-4.svg" alt="" data-icon data-plugin-options="{'color': '#0F3964', 'animated': true, 'delay': 600}" />
									<span class="opacity-5 stick-icon">
										<img width="32" src="img/icons/icon-4.svg" alt="" data-icon data-plugin-options="{'color': '#0F3964', 'animated': true, 'delay': 600}" />
									</span>
								</div>
								<div class="icon-box-info mt-1">
									<div class="icon-box-info-title">
										<h3 class="font-weight-bold text-color-dark text-4 mb-0">Address</h3>
									</div>
									<p><? echo $sociallinks[5]->link; ?></p>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-4 col-lg-12 mb-lg-4">
							<div class="icon-box icon-box-style-1">
								<div class="icon-box-icon icon-box-icon-no-top pt-1">
									<img width="32" src="img/icons/icon-4.svg" alt="" data-icon data-plugin-options="{'color': '#0F3964', 'animated': true, 'delay': 600}" />
									<span class="opacity-5 stick-icon">
										<img width="32" src="img/icons/icon-4.svg" alt="" data-icon data-plugin-options="{'color': '#0F3964', 'animated': true, 'delay': 600}" />
									</span>
								</div>
								<div class="icon-box-info mt-1">
									<div class="icon-box-info-title">
										<h3 class="font-weight-bold text-color-dark text-4 mb-0">Email Address</h3>
									</div>
									<p><a href="mailto:<? echo $sociallinks[1]->link; ?>" class="font-weight-semibold"><? echo $sociallinks[1]->link; ?></a>
									</p>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-4 col-lg-12">
							<div class="icon-box icon-box-style-1">
								<div class="icon-box-icon icon-box-icon-no-top pt-1">
									<img width="32" src="img/icons/icon-4.svg" alt="" data-icon data-plugin-options="{'color': '#0F3964', 'animated': true, 'delay': 600}" />
									<span class="opacity-5 stick-icon">
										<img width="32" src="img/icons/icon-4.svg" alt="" data-icon data-plugin-options="{'color': '#0F3964', 'animated': true, 'delay': 600}" />
									</span>
								</div>
								<div class="icon-box-info mt-1">
									<div class="icon-box-info-title">
										<h3 class="font-weight-bold text-color-dark text-4 mb-0">Phone Number</h3>
									</div>
									<p>
										<a href="tel:+254<? echo substr($sociallinks[0]->link, -9); ?>" class="font-weight-semibold">
											<?php echo substr_replace(substr_replace($sociallinks[0]->link,' ', 4, 0),' ', 8, 0); ?>
										</a>
									</p>
								</div>
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
		<div class="footer-copyright footer-copyright-border-top bg-dark-5 py-5">
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
</div>