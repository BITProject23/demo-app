<?= $this->extend('layouts/main_layout') ?>

<?= $this->section('title') ?>
    Enrollment Search
<?= $this->endSection() ?>

<?= $this->section('content') ?>

        <!--  BEGIN CONTENT PART  -->
            <div id="content" class="main-content">
                <div class="container">
                        <div class="page-header">
                            <div class="page-title">
                                <h3>Student Enrollment</h3>
                                <div class="crumbs">
                                    <ul id="breadcrumbs" class="breadcrumb">
                                        <li><a href="index-2.html"><i class="flaticon-home-fill"></i></a></li>
                                        <li><a href="#">Student Enrollment</a></li>
                                        <li><a href="#">Enrollment Search</a> </li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row" id="cancel-row">
                        
                            <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                                <div class="statbox widget box box-shadow">
                                    <div class="widget-header">
                                        <div class="row">
                                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                <h4>Enrollment Search</h4>
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
                                            <form method="get">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>Student No:</td>
                                                        <td>
                                                            <input type="text" id="student_id" class="form-control-rounded form-control" name="student_id">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Batch:</td>
                                                        <td>
                                                            <!-- <input type="text" id="batch_no" class="form-control" name="batch_no"> -->
                                                            <select class="form-control-rounded form-control" name="batches" id="batches" placeholder="">
                                                                <option value="">Select the batch</option>
                                                                <?php foreach($batches as $batch): ?>
                                                                    <option value="<?= $batch['batch_id']?>">
                                                                        <?=$batch['batch_no'] ?>
                                                                    </option>
                                                                <?php endforeach; ?>   
                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><button type="submit">Search</button></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            </form>
                                            <table id="range-search" class="display table table-striped table-bordered table-hover" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Enrollment ID</th>
                                                        <th>Student No</th>
                                                        <th>Student Name</th>
                                                        <th>Student NIC</th>
                                                        <th>Course</th>
                                                        <th>Batch</th>
                                                        <th>Enrollment Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach($enrollements as $enrollement): ?>
                                                        <tr>
                                                            <td><?= $enrollement['en_id']?></td>
                                                            <td><?= $enrollement['student_no']?></td>
                                                            <td><?= $enrollement['student_first_name']?>  <?= $enrollement['student_last_name']?></td>
                                                            <td><?= $enrollement['student_nic']?></td>
                                                            <td><?= $enrollement['course_name']?></td>
                                                            <td><?= $enrollement['batch_no']?></td>
                                                            <td><?= $enrollement['en_date']?></td>
                                                        </tr>
                                                    <?php endforeach; ?>    
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>Enrollment ID</th>
                                                        <th>Student No</th>
                                                        <th>Student Name</th>
                                                        <th>Student NIC</th>
                                                        <th>Course</th>
                                                        <th>Batch</th>
                                                        <th>Enrollment Date</th>
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
       
    
<?= $this->endSection() ?>