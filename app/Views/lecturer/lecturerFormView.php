<?= $this->extend('layouts/main_layout.php') ?>

<?= $this->section('title') ?>
     Lecturer
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
                                <li><a href="#">Add New Lecturer</a></li>
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
                                        <h4>Lecturer form</h4>
                                    </div>                                                                        
                                </div>


                                <?php if(session()->has('success')) : ?>

                                    <div class="alert alert-success mb-4"><?=session('success')?></div>

                                <?php endif ?>

                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <a href="<?=base_url()?>/Lecturer_View" class="btn btn-dark btn-rounded mb-2 mr-2"><span>Back to previous</span></a>
                                    </div>                                                                        
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">

                                <!-- < ?php echo form_open('LecCreate') ?> -->
                                    <form name="lectureform" id="lectureform" method="post" action="<?=base_url()?>/LecCreate">
                                        <div class="form-group row mb-4">
                                            <label for="lecturer_first_name" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">First Name </label>
                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                            <input type="text" class="form-control-rounded form-control"  name="lecturer_first_name" id="lecturer_first_name" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-4">
                                            <label for="lecturer_last_name" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Last Name </label>
                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                            <input type="text" class="form-control-rounded form-control"  name="lecturer_last_name" id="lecturer_last_name" placeholder="">
                                            </div>
                                        </div>
    

                                        <div class="form-group row mb-4">
                                            <label for="lecturer_nic" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">NIC </label>
                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                            <input type="text" class="form-control-rounded form-control " name="lecturer_nic" id="lecturer_nic" placeholder="">
                                            <span class="" id="nicmsg"> test</span>
                                            </div>
                                        </div>


                                        
                                        <div class="form-group row mb-4">
                                            <label for="lecturer_email" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Email</label>
                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                                <input type="email" class="form-control-rounded form-control" name="lecturer_email" id="lecturer_email" placeholder="">
                                            </div>
                                        </div>


                                        <fieldset class="form-group mb-4">
                                            <div class="row">
                                                <label class="col-form-label col-xl-2 col-sm-3 col-sm-2 pt-0">Gender</label>
                                                <div class="col-xl-10 col-lg-9 col-sm-10">
                                                    <div class="form-check mb-2">
                                                        <div class="custom-control custom-radio classic-radio-info">
                                                            <input type="radio" id="hRadio1" name="lecturer_gender" value="Male" class="custom-control-input">
                                                            <label class="custom-control-label" for="hRadio1">Male</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <div class="custom-control custom-radio classic-radio-info">
                                                            <input type="radio" id="hRadio2" name="lecturer_gender" value="Female" class="custom-control-input">
                                                            <label class="custom-control-label" for="hRadio2">Female</label>
                                                        </div>
                                                    </div>

                                                    
                                                </div>
                                            </div>
                                        </fieldset>

                                        <div class="form-group row mb-4">
                                            <label for="lecturer_bod" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Date of Birth</label>
                                            <div class="col-xl-3 col-lg-9 col-sm-3">
                                                    <input type="date" class="form-control-rounded form-control" name="lecturer_bod" id="lecturer_bod" placeholder="">
                                            </div>
                                        </div>



                                        <div class="form-group row mb-4">
                                            <label for="lecturer_contact_no" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Contact Number</label>
                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                                    <input type="tel" class="form-control-rounded form-control" name="lecturer_contact_no" id="lecturer_contact_no" placeholder="+77xxxxxxx">
                                            </div>
                                        </div>

                                        <div class="form-group row mb-4">
                                            <label for="lecturer_address" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Address</label>
                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                                    <input type="text" class="form-control-rounded form-control" name="lecturer_address" id="lecturer_address" placeholder="">
                                            </div>
                                        </div>

                                        <div class="form-group row ">
                                        
                                            <div class=" col-sm-10">
                                            
                                            
                                                <button type="reset" value="Reset" class="btn-material btn-material-default  mb-4 mr-3">Reset</button>
                                                <button type="submit" value="Submit" id="submit" class="btn-material btn-material-primary  mb-4 mr-3">Submit</button>
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
</script>


       
<?= $this->endSection() ?>
