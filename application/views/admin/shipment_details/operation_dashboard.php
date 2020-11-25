<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>
<div id="wrapper">
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body _buttons">
                    <h1><i class="fa fa-reply"></i>&nbsp;<?=_l('Operation Dashboard');?></h1>
                    <div class="clearfix"></div>
                    <hr class="hr-panel-heading" />
                    <div class="row" id="contract_summary">

<div id="content" class="order-content">
    <div class="row" id="shipments">
        <ul id="ntabShipments" data-manifesturl="/Shipment/GetManifest" data-airwaybillurl="/Shipment/GetAirwayBillLabelByTrackingNos" data-exportexcelurl="/Report/ShipmentsExportToExcel" class="nav nav-tabs tabs-shipments">
            <li class="active" id="allShipments" data-bind="0">
                <a href="#tab1" data-toggle="tab">ALL <span id="allShipmentsBadge" class="badge bg-color-flcount">5390</span></a>
            </li>
            <li id="toBePickedUpShipments" data-bind="1,18">
                <a href="#tab1" data-toggle="tab">TO BE PICKED UP<span id="toBePickedUpShipmentsBadge" class="badge bg-color-flcount">80</span></a>
            </li>
            <li id="WithDriverShipments" data-bind="29">
                <a href="#tab1" data-toggle="tab">PICKED UP<span id="WithDriverShipmentsBadge" class="badge bg-color-flcount">0</span></a>
            </li>
            <li id="toBeDeliveredShipments" data-bind="2,3,4,7,8,9,11,12,13,14,15,16,17,24,26,27,28,31,32,33,35,35,36,37,38,39,40,41,42,43,44,45,46,48,49,50">
                <a href="#tab1" data-toggle="tab">TO BE DELIVERED<span id="toBeDeliveredShipmentsBadge" class="badge bg-color-flcount">216</span></a>
            </li>
            <li id="deliveredShipments" data-bind="5,6">
                <a href="#tab1" data-toggle="tab">DELIVERED<span id="deliveredShipmentsBadge" class="badge bg-color-flcount">4808</span></a>
            </li>
            <li id="lostAndDamages" data-bind="19,20">
                <a href="#tab1" data-toggle="tab">LOST &amp; DAMAGES<span id="lostanddamagesBadge" class="badge bg-color-flcount">0</span></a>
            </li>
            <li id="toBeReturnedShipments" data-bind="22,23">
                <a href="#tab1" data-toggle="tab">TO BE RETURNED<span id="toBeReturnedShipmentsBadge" class="badge bg-color-flcount">243</span></a>
            </li>
            <li id="returnedShipments" data-bind="21">
                <a href="#tab1" data-toggle="tab">RTOS<span id="returnedShipmentsBadge" class="badge bg-color-flcount">26</span></a>
            </li>
            <li id="canceledShipments" data-bind="10,25">
                <a href="#tab1" data-toggle="tab">CANCELED<span id="canceledShipmentsBadge" class="badge bg-color-flcount">17</span></a>
            </li>
        </ul>
        <div id="myTabContent1" class="tab-content padding-10">
            <div class="tab-pane fade in active" id="tab1">
                <!-- widget div-->
<div>
    <div id="wrapper-test" class="widget-body " style="margin: auto -10px;">
        <div id="dtAllShipments_wrapper" class="dataTables_wrapper no-footer">
            <div class="dt-toolbar">
                <div class="row">
                    <div class="col-sm-9 form-Control">
                        <div id="dtAllShipments_filter" class="dataTables_filter">
                            <div id="selected" hidden="">
                                <div id="selectedRowsCount">O orders Selected</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 dt-btn-Filter">
                        <button class="btn btn-link" data-toggle="modal" data-target="#ShipmentFilterModal"><i class="fa fa-bars 2x "></i></button> <div class="btn-group "> <button class="btn btn-link dropdown-toggle " data-toggle="dropdown">Action&nbsp;<span class="caret"></span></button><ul class="dropdown-menu">  <li> <a id="dt-exportToExcel" onclick="JSAllShipments.ExportToExcel();">Export To Excel</a> </li>  <li> <a id="dt-btnAirWayBillLabel" onclick="JSAllShipments.AWB();">AWBZ Label</a></li>  <li> <a id="dt-btnBatchUpdate" onclick="JSBatchUpdate.ShowModal();">Batch Update</a></li>  <li> <a id="dt-btnBatchDelete" onclick="JSAllShipments.ShowModal();">Batch Delete</a></li>  <li> <a id="dt-btnBatchOutScan" onclick="JSBatchOutScan.ShowModal();">Batch OutScan</a></li>  <li> <a id="dt-btnBatchInScan" onclick="JSBatchInScan.ShowModal();">Batch InScan</a></li>  <li> <a id="dt-btnAssignRack" onclick="JSBatchAssignRack.ShowModal();">Batch Assign Rack</a></li>  </ul> </div> <div id="btnManifest" style="" class="btn btn-default" onclick="JSAllShipments.Manifest();">Download Manifest</div></div></div></div><div class="dataTables_scroll"><div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;"><div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 996px; padding-right: 17px;">



             <?php
              $table_data = array();
              $_table_data = array(
                '<span class="hide"> - </span><div class="checkbox mass_select_all_wrap"><input type="checkbox" id="mass_select_all" data-to-table="clients"><label></label></div>',
                array(
                 'name'=>_l('TrackingNo'),
                 'th_attrs'=>array('class'=>'toggleable', 'id'=>'th-TrackingNo')
               ),
                array(
                 'name'=>_l('Date'),
                 'th_attrs'=>array('class'=>'toggleable', 'id'=>'th-Warehouse')
               ),
                array(
                 'name'=>_l('Shipper Name'),
                 'th_attrs'=>array('class'=>'toggleable', 'id'=>'th-Shipper')
               ),
                array(
                 'name'=>_l('Phone'),
                 'th_attrs'=>array('class'=>'toggleable', 'id'=>'th-Driver')
               ),
             
                 array(
                 'name'=>_l('Receiver Name'),
                 'th_attrs'=>array('class'=>'toggleable', 'id'=>'th-Receiver')
               ),

                 array(
                 'name'=>_l('STATUS'),
                 'th_attrs'=>array('class'=>'toggleable', 'id'=>'th-STATUS')
               )
               
              );
              foreach($_table_data as $_t){
                array_push($table_data,$_t);
              }

              //$table_data = hooks()->apply_filters('dashboard_operations_table_columns', $table_data);
              //$table_data = hooks()->apply_filters('shipment_details_op_table_columns', $table_data);

              render_datatable($table_data,'dashboard_operations',[],[
                'data-last-order-identifier' => 'dashboard_operations'
              ]);
             ?>

        </div></div></div></div>
    </div>
    <!-- end widget content -->
</div>
<!-- end widget div -->

            </div>
        </div>
    </div>
    <!-- Modal -->
    <!-- Modal -->
