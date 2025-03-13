<?= $this->extend('layouts/main_layout.php') ?>

<?= $this->section('title') ?>
    Student
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
                                <li><a href="#">Add New Student</a></li>
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
                                        <h4>Student form</h4>
                                    </div>                                                                        
                                </div>

                                
                                <?php if(session()->has('success')):?>

                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <?= session()->getFlashdata('success');?>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                <?php endif ?>


                                <?php if(session()->has('errors')) : ?>

                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <?= session()->getFlashdata('errors');?>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                    </div>
                                    
                                <?php endif; ?> 

                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <a href="<?=base_url()?>/Student_View" class="btn btn-dark btn-rounded mb-2 mr-2"><span>Back to previous</span></a>
                                    </div>                                                                        
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">

                                <!-- < ?php echo form_open('stuCreate') ?> -->
                                    <form name="studentForm" data-toggle="validator" action='<?php echo base_url();?>/student_create' id="studentForm" method ="post">


                                        <div class="form-group row mb-4">
                                            <label for="student_no" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Student No </label>
                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                                <input type="text" class="form-control-rounded form-control"  name="student_no" id="student_no" minlength="7" maxlength="7" placeholder="" data-required-error="Please enter student number" required
                                                value="<?= $stu_no?>" readonly>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-4">
                                            <label for="student_first_name" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">First Name </label>
                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                                <input type="text" class="form-control-rounded form-control"  name="student_first_name" id="student_first_name" minlength="3" maxlength="20" placeholder="" data-required-error="Please enter a first name" required>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-4">
                                            <label for="student_last_name" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Last Name </label>
                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                                <input type="text" class="form-control-rounded form-control"  name="student_last_name" id="student_last_name" minlength="3" maxlength="20" placeholder="" data-required-error="Please enter a last name" required >
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-4">
                                            <label for="student_nic" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">NIC </label>
                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                                <input type="text" class="form-control-rounded form-control"  name="student_nic" id="student_nic" minlength="10" maxlength="12" placeholder="" data-required-error="Please enter a valid NIC number" required>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>


                                        
                                        <div class="form-group row mb-4">
                                            <label for="student_email" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Email</label>
                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                                <input type="email" class="form-control-rounded form-control"  name="student_email" id="student_email" placeholder="" data-required-error="Please enter a valid email address" required >
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>


                                        <fieldset class="form-group mb-2">
                                            <div class="row">
                                                <label class="col-form-label col-xl-2 col-sm-3 col-sm-2 pt-0">Gender</label>
                                                <div class="col-xl-10 col-lg-9 col-sm-10">
                                                    <div class="form-check mb-2">
                                                        <div class="custom-control custom-radio classic-radio-info">
                                                            <input type="radio" id="hRadio1" name="student_gender" value="Male" class="custom-control-input" checked>
                                                            <label class="custom-control-label" for="hRadio1">Male</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <div class="custom-control custom-radio classic-radio-info">
                                                            <input type="radio" id="hRadio2" name="student_gender" value="Female" class="custom-control-input">
                                                            <label class="custom-control-label" for="hRadio2">Female</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </fieldset>

                                        <div class="form-group row mb-4">
                                            <label for="student_bod" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Date of Birth</label>
                                            <div class="col-xl-3 col-lg-4 col-sm-3">
                                                <input type="date" class="form-control-rounded form-control"  name="student_bod" id="student_bod" placeholder="" required>
                                                <div class="help-block with-errors"></div>   
                                            </div>
                                        </div>


                                        <div class="form-group row mb-4">
                                            <label for="student_contact_no" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Contact Number</label>
                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                                <input type="text" class="form-control-rounded form-control" name="student_contact_no" id="student_contact_no" minlength="10" maxlength="10" data-required-error="Please enter a valid 10-digit phone number" required >
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-4">
                                            <label for="student_address" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Address</label>
                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                                <input type="text" class="form-control-rounded form-control" name="student_address" id="student_address" data-required-error="Please enter a address" required >
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-4">
                                            <label for="student_qulify" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Qualification</label>
                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                                <input type="text" class="form-control-rounded form-control"  name="student_qulify" id="student_qulify"  >
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-4"> 
                                            <label for="student_registration_date" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Registration Date</label>
                                            <div class="col-xl-3 col-lg-9 col-sm-3">
                                                <input type="date" class="form-control-rounded form-control" name="student_registration_date" id="student_registration_date" placeholder="" required>
                                            </div>
                                        </div>

                                        <div class="form-group row ">

                                            <!-- <div class=" col-sm-1"> &nbsp;
                                            </div>     -->
                                        
                                                <div class=" col-sm-10">
                                                    
                                                    <button type="reset" value="Reset" class="btn-material btn-material-default  mb-2 mr-2">Reset</button>
                                                    <button type="submit" value="Submit" class="btn-material btn-material-primary  mb-2 mr-3">Submit</button>
                                                    
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

        <script src="public/assets_1/assets/js/libs/jquery-3.1.1.min.js"></script>
        <!-- <script src="public/assets_1/assets/js/validation.js"></script> -->


        <script>
            $(document).ready(function() {
                var now = new Date();

                var day = ("0" + now.getDate()).slice(-2);
                var month = ("0" + (now.getMonth() + 1)).slice(-2);

                var today = now.getFullYear()+"-"+(month)+"-"+(day) ;

                $('#student_registration_date').val(today);
            });
       </script>


       
<?= $this->endSection() ?>

<?= $this->section('footer') ?>

<?= $this->endSection() ?>