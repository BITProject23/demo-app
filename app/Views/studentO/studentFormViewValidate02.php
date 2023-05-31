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

                                <?php if(session()->has('success')) : ?>

                                    <div class="alert alert-success mb-4"><?=session('success')?></div>

                                <?php endif ?>

                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <a href="<?=base_url()?>/Student_View" class="btn btn-dark btn-rounded mb-2 mr-2"><span>Back to previous</span></a>
                                    </div>                                                                        
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">

                                <!-- < ?php echo form_open('stuCreate') ?> -->
                                    <form name="studentForm" action='<?php echo base_url();?>/stuCreate' onsubmit="return studentValidateForm()" method ="post">
                                        <div class="form-group row mb-4">
                                            <label for="student_first_name" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">First Name </label>
                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                            <input type="text" class="form-control-rounded form-control"  name="student_first_name" id="student_first_name" placeholder="">
                                            <lable id="student_first_n"></lable>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-4">
                                            <label for="student_last_name" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Last Name </label>
                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                            <input type="text" class="form-control-rounded form-control"  name="student_last_name" id="student_last_name" placeholder="">
                                            <lable id="student_last_n"></lable>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-4">
                                            <label for="student_nic" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">NIC </label>
                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                            <input type="text" class="form-control-rounded form-control"  name="student_nic" id="student_nic" placeholder="">
                                            <lable id="nic_error"></lable>
                                            </div>
                                        </div>


                                        
                                        <div class="form-group row mb-4">
                                            <label for="student_email" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Email</label>
                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                                <input type="email" class="form-control-rounded form-control"  name="student_email" id="student_email" placeholder="">
                                                <lable id="email_error"></lable>
                                            </div>
                                        </div>


                                        <fieldset class="form-group mb-4">
                                            <div class="row">
                                                <label class="col-form-label col-xl-2 col-sm-3 col-sm-2 pt-0">Gender</label>
                                                <div class="col-xl-10 col-lg-9 col-sm-10">
                                                    <div class="form-check mb-2">
                                                        <div class="custom-control custom-radio classic-radio-info">
                                                            <input type="radio" id="hRadio1" name="student_gender" value="Male" class="custom-control-input">
                                                            <label class="custom-control-label" for="hRadio1">Male</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <div class="custom-control custom-radio classic-radio-info">
                                                            <input type="radio" id="hRadio2" name="student_gender" value="Femal" class="custom-control-input">
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
                                                <input type="date" class="form-control-rounded form-control"  name="student_bod" id="student_bod" placeholder="">
                                                <lable id="dob_error"></lable>   
                                            </div>
                                        </div>


                                        <div class="form-group row mb-4">
                                            <label for="student_contact_no" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Contact Number</label>
                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                                <input type="tel" class="form-control-rounded form-control" name="student_contact_no" id="student_contact_no" pattern="[0-9]{10}" placeholder="+07xxxxxxxx">
                                                <lable id="phone_error"></lable>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-4">
                                            <label for="student_address" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Address</label>
                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                                    <input type="text" class="form-control-rounded form-control" name="student_address" id="student_address" placeholder="">
                                                    <lable id="student_add"></lable>
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
            function studentValidateForm(){
                if(document.getElementById("student_first_name").value==""){
                    document.getElementById("student_first_n").innerHTML="First name is required ";
                    document.getElementById("student_first_n").style.color="red";
                    return false;
                } else if(document.getElementById("student_last_name").value==""){
                    document.getElementById("student_last_n").innerHTML="Last name is required ";
                    document.getElementById("student_last_n").style.color="red";
                    return false;
                } 

                

                // NIC validation
                var nic = document.getElementById("student_nic").value;
                var nicRegex = /^[0-9]{9}[vVxX]$/;
                if (nic === "" || !nicRegex.test(nic)) {
                    document.getElementById("nic_error").innerHTML = "Please enter a valid NIC number.";
                    document.getElementById("nic_error").style.color = "red";
                    return false;
                } else {
                    document.getElementById("nic_error").innerHTML = "";
                }

                // Email validation
                var email = document.getElementById("student_email").value;
                var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (email === "" || !emailRegex.test(email)) {
                    document.getElementById("email_error").innerHTML = "Please enter a valid email address.";
                    document.getElementById("email_error").style.color = "red";
                    return false;
                } else {
                    document.getElementById("email_error").innerHTML = "";
                }

                // Gender validation
                var gender = document.querySelector('input[name="student_gender"]:checked');
                if (!gender) {
                    document.getElementById("gender_error").innerHTML = "Please select a gender.";
                    document.getElementById("gender_error").style.color = "red";
                    return false;
                } else {
                    document.getElementById("gender_error").innerHTML = "";
                }

                // Date of Birth validation
                var dob = document.getElementById("student_bod").value;
                if (dob === "") {
                    document.getElementById("dob_error").innerHTML = "Please select a date of birth.";
                    document.getElementById("dob_error").style.color = "red";
                    return false;
                } else {
                    document.getElementById("dob_error").innerHTML = "";
                }


                // Phone number validation
                var phoneNumber = document.getElementById("student_contact_no").value;
                var phoneNumberRegex = /^[0-9]{10}$/;
                if (phoneNumber === "" || !phoneNumberRegex.test(phoneNumber)) {
                    document.getElementById("phone_error").innerHTML = "Please enter a valid 10-digit phone number.";
                    document.getElementById("phone_error").style.color = "red";
                    return false;
                } else {
                    document.getElementById("phone_error").innerHTML = "";
                }


                //Address validation
                if(document.getElementById("student_address").value==""){
                    document.getElementById("student_add").innerHTML="Address is required ";
                    document.getElementById("student_add").style.color="red";
                    return false;
                } 
            }

        </script>


       
<?= $this->endSection() ?>