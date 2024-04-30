@extends('layouts.layout')

@section('content')
    <div class="my-5 p-4">
        <h2 class="fw-bold h-font text-center">Our Rooms</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            We provide a variety of rooms to match your need and your budget! </p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12 mb-lg-0 mb-4">
                <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                    <div class="container-fluid flex-lg-column align-items-stretch">
                        <h4 class="mt-2">Filters</h4>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse flex-column mt-2 align-items-stretch" id="filterDropdown">
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 18px;">
                                    Check Availability
                                </h5>
                                <label class="form-label">Check In</label>
                                <input type="date" class="form-control shadow-none mb-3">
                                <label class="form-label">Check-Out</label>
                                <input type="date" class="form-control shadow-none">
                            </div>
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 18px;">
                                    Facilities
                                </h5>
                                <div class="mb-2">
                                    <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f1">Facility 1</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f2">Facility 2</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f3">Facility 3</label>
                                </div>
                            </div>
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 18px;">
                                    Guests
                                </h5>
                                <div class="d-flex">
                                    <div class="me-3">
                                        <label class="form-label">Adults</label>
                                        <input type="number" class="form-control shadow-none">
                                    </div>
                                    <div>
                                        <label class="form-label">Children</label>
                                        <input type="number" class="form-control shadow-none">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>

            <div class="col-lg-9 col-md-12 px-4">
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="images/card2.webp" class="img-fluid rounded">
                        </div>
                        <div class="col-md-5 px-md-3 px-0">
                            <h5 class="mb-3">
                                Gold Room
                            </h5>
                            <div class="features mb-3">
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
                            <div class="facilities">
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
                        </div>
                        <div class="col-md-2 text-center">
                            <h6 class="mb-4">Rs. 10000 per month</h6>
                            <a href="#" class="btn btn-sm w-100 custom-bg text-white shadow-none mb-2">Book Now</a>
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark">More Details</a>
                        </div>
                    </div>
                </div>
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="images/card2.webp" class="img-fluid rounded">
                        </div>
                        <div class="col-md-5 px-md-3 px-0">
                            <h5 class="mb-3">
                                Gold Room
                            </h5>
                            <div class="features mb-3">
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
                            <div class="facilities">
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
                        </div>
                        <div class="col-md-2 text-center">
                            <h6 class="mb-4">Rs. 10000 per month</h6>
                            <a href="#" class="btn btn-sm w-100 custom-bg text-white shadow-none mb-2">Book Now</a>
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark">More Details</a>
                        </div>
                    </div>
                </div>
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="images/card2.webp" class="img-fluid rounded">
                        </div>
                        <div class="col-md-5 px-md-3 px-0">
                            <h5 class="mb-3">
                                Gold Room
                            </h5>
                            <div class="features mb-3">
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
                            <div class="facilities">
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
                        </div>
                        <div class="col-md-2 text-center">
                            <h6 class="mb-4">Rs. 10000 per month</h6>
                            <a href="#" class="btn btn-sm w-100 custom-bg text-white shadow-none mb-2">Book Now</a>
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
