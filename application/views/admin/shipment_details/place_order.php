<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<script>
<?php 

   
   $e_data = array();
   $place_order_data = array();

   foreach($shippers as $key => $shipper):
      $e_data[$shipper->shipper_code] = $shipper;
   endforeach; 

//    print_r($client);exit;

//    foreach($place_orders as $key => $place_order):
//     $place_order_data[$place_order->tracking_number] = $place_order;
//    endforeach; 

?>
  
//   var place_order = '<?=json_encode($place_order_data);?>';
   var shippers = '<?=json_encode($e_data);?>';

</script>


<?php init_head(); ?>
<div id="wrapper">
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body _buttons">
                    <h1><i class="fa fa-cube"></i>&nbsp;<?=$title; ?></h1>
                    <div class="clearfix"></div>
                    <hr class="hr-panel-heading" />
                    <div class="row" id="contract_summary">


                    	<div class="col-sm-12">
            <div class="">
         
            <?php if(isset($edit)) {?>
               
                <?php echo form_open('admin/shipment_details/get_order_data', array('id'=>'drivers-form','class'=>'drivers-form')); ?>
         
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Tracking No / Barcode </label> <i class="txt-color-red"></i>
                        <div class="input-group">
                            <span class="input-group-addon search_orders_input"><i class="fa fa-slack fa-md fa-fw"></i></span>
                            <input class="form-control" type="text" name="tracking_number" placeholder="123..." title="Search" id="txtSearch">

                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>&nbsp;</label>
                        <div class="input-group">
                            <button type="submit" class="btn btn-primary search_orders" id="btnSearch">Search</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php 
             echo form_close();
            ?>
            <?php } ?>
           
            <?php if(isset($id)) {?>

<?php echo form_open_multipart('admin/shipment_details/update_order', array('id'=>'drivers-form','class'=>'drivers-form')); ?>
<?php } else {?>
<?php echo form_open_multipart('admin/shipment_details/save_order', array('id'=>'drivers-form','class'=>'drivers-form')); ?>
<?php } ?>

