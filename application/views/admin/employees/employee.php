<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src = "https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>
 
<script>
      var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
};
   </script> -->


<div id="wrapper" class="customer_profile">
   <div class="content">
      <div class="row">
         <div class="col-md-12">
                     <!-- start -->
<h4 class="customer-profile-group-heading"><?php echo _l('client_add_edit_profile'); ?></h4>
<div class="row">
<?php echo form_open_multipart('admin/employees/save', array('id'=>'employee-form','class'=>'employee-form')); ?>
   <!-- <form method="post" action="admin/employees/save"  class="employee-form" enctype="multipart/form-data">  -->
   <div class="additional"></div>
   <div class="col-md-12">
      <div class="horizontal-scrollable-tabs">
         <div class="scroller arrow-left"><i class="fa fa-angle-left"></i></div>
         <div class="scroller arrow-right"><i class="fa fa-angle-right"></i></div>
         <div class="horizontal-tabs">
            <ul class="nav nav-tabs profile-tabs row customer-profile-tabs nav-tabs-horizontal" role="tablist">
               <li role="presentation" class="<?php if(!$this->input->get('tab')){echo 'active';}; ?>">
                  <a href="#contact_info" aria-controls="contact_info" role="tab" data-toggle="tab">
                  <!-- <?php echo _l( 'customer_profile_details'); ?> -->
                  General Information
                  </a>
               </li>
               <?php
                  $customer_custom_fields = false;
                  if(total_rows(db_prefix().'customfields',array('fieldto'=>'customers','active'=>1)) > 0 ){
                       $customer_custom_fields = true;
                   ?>
               <!-- <li role="presentation" class="<?php if($this->input->get('tab') == 'custom_fields'){echo 'active';}; ?>">
                  <a href="#custom_fields" aria-controls="custom_fields" role="tab" data-toggle="tab">
                  <?php echo hooks()->apply_filters('customer_profile_tab_custom_fields_text', _l( 'custom_fields')); ?>
                  </a>
               </li> -->
               <?php } ?>
               <!-- <li role="presentation">
                  <a href="#billing_and_shipping" aria-controls="billing_and_shipping" role="tab" data-toggle="tab">
                  <?php echo _l( 'billing_shipping'); ?>
                  </a>
               </li> -->
               <?php hooks()->do_action('after_customer_billing_and_shipping_tab', isset($client) ? $client : false); ?>
               <?php if(isset($client)){ ?>
               <li role="presentation">
                  <a href="#customer_admins" aria-controls="customer_admins" role="tab" data-toggle="tab">
                  <?php echo _l( 'customer_admins' ); ?>
                  </a>
               </li>
               <?php hooks()->do_action('after_customer_admins_tab',$client); ?>
               <?php } ?>
            </ul>
         </div>
      </div>
      <div class="tab-content mtop15">
         <?php hooks()->do_action('after_custom_profile_tab_content',isset($client) ? $client : false); ?>
         <?php if($customer_custom_fields) { ?>
         <div role="tabpanel" class="tab-pane <?php if($this->input->get('tab') == 'custom_fields'){echo ' active';}; ?>" id="custom_fields">
            <?php $rel_id=( isset($client) ? $client->userid : false); ?>
            <?php echo render_custom_fields( 'customers',$rel_id); ?>
         </div>
         <?php } ?>
         <div role="tabpanel" class="tab-pane<?php if(!$this->input->get('tab')){echo ' active';}; ?>" id="contact_info">
            <!-- <div class="row">
               <div class="col-md-12 mtop15 <?php if(isset($client) && (!is_empty_customer_company($client->userid) && total_rows(db_prefix().'contacts',array('userid'=>$client->userid,'is_primary'=>1)) > 0)) { echo ''; } else {echo ' hide';} ?>" id="client-show-primary-contact-wrapper">
                  <div class="checkbox checkbox-info mbot20 no-mtop">
                     <input type="checkbox" name="show_primary_contact"<?php if(isset($client) && $client->show_primary_contact == 1){echo ' checked';}?> value="1" id="show_primary_contact">
                     <label for="show_primary_contact"><?php echo _l('show_primary_contact',_l('invoices').', '._l('estimates').', '._l('payments').', '._l('credit_notes')); ?></label>
                  </div>
               </div>
         </div> -->

         <div class="col-md-12">
          <h4> Personal Information </h4>
          <hr>
         </div>
              
         <div class="col-md-8">
          <div class="row">
               <div class="col-md-4">
                 <div class="form-group">
                     <label for="employee_code">Employee Code </label>
                     <div>
                        <input type="text" name="employee_code" id="employee_code" value="<?php  isset($client) ? $client->employee_code : '' ?>" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
               <div class="form-group">
                     <label for="frist_name">Employee First Name </label>
                     <div >
                        <input type="text" name="frist_name" id="frist_name" value="<?php  isset($client) ? $client->first_name : '' ?>" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
               <div class="form-group">
                     <label for="frist_name">Employee Middle Name </label>
                     <div >
                        <input type="text" name="middle_name" id="middle_name" value="<?php isset($client) ? $client->middle_name : ''  ?>" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
               <div class="form-group">
                     <label for="frist_name">Employee Last Name </label>
                     <div>
                        <input type="text" name="last_name" id="last_name" value="<?php isset($client) ? $client->last_name : ''  ?>" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
               <div class="form-group">
                     <label for="dob">Date of Birth </label>
                     <div>
                        <input type="date" name="dob" id="dob"  value="<?php isset($client) ? $client->dob : ''  ?>" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
               <div class="form-group">
                     <label for="marital_status">Marital Status </label>
                     <div>
                        <select name="marital_status" id="marital_status" class="form-control">
                           <option selected disabled></option>
                           <option >Single</option>
                        </select>
                     </div>
                  </div>
               </div>

               <div class="col-md-4">
               <label for="marital_status">Gender </label>
               <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="1" checked>
                  <label class="form-check-label" for="Male">
                  Male
                   </label>

                   <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="2">
               <label class="form-check-label" for="exampleRadios2">
                 Female
              </label>
              </div>
               </div>

               <div class="col-md-4">
               <div class="form-group">
                     <label for="marital_status">Nationality </label>
                     <div>
                        <select name="nationality_id" id="nationality_id" class="form-control">
                           <option selected disabled></option>
                           <option value="1">Pakistan</option>
                           <option value="2">India</option>
                        </select>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
               <div class="form-group">
                     <label for="passport_number">Passport Number </label>
                     <div>
                        <input type="text" name="passport_number" id="passport_number" value="<?php isset($client) ? $client->passport_number : ''  ?>" class="form-control">
                     </div>
                  </div>
               </div>
              </div>
              <div class="col-md-4">
               <div class="form-group">
                     <label for="passport_expiry_date">Passport Expiry Date </label>
                     <div>
                        <input type="date" name="passport_expiry_date" id="passport_expiry_date" value="<?php isset($client) ? $client->passport_expiry_date : ''  ?>" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
               <div class="form-group">
                     <label for="immigration_status">Immigration Status </label>
                     <div>
                        <select name="immigration_status" id="immigration_status" class="form-control">
                           <option selected disabled>Please, select immigration status</option>
                           <option >Citizen</option>
                           <option >Dependant Pass Holder</option>
                           <option >Pemanent Resident</option>
                           <option >Work Permit Holder</option>
                        </select>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
               <div class="form-group">
                     <label for="passport_expiry_date">Immigration Expiry Date </label>
                     <div>
                        <input type="date" name="immigration_expiry_date" id="immigration_expiry_date" value="<?php isset($client) ? $client->immigration_expiry_date : ''  ?>" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
               <div class="form-group">
                     <label for="emirate_id">Emirates ID </label>
                     <div>
                        <input type="text" name="emirate_id" id="emirate_id"  value="<?php isset($client) ? $client->emirate_id : ''  ?>" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
               <div class="form-group">
                     <label for="emirate_id">Other ID </label>
                     <div>
                        <input type="text" name="other_id" id="other_id"  value="<?php isset($client) ? $client->other_id : ''  ?>" class="form-control">
                     </div>
                  </div>
               </div>

               <div class="col-md-4">
               <div class="form-group">
                     <label for="emirate_id">Driving License No</label>
                     <div>
                        <input type="text" name="license_no" id="license_no"  value="<?php isset($client) ? $client->license_no : ''  ?>" class="form-control">
                     </div>
                  </div>
               </div>
               
              </div>
              <div class="col-md-4">
          <div class="row">
          <div class="form-group">
                     <label for="emirate_id">Image</label>
                     <div>
                     <!-- <p><input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;" value="<?php isset($client) ? $client->image : ''  ?>" class="form-control"></p>
