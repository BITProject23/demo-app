<?= $this->extend('layouts/main_layout') ?>

<?= $this->section('title') ?>
    Course-Subject Table
<?= $this->endSection() ?>

<?= $this->section('content') ?>

    
        <!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content">
            <div class="container">
                <div class="page-header">
                    <div class="page-title">
                        <h3>Course-Subject</h3>
                        <div class="crumbs">
                            <ul id="breadcrumbs" class="breadcrumb">
                                <li><a href="index-2.html"><i class="flaticon-home-fill"></i></a></li>
                                <li><a href="#">Course-Subject</a></li>
                                <li><a href="#">View Course-Subject</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="row" id="cancel-row">
                
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Course-Subject View</h4>
                                    </div>                 
                                </div>

                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <a href="<?=base_url()?>/Subject_assign" class="btn btn-primary btn-rounded mb-2 mr-2"><span>Add New Entry</span></a>
                                    </div>                 
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
                                        <?= session()->getFlashdata('errors');?>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                    </div>
                            <?php endif; ?> 



                            <div class="widget-content widget-content-area">
                                <div class="table-responsive mb-4">
                                    <table id="default-ordering" class="table table-striped table-bordered table-hover" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Course-Subject ID</th>
                                                <th>Course Name</th>
                                                <th>Subject Name</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($courses as $course): ?>
                                                <tr>
                                                    <td><?= $course['course_subject_id']?></td>
                                                    <td><?= $course['course_name']?></td>
                                                    <td><?= $course['subject_name']?></td>
                                                    <td class="text-center">
                                                        <a href="<?=base_url()?>/courseSubjectEdit/<?= $course['course_subject_id']?>" data-toggle="tooltip" data-placement="top"><i class="flaticon-edit  bg-success p-1 text-white br-6 mb-1"></i></a>
                                                    </td>

                                                    <td class="text-center"><a href="#" onclick="deleteData('<?=base_url()?>/courseSubject_Delete/<?= $course['course_subject_id']?>')" data-toggle="tooltip" data-placement="top" title="Delete"><i class="flaticon-delete  bg-danger p-1 text-white br-6 mb-1"></i></a>     
                                                    <!-- < ?php
                                                        if($course['status']=='INACTIVE'){
                                                          echo $course['status'];                  
                                                        }else{
                                                    ?>

                                                        <a href="< ?=base_url()?>/courseSubjectChangeStatus/< ?= $course['course_subject_id']?>" data-toggle="tooltip" data-placement="top">
                                                        < ?=$course['status']?>
                                                        </a>
                                                    < ?php } ?> -->
                                                    </td> 
                                                </tr>
                                            <?php endforeach; ?>    
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Course-Subject ID</th>
                                                <th>Course Name</th>
                                                <th>Subject Name</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!--  END CONTENT PART  -->
    </div>
    <!-- END MAIN CONTAINER -->
    
<?= $this->endSection() ?>