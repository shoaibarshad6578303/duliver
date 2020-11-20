<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>
<div id="wrapper">
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body _buttons">
                    <h1><i class="fa fa-lg fa-fw fa-file-excel-o"></i>&nbsp;<?=$title;?></h1>
                    <div class="clearfix"></div>
                    <hr class="hr-panel-heading" />
                    <div class="row" id="contract_summary">

                    <div class="col-sm-12">
            <div class="">


           <!-- start -->
           <div class="col-sm-12">
            <div class="">
                <!-- <h1><i class="fa fa-lg fa-fw fa-file-excel-o"></i> Place Order By Uploading</h1>
                <hr> -->
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Shipper Code</label> <i class="fa fa-asterisk txt-color-red"></i>
                            <div class="input-group" id="divShipperCode">
                                <span class="input-group-addon"><i class="fa fa-slack fa-md fa-fw"></i></span>
                                <select class="form-control select2-hidden-accessible" id="ddlShipperCode" name="ddlShipperCode" tabindex="-1" aria-hidden="true">
                                </select>
                                <!-- <span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-ddlShipperCode-container"><span class="select2-selection__rendered" id="select2-ddlShipperCode-container"><span class="select2-selection__placeholder">Search a Shipper with name or Code</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 pull-right">
                        <br>
                        <a id="PlaceOrder" href="/shipment/createshipment" class="btn btn-primary pull-right" title="Place New Order">Place Single Order</a>
                    </div>
                </div>
                <div class="row">
                    <div class="container-fluid">
    <button class="btn btn-primary" id="btnImport" onclick="JSBulkPlaceOrder.loadDataTable()" data-toggle="modal" data-target="#PlaceOrderFileModal">
        Import
    </button>
    <a class="btn btn-link  btn-primary" style="cursor: pointer;" href="/Content/file/sample-operation.xlsx" target="_blank" title="Download Sample CSV file.">
        <i class="fa fa-download"></i> Download Sample
    </a>
    <button class="btn btn-danger pull-right " style="display:none;" id="btnTableClear" title="Clear Table">
        Clear
    </button>
    
    <button type="submit" class="btn btn-primary pull-right " style="display:none;" id="btnNewPlaceOrderFile" value="PlaceOrder" formaction="UploadPlaceOrderFile">
        Confirm / PlaceOrders
    </button>
    <hr class="simple">
    <div id="wrapper" class="widget-body ">
        </div>
    </div>

    

