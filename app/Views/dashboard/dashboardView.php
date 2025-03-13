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
                                    <h6 class="value"><?= $today_reg_student['count'] ?></h6>
                                    <p class="mt-2">Today Registered Students</p>
                                </div>
                                <div class="col-md-6 col-6 text-right">
                                    <i class="flaticon-user-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-sm-0 mb-4">
                        <div class="widget-content widget-content-area br-4 accounts-profit">
                            <div class="row">
                                <div class="col-md-6 col-6">
                                    <h6 class="value"><?= $today_class['count'] ?></h6>
                                    <p class="mt-2">Today Classes<br><br><br></p>
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
                                    <h6 class="value"><?= $today_enrollments['count'] ?></h6>
                                    <p class="mt-2">Today Enrollments<br><br></p>
                                </div>
                                <div class="col-md-6 col-6 text-right">
                                    <i class="flaticon-employees"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-xl-0 mb-4">
                        <div class="widget-content widget-content-area br-4 accounts-cogs">
                            <div class="row">
                                <div class="col-md-6 col-6">
                                    <h6 class="value"><?= $today_payments['total'] ?></h6>
                                    <p class="mt-2">Today Payments<br><br><br></p>
                                </div>
                                <div class="col-md-6 col-6 text-right">
                                    <i class="flaticon-dollar-coin"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row layout-spacing accounts-widgets">
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-xl-0 mb-4">
                        <div class="widget-content widget-content-area br-4 accounts-income">
                            <div class="row">
                                <div class="col-md-6 col-6">
                                    <h6 class="value"><?= $total_students['count'] ?></h6>
                                    <p class="mt-2">Total Registered students</p>
                                </div>
                                <div class="col-md-6 col-6 text-right">
                                    <i class="flaticon-user-group"></i>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-sm-0 mb-4">
                        <div class="widget-content widget-content-area br-4 accounts-profit">
                            <div class="row">
                                <div class="col-md-6 col-6">
                                    <h6 class="value"><?= $total_lecturers['count'] ?></h6>
                                    <p class="mt-2">Total Lecturers<br><br></p>
                                </div>
                                <div class="col-md-6 col-6 text-right">
                                    <i class="flaticon-user-11"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="widget-content widget-content-area br-4 accounts-expenses">
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

                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-xl-0 mb-4">
                        <div class="widget-content widget-content-area br-4 accounts-cogs">
                            <div class="row">
                                <div class="col-md-6 col-6">
                                    <h6 class="value"><?= $total_courses['count'] ?></h6>
                                    <p class="mt-2">Total Courses<br><br><br></p>
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
                                        <h5 style="color:black;"><b>Student Grading Chart</b></h5>
                                        <div id="simplecolumnchartdiv" style="overflow: hidden; text-align: left;"></div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="widget-header">
                                            <h5 style="color:black;"><b>Student Enrollments within Last six months </b> </h5>
                                        </div>
                                        <div id="differentcolorchartdiv" style="overflow: hidden; text-align: left;"></div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-lg-12">
                                        <div class="widget-header">
                                            <h5 style="color:black;"><b>Number of Students in Each Course </b></h5>
                                        </div>
                                        <div id="simplepiechartdiv" style="overflow: hidden; text-align: left;"></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="widget-header">
                                            <h5 style="color:black;"><b>Student Payments of Last six months</b> </h5>
                                        </div>
                                        <div id="zoomablechartdiv" style="overflow: hidden; text-align: left;"></div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div id="" style="overflow: hidden; text-align: left;"></div>
                                    </div>
                                </div>

                                <hr>

                                <!-- <div class="row">

                                    <div class="col-lg-12">
                                        <div class="widget-header">
                                            <h5 style="color:black;"><b>Number of Students in Each Course </b></h5>
                                        </div>
                                        <div id="simplepiechartdiv" style="overflow: hidden; text-align: left;"></div>
                                    </div>
                                </div> -->
                </div>

                
            </div>
</div>
    
<?= $this->endSection() ?>

<?= $this->section('footer') ?>

<script>

