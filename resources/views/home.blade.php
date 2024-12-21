@extends('dashboard.layout.main')
@section('main-containers')

<style>
    .event-main-img {
        width: 100%;
        height: 350px
    }

    @media only screen and (max-width:1023.99px) {
        .desktop-main-bannervws {
            display: none;
        }
    }

    @media only screen and (min-width:1024px) {
        .mobile-main-bannervws {
            display: none;
        }
    }

    .main-popup {
        display: none;
        /* Hidden by default */
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        /* Dark background */
        justify-content: center;
        align-items: center;
        z-index: 10000;
    }

    /* Popup content */

    .main-popup-content {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        width: 500px;
        text-align: center;
        position: relative;
    }

    /* Close button */

    .main-close-btn {
        position: absolute;
        top: 10px;
        right: 10px;
        /* font-size: 20px; */
        cursor: pointer;
    }
</style>
<!-- -------------------------------------Banner---------------------------------------- -->
<section class="banner_area_home ">
    <div class="container-fluid mt-4 mb-4">
        <div class="swiper banswi">
            <div class="swiper-wrapper">
              
                {{-- Home Banner  --}}
                <div class="swiper-slide">
                    <div class="banner_area_slider" style=" background-color: rgb(250,152,152)  !important;">
                        <div class="row">
                            <div class="col-xl-7 my-auto">
                                <div class="banner-main-descrpt">
                                    <span class="main-banner-spantext">#1 Language Course</span>
                                    <h1 style="color:#ffffff">Language Course</h1>
                                    <p style="color:#000000">English course that gives you an understanding of how
                                        to improve spoken English, grammar, reading, pronunciation, and listening.
                                    </p>

                                    <div class="d-flex justify-content-between flex-wrap mt-4">
                                        <div class="banner-buttons-show mb-3">
                                            <a href="#">
                                                <div><button class="started-now-btnshow">Get
                                                        Started Now <i class="fa-solid fa-arrow-up"></i></button>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div><button class="explr-soltn">Explore
                                                        Solution <i class="fa-solid fa-arrow-up"></i></button></div>
                                            </a>
                                        </div>

                                        <div class="d-flex">
                                            <div class="d-flex">
                                                <div class="d-md-flex d-none" style="width:80px;height:80px"><img
                                                        src="assets/images/user1.png" alt="user"
                                                        class="img-fluid banner-user-imageshw"></div>
                                                <div class="d-md-flex d-none"
                                                    style="margin-left:-50px;width:80px;height:80px"><img
                                                        src="assets/images/user2.png" alt="user"
                                                        class="img-fluid banner-user-imageshw"></div>
                                                <div class="d-md-flex d-none"
                                                    style="margin-left:-50px;width:80px;height:80px"><img
                                                        src="assets/images/user3.png" alt="user"
                                                        class="img-fluid banner-user-imageshw"></div>
                                            </div>
                                            <div class="total-user-boxshow mt-3 d-md-flex d-none">
                                                <h3>19K <span>+</span></h3>
                                                <p>Satisfied Clients</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5">
                                <div class="banner_area_inner_1">
                                    <div><img src="assets/images/arrowicon.png" alt="icon"
                                            class="img-fluid banner-arrow-icons">
                                    </div>
                                    <img src="https://www.bbsmituni.com/storage/images/bbsmit_home_page_4.webp"
                                        alt="banner-image" class="img-fluid banner_img_b">

                                    <div class="scroll-down-indicator" address="true">

                                        <img src="assets/images/arrow-bottom.png" alt="icon"
                                            class="img-fluid banner-arrow-bottomshw">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                {{-- end Home Banner --}}
@foreach ($homebanner as $hb)
    

                <div class="swiper-slide">
                    <div class="banner_area_slider" style=" background-color: rgb(250,152,152)  !important;">
                        <div class="row">
                            <div class="col-xl-7 my-auto">
                                <div class="banner-main-descrpt">
                                    <span class="main-banner-spantext"># {{$hb->short_title}}</span>
                                    <h1 style="color:#ffffff">{{$hb->main_title}}</h1>
                                    <p style="color:#000000">{!!$hb->short_description!!}</p>

                                    <div class="d-flex justify-content-between flex-wrap mt-4">
                                        <div class="banner-buttons-show mb-3">
                                            <a href="{{$hb->link_1}}">
                                                <div><button class="started-now-btnshow">Get
                                                        Started Now <i class="fa-solid fa-arrow-up"></i></button>
                                                </div>
                                            </a>
                                            <a href="{{$hb->link_2}}">
                                                <div><button class="explr-soltn">Explore
                                                        Solution <i class="fa-solid fa-arrow-up"></i></button></div>
                                            </a>
                                        </div>

                                        <div class="d-flex">
                                            <div class="d-flex">
                                                <div class="d-md-flex d-none" style="width:80px;height:80px"><img
                                                        src="assets/images/user1.png" alt="user"
                                                        class="img-fluid banner-user-imageshw"></div>
                                                <div class="d-md-flex d-none"
                                                    style="margin-left:-50px;width:80px;height:80px"><img
                                                        src="assets/images/user2.png" alt="user"
                                                        class="img-fluid banner-user-imageshw"></div>
                                                <div class="d-md-flex d-none"
                                                    style="margin-left:-50px;width:80px;height:80px"><img
                                                        src="assets/images/user3.png" alt="user"
                                                        class="img-fluid banner-user-imageshw"></div>
                                            </div>
                                            <div class="total-user-boxshow mt-3 d-md-flex d-none">
                                                <h3>19K <span>+</span></h3>
                                                <p>Satisfied Clients</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5">
                                <div class="banner_area_inner_1">
                                    <div><img src="assets/images/arrowicon.png" alt="icon"
                                            class="img-fluid banner-arrow-icons">
                                    </div>
                                    <img src="{{url('uploads/'.$hb->banner)}}"
                                        alt="banner-image" class="img-fluid banner_img_b">

                                    <div class="scroll-down-indicator" address="true">

                                        <img src="assets/images/arrow-bottom.png" alt="icon"
                                            class="img-fluid banner-arrow-bottomshw">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                @endforeach
          
             
              


            </div>
        </div>
    </div>
</section>

<!-- ------------------------------Our Process--------------------------------------- -->
<section class="mt-5 mb-5 process-sec-boxshow">
    <div class="container">
        <div class="text-center">
            <div>
                <span class="process-subtitle">#Our Commitment</span>
                <img src="assets/images/line.png" alt="line" class="img-fluid vector-line">
            </div>

            <h2 class="process-title-shw">Building Careers</h2>
            <p class="process-sub-paradtls">Building Flexible Futures Improve Your Professional Life with BBSMIT</p>
        </div>

        <div class="row">
            <div class="col-md-4 mt-4">
                <div class="carrer-step-box text-center mt-4">
                    <span class="career-step-1"> <img src="https://www.bbsmituni.com/images/internship.png"
                            alt="line" class="img-fluid ">
                    </span>
                    <h3>Internship Opportunities</h3>
                    <p class="mb-4">Gain valuable hands-on experience by working on real-world projects under the
                        guidance of industry experts.</p>
                    <div class="process-sec-boxshow-line"></div>
                </div>
            </div>

            <div class="col-md-4 mt-4">
                <div class="carrer-step-box text-center mt-4">
                    <span class="career-step-2"><img src="https://www.bbsmituni.com/images/scholarship.png"
                            alt="line" class="img-fluid "></span>
                    <h3>Financial Aid and Scholarships</h3>
                    <p class="mb-4">Explore various funding options to make your education more affordable,
                        including scholarships, grants, and student loans.</p>
                    <div class="process-sec-boxshow-line"></div>
                </div>
            </div>

            <div class="col-md-4 mt-4">
                <div class="carrer-step-box text-center mt-4">
                    <span class="career-step-3"><img src="https://www.bbsmituni.com/images/program.png" alt="line"
                            class="img-fluid "></span>
                    <h3>Program Flexibility</h3>
                    <p class="mb-4">Choose a learning path that suits your lifestyle and goals, whether full-time,
                        part-time, or online.</p>
                    <div class="process-sec-boxshow-line"></div>
                </div>
            </div>

            <div class="col-md-4 mt-4">
                <div class="carrer-step-box text-center mt-4">
                    <span class="career-step-3 colo-rc-4"><img
                            src="https://www.bbsmituni.com/images/high-quality.png" alt="line"
                            class="img-fluid "></span>
                    <h3>High-quality Courses</h3>
                    <p class="mb-4">Master in-demand skills with our comprehensive curriculum and state-of-the-art
                        technology.
                    </p>
                    <div class="process-sec-boxshow-line"></div>
                </div>
            </div>


            <div class="col-md-4 mt-4">
                <div class="carrer-step-box text-center mt-4">
                    <span class="career-step-3  colo-rc-5"><img
                            src="https://www.bbsmituni.com/images/personalized-learning.png" alt="line"
                            class="img-fluid "></span>
                    <h3>Personalised Learning</h3>
                    <p class="mb-4">Receive tailored instruction that caters to your learning style and pace,
                        ensuring you get the most out of your education.</p>
                    <div class="process-sec-boxshow-line"></div>
                </div>
            </div>


            <div class="col-md-4 mt-4">
                <div class="carrer-step-box text-center mt-4">
                    <span class="career-step-1"><img src="https://www.bbsmituni.com/images/global.png" alt="line"
                            class="img-fluid "></span>
                    <h3>Global Certificates</h3>
                    <p class="mb-4">Earn internationally recognised certifications that validate your skills and
                        open doors to global opportunities.</p>
                    <div class="process-sec-boxshow-line"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ------------------------------------------Top Courses------------------------------------------------------- -->
