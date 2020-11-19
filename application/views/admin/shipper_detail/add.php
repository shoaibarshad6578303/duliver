<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>
<div id="wrapper">
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body _buttons">
                    <a href="<?php echo admin_url('shipper_detail'); ?>" class="pull-right btn btn-info display-block"><?php echo _l('All Shippers'); ?></a>
                    <div class="clearfix"></div>
                    <h3><?php echo _l('Shipper Information'); ?></h3>
                    <hr class="hr-panel-heading" />
                    <div class="row" id="contract_summary">

                       
             <div class="col-sm-12">
            <div class="">
<div class="row">
    <div class="col-sm-12">
        <div class="col-sm-9">
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="txtShipperCode">Shipper Code</label><i class="fa fa-asterisk astcolor"></i>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-slack fa-md fa-fw"></i></span>
                            <input class="form-control input-md" disabled="disabled" type="text" name="txtShipperCode" id="txtShipperCode" placeholder="Shipper Code">
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="txtShipperName">Trade Name</label><i class="fa fa-asterisk astcolor"></i>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa-md fa-fw"></i></span>
                            <input class="form-control input-md" type="text" style="text-transform:capitalize" name="txtShipperName" id="txtShipperName" placeholder="Trade Name">
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="txtCompanyName">Commercial Name</label> <i class="fa fa-asterisk astcolor"></i>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-building fa-md fa-fw"></i></span>
                            <input class="form-control input-md" type="text" name="txtCompanyName" id="txtCompanyName" placeholder="Commercial Name ">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="txtShipperEmail">Shipper Email</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope-o fa-md fa-fw"></i></span>
                            <input class="form-control input-md" type="text" name="txtShipperEmail" id="txtShipperEmail" placeholder="Shipper Email">
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="txtContactOffice1">Contact Office 1</label><i class="fa fa-asterisk astcolor"></i>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-phone fa-md fa-fw"></i></span>
                            <input class="form-control input-md" type="text" name="txtContactOffice1" id="txtContactOffice1" placeholder="Contact Office 1">
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="txtContactOffice2">Contact Office 2</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-phone fa-md fa-fw"></i></span>
                            <input class="form-control input-md" type="text" name="txtContactOffice2" id="txtContactOffice2" placeholder="Contact Office 2">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="txtTradeLicenseNo">Trade License No </label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-slack fa-md fa-fw"></i></span>
                            <input class="form-control input-md" type="text" name="txtTradeLicenseNo" id="txtTradeLicenseNo" placeholder="Trade License No">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 smart-form">
                    <section id="country">
                        <div class="form-group">
                            <label> Country</label> <i class="fa fa-asterisk txt-color-red"></i>
                            <select id="ddlCountry" class="form-control select2-hidden-accessible" style="width:100%" tabindex="-1" aria-hidden="true"><option value="0">Please Select Option</option><option value="1">United Arab Emirates</option><option value="2">Argentina</option><option value="3">Armenia</option><option value="4">Australia</option><option value="5">Austria</option><option value="6">Azerbaijan</option><option value="7">Bahamas</option><option value="8">Bahrain</option><option value="9">Bangladesh</option><option value="10">Belgium</option><option value="11">Brazil</option><option value="12">Brunei</option><option value="13">Bulgaria</option><option value="14">Burkina</option><option value="15">Burundi</option><option value="16">Canada</option><option value="17">Denmark</option><option value="18">Egypt</option><option value="19">Ethiopia</option><option value="20">Fiji</option><option value="21">Finland</option><option value="22">France</option><option value="23">Gambia</option><option value="24">Georgia</option><option value="25">Germany</option><option value="26">Ghana</option><option value="27">Greece</option><option value="28">Guyana</option><option value="29">Haiti</option><option value="30">Hungary</option><option value="31">Iceland</option><option value="32">India</option><option value="33">Indonesia</option><option value="34">Iran</option><option value="35">Iraq</option><option value="36">Ireland {Republic}</option><option value="37">Israel</option><option value="38">Italy</option><option value="39">Ivory Coast</option><option value="40">Jamaica</option><option value="41">Japan</option><option value="42">Jordan</option><option value="43">Kazakhstan</option><option value="44">Kenya</option><option value="45">Kiribati</option><option value="46">Korea North</option><option value="47">Korea South</option><option value="48">Kuwait</option><option value="49">Latvia</option><option value="50">Lebanon</option><option value="51">Lesotho</option><option value="52">Liberia</option><option value="53">Libya</option><option value="54">Liechtenstein</option><option value="55">Lithuania</option><option value="56">Luxembourg</option><option value="57">Macedonia</option><option value="58">Malaysia</option><option value="59">Maldives</option><option value="60">Mauritius</option><option value="61">Mexico</option><option value="62">Micronesia</option><option value="63">Morocco</option><option value="64">Mozambique</option><option value="65">Myanmar</option><option value="66">{Burma}</option><option value="67">Nepal</option><option value="68">Netherlands</option><option value="69">New Zealand</option><option value="70">Nigeria</option><option value="71">Norway</option><option value="72">Oman</option><option value="73">Pakistan</option><option value="74">Paraguay</option><option value="75">Peru</option><option value="76">Philippines</option><option value="77">Poland</option><option value="78">Portugal</option><option value="79">Qatar</option><option value="80">Russian Federation</option><option value="81">Saudi Arabia</option><option value="82">Senegal</option><option value="83">Seychelles</option><option value="84">Singapore</option><option value="85">Slovakia</option><option value="86">South Africa</option><option value="87">Spain</option><option value="88">Sri Lanka</option><option value="89">Sudan</option><option value="90">Sweden</option><option value="91">Switzerland</option><option value="92">Syria</option><option value="93">Taiwan</option><option value="94">Tajikistan</option><option value="95">Tanzania</option><option value="96">Thailand</option><option value="97">Togo</option><option value="98">Tonga</option><option value="99">Trinidad &amp; Tobago</option><option value="100">Tunisia</option><option value="101">Turkey</option><option value="102">Ukraine</option><option value="104">United Kingdom</option><option value="105">United States</option><option value="106">Uzbekistan</option><option value="107">Vatican City</option><option value="108">Venezuela</option></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-ddlCountry-container"><span class="select2-selection__rendered" id="select2-ddlCountry-container" title="Please Select Option">Please Select Option</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                        </div>
                    </section>
                </div>
                <div class="col-sm-6 smart-form">
                    <section id="city" style="display:none">
                        <div class="form-group">
                            <label>  City</label> <i class="fa fa-asterisk txt-color-red"></i>
                            <select id="ddlCity" class="form-control" style="width:100%"></select>
                        </div>
                    </section>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 smart-form">
                    <section id="area" style="display:none">
                        <div class="form-group">
                            <label> Area </label> <i class="fa fa-asterisk txt-color-red"></i>
                            <select id="ddlArea" class="form-control" style="width:100%"></select>
                        </div>
                    </section>
                </div>
                <div class="col-sm-6 smart-form">
                    <section id="street" style="display:none">
                        <h8>Street Address</h8>
                        <label for="address2" class="input">
                            <input id="txtStreetAddress" type="text" name="txtStreetAddress">
                        </label>
                    </section>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="row">
                <div class="col-sm-12 pull-right">
                    <section class="col-sm-12">
                        <div class="form-group mb-lg">
                            <img id="imgProfile" class="img-thumbnail" alt="4.5cm X 3.5cm" src="/Content/img/sample.jpg" data-holder-rendered="true" style="width: 188px; height: 220px; pointer-events: none;">
                        </div>
                    </section>
                </div>
            </div>
            <div id="divUploadedFile" class="row">
                <div class="col-sm-12 pull-right">
                    <form id="FormUpload" enctype="multipart/form-data" method="post">
                        <div class="col-sm-9">
                            <span class="btn btn-block btn-success fileinput-button">
                                <i class="glyphicon glyphicon-plus"></i>
                                <span>Add files...</span>
                                <input type="file" name="UploadedFile" id="UploadedFile">
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<br>
<header>
    <legend><strong>Shipper's Contact Person(s)</strong></legend>
