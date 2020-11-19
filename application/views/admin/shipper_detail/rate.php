<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>
<div id="wrapper">
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body _buttons">
                    <h1><i class="fa fa-lg fa-fw fa-money"></i>&nbsp;<?=_l("Shipper's City Rate");?></h1>
                    <div class="clearfix"></div>
                    <hr class="hr-panel-heading" />
                    <div class="row" id="contract_summary">

                        
                        <?php
              $table_data = array();
              $_table_data = array(

                array(
                 'name'=>_l('Shipper Code'),
                 'th_attrs'=>array('class'=>'toggleable', 'id'=>'th-code')
               ),
                array(
                 'name'=>_l('Name'),
                 'th_attrs'=>array('class'=>'toggleable', 'id'=>'th-name')
               ),
                array(
                 'name'=>_l('Action'),
                 'th_attrs'=>array('class'=>'toggleable', 'id'=>'th-action')
               ),
              
               
              );
              foreach($_table_data as $_t){
                array_push($table_data,$_t);
              }

              $table_data = hooks()->apply_filters('shipper_detail_rate_table_columns', $table_data);

              render_datatable($table_data,'shipper_detail_rate',[],[
               'data-last-order-identifier' => 'shipper_detail_rate',
               'data-default-order'         => get_table_last_order('shipper_detail_rate'),
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
    var tAPI = initDataTable('.table-shipper_detail_rate', admin_url+'shipper_detail/rate_table', [0], [0], driversServerParams,<?php echo hooks()->apply_filters('customers_table_default_order', json_encode(array(2,'asc'))); ?>);
    $('input[name="exclude_inactive"]').on('change',function(){
      tAPI.ajax.reload();
    });
      
    });
</script>
</body>
</html>
