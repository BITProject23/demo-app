<?= $this->extend('layouts/main_layout.php') ?>

<?= $this->section('title') ?>
    Batch
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    

        <div id="content" class="main-content">
            <div class="container">
                <div class="page-header">
                    <div class="page-title">
                        <h3> Batch 
                            <!-- <small>Rounded</small> -->
                        </h3>
                        <div class="crumbs">
                            <ul id="breadcrumbs" class="breadcrumb">
                                <li><a href="index-2.html"><i class="flaticon-home-fill"></i></a></li>
                                <li><a href="#">Batch</a></li>
                                <li><a href="#">Add New Batch</a></li>
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
                                        <h4>Batch form</h4>
                                    </div>                                                                        
                                </div>

                                <?php if(session()->has('success')):?>

                                    <div class="alert alert-success mb-4"><?=session('success')?></div>

                                <?php endif ?>

                                
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <a href="<?=base_url()?>/Batch_Join" class="btn btn-dark btn-rounded mb-2 mr-2"><span>Back to previous</span></a>
                                    </div>                                                                        
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">

                                <form name="formbatch" action='<?php echo base_url();?>/Batch_save' method ="post">
                                    
                                    <div class="form-group row mb-4">
                                        <label for="courses" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Course</label>
                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                            <select class="form-control-rounded form-control" name="courses" id="courses" placeholder="">
                                                <option value="">Select the Course</option>
                                                <?php foreach($courses as $course): ?>
                                                        <option value="<?= $course['course_id']?>"><?=$course['course_name'] ?></option>
                                                <?php endforeach; ?>  
                                                
                                            </select>
                                        </div>
                                    </div>


                                    <div class="form-group row mb-4">
                                        <label for="batch_no" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Batch No </label>
                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                          <input type="text" class="form-control-rounded form-control" name="batch_no" id="batch_no" placeholder="">
                                        </div>
                                    </div>

                                    

                                                       
                                    <div class="form-group row mb-4">
                                        <label for="batch_day" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Day </label>
                                        <div class="col-xl-3 col-lg-9 col-sm-3">
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

                                    <div class="form-group row mb-4">
                                        <label for="batch_start_date" class="col-xl-2 col-sm-3 col-sm-2 col-form-label"> Start Date</label>
                                        <div class="col-xl-3 col-lg-9 col-sm-3">
                                                <input type="date" class="form-control-rounded form-control" name="batch_start_date" id="batch_start_date" placeholder="">
                                        </div>
                                    </div>


                                    

                                    

                                    <div class="form-group row ">
                                    
                                        <div class=" col-sm-10">
                                        
                                            <button type="reset" value="Reset" class="btn-material btn-material-default  mb-2 mr-2">Reset</button>
                                            <button type="submit" value="Submit" class="btn-material btn-material-primary  mb-2 mr-3">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

        

<script>

$(document).ready(function(){

    alert("assd");

   $('#courses').change(function(){

     alert("test" + $('#courses').val());
    
    let  courseID = $('#courses').val();
    let courseCode;
    // alert(courseID);

    $.ajax({
        url:'http://localhost/demo_app/getCourseCode',
        method: 'POST',
        data: {'courseID':courseID}
        dataType:text,
         // /json
        successs : function (response){
            alert('response' + response);
            courseCode = response;
        },
        error : function (error) {
            //alert('error' + error);
        }
    });

    $('#batch_no').val(courseCode);

   });

});


</script>
    

       
<?= $this->endSection() ?>