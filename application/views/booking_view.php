<style type="text/css">
  
  <style type="text/css">
  .list-group-horizontal .list-group-item {
    display: inline-block;
}
.list-group-horizontal .list-group-item {
  margin-bottom: 0;
  margin-left:-4px;
  margin-right: 0;
}
.list-group-horizontal .list-group-item:first-child {
  border-top-right-radius:0;
  border-bottom-left-radius:4px;
}
.list-group-horizontal .list-group-item:last-child {
  border-top-right-radius:4px;
  border-bottom-left-radius:0;
}
</style>

</style>
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

              <div class="theme-search-results-sidebar">
                key
              </div>
              <div class="theme-ad">
               
            <button type="button" class="btn btn-primary">OPEN</button>
            <button type="button" class="btn btn-success">BOOKED</button>
            <button type="button" class="btn btn-danger">PERSONEL</button>

           <!--  <button type="button" class="btn btn-warning">Warning</button>
            <button type="button" class="btn btn-info">Info</button>
            <button type="button" class="btn btn-light">Light</button>
            <button type="button" class="btn btn-dark">Dark</button>
            <button type="button" class="btn btn-link">Link</button> -->

              </div>
            </div>
          </div>
          <div class="col-md-6-5 ">
            <div class="theme-search-results-sort _mob-h _b-n clearfix">
              <h5 class="theme-search-results-sort-title">Select a seat</h5>
              
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
                  
              <!-- bus map -->
              <table style="display: inline;
    float: none;"> 
              <?php if(!empty(get_bus_rows($busId))): for($i=1; $i < get_bus_rows($busId); $i++): ?>
               <tr align="center">

               <?php $disabled=""; $color="btn-primary"; foreach ($chairMap as $value): if ($value->row != $i){ continue;}  
                if ($value->name=='Driver') { $color="btn-danger"; $disabled="disabled";  }
                if (check_booking_availability($value->id,date_format(date_create($departureDate),'Y-m-d'))=="X") { $color="btn-success"; $disabled="disabled";}
                ?>
                 <td style="margin: 10px; padding: 5px;"><button onclick="selected('<?=$value->id?>')" type="button" class="button btn <?=$color?>" <?=$disabled?> style="padding-top: 10px;
  padding-right: 10px;
  padding-bottom: 10px;
  padding-left: 10px;">
                  Seat <span class="badge badge-light"><?=$value->id?></span>
                </button>
                 </td>
               <?php $disabled=""; $color="btn-primary"; endforeach ?>
              
              </tr>                                                                                              
             <?php endfor; endif; ?>
 
             </table>
             

              

            </div>
            <a class="btn _tt-uc _fs-sm _mt-10 btn-white btn-block btn-lg" href="#">  </a>
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
                <p>  </p>
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


         <!-- Modal -->
        <div class="modal fade" id="bookingModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                
           <form id="bookingForm">
            <input type="hidden" name="bus_id" id="bus_id">
            <input type="hidden" name="seat_id" id="seat_id">
            <input type="hidden" name="departure_date" id="departure_date">
            
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="inputEmail4">FIRST NAME</label>
                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="FIRST NAME" required="">
              </div>
              <div class="form-group col-md-4">
                <label for="inputPassword4">LAST NAME</label>
                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="LAST NAME" required="">
              </div>
              <div class="form-group col-md-4">
                <label for="inputPassword4">ID/PASSPORT</label>
                <input type="number" class="form-control" id="id_no" name="id_no" placeholder="ID/PASSPORT" required="">
              </div>
            </div>
            
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputCity">PHONE NUMBER</label>
                <input type="number" class="form-control" id="phone" name="phone" required="">
              </div>
              <div class="form-group col-md-6">
                <label for="inputState">NATIONALITY</label>
                <select id="nationality" name="nationality" class="form-control" required="">
                  <option value="" selected>Choose...</option>
                  <?php if(!empty($country)): foreach($country as $row): ?>
                  <option value="<?=$row->country_id?>"><?=$row->name?></option>
                <?php endforeach; endif; ?>
                </select>
              </div>
             
            </div>
            <div class="form-group">
              <div class="form-check">
                <label class="form-check-label" for="gridCheck">
                  Details of person paying.
                </label>
              </div>
            
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="inputEmail4">FUll NAME</label>
                <input type="text" class="form-control" id="payee_name" name="payee_name" placeholder="name" required="">
              </div>
              <div class="form-group col-md-4">
                <label for="inputPassword4">EMAIL</label>
                <input type="email" class="form-control" id="payee_mail" name="payee_mail" placeholder="Email" required="">
              </div>
              <div class="form-group col-md-4">
                <label for="inputPassword4">MOBILE</label>
                <input type="number" class="form-control" id="payee_mobile" name="payee_mobile" placeholder="Phone" required="">
              </div>
            </div>
          </div>

          </form>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button onclick="saveBooking()" type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>

           <!-- Modal -->
        <div class="modal fade" id="receiptModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
           <!--    <div class="modal-header">
                <h5 class="modal-title" >Receipt</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div> -->
              <div class="modal-body">
              
              <div id="receipt"></div>  
              
              </div>
             <!--  <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button onclick="saveBooking()" type="button" class="btn btn-primary">Save changes</button>
              </div> -->
            </div>
          </div>
        </div>


<script type="text/javascript">

  jQuery(document).ready(function($) {
 
  });
  
  function selected(seat_id) {
   
   $('#exampleModalLongTitle').text('Passenger Details (Seat.'+seat_id+')');
   $('#seat_id').val(seat_id);
   $('#bus_id').val('<?=$busId?>');
   $('#departure_date').val('<?=$departureDate?>');
   
   $('#bookingModal').modal('show');

  }


     
  function saveBooking(argument) {
      var validator = $("#bookingForm").validate();
      validator.form();
    if (validator.checkForm()) {     

        Submit();

     }
  }   


  function Submit() {

    $.ajax({
      url: '<?=base_url('Booking/add')?>',
      type: 'POST',
      // dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
      data: $('#bookingForm').serialize(),
    })
    .done(function(data) {
      console.log("success");

     $('#bookingModal').modal('hide');

      $('#receipt').html(data);

      $('#receiptModal').modal('show');
    })
    .fail(function() {
      console.log("error");
    })
    .always(function() {
      console.log("complete");
    });
    
    
  }

  function pay() {

     $('#receiptModal').modal('hide');
    
        swal({
      title: "Processing Payment",
      text: "Please Use your mpesa to pay",
      type: "info",
      showCancelButton: true,
      closeOnConfirm: false,
      showLoaderOnConfirm: true
    }, function () {
      setTimeout(function () {
          swal({
          title: "Good job!",
          text: "Your payment has been approved!",
          type: "success",
          showCancelButton: false,
          confirmButtonClass: "btn-primary",
          confirmButtonText: "Ok !",
          closeOnConfirm: false
          },
          function(){
              location.reload();
          });
      }, 2000);
    });

  }
</script>