<?= $this->extend('layouts/main_layout') ?>

<?= $this->section('title') ?>
    Student payment Table
<?= $this->endSection() ?>

<?= $this->section('content') ?>

    
        <!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content">
            <div class="container">
                <div class="page-header">
                    <div class="page-title">
                        <h3>payment</h3>
                        <div class="crumbs">
                            <ul id="breadcrumbs" class="breadcrumb">
                                <li><a href="index-2.html"><i class="flaticon-home-fill"></i></a></li>
                                <li><a href="#">payment</a></li>
                                <li><a href="#">View payment</a></li>
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
                                        <h4>payment View</h4>
                                    </div>                 
                                </div>

                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <a href="<?=base_url()?>/Payment_add" class="btn btn-primary btn-rounded mb-2 mr-2"><span>Add New Entry</span></a>
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



                            <div class="widget-content widget-content-area">
                                <div class="table-responsive mb-4">
                                    <table id="default-ordering" class="table table-striped table-bordered table-hover" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Batch No</th>
                                                <th>Course</th>
                                                <th>Student No</th>
                                                <th>Student Name</th>
                                                <th>Paid Amount</th>
                                                <th>Payment Date</th>
                                                <th>Remark</th>
                                                <th>Edit</th>
                                                <th></th>
                                                <!-- <th class="invisible"></th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($payments as $payment): ?>
                                                <tr>
                                                    <td><?= $payment['batch_no']?></td>
                                                    <td><?= $payment['course_name']?></td>
                                                    <td><?= $payment['student_no']?></td>
                                                    <td><?= $payment['student_first_name']?> <?= $payment['student_last_name']?></td>
                                                    <td><?= $payment['course_payment']?></td>
                                                    <td><?= $payment['payment_year_month']?></td>
                                                    <td><?= $payment['payment_remark']?></td>
                                                    <td class="text-center"><a href="<?=base_url()?>/" data-toggle="tooltip" data-placement="top"><i class="flaticon-edit  bg-success p-1 text-white br-6 mb-1"></i></a></td>
                                                    
                                                   
                                                    <!-- <td class="text-center"><a href="" data-toggle="tooltip" data-placement="top" title="Delete"><i class="flaticon-delete  bg-danger p-1 text-white br-6 mb-1"></i></a></td> -->
                                                    
                                                </tr>
                                            <?php endforeach; ?>    
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Batch No</th>
                                                <th>Course</th>
                                                <th>Student No</th>
                                                <th>Student Name</th>
                                                <th>Paid Amount</th>
                                                <th>Payment Date</th>
                                                <th>Remark</th>
                                                <th>Edit</th>
                                                <th></th>
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