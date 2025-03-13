<?= $this->extend('layouts/main_layout') ?>

<?= $this->section('title') ?>
    TimeTable
<?= $this->endSection() ?>

<?= $this->section('content') ?>

        <!--  BEGIN CONTENT PART  -->
            <div id="content" class="main-content">
                    <div class="container">
                        <div class="page-header">
                            <div class="page-title">
                                <h3>TimeTable</h3>
                                <div class="crumbs">
                                    <ul id="breadcrumbs" class="breadcrumb">
                                        <li><a href="index-2.html"><i class="flaticon-home-fill"></i></a></li>
                                        <li><a href="#">TimeTable</a></li>
                                        <li><a href="#">TimeTable View</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        

                        <div class="container">
                            
                            <div class="row layout-spacing" id="cancel-row">

                                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                    <div class="statbox widget box box-shadow">
                                        <div class="widget-content widget-content-area event-calendar">
                                            <div class="js-fc-header">
                                                <h2 class="js-fc-header-title">Timetable</h2>
                                            </div>
                                            <div id="calendar"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        
                    </div>
            </div>
        <!--  END CONTENT PART  -->
    
<?= $this->endSection() ?>

<?= $this->section('footer') ?>

<script>

$(document).ready(function() {

        var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
                },
                initialDate: new Date(),
                navLinks: true, // can click day/week names to navigate views
                businessHours: true, // display business hours
                dayMaxEvents: true,
                events: [
                    <?php foreach($timetables as $timetable): 
                        
                        switch ($timetable['batch_day']) {
                            case "Sunday":
                              $week_no = 0;
                              break;
                            case "Monday":
                                $week_no = 1;
                              break;
                            case "Tuesday":
                                $week_no = 2;
                              break;
                            case "Wednesday":
                                $week_no = 3;
                              break;
                            case "Thursday":
                                $week_no = 4;
                              break;
                            case "Friday":
                                $week_no = 5;
                              break;
                            case "Saturday":
                                $week_no = 6;
                              break;
                          }
                        
                        ?>
                            {
                            id:<?=  $timetable['batch_subject_timetable_id'] ?>,
                            title: "<?= $timetable['batch_no']?> <?= $timetable['subject_name']?>  <?= $timetable['lecturer_first_name']?> <?= $timetable['lecturer_last_name']?>",
                            startTime: "<?= $timetable['subject_time_from']?>",
                            endTime: "<?= $timetable['subject_time_to']?>",
                            daysOfWeek: [<?= $week_no ?>],
                            className: "fc-event--orange",
                            allDay: 0
                            }, 
                        <?php endforeach; ?>
                    ]
            });

            calendar.render();

});

</script>    

<?= $this->endSection() ?>