<section class="mb-5">
    <div class="text-center">
        <div>
            <span class="process-subtitle">#Top Courses</span>
            <img src="assets/images/line.png" alt="line" class="img-fluid vector-line">
        </div>
    </div>
    <div class="top-courses-tabbox mt-5">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item tab-menu-box" role="presentation">
                <button class="nav-link active" id="pills-courses-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-courses" type="button" role="tab" aria-controls="pills-courses"
                    aria-selected="true">All Courses</button>
            </li>
            <li class="nav-item tab-menu-box ms-2" role="presentation">
                <button class="nav-link" id="pills-marketing-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-marketing" type="button" role="tab" aria-controls="pills-marketing"
                    aria-selected="false">Digital Marketing</button>
            </li>
            <li class="nav-item tab-menu-box ms-2" role="presentation">
                <button class="nav-link" id="pills-programming-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-programming" type="button" role="tab" aria-controls="pills-programming"
                    aria-selected="false">Programming Languages</button>
            </li>

            <li class="nav-item tab-menu-box ms-2" role="presentation">
                <button class="nav-link" id="pills-language-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-language" type="button" role="tab" aria-controls="pills-language"
                    aria-selected="false">Language Proficiency Courses</button>
            </li>
            <li class="nav-item tab-menu-box ms-2" role="presentation">
                <button class="nav-link" id="graphic-ui-ux-designing-tab" data-bs-toggle="pill"
                    data-bs-target="#graphic-ui-ux-designing" type="button" role="tab"
                    aria-controls="graphic-ui-ux-designing" aria-selected="false">Graphic & UI/UX Designing</button>
            </li>
            <li class="nav-item tab-menu-box ms-2" role="presentation">
                <button class="nav-link" id="e-commerce-tab" data-bs-toggle="pill" data-bs-target="#e-commerce"
                    type="button" role="tab" aria-controls="e-commerce" aria-selected="false">E-Commerce</button>
            </li>
            <li class="nav-item tab-menu-box ms-2" role="presentation">
                <button class="nav-link" id="bbsmit-skill-bharat-tab" data-bs-toggle="pill"
                    data-bs-target="#bbsmit-skill-bharat" type="button" role="tab"
                    aria-controls="bbsmit-skill-bharat" aria-selected="false">RKCL Approved Courses</button>
            </li>
            <li class="nav-item tab-menu-box ms-2" role="presentation">
                <button class="nav-link" id="web-app-designing-tab" data-bs-toggle="pill"
                    data-bs-target="#web-app-designing" type="button" role="tab" aria-controls="web-app-designing"
                    aria-selected="false">Web & App Designing</button>
            </li>
            <li class="nav-item tab-menu-box ms-2" role="presentation">
                <button class="nav-link" id="3d-modelling-tab" data-bs-toggle="pill" data-bs-target="#3d-modelling"
                    type="button" role="tab" aria-controls="3d-modelling" aria-selected="false">3D
                    Modelling</button>
            </li>





        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-courses" role="tabpanel"
                aria-labelledby="pills-courses-tab" tabindex="0">

                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">


                        <div class="swiper-slide">
                            <div class="course_box">
                                <div class="image">
                                    <img src="https://www.bbsmituni.com/images/CourseName/digital-marketing/digital-marketing-course-dmsp-.jpg"
                                        alt="image" class="img-fluid">
                                </div>
                                <div class="content">
                                    <span> Digital Marketing </span>
                                    <a href="#" |>
                                        Digital Marketing Course (DMSP) <i
                                            class="fa-solid fa-up-right-from-square"></i>
                                    </a>

                                    <div class="box">
                                        <div class="box_inner">
                                            <i class="fa-solid fa-graduation-cap"></i>
                                            <h3>96</h3>
                                        </div>
                                        <i class="fa-solid fa-comment-dots"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="course_box">
                                <div class="image">
                                    <img src="https://www.bbsmituni.com/images/CourseName/programming-languages/python-programming-course-at-bbsmit.jpg"
                                        alt="image" class="img-fluid">
                                </div>
                                <div class="content">
                                    <span> Programming Languages </span>
                                    <a href="#" |> Python Programming Course at BBSMIT <i
                                            class="fa-solid fa-up-right-from-square"></i>
                                    </a>

                                    <div class="box">
                                        <div class="box_inner">
                                            <i class="fa-solid fa-graduation-cap"></i>
                                            <h3>96</h3>
                                        </div>
                                        <i class="fa-solid fa-comment-dots"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="course_box">
                                <div class="image">
                                    <img src="https://www.bbsmituni.com/images/CourseName/programming-languages/php-laravel-programming-course.jpg"
                                        alt="image" class="img-fluid">
                                </div>
                                <div class="content">
                                    <span> Programming Languages </span>
                                    <a href="#">
                                        PHP
                                        [Laravel] Programming Course <i
                                            class="fa-solid fa-up-right-from-square"></i>
                                    </a>

                                    <div class="box">
                                        <div class="box_inner">
                                            <i class="fa-solid fa-graduation-cap"></i>
                                            <h3>96</h3>
                                        </div>
                                        <i class="fa-solid fa-comment-dots"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="course_box">
                                <div class="image">
                                    <img src="https://www.bbsmituni.com/images/CourseName/programming-languages/node-js-course.jpg"
                                        alt="image" class="img-fluid">
                                </div>
                                <div class="content">
                                    <span> Programming Languages </span>
                                    <a href="#"> Node Js Course
                                        <i class="fa-solid fa-up-right-from-square"></i>
                                    </a>

                                    <div class="box">
                                        <div class="box_inner">
                                            <i class="fa-solid fa-graduation-cap"></i>
                                            <h3>96</h3>
                                        </div>
                                        <i class="fa-solid fa-comment-dots"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="course_box">
                                <div class="image">
                                    <img src="https://www.bbsmituni.com/images/CourseName/programming-languages/java-course.jpg"
                                        alt="image" class="img-fluid">
                                </div>
                                <div class="content">
                                    <span> Programming Languages </span>
                                    <a href="#"> Java Course <i class="fa-solid fa-up-right-from-square"></i>
                                    </a>

                                    <div class="box">
                                        <div class="box_inner">
                                            <i class="fa-solid fa-graduation-cap"></i>
                                            <h3>96</h3>
                                        </div>
                                        <i class="fa-solid fa-comment-dots"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="course_box">
                                <div class="image">
                                    <img src="https://www.bbsmituni.com/images/CourseName/programming-languages/c-and-c-course.jpg"
                                        alt="image" class="img-fluid">
                                </div>
                                <div class="content">
                                    <span> Programming Languages </span>
                                    <a href="#"> C and C++ Course
                                        <i class="fa-solid fa-up-right-from-square"></i>
                                    </a>

                                    <div class="box">
                                        <div class="box_inner">
                                            <i class="fa-solid fa-graduation-cap"></i>
                                            <h3>96</h3>
                                        </div>
                                        <i class="fa-solid fa-comment-dots"></i>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide">
                            <div class="course_box">
                                <div class="image">
                                    <img src="https://www.bbsmituni.com/images/CourseName/language-proficiency-courses/ielts-course.jpg"
                                        alt="image" class="img-fluid">
                                </div>
                                <div class="content">
                                    <span> Language Proficiency Courses </span>
                                    <a href="#"> IELTS Course <i class="fa-solid fa-up-right-from-square"></i>
                                    </a>

                                    <div class="box">
                                        <div class="box_inner">
                                            <i class="fa-solid fa-graduation-cap"></i>
                                            <h3>96</h3>
                                        </div>
                                        <i class="fa-solid fa-comment-dots"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="course_box">
                                <div class="image">
                                    <img src="https://www.bbsmituni.com/images/CourseName/language-proficiency-courses/french-language-course.jpg"
                                        alt="image" class="img-fluid">
                                </div>
                                <div class="content">
                                    <span> Language Proficiency Courses </span>
                                    <a href="#"> French
                                        Language Course <i class="fa-solid fa-up-right-from-square"></i>
                                    </a>

                                    <div class="box">
                                        <div class="box_inner">
                                            <i class="fa-solid fa-graduation-cap"></i>
                                            <h3>96</h3>
                                        </div>
                                        <i class="fa-solid fa-comment-dots"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="course_box">
                                <div class="image">
                                    <img src="https://www.bbsmituni.com/images/CourseName/language-proficiency-courses/german-language-course-at-bbsmit.jpg"
                                        alt="image" class="img-fluid">
                                </div>
                                <div class="content">
                                    <span> Language Proficiency Courses </span>
                                    <a href="#" |>
                                        German Language Course at BBSMIT <i
                                            class="fa-solid fa-up-right-from-square"></i>
                                    </a>

                                    <div class="box">
                                        <div class="box_inner">
                                            <i class="fa-solid fa-graduation-cap"></i>
                                            <h3>96</h3>
                                        </div>
                                        <i class="fa-solid fa-comment-dots"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="course_box">
                                <div class="image">
                                    <img src="https://www.bbsmituni.com/images/CourseName/language-proficiency-courses/english-speaking---ltm-course.jpg"
                                        alt="image" class="img-fluid">
                                </div>
                                <div class="content">
                                    <span> Language Proficiency Courses </span>
                                    <a href="#">
                                        English Speaking - LTM Course <i
                                            class="fa-solid fa-up-right-from-square"></i>
                                    </a>

                                    <div class="box">
                                        <div class="box_inner">
                                            <i class="fa-solid fa-graduation-cap"></i>
                                            <h3>96</h3>
                                        </div>
                                        <i class="fa-solid fa-comment-dots"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="course_box">
                                <div class="image">
                                    <img src="https://www.bbsmituni.com/images/CourseName/graphic-ui-ux-designing/graphic-designing---p1-course.jpg"
                                        alt="image" class="img-fluid">
                                </div>
                                <div class="content">
                                    <span> Graphic & UI/UX Designing </span>
                                    <a href="#">
                                        Graphic Designing - P1 Course <i
                                            class="fa-solid fa-up-right-from-square"></i>
                                    </a>

                                    <div class="box">
                                        <div class="box_inner">
                                            <i class="fa-solid fa-graduation-cap"></i>
                                            <h3>96</h3>
                                        </div>
                                        <i class="fa-solid fa-comment-dots"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="course_box">
                                <div class="image">
                                    <img src="https://www.bbsmituni.com/images/CourseName/graphic-ui-ux-designing/graphic-designing---p2-course.jpg"
                                        alt="image" class="img-fluid">
                                </div>
                                <div class="content">
                                    <span> Graphic & UI/UX Designing </span>
                                    <a href="#">
                                        Graphic Designing - P2 Course <i
                                            class="fa-solid fa-up-right-from-square"></i>
                                    </a>

                                    <div class="box">
                                        <div class="box_inner">
                                            <i class="fa-solid fa-graduation-cap"></i>
                                            <h3>96</h3>
                                        </div>
                                        <i class="fa-solid fa-comment-dots"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="course_box">
                                <div class="image">
                                    <img src="https://www.bbsmituni.com/images/CourseName/graphic-ui-ux-designing/video-editing-course.jpg"
                                        alt="image" class="img-fluid">
                                </div>
                                <div class="content">
                                    <span> Graphic & UI/UX Designing </span>
                                    <a href="#"> Video
                                        Editing
                                        Course <i class="fa-solid fa-up-right-from-square"></i>
                                    </a>

                                    <div class="box">
                                        <div class="box_inner">
                                            <i class="fa-solid fa-graduation-cap"></i>
                                            <h3>96</h3>
                                        </div>
                                        <i class="fa-solid fa-comment-dots"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="course_box">
                                <div class="image">
                                    <img src="https://www.bbsmituni.com/images/CourseName/graphic-ui-ux-designing/ui-ux-design-course.jpg"
                                        alt="image" class="img-fluid">
                                </div>
                                <div class="content">
                                    <span> Graphic & UI/UX Designing </span>
                                    <a href="#"> UI/UX
                                        Design
                                        Course <i class="fa-solid fa-up-right-from-square"></i>
                                    </a>

                                    <div class="box">
                                        <div class="box_inner">
                                            <i class="fa-solid fa-graduation-cap"></i>
                                            <h3>96</h3>
                                        </div>
                                        <i class="fa-solid fa-comment-dots"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="course_box">
                                <div class="image">
                                    <img src="https://www.bbsmituni.com/images/CourseName/e-commerce/native-e-commerce-platforms-course.jpg"
                                        alt="image" class="img-fluid">
                                </div>
                                <div class="content">
                                    <span> E-Commerce </span>
                                    <a href="#" |>
                                        Native E-Commerce Platforms course <i
                                            class="fa-solid fa-up-right-from-square"></i>
                                    </a>

                                    <div class="box">
                                        <div class="box_inner">
                                            <i class="fa-solid fa-graduation-cap"></i>
                                            <h3>96</h3>
                                        </div>
                                        <i class="fa-solid fa-comment-dots"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="course_box">
                                <div class="image">
                                    <img src="https://www.bbsmituni.com/images/CourseName/e-commerce/international-e-commerce-platforms.jpg"
                                        alt="image" class="img-fluid">
                                </div>
                                <div class="content">
                                    <span> E-Commerce </span>
                                    <a href="#" |>
                                        International E-Commerce Platforms <i
                                            class="fa-solid fa-up-right-from-square"></i>
                                    </a>

                                    <div class="box">
                                        <div class="box_inner">
                                            <i class="fa-solid fa-graduation-cap"></i>
                                            <h3>96</h3>
                                        </div>
                                        <i class="fa-solid fa-comment-dots"></i>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="swiper-slide">
                            <div class="course_box">
                                <div class="image">
                                    <img src="https://www.bbsmituni.com/images/CourseName/rkcl-approved-courses/rs-cit.jpg"
                                        alt="image" class="img-fluid">
                                </div>
                                <div class="content">
                                    <span> RKCL Approved Courses </span>
                                    <a href="#"> RS-CIT <i class="fa-solid fa-up-right-from-square"></i>
                                    </a>

                                    <div class="box">
                                        <div class="box_inner">
                                            <i class="fa-solid fa-graduation-cap"></i>
                                            <h3>96</h3>
                                        </div>
                                        <i class="fa-solid fa-comment-dots"></i>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="swiper-slide">
                            <div class="course_box">
                                <div class="image">
                                    <img src="https://www.bbsmituni.com/images/CourseName/rkcl-approved-courses/dca-diploma-in-computer-application-.jpg"
                                        alt="image" class="img-fluid">
                                </div>
                                <div class="content">
                                    <span> RKCL Approved Courses </span>
                                    <a href="#" |> DCA (Diploma in Computer Application) <i
                                            class="fa-solid fa-up-right-from-square"></i>
                                    </a>

                                    <div class="box">
                                        <div class="box_inner">
                                            <i class="fa-solid fa-graduation-cap"></i>
                                            <h3>96</h3>
                                        </div>
                                        <i class="fa-solid fa-comment-dots"></i>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide">
                            <div class="course_box">
                                <div class="image">
                                    <img src="https://www.bbsmituni.com/images/CourseName/rkcl-approved-courses/adca-advanced-diploma-in-computer-application-.jpg"
                                        alt="image" class="img-fluid">
                                </div>
                                <div class="content">
                                    <span> RKCL Approved Courses </span>
                                    <a href="#" |> ADCA (Advanced Diploma in Computer Application) <i
                                            class="fa-solid fa-up-right-from-square"></i>
                                    </a>

                                    <div class="box">
                                        <div class="box_inner">
                                            <i class="fa-solid fa-graduation-cap"></i>
                                            <h3>96</h3>
                                        </div>
                                        <i class="fa-solid fa-comment-dots"></i>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="swiper-slide">
                            <div class="course_box">
                                <div class="image">
                                    <img src="https://www.bbsmituni.com/images/CourseName/rkcl-approved-courses/tally-course.jpg"
                                        alt="image" class="img-fluid">
                                </div>
                                <div class="content">
                                    <span> RKCL Approved Courses </span>
                                    <a href="#" |> Tally Course <i class="fa-solid fa-up-right-from-square"></i>
                                    </a>

                                    <div class="box">
                                        <div class="box_inner">
                                            <i class="fa-solid fa-graduation-cap"></i>
                                            <h3>96</h3>
                                        </div>
                                        <i class="fa-solid fa-comment-dots"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="course_box">
                                <div class="image">
                                    <img src="https://www.bbsmituni.com/images/CourseName/web-app-designing/web-designing-p1---html-course.jpg"
                                        alt="image" class="img-fluid">
                                </div>
                                <div class="content">
                                    <span> Web & App Designing </span>
                                    <a href="#" |>
                                        Web
                                        Designing P1 - HTML Course <i class="fa-solid fa-up-right-from-square"></i>
                                    </a>

                                    <div class="box">
                                        <div class="box_inner">
                                            <i class="fa-solid fa-graduation-cap"></i>
                                            <h3>96</h3>
                                        </div>
                                        <i class="fa-solid fa-comment-dots"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="course_box">
                                <div class="image">
                                    <img src="https://www.bbsmituni.com/images/CourseName/web-app-designing/web-designing---p2---react-js-course.jpg"
                                        alt="image" class="img-fluid">
                                </div>
                                <div class="content">
                                    <span> Web & App Designing </span>
                                    <a href="#" |> Web Designing - P2 - React.Js Course <i
                                            class="fa-solid fa-up-right-from-square"></i>
                                    </a>

                                    <div class="box">
                                        <div class="box_inner">
                                            <i class="fa-solid fa-graduation-cap"></i>
                                            <h3>96</h3>
                                        </div>
                                        <i class="fa-solid fa-comment-dots"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="course_box">
                                <div class="image">
                                    <img src="https://www.bbsmituni.com/images/CourseName/web-app-designing/application-designing-course.jpg"
                                        alt="image" class="img-fluid">
                                </div>
                                <div class="content">
                                    <span> Web & App Designing </span>
                                    <a href="#">
                                        Application Designing Course <i
                                            class="fa-solid fa-up-right-from-square"></i>
                                    </a>

                                    <div class="box">
                                        <div class="box_inner">
                                            <i class="fa-solid fa-graduation-cap"></i>
                                            <h3>96</h3>
                                        </div>
                                        <i class="fa-solid fa-comment-dots"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="course_box">
                                <div class="image">
                                    <img src="https://www.bbsmituni.com/images/CourseName/3d-modelling/blender-course.jpg"
                                        alt="image" class="img-fluid">
                                </div>
                                <div class="content">
                                    <span> 3D Modelling </span>
                                    <a href="#" |> Blender Course
                                        <i class="fa-solid fa-up-right-from-square"></i>
                                    </a>

                                    <div class="box">
                                        <div class="box_inner">
                                            <i class="fa-solid fa-graduation-cap"></i>
                                            <h3>96</h3>
                                        </div>
                                        <i class="fa-solid fa-comment-dots"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="course_box">
                                <div class="image">
                                    <img src="https://www.bbsmituni.com/images/CourseName/3d-modelling/maya-course.jpg"
                                        alt="image" class="img-fluid">
                                </div>
                                <div class="content">
                                    <span> 3D Modelling </span>
                                    <a href="#"> Maya Course <i class="fa-solid fa-up-right-from-square"></i>
                                    </a>

                                    <div class="box">
                                        <div class="box_inner">
                                            <i class="fa-solid fa-graduation-cap"></i>
                                            <h3>96</h3>
                                        </div>
                                        <i class="fa-solid fa-comment-dots"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="course_box">
                                <div class="image">
                                    <img src="https://www.bbsmituni.com/images/CourseName/3d-modelling/3d-max-with-zbrush.jpg"
                                        alt="image" class="img-fluid">
                                </div>
                                <div class="content">
                                    <span> 3D Modelling </span>
                                    <a href="#"> 3D Max with
                                        ZBrush <i class="fa-solid fa-up-right-from-square"></i>
                                    </a>

                                    <div class="box">
                                        <div class="box_inner">
                                            <i class="fa-solid fa-graduation-cap"></i>
                                            <h3>96</h3>
                                        </div>
                                        <i class="fa-solid fa-comment-dots"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="course_box">
                                <div class="image">
                                    <img src="https://www.bbsmituni.com/images/CourseName/3d-modelling/autocad-course.jpg"
                                        alt="image" class="img-fluid">
                                </div>
                                <div class="content">
                                    <span> 3D Modelling </span>
                                    <a href="#"> AutoCAD Course
                                        <i class="fa-solid fa-up-right-from-square"></i>
                                    </a>

                                    <div class="box">
                                        <div class="box_inner">
                                            <i class="fa-solid fa-graduation-cap"></i>
                                            <h3>96</h3>
                                        </div>
                                        <i class="fa-solid fa-comment-dots"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <div class="tab-pane fade" id="pills-marketing" role="tabpanel" aria-labelledby="pills-marketing-tab"
                tabindex="0">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="course_box">
                                <div class="image">
                                    <img src="https://www.bbsmituni.com/images/CourseName/digital-marketing/digital-marketing-course-dmsp-.jpg"
                                        alt="image" class="img-fluid">
                                </div>
                                <div class="content">
                                    <span> Digital Marketing </span>
                                    <a href="#">
                                        Digital Marketing Course (DMSP) <i
                                            class="fa-solid fa-up-right-from-square"></i>
                                    </a>

                                    <div class="box">
                                        <div class="box_inner">
                                            <i class="fa-solid fa-graduation-cap"></i>
                                            <h3>96</h3>
                                        </div>
                                        <i class="fa-solid fa-comment-dots"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="tab-pane fade" id="pills-programming" role="tabpanel"
                aria-labelledby="pills-programming-tab" tabindex="0">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="course_box">
                                <div class="image">
                                    <img src="https://www.bbsmituni.com/images/CourseName/programming-languages/python-programming-course-at-bbsmit.jpg"
                                        alt="image" class="img-fluid">
                                </div>
                                <div class="content">
                                    <span> Programming Languages </span>
                                    <a href="#" |> Python Programming Course at BBSMIT <i
                                            class="fa-solid fa-up-right-from-square"></i>
                                    </a>

                                    <div class="box">
                                        <div class="box_inner">
                                            <i class="fa-solid fa-graduation-cap"></i>
                                            <h3>96</h3>
                                        </div>
                                        <i class="fa-solid fa-comment-dots"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="course_box">
                                <div class="image">
                                    <img src="https://www.bbsmituni.com/images/CourseName/programming-languages/php-laravel-programming-course.jpg"
                                        alt="image" class="img-fluid">
                                </div>
                                <div class="content">
                                    <span> Programming Languages </span>
                                    <a href="#" |>
                                        PHP
                                        [Laravel] Programming Course <i
                                            class="fa-solid fa-up-right-from-square"></i>
                                    </a>

                                    <div class="box">
                                        <div class="box_inner">
                                            <i class="fa-solid fa-graduation-cap"></i>
                                            <h3>96</h3>
                                        </div>
                                        <i class="fa-solid fa-comment-dots"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="course_box">
                                <div class="image">
                                    <img src="https://www.bbsmituni.com/images/CourseName/programming-languages/node-js-course.jpg"
                                        alt="image" class="img-fluid">
                                </div>
                                <div class="content">
                                    <span> Programming Languages </span>
                                    <a href="#" |> Node Js Course
                                        <i class="fa-solid fa-up-right-from-square"></i>
                                    </a>

                                    <div class="box">
                                        <div class="box_inner">
                                            <i class="fa-solid fa-graduation-cap"></i>
                                            <h3>96</h3>
                                        </div>
                                        <i class="fa-solid fa-comment-dots"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="course_box">
                                <div class="image">
                                    <img src="https://www.bbsmituni.com/images/CourseName/programming-languages/java-course.jpg"
                                        alt="image" class="img-fluid">
                                </div>
                                <div class="content">
                                    <span> Programming Languages </span>
                                    <a href="#" |> Java Course <i class="fa-solid fa-up-right-from-square"></i>
                                    </a>

                                    <div class="box">
                                        <div class="box_inner">
                                            <i class="fa-solid fa-graduation-cap"></i>
                                            <h3>96</h3>
                                        </div>
                                        <i class="fa-solid fa-comment-dots"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="course_box">
                                <div class="image">
                                    <img src="https://www.bbsmituni.com/images/CourseName/programming-languages/c-and-c-course.jpg"
                                        alt="image" class="img-fluid">
                                </div>
                                <div class="content">
                                    <span> Programming Languages </span>
                                    <a href="#" |> C and C++ Course
                                        <i class="fa-solid fa-up-right-from-square"></i>
                                    </a>

                                    <div class="box">
                                        <div class="box_inner">
                                            <i class="fa-solid fa-graduation-cap"></i>
                                            <h3>96</h3>
                                        </div>
                                        <i class="fa-solid fa-comment-dots"></i>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>


            <div class="tab-pane fade" id="pills-language" role="tabpanel" aria-labelledby="pills-language-tab"
                tabindex="0">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">


                        <div class="swiper-slide">
                            <div class="course_box">
                                <div class="image">
                                    <img src="https://www.bbsmituni.com/images/CourseName/language-proficiency-courses/ielts-course.jpg"
                                        alt="image" class="img-fluid">
                                </div>
                                <div class="content">
                                    <span> Language Proficiency Courses </span>
                                    <a href="#" |> IELTS Course <i class="fa-solid fa-up-right-from-square"></i>
                                    </a>

                                    <div class="box">
                                        <div class="box_inner">
                                            <i class="fa-solid fa-graduation-cap"></i>
                                            <h3>96</h3>
                                        </div>
                                        <i class="fa-solid fa-comment-dots"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="course_box">
                                <div class="image">
                                    <img src="https://www.bbsmituni.com/images/CourseName/language-proficiency-courses/french-language-course.jpg"
                                        alt="image" class="img-fluid">
                                </div>
                                <div class="content">
                                    <span> Language Proficiency Courses </span>
                                    <a href="#" |> French
                                        Language Course <i class="fa-solid fa-up-right-from-square"></i>
                                    </a>

                                    <div class="box">
                                        <div class="box_inner">
                                            <i class="fa-solid fa-graduation-cap"></i>
                                            <h3>96</h3>
                                        </div>
                                        <i class="fa-solid fa-comment-dots"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="course_box">
                                <div class="image">
                                    <img src="https://www.bbsmituni.com/images/CourseName/language-proficiency-courses/german-language-course-at-bbsmit.jpg"
                                        alt="image" class="img-fluid">
                                </div>
                                <div class="content">
                                    <span> Language Proficiency Courses </span>
                                    <a href="#" |>
                                        German Language Course at BBSMIT <i
                                            class="fa-solid fa-up-right-from-square"></i>
                                    </a>

                                    <div class="box">
                                        <div class="box_inner">
                                            <i class="fa-solid fa-graduation-cap"></i>
                                            <h3>96</h3>
                                        </div>
                                        <i class="fa-solid fa-comment-dots"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="course_box">
                                <div class="image">
                                    <img src="https://www.bbsmituni.com/images/CourseName/language-proficiency-courses/english-speaking---ltm-course.jpg"
                                        alt="image" class="img-fluid">
                                </div>
                                <div class="content">
                                    <span> Language Proficiency Courses </span>
                                    <a href="#" |>
                                        English Speaking - LTM Course <i
                                            class="fa-solid fa-up-right-from-square"></i>
                                    </a>

                                    <div class="box">
                                        <div class="box_inner">
                                            <i class="fa-solid fa-graduation-cap"></i>
                                            <h3>96</h3>
                                        </div>
                                        <i class="fa-solid fa-comment-dots"></i>
                                    </div>
                                </div>
                            </div>
                        </div>




                    </div>
                </div>
            </div>



            <div class="tab-pane fade" id="graphic-ui-ux-designing" role="tabpanel"
                aria-labelledby="graphic-ui-ux-designing-tab" tabindex="0">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">





                        <div class="swiper-slide">
                            <div class="course_box">
                                <div class="image">
                                    <img src="https://www.bbsmituni.com/images/CourseName/graphic-ui-ux-designing/graphic-designing---p1-course.jpg"
                                        alt="image" class="img-fluid">
                                </div>
                                <div class="content">
                                    <span> Graphic & UI/UX Designing </span>
                                    <a href="#" |>
                                        Graphic Designing - P1 Course <i
                                            class="fa-solid fa-up-right-from-square"></i>
                                    </a>

                                    <div class="box">
                                        <div class="box_inner">
                                            <i class="fa-solid fa-graduation-cap"></i>
                                            <h3>96</h3>
                                        </div>
                                        <i class="fa-solid fa-comment-dots"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="course_box">
                                <div class="image">
                                    <img src="https://www.bbsmituni.com/images/CourseName/graphic-ui-ux-designing/graphic-designing---p2-course.jpg"
                                        alt="image" class="img-fluid">
                                </div>
                                <div class="content">
                                    <span> Graphic & UI/UX Designing </span>
                                    <a href="#" |>
                                        Graphic Designing - P2 Course <i
                                            class="fa-solid fa-up-right-from-square"></i>
                                    </a>

                                    <div class="box">
                                        <div class="box_inner">
                                            <i class="fa-solid fa-graduation-cap"></i>
                                            <h3>96</h3>
                                        </div>
                                        <i class="fa-solid fa-comment-dots"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="course_box">
                                <div class="image">
                                    <img src="https://www.bbsmituni.com/images/CourseName/graphic-ui-ux-designing/video-editing-course.jpg"
                                        alt="image" class="img-fluid">
                                </div>
                                <div class="content">
                                    <span> Graphic & UI/UX Designing </span>
                                    <a href="#" |> Video
                                        Editing
                                        Course <i class="fa-solid fa-up-right-from-square"></i>
                                    </a>

                                    <div class="box">
                                        <div class="box_inner">
                                            <i class="fa-solid fa-graduation-cap"></i>
                                            <h3>96</h3>
                                        </div>
                                        <i class="fa-solid fa-comment-dots"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="course_box">
                                <div class="image">
                                    <img src="https://www.bbsmituni.com/images/CourseName/graphic-ui-ux-designing/ui-ux-design-course.jpg"
                                        alt="image" class="img-fluid">
                                </div>
                                <div class="content">
                                    <span> Graphic & UI/UX Designing </span>
                                    <a href="#" |> UI/UX
                                        Design
                                        Course <i class="fa-solid fa-up-right-from-square"></i>
                                    </a>

                                    <div class="box">
                                        <div class="box_inner">
                                            <i class="fa-solid fa-graduation-cap"></i>
                                            <h3>96</h3>
                                        </div>
                                        <i class="fa-solid fa-comment-dots"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="tab-pane fade" id="e-commerce" role="tabpanel" aria-labelledby="e-commerce-tab"
                tabindex="0">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="course_box">
                                <div class="image">
                                    <img src="https://www.bbsmituni.com/images/CourseName/e-commerce/native-e-commerce-platforms-course.jpg"
                                        alt="image" class="img-fluid">
                                </div>
                                <div class="content">
                                    <span> E-Commerce </span>
                                    <a href="#" |>
                                        Native E-Commerce Platforms course <i
                                            class="fa-solid fa-up-right-from-square"></i>
                                    </a>

                                    <div class="box">
                                        <div class="box_inner">
                                            <i class="fa-solid fa-graduation-cap"></i>
                                            <h3>96</h3>
                                        </div>
                                        <i class="fa-solid fa-comment-dots"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="course_box">
                                <div class="image">
                                    <img src="https://www.bbsmituni.com/images/CourseName/e-commerce/international-e-commerce-platforms.jpg"
                                        alt="image" class="img-fluid">
                                </div>
                                <div class="content">
                                    <span> E-Commerce </span>
                                    <a href="https://bbsmituni.com/course-detail/international-e-commerce-platforms"
                                        |>
                                        International E-Commerce Platforms <i
                                            class="fa-solid fa-up-right-from-square"></i>
                                    </a>

                                    <div class="box">
                                        <div class="box_inner">
                                            <i class="fa-solid fa-graduation-cap"></i>
                                            <h3>96</h3>
                                        </div>
                                        <i class="fa-solid fa-comment-dots"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="bbsmit-skill-bharat" role="tabpanel"
                aria-labelledby="bbsmit-skill-bharat-tab" tabindex="0">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="course_box">
                                <div class="image">
                                    <img src="https://www.bbsmituni.com/images/CourseName/rkcl-approved-courses/rs-cit.jpg"
                                        alt="image" class="img-fluid">
                                </div>
                                <div class="content">
                                    <span> RKCL Approved Courses </span>
                                    <a href="https://bbsmituni.com/course-detail/rs-cit" |> RS-CIT <i
                                            class="fa-solid fa-up-right-from-square"></i>
                                    </a>

                                    <div class="box">
                                        <div class="box_inner">
                                            <i class="fa-solid fa-graduation-cap"></i>
                                            <h3>96</h3>
                                        </div>
                                        <i class="fa-solid fa-comment-dots"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="course_box">
                                <div class="image">
                                    <img src="https://www.bbsmituni.com/images/CourseName/rkcl-approved-courses/dca-diploma-in-computer-application-.jpg"
                                        alt="image" class="img-fluid">
                                </div>
                                <div class="content">
                                    <span> RKCL Approved Courses </span>
                                    <a href="https://bbsmituni.com/course-detail/dca-diploma-in-computer-application-"
                                        |> DCA (Diploma in Computer Application) <i
                                            class="fa-solid fa-up-right-from-square"></i>
                                    </a>

                                    <div class="box">
                                        <div class="box_inner">
                                            <i class="fa-solid fa-graduation-cap"></i>
                                            <h3>96</h3>
                                        </div>
                                        <i class="fa-solid fa-comment-dots"></i>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide">
                            <div class="course_box">
                                <div class="image">
                                    <img src="https://www.bbsmituni.com/images/CourseName/rkcl-approved-courses/adca-advanced-diploma-in-computer-application-.jpg"
                                        alt="image" class="img-fluid">
                                </div>
                                <div class="content">
                                    <span> RKCL Approved Courses </span>
                                    <a href="https://bbsmituni.com/course-detail/adca-advanced-diploma-in-computer-application-"
                                        |> ADCA (Advanced Diploma in Computer Application) <i
                                            class="fa-solid fa-up-right-from-square"></i>
                                    </a>

                                    <div class="box">
                                        <div class="box_inner">
                                            <i class="fa-solid fa-graduation-cap"></i>
                                            <h3>96</h3>
                                        </div>
                                        <i class="fa-solid fa-comment-dots"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="course_box">
                                <div class="image">
                                    <img src="https://www.bbsmituni.com/images/CourseName/rkcl-approved-courses/tally-course.jpg"
                                        alt="image" class="img-fluid">
                                </div>
                                <div class="content">
                                    <span> RKCL Approved Courses </span>
                                    <a href="https://bbsmituni.com/course-detail/tally-course" |> Tally Course <i
                                            class="fa-solid fa-up-right-from-square"></i>
                                    </a>

                                    <div class="box">
                                        <div class="box_inner">
                                            <i class="fa-solid fa-graduation-cap"></i>
                                            <h3>96</h3>
                                        </div>
                                        <i class="fa-solid fa-comment-dots"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="web-app-designing" role="tabpanel"
                aria-labelledby="web-app-designing-tab" tabindex="0">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="course_box">
                                <div class="image">
                                    <img src="https://www.bbsmituni.com/images/CourseName/web-app-designing/web-designing-p1---html-course.jpg"
                                        alt="image" class="img-fluid">
                                </div>
                                <div class="content">
                                    <span> Web & App Designing </span>
                                    <a href="https://bbsmituni.com/course-detail/web-designing-p1---html-course" |>
                                        Web
                                        Designing P1 - HTML Course <i class="fa-solid fa-up-right-from-square"></i>
                                    </a>

                                    <div class="box">
                                        <div class="box_inner">
                                            <i class="fa-solid fa-graduation-cap"></i>
                                            <h3>96</h3>
                                        </div>
                                        <i class="fa-solid fa-comment-dots"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="course_box">
                                <div class="image">
                                    <img src="https://www.bbsmituni.com/images/CourseName/web-app-designing/web-designing---p2---react-js-course.jpg"
                                        alt="image" class="img-fluid">
                                </div>
                                <div class="content">
                                    <span> Web & App Designing </span>
                                    <a href="https://bbsmituni.com/course-detail/web-designing---p2---react-js-course"
                                        |> Web Designing - P2 - React.Js Course <i
                                            class="fa-solid fa-up-right-from-square"></i>
                                    </a>

                                    <div class="box">
                                        <div class="box_inner">
                                            <i class="fa-solid fa-graduation-cap"></i>
                                            <h3>96</h3>
                                        </div>
                                        <i class="fa-solid fa-comment-dots"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="course_box">
                                <div class="image">
                                    <img src="https://www.bbsmituni.com/images/CourseName/web-app-designing/application-designing-course.jpg"
                                        alt="image" class="img-fluid">
                                </div>
                                <div class="content">
                                    <span> Web & App Designing </span>
                                    <a href="https://bbsmituni.com/course-detail/application-designing-course" |>
                                        Application Designing Course <i
                                            class="fa-solid fa-up-right-from-square"></i>
                                    </a>

                                    <div class="box">
                                        <div class="box_inner">
                                            <i class="fa-solid fa-graduation-cap"></i>
                                            <h3>96</h3>
                                        </div>
                                        <i class="fa-solid fa-comment-dots"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="3d-modelling" role="tabpanel" aria-labelledby="3d-modelling-tab"
                tabindex="0">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">


                        <div class="swiper-slide">
                            <div class="course_box">
                                <div class="image">
                                    <img src="https://www.bbsmituni.com/images/CourseName/3d-modelling/blender-course.jpg"
                                        alt="image" class="img-fluid">
                                </div>
                                <div class="content">
                                    <span> 3D Modelling </span>
                                    <a href="https://bbsmituni.com/course-detail/blender-course" |> Blender Course
                                        <i class="fa-solid fa-up-right-from-square"></i>
                                    </a>

                                    <div class="box">
                                        <div class="box_inner">
                                            <i class="fa-solid fa-graduation-cap"></i>
                                            <h3>96</h3>
                                        </div>
                                        <i class="fa-solid fa-comment-dots"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="course_box">
                                <div class="image">
                                    <img src="https://www.bbsmituni.com/images/CourseName/3d-modelling/maya-course.jpg"
                                        alt="image" class="img-fluid">
                                </div>
                                <div class="content">
                                    <span> 3D Modelling </span>
                                    <a href="https://bbsmituni.com/course-detail/maya-course" |> Maya Course <i
                                            class="fa-solid fa-up-right-from-square"></i>
                                    </a>

                                    <div class="box">
                                        <div class="box_inner">
                                            <i class="fa-solid fa-graduation-cap"></i>
                                            <h3>96</h3>
                                        </div>
                                        <i class="fa-solid fa-comment-dots"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="course_box">
                                <div class="image">
                                    <img src="https://www.bbsmituni.com/images/CourseName/3d-modelling/3d-max-with-zbrush.jpg"
                                        alt="image" class="img-fluid">
                                </div>
                                <div class="content">
                                    <span> 3D Modelling </span>
                                    <a href="https://bbsmituni.com/course-detail/3d-max-with-zbrush" |> 3D Max with
                                        ZBrush <i class="fa-solid fa-up-right-from-square"></i>
                                    </a>

                                    <div class="box">
                                        <div class="box_inner">
                                            <i class="fa-solid fa-graduation-cap"></i>
                                            <h3>96</h3>
                                        </div>
                                        <i class="fa-solid fa-comment-dots"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="course_box">
                                <div class="image">
                                    <img src="https://www.bbsmituni.com/images/CourseName/3d-modelling/autocad-course.jpg"
                                        alt="image" class="img-fluid">
                                </div>
                                <div class="content">
                                    <span> 3D Modelling </span>
                                    <a href="https://bbsmituni.com/course-detail/autocad-course" |> AutoCAD Course
                                        <i class="fa-solid fa-up-right-from-square"></i>
                                    </a>

                                    <div class="box">
                                        <div class="box_inner">
                                            <i class="fa-solid fa-graduation-cap"></i>
                                            <h3>96</h3>
                                        </div>
                                        <i class="fa-solid fa-comment-dots"></i>
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




