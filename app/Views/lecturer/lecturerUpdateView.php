<?= $this->extend('layouts/main_layout.php') ?>

<?= $this->section('title') ?>
     Lecturer update
<?= $this->endSection() ?>

<?= $this->section('content') ?>


    

        <div id="content" class="main-content">
            <div class="container">
                <div class="page-header">
                    <div class="page-title">
                        <h3> Lecturer 
                            <!-- <small>Rounded</small> -->
                        </h3>
                        <div class="crumbs">
                            <ul id="breadcrumbs" class="breadcrumb">
                                <li><a href="index-2.html"><i class="flaticon-home-fill"></i></a></li>
                                <li><a href="#">Lecturer</a></li>
                                <li><a href="#">Edit Lecturer</a></li>
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
                                        <h4>Update Lecturer Details</h4>
                                    </div>                                                                        
                                </div>


                                <?php if(session()->has('success')) : ?>

                                    <div class="alert alert-success mb-4">
                                        <?=session('success')?>
                                    </div>

                                <?php endif ?>

                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <a href="<?=base_url()?>/Lecturer_View" class="btn btn-dark btn-rounded mb-2 mr-2"><span>Back to previous</span></a>
                                    </div>                                                                        
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">

                                <!-- < ?php echo form_open('LecCreate') ?> -->
                                    <form name="lectureform" action="<?=base_url()?>/Lecturer_Update" onsubmit="return lecturerValidateForm()" method="post">

                                        <input type="hidden" value=<?=$lecturer['lecturer_id']?> name="lecturer_id">

                                        <div class="form-group row mb-1">
                                            <label for="lecturer_no" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Lecturer EmpNo </label>
                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                                <input type="text" class="form-control-rounded form-control" value="<?=$lecturer['lecturer_no']?>"
                                                name="lecturer_no" id="lecturer_no" placeholder="">
                                                <label id="lecturer_no_error"></label>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-1">
                                            <label for="lecturer_first_name" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">First Name </label>
                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                                <input type="text" class="form-control-rounded form-control" value="<?=$lecturer['lecturer_first_name']?>"
                                                name="lecturer_first_name" id="lecturer_first_name" placeholder="">
                                                <label id="first_name_error"></label>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-1">
                                            <label for="lecturer_last_name" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Last Name </label>
                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                                <input type="text" class="form-control-rounded form-control" value="<?=$lecturer['lecturer_last_name']?>"
                                                name="lecturer_last_name" id="lecturer_last_name" placeholder="">
                                                <label id="last_name_error"></label>
                                            </div>
                                        </div>
    

                                        <div class="form-group row mb-4">
                                            <label for="lecturer_nic" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">NIC </label>
                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                                <input type="text" class="form-control-rounded form-control " value="<?=$lecturer['lecturer_nic']?>"
                                                name="lecturer_nic" id="lecturer_nic" placeholder="">
                                                <!-- <span class="" id="nicmsg"> test</span> -->
                                                <lable id="nic_error"></lable>
                                            </div>
                                        </div>


                                        
                                        <div class="form-group row mb-4">
                                            <label for="lecturer_email" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Email</label>
                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                                <input type="email" class="form-control-rounded form-control" value="<?=$lecturer['lecturer_email']?>"
                                                name="lecturer_email" id="lecturer_email" placeholder="">
                                                <lable id="email_error"></lable>
                                            </div>
                                        </div>


                                        <fieldset class="form-group mb-1">
                                            <div class="row">
                                                <label class="col-form-label col-xl-2 col-sm-3 col-sm-2 pt-0">Gender</label>
                                                <div class="col-xl-10 col-lg-9 col-sm-10">
                                                    <div class="form-check mb-2">
                                                        <div class="custom-control custom-radio classic-radio-info">
                                                            <input type="radio" id="hRadio1" name="lecturer_gender" 
                                                            <?php
                                                                if($lecturer['lecturer_gender'] == "Male"){
                                                                    echo "checked";
                                                                }
                                                            ?>
                                                            value="Male" class="custom-control-input">
                                                            <label class="custom-control-label" for="hRadio1">Male</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <div class="custom-control custom-radio classic-radio-info">
                                                            <input type="radio" id="hRadio2" name="lecturer_gender"
                                                            <?php
                                                                if($lecturer['lecturer_gender'] == "Female"){
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
                                            <label for="lecturer_bod" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Date of Birth</label>
                                            <div class="col-xl-3 col-lg-9 col-sm-3">
                                                <input type="date" class="form-control-rounded form-control" value="<?=$lecturer['lecturer_bod']?>"
                                                name="lecturer_bod" id="lecturer_bod" placeholder="">
                                                <lable id="dob_error"></lable>
                                            </div>
                                        </div>



                                        <div class="form-group row mb-4">
                                            <label for="lecturer_contact_no" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Contact Number</label>
                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                                <input type="tel" class="form-control-rounded form-control" value="<?=$lecturer['lecturer_contact_no']?>"
                                                name="lecturer_contact_no" id="lecturer_contact_no" pattern="[0-9]{10}">
                                                <lable id="phone_error"></lable>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-4">
                                            <label for="lecturer_address" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Address</label>
                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                                <input type="text" class="form-control-rounded form-control" value="<?=$lecturer['lecturer_address']?>"
                                                name="lecturer_address" id="lecturer_address" placeholder="">
                                                <label id="address_error"></label>
                                            </div>
                                        </div>

                                        <div class="form-group row ">
                                        
                                            <div class=" col-sm-10">
                                                <button type="submit" value="Submit" id="submit" class="btn-material btn-material-primary  mb-4 mr-3">Update</button>
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

<script> 
            function lecturerValidateForm(){

                // Lecturer No validation
                var lecturerNo = document.getElementById("lecturer_no").value;
                if (lecturerNo === "") {
                    document.getElementById("lecturer_no_error").innerHTML = "Please enter lecturer Emp-number.";
                    document.getElementById("lecturer_no_error").style.color = "red";
                    return false;
                } else {
                    document.getElementById("lecturer_no_error").innerHTML = "";
                }

                // First Name validation
                var firstName = document.getElementById("lecturer_first_name").value;
                if (firstName === "") {
                    // document.getElementById("first_name_error").empty();
                    document.getElementById("first_name_error").innerHTML = "Please enter a first name.";
                    document.getElementById("first_name_error").style.color = "red";
                    return false;
                } else {
                    document.getElementById("first_name_error").innerHTML = "";
                }

                // Last Name validation
                var lastName = document.getElementById("lecturer_last_name").value;
                if (lastName === "") {
                    document.getElementById("last_name_error").innerHTML = "Please enter a last name.";
                    document.getElementById("last_name_error").style.color = "red";
                    return false;
                } else {
                    document.getElementById("last_name_error").innerHTML = "";
                }

                // NIC validation
                var nic = document.getElementById("lecturer_nic").value;
                var nicRegex = /^[0-9]{9}[vVxX]$/;
                if (nic === "" || !nicRegex.test(nic)) {
                    document.getElementById("nic_error").innerHTML = "Please enter a valid NIC number.";
                    document.getElementById("nic_error").style.color = "red";
                    return false;
                } else {
                    document.getElementById("nic_error").innerHTML = "";
                }

                // Email validation
                var email = document.getElementById("lecturer_email").value;
                var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (email === "" || !emailRegex.test(email)) {
                    document.getElementById("email_error").innerHTML = "Please enter a valid email address.";
                    document.getElementById("email_error").style.color = "red";
                    return false;
                } else {
                    document.getElementById("email_error").innerHTML = "";
                }

                // Gender validation
                var gender = document.querySelector('input[name="lecturer_gender"]:checked');
                if (!gender) {
                    document.getElementById("gender_error").innerHTML = "Please select a gender.";
                    document.getElementById("gender_error").style.color = "red";
                    return false;
                } else {
                    document.getElementById("gender_error").innerHTML = "";
                }

                // Date of Birth validation
                var dob = document.getElementById("lecturer_bod").value;
                if (dob === "") {
                    document.getElementById("dob_error").innerHTML = "Please select a date of birth.";
                    document.getElementById("dob_error").style.color = "red";
                    return false;
                } else {
                    document.getElementById("dob_error").innerHTML = "";
                }


                // Phone number validation
                var phoneNumber = document.getElementById("lecturer_contact_no").value;
                var phoneNumberRegex = /^[0-9]{10}$/;
                if (phoneNumber === "" || !phoneNumberRegex.test(phoneNumber)) {
                    document.getElementById("phone_error").innerHTML = "Please enter a valid 10-digit phone number.";
                    document.getElementById("phone_error").style.color = "red";
                    return false;
                } else {
                    document.getElementById("phone_error").innerHTML = "";
                }

                // Address validation
                var address = document.getElementById("lecturer_address").value;
                if (address === "") {
                    document.getElementById("address_error").innerHTML = "Please enter an address.";
                    document.getElementById("address_error").style.color = "red";
                    return false;
                } else {
                    document.getElementById("address_error").innerHTML = "";
                }

                // Rest of the validation code

                return true;


            }

        </script>





<!-- <script>
$(document).ready(function(){

    alert("test");




$('#lectureform').submit(function(e){

  // var isformvalid =  validateForm();

  // reurn isformvalid;

  var nic = $("#lecturer_nic").val();

  if($('input[name="lecturer_gender"]:checked').length>0){
    alert("gender selected");
  }else{
    alert("no gender selected");
   return false;
  }

  if(nic === ''){
    alert("NIC is null");
    return false;
  }

  

 // alert("sadasd");

  return true;

});

});
</script> -->


       
<?= $this->endSection() ?>
