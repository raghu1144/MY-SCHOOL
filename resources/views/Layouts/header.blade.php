<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('assests/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assests/common_css/commoncss.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;1,500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Adarsh-bal-vidhyalay</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top navv_img">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="{{ url('/') }}">
                <img src="{{ asset('assests/nav_img/school-logo.png')}}" alt="" class="img-fluid nav_logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-5">

                    <li class="nav-item">
                        <a class="nav-link fs-5 aria-current text-dark" href="{{ url('/') }}">HOME</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link fs-5 text-dark" href="{{ route('About') }}">ABOUT US</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link fs-5 text-dark" href="{{route ('Ourstaff')}}">OUR STAFFS</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link fs-5 text-dark" href="{{ route('contactpage') }}" tabindex="-1"
                            aria-disabled="false">CONTACT US</a>
                    </li>
                </ul>

                <!-- <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    
                </form> -->

                <button class="btn btn-outline-success text-dark me-2" type="submit" data-bs-toggle="modal"
                    data-bs-target="#loginModal">Login</button>
                <button class="btn btn-outline-success text-dark me-2" type="submit" data-bs-toggle="modal"
                    data-bs-target="#signupModal">singup</button>

            </div>
        </div>
    </nav>


    <!-- Login Modal -->
    <section>
        <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <i class="bi bi-person-circle me-2 fs-3 text-success"></i>
                        <h5 class="modal-title" id="exampleModalLabel">User Login</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>


                    <form action="#" method="POST">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <i class="bi bi-person-workspace d-flex fs-2 me-3 text-center">
                                    <input type="email" class="form-control ms-2" id="Email"
                                        aria-describedby="emailHelp" placeholder="Enter your email">
                                </i>
                                <!-- <div id="emailHelp" class="form-text text-danger">We'll never share your email with anyone else*.</div> -->
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <i class="bi bi-person-fill-lock d-flex fs-2 me-3 text-center">
                                    <input type="password" class="form-control ms-2" id="Password1"
                                        placeholder="Enter your password">
                                </i>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-success outline-none">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Login Modal End-->


    <!-- signup modal -->
    <section>
        <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <i class="bi bi-person-circle me-2 fs-3 text-success"></i>
                        <h5 class="modal-title" id="exampleModalLabel">User Signup</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>


                    <form action="#" method="POST">
                        <div class="modal-body">

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Name</label>
                                <i class="bi bi-person-add d-flex fs-2 me-3 text-center">
                                    <input type="email" class="form-control ms-2" id="name"
                                        aria-describedby="namehelp" placeholder="Enter your Name">
                                </i>
                                <!-- <div id="emailHelp" class="form-text text-danger">We'll never share your email with anyone else*.</div> -->
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <i class="bi bi-person-workspace d-flex fs-2 me-3 text-center">
                                    <input type="email" class="form-control ms-2" id="Email"
                                        aria-describedby="emailHelp" placeholder="Enter your email">
                                </i>
                                <!-- <div id="emailHelp" class="form-text text-danger">We'll never share your email with anyone else*.</div> -->
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <i class="bi bi-person-fill-lock d-flex fs-2 me-3 text-center">
                                    <input type="password" class="form-control ms-2" id="Password1"
                                        placeholder="Enter your password">
                                </i>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-success">Signup</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- signup modal END -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>




    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                /* Toggle between adding and removing the "active" class,
                to highlight the button that controls the panel */
                this.classList.toggle("active");

                /* Toggle between hiding and showing the active panel */
                var panel = this.nextElementSibling;
                if (panel.style.display === "block") {
                    panel.style.display = "none";
                } else {
                    panel.style.display = "block";
                }
            });
        }
    </script>
