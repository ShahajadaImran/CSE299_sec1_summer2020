<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    
    <title>Medi-Corner</title>
</head>
<body>
        <nav class="navbar navbar-expand-lg ">
        <a class="navbar-brand" href="index.php"><img src="images/logo1.png" alt="image"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="service.php">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="team.php">Our Team</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Log In
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="loginsystem/admin/index.php">Admin</a>
                <a class="dropdown-item" href="loginsystem/index.php">User</a>
                
            </li>
            
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
        </nav>
            
        <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="images/cc1.jpg" alt="Los Angeles" >
            </div>
            <div class="carousel-item">
            <img src="images/cc2.jpg" alt="Chicago" >
            </div>
            <div class="carousel-item">
            <img src="images/cc3.jpg" alt="New York" >
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>

        </div>

        <section>
            <div class="my-5">
                <div class="py-5">
                <h2 class="text-center">About Us</h2>
                </div>
                <div class="container-fluid">
                    <div class="row" id="first">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <h3 class="text-center">Our Mission</h3>
                            <p class="text-center">MediTrack focus on quality services. Our mission is to provide user their desire services.
                             </p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <h3 class="text-center">Our Essence</h3>
                            <p class="text-center">Keep our clients satisfy by our services. </p>
                        </div>
                    </div>
                    <div class="row" id="first">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <h3 class="text-center">Our Promise</h3>
                            <p class="text-center"> Provide best services to our clients</p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <h3 class="text-center">Our vibe</h3>
                            <p class="text-center">Understand the necessity of our clients & give the actual feedback to them. </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section>
            <div class="my-5">
                <div class="py-5">
                <h2 class="text-center">Services</h2>
                </div>
                <div class="container-fluid">
                    
                        
                        <div class="card-deck">
                        <div class="card bg-primary">
                            <div class="card-body text-center">
                            <p class="card-text">We will try to provide and upgrade our system regarding the necessity of our users</p>
                            </div>
                        </div>
                        <div class="card bg-warning">
                            <div class="card-body text-center">
                            <p class="card-text">We will add more and more disease categories and medicines for that disease and details about that medicines
                            </p>
                            </div>
                        </div>
                        <div class="card bg-success">
                            <div class="card-body text-center">
                            <p class="card-text">Our web page will provide medicine names.Anybody can know about the prices of medicines.
                            </p>
                            </div>
                        </div>
                        <div class="card bg-danger">
                            <div class="card-body text-center">
                            <p class="card-text">People can get medicines regarding any disease.
                            </p>
                            </div>
                        </div>
                        </div>
                        </div>
                  

                </div>
            </div>
        </section>


        <section>
            <div class="my-5">
                <div class="py-5">
                <h2 class="text-center">Team Members</h2>
                </div>
                <div class="container">
                <div class="row" >
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="card" style="width:250px" >
                    <img class="card-img-top" src="images/imran.jpg" alt="Card image" style="width:100%" >
                    <div class="card-body">
                        <h5 class="card-title">Md Shahajada Imran</h5>
                        <p class="card-text">Click the button to see the details.</p>
                          <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                    See Profile
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">About</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    Work On Admin & User web view. i used html, css for front-end and for back-end PHP.
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                     </div>
                  </div>
                  
                  <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="card" style="width:250px">
                    <img class="card-img-top" src="images/yasir.png" alt="Card image">
                    <div class="card-body">
                        <h5 class="card-title">Yasir Arafat Sohan</h5>
                        <p class="card-text">Click the button to see the details.</p>
                        <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter3">
                    See Profile
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">About</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    I have work on Database and sql. My working tool was Mysql.
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                  </div>
                  </div>
                  
                    </div>
                  </div>
              </div>
          </section>


          
        <section>
            <div class="my-5">
                <div class="py-5">
                <h2 class="text-center">Contact Us</h2>
                </div>
                <div class="w-50 m-auto">
                    <form action="contact.php" method="post">
                        <div class="form-group">
                               <label >Name</label>
                               <input type="text" name="user" autocomplete="off" class="form-control">
                        </div>
                        <div class="form-group">
                               <label >Email</label>
                               <input type="text" name="Email" autocomplete="off" class="form-control">
                        </div>
                        <div class="form-group">
                               <label >Comment</label>
                               <textarea class="form-control" name="comment" ></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">submit</button>
                    </form>

                </div>
                </div>
                </section>

                <footer>


                <div class="text-center">
                <p> @All right reserve By team Member</p>
                </div>
                
                </footer>







    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</body>
</html>