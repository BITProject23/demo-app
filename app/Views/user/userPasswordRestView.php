<?= $this->extend('layouts/main_layout.php') ?>

<?= $this->section('title') ?>
    Password Recovery
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    

        <div id="content" class="main-content">
            <div class="container">
                <div class="page-header">
                    <div class="page-title">
                        <h3> Password Recovery 
                            
                        </h3>
                        <div class="crumbs">
                            <ul id="breadcrumbs" class="breadcrumb">
                                <li><a href="index-2.html"><i class="flaticon-home-fill"></i></a></li>
                                <li><a href="#">user</a></li>
                                <li><a href="#">Rest Password</a></li>
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
                                        <h4>Password Recovery</h4>   
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
                                        <!-- <a href="< ?=base_url()?>/" class="btn btn-dark btn-rounded mb-2 mr-2"><span>Back to previous</span></a> -->
                                    </div>                                                                        
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                

                                    <form name="form1" action="<?php echo base_url();?>/User_PasswordResetAction" data-toggle="validator" method ="post">
                                

                                        <div class="form-group row mb-4">
                                            <label for="course_name" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Current Password </label>
                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                                <input type="password" class="form-control-rounded form-control" name="current_password" id="current_password" placeholder="" data-required-error="Please enter user password"  aria-describedby="inputPassword" required>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-4">
                                            <label for="course_code" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">New Password </label>
                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                                <input type="password" class="form-control-rounded form-control" name="new_password" id="new_password" placeholder="" data-required-error="Please enter user password"  aria-describedby="inputPassword" required>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>


                                        <div class="form-group row mb-4">
                                            <label for="course_fee" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Confirm Password </label>
                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                                <input type="password" class="form-control-rounded form-control" name="confirm_password" id="confirm_password" placeholder="" data-required-error="Please enter user password"  aria-describedby="inputPassword" required>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                        <div class="form-group row ">
                                        
                                            <div class=" col-sm-10">
                                            
                                            
                                                <button type="reset" value="Reset" class="btn-material btn-material-default  mb-2 mr-2">Reset</button>
                                                <button type="submit" value="Submit" onclick="check01()" class="btn-material btn-material-primary  mb-2 mr-3">Submit</button>
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