<div class="container" style="width:40% ; margin-top:2%">
    <div id="CreateOrderModal" class="modal fade">
        <div class="modal-dialog" style="width:65%">
            <div class="modal-content">
                <div class="modal-header">
                    <a href="#" class="close" data-dismiss="modal" id="btnDismissModal"> ×</a>
                    <h3 id="titleOrder" class="modal-title">Place New Order</h3>
                </div>
                <div class="modal-body">
                    <div class="widget-body no-padding">
                        <div class="row">
                            <form id="wizardPlaceOrder" novalidate="novalidate">
                                <div id="bootstrap-wizard-1" class="col-sm-12">
                                    <div class="form-bootstrapWizard">
                                        <ul class="bootstrapWizard form-wizard" data-enable-click="true">
                                            <li class="active wizardStepwidth disabledTab" data-target="#step1">
                                                <a href="#tab1" data-toggle="tab"> <span class="step">1</span> <span class="title">Sender Information</span> </a>
                                            </li>
                                            <li class="wizardStepwidth disabledTab" data-target="#step2">
                                                <a href="#tab2" data-toggle="tab"> <span class="step">2</span> <span class="title">Recipient Information</span> </a>
                                            </li>
                                            <li class="wizardStepwidth disabledTab" data-target="#step3">
                                                <a href="#tab3" data-toggle="tab"> <span class="step">3</span> <span class="title">Address Information</span> </a>
                                            </li>
                                            <li class="wizardStepwidth disabledTab" data-target="#step4">
                                                <a href="#tab4" data-toggle="tab"> <span class="step">4</span> <span class="title">Save and Finish</span> </a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab1">
                                            <br>
                                            <h3><strong>Step 1 </strong> - Sender Information</h3>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Order Date</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-calendar fa-md fa-fw"></i></span>
                                                            <input class="form-control input-md" disabled="disabled" data-dateformat="mm/dd/yyyy" placeholder="Order Date" type="text" name="finishdate" id="orderdate" tabindex="1">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Way Bill No.</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-slack fa-md fa-fw"></i></span>
                                                            <input class="form-control input-md" placeholder="Way Bill No." type="text" name="Barcode" id="OrderBarcode" tabindex="2">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Sender Name</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-user fa-md fa-fw"></i></span>
                                                            <input class="form-control input-md" placeholder="Sender Name" type="text" name="sname" id="so_name" tabindex="3">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Sender ID</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-slack fa-md fa-fw"></i></span>
                                                            <input class="form-control input-md" placeholder="Sender ID" type="text" name="sid" id="so_id" tabindex="4">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Mobile</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-phone fa-md fa-fw"></i></span>
                                                            <input class="form-control input-md" data-mask="(999) 999-9999" placeholder="Mobile" type="tel" name="phone" id="so_mob1" tabindex="4">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>LandLine</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-phone fa-md fa-fw"></i></span>
                                                            <input class="form-control input-md" data-mask="(999) 999-9999" placeholder="LandLine" type="tel" name="slandline" id="so_landline" tabindex="4">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab2">
                                            <br>
                                            <h3><strong>Step 2 </strong> - Recipient Information</h3>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Recipient Name</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-user fa-md fa-fw"></i></span>
                                                            <input class="form-control input-md" placeholder="Recipient Name" type="text" name="name" id="o_name" tabindex="5">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>COD</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-slack fa-md fa-fw"></i></span>
                                                            <input class="form-control input-md" placeholder="COD" type="text" name="COG" id="o_cog" tabindex="6">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Mobile</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-phone fa-md fa-fw"></i>+971</span>
                                                            <input class="form-control input-md" placeholder="Mobile" type="tel" name="phone" id="o_mob1" tabindex="7">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>LandLine</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-phone fa-md fa-fw"></i></span>
                                                            <input class="form-control input-md" placeholder="LandLine" data-mask="(999) 999-9999" type="tel" name="landline" id="o_landline" tabindex="8">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab3">
                                            <br>
                                            <h3><strong>Step 3 </strong> - Address Information</h3>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <span class="smart-form input-group ">
                                                        <label class="checkbox">
                                                            <input type="checkbox" id="_checkbox" name="copy" tabindex="9">
                                                            <i></i>Use Manual Addressing
                                                        </label>
                                                    </span>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row smart-form">
                                                <section id="country" class="col col-6">
                                                    <div class="form-group">
                                                        <label>
                                                            Select Country
                                                        </label>
                                                        <select id="select_country" class="form-control" style="width:100%"></select>
                                                    </div>
                                                </section>
                                                <section id="city" class="col col-6" style="display:none">
                                                    <div class="form-group">
                                                        <label>
                                                            Select City
                                                        </label>
                                                        <select id="select_city" class="form-control" style="width:100%"></select>
                                                    </div>
                                                </section>
                                            </div>
                                            <div class="row smart-form">
                                                <section id="area" class="col col-6" style="display:none">
                                                    <div class="form-group">
                                                        <label>
                                                            Select Area
                                                        </label>
                                                        <select id="select_area" class="form-control" style="width:100%"></select>
                                                    </div>
                                                </section>
                                                <section id="street" class="col col-6" style="display:none">
                                                    <h8>Street Address</h8>
                                                    <label for="address2" class="input">
                                                        <input id="street_address" type="text" name="address2">
                                                    </label>
                                                </section>
                                            </div>
                                            <section id="full_address" class="col col-6 smart-form" style="display:none">
                                                <h8>Full Address</h8>
                                                <label for="address2" class="input">
                                                    <input id="o_address" type="text" name="address2">
                                                </label>
                                            </section>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Mobile 2 (Optional)</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-phone fa-md fa-fw"></i></span>
                                                            <input class="form-control input-md" placeholder="Mobile 2 (Optional)" data-mask="(999) 999-9999" type="tel" name="phone2" id="o_mob2" tabindex="8">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Remarks (Optional)</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-envelope-o fa-md fa-fw"></i></span>
                                                            <input class="form-control input-md" placeholder="Remarks (Optional)" data-mask="(999) 999-9999" type="text" name="remarks" id="o_remarks" tabindex="8">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row smart-form">
                                                <section class="col col-4">
                                                    <label class="input">
                                                        <h7>No. Of Pieces :</h7>
                                                        <input id="noOfpieces" onkeydown="return false" type="number" min="1" max="5" step="1" value="1" size="5" placeholder="No. Of Pieces">
                                                    </label>
                                                </section>
                                                <section class="col col-8">
                                                    <label class="input">
                                                        <a style="margin-top:18px" id="checkPieces" class="btn btn-primary btn-circle"><i class="glyphicon glyphicon-ok"></i></a>
                                                    </label>
                                                </section>
                                            </div>
                                            <div class="row smart-form">
                                                <section id="_1">
                                                    <label class="textarea">
                                                        <i class="icon-append fa fa-comment"></i>
                                                        <textarea id="o_descp1" rows="5" name="comment" placeholder="Tell us about your order*"></textarea>
                                                    </label>
                                                </section>
                                                <section id="_2" style="display:none">
                                                    <label class="textarea">
                                                        <i class="icon-append fa fa-comment"></i>
                                                        <textarea id="o_descp2" rows="5" name="comment" placeholder="Tell us about your order*"></textarea>
                                                    </label>
                                                </section>
                                                <section id="_3" style="display:none">
                                                    <label class="textarea">
                                                        <i class="icon-append fa fa-comment"></i>
                                                        <textarea id="o_descp3" rows="5" name="comment" placeholder="Tell us about your order*"></textarea>
                                                    </label>
                                                </section>
                                                <section id="_4" style="display:none">
                                                    <label class="textarea">
                                                        <i class="icon-append fa fa-comment"></i>
                                                        <textarea id="o_descp4" rows="5" name="comment" placeholder="Tell us about your order*"></textarea>
                                                    </label>
                                                </section>
                                                <section id="_5" style="display:none">
                                                    <label class="textarea">
                                                        <i class="icon-append fa fa-comment"></i>
                                                        <textarea id="o_descp5" rows="5" name="comment" placeholder="Tell us about your order*"></textarea>
                                                    </label>
                                                </section>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab4">
                                            <br>
                                            <h3><strong>Step 4</strong> - Save and Finish</h3>
                                            <br>
                                            <h1 class="text-center text-success"><strong><i class="fa fa-check fa-lg"></i> Complete</strong></h1>
                                            <h4 class="text-center">Click next to finish</h4>
                                            <br>
                                            <br>
                                        </div>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <ul class="pager wizard no-margin">
                                                        <li class="previous disabled">
                                                            <a href="javascript:void(0);" class="btn btn-lg txt-color-white bg-color-blue WizardButton"> Previous </a>
                                                        </li>
                                                        <li class="next">
                                                            <a href="javascript:void(0);" class="btn btn-lg txt-color-white bg-color-green"> Next </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- end widget content -->
                </div>
                <input type="hidden" id="updatingShipment_ID" value="0">
                <div class="modal-footer">
                    <a class="btn btn-danger" data-dismiss="modal">Cancel</a>
                </div>
            </div>
        </div>
    </div>
</div>


    <!-- Modal -->
<div class="modal fade" id="PlaceOrderFileModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width: 40%;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×
                </button>
                <h4 class="modal-title" id="myModalLabel">Place Order From Excel File</h4>
            </div>
            <div class="modal-body">
                <form id="uploadFileForm">
                    <div class="row">
                        <div class="col-md-6">
                            <div>
                                <input id="file" name="file" type="file" value=""> <br>
                                
                            </div>

                        </div>
                        <div class="col-md-6">
                            <a class="btn btn-primary pull-right" id="btnLoadFile" data-url="/shipment/getairwaybilllabelreportpdfbyshipmentids">
                                load
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
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