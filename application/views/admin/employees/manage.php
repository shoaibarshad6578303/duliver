<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>
<div id="wrapper">
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="panel_s">
          <div class="panel-body">
          <div class="_buttons">
            <a href="<?=admin_url('employees/employee')?>" class="btn btn-primary pull-right" >
            Add Employee
           </a>
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
                 'name'=>_l('Code'),
                 'th_attrs'=>array('class'=>'toggleable', 'id'=>'th-cnic')
               ),
                array(
                 'name'=>_l('Fullname'),
                 'th_attrs'=>array('class'=>'toggleable', 'id'=>'th-name')
               ),
                array(
                 'name'=>_l('Mobile'),
                 'th_attrs'=>array('class'=>'toggleable', 'id'=>'th-license')
               ),
                array(
                 'name'=>_l('Job Title'),
                 'th_attrs'=>array('class'=>'toggleable', 'id'=>'th-city')
               ),
                array(
                 'name'=>_l('Email'),
                 'th_attrs'=>array('class'=>'toggleable', 'id'=>'th-country')
               ),
                 array(
                 'name'=>_l('Gender'),
                 'th_attrs'=>array('class'=>'toggleable', 'id'=>'th-state')
               ),
                array(
                 'name'=>_l('Address'),
                 'th_attrs'=>array('class'=>'toggleable', 'id'=>'th-zip')
               ),
               array(
                'name'=>_l('Action'),
                'th_attrs'=>array('class'=>'toggleable', 'id'=>'th-zip')
              ),
               
              );
              foreach($_table_data as $_t){
                array_push($table_data,$_t);
              }

              $table_data = hooks()->apply_filters('drivers_table_columns', $table_data);

              render_datatable($table_data,'employees',[],[
               'data-last-order-identifier' => 'employees',
               'data-default-order'         => get_table_last_order('employees'),
             ]);
             ?>
          </div>
        </div>
      </div>
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
    var tAPI = initDataTable('.table-employees', admin_url+'employees/table', [0], [0], driversServerParams,<?php echo hooks()->apply_filters('customers_table_default_order', json_encode(array(2,'asc'))); ?>);
    $('input[name="exclude_inactive"]').on('change',function(){
      tAPI.ajax.reload();
    });
  });
</script>
</body>
</html>
