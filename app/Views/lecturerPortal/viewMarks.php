<?= $this->extend('layouts/main_layout') ?>

<?= $this->section('title') ?>
    Assignment Marks
<?= $this->endSection() ?>

<?= $this->section('content') ?>

    
        <!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content">
            <div class="container">
                <div class="page-header">
                    <div class="page-title">
                        <h3>Lecturer</h3>
                        <div class="crumbs">
                            <ul id="breadcrumbs" class="breadcrumb">
                                <li><a href="index-2.html"><i class="flaticon-home-fill"></i></a></li>
                                <li><a href="#">Lecturer</a></li>
                                <li><a href="#">View Assignment Marks</a></li>
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
                                        <h4>Assignment Marks</h4>
                                    </div>                 
                                </div>

                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <a href="<?=base_url()?>/Assign_Marks" class="btn btn-primary btn-rounded mb-2 mr-2"><span>Add New Entry</span></a>
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
                                                <th>Student Marks Id </th>
                                                <th>Student Name</th>
                                                <th>Subject Name</th>
                                                <th>Batch No</th>
                                                <th>Assignment Name</th>
                                                <th>Assignment Discreption</th>
                                                <th>Assignment Date</th>
                                                <th>Assignment Marks</th>
                                                <th>Assignment Grade</th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($viewmarks as $viewmark): ?>
                                                <tr>
                                                    <td><?= $viewmark['student_marks_id']?></td>
                                                    <td><?= $viewmark['student_first_name']?> <?= $viewmark['student_last_name']?></td>
                                                    <td><?= $viewmark['subject_name']?></td>
                                                    <td><?= $viewmark['batch_no']?></td>
                                                    <td><?= $viewmark['assignment_name']?></td>
                                                    <td><?= $viewmark['assignment_discreption']?></td>
                                                    <td><?= $viewmark['assignment_date']?></td>
                                                    <td><?= $viewmark['assignment_marks']?></td>
                                                    <td><?= $viewmark['assignment_grade']?></td>
                                                    
                                                    
                                                    
                                                </tr>
                                            <?php endforeach; ?>    
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Student Marks Id </th>
                                                <th>Student Name</th>
                                                <th>Subject Name</th>
                                                <th>Batch No</th>
                                                <th>Assignment Name</th>
                                                <th>Assignment Discreption</th>
                                                <th>Assignment Date</th>
                                                <th>Assignment Marks</th>
                                                <th>Assignment Grade</th>
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