<div class="modal fade custom-modal" id="ShipmentInfoModal" tabindex="-1" role="dialog" aria-labelledby="ModalShipmentInfo" aria-hidden="true" style="display: none;">
    <div class="modal-dialog custom-modal-dialog">
        <div class="modal-content custom-modal-content">
            <div class="row custom-modal-head">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 custom-modal-head-background">
                    <div class="row custom-modal-head-content" style="">
                        <div class="row head-content-row">
                            <input type="hidden" id="hdnShipmentID" value="564">
                            <input type="hidden" id="hdnTrackingNoModal" value="8000000531">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                <span class="text-md">
                                    TRACKING : <span id="TrackingNo">8000000531</span>
                                </span>
                                <br>
                                <span class="text-md">
                                    Shipper Ref : <span id="BarCode">0</span>
                                </span>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4">
                                <div class="row">
                                    <div class="col-sm-2 text-center">
                                        <div class="item-icon tag-5">
                                            <i class="fa fa-lg fa-plus-circle"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-10 item-detail" style="">
                                        <span class="text-md">In Scan:</span>
                                        <br>
                                        <span class="text-sm">
                                            <span id="InScanDateTime">15th Sep 2020 | 02:22 pm</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4">
                                <div class="row">
                                    <div class="col-sm-2 text-center">
                                        <div class="item-icon tag-5">
                                            <i class="fa fa-lg  fa-arrow-circle-up  "></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-10 item-detail" style="">
                                        <span class="text-md">Airway Created On : </span>
                                        <br>
                                        <span class="text-sm">
                                            <span id="CreatedDateTime">15th Sep 2020 | 02:22 pm</span>
                                        </span>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row head-content-row">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 item-customer">
                                
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="item-detail-special text-center">
                                    <span class="text-sm "></span>
                                    <br>
                                    <span class="text-sm">
                                        <span id="AssigndToCourierTime" hidden="hidden">N/A</span>
                                    </span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 item-company">
                                <div class="row ">
                                    <div class="col-sm-9 item-detail text-right" style="">
                                        <span class="text-xsm ">DRIVER</span>
                                        <br>
                                        <span class="text-md">
                                            <span id="DriverName">DR0007 | Jaber Mohammed</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row head-content-row ">
                            <ul id="shipment" class="nav nav-tabs tab-shipment-info">
                                <li id="tabBriefDetail" class="active">
                                    <a href="#s1" data-toggle="tab" class="text-md" aria-expanded="true">BRIEF</a>
                                </li>
                                <li class="">
                                    <a id="btnShipmentInfoHistory" href="#s3" data-toggle="tab" class="text-md" aria-expanded="false">HISTORY</a>
                                </li>
                                <li class="">
                                    <a href="#s5" data-toggle="tab" class="text-md" aria-expanded="false">POD</a>
                                </li>
                                <li class="">
                                    <a href="#s6" data-toggle="tab" class="text-md" aria-expanded="false">POR</a>
                                </li>
                                
                                
                                
                                
                                <li class="pull-right">
                                    <a class="text-md" id="tab_btnEditOrder_OnInfoModal">Edit Order</a>
                                </li>
                                <li class="pull-right">
                                    <a class="text-md" data-url="/Shipment/GetAirwayBillLabelByTrackingNos" id="tab_btnAirWayBillLabel">AWBZ LABEL</a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row custom-modal-body">
                <div id="myTabContent" class="tab-content padding-10">
                    <div class="tab-pane active" id="s1">
                        <div class="row custom-modal-body-row-1">
                            <div class="col-sm-6 box">
                                <div class="d-flex">
                                    <div class="col-sm-3">
                                        
                                        <div class="box-icon tag-2" id="SenderProfileLetter">HG</div>
                                    </div>
                                    <div class="col-sm-9 box-detail">
                                        <span class="text-md ">SENDER</span>
                                        <br>
                                        <span class="text-lg">
                                            <span id="SenderName">Hemani General Trading </span>
                                        </span>
                                        <br>
                                        <span class="text-md txt-color-gray">
                                            <span id="SenderNumber">0562473789</span>
                                        </span>
                                        <br>
                                        <span class="text-lg">
                                            <span id="SenderAddressLine"><span id=""> Sheikh Zayed Rd</span> , <span id=""> Dubai , United Arab Emirates</span></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 box">
                                <div class="d-flex">
                                    <div class="col-sm-3">
                                        
                                        <div class="box-icon tag-1" id="RecipientProfileLetter">DR</div>
                                    </div>
                                    <div class="col-sm-9 box-detail">
                                        <span class="text-md ">RECIPIENT</span>
                                        <br>
                                        <span class="text-lg">
                                            <span id="RecipientName">Diet Right Nutrition</span>
                                        </span>
                                        <br>
                                        <span class="text-md txt-color-gray">
                                            <span id="RecipientNumber">+971 55 468 5381</span>
                                        </span>
                                        <br>
                                        <span class="text-lg">
                                            <span id="RecipientAddressLine"><span> Hatta Mall, Hatta</span> , <span> </span> , <span> Dubai , United Arab Emirates</span></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row custom-modal-body-row-2">
                            <div class="col-sm-6 box">
                                <div class="row  row-2-box-title" style="">
                                    <p class="text-center"><strong>ITEM DETAILS</strong></p>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="row row-2-box-content">
                                            <div class="col-sm-2 text-center">
                                                <div class="item-icon tag-3">
                                                    <i class="fa fa-lg fa-bell "></i>
                                                </div>
                                            </div>
                                            <div class="col-sm-10 item-detail" style="">
                                                <span class="text-xsm">Weight Category</span>
                                                <br>
                                                <span class="text-md">
                                                    <span id="ItemWeightCategory">Up to 5 kg</span>

                                                </span>
                                            </div>
                                        </div>
                                        <div class="row row-2-box-content">
                                            <div class="col-sm-2 text-center">
                                                <div class="item-icon tag-6">
                                                    <i class="fa fa-lg fa-desktop  "></i>
                                                </div>
                                            </div>
                                            <div class="col-sm-10 item-detail">
                                                <span class="text-xsm">Received Via</span>
                                                <br>
                                                <span class="text-md">
                                                    <span id="ItemReceivedVia">Operations</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="row row-2-box-content">
                                            <div class="item-detail-special">
                                                <span class="text-xsm">Item Description / Special Instructions</span>
                                                <br>
                                                <span class="text-md">
                                                    <span id="ItemDescription"><span> 1 &nbsp;&nbsp;&nbsp;Hemani Herbal Products&nbsp;&nbsp;&nbsp;0</span><br><span> 2 &nbsp;&nbsp;&nbsp;N/A&nbsp;&nbsp;&nbsp;N/A</span><br><span> 3 &nbsp;&nbsp;&nbsp;N/A&nbsp;&nbsp;&nbsp;N/A</span><br><span> 4 &nbsp;&nbsp;&nbsp;N/A&nbsp;&nbsp;&nbsp;N/A</span><br></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row row-2-box-content">
                                            <div class="col-sm-2 text-center">
                                                <div class="item-icon tag-3">
                                                    <i class="fa fa-lg fa-bell "></i>
                                                </div>
                                            </div>
                                            <div class="col-sm-10 item-detail" style="">
                                                <span class="text-xsm">Service Type</span>
                                                <br>
                                                <span class="text-md ">
                                                    <span id="ItemServiceType">N/A</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="row row-2-box-content" style="">
                                            <div class="col-sm-2 text-center">
                                                <div class="item-icon tag-3">
                                                    <i class="fa fa-lg  fa-usd  "></i>
                                                </div>
                                            </div>
                                            <div class="col-sm-10 item-detail" style="">
                                                <span class="text-xsm">Item Value</span>
                                                <br>
                                                <span class="text-md">
                                                    <span id="ItemValue">N/A</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="row row-2-box-content" style="">
                                            <div class="item-detail-special">
                                                <span class="text-xsm">No Of Pieces</span>
                                                <br>
                                                <span class="text-md">
                                                    <span id="NoOfPieces">4</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 box">
                                <div class="row row-2-box-title" style="">
                                    <p class="text-center"><strong>PAYMENT INFO</strong></p>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 row-2-box-content">
                                        <div class="col-sm-2 text-center">
                                            <div class="item-icon tag-3">
                                                <i class="fa fa-lg fa-bell "></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-10 item-detail" style="">
                                            <span class="text-xsm">Payment Method</span>
                                            <br>
                                            <span class="text-md">
                                                <span id="PaymentMethod">N/A</span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 row-2-box-content">
                                        <div class="col-sm-2 text-center">
                                            <div class="item-icon tag-2">M</div>
                                        </div>
                                        <div class="col-sm-10 item-detail" style="">
                                            <span class="text-xsm">Service Charges Paid By</span>
                                            <br>
                                            <span class="text-md">
                                                <span id="PaymentServiceChergesPaidBy">Shipper</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p class="text-left text-md">PUBLIC SERVICE FEE</p>
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="text-center text-md">
                                                <span id="PublicServiceFee">90.66</span>
                                            </p>
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="text-left text-md">
                                                TOTAL:
                                                <span id="PublicServiceFeeTotal">90.66</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p class="text-left text-md">CASH ON DELIVERY</p>
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="text-center text-md">
                                                <span id="CashOnDelivery">1666.75</span>
                                            </p>
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="text-left text-md">
                                                TOTAL:
                                                <span id="CashOnDeliveryTotal">1666.75 AED</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane " id="s2">
                        <div class="active-tab-content">
                        </div>
                    </div>
                    <div class="tab-pane" id="s3">
                        <div class="active-tab-content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <fieldset>
                                        <div class="tabcontent-box">
                                            <div class="row">

                                                <div class="col-sm-10 printableArea">
                                                    <div class="history-tl-container">

                                                        
                                                        <div class="col-sm-12" id="INTL" style="display: none;">
                                                            <h3>International Tracking</h3>
                                                            <div class="form-group">
                                                                <label>Forwarding Tracking Number: <span id="FTN"></span></label>
                                                            </div>
                                                            <div class="form-group">
                                                                <a id="FU" href="" target="_blank">Tracking Link</a>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Forwarding Agent Name: <span id="FAN"></span></label>
                                                            </div>
                                                        </div>
                                                        <ul class="tl" id="ulShipmentStatusTracking"><li class="tl-item" ng-repeat="item in retailer_history"><div class="timestamp text-md">15th Sep 2020  02:22 pm</div><div class="">Status changed to <em><b>&nbsp;Order Placed </b></em>&nbsp; by &nbsp;<em><b>Hemani General Trading </b></em></div></li><li class="tl-item" ng-repeat="item in retailer_history"><div class="timestamp text-md">15th Sep 2020  02:22 pm</div><div class="">Status changed to <em><b>&nbsp;To be Picked Up</b></em>&nbsp; by &nbsp;<em><b>Hemani General Trading </b></em></div></li><li class="tl-item" ng-repeat="item in retailer_history"><div class="timestamp text-md">15th Sep 2020  09:59 pm</div><div class="">Status changed to <em><b>&nbsp;Collected</b></em>&nbsp; by &nbsp;<em><b>Jaber Mohammed</b></em></div></li><li class="tl-item" ng-repeat="item in retailer_history"><div class="timestamp text-md">15th Sep 2020  10:00 pm</div><div class="">Status changed to <em><b>&nbsp;Received at Hubs</b></em>&nbsp; by &nbsp;<em><b>Shibindas Thalappally</b></em></div></li><li class="tl-item" ng-repeat="item in retailer_history"><div class="timestamp text-md">17th Sep 2020  12:17 pm</div><div class="">Status changed to <em><b>&nbsp;Out for delivery 1</b></em>&nbsp; by &nbsp;<em><b>Shibindas Thalappally</b></em></div></li><li class="tl-item" ng-repeat="item in retailer_history"><div class="timestamp text-md">17th Sep 2020  04:20 pm</div><div class="">Status changed to <em><b>&nbsp;Delivered</b></em>&nbsp; by &nbsp;<em><b>Jaber Mohammed</b></em></div></li><li class="tl-item" ng-repeat="item in retailer_history"><div class="timestamp text-md">17th Sep 2020  06:26 pm</div><div class="">Status changed to <em><b>&nbsp;Delivered</b></em>&nbsp; by &nbsp;<em><b>Jaber Mohammed</b></em></div></li></ul>
                                                    </div>
                                                    <div id="divPostComments" class="row" style="display: block;">
                                                        <div class="col-sm-11">
                                                            <input type="text" class="form-control" placeholder="Please write your comments here..." id="txtShipmentStatusTrackingComments">
                                                        </div>
                                                        <div class="col-sm-1">
                                                            <input type="button" class="btn btn-success pull-right" value="Post" id="btnShipmentStatusTrackingComments">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="btn btn-default btn-sm" id="btnPrint">Print</div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane " id="s4">
                        <div class="active-tab-content">

                        </div>
                    </div>

                    <div class="tab-pane" id="s5">
                        <div class="active-tab-content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <fieldset>
                                        <div class="tabcontent-box" style="padding:5px 10px; height:25px; overflow-x:auto">
                                            <div class="history-tl-container">
                                                <h6>Proof of Delivery</h6>
                                                <div id="prfDDiv"><span class="textdanger">Not Available</span></div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="s6">
                        <div class="active-tab-content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <fieldset>
                                        <div class="tabcontent-box" style="padding:5px 10px; height:25px; overflow-x:auto">
                                            <div class="history-tl-container">
                                                <h6>Proof of Return</h6>
                                                <div id="prfRDiv"><span class="textdanger">Not Available</span></div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!--End Modal -->

