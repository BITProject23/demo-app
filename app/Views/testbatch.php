<script src="<?=base_url()?>/public/assets_1/assets/js/libs/jquery-3.1.1.min.js"></script>

<!-- < ?= $this->extend('layouts/main_layout.php') ?> -->





<div class="form-group row mb-4">
                                        <label for="courses" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Course</label>
                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                            <select class="form-control-rounded form-control" name="courses" id="courses" placeholder="">
                                                <option value="0">0</option>
                                                <option value="1">First</option>
                                                <option value="2">Second </option>

                                            </select>
                                        </div>
                                    </div>

<script>
$(document).ready(function(){
       // alert("ddd");


    $('#courses').change(function(){

    // alert("test" + $('#courses').val());

    let  courseID = $('#courses').val();


            $.ajax({
           url:'<?=base_url()?>/getCourseCode',

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

</script>



