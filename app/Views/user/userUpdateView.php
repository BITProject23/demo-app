<?= $this->extend('layouts/main_layout.php') ?>

<?= $this->section('title') ?>
    User Update 
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    

        <div id="content" class="main-content">
            <div class="container">
                <div class="page-header">
                    <div class="page-title">
                        <h3> User Management
                        </h3>
                        <div class="crumbs">
                            <ul id="breadcrumbs" class="breadcrumb">
                                <li><a href="index-2.html"><i class="flaticon-home-fill"></i></a></li>
                                <li><a href="#">User Management</a></li>
                                <li><a href="#">Update User</a></li>
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
                                        <h4>Update User </h4>   
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
                                        <a href="<?=base_url()?>/User_View" class="btn btn-dark btn-rounded mb-2 mr-2"><span>Back to previous</span></a>
                                    </div>                                                                        
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                
                                

                                    <form name="userform" action="<?php echo base_url();?>/User_Update" data-toggle="validator" method ="post">
                                
                                    <input type="hidden" value="<?=$user['user_id']?>" name="user_id">

                                        <div class="form-group row mb-4">
                                            <label for="user_name" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">User  name </label>
                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                            <input type="text" class="form-control-rounded form-control" value="<?=$user['user_name']?>"
                                             name="user_name" id="user_name" data-required-error="Please enter user name" required>
                                            <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-4">
                                            <label for="user_email" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">User Email </label>
                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                            <input type="email" class="form-control-rounded form-control" value="<?=$user['user_email']?>"
                                             name="user_email" id="user_email" data-required-error="Please enter user email"  required>
                                            <div class="help-block with-errors"></div>
                                            </div>
                                        </div>


                                        <div class="form-group row ">
                                        
                                            <div class=" col-sm-10">
                                            
                                                <button type="submit" value="Submit"  class="btn-material btn-material-primary  mb-2 mr-3">Update</button>
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