</header>
<div class="row">
    <!-- NEW WIDGET START -->
    <div class="col-sm-12" id="divShipperContact">

        <!-- Widget ID (each widget will need unique ID)-->
        <div class="jarviswidget jarviswidget-color-darken" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-togglebutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
            <header>
                <span class="widget-icon"> <i class="fa fa-graduation-cap"></i> </span>
                <h2>Shipper's Contact Person(s)</h2>
            </header>
            <!-- widget div-->
            <div>
                <!-- widget content -->
                <div class="widget-body no-padding" id="divTableAcademicDetails">
                    <div id="dtContactPersons_wrapper" class="dataTables_wrapper form-inline no-footer"><div class="dt-toolbar"><div class="col-xs-12 col-sm-9"><div id="dtContactPersons_filter" class="dataTables_filter"><label><span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span> <input type="search" class="form-control" placeholder="" aria-controls="dtContactPersons"></label></div></div><div class="col-sm-2"></div><div class="col-sm-1 hidden-xs"><div class="dataTables_length" id="dtContactPersons_length"><label><select name="dtContactPersons_length" aria-controls="dtContactPersons" class="form-control"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></label></div></div></div><table id="dtContactPersons" class="table table-striped table-bordered table-hover dataTable no-footer" width="100%" role="grid" aria-describedby="dtContactPersons_info" style="width: 100%;">
                        <thead>
                            <tr role="row"><th data-hide="phone" class="sorting" tabindex="0" aria-controls="dtContactPersons" rowspan="1" colspan="1" aria-label=" Name: activate to sort column ascending" style="width: 103px;"><i class="fa fa-fw fa-user txt-color-black hidden-md hidden-sm hidden-xs"></i> Name</th><th data-class="expand" class="expand sorting" tabindex="0" aria-controls="dtContactPersons" rowspan="1" colspan="1" aria-label=" Designation: activate to sort column ascending" style="width: 162px;"><i class="fa fa-fw fa-graduation-cap txt-color-black hidden-md hidden-sm hidden-xs"></i> Designation</th><th data-hide="phone" class="sorting" tabindex="0" aria-controls="dtContactPersons" rowspan="1" colspan="1" aria-label=" Email: activate to sort column ascending" style="width: 101px;"><i class="fa fa-fw fa-envelope-o txt-color-black hidden-md hidden-sm hidden-xs"></i> Email</th><th data-hide="phone" class="sorting" tabindex="0" aria-controls="dtContactPersons" rowspan="1" colspan="1" aria-label=" Contact No 1 : activate to sort column ascending" style="width: 170px;"><i class="fa fa-fw fa-phone txt-color-black hidden-md hidden-sm hidden-xs"></i> Contact No 1 </th><th data-hide="phone" class="sorting" tabindex="0" aria-controls="dtContactPersons" rowspan="1" colspan="1" aria-label=" Contact No 2: activate to sort column ascending" style="width: 171px;"><i class="fa fa-fw fa-phone txt-color-black hidden-md hidden-sm hidden-xs"></i> Contact No 2</th><th data-hide="phone" class="sorting" tabindex="0" aria-controls="dtContactPersons" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 106px;"><i class="fa fa-fw fa-pencil txt-color-black hidden-md hidden-sm hidden-xs"></i>Action</th><th data-hide="phone" class="hide_me sorting" tabindex="0" aria-controls="dtContactPersons" rowspan="1" colspan="1" aria-label="ShipperContactPersonID: activate to sort column ascending" style="width: 0px;">ShipperContactPersonID</th></tr>
                        </thead>
                    <tbody><tr class="odd"><td valign="top" colspan="6" class="dataTables_empty">No data available in table</td></tr></tbody></table><div class="dt-toolbar-footer"><div class="col-sm-6 col-xs-12 hidden-xs"><div class="dataTables_info" id="dtContactPersons_info" role="status" aria-live="polite"><span class="text-danger">Showing 0 to 0 of 0 entries</span></div></div><div class="col-sm-6 col-xs-12"><div class="dataTables_paginate paging_simple_numbers" id="dtContactPersons_paginate"><ul class="pagination pagination-sm"><li class="paginate_button previous disabled" aria-controls="dtContactPersons" tabindex="0" id="dtContactPersons_previous"><a href="#">Previous</a></li><li class="paginate_button next disabled" aria-controls="dtContactPersons" tabindex="0" id="dtContactPersons_next"><a href="#">Next</a></li></ul></div></div></div></div>
                </div>
                <!-- end widget content -->

            </div>
            <!-- end widget div -->
            <br>
            <div id="addContactPerson" class="row">
                <h4>Add a New Contact Person</h4>
                <hr>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="txtName" class="control-label">Name<span class="glyphicon glyphicon-asterisk astcolor"></span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa-md fa-fw"></i></span>
                                    <input type="text" placeholder="Name" class="form-control input-md" data-autoclose="true" name="txtName" id="txtName">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="txtDesignation" class="control-label">Designation<span class="glyphicon glyphicon-asterisk astcolor"></span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-md fa-fw">D</i></span>
                                    <input type="text" placeholder="Designation" class="form-control input-md" data-autoclose="true" name="txtDesignation" id="txtDesignation">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="txtEmail" class="control-label">Email<span class="glyphicon glyphicon-asterisk astcolor"></span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope-o fa-md fa-fw"></i></span>
                                    <input type="text" placeholder="Email" class="form-control input-md" data-autoclose="true" name="txtEmail" id="txtEmail">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="txtContact1" class="control-label">Contact No 1 <span class="glyphicon glyphicon-asterisk astcolor"></span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-slack fa-md fa-fw"></i></span>
                                    <input type="text" placeholder="Contact No 1" class="form-control input-md" data-autoclose="true" name="txtContact1" id="txtContact1">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="txtContact2" class="control-label">Contact No 2</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-phone fa-md fa-fw"></i></span>
                                    <input type="text" placeholder="Contact No 2" class="form-control input-md" data-autoclose="true" name="txtContact2" id="txtContact2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <input id="hdnShipperContactPersonID" value="0" type="hidden">
                    <div class="col-sm-12 text-align-right">
                        <div class="form-group" style="margin-top: 6px !important;">
                            <br>
                            <a id="btnAddContactPerson" class="btn bg-color-green txt-color-white btn-sm"> <i class="fa fa-plus"></i> Add Contact Person</a>
                            <a id="btnContactPersonClear" class="btn btn-danger btn-sm"> <i class="fa fa-eraser"></i> Clear</a>&nbsp;&nbsp;
                        </div>
                    </div>
                </div>
                <br>
            </div>
        </div>
        <!-- end widget -->
    </div>