<section class="solution_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 mx-auto text-center">
                <div class="solution_area_inner">
                    <h2>
                        <span>
                            Make your path from career planning to placement
                        </span>

                    </h2>
                    <p>BBSMIT offers a wide range of education services, including university admissions guidance,
                        personalized course selection, career planning, and more. Tailored to meet diverse student
                        needs, BBSMIT helps you achieve your academic
                        and professional goals with confidence.</p>
                </div>
            </div>
            <div class="col-xl-9 mx-auto pt-4">
                <div class="sulution_inner_2">
                    <div class="box">
                        <h4 class="countnn">2</h4>
                        <span>Branches</span>
                    </div>

                    <div class="box">
                        <h4><span class="countnn">10</span> <span>+</span></h4>
                        <span>Instructors</span>
                    </div>

                    <div class="box">
                        <h4> <span class="countnn">35</span> <span>+</span></h4>
                        <span>Courses</span>
                    </div>

                    <div class="box">
                        <h4><span class="countnn">150</span><span>+</span></h4>
                        <span>Students</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<!-- ------------------------------------Latest News & Events--------------------------------------- -->
<section class="lastest-news-section pb-5">
    <div class="container">
        <div class="text-center pt-5">
            <div>
                <span class="process-subtitle">#Latest News & Events</span>
                <img src="assets/images/line.png" alt="line" class="img-fluid vector-line">
            </div>
            <p class="process-sub-paradtls mt-4">Stay Updated: Discover the Latest News & Exciting Events at BBSMIT
                Institute .
            </p>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <div class="event_slider">
                    <div class="swiper eventsld">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <div class="latest-news-main-box shadow-sm">
                                    <div><img
                                            src="https://www.bbsmituni.com/storage/images/Happy Vishwakarma Puja (2).jpg"
                                            alt="latest-img" class="img-fluid">
                                    </div>

                                    <a href="#">
                                        <div class="latest-img-dtls-show text-start">
                                            <h3>A2 Groups Big Anniversary Event: Fun, Success, and Togetherness!
                                            </h3>
                                            <p><i class="bi bi-clock-fill"></i> Nov 29, 2023</p>
                                            <p>
                                            <p>A2 Groups Celebrating Their Successful 3rd Year Anniversary</p>
                                            </p>
                                        </div>
                                    </a>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="latest-news-main-box shadow-sm">
                                    <div><img
                                            src="https://www.bbsmituni.com/storage/images/8a4cbe229d36a499bf1542bbbf142c1e.jpg"
                                            alt="latest-img" class="img-fluid">
                                    </div>

                                    <a href="#">
                                        <div class="latest-img-dtls-show text-start">
                                            <h3>Vishwakarma Puja Celebration at A2 Groups: Honoring Craftsmanship
                                                and Creativity</h3>
                                            <p><i class="bi bi-clock-fill"></i> Sep 17, 2024</p>
                                            <p>
                                            <p>Join A2 Groups as we celebrate Vishwakarma Puja, honoring
                                                craftsmanship and creativity with rituals, blessings for tools, and
                                                cultural performances. Held annually in Jaipur, this event connects
                                                tradition
                                                and work.</p>
                                            </p>
                                        </div>
                                    </a>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="latest-news-main-box shadow-sm">
                                    <div><img
                                            src="https://www.bbsmituni.com/storage/images/0343c3192b56d1646ed7bf996f703fd0.jpg"
                                            alt="latest-img" class="img-fluid">
                                    </div>

                                    <a href="#">
                                        <div class="latest-img-dtls-show text-start">
                                            <h3>Certification Ceremony: Celebrating Student Success at BBSMIT</h3>
                                            <p><i class="bi bi-clock-fill"></i> Oct 30, 2024</p>
                                            <p>
                                            <p>We celebrated the hard work and achievements of our graduates at
                                                BBSMIT. This milestone marked the beginning of their new journeys,
                                                filled with opportunities and success!</p>
                                            </p>
                                        </div>
                                    </a>

                                </div>
                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </div>

    </div>
