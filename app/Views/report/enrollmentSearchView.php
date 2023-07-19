<?= $this->extend('layouts/main_layout.php') ?>

<?= $this->section('title') ?>
    Enrollment search
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    

        <div id="content" class="main-content">
            <div class="container">
                <div class="page-header">
                    <div class="page-title">
                        <h3> Enrollment
                            <!-- <small>Rounded</small> -->
                        </h3>
                        <div class="crumbs">
                            <ul id="breadcrumbs" class="breadcrumb">
                                <li><a href="index-2.html"><i class="flaticon-home-fill"></i></a></li>
                                <li><a href="#">Enrollment </a></li>
                                <li><a href="#">Enrollment search</a></li>
                                <!-- <li class="active"><a href="#">Rounded</a> </li> -->
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    
                    
                    <div class="col-lg-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">                                
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Enrollment Report</h4>
                                    </div>                                                                        
                                </div>
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <!-- <a href="< ?=base_url()?>/Student_View" class="btn btn-dark btn-rounded mb-2 mr-2"><span>Back to previous</span></a> -->
                                    </div>                                                                        
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">


                                <form name="enrollmentForm" action='<?php echo base_url();?>/Enrollment_Search_View' id="enrollmentForm" method ="post">
                                    
                                

                                    <div class="form-group row mb-4">
                                        <label for="exampleFormControlSelect1" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Batch</label>
                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                            <select class="form-control-rounded form-control" name="batches" id="batches" placeholder="">
                                            <option value="">All Batches</option>
                                                <?php foreach($batches as $batch): ?>
                                                    <option value="<?= $batch['batch_id']?>">
                                                        <?=$batch['batch_no'] ?>
                                                    </option>
                                                <?php endforeach; ?>   
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label for="courses" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Course </label>
                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                            <select class="form-control-rounded form-control" name="courses" id="courses" placeholder="">
                                            <option value="">All Courses</option>
                                                <?php foreach($courses as $course): ?>
                                                    <option value="<?= $course['course_id']?>">
                                                        <?=$course['course_name'] ?>
                                                    </option>
                                                <?php endforeach; ?>   
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                            <label for="students" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Student Name </label>
                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                                <select class="form-control-rounded form-control" name="students" id="students" placeholder="">
                                                <option value="">All Students</option>
                                                <?php foreach($students as $student): ?>
                                                    <option value="<?= $student['student_id']?>">
                                                        <?=$student['student_first_name'] ?> <?=$student['student_last_name'] ?>
                                                    </option>
                                                <?php endforeach; ?> 
                                                </select>
                                            </div>
                                    </div>


                                    <div class="form-group row mb-4">
                                        <label for="enrollment_from_date" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Enrollment from Date</label>
                                        <div class="col-xl-3 col-lg-9 col-sm-10">
                                          <input type="date" class="form-control-rounded form-control" name="enrollment_from_date" id="enrollment_from_date" placeholder="">
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label for="enrollment_to_date" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Enrollment To Date</label>
                                        <div class="col-xl-3 col-lg-9 col-sm-10">
                                          <input type="date" class="form-control-rounded form-control" name="enrollment_to_date" id="enrollment_to_date" placeholder="">
                                        </div>
                                    </div>
                                               

                                    <div class="form-group row ">
                                    
                                        <div class=" col-sm-10">
                                            <button type="submit" value="Submit" class="btn btn-primary">Generate</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>


       
<?= $this->endSection() ?>