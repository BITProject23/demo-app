<?= $this->extend('layouts/main_layout') ?>

<?= $this->section('title') ?>
    Batch Table
<?= $this->endSection() ?>

<?= $this->section('content') ?>

    
        <!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content">
            <div class="container">
                <div class="page-header">
                    <div class="page-title">
                        <h3>Batch</h3>
                        <div class="crumbs">
                            <ul id="breadcrumbs" class="breadcrumb">
                                <li><a href="index-2.html"><i class="flaticon-home-fill"></i></a></li>
                                <li><a href="#">Batch</a></li>
                                <li><a href="#">View Batch</a> </li>
                                <!-- <li class="active"><a href="#">Order Sorting</a> </li> -->
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
                                        <h4>Batch View</h4>
                                    </div>                 
                                </div>

                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <a href="<?=base_url()?>/Batch_add" class="btn btn-primary btn-rounded mb-2 mr-2"><span>Add New Entry</span></a>
                                    </div>                 
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



                            <div class="widget-content widget-content-area">
                                <div class="table-responsive mb-4">
                                    <table id="default-ordering" class="table table-striped table-bordered table-hover" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Batch ID</th>
                                                <th>Course Name</th>
                                                <th>Batch No</th>
                                                <th>Start Date</th>
                                                <th>End Date</th>
                                                <th>Timetable</th>
                                                <th>Edit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($batches as $batch): ?>
                                                <tr>
                                                    <td><?= $batch['batch_id']?></td>
                                                    <td><?= $batch['course_name']?></td>
                                                    <td><?= $batch['batch_no']?></td>
                                                    <!-- <td>< ?= $batch['batch_day']?></td> -->
                                                    <!-- <td>< ?= $batch['batch_time_from']?></td> -->
                                                    <!-- <td>< ?= $batch['batch_time_to']?></td> -->
                                                    <td><?= $batch['batch_start_date']?></td>
                                                    <td><?= $batch['batch_end_date']?></td>
                                                    <td class="text-center">
                                                        <a href="<?=base_url()?>/Batch_Timetable/<?= $batch['batch_id']?>" data-toggle="tooltip" data-placement="top"><i class="flaticon-calendar-1  bg-primary p-1 text-white br-6 mb-1"></i></a>
                                                    </td>
                                                    <td class="text-center"><a href="<?=base_url()?>/Batch_Edit/<?= $batch['batch_id']?>" data-toggle="tooltip" data-placement="top"><i class="flaticon-edit  bg-success p-1 text-white br-6 mb-1"></i></a></td>
                                                    <!-- <td class="text-center"><a href="" data-toggle="tooltip" data-placement="top" title="Delete"><i class="flaticon-delete  bg-danger p-1 text-white br-6 mb-1"></i></a></td> -->
                                                </tr>
                                            <?php endforeach; ?>    
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Batch ID</th>
                                                <th>Course Name</th>
                                                <th>Batch No</th>
                                                <th>Start Date</th>
                                                <th>End Date</th>
                                                <th>Edit</th>
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