</section>



<section class="serti_area">
    <div class="container-fluid">
        <div class="row ">
            <div class="col-xl-12 text-center">
                <div class="placemen_area_inner">
                    <span class="process-subtitle">#Certified By </span>
                    <img src="assets/images/line.png" alt="line" class="img-fluid vector-line">
                    <p class="process-sub-paradtls mt-2">BBSMIT Get Certified by Industry Leaders </p>

                </div>
            </div>
            <div class="col-xl-12 my-3">
                <div class="swiper mySwiper3">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="https://www.bbsmituni.com/public/images/pdf/YouTube_Music_Assessment.pdf"
                                target="_blank">
                                <div class="serti_inner_img">
                                    <img src="https://www.bbsmituni.com/images/youtube_certified.png"
                                        alt="certified">
                                    <h5>YouTube Music Assessment </h5>
                                </div>
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="https://www.bbsmituni.com/public/images/pdf/YouTube_Music_Certification.pdf"
                                target="_blank">
                                <div class="serti_inner_img">
                                    <img src="https://www.bbsmituni.com/images/youtube_certified.png"
                                        alt="certified">
                                    <h5>YouTube Music Certification
                                    </h5>
                                </div>
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="https://www.bbsmituni.com/public/images/pdf/YouTube_Music_Rights_Management_Certification.pdf"
                                target="_blank">
                                <div class="serti_inner_img">
                                    <img src="https://www.bbsmituni.com/images/youtube_certified.png"
                                        alt="certified">
                                    <h5>YouTube Music Rights Management Certification
                                    </h5>
                                </div>
                            </a>
                        </div>


                        <div class="swiper-slide">
                            <a href="https://www.bbsmituni.com/public/images/pdf/Asset_Monetization_Assessment.pdf"
                                target="_blank">
                                <div class="serti_inner_img">
                                    <img src="https://www.bbsmituni.com/images/asset_monetization_assessment.png"
                                        alt="certified">
                                    <h5>Asset Monetization Assessment</h5>

                                </div>
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="https://www.bbsmituni.com/public/images/pdf/RKCl.pdf" target="_blank">
                                <div class="serti_inner_img">
                                    <img src="https://www.bbsmituni.com/images/rkcl_certified.png" alt="certified">
                                    <h5>RKCl</h5>

                                </div>
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="https://www.bbsmituni.com/public/images/pdf/Google_My_Business.pdf"
                                target="_blank">
                                <div class="serti_inner_img">
                                    <img src="https://www.bbsmituni.com/images/google_business_certified.png"
                                        alt="certified">
                                    <h5>Google My Business</h5>
                            </a>


                        </div>
                    </div>


                    <div class="swiper-slide">
                        <a href="https://www.bbsmituni.com/public/images/pdf/Content_Ownership_Assessment.pdf"
                            target="_blank">

                            <div class="serti_inner_img">
                                <img src="https://www.bbsmituni.com/images/content_ownership_assessment.png"
                                    alt="certified">
                                <h5>Content Ownership Assessment</h5>

                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>

    </div>
    </div>
