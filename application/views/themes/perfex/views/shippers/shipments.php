<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<div class="row">
    <div class="col-md-12">
        <!-- <h3 id="greeting" class="no-mtop"></h3> -->
        <!-- <?php if (has_contact_permission('projects')) { ?>
			<div class="panel_s">
				<div class="panel-body">
					<h3 class="text-success projects-summary-heading no-mtop mbot15"><?php echo _l('projects_summary'); ?></h3>
					<div class="row">
						<?php get_template_part('projects/project_summary'); ?>
					</div>
				</div>
			</div>
        <?php } ?> -->
        
        <div class="panel_s">
            <div class="row">
                <div class="col-md-11" style="margin-left: 2%;">
                   
                <!-- dashboard -->
                <div id="content" class="order-content content">
    <div class="row" id="shipments">
        
        <ul id="ntabShipments" data-manifesturl="/Shipment/GetManifest" data-awbzlabelurl="/Shipment/GetAirwayBillLabelByTrackingNo" data-exportexcelurl="/Shipment/ShipmentsExportToExcel" class="nav nav-tabs tabs-shipments">
            <li class="active" id="allShipments" data-bind="0">
                <a href="#tab1" data-toggle="tab">ALL <span id="allShipmentsBadge" class="badge bg-color-flcount"></span></a>
            </li>
            <li id="toBePickedUpShipments" data-bind="1,18">
                <a href="#tab1" data-toggle="tab">TO BE PICKED UP<span id="toBePickedUpShipmentsBadge" class="badge bg-color-flcount"></span></a>
            </li>
            <li id="WithDriverShipments" data-bind="29">
                <a href="#tab1" data-toggle="tab">PICKED UP<span id="WithDriverShipmentsBadge" class="badge bg-color-flcount"></span></a>
            </li>
            <li id="toBeDeliveredShipments" data-bind="2,3,4,7,8,9,11,12,13,14,15,16,17,24,26,27,28,31,32,33,35,35,36,37,38,39,40,41,42,43,44,45,46,48,49,50">
                <a href="#tab1" data-toggle="tab">TO BE DELIVERED<span id="toBeDeliveredShipmentsBadge" class="badge bg-color-flcount"></span></a>
            </li>
            <li id="deliveredShipments" data-bind="5,6">
                <a href="#tab1" data-toggle="tab">DELIVERED<span id="deliveredShipmentsBadge" class="badge bg-color-flcount"></span></a>
            </li>
            <li id="lostAndDamages" data-bind="19,20">
                <a href="#tab1" data-toggle="tab">LOST &amp; DAMAGES<span id="lostanddamagesBadge" class="badge bg-color-flcount"></span></a>
            </li>
            <li id="toBeReturnedShipments" data-bind="22,23">
                <a href="#tab1" data-toggle="tab">TO BE RETURNED<span id="toBeReturnedShipmentsBadge" class="badge bg-color-flcount"></span></a>
            </li>
            <li id="returnedShipments" data-bind="21">
                <a href="#tab1" data-toggle="tab">RTOS<span id="returnedShipmentsBadge" class="badge bg-color-flcount"></span></a>
            </li>
            <li id="canceledShipments" data-bind="10,25">
                <a href="#tab1" data-toggle="tab">CANCELED<span id="canceledShipmentsBadge" class="badge bg-color-flcount"></span></a>
            </li>
        </ul>
        <div id="myTabContent1" class="tab-content padding-10">
            <div class="tab-pane fade in active" id="tab1">
                <!-- widget div-->
