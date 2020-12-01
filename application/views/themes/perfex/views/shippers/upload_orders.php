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
                   
                <!-- upload orders -->
                <div id="content" class="container-fluid" style="margin: 10px;">

<div class="row" id="linkToDownloadAirwaybills" data-url="/shipment/GetAirwayBillLabelReportPDFByShipmentIds">
    <div class="col-sm-12">
        <button class="btn btn-primary" id="btnImport" onclick="JSBulkPlaceOrder.loadDataTable()" data-toggle="modal" data-target="#PlaceOrderFileModal">
            <i class="fa fa-file"></i> Import
        </button>
        <a class="btn btn-success" style="cursor: pointer;" href="/Content/file/sample-shipper.xlsx" target="_blank" title="Template Download">
            <i class="fa fa-file-excel-o"></i> Download Template
        </a>
        <a class="btn btn-danger" style="cursor: pointer;" href="/Content/file/CountryCodes.xlsx" target="_blank" title="Download Sample File">
            <i class="fa fa-flag"></i> Country ISO Codes
        </a>
        <a class="btn  btn-info" style="cursor: pointer;" href="/Content/file/CityCodes.xlsx" target="_blank" title="Download Sample File">
            <i class="fa fa-flag"></i> City Codes
        </a>
        <button class="btn btn-danger pull-right " style="display:none;" id="btnTableClear" title="Clear Table">
            Clear
        </button>
        <button type="submit" class="btn btn-primary pull-right" style="display:none; margin-right:5px" id="btnNewPlaceOrderFile" value="PlaceOrder" formaction="UploadPlaceOrderFile">
            Confirm / PlaceOrders
        </button>
    </div>
