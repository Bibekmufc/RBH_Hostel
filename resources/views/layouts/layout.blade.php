<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royal Boys Hostel</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/mediaqueries.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="/css/main.css">
</head>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top ">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                {{-- <img id='logo' src="images/logo.png" alt="RBH Logo"> --}}Royal Boys Hostel
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="accommodation">Accommodation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact">Contact Us</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <button type="button" class="btn btn-outline-dark shadow-none me-lg-2 me-3" data-bs-toggle="modal"
                        data-bs-target="#loginModal">
                        Login
                    </button>
                    <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal"
                        data-bs-target="#registerModal">
                        Register
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 d-flex align-items-center" id="staticBackdropLabel">
                            <i class="bi bi-person fs-3 me-2"></i>Login
                        </h1>
                        <button type="reset" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Passowrd</label>
                            <input type="password" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <button type="submit" class="btn btn-dark">Login</button>
                            <a href="javascript: void(0)" class="text text-secondary text-decoration-none">Forgot
                                Password</a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 d-flex align-items-center" id="staticBackdropLabel">
                            <i class="bi bi-person-plus-fill fs-3 me-2"></i>Register
                        </h1>
                        <button type="reset" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <span class="badge text-bg-light mb-3 text-wrap lh-base">
                            Note: Your details must match with your verification ID Document.
                        </span>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-md-6 p-0">
                                    <label class="form-label">Contact Number</label>
                                    <input type="number" class="form-control">
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Email address</label>
                                    <input type="email" class="form-control">
                                </div>
                                <div class="col-md-6 p-0">
                                    <label class="form-label">Date of Birth</label>
                                    <input type="date" class="form-control">
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control">
                                </div>
                                <div class="col-md-6 p-0">
                                    <label class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control">
                                </div>
                            </div>
                            <div class="text-center my-1">
                                <button type="submit" class="btn btn-dark">Register</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <main>
        @yield('content')
    </main>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/script.js"></script>
</body>

</html>

{{-- Footer --}}
<div class="container-fluid bg-white mt-5">
    <div class="row">
        <div class="col-lg-4 p-4">
            <h3 class="fw-bold fs-3 mb-2">Royal Boy's Hostel</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis iusto, aspernatur atque ullam quaerat
                provident eaque, doloribus nesciunt voluptas illo exercitationem mollitia modi vero reprehenderit
                excepturi facilis, repellendus aperiam neque.
            </p>
        </div>
        <div class="col-lg-4 p-4">
            <h5 class="mb-3">
                Links
            </h5>
            <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Home</a> <br>
            <a href="features" class="d-inline-block mb-2 text-dark text-decoration-none">Features</a> <br>
            <a href="accommodation" class="d-inline-block mb-2 text-dark text-decoration-none">Accomodation</a> <br>
            <a href="contact" class="d-inline-block mb-2 text-dark text-decoration-none">COntact Us</a> <br>
            <a href="about" class="d-inline-block mb-2 text-dark text-decoration-none">About</a> <br>
        </div>
        <div class="col-lg-4 p-4">
            <h5 class="mb-3">
                Follow Us
            </h5>
            <a href="#" class="d-inline-block text-dark text-decoration-none mb-2"> <i
                    class="bi bi-twitter"></i> Twitter
            </a> <br>
            <a href="#" class="d-inline-block text-dark text-decoration-none mb-2"> <i
                    class="bi bi-facebook"></i> Facebook
            </a> <br>
            <a href="#" class="d-inline-block text-dark text-decoration-none"> <i class="bi bi-instagram"></i>
                Instagram
            </a> <br>
        </div>
    </div>
</div>
<h6 class="text-center bg-dark text-white p-3 m-0"> Designed by Me.</h6>
