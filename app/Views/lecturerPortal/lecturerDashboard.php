<?= $this->extend('layouts/main_layout') ?>

<?= $this->section('title') ?>
    Dashboard 
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div id="content" class="main-content">
            <div class="container">
                <div class="page-header">
                    <div class="page-title">
                        <h3>Dashboard</h3>
                    </div>
                </div>
                
                <div class="row layout-spacing accounts-widgets">
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-xl-0 mb-4">
                        <div class="widget-content widget-content-area br-4 accounts-income">
                            <div class="row">
                                <div class="col-md-6 col-6">
                                    <h6 class="value"><?= $total_students['count'] ?></h6>
                                    <p class="mt-2">Total Entrollment Students</p>
                                </div>
                                <div class="col-md-6 col-6 text-right">
                                    <i class="flaticon-user-group"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-xl-0 mb-4">
                        <div class="widget-content widget-content-area br-4 accounts-cogs">
                            <div class="row">
                                <div class="col-md-6 col-6">
                                    <h6 class="value"><?= $total_batches['count'] ?></h6>
                                    <p class="mt-2">Total Batches<br><br><br></p>
                                </div>
                                <div class="col-md-6 col-6 text-right">
                                    <i class="flaticon-crm-screen"></i>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-sm-0 mb-4">
                        <div class="widget-content widget-content-area br-4 accounts-profit">
                            <div class="row">
                                <div class="col-md-6 col-6">
                                    <h6 class="value"><?= $total_subjects['count'] ?></h6>
                                    <p class="mt-2">Today Subjects<br><br></p>
                                </div>
                                <div class="col-md-6 col-6 text-right">
                                    <i class="flaticon-notes-6"></i>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="widget-content widget-content-area br-4 accounts-expenses">
                            <div class="row">
                                <div class="col-md-6 col-6">
                                    <h6 class="value"><?= $today_class['count'] ?></h6>
                                    <p class="mt-2">Today Classes<br><br><br></p>
                                </div>
                                <div class="col-md-6 col-6 text-right">
                                    <i class="flaticon-simple-screen-line"></i>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>


                <div class="widget-content widget-content-area">
                                <div class="row">
                                    <div class="col-lg-6 mb-4">
                                        <div id="simplecolumnchartdiv" style="overflow: hidden; text-align: left;"></div>
                                    </div>
                                    
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div id="zoomablechartdiv" style="overflow: hidden; text-align: left;"></div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div id="" style="overflow: hidden; text-align: left;"></div>
                                    </div>
                                </div>

                                
                </div>

                
            </div>
</div>
    
<?= $this->endSection() ?>

<?= $this->section('footer') ?>

<!-- <script>

$(document).ready( function() {

    AmCharts.makeChart( "simplecolumnchartdiv", {
        "type": "serial",
        "theme": "light",
        "dataProvider": 
        < ?= json_encode($bar_assignment_grade) ?>
        
    ,
        "valueAxes": [ {
        "gridColor": "#FFFFFF",
        "gridAlpha": 0.2,
        "dashLength": 0
        } ],
        "gridAboveGraphs": true,
        "startDuration": 1,
        "graphs": [ {
        "balloonText": "[[category]]: <b>[[value]]</b>",
        "fillAlphas": 0.7,
        "lineAlpha": 0.2,
        "type": "column", 
        "valueField": "count", // database col.name for x-axis
        "fillColors":"#5247bd",
        "lineColor":"#5247bd"
        } ],
        "chartCursor": {
        "categoryBalloonEnabled": false,
        "cursorAlpha": 0,
        "zoomable": false
        },
        "categoryField": "grade", // database col.name for y-axis
        "categoryAxis": {
        "gridPosition": "start",
        "gridAlpha": 0,
        "tickPosition": "start",
        "tickLength": 20
        },
        "export": {
        "enabled": true
        }
    });
    
    

</script> -->
    
<?= $this->endSection() ?>

