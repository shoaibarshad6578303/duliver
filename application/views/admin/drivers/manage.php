<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<script>
   <?php
   $e_data = array();
   foreach($employees as $key => $employee):

      $e_data[$employee->id] = $employee;
   
   endforeach;
   ?>

   
var employees = '<?=json_encode($e_data);?>';
console.log(employees);
</script>
<?php init_head(); ?>
<div id="wrapper">
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="panel_s">
          <div class="panel-body">
         
            <div class="_buttons">
            <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#exampleModal">
            Add Driver
            </button>
              <div class="visible-xs">
                <div class="clearfix"></div>
              </div>
            </div>
            <div class="clearfix"></div>
            <hr class="hr-panel-heading" />
            <div class="clearfix mtop20"></div>
            <div class="">
             </div>
            <?php echo form_error('user_name', '<div class="error">', '</div>') ?>
            <?php echo form_error('password', '<div class="error">', '</div>') ?>
      

              <?php
              $table_data = array();
              $_table_data = array(
                '<span class="hide"> - </span><div class="checkbox mass_select_all_wrap"><input type="checkbox" id="mass_select_all" data-to-table="clients"><label></label></div>',

                array(
                 'name'=>_l('Name'),
                 'th_attrs'=>array('class'=>'toggleable', 'id'=>'th-cnic')
               ),
                array(
                 'name'=>_l('Driver Code'),
                 'th_attrs'=>array('class'=>'toggleable', 'id'=>'th-phone')
               ),
                array(
                 'name'=>_l('Employee Code'),
                 'th_attrs'=>array('class'=>'toggleable', 'id'=>'th-license')
               ),
                array(
                 'name'=>_l('Mobile'),
                 'th_attrs'=>array('class'=>'toggleable', 'id'=>'th-city')
               ),
                array(
                 'name'=>_l('Username'),
                 'th_attrs'=>array('class'=>'toggleable', 'id'=>'th-country')
               ),
               array(
                'name'=>_l('Action'),
                'th_attrs'=>array('class'=>'toggleable', 'id'=>'th-country')
              ),
              );
              foreach($_table_data as $_t){
                array_push($table_data,$_t);
              }

              $table_data = hooks()->apply_filters('drivers_table_columns', $table_data);

              render_datatable($table_data,'drivers',[],[
               'data-last-order-identifier' => 'drivers',
               'data-default-order'         => get_table_last_order('drivers'),
             ]);
             ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Driver</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php echo form_open_multipart('admin/drivers/save', array('id'=>'drivers-form','class'=>'drivers-form')); ?>
        <div class="row">
        <div class="col-md-3">
               <div class="form-group">
                     <label for="driver_code">Driver Code </label>
                     <div>
                     <input type="text" disabled name="driver_code_copy" id="driver_code_copy"  value="<?php echo $driver_code; ?>" class="form-control">
                     <input type="hidden" name="driver_code" id="driver_code"  value="<?php echo $driver_code; ?>" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
               <div class="form-group">
                     <label for="employee_code">Employee Code *</label>
                     <div>
                        <select name="employee_code"  id="employee_code" class="form-control select_employee">
                           <option selected disabled>Please, select employee code</option>
                           <?php foreach($employees  as $item) { ?>
                           <option value="<?php echo $item->id ?>"><?php echo $item->employee_code ?> | <?php echo $item->first_name ?> <?php echo $item->middle_name ?> <?php echo $item->last_name ?></option>
                           <?php } ?>
                        </select>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
               <div class="form-group">
                     <label for="name">Employee Name </label>
                     <div>
                     <input disabled type="text" name="name_copy" id="add_name_copy"  value="<?php isset($client) ? $client->name : ''  ?>" class="form-control">

                        <input  type="hidden" name="name" id="add_name"  value="<?php isset($client) ? $client->name : ''  ?>" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
               <div class="form-group">
                     <label for="phone">Phone </label>
                     <div>
                        <input disabled type="text" name="phone_copy" id="add_phone_copy"  value="<?php isset($client) ? $client->phone : ''  ?>" class="form-control">
                        <input  type="hidden" name="phone" id="add_phone"  value="<?php isset($client) ? $client->phone : ''  ?>" class="form-control">
                    
                     </div>
                  </div>
               </div>
              
               <div class="col-md-6">
               <div class="form-group">
                     <label for="city">City *</label>
                     <div>
                        <select name="city" id="city" class="form-control" value="" required>
                        <option></option>   
                        <option  disabled>Please, select city</option>
                           <option >Abu Dubai</option>
                           <option >Dubai</option>
                           <option >Sharjha</option>
                        </select>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
               <div class="form-group">
                     <label for="zone">Zone </label>
                     <div>
                        <select name="zone" id="zone" class="form-control">
                           <option selected disabled>Please, select zone</option>
                           <option >ABD 1</option>
                           <option >ABD 2</option>
                           <option >ABD 3</option>
                        </select>
                     </div>
                  </div>
               </div>
         <div class="col-md-12">
             <h4> System Authentication </h4>
          <hr>
         </div>

         <div class="col-md-3">
               <div class="form-group">
                     <label for="user_name">App User Name *</label>
                     <div>
                        <input type="email" name="user_name" id="user_name"  value="<?php isset($client) ? $client->user_name : ''  ?>" class="form-control" required>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
               <div class="form-group">
                     <label for="password">App Password *</label>
                     <div>
                        <input type="password" name="password" id="password"  value="<?php isset($client) ? $client->user_name : ''  ?>" class="form-control" required>
                     </div>
                  </div>
               </div>

               <div class="col-md-3">
               <div class="form-group">
                     <label for="confirm_password">App Confirm Password *</label>
                     <div>
                        <input type="password" name="confirm_password" id="confirm_password"  value="<?php isset($client) ? $client->confirm_password : ''  ?>" class="form-control" required>
                     </div>
                  </div>
               </div>
          </div>
         
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add Driver</button>
      </div>
      <?php echo form_close(); ?>
    </div>
  </div>