<p><label for="file" style="cursor: pointer;" >Upload Image</label></p> -->
                        <input type="file" name="image" id="image"  value="<?php isset($client) ? $client->image : ''  ?>" class="form-control">
                     </div>
                  </div>
         </div>
         </div>
         
         </div>

         <div class="col-md-12">
          <h4> Contact Information </h4>
          
          <hr>
         </div>

         <div class="col-md-12">
          <div class="row">
          <div class="col-md-3">
               <div class="form-group">
                     <label for="phone_number">Phone </label>
                     <div>
                        <input type="text" name="phone_number" id="phone_number"  value="<?php isset($client) ? $client->phone_number : ''  ?>" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
               <div class="form-group">
                     <label for="phone_number">Mobile Phone </label>
                     <div>
                        <input type="text" name="mobile_number" id="mobile_number"  value="<?php isset($client) ? $client->mobile_number : ''  ?>" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
               <div class="form-group">
                     <label for="emergency_phone">Emergancy Phone </label>
                     <div>
                        <input type="text" name="emergency_phone" id="emergency_phone"  value="<?php isset($client) ? $client->emergency_phone : ''  ?>" class="form-control">
                     </div>
                  </div>
               </div>

               <div class="col-md-3">
               <div class="form-group">
                     <label for="work_email">Work Email </label>
                     <div>
                        <input type="email" name="work_email" id="work_email"  value="<?php isset($client) ? $client->work_email : ''  ?>" class="form-control">
                     </div>
                  </div>
               </div>

               <div class="col-md-3">
               <div class="form-group">
                     <label for="private_email">Private Email </label>
                     <div>
                        <input type="email" name="private_email" id="private_email"  value="<?php isset($client) ? $client->private_email : ''  ?>" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
               <div class="form-group">
                     <label for="city">City </label>
                     <div>
                        <input type="text" name="city" id="city"  value="<?php isset($client) ? $client->city : ''  ?>" class="form-control">
                     </div>
                  </div>
               </div>

               <div class="col-md-3">
               <div class="form-group">
                     <label for="country_id"> Country </label>
                     <div>
                        <select name="country_id" id="country_id" class="form-control">
                           <option selected disabled>Please, select immigration status</option>
                           <option value="1">Pakistan</option>
                         
                        </select>
                     </div>
                  </div>
               </div>

               <div class="col-md-3">
               <div class="form-group">
                     <label for="zip">Postal/Zip Code </label>
                     <div>
                        <input type="text" name="zip" id="zip"  value="<?php isset($client) ? $client->zip : ''  ?>" class="form-control">
                     </div>
                  </div>
               </div>

               <div class="col-md-6">
               <div class="form-group">
                     <label for="address_line_1">Address Line 1 </label>
                     <div>
                        <input type="text" name="address_line_1" id="address_line_1"  value="<?php isset($client) ? $client->address_line_1 : ''  ?>" class="form-control">
                     </div>
                  </div>
               </div>

               <div class="col-md-6">
               <div class="form-group">
                     <label for="address_line_2">Address Line 2 </label>
                     <div>
                        <input type="text" name="address_line_2" id="address_line_2"  value="<?php isset($client) ? $client->address_line_2 : ''  ?>" class="form-control">
                     </div>
                  </div>
               </div>

               <div class="col-md-12">
             <h4> Job Details </h4>
          <hr>
         </div>


         <div class="col-md-4">
               <div class="form-group">
                     <label for="job_title_id"> Job Title </label>
                     <div>
                        <select name="job_title_id" id="job_title_id" class="form-control">
                           <option selected disabled>Please, select job title</option>
                           <option value="1" >Citizen</option>
                           <option value="2">Dependant Pass Holder</option>
                           <option value="3">Pemanent Resident</option>
                           <option value="4">Work Permit Holder</option>
                        </select>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
               <div class="form-group">
                     <label for="employeement_status"> Employeement Status</label>
                     <div>
                        <select name="employeement_status" id="employeement_status" class="form-control">
                           <option selected disabled>Please, select job title</option>
                           <option value="1" >Admin</option>
                          
                        </select>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
               <div class="form-group">
                     <label for="department_id"> Department</label>
                     <div>
                        <select name="department_id" id="department_id" class="form-control">
                           <option selected disabled>Please, select department</option>
                           <option value="1">Transport</option>
                        </select>
                     </div>
                  </div>
               </div>

               <div class="col-md-4">
               <div class="form-group">
                     <label for="join_date">Joined Date </label>
                     <div>
                        <input type="date" name="join_date" id="join_date"  value="<?php isset($client) ? $client->join_date : ''  ?>" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
               <div class="form-group">
                     <label for="confirmation_date">Confirmation Date </label>
                     <div>
                        <input type="date" name="confirmation_date" id="confirmation_date"  value="<?php isset($client) ? $client->confirmation_date : ''  ?>" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
               <div class="form-group">
                     <label for="termination_date">Termination Date </label>
                     <div>
                        <input type="date" name="termination_date" id="termination_date"  value="<?php isset($client) ? $client->termination_date : ''  ?>" class="form-control">
                     </div>
                  </div>
               </div>

               <div class="col-md-12">
             <h4> System Authentication </h4>
          <hr>
         </div>

         <div class="col-md-2">
               <div class="form-group">
                     <label for="user_name">User Name </label>
                     <div>
                        <input type="email" name="user_name" id="user_name"  value="<?php isset($client) ? $client->user_name : ''  ?>" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="col-md-2">
               <div class="form-group">
                     <label for="password">Password </label>
                     <div>
                        <input type="password" name="password" id="password"  value="<?php isset($client) ? $client->user_name : ''  ?>" class="form-control">
                     </div>
                  </div>
               </div>

               <div class="col-md-2">
               <div class="form-group">
                     <label for="confirm_password">Confirm Password </label>
                     <div>
                        <input type="password" name="confirm_password" id="confirm_password"  value="<?php isset($client) ? $client->confirm_password : ''  ?>" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="col-md-2">
               <div class="form-group">
                     <label for="user_role">User Role</label>
                     <div>
                        <select name="user_role" id="user_role" class="form-control">
                           <option selected disabled>Please, select job title</option>
                           <option >Citizen</option>
                           <option >Dependant Pass Holder</option>
                           <option >Pemanent Resident</option>
                           <option >Work Permit Holder</option>
                        </select>
                     </div>
                  </div>
               </div>

               <div class="col-md-2">
               <label for="marital_status">User status </label>
               <div class="form-check">
                <input class="form-check-input" type="radio" name="user_status" id="exampleRadios1" value="1" checked>
                  <label class="form-check-label" for="Male">
                 Enable
                   </label>

                   <input class="form-check-input" type="radio" name="user_status" id="exampleRadios2" value="0">
               <label class="form-check-label" for="exampleRadios2">
                Disable
              </label>
              </div>
               </div>

               <!-- <div class="col-md-2">
               <div class="form-check">
               <input class="form-check-input" name="user_status" type="checkbox" value="1" id="disabledFieldsetCheck" >
               <label class="form-check-label" for="disabledFieldsetCheck">
                 Enable
               </label>
             </div>
             </div> -->
           
          </div>
          <div class="col-md-12">
          <div class="row">

              <div  style="text-align:right;">
              <buttton class="btn btn-md btn-danger">Clear</buttton>
             <input type="submit" class="btn btn-md btn-primary" value="Save">
             </div>
          </div>
         </div>
         </div>
         </div>
      

         <!-- start -->
       
                 
         <!-- end -->
         
      </div>
   </div>
    <!-- </form> -->
   <?php echo form_close(); ?>
</div>

                     <!-- end -->
         </div>
      </div>
     
   </div>
</div>
<?php init_tail(); ?>
<?php if(isset($client)){ ?>
<script>
   $(function(){
      init_rel_tasks_table(<?php echo $client->userid; ?>,'customer');
   });
  
</script>
<?php } ?>
<?php $this->load->view('admin/clients/client_js'); ?>
</body>
</html>
