<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <title>Search results</title>
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
    <link rel="stylesheet" href="style.css">
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
</head>
<body>
    <nav class="navbar navbar-inverse navbar-expand-lg navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <img src="https://proxy.duckduckgo.com/iu/?u=http%3A%2F%2Fwww.thelogomix.com%2Ffiles%2Fimagecache%2Fv3-logo-detail%2Ffreelance%2520folder.jpg&f=1" alt="logo" style="width:50px;">
            </div>
            <div class="navbar-header">    
                <a class="navbar-brand" href="#"> FREELANCER2HIRE</a> 
            </div>
            <form class="navbar-form navbar-left" action="search_res.php" method="GET">
                <div class="form-group">
                    <input type="text" class="form-control" name="search_qry" placeholder="Search">
                </div>
                <button type="Search" class="btn btn-default">Search</button>
            </form>

            <div class="nav navbar-nav">
                <div class="dropdown">
                    <button class="btn btn-lg btn-success dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <small>or try a: </small><strong>Filter Search</strong>
                    </button>
                    <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                        <li class="dropdown-item"><a href="filtered_search.php?by=Typical_Hours">Typical Hours</a></li>
                        <li class="dropdown-item"><a href="filtered_search.php?by=Hourly_Rate">Hourly Rate</a></li>
                        <li class="dropdown-divider"></li>
                        <li class="dropdown-submenu">
                            <a  class="dropdown-item" tabindex="-1" href="#">Job Titles</a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item"><a tabindex="-1" href="filtered_search.php?by=POLICE OFFICER">POLICE OFFICER</a></li>
                                <li class="dropdown-item"><a href="filtered_search.php?by=ELECTRICAL MECHANIC">ELECTRICAL MECHANIC</a></li>
                                <li class="dropdown-item"><a href="filtered_search.php?by=FIREFIGHTER-EMT">FIREFIGHTER</a></li>
                                <li class="dropdown-item"><a href="filtered_search.php?by=SANITATION LABORER">SANITATION LABORER</a></li>
                                <li class="dropdown-item"><a href="filtered_search.php?by=SERGEANT">SERGEANT</a></li>
                                <li class="dropdown-item"><a href="filtered_search.php?by=MOTOR TRUCK DRIVER">MOTOR TRUCK DRIVER</a></li>
                                <li class="dropdown-item"><a href="filtered_search.php?by=LIBRARY ASSOCIATE">LIBRARY ASSOCIATE</a></li>
                                <li class="dropdown-item"><a href="filtered_search.php?by=MACHINIST">MACHINIST</a></li>
                                <li class="dropdown-item"><a href="filtered_search.php?by=PLUMBER">PLUMBER</a></li>
                                <li class="dropdown-item"><a href="filtered_search.php?by=WATCHMAN">WATCHMAN</a></li>
                                <li class="dropdown-item"><a href="filtered_search.php?by=POOL MOTOR TRUCK DRIVER">POOL MOTOR TRUCK DRIVER</a></li>
                                <li class="dropdown-item"><a href="filtered_search.php?by=PARAMEDIC">PARAMEDIC</a></li>
                                <li class="dropdown-item"><a href="filtered_search.php?by=LIEUTENANT">LIEUTENANT</a></li>
                                <li class="dropdown-item"><a href="filtered_search.php?by=CAPTAIN">CAPTAIN</a></li>
                                <li class="dropdown-item"><a href="filtered_search.php?by=CROSSING GUARD">CROSSING GUARD</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
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
    <br>
    
<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    $manager = new MongoDB\Driver\Manager('mongodb://localhost:27017'); 

    $dbname = 'Freelancers';
    $c_user = 'employee';
    
    $filter = ['Name' => ['$regex'=>$_GET['search_qry'], '$options'=>"-i"]];
    $options = [];

    $query = new MongoDB\Driver\Query($filter, $options);
    $cursor = $manager->executeQuery("$dbname.$c_user", $query);

    echo '
        <div class="container-fluid border rounded m-5">
            <div class="card shadow-lg col-11 justify-text-center align-items-center mx-auto">
        ';

    foreach($cursor as $c){
        echo '
                <div class="row">
                    <div class="col text-center">
                        <a href="user_rating.php?Name='.$c->Name.'">
                            <img class="img-fluid" src="https://proxy.duckduckgo.com/iu/?u=https%3A%2F%2Fst2.depositphotos.com%2F8519970%2F11444%2Fv%2F950%2Fdepositphotos_114449260-stock-illustration-user-icon-with-laptop.jpg&f=1" alt=""  style="height:70%; width: 50%">
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

    echo '
        
            </div>
        </div>
        ';

}
?>

    </div>

</body>
</html>