<?= $this->extend('layouts/main_layout.php') ?>

<?= $this->section('title') ?>
    Timetable
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
                                <li><a href="#">Timetable</a></li>
                                <li><a href="#">Add classes to timetable</a></li>
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
                                        <h4>Timetable form</h4>
                                    </div>                                                                        
                                </div>
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <button class="btn btn-dark btn-rounded mb-4 mr-2"><span>Back to previous</span></button>
                                    </div>                                                                        
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <form>

                                    <div class="form-group row mb-4">
                                        <label for="timetable_day" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Day </label>
                                        <div class="col-xl-3 col-lg-9 col-sm-3">
                                          <input type="date" class="form-control-rounded form-control" name="timetable_day" id="timetable_day" placeholder="">
                                        </div>
                                    </div>


                                    <div class="form-group row mb-4">
                                        <label for="timetable_start_time" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Start Time </label>
                                        <div class="col-xl-3 col-lg-9 col-sm-3">
                                          <input type="time" class="form-control-rounded form-control" name="timetable_start_time" id="timetable_start_time" placeholder="">
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label for="timetable_end_time" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">End Time </label>
                                        <div class="col-xl-3 col-lg-9 col-sm-3">
                                          <input type="time" class="form-control-rounded form-control" name="timetable_end_time" id="timetable_end_time" placeholder="">
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label for="course_name" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Course</label>
                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                            <select class="form-control-rounded form-control" name="course_name" id="course_name" placeholder="">
                                                <option>ICT - Grade 10</option>
                                                <option>ICT - Grade 11</option>
                                                <option>ICT - Grade A/L</option>
                                                <option>BIT - FIT</option>
                                                <option>BIT - SEM 01</option>
                                                <option>BIT - SEM 02</option>
                                                <option>BIT - SEM 03</option>
                                                <option>BIT - SEM 04</option>
                                                <option>BIT - SEM 05</option>
                                                <option>BIT - SEM 06</option>
                                                <option>BIT - Project</option>
                                                
                                                
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label for="timetable_subject_name" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Subject Name </label>
                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                          <input type="text" class="form-control-rounded form-control" name="timetable_subject_name" id="timetable_subject_name" placeholder="">
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label for="batch_no" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Batch</label>
                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                            <select class="form-control-rounded form-control" name="batch_no" id="batch_no" placeholder="Youre current batch">
                                                <option>year 2023</option>
                                                <option>year 2022</option>
                                                <option>year 2021</option>
                                                <option>year 2020</option>
                                                <option>year 2019</option>
                                                
                                                <!-- <option>Year 02</option>
                                                <option>Year 03</option> -->
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label for="lecturer_name" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Lecturer Name </label>
                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                          <input type="text" class="form-control-rounded form-control" name="lecturer_name" id="lecturer_name" placeholder="">
                                        </div>
                                    </div>


                                    
                                    <div class="form-group row mb-4">
                                        <label for="timetable_remark" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Remark </label>
                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                          <input type="text" class="form-control-rounded form-control" name="timetable_remark" id="timetable_remark" placeholder="">
                                        </div>
                                    </div>
                                                            
                                                                                               
                                                              
                                    
                                    <div class="form-group row ">
                                    
                                        <div class=" col-sm-10">
                                            <button type="reset" value="Reset" class="btn-material btn-material-default  mb-4 mr-2">Reset</button>
                                            <button type="submit" value="Submit" class="btn-material btn-material-primary  mb-4 mr-3">Submit</button>
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