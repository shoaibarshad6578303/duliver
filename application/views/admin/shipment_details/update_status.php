<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>
<div id="wrapper">
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="panel-body _buttons">
          <h1><i class="fa fa-lg fa-fw  fa-sign-in"></i>&nbsp;<?= $title; ?></h1>
          <div class="clearfix"></div>
          <hr class="hr-panel-heading" />
          <div class="row" id="contract_summary">


            <div class="col-sm-12">
              <div class="">
                <!-- start -->
                <div class="">
                  <!-- <h1><i class="fa fa-lg fa-fw  fa-sign-in  "></i> Update Status</h1> -->
                  <!-- <hr> -->
                  <div class="row">
                    <!-- NEW WIDGET START -->
                    <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                      <!-- Widget ID (each widget will need unique ID)-->
                      <div class="" id="wid-id-0" data-widget-sortable="false" data-widget-deletebutton="false" data-widget-editbutton="false" data-widget-colorbutton="false">
                        <!-- widget div-->
                        <div>
                          <!-- widget content -->
                          <div class="widget-body no-padding">

                            <div class="widget-body-toolbar">
                              <input type="hidden" id="hdnShipmentID">
                              <?php echo form_open('admin/shipment_details/get_update_status_data', array('id' => 'drivers-form', 'class' => 'drivers-form')); ?>
                              <div class="row">

                                <div class="col-sm-8">
                                  <div class="form-inline">
                                    <div class="input-group" style="width: 40%;">
                                      <input class="form-control select_tracking_number" name="tracking_number" type="text" placeholder="123..." title="Search" id="tracking_number">
                                    </div>
                                    <button class="btn btn-primary select_search" type="button" id="btnSearch">
                                      <i class="fa fa-search"></i> Search
                                    </button>
                                  </div>
                                </div>
                              </div>
                              <?php
                              echo form_close();
                              ?>
                              <hr>
                              <div id="wrapper-test" class="widget-body " style="margin: auto -10px;">
                                <!-- <div id="dtAllShipmentFUS_wrapper" class="dataTables_wrapper no-footer"><div class="dt-toolbar"><div class="row"><div class="col-sm-10 form-Control"><div id="dtAllShipmentFUS_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="dtAllShipmentFUS"></label></div></div><div class="col-sm-2 dt-btn-Filter"> <div class="btn-group "> <button class="btn btn-link dropdown-toggle " data-toggle="dropdown">AWB <span class="caret"></span></button><ul class="dropdown-menu">  <li> <a id="dt-exportToExcel" onclick="JSUpdateStatus.ExportToExcel();">Export To Excel</a> </li>  <li> <a id="dt-btnAirWayBillLabel" onclick="JSUpdateStatus.AWB();">AWBZ Label</a></li>  <li> <a id="dt-btnBatchUpdate" onclick="JSUpdateStatus.ShowModal();">Batch Update</a></li>  </ul> </div> </div></div></div><div class="dataTables_scroll"><div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;"><div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 1232px; padding-right: 0px;"> -->
                                <div style="overflow-x: auto;">
                                <table  style="font-family: Roboto, sans-serif; font-size: 12px; font-weight: normal; margin-left: 0px; width: 1232px;" class="table table-striped table-bordered table-hover dataTable no-footer" width="100%" role="grid">
                                <thead style="background:white; color:black;">
                                                    <tr role="row"><th data-hide="phone" class="sorting_disabled" rowspan="1" colspan="1" style="width: 109.889px;"><i class="hidden-md hidden-sm hidden-xs"></i>TrackingNo</th><th data-hide="phone" class="sorting_disabled" rowspan="1" colspan="1" style="width: 108.889px;"><i class="hidden-md hidden-sm hidden-xs"></i>ShipperRef</th><th data-hide="phone" class="sorting_disabled" rowspan="1" colspan="1" style="width: 129.889px;"><i class="hidden-md hidden-sm hidden-xs"></i>ShipperName</th><th data-hide="phone" class="sorting_disabled" rowspan="1" colspan="1" style="width: 119.889px;"><i class="hidden-md hidden-sm hidden-xs"></i>Driver Name</th><th data-hide="phone" class="sorting_disabled" rowspan="1" colspan="1" style="width: 108.889px;"><i class="hidden-md hidden-sm hidden-xs"></i>LocationTo</th><th data-hide="phone" class="sorting_disabled" rowspan="1" colspan="1" style="width: 138.889px;"><i class="hidden-md hidden-sm hidden-xs"></i>ReceiverName</th><th data-hide="phone" class="sorting_disabled" rowspan="1" colspan="1" style="width: 131.889px;"><i class="hidden-md hidden-sm hidden-xs"></i>CostOfGoods</th><th data-hide="phone" class="sorting_disabled" rowspan="1" colspan="1" style="width: 129.889px;"><i class="hidden-md hidden-sm hidden-xs"></i>Delivery Date</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 84px;">Action</th></tr>
                                </thead>
                                <tbody class="update_status_class">

                                </tbody>
                                </table>
                                </div>

                                <div  style="overflow-x: auto;">
                                  <?php

                                  $table_data = array();
                                  $_table_data = array(
                                    '<span class="hide"> - </span><div class="checkbox mass_select_all_wrap"><input type="checkbox" id="mass_select_all" data-to-table="clients"><label></label></div>',
                                    array(
                                      'name' => _l('TrackingNo'),
                                      'th_attrs' => array('class' => 'toggleable', 'id' => 'th-TrackingNo')
                                    ),
                                    array(
                                      'name' => _l('Shipper Ref'),
                                      'th_attrs' => array('class' => 'toggleable', 'id' => 'th-TrackingNo')
                                    ),
                                    array(
                                      'name' => _l('Shipper Name'),
                                      'th_attrs' => array('class' => 'toggleable', 'id' => 'th-TrackingNo')
                                    ),
                                    array(
                                      'name' => _l('Driver Name'),
                                      'th_attrs' => array('class' => 'toggleable', 'id' => 'th-TrackingNo')
                                    ),
                                    array(
                                      'name' => _l('LocationTo'),
                                      'th_attrs' => array('class' => 'toggleable', 'id' => 'th-TrackingNo')
                                    ),
                                    array(
                                      'name' => _l('RecieverName'),
                                      'th_attrs' => array('class' => 'toggleable', 'id' => 'th-Warehouse')
                                    ),
                                    array(
                                      'name' => _l('CostOfGoods'),
                                      'th_attrs' => array('class' => 'toggleable', 'id' => 'th-TrackingNo')
                                    ),
                                    array(
                                      'name' => _l('Delivered'),
                                      'th_attrs' => array('class' => 'toggleable', 'id' => 'th-Shipper')
                                    ),


                                  );
                                  foreach ($_table_data as $_t) {
                                    array_push($table_data, $_t);
                                  }

                                  //$table_data = hooks()->apply_filters('dashboard_operations_table_columns', $table_data);
                                  //$table_data = hooks()->apply_filters('shipment_details_op_table_columns', $table_data);

                                  // render_datatable($table_data, 'shipment_update_status', [], [
                                  //   'data-last-order-identifier' => 'shipment_update_status'
                                  // ]);

                                  ?>
                                </div>
                                
                                <!-- <div class="update_status_class">  </div> -->


                                <!-- </div></div><div class="dataTables_scrollBody" style="position: relative; overflow: auto; width: 100%;"><table id="dtAllShipmentFUS" data-url="/shipment/ajaxgetshipmenttrackinginfoforupdatestatus" data-airwaybillurl="/Shipment/GetAirwayBillLabelByTrackingNos" data-exportexcelurl="/Report/ShipmentsExportToExcel" style="font-family: Roboto, sans-serif; font-size: 12px; font-weight: normal; width: 100%;" class="table table-striped table-bordered table-hover dataTable no-footer" width="100%" role="grid" aria-describedby="dtAllShipmentFUS_info"><thead>
                                                    <tr role="row" style="height: 0px;"><th data-hide="phone" class="sorting_disabled" rowspan="1" colspan="1" style="width: 109.889px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><i class="hidden-md hidden-sm hidden-xs"></i>TrackingNo</div></th><th data-hide="phone" class="sorting_disabled" rowspan="1" colspan="1" style="width: 108.889px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><i class="hidden-md hidden-sm hidden-xs"></i>ShipperRef</div></th><th data-hide="phone" class="sorting_disabled" rowspan="1" colspan="1" style="width: 129.889px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><i class="hidden-md hidden-sm hidden-xs"></i>ShipperName</div></th><th data-hide="phone" class="sorting_disabled" rowspan="1" colspan="1" style="width: 119.889px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><i class="hidden-md hidden-sm hidden-xs"></i>Driver Name</div></th><th data-hide="phone" class="sorting_disabled" rowspan="1" colspan="1" style="width: 108.889px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><i class="hidden-md hidden-sm hidden-xs"></i>LocationTo</div></th><th data-hide="phone" class="sorting_disabled" rowspan="1" colspan="1" style="width: 138.889px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><i class="hidden-md hidden-sm hidden-xs"></i>ReceiverName</div></th><th data-hide="phone" class="sorting_disabled" rowspan="1" colspan="1" style="width: 131.889px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><i class="hidden-md hidden-sm hidden-xs"></i>CostOfGoods</div></th><th data-hide="phone" class="sorting_disabled" rowspan="1" colspan="1" style="width: 129.889px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><i class="hidden-md hidden-sm hidden-xs"></i>Delivery Date</div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 84px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">STATUS</div></th></tr>
                                                </thead>
                                                
                                            <tbody><tr class="odd"><td valign="top" colspan="9" class="dataTables_empty">No data available in table</td></tr></tbody></table></div></div><div class=" dt-toolbar-footer"><div class="col-sm-4"><div class="pull-left"><div class="dataTables_info" id="dtAllShipmentFUS_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries</div></div></div><div class="col-sm-8"><div class="pull-right"><div class="dataTables_paginate paging_simple_numbers" id="dtAllShipmentFUS_paginate"><a class="paginate_button previous disabled" aria-controls="dtAllShipmentFUS" data-dt-idx="0" tabindex="0" id="dtAllShipmentFUS_previous">Previous</a><span></span><a class="paginate_button next disabled" aria-controls="dtAllShipmentFUS" data-dt-idx="1" tabindex="0" id="dtAllShipmentFUS_next">Next</a></div></div><div class="pull-right margin-10 margin-top-10"><div class="dataTables_length" id="dtAllShipmentFUS_length"><label>Show <select name="dtAllShipmentFUS_length" aria-controls="dtAllShipmentFUS" class=""><option value="10">10</option><option value="25">25</option><option value="50">50</option></select> entries</label></div></div></div><div id="dtAllShipmentFUS_processing" class="dataTables_processing" style="display: none;">Processing...</div></div></div> -->
                              </div>
                            </div>


                          </div>
                        </div>
                      </div>
                    </article>
                  </div>
                </div>
                <!-- end -->

              </div>


            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- model -->
  
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Status</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php echo form_open('admin/shipment_details/update_status_again', array('id' => 'drivers-form', 'class' => 'drivers-form')); ?>
      <div class="modal-body">
      <input name="id" type="hidden" class="update_status_id" value="">
      <div class="form-group">
    <label for="exampleInputEmail1"></label>
    <select id="change_status" class="form-control" name="status">
      <option value="1"> To be Ready</option>
      <option value="2"> Picked</option>
      <option value="3"> Delivered</option>
    </select>
  </div>
  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
    <?php echo form_close(); ?>
  </div>
</div>

  <!-- end model -->
  <?php init_tail(); ?>

  <script>
    $(function() {
      var driversServerParams = {};
      $.each($('._hidden_inputs._filters input'), function() {
        driversServerParams[$(this).attr('name')] = '[name="' + $(this).attr('name') + '"]';
      });
      driversServerParams['exclude_inactive'] = '[name="exclude_inactive"]:checked';
      var tAPI = initDataTable('.table-shipment_update_status', admin_url + 'shipment_details/shipment_update_status', [0], [0], driversServerParams, <?php echo hooks()->apply_filters('customers_table_default_order', json_encode(array(2, 'asc'))); ?>);
      $('input[name="exclude_inactive"]').on('change', function() {
        tAPI.ajax.reload();
      });
    });

    $(document).on('click', '.select_search', function() {
      var id =$('.select_tracking_number').val();
      $.ajax({
        url: "get_update_status_data",
        type: 'post',
        data: {
          id: id
        },
        success: function(data) {
        
          $(".update_status_class").html(data);
        }
      });

    });

    $(document).on('click', '#update_status', function() {
      var id=$(this).data("update");

      console.log(id);
      $('.update_status_id').val(id);
      $('#exampleModal').modal('show');

    });


  </script>