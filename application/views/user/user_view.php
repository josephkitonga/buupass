 <!-- Main section-->
    <section>
        <!-- Page content-->
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="page-header">
                   <!-- <h2><?=$module?></h2>/ -->
                   <h3>
                     <?php if (file_exists($Customer->logo_url)) { ?>
                      <img style="border-radius: 50%;width: 80px;height: 80px;position: relative;overflow: hidden;" src="<?=base_url().$Customer->logo_url?>" class="border-trans">
                      <?=$Customer->company?>
                     <?php } ?>  
                     </h3>
                    <ol class="breadcrumb">
                        <li><a href="<?=base_url('Home')?>">Home</a></li>
                        <li class="active">client</li>
                    </ol>
                </div>


                 <!-- Exportable Table -->
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="card-header">
                                <?php if(check_user_count($customer_id)>=0){?>
                                 <button onclick="addnewUser()"  type="button" class="btn btn-primary  waves-effect waves-float" style="background: #670214;"><i class="material-icons">add</i> Add New User</button>
                                <?php }else{ ?>

                                 <div id="alert" class="alert alert-danger" role="alert"> Oh snap! Seems you have reached your user limit. Please contact Engentroy for upgrade. </div>

                              <?php }?>
                            </div>
                            <div class="body">
                                <table class="table table-bordered table-striped table-hover dataTable exportable responsive">
                                     <!-- <table id="user_table" class="display table" style="width: 100%; cellspacing: 0;"> -->
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                 <th>Phone</th>
                                                  <th>National Id</th>
                                                  <th>User Type</th>
                                                  <th>NSSF Pin</th>
                                                  <th>NHIF Pin</th>
                                                  <th>Department</th>
                                                  <th>Employee Code</th>
                                                <th>Date Registerd</th>
                                                <th>State</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                       
                                        <tbody>
                                            <?php $count=1; if(!empty($Users)): foreach($Users as $data): ?>
                                            <tr>
                                                <td><?=$count++?></td>
                                                <td><?=$data['full_name']?></td>
                                                <td><?=$data['email']?></td>
                                                 <td><?=$data['phone_no']?></td>
                                                 <td><?=$data['national_id']?></td>
                                                 <td><?=$data['user_type_id']?></td>
                                                 <td><?=$data['nssf_pin']?></td>
                                                 <td><?=$data['nhif_pin']?></td>
                                                 <td><?=$data['department_id']?>
                                                 <td><?=$data['employee_code']?></td>
                                                <td><?=date('jS  F Y',strtotime($data['created_at']))?></td>
                                                <?php $state="Inactive"; if ($data['active']==1) {
                                                    $state="Active"; 
                                                } ?>
                                                <td><?=$state?></td>
                                                <td>  
                                                  <button onclick="editUser('<?=$data['user_id']?>')" type="button" class="btn btn-primary btn-addon m-b-sm btn-rounded btn-sm"><i class="fa fa-pencil"></i> edit</button>
                                                 

                                                </td>
                                            </tr>
                                        <?php endforeach;  endif;  ?>
                                        </tbody>
                                       </table>  
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Exportable Table -->



            </div>


        </div>


           <!-- Modal -->
   



           <!-- Modal -->
                    <div class="modal fade" id="newUserDialog" tabindex="-1" role="dialog"  aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Users</h4>
                                </div>
                                <div class="modal-body">
                                    <form id="newUserform">
                                        <input type="hidden" name="user_id" id="user_id">
                                     <div class="row">
                                         <div class="col-md-6">
                                     <label for="car_make">User Type</label>
                                        <div class="form-group">
                                        <div class="form-line">
                                        <select id="user_type_id" name="user_type_id" class="form-control input-rounded" style="width: 100%">
                                        <option value="">~select user type~</option>
                                        <?php if(!empty($userType)): foreach ($userType as  $value): ?>
                                        <option value="<?=$value->user_type_id?>"><?=$value->name?></option>
                                         <?php endforeach; endif; ?>
                                        </select>
                                        </div>
                                        </div>
                                        </div>

                                         <div class="col-md-6">
                                         <label for="car_make">Department</label>
                                        <div class="form-group">
                                        <div class="form-line">
                                        <select id="department_id" name="department_id" class="form-control input-rounded" style="width: 100%">
                                        <option value="">~select department~</option>
                                        <?php if(!empty($dept)): foreach ($dept as  $value): ?>
                                        <option value="<?=$value->department_id?>"><?=$value->name?></option>
                                         <?php endforeach; endif; ?>
                                        </select>
                                        </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="row"> 
                                        <div class="col-md-4">
                                        <div class="form-group">
                                           <div class="form-line">
                                            <input type="text" id="full_name" name="full_name" class="form-control input-rounded" placeholder="Full Name" required="">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                         <div class="form-group">
                                           <div class="form-line">
                                            <input type="number" id="phone_no" name="phone_no" class="form-control input-rounded" placeholder="Phone" required="">
                                       </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                         <div class="form-group">
                                           <div class="form-line">
                                            <input type="text" id="national_id" name="national_id" class="form-control input-rounded" placeholder="National Id" required="">
                                        </div>
                                        </div>
                                        </div>
                                      </div>
                                        <div class="row">
                                          
                                    <div class="col-md-4">
                                         <div class="form-group">
                                           <div class="form-line">
                                            <input type="text" id="employee_code" name="employee_code" class="form-control input-rounded" placeholder="Employee No" required="">
                                        </div>
                                        </div>
                                    </div>
                                          
                               <!--      <div class="col-md-3">
                                         <div class="form-group">
                                           <div class="form-line">
                                            <input type="text" id="licence_no" name="licence_no" class="form-control input-rounded" placeholder="License No" required="">
                                        </div>
                                        </div>
                                    </div> -->
                                    <div class="col-md-4">
                                         <div class="form-group">
                                           <div class="form-line">
                                            <input type="text" id="nssf_pin" name="nssf_pin" class="form-control input-rounded" placeholder="Nssf Pin" required="">
                                       </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                          <div class="form-group">
                                           <div class="form-line">
                                            <input type="text" id="nhif_pin" name="nhif_pin" class="form-control input-rounded" placeholder="Nhif Pin" required="">
                                        </div>
                                        </div>
                                    </div>
                                </div>

                                       <div class="row">
                                           
               <!--                                     <div class="col-sm-6"> 
                        <label for="licence_initial_date">License Initial Date</label>
                        <div class="form-group">
                            <div class="form-line">
                            <input type="text" id="licence_initial_date" name="licence_initial_date" class="form-control date"  autocomplete="off" required="">
                            </div>
                        </div>
                       </div>
                        <div class="col-sm-6">
                        <label for="licence_expiry_date">License Expiry Date</label>
                        <div class="form-group">
                            <div class="form-line">
                            <input type="text" id="licence_expiry_date" name="licence_expiry_date" class="form-control date" autocomplete="off"  required="">
                            </div>
                        </div>
                    </div>
 -->
                                       </div>
   
                                       <div class="row">
                                         <div class="col-sm-12"> 
                                         <div class="form-group">
                                           <div class="form-line">
                                            <input type="email" id="email" name="email" class="form-control input-rounded" placeholder="Email" required="">
                                        </div>
                                        </div>
                                    </div>
                                     <!-- <div class="col-sm-12"> 

                                        <div class="form-group">
                                           <div class="form-line">
                                            <input type="text" id="password" name="password" class="form-control input-rounded" placeholder="Password" required="">
                                            </div>
                                       </div>
                                   </div> -->
                                </div>

