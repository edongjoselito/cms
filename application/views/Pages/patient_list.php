                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <a class="btn btn-success" href="patient_add">New Patient</a>

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
                                                    <th>Full Name</th>
                                                    <th>Address</th>
                                                    <th style='text-align:center'>Manage</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php foreach ($data as $row) { ?>
                                                    <tr>
                                                        <td><?= strtoupper($row->first_name . ' ' . $row->middle_name . ' ' . $row->last_name); ?></td>
                                                        <td><?= strtoupper($row->sitio . ' ' . $row->barangay . ' ' . $row->city_mun . '' . $row->province); ?></td>
                                                        <td style='text-align:center'>
                                                            <a href="patient_profile/<?= $row->id; ?>" target="_blank" class="text-success"><i class="mdi mdi-file-document-box-check-outline"></i>View</a>
                                                        </td>
                                                    </tr>
                                                <?php }  ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->