<style>
    .modalproof {
        width: 500px;
        height: 300px;
        overflow: hidden;
        background-size: cover;
        background-position: center;
        margin:5px;
    }
    .modalproofReturn {
        width: 500px;
        height: 300px;
        overflow: hidden;
        background-size: cover;
        background-position: center;
        margin: 5px;
    }
    @media all and (max-width: 1024px) and (min-width: 768px), (min-width: 1151px) {
        .box-detail {
            margin: 6px 0px 0px 0px !important;
        }

        .custom-modal-body .custom-modal-body-row-2 > .box {
            height: auto;
        }

        .box-icon {
            width: 69px !important;
            height: 95px !important;
        }

        .col-sm-6 .row-2-box-content {
            display: flex;
        }

        .item-detail {
            padding: 0px 0px 0px 30px;
            line-height: 13px;
        }
    }

    /*@media screen and (min-width: 786px) {

        .box-icon {
            width: 69px !important;
            height: 95px !important;
        }

        .custom-modal-content {
            overflow: auto;
        }
    }*/

    @media screen and (max-width: 425px) {
        .custom-modal-body .custom-modal-body-row-1 > .box {
            width: auto;
        }

        .custom-modal-body .custom-modal-body-row-2 > .box {
            width: auto;
            height: auto;
        }

        .custom-modal-content > .custom-modal-body {
            margin: 186px -16px 2px 2px;
        }

        .custom-modal-body .custom-modal-body-row-1 {
            margin: 0px -11px 0px -10px;
            width: 100%;
        }

        .padding-10 {
            padding: 0px !important;
        }
    }

    .d-flex {
        display: flex;
    }
