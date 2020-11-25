<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>
<script type="text/javascript">var cities = '<?=json_encode($cities)?>';</script>
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

   <div class="modal" id="rate_modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Shipping Rates</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div>
          <div>
            <input type="number" name="default_rate" id="default_rate" value="0">
            <input type="button" name="set_default_value" value="Set Default" id="set_default_value">
          </div>
          <div class="form-group">
            <select class="form-control" name="city" id="city">

              <?php

              foreach ($cities as $key => $value) {
                  
                    echo '<option value="'.$key.'">'.$value.'</option>';

              }

              ?>
              
            </select>
            <input type="number" name="city_value">
            <input type="hidden" name="shipper_id_modal" value="" id="shipper_id_modal">
            <input type="button" name="set_city_value" value="Set Rate" id="set_city_value">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

   <?php init_tail(); ?>
   <script>
    $(function(){






        $(document).on('click','#set_default_value',function(){


          var city_rate = {};
          $("#city option").each(function()
          {

              city_rate[$(this).val()] = $('#default_rate').val();
          
          });

           $.ajax({
        url: '<?=admin_url()?>/shipper_detail/set_shipper_rates',
        type: "POST",
        data: {'shipper_id':$('#shipper_id_modal').val(),'cities_rate':city_rate},
        success: function (response) {            

            console.log(response);

        }
        });



        });

      $(document).on('click','.rate_modal',function(){


        var id = $(this).attr('id');

        $.ajax({
        url: '<?=admin_url()?>/shipper_detail/get_shipper_rates?shipper_id='+id,
        type: "GET",
          dataType: 'JSON',
        success: function (response) {

            // var rate = JSON.parse(response);
            $('#rate_modal').toggle('open');
            $('#shipper_id_modal').val(id);
        }
        });




      });


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
