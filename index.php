<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <title>FREELANCER2HIRE - Wanna Hire One?</title>
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
                    <input type="text" class="form-control" name="search_qry" placeholder="Type your choice">
                </div>
                <button type="Search" class="btn btn-default">Search </button>
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
    
	<div class="container">
		<strong><h2>Finding the best Freelancers And Hiring them!</h2></strong>
		<p1>&emsp;&emsp;&emsp;FREELANCER2HIRE makes it easy for quality employees and freelancers to connect, collaborate, and get work done flexibly and securely
		</p1>
	</div>
    <br>
    <br>
    <br>

	<div class="container">
    	<h1 class="my-4">Choose your freelancer
            <small>Hurry Up!</small>
      	</h1>
        <hr>
        <div class="container-fluid border rounded m-5">
            <!-- The Shawshank Redemption -->   
<?php
    echo '
            <div class="row">
                <div class="col text-center">
                    <a href="#">
                    <img class="img-fluid" src="https://proxy.duckduckgo.com/iu/?u=https%3A%2F%2Ftse2.mm.bing.net%2Fth%3Fid%3DOIP.2RSBXcvDlY3pE21fWfv0dQHaEK%26pid%3DApi&f=1" alt=""  style="height:100%; width: 100%">
                    </a>
                </div>
                <div class="col bg-light border dark">
                    <strong><h3>AARON KARINA</h3></strong>
                    <h5> $94122 | Full Time | $20.45/hour </h5>
                    <p> Lost something? or getting blackmailed? I\'m quite expert in solving such cases with a long career in this field and quite a golden experience 
                    <br><strong>Job Title:</strong> Sergeant
                    <br><strong>Department:</strong> POLICE
                    <br><strong>Salary OR Hourly:</strong> Salary for each case</p>
                    <a class="btn btn-primary" href="add_2_fav.php?user='.$_SESSION['user'].'&&Name=AARON KARINA">Add to favourites</a>
                    <a class="btn btn-primary" href="user_rating.php?Name=AARON KARINA">See Details</a>
                </div>
            </div>
            
            <br>
            <br>

            <div class="row">
                <div class="col bg-light border dark">
                    <strong><h3>CRAIG POLEK</h3></strong>
                    <h5> $19000 | Part Time | None </h5>
                    <p> Stuck in fire, Craig Polek - A firefighter having a fast working and experienced team, is just one call away - Contact Number : 9988776655  
                    <br><strong>Job Title:</strong> Firefighter
                    <br><strong>Department:</strong> FIRE
                    <br><strong>Salary OR Hourly:</strong> Payment for each operation</p>
                    <a class="btn btn-primary" href="add_2_fav.php?user='.$_SESSION['user'].'&&Name=POLEK CRAIG T">Add to favourites</a>
                    <a class="btn btn-primary" href="user_rating.php?Name=POLEK CRAIG T">See Details</a>
                </div>
                <div class="col text-center">
                    <a href="#">
                        <img class="img-fluid" src="https://proxy.duckduckgo.com/iu/?u=https%3A%2F%2Ftse2.mm.bing.net%2Fth%3Fid%3DOIP.mEgoveDDysh2_xIKTMF_VQHaEB%26pid%3DApi&f=1" alt="" style="height:100%; width: 100%">
                    </a>
                </div>
            </div>
            <br>
            <br>
            <!-- The Grudge -->
            <div class="row">
                <div class="col text-center">
                    <a href="#">
                        <img class="img-fluid" src="https://proxy.duckduckgo.com/iu/?u=https%3A%2F%2Ftse4.mm.bing.net%2Fth%3Fid%3DOIP.v9bHfCBpgrV3cmQw22Es4QHaJo%26pid%3DApi&f=1" alt="" style="height:100%; width: 50%">
                    </a>
                </div>
                <div class="col bg-light border dark">
                    <strong><h3>KEITH PINKSKEY</h3></strong>
                    <h5> $13000 | Full Time | $10.30/hour </h5>
                    <p> A physically fit laborer with proper certifications and suitable for working in every condition and carrying alot of information related to transporting and dumping of garbage without causing any harm to environment 
                    <br><strong>Job Title:</strong> Sanitation Laborer
                    <br><strong>Department:</strong> Sanitation
                    <br><strong>Salary OR Hourly:</strong> Hourly</p>
                    <a class="btn btn-primary" href="add_2_fav.php?user='.$_SESSION['user'].'&&Name=PINKNEY KEITH E">Add to favourites</a>
                    <a class="btn btn-primary" href="user_rating.php?Name=PINKNEY KEITH E">See Details</a>
                </div>
            </div>
            <br>
            <br>

            <!-- Baahubali 2: The Conclusion -->
            <div class="row">
                <div class="col bg-light border dark">
                    <strong><h3>WRONSKI JR ROBERT S</h3></strong>
                    <h5> $20000 | Full Time | $190.78/day</h5>
                    <p> Looking for someone who can help you design an architecture of your choice? you have got the right guy with a complete trained and experienced career capable of designing even the most complex structures within given period of time  
                    <br><strong>Job Title:</strong> Construction Laborer
                    <br><strong>Department:</strong> Construction
                    <br><strong>Salary OR Hourly:</strong> Hourly/Daily charges required</p>
                    <a class="btn btn-primary" href="add_2_fav.php?user='.$_SESSION['user'].'&&Name=WRONSKI JR ROBERT S">Add to favourites</a>
                    <a class="btn btn-primary" href="user_rating.php?Name=WRONSKI JR ROBERT S">See Details</a>
                </div>
                <div class="col text-center">
                    <a href="#">
                        <img class="img-fluid" src="https://proxy.duckduckgo.com/iu/?u=http%3A%2F%2Fthumbs.dreamstime.com%2Fz%2Fconstruction-laborer-2521047.jpg&f=1" alt="" style="height:100%; width: 100%">
                    </a>
                </div>
            </div>

            <hr>
            <hr>

            <!-- Pagination -->
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>
    ';
?>
    </div>
    </div>
    <!-- /.container -->
  
<br>
<br>
  
    <div class="container-fluid text-center">
        <p>FREELANCER2HIRE Copyright</p>  
        <form class="form-inline">Subscribe for latest updates:
            <input type="email" class="form-control" size="50" placeholder="Enter your Email Address">
            <button type="button" class="btn btn-danger">Done</button>
        </form>
    </div>

<br><br><br><br>

</body>
</html>
	

