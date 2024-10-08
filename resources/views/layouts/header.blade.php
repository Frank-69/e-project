<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Entertain Pro</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/global.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <section id="header">
        <div id="signup-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">SIGN UP</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <form class="ps-3 pe-3" action="#">
                            <div class="mb-3">
                                <label for="username" class="form-label">Name</label>
                                <input class="form-control" type="email" id="username" required=""
                                    placeholder="Eget Nulla">
                            </div>

                            <div class="mb-3">
                                <label for="emailaddress" class="form-label">Email address</label>
                                <input class="form-control" type="email" id="emailaddress" required=""
                                    placeholder="info@gmail.com">
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input class="form-control" type="password" required="" id="password"
                                    placeholder="Enter your password">
                            </div>

                            <div class="mb-3">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="customCheck1">
                                    <label class="form-check-label" for="customCheck1">I accept <a href="#">Terms
                                            and Conditions</a></label>
                                </div>
                            </div>

                            <div class="mb-3 text-center">
                                <h6><a class="button_1 d-block" href="#">LOG IN</a></h6>
                            </div>

                        </form>

                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>
        <nav class="navbar navbar-expand-md navbar-light" id="navbar_sticky">
            <div class="container-fluid">
                <a class="navbar-brand fs-4 p-0 fw-bold text-white text-uppercase" href="index.html"><i
                        class="fa fa-video-camera me-1 col_light fs-1 align-middle"></i> Entertain Pro</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-0">

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Movies
                            </a>
                            <ul class="dropdown-menu drop_1" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/hollywood"> Hollywood</a></li>
                                <li><a class="dropdown-item border-0" href="/bollywood"> Bollywood</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="event.html">Events</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/team">team</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Contact</a>
                        </li>

                    </ul>
                    <ul class="navbar-nav mb-0 ms-auto">

                        <li class="nav-item">
                            <select name="categories" class="form-select bg-light" required="">
                                <option value="">All Categories</option>
                                <option>Movie</option>
                                <option>Video</option>
                                <option>Tv-Show</option>
                                <option>Music</option>
                            </select>

                            <div class="input-group">
                                <input type="text" class="form-control border-start-0" placeholder="Search Movie">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary bg_yell" type="button">
                                        <i class="fa fa-search"></i> </button>
                                </span>
                            </div>
                        </li>

                        <li class="nav-item ms-3">
                            <a class="nav-link button" data-bs-toggle="modal" data-bs-target="#signup-modal"
                                href="#">SIGN UP</a>
                        </li>
                        <!-- /.modal -->

                    </ul>
                </div>
            </div>
        </nav>
    </section>
