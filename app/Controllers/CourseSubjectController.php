<?php

namespace App\Controllers;

use App\Models\CourseSubjectModel;
use App\Models\CourseModel;
use App\Models\SubjectModel;

class CourseSubjectController extends BaseController
{
    public function index()
    {
        $courseModel = new CourseModel();
        $data['courses'] = $courseModel->findAll();

        $subjectModel = new SubjectModel();
        $data['subjects'] = $subjectModel->findAll();

        //print_r($data);

        return view('courseSubject/courseSubjectView',$data);
      
    }

    public function getSubject()
    {
       
        //$subjects = $subjectModel->where('course_id', $courseId)->findAll();

        return json_encode($subjects);
    }

    public function create()
    {
        $course_id = $this->request->getPost('courses');

        $subjects = $this->request->getPost('subjects');

        $courseSubjectModel = new CourseSubjectModel();

        // print_r($course_id);

        // print_r($subjects);


       foreach ($subjects as $sub) :

        $data = ['course_id' => $course_id, 'subject_id' => $sub ];
       // print_r($data);
        $courseSubjectModel->save($data);
       endforeach;

        $courseSubjectModel = new CourseSubjectModel(); //make new object from model that use in this controller

        if($courseSubjectModel->save($data)){
            return redirect()->to('Subject_assign')->with('success','Subjects have been assigned for the courses successfully!');
        }else{
            return redirect()->back()->withInput()->with('errors',$courseSubjectModel->errors());
        }
    }

    public function courseSubjectJoin()
    {

        $courseModel = new CourseModel();
        $subjectModel = new SubjectModel();
        $courseSubjectModel = new CourseSubjectModel();

        $query['courses'] = $courseSubjectModel->select('tbl_course_subject.course_subject_id, tbl_course.course_name, tbl_subject.subject_name,tbl_course_subject.status')
        ->join('tbl_course','tbl_course.course_id = tbl_course_subject.course_id')
        ->join('tbl_subject','tbl_subject.subject_id = tbl_course_subject.subject_id')
        ->findAll();

        //print_r($query);

        //$query['courses'] = $courseSubjectModel->findAll();

        return view('courseSubject/courseSubjectTableView',$query);


    }
    


    // public function assign()
    // {
    //     $courseModel = new CourseModel();
    //     $subjectModel = new SubjectModel();

    //     $course_id = $this->request->getPost('course_id');
    //     $subjects = $this->request->getPost('subjects');

    //     for($x=0; $x<$subjects.length(); $x++){
    //         CourseModel.assign('course_id'->$course_id, 'subjects'->$subject[$x]);
    //     }

    // }


    public function edit($courseSubjectId)
    {
        // Fetch the course and subject details based on the courseSubject ID
        $courseModel = new CourseModel();
        $subjectModel = new SubjectModel();
        $courseSubjectModel = new CourseSubjectModel();

      //  $CourseId = "";

        $data['courseSubject'] = $courseSubjectModel->find($courseSubjectId);
        // select * from tbl_course_subject where course_subject_id = 1;
        $data['courseSubject'] = $courseSubjectModel->where('course_subject_id',$courseSubjectId)->first(); //check first row
       // print_r($data);
        $cid = $data['courseSubject']['course_id'];
        $data['courses'] = $courseModel->where('course_id',$cid)->first();
       // echo $data['courses']['course_name'];

        $data['subjects'] = $subjectModel->findAll();

        return view('courseSubject/courseSubjectUpdateView',$data);
    }

    public function update()
    {
        // Update the subject ID of the course
        
        $courseSubjectModel = new CourseSubjectModel();

        $courseSubjectId = $this->request->getPost('course_subjects_id_ref');
      //  $course_id = $this->request->getPost('courses');
        $subjects = $this->request->getPost('course_subject');

        $courseSubjectModel->update($courseSubjectId, ['subject_id' => $subjects]);

        return redirect()->to('Course_join')->with('success','CourseSubject Details Updated!');
    }

}
?>