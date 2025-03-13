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
                        </h3>
                        <div class="crumbs">
                            <ul id="breadcrumbs" class="breadcrumb">
                                <li><a href="index-2.html"><i class="flaticon-home-fill"></i></a></li>
                                <li><a href="#">Lecturer</a></li>
                                <li><a href="#">Add New Lecturer</a></li>
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

                                <?php endif ?>

                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <a href="<?=base_url()?>/Lecturer_View" class="btn btn-dark btn-rounded mb-2 mr-2"><span>Back to previous</span></a>
                                    </div>                                                                        
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">

                                    <form name="lectureform" action="<?=base_url()?>/Lecturer_create" data-toggle="validator" method="post">

                                        <div class="form-group row mb-4">
                                            <label for="lecturer_no" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Lecturer EmpNo </label>
                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                                <input type="text" class="form-control-rounded form-control"  name="lecturer_no" id="lecturer_no" placeholder="" required 
                                                value="<?= $lec_no?>" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-4">
                                            <label for="lecturer_first_name" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">First Name </label>
                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                                <input type="text" class="form-control-rounded form-control"  name="lecturer_first_name" id="lecturer_first_name" minlength="3" maxlength="20" placeholder="" data-required-error="Please enter a first name" required>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-4">
                                            <label for="lecturer_last_name" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Last Name </label>
                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                                <input type="text" class="form-control-rounded form-control"  name="lecturer_last_name" id="lecturer_last_name" data-required-error="Please enter a last name" required>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
    

                                        <div class="form-group row mb-4">
                                            <label for="lecturer_nic" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">NIC </label>
                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                                <input type="text" class="form-control-rounded form-control " name="lecturer_nic" id="lecturer_nic" minlength="10" maxlength="12"  data-required-error="Please enter a valid NIC number" required>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>


                                        
                                        <div class="form-group row mb-4">
                                            <label for="lecturer_email" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Email</label>
                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                                <input type="email" class="form-control-rounded form-control" name="lecturer_email" id="lecturer_email" data-required-error="Please enter a valid email address" required>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>


                                        <fieldset class="form-group mb-1">
                                            <div class="row">
                                                <label class="col-form-label col-xl-2 col-sm-3 col-sm-2 pt-0">Gender</label>
                                                <div class="col-xl-10 col-lg-9 col-sm-10">
                                                    <div class="form-check mb-2">
                                                        <div class="custom-control custom-radio classic-radio-info">
                                                            <input type="radio" id="hRadio1" name="lecturer_gender" value="Male" class="custom-control-input" checked>
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
                                                <input type="date" class="form-control-rounded form-control" name="lecturer_bod" id="lecturer_bod" required>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>



                                        <div class="form-group row mb-4">
                                            <label for="lecturer_contact_no" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Contact Number</label>
                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                                <input type="tel" class="form-control-rounded form-control" name="lecturer_contact_no" id="lecturer_contact_no" minlength="10" maxlength="10" data-required-error="Please enter a valid 10-digit phone number" required >
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-4">
                                            <label for="lecturer_address" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Address</label>
                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                                <input type="text" class="form-control-rounded form-control" name="lecturer_address" id="lecturer_address" data-required-error="Please enter a address" required >
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                        <div class="form-group row ">
                                        
                                            <div class=" col-sm-10">                                         
                                                <button type="reset" value="Reset" class="btn-material btn-material-default  mb-4 mr-3">Reset</button>
                                                <button type="submit" value="Submit" id="submit" class="btn-material btn-material-primary  mb-4 mr-3">Submit</button>
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