</div>

<br>

<header>
    <legend><strong>Shipper File(s)</strong></legend>
</header>
<div class="row">
    <!-- NEW WIDGET START -->
    <div class="col-sm-12" id="divShipperFiles">

        <!-- Widget ID (each widget will need unique ID)-->
        <div class="jarviswidget jarviswidget-color-darken" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-togglebutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
            <header>
                <span class="widget-icon"> <i class="fa fa-file-text"></i> </span>
                <h2>Shipper File(s)</h2>
            </header>
            <!-- widget div-->
            <div>
                <!-- widget content -->
                <div class="widget-body no-padding" id="divTableShipperFiles">
                    <div class="col-sm-12 text-align-right">
                        <div class="form-group">
                            <br>
                            <a id="btnAddUploadeFile" class="btn bg-color-green txt-color-white btn-sm"> <i class="fa fa-plus"></i> Add File</a>
                        </div>
                    </div>
                    <div id="dtShipperFiles_wrapper" class="dataTables_wrapper form-inline no-footer"><div class="dt-toolbar"><div class="col-xs-12 col-sm-9"><div id="dtShipperFiles_filter" class="dataTables_filter"><label><span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span> <input type="search" class="form-control" placeholder="" aria-controls="dtShipperFiles"></label></div></div><div class="col-sm-2"></div><div class="col-sm-1 hidden-xs"><div class="dataTables_length" id="dtShipperFiles_length"><label><select name="dtShipperFiles_length" aria-controls="dtShipperFiles" class="form-control"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></label></div></div></div><table id="dtShipperFiles" class="table table-striped table-bordered table-hover dataTable no-footer" width="100%" role="grid" aria-describedby="dtShipperFiles_info" style="width: 100%;">
                        <thead>
                            <tr role="row"><th data-hide="phone" class="sorting" tabindex="0" aria-controls="dtShipperFiles" rowspan="1" colspan="1" aria-label=" File Name: activate to sort column ascending" style="width: 523px;"><i class="fa fa-fw fa-file-text txt-color-black hidden-md hidden-sm hidden-xs"></i> File Name</th><th data-hide="phone" class="sorting" tabindex="0" aria-controls="dtShipperFiles" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 402px;"><i class="fa fa-fw fa-pencil txt-color-black hidden-md hidden-sm hidden-xs"></i>Action</th><th data-hide="phone" class="hide_me sorting" tabindex="0" aria-controls="dtShipperFiles" rowspan="1" colspan="1" aria-label="ShipperFilesId: activate to sort column ascending" style="width: 0px;">ShipperFilesId</th><th data-hide="phone" class="hide_me sorting" tabindex="0" aria-controls="dtShipperFiles" rowspan="1" colspan="1" aria-label="ShipperFilePath: activate to sort column ascending" style="width: 0px;">ShipperFilePath</th></tr>
                        </thead>
                    <tbody><tr class="odd"><td valign="top" colspan="2" class="dataTables_empty">No data available in table</td></tr></tbody></table><div class="dt-toolbar-footer"><div class="col-sm-6 col-xs-12 hidden-xs"><div class="dataTables_info" id="dtShipperFiles_info" role="status" aria-live="polite"><span class="text-danger">Showing 0 to 0 of 0 entries</span></div></div><div class="col-sm-6 col-xs-12"><div class="dataTables_paginate paging_simple_numbers" id="dtShipperFiles_paginate"><ul class="pagination pagination-sm"><li class="paginate_button previous disabled" aria-controls="dtShipperFiles" tabindex="0" id="dtShipperFiles_previous"><a href="#">Previous</a></li><li class="paginate_button next disabled" aria-controls="dtShipperFiles" tabindex="0" id="dtShipperFiles_next"><a href="#">Next</a></li></ul></div></div></div></div>
                </div>
                <!-- end widget content -->

            </div>
            <!-- end widget div -->
        </div>
        <!-- end widget -->
    </div>