</section>
<!-- ---------------------------------placement_area---------------------------------- -->
<section class="placement_area">

    <div class="row">
        <div class="col-xl-12 text-center">
            <div class="placemen_area_inner">
                <span class="process-subtitle">#Placement </span>
                <img src="assets/images/line.png" alt="line" class="img-fluid vector-line">
                <p class="process-sub-paradtls mt-4">To improve Careers with Excellent Placement Opportunities
                </p>
            </div>

        </div>
        <div class="col-xl-12 mt-4">


            <div class="placement_autoscroll">
                <div class="placement_autoscroll_inner">
                    <img src="https://www.bbsmituni.com/images/placement_1.svg" alt="">
                    <img src="https://www.bbsmituni.com/images/placement_2.png" alt="">
                    <img src="https://www.bbsmituni.com/images/placement_3.png" alt="">
                    <img src="https://www.bbsmituni.com/images/placement_4.jpg" alt="">
                    <img src="https://www.bbsmituni.com/images/placement_5.png" alt="">
                    <img src="https://www.bbsmituni.com/images/placement_1.svg" alt="">
                    <img src="https://www.bbsmituni.com/images/placement_2.png" alt="">
                    <img src="https://www.bbsmituni.com/images/placement_3.png" alt="">
                </div>
            </div>
        </div>
    </div>

