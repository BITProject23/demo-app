<?= $this->section('side_bar') ?>

        <ul class="list-unstyled menu-categories" id="accordionExample">
                    <li class="menu">
                        <a href="#dashboard" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-computer-6 ml-3"></i>
                                <span onclick="(function(){ window.location.href = '<?=base_url()?>/'; return false; })();return false;">Dashboard</span>

                            </div>

                        </a>
                        
                    </li>

                        <li class="menu">
                            <a href="#ecommerce" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                <div class="">
                                    <i class="flaticon-avatar"></i>
                                    <span>Lecturer Management </span>
                                </div>
                                <div>
                                    <i class="flaticon-right-arrow"></i>
                                </div>
                            </a>
                            <ul class="collapse submenu list-unstyled" id="ecommerce" data-parent="#accordionExample">
                                <li>
                                    <a href="<?=base_url()?>/Lecturer_add"> Add Lecturer </a>
                                </li>
                                <li>
                                    <a href="<?=base_url()?>/Lecturer_View"> View Lecturer </a>
                                </li>
                            </ul>
                        </li>
                        
                    
                    <li class="menu">
                        <a href="#ui-features" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-user-group"></i>
                                <span>Student Management</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="ui-features"  data-parent="#accordionExample">
                            <li>
                                <a href="<?=base_url()?>/Student_add"> Add Student </a>
                            </li>
                            <li>
                                <a href="<?=base_url()?>/Student_View"> View Student </a>
                            </li>
                        </ul>
                    </li>

                    
                    <li class="menu">
                        <a href="#components" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-crm-screen"></i>
                                <span>Course Management</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="components" data-parent="#accordionExample">
                            <li>
                                <a href="<?=base_url()?>/Course_add"> Add Course </a>
                            </li>
                            <li>
                                <a href="<?=base_url()?>/Course_View"> View Course </a>
                            </li>

                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#forms" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-copy-line"></i>
                                <span>Subject Management</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="forms" data-parent="#accordionExample">
                            
                            <li>
                                <a href="<?=base_url()?>/Subject_add"> Add Subject </a>
                            </li>


                            <li>
                                <a href="<?=base_url()?>/Subject_View"> View Subject </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-layers"></i>
                                <span>Batch Management</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="elements" data-parent="#accordionExample">

                            <li>
                                <a href="<?=base_url()?>/Batch_add"> Add Batch </a>
                            </li>

                            <li>
                                <a href="<?=base_url()?>/Batch_View"> View Batch</a>
                            </li>
                            
                            <!-- <li>
                                <a href="element_list.html"> View Batch </a>
                            </li> -->
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#maps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-notes-2"></i>
                                <span>Course-Subject</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="maps"  data-parent="#accordionExample">
                            <li>
                                <a href="<?=base_url()?>/Subject_assign">Course-Subject Assign</a>
                            </li>
                            <li>
                                <a href="<?=base_url()?>/Course_join"> View Course-Subject</a>
                            </li>
                        </ul>
                    </li>

                    
                    <li class="menu">
                        <a href="#mailing" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-user-group-2"></i>
                                <span>Enrollment Management</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="mailing"  data-parent="#accordionExample">
                            <li>
                                <a href="<?=base_url()?>/Enrollment_View">View Student Enrollment</a>
                            </li>
                        </ul>
                    </li>

        
                    <li class="menu">
                        <a href="#modules" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-crm-screen-line "></i>
                                <span>Lecturer Appointment</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="modules"  data-parent="#accordionExample">
                            <li>
                                <a href="<?=base_url()?>/Appointment_View">Lecturer Appintment View</a>
                            </li>
                        </ul>
                    </li>

                    
                    <li class="menu">
                        <a href="#tables" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-table"></i>
                                <span>TimeTable </span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="tables" data-parent="#accordionExample">

                            
                            <li>
                                <a href="<?=base_url()?>/Timetable"> View Timetable </a>
                            </li>
                            
                        </ul>
                    </li>
                    
                    
                    <li class="menu">
                        <a href="#charts" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-credit-card-1"></i>
                                <span>Payments</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="charts" data-parent="#accordionExample">
                            
                            
                            <li>
                                <a href="<?=base_url()?>/Payment_add"> Add Payment </a>
                            </li> 
                            
                            <li>
                                <a href="<?=base_url()?>/Payment_View"> View Payments </a>
                            </li> 


                        </ul>
                    </li>
                    

                    <li class="menu">
                        <a href="#dragndrop" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-document-3"></i>
                                <span>Reports</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="dragndrop" data-parent="#accordionExample">
                            <li>
                                <a href="<?=base_url()?>/Payment_Search">Payment Search</a>
                            </li>
                            <li>
                                <a href="<?=base_url()?>/Enrollment_search">Enrollment Search</a>
                            </li>
                            <li>
                                <a href="<?=base_url()?>/Timetable_Search">Timetable Search</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="menu">
                        <a href="#editors" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-user-group"></i>
                                <span>User Management</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="editors" data-parent="#accordionExample">
                            <li>
                                <a href="<?=base_url()?>/User_add"> Add User </a>
                            </li>
                            <li>
                                <a href="<?=base_url()?>/User_View"> View User </a>
                            </li>
                            
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#users" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-user-6"></i>
                                <span> Profile <?= session()->get('user_name')?></span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="users" data-parent="#accordionExample">
                            <li>
                                <a href="user_profile.html"> Profile </a>
                            </li>
                            <li>
                                <a href="<?=base_url()?>/User_PasswordReset"> Change Password </a>
                            </li>
                            <li>
                                <a href="<?=base_url()?>/logout"> Logout </a>
                            </li>
                        </ul>
                    </li>

                    
        </ul>
<?= $this->endSection() ?>