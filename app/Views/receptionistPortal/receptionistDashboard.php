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
                                    <div class="col-lg-12">
                                        <div class="widget-header">
                                            <h5 style="color:black;"><b>Number of Students in Each Course </b></h5>
                                        </div>
                                        <div id="simplepiechartdiv" style="overflow: hidden; text-align: left;"></div>
                                    </div>
                                </div>
                        </div>

                
            </div>
</div>
    
<?= $this->endSection() ?>

<?= $this->section('footer') ?>

<script>


    
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

  
</script>
    
<?= $this->endSection() ?>

