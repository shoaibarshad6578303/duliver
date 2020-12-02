<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<script type="text/javascript">
    var country = '<?= json_encode($countries) ?>';
    // console.log(country);
</script>



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

                                                <select name="country_id" id="country_id" class="form-control" required>
                                       <option <?= (!isset($client)) ? 'selected' : '' ?> disabled>Select Country</option>
                                       <?php
                                    
                                

                                       foreach ($countries as $country_key => $country) {
                                       ?>
                                          <option value="<?=$country_key ?>" <?=(isset($client)) ? 'selected' : '' ?>><?=$country['name'] ?></option>
                                       <?php

                                       }

                                       ?>

                                    </select>
                                                    <br>
                                                    <label for="txtRecipientMobile2" class="ml-auto">Country</label>
                                                </div>
                                                <div class="md-form col-md-4">
                                                <select name="city" id="city" class="form-control" required>
                                       
                                       <option <?= (!isset($client)) ? 'selected' : '' ?> disabled>Select City</option>

                                       <!-- <option <?= (isset($client)) ? 'selected' : '' ?> disabled>Select City</option> -->

                                    </select>
                                                    <br>
                                                    <label for="txtRecipientMobile2" class="ml-auto">City</label>
                                                    <!-- <input id="txtCity" name="txtCity" type="text" class="validate form-control inputHidden" required=""> -->
                                                </div>
                                                <div  class="md-form col-md-4">
                                                <select name="area" id="area" class="form-control" required>
                                                   <option <?= (!isset($client)) ? 'selected' : '' ?> disabled>Select Area</option>
                                                </select>
                                                    <br>
                                                    <label for="txtRecipientMobile2" class="ml-auto">Area</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="md-form col-6">
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

                                            <!-- < -->

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

<!-- model -->
<div class="modal" id="map_modal" role="dialog">
                            <!-- start here  -->

                            <!-- end here -->
                            <div class="modal-dialog modal-lg" style="background-color:white;color:black">
                                <div class="" >
                                    <div class="modal-header">
                                        <h4>Map Address</h4>
                                    </div>
                                    <div class="modal-body" >
                                        <!-- <div class="form-horizontal"> -->
                                            <div class="form-group">
                                                <label>Search Location: </label>
                                                <!-- <input style="background-color: gray;color:black" type="text" class="form-control" id="pac-input"> -->
                                                <!-- <input id="pac-input" class="controls" type="text" placeholder="Search Box" /> -->
                                                <div id="pac-container">
        <input id="pac-input" type="text" placeholder="Enter a location" />
      </div>
    </div>
    <div id="map" ></div>
    <div id="infowindow-content" >
      <img src="" width="50" height="16" id="place-icon" />
      <span id="place-name" class="title"></span><br />
      <span id="place-address"></span>
    </div>
 
    
    <!-- </div> -->
   
                                            </div>
                                            <div class="row">
                                            <div class="col-md-12">
                                                <input type="hidden" id="latitude" name="latitude"> 
                                                <input type="hidden" id="longitude" name="longitude"> 

                                            <!-- <div id="map" style="width: 870px;height:500px"> </div> -->
                                            </div>
                                            </div>

                                            <div class="m-t-small">
                                                <!-- <input type="text" class="form-control" style="width: 110px" hidden="" id="LocationLat">
                                                <input type="text" class="form-control" style="width: 110px" hidden="" id="LocationLang"> -->
                                            </div>
                                        <!-- </div> -->
                                    </div>
                                    <div class="modal-footer">
                                        <a class="btn btn-danger waves-effect waves-light" data-dismiss="modal">Close</a>
                                        <a id="btnMapSelect" class="btn btn-success waves-effect waves-light" data-dismiss="modal">Select</a>
                                    </div>
                                </div>
                            </div>
<!-- end model -->
 <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCS-DB39Kk-Z25C5GWymVGshXIALbjXPGY&callback=initMap&libraries=places&v=weekly" defer></script>