</section>



<!-- ---------------------------------Testimonial---------------------------------- -->
<section class="testimonial-section px-md-3 px-3 mt-5 mb-xl-0 mb-5">
    <div class="text-md-start text-center">
        <div>
            <span class="process-subtitle">#Testimonial</span>
            <img src="assets/images/line.png" alt="line" class="img-fluid vector-line">
        </div>
        <h2 class="process-title-shw">What Our Student's Say

        </h2>
    </div>
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="testmonial_box">
                    <div class="item test-main-boxshow">

                        <div class="testmonial-user-name">
                            <h5>RANGREJ AMAN AIYUBBHAI</h5>
                            <p>Digital Marketing Course</p>
                        </div>
                        <div class="stars"><i class="bi bi-star-fill footer-contact"></i> <i
                                class="bi bi-star-fill footer-contact"></i> <i
                                class="bi bi-star-fill footer-contact"></i> <i
                                class="bi bi-star-fill footer-contact"></i> <i
                                class="bi bi-star-fill footer-contact"></i></div>
                        <p class="testimonial-user-dtls">The Digital Marketing Course was comprehensive and
                            practical. I gained insights into SEO, social media, and more. The instructors were
                            supportive, and I now feel confident in executing effective digital campaigns.</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="testmonial_box">
                    <div class="item test-main-boxshow">

                        <div class="testmonial-user-name">
                            <h5>Rohan Gupta</h5>
                            <p>Node.js Course</p>
                        </div>
                        <div class="stars"><i class="bi bi-star-fill footer-contact"></i> <i
                                class="bi bi-star-fill footer-contact"></i> <i
                                class="bi bi-star-fill footer-contact"></i> <i
                                class="bi bi-star-fill footer-contact"></i> <i
                                class="bi bi-star-fill footer-contact"></i></div>
                        <p class="testimonial-user-dtls">The Node.js Course was exceptional. Expert instructors and
                            well-paced lessons helped me build robust web applications. I'm grateful for the skills
                            I gained.</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="testmonial_box">
                    <div class="item test-main-boxshow">

                        <div class="testmonial-user-name">
                            <h5>Kavya Sharma</h5>
                            <p>SMM Course</p>
                        </div>
                        <div class="stars"><i class="bi bi-star-fill footer-contact"></i> <i
                                class="bi bi-star-fill footer-contact"></i> <i
                                class="bi bi-star-fill footer-contact"></i> <i
                                class="bi bi-star-fill footer-contact"></i> <i
                                class="bi bi-star-fill footer-contact"></i></div>
                        <p class="testimonial-user-dtls">The SMM Course was insightful. I learned valuable
                            strategies for engaging in social media campaigns. Highly recommended for anyone in
                            digital marketing.</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="testmonial_box">
                    <div class="item test-main-boxshow">

                        <div class="testmonial-user-name">
                            <h5>Bhuvnesh Sharma</h5>
                            <p>Graphic Design and Animation</p>
                        </div>
                        <div class="stars"><i class="bi bi-star-fill footer-contact"></i> <i
                                class="bi bi-star-fill footer-contact"></i> <i
                                class="bi bi-star-fill footer-contact"></i> <i
                                class="bi bi-star-fill footer-contact"></i> <i
                                class="bi bi-star-fill footer-contact"></i></div>
                        <p class="testimonial-user-dtls">The Graphic Design and Animation course was a game-changer
                            for me. Expert instructors and comprehensive curriculum honed my skills. I now feel
                            confident in my abilities to create captivating visuals and animations. Highly
                            recommend!</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="testmonial_box">
                    <div class="item test-main-boxshow">

                        <div class="testmonial-user-name">
                            <h5>Lavina Sawlani</h5>
                            <p>English spoken</p>
                        </div>
                        <div class="stars"><i class="bi bi-star-fill footer-contact"></i> <i
                                class="bi bi-star-fill footer-contact"></i> <i
                                class="bi bi-star-fill footer-contact"></i> <i
                                class="bi bi-star-fill footer-contact"></i> <i
                                class="bi bi-star-fill footer-contact"></i></div>
                        <p class="testimonial-user-dtls">The classes were well-structured and provided a supportive
                            environment for improving my spoken English skills.</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="testmonial_box">
                    <div class="item test-main-boxshow">

                        <div class="testmonial-user-name">
                            <h5>Gunjan Gupta</h5>
                            <p>English language skills</p>
                        </div>
                        <div class="stars"><i class="bi bi-star-fill footer-contact"></i> <i
                                class="bi bi-star-fill footer-contact"></i> <i
                                class="bi bi-star-fill footer-contact"></i> <i
                                class="bi bi-star-fill footer-contact"></i> <i
                                class="bi bi-star-fill footer-contact"></i></div>
                        <p class="testimonial-user-dtls">I would confidently recommend BBSMIT to anyone looking to
                            improve their English language skills for academic, professional, or personal growth.
                        </p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="testmonial_box">
                    <div class="item test-main-boxshow">

                        <div class="testmonial-user-name">
                            <h5>Kuntal Santra</h5>
                            <p>Digital Marketing Course</p>
                        </div>
                        <div class="stars"><i class="bi bi-star-fill footer-contact"></i> <i
                                class="bi bi-star-fill footer-contact"></i> <i
                                class="bi bi-star-fill footer-contact"></i> <i
                                class="bi bi-star-fill footer-contact"></i> <i
                                class="bi bi-star-fill footer-contact"></i></div>
                        <p class="testimonial-user-dtls">This is best institute for digital marketing in Jaipur i
                            have learn professional courses from here.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Our Testimonials -->

