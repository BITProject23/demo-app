<?= $this->extend('layouts/main_layout.php') ?>

<?= $this->section('title') ?>
    Timetable search
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    

        <div id="content" class="main-content">
            <div class="container">
                <div class="page-header">
                    <div class="page-title">
                        <h3> Timetable
                            <!-- <small>Rounded</small> -->
                        </h3>
                        <div class="crumbs">
                            <ul id="breadcrumbs" class="breadcrumb">
                                <li><a href="index-2.html"><i class="flaticon-home-fill"></i></a></li>
                                <li><a href="#">Timetable </a></li>
                                <li><a href="#">Timetable search</a></li>
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
                                        <h4>Timetable Report</h4>
                                    </div>                                                                        
                                </div>
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <!-- <a href="< ?=base_url()?>/Student_View" class="btn btn-dark btn-rounded mb-2 mr-2"><span>Back to previous</span></a> -->
                                    </div>                                                                        
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">


                                <form name="timetableForm" action='<?php echo base_url();?>/Timetable_Search_View' id="timetableForm" method ="post">
                                    
                                

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
                                        <label for="batchdays" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Batch Day</label>
                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                            <select class="form-control-rounded form-control" name="batch_day" id="batch_day" placeholder="">
                                                <option value="">Select the day</option>
                                                <option value="Monday">Monday</option>
                                                <option value="Tuesday">Tuesday</option>
                                                <option value="Wednesday">Wednesday</option>
                                                <option value="Thursday">Thursday</option>
                                                <option value="Friday">Friday</option>
                                                <option value="Saturday">Saturday</option>
                                                <option value="Sunday">Sunday</option>
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
                                        <label for="subjects" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Subjects </label>
                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                            <select class="form-control-rounded form-control" name="subjects" id="subjects" placeholder="">
                                            <option value="">All Subjects</option>
                                                <?php foreach($subjects as $subject): ?>
                                                    <option value="<?= $subject['subject_id']?>">
                                                        <?=$subject['subject_name'] ?>
                                                    </option>
                                                <?php endforeach; ?>   
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                            <label for="lecturers" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Lecturer Name </label>
                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                                <select class="form-control-rounded form-control" name="lecturers" id="lecturers" placeholder="">
                                                <option value="">All Lecturers</option>
                                                <?php foreach($lecturers as $lecturer): ?>
                                                    <option value="<?= $lecturer['lecturer_id']?>">
                                                        <?=$lecturer['lecturer_first_name'] ?> <?=$lecturer['lecturer_last_name'] ?>
                                                    </option>
                                                <?php endforeach; ?> 
                                                </select>
                                            </div>
                                    </div>


                                    <div class="form-group row mb-4">
                                        <label for="subject_time_from" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Batch from Date</label>
                                        <div class="col-xl-3 col-lg-9 col-sm-10">
                                          <input type="date" class="form-control-rounded form-control" name="batch_start_date" id="batch_start_date" placeholder="">
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label for="subject_time_to" class="col-xl-2 col-sm-3 col-sm-2 col-form-label"> Batch to Date</label>
                                        <div class="col-xl-3 col-lg-9 col-sm-10">
                                          <input type="date" class="form-control-rounded form-control" name="batch_end_date" id="batch_end_date" placeholder="">
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