<div>
    <div id="wrapper-test" class="widget-body " style="margin: auto -10px;">
        <div id="dtAllShipments_wrapper" class="dataTables_wrapper no-footer"><div class="dt-toolbar"><div class="row"><div class="col-sm-9 form-Control"><div id="dtAllShipments_filter" class="dataTables_filter"><div id="selected" hidden=""><div id="selectedRowsCount">O orders Selected</div></div><div id="tagInputWrapper" style="text-align:left;margin-top:0px;max-height: 56px;float:left;overflow: hidden auto;width:100%"><tags class="tagify col-sm-12 tagify--noTags tagify--empty" tabindex="-1">
            <span contenteditable="" data-placeholder="Search" aria-placeholder="Search" class="tagify__input" role="textbox" aria-autocomplete="both" aria-multiline="false"></span>
        </tags><input class="col-sm-12" type="text" name="tags" placeholder="Search" value=""><div></div></div></div></div><div class="col-sm-3 dt-btn-Filter"><button class="btn btn-link" data-toggle="modal" data-target="#ShipmentFilterModal"><i class="fa fa-bars 2x "></i></button> <div class="btn-group "> <button class="btn btn-link dropdown-toggle " data-toggle="dropdown">AWB <span class="caret"></span></button><ul class="dropdown-menu">  <li> <a id="dt-exportToExcel" onclick="JSAllShipments.ExportToExcel();">Export To Excel</a> </li>  <li> <a id="dt-btnAirWayBillLabel" onclick="JSAllShipments.AWBZ();">AWBZ Label</a></li>  </ul> </div> <div id="btnManifest" style="" class="btn btn-default" onclick="JSAllShipments.Manifest();">Maniefst</div></div></div></div><div class="dataTables_scroll"><div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;"><div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 1125px; padding-right: 0px;"><table style="font-family: Roboto, sans-serif; font-size: 12px; font-weight: normal; margin-left: 0px; width: 1125px;" class="table table-striped table-bordered table-hover dataTable no-footer" width="100%" role="grid"><thead>
                <tr role="row"><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 7px;"><input id="multipleCheckAll" type="checkbox" class="from-check-input multipleCheck" style="cursor:pointer;"></th><th data-hide="phone" class="sorting" tabindex="0" aria-controls="dtAllShipments" rowspan="1" colspan="1" style="width: 64px;"><i class="hidden-md hidden-sm hidden-xs"></i>QS Ref</th><th data-hide="phone" class="sorting" tabindex="0" aria-controls="dtAllShipments" rowspan="1" colspan="1" style="width: 100px;"><i class="hidden-md hidden-sm hidden-xs"></i>Shipper Ref</th><th data-hide="phone" class="sorting" tabindex="0" aria-controls="dtAllShipments" rowspan="1" colspan="1" style="width: 118px;"><i class="hidden-md hidden-sm hidden-xs"></i> Shipper Name</th><th data-hide="phone" class="sorting" tabindex="0" aria-controls="dtAllShipments" rowspan="1" colspan="1" style="width: 105px;"><i class="hidden-md hidden-sm hidden-xs"></i> Driver Name</th><th data-hide="phone" class="sorting" tabindex="0" aria-controls="dtAllShipments" rowspan="1" colspan="1" style="width: 99px;"><i class="hidden-md hidden-sm hidden-xs"></i> Location To</th><th data-hide="phone" class="sorting" tabindex="0" aria-controls="dtAllShipments" rowspan="1" colspan="1" style="width: 126px;"><i class="hidden-md hidden-sm hidden-xs"></i> Receiver Name</th><th data-hide="phone" class="sorting" tabindex="0" aria-controls="dtAllShipments" rowspan="1" colspan="1" style="width: 45px;"><i class="hidden-md hidden-sm hidden-xs"></i> COD</th><th data-hide="phone" class="sorting" tabindex="0" aria-controls="dtAllShipments" rowspan="1" colspan="1" style="width: 112px;"><i class="hidden-md hidden-sm hidden-xs"></i> Delivery Date</th><th class="sorting" tabindex="0" aria-controls="dtAllShipments" rowspan="1" colspan="1" style="width: 77px;">STATUS</th></tr>
            </thead></table></div></div><div class="dataTables_scrollBody" style="position: relative; overflow: auto; width: 100%;"><table id="dtAllShipments" style="font-family: Roboto, sans-serif; font-size: 12px; font-weight: normal; width: 100%;" class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline" width="100%" role="grid" aria-describedby="dtAllShipments_info"><thead>
                <tr role="row" style="height: 0px;"><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 7px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><input id="multipleCheckAll" type="checkbox" class="from-check-input multipleCheck" style="cursor:pointer;"></div></th><th data-hide="phone" class="sorting" aria-controls="dtAllShipments" rowspan="1" colspan="1" style="width: 64px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><i class="hidden-md hidden-sm hidden-xs"></i>QS Ref</div></th><th data-hide="phone" class="sorting" aria-controls="dtAllShipments" rowspan="1" colspan="1" style="width: 100px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><i class="hidden-md hidden-sm hidden-xs"></i>Shipper Ref</div></th><th data-hide="phone" class="sorting" aria-controls="dtAllShipments" rowspan="1" colspan="1" style="width: 118px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><i class="hidden-md hidden-sm hidden-xs"></i> Shipper Name</div></th><th data-hide="phone" class="sorting" aria-controls="dtAllShipments" rowspan="1" colspan="1" style="width: 105px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><i class="hidden-md hidden-sm hidden-xs"></i> Driver Name</div></th><th data-hide="phone" class="sorting" aria-controls="dtAllShipments" rowspan="1" colspan="1" style="width: 99px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><i class="hidden-md hidden-sm hidden-xs"></i> Location To</div></th><th data-hide="phone" class="sorting" aria-controls="dtAllShipments" rowspan="1" colspan="1" style="width: 126px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><i class="hidden-md hidden-sm hidden-xs"></i> Receiver Name</div></th><th data-hide="phone" class="sorting" aria-controls="dtAllShipments" rowspan="1" colspan="1" style="width: 45px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><i class="hidden-md hidden-sm hidden-xs"></i> COD</div></th><th data-hide="phone" class="sorting" aria-controls="dtAllShipments" rowspan="1" colspan="1" style="width: 112px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><i class="hidden-md hidden-sm hidden-xs"></i> Delivery Date</div></th><th class="sorting" aria-controls="dtAllShipments" rowspan="1" colspan="1" style="width: 77px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">STATUS</div></th></tr>
            </thead>
            
        <tbody></tbody></table></div></div><div class=" dt-toolbar-footer"><div class="col-sm-4"><div class="pull-left"><div class="dataTables_info" id="dtAllShipments_info" role="status" aria-live="polite"></div></div></div><div class="col-sm-8"><div class="pull-right"><div class="dataTables_paginate paging_simple_numbers" id="dtAllShipments_paginate"></div></div><div class="pull-right margin-10 margin-top-10"><div class="dataTables_length" id="dtAllShipments_length"><label>Show <select name="dtAllShipments_length" aria-controls="dtAllShipments" class=""><option value="100">100</option><option value="10">10</option><option value="50">50</option><option value="500">500</option><option value="1000">1,000</option><option value="2000">2,000</option></select> entries</label></div></div></div><div id="dtAllShipments_processing" class="dataTables_processing" style="display: none;"><div class="loader"><div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div></div></div></div></div>
    </div>
    <!-- end widget content -->
