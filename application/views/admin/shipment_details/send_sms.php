<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>
<div id="wrapper">
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body _buttons">
                    <h1><i class="fa fa-lg fa-fw fa-envelope"></i>&nbsp;<?=$title;?></h1>
                    <div class="clearfix"></div>
                    <hr class="hr-panel-heading" />
                    <div class="row" id="contract_summary">

                    <div class="col-sm-12">
            <div class="">


           <!-- start -->
           <div class="">
                <!-- <div class="row">
                    <div class="col-sm-12">
                        <h1 class="pull-left"><i class="fa fa-lg fa-fw fa-envelope "></i> Send SMS</h1>
                    </div>
                </div>
                <hr> -->
                <div class="row">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="txtFromDate">From Date </label><i class="fa fa-asterisk astcolor"></i>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-calendar fa-md fa-fw"></i></span>
                                        <input type="text" class="form-control" placeholder="From Date" name="txtFromDate" id="txtFromDate">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="txtToDate">To Date </label><i class="fa fa-asterisk astcolor"></i>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-calendar fa-md fa-fw"></i></span>
                                        <input type="text" class="form-control" placeholder="To Date" name="txtToDate" id="txtToDate">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="ddlDriver">Driver</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-flag-checkered fa-md fa-user"></i></span>
                                        <select id="ddlDriver" class="form-control input-md select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                            <option value="0" selected="">All</option>
                                        <option value="3">DR0003 | ops  Driver1</option><option value="5">DR0004 | Sajid  Saeed</option><option value="6">DR0006 | imtiaz  Khan</option><option value="7">DR0007 | Jaber  Mohammed</option><option value="8">DR0008 | Muhammad  Ishfaq</option><option value="12">DR0012 | Bikash  Budhathoki</option><option value="13">DR0013 | Waseem  Alain</option><option value="14">DR0014 | Taj   AUH</option><option value="19">DR0019 | Goutham Gopinath Menon</option><option value="21">DR0021 | Test duliver test</option><option value="22">DR0022 | Sadia  Abid</option><option value="23">DR0023 | test Test Test</option><option value="26">DR0026 | Emmanuel  Umah</option><option value="27">DR0027 | Test  t Driver</option></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-ddlDriver-container"><span class="select2-selection__rendered" id="select2-ddlDriver-container" title="All">All</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col col-sm-4">
                                <div class="form-group">
                                    <label for="ddlCity">City</label><i class="fa fa-asterisk astcolor"></i>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-flag-checkered fa-md fa-fw"></i></span>
                                        <select id="ddlCity" class="form-control input-md select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true"><option value="0">Please Select city</option><option value="1">Abu Dhabi</option><option value="2">Dubai</option><option value="3">Sharjah</option><option value="4">Ajman</option><option value="5">Al Ain</option><option value="6">Fujeriah</option><option value="7">Um Al Qwain</option><option value="8">Ras Al Khaimah</option><option value="9">Out of Service Area</option></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-ddlCity-container"><span class="select2-selection__rendered" id="select2-ddlCity-container" title="Please Select city"><span class="select2-selection__clear">×</span>Please Select city</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-sm-4">
                                <div class="form-group">
                                    <label for="ddlAreas_Multiple">Areas</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-flag-checkered fa-md fa-fw"></i></span>
                                        <select multiple="" id="ddlAreas_Multiple" class="form-control input-md select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                            
                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-sm-4">
                                <div class="form-group">
                                    <label for="ddlSearchStatus">Status</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-flag-checkered fa-md fa-fw"></i></span>
                                        <select id="ddlSearchStatus" class="form-control input-md select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true"><option value="0">All |</option><option value="1">Order Placed </option><option value="2">Received at Hubs</option><option value="3"> In OPS</option><option value="4">Out For Delivery</option><option value="5">Delivered</option><option value="6">Replaced</option><option value="7">Out for delivery 1</option><option value="8">Out for delivery 2</option><option value="9">Out for delivery 3</option><option value="10">Cancelled</option><option value="11">Location Changed</option><option value="13">Future Delivery</option><option value="14">Mobile Not Answered</option><option value="16">Shipment FWD to OPS</option><option value="17">Wrong Item</option><option value="18">To be Picked Up</option><option value="19">Lost</option><option value="20">Damaged</option><option value="21">Returned to Origin</option><option value="22">Return to Origin</option><option value="23">Return Attempt</option><option value="25">Customer Refused</option><option value="27">Send To CSA</option><option value="28">Received in CSA</option><option value="29">Collected</option><option value="30">Shipper Cancelled</option><option value="31">customer not Available</option><option value="32">Mobile switched off</option><option value="33">Cash not ready</option><option value="35">Shipment Return to Hub</option><option value="38">FWD to CSA</option><option value="39">Received at OPS</option><option value="40">Bad Address</option><option value="42">Schedule for tomorrow</option><option value="43">Shipment on hold</option><option value="44">Out of Service Area</option><option value="45">Out of Country</option><option value="46">Wrong Amount</option><option value="47">Customer did not order</option><option value="48">Wrong Contact Number</option><option value="49">Only Pm Delivery</option><option value="51">Assigned to Courier</option></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-ddlSearchStatus-container"><span class="select2-selection__rendered" id="select2-ddlSearchStatus-container" title="All |">All |</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="txtTrackingNo">Tracking No</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-barcode fa-md fa-fw"></i></span>
                                        <input type="text" class="form-control" placeholder="Tracking No" name="txtTrackingNo" id="txtTrackingNo">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">

                            </div>
                            <div class="col-sm-4">
                                <br>
                                <button id="btnSearch" name="btnSearch" class="btn btn-primary pull-right">
                                    <i class="fa fa-md fa-search"></i> &nbsp;&nbsp;Search&nbsp;&nbsp;
                                </button>
                            </div>
                        </div>
                        <hr>
                      
                     
                        <div class="row ">
                            <div class="col-sm-2 margin-top-10">
                                <div class="radio">
                                    <label>
                                        <input class="radiobox style-0" name="ReceiverType" value="1" type="radio">
                                        <span>Shipper</span>
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input class="radiobox style-0" name="ReceiverType" value="2" checked="checked" type="radio">
                                        <span>Consignee</span>
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input class="radiobox style-0" name="ReceiverType" value="3" type="radio">
                                        <span>Consignee 2</span>
                                    </label>
                                </div>
                            </div>

                            <div class="col-sm-8">
                                <div class="row">
                                    <div class="form-group">
                                        <label>SMS Text</label>
                                        <div class="radio">
                                            <label class="col-md-2">
                                                <input class="radiobox " name="TextType" value="1" checked="checked" type="radio">
                                                <span>Arabic</span>
                                            </label>
                                            <label class="col-md-2">
                                                <input class="radiobox " name="TextType" value="2" type="radio">
                                                <span>English</span>
                                            </label>
                                        </div>
                                        <textarea class="form-control" placeholder="Textarea" id="txtSmsText" rows="3">مندوبنا في الطريق إليكم لإستلام طلبكم للتواصل &lt;DRIVER_MOBILE&gt; </textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <br><br><br>
                                <button type="button" id="btnSendSMS" class="btn btn-success btn-block">
                                    <i class="fa fa-envelope"></i> Send SMS
                                </button>
                            </div>
                        </div>
                    </div>
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