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

                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <?= session()->getFlashdata('success');?>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                <?php endif ?>

                                
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <a href="<?=base_url()?>/Batch_View" class="btn btn-dark btn-rounded mb-2 mr-2"><span>Back to previous</span></a>
                                    </div>                                                                        
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">

                                <form name="formbatch" action='<?php echo base_url();?>/Batch_create' data-toggle="validator" method ="post">
                                    
                                    <div class="form-group row mb-4">
                                        <label for="courses" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Course</label>
                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                            <select class="form-control-rounded form-control" name="courses" id="courses" placeholder="" required>
                                                <option value="">Select the Course</option>
                                                <?php foreach($courses as $course): ?>
                                                    <option value="<?= $course['course_id']?>">
                                                        <?=$course['course_name'] ?>
                                                    </option>
                                                <?php endforeach; ?>  
                                                
                                            </select>
                                        </div>
                                    </div>


                                    <div class="form-group row mb-4">
                                        <label for="batch_no" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Batch No </label>
                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                          <input type="text" class="form-control-rounded form-control" name="batch_no" id="batch_no" data-required-error="Please enter batch number" required>
                                          <div class="help-block with-errors"></div>
                                        </div>
                                    </div>


                                    <div class="form-group row mb-4">
                                        <label for="batch_start_date" class="col-xl-2 col-sm-3 col-sm-2 col-form-label"> Start Date</label>
                                        <div class="col-xl-3 col-lg-9 col-sm-3">
                                            <input type="date" class="form-control-rounded form-control" name="batch_start_date" id="batch_start_date" placeholder="" required>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label for="batch_end_date" class="col-xl-2 col-sm-3 col-sm-2 col-form-label"> End Date</label>
                                        <div class="col-xl-3 col-lg-9 col-sm-3">
                                            <input type="date" class="form-control-rounded form-control" name="batch_end_date" id="batch_end_date" placeholder="" required>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 

<!-- <script>

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


</script> -->

<script>
  $(document).ready(function() {
   // alert("dd - "  + urltest);
    // Select the first option on page load
   // $('#courses').val($('#courses option:first').val());

    // Load data based on selected option
    $('#courses').change(function() {
      var selectedValue = $(this).val();
      loadData(selectedValue);
    });

    // Function to load data via Ajax
    function loadData(value) {
      $.ajax({
        url: "<?php echo base_url(); ?>" + "/load_data",
        method: "POST",
        data: { 
            selectedValue: value
         },
        dataType: "html",
        success: function(response) {
          $('#batch_no').val(response);
        },
        error: function(xhr, status, error) {
          console.log(xhr.responseText);
        }
      });
    }

    // Load data for the initially selected option
    var initialSelectedValue = $('#courses').val();
    loadData(initialSelectedValue);
  });
  </script>
    

       
<?= $this->endSection() ?>