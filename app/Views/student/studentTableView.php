<?= $this->extend('layouts/main_layout') ?>

<?= $this->section('title') ?>
    Student Table
<?= $this->endSection() ?>

<?= $this->section('content') ?>

    
        <!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content">
            <div class="container">
                <div class="page-header">
                    <div class="page-title">
                        <h3>Student</h3>
                        <div class="crumbs">
                            <ul id="breadcrumbs" class="breadcrumb">
                                <li><a href="index-2.html"><i class="flaticon-home-fill"></i></a></li>
                                <li><a href="#">Student</a></li>
                                <li><a href="#">View Student</a></li>
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
                                        <h4>Student View</h4>
                                    </div>                 
                                </div>

                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <a href="<?=base_url()?>/Student_add" class="btn btn-primary btn-rounded mb-2 mr-2"><span>Add New Entry</span></a>
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

                            <?php if(session()->has('errors')) : ?>
                                    
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <?= session()->getFlashdata('errors');?>
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
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>NIC</th>
                                                <th>Email</th>
                                                <th>Gender</th>
                                                <th>Date of Birth</th>
                                                <th>Contact Number</th>
                                                <th>Address</th>
                                                <th>Qualification</th>
                                                <th>Registration Date</th>
                                                <th>Edit</th>
                                                <th>Enrollment</th>
                                                <th>Delete</th>
                                                <!-- <th class="invisible"></th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($student as $stu): ?>
                                                <tr>
                                                    <td><?= $stu['student_id']?></td>
                                                    <td><?= $stu['student_no']?></td>
                                                    <td><?= $stu['student_first_name']?></td>
                                                    <td><?= $stu['student_last_name']?></td>
                                                    <td><?= $stu['student_nic']?></td>
                                                    <td><?= $stu['student_email']?></td>
                                                    <td><?= $stu['student_gender']?></td>
                                                    <td><?= $stu['student_bod']?></td>
                                                    <td><?= $stu['student_contact_no']?></td>
                                                    <td><?= $stu['student_address']?></td>
                                                    <td><?= $stu['student_qulify']?></td>
                                                    <td><?= $stu['student_registration_date']?></td>
                                                    <td class="text-center"><a href="<?=base_url()?>/Student_Edit/<?= $stu['student_id']?>" data-toggle="tooltip" data-placement="top"><i class="flaticon-edit  bg-success p-1 text-white br-6 mb-1"></i></a></td>
                                                    <td class="text-center"><a href="<?=base_url()?>/Enroll_Student/<?= $stu['student_id']?>" data-toggle="tooltip" data-placement="top"><i class="flaticon-user-6 bg-primary p-1 text-white br-6 mb-1"></i></a></td>
                                                    <td class="text-center"><a href="#" onclick="deleteData('<?=base_url()?>/Student_Delete/<?= $stu['student_id']?>')" data-toggle="tooltip" data-placement="top" title="Delete"><i class="flaticon-delete  bg-danger p-1 text-white br-6 mb-1"></i></a></td>
                                                    <!-- <td class="text-center"><a href="" data-toggle="tooltip" data-placement="top" title="Delete"><i class="flaticon-delete  bg-danger p-1 text-white br-6 mb-1"></i></a></td> -->
                                                    
                                                </tr>
                                            <?php endforeach; ?>    
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Student ID</th>
                                                <th>Student No</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>NIC</th>
                                                <th>Email</th>
                                                <th>Gender</th>
                                                <th>Date of Birth</th>
                                                <th>Contact Number</th>
                                                <th>Address</th>
                                                <th>Qualification</th>
                                                <th>Registration Date</th>
                                                <th>Edit</th>
                                                <th>Enrollment</th>
                                                <th>Delete</th>
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