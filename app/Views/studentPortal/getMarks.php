<?= $this->extend('layouts/main_layout') ?>

<?= $this->section('title') ?>
    Student Marks
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
                                <li><a href="#">View Student marks</a></li>
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
                                        <h4>Student View Marks</h4>
                                    </div>                 
                                </div>

                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <a href="<?=base_url()?>/" class="btn btn-primary btn-rounded mb-2 mr-2"><span>Add New Entry</span></a>
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
                                                <th>Batch No</th>
                                                <th>Subject Name</th>
                                                <th>Assignment Name</th>
                                                <th>Assignment Date</th>
                                                <th>Assignment Marks</th>
                                                <th>Assignment Grade</th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($getmarks as $getmark): ?>
                                                <tr>
                                                    <td><?= $getmark['student_marks_id']?></td>
                                                    <td><?= $getmark['batch_no']?></td>
                                                    <td><?= $getmark['subject_name']?></td>
                                                    <td><?= $getmark['assignment_name']?></td>
                                                    <td><?= $getmark['assignment_date']?></td>
                                                    <td><?= $getmark['assignment_marks']?></td>
                                                    <td><?= $getmark['assignment_grade']?></td>
                                                    
                                                    
                                                    
                                                </tr>
                                            <?php endforeach; ?>    
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Student Marks Id </th>
                                                <th>Batch No</th>
                                                <th>Subject Name</th>
                                                <th>Assignment Name</th>
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