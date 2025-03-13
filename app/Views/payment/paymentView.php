<?= $this->extend('layouts/main_layout.php') ?>

<?= $this->section('title') ?>
    Payment
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    

        <div id="content" class="main-content">
            <div class="container">
                <div class="page-header">
                    <div class="page-title">
                        <h3> Payments
                            <!-- <small>Rounded</small> -->
                        </h3>
                        <div class="crumbs">
                            <ul id="breadcrumbs" class="breadcrumb">
                                <li><a href="index-2.html"><i class="flaticon-home-fill"></i></a></li>
                                <li><a href="#">Payments</a></li>
                                <li><a href="#">View Payments</a></li>
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
                                        <h4>Payments</h4>
                                    </div>                                                                        
                                </div>

                                <?php if(session()->has('success')) : ?>

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

                                <?php endif ?>

                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <a href="<?=base_url()?>/Payment_View" class="btn btn-dark btn-rounded mb-2 mr-2"><span>Back to previous</span></a>
                                    </div>                                                                        
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">


                                <form name="paymentForm" action='<?php echo base_url();?>/Payment_create' data-toggle="validator" id="paymentForm" method ="post">
                                    
                                

                                    <div class="form-group row mb-4">
                                        <label for="exampleFormControlSelect1" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Batch</label>
                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                            <select class="form-control-rounded form-control" name="batches" id="batches" placeholder="" required>
                                            <option value="">Select the Batch</option>
                                                <?php foreach($batches as $batch): ?>
                                                    <option value="<?= $batch['batch_id']?>">
                                                        <?=$batch['batch_no'] ?>
                                                    </option>
                                                <?php endforeach; ?> 
                                                
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                            <label for="batch_no" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Student Name </label>
                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                                <select class="form-control-rounded form-control" name="students" id="students" placeholder="">
                                                    <option value="">Select the Student</option>
                                                </select>
                                            </div>
                                        </div>

                                    <div class="form-group row mb-4">
                                        <label for="course_payment" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Paid Amount</label>
                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                          <input type="number" class="form-control-rounded form-control" min="1" max="100000" name="course_payment" id="course_payment" data-required-error="Please enter paid amount " placeholder="" required>
                                          <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label for="payment_year_month" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Payment Date</label>
                                        <div class="col-xl-3 col-lg-9 col-sm-10">
                                          <input type="date" class="form-control-rounded form-control" name="payment_year_month" id="payment_year_month" placeholder="" required>
                                        </div>
                                    </div>
                                               

                                    <div class="form-group row mb-4">
                                        <label for="payment_remark" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Remark</label>
                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                                <input type="text" class="form-control-rounded form-control" name="payment_remark" id="payment_remark" placeholder="">
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
            $(document).ready(function() {
                // Load data based on selected option
                $('#batches').change(function() {
                    var sval = $(this).val();
                    loadData(sval);
                });

                // Function to load data via Ajax
                function loadData(value) {
                $.ajax({
                    url: "<?php echo base_url(); ?>" + "/Batch_By_Enrollment",
                    method: "POST",
                    data: { 
                        selectedValue: value
                    },
                    success: function(response) {
                        var data = JSON.parse(response); //decode the json_encode $data
                        var StudentSelect = $('#students'); //what you are going to append that ID should get here
                        StudentSelect.html('<option value="">Select the Student</option>');
                        data.forEach(b => {
                            let opt = document.createElement('option');
                            opt.value = b.student_id;
                            opt.textContent = b.student_first_name+' '+b.student_last_name // or opt.innerHTML += user.name
                            StudentSelect.append(opt);
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