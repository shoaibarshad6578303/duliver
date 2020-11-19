<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>
<div id="wrapper">
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body _buttons">
                    <h1><i class="fa fa-paw"></i>&nbsp;<?=_l('Shipment Tracking');?></h1>
                    <div class="clearfix"></div>
                    <hr class="hr-panel-heading" />
                    <div class="row" id="contract_summary">

                        
                      <div class="widget-body no-padding">
                                    <div class="widget-body-toolbar">
                                        <input type="hidden" id="hdnShipmentID">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="form-inline">
                                                    <div class="input-group" style="width: 40%;">
                                                        <input class="form-control" type="text" placeholder="123..." title="Search" id="txtSearch">
                                                    </div>
                                                    
                                                    <button class="btn btn-primary" type="button" id="btnSearch">
                                                        <i class="fa fa-search"></i> Search
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-inline">
                                                    <button class="btn btn-warning" type="button" id="btnChangeLocation" style="display: none;">
                                                        <i class="fa fa-location-arrow"></i> Change Location
                                                    </button>
                                                    <button class="btn btn-success" type="button" id="btnPrintAirwayBill" style="display: none;">
                                                         Print Airway Bill
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="padding-10">
    <div class="row">
        <div class="col-sm-12">
            <h1 class="semi-bold">
                Your &nbsp;#<i class="ultra-light"><span id="lblTrackingNo"></span></i> &nbsp;is&nbsp; <i class="ultra-light"><span id="lblTrackingCurrentStatus"></span>.</i>

            </h1>
        </div>
    </div>
    <hr class="simple">
    <div class="row">
        <div class="col-sm-6">
            <div class="row">
                <div class="col-sm-12">
                    <fieldset>
                        <table class="table table-hover nowrap" style="width:100%;">
                            <tbody><tr>
                                <th>Driver :</th>
                                <td class="text-left"> <span id="lblDriverName"></span></td>
                            </tr>
                            <tr>
                                <th>Created On :</th>
                                <td class="text-left">
                                    <span id="lblShipmentCreatedOn"> </span><b><i> By </i></b><span id="lblShipmentCreatedBy"></span>
                                </td>
                            </tr>
                            <tr>
                                <th>Updated On :</th>
                                <td class="text-left">
                                    <span id="lblShipmentUpdatedOn"> </span><b><i> By </i></b><span id="lblShipmentUpdatedBy"></span>
                                </td>

                            </tr>
                            <tr>
                                <th>Total COD:</th>
                                <td class="text-left">
                                    <span id="lblShipmentTotalCOG"> </span>
                                </td>

                            </tr>
                            <tr>
                                <th>Zone :</th>
                                <td class="text-left">
                                    <span id="lblShipmentZoneName"> </span>
                                </td>
                            </tr>
                            <tr>
                                <th>Remarks :</th>
                                <td class="text-left">
                                    <span id="lblShipmentRemarks"> </span>
                                </td>

                            </tr>
                            <tr>
                                <th>Description :</th>
                                <td class="text-left">
                                    <span id="lblShipmentDescription"> </span>
                                </td>
                            </tr>
                        </tbody></table>
                    </fieldset>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <fieldset>
                        <table class="table table-hover" id="tblShipmentItems">
                            <thead>
                                <tr>
                                    <th>QTY</th>
                                    <th>DESCRIPTION</th>
                                    <th>PRICE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!--<tr>
                                    <th>1 : </th>
                                    <td>Description</td>
                                    <td>CoG</td>
                                </tr>-->
                            </tbody>
                        </table>
                    </fieldset>
                </div>
                
            </div>
            <div class="row">
                <div class="col-sm-12">
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="row">
                <div class="col-sm-12">
                    <fieldset>
                        <table class="table table-hover" style="width:100%;">
                            <tbody><tr>
                                <th>Driver Paid Date : </th>
                                <td class="text-left">
                                    <span id="lblDriverPaidDate"></span>
                                </td>
                            </tr>
                            <tr>
                                <th>Driver Paid Status : </th>
                                <td class="text-left">
                                    <span id="lblDriverPaidStatus"></span>
                                </td>
                            </tr>
                            <tr>
                                <th>Invoice Number : </th>
                                <td class="text-left">
                                    <span id="lblInvoiceNumber"></span>
                                </td>
                            </tr>
                            <tr>
                                <th>Customer Paid Status : </th>
                                <td class="text-left">
                                    <span id="lblCustomerPaidStatus"></span>
                                </td>
                            </tr>
                            <tr>
                                <th>Service Charges : </th>
                                <td class="text-left">
                                    <span id="lblServiceCharges"></span>
                                </td>
                            </tr>
                        </tbody></table>
                    </fieldset>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <fieldset>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="">
                                    <h4 class="semi-bold">Sender<small> (Shipper)</small></h4>
                                    <address>
                                        <strong><span id="lblShipperName"></span></strong>
                                        <br>
                                        <span id="spanShipperAddress">

                                        </span>
                                    </address>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <h4 class="semi-bold">Receiver <small> (Recipient)</small></h4>
                                <address>
                                    <strong><span id="lblRecipientName"></span></strong>
                                    <br>
                                    <span id="spanRecipientAddress">

                                    </span>
                                </address>
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <fieldset>
                        <legend>Tracking History</legend>
                        <div class="well">
                            
                            <div class="history-tl-container">
                                <ul class="tl" id="ulShipmentStatusTracking">

                                    <!-- <li class="tl-item" ng-repeat="item in retailer_history">
                <div class="timestamp">
                    3rd March 2015<br> 7:00 PM
                </div>
                <div class="item-title">Start from Throw that goddamn ring in the lava Shire</div>
                <div class="item-detail">Don't forget the ring</div>
            </li>-->
                                </ul>
                            </div>
                            <div id="divPostComments" class="row" style="display: none;">
                                <div class="col-sm-11">
                                    <input type="text" class="form-control" placeholder="Please write your comments here..." id="txtShipmentStatusTrackingComments">
                                </div>
                                <div class="col-sm-1">
                                    <input type="button" class="btn btn-success pull-right" value="Post" id="btnShipmentStatusTrackingComments">
                                </div>
                            </div>
                            <input type="hidden" value="0" id="hdnTracking_No">
                        </div>
                    </fieldset>
                    
                </div>
            </div>
            
        </div>
    </div>
</div>

                                    <!-- end widget content -->
                                </div>

                    </div>
               </div>
           </div>
       </div>
   </div>
   <?php init_tail(); ?>
   <script>
    $(function(){
    
      
    });
</script>
</body>
</html>
