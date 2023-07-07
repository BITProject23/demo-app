<?= $this->extend('layouts/main_layout.php') ?>

<?= $this->section('title') ?>
    Enrollment 
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    

        <div id="content" class="main-content">
            <div class="container">
                <div class="page-header">
                    <div class="page-title">
                        <h3> Student Enrollment 
                            <!-- <small>Rounded</small> -->
                        </h3>
                        <div class="crumbs">
                            <ul id="breadcrumbs" class="breadcrumb">
                                <li><a href="index-2.html"><i class="flaticon-home-fill"></i></a></li>
                                <li><a href="#">Student Enrollment</a></li>
                                <li><a href="#">Enroll Student</a></li>
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
                                        <h4>Student Enrollment</h4>   
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
                                        <a href="<?=base_url()?>/Student_View" class="btn btn-dark btn-rounded mb-2 mr-2"><span>Back to previous</span></a>
                                    </div>                                                                        
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                
                                
                                    <form name="studentEnrollmentform" action='<?php echo base_url();?>/Enrollment_create' method ="post">
                                
                                        <input type="hidden" name="student_id" value="<?=$studentId?>">

                                        <div class="form-group row mb-4">
                                            <label for="courses" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Course</label>
                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                                <select class="form-control-rounded form-control" name="courses" id="courses" placeholder="">
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
                                                <select class="form-control-rounded form-control" name="batches" id="batches" placeholder="">
                                                    <option value="">Select the Batch</option>
                                                    <!-- < ?php foreach($batches as $batch): ?>
                                                        <option value="< ?= $batch['batch_id']?>">< ?=$batch['batch_no'] ?></option>
                                                    < ?php endforeach; ?>      -->
                                                </select>
                                            </div>
                                        </div>

                                        
                                        <div class="form-group row mb-4"> 
                                            <label for="en_date" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Enrollment Date</label>
                                            <div class="col-xl-3 col-lg-9 col-sm-3">
                                                <input type="date" class="form-control-rounded form-control" name="en_date" id="en_date" placeholder="">
                                            </div>
                                        </div>


                                        <div class="form-group row ">
                                        
                                            <div class=" col-sm-10">
                                            
                                            
                                                <button type="reset" value="Reset" class="btn-material btn-material-default  mb-2 mr-2">Reset</button>
                                                <button type="submit" value="Enroll" class="btn-material btn-material-primary  mb-2 mr-3">Enroll</button>
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
        $(document).ready(function() {
            var now = new Date();

            var day = ("0" + now.getDate()).slice(-2);
            var month = ("0" + (now.getMonth() + 1)).slice(-2);

            var today = now.getFullYear()+"-"+(month)+"-"+(day) ;

            $('#en_date').val(today);
        });
       </script>

       <script>
            $(document).ready(function() {
                // Load data based on selected option
                $('#courses').change(function() {
                    var sval = $(this).val();
                    loadData(sval);
                });

                // Function to load data via Ajax
                function loadData(value) {
                $.ajax({
                    url: "<?php echo base_url(); ?>" + "/Batch_By_Course",
                    method: "POST",
                    data: { 
                        selectedValue: value
                    },
                    success: function(response) {
                        var data = JSON.parse(response); //decode the json_encode $data
                        var batchSelect = $('#batches');
                        batchSelect.html('<option value="">Select the Batch</option>');
                        data.forEach(b => {
                            let opt = document.createElement('option'); //??????
                            opt.value = b.batch_id;
                            opt.textContent = b.batch_no // or opt.innerHTML += user.name
                            batchSelect.append(opt);
                        });
                    },
                    error: function(xhr, status, error) {
                        console.log(xhr.responseText);
                    }
                });
                }
            });
        </script>
<?= $this->endSection() ?>