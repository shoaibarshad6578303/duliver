<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>
<div id="wrapper">
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body _buttons">
                    <h1><i class="fa fa-lg fa-fw  fa-sign-in"></i>&nbsp;<?=$title;?></h1>
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
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="form-inline">
                                                    <div class="input-group" style="width: 40%;">
                                                        <input class="form-control" type="text" placeholder="123..." title="Search" id="txtSearch">
                                                    </div>
                                                    <button class="btn btn-primary" type="submit" id="btnSearch">
                                                        <i class="fa fa-search"></i> Search
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div id="wrapper-test" class="widget-body " style="margin: auto -10px;">
                                            <div id="dtAllShipmentFUS_wrapper" class="dataTables_wrapper no-footer"><div class="dt-toolbar"><div class="row"><div class="col-sm-10 form-Control"><div id="dtAllShipmentFUS_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="dtAllShipmentFUS"></label></div></div><div class="col-sm-2 dt-btn-Filter"> <div class="btn-group "> <button class="btn btn-link dropdown-toggle " data-toggle="dropdown">AWB <span class="caret"></span></button><ul class="dropdown-menu">  <li> <a id="dt-exportToExcel" onclick="JSUpdateStatus.ExportToExcel();">Export To Excel</a> </li>  <li> <a id="dt-btnAirWayBillLabel" onclick="JSUpdateStatus.AWB();">AWBZ Label</a></li>  <li> <a id="dt-btnBatchUpdate" onclick="JSUpdateStatus.ShowModal();">Batch Update</a></li>  </ul> </div> </div></div></div><div class="dataTables_scroll"><div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;"><div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 1232px; padding-right: 0px;"><table data-url="/shipment/ajaxgetshipmenttrackinginfoforupdatestatus" data-airwaybillurl="/Shipment/GetAirwayBillLabelByTrackingNos" data-exportexcelurl="/Report/ShipmentsExportToExcel" style="font-family: Roboto, sans-serif; font-size: 12px; font-weight: normal; margin-left: 0px; width: 1232px;" class="table table-striped table-bordered table-hover dataTable no-footer" width="100%" role="grid"><thead>
                                                    <tr role="row"><th data-hide="phone" class="sorting_disabled" rowspan="1" colspan="1" style="width: 109.889px;"><i class="hidden-md hidden-sm hidden-xs"></i>TrackingNo</th><th data-hide="phone" class="sorting_disabled" rowspan="1" colspan="1" style="width: 108.889px;"><i class="hidden-md hidden-sm hidden-xs"></i>ShipperRef</th><th data-hide="phone" class="sorting_disabled" rowspan="1" colspan="1" style="width: 129.889px;"><i class="hidden-md hidden-sm hidden-xs"></i>ShipperName</th><th data-hide="phone" class="sorting_disabled" rowspan="1" colspan="1" style="width: 119.889px;"><i class="hidden-md hidden-sm hidden-xs"></i>Driver Name</th><th data-hide="phone" class="sorting_disabled" rowspan="1" colspan="1" style="width: 108.889px;"><i class="hidden-md hidden-sm hidden-xs"></i>LocationTo</th><th data-hide="phone" class="sorting_disabled" rowspan="1" colspan="1" style="width: 138.889px;"><i class="hidden-md hidden-sm hidden-xs"></i>ReceiverName</th><th data-hide="phone" class="sorting_disabled" rowspan="1" colspan="1" style="width: 131.889px;"><i class="hidden-md hidden-sm hidden-xs"></i>CostOfGoods</th><th data-hide="phone" class="sorting_disabled" rowspan="1" colspan="1" style="width: 129.889px;"><i class="hidden-md hidden-sm hidden-xs"></i>Delivery Date</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 84px;">STATUS</th></tr>
                                                </thead></table></div></div><div class="dataTables_scrollBody" style="position: relative; overflow: auto; width: 100%;"><table id="dtAllShipmentFUS" data-url="/shipment/ajaxgetshipmenttrackinginfoforupdatestatus" data-airwaybillurl="/Shipment/GetAirwayBillLabelByTrackingNos" data-exportexcelurl="/Report/ShipmentsExportToExcel" style="font-family: Roboto, sans-serif; font-size: 12px; font-weight: normal; width: 100%;" class="table table-striped table-bordered table-hover dataTable no-footer" width="100%" role="grid" aria-describedby="dtAllShipmentFUS_info"><thead>
                                                    <tr role="row" style="height: 0px;"><th data-hide="phone" class="sorting_disabled" rowspan="1" colspan="1" style="width: 109.889px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><i class="hidden-md hidden-sm hidden-xs"></i>TrackingNo</div></th><th data-hide="phone" class="sorting_disabled" rowspan="1" colspan="1" style="width: 108.889px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><i class="hidden-md hidden-sm hidden-xs"></i>ShipperRef</div></th><th data-hide="phone" class="sorting_disabled" rowspan="1" colspan="1" style="width: 129.889px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><i class="hidden-md hidden-sm hidden-xs"></i>ShipperName</div></th><th data-hide="phone" class="sorting_disabled" rowspan="1" colspan="1" style="width: 119.889px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><i class="hidden-md hidden-sm hidden-xs"></i>Driver Name</div></th><th data-hide="phone" class="sorting_disabled" rowspan="1" colspan="1" style="width: 108.889px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><i class="hidden-md hidden-sm hidden-xs"></i>LocationTo</div></th><th data-hide="phone" class="sorting_disabled" rowspan="1" colspan="1" style="width: 138.889px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><i class="hidden-md hidden-sm hidden-xs"></i>ReceiverName</div></th><th data-hide="phone" class="sorting_disabled" rowspan="1" colspan="1" style="width: 131.889px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><i class="hidden-md hidden-sm hidden-xs"></i>CostOfGoods</div></th><th data-hide="phone" class="sorting_disabled" rowspan="1" colspan="1" style="width: 129.889px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><i class="hidden-md hidden-sm hidden-xs"></i>Delivery Date</div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 84px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">STATUS</div></th></tr>
                                                </thead>
                                                
                                            <tbody><tr class="odd"><td valign="top" colspan="9" class="dataTables_empty">No data available in table</td></tr></tbody></table></div></div><div class=" dt-toolbar-footer"><div class="col-sm-4"><div class="pull-left"><div class="dataTables_info" id="dtAllShipmentFUS_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries</div></div></div><div class="col-sm-8"><div class="pull-right"><div class="dataTables_paginate paging_simple_numbers" id="dtAllShipmentFUS_paginate"><a class="paginate_button previous disabled" aria-controls="dtAllShipmentFUS" data-dt-idx="0" tabindex="0" id="dtAllShipmentFUS_previous">Previous</a><span></span><a class="paginate_button next disabled" aria-controls="dtAllShipmentFUS" data-dt-idx="1" tabindex="0" id="dtAllShipmentFUS_next">Next</a></div></div><div class="pull-right margin-10 margin-top-10"><div class="dataTables_length" id="dtAllShipmentFUS_length"><label>Show <select name="dtAllShipmentFUS_length" aria-controls="dtAllShipmentFUS" class=""><option value="10">10</option><option value="25">25</option><option value="50">50</option></select> entries</label></div></div></div><div id="dtAllShipmentFUS_processing" class="dataTables_processing" style="display: none;">Processing...</div></div></div>
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
   <?php init_tail(); ?>

