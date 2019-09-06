        <section class="banner style2">
        </section>
        <div class="dashboard-banner">
            <div class="container">
                <h2> </h2>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="#"> </a>/</li>
                        <li class="active"><a href="#"> </a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="container">
                <div class="my-account">
                    <div class="account-tab">
                        <ul>
                            <li class="active"><a href="javascript:void(0);" id="profile">Profile</a></li>
                            <li><a href="javascript:void(0);" id="account_info">Account Info</a></li>
                            <li><a href="javascript:void(0);" id="changePassword">Change Password</a></li>
                        </ul>
                    </div>
                    <div class="tab-content profile-con open">
                        <div class="personal-edit">
                            <a href="#"><span class="icon icon-pencile"></span>Edit Profile</a>
                        </div>
                        <div class="personal-information">
                            <div class="info-slide">
                                <p><span>Name :</span><?=$first_name.' '.$last_name?></p>
                            </div>
                            <div class="info-slide">
                                <p><span>Email ID :</span><?=$email?></p>
                            </div>
                            <div class="info-slide">
                                <p><span>Mobile Number :</span><?=$Profile[0]['phone_number']?></p>
                            </div>
                            <div class="info-slide">
                                <p><span>Date Of Birth :</span><?=$Profile[0]['birth'];?></p>
                            </div>
                            <div class="info-slide">
                                <p><span>Gender <?=check_referee($user_type);?>:</span><?=get_gender($Profile[0]['gender_id'])?></p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content account_info-con">
                        <!-- <form id="profileInfoForm"> -->
                        <!-- <form id="profileInfoForm" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                        <input type="file" id="profile_image" name="profile_image" size="33" />
                        </form> -->
                        <!-- <form action="<?//=base_url('Profile/updateUserProfile')?>" id="profileInfoForm" enctype="multipart/form-data"> -->
                            <?php echo form_open_multipart('Profile/updateUserProfile');?>

                            <?php if (check_skill($user_type)=='1'):?>
                         <div class="select-row">
                                <select name="service_id" id="service_id" class="form-control">
                                    <option>Please Select user type</option>
                                    <?php if(!empty($service)): foreach($service as $row): ?>
                                    <option value="<?=$row->service_id?>"><?=$row->name?></option>
                                    <?php endforeach; endif; ?>
                                </select>
                            </div>
                            <div class="form-group">
                            <label for="exampleFormControlTextarea1"> </label>
                            <textarea class="form-control" id="service_description" name="service_description" rows="4" placeholder="Please provide a detailed description of your skill"></textarea>
                            </div>
                             
                            <?php for ($i=1; $i <= check_referee($user_type); $i++): ?>
                            <!-- <br> -->
                            <h4>Referee <?=$i?> </h4>

                                <div class="form-row ">
                                <div class="form-group col-md-6">
                                  <label for="name">Name</label>
                                  <input type="text" class="form-control" id="ref_name_<?=$i?>" name="ref_name_<?=$i?>">
                                </div>
                                 <div class="form-group col-md-6">
                                  <label for="phone">Phone</label>
                                  <input type="text" class="form-control" id="ref_phone_<?=$i?>" name="ref_phone_<?=$i?>">
                                </div>
                               </div>

                            <?php endfor; ?>

                            <?php $count=0; foreach($mediaType as $row): $count++;?>

                                <div class="form-group col-md-6">
                                  <label for="docs_<?=$count?>"><?=$row->name?></label>
                                  <input type="hidden" value="<?=$row->media_type_id?>" name="media_type_id_<?=$count?>">
                                  <input type="file" class="form-control" id="docs_<?=$count?>" name="docs_<?=$count?>">
                                </div>
                            <?php endforeach; ?>


                            <?php endif;?>
                           

                        <div class="booking-status">
                            <div class="submit-box">
                                <input type="submit" value="Update Profile Info" class="btn">
                            </div>
                            <!-- <a href="#" class="cancel">Cancel your Booking</a> -->
                            <div class="status">Status :<span> Booked</span></div>
                        </div>
                       </form>
                    </div>
                    <div class="tab-content changePassword-con">
                       <!--  <div class="change-password ">
                            <div class="input-box">
                                <input type="text" placeholder="Current Password">
                            </div>
                            <div class="input-box">
                                <input type="text" placeholder="New Password">
                            </div>
                            <div class="input-box">
                                <input type="text" placeholder="Confirm Password">
                            </div>
                            <div class="submit-box">
                                <input type="submit" value="Save" class="btn">
                            </div>
                        </div> -->
                    </div>
                    
                </div>
                <div class="functionality-view">
                    <div class="row">
                        <div class="col-sm-6 col-md-3">
                            <div class="functionality-box">
                                <div class="iconBox"><div class="icon icon-lead-management"></div></div>
                                <h3>Lead Management</h3>
                                <p>Increase occupancy, automate the lead management process, grow your  customer relationships, match sales-ready leads to the appropriate sales people.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="functionality-box">
                                <div class="iconBox"><div class="icon icon-sales"></div></div>
                                <h3>Sales</h3>
                                <p>Track sales opportunities, manage the sales process and generate proposals. Built-in process provides an aggregate view of account activity from the past, present and future.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="functionality-box">
                                <div class="iconBox"><div class="icon icon-booking"></div></div>
                                <h3>Booking</h3>
                                <p>Manage calendars , share availability, easily view events color-coded by status, type or location. Book and manage multiple spaces, venues, and sites all from one master calendar.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="functionality-box">
                                <div class="iconBox"><div class="icon icon-operations"></div></div>
                                <h3>Operations</h3>
                                <p>Assign resources and review stock alerts. Create detailed reports, work orders, and generate invoices. Receive alerts on changes as they take place.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


  <script type="text/javascript">
    
    function updateUserProfile() {

         // Get form
           
       $.ajax({
           url: '<?=base_url('Profile/updateUserProfile')?>',
           type: 'POST',
           // dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
           data: $('#profileInfoForm').serialize(),
       })
       .done(function(data) {
           console.log("success");
           console.log(data);
       })
       .fail(function() {
           console.log("error");
       })
       .always(function() {
           console.log("complete");
       });
       

    }


  </script>