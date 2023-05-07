<?= $this->extend('layouts/main_layout.php') ?>

<?= $this->section('title') ?>
    Payment
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    

        <div id="content" class="main-content">
            <div class="container">
                <div class="page-header">
                    <div class="page-title">
                        <h3> Payments
                            <!-- <small>Rounded</small> -->
                        </h3>
                        <div class="crumbs">
                            <ul id="breadcrumbs" class="breadcrumb">
                                <li><a href="index-2.html"><i class="flaticon-home-fill"></i></a></li>
                                <li><a href="#">Payments</a></li>
                                <li><a href="#">View Payments</a></li>
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
                                        <h4>Payments</h4>
                                    </div>                                                                        
                                </div>
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <button class="btn btn-dark btn-rounded mb-2 mr-2"><span>Back to previous</span></button>
                                    </div>                                                                        
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <form>
                                    
                                    
                                    <div class="form-group row mb-4">
                                        <label for="course_name" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Course</label>
                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                            <select class="form-control-rounded form-control"  name="course_name" id="course_name" placeholder="">
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
                                        <label for="batch_no" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Batch</label>
                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                            <select class="form-control-rounded form-control"  name="batch_no" id="batch_no" placeholder="Youre current batch">
                                                <option>year 2023</option>
                                                <option>year 2022</option>
                                                <option>year 2021</option>
                                                <option>year 2020</option>
                                                <option>year 2019</option>
                                                
                                                
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label for="student_name" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Student Name</label>
                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                          <input type="text" class="form-control-rounded form-control"  name="student_name" id="student_name" placeholder="">
                                        </div>
                                    </div>


                                    <div class="form-group row mb-4">
                                        <label for="student_id" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Student ID</label>
                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                          <input type="text" class="form-control-rounded form-control"  name="student_id" id="student_id" placeholder="">
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label for="course_fee" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Course Amount</label>
                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                          <input type="text" class="form-control-rounded form-control"  name="course_fee" id="course_fee" placeholder="">
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label for="paid_amount" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Paid Amount</label>
                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                          <input type="text" class="form-control-rounded form-control" name="paid_amount" id="paid_amount" placeholder="">
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label for="remain_amount" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Remain Amount</label>
                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                          <input type="text" class="form-control-rounded form-control"  name="remain_amount" id="remain_amount" placeholder="">
                                        </div>
                                    </div>
                                    
                                                          
                                               

                                    <div class="form-group row mb-4">
                                        <label for="payment_remark" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Remark</label>
                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                                <input type="text" class="form-control-rounded form-control" name="payment_remark" id="payment_remark" placeholder="">
                                        </div>
                                    </div>


                                    <div class="form-group row ">
                                    
                                        <div class=" col-sm-10">
                                            <button type="reset" value="Reset" class="btn btn-secondary">Reset</button>
                                            <button type="submit" value="Submit" class="btn btn-primary">Submit</button>
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