@extends('layouts.frontendlayout')
@section('content')
@push('css')


<style>
     #department{
        height: 530px !important;
        width: auto;
     }
     @media  (max-width: 768px) {
        #department{
            height: 400px !important;
            width: auto;
        }
        
     }
</style>
@endpush

    <!-- Hero Banner Start -->
    <div class="jumbotron jumbotron-fluid position-relative overlay-bottom "
        style="margin-bottom: 90px;background: linear-gradient(rgba(60, 128, 224, 0.7), rgba(76, 127, 197, 0.77)), url({{ asset('frontend/assets/img/cpi.jpg') }}), no-repeat center center;">
        <div class="container text-center my-5 py-5">
            <h1 class="text-white display-1 mb-5">Welcome To Chittagong Polytechnic Institute</h1>
            <button class="btn btn-secondary px-4 px-lg-5">Explore Departments</button>
        </div>
    </div>
    <!-- Hero Banner End -->

    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-5 mb-5  mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100 ">
                        <img class="position-absolute w-100 h-100"
                            src="{{ asset('storage/' . $about?->image) ?? asset('frontend/assets/img/cpi.jpg') }} "
                            style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="section-title position-relative mb-4">
                        <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">About Us</h6>
                        <h1 class="display-4">{{ $about->name ?? "Chattogram Polytechnic Institute" }}</h1>
                    </div>
                    <p>{!!  $about->long_description ?? "Chittagong Polytechnic Institute is located on 35 acres of land in Nasirabad, Chittagong. It has
                            categorized laboratories such as a Basic Electronics Lab, Advanced Electronics Lab, Computer Lab,
                            Chemistry Lab, and Physics Lab. There are also workshops for practical learning, including a Metal
                            Shop, Wood Shop, Power Shop, and Basic Workshop. Chittagong Polytechnic Institute has a Rover Scout
                            team as well.

                            Every year, many students get admitted to CPI, and many graduate as diploma engineers. Each
                            department at CPI is divided into eight semesters. In each semester, a student achieves a CGPA of 4
                            or less. The final semester is the Industrial Training Semester. During this semester, a student
                            gains practical knowledge about a selected technology in an industry for about six months." !!}
                    </p>
                    <div class="row pt-3 mx-0">
                        <div class="col-3 px-0">
                            <div class="bg-success text-center p-4">
                                <h1 class="text-white" data-toggle="counter-up">6</h1>
                                <h6 class="text-uppercase text-white">Available<span class="d-block">Departments</span></h6>
                            </div>
                        </div>
                        <div class="col-3 px-0">
                            <div class="bg-primary text-center p-4">
                                <h1 class="text-white" data-toggle="counter-up">1234</h1>
                                <h6 class="text-uppercase text-white">Available<span class="d-block">Students</span></h6>
                            </div>
                        </div>
                        <div class="col-3 px-0">
                            <div class="bg-secondary text-center p-4">
                                <h1 class="text-white" data-toggle="counter-up">30</h1>
                                <h6 class="text-uppercase text-white">Available<span class="d-block">Instructors</span></h6>
                            </div>
                        </div>
                        <div class="col-3 px-0">
                            <div class="bg-warning text-center p-4">
                                <h1 class="text-white" data-toggle="counter-up">1234</h1>
                                <h6 class="text-uppercase text-white">Happy<span class="d-block">Students</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Feature Start -->
    <div class="container-fluid bg-image" style="margin: 90px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 my-5 pt-5 pb-lg-5">
                    <div class="section-title position-relative mb-4">
                        <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Why Choose CPI?</h6>
                        <h1 class="display-4">Why Chattogram Polytechnic Institute is the Best:</h1>
                    </div>
                    <p class="mb-4 pb-2">Chattogram Polytechnic Institute is considered one of the best polytechnic
                        institutes because it combines high-quality technical education with extensive practical training in
                        well-equipped labs and workshops. Its large, peaceful campus provides an ideal learning environment,
                        while experienced teachers ensure strong academic guidance. The institute’s unique six-month
                        industrial training prepares students for real-world jobs, and generous government scholarships
                        support most students financially. Additionally, active extracurricular programs like Rover Scouts
                        and a strong alumni network contribute to students’ overall development and excellent job prospects
                        after graduation.</p>
                    <div class="d-flex mb-3">
                        <div class="btn-icon bg-primary mr-4">
                            <i class="fa fa-2x fa-graduation-cap text-white"></i>
                        </div>
                        <div class="mt-n1">
                            <h4>Skilled & Experienced Teachers</h4>
                            <p>CPI has a team of experienced and dedicated teachers who guide students through technical
                                education effectively.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="btn-icon bg-secondary mr-4">
                            <i class="fa fa-2x fa-certificate text-white"></i>
                        </div>
                        <div class="mt-n1">
                            <h4>Scholarship Opportunities</h4>
                            <p>Around 65% of students receive government scholarships every semester, making education more
                                affordable.</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="btn-icon bg-warning mr-4">
                            <i class="fa fa-2x fa-book-reader text-white"></i>
                        </div>
                        <div class="mt-n1">
                            <h4>Extra-Curricular Activities</h4>
                            <p class="m-0">The institute encourages participation in Rover Scouts, cultural activities, and
                                tech events to ensure all-round development.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="{{ asset('frontend/assets/img/best.jpg') }}"
                            style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature Start -->


    <!-- department Start -->
    @if(!empty($departments) && count($departments) > 0)
        <div class="container-fluid px-0 py-5">
        <div class="row mx-0 justify-content-center pt-5">
            <div class="col-lg-6">
                <div class="section-title text-center position-relative mb-4">
                    <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Department</h6>
                    <h1 class="display-4">Checkout Departments</h1>
                </div>
            </div>
        </div>
        <div class="owl-carousel  courses-carousel" id="department">
            @foreach ($departments as $department)
            <div class="courses-item position-relative">
                <img class="img-fluid" id="department"  id="img" src="{{ asset($department->image) }}" alt="">
                <div class="courses-text">
                    <h4 class="text-center text-white px-3">{{ $department->name }}</h4>
                    <div class="border-top w-100 mt-3">
                        <div class="d-flex justify-content-between p-4">
                            <span class="text-white"><i class="fa fa-user mr-2"></i>{{ $department->head }}</span>
                        </div>
                    </div>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="{{ route('department') }}">Departments details</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endif
    <!-- Courses End -->


    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="section-title text-center position-relative mb-5">
                <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Instructors</h6>
                <h1 class="display-4">Meet Our Instructors</h1>
            </div>
            <div class="owl-carousel team-carousel position-relative" style="padding: 0 30px;">
                <div class="team-item">
                    <img class="img-fluid w-100" src="{{ asset('frontend/assets/img/team-1.jpg')}}" alt="">
                    <div class="bg-light text-center p-4">
                        <h5 class="mb-3">Instructor Name</h5>
                        <p class="mb-2">Web Design & Development</p>
                        <div class="d-flex justify-content-center">
                            <a class="mx-1 p-1" href="index.html#"><i class="fab fa-twitter"></i></a>
                            <a class="mx-1 p-1" href="index.html#"><i class="fab fa-facebook-f"></i></a>
                            <a class="mx-1 p-1" href="index.html#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="mx-1 p-1" href="index.html#"><i class="fab fa-instagram"></i></a>
                            <a class="mx-1 p-1" href="index.html#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-item">
                    <img class="img-fluid w-100" src="{{ asset('frontend/assets/img/team-2.jpg')}}" alt="">
                    <div class="bg-light text-center p-4">
                        <h5 class="mb-3">Instructor Name</h5>
                        <p class="mb-2">Web Design & Development</p>
                        <div class="d-flex justify-content-center">
                            <a class="mx-1 p-1" href="index.html#"><i class="fab fa-twitter"></i></a>
                            <a class="mx-1 p-1" href="index.html#"><i class="fab fa-facebook-f"></i></a>
                            <a class="mx-1 p-1" href="index.html#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="mx-1 p-1" href="index.html#"><i class="fab fa-instagram"></i></a>
                            <a class="mx-1 p-1" href="index.html#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-item">
                    <img class="img-fluid w-100" src="{{ asset('frontend/assets/img/team-3.jpg')}}" alt="">
                    <div class="bg-light text-center p-4">
                        <h5 class="mb-3">Instructor Name</h5>
                        <p class="mb-2">Web Design & Development</p>
                        <div class="d-flex justify-content-center">
                            <a class="mx-1 p-1" href="index.html#"><i class="fab fa-twitter"></i></a>
                            <a class="mx-1 p-1" href="index.html#"><i class="fab fa-facebook-f"></i></a>
                            <a class="mx-1 p-1" href="index.html#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="mx-1 p-1" href="index.html#"><i class="fab fa-instagram"></i></a>
                            <a class="mx-1 p-1" href="index.html#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-item">
                    <img class="img-fluid w-100" src="{{ asset('frontend/assets/img/team-4.jpg')}}" alt="">
                    <div class="bg-light text-center p-4">
                        <h5 class="mb-3">Instructor Name</h5>
                        <p class="mb-2">Web Design & Development</p>
                        <div class="d-flex justify-content-center">
                            <a class="mx-1 p-1" href="index.html#"><i class="fab fa-twitter"></i></a>
                            <a class="mx-1 p-1" href="index.html#"><i class="fab fa-facebook-f"></i></a>
                            <a class="mx-1 p-1" href="index.html#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="mx-1 p-1" href="index.html#"><i class="fab fa-instagram"></i></a>
                            <a class="mx-1 p-1" href="index.html#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-fluid bg-image py-5" style="margin: 90px 0;">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-5 mb-lg-0">
                    <div class="section-title position-relative mb-4">
                        <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Testimonial</h6>
                        <h1 class="display-4">What Say Our Students</h1>
                    </div>
                    <p class="m-0">Dolor est dolores et nonumy sit labore dolores est sed rebum amet, justo duo ipsum
                        sanctus dolore magna rebum sit et. Diam lorem ea sea at. Nonumy et at at sed justo est nonumy
                        tempor. Vero sea ea eirmod, elitr ea amet diam ipsum at amet. Erat sed stet eos ipsum diam</p>
                </div>
                <div class="col-lg-7">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="bg-white p-5">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <p>Sed et elitr ipsum labore dolor diam, ipsum duo vero sed sit est est ipsum eos clita est
                                ipsum. Est nonumy tempor at kasd. Sed at dolor duo ut dolor, et justo erat dolor magna sed
                                stet amet elitr duo lorem</p>
                            <div class="d-flex flex-shrink-0 align-items-center mt-4">
                                <img class="img-fluid mr-4" src="img/testimonial-2.jpg" alt="">
                                <div>
                                    <h5>Student Name</h5>
                                    <span>Web Design</span>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white p-5">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <p>Sed et elitr ipsum labore dolor diam, ipsum duo vero sed sit est est ipsum eos clita est
                                ipsum. Est nonumy tempor at kasd. Sed at dolor duo ut dolor, et justo erat dolor magna sed
                                stet amet elitr duo lorem</p>
                            <div class="d-flex flex-shrink-0 align-items-center mt-4">
                                <img class="img-fluid mr-4" src="img/testimonial-1.jpg" alt="">
                                <div>
                                    <h5>Student Name</h5>
                                    <span>Web Design</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial Start -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-5 mb-lg-0">
                    <div class="bg-light d-flex flex-column justify-content-center px-5" style="height: 450px;">
                        <div class="d-flex align-items-center mb-5">
                            <div class="btn-icon bg-primary mr-4">
                                <i class="fa fa-2x fa-map-marker-alt text-white"></i>
                            </div>
                            <div class="mt-n1">
                                <h4>Our Location</h4>
                                <p class="m-0">Nasirabad, Chattogram, BD</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-5">
                            <div class="btn-icon bg-secondary mr-4">
                                <i class="fa fa-2x fa-phone-alt text-white"></i>
                            </div>
                            <div class="mt-n1">
                                <h4>Call </h4>
                                <p class="m-0"> +88-031-62534</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="btn-icon bg-warning mr-4">
                                <i class="fa fa-2x fa-envelope text-white"></i>
                            </div>
                            <div class="mt-n1">
                                <h4>Email </h4>
                                <p class="m-0">cpigeneral@yahoo.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="section-title position-relative mb-4">
                        <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Need Help?</h6>
                        <h1 class="display-4">Send Message</h1>
                    </div>
                    <div class="contact-form">
                        <form>
                            <div class="row">
                                <div class="col-6 form-group">
                                    <input type="text" class="form-control border-top-0 border-right-0 border-left-0 p-0"
                                        placeholder="Your Name" required="required">
                                </div>
                                <div class="col-6 form-group">
                                    <input type="email" class="form-control border-top-0 border-right-0 border-left-0 p-0"
                                        placeholder="Your Email" required="required">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control border-top-0 border-right-0 border-left-0 p-0"
                                    placeholder="Subject" required="required">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control border-top-0 border-right-0 border-left-0 p-0" rows="5"
                                    placeholder="Message" required="required"></textarea>
                            </div>
                            <div>
                                <button class="btn btn-primary py-3 px-5" type="submit">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection