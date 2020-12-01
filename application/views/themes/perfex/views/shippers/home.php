<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<!-- <script type="text/javascript">
    var country = '<?= json_encode($countries) ?>';
</script> -->
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCS-DB39Kk-Z25C5GWymVGshXIALbjXPGY&callback=initMap&libraries=&v=weekly" defer></script>

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
               
                    <div id="content" class="">
                        <div class="row">
                            <div class="col-12">
                                <span class="fa fa-cube" style="font-size:25px"></span>
                                <p class="h2" style="display:inline-block"> Place Order</p>
                            </div>
                        </div>
                        <hr class="m-0">
                        <div class="row m-0">
                            <div class="col-md-12">
                                <?php echo form_open('shippers/save_order'); ?>
                                <!-- <form action="?" method="GET"> -->
                                <ul class="stepper linear" id="custom-validation">
                                    <li class="step active">
                                        <div data-step-label="Step-1" class="step-title waves-effect waves-dark">Sender Information</div>
                                        <div class="step-new-content">
                                            <br>
                                            <div class="row">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="chkChooseDefaultDetail" checked="checked">
                                                    <label class="form-check-label" for="chkChooseDefaultDetail">Choose Default Details</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div id="OrderDate" class="form-group col-md-4">
                                                    <input id="order_date" name="order_date" type="date" required="" class="form-control ">
                                                    <label for="txtOrderDate" class="ml-auto">Pickup On</label>
                                                </div>
                                                <div id="SenderName" class="form-group col-md-4">
                                                    <input id="shipper_name" name="shipper_name" type="text" required="" class="form-control validate">
                                                    <label for="txtSenderName" class="ml-auto">Sender Name</label>
                                                </div>
                                                <div id="SenderMobile" class="form-group col-md-4">
                                                    <input id="shipper_phone" name="shipper_phone" type="text" required="" class="form-control validate">
                                                    <label for="txtContactNo_Office1" class="ml-auto">Mobile</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div id="SenderFullAddress" class="form-group col-md-12">
                                                    <input id="_sender_full_address" name="_sender_full_address" type="text" class="form-control validate">
                                                    <label for="txtSenderFullAddress" class="ml-auto">Sender Full Address</label>
                                                </div>
                                            </div>
                                            <input type="hidden" id="hdnSenderLocationLat" value="0">
                                            <input type="hidden" id="hdnSenderLocationLang" value="0">
                                            <div class="step-actions">
                                                <button class="waves-effect waves-dark btn btn-sm btn-primary next-step">CONTINUE</button>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="step">
                                        <div data-step-label="Step-2" class="step-title waves-effect waves-dark">Receiver Information</div>
                                        <div class="step-new-content">
                                            <div class="row">

                                                <div class="md-form col-md-4 ml-auto">
                                                    <input id="reciever_name" name="reciever_name" type="text" class="validate form-control " required="">
                                                    <label for="txtRecipientName" class="ml-auto">Recipient Name <i class="fa fa-sm fa-asterisk text-danger"></i> </label>
                                                </div>
                                                <div class="md-form col-md-4 ml-auto">
                                                    <input id="mobile_1" name="mobile_1" type="number" class="validate form-control" required="">
                                                    <label for="txtRecipientMobile" class="ml-auto">Mobile <i class="fa fa-sm fa-asterisk text-danger"></i></label>
                                                </div>
                                                <div class="md-form col-md-4 ml-auto">
                                                    <input name="mobile_2" id="txtRecipientMobile2" type="text" class="form-control">
                                                    <label for="txtRecipientMobile2" class="ml-auto">Phone</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="md-form col-md-4 ">
                                                    <select id="country_id" name="country_id" class=" md-form " required="" searchable="Search here.." tabindex="-1" aria-hidden="true" style="">

                                                        <option> </option>
                                                        <option value="1">UAE</option>


                                                    </select>
                                                    <br>
                                                    <label for="txtRecipientMobile2" class="ml-auto">Country</label>
                                                </div>
                                                <div id="city" class="md-form col-md-4">
                                                    <select id="city" name="city" class=" md-form " searchable="Search here.." tabindex="-1" aria-hidden="true" style="">
                                                        <option value="" disabled="" selected="">Choose City</option>

                                                        <option value="1">Abu Dhabi</option>
                                                        <option value="2">Dubai</option>
                                                        <option value="3">Sharjah</option>
                                                        <option value="4">Ajman</option>
                                                        <option value="5">Al Ain</option>
                                                        <option value="6">Fujeriah</option>
                                                        <option value="7">Um Al Qwain</option>
                                                        <option value="8">Ras Al Khaimah</option>
                                                        <option value="9">Out of Service Area</option>
                                                    </select>
                                                    <br>
                                                    <label for="txtRecipientMobile2" class="ml-auto">City</label>
                                                    <!-- <input id="txtCity" name="txtCity" type="text" class="validate form-control inputHidden" required=""> -->
                                                </div>
                                                <div id="area" class="md-form col-md-4">
                                                    <select id="ddlArea" class=" md-form " tabindex="-1" aria-hidden="true" style="">
                                                        <option value="367">Al Shawamekh 1</option>
                                                        <option value="368">Al Shawamekh 10</option>
                                                        <option value="369">Al Shawamekh 11</option>
                                                        <option value="370">Al Shawamekh 2</option>
                                                        <option value="371">Al Shawamekh 3</option>
                                                        <option value="372">Al Shawamekh 4</option>
                                                        <option value="373">Al Shawamekh 5</option>
                                                        <option value="374">Al Shawamekh 6</option>
                                                        <option value="375">Al Shawamekh 7</option>
                                                        <option value="376">Al Shawamekh 8</option>
                                                        <option value="377">Al Shawamekh 9</option>
                                                        <option value="378">Al Wathba North</option>
                                                        <option value="379">Al Wathba South</option>
                                                        <option value="380">Baniyas East</option>
                                                        <option value="381">Baniyas East 1</option>
                                                        <option value="382">Baniyas East 10</option>
                                                        <option value="383">Baniyas East 11</option>
                                                        <option value="384">Baniyas East 13</option>
                                                        <option value="385">Baniyas East 2</option>
                                                        <option value="386">Baniyas East 3</option>
                                                        <option value="387">Baniyas East 4</option>
                                                        <option value="388">Baniyas East 5</option>
                                                        <option value="389">Baniyas East 6</option>
                                                        <option value="390">Baniyas East 7</option>
                                                        <option value="391">Baniyas East 8</option>
                                                        <option value="392">Baniyas East 9</option>
                                                        <option value="393">Baniyas North</option>
                                                        <option value="394">Baniyas West</option>
                                                        <option value="395">Al Mafraq</option>
                                                        <option value="396">Al Mafraq Industrial</option>
                                                        <option value="397">Bawabat Al Sharq</option>
                                                        <option value="398">Sir Baniyas Island</option>
                                                        <option value="399">Al Nahda Military</option>
                                                        <option value="400">Al Shamkha</option>
                                                        <option value="401">Al Shamkha 1</option>
                                                        <option value="402">Al Shamkha 12</option>
                                                        <option value="403">Al Shamkha 16</option>
                                                        <option value="404">Al Shamkha 17</option>
                                                        <option value="405">Al Shamkha 19</option>
                                                        <option value="406">Al Shamkha 2</option>
                                                        <option value="407">Al Shamkha 20</option>
                                                        <option value="408">Al Shamkha 21</option>
                                                        <option value="409">Al Shamkha 22</option>
                                                        <option value="410">Al Shamkha 23</option>
                                                        <option value="411">Al Shamkha 24</option>
                                                        <option value="412">Al Shamkha 25</option>
                                                        <option value="413">Al Shamkha 26</option>
                                                        <option value="414">Al Shamkha 27</option>
                                                        <option value="415">Al Shamkha 28</option>
                                                        <option value="416">Al Shamkha 29</option>
                                                        <option value="417">Al Shamkha 3</option>
                                                        <option value="418">Al Shamkha 6</option>
                                                        <option value="419">Al Shamkha East</option>
                                                        <option value="420">Al Shamkha South 1</option>
                                                        <option value="421">Al Shamkha South 10</option>
                                                        <option value="422">Al Shamkha South 11</option>
                                                        <option value="423">Al Shamkha South 12</option>
                                                        <option value="424">Al Shamkha South 13</option>
                                                        <option value="425">Al Shamkha South 14</option>
                                                        <option value="426">Al Shamkha South 15</option>
                                                        <option value="427">Al Shamkha South 16</option>
                                                        <option value="428">Al Shamkha South 17</option>
                                                        <option value="429">Al Shamkha South 18</option>
                                                        <option value="430">Al Shamkha South 19</option>
                                                        <option value="431">Al Shamkha South 2</option>
                                                        <option value="432">Al Shamkha South 23</option>
                                                        <option value="433">Al Shamkha South 24</option>
                                                        <option value="434">Al Shamkha South 25</option>
                                                        <option value="435">Al Shamkha South 26</option>
                                                        <option value="436">Al Shamkha South 27</option>
                                                        <option value="437">Al Shamkha South 28</option>
                                                        <option value="438">Al Shamkha South 29</option>
                                                        <option value="439">Al Shamkha South 3</option>
                                                        <option value="440">Al Shamkha South 30</option>
                                                        <option value="441">Al Shamkha South 4</option>
                                                        <option value="442">Al Shamkha South 5</option>
                                                        <option value="443">Al Shamkha South 6</option>
                                                        <option value="444">Al Shamkha South 7</option>
                                                        <option value="445">Al Shamkha South 8</option>
                                                        <option value="446">Al Shamkha South 9</option>
                                                        <option value="447">Al Reef</option>
                                                        <option value="448">Al Adla</option>
                                                        <option value="449">Rawdat Al Reef</option>
                                                        <option value="450">Al Faya</option>
                                                        <option value="451">Al Haffar</option>
                                                        <option value="452">Al Me-rad</option>
                                                        <option value="453">Al Dhafra Air Base</option>
                                                        <option value="454">ICAD 1</option>
                                                        <option value="455">ICAD 2 District A</option>
                                                        <option value="456">ICAD 2 District B</option>
                                                        <option value="457">ICAD 2 District C</option>
                                                        <option value="458">ICAD 2 District D</option>
                                                        <option value="459">ICAD 2 District E</option>
                                                        <option value="460">ICAD 2 District F</option>
                                                        <option value="461">ICAD 2 District G</option>
                                                        <option value="462">ICAD 2 District H</option>
                                                        <option value="463">ICAD 2 District I</option>
                                                        <option value="464">ICAD 2 District J</option>
                                                        <option value="465">ICAD 2 District K</option>
                                                        <option value="466">ICAD 3</option>
                                                        <option value="467">ICAD 4</option>
                                                        <option value="468">ICAD 5</option>
                                                        <option value="469">ICAD Residential City</option>
                                                        <option value="470">MBZ - Zone1</option>
                                                        <option value="471">MBZ - Zone 11</option>
                                                        <option value="472">MBZ - Zone 12</option>
                                                        <option value="473">MBZ - Zone 13</option>
                                                        <option value="474">MBZ - Zone 14</option>
                                                        <option value="475">MBZ - Zone 15</option>
                                                        <option value="476">MBZ - Zone 16</option>
                                                        <option value="477">MBZ - Zone 17</option>
                                                        <option value="478">MBZ - Zone 18</option>
                                                        <option value="479">MBZ - Zone 19</option>
                                                        <option value="480">MBZ - Zone 2</option>
                                                        <option value="481">MBZ - Zone 20</option>
                                                        <option value="482">MBZ - Zone 21</option>
                                                        <option value="483">MBZ - Zone 22</option>
                                                        <option value="484">MBZ - Zone 23</option>
                                                        <option value="485">MBZ - Zone 24</option>
                                                        <option value="486">MBZ - Zone 25</option>
                                                        <option value="487">MBZ - Zone 26</option>
                                                        <option value="488">MBZ - Zone 27</option>
                                                        <option value="489">MBZ - Zone 28</option>
                                                        <option value="490">MBZ - Zone 29</option>
                                                        <option value="491">MBZ - Zone 3</option>
                                                        <option value="492">MBZ - Zone 30</option>
                                                        <option value="493">MBZ - Zone 31</option>
                                                        <option value="494">MBZ - Zone 32</option>
                                                        <option value="495">MBZ - Zone 33</option>
                                                        <option value="496">MBZ - Zone 34</option>
                                                        <option value="497">MBZ - Zone 35</option>
                                                        <option value="498">MBZ - Zone 36</option>
                                                        <option value="499">MBZ - Zone 4</option>
                                                        <option value="500">MBZ - Zone 5</option>
                                                        <option value="501">MBZ - Zone 6</option>
                                                        <option value="502">MBZ - Zone 7</option>
                                                        <option value="503">MBZ - Zone 8</option>
                                                        <option value="504">MBZ - Zone 9</option>
                                                        <option value="505">Mina Zayed</option>
                                                        <option value="506">Mohammed Bin Zayed City (MBZ)</option>
                                                        <option value="507">Sector M10 Industrial Area</option>
                                                        <option value="508">Sector M11 Industrial Area</option>
                                                        <option value="509">Sector M12 Industrial Area</option>
                                                        <option value="510">Sector M13 Industrial Area</option>
                                                        <option value="511">Sector M14 Industrial Area</option>
                                                        <option value="512">Sector M15 Industrial Area</option>
                                                        <option value="513">Sector M16 Industrial Area</option>
                                                        <option value="514">Sector M17 Industrial Area</option>
                                                        <option value="515">Sector M18 Industrial Area</option>
                                                        <option value="516">Sector M19 Industrial Area</option>
                                                        <option value="517">Sector M1 Industrial Area</option>
                                                        <option value="518">Sector M20 Industrial Area</option>
                                                        <option value="519">Sector M21 Industrial Area</option>
                                                        <option value="520">Sector M22 Industrial Area</option>
                                                        <option value="521">Sector M23 Industrial Area</option>
                                                        <option value="522">Sector M24 Industrial Area</option>
                                                        <option value="523">Sector M25 Industrial Area</option>
                                                        <option value="524">Sector M26 Industrial Area</option>
                                                        <option value="525">Sector M27 Industrial Area</option>
                                                        <option value="526">Sector M28 Industrial Area</option>
                                                        <option value="527">Sector M2 Industrial Area</option>
                                                        <option value="528">Sector M30 Industrial Area</option>
                                                        <option value="529">Sector M32 Industrial Area</option>
                                                        <option value="530">Sector M33 Industrial Area</option>
                                                        <option value="531">Sector M34 Industrial Area</option>
                                                        <option value="532">Sector M35 Industrial Area</option>
                                                        <option value="533">Sector M36 Industrial Area</option>
                                                        <option value="534">Sector M37 Industrial Area</option>
                                                        <option value="535">Sector M38 Industrial Area</option>
                                                        <option value="536">Sector M39 Industrial Area</option>
                                                        <option value="537">Sector M3 Industrial Area</option>
                                                        <option value="538">Sector M40 Industrial Area</option>
                                                        <option value="539">Sector M42 Industrial Area</option>
                                                        <option value="540">Sector M43 Industrial Area</option>
                                                        <option value="541">Sector M44 Industrial Area</option>
                                                        <option value="542">Sector M45 Industrial Area</option>
                                                        <option value="543">Sector M46 Industrial Area</option>
                                                        <option value="544">Sector M4 Industrial Area</option>
                                                        <option value="545">Sector M5 Industrial Area</option>
                                                        <option value="546">Sector M6 Industrial Area</option>
                                                        <option value="547">Sector M7 Industrial Area</option>
                                                        <option value="548">Sector M8 Industrial Area</option>
                                                        <option value="549">Sector M9 Industrial Area</option>
                                                        <option value="550">Sector ME10 Shabiyah Khalifa</option>
                                                        <option value="551">Sector ME11 Shabiyah Khalifa</option>
                                                        <option value="552">Sector ME12 Shabiyah Khalifa</option>
                                                        <option value="553">Sector ME13 Police Officers City</option>
                                                        <option value="554">Sector ME 14</option>
                                                        <option value="555">Sector ME 15</option>
                                                        <option value="556">Sector ME 16</option>
                                                        <option value="557">Sector ME1 Police Officers City</option>
                                                        <option value="558">Sector ME2</option>
                                                        <option value="559">Sector ME3</option>
                                                        <option value="560">Sector ME4</option>
                                                        <option value="561">Sector ME5</option>
                                                        <option value="562">Sector ME6 Shabiyah Khalifa</option>
                                                        <option value="563">Sector ME7 Shabiyah Khalifa</option>
                                                        <option value="564">Sector ME8 Shabiyah Khalifa</option>
                                                        <option value="565">Sector ME9 Shabiyah Khalifa</option>
                                                        <option value="566">Sector MN1 Industrial Area</option>
                                                        <option value="567">Sector MN2 Industrial Area</option>
                                                        <option value="568">Sector MN3 Industrial Area</option>
                                                        <option value="569">Sector MN4 Industrial Area</option>
                                                        <option value="570">Sector MN5 Industrial Area</option>
                                                        <option value="571">Sector MN6 Industrial Area</option>
                                                        <option value="572">Sector MW1 Industrial Area</option>
                                                        <option value="573">Sector MW2 Industrial Area</option>
                                                        <option value="574">Sector MW3 Industrial Area</option>
                                                        <option value="575">Sector MW4 Industrial Area</option>
                                                        <option>Sector MW5 Industrial Area</option>
                                                        <option> Mussafah</option>
                                                        <option>Mahwi</option>
                                                        <option>ESNAAD</option>
                                                        <option>Khalifa City - SE1</option>
                                                        <option>Khalifa City - SE11</option>
                                                        <option value="582">Khalifa City - SE12</option>
                                                        <option value="583">Khalifa City - SE13</option>
                                                        <option value="584">Khalifa City - SE14</option>
                                                        <option value="585">Khalifa City - SE15</option>
                                                        <option value="586">Khalifa City - SE16</option>
                                                        <option value="587">Khalifa City - SE2</option>
                                                        <option value="588">Khalifa City - SE22</option>
                                                        <option value="589">Khalifa City - SE23</option>
                                                        <option value="590">Khalifa City - SE24</option>
                                                        <option value="591">Khalifa City - SE25</option>
                                                        <option value="592">Khalifa City - SE26</option>
                                                        <option value="593">Khalifa City - SE3</option>
                                                        <option value="594">Khalifa City - SE34</option>
                                                        <option value="595">Khalifa City - SE35</option>
                                                        <option value="596">Khalifa City - SE36</option>
                                                        <option value="597">Khalifa City - SE38</option>
                                                        <option value="598">Khalifa City - SE39</option>
                                                        <option value="599">Khalifa City - SE4</option>
                                                        <option value="600">Khalifa City - SE40</option>
                                                        <option value="601">Khalifa City - SE41</option>
                                                        <option value="602">Khalifa City - SE42</option>
                                                        <option value="603">Khalifa City - SE43</option>
                                                        <option value="604">Khalifa City - SE44</option>
                                                        <option value="605">Khalifa City - SE5</option>
                                                        <option value="606">Khalifa City - SE6</option>
                                                        <option value="607">Khalifa City - SW1</option>
                                                        <option value="608">Khalifa City - SW11</option>
                                                        <option value="609">Khalifa City - SW12</option>
                                                        <option value="610">Khalifa City - SW13</option>
                                                        <option value="611">Khalifa City - SW14</option>
                                                        <option value="612">Khalifa City - SW15</option>
                                                        <option value="613">Khalifa City - SW16</option>
                                                        <option value="614">Khalifa City - SW2</option>
                                                        <option value="615">Khalifa City - SW3</option>
                                                        <option value="616">Khalifa City - SW4</option>
                                                        <option value="617">Khalifa City - SW5</option>
                                                        <option value="618">Khalifa City - SW6</option>
                                                        <option value="619">Abu Dhabi International Airport</option>
                                                        <option value="620">Al Forsan Village</option>
                                                        <option value="621">Al Raha Beach</option>
                                                        <option value="622">Al Raha Gardens</option>
                                                        <option value="623">Yas Island</option>
                                                        <option value="624">Al Muneera</option>
                                                        <option value="625">Al Matar</option>
                                                        <option value="626">Masdar City</option>
                                                        <option value="627">Taweelah</option>
                                                        <option value="628">Abu Al Habel Island</option>
                                                        <option value="629">Al Bandar</option>
                                                        <option value="630">Al Jubail Island</option>
                                                        <option value="631">Al Lissaily</option>
                                                        <option value="632">Al Rayyana</option>
                                                        <option value="633">Al Seef</option>
                                                        <option value="634">Al Zeina</option>
                                                        <option value="635">Fahid Island</option>
                                                        <option value="636">Golf Gardens</option>
                                                        <option value="637">Watani Villas</option>
                                                        <option value="638">Al Buteen</option>
                                                        <option value="639">Al Khalidiyah</option>
                                                        <option value="640">Corniche</option>
                                                        <option value="641">Saadiyat Island</option>
                                                        <option value="642">Al Hosn</option>
                                                        <option value="643">Al Khubeirah</option>
                                                        <option value="644">Al Manhal</option>
                                                        <option value="645">Al Zahraa</option>
                                                        <option value="646">Dolphin Island</option>
                                                        <option value="647">Lulu Island</option>
                                                        <option value="648">Qasr Al Amouage</option>
                                                        <option value="649">Al Baladiya</option>
                                                        <option value="650">Al Danah (Madinat Zayed)</option>
                                                        <option value="651">Al Muroor</option>
                                                        <option value="652">Al Nahyan</option>
                                                        <option value="653">Al Mina</option>
                                                        <option value="654">Madinat Zayed</option>
                                                        <option value="655">Al Reem Island</option>
                                                        <option value="656">Al Reem Island East</option>
                                                        <option value="657">Al Maryah Island</option>
                                                        <option value="658">Al Markaziyah</option>
                                                        <option value="659">Al Markaziyah (west)</option>
                                                        <option value="660">Al Dana</option>
                                                        <option value="661">Al Dhafrah</option>
                                                        <option value="662">Al Zahiyah (Tourist Club)</option>
                                                        <option value="663">Al Gurm</option>
                                                        <option value="664">Al Wahdah</option>
                                                        <option value="665">Zayed City</option>
                                                        <option value="666">Al Aman</option>
                                                        <option value="667">Al Ittihad</option>
                                                        <option value="668">Sas Al Nakhl</option>
                                                        <option value="669">Sas Al Nakhl Village</option>
                                                        <option value="670">Al Karamah</option>
                                                        <option value="671">Al Mushrif</option>
                                                        <option value="672">Al Madina Al Riyadiya</option>
                                                        <option value="673">Abu Dhabi Gate City</option>
                                                        <option value="674">Al Maqta - Abu Dhabi City</option>
                                                        <option value="675">Al Rowdah</option>
                                                        <option value="676">Al Safarat</option>
                                                        <option value="677">Zayed Military City</option>
                                                        <option value="678">Qasr Al Shatie</option>
                                                        <option value="679">Al Hudayriat Island</option>
                                                        <option value="680">Al Hudayriat Island West</option>
                                                        <option value="681">Al Mazoon</option>
                                                        <option value="682">Al Mussala</option>
                                                        <option value="683">Al Rehhan</option>
                                                        <option value="684">Al Tabbiyah</option>
                                                        <option value="685">Hadbat Al Zaafran</option>
                                                        <option value="686">Mangrove Village</option>
                                                        <option value="687">Seashore Villas</option>
                                                        <option value="688">Al Dhafra (Al Gharbia)</option>
                                                        <option value="689">Abu Al Abyadh Island</option>
                                                        <option value="690">Al Ruwais</option>
                                                        <option value="691">Liwa</option>
                                                        <option value="692">Ghayathi</option>
                                                        <option value="693">Gheweifat</option>
                                                        <option value="694">Habshan</option>
                                                        <option value="695">Tarif</option>
                                                        <option value="696">Hamim</option>
                                                        <option value="697">Al Dabbaiya</option>
                                                        <option value="698">Al Mirfa</option>
                                                        <option value="699">Barakah</option>
                                                        <option value="700">Bayah Al Sila</option>
                                                        <option value="701">Baynunah</option>
                                                        <option value="702">Bida Hazaah</option>
                                                        <option value="703">Bida Mutawwa</option>
                                                        <option value="704">Umm Al Ashtan</option>
                                                        <option value="705">Abu Al Sayayif</option>
                                                        <option value="706">Abu Awanah</option>
                                                        <option value="707">Abu Munther</option>
                                                        <option value="708">Al Aryam Island</option>
                                                        <option value="709">Al Fathiya</option>
                                                        <option value="710">Al Hamra</option>
                                                        <option value="711">Al Harmia</option>
                                                        <option value="712">Al Hujaimah</option>
                                                        <option value="713">Al Khis</option>
                                                        <option value="714">Al Shuwaihat</option>
                                                        <option value="715">Al Talfaha</option>
                                                        <option value="716">Al Yaarya</option>
                                                        <option value="717">Asab</option>
                                                        <option value="718">Bu Hasa</option>
                                                        <option value="719">Istaihah</option>
                                                        <option value="720">Jabel Al Dhannah</option>
                                                        <option value="721">Maharaka</option>
                                                        <option value="722">Al Marabaa</option>
                                                        <option value="723">Radaim</option>
                                                        <option value="724">Al Bahya</option>
                                                        <option value="725">Shahama</option>
                                                        <option value="726">Al Rahba</option>
                                                        <option value="727">Al Shaleela</option>
                                                        <option value="728">Al Samha</option>
                                                        <option value="729">Al Sheleilah Island North</option>
                                                        <option value="730">Al Sheleilah Island South</option>
                                                        <option value="731">Qasr El Bahr</option>
                                                        <option value="732">KIZAD Area A</option>
                                                        <option value="733">KIZAD Area B</option>
                                                        <option value="734">Abu Mureikhah</option>
                                                        <option value="735">Al Ghadeer Village</option>
                                                        <option value="736">Al Hanjurah</option>
                                                        <option value="737">Al Jarf</option>
                                                        <option value="738">Al Jarf (Hisam Al Ghabat)</option>
                                                        <option value="739">Al Razeen</option>
                                                        <option value="740">Al Rumaila</option>
                                                        <option value="741">Al Sader</option>
                                                        <option value="742">Al Sammaliyyah Island</option>
                                                        <option value="743">Al Thurayya</option>
                                                        <option value="744">Al Zubarah Island</option>
                                                        <option value="745">Ghanadhah</option>
                                                        <option value="746">Ghantoot</option>
                                                        <option value="747">Hydra Village</option>
                                                        <option value="748">Warsan Farms</option>
                                                        <option value="749">Al Falah</option>
                                                        <option value="750">Shakbout City 1</option>
                                                        <option value="751">Shakbout City 10</option>
                                                        <option value="752">Shakbout City 11</option>
                                                        <option value="753">Shakbout City 12</option>
                                                        <option value="754">Shakbout City 13</option>
                                                        <option value="755">Shakbout City 14</option>
                                                        <option value="756">Shakbout City 15</option>
                                                        <option value="757">Shakbout City 16</option>
                                                        <option value="758">Shakbout City 17</option>
                                                        <option value="759">Shakbout City 18</option>
                                                        <option value="760">Shakbout City 19</option>
                                                        <option value="761">Shakbout City 2</option>
                                                        <option value="762">Shakbout City 20</option>
                                                        <option value="763">Shakbout City 21</option>
                                                        <option value="764">Shakbout City 22</option>
                                                        <option value="765">Shakbout City 23</option>
                                                        <option value="766">Shakbout City 24</option>
                                                        <option value="767">Shakbout City 25</option>
                                                        <option value="768">Shakbout City 26</option>
                                                        <option value="769">Shakbout City 27</option>
                                                        <option value="770">Shakbout City 28</option>
                                                        <option value="771">Shakbout City 29</option>
                                                        <option value="772">Shakbout City 3</option>
                                                        <option value="773">Shakbout City 30</option>
                                                        <option value="774">Shakbout City 31</option>
                                                        <option value="775">Shakbout City 4</option>
                                                        <option value="776">Shakbout City 5</option>
                                                        <option value="777">Shakbout City 6</option>
                                                        <option value="778">Shakbout City 7</option>
                                                        <option value="779">Shakbout City 8</option>
                                                        <option value="780">Shakbout City 9</option>
                                                        <option value="781">Al Falah City</option>
                                                        <option value="1680">Al Wathba</option>
                                                        <option value="1681">Al Wathba military</option>
                                                        <option value="1682">Al Moazaz</option>
                                                        <option value="1683">Mazyad Mall</option>
                                                        <option value="1684">Dalma Mall</option>
                                                        <option value="1685">Abu Dhabi University</option>
                                                        <option value="1686">Al Estiqlal St</option>
                                                        <option value="1687">Electra St</option>
                                                        <option value="1688">Airport St</option>
                                                        <option value="1689">Al Nasr St</option>
                                                        <option value="1690">Hemdan St</option>
                                                        <option value="1691">Khalifa.St</option>
                                                        <option value="1692">Liwa St</option>
                                                        <option value="1693">Marina Mall</option>
                                                        <option value="1694">Sheikh Khalifa Energy Complex</option>
                                                        <option value="1695">Abu Dhabi Mall</option>
                                                        <option value="1696">Al Zaafrana</option>
                                                        <option value="1697">Al Maamourah</option>
                                                        <option value="1698">Al Wahda Mall</option>
                                                        <option value="1699">Barhoz</option>
                                                        <option value="1700">Al Mina St</option>
                                                        <option value="1701">Al Najda St</option>
                                                        <option value="1702">Al Wahda.St</option>
                                                        <option value="1703">Dalma St</option>
                                                        <option value="1704">Defence St</option>
                                                        <option value="1705">Al Jawazat St</option>
                                                        <option value="1706">Al Saada St</option>
                                                        <option value="1707">Al Salaam St</option>
                                                        <option value="1708">Al Falah St</option>
                                                        <option value="1709">Carrefour</option>
                                                        <option value="1710">Police Academy</option>
                                                        <option value="1711">Al Buteen Airport</option>
                                                        <option value="1712">Khalifa Park</option>
                                                        <option value="1713">Burjeel Hospital</option>
                                                        <option value="1714">Gold Center</option>
                                                        <option value="1715">Ministries Complex</option>
                                                        <option value="1716">Department of Education and Knowledge</option>
                                                        <option value="1717">Ministry of Interior</option>
                                                        <option value="1718">Ministry of Foreign Affairs &amp;amp; International Cooperation</option>
                                                        <option value="1719">Zayed Hospital</option>
                                                        <option value="1720">Khalifa.Hospital</option>
                                                        <option value="1721">Imperial Hospital</option>
                                                        <option value="1722">Officer City</option>
                                                        <option value="1723">Between The Bridge</option>
                                                        <option value="1724">Om Al Naar</option>
                                                        <option value="1725">Al Khaleej Al Arabi St</option>
                                                        <option value="1726">Zayed Mosque</option>
                                                        <option value="1727">Al Manaser</option>
                                                        <option value="1728">Al Moharba</option>
                                                        <option value="1729">Al Zaab</option>

                                                    </select>
                                                    <br>
                                                    <label for="txtRecipientMobile2" class="ml-auto">Area</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div id="street" class="md-form col-6">
                                                    <input id="street" name="street" type="text" class="validate form-control" required="">
                                                    <label for="txtStreetAddress" class="ml-auto">Street Address <i class="fa fa-sm fa-asterisk text-danger"></i></label>
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="chkIsManualAddress" data-toggle="modal" data-target="#map_modal">
                                                    <label class="form-check-label" for="chkIsManualAddress">Choose From Map</label>
                                                </div>
                                            </div>

                                            <

                                            <input type="hidden" id="hdnReceiverLocationLat" value="0">
                                            <input type="hidden" id="hdnReceiverLocationLang" value="0">
                                            <div class="step-actions">
                                                <button class="waves-effect waves-dark btn btn-sm btn-primary next-step" id="btnReciverContinue">CONTINUE</button>
                                                <button class="waves-effect waves-dark btn btn-sm btn-secondary previous-step">BACK</button>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="step">
                                        <div data-step-label="Step-3" class="step-title waves-effect waves-dark">Package Information</div>
                                        <div class="step-new-content">
                                            <div class="row">
                                                <div class="md-form col-md-3 ml-auto pt-md-4">
                                                    <input id="shipper_ref" name="shipper_ref" type="text" class="form-control">
                                                    <label for="txtShipperReferenceNumber" class="ml-auto pt-md-4">Shipper Reference (Optional)</label>
                                                </div>

                                                <div class="md-form col-md-3 ml-auto">
                                                    <div class="select-wrapper mdb-select md-form colorful-select dropdown-primary validate">
                                                        <span class="caret">▼</span>
                                                        <select name="service_type" id="service_type">
                                                            <option value="0">Choose Service Type</option>
                                                            <option value="1">NDD - Next Day Delivery</option>
                                                            <option value="2">SDD - Same Day Delivery</option>
                                                            <option value="3">BS - Bullet Service</option>
                                                            <option value="4">RS - Return Service</option>
                                                        </select>
                                                    </div>

                                                    <label for="txtRecipientMobile2" class="ml-auto">Service Type</label>
                                                </div>
                                                <div class="md-form col-md-3 ml-auto">

                                                    <select id="package_type" name="package_type" class="mdb-select md-form" required="" searchable="Search here.." style="position: absolute; top: 1rem; left: 0px; height: 0px; width: 0px; opacity: 0; padding: 0px; pointer-events: none; display: inline!important;" tabindex="-1">
                                                        <option value="0">Choose Package Type</option>
                                                        <option value="1">Small Box Size</option>
                                                        <option value="2">Medium Box Size</option>
                                                        <option value="3">Large Box Size</option>
                                                        <option value="4">Extra Large Box Size</option>
                                                        <option value="5">Tv Size</option>
                                                        <option value="6">Tube Size</option>
                                                        <option value="7">Document Size</option>
                                                        <option value="8">Phone Size</option>
                                                    </select></div>

                                                <label for="txtRecipientMobile2" class="ml-auto">Packege Type</label>
                                            </div>
                                            <div class="md-form col-md-3 ml-auto mt-5">
                                                <input id="_cash" name="_cash" type="number" required="" class="form-control validate">
                                                <label for="txtCostOfGoods" class="ml-auto">Cash on Delivery</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="md-form col-md-2 ml-auto">
                                                <input id="txtLength" name="_length" type="number" class="form-control">
                                                <label for="txtLength" class="ml-auto">Length <sup>cm</sup></label>
                                            </div>
                                            <div class="md-form col-md-2 ml-auto">
                                                <input id="_width" name="_width" type="number" class="form-control">
                                                <label for="txtWidth" class="ml-auto">Width <sup>cm</sup></label>
                                            </div>
                                            <div class="md-form col-md-2 ml-auto">
                                                <input id="_height" name="_height" type="number" class="form-control">
                                                <label for="txtHeight" class="ml-auto">Height <sup>cm</sup></label>
                                            </div>
                                            <div class="md-form col-md-3 ml-auto">
                                                <input id="_actualWeight" name="_actualWeight" type="number" class="form-control">
                                                <label for="txtActualWeight" class="ml-auto">Actual Weight <sup>kg</sup></label>
                                            </div>
                                            <div class="md-form col-md-3 ml-auto">
                                                <input id="_chargeable" name="_chargeable" type="number" class="form-control">
                                                <label for="txtChargeable" class="ml-auto">Chargeable Weight <sup>kg</sup></label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="md-form col-md-6 ml-auto">
                                                <input id="instruction" name="instruction" type="text" class="form-control">
                                                <label for="txtRecipientRemarks" class="ml-auto">Instructions (Optional)</label>
                                            </div>
                                            <div class="md-form col-md-6 ml-auto">
                                                <input id="description" name="description" type="text" class="form-control">
                                                <label for="txtDescription" class="ml-auto">Description (Optional)</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="md-form col-md-6">
                                                <input id="txtNoOfPieces" name="txtNoOfPieces" type="text" value="1" class="validate form-control" required="">
                                                <label for="txtNoOfPieces" class="ml-auto active">No. Of Pieces <sup>(Enter number between 1 - 5)</sup></label>
                                            </div>
                                        </div>
                                        <div class="row" id="divPiecesDescription">
                                            <div class="col-12">
                                                <div id="_1">
                                                    <input id="hdnPieceID_1" type="hidden" value="0">
                                                    <div class="md-form mb-4 col-md-6 pink-textarea active-pink-textarea">
                                                        <textarea id="cod_amount" name="cod_amount" class="md-textarea form-control" rows="1"></textarea>
                                                        <label for="txtPieceDesc_1">Tell us about 1<sup>st</sup> Piece...</label>
                                                    </div>
                                                </div>
                                                <div id="_2" style="display:none">
                                                    <input id="hdnPieceID_2" type="hidden" value="0">
                                                    <div class="md-form mb-4 col-6 pink-textarea active-pink-textarea">
                                                        <textarea id="txtPieceDesc_2" class="md-textarea form-control" rows="2"></textarea>
                                                        <label for="txtPieceDesc_2">Tell us about 2<sup>nd</sup> Piece...</label>
                                                    </div>
                                                </div>
                                                <div id="_3" style="display:none">
                                                    <input id="hdnPieceID_3" type="hidden" value="0">
                                                    <div class="md-form mb-4 col-6 pink-textarea active-pink-textarea">
                                                        <textarea id="txtPieceDesc_3" class="md-textarea form-control" rows="2"></textarea>
                                                        <label for="txtPieceDesc_3">Tell us about 3<sup>rd</sup> Piece...</label>
                                                    </div>
                                                </div>
                                                <div id="_4" style="display:none">
                                                    <input id="hdnPieceID_4" type="hidden" value="0">
                                                    <div class="md-form mb-4 col-6 pink-textarea active-pink-textarea">
                                                        <textarea id="txtPieceDesc_4" class="md-textarea form-control" rows="2"></textarea>
                                                        <label for="txtPieceDesc_4">Tell us about 4<sup>th</sup> Piece...</label>
                                                    </div>
                                                </div>
                                                <div id="_5" style="display:none">
                                                    <input id="hdnPieceID_5" type="hidden" value="0">
                                                    <div class="md-form mb-4 col-6 pink-textarea active-pink-textarea">
                                                        <textarea id="txtPieceDesc_5" class="md-textarea form-control" rows="2"></textarea>
                                                        <label for="txtPieceDesc_5">Tell us about 5<sup>th</sup> Piece...</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="step-actions">
                                            <button class="waves-effect waves-dark btn btn-sm btn-primary next-step" id="btnPackageInfoContinue">CONTINUE</button>
                                            <button class="waves-effect waves-dark btn btn-sm btn-secondary previous-step">BACK</button>
                                        </div>
                            </div>
                            </li>
                            <li class="step" data-last="true">
                                <div data-step-label="Step-4" class="step-title waves-effect waves-dark">Complete &amp; Finish</div>
                                <div class="step-new-content">
                                    Finish!
                                    <div class="step-actions">
                                        <button id="btnPlaceOrder" class="waves-effect waves-dark btn btn-sm btn-success mt-4" type="submit">SUBMIT</button>
                                        <button id="btnPlaceOrderBack" class="waves-effect waves-dark btn btn-sm btn-secondary ml-1 mt-4 previous-step" type="button">BACK</button>


                                    </div>
                                    <!-- <button class="waves-effect waves-dark btn btn-sm btn-primary mt-4" id="btnPrintAirWayBill" >Print AirWay Bill</button>
                                    <button class="waves-effect waves-dark btn btn-sm btn-danger mt-4" id="btnNewPlaceOrder" >New Place Order</button> -->
                                </div>
                            </li>
                            </ul>

                            <?php echo form_close(); ?>
                            <!-- </form> -->
                        </div>



                        <input type="hidden" id="hdnShipmentID" value="0">

                        <div class="modal" id="map_modal" role="dialog">
                            <!-- start here  -->

                            <!-- end here -->
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content" id="back" style="background-color:white;color:black">
                                    <div class="modal-header">
                                        <h4>Map Address</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-horizontal">
                                            <div class="form-group">
                                                <label>Search Location: </label>
                                                <input style="background-color: gray;color:black" type="text" class="form-control" id="txtSearchAddress">
                                            </div>
                                            <div class="row">
                                            <div class="col-md-12">
                                            <div id="map" style="width: 870px;height:500px"> </div>
                                            </div>
                                            </div>

                                            <div class="m-t-small">
                                                <!-- <input type="text" class="form-control" style="width: 110px" hidden="" id="LocationLat">
                                                <input type="text" class="form-control" style="width: 110px" hidden="" id="LocationLang"> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <a class="btn btn-danger waves-effect waves-light" data-dismiss="modal">Close</a>
                                        <a id="btnMapSelect" class="btn btn-success waves-effect waves-light" data-dismiss="modal">Select</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <input type="hidden" class="form-control" name="city" id="city">
                        <input type="hidden" class="form-control" name="country" id="country"> -->
                    </div>
                </div>

            </div>
        </div>


    </div>
