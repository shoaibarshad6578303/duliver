<div class="modal-body">
     
        <div class="row">
        <div class="col-md-3">
               <div class="form-group">
                     <label for="driver_code">Driver Code </label>
                     <div>
                     <input type="hidden" name="id" id="id"  value="<?= isset($client) ? $client['id'] : ''  ?>" class="form-control">

                        <input disabled type="text" name="driver_code_copy" id="driver_code_copy"  value="<?= isset($client) ? $client['driver_code'] : ''  ?>" class="form-control">
                        <input type="hidden" name="driver_code" id="driver_code"  value="<?= isset($client) ? $client['driver_code'] : ''  ?>" class="form-control">

                     </div>
                  </div>
               </div>
               
              
               <div class="col-md-3">
               <div class="form-group">
                     <label for="name">Employee Name </label>
                     <div>
                        <input disabled type="text" name="name_copy" id="name_copy"  value="<?=isset($client) ? $client['name']: '' ?>" class="form-control">
                        <input type="hidden" name="name" id="name"  value="<?=isset($client) ? $client['name']: '' ?>" class="form-control">
                     
                     </div>
                  </div>
               </div>
             
               <div class="col-md-3">
               <div class="form-group">
                     <label for="phone">Phone </label>
                     <div>
                        <input disabled type="text" name="phone_copy" id="phone_copy"  value="<?=isset($client) ? $client['phone'] : ''  ?>" class="form-control">
                        <input type="hidden" name="phone" id="phone"  value="<?=isset($client) ? $client['phone'] : ''  ?>" class="form-control">
                        
                     </div>
                  </div>
               </div>
             
              
               <div class="col-md-6">
               <div class="form-group">
                     <label for="employee_code">City</label>
                     <div>
                        <select name="city" id="city" class="form-control">
                           <!-- <option selected disabled>Please, select city</option> -->
                           <option><?=isset($client) ? $client['city'] : ''  ?></option>
                           <option >Abu Dubai</option>
                           <option >Dubai</option>
                           <option >Sharjha</option>
                        </select>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
               <div class="form-group">
                     <label for="employee_code">Zone</label>
                     <div>
                        <select name="zone" id="zone" class="form-control">
                        <option><?=isset($client) ? $client['zone'] : ''  ?></option>
                           <option >ABD 1</option>
                           <option >ABD 2</option>
                           <option >ABD 3</option>
                        </select>
                     </div>
                  </div>
               </div>
      <div class="col-md-12">
             <h4> System Authentication </h4>
          <hr>
         </div>

         <div class="col-md-3">
               <div class="form-group">
                     <label for="user_name">App User Name </label>
                     <div>
                        <input type="email" name="user_name" id="user_name"  value="<?=(isset($client))? $client['user_name']:'';?>" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
               <div class="form-group">
                     <label for="password">App Password </label>
                     <div>
                        <input type="password" name="password" id="password"  value="" class="form-control">
                     </div>
                  </div>
               </div>

               <div class="col-md-3">
               <div class="form-group">
                     <label for="confirm_password">App Confirm Password </label>
                     <div>
                        <input type="password" name="confirm_password" id="confirm_password"  value="" class="form-control">
                     </div>
                  </div>
               </div>
          </div>
         
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update Driver</button>
      </div>
      