<?php

namespace App\Controllers;

use App\Models\StudentModel;
use App\Models\LecturerModel;
use App\Models\BatchModel;
use App\Models\CourseModel;
use App\Models\EnrollmentModel;

class ReceptionistPortalContoller extends BaseController
{
    public function index()
    {
        $studentModel = new StudentModel();
        $data['total_students'] = $studentModel->select('count(*) AS count')->first();

        $lecturerModel = new LecturerModel();
        $data['total_lecturers'] = $lecturerModel->select('count(*) AS count')->first();

        $batchModel = new BatchModel();
        $data['total_batches'] = $batchModel->select('count(*) AS count')->first();

        $courseModel = new CourseModel();
        $data['total_courses'] = $courseModel->select('count(*) AS count')->first();

        $enrollmentModel = new EnrollmentModel();
        $data['pie_enrollments'] = $enrollmentModel->select('count(*) AS count, tbl_course.course_name')->groupBy('tbl_enrollment.course_id')
        ->join('tbl_course','tbl_course.course_id  = tbl_enrollment.course_id')
        ->findAll();

        return view('receptionistPortal/receptionistDashboard',$data);
    }

    public function view_students()
    {
        $studentModel = new StudentModel();
        $data['students'] = $studentModel->findAll();

        
        return view('receptionistPortal/viewStudents',$data);
    }

    

}
?>