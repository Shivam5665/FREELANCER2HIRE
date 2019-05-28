<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <Name>Filtered Search</Name>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" crossorigin="anonymous">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"  crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"  crossorigin="anonymous"></script>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"  crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="#">
    <style>
            .dropdown-submenu {
                position: relative;
            }

            .dropdown-submenu>.dropdown-menu {
                top: 0;
                left: 100%;
                margin-top: -6px;
                margin-left: -1px;
                -webkit-border-radius: 0 6px 6px 6px;
                -moz-border-radius: 0 6px 6px;
                border-radius: 0 6px 6px 6px;
            }

            .dropdown-submenu:hover>.dropdown-menu {
                display: block;
            }

            .dropdown-submenu>a:after {
                display: block;
                content: " ";
                float: right;
                width: 0;
                height: 0;
                border-color: transparent;
                border-style: solid;
                border-width: 5px 0 5px 5px;
                border-left-color: #ccc;
                margin-top: 5px;
                margin-right: -10px;
            }

            .dropdown-submenu:hover>a:after {
                border-left-color: #fff;
            }

            .dropdown-submenu.pull-left {
                float: none;
            }

            .dropdown-submenu.pull-left>.dropdown-menu {
                left: -100%;
                margin-left: 10px;
                -webkit-border-radius: 6px 0 6px 6px;
                -moz-border-radius: 6px 0 6px 6px;
                border-radius: 6px 0 6px 6px;
            }
    </style>
    <script>
        function show_filters(){
            document.getElementById("filterArea").className = "d-block";
        }

        function check_Annual_Salary_val(){ 
            var x = document.getElementById('Annual_Salaryvalue');
            if (parseInt(x.value) > parseInt(x.max)){
                x.value = x.max;
            }else if (parseInt(x.value) <= parseInt(x.min)){
                x.value = x.min;
            }
        }
        function check_Hourly_Rate_val(){ 
            var x = document.getElementById('Hourly_Ratevalue');
            if (parseInt(x.value) > parseInt(x.max)){
                x.value = x.max;
            }else if (parseInt(x.value) <= parseInt(x.min)){
                x.value = x.min;
            }
        }
        function check_Typical_Hours_val(){ 
            var x = document.getElementById('Typical_Hoursvalue');
            if (parseInt(x.value) > parseInt(x.max)){
                x.value = x.max;
            }else if (parseInt(x.value) <= parseInt(x.min)){
                x.value = x.min;
            }
        }
    </script>
