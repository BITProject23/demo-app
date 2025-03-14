<?= $this->extend('layouts/main_layout.php') ?>

<?= $this->section('title') ?>
    Subject
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    

        <div id="content" class="main-content">
            <div class="container">
                <div class="page-header">
                    <div class="page-title">
                        <h3> Subject 
                            <!-- <small>Rounded</small> -->
                        </h3>
                        <div class="crumbs">
                            <ul id="breadcrumbs" class="breadcrumb">
                                <li><a href="index-2.html"><i class="flaticon-home-fill"></i></a></li>
                                <li><a href="#">Subject</a></li>
                                <li><a href="#">Add New Subject</a></li>
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
                                        <h4>Subject form</h4>
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
                                        <a href="<?=base_url()?>/Subject_View" class="btn btn-dark btn-rounded mb-2 mr-2"><span>Back to previous</span></a>
                                    </div>                                                                        
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">


                                <!-- < ?php echo form_open('Subject_create') ?> -->
                                <form name="subjectForm" data-toggle="validator" action='<?php echo base_url();?>/Subject_create' id="subjectForm" method ="post">


                                        <div class="form-group row mb-4">
                                            <label for="subject_name" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Subject Name </label>
                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                            <input type="text" class="form-control-rounded form-control" name="subject_name" id="subject_name" data-required-error="Please enter subject name" required>
                                            <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                        

                                        <div class="form-group row mb-4">
                                            <label for="subject_code" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Subject code </label>
                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                            <input type="text" class="form-control-rounded form-control" name="subject_code" id="subject_code" data-required-error="Please enter subject code" required>
                                            <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-4">
                                            <label for="subject_status" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Subject status </label>
                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                            <input type="text" class="form-control-rounded form-control" name="subject_status" id="subject_status" data-required-error="Please enter subject code" required>
                                            <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                        
                                                                                                    
                                        <div class="form-group row ">
                                        
                                            <div class=" col-sm-10">
                                            
                                            
                                                <button type="reset" value="Reset" class="btn-material btn-material-default  mb-4 mr-3">Reset</button>
                                                <button type="submit" onclick="subCheck()" value="Submit" class="btn-material btn-material-primary  mb-4 mr-3">Submit</button>
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