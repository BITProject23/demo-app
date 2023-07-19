

                                    <div class="table-responsive mb-4">
                                    <table id="default-ordering" class="table table-striped table-bordered table-hover" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Student Name</th>
                                                <th>Assignment Marks</th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php foreach($students as $student): ?>
                                                <tr>
                                                    <td><input type="hidden" name="student_id[]" value="<?=$student['student_id']?>"> <!--multiple insert of data put as name with array ex:- name="subject_id[]" || from [] it identify as array -->
                                                    <?= $student['student_first_name']?> <?= $student['student_last_name']?></td>
                                                    <td><input type="text" name="assignment_marks[]" id="assignment_marks"></td>
                                                    
                                                    
                                                </tr>
                                            <?php endforeach; ?> 
                                            
                                        </tbody>  
                                    </table>

                                </div>

