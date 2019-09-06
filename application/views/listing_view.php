<div class="theme-hero-area">
      <div class="theme-hero-area-bg-wrap">
        <div class="theme-hero-area-bg-pattern theme-hero-area-bg-pattern-ultra-light" style="background-image:url(assets/img/patterns/travel-1.png);"></div>
        <div class="theme-hero-area-grad-mask"></div>
      </div>
      <div class="theme-hero-area-body">
        <div class="container">
          <div class="row _pv-60">
            <div class="col-md-9 ">
              <div class="_mob-h">
                <div class="theme-hero-text theme-hero-text-white">
                  <div class="theme-hero-text-header">
                    <h2 class="theme-hero-text-title _mb-20 theme-hero-text-title-sm"><?=get_total_buses()?> Buses found </h2>
                  </div>
                </div>
                <ul class="theme-breadcrumbs _mt-20">
                  <li>
                    <p class="theme-breadcrumbs-item-title">
                      <a href="<?=base_url('Home')?>">Home</a>
                    </p>
                  </li>
                  <li>
                    <p class="theme-breadcrumbs-item-title active">Bookings</p>
                    <!-- <p class="theme-breadcrumbs-item-subtitle">2438 buses</p> -->
                  </li>
                </ul>
              </div>
             
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="theme-page-section theme-page-section-gray">
      <div class="container">
        <div class="row row-col-static" id="sticky-parent" data-gutter="20">
          <div class="col-md-3 ">
            <div class="sticky-col _mob-h">
              <div class="theme-search-results-sidebar-map-view _mb-10">
                <a class="theme-search-results-sidebar-map-view-link" href="#"></a>
                <div class="theme-search-results-sidebar-map-view-body">
                  <i class="fa fa-map-marker theme-search-results-sidebar-map-view-icon"></i>
                  <p class="theme-search-results-sidebar-map-view-sign">Map View</p>
                </div>
                <div class="theme-search-results-sidebar-map-view-mask"></div>
              </div>
              <form action="<?=base_url('Listing')?>" >
              <div class="theme-search-area _p-20 _bg-p _br-4 _mb-20 _bsh theme-search-area-vert theme-search-area-white">
                <div class="theme-search-area-form" id="hero-search-form">
                  <div class="theme-search-area-section first theme-search-area-section-curved theme-search-area-section-sm theme-search-area-section-fade-white theme-search-area-section-no-border">
                    <label class="theme-search-area-section-label">Pick Up</label>
                    <div class="theme-search-area-section-inner">
                      <i class="theme-search-area-section-icon lin lin-location-pin"></i>
                      <select class="form-control theme-search-area-section-input typeahead" id="from" name="from">
                       <?php $state=""; if(!empty($locations)): foreach($locations as $location):?>
                        <?php if($from==$location->location_id){ $state="selected"; }else{ $state="";} ?>
                                  <option <?=$state?> value="<?=$location->location_id?>"><?=$location->name?></option>
                        <?php endforeach; endif; ?>
                      </select>
                    </div>
                  </div>
                  <div class="theme-search-area-section theme-search-area-section-curved theme-search-area-section-sm theme-search-area-section-fade-white theme-search-area-section-no-border">
                    <label class="theme-search-area-section-label">Drop Off</label>
                    <div class="theme-search-area-section-inner">
                      <i class="theme-search-area-section-icon lin lin-location-pin"></i>
                       <select class="form-control theme-search-area-section-input typeahead" id="to" name="to">
                        <?php $state=""; if(!empty($locations)): foreach($locations as $location):?>
                         <?php if($to==$location->location_id){ $state="selected"; }else{ $state="";} ?>
                                  <option <?=$state?> value="<?=$location->location_id?>"><?=$location->name?></option>
                        <?php endforeach; endif; ?>
                       </select>
                    </div>
                  </div>
                  <div class="row" data-gutter="10">
                    <div class="col-md-12 ">
                      <div class="theme-search-area-section theme-search-area-section-curved theme-search-area-section-sm theme-search-area-section-fade-white theme-search-area-section-no-border">
                        <label class="theme-search-area-section-label">Departure Date</label>
                        <div class="theme-search-area-section-inner">
                          <i class="theme-search-area-section-icon lin lin-calendar"></i>
                          <input class="theme-search-area-section-input datePickerEnd _mob-h" value="<?=$departure_date?>" type="text" placeholder="<?=$departure_date?>" name="departure_date"/>
                          <input class="theme-search-area-section-input _desk-h mobile-picker" value="<?=$departure_date?>" type="date"/>
                        </div>
                      </div>Pickup Location
                    </div>
                    
                  </div>
                  <button class="theme-search-area-submit _mt-0 _tt-uc theme-search-area-submit-curved theme-search-area-submit-sm theme-search-area-submit-white theme-search-area-submit-primary">Change</button>
                </div>
              </div>
            </form>
              <div class="theme-search-results-sidebar">
                
              </div>
              <div class="theme-ad">
                <a class="theme-ad-link" href="#"></a>
                <p class="theme-ad-sign">Advertisement</p>
                <img class="theme-ad-img"src="https://i1.wp.com/biashara.co.ke/how-to/wp-content/uploads/2016/05/lipa-na-mpesa-paybill-numbers-for-banks.fw_.png?fit=833%2C450&ssl=1" alt="Image Alternative text" title="Image Title"/>
              </div>
            </div>
          </div>
          <div class="col-md-6-5 ">
            <div class="theme-search-results-sort _mob-h _b-n clearfix">
              <!-- <h5 class="theme-search-results-sort-title">Sort by:</h5> -->
              
              <div class="dropdown theme-search-results-sort-alt">
                <a id="dropdownMenu" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">More
                  <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu">
                  <li>
                    <a href="#">Recommended</a>
                  </li>
                  <li>
                    <a href="#">Most Popular</a>
                  </li>
                  <li>
                    <a href="#">Trendy Now</a>
                  </li>
                  <li>
                    <a href="#">Best Deals</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="theme-search-results-sort-select _desk-h">
              <select>
                <option>Price</option>
                <option>Guest Rating</option>
                <option>Property Class</option>
                <option>Property Name</option>
                <option>Recommended</option>
                <option>Most Popular</option>
                <option>Trendy Now</option>
                <option>Best Deals</option>
              </select>
            </div>
            <div class="theme-search-results">
              <div class="_mob-h">
                 
               <?php if(!empty($buses)): foreach($buses as $bus): ?>  
                <div class="theme-search-results-item theme-search-results-item-">
                  <div class="theme-search-results-item-preview">
                    <a class="theme-search-results-item-mask-link" href="#"></a>
                    <div class="row" data-gutter="20">
                      <div class="col-md-5 ">
                        <div class="theme-search-results-item-img-wrap">
                          <img class="theme-search-results-item-img"src="https://buupass.com/app/themes/bus/assets/images/bus_icon_white.png" alt="Image Alternative text" title="Image Title"/>
                        </div>
                        
                      </div>
           
                      <div class="col-md-5 ">
                        <h5 class="theme-search-results-item-title theme-search-results-item-title-lg"> <?=get_location_name($from).' - '. get_location_name($to).' - ' ?> <?=get_client_name($bus->client_id)?></h5>
                       <!--  <div class="theme-search-results-item-car-location">
                          <i class="fa fa-plane theme-search-results-item-car-location-icon"></i>
                          <div class="theme-search-results-item-car-location-body">
                            <p class="theme-search-results-item-car-location-title">LaGuardia Airport International Airport</p>
                            <p class="theme-search-results-item-car-location-subtitle">Shuttle to car</p>
                          </div>
                        </div> -->

                        <p class="theme-search-results-item-price-sign">Prices (KSH)</p>
                        <ul class="theme-search-results-item-car-list">

                          <li>
                            <i class="fa fa-check"></i>VIP : <?=$bus->vip?>
                          </li>
                          <li>
                            <i class="fa fa-check"></i>FCLASS : <?=$bus->fclass?>
                          </li>
                          <li>
                            <i class="fa fa-check"></i>BUSINESS : <?=$bus->business?>
                          </li>
                           <li>
                            <i class="fa fa-check"></i>NORMAL : <?=$bus->normal?>
                          </li>
                        </ul>
                      </div>
                      <div class="col-md-2 ">
                        <div class="theme-search-results-item-book">
                          <div class="theme-search-results-item-price">
                            <p class="theme-search-results-item-price-sign"><h6><?=seats_left($bus->bus_id,date_format(date_create($departure_date),'Y-m-d'))?> Seats Left</h6></p>
                            <p style="color:green;"></p>
                 
                          </div>
                          <a class="btn btn-primary-inverse btn-block theme-search-results-item-price-btn" href="javascript:bookNow('<?=$bus->bus_id?>')">Book Now</a>
                        </div>
                      </div>
                                 <div class="col-md-12">
                        <ul class="theme-search-results-item-car-feature-list">
                          <li>
                            <i class="fa fa-clock-o"><h6>DEPARTURE TIME</h6></i>
                            <span><h6><?=$bus->departure_time?></h6></span>
                          </li>
                          <li>
                            <i class="fa fa-clock-o"><h6>TRAVEL DATE</h6></i>
                            <span><h6><?=$departure_date?></h6></span>
                          </li>
                          <li>
                            <i class="fa fa-map-marker"><h6>AVAILABLE BOARDING POINTS</h6></i>
                            <span><h6><?=$bus->boarding_point?></h6></span>
                          </li>
                         
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endforeach; endif;  ?>

              </div>
             

              

            </div>
            <a class="btn _tt-uc _fs-sm _mt-10 btn-white btn-block btn-lg" href="#">Load More Results</a>
          </div>
          <div class="col-md-2-5 ">
            
          </div>
        </div>
      </div>
    </div>
    <div class="theme-footer" id="mainFooter">
      <div class="container _ph-mob-0">
        <div class="row row-eq-height row-mob-full" data-gutter="60">
          <div class="col-md-3">
            <div class="theme-footer-section theme-footer-">
              <a class="theme-footer-brand _mb-mob-30" href="#">
                <img src="img/logo-black.png" alt="Image Alternative text" title="Image Title"/>
              </a>
              <div class="theme-footer-brand-text">
                <p>   </p>
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
  
  function bookNow(bus_id) {

    var from = '<?=$from?>';
    var to = '<?=$to?>';
    var departure_date = '<?=$departure_date?>';

    var url = "<?=base_url('Booking')?>?busId="+bus_id+"&from="+from+"&to="+to+"&departureDate="+departure_date;
        
    $(location).attr('href',url);

  }

</script>