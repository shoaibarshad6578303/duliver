<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>
<div id="wrapper">
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="panel_s">
          <div class="panel-body">
            <div class="_buttons">

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Add Driver
            </button>
              <div class="visible-xs">
                <div class="clearfix"></div>
              </div>
            </div>
            <div class="clearfix"></div>
            <hr class="hr-panel-heading" />
            <div class="clearfix mtop20"></div>
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
                        <input type="text" name="driver_code" id="driver_code"  value="<?php isset($client) ? $client->driver_code : ''  ?>" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
               <div class="form-group">
                     <label for="employee_code">Employee Code</label>
                     <div>
                        <select name="employee_code" id="employee_code" class="form-control">
                           <option selected disabled>Please, select employee code</option>
                           <option >Emp0001 | Abaid </option>
                
                        </select>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
               <div class="form-group">
                     <label for="name">Employee Name </label>
                     <div>
                        <input type="text" name="name" id="name"  value="<?php isset($client) ? $client->name : ''  ?>" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
               <div class="form-group">
                     <label for="phone">Phone </label>
                     <div>
                        <input type="text" name="phone" id="phone"  value="<?php isset($client) ? $client->phone : ''  ?>" class="form-control">
                     </div>
                  </div>
               </div>
              
               <div class="col-md-6">
               <div class="form-group">
                     <label for="employee_code">City</label>
                     <div>
                        <select name="employee_code" id="employee_code" class="form-control">
                           <option selected disabled>Please, select city</option>
                           <option >Abu Dubai</option>
                           <option >Dubai</option>
                           <option >Sharjha</option>
                        </select>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
               <div class="form-group">
                     <label for="employee_code">Zone</label>
                     <div>
                        <select name="employee_code" id="employee_code" class="form-control">
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
                     <label for="user_name">App User Name </label>
                     <div>
                        <input type="email" name="user_name" id="user_name"  value="<?php isset($client) ? $client->user_name : ''  ?>" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
               <div class="form-group">
                     <label for="password">App Password </label>
                     <div>
                        <input type="password" name="password" id="password"  value="<?php isset($client) ? $client->user_name : ''  ?>" class="form-control">
                     </div>
                  </div>
               </div>

               <div class="col-md-3">
               <div class="form-group">
                     <label for="confirm_password">App Confirm Password </label>
                     <div>
                        <input type="password" name="confirm_password" id="confirm_password"  value="<?php isset($client) ? $client->confirm_password : ''  ?>" class="form-control">
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
                        <input type="text" name="driver_code" id="driver_code"  value="<?php isset($client) ? $client->driver_code : ''  ?>" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
               <div class="form-group">
                     <label for="employee_code">Employee Code</label>
                     <div>
                        <select name="employee_code" id="employee_code" class="form-control">
                           <option selected disabled>Please, select employee code</option>
                           <option >Emp0001 | Abaid </option>
                
                        </select>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
               <div class="form-group">
                     <label for="name">Employee Name </label>
                     <div>
                        <input type="text" name="name" id="name"  value="<?php isset($client) ? $client->name : ''  ?>" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
               <div class="form-group">
                     <label for="phone">Phone </label>
                     <div>
                        <input type="text" name="phone" id="phone"  value="<?php isset($client) ? $client->phone : ''  ?>" class="form-control">
                     </div>
                  </div>
               </div>
              
               <div class="col-md-6">
               <div class="form-group">
                     <label for="employee_code">City</label>
                     <div>
                        <select name="employee_code" id="employee_code" class="form-control">
                           <option selected disabled>Please, select city</option>
                           <option >Abu Dubai</option>
                           <option >Dubai</option>
                           <option >Sharjha</option>
                        </select>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
               <div class="form-group">
                     <label for="employee_code">Zone</label>
                     <div>
                        <select name="employee_code" id="employee_code" class="form-control">
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
                     <label for="user_name">App User Name </label>
                     <div>
                        <input type="email" name="user_name" id="user_name"  value="<?php isset($client) ? $client->user_name : ''  ?>" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
               <div class="form-group">
                     <label for="password">App Password </label>
                     <div>
                        <input type="password" name="password" id="password"  value="<?php isset($client) ? $client->user_name : ''  ?>" class="form-control">
                     </div>
                  </div>
               </div>

               <div class="col-md-3">
               <div class="form-group">
                     <label for="confirm_password">App Confirm Password </label>
                     <div>
                        <input type="password" name="confirm_password" id="confirm_password"  value="<?php isset($client) ? $client->confirm_password : ''  ?>" class="form-control">
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
</script>
</body>
</html>