</div>
<hr class="simple">
<div class="row">
    <div class="col-sm-12">
        <div id="wrapper" class="widget-body " style="margin: auto -10px;">
            <table id="dtAllBulkPlaceOrders" class="table table-striped table-bordered table-hover" width="100%"></table>

        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="AddPlaceOrderModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog" style="width: 65%;">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                <span class="text-danger">X</span>
            </button>
            <h4 class="modal-title" id="lblPlaceOrderModal"></h4>
        </div>
        <div class="modal-body">
            <div class="widget-body no-padding">
                <div class="row">
                    <div id="wizardPlaceOrder" novalidate="novalidate">
                        <div id="bootstrap-wizard-1" class="col-sm-12">
                            <div class="form-bootstrapWizard">
                                <ul class="bootstrapWizard form-wizard" data-enable-click="true">
                                    <li class=" wizardStepwidth " data-target="#step1">
                                        <a href="#tab1" data-toggle="tab"> <span class="step">1</span> <span class="title">Sender Information</span> </a>
                                    </li>
                                    <li class=" wizardStepwidth " data-target="#step2">
                                        <a href="#tab2" id="WtabRecipientInformation" data-toggle="tab"> <span class="step">2</span> <span class="title">Receiver Information</span> </a>
                                    </li>
                                    
                                    <li class="wizardStepwidth " data-target="#step3">
                                        <a href="#tab3" data-toggle="tab" style="pointer-events:none;"> <span class="step">3</span> <span class="title">Package Information</span> </a>
                                    </li>

                                    <li class="wizardStepwidth " data-target="#step5">
                                        <a href="#tab4" data-toggle="tab" style="pointer-events:none;"> <span class="step">4</span> <span class="title">Address / Shipment Information</span> </a>
                                    </li>
                                    <li class="wizardStepwidth " data-target="#step5">
                                        <a href="#tab5" data-toggle="tab" style="pointer-events:none;"> <span class="step">5</span> <span class="title">Save and Finish</span> </a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab1">
                                    <input type="hidden" id="hdnShipmentID" value="0">
                                    <br>
                                    <h3><strong>Step 1 </strong> - Sender Information</h3>
                                    <form id="formSenderInformation">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Order Date</label> <i class="fa fa-asterisk txt-color-red"></i>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-calendar fa-md fa-fw"></i></span>
                                                        <input class="form-control input-md" disabled="disabled" data-dateformat="dd/mm/yy" placeholder="Order Date" type="text" name="txtOrderDate" id="txtOrderDate">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Reference Number (Optional)</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-slack fa-md fa-fw"></i></span>
                                                        <input class="form-control input-md" placeholder="(Optional)" type="text" name="txtShipperReferenceNumber" id="txtShipperReferenceNumber">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Shipper Code</label> <i class="fa fa-asterisk txt-color-red"></i>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-slack fa-md fa-fw"></i></span>
                                                        <input class="form-control input-md" disabled="" placeholder="Shipper Code" type="text" name="txtSenderCode" id="txtSenderCode">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Shipper Name</label> <i class="fa fa-asterisk txt-color-red"></i>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-user fa-md fa-fw"></i></span>
                                                        <input class="form-control input-md" disabled="" placeholder="Shipper Name" type="text" name="txtSenderName" id="txtSenderName">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Mobile</label> <i class="fa fa-asterisk txt-color-red"></i>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-phone fa-md fa-fw"></i></span>
                                                        <input class="form-control input-md" disabled="" placeholder="Mobile" type="tel" name="txtContactNo_Office1" id="txtContactNo_Office1">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>LandLine</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-phone fa-md fa-fw"></i></span>
                                                        <input class="form-control input-md" disabled="" placeholder="LandLine" type="tel" name="txtContactNo_Office2" id="txtContactNo_Office2" tabindex="4">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane" id="tab2">
                                    <br>
                                    <h3><strong>Step 2 </strong> - Receiver Information</h3>
                                    <form id="formRecipientInformation">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Name</label> <i class="fa fa-asterisk txt-color-red"></i>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-user fa-md fa-fw"></i></span>
                                                        <input class="form-control input-md" placeholder="Recipient Name" type="text" tabindex="1" name="txtRecipientName" id="txtRecipientName">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Cash on Delivery</label> <i class="fa fa-asterisk txt-color-red"></i>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-slack fa-md fa-fw"></i></span>
                                                        <input class="form-control input-md" placeholder="COD" type="text" tabindex="2" name="txtCostOfGoods" id="txtCostOfGoods">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Mobile</label> <i class="fa fa-asterisk txt-color-red"></i>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-phone fa-md fa-fw"></i>+971</span>
                                                        <input class="form-control input-md" placeholder="Mobile" type="tel" tabindex="3" name="txtRecipientMobile" id="txtRecipientMobile">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Mobile 2</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-phone fa-md fa-fw"></i></span>
                                                        <input class="form-control input-md" placeholder="Mobile 2" type="tel" tabindex="4" name="txtRecipientMobile2" id="txtRecipientMobile2">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Instructions</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-quote-left  fa-md fa-fw"></i></span>
                                                        <input class="form-control input-md" placeholder="Remarks (Optional)" type="tel" tabindex="5" name="txtRecipientRemarks" id="txtRecipientRemarks">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Description</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-quote-left fa-md fa-fw"></i></span>
                                                        <input class="form-control input-md" placeholder="Description (Optional)" type="tel" tabindex="6" name="txtDescription" id="txtDescription">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane" id="tab3">
                                    <br>
                                    <h3><strong>Step 3 </strong> - Package Information</h3>
                                    <form id="formPackageInformation">
                                        <div class="row">
                                            <div id="ServiceType" class="col-sm-6">
                                                <div class="form-group">
                                                    <label> Service Type</label> <i class="fa fa-asterisk txt-color-red"></i>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-gears fa-md fa-fw"></i></span>
                                                        <select id="ddlServiceType" name="ddlServiceType" class="form-control select2 select2-hidden-accessible" style="width:100%" tabindex="-1" aria-hidden="true"></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="1" aria-labelledby="select2-ddlServiceType-container"><span class="select2-selection__rendered" id="select2-ddlServiceType-container"></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label> Package Type</label> <i class="fa fa-asterisk txt-color-red"></i>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-expand fa-md fa-fw"></i></span>
                                                        <select id="ddlPackageType" name="ddlPackageType" class="form-control select2 select2-hidden-accessible" style="width:100%" tabindex="-1" aria-hidden="true"></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="2" aria-labelledby="select2-ddlPackageType-container"><span class="select2-selection__rendered" id="select2-ddlPackageType-container"></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Length <sup>cm</sup></label> 
                                                    <input class="form-control input-md" placeholder="Length" type="number" tabindex="3" name="txtLength" id="txtLength">
                                                </div>
                                            </div>
                                            
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Width <sup>cm</sup></label>
                                                    <input class="form-control input-md" placeholder="Width" type="number" tabindex="4" name="txtWidth" id="txtWidth">
                                                </div>
                                            </div>
                                            
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Height <sup>cm</sup></label>
                                                    <input class="form-control input-md" placeholder="Height" type="number" tabindex="5" name="txtHeight" id="txtHeight">
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Actual Weight <sup>kg</sup></label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-quote-left  fa-md fa-fw"></i></span>
                                                        <input class="form-control input-md select2" placeholder="Actual Weight" type="number" tabindex="6" name="txtActualWeight" id="txtActualWeight">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Chargeable Weight <sup>kg</sup></label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-quote-left fa-md fa-fw"></i></span>
                                                        <input class="form-control input-md select2" placeholder="Chargeable Weight" type="number" tabindex="7" name="txtChargeable" id="txtChargeable">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane" id="tab4">
                                    <br>
                                    <h3><strong>Step 4 </strong> - Address / Shipment Information</h3>
                                    <form id="formAddressInformation">
                                        
                                        <div class="row smart-form">
                                            
                                            <section id="country" class="col col-4">
                                                <div class="form-group">
                                                    <label> Country</label> <i class="fa fa-asterisk txt-color-red"></i>
                                                    <select id="ddlCountry" class="form-control" style="width:100%" tabindex="8"></select>
                                                </div>
                                            </section>
                                            <section id="city" class="col col-4" style="display:none">
                                                <div class="form-group">
                                                    <label>  City</label> <i class="fa fa-asterisk txt-color-red"></i>
                                                    <select id="ddlCity" class="form-control" style="width:100%" tabindex="9"></select>
                                                </div>
                                            </section>
                                        </div>
                                        <div class="row smart-form">
                                            <section id="area" class="col col-6" style="display:none">
                                                <div class="form-group">
                                                    <label> Area </label> <i class="fa fa-asterisk txt-color-red"></i>
                                                    <select id="ddlArea" class="form-control" style="width:100%" tabindex="10"></select>
                                                </div>
                                            </section>
                                            <section id="street" class="col col-6" style="display:none">
                                                <h8>Street Address</h8>
                                                <label for="address2" class="input">
                                                    <input id="txtStreetAddress" type="text" name="txtStreetAddress" tabindex="11">
                                                </label>
                                            </section>
                                        </div>
                                        <section id="full_address" class="col col-6 smart-form" style="display:none">
                                            <h8>Full Address</h8> <i class="fa fa-asterisk txt-color-red"></i>
                                            <label for="address2" class="input">
                                                <input id="txtFullAddress" type="text" name="txtFullAddress" tabindex="8">
                                            </label>
                                        </section>
                                        <hr>
                                        <h7>No. Of Pieces </h7>
                                        <div class="row smart-form">
                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="input">
                                                        <input id="txtNoOfPieces" value="1" type="text" placeholder="No. Of Pieces" title="Enter number between 1 - 5" tabindex="15">
                                                    </label>
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
                                                
                                            </div>
                                            <div id="_2" class="row" style="display:none">
                                                <input type="hidden" id="hdnPieceID_2" value="0">
                                                <section class="col col-6">
                                                    <label class="textarea">
                                                        <i class="icon-append fa fa-comment"></i>
                                                        <textarea id="txtPieceDesc_2" rows="1" name="comment" placeholder="Tell us about 2nd Piece.." tabindex="19"></textarea>
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
                                                
                                            </div>
                                            <div id="_4" class="row" style="display:none">
                                                <input type="hidden" id="hdnPieceID_4" value="0">
                                                <section class="col col-6">
                                                    <label class="textarea">
                                                        
                                                        <textarea id="txtPieceDesc_4" rows="1" name="comment" placeholder="Tell us about 4th Piece.." tabindex="23"></textarea>
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
                                                
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane" id="tab5">
                                    <br>
                                    <h3><strong>Step 5</strong> - Save and Finish</h3>
                                    <div id="divSaveSuccessfully">
                                        <div class="row">
                                            <div class="col col-sm-4">

                                            </div>
                                            <div class="col col-sm-4">
                                                <br>
                                                <div lass="text-center">
                                                    <h1 class="text-center text-success">
                                                        <strong>
                                                            <span id="lblFinishMessageTitle"></span>
                                                        </strong>
                                                    </h1>
                                                    <h4 class="text-center">
                                                        <span id="lblFinishMessageDetails"></span>
                                                    </h4>
                                                </div>
                                                <br>
                                                <button class="btn btn-primary pull-right" id="btnPrintAirWayBillOnCompleteOrder">Print AirWay Bill</button>
                                                <button class="btn btn-primary pull-left" id="btnNewPlaceOrderOnCompleteOrder">New Place Order</button>
                                                <br>
                                                <br>
                                            </div>
                                            <div class="col col-sm-4">

                                            </div>
                                        </div>

                                    </div>
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
                    </div>
                </div>
            </div>
            <!-- end widget content -->
        </div>
        
    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
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

            <div class="row">
                <div class="col-md-6">
                    <div>
                        <input id="file" name="file" type="file" value=""> <br>
                        
                    </div>

                </div>
                <div class="col-md-6">
                    <a class="btn btn-primary pull-right" id="btnLoadFile">
                        load
                    </a>
                </div>
            </div>
        </div>
    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- Modal -->
<div class="modal fade" id="ProgressBarModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-body">
            <div class="widget-body ">
                <div class="row">
                    <div>
                        <span class="txt-color-blueDark " id="progressBarMessage"> </span>
                        <span class="txt-color-blueDark pull-right">
                            <i class="fa fa-warning"></i>
                            <span id="progressBarPercentage"></span> Complete
                        </span>
                    </div>
                    <div class="progress progress-sm progress-striped active" style="height: 23px !important;">
                        <div id="progressBar" class="progress-bar txt-color-blue" role="progressbar"></div>
                    </div>
                </div>
            </div>
            <!-- end widget content -->
        </div>
    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>
                <!-- end upload orders -->
                    
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