</style>
    <!-- Modal -->
<div class="modal fade" id="ImportFileModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
<form action="/shipment/uploadfile" enctype="multipart/form-data" method="post">                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        ×
                    </button>
                    <h4 class="modal-title" id="myModalLabel">Generate From Excel File</h4>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-12">

                            <div>
                                <input id="file" name="file" type="file" value=""> <br>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="UploadFileAWB" name="submitCommand" value="UploadFileAWB" formaction="UploadFile">
                        Generate AWB
                    </button>
                    <button type="submit" class="btn btn-primary" id="UploadFileAWBZLabel" name="submitCommand" value="UploadFileAWBZLabel" formaction="UploadFile">
                        Generate AWBZ Label
                    </button>
                </div>
</form>        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

    <!-- Modal -->
<div class="modal fade" id="ShipmentFilterModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-filter-dialog">
        <div class="modal-content modal-filter-content">
            <div class="modal-header gradient">
                <div class=" hidden-xs btn-header pull-right">
                    <span id="lblShipmentTypeOnFilterModal">Domestic Shipments</span>
                    <span class="onoffswitch">
                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="onoff-domesticShipment">
                        <label class="onoffswitch-label" for="onoff-domesticShipment">
                            <span class="onoffswitch-inner" data-swchon-text="" data-swchoff-text=""></span>
                            <span class="onoffswitch-switch"></span>
                        </label>
                    </span>
                </div>
                <h4 class="modal-title modal-filter-title" id="myModalLabel">Shipment Filte</h4>
            </div>
            <div class="modal-body modal-filter-body">
                
                
                <div class="row row-content">
                    <div class="col-sm-4">
                        <h6>Created From Date</h6>
                        <div class="form-group">
                            <input type="text" class="form-control fl-input datepicker" placeholder="mm/dd/yyyy" id="txtCreatedFromDate" name="txtCreatedFromDate" required="">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <h6>Created To Date</h6>
                        <div class="form-group">
                            <input type="text" class="form-control fl-input datepicker" placeholder="mm/dd/yyyy" id="txtCreatedToDate" name="txtCreatedToDate" required="">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <h6>Delivery Date</h6>
                        <div class="form-group">
                            <input type="text" class="form-control fl-input datepicker" placeholder="mm/dd/yyyy" id="txtDeliveryDate" name="txtDeliveryDate" required="">
                        </div>
                    </div>
                </div>
                <div class="row row-content">
                    <div class="col-sm-4">
                        <h6>Cities</h6>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <select multiple="" id="ddlSearchCityName" class="form-control fl-input input-md select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true"><option value="0">Please Select city</option><option value="1">Abu Dhabi</option><option value="2">Dubai</option><option value="3">Sharjah</option><option value="4">Ajman</option><option value="5">Al Ain</option><option value="6">Fujeriah</option><option value="7">Um Al Qwain</option><option value="8">Ras Al Khaimah</option><option value="9">Out of Service Area</option></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <h6>Zone</h6>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <select multiple="" id="ddlSearchZoneName" class="form-control fl-input input-md select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true"></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <h6>Supplier</h6>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <select multiple="" id="ddlSearchSupplier" class="form-control fl-input input-md select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true"></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="Supplier" style="width: 100px;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row row-content">
                    <div class="col-sm-4">
                        <h6>Shipper</h6>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <select multiple="" id="ddlSearchShipper" class="form-control fl-input input-md select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true"></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="Shipper" style="width: 100px;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-4">
                        <h6>Driver</h6>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <select multiple="" id="ddlSearchDriver" class="form-control fl-input input-md select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true"><option value="3">DR0003 | ops  Driver1</option><option value="5">DR0004 | Sajid  Saeed</option><option value="6">DR0006 | imtiaz  Khan</option><option value="7">DR0007 | Jaber  Mohammed</option><option value="8">DR0008 | Muhammad  Ishfaq</option><option value="12">DR0012 | Bikash  Budhathoki</option><option value="13">DR0013 | Waseem  Alain</option><option value="14">DR0014 | Taj   AUH</option><option value="15">DR0015 | TDS  TDS</option><option value="19">DR0019 | Goutham Gopinath Menon</option><option value="21">DR0021 | Test duliver test</option><option value="22">DR0022 | Sadia  Abid</option></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="Driver" style="width: 100px;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-4">
                        <h6>Status</h6>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <select multiple="" id="ddlSearchStatus" class="form-control fl-input input-md select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true"><option value="1">Order Placed </option><option value="2">Received at Hubs</option><option value="3"> In OPS</option><option value="4">Out For Delivery</option><option value="5">Delivered</option><option value="6">Replaced</option><option value="7">Out for delivery 1</option><option value="8">Out for delivery 2</option><option value="9">Out for delivery 3</option><option value="10">Cancelled</option><option value="11">Location Changed</option><option value="13">Future Delivery</option><option value="14">Mobile Not Answered</option><option value="16">Shipment FWD to OPS</option><option value="17">Wrong Item</option><option value="18">To be Picked Up</option><option value="19">Lost</option><option value="20">Damaged</option><option value="21">Returned to Origin</option><option value="22">Return to Origin</option><option value="23">Return Attempt</option><option value="25">Customer Refused</option><option value="27">Send To CSA</option><option value="28">Received in CSA</option><option value="29">Collected</option><option value="30">Shipper Cancelled</option><option value="31">customer not Available</option><option value="32">Mobile switched off</option><option value="33">Cash not ready</option><option value="35">Shipment Return to Hub</option><option value="38">FWD to CSA</option><option value="39">Received at OPS</option><option value="40">Bad Address</option><option value="42">Schedule for tomorrow</option><option value="43">Shipment on hold</option><option value="44">Out of Service Area</option><option value="45">Out of Country</option><option value="46">Wrong Amount</option><option value="47">Customer did not order</option><option value="48">Wrong Contact Number</option><option value="49">Only Pm Delivery</option><option value="51">Assigned to Courier</option></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="Status" style="width: 100px;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <h6>Warehouse</h6>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <select multiple="" id="ddlSearchWarehouse" class="form-control fl-input input-md select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true"></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="Warehouse" style="width: 100px;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <h6>Rack</h6>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <select multiple="" id="ddlSearchRack" class="form-control fl-input input-md select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true"></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="Rack" style="width: 100px;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <h6>Sales Person</h6>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <select multiple="" id="ddlSearchSalesPerson" class="form-control fl-input input-md select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true"><option value="3">Emp00003 | Zahra  Tariq</option><option value="6">Emp00006 | Naved  Khan</option><option value="7">Emp00007 | Shibindas  Thalappally</option><option value="19">EMP00009 | ops  Driver1</option><option value="20">EMP00020 | Sajid  Saeed</option><option value="22">EMP00022 | imtiaz  Khan</option><option value="23">EMP00023 | Sadia  Abid</option><option value="24">EMP00024 | Jaber  Mohammed</option><option value="25">EMP00025 | Muhammad  Ishfaq</option><option value="26">EMP00026 | Emmanuel  Umah</option><option value="28">EMP00028 | Bikash  Budhathoki</option><option value="29">EMP00029 | Goutham Gopinath Menon</option><option value="30">EMP00030 | Waseem  Alain</option><option value="31">EMP00031 | Taj   AUH</option><option value="32">EMP00032 | TDS  TDS</option><option value="33">EMP00033 | Test duliver test</option><option value="34">EMP00034 | test Test Test</option></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="Sales Person" style="width: 100px;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
                
                
                
            </div>
            <div class="modal-footer modal-filter-footer">
                <button id="btnClearShipmentFilter" type="button" class="btn btn-danger">
                    CLEAR
                </button>
                <button type="button" class="btn btn-warning" data-dismiss="modal">
                    DISMISS
                </button>
                <button id="btnSubmitShipmentFilter" type="button" class="btn btn-primary">
                    SUBMIT
                </button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

    <!-- Modal -->
