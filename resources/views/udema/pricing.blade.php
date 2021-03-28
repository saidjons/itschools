@extends('udema.partials.layout')

@section('body')
   <main>
	<section id="hero_in" class="general start_bg_zoom">
		<div class="wrapper">
		<div class="container">
			<h1 class="fadeInUp animated"><span></span>Pricing tables</h1>
		</div>
		</div>
	</section>
	<!--/hero_in-->

	 <section id="pricing" class="text-center">
        <div class="container">
          <div class="row">
            <div class="col">
              <label class="toggler toggler--is-active" id="filt-monthly">Monthly</label>
              <div class="toggle">
                <input type="checkbox" id="switcher" class="check">
                <b class="b switch"></b>
              </div>
              <label class="toggler" id="filt-yearly">Yearly</label>
            </div>
          </div>
          <div id="monthly" class="row mt-5">
            <!-- Table 1 -->
            <div class="col-lg-4 mb-5">
              <div class="card p-5 shadow aos-init aos-animate" data-aos="zoom-in">
                <h5 class="mb-0">Free</h5>
                <h2 class="text-primary my-3">$0</h2>
                <img src="images/index-2/table1.png" class="pt-0 pb-0 pr-5 pl-5 img-fluid" alt="Monthly plan">
                <p>Single Access</p>
                <p>With Ads</p>
                <p>48h Support</p>
                <a class="btn btn-primary btn-medium" href="#contact">Get Started</a>
              </div>
            </div>
            <!-- Table 2 -->
            <div class="col-lg-4 mb-5">
              <div class="card p-5 shadow aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
                <h5 class="mb-0">Standard</h5>
                <h2 class="text-primary my-3">$29</h2>
                <img src="images/index-2/table2.png" class="pt-0 pb-0 pr-5 pl-5 img-fluid" alt="Monthly plan">
                <p>Single Access</p>
                <p>No Ads</p>
                <p>24h Support</p>
                <a class="btn btn-primary btn-medium" href="#contact">Get Started</a>
              </div>
            </div>
            <!-- Table 3 -->
            <div class="col-lg-4 mb-5">
              <div class="card p-5 shadow aos-init aos-animate" data-aos="zoom-in" data-aos-delay="150">
                <h5 class="mb-0">Premium</h5>
                <h2 class="text-primary my-3">$59</h2>
                <img src="images/index-2/table3.png" class="pt-0 pb-0 pr-5 pl-5 img-fluid" alt="Monthly plan">
                <p>Team Access</p>
                <p>No Ads</p>
                <p>Extreme Support</p>
                <a class="btn btn-primary btn-medium" href="#contact">Get Started</a>
              </div>
            </div>
          </div>
          <div id="yearly" class="hide row mt-5">
            <!-- Table 1 -->
            <div class="col-lg-4 mb-5">
              <div class="card p-5 shadow aos-init aos-animate" data-aos="zoom-in">
                <h5 class="mb-0">Free</h5>
                <h2 class="text-primary my-3">$0</h2>
                <img src="images/index-app/table1.png" class="pt-0 pb-0 pr-5 pl-5 img-fluid" alt="Monthly plan">
                <p>Single Access</p>
                <p>With Ads</p>
                <p>48h Support</p>
                <a class="btn btn-primary btn-medium" href="#contact">Get Started</a>
              </div>
            </div>
            <!-- Table 2 -->
            <div class="col-lg-4 mb-5">
              <div class="card p-5 shadow aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
                <h5 class="mb-0">Standard</h5>
                <h2 class="text-primary my-3">$199</h2>
                <img src="images/index-app/table2.png" class="pt-0 pb-0 pr-5 pl-5 img-fluid" alt="Monthly plan">
                <p>Single Access</p>
                <p>No Ads</p>
                <p>24h Support</p>
                <a class="btn btn-primary btn-medium" href="#contact">Get Started</a>
              </div>
            </div>
            <!-- Table 3 -->
            <div class="col-lg-4 mb-5">
              <div class="card p-5 shadow aos-init aos-animate" data-aos="zoom-in" data-aos-delay="150">
                <h5 class="mb-0">Premium</h5>
                <h2 class="text-primary my-3">$399</h2>
                <img src="images/index-app/table3.png" class="pt-0 pb-0 pr-5 pl-5 img-fluid" alt="Monthly plan">
                <p>Team Access</p>
                <p>No Ads</p>
                <p>Extreme Support</p>
                <a class="btn btn-primary btn-medium" href="#contact">Get Started</a>
              </div>
            </div>
          </div>
        </div>
      </section>

		
	<!-- /container -->
	
	<div class="bg_color_1">
		<div class="container margin_60_35">
			<div class="row">
				<div class="col-md-6">
					<div class="box_faq">
						<i class="icon_info_alt"></i>
						<h4>Porro soleat pri ex, at has lorem accusamus?</h4>
						<p>Ut unum diceret eos, mel cu velit principes, ut quo inani dolorem mediocritatem. Mea in justo posidonium necessitatibus. Augue honestatis vis no, ius quot mazim forensibus in, per sale virtute legimus ne. Mea dicta facilisis eu.</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="box_faq">
						<i class="icon_info_alt"></i>
						<h4>Ut quo inani dolorem mediocritatem?</h4>
						<p>Ut unum diceret eos, mel cu velit principes, ut quo inani dolorem mediocritatem. Mea in justo posidonium necessitatibus. Augue honestatis vis no, ius quot mazim forensibus in, per sale virtute legimus ne. Mea dicta facilisis eu.</p>
					</div>
				</div>
			</div>
			<!-- /row  -->
			<div class="row">
				<div class="col-md-6">
					<div class="box_faq">
						<i class="icon_info_alt"></i>
						<h4>Per sale virtute legimus ne?</h4>
						<p>Ut unum diceret eos, mel cu velit principes, ut quo inani dolorem mediocritatem. Mea in justo posidonium necessitatibus. Augue honestatis vis no, ius quot mazim forensibus in, per sale virtute legimus ne. Mea dicta facilisis eu.</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="box_faq">
						<i class="icon_info_alt"></i>
						<h4>Mea in justo posidonium necessitatibus?</h4>
						<p>Ut unum diceret eos, mel cu velit principes, ut quo inani dolorem mediocritatem. Mea in justo posidonium necessitatibus. Augue honestatis vis no, ius quot mazim forensibus in, per sale virtute legimus ne. Mea dicta facilisis eu.</p>
					</div>
				</div>
			</div>
			<!-- /row  -->
		</div>
		<!--/container-->
	</div>
	<!--/bg_color_1-->
	</main>
    
@endsection