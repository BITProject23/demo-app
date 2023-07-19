<?= $this->extend('layouts/main_layout_report') ?>

<?= $this->section('title') ?>
    Payment Report
<?= $this->endSection() ?>

<?= $this->section('content') ?>

        <!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content">
            <div class="container">
                
                <div>
                    <div class="row margin-bottom-120 invoice-print">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-content invoice">


                                    <div class="widget-content-area content-section">
                                        <div class="row invoice-top-section">
                                            <div class="col-sm-12 mb-3">
                                                <a href="index-2.html" class=""><img src="<?=base_url()?>/public/assets_1/assets/img/WAS.png" class="img-fluid" alt="logo"></a>
                                            </div>
                                            <div class="col-sm-8 mb-4">
                                                <h5 class="invoice-info-title">Wide Awake Solutions (Pvt) Ltd</h5>
                                                <!-- <p class="invoice-serial-number"></p> -->
                                            </div>
                                            
                                        </div>

                                        <div class="row mt-3 mb-2">
                                            <div class="col-md-6 col-sm-6 invoice-from">
                                                <!-- <h5 class="invoice-from-title mb-4">Bill From</h5> -->
                                                <div class="row">
                                                    <div class="col-12 mb-4">
                                                        <p> No.213, Colombo Road,</p>  
                                                        <p>Pepiliyana,</p>
                                                        <p>Sri Lanka.</p>
                                                    </div>
                                                    
                                                    <div class="col-12 mb-4">
                                                        <p>Email: info@wideawakesl.com</p>
                                                        <p>Phone: 0112818027</p>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>

                                        <div class="row mt-5 mb-5">
                                            <div class="col-12">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th scope="col">Batch No </th>
                                                                <th scope="col">Course</th>
                                                                <th scope="col">Subject</th>
                                                                <th scope="col">Batch Day </th>
                                                                <th scope="col">Lecturer Name</th>
                                                                <th scope="col">Batch Time From</th>
                                                                <th scope="col">Batch Time To</th>
                                                                
                                                               
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            
                                                            <?php  foreach($timetables as $timetable): ?>
                                                                <tr>
                                                                    <td><?= $timetable['batch_no']?></td>
                                                                    <td><?= $timetable['course_name']?></td>
                                                                    <td><?= $timetable['subject_name']?></td>
                                                                    <td><?= $timetable['batch_day']?></td>
                                                                    <td><?= $timetable['lecturer_first_name']?> <?= $timetable['lecturer_last_name']?></td>
                                                                    <td><?= $timetable['batch_time_from'];?></td>
                                                                    <td><?= $timetable['batch_time_to']?></td>
                                                                    
                                                                </tr>
                                                            <?php endforeach; ?>  
                                                            
                                                            
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-5 mb-5">
                                        <div class="col-12">
                                        <button type="submit" value="Submit" id="submit" style="float: right;" class="btn-material btn-material-primary  mb-4 mr-3" onclick="print_page()">Print</button>
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
        <!--  END CONTENT PART  -->

    </div>
    <!-- END MAIN CONTAINER -->


    
<?= $this->endSection() ?>