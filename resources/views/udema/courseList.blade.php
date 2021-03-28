@extends('udema.partials.layout')

@push('css')
    /*! CSS Used from: http://example.test/unzippedHTML/cando/css/style.css */
*,*::before,*::after{box-sizing:border-box;}
main,section{display:block;}
h2,h3,h5{margin-top:0;margin-bottom:0.5rem;}
p{margin-top:0;margin-bottom:1rem;}
b{font-weight:bolder;}
a{color:#d500f9;text-decoration:none;background-color:transparent;}
a:hover{color:#9400ad;text-decoration:underline;}
img{vertical-align:middle;border-style:none;}
label{display:inline-block;margin-bottom:0.5rem;}
input{margin:0;font-family:inherit;font-size:inherit;line-height:inherit;}
input{overflow:visible;}
input[type="checkbox"]{box-sizing:border-box;padding:0;}
h2,h3,h5{margin-bottom:0.5rem;font-weight:500;line-height:1.2;}
h2{font-size:2rem;}
@media (max-width: 1200px){
h2{font-size:calc(1.325rem + 0.9vw);}
}
h3{font-size:1.75rem;}
@media (max-width: 1200px){
h3{font-size:calc(1.3rem + 0.6vw);}
}
h5{font-size:1.25rem;}
.img-fluid{max-width:100%;height:auto;}
.container{width:100%;padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto;}
@media (min-width: 576px){
.container{max-width:540px;}
}
@media (min-width: 768px){
.container{max-width:720px;}
}
@media (min-width: 992px){
.container{max-width:960px;}
}
@media (min-width: 1200px){
.container{max-width:1140px;}
}
@media (min-width: 576px){
.container{max-width:540px;}
}
@media (min-width: 768px){
.container{max-width:720px;}
}
@media (min-width: 992px){
.container{max-width:960px;}
}
@media (min-width: 1200px){
.container{max-width:1140px;}
}
.row{display:flex;flex-wrap:wrap;margin-right:-15px;margin-left:-15px;}
.col,.col-md-3,.col-lg-4{position:relative;width:100%;padding-right:15px;padding-left:15px;}
.col{flex-basis:0;flex-grow:1;max-width:100%;}
@media (min-width: 768px){
.col-md-3{flex:0 0 25%;max-width:25%;}
}
@media (min-width: 992px){
.col-lg-4{flex:0 0 33.33333%;max-width:33.33333%;}
}
.btn{display:inline-block;font-weight:400;color:#7a7a7a;text-align:center;vertical-align:middle;cursor:pointer;user-select:none;background-color:transparent;border:1px solid transparent;padding:0.375rem 0.75rem;font-size:1rem;line-height:1.5;border-radius:0.25rem;transition:color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;}
@media (prefers-reduced-motion: reduce){
.btn{transition:none;}
}
.btn:hover{color:#7a7a7a;text-decoration:none;}
.btn:focus{outline:0;box-shadow:0 0 0 0.2rem rgba(213, 0, 249, 0.25);}
.btn:disabled{opacity:0.65;}
.btn-primary{color:#ffffff;background-color:#d500f9;border-color:#d500f9;}
.btn-primary:hover{color:#ffffff;background-color:#b400d3;border-color:#a900c6;}
.btn-primary:focus{color:#ffffff;background-color:#b400d3;border-color:#a900c6;box-shadow:0 0 0 0.2rem rgba(219, 38, 250, 0.5);}
.btn-primary:disabled{color:#ffffff;background-color:#d500f9;border-color:#d500f9;}
.btn-white{color:#212529;background-color:#ffffff;border-color:#ffffff;}
.btn-white:hover{color:#212529;background-color:#ececec;border-color:#e6e6e6;}
.btn-white:focus{color:#212529;background-color:#ececec;border-color:#e6e6e6;box-shadow:0 0 0 0.2rem rgba(222, 222, 223, 0.5);}
.btn-white:disabled{color:#212529;background-color:#ffffff;border-color:#ffffff;}
.card{position:relative;display:flex;flex-direction:column;min-width:0;word-wrap:break-word;background-color:#ffffff;background-clip:border-box;border:1px solid rgba(0, 0, 0, 0.125);border-radius:0.25rem;}
.bg-primary{background-color:#d500f9!important;}
.bg-light-grey{background-color:#fafafa!important;}
.shadow{box-shadow:0 0.5rem 1rem rgba(0, 0, 0, 0.15)!important;}
.mb-0{margin-bottom:0!important;}
.mt-1{margin-top:0.25rem!important;}
.my-3{margin-top:1rem!important;}
.mb-3,.my-3{margin-bottom:1rem!important;}
.mt-5{margin-top:3rem!important;}
.mb-5{margin-bottom:3rem!important;}
.pt-0{padding-top:0!important;}
.pb-0{padding-bottom:0!important;}
.p-5{padding:3rem!important;}
.pr-5{padding-right:3rem!important;}
.pl-5{padding-left:3rem!important;}
.text-center{text-align:center!important;}
.text-white{color:#ffffff!important;}
.text-primary{color:#d500f9!important;}
.text-white{color:#ffffff!important;}
@media print{
*,*::before,*::after{text-shadow:none!important;box-shadow:none!important;}
img{page-break-inside:avoid;}
p,h2,h3{orphans:3;widows:3;}
h2,h3{page-break-after:avoid;}
.container{min-width:992px!important;}
}
.text-white{color:#ffffff;}
.text-white h3,.text-white h5{color:#ffffff;}
.text-primary{color:#d500f9;}
p{margin:20px 0;}
b{font-weight:600;}
a{color:#d500f9;text-decoration:none;-webkit-transition:all 0.4s ease-in-out;-ms-transition:all 0.4s ease-in-out;transition:all 0.4s ease-in-out;-o-transition:all 0.4s ease-in-out;-moz-transition:all 0.4s ease-in-out;}
a:hover{color:#d500f9;text-decoration:none;}
h2,h3,h5{color:#282828;font-family:"Nunito", sans-serif;font-weight:800;letter-spacing:0;line-height:1.2;margin:2.0625rem 0;}
h2{font-size:3.85rem;}
h3{font-size:3.3rem;}
h5{font-size:1.65rem;}
.btn{outline:none!important;margin-top:10px;margin-bottom:10px;letter-spacing:0.1em;line-height:2rem;border-radius:2rem;border:none;box-shadow:0 3px 6px rgba(0, 0, 0, 0.06), 0 3px 6px rgba(0, 0, 0, 0.09);}
.btn:focus{border-color:0;}
.btn:hover{box-shadow:0 19px 38px rgba(0, 0, 0, 0.07), 0 15px 12px rgba(0, 0, 0, 0.1);}
.btn.btn-white{color:#282828;background:#ffffff;}
.btn.btn-white:hover,.btn.btn-white:focus{background:#ffffff;color:#282828;}
.btn.btn-primary{color:#ffffff;background-color:#d500f9;}
.btn.btn-primary:hover{color:#ffffff;background-color:#d500f9;}
.btn.btn-large{padding:0.75rem 2rem;font-size:1.21rem;}
.btn.btn-medium{padding:0.5rem 1.5rem;font-size:1.1rem;}
.card{position:relative;display:block;min-width:0;word-wrap:break-word;background-color:#ffffff;background-clip:border-box;border:1px solid #eeeeee;border-radius:0.5rem;}
.toggle,.toggler{display:inline-block;vertical-align:middle;margin:10px;}
.toggler{color:#ddd;transition:.2s;font-weight:bold;}
.toggler--is-active{color:#d500f9;}
.b{display:block;}
.toggle{position:relative;width:80px;height:35px;border-radius:100px;background-color:#d500f9;overflow:hidden;box-shadow:inset 0 0 2px 1px rgba(0, 0, 0, 0.05);}
.check{position:absolute;display:block;cursor:pointer;top:0;left:0;width:100%;height:100%;opacity:0;z-index:6;}
.check:checked ~ .switch{right:2px;left:57.5%;transition:0.25s cubic-bezier(0.785, 0.135, 0.15, 0.86);transition-property:left, right;transition-delay:.08s, 0s;}
.switch{position:absolute;left:2px;top:2px;bottom:2px;right:57.5%;background-color:#ffffff;border-radius:36px;z-index:1;transition:0.25s cubic-bezier(0.785, 0.135, 0.15, 0.86);transition-property:left, right;transition-delay:0s, .08s;box-shadow:0 1px 2px rgba(0, 0, 0, 0.2);}
.hide{display:none;}
*:focus{outline:none!important;}
@media (max-width: 576px){
h2{font-size:2.75rem;}
h3{font-size:2.2rem;}
h5{font-size:1.65rem;}
}
[data-aos][data-aos][data-aos-delay='100']{transition-delay:0s;}
[data-aos][data-aos][data-aos-delay='100'].aos-animate{transition-delay:100ms;}
[data-aos][data-aos][data-aos-delay='150']{transition-delay:0s;}
[data-aos][data-aos][data-aos-delay='150'].aos-animate{transition-delay:150ms;}
[data-aos][data-aos][data-aos-delay='200']{transition-delay:0s;}
[data-aos][data-aos][data-aos-delay='200'].aos-animate{transition-delay:200ms;}
body[data-aos-duration='400'] [data-aos]{transition-duration:400ms;}
[data-aos]{pointer-events:none;}
[data-aos].aos-animate{pointer-events:auto;}
body[data-aos-easing="ease"] [data-aos]{transition-timing-function:cubic-bezier(0.25, 0.1, 0.25, 1);}
@media screen{
html:not(.no-js) [data-aos^='zoom'][data-aos^='zoom']{opacity:0;transition-property:opacity, transform;}
html:not(.no-js) [data-aos^='zoom'][data-aos^='zoom'].aos-animate{opacity:1;transform:translate3d(0, 0, 0) scale(1);}
html:not(.no-js) [data-aos='zoom-in']{transform:scale(0.6);}
}
section{padding:120px 0;position:relative;overflow:hidden;}
.section-80 section{padding:80px 0;position:relative;}
.mb-0{margin-bottom:0px!important;}
.pt-0{padding-top:0px!important;}
.pt-120{padding-top:120px!important;}
.pb-0{padding-bottom:0px!important;}
.pb-120{padding-bottom:120px!important;}
/*! CSS Used fontfaces */
@font-face{font-family:'Nunito';font-style:italic;font-weight:400;font-display:swap;src:url(https://fonts.gstatic.com/s/nunito/v16/XRXX3I6Li01BKofIMNaORs71cA.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}
 
 
@endpush

@section('body')
 <main>
		<section id="hero_in" class="courses start_bg_zoom">
			<div class="wrapper">
				<div class="container">
					<h1 class="fadeInUp animated"><span></span>Online courses</h1>
				</div>
			</div>
		</section>
		<!--/hero_in-->
        {{-- pricing table start  --}}
            <main>

      <!-- Pricing Tables -->
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

      <!-- Pricing tables -->
      <section id="pricing-tables" class="bg-light-grey text-center">
        <div class="container">
          <div class="row">
            <!-- Table 1 -->
            <div class="col-md-3">
              <div class="card p-5 shadow aos-init aos-animate" data-aos="zoom-in">
                <h5 class="mb-0">Free</h5>
                <h3 class="text-primary my-3">$0</h3>
                <p>Single Access</p>
                <p>With Ads</p>
                <p>48h Support</p>
                <a class="btn btn-primary btn-medium" href="#contact">Buy</a>
              </div>
            </div>
            <!-- Table 2 -->
            <div class="col-md-3">
              <div class="card p-5 shadow aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
                <h5 class="mb-0">Standard</h5>
                <h3 class="text-primary my-3">$119</h3>
                <p>Single Access</p>
                <p>No Ads</p>
                <p>24h Support</p>
                <a class="btn btn-primary btn-medium" href="#contact">Buy</a>
              </div>
            </div>
            <!-- Table 3 -->
            <div class="col-md-3">
              <div class="card p-5 shadow aos-init aos-animate" data-aos="zoom-in" data-aos-delay="150">
                <h5 class="mb-0">Premium</h5>
                <h3 class="text-primary my-3">$399</h3>
                <p>Team Access</p>
                <p>No Ads</p>
                <p>Extreme Support</p>
                <a class="btn btn-primary btn-medium" href="#contact">Buy</a>
              </div>
            </div>
            <!-- Table 4 -->
            <div class="col-md-3">
              <div class="card p-5 shadow aos-init aos-animate" data-aos="zoom-in" data-aos-delay="200">
                <h5 class="mb-0">Extreme</h5>
                <h3 class="text-primary my-3">$999</h3>
                <p>Team Access</p>
                <p>No Ads</p>
                <p>Extreme Support</p>
                <a class="btn btn-primary btn-medium" href="#contact">Buy</a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- CTA -->
      <section id="cta" class="bg-primary pt-120 pb-120 text-white text-center">
        <div class="container">
          <div class="row">
            <div class="col">
              <h5 class="mb-3">Be Awesome</h5>
              <h3 class="mt-1">Launch your brand the right way with Cando!</h3>
              <a class="btn btn-white btn-large" href="#contact">Get started</a>
            </div>
          </div>
        </div>
      </section>

    </main>


        {{-- pricing table end --}}
	 
		<!-- /filters -->

		<div class="container margin_60_35">
			<div class="box_list wow animated" style="visibility: visible;">
				<div class="row no-gutters">
					<div class="col-lg-5">
						<figure class="block-reveal">
							<div class="block-horizzontal"></div>
							<a href="course-detail.html"><img src="http://via.placeholder.com/800x533/ccc/fff/course__list_1.jpg" class="img-fluid" alt=""></a>
							<div class="preview"><span>Preview course</span></div>
						</figure>
					</div>
					<div class="col-lg-7">
						<div class="wrapper">
							<a href="#0" class="wish_bt"></a>
							<div class="price">$39</div>
							<small>Category</small>
							<h3>Persius delenit has cu</h3>
							<p>Dicam diceret ut ius, no epicuri dissentiet philosophia vix. Usu decore percipitur definitiones ex, nihil utinam recusabo mel no. </p>
							<div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></div>
						</div>
						<ul>
							<li><i class="icon_clock_alt"></i> 1h 30min</li>
							<li><i class="icon_like"></i> 890</li>
							<li><a href="course-detail.html">Enroll now</a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /box_list -->
			<div class="box_list wow animated" style="visibility: visible;">
				<div class="row no-gutters">
					<div class="col-lg-5">
						<figure class="block-reveal">
							<div class="block-horizzontal"></div>
							<a href="course-detail.html"><img src="http://via.placeholder.com/800x533/ccc/fff/course__list_2.jpg" class="img-fluid" alt=""></a>
							<div class="preview"><span>Preview course</span></div>
						</figure>
					</div>
					<div class="col-lg-7">
						<div class="wrapper">
							<a href="#0" class="wish_bt"></a>
							<div class="price">$25</div>
							<small>Category</small>
							<h3>At deseruisse scriptorem</h3>
							<p>Dicam diceret ut ius, no epicuri dissentiet philosophia vix. Id usu zril tacimates neglegentur. Eam id legimus torquatos cotidieque, usu decore percipitur definitiones ex, nihil utinam recusabo mel no. </p>
							<div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></div>
						</div>
						<ul>
							<li><i class="icon_clock_alt"></i> 1h 30min</li>
							<li><i class="icon_like"></i> 890</li>
							<li><a href="course-detail.html">Enroll now</a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /box_list -->
			<div class="box_list wow" style="visibility: hidden; animation-name: none;">
				<div class="row no-gutters">
					<div class="col-lg-5">
						<figure class="block-reveal">
							<div class="block-horizzontal"></div>
							<a href="course-detail.html"><img src="http://via.placeholder.com/800x533/ccc/fff/course__list_3.jpg" class="img-fluid" alt=""></a>
							<div class="preview"><span>Preview course</span></div>
						</figure>
					</div>
					<div class="col-lg-7">
						<div class="wrapper">
							<a href="#0" class="wish_bt"></a>
							<div class="price">$120</div>
							<small>Category</small>
							<h3>Ea vel semper quaerendum</h3>
							<p>Dicam diceret ut ius, no epicuri dissentiet philosophia vix. Id usu zril tacimates neglegentur. Eam id legimus torquatos cotidieque, usu decore percipitur definitiones ex, nihil utinam recusabo mel no. </p>
							<div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></div>
						</div>
						<ul>
							<li><i class="icon_clock_alt"></i> 1h 30min</li>
							<li><i class="icon_like"></i> 890</li>
							<li><a href="course-detail.html">Enroll now</a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /box_list -->
			<div class="box_list wow" style="visibility: hidden; animation-name: none;">
				<div class="row no-gutters">
					<div class="col-lg-5">
						<figure class="block-reveal">
							<div class="block-horizzontal"></div>
							<a href="course-detail.html"><img src="http://via.placeholder.com/800x533/ccc/fff/course__list_4.jpg" class="img-fluid" alt=""></a>
							<div class="preview"><span>Preview course</span></div>
						</figure>
					</div>
					<div class="col-lg-7">
						<div class="wrapper">
							<a href="#0" class="wish_bt"></a>
							<div class="price">$54</div>
							<small>Category</small>
							<h3>Ei has exerci graecis</h3>
							<p>Dicam diceret ut ius, no epicuri dissentiet philosophia vix. Id usu zril tacimates neglegentur. Eam id legimus torquatos cotidieque, usu decore percipitur definitiones ex, nihil utinam recusabo mel no. </p>
							<div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></div>
						</div>
						<ul>
							<li><i class="icon_clock_alt"></i> 1h 30min</li>
							<li><i class="icon_like"></i> 890</li>
							<li><a href="course-detail.html">Enroll now</a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /box_list -->
			<div class="box_list wow" style="visibility: hidden; animation-name: none;">
				<div class="row no-gutters">
					<div class="col-lg-5">
						<figure class="block-reveal">
							<div class="block-horizzontal"></div>
							<a href="course-detail.html"><img src="http://via.placeholder.com/800x533/ccc/fff/course__list_5.jpg" class="img-fluid" alt=""></a>
							<div class="preview"><span>Preview course</span></div>
						</figure>
					</div>
					<div class="col-lg-7">
						<div class="wrapper">
							<a href="#0" class="wish_bt"></a>
							<div class="price">$60</div>
							<small>Category</small>
							<h3>Decore tractatos</h3>
							<p>Dicam diceret ut ius, no epicuri dissentiet philosophia vix. Id usu zril tacimates neglegentur. Eam id legimus torquatos cotidieque, usu decore percipitur definitiones ex, nihil utinam recusabo mel no. </p>
							<div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></div>
						</div>
						<ul>
							<li><i class="icon_clock_alt"></i> 1h 30min</li>
							<li><i class="icon_like"></i> 890</li>
							<li><a href="course-detail.html">Enroll now</a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /box_list -->
			<p class="text-center add_top_60"><a href="#0" class="btn_1">Load more</a></p>
		</div>
		<!-- /container -->
		<div class="bg_color_1">
			<div class="container margin_60_35">
				<div class="row">
					<div class="col-md-4">
						<a href="#0" class="boxed_list">
							<i class="pe-7s-help2"></i>
							<h4>Need Help? Contact us</h4>
							<p>Cum appareat maiestatis interpretaris et, et sit.</p>
						</a>
					</div>
					<div class="col-md-4">
						<a href="#0" class="boxed_list">
							<i class="pe-7s-wallet"></i>
							<h4>Payments and Refunds</h4>
							<p>Qui ea nemore eruditi, magna prima possit eu mei.</p>
						</a>
					</div>
					<div class="col-md-4">
						<a href="#0" class="boxed_list">
							<i class="pe-7s-note2"></i>
							<h4>Quality Standards</h4>
							<p>Hinc vituperata sed ut, pro laudem nonumes ex.</p>
						</a>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /bg_color_1 -->
	</main>
@endsection