</div>
<div class="col-sm-12">
    <button id="btnRefresh" type="button" class="btn btn-primary pull-right" style="margin-top: 10px; display: block;">
        <span><i class="fa fa-md fa-history"></i></span>
    </button>
</div>
<!-- end widget div -->

            </div>
            
        </div>
    </div>
    <!-- Modal -->
    <!-- Modal -->
<div class="modal fade custom-modal" id="ShipmentInfoModal" tabindex="-1" role="dialog" aria-labelledby="ModalShipmentInfo" aria-hidden="true">
    <div class="modal-dialog custom-modal-dialog">
        <div class="modal-content custom-modal-content">
            <div class="row custom-modal-head">
                <div class="col-sm-12 custom-modal-head-background">
                    <div class="row custom-modal-head-content" style="">
                        <div class="row head-content-row">
                            <input type="hidden" id="hdnShipmentID">
                            <input type="hidden" id="hdnTrackingNoModal">
                            <div class="col-sm-3">
                                <span class="text-md">
                                    BARCODE : <span id="BarCode"></span>
                                </span>
                                <br>
                                <span class="text-md">
                                    TRACKING : <span id="TrackingNo"></span>
                                </span>
                            </div>
                            <div class="col-sm-3">
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
                                            <span id="InScanDateTime"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="row">
                                    <div class="col-sm-2 text-center">
                                        <div class="item-icon tag-5">
                                            <i class="fa fa-lg  fa-arrow-circle-up  "></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-10 item-detail" style="">
                                        <span class="text-md">Shipment Created On : </span>
                                        <br>
                                        <span class="text-sm">
                                            <span id="CreatedDateTime"></span>
                                        </span>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row head-content-row">
                            <div class="col-sm-3 item-customer">
                                
                            </div>
                            <div class="col-sm-6">
                                <div class="item-detail-special text-center">
                                    <span class="text-sm "></span>
                                    <br>
                                    <span class="text-sm">
                                        <span id="AssigndToCourierTime" hidden="hidden"></span>
                                    </span>
                                </div>
                            </div>
                            <div class="col-sm-3 item-company">
                                <div class="row ">
                                    <div class="col-sm-9 item-detail text-right" style="">
                                        <span class="text-xsm ">DRIVER</span>
                                        <br>
                                        <span class="text-md">
                                            <span id="DriverName"></span>
                                        </span>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="item-icon-right tag-3">FL</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row head-content-row ">
                            <ul id="shipment" class="nav nav-tabs tab-shipment-info">
                                <li id="tabBriefDetail" class="">
                                    <a href="#s1" data-toggle="tab" class="text-md" aria-expanded="true">BRIEF</a>
                                </li>
                                <li>
                                    <a id="btnShipmentInfoHistory" href="#s3" data-toggle="tab" class="text-md">HISTORY</a>
                                </li>
                                
                                <li>
                                    <a href="#s5" data-toggle="tab" class="text-md">POD</a>
                                </li>
                                <li>
                                    <a href="#s6" data-toggle="tab" class="text-md">POR</a>
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
                    <div class="tab-pane" id="s1">
                        <div class="row custom-modal-body-row-1">
                            <div class="col-sm-6 box">
                                <div class="row">
                                    <div class="col-sm-3">
                                        
                                        <div class="box-icon tag-2" id="SenderProfileLetter"></div>
                                    </div>
                                    <div class="col-sm-9 box-detail">
                                        <span class="text-md ">SENDER</span>
                                        <br>
                                        <span class="text-lg">
                                            <span id="SenderName"></span>
                                        </span>
                                        <br>
                                        <span class="text-md txt-color-gray">
                                            <span id="SenderNumber"></span>
                                        </span>
                                        <br>
                                        <span class="text-lg">
                                            <span id="SenderAddressLine"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 box">
                                <div class="row">
                                    <div class="col-sm-3">
                                        
                                        <div class="box-icon tag-1" id="RecipientProfileLetter"></div>
                                    </div>
                                    <div class="col-sm-9 box-detail">
                                        <span class="text-md ">RECIPIENT</span>
                                        <br>
                                        <span class="text-lg">
                                            <span id="RecipientName"></span>
                                        </span>
                                        <br>
                                        <span class="text-md txt-color-gray">
                                            <span id="RecipientNumber"></span>
                                        </span>
                                        <br>
                                        <span class="text-lg">
                                            <span id="RecipientAddressLine"></span>
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
                                                    <span id="ItemWeightCategory"></span>

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
                                                    <span id="ItemReceivedVia"></span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="row row-2-box-content">
                                            <div class="item-detail-special">
                                                <span class="text-xsm">Item Description / Special Instructions</span>
                                                <br>
                                                <span class="text-md">
                                                    <span id="ItemDescription"></span>
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
                                                    <span id="ItemServiceType"></span>
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
                                                    <span id="ItemValue"></span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="row row-2-box-content" style="">
                                            <div class="item-detail-special">
                                                <span class="text-xsm">No Of Pieces</span>
                                                <br>
                                                <span class="text-md">
                                                    <span id="NoOfPieces"></span>
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
                                                <span id="PaymentMethod"></span>
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
                                                <span id="PaymentServiceChergesPaidBy"></span>
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
                                                <span id="PublicServiceFee"></span>
                                            </p>
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="text-left text-md">
                                                TOTAL:
                                                <span id="PublicServiceFeeTotal"></span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p class="text-left text-md">CASH ON DELIVERY</p>
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="text-center text-md">
                                                <span id="CashOnDelivery"></span>
                                            </p>
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="text-left text-md">
                                                TOTAL:
                                                <span id="CashOnDeliveryTotal"></span>
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
                    <div class="tab-pane " id="s3">
                        <div class="active-tab-content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <fieldset>
                                        <div class="tabcontent-box">
                                            <div class="history-tl-container">

                                                <div class="col-sm-12" id="INTL">
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

                                                <ul class="tl" id="ulShipmentStatusTracking"></ul>
                                                <div id="divPostComments" class="row">
                                                    <div class="col-sm-11">
                                                        <input type="text" class="form-control" placeholder="Please write your comments here..." id="txtShipmentStatusTrackingComments">
                                                    </div>
                                                    <div class="col-sm-1">
                                                        <input type="button" class="btn btn-success pull-right" value="Post" id="btnShipmentStatusTrackingComments">
                                                    </div>
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

                    <div class="tab-pane " id="s5">
                        <div class="active-tab-content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <fieldset>
                                        <div class="tabcontent-box" style="padding:5px 10px; height:25px; overflow-x:auto">
                                            <div class="history-tl-container">
                                                <h6>Proof of Delivery</h6>
                                                <div id="prfDDiv">

                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane " id="s6">
                        <div class="active-tab-content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <fieldset>
                                        <div class="tabcontent-box" style="padding:5px 10px; height:25px; overflow-x:auto">
                                            <div class="history-tl-container">
                                                <h6>Proof of Return</h6>
                                                <div id="prfRDiv">

                                                </div>
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
        margin: 5px;
    }

    .modalproofReturn {
        width: 500px;
        height: 300px;
        overflow: hidden;
        background-size: cover;
        background-position: center;
        margin: 5px;
    }