</div>
</div>
<script>
    
       // Note: This example requires that you consent to location sharing when
      // prompted by your browser. If you see the error "The Geolocation service
      // failed.", it means you probably did not give permission for the browser to
      // locate you.
      let map, infoWindow;

      function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
          center: { lat: -34.397, lng: 150.644 },
          zoom: 6,
        });
        infoWindow = new google.maps.InfoWindow();
        const locationButton = document.createElement("button");
        locationButton.textContent = "Pan to Current Location";
        locationButton.classList.add("custom-map-control-button");
        map.controls[google.maps.ControlPosition.TOP_CENTER].push(
          locationButton
        );
        locationButton.addEventListener("click", () => {
          // Try HTML5 geolocation.
          if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(
              (position) => {
                const pos = {
                  lat: position.coords.latitude,
                  lng: position.coords.longitude,
                };
                infoWindow.setPosition(pos);
                infoWindow.setContent("Location found.");
                infoWindow.open(map);
                map.setCenter(pos);
              },
              () => {
                handleLocationError(true, infoWindow, map.getCenter());
              }
            );
          } else {
            // Browser doesn't support Geolocation
            handleLocationError(false, infoWindow, map.getCenter());
          }
        });
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(
          browserHasGeolocation
            ? "Error: The Geolocation service failed."
            : "Error: Your browser doesn't support geolocation."
        );
        infoWindow.open(map);
      }
</script>