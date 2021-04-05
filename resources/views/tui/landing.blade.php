@extends('layouts.tail')

{{-- https://play.tailwindcss.com/vGWFE7mTsv?layout=horizontal --}}

@push('css')
@include('tui.partials.landing-css')
    
@endpush
@section('content')

   
<div class="min-h-screen bg-light">
   {{-- @include('tui.partials.nav') --}}
  
    <div class="py-10">
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
                          <h2 class="title">Get the Real time <br> Data <span>Analytics</span></h2>
                          <p>Our support team will get assistance from AI-powered suggestions, making it quicker assistance than ever to handle support requests. Our support team will get</p>
                      </div>
                      <div class="row">
                          <div class="col-lg-9">
                              <div class="riyaqas-check-list media">
                                  <img class="media-left" src="https://www.poms.work/assets/img/business-tool/pencil.svg" alt="check">
                                  <span>Our support team will get assistance from AI-powered suggestions, making it quicker than.</span>
                              </div>
                              <div class="riyaqas-check-list media">
                                  <img class="media-left" src="https://www.poms.work/assets/img/business-tool/search.svg" alt="check">
                                  <span>Our support team will get assistance from AI-powered suggestions.</span>
                              </div>
                              <div class="riyaqas-check-list media mg-bottom-0-991">
                                  <img class="media-left" src="https://www.poms.work/assets/img/business-tool/settings.svg" alt="check">
                                  <span>Our support team will get assistance from AI-powered, making it quicker than ever to handle support requests.</span>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-7 col-lg-6">
                  <img src="https://www.poms.work/assets/img/5.jpg">
              </div>
          </div>
      </div>
  </div>
          <!-- landing top end  -->
  
  
  <!-- start top design  -->
    <section class="why-choose-sec padding-bottom-none bg-light-blue-400 text-white"><div class="container larg-container"><div class="row">  <div class="col-sm-12 col-md-5 col-lg-3 hidden-sm hidden-xs"><img class="msd-lazyload clutch-logo loaded" src="assets/images/home-clutch-logo2021.png" data-src="assets/images/home-clutch-logo2021.png" data-img-ratio="374:426" alt="clutch" style="opacity: 1;"></div>  <div class="col-sm-12 col-md-7 col-lg-9"><div class="row"><div class="col-sm-12 col-md-12"><h2 class="margin-bottom-15"><span>TOP WEBSITE DESIGN COMPANY IN INDIA</span></h2>  <p class="margin-bottom-25">As a top-rated website design company in India, we strategize the digital footprint of cross-business verticals. Our speciality is to craft a conversion-worthy digital touchpoint with a seamless blend of strategic vision, advanced technology and industry exposure. Here’s why you should choose us.</p></div><div class="col-sm-12"><div class="row"><div class="col-sm-6"><div class="why-us-pnl wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.0s"><div class="why-icon year home-why-icon-set experience-icon"><img class="msd-lazyload loaded" src="assets/images/home-15-years.jpg" data-src="assets/images/home-15-years.jpg" data-img-ratio="45:41" alt="15 years" style="opacity: 1;"></div><div class="why-pnl"><h3>Extensive Experience</h3><p>Thousands of projects completed for clients globally.</p></div></div></div><div class="col-sm-6"><div class="why-us-pnl"><div class="why-icon year home-why-icon-set global-icon"><span class="icon-Globe"></span></div><div class="why-pnl wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.0s"><h3>Global Clientèle</h3><p>Our services attract clients across 32+ countries of the world.</p></div></div></div></div><div class="row"><div class="col-sm-6"><div class="why-us-pnl wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.0s"><div class="why-icon year home-why-icon-set cost-icon"><span class="icon-Dollar"></span></div><div class="why-pnl"><h3>Cost Effectiveness</h3><p>We offer services at very reasonable price points.</p></div></div></div><div class="col-sm-6"><div class="why-us-pnl wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.0s"><div class="why-icon year home-why-icon-set dev-icon"><span class="icon-Developer"></span></div><div class="why-pnl"><h3>150+ Developers</h3><p>A large, skilled and experienced team for your projects.</p></div></div></div></div></div></div></div></div></div></section>
  <!-- end top design -->
  
  <!-- start savollar -->
    <section class="bnx-margin_section">
    
  <div class="container custom">
      <h2 class="bnx-title item text-left text-md-center">
          Часто задаваемые вопросы    </h2>
      <div class="row">
                                              <div class="col-12 col-md-6 col-lg-4 faq-card">
                      <div class="faq-card__title d-flex align-items-center">
                          <noscript><img width='39px' height='42px' class="faq-card__icon" src="https://dspfdd2n9fb8f.cloudfront.net/wp-content/uploads/2020/05/question__liquidity__icon.svg" alt=""></noscript><img width="39px" height="42px" class="faq-card__icon ls-is-cached lazyloaded" src="https://dspfdd2n9fb8f.cloudfront.net/wp-content/uploads/2020/05/question__liquidity__icon.svg" data-src="https://dspfdd2n9fb8f.cloudfront.net/wp-content/uploads/2020/05/question__liquidity__icon.svg" alt="">
                          <span class="faq-card__head">   Ликвидность</span>
                      </div>
                      <div class="d-flex flex-column position-relative">
                          <hr class="faq-card__hr">
                          <hr class="faq-card__hr__active position-absolute">
                      </div>
                      <div class="faq-card__content">
                          <span class="faq-card__desc">
                                Кооперация с другими криптовалютными биржами и провайдерами дает нам возможность поддерживать конкурентоспособную ликвидность в биржевых стаканах и обменнике                        </span>
                      </div>
                      <div class="faq-card__url">
                                                      <a href="https://www.binaryx.com/ru/liquidity">
                                  Узнать больше</a>
  
                                                  </div>
                  </div>
                                  <div class="col-12 col-md-6 col-lg-4 faq-card">
                      <div class="faq-card__title d-flex align-items-center">
                          <noscript><img width='39px' height='42px' class="faq-card__icon" src="https://dspfdd2n9fb8f.cloudfront.net/wp-content/uploads/2020/05/question__legal__icon.svg" alt=""></noscript><img width="39px" height="42px" class="faq-card__icon lazyloaded" src="https://dspfdd2n9fb8f.cloudfront.net/wp-content/uploads/2020/05/question__legal__icon.svg" data-src="https://dspfdd2n9fb8f.cloudfront.net/wp-content/uploads/2020/05/question__legal__icon.svg" alt="">
                          <span class="faq-card__head">   Правовое поле</span>
                      </div>
                      <div class="d-flex flex-column position-relative">
                          <hr class="faq-card__hr">
                          <hr class="faq-card__hr__active position-absolute">
                      </div>
                      <div class="faq-card__content">
                          <span class="faq-card__desc">
                                Офисы Binaryx расположены в Эстонии и Украине. Компания зарегистрирована в Эстонии, и в 2022 мы планируем получить дополнительные лицензии в Британии и Сингапуре                        </span>
                      </div>
                      <div class="faq-card__url">
                                              </div>
                  </div>
                                  <div class="col-12 col-md-6 col-lg-4 faq-card">
                      <div class="faq-card__title d-flex align-items-center">
                          <noscript><img width='39px' height='42px' class="faq-card__icon" src="https://dspfdd2n9fb8f.cloudfront.net/wp-content/uploads/2020/05/question__team__icon.svg" alt=""></noscript><img width="39px" height="42px" class="faq-card__icon lazyloaded" src="https://dspfdd2n9fb8f.cloudfront.net/wp-content/uploads/2020/05/question__team__icon.svg" data-src="https://dspfdd2n9fb8f.cloudfront.net/wp-content/uploads/2020/05/question__team__icon.svg" alt="">
                          <span class="faq-card__head">   Команда</span>
                      </div>
                      <div class="d-flex flex-column position-relative">
                          <hr class="faq-card__hr">
                          <hr class="faq-card__hr__active position-absolute">
                      </div>
                      <div class="faq-card__content">
                          <span class="faq-card__desc">
                                Мы команда специалистов и предпринимателей с более чем 10-летним опытом создания технических стартапов и финтех-продуктов                        </span>
                      </div>
                      <div class="faq-card__url">
                                                      <a href="https://www.binaryx.com/ru/team">
                                  Узнать больше</a>
  
                                                  </div>
                  </div>
                                  <div class="col-12 col-md-6 col-lg-4 faq-card">
                      <div class="faq-card__title d-flex align-items-center">
                          <noscript><img width='39px' height='42px' class="faq-card__icon" src="https://dspfdd2n9fb8f.cloudfront.net/wp-content/uploads/2020/05/question__status__icon.svg" alt=""></noscript><img width="39px" height="42px" class="faq-card__icon lazyloaded" src="https://dspfdd2n9fb8f.cloudfront.net/wp-content/uploads/2020/05/question__status__icon.svg" data-src="https://dspfdd2n9fb8f.cloudfront.net/wp-content/uploads/2020/05/question__status__icon.svg" alt="">
                          <span class="faq-card__head">   Миграция статуса</span>
                      </div>
                      <div class="d-flex flex-column position-relative">
                          <hr class="faq-card__hr">
                          <hr class="faq-card__hr__active position-absolute">
                      </div>
                      <div class="faq-card__content">
                          <span class="faq-card__desc">
                                У вас есть VIP cтатус на другой платформе? Не беда! Мы предложим вам свои уникальные условия для удобного перехода на Binaryx                        </span>
                      </div>
                      <div class="faq-card__url">
                                              </div>
                  </div>
                                  <div class="col-12 col-md-6 col-lg-4 faq-card">
                      <div class="faq-card__title d-flex align-items-center">
                          <noscript><img width='39px' height='42px' class="faq-card__icon" src="https://dspfdd2n9fb8f.cloudfront.net/wp-content/uploads/2020/05/question__security__icon.svg" alt=""></noscript><img width="39px" height="42px" class="faq-card__icon lazyloaded" src="https://dspfdd2n9fb8f.cloudfront.net/wp-content/uploads/2020/05/question__security__icon.svg" data-src="https://dspfdd2n9fb8f.cloudfront.net/wp-content/uploads/2020/05/question__security__icon.svg" alt="">
                          <span class="faq-card__head">   Безопасность</span>
                      </div>
                      <div class="d-flex flex-column position-relative">
                          <hr class="faq-card__hr">
                          <hr class="faq-card__hr__active position-absolute">
                      </div>
                      <div class="faq-card__content">
                          <span class="faq-card__desc">
                                Наши инженеры и специалисты по кибербезопасности тратят тысячи часов на разработку одной из самых надежных платформ для работы с криптовалютами                        </span>
                      </div>
                      <div class="faq-card__url">
                                                      <a href="https://www.binaryx.com/ru/security">
                                  Узнать больше</a>
  
                                                  </div>
                  </div>
                                  <div class="col-12 col-md-6 col-lg-4 faq-card">
                      <div class="faq-card__title d-flex align-items-center">
                          <noscript><img width='39px' height='42px' class="faq-card__icon" src="https://dspfdd2n9fb8f.cloudfront.net/wp-content/uploads/2020/05/question__roadmap__icon.svg" alt=""></noscript><img width="39px" height="42px" class="faq-card__icon lazyloaded" src="https://dspfdd2n9fb8f.cloudfront.net/wp-content/uploads/2020/05/question__roadmap__icon.svg" data-src="https://dspfdd2n9fb8f.cloudfront.net/wp-content/uploads/2020/05/question__roadmap__icon.svg" alt="">
                          <span class="faq-card__head">   Дорожная карта</span>
                      </div>
                      <div class="d-flex flex-column position-relative">
                          <hr class="faq-card__hr">
                          <hr class="faq-card__hr__active position-absolute">
                      </div>
                      <div class="faq-card__content">
                          <span class="faq-card__desc">
                                Хотите знать, как обстоят дела с разработкой продукта? В разделе роадмап вы можете узнать о грядущих фичах и планах                        </span>
                      </div>
                      <div class="faq-card__url">
                                                      <a href="https://www.binaryx.com/ru/roadmap">
                                  Узнать больше</a>
  
                                                  </div>
                  </div>
                      </div>
  </div>
  </section>
  <!-- end savollar -->
  
  <!-- start admin feature -->
    <div class="row mt50">
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
                                          <i class="icon-w-shadow"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32px" height="23px">
  <image x="0px" y="0px" width="32px" height="23px" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAXCAMAAABd273TAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABvFBMVEUMgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq7///879e2EAAAAknRSTlMAXNvi4OHe3FP25uXj7v3k91RK9f5nCQ0HrXV2rPRC8G8z+N0OMkM46QKqbG2o6jmEFBU3NCd8X2B7KC7UbnBxgft9+t+ytDDLiWl0i+xz7YjMMRu+H8U1Hr2/HKY6YqkBq6cPlEvzLC2W+YWGXn5r/CEQEVaCn2WeV0XnjD7GBQbHPUfa0TYkypqbGLcXo6SOgy2xsHgAAAABYktHRJPhA9+2AAAAB3RJTUUH5AQXDg0s9KcFdgAAAbZJREFUKM99kfs7G0EUho9YiZUgYsMSYSVBKaGNoi5ZFbSsW1uV3uhWVNsogrq3aDWoe76/2Ez28bh7f5h3z/PNPDvnDJFBiilVSDNbzGnJRUg1pdAV0kVkWG2ZyMrOzkKmzZoBe87l3JErOfPy5QIUyrILRXJ+nlNyOy7y4hIoTKUer4/IZ/aUsUJBSfl5XvEALqbKKjzkZTVqKplc8NcaeakNdcl9HtMj7scWT4C7DrZ67icWqSG5sQqNxokm1CT9VPI2E7W0QmgLqqrS/szewayqwQ57qF1hbutEawt14V666fkL2Ht6NS3Yh35tQGMMFA6iR9W03iERL18RvR7G8Bv+y5FQ2LhDIDTC9fYd3n/gH76PMI8yj+GTzmv9M5qYar0Yjxgn5An4v7D2hMmvvPw2KbB2HX58l88npTcg2sgbn+LVDz6W6Shm9EuPMRtDkOZE6zzRglWcI0WKzV59zp9uLNISlomcWKFFuFfpGmvr+PVb3Njc+iP+7cP6Nt0g/A8FcYQDiBfBtEO3sLuHEP7vI4q9XbqVg0MgFgMOj+gOIsd8/CcRuhP9FDjV6R70ROJafgZbb3k/W83C7gAAAABJRU5ErkJggg=="></image>
  </svg></i>
                                          <h3 class="mt30 fw600">Cutting-Edge Technologies</h3>
                                          <p>Web hosting environments are constantly evolving. DirectAdmin stays in-step with today’s most sophisticated solutions. </p>
                                          <a class="more mt30 dib a0 fs16 fw600" href="technologies.php">See the list<i class="sprite cmn-arrow-right-blue ml10"></i></a>
                                      </div>
                                      <div class="one-text-block">
                                          <i class="icon-w-shadow"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32px" height="32px">
  <image x="0px" y="0px" width="32px" height="32px" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABZVBMVEUMgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq4Mgq7///+whx6GAAAAdXRSTlMACsT87UsW/fPDVMejq/cbi7va5D/IOIoEjPn+eaJGoK7hd7jjPLkS+uBajt+GDErwVwghptzv7JNnAvFqyxmddl9i9vWbDojBMOfQ+0itvzPrnqkxhCWqH3GcF/Tyf8bu3c/FdAZ6FL06p3Pikof4r0/A6r7q08yBAAAAAWJLR0R2MWPJQQAAAAd0SU1FB+QEFw4OI081SyQAAAHBSURBVDjLZdRpX9NAEAfgqYFuoaFaztTFYtTGQMvVWpGrgBYVTEW5r+LBId6C/L8/S7Ihu+m8yG6S57ezMzkocceAGm3tREnGUh2dFEQH0qYSXRnjLtG9bDdDT68PjD7Soh8D/mjl7vPBmwkeBDfyQ1LgoZwkbTxSwGMWB2Q94YUIOK2AnrrDARgpFoslLg6jYxqgHMZ9MHFb5KQOyizrg3KFpyuVAp4l9RRE1edyD1MTRAPIUxw4rgQvMD2Tmo1tck7k5BJYKXce0zFQWzDNxbDMJaC7pUwKO/nSscFfoZ5efj2+DDt6Mm9qAWhD/e2KlVtleCeyKgGvQXivLNeOtYS6/IfMR5rK9EcX1jGmb2CDU8OTTfSXhLwxuBmMC+JCbSvalC3BNkoRUGNHnncBuyHYM839gzg4bMr2CCDyYi4G8jiabYbAzbam+MQSpngTAvD5SwuwjK9UwbEEDkvEwYlftnEagAaKcVD1RMUOzmSZJe+bDpL8/GaeGZbgO++xNJDnfvN/1MNG/cSvAy2FjJnbTp5w93ewyB8U9NamPX8o2GDV85x4Lt7ff+qnPI81KS8umwYXr0/jP1f/Bd5V+RodnnY+dM4f1wAAAABJRU5ErkJggg=="></image>
  </svg></i>
                                          <h3 class="mt30 fw600">Multilangual Interface</h3>
                                          <p>Manage your languages easily. DirectAdmin provides the ability to install a new language pack for your interface with just a few clicks. </p>
                                          <a class="more mt30 dib a0 fs16 fw600" href="http://forum.directadmin.com/forumdisplay.php?f=77">See the list<i class="sprite cmn-arrow-right-blue ml10"></i></a>
                                      </div>
                                  </div>
                              </div>
                              <div class="right-side w40pr">
                                  <div class="counters-block rel w100pr h100pr ">
                                      <div class="one-counter-card">
                                          <i><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="46px" height="48px">
  <image x="0px" y="0px" width="46px" height="48px" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC4AAAAwCAMAAABZu7juAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAC8VBMVEUuND3///8uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND3///9p23YQAAAA+XRSTlMAACeZ7eiJG0Hr4YNqiu7ZMSDnvhw/cjck28oTBAomGgV5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"></image>
  </svg></i>
                                          <p>Countries</p>
                                          <div class="counter-value adv-counter dib fw600">130 </div><span class="counter-value">+</span>
                                      </div>
                                      <div class="one-counter-card">
                                          <i><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="47px" height="48px">
  <image x="0px" y="0px" width="47px" height="48px" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC8AAAAwCAMAAAC2edPQAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAC2VBMVEUuND3///8uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND0uND3///+n8g/0AAAA8XRSTlMAAAJv1vzadgWU2J/UoAE5qghDFjQifC4liiAYBvWyfRur/veRCZq6dJ3VETqpDMuic7WkMGfSnmhxZD74r+HmdaP9DzJwWFUZR5ZI79kqFExC+a4j0B/yzUZTwmHPu1xSX1H7waw/DvQnC0vG6MibVO7jFTM3NvDd5Ny4mKG3QCwpBFDrbgPMxVsdV8Be4NFBhXdKg3lZ3vH6PL4Q6g1i3y32vH9gxG2MtJPpqLkescmQB3svksPnTyvH1+WJyjh+4ttshKeBOxp6F3jzHChW7Uk1ZY4kJovOhk6AXSGClxKHsGO97I+zE7+lTUQKpnKZzB7xnwAAAAFiS0dEAf8CLd4AAAAHdElNRQfkBBcODw4T8SYQAAAEq0lEQVRIx42W+VuUVRTH7wCD7IgIsQ3h4CDb1BAEQsrAqEMCI4nCIGOCELKOJSggJCKJ0EAaSJgLsYWSkAklJG6JZmICRouVlkWb7X3/g+77vjMsM4DcH849d+5nnuece7aXkBmWkbEJ33SBGavzpq+ZcGIOC0srWNvMk7fFQjtiZo1Fc/P2ix04xRGPUekEZ453Wew6A+/mLADcXRj18am8xxIhPJeKDHgvLPP2ga8fVf0hpvZYsvY88SQkAU8h0EaPD0IglU8jgPPXxDIYIYy/yxFKKS/46/FheIZK0YqV7Mk4HNIII0aLlK2i1Gqs0ePliKLyWb6EO65lj3RFw4VSMQjT411jFetInJj/HHeM0fHr4zfE8TYmCBL1/ZUDJkokaU+bkKzVVFAGy7DZ8P1tA5/fsEWYwup2qdhqx2pp6S9kJIi3zRLfTNOs7Jxc8zwpHzL19hdfykzckV+gH1/Rzl1+uj8UFhXvhrCkVPLynjJTGdSmgr06UlS+r4LhXzEF9ldq+QNVqH41UXvQ1NTC102Lv3YQOLSWR16XKevqLbCcQw6jYZqBb6CGwxtxxLHuzaPHyPEVqwk5YdH0FnvfbMBzgXJrCad+tLa1E2U78/vb2MjedwAnUzQVnG0e8uPAKZZ3RSezvaMk0gTm7jTKUlxYXtwFlCwTS7rfpX7t6Gb5M43vwZrhz0pJD+p7SW5bUxaQ9/4HcjRX5J7r61d6KtXV5h+ayRF2vl4lQ5s6PcrILRSnSdwAwi/gYrl9ckg+0AVhD2tZLyNcLqVDDUglNa7ZLTA9iMsFNEb1A0mdGpa58pEvrgKD4rpTYdeuf6wAwqG48YkdY8pN56TLQ6v067cGKbc+PakEs25vdxxOm0jMmeu9A2omg4ZHWvdpaLmM5mvfZzZ+M2JxJ8P7s8KgsZhQcROKUDknX4O01NLb4FZWe81hfK7P5wTkJX2ROOFv3ggx+nJ9VMfooq8OEIfaCX897n59lvH3hApXFZC2FrDv2SQDVAFXNJmizOHCUBUg7NK+ZzguFDPv+Q2G7Gy+9WTj5RjUKBwaCqem8OP5VF68FzARr6OpvIprNF6DVlwHKbv/Hd23IlJEnEa/j/Z5cF2eTcy8JvIhhDGqup/013L55qDLtzudx35gdT/bH9WT+XaX2caVZDx9jF4p+nNY5ic0/EwN+aXYqmS/kLpyj21XPF7vESaf1wm2kJ1tgktDCjTr6uUG0ch/de+r6vttKS20CIxy7yhHy1BDLK0Xsq0K2B02pR7lD7UHv+TfJ+sxpYXW4yYmXkYj5Tm6eO0qKqavWly6J9q6bFAItWJKvZ/n6n16PxGM0H5SzfST/gEvtp/EzZIP/n8kuLcL77N675R+pVo5Y7+i/dB35n6YZSU07Idsv324kP+nXr/9K37cnucULDhj0M9Hqbwpi9TjH8CBUrloNpgXe6n8O56dFzZr6LxYwM6LQJkfpcZgbDCP/iHM9PHmssnE8hAsuXn0L6V8YKvv739ojwiBL5M6/ujuJRUh3LyrgsS7zHDezT5PM4Ro6zGcp3PN61uP+h5YMp/vgcl1DgprK27+zos3qjThK7y5Lq3H/w/2bAp3B7EhhwAAAABJRU5ErkJggg=="></image>
  </svg></i>
                                          <p>New Features Since 2003</p>
                                          <div class="counter-value adv-counter dib fw600">1400 </div><span class="counter-value">+</span>
                                      </div>
                                      <div class="one-counter-card">
                                          <i><svg id="svg5500" height="45" viewBox="0 0 16.933334 16.933334" width="48" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg"><g id="layer1" transform="translate(148.923 -136.436)"><path id="rect3441" d="m-147.63002 141.58677c.17279.17279.3507.17473.52865.0176.93991-.92139 1.77958-1.77285 2.84117-2.83444.0922-.0945.0999-.27331-.006-.37517-.987-.91836-2.44412-.84076-3.30681.0219-.927.927-.76107 2.35785-.0573 3.17011zm10.92698-3.19205c-.10444.10218-.10629.26967-.004.37414 1.03501 1.02441 2.04081 2.04006 2.92903 2.92437.11043.11043.29549.044.416-.0765.91709-.91709.87076-2.29525-.0558-3.2218-.86404-.86403-2.34918-.90812-3.28511-.00023zm-8.13904.20154-2.50631 2.50837c-.44917-.82553-.45889-1.68464.16466-2.32829.71222-.71222 1.66554-.6489 2.34165-.18008zm11.05282.1765c.6462.6462.62905 1.68847.16975 2.33135l-2.50734-2.50785c.78107-.48333 1.69006-.46169 2.33759.1765zm-6.69805.0705c-4.48005 0-6.53474 3.78094-6.62509 6.61797 0 4.14105 3.62658 6.61328 6.66178 6.61328 3.95392 0 6.51981-3.0456 6.57401-6.62003 0-3.78301-2.91555-6.61122-6.6107-6.61122zm-.262.54002v1.31568c.008.34504.52151.34504.52917 0v-1.31568c1.48286.063 2.82676.65427 3.84886 1.59163l-.86041.86041c-.25891.25009.12651.63339.37517.37311l.85886-.86041c.93726 1.022 1.52803 2.36618 1.59112 3.84886h-1.34049c-.34448.0243-.31991.53784.0253.52916h1.31517c-.0635 1.48235-.65443 2.82622-1.59164 3.84835l-.85834-.8599c-.26785-.26785-.60282.14546-.37517.37311l.86041.85989c-1.0221.93778-2.36601 1.52912-3.84886 1.59215v-1.31568c0-.40405-.52917-.39982-.52917 0v1.31568c-1.48165-.0636-2.82541-.65466-3.84731-1.59163l.85886-.86041c.29518-.29518-.0973-.64844-.37258-.37311l-.8599.85938c-.93736-1.02206-1.52917-2.36573-1.59267-3.84783h1.31569c.34494-.008.34494-.52142 0-.52916h-1.31569c.0631-1.48243.65474-2.82641 1.59216-3.84835l.86041.8599c.24777.29385.66678-.12574.37258-.37311l-.85886-.86092c1.0219-.93655 2.36565-1.52759 3.84731-1.59112zm-2.11718 4.75475c-.72832 0-1.3224.59409-1.3224 1.3224 0 .72833.59408 1.32446 1.3224 1.32446h1.32602c.43246 0 .81425-.21322 1.05575-.5364.24149.32318.62328.5364 1.05575.5364h1.32601c.72832 0 1.3224-.59613 1.3224-1.32446 0-.72831-.59408-1.3224-1.3224-1.3224h-1.32601c-.43258 0-.81427.21261-1.05575.53537-.24149-.32276-.62318-.53537-1.05575-.53537zm0 .52968h1.32602c.46783 0 .7891.38718.7891.79272 0 .47657-.38906.79478-.7891.79478h-1.32602c-.44431 0-.79272-.35046-.79272-.79478 0-.4443.34841-.79272.79272-.79272zm4.76353 0c.44431-.002.79324.34842.79324.79272 0 .44432-.34892.79478-.79324.79478-.27437.0102-.99899.029-1.32601.008-.35999-.0234-.7582-.20923-.78911-.80249 0-.55588.39912-.78737.78911-.78737z" font-variant-ligatures="normal" font-variant-position="normal" font-variant-caps="normal" font-variant-numeric="normal" font-variant-alternates="normal" font-feature-settings="normal" text-indent="0" text-align="start" text-decoration-line="none" text-decoration-style="solid" text-decoration-color="rgb(0,0,0)" text-transform="none" text-orientation="mixed" white-space="normal" shape-padding="0" isolation="auto" mix-blend-mode="normal" solid-color="rgb(0,0,0)" solid-opacity="1" vector-effect="none" paint-order="normal"></path></g></svg></i>
                                          <p>Support Hours</p>
                                          <div class="counter-value  infinity mt12" style="background-image: url(img/update/index/infinity2x.png)"></div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
  <!-- end admin feature -->
  
  <!-- start blue feature -->
    <div class="row">
              <div class="col-xs-12">
                  <div id="features" class="image" style="background-image: url(https://www.directadmin.com/img/update/index/bg_every.png), linear-gradient(#fcfcfc, transparent) ">
                      <div class="container">
                          <ul class="block-grid flex-grid block-grid-md-3 block-grid-sm-3 block-grid-xs-2 mt50">
                              <li class="title-block">
                                  <h2 class="mt0"><a class="a0 c1 fs30r mb25" href="https://www.directadmin.com/features_list.php"><strong class="flex">DirectAdmin</strong> for everyone</a></h2>
                                  <a class="more svg-hover a0 c1 fs16 fw600" href="https://www.directadmin.com/features_list.php">See all features<span class="arrow dib ml10"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="9px" height="6px">
  <path fill-rule="evenodd" fill="rgb(255, 255, 255)" d="M-0.000,2.000 L-0.000,4.000 L4.000,4.000 L4.000,6.000 L9.000,3.000 L4.000,-0.000 L4.000,2.000 L-0.000,2.000 Z"></path>
  </svg></span></a>
                              </li>
                              <li class="item">
                                  <div href="https://www.directadmin.com/pricing.php" class="item-inner t0 dib">
                                      <h4 class="title mt0 mb20 c3"><a href="https://www.directadmin.com/pricing.php"><i class="sprite cmn-calculator-blue mr10"></i>Pricing options</a></h4>
                                      <a href="https://www.directadmin.com/pricing.php" class="c5 a2 fs13">Succeeding in the web hosting business requires flexibility and being competetive. We offer the choice of personal, lite and standard licenses in order to suit every company.</a>
                                  </div>
                              </li>
                              <li class="item">
                                  <div class="item-inner t0 dib">
                                      <h4 class="title mt0 mb20 c3"><a href="https://www.directadmin.com/install.php"><i class="sprite cmn-requirements-blue mr10"></i>Requirements</a></h4>
                                      <a href="https://www.directadmin.com/install.php" class="c5 a2 fs13">Please make sure that your system is properly configured before ordering DirectAdmin. You can view the minimum system requirements in the following guide.</a>
                                  </div>
                              </li>
                              <li class="item">
                                  <div class="item-inner t0 dib">
                                      <h4 class="title mt0 mb20 c3"><a href="https://www.directadmin.com/contacts.php"><i class="sprite cmn-contact mr10"></i>Contact Us</a></h4>
                                      <a href="https://www.directadmin.com/contacts.php" class="c5 a2 fs13">Web hosting environments are constantly evolving. DirectAdmin stays in-step with today’s most sophisticated solutions. </a>
                                  </div>
                              </li>
                              <li class="item">
                                  <div class="item-inner t0 dib">
                                      <h4 class="title mt0 mb20 c3"><a href="https://www.directadmin.com/skin_basics.php"><i class="sprite cmn-personal-blue mr10 fs"></i>Personal Theme</a></h4>
                                      <a href="https://www.directadmin.com/skin_basics.php" class="c5 a2 fs13">A custom layout (skin) is a great way to make your hosting company stand out. You don’t need a DirectAdmin license to write skins.</a>
                                  </div>
                              </li>
                              <li class="item">
                                  <div class="item-inner t0 dib">
                                      <h4 class="title mt0 mb20 c3"><a href="https://www.directadmin.com/demo.php"><i class="sprite cmn-play-circle-blue mr10"></i>Try Our Demo</a></h4>
                                      <a href="https://www.directadmin.com/demo.php" class="c5 a2 fs13">We provide access to DirectAdmin for to try first hand all its functions and features. There are three permission classes within DirectAdmin: User, Reseller and Admin.</a>
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
                          <h2 class="mt-5 mb-8 text-gray-500 text-4xl">Let's take your server to the next level</h2>
                          <a href="#" data-toggle="modal" data-target="#modal-orderNow" 
                          class="bg-green-400  px-4 py-2 text-3xl text-gray-50 rounded-md hover:bg-black hover:text-white
                          
                          ">Order now</a>
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