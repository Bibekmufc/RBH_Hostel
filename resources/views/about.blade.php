@extends('layouts.layout')

@section('content')
    <div class="my-5 p-4">
        <h2 class="fw-bold h-font text-center">About Us</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            At Royal Boy's Hostel, you'll find a clean, respectful, and supportive environment with flexible options and
            amenities that cater to your needs. Join our community for a comfortable and enjoyable living experience!
        </p>
    </div>
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
                <h3 class="mb-3">
                    Welcome to Royal Boy's Hostel
                </h3>
                <p>
                    A modern and secure living space designed to cater to students and young professionals. We aim to
                    fulfill the quality of accommodation by offering comfortable and affordable places within a welcoming
                    community environment. At Comfort Living, we prioritize environmental sustainability through
                    eco-friendly practices while ensuring our facilities are up-to-date and safe for residents.
                    Additionally, our dedicated team provides academic and career guidance to assist residents in their
                    personal and professional development. Join us at Royal Boy’s Hostel for a fulfilling and inclusive
                    living experience where convenience, modern amenities, and community spirit meet.
                </p>
            </div>
            <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
                <img src="images/hostel-about.jpg" class="w-100">
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/hostel.svg" width="70px" alt="">
                    <h4 class="mt-3">
                        20+ Rooms
                    </h4>

                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/customers.svg" width="70px" alt="">
                    <h4 class="mt-3">
                        100+ Customers
                    </h4>

                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/services.svg" width="70px" alt="">
                    <h4 class="mt-3">
                        Amenities
                    </h4>

                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/star.svg" width="70px" alt="">
                    <h4 class="mt-3">
                        100+ Reviews
                    </h4>

                </div>
            </div>
        </div>
    </div>
@endsection
