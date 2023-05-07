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
                    <!-- <div class="col-lg-6 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">                                
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Stack Forms</h4>
                                    </div>                                                                        
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <form>
                                    <div class="form-group mb-5">
                                        <label for="sEmail">Email address</label>
                                        <input type="email" class="form-control-rounded form-control" id="sEmail" aria-describedby="emailHelp1" placeholder="">
                                        <small id="emailHelp1" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="sPassword">Password</label>
                                        <input type="password" class="form-control-rounded form-control" id="sPassword" placeholder="">
                                    </div>
                                    <div class="form-group form-check pl-0">
                                        <div class="custom-control rounded-chk custom-checkbox checkbox-info">
                                            <input type="checkbox" class="custom-control-input" id="sChkbox">
                                            <label class="custom-control-label" for="sChkbox">Subscribe to weekly newsletter</label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-button-7 btn-rounded mb-4 mt-3">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div> -->
                    
                    <div class="col-lg-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">                                
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Timetable form</h4>
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
                                <form>

                                    <div class="form-group row mb-4">
                                        <label for="timetable_day" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Day </label>
                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                          <input type="date" class="form-control-rounded form-control" id="timetable_day" placeholder="">
                                        </div>
                                    </div>


                                    <div class="form-group row mb-4">
                                        <label for="timetable_start_time" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Start Time </label>
                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                          <input type="time" class="form-control-rounded form-control" id="timetable_start_time" placeholder="">
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label for="timetable_end_time" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">End Time </label>
                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                          <input type="time" class="form-control-rounded form-control" id="timetable_end_time" placeholder="">
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label for="exampleFormControlSelect1" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Course</label>
                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                            <select class="form-control-rounded form-control" id="exampleFormControlSelect1" placeholder="">
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
                                          <input type="text" class="form-control-rounded form-control" id="timetable_subject_name" placeholder="">
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label for="exampleFormControlSelect1" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Batch</label>
                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                            <select class="form-control-rounded form-control" id="exampleFormControlSelect1" placeholder="Youre current batch">
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
                                          <input type="text" class="form-control-rounded form-control" id="lecturer_name" placeholder="">
                                        </div>
                                    </div>


                                    
                                    <div class="form-group row mb-4">
                                        <label for="timetable_remark" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Remark </label>
                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                          <input type="text" class="form-control-rounded form-control" id="timetable_remark" placeholder="">
                                        </div>
                                    </div>
                                                            
                                                                                               
                                                              
                                    
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

                <!-- <div class="row">
                    <div class="col-lg-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Forms Grid</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <form>
                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Email</label>
                                            <input type="email" class="form-control-rounded form-control" id="inputEmail4" placeholder="Email">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Password</label>
                                            <input type="password" class="form-control-rounded form-control" id="inputPassword4" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="inputAddress">Address</label>
                                        <input type="text" class="form-control-rounded form-control" id="inputAddress" placeholder="1234 Main St">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="inputAddress2">Address 2</label>
                                        <input type="text" class="form-control-rounded form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                    </div>
                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6">
                                            <label for="inputCity">City</label>
                                            <input type="text" class="form-control-rounded form-control" id="inputCity">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="exampleFormControlSelect1">State</label>
                                            <select class="form-control-rounded form-control" id="exampleFormControlSelect1">
                                                <option selected>Choose...</option>
                                                <option>...</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="inputZip">Zip</label>
                                            <input type="text" class="form-control-rounded form-control" id="inputZip">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-check pl-0">
                                            <div class="custom-control rounded-chk custom-checkbox checkbox-info">
                                                <input type="checkbox" class="custom-control-input" id="gridCheck">
                                                <label class="custom-control-label" for="gridCheck">Check me out</label>
                                            </div>
                                        </div>
                                    </div>
                                  <button type="submit" class="btn btn-button-7 btn-rounded mb-4 mt-3">Sign in</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> -->

                <!-- <div class="row">
                    <div class="col-lg-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Inline forms</h4>
                                    </div>                                                                        
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <form class="form-inline justify-content-center mb-4">
                                    <label class="sr-only" for="inlineFormInputName2">Name</label>
                                    <input type="text" class="form-control-rounded form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Jane Doe">
                                    <label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
                                    <div class="input-group mb-2 mr-sm-2">
                                        <div class="input-group-prepend">
                                            <div class="form-control-rounded-left input-group-text">@</div>
                                        </div>
                                        <input type="text" class="form-control-rounded-right form-control" id="inlineFormInputGroupUsername2" placeholder="Username">
                                    </div>
                                    <div class="form-check mb-2 mr-sm-2">
                                        <div class="custom-control rounded-chk custom-checkbox checkbox-info">
                                            <input type="checkbox" class="custom-control-input" id="inlineFormCheck">
                                            <label class="custom-control-label" for="inlineFormCheck">Remember me</label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-button-7 btn-rounded mb-2">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div> -->

                    <!-- <div class="col-lg-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">                                
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Auto-sizing</h4>
                                    </div>                                                                        
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <form>
                                    <div class="form-row align-items-center justify-content-center mb-4">
                                        <div class="col-auto">
                                            <label class="sr-only" for="inlineFormInput">Name</label>
                                            <input type="text" class="form-control-rounded form-control mb-2" id="inlineFormInput" placeholder="Jane Doe">
                                        </div>
                                        <div class="col-auto">
                                            <label class="sr-only" for="inlineFormInputGroup">Username</label>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="form-control-rounded-left input-group-text">@</div>
                                                </div>
                                                <input type="text" class="form-control-rounded-right form-control" id="inlineFormInputGroup" placeholder="Username">
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <div class="form-check mb-2 pl-0">
                                                <div class="custom-control rounded-chk custom-checkbox checkbox-info">
                                                    <input type="checkbox" class="custom-control-input" id="autoSizingCheck">
                                                    <label class="custom-control-label" for="autoSizingCheck">Remember me</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <button type="submit" class="btn btn-button-7 btn-rounded mb-2">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> -->
              
                <!-- <div class="row layout-spacing">
                    <div class="col-lg-12">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">                                
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Actions Buttons</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <form class="form-vertical" action="#">
                                    <div class="form-group mb-4">
                                        <label class="control-label">First Name:</label>
                                        <input type="text" name="first_name" class="form-control-rounded form-control" placeholder="First Name">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="control-label">Email:</label>
                                        <div class="input-group mb-2 mr-sm-2">
                                            <div class="input-group-prepend">
                                                <div class="form-control-rounded-left input-group-text">@</div>
                                            </div>
                                            <input type="text" class="form-control-rounded-right form-control" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="control-label">Website:</label>
                                        <input type="text" name="website" value="http://" class="form-control-rounded form-control" placeholder="Website name"> 
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="control-label">Password:</label>
                                        <div class="input-group">
                                            <input type="password" name="pass" class="form-control-rounded form-control" placeholder="Password"> 
                                            <span class="input-group-addon"><i class="icon-user"></i></span> 
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="control-label">Confirm Password:</label>
                                        <div class="input-group">
                                            <input type="password" name="cpass" class="form-control-rounded form-control" placeholder="Confirm Password">
                                            <span class="input-group-addon"><i class="icon-user"></i></span> 
                                        </div>
                                    </div>
                                    <input type="submit" value="Submit" class="btn btn-button-7 btn-rounded ml-3 mb-4 mt-3"> 
                                </form>
                            </div>
                        </div>
                    </div>
                </div> -->
                
            </div>
        </div>


    

       
<?= $this->endSection() ?>