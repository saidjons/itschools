@extends('layouts.tail',['title'=>'Tez Kunda'])

{{-- https://play.tailwindcss.com/vGWFE7mTsv?layout=horizontal --}}

@push('css')
@include('tui.partials.landing-css')
    
@endpush
@section('content')

   
<div class="min-h-screen bg-light">
   {{-- @include('tui.partials.nav') --}}
  
    <div class="mb-10">
      <!-- <header>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <h1 class="text-3xl font-bold leading-tight text-gray-900">
            Dashboard
          </h1>
        </div>
      </header> -->
      <main>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <!-- Replace with your content -->
          <div class="px-4 py-8 sm:px-0">
            <!-- landing top start  -->
       <div class="sbbs-data-analytics-area mg-top-45">
      <div class="container">
          <div class="row">
              <div class="col-xl-5 col-lg-6 desktop-center-item">
                  <div class="desktop-center-area">
                      <div class="section-title style-two text-lg-left text-center">
                          <h2 class="title"> Programmalash<br>tirishni <br> o'rganing noldan boshlab</h2>
                           
                      </div>
                      <div class="row">
                          <div class="col-lg-9">
                              <div class="riyaqas-check-list media">
                                  <img class="media-left" src="/img/landing/pencil.svg" alt="check">
                                  <span>Video kursga qo'shimcha ravishda scriptni yozma tarzda ham oling</span>
                              </div>
                              <div class="riyaqas-check-list media">
                                  <img class="media-left" src="/img/landing/search.svg" alt="check">
                                  <span>Tushunmagapsizmi , bizning Q&A sistamamiz barcha savollaringizga javob topadi</span>
                              </div>
                              <div class="riyaqas-check-list media mg-bottom-0-991">
                                  <img class="media-left" src="/img/landing/settings.svg" alt="check">
                                  <span>Kurslarni o'z bo'sh vaqtingizda o'rganing</span>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-7 col-lg-6 mt-10">
                  <img src="/img/landing/atr2.png">
              </div>
          </div>
      </div>
  </div>
          <!-- landing top end  -->
  
  
  <!-- start top design  -->
    {{-- <section class="why-choose-sec padding-bottom-none bg-light-blue-400 text-white"><div class="container larg-container"><div class="row">  <div class="col-sm-12 col-md-5 col-lg-3 hidden-sm hidden-xs"><img class="msd-lazyload clutch-logo loaded" src="assets/images/home-clutch-logo2021.png" data-src="assets/images/home-clutch-logo2021.png" data-img-ratio="374:426" alt="clutch" style="opacity: 1;"></div>  <div class="col-sm-12 col-md-7 col-lg-9"><div class="row"><div class="col-sm-12 col-md-12"><h2 class="margin-bottom-15"><span>TOP WEBSITE DESIGN COMPANY IN INDIA</span></h2>  <p class="margin-bottom-25">As a top-rated website design company in India, we strategize the digital footprint of cross-business verticals. Our speciality is to craft a conversion-worthy digital touchpoint with a seamless blend of strategic vision, advanced technology and industry exposure. Here’s why you should choose us.</p></div><div class="col-sm-12"><div class="row"><div class="col-sm-6"><div class="why-us-pnl wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.0s"><div class="why-icon year home-why-icon-set experience-icon"><img class="msd-lazyload loaded" src="assets/images/home-15-years.jpg" data-src="assets/images/home-15-years.jpg" data-img-ratio="45:41" alt="15 years" style="opacity: 1;"></div><div class="why-pnl"><h3>Extensive Experience</h3><p>Thousands of projects completed for clients globally.</p></div></div></div><div class="col-sm-6"><div class="why-us-pnl"><div class="why-icon year home-why-icon-set global-icon"><span class="icon-Globe"></span></div><div class="why-pnl wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.0s"><h3>Global Clientèle</h3><p>Our services attract clients across 32+ countries of the world.</p></div></div></div></div><div class="row"><div class="col-sm-6"><div class="why-us-pnl wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.0s"><div class="why-icon year home-why-icon-set cost-icon"><span class="icon-Dollar"></span></div><div class="why-pnl"><h3>Cost Effectiveness</h3><p>We offer services at very reasonable price points.</p></div></div></div><div class="col-sm-6"><div class="why-us-pnl wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.0s"><div class="why-icon year home-why-icon-set dev-icon"><span class="icon-Developer"></span></div><div class="why-pnl"><h3>150+ Developers</h3><p>A large, skilled and experienced team for your projects.</p></div></div></div></div></div></div></div></div></div></section> --}}
  <!-- end top design -->
  
  <!-- start savollar -->
    <section class="bnx-margin_section">
    
  <div class="container custom">
      <h2 class="bnx-title item text-left text-md-center">
          Nima uchun bizni tanlashingiz kerak? </h2>
      <div class="row">
                                              <div class="col-12 col-md-6 col-lg-4 faq-card">
                      <div class="faq-card__title d-flex align-items-center">
                           <img width='39px' height='42px' class="faq-card__icon" 
                            src="/img/landing/js.png" alt=""> 
                            {{-- <img width="39px" height="42px" class="faq-card__icon ls-is-cached lazyloaded" src="https://dspfdd2n9fb8f.cloudfront.net/wp-content/uploads/2020/05/question__liquidity__icon.svg" data-src="https://dspfdd2n9fb8f.cloudfront.net/wp-content/uploads/2020/05/question__liquidity__icon.svg" alt=""> --}}
                          <span class="faq-card__head"> Javascript</span>
                      </div>
                      <div class="d-flex flex-column position-relative">
                          <hr class="faq-card__hr">
                          <hr class="faq-card__hr__active position-absolute">
                      </div>
                      <div class="faq-card__content">
                          <span class="faq-card__desc">
                                
                            JavaScript web dasturlash tilinging eng asosiy qurolidan biri bo'lib, 99%  hozirgi kundagi mavjud
                            websitelarda 
                            shu tildan foydalanilgan. Javascript dasturchilari 
                            ko'p talab qilinadigan dasturchilardan biri hisoblaniladi.

                        </span>
                      </div>
                      <div class="faq-card__url">
                                                    
                                                  </div>
                  </div>
                                  <div class="col-12 col-md-6 col-lg-4 faq-card">
                      <div class="faq-card__title d-flex align-items-center">
                           
                              <img width='39px' height='42px' class="faq-card__icon" 
                            src="img/landing/php.png" alt=""> 
                            
                            {{-- <img width="39px" height="42px" class="faq-card__icon lazyloaded" src="https://dspfdd2n9fb8f.cloudfront.net/wp-content/uploads/2020/05/question__legal__icon.svg" data-src="https://dspfdd2n9fb8f.cloudfront.net/wp-content/uploads/2020/05/question__legal__icon.svg" alt=""> --}}
                          <span class="faq-card__head"> PHP</span>
                      </div>
                      <div class="d-flex flex-column position-relative">
                          <hr class="faq-card__hr">
                          <hr class="faq-card__hr__active position-absolute">
                      </div>
                      <div class="faq-card__content">
                          <span class="faq-card__desc">
                              PHP - bu server bilan ishlaydigan biri bo'lib, katta websitelarni mashtablashtirish qobiliyatiga egadir.
                              W3Techs ma'lumotlariga ko'ra, PHP server bilan ishlaydigan  barcha veb-saytlarning 
                              78,9% tomonidan qo'llaniladi.
                               Shunday qilib, Internetga kirgan har 10 veb-saytning deyarli 8 tasi qandaydir tarzda PHP-dan foydalanmoqda.           
                            
                            </span>
                      </div>
                      <div class="faq-card__url">
                                              </div>
                  </div>
                                  <div class="col-12 col-md-6 col-lg-4 faq-card">
                      <div class="faq-card__title d-flex align-items-center">
                              <img width='39px' height='42px' class="faq-card__icon" 
                              src="/img/landing/mysql.png" alt="">
                          <span class="faq-card__head"> MYSQL</span>
                      </div>
                      <div class="d-flex flex-column position-relative">
                          <hr class="faq-card__hr">
                          <hr class="faq-card__hr__active position-absolute">
                      </div>
                      <div class="faq-card__content">
                          <span class="faq-card__desc">
                              MYSQL -bu ma'lumotlarni saqlovchi dasturiy ta'minot bo'lib, u bepulligi va ajoyib funksiyalari bilan
                              ajralib turadi.
                           MYSQL ko'plab shaxsiy va biznes loyihalar uchun ishlatiladi. Avzalligi -uning sodda va ishonchliligidadir.
                                   
                               </span>
                      </div>
                      <div class="faq-card__url">
                      
  
                                                  </div>
                  </div>
                                  <div class="col-12 col-md-6 col-lg-4 faq-card">
                      <div class="faq-card__title d-flex align-items-center">
                              <img width='39px' height='42px' class="faq-card__icon" 
                              src="/img/landing/vue.webp" alt="">
                          <span class="faq-card__head">   Vue.js</span>
                      </div>
                      <div class="d-flex flex-column position-relative">
                          <hr class="faq-card__hr">
                          <hr class="faq-card__hr__active position-absolute">
                      </div>
                      <div class="faq-card__content">
                          <span class="faq-card__desc">
                              Vue.js Javascript frameworklaridan biridir. U web dasturchilarga javascript bilan ishlashni osonlashtiradi.

                                
                                </span>
                      </div>

                      <div class="faq-card__url">
                                              </div>
                  </div>
                                  <div class="col-12 col-md-6 col-lg-4 faq-card">
                      <div class="faq-card__title d-flex align-items-center">
                              <img width='39px' height='42px' class="faq-card__icon" 
                            src="/img/landing/lara.png" alt="">
                          <span class="faq-card__head"> Laravel </span>
                      </div>
                      <div class="d-flex flex-column position-relative">
                          <hr class="faq-card__hr">
                          <hr class="faq-card__hr__active position-absolute">
                      </div>
                      <div class="faq-card__content">
                          <span class="faq-card__desc">
                            
                            Laravel - bu veb-ilovalarni yaratish uchun eng mashhur PHP frameworklaridan biridir.  Laravel web dasturchilarga 
                            o'z veb-saytlarini tez va qiyinchiliklarsiz qurishga imkon beradi. 
                            Bundan tashqari, bu juda ravon, foydalanuvchilar uchun qulay va o'rganish va tushunish osonligi bilan ajralib turadi.
                                                                                       
                                </span>
                      </div>
                      <div class="faq-card__url">
                                                       
  
                                                  </div>
                  </div>
                                  <div class="col-12 col-md-6 col-lg-4 faq-card">
                      <div class="faq-card__title d-flex align-items-center">
                              <img width='39px' height='42px' class="faq-card__icon" 
                              src="/img/landing/search.png" alt="">
                          <span class="faq-card__head"> Search engine</span>
                      </div>
                      <div class="d-flex flex-column position-relative">
                          <hr class="faq-card__hr">
                          <hr class="faq-card__hr__active position-absolute">
                      </div>
                      <div class="faq-card__content">
                          <span class="faq-card__desc">
                        
                            Search engine bazadagi ma'lumotlarni qidirib topishda qo'llaniladigan texnologiyalardan biridir.
                            Bu qismda millionlab ma'lumotlarni milisekund ichida topishni o'rganasiz.
                        
                        </span>
                      </div>
                      <div class="faq-card__url">
                                                      
  
                                                  </div>
                  </div>
                      </div>
  </div>
  </section>
  <!-- end savollar -->
  
  <!-- start admin feature -->
  {{-- <div class="row mt50">
    <div class="col-xs-12">
        <div id="advantage" class="image" style="background-image: url(img/update/index/adv_bg_globe.png), url(img/update/index/adv_bg_gray_curve.png)">
            <div class="container">
                <div class="double-bg layout-parent rel d-flex">
                    <div class="left-side ">
                        <div class="main-title-block w60pr">
                            <h2 class="pb20 mb0 fs36r fw700">See our software<br> in action</h2>
                            <p>Explore unlimited customization abilities for your server<br> letting you tailor our software for your personal needs</p>
                        </div>
                        <div class="two-text-blocks-block pt40 d-flex">
                            <div class="one-text-block mr20">
                                <i class="icon-w-shadow">
                                    <img src="/img/landing/help.png" width="32px" height="23px"  alt="">
 
</i>
                                <h3 class="mt30 fw600">Cutting-Edge Technologies</h3>
                                <p>Web hosting environments are constantly evolving. DirectAdmin stays in-step with today’s most sophisticated solutions. </p>
                                
                            </div>
                            <div class="one-text-block">
                                <i class="icon-w-shadow"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32px" height="32px">
<image x="0px" y="0px" width="32px" height="32px" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABZVBMVEUMgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq7///+whx6GAAAAdXRSTlMACsT87UsW/fPDVMejq/cbi7va5D/IOIoEjPn+eaJGoK7hd7jjPLkS+uBajt+GDErwVwghptzv7JNnAvFqyxmddl9i9vWbDojBMOfQ+0itvzPrnqkxhCWqH3GcF/Tyf8bu3c/FdAZ6FL06p3Pikof4r0/A6r7q08yBAAAAAWJLR0R2MWPJQQAAAAd0SU1FB+QEFw4OI081SyQAAAHBSURBVDjLZdRpX9NAEAfgqYFuoaFaztTFYtTGQMvVWpGrgBYVTEW5r+LBId6C/L8/S7Ihu+m8yG6S57ezMzkocceAGm3tREnGUh2dFEQH0qYSXRnjLtG9bDdDT68PjD7Soh8D/mjl7vPBmwkeBDfyQ1LgoZwkbTxSwGMWB2Q94YUIOK2AnrrDARgpFoslLg6jYxqgHMZ9MHFb5KQOyizrg3KFpyuVAp4l9RRE1edyD1MTRAPIUxw4rgQvMD2Tmo1tck7k5BJYKXce0zFQWzDNxbDMJaC7pUwKO/nSscFfoZ5efj2+DDt6Mm9qAWhD/e2KlVtleCeyKgGvQXivLNeOtYS6/IfMR5rK9EcX1jGmb2CDU8OTTfSXhLwxuBmMC+JCbSvalC3BNkoRUGNHnncBuyHYM839gzg4bMr2CCDyYi4G8jiabYbAzbam+MQSpngTAvD5SwuwjK9UwbEEDkvEwYlftnEagAaKcVD1RMUOzmSZJe+bDpL8/GaeGZbgO++xNJDnfvN/1MNG/cSvAy2FjJnbTp5w93ewyB8U9NamPX8o2GDV85x4Lt7ff+qnPI81KS8umwYXr0/jP1f/Bd5V+RodnnY+dM4f1wAAAABJRU5ErkJggg=="></image>
</svg></i>
                                <h3 class="mt30 fw600">Multilangual Interface</h3>
                                <p>Manage your languages easily. DirectAdmin provides the ability to install a new language pack for your interface with just a few clicks. </p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="right-side w40pr">
                        <div class="counters-block rel w100pr h100pr ">
                            
                            <div class="one-counter-card">
                                <i><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="47px" height="48px">
<image x="0px" y="0px" width="47px" height="48px" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC8AAAAwCAMAAAC2edPQAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAC2VBMVEUuND3///8uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND3///+n8g/0AAAA8XRSTlMAAAJv1vzadgWU2J/UoAE5qghDFjQifC4liiAYBvWyfRur/veRCZq6dJ3VETqpDMuic7WkMGfSnmhxZD74r+HmdaP9DzJwWFUZR5ZI79kqFExC+a4j0B/yzUZTwmHPu1xSX1H7waw/DvQnC0vG6MibVO7jFTM3NvDd5Ny4mKG3QCwpBFDrbgPMxVsdV8Be4NFBhXdKg3lZ3vH6PL4Q6g1i3y32vH9gxG2MtJPpqLkescmQB3svksPnTyvH1+WJyjh+4ttshKeBOxp6F3jzHChW7Uk1ZY4kJovOhk6AXSGClxKHsGO97I+zE7+lTUQKpnKZzB7xnwAAAAFiS0dEAf8CLd4AAAAHdElNRQfkBBcODw4T8SYQAAAEq0lEQVRIx42W+VuUVRTH7wCD7IgIsQ3h4CDb1BAEQsrAqEMCI4nCIGOCELKOJSggJCKJ0EAaSJgLsYWSkAklJG6JZmICRouVlkWb7X3/g+77vjMsM4DcH849d+5nnuece7aXkBmWkbEJ33SBGavzpq+ZcGIOC0srWNvMk7fFQjtiZo1Fc/P2ix04xRGPUekEZ453Wew6A+/mLADcXRj18am8xxIhPJeKDHgvLPP2ga8fVf0hpvZYsvY88SQkAU8h0EaPD0IglU8jgPPXxDIYIYy/yxFKKS/46/FheIZK0YqV7Mk4HNIII0aLlK2i1Gqs0ePliKLyWb6EO65lj3RFw4VSMQjT411jFetInJj/HHeM0fHr4zfE8TYmCBL1/ZUDJkokaU+bkKzVVFAGy7DZ8P1tA5/fsEWYwup2qdhqx2pp6S9kJIi3zRLfTNOs7Jxc8zwpHzL19hdfykzckV+gH1/Rzl1+uj8UFhXvhrCkVPLynjJTGdSmgr06UlS+r4LhXzEF9ldq+QNVqH41UXvQ1NTC102Lv3YQOLSWR16XKevqLbCcQw6jYZqBb6CGwxtxxLHuzaPHyPEVqwk5YdH0FnvfbMBzgXJrCad+tLa1E2U78/vb2MjedwAnUzQVnG0e8uPAKZZ3RSezvaMk0gTm7jTKUlxYXtwFlCwTS7rfpX7t6Gb5M43vwZrhz0pJD+p7SW5bUxaQ9/4HcjRX5J7r61d6KtXV5h+ayRF2vl4lQ5s6PcrILRSnSdwAwi/gYrl9ckg+0AVhD2tZLyNcLqVDDUglNa7ZLTA9iMsFNEb1A0mdGpa58pEvrgKD4rpTYdeuf6wAwqG48YkdY8pN56TLQ6v067cGKbc+PakEs25vdxxOm0jMmeu9A2omg4ZHWvdpaLmM5mvfZzZ+M2JxJ8P7s8KgsZhQcROKUDknX4O01NLb4FZWe81hfK7P5wTkJX2ROOFv3ggx+nJ9VMfooq8OEIfaCX897n59lvH3hApXFZC2FrDv2SQDVAFXNJmizOHCUBUg7NK+ZzguFDPv+Q2G7Gy+9WTj5RjUKBwaCqem8OP5VF68FzARr6OpvIprNF6DVlwHKbv/Hd23IlJEnEa/j/Z5cF2eTcy8JvIhhDGqup/013L55qDLtzudx35gdT/bH9WT+XaX2caVZDx9jF4p+nNY5ic0/EwN+aXYqmS/kLpyj21XPF7vESaf1wm2kJ1tgktDCjTr6uUG0ch/de+r6vttKS20CIxy7yhHy1BDLK0Xsq0K2B02pR7lD7UHv+TfJ+sxpYXW4yYmXkYj5Tm6eO0qKqavWly6J9q6bFAItWJKvZ/n6n16PxGM0H5SzfST/gEvtp/EzZIP/n8kuLcL77N675R+pVo5Y7+i/dB35n6YZSU07Idsv324kP+nXr/9K37cnucULDhj0M9Hqbwpi9TjH8CBUrloNpgXe6n8O56dFzZr6LxYwM6LQJkfpcZgbDCP/iHM9PHmssnE8hAsuXn0L6V8YKvv739ojwiBL5M6/ujuJRUh3LyrgsS7zHDezT5PM4Ro6zGcp3PN61uP+h5YMp/vgcl1DgprK27+zos3qjThK7y5Lq3H/w/2bAp3B7EhhwAAAABJRU5ErkJggg=="></image>
</svg></i>
                                <p>1 oy davomida yangi foydalanuvchilar</p>
                                <div class="counter-value adv-counter dib fw600">1400 </div><span class="counter-value">+</span>
                            </div>
                             
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
  <!-- end admin feature -->
  
  <!-- start blue feature -->
  <div class="row">
    <div class="col-xs-12">
        <div id="features" class="image" style="background-image: url(https://www.directadmin.com/img/update/index/bg_every.png), linear-gradient(#fcfcfc, transparent) ">
            <div class="container">
                <ul class="block-grid flex-grid block-grid-md-3 block-grid-sm-3 block-grid-xs-2 mt50">
                    <li class="title-block">
                        <h2 class="mt0"><a class="a0 c1 fs30r mb25" href="#">
                            <strong class="flex">Zamonaviy Dasturchi Bo'ling</strong></a></h2>
                        
                    </li>
                    <li class="item">
                        <div href="#" class="item-inner t0 dib">
                            <h4 class="title mt0 mb20 c3" style="display: flex;flex-direction: row;"><a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width='25' height='20' class="h-6 w-6 mr10" fill="none" viewBox="0 0 24 24" stroke="black">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                  </svg>
                                
                                Narx arzonligi</a></h4>
                            <a href="#" class="c5 a2 fs13">
                               Oyiga Atiga 100 000 so'm evaziga sistemamizdagi barcha kurslarni ko'rishga muvaffaq bo'ling.
                            
                            </a>
                        </div>
                    </li>
                    <li class="item">
                        <div class="item-inner t0 dib">
                            <h4 class="title mt0 mb20 c3"><a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width='25' height='20' class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="black">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                  </svg>
                                Qulay    
                            </a></h4>
                            <a href="#" class="c5 a2 fs13">
                                 Hoh telefonda, hoh komputerda kurslarni tomosha qiling. Hech qanaqa 
                                 <svg xmlns="http://www.w3.org/2000/svg" widht='20' class="h-6 w-6 inline-flex" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                  </svg>
                                 disk yo'q.
                            </a>
                        </div>
                    </li>
                    <li class="item">
                        <div class="item-inner t0 dib">
                            <h4 class="title mt0 mb20 c3"><a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width='20' height='20' class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="red">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                  </svg>
                               
                                Yordam kerakmi
                            </a></h4>
                            <a href="#" class="c5 a2 fs13">
                            Q&A sistemamiz sizning barcha savollaringizga javob topadi.    
                            </a>
                        </div>
                    </li>
                    <li class="item">
                        <div class="item-inner t0 dib">
                            <h4 class="title mt0 mb20 c3"><a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg"  width='23' height='20' class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="green">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                  </svg>
                                </i>Ishonchli</a></h4>
                            <a href="#" class="c5 a2 fs13">
                               Biz sizga kursni sotib qolmoqchi emasmiz.  Hammasi online .  Hech qanaqa risk yo'q.
                                
                                </a>
                        </div>
                    </li>
                    <li class="item">
                        <div class="item-inner t0 dib">
                            <h4 class="title mt0 mb20 c3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                  </svg>
                              Do'stona 
                            
                            </h4>
                            <a href="#" class="c5 a2 fs13">

                               Hoxlagan payti to'lashni to'xtating va hoxlagan payti davom ettiring. Bu shunday oson.&#128519;
                                Biz sizdan hech qanday sabab so'ramaymiz.
                            
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

  <!-- end blue feature -->
  
  <!-- start signup button -->
    <div id="bottom-banner" class="row mt35r">
              <div class="col-xs-12">
                  <div class="container">
                      <div class="text-center">
                          <h2 class="mt-5 mb-8 text-gray-500 text-4xl">Ro'yhatdan o'ting , imkoniyatni boy bermang.</h2>
                          <a href="/register" data-toggle="modal" data-target="#modal-orderNow" 
                          class="bg-light-blue-500  px-4 py-2 text-3xl text-gray-50 rounded-md hover:bg-black hover:text-white
                          
                          ">Mana bu yerdan </a>
                      </div>
                  </div>
              </div>
          </div>
  
  <!-- end signup button -->
          </div>
          <!-- /End replace -->
        </div>
      </main>
    </div>
  </div>
    
@endsection