</div>


<!-- edit Modal -->
<div class="modal fade " id="exampleModalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Driver</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
<?php echo form_open_multipart('admin/drivers/update', array('id'=>'drivers-form','class'=>'drivers-form')); ?>

      <div class="bad">

      </div>
 <?php echo form_close(); ?>
    </div>
  </div>
</div>


<?php init_tail(); ?>
<script>
  $(function(){
    var driversServerParams = {};
    $.each($('._hidden_inputs._filters input'),function(){
      driversServerParams[$(this).attr('name')] = '[name="'+$(this).attr('name')+'"]';
    });
    driversServerParams['exclude_inactive'] = '[name="exclude_inactive"]:checked';
    var tAPI = initDataTable('.table-drivers', admin_url+'drivers/table', [0], [0], driversServerParams,<?php echo hooks()->apply_filters('customers_table_default_order', json_encode(array(2,'asc'))); ?>);
    $('input[name="exclude_inactive"]').on('change',function(){
      tAPI.ajax.reload();
    });
  });


  $(document).ready(function(){
  
   $(document).on('change','.select_employee', function(){
      
    var id=$('.select_employee').val();
    let employee_array = JSON.parse(employees);
    var name= employee_array[id]['first_name']+' '+employee_array[id]['middle_name']+' '+employee_array[id]['last_name'];
    var phone=employee_array[id]['phone_number'];
    $('#add_name').val(name);
    $('#add_phone').val(phone);
    $('#add_name_copy').val(name);
    $('#add_phone_copy').val(phone);

   });

 $(document).on('click','.edit-driver', function(){

   // var id=$('').
   var id=$(this).data("student_id");
   
 
   var len=-1;
   $.ajax({
     url:  "drivers/edit",
     type: 'post',
     data: {id: id},
   //   dataType: 'json',
     success: function(data){
              
         $(".bad").html(data);
         $('#exampleModalEdit').modal('show');
     }
  });
//   alert(len);
 });
});
</script>
</body>
</html>
