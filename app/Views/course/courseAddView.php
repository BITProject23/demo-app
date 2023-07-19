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
                                    

                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <a href="<?=base_url()?>/Course_View" class="btn btn-dark btn-rounded mb-2 mr-2"><span>Back to previous</span></a>
                                    </div>                                                                        
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                
                                

                                    <form name="form1" action="<?php echo base_url();?>/Course_create" data-toggle="validator" method ="post">
                                

                                        <div class="form-group row mb-4">
                                            <label for="course_name" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Course Name </label>
                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                            <input type="text" class="form-control-rounded form-control" name="course_name" id="course_name" data-required-error="Please enter course name" placeholder="" required>
                                            <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-4">
                                            <label for="course_code" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Course code </label>
                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                            <input type="text" class="form-control-rounded form-control" name="course_code" id="course_code" data-required-error="Please enter course code" placeholder="" required>
                                            <div class="help-block with-errors"></div>
                                            </div>
                                        </div>


                                        <div class="form-group row mb-4">
                                            <label for="course_fee" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Course Fee </label>
                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                            <input type="number" class="form-control-rounded form-control" name="course_fee" id="course_fee" min="0" max="100000" data-required-error="Please enter course fee" placeholder="" required>
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