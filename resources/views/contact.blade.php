@extends('layouts.layout')

@section('content')
    <div class="my-5 p-4">
        <h2 class="fw-bold h-font text-center">Contact Us</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            If you have any queries or complaints, you can reach out to us </p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4">
                    <iframe class="w-100 rounded mb-4"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d448136.41387573053!2d81.51067575!3d28.657750399999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399877deb6525269%3A0x8b2be37f3048da53!2sSurkhet!5e0!3m2!1sen!2snp!4v1714404876134!5m2!1sen!2snp"
                        height="320" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <h5>
                        Address
                    </h5>
                    <a href="https://maps.app.goo.gl/SxW15rHVGxg8WRwm7" target="_blank"
                        class="d-inline-block text-dark text-decoration-none mb-2">
                        <i class="bi bi-geo-alt"></i> Surkhet, Nepal</a>
                    <h5 class="mt-4">
                        Call Us!
                    </h5>
                    <a href="tel: 123456678" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> 123456678
                    </a>
                    <br>
                    <a href="tel: 123456678" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> 123456678
                    </a>
                    <h5 class="mt-4">
                        Email
                    </h5>
                    <a href="mailto: royalboyshostel@gmail.com"
                        class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-envelope"></i>
                        royalboyshostel@gmail.com</a>
                    <h5 class="mt-4">
                        Follow Us!
                    </h5>
                    <a href="#" class="d-inline-block fs-5 me-2 text-dark">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="#" class="d-inline-block fs-5 me-2 text-dark">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a href="#" class="d-inline-block fs-5 text-dark">
                        <i class="bi bi-twitter"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4">
                    <form action="">
                        <h5>
                            Reach Out To Us
                        </h5>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight:500;">Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight:500;">Email</label>
                            <input type="email" class="form-control">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight:500;">Subject</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight:500;">Message</label>
                            <textarea class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
                        </div>
                        <button type="submit" class="btn text-white custom-bg mt-3">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
