
    <div class="_pos-r">
      <div class="owl-carousel" data-items="1" data-loop="true" data-nav="true" data-autoplay="3000">
        <div class="theme-hero-area _h-100vh _h-mob-60vh">
          <div class="theme-hero-area-bg-wrap">
            <div class="theme-hero-area-bg" style="background-image:url(https://images.unsplash.com/photo-1554741458-08edc3611229?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1867&q=80);"></div>
            <div class="theme-hero-area-mask theme-hero-area-mask-strong"></div>
          </div>
          <div class="theme-hero-area-body theme-hero-area-body-vert-center">
            <div class="container">
              <div class="theme-hero-text theme-hero-text-white">
                <div class="theme-hero-text-header">
                  <h2 class="theme-hero-text-title _mb-10">Welcome to BuuPass </h2>
                  <p class="theme-hero-text-subtitle">The easiest way to book bus tickets in Kenya.</p>
                </div>
                <a class="btn _tt-uc _mt-20 btn-white btn-ghost btn-lg" href="#">Discover</a>
              </div>
            </div>
          </div>
        </div>
        <div class="theme-hero-area _h-100vh _h-mob-60vh">
          <div class="theme-hero-area-bg-wrap">
            <div class="theme-hero-area-bg" style="background-image:url(https://images.unsplash.com/photo-1534238754819-d8e4470ce7cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80);"></div>
            <div class="theme-hero-area-mask theme-hero-area-mask-strong"></div>
          </div>
          <div class="theme-hero-area-body theme-hero-area-body-vert-center">
            <div class="container">
              <div class="theme-hero-text theme-hero-text-white">
                <div class="theme-hero-text-header">
                  <h2 class="theme-hero-text-title _mb-10">Convenience</h2>
                  <p class="theme-hero-text-subtitle">Save time and money </p>
                </div>
                <a class="btn _tt-uc _mt-20 btn-white btn-ghost btn-lg" href="#">Find More</a>
              </div>
            </div>
          </div>
        </div>
        <div class="theme-hero-area _h-100vh _h-mob-60vh">
          <div class="theme-hero-area-bg-wrap">
            <div class="theme-hero-area-bg" style="background-image:url(https://images.unsplash.com/photo-1530521954074-e64f6810b32d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80);"></div>
            <div class="theme-hero-area-mask theme-hero-area-mask-strong"></div>
          </div>
          <div class="theme-hero-area-body theme-hero-area-body-vert-center">
            <div class="container">
              <div class="theme-hero-text theme-hero-text-white">
                <div class="theme-hero-text-header">
                  <h2 class="theme-hero-text-title _mb-10">Guaranteed</h2>
                  <p class="theme-hero-text-subtitle">The best Bus Ticketing system around</p>
                </div>
                <a class="btn _tt-uc _mt-20 btn-white btn-ghost btn-lg" href="#">Explore Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="_pos-desk-a-b _mt-mob-15 _w-f">
        <div class="container">
          <div class="theme-search-area-tabs">
            <div class="tabbable">
              <ul class="nav _bg-mob-dark nav-tabs nav-white nav-lg nav-active-primary nav-no-br nav-sqr nav-mob-inline nav-mob-bg-dark" role="tablist">
                <li class="active" role="presentation">
                  <a class="_ph-desk-30" aria-controls="SearchAreaTabs-4" role="tab" data-toggle="tab" href="#SearchAreaTabs-4">Buses</a>
                </li>
              </ul>
              <div class="tab-content _pb-45 _pt-30 _ph-30 _bg-w _ph-mob-0">
                <div class="tab-pane active" id="SearchAreaTabs-4" role="tab-panel">
                  <div class="theme-search-area">
                    <form action="<?=base_url('Listing')?>" >
                    <div class="theme-search-area-form">
                      <div class="row" data-gutter="10">
                        <div class="col-md-7 ">
                          <div class="row" data-gutter="10">
                            <div class="col-md-6 ">
                              <div class="theme-search-area-section first theme-search-area-section-border-light theme-search-area-section-curved">
                                <label class="theme-search-area-section-label">Pick Up</label>
                                <div class="theme-search-area-section-inner">
                                  <i class="theme-search-area-section-icon _c-p lin lin-location-pin"></i>
                                  <select onchange="search()" class="form-control theme-search-area-section-input typeahead" id="from" name="from" required="">
                                  <option value="" selected>Choose...</option>
                                  <?php if(!empty($locations)): foreach($locations as $location):?>
                                  <option value="<?=$location->location_id?>"><?=$location->name?></option>
                                <?php endforeach; endif; ?>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 ">
                              <div class="theme-search-area-section theme-search-area-section-border-light theme-search-area-section-curved">
                                <label class="theme-search-area-section-label">Drop Off</label>
                                <div class="theme-search-area-section-inner">
                                  <i class="theme-search-area-section-icon _c-p lin lin-location-pin"></i>
                                   <select class="form-control theme-search-area-section-input typeahead" id="to" name="to" required="">
                                  <option value="" selected>Choose...</option>
                                  <?php if(!empty($locations)): foreach($locations as $location):?>
                                  <option value="<?=$location->location_id?>"><?=$location->name?></option>
                                <?php endforeach; endif; ?>
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-2 ">
                          <div class="theme-search-area-section theme-search-area-section-border-light theme-search-area-section-curved">
                            <label class="theme-search-area-section-label">Departing on</label>
                            <div class="theme-search-area-section-inner">
                              <i class="theme-search-area-section-icon _c-p lin lin-calendar"></i>
                              <input class="theme-search-area-section-input datePickerEnd _mob-h" value="date" type="text" placeholder="date" name="departure_date" required="" />
                              <input class="theme-search-area-section-input _desk-h mobile-picker" type="date" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-1 ">
                          <button  class="theme-search-area-submit theme-search-area-submit-curved">Search</button>
                        </div>
                         </form>
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
    <div class="theme-hero-area">
      <div class="theme-hero-area-bg-wrap">
        <div class="theme-hero-area-bg-pattern theme-hero-area-bg-pattern-ultra-light" style="background-image:url(img/patterns/travel/2.png);"></div>
        <div class="theme-hero-area-grad-mask"></div>
        <div class="theme-hero-area-inner-shadow theme-hero-area-inner-shadow-light"></div>
      </div>
      <div class="theme-hero-area-body">
        <div class="container">
          <div class="theme-page-section _p-0">
            <div class="row">
              <div class="col-md-10 col-md-offset-1">
                <div class="theme-mobile-app">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="theme-mobile-app-section">
                        <img class="theme-mobile-app-img" src="https://buupass.com/app/themes/bus/assets/images/homepage/mobile_1.png" alt="Image Alternative text" title="Image Title"/>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="theme-mobile-app-section">
                        <div class="theme-mobile-app-body">
                          <div class="theme-mobile-app-header">
                            <h2 class="theme-mobile-app-title">Download our app</h2>
                            <p class="theme-mobile-app-subtitle">Take Buupass With You Wherever You Go!</p>
                          </div>
                          <ul class="theme-mobile-app-btn-list">
                 <!--            <li>
                              <a class="btn btn-dark theme-mobile-app-btn" href="#">
                                <i class="theme-mobile-app-logo">
                                  <img src="<?=base_url()?>assets/img/brands/apple.png" alt="Image Alternative text" title="Image Title"/>
                                </i>
                                <span>Download on
                                  <br/>
                                  <span>App Store</span>
                                </span>
                              </a>
                            </li> -->
                            <li>
                              <a class="btn btn-dark theme-mobile-app-btn" href="#">
                                <i class="theme-mobile-app-logo">
                                  <img src="<?=base_url()?>assets/img/brands/play-market.png" alt="Image Alternative text" title="Image Title"/>
                                </i>
                                <span>Download on
                                  <br/>
                                  <span>Play Market</span>
                                </span>
                              </a>
                            </li>
                          </ul>
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
    </div>
    <h4>PARTNERING WITH</h4>
    <div class="row" data-gutter="0">
   
   <?php if(!empty($clients)): foreach($clients as $client): ?>
      <div class="col-md-2-5 ">
        <div class="banner banner-animate banner-animate-mask-out">
          <img class="banner-img"src="<?=$client->logo_url?>" alt="Image Alternative text" title="Image Title"/>
          <div class="banner-mask banner-mask-dark"></div>
          <a class="banner-link" href="#"></a>
          <div class="banner-caption _ta-c banner-caption-bottom banner-caption-grad">
            <h5 class="banner-title">Save 30%</h5>
            <p class="banner-subtitle _fw-n"><?=$client->name?></p>
          </div>
        </div>
      </div>
   <?php endforeach; endif;?>
    </div>
    <div class="theme-footer" id="mainFooter">
      <div class="container _ph-mob-0">
        <div class="row row-eq-height row-mob-full" data-gutter="60">
          <div class="col-md-3">
            <div class="theme-footer-section theme-footer-">
              <a class="theme-footer-brand _mb-mob-30" href="#">
                <img src="<?=base_url()?>assets/img/logo-black.png" alt="Image Alternative text" title="Image Title"/>
              </a>
              <div class="theme-footer-brand-text">
                <p>m</p>
              </div>
            </div>
          </div>
           <div class="col-md-5">
            <div class="row">
              <div class="col-md-4">
                <div class="theme-footer-section theme-footer-">
                  <h5 class="theme-footer-section-title">Buupass</h5>
                  <ul class="theme-footer-section-list">
                    <li>
                      <a href="#">About Buupass </a>
                    </li>
                    <li>
                      <a href="#">Mobile App</a>
                    </li>
                    <li>
                      <a href="#">Customer Support</a>
                    </li>
                    <li>
                      <a href="#">Advertising</a>
                    </li>
                    <li>
                      <a href="#">Jobs</a>
                    </li>
                    <li>
                      <a href="#">Privacy Policy</a>
                    </li>
                    <li>
                      <a href="#">Terms of Use</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-4">
                <div class="theme-footer-section theme-footer-">
                  <h5 class="theme-footer-section-title">Explore</h5>
                  <ul class="theme-footer-section-list">
                    <li>
                      <a href="#">Countries</a>
                    </li>
                    <li>
                      <a href="#">Regions</a>
                    </li>
                    <li>
                      <a href="#">Cities</a>
                    </li>
                    <li>
                      <a href="#">Districs</a>
                    </li>
                    <li>
                      <a href="#">Airports</a>
                    </li>
                    <li>
                      <a href="#">Hotels</a>
                    </li>
                    <li>
                      <a href="#">Places of Interest</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-4">
                <div class="theme-footer-section theme-footer-">
                  <h5 class="theme-footer-section-title">Book</h5>
                  <ul class="theme-footer-section-list">
                    <li>
                      <a href="#">Buses</a>
                    </li>
                    
                  </ul>
                </div>
              </div>
            </div>
          </div>

          

<script type="text/javascript">

  jQuery(document).ready(function($) {
    //minDate option Example

  });
  
  function search() {

   var selected = $('#from').val(); 
   
   $("#to").val($("#to option:first").val());

   $("#to > option").each(function() {
    $("#to option[value='"+this.value+"']").show();
   });


   $("#to option[value='"+selected+"']").hide();

  }

</script>          