<script>


       // Note: This example requires that you consent to location sharing when
      // prompted by your browser. If you see the error "The Geolocation service
      // failed.", it means you probably did not give permission for the browser to
      // locate you.
      function initMap() {

    // const uluru = { lat: -25.344, lng: 131.036 };
  const map = new google.maps.Map(document.getElementById("map"), {
  
    center: { lat: 25.276987 , lng: 55.296249 },
    zoom: 13,
    // center: uluru,
  });

// for letlon
   
map.addListener("click", (mapsMouseEvent) => {
    // Close the current InfoWindow.
    // infoWindow.close();
    // Create a new InfoWindow.
    infoWindow = new google.maps.InfoWindow({
      position: mapsMouseEvent.latLng,
    });
    var latlong=mapsMouseEvent.latLng.toJSON();
    // console.log(latlong);

    // console.log(latlong.lat);
    // console.log(latlong.lng);

    // $("#latitude").val(latlong.lat);
    // $("#longitude").val(latlong.lng);

    // // start //

    // var leti=$('#latitude').val();
    //   var longi=$('#longitude').val();
  
    // console.log(leti);
    // console.log(longi);
       var country="";
       var city="";
       var area="";
       var street="";

       formatted_address="";

        
        $.ajax({
            url: 'https://maps.googleapis.com/maps/api/geocode/json?latlng='+latlong.lat+','+latlong.lng+'&key=AIzaSyCS-DB39Kk-Z25C5GWymVGshXIALbjXPGY',
           
            async:false,
            type: 'GET', // POST
            dataType: 'json',
            success: function(response) {

                console.log(response.results[0]);

                // street=response.results[0].address_components[0].long_name;  
                // area=response.results[0].address_components[1].long_name;  
                // city=response.results[0].address_components[2].long_name;  
                // country=response.results[0].address_components[4].long_name; 


              
                if(response.results[0].address_components[4].long_name== country.slug){

                }
              
                $('#street').val(response.results[0].address_components[0].long_name);
                

                $('#area').val(response.results[0].address_components[1].short_name== country.slug);
                $('#city').val(response.results[0].address_components[2].long_name);
                $('#country_id').val(response.results[0].address_components[4].long_name);

                // street=response.results[0].address_components[1].long_name;  
                // formatted_address =response.results[0].formatted_address;

                $('#pac-input').val(response.results[0].formatted_address);

                //   =response.results[0].address_components[1]
                // showCloseLocations(response.all_locations);
                // console.log ( response.results[0].address_components[1] + response.results[0].address_components[2] )
            }
        }); 

    infoWindow.setContent(
      JSON.stringify(mapsMouseEvent.latLng.toJSON(), null, 2)
    );
    // infoWindow.open(map);
  });

//

//   start here
     
infoWindow = new google.maps.InfoWindow();
  const locationButton = document.createElement("button");
  locationButton.textContent = "Pan to Current Location";
  locationButton.classList.add("custom-map-control-button");
  map.controls[google.maps.ControlPosition.TOP_CENTER].push(locationButton);

  locationButton.addEventListener("click", () => {  

//    console.log("Hello");
      //
     
    // Try HTML5 geolocation.
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(
        (position) => {
          const pos = {
            lat: position.coords.latitude,
            lng: position.coords.longitude,
          };
          console.log(pos);
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

//   end here

  const card = document.getElementById("pac-card");
  const input = document.getElementById("pac-input");
  map.controls[google.maps.ControlPosition.TOP_RIGHT].push(card);
  const autocomplete = new google.maps.places.Autocomplete(input);
  // Bind the map's bounds (viewport) property to the autocomplete object,
  // so that the autocomplete requests use the current map bounds for the
  // bounds option in the request.
  autocomplete.bindTo("bounds", map);
  // Set the data fields to return when the user selects a place.
  autocomplete.setFields(["address_components", "geometry", "icon", "name"]);
  const infowindow = new google.maps.InfoWindow();
  const infowindowContent = document.getElementById("infowindow-content");
  infowindow.setContent(infowindowContent);
  const marker = new google.maps.Marker({
    map,
    anchorPoint: new google.maps.Point(0, -29),
  });
  autocomplete.addListener("place_changed", () => {
    infowindow.close();
    marker.setVisible(false);
    const place = autocomplete.getPlace();

    if (!place.geometry) {
      // User entered the name of a Place that was not suggested and
      // pressed the Enter key, or the Place Details request failed.
      window.alert("No details available for input: '" + place.name + "'");
      return;
    }

    // If the place has a geometry, then present it on a map.
    if (place.geometry.viewport) {
      map.fitBounds(place.geometry.viewport);
    } else {
      map.setCenter(place.geometry.location);
      map.setZoom(17); // Why 17? Because it looks good.
    }
    marker.setPosition(place.geometry.location);
    marker.setVisible(true);
    let address = "";

    if (place.address_components) {
      address = [
        (place.address_components[0] &&
          place.address_components[0].short_name) ||
          "",
        (place.address_components[1] &&
          place.address_components[1].short_name) ||
          "",
        (place.address_components[2] &&
          place.address_components[2].short_name) ||
          "",
      ].join("");
    }
    infowindowContent.children["place-icon"].src = place.icon;
    infowindowContent.children["place-name"].textContent = place.name;
    infowindowContent.children["place-address"].textContent = address;
    infowindow.open(map, marker);
  });

  // Sets a listener on a radio button to change the filter type on Places
  // Autocomplete.
  function setupClickListener(id, types) {
    const radioButton = document.getElementById(id);
    radioButton.addEventListener("click", () => {
      autocomplete.setTypes(types);
    });
  }
  setupClickListener("changetype-all", []);
  setupClickListener("changetype-address", ["address"]);
  setupClickListener("changetype-establishment", ["establishment"]);
  setupClickListener("changetype-geocode", ["geocode"]);
  document
    .getElementById("use-strict-bounds")
    .addEventListener("click", function () {
      console.log("Checkbox clicked! New state=" + this.checked);
      autocomplete.setOptions({ strictBounds: this.checked });
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



$(function() {


$('#country_id').on('change', function() {

let cities = JSON.parse(country);

$.each(cities[$(this).val()]['cities'], function(index, item) {

   let o = new Option(item['name'], index);
   $(o).html(item['name']);
   $('#city').append(o);

});

});

    // function longandleti(){

    //   var leti=$('#latitude').val();
    //   var longi=$('#longitude').val();

  
    // console.log(leti);
    // console.log(longi);
        
    //     $.ajax({
    //         url: 'https://maps.googleapis.com/maps/api/geocode/json?latlng=leti,longi&key=AIzaSyCS-DB39Kk-Z25C5GWymVGshXIALbjXPGY',
           
    //         async:false,
    //         type: 'GET', // POST
    //         dataType: 'json',
    //         success: function(response) {
    //             console.log(response);  
    //             showCloseLocations(response.all_locations);
    //         }
    //     });
        
   

    // };
      

});


$('#country_id').on('change', function() {


let cities = JSON.parse(country);

$('#area').find('option').remove().end().append('<option value="" selected disabled>Select Area</option>').val('');

$('#city').find('option').remove().end().append('<option value="" selected disabled>Select City</option>').val('');


$.each(cities[$(this).val()]['#cities'], function(index, item) {
   let o = new Option(item['name'], index);
   $(o).html(item['name']);
   $('#city').append(o);

});

});


$('#city').on('change', function() {

let cities = JSON.parse(country);

$('#area').find('option').remove().end().append('<option value="" selected disabled>Select Area</option>').val('');

$.each(cities[$('#country_id').val()]['cities'][$(this).val()]['areas'], function(index, item) {
   let o = new Option(item, index);
   $(o).html(item);
   $('#area').append(o);

});

});


<?php



if (isset($client)) {

?>

// console.log("i am working here");

var cities = JSON.parse(country);
$.each(cities[$('#country_id').val()]['#cities'], function(index, item) {

   let o = new Option(item['name'], index);
   $(o).html(item['name']);
   $('#city').append(o);

});

$('#city').val('<?= ($client['city']) ?>');
$('#area').val('<?= ($client['area']) ?>');

<?php

}

?>

      // Create the search box and link it to the UI element.
    
</script>