</head>
<body>
<div class="wrapper">
    <!-- Page Content  -->
        <div id="content">
            <nav class="navbar navbar-inverse navbar-expand-lg navbar-fixed-top">
                <div class="container-fluid">
                    <div class="nav navbar-nav">
                        <div class="navbar-header">
                            <img src="https://proxy.duckduckgo.com/iu/?u=http%3A%2F%2Fwww.thelogomix.com%2Ffiles%2Fimagecache%2Fv3-logo-detail%2Ffreelance%2520folder.jpg&f=1" alt="logo" style="width:50px;">
                        </div>
                        <div class="navbar-header">    
                            <a class="navbar-brand" href="#">FREELANCERS2HIRE</a> 
                        </div>
                        <form class="navbar-form navbar-left" action="/action_page.php">
                            <div class="form-group">
                                <input type="text" class="form-control" name="search_qry" placeholder="Type Your Choice">
                            </div>
                            <button type="Search" class="btn btn-default">Search</button>
                        </form>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php"><i class="fas fa-home-lg"></i></span> Home</a></li>
                        <?php 
                            if(sizeof($_SESSION) == 0){
                                echo'
                        <li><a href="sign_up.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="log_in.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                                ';
                            }
                            if(sizeof($_SESSION) == 1){
                                echo '
                        <li><a href="user_favourites.php?user='.$_SESSION['user'].'"><span class="glyphicon glyphicon-heart"></span> '.$_SESSION['user'].'\'s favourites</a></li>
                        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                                ';
                            }
                        ?>
                        <li><a href="#"><strong>Help?</strong></a></li>
                    </ul>
                </div>
            </nav> 
            <br>
            <br>
            <br>
            <div class="container-fluid border rounded m-3">    
                <div class="card shadow-lg col-11 mx-auto text-center justify-content-center bg-light m-3">
                    <div class="btn btn-lg btn-success col-2 mx-auto m-3" onclick="show_filters()">More filters?</div>
                    <div class="d-none" id="filterArea">
                    <form action="filtered_search.php" method="POST" class="form-group">
                        <div class="row">
                            <div class="col-2 d-flex flex-row justify-content-center align-items-center">
                                <h4 class="display text-primary">Job Titles&#58;</h4>
                            </div>
                            <div class="form-group col-4">
                                <label for="form-select" id="form-select"></label>
                                <select class="form-control" name="Job_Titles">
                                    <option>Any</option> 
                                    <option>POLICE OFFICER</option> 
                                    <option>ELECTRICAL MECHANIC</option> 
                                    <option>FIREFIGHTER</option> 
                                    <option>SANITATION LABORER</option> 
                                    <option>SERGEANT</option> 
                                    <option>MOTOR TRUCK DRIVER</option> 
                                    <option>LIBRARY ASSOCIATE</option> 
                                    <option>MACHINIST</option> 
                                    <option>WATCHMAN</option> 
                                    <option>POOL MOTOR TRUCK Driver</option> 
                                    <option>PLUMBER</option> 
                                    <option>PARAMEDIC</option> 
                                    <option>LIEUTENANT</option> 
                                    <option>CAPTAIN</option> 
                                    <option>CROSSING GUARD</option> 
                                </select>
                            </div> 
                            <div class="col-2 d-flex flex-row justify-content-center align-items-center">
                                <h4 class="display text-primary">Department&#58;</h4>
                            </div>
                            <div class="form-group col-4">
                                <label for="form-select" id="form-select"></label>
                                <input type="text" class="form-control m-3" name="Department" placeholder="Department"/>
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
                                            <option>Equal to</option>
                                            <option>Not equal to</option>
                                            <option>Greater than</option>
                                            <option>Greater than equal to</option>
                                            <option>Less than</option>
                                            <option>Less than equal to</option> 
                                        </select>
                                        <input type="number" min="1" max="1000000" class="form-control m-3" placeholder="Enter value" id="Annual_Salaryvalue" name="Annual_Salaryvalue" onchange="check_Annual_Salary_val()">
                                    </div>
                                </div> 
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col-2 d-flex flex-row justify-content-center align-items-center">
                                        <h4 class="display text-primary">Typical Hours&#58;</h4>
                                    </div>
                                    <div class="form-group d-flex flex-row justify-content-center align-items-center">
                                        <label for="form-select" id="form-select"></label>
                                        <select class="form-control" name="Typical_Hourscomp">
                                            <option>Equal to</option>
                                            <option>Not equal to</option>
                                            <option>Greater than</option>
                                            <option>Greater than equal to</option>
                                            <option>Less than</option>
                                            <option>Less than equal to</option> 
                                        </select>
                                        <input type="number" min="1" max="40" class="form-control m-3" placeholder="Enter value" id="Typical_Hoursvalue" name="Typical_Hoursvalue" onchange="check_Typical_Hours_val()">
                                    </div> 
                                </div>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col-2 d-flex flex-row justify-content-center align-items-center">
                                        <h4 class="display text-primary">Hourly Rate <small class="text-primary">(Dollars)</small>&#58;</h4>
                                    </div>
                                    <div class="form-group d-flex flex-row justify-content-center align-items-center">
                                        <label for="form-select" id="form-select"></label>
                                        <select class="form-control" name="Hourly_Ratecomp">
                                            <option>Equal to</option>
                                            <option>Not equal to</option>
                                            <option>Greater than</option>
                                            <option>Greater than equal to</option>
                                            <option>Less than</option>
                                            <option>Less than equal to</option> 
                                        </select>
                                        <input type="number" min="1" max="5000" class="form-control m-3" placeholder="Enter value" id="Hourly_Ratevalueu" name="Hourly_Ratevalueu" onchange="check_Hourly_Rate_val()">
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <hr class="col-6">
                        <button class="btn col-1 btn-primary" type="submit" value="submit" id="submit" onclick="">
                            Go
                        </button>
                    </form>
                </div>

                
            </div>
        

            


<?php
$filter = [];

