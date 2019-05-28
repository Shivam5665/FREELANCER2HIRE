<form action="filtered_search.php" method="POST" class="form-group">
                        <div class="row">
                            <div class="col-2 d-flex flex-row justify-content-center align-items-center">
                                <h4 class="display text-primary">Job_title&#58;</h4>
                            </div>
                            <div class="form-group col-4">
                                <label for="form-select" id="form-select"></label>
                                <select class="form-control" name="Job_Title">
                                    <?php
                                        $selected ='';
                                        function get_Job_Titles($select){
                                            $Job_Tiltle = array('Select' => 'Select',
                                                            'ELECTRICAL MECHANIC' => 'ELECTRICAL MECHANIC ',
                                                            'POLICE OFFICER' => 'POLICE OFFICER',
                                                            'FIREFIGHTER' => 'FIREFIGHTER',
                                                            'POOL MOTOR TRUCK DRIVER' => 'POOL MOTOR TRUCK DRIVER',
                                                            'PARAMEDIC' => 'PARAMEDIC',
                                                            'CROSSING GUARD' => 'CROSSING GUARD',
                                                            'SANITATION LABORER' => 'SANITATION LABORER',
                                                            'CIVIL ENGINEER' => 'CIVIL ENGINEER IV',
                                                            'MOTOR TRUCK DRIVER' => 'MOTOR TRUCK DRIVER');
                                            while(list($k, $v) = each($Job_Title)){
                                                if ($select == $v){
                                                    $options .= "<option value=".$v." selected>".$k."</option>";
                                                }
                                                else{
                                                    $options .= "<option value=".$v." >".$k."</option>";
                                                }
                                            }
                                            return $options;
                                        } 
                                        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                                            
                                            $selected = $_POST['Job_Title'];
                                            echo $selected;
                                        }
                                        echo get_Job_Titles($selected);
                                    ?>  
                                </select>
                            </div> 
                            <div class="col-2 d-flex flex-row justify-content-center align-items-center">
                                <h4 class="display text-primary">Department&#58;</h4>
                            </div>
                            <div class="form-group col-4">
                                <label for="form-select" id="form-select"></label>
                                <input type="text" class="form-control m-3" placeholder="Department"/>
                            </div> 
                        </div>    
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="col-2 d-flex flex-row justify-content-center align-items-center">
                                        <h4 class="display text-primary">Annual Salary&#58;</h4>
                                    </div>
                                    <div class="form-group d-flex flex-row justify-content-center align-items-center">
                                        <label for="form-select" id="form-select"></label>
                                        <select class="form-control" name="Annual_Salarycomp">
                                            <option>Select</option>
                                            <option>Equal to</option>
                                            <option>Not equal to</option>
                                            <option>Greater than</option>
                                            <option>Greater than equal to</option>
                                            <option>Less than</option>
                                            <option>Less than equal to</option>
                                            <?php/*
                                                $selected ='';
                                                function get_rank_comp($select){
                                                    $rank_comp = array('Select' => 'Select',
                                                                    'Equal to' => 'Equal to',
                                                                    'Greater than' => 'Greater than',
                                                                    'Greater than equal to' => 'Greater than equal to',
                                                                    'Less than' => 'Less than',
                                                                    'Less than equal to' => 'Less than equal to',
                                                                    'Not equal to' => 'Not equal to',
                                                                    
                                                                );
                                                    while(list($k, $v) = each($rank_comp)){
                                                    
                                                        if ($select == $v){
                                                            $options .= "<option value=".$v." selected>".$k."</option>";
                                                        }
                                                        else{
                                                            $options .= "<option value=".$v." >".$k."</option>";
                                                        }
                                                    }
                                                    return $options;
                                                } 
                                                if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                                                    
                                                    $selected = $_POST['rankcomp'];
                                                    echo $selected;
                                                }
                                                echo get_rank_comp($selected);
                                                */
                                            ?>  
                                        </select>
                                        <input type="number" min="1" max="1000" class="form-control m-3" placeholder="Enter value" id="Annual_Salaryvalue" name="rankvalue" onchange="check_Annual_Salary_val()">
                                        <?php/*
                                            if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                                                $selected = $_POST['rankval'];
                                                echo $selected;
                                            }*/
                                        ?>
                                    </div>
                                </div> 
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col-2 d-flex flex-row justify-content-center align-items-center">
                                        <h4 class="display text-primary">Typical Hours&#58;</h4>
                                    </div>See
                                    <div class="form-group d-flex flex-row justify-content-center align-items-center">
                                        <label for="form-select" id="form-select"></label>
                                        <select class="form-control" name="Typical_Hourscomp">
                                            <?php/*
                                                $selected ='';
                                                function get_year_comp($select){
                                                    $year_comp = array('Select' => 'Select',
                                                                    'Equal to' => 'Equal to',
                                                                    'Greater than' => 'Greater than',
                                                                    'Greater than equal to' => 'Greater than equal to',
                                                                    'Less than' => 'Less than',
                                                                    'Less than equal to' => 'Less than equal to',
                                                                    'Not equal to' => 'Not equal to',
                                                                    
                                                                );
                                                    while(list($k, $v) = each($year_comp)){
                                                    
                                                        if ($select == $v){
                                                            $options .= "<option value=".$v." selected>".$k."</option>";
                                                        }
                                                        else{
                                                            $options .= "<option value=".$v." >".$k."</option>";
                                                        }
                                                    }
                                                    return $options;
                                                } 
                                                if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                                                    
                                                    $selected = $_POST['yearcomp'];
                                                    echo $selected;
                                                }
                                                echo get_year_comp($selected);
                                                */
                                            ?>  
                                        </select>
                                        <input type="number" min="2" max="24" class="form-control m-3" placeholder="Enter value" id="Typical_Hoursvlaue" name="Typical_Hoursvlaue" onchange="check_Typical_Hours_val()">
                                        <?php/*
                                            if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                                                $selected = $_POST['yearval'];
                                                echo $selected;
                                            }*/
                                        ?>
                                    </div> 
                                </div>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col-2 d-flex flex-row justify-content-center align-items-center">
                                        <h4 class="display text-primary">Hourly Rate <small>(Dollars)</small>&#58;</h4>
                                    </div>
                                    <div class="form-group d-flex flex-row justify-content-center align-items-center">
                                        <label for="form-select" id="form-select"></label>
                                        <select class="form-control" name="Houly_Ratecomp">
                                            <?php/*
                                                $selected ='';
                                                function get_runtime_comp($select){
                                                    $runtime_comp = array('Select' => 'Select',
                                                                    'Equal to' => 'Equal to',
                                                                    'Greater than' => 'Greater than',
                                                                    'Greater than equal to' => 'Greater than equal to',
                                                                    'Less than' => 'Less than',
                                                                    'Less than equal to' => 'Less than equal to',
                                                                    'Not equal to' => 'Not equal to',
                                                                    
                                                                );
                                                    while(list($k, $v) = each($runtime_comp)){
                                                    
                                                        if ($select == $v){
                                                            $options .= "<option value=".$v." selected>".$k."</option>";
                                                        }
                                                        else{
                                                            $options .= "<option value=".$v." >".$k."</option>";
                                                        }
                                                    }
                                                    return $options;
                                                } 
                                                if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                                                    
                                                    $selected = $_POST['runtimecomp'];
                                                    echo $selected;
                                                }
                                                echo get_runtime_comp($selected);
                                                */
                                            ?>  
                                        </select>
                                        <input type="number" min="1" max="240" class="form-control m-3" placeholder="Enter value" id="Houly_Ratevalue" name="Hourly_Ratevalue" onchange="check_Hourly_Rate_val()">
                                        <?php/*
                                            if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                                                $selected = $_POST['runtimeval'];
                                                echo $selected;
                                            }*/
                                        ?>
                                    </div> 
                                </div>
                            </div>
                        </div>

                        <hr class="col-6">
                        <button class="btn col-1 btn-primary" type="submit" value="submit" id="submit" onclick="">
                            Go
                        </button>
                    </form>