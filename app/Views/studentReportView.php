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
                                <li class="active"><a href="#">Student Detail Information</a></li>
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
                                                <h3 class="in-heading mt-2 mb-2">Students Information Report</h3>
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
                                            <!-- <div class="col-md-6 col-sm-6 invoice-to text-sm-right">
                                                <h5 class="invoice-to-title mb-3">Bill To</h5>
                                                <div class="row mb-5">
                                                    <div class="col-12 mb-4">
                                                        <p>Pineapple Inc.</p>
                                                        <p>pineapple@company.com</p>
                                                    </div>
                                                    <div class="col-12 mb-4">
                                                        <p>86781 547th Ave. Osmond,</p>
                                                        <p>NE, 68765</p>
                                                    </div>
                                                    <div class="col-12 mb-4">
                                                        <p>Fax: +0(863) 228-7064</p>
                                                        <p>Phone: +(740) 927-9284</p>
                                                    </div>
                                                </div>
                                            </div> -->
                                        </div>

                                        <div class="row mt-5 mb-5">
                                            <div class="col-12">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th scope="col">Student ID</th>
                                                                <th scope="col">Student Name</th>
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
                                                                <td>Ashini Perera</td>
                                                                <td>No.20, Main Road, Colombo 05</td>
                                                                <td>998745682V</td>
                                                                <td>0778965412</td>
                                                                <td>ashini@gmail.com</td>
                                                                <!-- <td class="text-right">20</td>
                                                                <td class="text-right">30</td>
                                                                <td class="text-right">$2800</td> -->
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>Nisal Fernando</td>
                                                                <td>No.561,Batagama,Ragama</td>
                                                                <td>978845644V</td>
                                                                <td>0725689741</td>
                                                                <td>nisal@gmail.com</td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>Gamidu Silva</td>
                                                                <td>No.987,Rathgama Road,Dematagoda</td>
                                                                <td>958746251V</td>
                                                                <td>0778936547</td>
                                                                <td>gamidu@gmil.com</td>
                                                            </tr>
                                                            <tr>
                                                                <td>4</td>
                                                                <td>Anusha Dias</td>
                                                                <td>No.522,Amarathunga mawatha, Ihalagama</td>
                                                                <td>975566446V</td>
                                                                <td>0769854712</td>
                                                                <td>anusha@gmail.com1</td>
                                                            </tr>
                                                            <tr>
                                                                <td>5</td>
                                                                <td>Nethmi Mendis</td>
                                                                <td>No.325,Nittabuwa Road, Gampaha</td>
                                                                <td>978654123V</td>
                                                                <td>0715689742</td>
                                                                <td>nethmi@gmail.com</td>
                                                            </tr>
                                                            <tr>
                                                                <td>6</td>
                                                                <td>Hirushi	Wejesinghe</td>
                                                                <td>No.30,Nawarathna mawatha, Piliyandala</td>
                                                                <td>987564213V</td>
                                                                <td>07158964851</td>
                                                                <td>hirushi@gmail.com</td>
                                                            </tr>
                                                            <tr>
                                                                <td>7</td>
                                                                <td>Dulan Kavinda</td>
                                                                <td>No.30,Manel Road, Colombo 06</td>
                                                                <td>956475632V</td>
                                                                <td>0756423178</td>
                                                                <td>dulan@gamil.com</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- <div class="row mt-4">
                                            <div class="col-12">
                                                <div class="invoice-total-amounts text-right">
                                                    <div class="row">
                                                        <div class="col-sm-10 col-7 text-right">
                                                            <p  class="mb-3">Subtotal: </p>
                                                        </div>
                                                        <div class="col-sm-2 col-5">
                                                            <p class="mb-3">$13300</p>
                                                        </div>
                                                        <div class="col-sm-10 col-7 text-right">
                                                            <p class="mb-3">Vat: </p>
                                                        </div>
                                                        <div class="col-sm-2 col-5">
                                                            <p class="mb-3">$700</p>
                                                        </div>
                                                        <div class="col-sm-10 col-7 text-right">
                                                            <h4 class="mb-3">Grand Total: </h4>
                                                        </div>
                                                        <div class="col-sm-2 col-5">
                                                            <h4 class="mb-3">$14000</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-sm-12 col-12">
                                                        <a class="btn btn-primary btn-rounded send-invoice mb-5 mt-4">Send Invoice</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
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