<!-- 
                                       <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                            <select id="active" name="active" class="form-control input-rounded" style="width: 100%">
                                            <option >~select state~</option>
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                            </select>
                                            </div>
                                        </div>
                                        </div>  -->

                             </form>
                               </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button onclick="Save()" type="button" class="btn btn-success">Add User</button>
                                </div>
                            </div>
                        </div>
                    </div>


                     <!-- Default Modal -->
        <div class="modal fade" id="licenceModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                    </div>
                    <div class="modal-body">
                             <form id="licenceForm">
                              <input type="hidden" name="user_id" id="user_id">

                         <div class="col-sm-12"> 
                        <label for="licence_initial_date">License Initial Date</label>
                        <div class="form-group">
                            <div class="form-line">
                            <input type="text" id="insurance_initial_date" name="insurance_initial_date" class="form-control date"  autocomplete="off" required="">
                            </div>
                        </div>
                       </div>
                        <div class="col-sm-12">
                        <label for="licence_expiry_date">License Expiry Date</label>
                        <div class="form-group">
                            <div class="form-line">
                            <input type="text" id="insurance_expiry_date" name="insurance_expiry_date" class="form-control date" autocomplete="off"  required="">
                            </div>
                        </div>
                    </div>
                               
                             </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button onclick="updateLicence()" type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>


              <!-- Default Modal -->
        <div class="modal fade" id="userLicenceDialog" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                    </div>
                    <div class="modal-body">
                             <div id="licence" ></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                    </div>
                </div>
            </div>
        </div>




        
    </section>

    <!-- FOOTER-->
    <footer>
        <span id="footer"></span>
    </footer>
    
