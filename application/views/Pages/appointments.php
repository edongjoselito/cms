 
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->


                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-4"><?= $title; ?></h4>

                                        <?= validation_errors(); ?>

                                        <?php 
                                            $attributes = array('class' => 'parsley-examples');
                                            echo form_open('Pages/appointment_add/', $attributes);
                                        ?>

                                        <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <input type="hidden" name="p_id" value="<?= $data->id; ?>">
                                                    <label for="inputUsername" class="col-form-label">First Name</label>
                                                    <input type="text" readonly value="<?= strtoupper($data->first_name); ?>" required class="form-control" name="first_name" placeholder="First Name" />
                                                </div>

                                                <div class="form-group col-md-4">
                                                    <label for="inputUsername" class="col-form-label">Middle Name</label>
                                                    <input required type="text" readonly value="<?= strtoupper($data->middle_name); ?>" class="form-control" name="middle_name" placeholder="Middle Name" />
                                                </div>

                                                <div class="form-group col-md-4">
                                                    <label for="inputUsername" class="col-form-label">Last Name</label>
                                                    <input required type="text" readonly value="<?= strtoupper($data->last_name); ?>" class="form-control" name="last_name" placeholder="Last Name" />
                                                </div>
                                        </div> 
                                        

                                        <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="inputUsername" class="col-form-label">Birthday</label>
                                                    <input required type="text" readonly class="form-control" value="<?= strtoupper($data->birthday); ?>" name="birthday" placeholder="Birthday" />
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputUsername" class="col-form-label">Age</label>
                                                    <input required type="text" value="" name="age" class="form-control" placeholder="Age" />
                                                </div>
                                            
                                        </div>

                                        <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="inputUsername" class="col-form-label">Occupation</label>
                                                    <input required type="text" readonly class="form-control" value="<?= strtoupper($data->occupation); ?>" name="occupation" placeholder="Occupation" />
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputUsername" class="col-form-label">Contact No.</label>
                                                    <input required type="text" readonly class="form-control" value="<?= strtoupper($data->contact); ?>" name="contact" placeholder="Contact No." />
                                                </div>
                                        </div>
                                        <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label for="inputUsername" class="col-form-label">Complete Address</label>
                                                    <input required type="text" readonly value="<?= strtoupper($data->sitio.' '.$data->barangay.' '.$data->city_mun.' '.$data->province); ?>" class="form-control" name="address" placeholder="Sitio" />  
                                                </div>
                                        </div>

                                        <div class="col-md-6">
                                                <h4 class="header-title">Patient status:</h4>
                                        <div class="mt-3">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" onclick="refer()" id="customRadio1" name="ref" value="0" checked class="custom-control-input"/>
                                                        <label class="custom-control-label text-xs" for="customRadio1">Walk In</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" onclick="referral()" id="customRadio2" name="ref" value="1" class="custom-control-input" />
                                                        <label class="custom-control-label text-xs" for="customRadio2">Referral</label>
                                                    </div>
                                                </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                               
                                                <select required class="form-control" id="company" style="display:none; margin-top:10px" type="text" name="ref_id">
                                                    <?php 
                                                         foreach($patient as $row){ 
                                                          echo "<option value='";
                                                          echo $row->id;
                                                          echo "'>";
                                                          echo $row->company."</option>\n";
                                                         }
                                                      ?> 
                                                    
                                                    </select>

                                            </div>
                                        </div>



                                        <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputUsername" class="col-form-label">Blood Presure</label>
                                                    <input type="text" required class="form-control" name="bp" value="" placeholder="Blood Presure" />
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputUsername" class="col-form-label">Weight</label>
                                                    <input type="text" required class="form-control" name="weight" value="" placeholder="Weight" />
                                                </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <input type='text' required class='form-control' name='lmp' id='datepic1' readonly placeholder="LMP">
                                            </div> 
                                                <input id=cyVal type='hidden' value="28" class='easypositive' onkeyup='checnum(this)' required>
                                            
                                            <div class="form-group col-md-4">
                                                <input type=button  class="btn btn-primary" value='Calculate' onclick=calculate()>
                                                <input  class="btn btn-primary" type=reset value=Reset>
                                            </div>
                                    </div>

                                    <input id=weekVal type='hidden' class='easypositive short2' readonly name="no_of_weeks" required placeholder="No. of Weeks" />
                                    <input id=dayVal type='hidden' class='easypositive short2' readonly name="no_of_days" required placeholder="No. of days" />

                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="inputUsername" class="col-form-label">Estimated Date of Delivery</label>
                                            <input type="text" id=esDate name="date_of_delivery" class='form-control' readonly  required />
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="inputUsername" class="col-form-label">Gravida</label>
                                            <input required type="text" name="gravida" class='form-control' required />
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="inputUsername" class="col-form-label">Abortion</label>
                                            <input required type="text" name="abortion" class='form-control' required />
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="inputUsername" class="col-form-label">Parity</label>
                                            <input required type="text" name="parity" class='form-control' required />
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="inputUsername" class="col-form-label">Living</label>
                                            <input required type="text" name="living" class='form-control' required />
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <textarea class="form-control" rows="5" id="example-textarea" name="transaction" placeholder="Transaction"></textarea>   
                                        </div>
                                    </div>  
                                        
                                        

                                        <div class="form-group">
                                                    <input type="submit" name="submit" value="New Appointment" class="btn btn-primary waves-effect waves-light mr-1" />
                                                
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        
                       