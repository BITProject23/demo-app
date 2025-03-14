<?= $this->extend('layouts/main_layout.php') ?>

<?= $this->section('title') ?>
    Course-Subject
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    

        <div id="content" class="main-content">
            <div class="container">
                <div class="page-header">
                    <div class="page-title">
                        <h3> Course-Subject
                        </h3>
                        <div class="crumbs">
                            <ul id="breadcrumbs" class="breadcrumb">
                                <li><a href="index-2.html"><i class="flaticon-home-fill"></i></a></li>
                                <li><a href="#">Course-Subject</a></li>
                                <li><a href="#">Course-Subject Update</a></li>
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
                                        <h4>Course-Subject</h4>   
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
                                        <a href="<?=base_url()?>/courseSubject_View" class="btn btn-dark btn-rounded mb-2 mr-2"><span>Back to previous</span></a>
                                    </div>                                                                        
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                

                                    <form name="form1" action='<?php echo base_url();?>/courseSubjectUpdate' data-toggle="validator" method ="post">

                                    <input type="hidden" name="course_subjects_id_ref" value="<?=$courseSubject['course_subject_id']?>">


                                    <!-- <input type="hidden" name="course_subject_id" value="< ?=$courseSubjectId['course_subject_id']?>"> -->
                                

                                        <div class="form-group row mb-4">
                                            <label for="courses" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Course Name </label>
                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                            <input type="text" class="form-control-rounded form-control" value="<?=$courses['course_name']?>"
                                                name="student_no" id="student_no" placeholder="" readonly>

                                            <!-- < ?=$courses['course_name']?>   -->
                                                <!-- <select class="form-control-rounded form-control" name="courses" id="courses" placeholder="">
                                                    <option value="">Select the Course</option>
                                                    < ?php foreach($courses as $course): ?>
                                                        <option value="< ?= $course['course_id']?>">< ?=$course['course_name'] ?></option>
                                                    < ?php endforeach; ?>      
                                                </select> -->
                                            </div>
                                        </div>

                                        <div class="form-group row mb-4">
                                            <label for="subjects" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Subjects</label>
                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                                <select class="form-control-rounded form-control" name="course_subject" id="subjects" data-toggle="validator" required>
                                                    <option value="">Select the Subject</option>
                                                    <?php foreach ($subjects as $subject): ?>
                                                        <option value="<?= $subject['subject_id']?>"><?=$subject['subject_name'] ?></option>
                                                    <?php endforeach; ?> 
                                                </select>         
                                            </div>
                                        </div>


                                        <div class="form-group row ">
                                        
                                            <div class=" col-sm-10">
                                            
                                            
                                                <button type="submit" value="Submit" class="btn-material btn-material-primary  mb-2 mr-3">Update</button>
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