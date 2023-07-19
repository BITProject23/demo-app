<?= $this->extend('layouts/main_layout') ?>

<?= $this->section('title') ?>
    Lecturer Appointment Table
<?= $this->endSection() ?>

<?= $this->section('content') ?>

    
        <!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content">
            <div class="container">
                <div class="page-header">
                    <div class="page-title">
                        <h3>Appointment View</h3>
                        <div class="crumbs">
                            <ul id="breadcrumbs" class="breadcrumb">
                                <li><a href="index-2.html"><i class="flaticon-home-fill"></i></a></li>
                                <li><a href="#">Lecturers</a></li>
                                <li><a href="#">Appoint View </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="row" id="cancel-row">
                
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Lecturers Appointment</h4>
                                    </div>                 
                                </div>

                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <a href="<?=base_url()?>/Lecturer_View" class="btn btn-primary btn-rounded mb-2 mr-2"><span>Add New Entry</span></a>
                                    </div>                 
                                </div>
                            </div>

                            <?php if(session()->getFlashdata('success')): ?>
                            
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <?= session()->getFlashdata('success');?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            
                            <?php endif; ?>



                            <div class="widget-content widget-content-area">
                                <div class="table-responsive mb-4">
                                    <table id="default-ordering" class="table table-striped table-bordered table-hover" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Appoinment ID</th>
                                                <th>Lecturer Emp-no</th>
                                                <th>Name</th>
                                                <th>Batch</th>
                                                <th>Course</th>
                                                <th>Subject</th>
                                                <th>Appoint Date</th>
                                                
                                                <!-- <th class="invisible"></th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($lecturers as $Lecturer): ?>
                                                <tr>
                                                    <td><?= $Lecturer['appoint_id']?></td>
                                                    <td><?= $Lecturer['lecturer_no']?></td>
                                                    <td><?= $Lecturer['lecturer_first_name']?>  <?= $Lecturer['lecturer_last_name']?></td>
                                                    <td><?= $Lecturer['batch_no']?></td>
                                                    <td><?= $Lecturer['course_name']?></td>
                                                    <td><?= $Lecturer['subject_name']?></td>
                                                    <td><?= $Lecturer['appoint_data']?></td>
                                                    
                                                    
                                                    
                                                    <!-- <td class="text-center"><a href="" data-toggle="tooltip" data-placement="top" title="Delete"><i class="flaticon-delete  bg-danger p-1 text-white br-6 mb-1"></i></a></td> -->
                                                    
                                                </tr>
                                            <?php endforeach; ?>    
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Appoinment ID</th>
                                                <th>Lecturer Emp-no</th>
                                                <th>Name</th>
                                                <th>Batch</th>
                                                <th>Course</th>
                                                <th>Subject</th>
                                                <th>Appoint Date</th>
                                                
                                                <!-- <th class="invisible"></th> -->
                                            </tr>
                                        </tfoot>
                                    </table>
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