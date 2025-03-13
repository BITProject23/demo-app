<!-- <script src="< ?=base_url()?>/public/assets_1/assets/js/libs/jquery-3.1.1.min.js"></script>







<div class="form-group row mb-4">
                                        <label for="courses" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Course</label>
                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                            <select class="form-control-rounded form-control" name="courses" id="courses" placeholder="">
                                                <option value="0">0</option>
                                                <option value="1">First</option>
                                                <option value="2">Second </option>

                                            </select>
                                        </div>
                                    </div> -->

<!-- <script>
$(document).ready(function(){
       // alert("ddd");


    $('#courses').change(function(){

    // alert("test" + $('#courses').val());

    let  courseID = $('#courses').val();


            $.ajax({
           url:'< ?=base_url()?>/getCourseCode',

          //url:"https://www.google.com/",

            method: 'POST',
           // data: {courseID:courseID},
            dataType:'text',
            successs : function (response){
                alert('response' + response);
            },
            error : function (xhr, status, error) {
                alert(xhr.responseText);
            }
            });
    });


});

</script> -->

<script src="public/assets_1/assets/js/libs/jquery-3.1.1.min.js"></script>
        <!-- <script src="public/assets_1/assets/js/validation.js"></script> -->

        <!-- <script> 
            function studentValidateForm(){

                // Student No validation
                var studentNo = document.getElementById("student_no").value;
                if (studentNo === "") {
                    document.getElementById("student_no_error").innerHTML = "Please enter student number.";
                    document.getElementById("student_no_error").style.color = "red";
                    return false;
                } else {
                    document.getElementById("student_no_error").innerHTML = "";
                }

                // First Name validation
                var firstName = document.getElementById("student_first_name").value;
                if (firstName === "") {
                    // document.getElementById("first_name_error").empty();
                    document.getElementById("first_name_error").innerHTML = "Please enter a first name.";
                    document.getElementById("first_name_error").style.color = "red";
                    return false;
                } else {
                    document.getElementById("first_name_error").innerHTML = "";
                }

                // Last Name validation
                var lastName = document.getElementById("student_last_name").value;
                if (lastName === "") {
                    document.getElementById("last_name_error").innerHTML = "Please enter a last name.";
                    document.getElementById("last_name_error").style.color = "red";
                    return false;
                } else {
                    document.getElementById("last_name_error").innerHTML = "";
                }

                // NIC validation
                var nic = document.getElementById("student_nic").value;
                var nicRegex = /^[0-9]{9}[vVxX]$/;
                if (nic === "" || !nicRegex.test(nic)) {
                    document.getElementById("nic_error").innerHTML = "Please enter a valid NIC number.";
                    document.getElementById("nic_error").style.color = "red";
                    return false;
                } else {
                    document.getElementById("nic_error").innerHTML = "";
                }

                // Email validation
                var email = document.getElementById("student_email").value;
                var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (email === "" || !emailRegex.test(email)) {
                    document.getElementById("email_error").innerHTML = "Please enter a valid email address.";
                    document.getElementById("email_error").style.color = "red";
                    return false;
                } else {
                    document.getElementById("email_error").innerHTML = "";
                }

                // Gender validation
                var gender = document.querySelector('input[name="student_gender"]:checked');
                if (!gender) {
                    document.getElementById("gender_error").innerHTML = "Please select a gender.";
                    document.getElementById("gender_error").style.color = "red";
                    return false;
                } else {
                    document.getElementById("gender_error").innerHTML = "";
                }

                // Date of Birth validation
                var dob = document.getElementById("student_bod").value;
                if (dob === "") {
                    document.getElementById("dob_error").innerHTML = "Please select a date of birth.";
                    document.getElementById("dob_error").style.color = "red";
                    return false;
                } else {
                    document.getElementById("dob_error").innerHTML = "";
                }


                // Phone number validation
                var phoneNumber = document.getElementById("student_contact_no").value;
                var phoneNumberRegex = /^[0-9]{10}$/; //pattern="[0-9]{10}"
                if (phoneNumber === "" || !phoneNumberRegex.test(phoneNumber)) {
                    document.getElementById("phone_error").innerHTML = "Please enter a valid 10-digit phone number.";
                    document.getElementById("phone_error").style.color = "red";
                    return false;
                } else {
                    document.getElementById("phone_error").innerHTML = "";
                }

                // Address validation
                var address = document.getElementById("student_address").value;
                if (address === "") {
                    document.getElementById("address_error").innerHTML = "Please enter an address.";
                    document.getElementById("address_error").style.color = "red";
                    return false;
                } else {
                    document.getElementById("address_error").innerHTML = "";
                }

                // Rest of the validation code

                return true;


            }

        </script> -->

      
    <!-- <script> //ajax to thedatepick
            $(document).ready(function() {
                // Load data based on selected option
                $('#payment_date').change(function() {
                    var sval = $(this).val();
                    loadData(sval);
                })
            });

            // Function to load data via Ajax
            function loadData(value) {
                $.ajax({
                    url: "< ?php echo base_url(); ?>" + "/paymentdate_By_selectdate",
                    method: "POST",
                    data: { 
                        selectedValue: value
                    },
                    dataType: "html",
                    success: function(response) {  //
                    $('#default-ordering').html(response);
                    $('').modal('show');
                    },
                    error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                    }
                });
                }
        </script>
    
   -->