</div>

<header>
    <legend><strong>Shipper's Sales Person</strong></legend>
</header>

<div class="row">
    <div class="col-sm-6 smart-form">
        <section id="ddlEmployeeList">
            <div class="form-group">
                <label>Employee</label> 
                <select id="ddlEmployee" class="form-control select2 select2-hidden-accessible" style="width:100%" tabindex="-1" aria-hidden="true"><option value="0">Please select employee</option><option value="3">Emp00003 | Zahra  Tariq</option><option value="6">Emp00006 | Naved  Khan</option><option value="7">Emp00007 | Shibindas  Thalappally</option><option value="19">EMP00009 | ops  Driver1</option><option value="20">EMP00020 | Sajid  Saeed</option><option value="22">EMP00022 | imtiaz  Khan</option><option value="23">EMP00023 | Sadia  Abid</option><option value="24">EMP00024 | Jaber  Mohammed</option><option value="25">EMP00025 | Muhammad  Ishfaq</option><option value="26">EMP00026 | Emmanuel  Umah</option><option value="28">EMP00028 | Bikash  Budhathoki</option><option value="29">EMP00029 | Goutham Gopinath Menon</option><option value="30">EMP00030 | Waseem  Alain</option><option value="31">EMP00031 | Taj   AUH</option><option value="32">EMP00032 | TDS  TDS</option><option value="33">EMP00033 | Test duliver test</option><option value="34">EMP00034 | test Test Test</option></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-ddlEmployee-container"><span class="select2-selection__rendered" id="select2-ddlEmployee-container" title="Please select employee">Please select employee</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
            </div>
        </section>
    </div>
