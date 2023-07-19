<?= $this->extend('layouts/main_layout') ?>

<?= $this->section('title') ?>
    Students Details 
<?= $this->endSection() ?>

<?= $this->section('content') ?>

    
        <!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content">
            <div class="container">
                <div class="page-header">
                    <div class="page-title">
                        <h3>Receptionist</h3>
                        <div class="crumbs">
                            <ul id="breadcrumbs" class="breadcrumb">
                                <li><a href="index-2.html"><i class="flaticon-home-fill"></i></a></li>
                                <li><a href="#">Receptionist</a></li>
                                <li><a href="#">View Students Details</a></li>
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
                                        <h4>Students Details</h4>
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
                                                <th>Student ID</th>
                                                <th>Student No</th>
                                                <th>Student Name</th>
                                                <th>NIC</th>
                                                <th>Email</th>
                                                <th>Gender</th>
                                                <th>Date of Birth</th>
                                                <th>Contact Number</th>
                                                <th>Address</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($students as $student): ?>
                                                <tr>
                                                    <td><?= $student['student_id']?></td>
                                                    <td><?= $student['student_no']?></td>
                                                    <td><?= $student['student_first_name']?> <?= $student['student_last_name']?></td>
                                                    <td><?= $student['student_nic']?></td>
                                                    <td><?= $student['student_email']?></td>
                                                    <td><?= $student['student_gender']?></td>
                                                    <td><?= $student['student_bod']?></td>
                                                    <td><?= $student['student_contact_no']?></td>
                                                    <td><?= $student['student_address']?></td>
                                                </tr>
                                            <?php endforeach; ?>    
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Student ID</th>
                                                <th>Student No</th>
                                                <th>Student Name</th>
                                                <th>NIC</th>
                                                <th>Email</th>
                                                <th>Gender</th>
                                                <th>Date of Birth</th>
                                                <th>Contact Number</th>
                                                <th>Address</th>
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