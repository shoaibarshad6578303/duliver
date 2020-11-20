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
                    <?php if(isset($id)) {?>

                    <?php echo form_open_multipart('admin/shipper_detail/update_shipper', array('id'=>'drivers-form','class'=>'drivers-form')); ?>
                    <?php } else {?>
                    <?php echo form_open_multipart('admin/shipper_detail/save_shipper', array('id'=>'drivers-form','class'=>'drivers-form')); ?>
                    <?php } ?>

                    <?php if(isset($id)) {?>
                        <input type="hidden" value="<?php echo $id; ?>" name="id">
                        <?php } ?> 

             <div class="col-sm-12">
    <div class="">
<div class="row">
    <div class="col-sm-12">
        <div class="col-sm-9">
            <div class="row">
                <div class="col-sm-4">
                <?php if(isset($id)) {?>
                    <div class="form-group">
                        <label for="txtShipperCode">Shipper Code</label><i class="fa fa-asterisk astcolor"></i>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-slack fa-md fa-fw"></i></span>
                            <input class="form-control input-md" disabled="disabled" type="text" name="txtShipperCode" id="txtShipperCode" placeholder="Shipper Code" value="<?=$shipper_code;?>">     
                        <input type="hidden" name="shipper_code" id="shipper_code" value="<?=isset($client) ? $client['shipper_code'] : ''  ?>" class="form-control">

                        </div>
                    </div>
                    <?php } else {?>
                    <div class="form-group">
                        <label for="txtShipperCode">Shipper Code</label><i class="fa fa-asterisk astcolor"></i>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-slack fa-md fa-fw"></i></span>
                            <input class="form-control input-md" disabled="disabled" type="text" name="txtShipperCode" id="txtShipperCode" placeholder="Shipper Code" value="<?=$shipper_code;?>">     
                        <input type="hidden" name="shipper_code" id="shipper_code" value="<?=$shipper_code;?>" class="form-control">

                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="trade_name">Trade Name</label><i class="fa fa-asterisk astcolor"></i>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa-md fa-fw"></i></span>
                            <input class="form-control input-md" type="text" style="text-transform:capitalize" name="trade_name" id="trade_name" placeholder="Trade Name" value="<?=isset($client) ? $client['trade_name'] : ''  ?>" required>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="txtCompanyName">Commercial Name</label> <i class="fa fa-asterisk astcolor"></i>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-building fa-md fa-fw"></i></span>
                            <input class="form-control input-md" type="text" name="commercial_name" id="commercial_name" placeholder="Commercial Name " value="<?=isset($client) ? $client['commercial_name'] : ''  ?>" required>
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
                            <input class="form-control input-md" type="text" name="email" id="email" placeholder="Shipper Email" value="<?=isset($client) ? $client['email'] : ''  ?>">
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="txtContactOffice1">Contact Office 1</label><i class="fa fa-asterisk astcolor"></i>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-phone fa-md fa-fw"></i></span>
                            <input class="form-control input-md" type="text" name="contact_1" id="contact_1" placeholder="Contact Office 1" value="<?=isset($client) ? $client['contact_1'] : ''  ?>">
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="txtContactOffice2">Contact Office 2</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-phone fa-md fa-fw"></i></span>
                            <input class="form-control input-md" type="text" name="contact_2" id="contact_2" placeholder="Contact Office 2" value="<?=isset($client) ? $client['contact_2'] : ''  ?>">
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
                            <input class="form-control input-md" type="text" name="trade_licence_no" id="trade_licence_no" placeholder="Trade License No" value="<?=isset($client) ? $client['trade_licence_no'] : ''  ?>">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 smart-form">
                    <section id="country">
                        <div class="form-group">
                            <label> Country</label> <i class="fa fa-asterisk txt-color-red"></i>
                            <select id="country_id"  name="country_id" class="form-control select2-hidden-accessible" style="width:100%" tabindex="-1" aria-hidden="true">
                                
                            <option <?=(!isset($client))?'selected':''?> disabled>Please, select country</option>
                           <?php
                              foreach($countries as $country)
                           {
                              ?>
                              <option value="<?=$country['country_id']?>" <?=(isset($client) && $client['country_id'] == "1")?'selected':''?>><?=$country['short_name']?></option>
                              <?php

                           }

                           ?>
                            </select>
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
            <div id="divUploadedFile" class="row">
                <div class="col-sm-12 pull-right">
                                <input type="file" name="image" id="UploadedFile">
                      
                </div>
            </div>
        </div>
    </div>
</div>

<br>
<div class="row">
    <!-- NEW WIDGET START -->
    <div class="col-sm-12" id="divShipperContact">

        <!-- Widget ID (each widget will need unique ID)-->
        <div class="jarviswidget jarviswidget-color-darken" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-togglebutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
            <header>
                <h2>Shipper's Contact Person(s)</h2>
            </header>
            <!-- widget div-->
            <div>
                <!-- widget content -->
                <div class="widget-body no-padding" id="divTableAcademicDetails">
                    <div id="dtContactPersons_wrapper" class="dataTables_wrapper form-inline no-footer">
                        <table id="dtContactPersons" class="table table-striped table-bordered table-hover dataTable no-footer" width="100%" role="grid" aria-describedby="dtContactPersons_info" style="width: 100%;">
                        <thead>
                            <tr role="row">
                                <th><i class="fa fa-fw fa-user txt-color-black hidden-md hidden-sm hidden-xs"></i> Name</th></tr>
                        </thead>
                    <tbody>
                        <tr class="odd">
                        </tr>
                    </tbody>
                </table>
            </div>
                </div>
                <!-- end widget content -->

            </div>
            <!-- end widget div -->
            <br>
            <!-- <div id="addContactPerson" class="row">
                <h4>Add a New Contact Person</h4>
                <hr>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="txtName" class="control-label">Name<span class="glyphicon glyphicon-asterisk astcolor"></span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa-md fa-fw"></i></span>
                                    <input type="text" placeholder="Name" class="form-control input-md" data-autoclose="true" name="cpName"  value="" id="txtName">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="txtDesignation" class="control-label">Designation<span class="glyphicon glyphicon-asterisk astcolor"></span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-md fa-fw">D</i></span>
                                    <input type="text" placeholder="Designation" class="form-control input-md" data-autoclose="true" name="cpDesignation" id="txtDesignation" value="">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="txtEmail" class="control-label">Email<span class="glyphicon glyphicon-asterisk astcolor"></span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope-o fa-md fa-fw"></i></span>
                                    <input type="text" placeholder="Email" class="form-control input-md" data-autoclose="true" name="cpEmail" id="txtEmail" value="">
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
                                    <input type="text" placeholder="Contact No 1" class="form-control input-md" data-autoclose="true" name="cpContact1" id="txtContact1" value="">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="txtContact2" class="control-label">Contact No 2</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-phone fa-md fa-fw"></i></span>
                                    <input type="text" placeholder="Contact No 2" class="form-control input-md" data-autoclose="true" name="cpContact2" id="txtContact2" value="">
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
            </div> -->
        </div>
        <!-- end widget -->
    </div>
</div>

<br>

<!-- <div class="row">
    <-- NEW WIDGET START --
    <div class="col-sm-12" id="divShipperFiles">

        <-- Widget ID (each widget will need unique ID)-
        <div class="jarviswidget jarviswidget-color-darken" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-togglebutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
            <header>
                <h2>Shipper File(s)</h2>
            </header>
            -- widget div-
            <div>
                -- widget content -
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
                -- end widget content -

            </div>
            -- end widget div -
        </div>
        -- end widget 
    </div>
</div>
 -->
<header>
    <legend><strong>Shipper's Sales Person</strong></legend>
</header>

<div class="row">
    <div class="col-sm-6 smart-form">
        <section id="ddlEmployeeList">
            <div class="form-group">
                <label>Employee</label> <i class="fa fa-asterisk txt-color-red"></i>
                <select id="employee" name="employee" class="form-control select2 select2-hidden-accessible" style="width:100%" tabindex="-1" aria-hidden="true">
                <option value="0">Please select employee</option>
                <?php foreach($employees  as $item) { ?>
                    <?php if(isset($client) && $client['employee'] == $item->id) {?>
                        <option selected value="<?php echo $item->id ?>"><?php echo $item->employee_code ?> | <?php echo $item->first_name ?> <?php echo $item->middle_name ?> <?php echo $item->last_name ?></option>
                    <?php } else { ?>
                           <option value="<?php echo $item->id ?>"><?php echo $item->employee_code ?> | <?php echo $item->first_name ?> <?php echo $item->middle_name ?> <?php echo $item->last_name ?></option>
                           <?php } } ?>
              
            </select>
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
                <select id="driver" name="driver" class="form-control select2-hidden-accessible" style="width:100%" tabindex="-1" aria-hidden="true">
                <option value="0">Please Select Option</option>
                <?php foreach($drivers  as $item) { ?>
                    <?php  if(isset($client) && $item->id == $client['driver']) { ?>
                <option selected value="<?php echo $item->id ?>"> <?php echo $item->driver_code; ?> | <?php echo $item->name ?> </option>
                    <?php } else { ?>
                <option value="<?php echo $item->id ?>"> <?php echo $item->driver_code; ?> | <?php echo $item->name ?> </option>
                <?php } } ?>
            </select>
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
                    <!-- <input type="password" style="display:none;"> -->
                    <input type="email" class="form-control" placeholder="Username" name="user_name" id="user_name"  value="<?=isset($client) ? $client['user_name'] : ''  ?>">
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="txtPassword">Password</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock fa-md fa-fw"></i></span>
                    <!-- <input type="password" style="display:none;"> -->
                    <!-- <input type="password" class="form-control" placeholder="Confirm Password" name="txtConfirmPassword" id="txtConfirmPassword"  value="<?=isset($client) ? $client['password'] : ''  ?>"> -->
                    <input class="form-control" placeholder="Password" name="txtPassword" id="txtPassword" type="password"  value="<?=isset($client) ? $client['password']: ''  ?>">
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="txtConfirmPassword">Confirm Password</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock fa-md fa-fw"></i></span>
                    <input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password" id="confirm_password"  value="<?=isset($client) ? $client['password'] : ''  ?>">
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-2">
               <label for="marital_status">User status </label>
               <div class="form-check">
             
                <input  class="form-check-input" type="radio" name="user_status" id="exampleRadios1" value="1" <?=(isset($client) && $client['user_status'] == "1")?'checked':''?> required>
                  <label class="form-check-label" for="Male" >
                 Enable
                   </label>

                   <input class="form-check-input" type="radio" name="user_status" id="exampleRadios2" value="0" <?=(isset($client) && $client['user_status'] == "0")?'checked':''?> required>
               <label class="form-check-label" for="exampleRadios2">
                Disable
              </label>
              </div>
               </div>


    <!-- <div class="col-sm-2">
        <div class="">
            <label for="ddlUserStatus">User Status</label><i class="fa fa-asterisk astcolor"></i>
            <br>
              

            <div class="onoffswitch">
               
                <label class="onoffswitch-label" for="onoff-Active">
                    <span class="onoffswitch-inner" data-swchon-text="Enable" data-swchoff-text="Disable"></span>
                    <span class="onoffswitch-switch"></span>
                </label>
            </div>
        </div>
    </div> -->
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
                <?php echo form_close(); ?>

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
                            <label for="txtFilepath">Select Image </label><i class="fa fa-asterisk astcolor"></i>
                            <input class="form-control input-md" type="file" name="image" id="txtFilepath" disabled="">
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