</div>

<header>
    <legend><strong>Shipper's Driver</strong></legend>
</header>
<div class="row">
    <div class="col-sm-6 smart-form">
        <section id="country">
            <div class="form-group">
                <label>Driver</label> <i class="fa fa-asterisk txt-color-red"></i>
                <select id="ddlDriver" class="form-control select2-hidden-accessible" style="width:100%" tabindex="-1" aria-hidden="true"><option value="0">Please Select Option</option><option value="3">DR0003 | ops  Driver1</option><option value="5">DR0004 | Sajid  Saeed</option><option value="6">DR0006 | imtiaz  Khan</option><option value="7">DR0007 | Jaber  Mohammed</option><option value="8">DR0008 | Muhammad  Ishfaq</option><option value="12">DR0012 | Bikash  Budhathoki</option><option value="13">DR0013 | Waseem  Alain</option><option value="14">DR0014 | Taj   AUH</option><option value="15">DR0015 | TDS  TDS</option><option value="19">DR0019 | Goutham Gopinath Menon</option><option value="21">DR0021 | Test duliver test</option><option value="22">DR0022 | Sadia  Abid</option></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-ddlDriver-container"><span class="select2-selection__rendered" id="select2-ddlDriver-container" title="Please Select Option">Please Select Option</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
            </div>
        </section>
    </div>
