<?= $this->extend('layouts/main_layout') ?>

<?= $this->section('title') ?>
    Batch TimeSchedule
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
                                <li><a href="#">Batch TimeSchedule</a></li>
                                <li><a href="#">View Batch TimeSchedule</a> </li>
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
                                    <h4 class="pb-0"></h4>
                                    <a href="<?=base_url()?>/Batch_View" class="btn btn-dark btn-rounded mb-2 mr-2"><span>Back to previous</span></a>
                                    </div>                                                                        
                                </div>

                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4 class="pb-0">Course : <?= $batch['course_name']?></h4>
                                        <h4 class="pt-1">Batch : <?= $batch['batch_no']?></h4>
                                    </div>                 
                                </div>
                            </div>

                            <!-- < ?php if(session()->getFlashdata('success')): ?>
                            
                            < ?php echo session()->getFlashdata('success'); ?>
                            
                            < ?php endif; ?> -->
                            <div class="widget-content widget-content-area">

                                <form name="formbatch" action='<?php echo base_url();?>/Batch_Timetable_create' method ="post">

                                <input type="hidden" value="<?=$batch['batch_id']?>" name="batch_id">

                                    <div class="form-group row mb-4">
                                        <label for="batch_day" class="col-xl-2 col-sm-4 col-sm-2 col-form-label">Day </label>
                                        <div class="col-xl-3 col-lg-4 col-sm-3">
                                            <select class="form-control-rounded form-control" name="batch_day" id="batch_day" placeholder="">
                                                <option>Select the day</option>
                                                <option>Monday</option>
                                                <option>Tuesday</option>
                                                <option>Wednesday</option>
                                                <option>Thursday</option>
                                                <option>Friday</option>
                                                <option>Saturday</option>
                                                <option>Sunday</option>
                                            </select>
                                        </div>  
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label for="batch_time_from" class="col-xl-2 col-sm-3 col-sm-2 col-form-label"> Time From</label>
                                        <div class="col-xl-3 col-lg-9 col-sm-3">
                                                <input type="time" class="form-control-rounded form-control" name="batch_time_from" id="batch_time_from" placeholder="">
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label for="batch_time_to" class="col-xl-2 col-sm-3 col-sm-2 col-form-label"> Time To</label>
                                        <div class="col-xl-3 col-lg-9 col-sm-3">
                                                <input type="time" class="form-control-rounded form-control" name="batch_time_to" id="batch_time_to" placeholder="">
                                        </div>
                                    </div>


                                    <div class="form-group row ">
                                    
                                        <div class=" col-sm-10">
                                            <button type="reset" value="Reset" class="btn-material btn-material-default  mb-2 mr-2">Reset</button>
                                            <button type="submit" value="Submit" class="btn-material btn-material-primary  mb-2 mr-3">Add</button>
                                        </div>
                                    </div>
                                </form>
                                <hr>
                                <div class="table-responsive mb-4">
                                    <table id="default-ordering" class="table table-striped table-bordered table-hover" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Batch No</th>
                                                <th>Day </th>
                                                <th>Time From</th>
                                                <th>Time To</th>
                                                <th>Edit</th>
                                                <!-- <th>Delete</th> -->
                                                <!-- <th class="invisible"></th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($batchTimes as $batchTime): ?>
                                                <tr>
                                                    <td><?= $batchTime['batch_no']?></td>
                                                    <td><?= $batchTime['batch_day']?></td>
                                                    <td><?= $batchTime['batch_time_from']?></td>
                                                    <td><?= $batchTime['batch_time_to']?></td>
                                                    <td class="text-center">
                                                        <a href="" data-toggle="tooltip" data-placement="top" target="_blank"><i class="flaticon-edit  bg-success p-1 text-white br-6 mb-1"></i></a>
                                                    </td>
                                                    <!-- <td class="text-center">
                                                        <a href="< ?=base_url()?>" data-toggle="tooltip" data-placement="top"><i class="flaticon-edit  bg-success p-1 text-white br-6 mb-1"></i></a>
                                                    </td> -->
                                                    <!-- <td class="text-center"><a href="" data-toggle="tooltip" data-placement="top" title="Delete"><i class="flaticon-delete  bg-danger p-1 text-white br-6 mb-1"></i></a></td> -->
                                                </tr>
                                            <?php endforeach; ?> 
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Batch No</th>
                                                <th>Day </th>
                                                <th>Time From</th>
                                                <th>Time To</th>
                                                <th>Edit</th>
                                                <!-- <th>Delete</th> -->
                                                <!-- <th class="invisible"></th> -->
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