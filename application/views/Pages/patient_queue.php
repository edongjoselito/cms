                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                <a data-toggle="modal" data-field="" data-id="" class="open-AddBookDialog btn btn-primary" href="#addBookDialog">+ Add New Appointment</a>
                                
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body table-responsive">
                                        
                                        
                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                            <thead>
                                                <tr>
                                                    <th>DOA</th> 	
                                                    <th>FULL NAME</th> 	
                                                    <th>AGE</th> 	
                                                    <th>EDD</th> 	
                                                    <th>LMP</th> 	
                                                    <th>B P</th> 	
                                                    <th>WEIGHT</th> 	
                                                    <th>G</th> 	
                                                    <th>A</th> 	
                                                    <th>P</th> 	
                                                    <th>L</th> 	
                                                    <th>TRANSACTION</th> 	
                                                    <th>MANAGE</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php foreach($data as $row){ 
                                                    $p = $this->Page_model->one_cond_get_single_row('patients','id',$row->patient_id);
                                                    ?>
                                                <tr>
                                                    <td><?= strtoupper($row->visit_date); ?></td>
                                                    <td><?= strtoupper($p->first_name.' '.$p->middle_name.' '.$p->last_name); ?></td>
                                                    <td><?= strtoupper($row->age); ?></td>
                                                    <td><?= strtoupper($row->date_of_delivery); ?></td>
                                                    <td><?= strtoupper($row->lmp); ?></td>
                                                    <td><?= strtoupper($row->bp); ?></td>
                                                    <td><?= strtoupper($row->weight); ?></td>
                                                    <td><?= strtoupper($row->gravida); ?></td>
                                                    <td><?= strtoupper($row->abortion); ?></td>
                                                    <td><?= strtoupper($row->parity); ?></td>
                                                    <td><?= strtoupper($row->living); ?></td>
                                                    <td><?= strtoupper($row->transaction); ?></td>
                                                    <td>
                                                        <a href="diagnose/<?= $row->id; ?>" class="btn btn-primary">DIAGNOSE</a> 
                                                        <a href="#" class="btn btn-success" >EDIT</a> 
                                                        <a href="#" class="btn btn-danger" onclick="return confirm('Are you sure?')">DELETE</a>
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <div id="addBookDialog" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="myModalLabel">Search Patient</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <?= form_open('Pages/appointment/'); ?>
                                                        <div class="form-group col-md-12">
                                                            <label >Patient Name</label>

                                                        <select class="form-control" name="name" data-toggle="select2">
                                                            <?php foreach($patient as $row){ ?>
                                                                    <option value="<?= $row->id; ?>"><?= strtoupper($row->last_name.', '.$row->first_name.' '.mb_substr($row->middle_name, 0, 1)); ?></option>
                                                                <?php } ?>
                                                        </select>
                                                        </div>
 

                                                    </div>
                                                    <div class="modal-footer">
                                                        <input type="submit" name="submit" class="btn btn-primary waves-effect waves-light" value="Search Patient" />
                                                    </div>
                                                    </form>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>

                        