</div>



    <script type="text/javascript">
        var Type;

        jQuery(document).ready(function($) {
                      $('.date').datepicker({format: 'yyyy-mm-dd', todayHighlight: true});

        });

            
        function licenceUpdate(user_id) {
        Type="licenceUpdate";
        $('#licenceForm input[name=user_id]').val(user_id);
        $('#licenceModal').modal('show');
        }

        function addnewUser() {
           Type = "addnewUser";
            $('#newUserDialog').modal('show');
        }

        function updateLicence() {
            
            $.ajax({
               url: '<?=base_url('Users/updateLicence')?>',
         type: 'POST',
         data: $('#licenceForm').serialize(),
            })
            .done(function() {
                console.log("success");
                location.reload();
            })
            .fail(function() {
                console.log("error");
            })
            .always(function() {
                console.log("complete");
            });
            

        }

        function editUser(data) {
            Type = "editUser";
            $.ajax({
                url: '<?=base_url('Users/editUser/')?>'+data,
                type: 'GET',
                dataType: 'json',
                // data: {param1: 'value1'},
            })
            .done(function(mdata) {
                console.log("success");
                   $.each(mdata[0], function(index, val) {

                   $('#'+index).val(val);

                   // $('#name').val(val.user_name);
                   // $('#email').val(val.email);
                   // $('#branch_id').val(val.branch_id);
                   // $('#user_type').val(val.user_type);
                   // $('#state').val(val.active);
                   // $('#staff_id').val(val.staff_id);
               });
                  $('#newUserDialog').modal('show');
            })
            .fail(function() {
                console.log("error");
            })
            .always(function() {
                console.log("complete");
            });
            

        }

        function Save() {
           switch(Type){
             case 'addnewUser':
               var Url = '<?=base_url('Users/addUser')?>';
               Submit(Url);
             break;
             case 'editUser':
             var Url = '<?=base_url('Users/updateUser')?>';
               Submit(Url);
             break;
           }
        }

        function Submit(Url) {
           $.ajax({
               url: Url,
               type: 'POST',
               // dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
               data: $('#newUserform').serialize(),
           })
           .done(function(data) {
               console.log("success");
               console.log(data);
               if (data=="exist") {
                // toastr["error"]("User already Exist!");
                alert("User already Exist!");
               }else{
                   location.reload();
               }
           })
           .fail(function() {
               console.log("error");
           })
           .always(function() {
               console.log("complete");
           });
           
        }


         function viewLicence(data) {
           $.ajax({
                url: '<?=base_url('Users/getDriverLicence/')?>'+data,
                type: 'GET',
                // dataType: 'json',
                // data: {param1: 'value1'},
            })
            .done(function(mdata) {
                console.log("success");
                  
                  $('#licence').html(mdata);

                  $('#userLicenceDialog').modal('show');
            })
            .fail(function() {
                console.log("error");
            })
            .always(function() {
                console.log("complete");
            });
            

        }

    </script>

</body>

</html>