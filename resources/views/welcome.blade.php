@extends('layouts.layout')
@section('content')
    {{-- Carousel --}}
    <div class="container-fluid px-lg-4 mt-4">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="images/carousel1.jpg" class = "w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel2.jpg" class = "w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel3.jpg" class = "w-100 d-block" />
                </div>
            </div>
        </div>
    </div>

    {{-- Welcome Banner --}}
    <div class="container welcome-banner">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <img class = "rounded mx-auto d-block" src="images/logo.png" align = 'center' alt="">
                <h1 align = "center" font-size: "2rem">
                    Welcome To Royal Boys Hostel
                </h1>
            </div>
        </div>
    </div>

    {{-- Room Cards --}}
    <h2 class = "mt-5 pt-4 mb-4 text-center fw-bold h-font">Check Out Our Rooms</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card" style="width: 18rem;">
                    <img src="images/card2.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Gold Room</h5>
                        <h6 class="mb-4">Rs. 10000 per month</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">
                                Features
                            </h6>
                            <span class="badge text-bg-light text-wrap lh-base">
                                Large Cozy Rooms
                            </span>
                            <span class="badge text-bg-light text-wrap lh-base">
                                Shower
                            </span>
                            <span class="badge text-bg-light text-wrap lh-base">
                                Private Bathroom
                            </span>
                            <span class="badge text-bg-light text-wrap lh-base">
                                Fully Furnished
                            </span>
                            <span class="badge text-bg-light text-wrap lh-base">
                                Beautiful Views
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">
                                Facilities
                            </h6>
                            <span class="badge text-bg-light text-wrap lh-base">
                                WiFi
                            </span>
                            <span class="badge text-bg-light text-wrap lh-base">
                                TV
                            </span>
                            <span class="badge text-bg-light text-wrap lh-base">
                                Laundry
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="accommodation" class="btn btn-sm custom-bg text-white shadow-none">Book Now</a>
                            <a href="accommodation" class="btn btn-sm btn-outline-dark">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card" style="width: 18rem;">
                    <img src="images/card1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Silver Room</h5>
                        <h6 class="mb-4">Rs. 5000 per month</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">
                                Features
                            </h6>
                            <span class="badge text-bg-light text-wrap lh-base">
                                Moderately Large Rooms
                            </span>
                            <span class="badge text-bg-light text-wrap lh-base">
                                Shared Bathroom
                            </span>
                            <span class="badge text-bg-light text-wrap lh-base">
                                Basic Furnishing
                            </span>
                            <span class="badge text-bg-light text-wrap lh-base">
                                Shared Common Room
                            </span>
                            <span class="badge text-bg-light text-wrap lh-base">
                                Lower Cost
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">
                                Facilities
                            </h6>
                            <span class="badge text-bg-light text-wrap lh-base">
                                WiFi
                            </span>
                            <span class="badge text-bg-light text-wrap lh-base">
                                TV
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="accommodation" class="btn btn-sm custom-bg text-white shadow-none">Book Now</a>
                            <a href="accommodation" class="btn btn-sm btn-outline-dark">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card" style="width: 18rem;">
                    <img src="images/card3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Platinum Room</h5>
                        <h6 class="mb-4">Rs. 3000 per month</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">
                                Features
                            </h6>
                            <span class="badge text-bg-light text-wrap lh-base">
                                Compact Room
                            </span>
                            <span class="badge text-bg-light text-wrap lh-base">
                                Cozy Bed
                            </span>
                            <span class="badge text-bg-light text-wrap lh-base">
                                Basic Furnishing
                            </span>
                            <span class="badge text-bg-light text-wrap lh-base">
                                Very Affordable Cost
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">
                                Facilities
                            </h6>
                            <span class="badge text-bg-light text-wrap lh-base">
                                WiFi
                            </span>
                            <span class="badge text-bg-light text-wrap lh-base">
                                TV
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="accommodation" class="btn btn-sm custom-bg text-white shadow-none">Book Now</a>
                            <a href="accommodation" class="btn btn-sm btn-outline-dark">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="accommodation" class = 'btn btn-sm btn-outline-dark rounded-0 fw-bold'>More Rooms>></a>
            </div>
        </div>
    </div>

    {{-- Why Us --}}
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
                <h3 class="mb-3 mt-5">
                    Why Choose Royal Boy's Hostel?
                </h3>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Comfortable Living</li>
                    <li class="list-group-item">Safe & Friendly Environment</li>
                    <li class="list-group-item">Convenient Location</li>
                    <li class="list-group-item">Affordable Pricing</li>
                    <li class="list-group-item">Supportive Service</li>
                    <li class="list-group-item">Fun Activities</li>
                    <li class="list-group-item">Focus Well-being</li>
                    <li class="list-group-item">Digital Hub</li>
                    <li class="list-group-item">Open Library</li>
                </ul>
            </div>
            <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1 mt-5">
                <img src="images/why.webp" class="w-100 h-100">
            </div>
        </div>

        {{-- Testimonials Section --}}
        <h2 class = "mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Testimonials</h2>
        <div class="container mt-5">
            <div class="swiper ourTestimonial">
                <div class="swiper-wrapper mb-5">
                    <div class="swiper-slide bg-white p-4">
                        <div class="profile d-flex align-items-center mb-3">
                            <img src="images/user1.png" width="30px" alt="">
                            <h6 class="m-0 ms-2">User 1</h6>
                        </div>
                        <p>
                            Very Good!
                        </p>
                        <div class="rating">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </div>
                    </div>
                    <div class="swiper-slide bg-white p-4">
                        <div class="profile d-flex align-items-center mb-3">
                            <img src="images/user1.png" width="30px" alt="">
                            <h6 class="m-0 ms-2">User 2</h6>
                        </div>
                        <p>
                            Amazing!
                        </p>
                        <div class="rating">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </div>
                    </div>
                    <div class="swiper-slide bg-white p-4">
                        <div class="profile d-flex align-items-center mb-3">
                            <img src="images/user1.png" width="30px" alt="">
                            <h6 class="m-0 ms-2">User 3</h6>
                        </div>
                        <p>
                            Superb!
                        </p>
                        <div class="rating">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="about" class = 'btn btn-sm btn-outline-dark rounded-0 fw-bold'>More About Us</a>
            </div>
        </div>

        {{-- Contact Us --}}
        <h2 class = "mt-5 pt-4 mb-4 text-center fw-bold h-font">Contact Us</h2>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
                    <iframe class="w-100 rounded"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d448136.41387573053!2d81.51067575!3d28.657750399999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399877deb6525269%3A0x8b2be37f3048da53!2sSurkhet!5e0!3m2!1sen!2snp!4v1714404876134!5m2!1sen!2snp"
                        height="320" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="bg-white p-4 rounded mb-4">
                        <h5>
                            Call Us!
                        </h5>
                        <a href="tel: 123456678" class="d-inline-block mb-2 text-decoration-none text-dark">
                            <i class="bi bi-telephone-fill"></i> 123456678
                        </a>
                        <br>
                        <a href="tel: 123456678" class="d-inline-block mb-2 text-decoration-none text-dark">
                            <i class="bi bi-telephone-fill"></i> 123456678
                        </a>
                    </div>
                    <div class="bg-white p-4 rounded mb-4">
                        <h5>
                            Follow Us!
                        </h5>
                        <a href="#" class="d-inline-block mb-3">
                            <span class="badge bg-light text-dark fs-6 p-2">
                                <i class="bi bi-facebook"></i> Facebook
                            </span>
                        </a>
                        <br>
                        </h5>
                        <a href="#" class="d-inline-block mb-3">
                            <span class="badge bg-light text-dark fs-6 p-2">
                                <i class="bi bi-instagram"></i> Instagram
                            </span>
                        </a>
                        <br>
                        </h5>
                        <a href="#" class="d-inline-block">
                            <span class="badge bg-light text-dark fs-6 p-2">
                                <i class="bi bi-twitter"></i> Twitter
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endsection