$(document).ready( function() {

    AmCharts.makeChart( "simplecolumnchartdiv", {
        "type": "serial",
        "theme": "light",
        "dataProvider": 
        <?= json_encode($bar_assignment_grade) ?>
        
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
    
    var chart = AmCharts.makeChart("simplepiechartdiv", {
    "type": "pie",
    "startDuration": 0,
     "theme": "light",
     "colors" : ["#ee3d50","#ffbb44","#3232b7","#816cfd","#07e0c4","#f8538d","#00b1f4","#f58b22","#25d5e4"],
    "addClassNames": true,
    "legend":{
      "position":"right",
      "marginRight":100,
      "autoMargins":false
    },
    "innerRadius": "30%",
    "defs": {
      "filter": [{
        "id": "shadow",
        "width": "200%",
        "height": "200%",
        "feOffset": {
          "result": "offOut",
          "in": "SourceAlpha",
          "dx": 0,
          "dy": 0
        },
        "feGaussianBlur": {
          "result": "blurOut",
          "in": "offOut",
          "stdDeviation": 5
        },
        "feBlend": {
          "in": "SourceGraphic",
          "in2": "blurOut",
          "mode": "normal"
        }
      }]
    },
    "dataProvider": <?= json_encode($pie_enrollments) ?>,
    "valueField": "count",
    "titleField": "course_name",
    "responsive": {
      "enabled": true,
      "rules": [
        // at 767px to below
        {
          "maxWidth": 767,
          "overrides": {
            "legend":{
              "position":"bottom",
            }
          }
        }

      ]
    }
  });

  var chart = AmCharts.makeChart( "zoomablechartdiv", {
        "type": "serial",
        "theme": "light",
        "marginRight": 0,
        "marginLeft": 60,
        "marginTop": 50,
        "autoMarginOffset": 20,
        "dataDateFormat": "YYYY-MM",
        "valueAxes": [ {
          "id": "v1",
          "axisAlpha": 0,
          "position": "left",
          "ignoreAxisWidth": true
        } ],
        "balloon": {
          "borderThickness": 1,
          "shadowAlpha": 0,
          
        },
        "graphs": [ {
          "id": "g1",
          "balloon": {
            "drop": true,
            "adjustBorderColor": false,
            "color": "#ffffff",
            "type": "smoothedLine",
             "lineColor": "#1AD271",
            "balloonColor" : "#1AD271"
          },
          "fillAlphas": 0.2,
          "bullet": "round",
          "bulletBorderAlpha": 1,
          "bulletColor": "#FFFFFF",
          "bulletSize": 5,
          "hideBulletsCount": 50,
          "lineThickness": 2,
          "title": "red line",
          "useLineColorForBulletBorder": true,
          "valueField": "total",
          "balloonText": "<span style='font-size:18px;'>[[value]]</span>",
          "lineColor": "#e9b02b",
        } ],
        "chartCursor": {
          "valueLineEnabled": true,
          "valueLineBalloonEnabled": true,
          "cursorAlpha": 0,
          "zoomable": false,
          "valueZoomable": true,
          "valueLineAlpha": 0.5
        },
        "valueScrollbar": {
          "autoGridCount": true,
          "color": "#000000",
          "scrollbarHeight": 50
        },
        "categoryField": "payment_year_month",
        "categoryAxis": {
          "parseDates": false,
          "dashLength": 1,
          "minorGridEnabled": true
        },
        "export": {
          "enabled": true
        },
        "dataProvider": <?= json_encode($last_sixmonth_payments) ?>,

    } );

    var chart = AmCharts.makeChart( "differentcolorchartdiv", {
      "theme": "light",
      "type": "serial",
      "dataProvider": <?= json_encode($last_sixmonth_enrollments) ?>,
      "valueAxes": [ {
        "inside": true,
        "axisAlpha": 0
      } ],
      "graphs": [ {
        "id": "g1",
        "balloonText": "<div style='margin:5px; font-size:19px;'><span style='font-size:13px;'>[[category]]</span><br>[[value]]</div>",
        "bullet": "round",
        "bulletBorderAlpha": 1,
        "bulletBorderColor": "#FFFFFF",
        "hideBulletsCount": 50,
        "lineThickness": 2,
        "lineColor": "#00b1f4",
        "negativeLineColor": "#ff3743",
        "valueField": "count"
      } ],
      "chartScrollbar": {

      },
      "chartCursor": {},
      "categoryField": "en_year_month", 
      "categoryAxis": {
        "parseDates": false,
        "axisAlpha": 0,
        "minHorizontalGap": 55
      },
      "listeners": [ {
        "event": "dataUpdated",
        "method": function() {
          if ( chart ) {
            if ( chart.zoomToIndexes ) {
              chart.zoomToIndexes( 130, chartData.length - 1 );
            }
          }
        }
      } ]
    } );

});

</script>
    
<?= $this->endSection() ?>

