<?= $this->extend('layouts/main_layout.php') ?>

<?= $this->section('title') ?>
    Welcome
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div id="content" class="main-content">
            <div class="container">
                <div class="page-header">
                    <div class="page-title">
                        <h3>Accounting Dashboard</h3>
                        <h3>
                            <!-- < ?= session()->get('user_type')?> -->
                        </h3>
                    </div>
                </div>
                
                <div class="row layout-spacing accounts-widgets">
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-xl-0 mb-4">
                        <div class="widget-content widget-content-area br-4 accounts-income">
                            <div class="row">
                                <div class="col-md-6 col-6">
                                    <h6 class="value"><?= $student_count?></h6>
                                    <p class="mt-2">Students</p>
                                </div>
                                <div class="col-md-6 col-6 text-right">
                                    <i class="flaticon-currency"></i>
                                </div>
                            </div>
                            <div class="progress br-30 mb-0 mt-5">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 100%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-xl-0 mb-4">
                        <div class="widget-content widget-content-area br-4 accounts-cogs">
                            <div class="row">
                                <div class="col-md-6 col-6">
                                    <h6 class="value"><?= $course_count?></h6>
                                    <p class="mt-2">Courses</p>
                                </div>
                                <div class="col-md-6 col-6 text-right">
                                    <i class="flaticon-dollar-coin"></i>
                                </div>
                            </div>
                            <div class="progress br-30 mb-0 mt-5">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-sm-0 mb-4">
                        <div class="widget-content widget-content-area br-4 accounts-profit">
                            <div class="row">
                                <div class="col-md-6 col-6">
                                <h6 class="value"><?= $lecture_count?></h6>
                                    <p class="mt-2">Lecturers</p>
                                </div>
                                <div class="col-md-6 col-6 text-right">
                                    <i class="flaticon-money"></i>
                                </div>
                            </div>
                            <div class="progress br-30 mb-0 mt-5">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 100%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="widget-content widget-content-area br-4 accounts-expenses">
                            <div class="row">
                                <div class="col-md-6 col-6">
                                    <h6 class="value"><?= $batch_count?></h6>
                                    <p class="mt-2">Batches</p>
                                </div>
                                <div class="col-md-6 col-6 text-right">
                                    <i class="flaticon-wallet"></i>
                                </div>
                            </div>
                            <div class="progress br-30 mb-0 mt-5">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-6 col-12 layout-spacing">
                        <div class="widget-content widget-content-area product-sales-list-content br-4 p-0">
                            <div class="product-sales-list">
                                <div class="product-sales-header">
                                    <div class="row">
                                        <div class="col-md-5 col-sm-5 col-6 mb-4 mb-sm-0">
                                            <h5 class="mb-0">Product Sales</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-sales-body">

                                    <div class="tab-content" id="product-salesContent">
                                        
                                        <div class="tab-pane fade show active" id="product-sales-monthly" role="tabpanel" aria-labelledby="product-sales-monthly-tab">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Subject ID</th>
                                                            <th>Subject Name</th>
                                                            <th>Subject code</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach($thisMonthPayments as $pay): ?>
                                                            <tr>
                                                                <td><?= $pay['course_payment']?></td>
                                                                <td><?= $pay['course_payment']?></td>
                                                                <td><?= $pay['payment_year_month']?></td>
                                                            </tr>
                                                        <?php endforeach; ?>       
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Subject ID</th>
                                                            <th>Subject Name</th>
                                                            <th>Subject code</th>
                                                            <th>Edit</th>
                                                            <th>Delete</th>
                                                            <!-- <th class="invisible"></th> -->
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                        
                                        <div class="tab-pane fade" id="product-sales-yearly" role="tabpanel" aria-labelledby="product-sales-yearly-tab">

                                            <div class="table-responsive">

                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Product</th>
                                                            <th class="text-right">Amount</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div class="align-self-center">
                                                                        <div class="d-m-pro-name-1 data-marker"></div>
                                                                    </div>
                                                                    <div class="pro-name pro-name-1">Apple</div>
                                                                </div>
                                                            </td>
                                                            <td class="action text-right">

                                                                <div class="d-flex justify-content-between">
                                                                    <div class="pchart">
                                                                        <span id="ps4">Loading...</span>
                                                                    </div>
                                                                    <div class="pcontent">
                                                                        <p class="p-l-tooltip montly-price mb-0"  data-placement="top" title="11%">61,712 $</p>
                                                                        <p class="montly-inc-1">+2080</p>
                                                                    </div>
                                                                </div>

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div class="align-self-center">
                                                                        <div class="d-m-pro-name-2 data-marker"></div>
                                                                    </div>
                                                                    <div class="pro-name pro-name-2">HP-Laptop</div>
                                                                </div>
                                                            </td>
                                                            <td class="action text-right">

                                                                <div class="d-flex justify-content-between">
                                                                    <div class="pchart">
                                                                        <span id="ps5">Loading...</span>
                                                                    </div>
                                                                    <div class="pcontent">
                                                                        <p class="p-l-tooltip montly-price mb-0"  data-placement="top" title="11%">37,070 $</p>
                                                                        <p class="montly-inc-2">+1615</p>
                                                                    </div>
                                                                </div>

                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div class="align-self-center">
                                                                        <div class="d-m-pro-name-3 data-marker"></div>
                                                                    </div>
                                                                    <div class="pro-name pro-name-3">Samsung Monitor</div>
                                                                </div>
                                                            </td>
                                                            <td class="action text-right">

                                                                <div class="d-flex justify-content-between">
                                                                    <div class="pchart">
                                                                        <span id="ps6">Loading...</span>
                                                                    </div>
                                                                    <div class="pcontent">
                                                                        <p class="p-l-tooltip montly-price mb-0"  data-placement="top" title="3.5%">91,102 $</p>
                                                                        <p class="montly-inc-3">+1556</p>
                                                                    </div>
                                                                </div>

                                                            </td>
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

                    <div class="col-xl-6 col-12 layout-spacing">
                        <div class="widget-content widget-content-area vendor-expenses-list-content br-4 p-0">
                            <div class="vendor-expenses-list">                            
                                <div class="vendor-expenses-header">
                                    <div class="row">
                                        <div class="col-md-5 col-sm-5 col-6">
                                            <h5 class="mb-0">Vendor Expenses</h5>
                                        </div>
                                        <div class="col-md-7 col-sm-7 col-6 text-sm-right">
                                            <ul class="nav justify-content-end vendor-expenses nav-pills" id="vendor-expenses" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="vendor-expenses-monthly-tab" data-toggle="pill" href="#vendor-expenses-monthly" role="tab" aria-controls="vendor-expenses-monthly" aria-selected="true">Monthly</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="vendor-expenses-yearly-tab" data-toggle="pill" href="#vendor-expenses-yearly" role="tab" aria-controls="vendor-expenses-yearly" aria-selected="false">Yearly</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="vendor-expenses-body">

                                    <div class="tab-content" id="vendor-expensesContent">
                                        
                                        <div class="tab-pane fade show active" id="vendor-expenses-monthly" role="tabpanel" aria-labelledby="vendor-expenses-monthly-tab">

                                            <div class="table-responsive">

                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Product</th>
                                                            <th class="text-right">Amount</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="pro-name mb-2">Apple</div>
                                                                <div class="d-flex justify-content-between">
                                                                    <div class="progress progress-md w-75">
                                                                      <div class="progress-bar bg-primary" role="progressbar" style="width: 45.3%" aria-valuenow="45.3" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                    <span>25.3%</span>
                                                                </div>
                                                            </td>
                                                            <td class="action text-right">
                                                                <p class="v-amount mb-0">$ 2,275</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="pro-name mb-2">HP-Laptop</div>
                                                                <div class="d-flex justify-content-between">
                                                                    <div class="progress progress-md w-75">
                                                                      <div class="progress-bar bg-primary" role="progressbar" style="width: 24.6%" aria-valuenow="24.6" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                    <span>14.6%</span>
                                                                </div>
                                                            </td>
                                                            <td class="action text-right">
                                                                <p class="v-amount mb-0">$ 937</p>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <div class="pro-name mb-2">Samsung Monitor</div>
                                                                <div class="d-flex justify-content-between">
                                                                    <div class="progress progress-md w-75">
                                                                      <div class="progress-bar bg-primary" role="progressbar" style="width: 30.85%" aria-valuenow="30.85" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                    <span>19.85%</span>
                                                                </div>
                                                            </td>
                                                            <td class="action text-right">
                                                                <p class="v-amount mb-0">$ 2,384</p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                            </div>

                                        </div>
                                        
                                        <div class="tab-pane fade" id="vendor-expenses-yearly" role="tabpanel" aria-labelledby="vendor-expenses-yearly-tab">

                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Product</th>
                                                        <th class="text-right">Amount</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="pro-name mb-2">Apple</div>
                                                            <div class="d-flex justify-content-between">
                                                                <div class="progress progress-md w-75">
                                                                  <div class="progress-bar bg-secondary" role="progressbar" style="width: 35.3%" aria-valuenow="24.3" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                                <span>24.8%</span>
                                                            </div>
                                                        </td>
                                                        <td class="action text-right">
                                                            <p class="v-amount mb-0">$ 27,900</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="pro-name mb-2">HP-Laptop</div>
                                                            <div class="d-flex justify-content-between">
                                                                <div class="progress progress-md w-75">
                                                                  <div class="progress-bar bg-secondary" role="progressbar" style="width: 13.4%" aria-valuenow="13.4" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                                <span>13.4%</span>
                                                            </div>
                                                        </td>
                                                        <td class="action text-right">
                                                            <p class="v-amount mb-0">$ 11,277</p>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="pro-name mb-2">Samsung Monitor</div>
                                                            <div class="d-flex justify-content-between">
                                                                <div class="progress progress-md w-75">
                                                                  <div class="progress-bar bg-secondary" role="progressbar" style="width: 18.7%" aria-valuenow="18.7" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                                <span>18.7%</span>
                                                            </div>
                                                        </td>
                                                        <td class="action text-right">
                                                            <p class="v-amount mb-0">$ 28,508</p>
                                                        </td>
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

                <div class="row">
                    <div class="col-xl-6 col-lg-12 col-12 layout-spacing">
                        <div class="widget-content widget-content-area revenue-content br-4">
                            <div class="revenue-header">
                                <div class="row">
                                    <div class="col-md-5 col-sm-5 col-6">
                                        <h6 class="">Revenue</h6>
                                    </div>
                                    <div class="col-md-7 col-sm-7 col-6 text-sm-right">
                                        <ul class="nav justify-content-end revenue nav-pills mb-3" id="revenue" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="revenue-monthly-tab" data-toggle="pill" href="#revenue-monthly" role="tab" aria-controls="revenue-monthly" aria-selected="true">Monthly</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="revenue-yearly-tab" data-toggle="pill" href="#revenue-yearly" role="tab" aria-controls="revenue-yearly" aria-selected="false">Yearly</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="revenue-body">

                                <div class="tab-content" id="revenueContent">

                                    <div class="tab-pane fade show active" id="revenue-monthly" role="tabpanel" aria-labelledby="revenue-monthly-tab">
                                        <p class="r-meta-date">10 Dec, 2018 - 8 Jan, 2019</p>

                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-12 mt-4 mb-sm-0 mb-3">
                                                <p class="r-value mt-5 text-center">$7001.25</p>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-12 mt-4">
                                                <span id="r-chart" class="float-sm-right"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="revenue-yearly" role="tabpanel" aria-labelledby="revenue-yearly-tab">
                                        <p class="r-meta-date">10 Jan, 2018 - 8 Jan, 2019</p>

                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-12 mt-4 mb-sm-0 mb-3">
                                                <p class="r-value mt-5 text-center">$87018.79</p>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-12 mt-4">
                                                <span id="ry-chart" class="float-sm-right"></span>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-12 col-12 layout-spacing">
                        <div class="widget-content widget-content-area expanditure-content br-4">
                            <div class="expanditure-header">
                                <div class="row">
                                    <div class="col-md-5 col-sm-5 col-6">
                                        <h6 class="">Expenditure</h6>
                                    </div>
                                    <div class="col-md-7 col-sm-7 col-6 text-sm-right">
                                        <ul class="nav expanditure justify-content-end nav-pills mb-3" id="expanditure" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="expanditure-monthly-tab" data-toggle="pill" href="#expanditure-monthly" role="tab" aria-controls="expanditure-monthly" aria-selected="true">Monthly</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="expanditure-yearly-tab" data-toggle="pill" href="#expanditure-yearly" role="tab" aria-controls="expanditure-yearly" aria-selected="false">Yearly</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="expanditure-body">

                                <div class="tab-content" id="nav-tabContent">

                                    <div class="tab-pane fade show active" id="expanditure-monthly" role="tabpanel" aria-labelledby="expanditure-monthly-tab">
                                        <p class="e-meta-date">10 Dec, 2018 - 8 Jan, 2019</p>

                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-12 mt-4 mb-sm-0 mb-3">
                                                <p class="e-value mt-5 text-center">$3516.78</p>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-12 mt-4">
                                                <span id="e-chart" class="float-sm-right"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="expanditure-yearly" role="tabpanel" aria-labelledby="expanditure-yearly-tab">
                                        <p class="e-meta-date">10 Jan, 2018 - 8 Jan, 2019</p>

                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-12 mt-4 mb-sm-0 mb-3">
                                                <p class="e-value mt-5 text-center">$55233</p>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-12 mt-4">
                                                <span id="ey-chart" class="float-sm-right"></span>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-7 col-12 layout-spacing">
                        <div class="widget-content widget-content-area br-4 p-0">
                            <div class="calendar"></div>
                        </div>
                    </div>

                    <div class="col-xl-5 col-lg-12 col-md-12 col-12 layout-spacing">

                        <div class="widget-content widget-content-area br-4 p-0 h-100">
                            
                            <div class="latest-activities">
                                <div class="latest-activities-header">
                                    <div class="row">
                                        <div class="col-lg-12 col-12">
                                            <h5 class="">Latest Activity</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="latest-activities-body">
                                    <div class="l-a-stats">
                                        <span class="badge badge-primary badge-pill mr-3">Today</span>
                                        <span class="latest-activities-stats">Remaining 4 of 12</span>
                                    </div>

                                    <div class="l-a-list">
                                        <div class="l-a-scroll">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex mb-3">
                                                                    <div class=" align-self-center">
                                                                        <div class="d-m-latest-activities data-marker"></div>
                                                                    </div>
                                                                    <p class="latest-activities-txt mb-0">New user registered.</p>
                                                                </div>
                                                                <div class="usr-img">
                                                                    <ul class="list-inline badge-collapsed-img mb-0 mb-0">
                                                                        <li class="list-inline-item chat-online-usr">
                                                                            <img alt="admin-profile" src="public/assets_1/assets/img/profile-2.jpg" class="ml-0">
                                                                        </li>
                                                                        <li class="list-inline-item chat-online-usr">
                                                                            <img alt="admin-profile" src="public/assets_1/assets/img/profile-3.jpg">
                                                                        </li>
                                                                        <li class="list-inline-item chat-online-usr">
                                                                            <img alt="admin-profile" src="public/assets_1/assets/img/profile-4.jpg">
                                                                        </li>
                                                                        <li class="list-inline-item chat-online-usr">
                                                                            <img alt="admin-profile" src="public/assets_1/assets/img/profile-5.jpg">
                                                                        </li>
                                                                    </ul>
                                                                    <p class="more-usr mb-3">+8</p>
                                                                </div>
                                                            </td>
                                                            <td class="text-right"><i class="flaticon-close-fill remove-latest-activities mt-2"></i></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex mb-3">
                                                                    <div class=" align-self-center">
                                                                        <div class="d-m-latest-activities data-marker"></div>
                                                                    </div>
                                                                    <p class="latest-activities-txt mb-0">
                                                                    Metting Scheduled at 4:50pm.</p>
                                                                </div>
                                                                <div class="usr-img">
                                                                    <ul class="list-inline badge-collapsed-img mb-0 mb-0">
                                                                        <li class="list-inline-item chat-online-usr">
                                                                            <img alt="admin-profile" src="public/assets_1/assets/img/profile-2.jpg" class="ml-0">
                                                                        </li>
                                                                        <li class="list-inline-item chat-online-usr">
                                                                            <img alt="admin-profile" src="public/assets_1/assets/img/profile-3.jpg">
                                                                        </li>
                                                                        <li class="list-inline-item chat-online-usr">
                                                                            <img alt="admin-profile" src="public/assets_1/assets/img/profile-4.jpg">
                                                                        </li>
                                                                        <li class="list-inline-item chat-online-usr">
                                                                            <img alt="admin-profile" src="public/assets_1/assets/img/profile-5.jpg">
                                                                        </li>
                                                                    </ul>
                                                                    <p class="more-usr mb-3">+8</p>
                                                                </div>
                                                            </td>
                                                            <td class="text-right"><i class="flaticon-close-fill remove-latest-activities mt-2"></i></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex mb-3">
                                                                    <div class=" align-self-center">
                                                                        <div class="d-m-latest-activities data-marker"></div>
                                                                    </div>
                                                                    <p class="latest-activities-txt mb-0">James Tylor added new post.</p>
                                                                </div>
                                                                <div class="usr-img">
                                                                    <ul class="list-inline badge-collapsed-img mb-0 mb-0">
                                                                        <li class="list-inline-item chat-online-usr">
                                                                            <img alt="admin-profile" src="public/assets_1/assets/img/profile-2.jpg" class="ml-0">
                                                                        </li>
                                                                        <li class="list-inline-item chat-online-usr">
                                                                            <img alt="admin-profile" src="public/assets_1/assets/img/profile-3.jpg">
                                                                        </li>
                                                                        <li class="list-inline-item chat-online-usr">
                                                                            <img alt="admin-profile" src="public/assets_1/assets/img/profile-4.jpg">
                                                                        </li>
                                                                        <li class="list-inline-item chat-online-usr">
                                                                            <img alt="admin-profile" src="public/assets_1/assets/img/profile-5.jpg">
                                                                        </li>
                                                                    </ul>
                                                                    <p class="more-usr mb-3">+8</p>
                                                                </div>
                                                            </td>
                                                            <td class="text-right"><i class="flaticon-close-fill remove-latest-activities mt-2"></i></td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <div class="d-flex mb-3">
                                                                    <div class="align-self-center">
                                                                        <div class="d-m-latest-activities data-marker"></div>
                                                                    </div>
                                                                    <p class="latest-activities-txt mb-0">You have one new friend request.</p>
                                                                </div>
                                                                <div class="usr-img">
                                                                    <ul class="list-inline badge-collapsed-img mb-0 mb-0">
                                                                        <li class="list-inline-item chat-online-usr">
                                                                            <img alt="admin-profile" src="public/assets_1/assets/img/profile-2.jpg" class="ml-0">
                                                                        </li>
                                                                        <li class="list-inline-item chat-online-usr">
                                                                            <img alt="admin-profile" src="public/assets_1/assets/img/profile-3.jpg">
                                                                        </li>
                                                                        <li class="list-inline-item chat-online-usr">
                                                                            <img alt="admin-profile" src="public/assets_1/assets/img/profile-4.jpg">
                                                                        </li>
                                                                        <li class="list-inline-item chat-online-usr">
                                                                            <img alt="admin-profile" src="public/assets_1/assets/img/profile-5.jpg">
                                                                        </li>
                                                                    </ul>
                                                                    <p class="more-usr mb-3">+8</p>
                                                                </div>
                                                            </td>
                                                            <td class="text-right"><i class="flaticon-close-fill remove-latest-activities mt-2"></i></td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <div class="d-flex mb-3">
                                                                    <div class=" align-self-center">
                                                                        <div class="d-m-latest-activities data-marker align-self-center"></div>
                                                                    </div>
                                                                    <p class="latest-activities-txt mb-0">Oscar like your post.</p>
                                                                </div>
                                                                <div class="usr-img">
                                                                    <ul class="list-inline badge-collapsed-img mb-0 mb-0">
                                                                        <li class="list-inline-item chat-online-usr">
                                                                            <img alt="admin-profile" src="public/assets_1/assets/img/profile-2.jpg" class="ml-0">
                                                                        </li>
                                                                        <li class="list-inline-item chat-online-usr">
                                                                            <img alt="admin-profile" src="public/assets_1/assets/img/profile-3.jpg">
                                                                        </li>
                                                                        <li class="list-inline-item chat-online-usr">
                                                                            <img alt="admin-profile" src="public/assets_1/assets/img/profile-4.jpg">
                                                                        </li>
                                                                        <li class="list-inline-item chat-online-usr">
                                                                            <img alt="admin-profile" src="public/assets_1/assets/img/profile-5.jpg">
                                                                        </li>
                                                                    </ul>
                                                                    <p class="more-usr mb-3">+8</p>
                                                                </div>
                                                            </td>
                                                            <td class="text-right"><i class="flaticon-close-fill remove-latest-activities mt-2"></i></td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <div class="d-flex mb-3">
                                                                    <div class=" align-self-center">
                                                                        <div class="d-m-latest-activities data-marker"></div>
                                                                    </div>
                                                                    <p class="latest-activities-txt mb-0">20 files Download.</p>
                                                                </div>
                                                                <div class="usr-img">
                                                                    <ul class="list-inline badge-collapsed-img mb-0 mb-0">
                                                                        <li class="list-inline-item chat-online-usr">
                                                                            <img alt="admin-profile" src="public/assets_1/assets/img/profile-2.jpg" class="ml-0">
                                                                        </li>
                                                                        <li class="list-inline-item chat-online-usr">
                                                                            <img alt="admin-profile" src="public/assets_1/assets/img/profile-3.jpg">
                                                                        </li>
                                                                        <li class="list-inline-item chat-online-usr">
                                                                            <img alt="admin-profile" src="public/assets_1/assets/img/profile-4.jpg">
                                                                        </li>
                                                                        <li class="list-inline-item chat-online-usr">
                                                                            <img alt="admin-profile" src="public/assets_1/assets/img/profile-5.jpg">
                                                                        </li>
                                                                    </ul>
                                                                    <p class="more-usr mb-3">+8</p>
                                                                </div>
                                                            </td>
                                                            <td class="text-right"><i class="flaticon-close-fill remove-latest-activities mt-2"></i></td>
                                                        </tr>
                                                    </tbody>
                                                </table> 
                                            </div>
                                        </div>
                                    </div>

                                    <div class="l-a-load-more text-center pt-2 pb-3">
                                        <button class="btn btn-danger btn-rounded">More +</button>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-9 col-lg-8 col-md-12 col-sm-12 col-12 layout-spacing">

                        <div class="widget-content widget-content-area br-4 p-0">

                            <div class="customer-bal-summary">
                                <div class="c-b-s-header">
                                    <div class="row">
                                        <div class="col-md-6 col-6">
                                            <h6 class="">Customer Balance Summary</h6>
                                        </div>
                                        <div class="col-md-6 col-6 text-sm-right">
                                            <ul class="nav justify-content-end c-b-s-tab nav-pills" id="c-b-s-tab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="c-b-s-monthly-tab" data-toggle="pill" href="#c-b-s-monthly" role="tab" aria-controls="c-b-s-monthly" aria-selected="true">Monthly</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="c-b-s-yearly-tab" data-toggle="pill" href="#c-b-s-yearly" role="tab" aria-controls="c-b-s-yearly" aria-selected="false">Yearly</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="c-b-s-body">

                                    <div class="tab-content">
                                        <div class="tab-pane active" id="c-b-s-monthly" role="tabpanel" aria-labelledby="c-b-s-monthly-tab">
                                            <div class="table-responsive customer-bal-summary-scroll-monthly">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th class="" scope="col">Customer</th>
                                                            <th scope="col">Date</th>
                                                            <th scope="col">Amount</th>
                                                            <th class="text-center" scope="col">Status</th>
                                                            <th class="text-right" scope="col">Receipt</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="customer-name">Andy King</td>
                                                            <td class="c-b-s-date">10 Jan 2019</td>
                                                            <td class="customer-price">$ 1,275</td>
                                                            <td class="text-center"><span class="badge badge-pills badge-success">Paid</span></td>
                                                            <td class="text-right"><i class="flaticon-download-1 mr-3"></i></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="customer-name">Alma Clarke</td>
                                                            <td class="c-b-s-date">10 Jan 2019</td>
                                                            <td class="customer-price">$ 2,344</td>
                                                            <td class="text-center"><span class="badge badge-pills badge-warning">Pending</span></td>
                                                            <td class="text-right"><i class="flaticon-download-1 mr-3"></i></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="customer-name">Shaun Park</td>
                                                            <td class="c-b-s-date">10 Jan 2019</td>
                                                            <td class="customer-price">$ 1,057</td>
                                                            <td class="text-center"><span class="badge badge-pills badge-success">Paid</span></td>
                                                            <td class="text-right"><i class="flaticon-download-1 mr-3"></i></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="customer-name">Alan Green</td>
                                                            <td class="c-b-s-date">10 Jan 2019</td>
                                                            <td class="customer-price">$ 3,361</td>
                                                            <td class="text-center"><span class="badge badge-pills badge-success">Paid</span></td>
                                                            <td class="text-right"><i class="flaticon-download-1 mr-3"></i></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="customer-name">Kristen Beck</td>
                                                            <td class="c-b-s-date">10 Jan 2019</td>
                                                            <td class="customer-price">$ 2,895</td>
                                                            <td class="text-center"><span class="badge badge-pills badge-success">Paid</span></td>
                                                            <td class="text-right"><i class="flaticon-download-1 mr-3"></i></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="customer-name">Nia Hillyer</td>
                                                            <td class="c-b-s-date">10 Jan 2019</td>
                                                            <td class="customer-price">$ 1,713</td>
                                                            <td class="text-center"><span class="badge badge-pills badge-warning">Pending</span></td>
                                                            <td class="text-right"><i class="flaticon-download-1 mr-3"></i></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="c-b-s-bottom">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-12">
                                                        <p class="mb-0 mt-1 pagination-stats text-sm-left text-center mb-sm-0 mb-4">Showing 1 to 10 of 24 entries</p>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-12">
                                                        <ul class="pagination pagination-style-5 pagination-rounded justify-content-sm-end justify-content-center pagination-sm mb-0 mt-0">
                                                            <li><a href="javascript:void(0);">Previous</a></li>
                                                            <li><a href="javascript:void(0);">1</a></li>
                                                            <li><a href="javascript:void(0);">2</a></li>
                                                            <li><a href="javascript:void(0);">3</a></li>
                                                            <li><a href="javascript:void(0);">Next</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="tab-pane" id="c-b-s-yearly" role="tabpanel" aria-labelledby="c-b-s-yearly-tab">
                                            <div class="table-responsive customer-bal-summary-scroll-yearly">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th class="" scope="col">Customer</th>
                                                            <th scope="col">Date</th>
                                                            <th scope="col">Amount</th>
                                                            <th class="text-center" scope="col">Status</th>
                                                            <th class="text-right" scope="col">Receipt</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="customer-name">Andy King</td>
                                                            <td class="c-b-s-date">Jan 2018 - 19</td>
                                                            <td class="customer-price">$ 24,146</td>
                                                            <td class="text-center"><span class="badge badge-pills badge-success">Paid</span></td>
                                                            <td class="text-right"><i class="flaticon-download-1 mr-3"></i></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="customer-name">Alma Clarke</td>
                                                            <td class="c-b-s-date">Jan 2018 - 19</td>
                                                            <td class="customer-price">$ 46,275</td>
                                                            <td class="text-center"><span class="badge badge-pills badge-warning">Pending</span></td>
                                                            <td class="text-right"><i class="flaticon-download-1 mr-3"></i></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="customer-name">Shaun Park</td>
                                                            <td class="c-b-s-date">Jan 2018 - 19</td>
                                                            <td class="customer-price">$ 15,275</td>
                                                            <td class="text-center"><span class="badge badge-pills badge-success">Paid</span></td>
                                                            <td class="text-right"><i class="flaticon-download-1 mr-3"></i></td>
                                                        </tr>

                                                        <tr>
                                                            <td class="customer-name">Alan Green</td>
                                                            <td class="c-b-s-date">Jan 2018 - 19</td>
                                                            <td class="customer-price">$ 39,881</td>
                                                            <td class="text-center"><span class="badge badge-pills badge-success">Paid</span></td>
                                                            <td class="text-right"><i class="flaticon-download-1 mr-3"></i></td>
                                                        </tr>

                                                        <tr>
                                                            <td class="customer-name">Kristen Beck</td>
                                                            <td class="c-b-s-date">Jan 2018 - 19</td>
                                                            <td class="customer-price">$ 29,133</td>
                                                            <td class="text-center"><span class="badge badge-pills badge-success">Paid</span></td>
                                                            <td class="text-right"><i class="flaticon-download-1 mr-3"></i></td>
                                                        </tr>

                                                        <tr>
                                                            <td class="customer-name">Nia Hillyer</td>
                                                            <td class="c-b-s-date">Jan 2018 - 19</td>
                                                            <td class="customer-price">$ 25,794</td>
                                                            <td class="text-center"><span class="badge badge-pills badge-warning">Pending</span></td>
                                                            <td class="text-right"><i class="flaticon-download-1 mr-3"></i></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="c-b-s-bottom">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-12">
                                                        <p class="mb-0 mt-1 pagination-stats text-sm-left text-center mb-sm-0 mb-4">Showing 1 to 10 of 24 entries</p>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-12">
                                                        <ul class="pagination pagination-style-5 pagination-rounded justify-content-sm-end justify-content-center pagination-sm mb-0 mt-0">
                                                            <li><a href="javascript:void(0);">Previous</a></li>
                                                            <li><a href="javascript:void(0);">1</a></li>
                                                            <li><a href="javascript:void(0);">2</a></li>
                                                            <li><a href="javascript:void(0);">3</a></li>
                                                            <li><a href="javascript:void(0);">Next</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>

                        </div>

                    </div>
                    
                    <div class="col-xl-3 col-lg-4 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget-content widget-content-area p-0 br-4 file-uploader">
                            <form class="dropzone-file-area dropzone dropzone-file-area--secondary   d-flex align-self-center h-100  justify-content-center" action="https://designreset.com/preview-equation/default/plugins/dropzone/upload.php" id="dropzone-file-area-one">
                                <div class="d-flex align-self-center">
                                    <div class="dropzone-file-area__msg dz-message needsclick">
                                        <h3 class="dropzone-file-area__msg-title">Drop files here.</h3>
                                        <i class="icon flaticon-cloud-upload mb-5 d-block mt-3 mb-3"></i>
                                        <div class="d-block text-center">
                                            <button type="button" class="btn btn-outline-default">Upload</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-xl-8 col-12 layout-spacing">
                        <div class="widget-content widget-content-area p-0 br-4">
                            <div class="todo-list">
                                <div class="todo-list-header">
                                    <div class="row">
                                        <div class="col-md-5 col-sm-6 col-10 mb-4 mb-sm-0">
                                            <h5 class="mb-0">To-do list <span class="badge badge-danger badge-pill ml-4">Today</span></h5>
                                        </div>
                                        <div class="col-md-7 col-sm-6 col-2 text-right">
                                            <i class="flaticon-down-arrow-2 mt-1 js-collapse"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="todo-list-body panel-collapse">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="n-chk">
                                                            <label class="new-control new-checkbox checkbox-danger">
                                                                <input type="checkbox" class="new-control-input">
                                                                <span class="new-control-indicator"></span><span class="todo-text ml-4 mt-1">Send Mail to HR and Admin</span>
                                                                <span class="flaticon-close-fill remove-task mt-1 ml-3"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td><i class="flaticon-edit-5 float-right task-edit"></i></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="n-chk">
                                                            <label class="new-control new-checkbox checkbox-danger">
                                                                <input type="checkbox" class="new-control-input" checked>
                                                                <span class="new-control-indicator"></span><span class="todo-text ml-4 mt-1">Meeting with Shaun Park at 4:50pm</span>
                                                                <span class="flaticon-close-fill remove-task mt-1  ml-3"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td><i class="flaticon-edit-5 float-right task-edit"></i></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="n-chk">
                                                            <label class="new-control new-checkbox checkbox-danger">
                                                                <input type="checkbox" class="new-control-input">
                                                                <span class="new-control-indicator"></span><span class="todo-text ml-4 mt-1">Download Server Logs</span>
                                                                <span class="flaticon-close-fill remove-task mt-1  ml-3"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td><i class="flaticon-edit-5 float-right task-edit"></i></td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="n-chk">
                                                            <label class="new-control new-checkbox checkbox-danger">
                                                                <input type="checkbox" class="new-control-input">
                                                                <span class="new-control-indicator"></span><span class="todo-text ml-4 mt-1">Team Meet at 5:30pm</span>
                                                                <span class="flaticon-close-fill remove-task mt-1  ml-3"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td><i class="flaticon-edit-5 float-right task-edit"></i></td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="n-chk">
                                                            <label class="new-control new-checkbox checkbox-danger">
                                                                <input type="checkbox" class="new-control-input">
                                                                <span class="new-control-indicator"></span><span class="todo-text ml-4 mt-1">Mailbox Cleanup</span>
                                                                <span class="flaticon-close-fill remove-task mt-1 ml-3"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td><i class="flaticon-edit-5 float-right task-edit"></i></td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="n-chk">
                                                            <label class="new-control new-checkbox checkbox-danger">
                                                                <input type="checkbox" class="new-control-input">
                                                                <span class="new-control-indicator"></span><span class="todo-text ml-4 mt-1">Backup and Restore Files EOD</span>
                                                                <span class="flaticon-close-fill remove-task mt-1  ml-3"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td><i class="flaticon-edit-5 float-right task-edit"></i></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="todo-list-bottom text-center">
                                    <span class="mr-sm-4 d-sm-inline d-block mb-sm-0 mb-3">Add new todo list</span>
                                    <button class="btn btn-outline-danger">Add</button>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-12 layout-spacing">
                        <div class="widget-content widget-content-area r-p-summary br-4 p-0">
                            <div class="r-p-summary-header">
                                <div class="row">
                                    <div class="col-md-5 col-sm-5 col-5">
                                        <h6 class="">Profit Summary</h6>
                                    </div>
                                    <div class="col-md-7 col-sm-7 col-7 text-sm-right">
                                        <ul class="nav justify-content-end r-p-summary nav-pills mb-3" id="r-p-summary" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active show" id="r-p-summary-monthly-tab" data-toggle="pill" href="#r-p-summary-monthly" role="tab" aria-controls="r-p-summary-monthly" aria-selected="true">Monthly</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="r-p-summary-yearly-tab" data-toggle="pill" href="#r-p-summary-yearly" role="tab" aria-controls="r-p-summary-yearly" aria-selected="false">Yearly</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="r-p-summary-body">

                                <div class="tab-content">
                                    
                                    <div class="tab-pane active" id="r-p-summary-monthly" role="tabpanel" aria-labelledby="r-p-summary-monthly-tab">
                                        <div class="r-p-summary-montly">
                                            <div id="r_p_summary" class="mt-5"></div>

                                            <div class="r-p-summary-legend text-center">
                                                <div class="row">
                                                    <div class="col-md-12 mb-4">
                                                        <div class="d-flex justify-content-center">
                                                            <div class="align-self-center">
                                                                <div class="d-m-r_p_sales data-marker"></div>
                                                            </div>
                                                            <span class="r_p_sales">Sales</span>


                                                            <div class="align-self-center">
                                                                <div class="d-m-r_p_revenue ml-2 data-marker"></div>
                                                            </div>
                                                            <span class="r_p_revenue">Revenue</span>

                                                            <div class="align-self-center">
                                                                <div class="d-m-r_p_expanditure ml-2 data-marker"></div>
                                                            </div>
                                                            <span class="r_p_expanditure">Expenses</span>
                                                            
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                        
                                    </div>
                                    
                                    <div class="tab-pane" id="r-p-summary-yearly" role="tabpanel" aria-labelledby="r-p-summary-yearly-tab">
                                        <div class="r-p-summary-yearly">
                                            <div id="r_p_summary_yearly" class="mt-5"></div>

                                            <div class="r-p-summary-legend text-center">
                                                <div class="row">
                                                    <div class="col-md-12 mb-4">
                                                        <div class="d-flex justify-content-center">
                                                            <div class="align-self-center">
                                                                <div class="d-m-r_p_sales data-marker"></div>
                                                            </div>
                                                            <span class="r_p_sales">Sales</span>


                                                            <div class="align-self-center">
                                                                <div class="d-m-r_p_revenue ml-2 data-marker"></div>
                                                            </div>
                                                            <span class="r_p_revenue">Revenue</span>

                                                            <div class="align-self-center">
                                                                <div class="d-m-r_p_expanditure ml-2 data-marker"></div>
                                                            </div>
                                                            <span class="r_p_expanditure">Expenses</span>
                                                            
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

                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 col-12 layout-spacing">
                        <div class="row">
                            
                            <div class="col-xl-12 mb-4">
                                <div class="widget-content twitter-widget br-4">
                                    <div id="social-card-1" class="card br-4">
                                        <div class="wrapper mt-4">

                                            <div class="usr-meta-info">
                                                <div class="media">
                                                    <img alt="admin-profile" src="public/assets_1/assets/img/girl-2.png" class="rounded-circle mr-2">
                                                    <div class="media-body">
                                                        <h4 class="usr-name mt-1">Amy Diaz</h4>
                                                        <p class="usr-occupation">Advisor</p>
                                                    </div>
                                                    <span class="twitter-icon">
                                                        <i class="flaticon-twitter-logo"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 mt-4">
                                                    <p class="usr-tweet">#TEXT (2019) Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt. ut labore et dolore magna aliqua.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-12 mb-4">
                                <div class="widget-content widget-content-area p-0 br-4">
                                    <div id="weather-card-1" class="card br-4">
                                        
                                        <div class="row">

                                            <div class="col-4 text-center pr-0">
                                                <div class="day-weather br-4">
                                                    <i class="flaticon-weather"></i>
                                                    <p class="mt-2">Monday</p>
                                                </div>
                                            </div>

                                            <div class="col-4 text-center px-0">
                                                <div class="city-1">
                                                    <span class="w-temp mb-0">21</span>
                                                    <p class="w-city-name">Toronto</p>
                                                </div>
                                            </div>

                                            <div class="col-4 text-center pl-0">
                                                <div class="city-2">
                                                    <span class="w-temp mb-0">-13</span>
                                                    <p class="w-city-name">Quebec</p>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6 col-12 layout-spacing">
                        <div class="widget-content widget-content-area event-widget br-4 text-center">
                            <div id="event-card-1" class="card br-4">
                                
                                <div class="card-title mb-5">
                                    <span class="badge badge-default badge-pill">Event</span>
                                </div>

                                <div class="card-event-icon mt-5 mb-5">
                                    <i class="flaticon-calendar"></i>
                                </div>
                                <div class="card-event-list mt-3">
                                    <p>No event or tasks!</p>
                                </div>

                                <div class="card-bottom-section">
                                    <button class="btn btn-secondary btn-rounded">Add new event</button>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="col-xl-4 col-12 layout-spacing">
                        <div class="widget-content widget-content-area br-4 p-0">
                            <div id="user-profile-card-2" class="card br-4">
                                <div class="card-top-section br-4">
                                    <div class="usr-info-meta">
                                        <p class="usr-name mb-0">Alma Clarke</p>
                                        <p class="usr-occupation">Developer</p>
                                    </div>
                                    <div class="usr-profile-meta">
                                        <img alt="admin-profile" src="public/assets_1/assets/img/drag-2.jpg" class="img-fluid usr-profile rounded-circle">
                                    </div>
                                </div>
                                <div class="card-body mt-3">
                                    <div class="card-bottom-section">
                                        <div class="row mt-4">
                                            <div class="col-md-6 col-sm-6 col-6 fb">
                                                <div class="social-container text-center">

                                                    <div class="s-media-fb">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <i class="flaticon-facebook-logo"></i>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <p class="s-media-count mb-0">2.2k</p>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <p class="s-media-txt mb-0">Likes</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                            <div class="col-md-6 col-sm-6 col-6 tw">

                                                <div class="social-container text-center">
                                                    
                                                    <div class="s-media-twitter">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <i class="flaticon-twitter-logo"></i>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <p class="s-media-count mb-0">2.2k</p>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <p class="s-media-txt mb-0">Likes</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-6 col-sm-6 col-6 be">

                                                <div class="social-container text-center">

                                                    <div class="s-media-behance">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <i class="flaticon-behance-logo"></i>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <p class="s-media-count mb-0">2.2k</p>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <p class="s-media-txt mb-0">Likes</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-6 col-sm-6 col-6 insta">

                                                <div class="social-container text-center">
                                                    <div class="s-media-insta">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <i class="flaticon-instagram-logo"></i>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <p class="s-media-count mb-0">2.2k</p>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <p class="s-media-txt mb-0">Likes</p>
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
                </div>

            </div>
</div>         
<?= $this->endSection() ?>