<?php if(isset($id)) {?>
    <input type="hidden" value="<?php echo $idd; ?>" name="id">
    <?php } ?> 
    
    <input name="tracking_number" type="hidden"  id="tracking_number" value="<?php if (isset($tracking_number)) echo $tracking_number; ?>">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Shipper Ref (optional)</label> <i class="txt-color-red"></i>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-slack fa-md fa-fw"></i></span>
                                    <input class="form-control input-md" placeholder="BarCode" value="<?=isset($client) ? $client['shipper_ref'] : ''  ?>" type="text" name="shipper_ref" id="shipper_ref" 1"="" autofocus="" tabindex="1">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Reference Number (Optional)</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-slack fa-md fa-fw"></i></span>
                                    <input class="form-control input-md" placeholder="(Optional)" type="text" value="<?=isset($client) ? $client['reference_number'] : ''  ?>" name="reference_number" id="reference_number">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Order Date</label> <i class="txt-color-red"></i>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-calendar fa-md fa-fw"></i></span>
                                    <input class="form-control input-md datepicker" placeholder="Order Date" type="date" name="order_date" id="order_date" value="<?=isset($client) ? $client['order_date'] : ''  ?>">
                                </div>
                            </div>
                        </div>
                        <section id="ServiceType" class="col col-sm-3">
                            <div class="form-group">
                                <label>  Service Type *</label> <i class="fa fa-asterisk txt-color-red"></i>
                                <select name="service_type" id="service_type" required value="" class="form-control select2-hidden-accessible" style="width:100%" 7"="" tabindex="-1" aria-hidden="true" value="">
                                <option ></option>
                                
                               
                                <option disabled value="0">Please Select Option</option>
                                <?php if(isset($client) && $client['service_type'] ==  1){ ?> 

                                <option value="1" selected >NDD        - Next Day Delivery</option>
                                <?php }else {?>
                                    <option value="1"  >NDD        - Next Day Delivery</option>
                                    <?php }?>
                                    <?php if(isset($client) && $client['service_type'] ==  2){ ?> 

                                        <option value="2" selected>SDD        - Same Day Delivery</option>
                                        <?php }else {?>
                                            <option value="2">SDD        - Same Day Delivery</option>
    <?php }?>
    <?php if(isset($client) && $client['service_type'] ==  3){ ?> 

        <option value="3" selected>BS         - Bullet Service</option>
<?php }else {?>
    <option value="3">BS         - Bullet Service</option>
    <?php }?>
    <?php if(isset($client) && $client['service_type'] ==  4){ ?> 

        <option value="4" selected>RS         - Return Service</option>

<?php }else {?>
    <option value="4">RS         - Return Service</option>

    <?php }?>
                              
                              
                            </select>
                            </div>
                        </section>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Shipper Code *</label> <i class="fa fa-asterisk txt-color-red"></i>
                                <div class="input-group" id="divShipperCode">
                                    <span class="input-group-addon"><i class="fa fa-slack fa-md fa-fw"></i></span>
                                    <select class="form-control select2-hidden-accessible select_shipper" required id="shipper_code select_employee" name="shipper_code" value="<?=isset($client) ? $client['shipper_code'] : ''  ?>" 2"="" tabindex="-1" aria-hidden="true" value="">
                                    <option ></option>
                                    <option disabled value="0">please, select shipper </option>
                                    <?php foreach($shippers as $item ) { ?>
                                        <?php  if( isset($client) && $item->shipper_code == $client['shipper_code']) {?>
                                    <option selected value="<?php echo $item->shipper_code ?>" > <?php echo $item->shipper_code ?> | <?php echo $item->trade_name ?> |  <?php echo $item->contact_1 ?></option>
                                    <?php  } else { ?>
                                    <option value="<?php echo $item->shipper_code ?>" > <?php echo $item->shipper_code ?> | <?php echo $item->trade_name ?> |  <?php echo $item->contact_1 ?></option>
                                    <?php  } } ?>
                                   </select>
                                <span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-ddlShipperCode-container"><span class="select2-selection__rendered" id="select2-ddlShipperCode-container"></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Shipper Name *</label> <i class="fa fa-asterisk txt-color-red"></i>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa-md fa-fw"></i></span>
                                    <input class="form-control input-md shipper_name_copy" disabled="" placeholder="Shipper Name" type="text" name="shipper_name_copy" value="<?=isset($client) ? $client['shipper_name'] : ''  ?>" id="shipper_name_copy" required>
                                    <input class="form-control input-md shipper_name"  placeholder="Shipper Name" type="hidden" name="shipper_name" value="<?=isset($client) ? $client['shipper_name'] : ''  ?>" id="shipper_name">
                                
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Contact Office 1 *</label> <i class="fa fa-asterisk txt-color-red"></i>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-phone fa-md fa-fw"></i></span>
                                    <input class="form-control input-md shipper_phone_copy" disabled="" placeholder="Mobile" type="text" name="shipper_phone_copy" value="<?=isset($client) ? $client['shipper_phone'] : ''  ?>" id="shipper_phone_copy" required>
                                    <input class="form-control input-md shipper_phone"  placeholder="Mobile" type="hidden" name="shipper_phone" value="<?=isset($client) ? $client['shipper_phone'] : ''  ?>" id="shipper_phone" >
                                
                                </div>
                            </div>
                        </div>
                        <section id="packageType" class="col col-sm-3">
                            <div class="form-group">
                                <label>  Package Type *</label> <i class="fa fa-asterisk txt-color-red"></i>
                                <select id="package_type"  name="package_type" value="" required class="form-control select2-hidden-accessible" style="width:100%" 7"="" tabindex="-1" aria-hidden="true">
                                <option value="0">Please Select Option</option>
                                <option <?=isset($client) && $client['package_type'] ==1 ? 'selected' : '' ?>  value="1">Small Box Size</option>
                                <option <?=isset($client) && $client['package_type'] ==2 ? 'selected' : '' ?> value="2">Medium Box Size</option>
                                <option <?=isset($client) && $client['package_type'] ==3 ? 'selected' : '' ?> value="3">Large Box Size</option>
                                <option <?=isset($client) && $client['package_type'] ==4 ? 'selected' : '' ?> value="4">Extra Large Box Size</option>
                                <option <?=isset($client) && $client['package_type'] ==5 ? 'selected' : '' ?> value="5">Tv Size</option>
                                <option <?=isset($client) && $client['package_type'] ==6 ? 'selected' : '' ?> value="6">Tube Size</option>
                                <option <?=isset($client) && $client['package_type'] ==7 ? 'selected' : '' ?> value="7">Document Size</option>
                                <option <?=isset($client) && $client['package_type'] ==8 ? 'selected' : '' ?> value="8">Phone Size</option></select>
                            </div>
                        </section>
                    </div>
             

                <div class="tab-pane" id="tab2">
                    <form id="formRecipientInformation" novalidate="novalidate">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Reciver Name *</label> <i class="fa fa-asterisk txt-color-red"></i>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user fa-md fa-fw"></i></span>
                                        <input class="form-control input-md" required placeholder="Receiver Name" type="text" 4"="" name="reciever_name" value="<?=isset($client) ? $client['reciever_name'] : ''  ?>" id="reciever_name" tabindex="2">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Mobile 1 *</label> <i class="fa fa-asterisk txt-color-red"></i>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-phone fa-md fa-fw"></i>+971</span>
                                        <input class="form-control input-md" required placeholder="Mobile" type="tel" 5"="" name="mobile_1" value="<?=isset($client) ? $client['mobile_1'] : ''  ?>" id="mobile_1" tabindex="3">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Mobile 2</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-phone fa-md fa-fw"></i></span>
                                        <input class="form-control input-md" placeholder="Mobile 2 (Optional)" type="tel" name="mobile_2" value="<?=isset($client) ? $client['mobile_2'] : ''  ?>" id="mobile_2">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>COD *</label> <i class="fa fa-asterisk txt-color-red"></i>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-slack fa-md fa-fw"></i></span>
                                        <input class="form-control input-md" required placeholder="COD" type="number" 4"="" name="cod" value="<?=isset($client) ? $client['cod'] : ''  ?>" id="cod" tabindex="4">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Instruction</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-quote-left  fa-md fa-fw"></i></span>
                                        <input class="form-control input-md" placeholder="Instruction (Optional)" name="instruction" value="<?=isset($client) ? $client['instruction'] : ''  ?>" id="instruction" tabindex="5">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Description</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-quote-left  fa-md fa-fw"></i></span>
                                        <input class="form-control input-md" placeholder="Description (Optional)" name="description" value="<?=isset($client) ? $client['description'] : ''  ?>" id="description">
                                    </div>
                                </div>
                            </div>
                        </div>
                 
                </div>
                <div class="tab-pane" id="tab3">
                    <form id="formAddressInformation">
                        <div class="row smart-form">
                            <section id="country" class="col col-sm-3" style="padding:0px !important;">
                                <div class="form-group">
                                    <label> Country *</label> <i class="fa fa-asterisk txt-color-red"></i>
                                    <select id="country_id" value="" required name="country_id" class="form-control select2-hidden-accessible" style="width:100%" tabindex="-1" aria-hidden="true">
                                    <option> </option>
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
                            <section id="city" class="col col-sm-3">
                                <div class="form-group">
                                    <label>  City *</label> <i class="fa fa-asterisk txt-color-red"></i>
                                    
                                    <select id="city" name="city"   class="form-control select2-hidden-accessible" style="width:100%" 7"="" tabindex="-1" aria-hidden="true">
                                    <option <?=isset($client) && $client['city'] ==1 ? 'selected' : '' ?> value="1">Abu Dhabi</option>
                                    <option <?=isset($client) && $client['city'] ==2 ? 'selected' : '' ?> value="2">Dubai</option>
                                    <option <?=isset($client) && $client['city'] ==3 ? 'selected' : '' ?> value="3">Sharjah</option>
                                    <option <?=isset($client) && $client['city'] ==4 ? 'selected' : '' ?> value="4">Ajman</option>
                                    <option <?=isset($client) && $client['city'] ==5 ? 'selected' : '' ?> value="5">Al Ain</option>
                                    <option <?=isset($client) && $client['city'] ==6 ? 'selected' : '' ?> value="6">Fujeriah</option>
                                    <option <?=isset($client) && $client['city'] ==7 ? 'selected' : '' ?> value="7">Um Al Qwain</option>
                                    <option <?=isset($client) && $client['city'] ==8 ? 'selected' : '' ?> value="8">Ras Al Khaimah</option>
                                    <option <?=isset($client) && $client['city'] ==9 ? 'selected' : '' ?> value="9">Out of Service Area</option>
                                </select>
                                </div>
                            </section>

                            <section id="area" class="col col-sm-3">
                                <div class="form-group">
                                    <label> Area </label> <i class="fa fa-asterisk txt-color-red"></i>
                                    <select id="area" name="area" class="form-control select2-hidden-accessible" style="width:100%" 8"="" tabindex="-1" aria-hidden="true"><option value="367">Al Shawamekh 1</option><option value="368">Al Shawamekh 10</option><option value="369">Al Shawamekh 11</option><option value="370">Al Shawamekh 2</option><option value="371">Al Shawamekh 3</option><option value="372">Al Shawamekh 4</option><option value="373">Al Shawamekh 5</option><option value="374">Al Shawamekh 6</option><option value="375">Al Shawamekh 7</option><option value="376">Al Shawamekh 8</option><option value="377">Al Shawamekh 9</option><option value="378">Al Wathba North</option><option value="379">Al Wathba South</option><option value="380">Baniyas East</option><option value="381">Baniyas East 1</option><option value="382">Baniyas East 10</option><option value="383">Baniyas East 11</option><option value="384">Baniyas East 13</option><option value="385">Baniyas East 2</option><option value="386">Baniyas East 3</option><option value="387">Baniyas East 4</option><option value="388">Baniyas East 5</option><option value="389">Baniyas East 6</option><option value="390">Baniyas East 7</option><option value="391">Baniyas East 8</option><option value="392">Baniyas East 9</option><option value="393">Baniyas North</option><option value="394">Baniyas West</option><option value="395">Al Mafraq</option><option value="396">Al Mafraq Industrial</option><option value="397">Bawabat Al Sharq</option><option value="398">Sir Baniyas Island</option><option value="399">Al Nahda Military</option><option value="400">Al Shamkha</option><option value="401">Al Shamkha 1</option><option value="402">Al Shamkha 12</option><option value="403">Al Shamkha 16</option><option value="404">Al Shamkha 17</option><option value="405">Al Shamkha 19</option><option value="406">Al Shamkha 2</option><option value="407">Al Shamkha 20</option><option value="408">Al Shamkha 21</option><option value="409">Al Shamkha 22</option><option value="410">Al Shamkha 23</option><option value="411">Al Shamkha 24</option><option value="412">Al Shamkha 25</option><option value="413">Al Shamkha 26</option><option value="414">Al Shamkha 27</option><option value="415">Al Shamkha 28</option><option value="416">Al Shamkha 29</option><option value="417">Al Shamkha 3</option><option value="418">Al Shamkha 6</option><option value="419">Al Shamkha East</option><option value="420">Al Shamkha South 1</option><option value="421">Al Shamkha South 10</option><option value="422">Al Shamkha South 11</option><option value="423">Al Shamkha South 12</option><option value="424">Al Shamkha South 13</option><option value="425">Al Shamkha South 14</option><option value="426">Al Shamkha South 15</option><option value="427">Al Shamkha South 16</option><option value="428">Al Shamkha South 17</option><option value="429">Al Shamkha South 18</option><option value="430">Al Shamkha South 19</option><option value="431">Al Shamkha South 2</option><option value="432">Al Shamkha South 23</option><option value="433">Al Shamkha South 24</option><option value="434">Al Shamkha South 25</option><option value="435">Al Shamkha South 26</option><option value="436">Al Shamkha South 27</option><option value="437">Al Shamkha South 28</option><option value="438">Al Shamkha South 29</option><option value="439">Al Shamkha South 3</option><option value="440">Al Shamkha South 30</option><option value="441">Al Shamkha South 4</option><option value="442">Al Shamkha South 5</option><option value="443">Al Shamkha South 6</option><option value="444">Al Shamkha South 7</option><option value="445">Al Shamkha South 8</option><option value="446">Al Shamkha South 9</option><option value="447">Al Reef</option><option value="448">Al Adla</option><option value="449">Rawdat Al Reef</option><option value="450">Al Faya</option><option value="451">Al Haffar</option><option value="452">Al Me-rad</option><option value="453">Al Dhafra Air Base</option><option value="454">ICAD 1</option><option value="455">ICAD 2 District A</option><option value="456">ICAD 2 District B</option><option value="457">ICAD 2 District C</option><option value="458">ICAD 2 District D</option><option value="459">ICAD 2 District E</option><option value="460">ICAD 2 District F</option><option value="461">ICAD 2 District G</option><option value="462">ICAD 2 District H</option><option value="463">ICAD 2 District I</option><option value="464">ICAD 2 District J</option><option value="465">ICAD 2 District K</option><option value="466">ICAD 3</option><option value="467">ICAD 4</option><option value="468">ICAD 5</option><option value="469">ICAD Residential City</option><option value="470">MBZ - Zone1</option><option value="471">MBZ - Zone 11</option><option value="472">MBZ - Zone 12</option><option value="473">MBZ - Zone 13</option><option value="474">MBZ - Zone 14</option><option value="475">MBZ - Zone 15</option><option value="476">MBZ - Zone 16</option><option value="477">MBZ - Zone 17</option><option value="478">MBZ - Zone 18</option><option value="479">MBZ - Zone 19</option><option value="480">MBZ - Zone 2</option><option value="481">MBZ - Zone 20</option><option value="482">MBZ - Zone 21</option><option value="483">MBZ - Zone 22</option><option value="484">MBZ - Zone 23</option><option value="485">MBZ - Zone 24</option><option value="486">MBZ - Zone 25</option><option value="487">MBZ - Zone 26</option><option value="488">MBZ - Zone 27</option><option value="489">MBZ - Zone 28</option><option value="490">MBZ - Zone 29</option><option value="491">MBZ - Zone 3</option><option value="492">MBZ - Zone 30</option><option value="493">MBZ - Zone 31</option><option value="494">MBZ - Zone 32</option><option value="495">MBZ - Zone 33</option><option value="496">MBZ - Zone 34</option><option value="497">MBZ - Zone 35</option><option value="498">MBZ - Zone 36</option><option value="499">MBZ - Zone 4</option><option value="500">MBZ - Zone 5</option><option value="501">MBZ - Zone 6</option><option value="502">MBZ - Zone 7</option><option value="503">MBZ - Zone 8</option><option value="504">MBZ - Zone 9</option><option value="505">Mina Zayed</option><option value="506">Mohammed Bin Zayed City (MBZ)</option><option value="507">Sector M10 Industrial Area</option><option value="508">Sector M11 Industrial Area</option><option value="509">Sector M12 Industrial Area</option><option value="510">Sector M13 Industrial Area</option><option value="511">Sector M14 Industrial Area</option><option value="512">Sector M15 Industrial Area</option><option value="513">Sector M16 Industrial Area</option><option value="514">Sector M17 Industrial Area</option><option value="515">Sector M18 Industrial Area</option><option value="516">Sector M19 Industrial Area</option><option value="517">Sector M1 Industrial Area</option><option value="518">Sector M20 Industrial Area</option><option value="519">Sector M21 Industrial Area</option><option value="520">Sector M22 Industrial Area</option><option value="521">Sector M23 Industrial Area</option><option value="522">Sector M24 Industrial Area</option><option value="523">Sector M25 Industrial Area</option><option value="524">Sector M26 Industrial Area</option><option value="525">Sector M27 Industrial Area</option><option value="526">Sector M28 Industrial Area</option><option value="527">Sector M2 Industrial Area</option><option value="528">Sector M30 Industrial Area</option><option value="529">Sector M32 Industrial Area</option><option value="530">Sector M33 Industrial Area</option><option value="531">Sector M34 Industrial Area</option><option value="532">Sector M35 Industrial Area</option><option value="533">Sector M36 Industrial Area</option><option value="534">Sector M37 Industrial Area</option><option value="535">Sector M38 Industrial Area</option><option value="536">Sector M39 Industrial Area</option><option value="537">Sector M3 Industrial Area</option><option value="538">Sector M40 Industrial Area</option><option value="539">Sector M42 Industrial Area</option><option value="540">Sector M43 Industrial Area</option><option value="541">Sector M44 Industrial Area</option><option value="542">Sector M45 Industrial Area</option><option value="543">Sector M46 Industrial Area</option><option value="544">Sector M4 Industrial Area</option><option value="545">Sector M5 Industrial Area</option><option value="546">Sector M6 Industrial Area</option><option value="547">Sector M7 Industrial Area</option><option value="548">Sector M8 Industrial Area</option><option value="549">Sector M9 Industrial Area</option><option value="550">Sector ME10 Shabiyah Khalifa</option><option value="551">Sector ME11 Shabiyah Khalifa</option><option value="552">Sector ME12 Shabiyah Khalifa</option><option value="553">Sector ME13  Police Officers City</option><option value="554">Sector ME 14</option><option value="555">Sector ME 15</option><option value="556">Sector ME 16</option><option value="557">Sector ME1  Police Officers City</option><option value="558">Sector ME2</option><option value="559">Sector ME3</option><option value="560">Sector ME4</option><option value="561">Sector ME5</option><option value="562">Sector ME6 Shabiyah Khalifa</option><option value="563">Sector ME7 Shabiyah Khalifa</option><option value="564">Sector ME8 Shabiyah Khalifa</option><option value="565">Sector ME9 Shabiyah Khalifa</option><option value="566">Sector MN1 Industrial Area</option><option value="567">Sector MN2 Industrial Area</option><option value="568">Sector MN3 Industrial Area</option><option value="569">Sector MN4 Industrial Area</option><option value="570">Sector MN5 Industrial Area</option><option value="571">Sector MN6 Industrial Area</option><option value="572">Sector MW1 Industrial Area</option><option value="573">Sector MW2 Industrial Area</option><option value="574">Sector MW3 Industrial Area</option><option value="575">Sector MW4 Industrial Area</option>
                                    <option >Sector MW5 Industrial Area</option>
                                    <option > Mussafah</option>
                                    <option >Mahwi</option>
                                    <option >ESNAAD</option>
                                    <option>Khalifa City - SE1</option><option >Khalifa City - SE11</option><option value="582">Khalifa City - SE12</option><option value="583">Khalifa City - SE13</option><option value="584">Khalifa City - SE14</option><option value="585">Khalifa City - SE15</option><option value="586">Khalifa City - SE16</option><option value="587">Khalifa City - SE2</option><option value="588">Khalifa City - SE22</option><option value="589">Khalifa City - SE23</option><option value="590">Khalifa City - SE24</option><option value="591">Khalifa City - SE25</option><option value="592">Khalifa City - SE26</option><option value="593">Khalifa City - SE3</option><option value="594">Khalifa City - SE34</option><option value="595">Khalifa City - SE35</option><option value="596">Khalifa City - SE36</option><option value="597">Khalifa City - SE38</option><option value="598">Khalifa City - SE39</option><option value="599">Khalifa City - SE4</option><option value="600">Khalifa City - SE40</option><option value="601">Khalifa City - SE41</option><option value="602">Khalifa City - SE42</option><option value="603">Khalifa City - SE43</option><option value="604">Khalifa City - SE44</option><option value="605">Khalifa City - SE5</option><option value="606">Khalifa City - SE6</option><option value="607">Khalifa City - SW1</option><option value="608">Khalifa City - SW11</option><option value="609">Khalifa City - SW12</option><option value="610">Khalifa City - SW13</option><option value="611">Khalifa City - SW14</option><option value="612">Khalifa City - SW15</option><option value="613">Khalifa City - SW16</option><option value="614">Khalifa City - SW2</option><option value="615">Khalifa City - SW3</option><option value="616">Khalifa City - SW4</option><option value="617">Khalifa City - SW5</option><option value="618">Khalifa City - SW6</option><option value="619">Abu Dhabi International Airport</option><option value="620">Al Forsan Village</option><option value="621">Al Raha Beach</option><option value="622">Al Raha Gardens</option><option value="623">Yas Island</option><option value="624">Al Muneera</option><option value="625">Al Matar</option><option value="626">Masdar City</option><option value="627">Taweelah</option><option value="628">Abu Al Habel Island</option><option value="629">Al Bandar</option><option value="630">Al Jubail Island</option><option value="631">Al Lissaily</option><option value="632">Al Rayyana</option><option value="633">Al Seef</option><option value="634">Al Zeina</option><option value="635">Fahid Island</option><option value="636">Golf Gardens</option><option value="637">Watani Villas</option><option value="638">Al Buteen</option><option value="639">Al Khalidiyah</option><option value="640">Corniche</option><option value="641">Saadiyat Island</option><option value="642">Al Hosn</option><option value="643">Al Khubeirah</option><option value="644">Al Manhal</option><option value="645">Al Zahraa</option><option value="646">Dolphin Island</option><option value="647">Lulu Island</option><option value="648">Qasr Al Amouage</option><option value="649">Al Baladiya</option><option value="650">Al Danah (Madinat Zayed)</option><option value="651">Al Muroor</option><option value="652">Al Nahyan</option><option value="653">Al Mina</option><option value="654">Madinat Zayed</option><option value="655">Al Reem Island</option><option value="656">Al Reem Island East</option><option value="657">Al Maryah Island</option><option value="658">Al Markaziyah</option><option value="659">Al Markaziyah (west)</option><option value="660">Al Dana</option><option value="661">Al Dhafrah</option><option value="662">Al Zahiyah (Tourist Club)</option><option value="663">Al Gurm</option><option value="664">Al Wahdah</option><option value="665">Zayed City</option><option value="666">Al Aman</option><option value="667">Al Ittihad</option><option value="668">Sas Al Nakhl</option><option value="669">Sas Al Nakhl Village</option><option value="670">Al Karamah</option><option value="671">Al Mushrif</option><option value="672">Al Madina Al Riyadiya</option><option value="673">Abu Dhabi Gate City</option><option value="674">Al Maqta - Abu Dhabi City</option><option value="675">Al Rowdah</option><option value="676">Al Safarat</option><option value="677">Zayed Military City</option><option value="678">Qasr Al Shatie</option><option value="679">Al Hudayriat Island</option><option value="680">Al Hudayriat Island West</option><option value="681">Al Mazoon</option><option value="682">Al Mussala</option><option value="683">Al Rehhan</option><option value="684">Al Tabbiyah</option><option value="685">Hadbat Al Zaafran</option><option value="686">Mangrove Village</option><option value="687">Seashore Villas</option><option value="688">Al Dhafra (Al Gharbia)</option><option value="689">Abu Al Abyadh Island</option><option value="690">Al Ruwais</option><option value="691">Liwa</option><option value="692">Ghayathi</option><option value="693">Gheweifat</option><option value="694">Habshan</option><option value="695">Tarif</option><option value="696">Hamim</option><option value="697">Al Dabbaiya</option><option value="698">Al Mirfa</option><option value="699">Barakah</option><option value="700">Bayah Al Sila</option><option value="701">Baynunah</option><option value="702">Bida Hazaah</option><option value="703">Bida Mutawwa</option><option value="704">Umm Al Ashtan</option><option value="705">Abu Al Sayayif</option><option value="706">Abu Awanah</option><option value="707">Abu Munther</option><option value="708">Al Aryam Island</option><option value="709">Al Fathiya</option><option value="710">Al Hamra</option><option value="711">Al Harmia</option><option value="712">Al Hujaimah</option><option value="713">Al Khis</option><option value="714">Al Shuwaihat</option><option value="715">Al Talfaha</option><option value="716">Al Yaarya</option><option value="717">Asab</option><option value="718">Bu Hasa</option><option value="719">Istaihah</option><option value="720">Jabel Al Dhannah</option><option value="721">Maharaka</option><option value="722">Al Marabaa</option><option value="723">Radaim</option><option value="724">Al Bahya</option><option value="725">Shahama</option><option value="726">Al Rahba</option><option value="727">Al Shaleela</option><option value="728">Al Samha</option><option value="729">Al Sheleilah Island North</option><option value="730">Al Sheleilah Island South</option><option value="731">Qasr El Bahr</option><option value="732">KIZAD Area A</option><option value="733">KIZAD Area B</option><option value="734">Abu Mureikhah</option><option value="735">Al Ghadeer Village</option><option value="736">Al Hanjurah</option><option value="737">Al Jarf</option><option value="738">Al Jarf (Hisam Al Ghabat)</option><option value="739">Al Razeen</option><option value="740">Al Rumaila</option><option value="741">Al Sader</option><option value="742">Al Sammaliyyah Island</option><option value="743">Al Thurayya</option><option value="744">Al Zubarah Island</option><option value="745">Ghanadhah</option><option value="746">Ghantoot</option><option value="747">Hydra Village</option><option value="748">Warsan Farms</option><option value="749">Al Falah</option><option value="750">Shakbout City 1</option><option value="751">Shakbout City 10</option><option value="752">Shakbout City 11</option><option value="753">Shakbout City 12</option><option value="754">Shakbout City 13</option><option value="755">Shakbout City 14</option><option value="756">Shakbout City 15</option><option value="757">Shakbout City 16</option><option value="758">Shakbout City 17</option><option value="759">Shakbout City 18</option><option value="760">Shakbout City 19</option><option value="761">Shakbout City 2</option><option value="762">Shakbout City 20</option><option value="763">Shakbout City 21</option><option value="764">Shakbout City 22</option><option value="765">Shakbout City 23</option><option value="766">Shakbout City 24</option><option value="767">Shakbout City 25</option><option value="768">Shakbout City 26</option><option value="769">Shakbout City 27</option><option value="770">Shakbout City 28</option><option value="771">Shakbout City 29</option><option value="772">Shakbout City 3</option><option value="773">Shakbout City 30</option><option value="774">Shakbout City 31</option><option value="775">Shakbout City 4</option><option value="776">Shakbout City 5</option><option value="777">Shakbout City  6</option><option value="778">Shakbout City 7</option><option value="779">Shakbout City 8</option><option value="780">Shakbout City 9</option><option value="781">Al Falah City</option><option value="1680">Al Wathba</option><option value="1681">Al Wathba military</option><option value="1682">Al Moazaz</option><option value="1683">Mazyad Mall</option><option value="1684">Dalma Mall</option><option value="1685">Abu Dhabi University</option><option value="1686">Al Estiqlal St</option><option value="1687">Electra St</option><option value="1688">Airport St</option><option value="1689">Al Nasr St</option><option value="1690">Hemdan St</option><option value="1691">Khalifa.St</option><option value="1692">Liwa St</option><option value="1693">Marina Mall</option><option value="1694">Sheikh Khalifa Energy Complex</option><option value="1695">Abu Dhabi Mall</option><option value="1696">Al Zaafrana</option><option value="1697">Al Maamourah</option><option value="1698">Al Wahda Mall</option><option value="1699">Barhoz</option><option value="1700">Al Mina St</option><option value="1701">Al Najda St</option><option value="1702">Al Wahda.St</option><option value="1703">Dalma St</option><option value="1704">Defence St</option><option value="1705">Al Jawazat St</option><option value="1706">Al Saada St</option><option value="1707">Al Salaam St</option><option value="1708">Al Falah St</option><option value="1709">Carrefour</option><option value="1710">Police Academy</option><option value="1711">Al Buteen Airport</option><option value="1712">Khalifa Park</option><option value="1713">Burjeel Hospital</option><option value="1714">Gold Center</option><option value="1715">Ministries Complex</option><option value="1716">Department of Education and Knowledge</option><option value="1717">Ministry of Interior</option><option value="1718">Ministry of Foreign Affairs &amp;amp; International Cooperation</option><option value="1719">Zayed Hospital</option><option value="1720">Khalifa.Hospital</option><option value="1721">Imperial Hospital</option><option value="1722">Officer City</option><option value="1723">Between The Bridge</option><option value="1724">Om Al Naar</option><option value="1725">Al Khaleej Al Arabi St</option><option value="1726">Zayed Mosque</option><option value="1727">Al Manaser</option><option value="1728">Al Moharba</option><option value="1729">Al Zaab</option></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="7" aria-labelledby="select2-ddlArea-container"><span class="select2-selection__rendered" id="select2-ddlArea-container" title="Al Shawamekh 1">Al Shawamekh 1</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                            </section>
                            <section id="street" class="col col-sm-3">
                                <h8>Street Address</h8>
                                <label for="address2" class="input">
                                    <input id="street" type="text" class="form-control" name="street" value="<?=isset($client) ? $client['street'] : ''  ?>" 9"="">
                                </label>
                            </section>
                        </div>
                        <section id="full_address" class="col col-sm-3 smart-form" style="display:none">
                            <h8>Full Address</h8> <i class="txt-color-red"></i>
                            <label for="address2" class="input">
                                <input id="txtFullAddress" class="form-control" type="text" name="txtFullAddress">
                            </label>
                        </section>
                        <h7>No. Of Pieces *<i class="fa fa-asterisk txt-color-red"></i> </h7>
                        <div class="row smart-form">
                            <div class="row">
                                <section class="col col-sm-3">
                                    <label class="input">
                                        <input id="txtNoOfPieces" value="1" type="text" placeholder="No. Of Pieces" value="<?=isset($client) ? $client['reference_number'] : ''  ?> " title="Enter number between 1 - 5" 10"="">
                                    </label>
                                </section>
                     <div class="col-md-2">
               <div class="form-check">
             
                <input  class="form-check-input" type="checkbox" name="cod_status" id="cod_status" value="1" <?=(isset($client) && $client['cod_status'] == "1")?'checked':''?> required>
                  <label class="form-check-label" for="cod_status" >
                  Use specific COD.
                   </label>
                  
              </div>
               </div>
                                <!-- <section class="col col-sm-3">
                                    <span class="smart-form input-group ">
                                        <label class="checkbox">
                                            <input type="checkbox" class="form-control"  name="chkIsPeicesCostOfGoods">
                                            <i></i>Use specific COD.
                                        </label>
                                    </span>
                                </section> -->
                            </div>
                        </div>
                        <div class="row smart-form" id="divPiecesDescription">
                            <div class="row" id="_1">
                                <input type="hidden" id="hdnPieceID_1" value="0">
                                <section class="col col-sm-3">
                                    <label class="textarea">
                                        
                                        <textarea id="txtPieceDesc_1" rows="2" class="form-control" <?=isset($client) ? $client['no_of_piece'] : ''  ?> name="no_of_piece" placeholder="Tell us about 1st Piece.." 11"=""></textarea>
                                    </label>
                                </section>
                                <section class="col col-sm-3">
                                    <label class="input">      
                                        <input type="number" id="cod_amount" class="form-control" name="cod_amount" value="<?=isset($client) ? $client['cod_amount'] : ''  ?>" placeholder="COD" 18"="">
                                    </label>
                                </section>
                            </div>
                            <div id="_2" class="row" style="display:none">
                                <input type="hidden" id="hdnPieceID_2" value="0">
                                <section class="col col-sm-3">
                                    <label class="textarea">
                                        
                                        <textarea id="txtPieceDesc_2" rows="1" class="form-control" name="comment" value="" placeholder="Tell us about 2nd Piece.." 19"=""></textarea>
                                    </label>
                                </section>
                                <section class="col col-sm-3">
                                    <label class="input">
                                        
                                        <input type="text" id="txtCostOfGoods_2" class="form-control" name="txtCostOfGoods2" placeholder="COD" 20"="">
                                    </label>
                                </section>
                            </div>
                            <div id="_3" class="row" style="display:none">
                                <input type="hidden" id="hdnPieceID_3" value="0">
                                <section class="col col-sm-3">
                                    <label class="textarea">
                                        
                                        <textarea id="txtPieceDesc_3" rows="1" class="form-control" name="comment" placeholder="Tell us about 3rd Piece.." 21"=""></textarea>
                                    </label>
                                </section>
                                <section class="col col-sm-3">
                                    <label class="input">
                                        
                                        <input type="text" id="txtCostOfGoods_3" name="txtCostOfGoods3" class="form-control" placeholder="COD" 22"="">
                                    </label>
                                </section>
                            </div>
                            <div id="_4" class="row" style="display:none">
                                <input type="hidden" id="hdnPieceID_4" value="0">
                                <section class="col col-sm-3">
                                    <label class="textarea">
                                        
                                        <textarea id="txtPieceDesc_4" rows="1" name="comment" class="form-control" placeholder="Tell us about 4th Piece.." 23"=""></textarea>
                                    </label>
                                </section>
                                <section class="col col-sm-3">
                                    <label class="input">
                                        <span id="errmsg" class="text-danger"></span>
                                        
                                        <input type="text" id="txtCostOfGoods_4" class="form-control" name="txtCostOfGoods4" placeholder="COD" 24"="">
                                    </label>
                                </section>
                            </div>
                            <div id="_5" class="row" style="display:none">
                                <input type="hidden" id="hdnPieceID_5" value="0">
                                <section class="col col-sm-3">
                                    <label class="textarea">
                                        
                                        <textarea id="txtPieceDesc_5" rows="1" class="form-control" name="comment" placeholder="Tell us about 5th Piece.." 25"=""></textarea>
                                    </label>
                                </section>
                                <section class="col col-sm-3">
                                    <label class="input">
                                        
                                        <input type="text" id="txtCostOfGoods_5" class="form-control" name="txtCostOfGoods5" placeholder="Cost od Goods" 26"="">
                                    </label>
                                </section>
                            </div>
                        </div>
                   
                </div>
                <div class="row">
                    <div class="col col-sm-3" style="padding-left:50px;"></div>
                    <button type="submit" class="btn btn-primary" 12"="" id="btnPlaceOrder" tabindex="8">Confirm</button>
                </div>

                <?php echo form_close(); ?>

                <div class="tab-pane" id="tab4">
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
                                <div class="row">
                                    <div class=" col col-sm-4"><button class="btn btn-primary " id="btnNewPlaceOrderOnCompleteOrder" tabindex="9" style="display: none;">New Place Order</button></div>
                                    <div class="col col-sm-4"> <button class="btn btn-primary " id="btnPrintAirWayBillOnCompleteOrder" style="display: none;">Print AirWay Bill</button></div>
                                </div>

                                <br>
                                <br>
                            </div>
                            <div class="col col-sm-4">

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
    $(document).on('change','.select_shipper', function(){
      var id=$('.select_shipper').val();
      let employee_array = JSON.parse(shippers);
      var name= employee_array[id]['trade_name'];
      var phone=employee_array[id]['contact_1'];
      $('.shipper_name').val(name);
      $('.shipper_phone').val(phone);
      $('.shipper_name_copy').val(name);
      $('.shipper_phone_copy').val(phone);
     
  
     });

    //  $(document).on('click','.search_orders', function(){
    //     var tracking_number=$('.search_orders_input').val();
    //     let place_array=JSON.parse(place_order_data);
        
    //  });

</script>
</body>
</html>
