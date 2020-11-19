<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>
<div id="wrapper">
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body _buttons">
                    <?php if(has_permission('contracts','','create')){ ?>
                    <a href="<?php echo admin_url('shipper_detail/add'); ?>" class="btn btn-info pull-left display-block"><?php echo _l('new_shipper'); ?></a>
                    <?php } ?>
                    <div class="clearfix"></div>
                    <hr class="hr-panel-heading" />
                    <div class="row" id="contract_summary">

                        
                        <?php
              $table_data = array();
              $_table_data = array(
                '<span class="hide"> - </span><div class="checkbox mass_select_all_wrap"><input type="checkbox" id="mass_select_all" data-to-table="shipper_detail"><label></label></div>',

                array(
                 'name'=>_l('Code'),
                 'th_attrs'=>array('class'=>'toggleable', 'id'=>'th-code')
               ),
                array(
                 'name'=>_l('Name'),
                 'th_attrs'=>array('class'=>'toggleable', 'id'=>'th-name')
               ),
                array(
                 'name'=>_l('Manager'),
                 'th_attrs'=>array('class'=>'toggleable', 'id'=>'th-manager')
               ),
                array(
                 'name'=>_l('Contact'),
                 'th_attrs'=>array('class'=>'toggleable', 'id'=>'th-contact')
               ),
                array(
                 'name'=>_l('Licence No'),
                 'th_attrs'=>array('class'=>'toggleable', 'id'=>'th-licence')
               ),
                 array(
                 'name'=>_l('Email'),
                 'th_attrs'=>array('class'=>'toggleable', 'id'=>'th-email')
               )
               
              );
              foreach($_table_data as $_t){
                array_push($table_data,$_t);
              }

              $table_data = hooks()->apply_filters('shipper_detail_table_columns', $table_data);

              render_datatable($table_data,'shipper_detail',[],[
               'data-last-order-identifier' => 'shipper_detail',
               'data-default-order'         => get_table_last_order('shipper_detail'),
             ]);
             ?>


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
    var tAPI = initDataTable('.table-shipper_detail', admin_url+'shipper_detail/table', [0], [0], driversServerParams,<?php echo hooks()->apply_filters('customers_table_default_order', json_encode(array(2,'asc'))); ?>);
    $('input[name="exclude_inactive"]').on('change',function(){
      tAPI.ajax.reload();
    });
      
    });
</script>
</body>
</html>
