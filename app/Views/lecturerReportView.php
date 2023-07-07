<?= $this->extend('layouts/main_layout') ?>

<?= $this->section('title') ?>
    Report
<?= $this->endSection() ?>

<?= $this->section('content') ?>

        <!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content">
            <div class="container">
                <div class="page-header">
                    <div class="page-title">
                        <h3>Report</h3>
                        <div class="crumbs">
                            <ul id="breadcrumbs" class="breadcrumb">
                                <li><a href="index-2.html"><i class="flaticon-home-fill"></i></a></li>
                                <li><a href="#">Report</a></li>
                                <li class="active"><a href="#">Lecturers Detail Information</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row margin-bottom-120 invoice-print">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-content invoice">
                                    <div class="widget-content-area head-section mb-4">
                                        <div class="row">
                                            <div class="col-sm-6 col-12 text-sm-left text-center">
                                                <h3 class="in-heading mt-2 mb-2">Lecturers Information Report</h3>
                                            </div>
                                            <!-- <div class="col-sm-6 col-12 text-sm-right text-center">
                                                <a class="btn btn-gradient-secondary print-invoice btn-rounded mt-sm-0 mt-2 mb-2" href="invoice-print.html" target="_blank">Print Invoice</a>
                                                <a class="btn btn-gradient-danger print-invoice btn-rounded mt-sm-0 mt-2 mb-2" href="invoice-print.html" target="_blank">Download</a>
                                            </div> -->
                                        </div>
                                    </div>

                                    <div class="widget-content-area content-section">
                                        <div class="row invoice-top-section">
                                            <div class="col-sm-12 mb-3">
                                                <a href="index-2.html" class=""><img src="<?=base_url()?>/public/assets_1/assets/img/WAS.png" class="img-fluid" alt="logo"></a>
                                            </div>
                                            <div class="col-sm-8 mb-4">
                                                <h5 class="invoice-info-title">Wide Awake Solutions (Pvt) Ltd</h5>
                                                <!-- <p class="invoice-serial-number"></p> -->
                                            </div>
                                            <!-- <div class="col-sm-4 mb-4 text-sm-right">
                                                <p class="invoice-order-status">Order Status: Pending</p>
                                                <p class="invoice-order-date">Order Date: Jan 17 2019</p>
                                            </div> -->
                                        </div>

                                        <div class="row mt-3 mb-2">
                                            <div class="col-md-6 col-sm-6 invoice-from">
                                                <!-- <h5 class="invoice-from-title mb-4">Bill From</h5> -->
                                                <div class="row">
                                                    <div class="col-12 mb-4">
                                                        <p> No.213, Colombo Road,</p>  
                                                        <p>Pepiliyana,</p>
                                                        <p>Sri Lanka.</p>
                                                    </div>
                                                    <!-- <div class="col-12 mb-4">
                                                        <p>405 Mulberry Rd. Mc Grady,</p>
                                                        <p>NC, 28649</p>
                                                        
                                                    </div> -->
                                                    <div class="col-12 mb-4">
                                                        <p>Email: info@wideawakesl.com</p>
                                                        <p>Phone: 0112818027</p>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>

                                        <div class="row mt-5 mb-5">
                                            <div class="col-12">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th scope="col">Lecturer ID</th>
                                                                <th scope="col">Lecturer Name</th>
                                                                <th scope="col">Address</th>
                                                                <th scope="col">NIC No</th>
                                                                <th scope="col">Contact Details</th>
                                                                <th scope="col">Email</th>
                                                                <!-- <th class="text-right" scope="col">Address</th>
                                                                <th class="text-right" scope="col">NIC No</th>
                                                                <th class="text-right" scope="col">Contact Details</th>
                                                                <th class="text-right" scope="col">Email</th> -->
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Pasidu	Silva</td>
                                                                <td>No.421,Maligawaththa,kadawatha	</td>
                                                                <td>964585784V	</td>
                                                                <td>0765213748	</td>
                                                                <td>pasidu@gmail.com</td>
                                                                <!-- <td class="text-right">20</td>
                                                                <td class="text-right">30</td>
                                                                <td class="text-right">$2800</td> -->
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>Lihini	Perera</td>
                                                                <td>No.15,Main Road,Ja-ela</td>
                                                                <td>958512358V	</td>
                                                                <td>0712256986</td>
                                                                <td>lihini@gmail.com</td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>Sasanka	Disanayaka</td>
                                                                <td>No.89,Udugama Road, Colombo 01</td>
                                                                <td>926587943V</td>
                                                                <td>0728564235</td>
                                                                <td>sasanka@gmail.com</td>
                                                            </tr>
                                                            <tr>
                                                                <td>4</td>
                                                                <td>Hashani	Fernando</td>
                                                                <td>No.59,Manel mawatha, Kandy</td>
                                                                <td>908056471V	</td>
                                                                <td>0715647893</td>
                                                                <td>hashani@gmail.com</td>
                                                            </tr>
                                                            <tr>
                                                                <td>5</td>
                                                                <td>Achini	Samaraseekara</td>
                                                                <td>No.487,Dunugama Road,Kadawatha</td>
                                                                <td>869874361V</td>
                                                                <td>0768954721</td>
                                                                <td>achini@gmail.com</td>
                                                            </tr>
                                                            <tr>
                                                                <td>6</td>
                                                                <td>Thisal	Devinda</td>
                                                                <td>No.55/3,Perera Road,Piliyandala</td>
                                                                <td>856478936V</td>
                                                                <td>0769874586</td>
                                                                <td>thisal@gmail.com</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                       
                                    </div>
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