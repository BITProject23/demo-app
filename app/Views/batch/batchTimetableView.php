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

                                <form name="formbatch" action='<?php echo base_url();?>/Batch_Timetable_create' method ="post">

                                <input type="hidden" value="<?=$batch['batch_id']?>" name="batch_id">

                                    <div class="form-group row mb-4">
                                        <label for="batch_day" class="col-xl-2 col-sm-4 col-sm-2 col-form-label">Day </label>
                                        <div class="col-xl-3 col-lg-4 col-sm-3">
                                            <select class="form-control-rounded form-control" name="batch_day" id="batch_day" placeholder="">
                                                <option value="Monday">Monday</option>
                                                <option value="Tuesday">Tuesday</option>
                                                <option value="Wednesday">Wednesday</option>
                                                <option value="Thursday">Thursday</option>
                                                <option value="Friday">Friday</option>
                                                <option value="Saturday">Saturday</option>
                                                <option value="Sunday">Sunday</option>
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

                                    <div class="table-responsive mb-4">
                                    <table id="default-ordering" class="table table-striped table-bordered table-hover" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Subject</th>
                                                <th>Time From</th>
                                                <th>Time To</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php foreach($subjects as $subject): ?>
                                                <tr>
                                                    <td><input type="hidden" name="subject_id[]" value="<?=$subject['subject_id']?>"> <!--multiple insert of data put as name with array ex:- name="subject_id[]" || from [] it identify as array -->
                                                    <?= $subject['subject_name']?></td>
                                                    <td><input type="time" name="subject_time_from[]" id="subject_time_from"></td>
                                                    <td><input type="time" name="subject_time_to[]" id="subject_time_to"></td>
                                                    
                                                </tr>
                                            <?php endforeach; ?> 
                                            
                                        </tbody>  
                                    </table>

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
                                                <!-- <th>Edit</th> -->
                                                <th>Details</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($batchTimes as $batchTime): ?>
                                                <tr>
                                                    <td><?= $batchTime['batch_no']?></td>
                                                    <td><?= $batchTime['batch_day']?></td>
                                                    <td><?= $batchTime['batch_time_from']?></td>
                                                    <td><?= $batchTime['batch_time_to']?></td>
                                                    <!-- <td class="text-center">
                                                        <a href="" data-toggle="tooltip" data-placement="top" target="_blank"><i class="flaticon-edit  bg-success p-1 text-white br-6 mb-1"></i></a>
                                                    </td> -->
                                                    <td class="text-center">
                                                        <a href="#" onclick="showDetails(<?= $batchTime['batch_timeframe_id']?>)"><i class="flaticon-search-1  bg-primary p-1 text-white br-6 mb-1"></i></a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?> 
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Batch No</th>
                                                <th>Day </th>
                                                <th>Time From</th>
                                                <th>Time To</th>
                                                <!-- <th>Edit</th> -->
                                                <th>Details</th>
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

    <script>
        function showDetails(batch_timeframe_id){ 

            $.ajax({
                url: "<?php echo base_url(); ?>" + "/load_subjectTime",
                method: "POST",
                data: { 
                    selectedValue: batch_timeframe_id  //key:value
                },
                dataType: "html",
                success: function(response) {  //
                $('.modal-body').html(response);
                $('#data_modal').modal('show');
                },
                error: function(xhr, status, error) {
                console.log(xhr.responseText);
                }
            });
                
 }
    </script>
    
<?= $this->endSection() ?>