<div class="modal fade" id="BatchUpdateModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-filter-dialog">
        <div class="modal-content modal-filter-content">
            <div class="modal-header gradient">
                <h4 class="modal-title modal-filter-title" id="">Batch Update</h4>
            </div>
            <div class="modal-body modal-filter-body">
                <div class="row row-content">
                    <div class="row">
                        <div class="col col-sm-12">
                            <label>
                                Tracking No
                            </label>
                            <div class="bootstrap-tagsinput"><input type="text" placeholder=""></div><input class="col-sm-12" type="text" id="trIds" data-role="tagsinput" placeholder="" value="" style="display: none;">
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <select id="ddlUpdateStatusModal" class="form-control fl-input input-md select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true"></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-ddlUpdateStatusModal-container"><span class="select2-selection__rendered" id="select2-ddlUpdateStatusModal-container"></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col col-sm-12">
                            <label>
                                Comment's
                            </label>
                            <textarea class="form-control col-sm-12" type="" id="areaCommentBatchUpdate" placeholder="Comment for" value="" cols="40"> </textarea>
                        </div>
                    </div>

                    <div class="modal-footer modal-filter-footer">
                        <button id="btnClearUpdatetags" type="button" class="btn btn-danger">
                            CLEAR
                        </button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">
                            DISMISS
                        </button>
                        <button id="btnSubmitUpdateBatch" type="button" class="btn btn-primary">
                            SUBMIT
                        </button>
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

    <!-- /.modal-dialog -->
