

                            <div class="table-responsive mb-4">
                                 <table id="default-ordering" class="table table-striped table-bordered table-hover" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Subject Name</th>
                                                <th>Subject Time From</th>
                                                <th>Subject Time To</th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php foreach($subjecttimes as $subjecttime): ?>
                                                <tr>
                                                    <td><?= $subjecttime['subject_name']?></td>
                                                    <td><?= $subjecttime['subject_time_from']?></td>
                                                    <td><?= $subjecttime['subject_time_to']?></td>
                                                    
                                                    
                                                </tr>
                                            <?php endforeach; ?> 
                                            
                                        </tbody>  
                                    </table>

                            </div>