<!-- -------------------------------Explore Blogs----------------------------------------- -->
<section class="lastest-news-section pt-5 pb-5">
    <div class="text-center">
        <div>
            <span class="process-subtitle">#Blogs</span>
            <img src="assets/images/line.png" alt="line" class="img-fluid vector-line">
        </div>
        <h2 class="explr-blog-title">Explore Our Blog</h2>
    </div>

    <div class="container">
        <div class="row position-relative">

            <div class="swiper blogsld">                
                <div class="swiper-wrapper">

                    {{-- start Blog --}}
                    @foreach($blog as $blogs)
                    <div class="swiper-slide">
                        <div class="explore-our-blogbox mt-3">
                            <div class="text-center"><img
                                    src="{{url('uploads/'.$blogs->image)}}"
                                    alt="blog-img" class="blog-main-image"></div>
                            <div class="blog-description     text-start">
                                <span>{{$blogs->title}}</span>
                                <h5>{{$blogs->short_des}}</h5>

                                <div class="d-flex ">
                                    <div><img src="/assets/images/uhublogo.png"
                                            alt="user" class="user-main-imageshow"></div>
                                    <div class="user-blog-name">Unihub</div>
                                </div>
                            </div>
                            <a href="{{url('/')}}"
                                class="blog_btn_go">
                                <div class="mt-xl-5"><img src="https://www.bbsmituni.com/assets/images/Link.png"
                                        alt="link-icon" class="img-fluid"></div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                   
                    {{-- end Blog --}}


                </div>

            </div>
            <div class="swiper-pagination"></div>

        </div>
        <div class="col-md-12 pt-4">


            <a href="https://www.bbsmituni.com/blogs">
                <div class="text-center"><button class="view-blog-button">View All Blogs</button></div>
            </a>
        </div>
        <div class="col-md-1"></div>
    </div>
    </div>
</section>
<!-- -------------------------------Explore Blogs----------------------------------------- -->
@endsection