<div class="modal fade" id="EditOrderModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width: 65%;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <span class="text-danger">X</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Edit Order</h4>
            </div>
            <div class="modal-body">
                <div class="widget-body no-padding">
                    <input type="hidden" id="hdnShipmentID_OnEditModal">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="ddlShipper_OnEditModal">Shipper</label><i class="fa fa-asterisk astcolor"></i>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa-md fa-fw"></i></span>
                                    <select id="ddlShipper_OnEditModal" name="ddlShipper_OnEditModal" class="form-control input-md select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true"></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-ddlShipper_OnEditModal-container"><span class="select2-selection__rendered" id="select2-ddlShipper_OnEditModal-container"></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="ddlDriver_OnEditModal">Driver</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa-md fa-fw"></i></span>
                                    <select id="ddlDriver_OnEditModal" name="ddlDriver_OnEditModal" class="form-control input-md select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true"></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-ddlDriver_OnEditModal-container"><span class="select2-selection__rendered" id="select2-ddlDriver_OnEditModal-container"></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="ddlShipmentAvailableStatus_OnEditModal">Shipment Status</label><i class="fa fa-asterisk astcolor"></i>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-flag-checkered fa-md fa-fw"></i></span>
                                    <select id="ddlShipmentAvailableStatus_OnEditModal" name="ddlShipmentAvailableStatus_OnEditModal" class="form-control input-md select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true"></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-ddlShipmentAvailableStatus_OnEditModal-container"><span class="select2-selection__rendered" id="select2-ddlShipmentAvailableStatus_OnEditModal-container"></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Barcode</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-barcode fa-md fa-fw"></i></span>
                                    <input class="form-control input-md" placeholder="BarCode" type="text" name="txtBarCode_OnEditModal" id="txtBarCode_OnEditModal">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Reference Number (Optional)</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-slack fa-md fa-fw"></i></span>
                                    <input class="form-control input-md" placeholder="(Optional)" type="text" name="txtShipperReferenceNumber_OnEditModal" id="txtShipperReferenceNumber_OnEditModal">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Remarks</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-quote-left  fa-md fa-fw"></i></span>
                                    <input class="form-control input-md" placeholder="Remarks (Optional)" type="tel" name="txtRecipientRemarks_OnEditModal" id="txtRecipientRemarks_OnEditModal">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>COD</label> <i class="fa fa-asterisk astcolor"></i>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-money fa-md fa-fw"></i></span>
                                    <input class="form-control input-md" placeholder="COD" type="text" name="txtCostOfGoods_OnEditModal" id="txtCostOfGoods_OnEditModal">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row smart-form">
                        <div class="row margin-bottom-10">
                            <div class="col col-6">
                                <div class="form-group">
                                    <label for="ddlServiceType_OnEditModal">Service Type</label><i class="fa fa-asterisk astcolor"></i>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa  fa-send fa-md fa-fw"></i></span>
                                        <select id="ddlServiceType_OnEditModal" name="ddlServiceType_OnEditModal" class="form-control input-md select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true"></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-ddlServiceType_OnEditModal-container"><span class="select2-selection__rendered" id="select2-ddlServiceType_OnEditModal-container"></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-6">
                                <div class="form-group">
                                    <label for="ddlPackageType_OnEditModal">Package Type</label><i class="fa fa-asterisk astcolor"></i>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-delicious fa-md fa-fw"></i></span>
                                        <select id="ddlPackageType_OnEditModal" name="ddlPackageType_OnEditModal" class="form-control input-md select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true"></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-ddlPackageType_OnEditModal-container"><span class="select2-selection__rendered" id="select2-ddlPackageType_OnEditModal-container"></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-sm-6" style="border-right: 1px dashed gray">
                            <h6>Shipper</h6>
                            <hr class="simple">
                            <div class="row ">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Shipper Name</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user fa-md fa-fw"></i></span>
                                            <input class="form-control input-md" disabled="" placeholder="Shipper Name" type="text" name="txtSenderName_OnEditModal" id="txtSenderName_OnEditModal">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Shipper Code</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user fa-md fa-fw"></i></span>
                                            <input class="form-control input-md" disabled="" placeholder="****" type="text" name="txtSenderCode_OnEditModal" id="txtSenderCode_OnEditModal">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Contact Office 1</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-phone fa-md fa-fw"></i></span>
                                            <input class="form-control input-md" disabled="" placeholder="Contact Office" type="tel" name="txtContactNo_Office1_OnEditModal" id="txtContactNo_Office1_OnEditModal">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Contact Office 2</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-phone fa-md fa-fw"></i></span>
                                            <input class="form-control input-md" disabled="" placeholder="Contact Office" type="tel" name="txtContactNo_Office2_OnEditModal" id="txtContactNo_Office2_OnEditModal">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <section>
                                        <br>
                                        <br>
                                    </section>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="ddlShipperCountry_OnEditModal">Country</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-flag fa-md fa-fw"></i></span>
                                            <select id="ddlShipperCountry_OnEditModal" name="ddlShipperCountry_OnEditModal" disabled="" class="form-control input-md select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true"></select><span class="select2 select2-container select2-container--default select2-container--disabled" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-labelledby="select2-ddlShipperCountry_OnEditModal-container"><span class="select2-selection__rendered" id="select2-ddlShipperCountry_OnEditModal-container"></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="ddlShipperCity_OnEditModal">City</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-flag fa-md fa-fw"></i></span>
                                            <select id="ddlShipperCity_OnEditModal" name="ddlShipperCity_OnEditModal" disabled="" class="form-control input-md select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true"></select><span class="select2 select2-container select2-container--default select2-container--disabled" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-labelledby="select2-ddlShipperCity_OnEditModal-container"><span class="select2-selection__rendered" id="select2-ddlShipperCity_OnEditModal-container"></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="ddlShipperArea_OnEditModal">Area</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-flag fa-md fa-fw"></i></span>
                                            <select id="ddlShipperArea_OnEditModal" name="ddlShipperArea_OnEditModal" disabled="" class="form-control input-md select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true"></select><span class="select2 select2-container select2-container--default select2-container--disabled" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-labelledby="select2-ddlShipperArea_OnEditModal-container"><span class="select2-selection__rendered" id="select2-ddlShipperArea_OnEditModal-container"></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Street</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-road fa-md fa-fw"></i></span>
                                            <input name="txtShipperStreet_OnEditModal" id="txtShipperStreet_OnEditModal" class="form-control input-md" disabled="" placeholder="Street" type="tel">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <h6>Recipient</h6>
                            <hr class="simple">
                            <div class="row ">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Recipient Name</label> <i class="fa fa-asterisk astcolor"></i>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user fa-md fa-fw"></i></span>
                                            <input name="txtRecipientName_OnEditModal" id="txtRecipientName_OnEditModal" class="form-control input-md" placeholder="Recipient Name" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Mobile</label> <i class="fa fa-asterisk astcolor"></i>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-phone fa-md fa-fw"></i></span>
                                            <input name="txtRecipientMobile_OnEditModal" id="txtRecipientMobile_OnEditModal" class="form-control input-md" placeholder="Mobile" type="tel">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Mobile 2</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-phone fa-md fa-fw"></i></span>
                                            <input name="txtRecipientMobile2_OnEditModal" id="txtRecipientMobile2_OnEditModal" class="form-control input-md" placeholder="Mobile 2 (Optional)" type="tel">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>LandLine</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-phone fa-md fa-fw"></i></span>
                                            <input class="form-control input-md" placeholder="LandLine" type="tel" name="txtRecipientLandLine_OnEditModal" id="txtRecipientLandLine_OnEditModal">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <section>
                                        <span class="smart-form input-group ">
                                            <label class="checkbox" style="margin-bottom: 12px;">
                                                <input type="checkbox" id="chkIsManualAddress" name="chkIsManualAddress">
                                                <i></i>Is Manual Address
                                            </label>
                                        </span>
                                    </section>
                                </div>
                                <div id="divRecipientFullAddress_OnEditModal" style="display:none;">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label> Full Address</label>
                                            <textarea id="txtRecipientFullAddress_OnEditModal" class="form-control" placeholder="Type here..." rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div id="divRecipientAddress_OnEditModal">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="ddlRecipientCountry_OnEditModal">Country</label><i class="fa fa-asterisk astcolor"></i>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-flag fa-md fa-fw"></i></span>
                                                <select id="ddlRecipientCountry_OnEditModal" name="ddlRecipientCountry_OnEditModal" class="form-control input-md select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true"></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-ddlRecipientCountry_OnEditModal-container"><span class="select2-selection__rendered" id="select2-ddlRecipientCountry_OnEditModal-container"></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="ddlRecipientCity_OnEditModal">City</label><i class="fa fa-asterisk astcolor"></i>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-flag fa-md fa-fw"></i></span>
                                                <select id="ddlRecipientCity_OnEditModal" name="ddlRecipientCity_OnEditModal" class="form-control input-md select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true"></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-ddlRecipientCity_OnEditModal-container"><span class="select2-selection__rendered" id="select2-ddlRecipientCity_OnEditModal-container"></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="ddlRecipientArea_OnEditModal">Area</label><i class="fa fa-asterisk astcolor"></i>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-flag fa-md fa-fw"></i></span>
                                                <select id="ddlRecipientArea_OnEditModal" name="ddlRecipientArea_OnEditModal" class="form-control input-md select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true"></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-ddlRecipientArea_OnEditModal-container"><span class="select2-selection__rendered" id="select2-ddlRecipientArea_OnEditModal-container"></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Street</label> <i class="fa fa-asterisk astcolor"></i>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-road fa-md fa-fw"></i></span>
                                                <input class="form-control input-md" placeholder="Street" type="tel" name="txtRecipientStreet" id="txtRecipientStreet">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="">
                        <h6>Shipment Items</h6>
                        <hr class="simple">
                        <div class="row smart-form">
                            <div class="row">
                                <section class="col col-6">
                                    <label class="input">
                                        <i></i>No. of Pieces
                                        <input id="txtNoOfPieces" value="1" type="text" placeholder="No. Of Pieces" title="Enter number between 1 - 5" tabindex="15">
                                    </label>
                                </section>
                                <section class="col col-6">
                                    <br>
                                    <span class="smart-form input-group ">
                                        <label class="checkbox">
                                            <input type="checkbox" id="chkIsPeicesCostOfGoods" name="chkIsPeicesCostOfGoods" tabindex="16">
                                            <i></i>Use specific COD.
                                        </label>
                                    </span>
                                </section>
                            </div>
                        </div>

                        <div class="row smart-form" id="divPiecesDescription">
                            <div class="row" id="_1">
                                <input type="hidden" id="hdnPieceID_1" value="0">
                                <section class="col col-6">
                                    <label class="textarea">
                                        <textarea id="txtPieceDesc_1" rows="1" name="comment" placeholder="Tell us about 1st Piece.." tabindex="17"></textarea>
                                    </label>
                                </section>
                                <section class="col col-6">
                                    <label class="input">
                                        <input type="text" id="txtCostOfGoods_1" name="txtCostOfGoods1" placeholder="COD" tabindex="18">
                                    </label>
                                </section>
                            </div>
                            <div id="_2" class="row" style="display:none">
                                <input type="hidden" id="hdnPieceID_2" value="0">
                                <section class="col col-6">
                                    <label class="textarea">
                                        <textarea id="txtPieceDesc_2" rows="1" name="comment" placeholder="Tell us about 2nd Piece.." tabindex="19"></textarea>
                                    </label>
                                </section>
                                <section class="col col-6">
                                    <label class="input">
                                        <input type="text" id="txtCostOfGoods_2" name="txtCostOfGoods2" placeholder="COD" tabindex="20">
                                    </label>
                                </section>
                            </div>
                            <div id="_3" class="row" style="display:none">
                                <input type="hidden" id="hdnPieceID_3" value="0">
                                <section class="col col-6">
                                    <label class="textarea">
                                        <textarea id="txtPieceDesc_3" rows="1" name="comment" placeholder="Tell us about 3rd Piece.." tabindex="21"></textarea>
                                    </label>
                                </section>
                                <section class="col col-6">
                                    <label class="input">
                                        <input type="text" id="txtCostOfGoods_3" name="txtCostOfGoods3" placeholder="COD" tabindex="22">
                                    </label>
                                </section>
                            </div>
                            <div id="_4" class="row" style="display:none">
                                <input type="hidden" id="hdnPieceID_4" value="0">
                                <section class="col col-6">
                                    <label class="textarea">
                                        <textarea id="txtPieceDesc_4" rows="1" name="comment" placeholder="Tell us about 4th Piece.." tabindex="23"></textarea>
                                    </label>
                                </section>
                                <section class="col col-6">
                                    <label class="input">
                                        <span id="errmsg" class="text-danger"></span>
                                        <input type="text" id="txtCostOfGoods_4" name="txtCostOfGoods4" placeholder="COD" tabindex="24">
                                    </label>
                                </section>
                            </div>
                            <div id="_5" class="row" style="display:none">
                                <input type="hidden" id="hdnPieceID_5" value="0">
                                <section class="col col-6">
                                    <label class="textarea">
                                        <textarea id="txtPieceDesc_5" rows="1" name="comment" placeholder="Tell us about 5th Piece.." tabindex="25"></textarea>
                                    </label>
                                </section>
                                <section class="col col-6">
                                    <label class="input">
                                        <input type="text" id="txtCostOfGoods_5" name="txtCostOfGoods5" placeholder="Cost od Goods" tabindex="26">
                                    </label>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a id="btnSave_OnEditModal" class="btn btn-success">Save</a>
            </div>
            <!-- end widget content -->
        </div>
    </div><!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->

    <!-- Modal -->