<!-- public function paymentByPickdate() //controll
    {
        $paymentModel = new PaymentModel();
        $selectedValue = $this->request->getPost('selectedValue');

        $data['payments'] = $paymentModel->select('tbl_batch.batch_id, tbl_course.course_name, tbl_batch.batch_no, 
        tbl_student.student_no,tbl_student.student_first_name,tbl_student.student_last_name , tbl_payment.course_payment ,
        tbl_payment.payment_year_month, tbl_payment.payment_remark')
        ->join('tbl_batch','tbl_batch.batch_id = tbl_payment.batch_id')
        ->join('tbl_course','tbl_course.course_id = tbl_batch.course_id') 
        ->join('tbl_student','tbl_student.student_id = tbl_payment.student_id')
        ->where('tbl_payment.payment_year_month', $selectedValue)->findAll();

        return view('payment/ajaxPaymentdateByDatePIck',$data);
    } -->

    <!-- <thead> //ajaxView
                                            <tr>
                                                <div class="form-group row mb-4">
                                                    <label for="student_bod" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Date</label>
                                                    <div class="col-xl-3 col-lg-4 col-sm-3">
                                                        <input type="date" class="form-control-rounded form-control"  name="payment_date" id="payment_date" placeholder="" required>
                                                        <div class="help-block with-errors"></div>   
                                                    </div>
                                                </div>
                                            </tr>
                                            <tr>
                                                <th>Batch No</th>
                                                <th>Course</th>
                                                <th>Student No</th>
                                                <th>Student Name</th>
                                                <th>Paid Amount</th>
                                                <th>Payment Date</th>
                                                <th>Remark</th>
                                                <th>Edit</th>
                                                <th></th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            < ?php foreach($payments as $payment): ?>
                                                <tr>
                                                    <td>< ?= $payment['batch_no']?></td>
                                                    <td>< ?= $payment['course_name']?></td>
                                                    <td>< ?= $payment['student_no']?></td>
                                                    <td>< ?= $payment['student_first_name']?> < ?= $payment['student_last_name']?></td>
                                                    <td>< ?= $payment['course_payment']?></td>
                                                    <td>< ?= $payment['payment_year_month']?></td>
                                                    <td>< ?= $payment['payment_remark']?></td> 
                                                </tr>
                                            < ?php endforeach; ?>    
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Batch No</th>
                                                <th>Course</th>
                                                <th>Student No</th>
                                                <th>Student Name</th>
                                                <th>Paid Amount</th>
                                                <th>Payment Date</th>
                                                <th>Remark</th>
                                                <th>Edit</th>
                                                <th></th>
                                            </tr>
                                        </tfoot> -->


<!-- public function paymentBystudents(){

        $studentModel = new StudentModel(); 

        $data['students'] = $studentModel->select('tbl_student.student_first_name,tbl_student.student_last_name')
        ->join('tbl_payment','tbl_payment.student_id  = tbl_student.student_id AND MONTH(payment_year_month) = "'.date('m').'" AND YEAR(payment_year_month) = "'.date('Y').'" ','left')
        ->where('tbl_payment.payment_id',null)
        ->findAll();

        $db = \Config\Database::connect();

        $query   = $db->query('SELECT tbl_student.student_first_name,tbl_student.student_last_name 
         FROM tbl_student LEFT JOIN (SELECT * FROM tbl_payment WHERE 
         MONTH(payment_year_month) = "'.date('m').'" AND YEAR(payment_year_month) = "'.date('Y').'") 
         as tbl_payament ON tbl_student.student_id = tbl_payament.student_id where tbl_payament.payment_id IS NULL ') ;
     $data['students'] =  $query->getResultArray();

        return view('student/studentPaymentReport',$data);

    }

    //VERTUAL TABLE -> SELECT QUERY IN SELECT QUERY KNOW AS SUB QUERY paymentnot for JM month-->

