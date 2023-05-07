<?= $this->extend('layouts/main_layout.php') ?>

<?= $this->section('title') ?>
    Course 
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    

        <div id="content" class="main-content">
            <div class="container">
                <div class="page-header">
                    <div class="page-title">
                        <h3> Course 
                            <!-- <small>Rounded</small> -->
                        </h3>
                        <div class="crumbs">
                            <ul id="breadcrumbs" class="breadcrumb">
                                <li><a href="index-2.html"><i class="flaticon-home-fill"></i></a></li>
                                <li><a href="#">Course</a></li>
                                <li><a href="#">Add New Course</a></li>
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
                                        <h4>Course form</h4>
                                        <!-- <button class="btn-creative btn-4 btn-4b flaticon-reply"><span>Return</span></button> -->
                                    </div>                                                                        
                                </div>
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <!-- <h4>Student form</h4> -->
                                        <button class="btn-material btn-rounded btn-material-dark  mb-4 mr-3"><span>Back to previous</span></button>
                                    </div>                                                                        
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                
                                <?= form_open()?>

                                <form name="form1" action="" method ="post">
                                    <!-- <div class="form-group row mb-4">
                                        <label for="student_first_name" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">First Name </label>
                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                          <input type="text" class="form-control-rounded form-control" id="student_first_name" placeholder="">
                                        </div>
                                    </div> -->
                                    <!-- <div class="form-group row mb-4">
                                        <label for="student_last_name" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Last Name </label>
                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                          <input type="text" class="form-control-rounded form-control" id="student_last_name" placeholder="">
                                        </div>
                                    </div> -->

                                    <div class="form-group row mb-4">
                                        <label for="course_name" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Course Name </label>
                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                          <input type="text" class="form-control-rounded form-control" id="course_name" placeholder="">
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label for="course_id" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Course ID </label>
                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                          <input type="text" class="form-control-rounded form-control" id="course_id" placeholder="">
                                        </div>
                                    </div>



                                    <!-- <div class="form-group row mb-4">
                                        <label for="exampleFormControlSelect1" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Course </label>
                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                            <select class="form-control-rounded form-control" id="exampleFormControlSelect1" placeholder="">
                                                <option>BIT</option>
                                                <option>FIT</option>
                                                <option>ICT</option>
                                                
                                            </select>
                                        </div>
                                    </div> -->

                                    <div class="form-group row mb-4">
                                        <label for="course_fee" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Course Fee </label>
                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                          <input type="text" class="form-control-rounded form-control" id="course_fee" placeholder="">
                                        </div>
                                    </div>

                                    

                                    <!-- <div class="form-group row mb-4">
                                        <label for="exampleFormControlSelect1" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Class Category</label>
                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                            <select class="form-control-rounded form-control" id="exampleFormControlSelect1" placeholder="select class">
                                                <option>Grade 10</option>
                                                <option>Grade 11</option>
                                                <option>Grade 12</option>
                                                <option>Grade 13</option>
                                                <option>Year 01</option>
                                                <option>Year 02</option>
                                                <option>Year 03</option>
                                            </select>
                                        </div>
                                    </div> -->
                                    

                                    
                                    <!-- <div class="form-group row">
                                        <div class="col-sm-2">Apply</div>
                                        <div class="col-sm-10">
                                            <div class="form-check pl-0">
                                                <div class="custom-control rounded-chk custom-checkbox checkbox-info">
                                                    <input type="checkbox" class="custom-control-input" id="hChkbox">
                                                    <label class="custom-control-label" for="hChkbox">Terms Conditions</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->

                                

                                    <div class="form-group row ">
                                    
                                        <div class=" col-sm-10">
                                        
                                        <!-- <div class="btn-group mr-2" role="group" aria-label="Second group" > -->
                                            <!-- <a href="javascript:void(0);" class="btn btn-danger rounded  mb-4 mr-2 hvr-shadow">Shadow</a> -->
                                            <!-- <a href="javascript:void(0);" class="btn btn-button-4 rounded mb-4 mr-2 hvr-fade">Fade</a> -->
                                            <button type="reset" value="Reset" class="btn btn-secondary">Reset</button>
                                            <button type="submit" value="Submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                                <?= form_close()?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="row">
                    <div class="col-lg-6 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">                                
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Registration Forms</h4>
                                    </div>                                                                        
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <form>
                                    <div class="form-group mb-4">
                                        <label for="rEmail">Email address *</label>
                                        <input type="email" class="form-control-rounded form-control" id="rEmail" placeholder="">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="rPassword">Password *</label>
                                        <input type="password" class="form-control-rounded form-control" id="rPassword" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="rConfirmPassword">Confirm Password *</label>
                                        <input type="password" class="form-control-rounded form-control" id="rConfirmPassword" placeholder="">
                                    </div>
                                    <small id="emailHelp2" class="form-text text-muted">*Required Fields</small>
                                    <div class="form-group form-check pl-0 mt-5">
                                        <div class="custom-control rounded-chk custom-checkbox checkbox-info">
                                            <input type="checkbox" class="custom-control-input" id="rChkbox">
                                            <label class="custom-control-label" for="rChkbox">Subscribe to weekly newsletter</label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-button-7 btn-rounded mt-3 mb-4">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div> -->
                    
                    <!-- <div class="col-lg-6 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">                                
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Login Form</h4>
                                    </div>                                                                        
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <form>
                                    <div class="form-group mb-4">
                                        <label for="lFullName">Full Name *</label>
                                        <input type="text" class="form-control-rounded form-control" id="lFullName" placeholder="">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="lEmail">Email address *</label>
                                        <input type="email" class="form-control-rounded form-control" id="lEmail" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="lPassword">Password *</label>
                                        <input type="password" class="form-control-rounded form-control" id="lPassword" placeholder="">
                                    </div>
                                    <small id="emailHelp3" class="form-text text-muted">*Required Fields</small>
                                    <button type="submit" class="btn btn-button-7 btn-rounded mt-5 mb-4">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> -->

                

                
              
                
                
            </div>
        </div>


    

       
<?= $this->endSection() ?>