<div class="modal fade" id="BatchAssignSupplierModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-filter-dialog">
        <div class="modal-content modal-filter-content">
            <div class="modal-header gradient">
                <h4 class="modal-title modal-filter-title" id="">Batch Assigned To Supplier</h4>
            </div>
            <div class="modal-body modal-filter-body">
                <div class="row row-content">
                    <div class="row">
                        <div class="col col-sm-12">
                            <label>
                                Tracking No
                            </label>
                            <div class="bootstrap-tagsinput"><input type="text" placeholder=""></div><input class="col-sm-12" type="text" id="assignToSupplierTrackingIds" data-role="tagsinput" placeholder="" value="" style="display: none;">
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <select id="ddlSearchSupplierModel" class="form-control fl-input input-md select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true"></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-ddlSearchSupplierModel-container"><span class="select2-selection__rendered" id="select2-ddlSearchSupplierModel-container"></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer modal-filter-footer">
                        <button id="btnSubmitUnAssignSupplierBatch" type="button" class="btn btn-danger">
                            Un Assigned
                        </button>
                        <button id="btnClearAssignSuppliertags" type="button" class="btn btn-danger">
                            CLEAR
                        </button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">
                            DISMISS
                        </button>
                        <button id="btnSubmitAssignSupplierBatch" type="button" class="btn btn-primary">
                            SUBMIT
                        </button>
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

    <!-- Modal -->
<div class="modal fade" id="BatchOutScanModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-filter-dialog">
        <div class="modal-content modal-filter-content">
            <div class="modal-header gradient">
                <h4 class="modal-title modal-filter-title" id="">Batch OutScan</h4>
            </div>
            <div class="modal-body modal-filter-body">
                <div class="row row-content">
                    <div class="row">
                        <div class="col col-sm-12">
                            <label>
                                Tracking No
                            </label>
                            <div class="bootstrap-tagsinput"><input type="text" placeholder=""></div><input class="col-sm-12" type="text" id="trOutScanIds" data-role="tagsinput" placeholder="" value="" style="display: none;">
                        </div>
                    </div>
                    <br>
                    <div class="row" id="divDuplicate" style="display: none;">
                        <div class="col col-sm-12">
                            <label class="text-danger">
                                Tracking No (Already Job Created Today)
                            </label>
                            <div class="bootstrap-tagsinput"><input type="text" placeholder=""></div><input class="col-sm-12" type="text" id="trAlreadyDoneOutScanIds" data-role="tagsinput" placeholder="" value="" style="display: none;">
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col col-sm-12">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>
                                            Delivery Date
                                        </label>
                                        <input type="text" id="txtDeliveryDateOutScan" class="form-control datepicker" required="">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>
                                            Select Driver
                                        </label>
                                        <select id="ddlSelectDriver" class="form-control fl-input input-md select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true"><option value="0">Please Select Driver</option><option value="3">ops  Driver1</option><option value="5">Sajid  Saeed</option><option value="6">imtiaz  Khan</option><option value="7">Jaber  Mohammed</option><option value="8">Muhammad  Ishfaq</option><option value="12">Bikash  Budhathoki</option><option value="13">Waseem  Alain</option><option value="14">Taj   AUH</option><option value="15">TDS  TDS</option><option value="19">Goutham Gopinath Menon</option><option value="21">Test duliver test</option><option value="22">Sadia  Abid</option></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-ddlSelectDriver-container"><span class="select2-selection__rendered" id="select2-ddlSelectDriver-container" title="Please Select Driver">Please Select Driver</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer modal-filter-footer">
                        <button id="btnClearOutScantags" type="button" class="btn btn-danger">
                            CLEAR
                        </button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">
                            DISMISS
                        </button>
                        <button id="btnSubmitBatchOutScan" type="button" class="btn btn-primary">
                            SUBMIT
                        </button>
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

    <!-- Modal -->
