<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designreset.com/preview-equation/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Mar 2023 10:08:35 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title><?= $this->renderSection('title') ?></title>
    <link rel="icon" type="image/x-icon" href="<?=base_url()?>/public/assets_1/assets/img/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="<?=base_url()?>/public/assets_1/assets/css/loader.css" rel="stylesheet" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link href="<?=base_url()?>/public/assets_1/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>/public/assets_1/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="<?=base_url()?>/public/assets_1/assets/css/support-chat.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>/public/assets_1/plugins/maps/vector/jvector/jquery-jvectormap-2.0.3.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>/public/assets_1/plugins/charts/chartist/chartist.css" rel="stylesheet" type="text/css">
    <link href="<?=base_url()?>/public/assets_1/assets/css/default-dashboard/style.css" rel="stylesheet" type="text/css" />    
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->  

    <!--  BEGIN CUSTOM STYLE FILE of Forms buttons -->
    <link href="<?=base_url()?>/public/assets_1/assets/css/ui-kit/buttons/creative/creative-material.css" rel="stylesheet" type="text/css" />
    <!--  END CUSTOM STYLE FILE of Forms buttons -->

    <!-- BEGIN PAGE LEVEL STYLES of Tables -->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>/public/assets_1/plugins/table/datatable/datatables.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>/public/assets_1/plugins/table/datatable/custom_dt_ordering_sorting.css">
    <!-- END PAGE LEVEL STYLES of Tables -->

    <!-- BEGIN PAGE LEVEL STYLES of Form Errors -->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>/public/assets_1/assets/css/errorstyles.css">
    <!-- END PAGE LEVEL STYLES of Form Errors -->

    <!--  BEGIN CUSTOM STYLE FILE of REPORTS -->
    <link href="<?=base_url()?>/public/assets_1/assets/css/ecommerce/invoice.css" rel="stylesheet" type="text/css" />
    <!--  END CUSTOM STYLE FILE  -->

     <!-- BEGIN THEME GLOBAL STYLES -->
     <link href="<?=base_url()?>/public/assets_1/plugins/animate/animate.css" rel="stylesheet" type="text/css" />
    <script src="<?=base_url()?>/public/assets_1/plugins/sweetalerts/promise-polyfill.js"></script>
    <link href="<?=base_url()?>/public/assets_1/plugins/sweetalerts/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>/public/assets_1/plugins/sweetalerts/sweetalert.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>/public/assets_1/assets/css/ui-kit/custom-sweetalert.css" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->

    <!-- BEGIN THEME GLOBAL STYLES for dashboard -->
    <link href="<?=base_url()?>/public/assets_1/assets/css/accounting-dashboard/style.css" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->

     <!-- BEGIN CUSTOM STYLE FILE for charts -->
     <style>
        #simplecolumnchartdiv, #columnlinemixchartdiv, #clusteredbarchartdiv, #cylinderchartdiv { width: 100%; height: 500px; font-size: 11px; }
        #clusteredbarchartdiv 
        .amcharts-chart-div a {
            color: #fff !important;
            font-size: 11px !important;
            opacity: 1 !important;
            top: 40px !important; 
        }

        #simplepiechartdiv, #dpiechartdiv { width: 100%; height: 400px; font-size: 11px; }
        #legendpiechartdiv { width: 100%; height: 500px; font-size: 11px; }
        .amcharts-pie-slice {
            transform: scale(1);
            transform-origin: 50% 50%;
            transition-duration: 0.3s;
            transition: all .3s ease-out;
            -webkit-transition: all .3s ease-out;
            -moz-transition: all .3s ease-out;
            -o-transition: all .3s ease-out;
            cursor: pointer;
            box-shadow: 0 0 30px 0 #000;
        }
        .amcharts-pie-slice:hover { transform: scale(1.1); filter: url(#shadow); }
        .amcharts-chart-div a { display: none!important; }

        #smoothchartdiv, #differentcolorchartdiv { width: 100%; height: 400px; font-size: 11px; }
        #valueaxischartdiv, #changingcolorchartdiv, #zoomablechartdiv { width: 100%; height: 500px; font-size: 11px; }	
    </style>
    <!-- END CUSTOM STYLE FILE for charts -->

     <!-- BEGIN PAGE LEVEL STYLES -->
     <link rel="stylesheet" type="text/css" href="<?=base_url()?>/public/assets_1/plugins/jqvalidation/custom-jqBootstrapValidation.css">
    <!-- END PAGE LEVEL STYLES -->

    <script src="<?=base_url()?>/public/assets_1/assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <script src="< ?=base_url()?>/public/assets_1/assets/js/validation.js"></script> -->


 <style>
    .help-block {
  color: red;
}

.form-group.has-error.has-danger .form-control-label {
  color: red;
}

.form-group.has-error.has-danger .form-control {
  border: 1px solid red;
  box-shadow: 0 0 0 0.2rem rgba(250, 16, 0, 0.18);
}
    </style> 


</head>

<body class="default-sidebar">
    <div id="eq-loader">
      <div class="eq-loader-div">
          <div class="eq-loading dual-loader mx-auto mb-5"></div>
      </div>
    </div>

    <!-- Tab Mobile View Header -->
    <header class="tabMobileView header navbar fixed-top d-lg-none">
        <div class="nav-toggle">
                <a href="javascript:void(0);" class="nav-link sidebarCollapse" data-placement="bottom">
                    <i class="flaticon-menu-line-2"></i>
                </a>
            <a href="index-2.html" class=""> <img src="<?=base_url()?>/public/assets_1/assets/img/logo-3.png" class="img-fluid" alt="logo"></a>
        </div>
        <ul class="nav navbar-nav">
            <li class="nav-item d-lg-none"> 
                <form class="form-inline justify-content-end" role="search">
                    <input type="text" class="form-control search-form-control mr-3">
                </form>
            </li>
        </ul>
    </header>
    <!-- Tab Mobile View Header -->

    <!--  BEGIN NAVBAR  -->
    <header class="header navbar fixed-top navbar-expand-sm">
        <a href="javascript:void(0);" class="sidebarCollapse d-none d-lg-block" data-placement="bottom"><i class="flaticon-menu-line-2"></i></a>

        <ul class="navbar-nav flex-row ml-lg-auto">
            
            <li class="nav-item  d-lg-block d-none pt-3">
                
                    <?= session()->get('user_name')?>
                    <?= session()->get('user_type')?>
            </li>
            
            

            <li class="nav-item dropdown user-profile-dropdown ml-lg-0 mr-lg-2 ml-3 order-lg-0 order-1">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="flaticon-user-12"></span>
                </a>
                <div class="dropdown-menu  position-absolute" aria-labelledby="userProfileDropdown">

                    <a class="dropdown-item" href="user_profile.html">
                        <i class="mr-1 flaticon-user-6"></i> <span>My Profile</span>
                    </a>
                    
                    <a class="dropdown-item" href="<?=base_url()?>/User_PasswordReset">
                        <i class="mr-1 flaticon-email-fill-1"></i> <span>Change Password</span>
                    </a>
                    
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?=base_url()?>/logout">
                        <i class="mr-1 flaticon-power-button"></i> <span>Log Out</span>
                    </a>
                </div>
            </li>

            
        </ul>
    </header>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="cs-overlay"></div>

        <!--  BEGIN SIDEBAR  -->

        <div class="sidebar-wrapper sidebar-theme">
            
            <div id="dismiss" class="d-lg-none"><i class="flaticon-cancel-12"></i></div>
            
            <nav id="sidebar">

                <ul class="navbar-nav theme-brand flex-row  d-none d-lg-flex">
                    <!-- <li class="nav-item d-flex">
                        <a href="index-2.html" class="navbar-brand">
                            <img src="< ?=base_url()?>/public/assets_1/assets/img/logo-3.png" class="img-fluid" alt="logo">
                        </a>
                        <p class="border-underline"></p>
                    </li> -->
                    <li class="nav-item theme-text">
                        <!-- <a href="index-2.html" class="nav-link"> Wide Awake Solutions </a> -->
                        <a href="index-2.html" class="nav-link"> Demo-app</a>
                    </li>
                </ul>


                <?php
                    if(session('user_type')=='ADMIN'):
                        $this->include('layouts/side_bar_Admin');
                        $this->renderSection('side_bar');
                        elseif (session('user_type')=='LECTURER'):
                            $this->include('layouts/side_bar_lecturer');
                            $this->renderSection('side_bar');
                            elseif (session('user_type')=='STUDENT'):
                                $this->include('layouts/side_bar_student');
                                $this->renderSection('side_bar');
                                elseif (session('user_type')=='RECEPTIONIST'):
                                    $this->include('layouts/side_bar_receptionist');
                                    $this->renderSection('side_bar');
                                    endif
                ?>

            </nav>
        </div>

        <!--  END SIDEBAR  -->
        
        <!--  BEGIN CONTENT PART  -->

        <?= $this->renderSection('content') ?>

        <!--  END CONTENT PART  -->

    </div>
    <!-- END MAIN CONTAINER -->

    
    <!--  BEGIN FOOTER  -->
    <footer class="footer-section theme-footer">

        <div class="footer-section-1  sidebar-theme">
            
        </div>

        <div class="footer-section-2 container-fluid">
            <div class="row">
                <div id="toggle-grid" class="col-xl-7 col-md-6 col-sm-6 col-12 text-sm-left text-center">
                    <ul class="list-inline links ml-sm-5">
                        <li class="list-inline-item mr-3">
                            <a href="javascript:void(0);">Home</a>
                        </li>
                        <li class="list-inline-item mr-3">
                            <a href="javascript:void(0);">Blog</a>
                        </li>
                        <li class="list-inline-item mr-3">
                            <a href="javascript:void(0);">About</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="javascript:void(0);">Buy</a>
                        </li>
                    </ul>
                </div>
                <div class="col-xl-5 col-md-6 col-sm-6 col-12">
                    <ul class="list-inline mb-0 d-flex justify-content-sm-end justify-content-center mr-sm-3 ml-sm-0 mx-3">
                        <li class="list-inline-item  mr-3">
                            <p class="bottom-footer">&#xA9;  <a target="_blank" href="https://designreset.com/equation">Anushika Rodrigo</a></p>
                        </li>
                        <li class="list-inline-item align-self-center">
                            <div class="scrollTop"><i class="flaticon-up-arrow-fill-1"></i></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--  END FOOTER  -->

    <div id="data_modal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="myLargeModalLabel">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <h4 class="modal-heading mt-2 mb-4">Why We Use Electoral College, Not Popular Vote</h4>
                                                <p class="modal-text mb-4">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-primary btn-rounded mt-3 mb-3">Save changes</button>
                                                    <button type="button" class="btn btn-dark btn-rounded mt-3 mb-3" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

    

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <!-- <script src="public/assets_1/assets/js/libs/jquery-3.1.1.min.js"></script> -->
    <script src="<?=base_url()?>/public/assets_1/assets/js/loader.js"></script>
    <script src="<?=base_url()?>/public/assets_1/bootstrap/js/popper.min.js"></script>
    <script src="<?=base_url()?>/public/assets_1/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>/public/assets_1/plugins/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?=base_url()?>/public/assets_1/assets/js/app.js"></script>
    <script>
        $(document).ready(function() {
            App.init();

        });
    </script>
    <script src="<?=base_url()?>/public/assets_1/assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="<?=base_url()?>/public/assets_1/plugins/charts/chartist/chartist.js"></script>
    <script src="<?=base_url()?>/public/assets_1/plugins/maps/vector/jvector/jquery-jvectormap-2.0.3.min.js"></script>
    <script src="<?=base_url()?>/public/assets_1/plugins/maps/vector/jvector/worldmap_script/jquery-jvectormap-world-mill-en.js"></script>
    <script src="<?=base_url()?>/public/assets_1/plugins/calendar/pignose/moment.latest.min.js"></script>
    <script src="<?=base_url()?>/public/assets_1/plugins/calendar/pignose/pignose.calendar.js"></script>
    <script src="<?=base_url()?>/public/assets_1/plugins/progressbar/progressbar.min.js"></script>
    <script src="<?=base_url()?>/public/assets_1/assets/js/default-dashboard/default-custom.js"></script>
    <script src="<?=base_url()?>/public/assets_1/assets/js/support-chat.js"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="<?=base_url()?>/public/assets_1/plugins/table/datatable/datatables.js"></script>
    <script>        
        $('#default-ordering').DataTable( {
            "language": {
                "paginate": { "previous": "<i class='flaticon-arrow-left-1'></i>", "next": "<i class='flaticon-arrow-right'></i>" },
                "info": "Showing page _PAGE_ of _PAGES_"
            }, "order": [[ 3, "desc" ]],
            drawCallback: function () { $('.dataTables_paginate > .pagination').addClass(' pagination-style-13 pagination-bordered mb-5'); }
	    } );


 function deleteData(url){ 
    swal({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Delete',
        padding: '2em'
      }).then(function(result) { 
        if (result.value==true) { 
              window.location.assign(url); //javascript redirect
            }
      })
 }


    </script>
    <!-- END PAGE LEVEL SCRIPTS -->

    <!-- BEGIN THEME GLOBAL STYLE -->
    <script src="<?=base_url()?>/public/assets_1/plugins/sweetalerts/sweetalert2.min.js"></script>
    <script src="<?=base_url()?>/public/assets_1/plugins/sweetalerts/custom-sweetalert.js"></script>
    <!-- END THEME GLOBAL STYLE -->

    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <script src="<?=base_url()?>/public/assets_1/plugins/bootstrap_validate/validator.min.js"></script>
    <!--  END CUSTOM SCRIPTS FILE  --> 

    <!-- BEGIN PAGE LEVEL SCRIPTS for calender -->
    <script src="<?=base_url()?>/public/assets_1/plugins/calendarV6/index.global.min.js"></script>
    <!-- END PAGE LEVEL SCRIPTS for calender-->

    <!-- BEGIN PAGE LEVEL SCRIPTS  Charts-->
    <script src="<?=base_url()?>/public/assets_1/plugins/charts/amcharts/amcharts.js"></script>
    <script src="<?=base_url()?>/public/assets_1/plugins/charts/amcharts/serial.js"></script>
    <script src="<?=base_url()?>/public/assets_1/plugins/charts/amcharts/light.js"></script>
    <!-- END PAGE LEVEL SCRIPTS  Charts-->

    <script src="<?=base_url()?>/public/assets_1/plugins/charts/amcharts/pie.js"></script>



    <?= $this->renderSection('footer') ?>
</body>

<!-- Mirrored from designreset.com/preview-equation/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Mar 2023 10:08:36 GMT -->
</html>
