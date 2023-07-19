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