if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    if (isset($_GET['by'])){
        $by = $_GET['by'];
        if ($by == "Typical_Hours"){
            $filter = ['Typical_Hours' => ['$gt'=>4]];
        }else if($by == "Hourly_Rate"){
            $filter = ['Hourly_Rate' => ['$gt'=>20]];
        }else{
            $filter = ['Job_Titles' => ['$all'=>[$by]]];
        }
    }
}else if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    //$test = ['Job_Titles'=>['$all'=>['Action']], 'Rank'=>['$ne'=>5], 'Votes'=>['$gt'=>1500000]];
    //$test = ["Runtime_in_minutes"=>['$eq'=> 121]];
    //print_r($test);
    //echo gettype($test);
    //echo '<br>';

    $comp_ops = ['Equal to'=>'$eq', 'Not equal to'=>'$ne', 
                'Greater than'=>'$gt', 'Greater than equal to'=>'$gte', 
                'Less than'=>'$lt', 'Less than equal to'=>'$lte'];

    if ($_POST['Job_Titles'] != 'Any'){
        $filter['Job_Titles'] = ['$all'=>[$_POST['Job_Titles']]];
    }
    if ($_POST['Department'] != ''){
        $filter['Department'] = ['$regex'=>$_POST['Department']];
    }
    if ($_POST['Annual_Salaryvalue'] != ''){
        $filter['Annual_Salary'] = [$comp_ops[$_POST['Annual_Salarycomp']]=>(int)$_POST['Annual_Salaryvalue']];
    }
    if ($_POST['Typical_Hoursvalue'] != ''){
        $filter['Typical_Hours'] = [$comp_ops[$_POST['Typical_Hourscomp']]=>(int)$_POST['Typical_Hoursvalue']];
    }
    if ($_POST['Hourly_Ratevalueu'] != ''){
        $filter['Hourly_Rate'] = [$comp_ops[$_POST['Hourly_Ratecomp']]=>(float)$_POST['Hourly_Ratevalue']];
    }
    
    //print_r($filter);
    //echo gettype($filter);
}
    //echo ($test==$filter);
    //print_r($filter);
    $options = [];
    
    $dbname = 'Freelancers';
    $c_user = 'employee';

    $manager = new MongoDB\Driver\Manager('mongodb://localhost:27017'); 

    $query = new MongoDB\Driver\Query($filter, $options);
    $cursor = $manager->executeQuery("$dbname.$c_user", $query);
    $cursor2 = $manager->executeQuery("$dbname.$c_user", $query);

    //$arr = iterator_to_array($cursor);
    //print_r($arr);

    echo '
        <div class="container-fluid border rounded m-5">
            <div class="card shadow-lg col-11 justify-text-center align-items-center mx-auto">
        ';
    $ctr = 0;
    foreach($cursor2 as $x){
        $ctr++;
    }

    if ($ctr == 0){
        echo '
            <div class="row">
                <h3 class="text-primary">No results for the given query</hr>
            </div>
            ';
    }else{
        foreach($cursor as $c){
            echo '
                <div class="row">
                    <div class="col text-center">
                        <a href="user_rating.php?Name='.$c->Name.'">
                            <img class="img-fluid" src="https://proxy.duckduckgo.com/iu/?u=http%3A%2F%2Fcdn.onlinewebfonts.com%2Fsvg%2Fimg_507349.png&f=1" alt=""  style="height:100%; width: 50%">
                        </a>
                    </div>
                    <div class="col bg-light border dark">
                        <strong><h3>'.$c->Name.'</h3></strong>
                        <p>
                            <br><strong>Annual Salary: </strong>'.$c->Annual_Salary.' | <strong>Full or Part-Time: </strong>'.$c->Full_or_Part_Time.' | <strong>Hourly Rate: </strong>'.$c->Hourly_Rate.'
                            <hr><strong>Job Title: </strong>'.$c->Job_Titles.'
                            <hr><strong>Department: </strong>'.$c->Department.'
                            <br><strong>Salary or Hourly: </strong>'.$c->Salary_or_Hourly.'
                            <br><strong>Working Hours: </strong>'.$c->Typical_Hours.'
                        </p>
                        <a class="btn btn-primary" href="add_2_fav.php?user='.$_SESSION['user'].'&&Name='.$c->Name.'">Add to favourites</a>
                        <a class="btn btn-primary" href="user_rating.php?Name='.$c->Name.'">See Details</a>
                    </div>
                </div>
                ';
        }
    }

    echo '
        
            </div>
        </div>
        </div>
    </div>
</body>
</html>
        ';



?>



<!--
     
-->