</style>
    <!-- Modal -->
<div class="modal fade" id="ImportFileModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
<form action="/Shipment/UploadFile" enctype="multipart/form-data" method="post">                <div class="modal-header">
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
<div class="modal fade" id="ShipmentFilterModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-filter-dialog">
        <div class="modal-content modal-filter-content">
            <div class="modal-header modal-filter-header">
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
                <h4 class="modal-title modal-filter-title" id="myModalLabel">Shipment Filter</h4>
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
                            <input type="text" class="form-control fl-input" placeholder="mm/dd/yyyy" id="txtCreatedToDate" name="txtCreatedToDate" required="">
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
                    <div class="col-sm-8">
                        <h6>Cities</h6>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <select multiple="" id="ddlSearchCityName" class="form-control fl-input input-md select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true"><option value="1">Abu Dhabi</option><option value="2">Dubai</option><option value="3">Sharjah</option><option value="4">Ajman</option><option value="5">Al Ain</option><option value="6">Fujeriah</option><option value="7">Um Al Qwain</option><option value="8">Ras Al Khaimah</option><option value="9">Out of Service Area</option></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="Cities" style="width: 100px;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-content">
                    
                    <div class="col-sm-6">
                        <h6>Driver</h6>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <select multiple="" id="ddlSearchDriver" class="form-control fl-input input-md select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true"><option value="3">DR0003 | ops  Driver1</option><option value="5">DR0004 | Sajid  Saeed</option><option value="6">DR0006 | imtiaz  Khan</option><option value="7">DR0007 | Jaber  Mohammed</option><option value="8">DR0008 | Muhammad  Ishfaq</option><option value="12">DR0012 | Bikash  Budhathoki</option><option value="13">DR0013 | Waseem  Alain</option><option value="14">DR0014 | Taj   AUH</option><option value="19">DR0019 | Goutham Gopinath Menon</option><option value="21">DR0021 | Test duliver test</option><option value="22">DR0022 | Sadia  Abid</option><option value="23">DR0023 | test Test Test</option><option value="26">DR0026 | Emmanuel  Umah</option><option value="27">DR0027 | Test  t Driver</option></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="Driver" style="width: 100px;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-6">
                        <h6>Status</h6>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <select multiple="" id="ddlSearchStatus" class="form-control fl-input input-md select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true"><option value="1">Order Placed </option><option value="2">Received at Hubs</option><option value="3"> In OPS</option><option value="4">Out For Delivery</option><option value="5">Delivered</option><option value="6">Replaced</option><option value="7">Out for delivery 1</option><option value="8">Out for delivery 2</option><option value="9">Out for delivery 3</option><option value="10">Cancelled</option><option value="11">Location Changed</option><option value="13">Future Delivery</option><option value="14">Mobile Not Answered</option><option value="16">Shipment FWD to OPS</option><option value="17">Wrong Item</option><option value="18">To be Picked Up</option><option value="19">Lost</option><option value="20">Damaged</option><option value="21">Returned to Origin</option><option value="22">Return to Origin</option><option value="23">Return Attempt</option><option value="25">Customer Refused</option><option value="27">Send To CSA</option><option value="28">Received in CSA</option><option value="29">Collected</option><option value="30">Shipper Cancelled</option><option value="31">customer not Available</option><option value="32">Mobile switched off</option><option value="33">Cash not ready</option><option value="35">Shipment Return to Hub</option><option value="38">FWD to CSA</option><option value="39">Received at OPS</option><option value="40">Bad Address</option><option value="42">Schedule for tomorrow</option><option value="43">Shipment on hold</option><option value="44">Out of Service Area</option><option value="45">Out of Country</option><option value="46">Wrong Amount</option><option value="47">Customer did not order</option><option value="48">Wrong Contact Number</option><option value="49">Only Pm Delivery</option><option value="51">Assigned to Courier</option></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="Status" style="width: 100px;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
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
                                    <select id="ddlShipper_OnEditModal" disabled="" name="ddlShipper_OnEditModal" class="form-control input-md select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true"></select><span class="select2 select2-container select2-container--default select2-container--disabled" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-labelledby="select2-ddlShipper_OnEditModal-container"><span class="select2-selection__rendered" id="select2-ddlShipper_OnEditModal-container"></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="ddlDriver_OnEditModal">Driver</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa-md fa-fw"></i></span>
                                    <select id="ddlDriver_OnEditModal" disabled="" name="ddlDriver_OnEditModal" class="form-control input-md select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true"></select><span class="select2 select2-container select2-container--default select2-container--disabled" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-labelledby="select2-ddlDriver_OnEditModal-container"><span class="select2-selection__rendered" id="select2-ddlDriver_OnEditModal-container"></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Barcode</label> 
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-barcode  fa-md fa-fw"></i></span>
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
                                    <span class="input-group-addon"><i class="fa fa-money  fa-md fa-fw"></i></span>
                                    <input class="form-control input-md" placeholder="COD" type="text" name="txtCostOfGoods_OnEditModal" id="txtCostOfGoods_OnEditModal">
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
                                            <span class="input-group-addon"><i class="fa fa-road  fa-md fa-fw"></i></span>
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
                                                <span class="input-group-addon"><i class="fa fa-road  fa-md fa-fw"></i></span>
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

    <!-- /.modal -->
</div>
                <!-- end shipment here -->
                    
                </div>

            </div>
        </div>


    </div>
</div>
</div>
<script>
    var greetDate = new Date();
    var hrsGreet = greetDate.getHours();

    var greet;
    if (hrsGreet < 12)
        greet = "<?php echo _l('good_morning'); ?>";
    else if (hrsGreet >= 12 && hrsGreet <= 17)
        greet = "<?php echo _l('good_afternoon'); ?>";
    else if (hrsGreet >= 17 && hrsGreet <= 24)
        greet = "<?php echo _l('good_evening'); ?>";

    if (greet) {
        document.getElementById('greeting').innerHTML =
            '<b>' + greet + ' <?php echo $contact->firstname; ?>!</b>';
    }
</script>