</div>

<header>
    <legend><strong>System Authentication</strong></legend>
</header>
<div class="row">
    <div class="col-sm-10">
        <div class="col-sm-4">
            <div class="form-group">
                <label for="txtUsername">Username</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user fa-md fa-fw"></i></span>
                    <input type="password" style="display:none;">
                    <input type="text" class="form-control" placeholder="Username" name="txtUsername" id="txtUsername">
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="txtPassword">Password</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock fa-md fa-fw"></i></span>
                    <input type="password" style="display:none;">
                    <input class="form-control" placeholder="Password" name="txtPassword" id="txtPassword" type="password">
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="txtConfirmPassword">Confirm Password</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock fa-md fa-fw"></i></span>
                    <input type="password" class="form-control" placeholder="Confirm Password" name="txtConfirmPassword" id="txtConfirmPassword">
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-2">
        <div class="">
            <label for="ddlUserStatus">User Status</label><i class="fa fa-asterisk astcolor"></i>
            <br>
            <div class="onoffswitch">
                <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="onoff-Active">
                <label class="onoffswitch-label" for="onoff-Active">
                    <span class="onoffswitch-inner" data-swchon-text="Enable" data-swchoff-text="Disable"></span>
                    <span class="onoffswitch-switch"></span>
                </label>
            </div>
        </div>
    </div>
</div>



                <br>
                <div class="row">
                    <div class="col-sm-12">
                        <button id="btnAddShipper" name="btnAddShipper" type="submit" tabindex="" class="btn btn-primary pull-right" style="margin-left:5px;">
                            <i class="fa fa-md fa-save"></i> Save Shipper
                        </button>
                        <button id="btnClearAll" name="btnClearAll" type="submit" class="btn btn-danger pull-right">
                            <i class="fa fa-md fa-eraser "></i> Clear
                        </button>
                    </div>
                </div>
                <br>
                <div class="modal fade" id="ShipperFileUploadModal" data-url="" tabindex="-1" role="dialog" aria-labelledby="Generate" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="ModalLabel">
                    Upload Shipper File's
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </h3>
                <span id="ModalTitle_Error" style="font-size: 16px;color: red;"></span>
            </div>
            <div class="modal-body">
                <input type="hidden" id="hdnShipperFilesId" value="">

                <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label for="txtFileName">File Name </label><i class="fa fa-asterisk astcolor"></i>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-slack fa-md fa-fw"></i></span>
                                <input class="form-control input-md" type="text" name="txtFileName" id="txtFileName" placeholder="File Name...">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group mb-lg">
                            <label for="txtFilepath">Select File </label><i class="fa fa-asterisk astcolor"></i>
                            <input class="form-control input-md" type="text" name="txtFilepath" id="txtFilepath" disabled="">
                            <input hidden="" id="hdntxtFilepath" value="">
                        </div>
                    </div>
                    <div id="divUploadedShipperFile">
                        <div class="col-sm-3">
                            <form id="FormShipperFileUpload" enctype="multipart/form-data" method="post">
                                <div>
                                    <span id="SubmitUpload" class="btn btn-block btn-success fileinput-button" style="margin-top: 27px;">
                                        <i class="fa fa-fw fa-folder-open-o"></i>
                                        Browse
                                        <input type="file" accept="image/*, .csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel, .pdf, .doc, .docx" name="UploadedShipperFile" id="UploadedShipperFile">
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnCancel" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" id="btnAddShipperFile" class="btn btn-primary">Confirm</button>
            </div>
        </div>
    </div>
</div>

            </div>
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
