<?= $this->extend('layouts/main_layout.php') ?>

<?= $this->section('title') ?>
    Student Update
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    

        <div id="content" class="main-content">
            <div class="container">
                <div class="page-header">
                    <div class="page-title">
                        <h3> Student 
                            <!-- <small>Rounded</small> -->
                        </h3>
                        <div class="crumbs">
                            <ul id="breadcrumbs" class="breadcrumb">
                                <li><a href="index-2.html"><i class="flaticon-home-fill"></i></a></li>
                                <li><a href="#">Student</a></li>
                                <li><a href="#">Edit Student</a></li>
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
                                        <h4>Update Student Details</h4>
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
                                        <?=session()->getFlashdata('errors');?>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                <?php endif ?>

                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <a href="<?=base_url()?>/Student_View" class="btn btn-dark btn-rounded mb-2 mr-2"><span>Back to previous</span></a>
                                    </div>                                                                        
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">

                                <!-- < ?php echo form_open('stuCreate') ?> -->
                                    <form name="studentForm" action='<?php echo base_url();?>/Student_Update' data-toggle="validator" method ="post">

                                        <input type="hidden" value="<?=$student['student_id']?>" name="student_id">

                                        <div class="form-group row mb-4">
                                            <label for="student_no" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Student No </label>
                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                                <input type="text" class="form-control-rounded form-control" value="<?=$student['student_no']?>"
                                                name="student_no" id="student_no" placeholder="" readonly>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>


                                        <div class="form-group row mb-4">
                                            <label for="student_first_name" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">First Name </label>
                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                                <input type="text" class="form-control-rounded form-control" value="<?=$student['student_first_name']?>"
                                                name="student_first_name" id="student_first_name" minlength="3" maxlength="20" placeholder="" data-required-error="Please enter a first name" required >
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-4">
                                            <label for="student_last_name" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Last Name </label>
                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                                <input type="text" class="form-control-rounded form-control"  value="<?=$student['student_last_name']?>"
                                                name="student_last_name" id="student_last_name" data-required-error="Please enter a last name" required >
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-4">
                                            <label for="student_nic" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">NIC </label>
                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                                <input type="text" class="form-control-rounded form-control"  value="<?=$student['student_nic']?>"
                                                name="student_nic" id="student_nic" minlength="10" maxlength="12" placeholder="" data-required-error="Please enter a valid NIC number" required>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>


                                        
                                        <div class="form-group row mb-4">
                                            <label for="student_email" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Email</label>
                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                                <input type="email" class="form-control-rounded form-control"  value="<?=$student['student_email']?>"
                                                name="student_email" id="student_email" data-required-error="Please enter a valid email address" required>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>


                                        <fieldset class="form-group mb-2">
                                            <div class="row">
                                                <label class="col-form-label col-xl-2 col-sm-3 col-sm-2 pt-0">Gender</label>
                                                <div class="col-xl-10 col-lg-9 col-sm-10">
                                                    <div class="form-check mb-1">
                                                        <div class="custom-control custom-radio classic-radio-info">
                                                            <input type="radio" id="hRadio1" name="student_gender"
                                                            <?php
                                                                if($student['student_gender'] == "Male"){
                                                                    echo "checked";
                                                                }
                                                            ?>
                                                            value="Male" class="custom-control-input">
                                                            <label class="custom-control-label" for="hRadio1">Male</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-check mb-1">
                                                        <div class="custom-control custom-radio classic-radio-info">
                                                            <input type="radio" id="hRadio2" name="student_gender"
                                                            <?php
                                                                if($student['student_gender'] == "Female"){
                                                                    echo "checked";
                                                                }
                                                            ?>
                                                            value="Female" class="custom-control-input">
                                                            <label class="custom-control-label" for="hRadio2">Female</label>
                                                        </div>
                                                    </div>
                                                    <label id="gender_error"></label>
                                                </div>
                                                
                                            </div>
                                        </fieldset>

                                        <div class="form-group row mb-4">
                                            <label for="student_bod" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Date of Birth</label>
                                            <div class="col-xl-3 col-lg-4 col-sm-3">
                                                <input type="date" class="form-control-rounded form-control"  value="<?=$student['student_bod']?>"
                                                name="student_bod" id="student_bod" required>
                                                <div class="help-block with-errors"></div>   
                                            </div>
                                        </div>


                                        <div class="form-group row mb-4">
                                            <label for="student_contact_no" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Contact Number</label>
                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                                <input type="tel" class="form-control-rounded form-control" value="<?=$student['student_contact_no']?>"
                                                name="student_contact_no" id="student_contact_no"minlength="10" maxlength="10" data-required-error="Please enter a valid 10-digit phone number" required >
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-4">
                                            <label for="student_address" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Address</label>
                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                                <input type="text" class="form-control-rounded form-control" value="<?=$student['student_address']?>"
                                                name="student_address" id="student_address" data-required-error="Please enter a address" required>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-4"> 
                                            <label for="student_registration_date" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Registration Date</label>
                                            <div class="col-xl-3 col-lg-9 col-sm-3">
                                                <input type="date" class="form-control-rounded form-control" value="<?=$student['student_registration_date']?>"
                                                name="student_registration_date" id="student_registration_date" placeholder="" required>
                                            </div>
                                        </div>

                                        <div class="form-group row ">

                                            <!-- <div class=" col-sm-1"> &nbsp;
                                            </div>     -->
                                        
                                                <div class=" col-sm-10">
                                                    
                                                    <button type="submit" value="Submit" class="btn-material btn-material-primary  mb-2 mr-3">Update</button>
                                                    
                                                </div>
                                            
                                        </div>
                                    </form>
                                <!-- < ?php echo form_close()?> -->
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>



       
<?= $this->endSection() ?>