<div class="modal fade" id="BatchInScanModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-filter-dialog">
        <div class="modal-content modal-filter-content">
            <div class="modal-header gradient">
                <h4 class="modal-title modal-filter-title" id="">Batch InScan</h4>
            </div>
            <div class="modal-body modal-filter-body">
                <div class="row row-content">
                    <div class="row">
                        <div class="col col-sm-12">
                            <label>
                                Tracking No
                            </label>
                            <div class="bootstrap-tagsinput"><input type="text" placeholder=""></div><input class="col-sm-12" type="text" id="trInScanIds" data-role="tagsinput" placeholder="" value="" style="display: none;">
                        </div>
                    </div>
                    <br>
                    <div class="row" id="divDuplicateInScan" style="display: none;">
                        <div class="col col-sm-12">
                            <label class="text-danger">
                                Tracking No (Already Job Created Today)
                            </label>
                            <div class="bootstrap-tagsinput"><input type="text" placeholder=""></div><input class="col-sm-12" type="text" id="trAlreadyDoneInScanIds" data-role="tagsinput" placeholder="" value="" style="display: none;">
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col col-sm-12">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>
                                            Select Warehouse
                                        </label>
                                        <select id="ddlSelectWarehouse" class="form-control fl-input input-md select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true"><option value="0">Please Select Warehouse</option><option value="2">WH00001 | Dubai</option><option value="3">WH00003 | Sharjah</option></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-ddlSelectWarehouse-container"><span class="select2-selection__rendered" id="select2-ddlSelectWarehouse-container" title="Please Select Warehouse">Please Select Warehouse</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>
                                            Select Rack
                                        </label>
                                        <select id="ddlSelectRack" class="form-control fl-input input-md select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true"><option value="0">Please Select Rack</option><option value="1">A 01 | Dubai</option><option value="2">A 02 | Dubai</option><option value="3">A 03 | Dubai</option><option value="4">A 04 | Dubai</option><option value="5">B 01 | Dubai</option><option value="6">B 02 | Dubai</option><option value="7">B 03 | Dubai</option><option value="8">B 04 | Dubai</option><option value="9">C 01 | Dubai</option><option value="10">C 02 | Dubai</option><option value="11">C 03 | Dubai</option><option value="12">C 04 | Dubai</option><option value="13">D 01 | Dubai</option><option value="14">D 02 | Dubai</option><option value="15">D 03 | Dubai</option><option value="16">D 04 | Dubai</option><option value="17">E 01 | Dubai</option><option value="18">E 02 | Dubai</option><option value="19">E 03 | Dubai</option><option value="20">E 04 | Dubai</option><option value="21">F 01 | Dubai</option><option value="22">F 02 | Dubai</option><option value="23">F 03 | Dubai</option><option value="24">F 04 | Dubai</option><option value="25">G 01 | Dubai</option><option value="26">G 02 | Dubai</option><option value="27">G 03 | Dubai</option><option value="28">G 04 | Dubai</option><option value="29">H 01 | Dubai</option><option value="30">H 02 | Dubai</option><option value="31">H 03 | Dubai</option><option value="32">H 04 | Dubai</option><option value="33">I 01 | Dubai</option><option value="34">I 02 | Dubai</option><option value="35">J 01 | Dubai</option><option value="36">J 02 | Dubai</option><option value="37">K 01 | Dubai</option><option value="38">K 02 | Dubai</option><option value="39">L 01 | Dubai</option><option value="40">L 02 | Dubai</option><option value="41">silicon oasis | Dubai</option></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-ddlSelectRack-container"><span class="select2-selection__rendered" id="select2-ddlSelectRack-container" title="Please Select Rack">Please Select Rack</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer modal-filter-footer">
                        <button id="btnClearInScantags" type="button" class="btn btn-danger">
                            CLEAR
                        </button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">
                            DISMISS
                        </button>
                        <button id="btnSubmitBatchInScan" type="button" class="btn btn-primary">
                            SUBMIT
                        </button>
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

    <!-- Modal -->
<div class="modal fade" id="BatchAssignRackModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-filter-dialog">
        <div class="modal-content modal-filter-content">
            <div class="modal-header gradient">
                <h4 class="modal-title modal-filter-title" id="">Batch InScan</h4>
            </div>
            <div class="modal-body modal-filter-body">
                <div class="row row-content">
                    <div class="row">
                        <div class="col col-sm-12">
                            <label>
                                Tracking No
                            </label>
                            <div class="bootstrap-tagsinput"><input type="text" placeholder=""></div><input class="col-sm-12" type="text" id="trAssignRackIds" data-role="tagsinput" placeholder="" value="" style="display: none;">
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col col-sm-12">
                            <label>
                                Comment's
                            </label>
                            <textarea class="form-control col-sm-12" type="" id="areaCommentAssignRack" placeholder="Comment for" value="" cols="40"> </textarea>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col col-sm-12">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>
                                            Select Rack
                                        </label>
                                        <select id="ddlSelectBatchAssignRack" class="form-control fl-input input-md select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true"><option value="0">Please Select Rack</option><option value="1">A 01 | Dubai</option><option value="2">A 02 | Dubai</option><option value="3">A 03 | Dubai</option><option value="4">A 04 | Dubai</option><option value="5">B 01 | Dubai</option><option value="6">B 02 | Dubai</option><option value="7">B 03 | Dubai</option><option value="8">B 04 | Dubai</option><option value="9">C 01 | Dubai</option><option value="10">C 02 | Dubai</option><option value="11">C 03 | Dubai</option><option value="12">C 04 | Dubai</option><option value="13">D 01 | Dubai</option><option value="14">D 02 | Dubai</option><option value="15">D 03 | Dubai</option><option value="16">D 04 | Dubai</option><option value="17">E 01 | Dubai</option><option value="18">E 02 | Dubai</option><option value="19">E 03 | Dubai</option><option value="20">E 04 | Dubai</option><option value="21">F 01 | Dubai</option><option value="22">F 02 | Dubai</option><option value="23">F 03 | Dubai</option><option value="24">F 04 | Dubai</option><option value="25">G 01 | Dubai</option><option value="26">G 02 | Dubai</option><option value="27">G 03 | Dubai</option><option value="28">G 04 | Dubai</option><option value="29">H 01 | Dubai</option><option value="30">H 02 | Dubai</option><option value="31">H 03 | Dubai</option><option value="32">H 04 | Dubai</option><option value="33">I 01 | Dubai</option><option value="34">I 02 | Dubai</option><option value="35">J 01 | Dubai</option><option value="36">J 02 | Dubai</option><option value="37">K 01 | Dubai</option><option value="38">K 02 | Dubai</option><option value="39">L 01 | Dubai</option><option value="40">L 02 | Dubai</option><option value="41">silicon oasis | Dubai</option></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-ddlSelectBatchAssignRack-container"><span class="select2-selection__rendered" id="select2-ddlSelectBatchAssignRack-container" title="Please Select Rack">Please Select Rack</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer modal-filter-footer">
                        <button id="btnClearBatchAssignRacktags" type="button" class="btn btn-danger">
                            CLEAR
                        </button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">
                            DISMISS
                        </button>
                        <button id="btnSubmitBatchAssignRack" type="button" class="btn btn-primary">
                            SUBMIT
                        </button>
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

    <!-- /.modal -->
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
    var tAPI = initDataTable('.table-dashboard_operations',  admin_url+'shipment_details/table', [0], [0], driversServerParams,<?php echo hooks()->apply_filters('customers_table_default_order', json_encode(array(2,'asc'))); ?>);
    $('input[name="exclude_inactive"]').on('change',function(){
      tAPI.ajax.reload();
    });
  });

</script>
</body>
</html>
