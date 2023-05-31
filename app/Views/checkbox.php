
<form action="">

<!-- course -->



<!-- foreach -->

<input type="checkbox" name = "subjects[]" vlue="<?=$sub_id ?>"> <?=$subname ?>

<!-- endforeach -->



</form>



$cou_id = request->getVar("c_id");
$subjects = request->getVar("subjects");

for($x=0; $x<$subjects.length(); $x++){

    couse_model.create('course_id'=>$cou_id, 'subject'=>$subjects[$x]);

}