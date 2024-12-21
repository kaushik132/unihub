@extends('dashboard.layout.main')
@section('main-containers')
 <!-- -------------------------------------About us Start---------------------------------------- -->

    <!-- Inner Page Breadcrumb -->
    <section class="inner_page_breadcrumb about_banner">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 text-center">
                </div>
            </div>
        </div>
    </section>
    <!-- <section>
        <div>
            <img src="https://dcbuttarkashi.com/wp-content/uploads/2020/05/aboutus.jpg" alt="banner" class="img-fluid w-100">
        </div>
    </section> -->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 about_area pt-5">

                    <!-- <h1 style="text-align:center;">About Us</h1> -->
                    <h4 class="para-tag">A2 Groups have a special place for BBSMIT because of a very particular reason. The Founder of BBSMIT was deeply touched by the loss of his father, a man who, despite his low literacy, devoted his life to giving his child every educational
                        chance possible. This is where BBSMIT got its start. This close relationship highlights the value of education and forms the basis for BBSMIT's current position.</h4> <br>
                    <h3 class="heading-2 mt-0">Our Goal</h3>
                    <h4 style="text-size:10px" class="para-tag">BBSMIT company's vision is centred on our unwavering dedication to providing students with an affordable education. Our mission is to bring the idea that everyone should have access to high-quality education to reality by providing
                        complete learning opportunities. </h4><br>
                    <h3 class="heading-2 mt-0">Our Approach</h3>
                    <h4 class="para-tag">What sets BBSMIT apart is our unique approach. Our dedicated team of employees, who also serve as educators at the BBSMIT institute during their office hours, brings a distinct blend of practical knowledge and corporate expertise to
                        our students. The focus on distance learning complements our in-person offerings, ensuring flexibility and a tailored educational experience.</h4><br>
                    <h3 class="heading-2 mt-0">Real-Time Learning</h3>
                    <h4 class="para-tag">BBSMIT goes beyond traditional education by offering real-time, practical experiences to our students across various educational domains. Our team, comprising professionals with hands-on industry experience, imparts valuable corporate
                        knowledge that students might not find elsewhere. </h4><br>
                    <h3 class="heading-2 mt-0">Expanding Horizons</h3>
                    <h4 class="para-tag">In our ongoing search for growth, BBSMIT has expanded its reach by collaborating with nine universities. We now extend distance learning opportunities not only to new admissions but also to our dedicated employees seeking to further
                        their education. The spectrum of education covers a diverse range, including nursing, MBA, and more.</h4>
                    <br>
                    <h4 class="para-tag">At BBSMIT, we view education not just as a curriculum but as a transformative journey. Our commitment to quality, accessibility, and real-world applicability stands as proof of our founder's vision and the values we uphold as an encouragement
                        in education.</h4>


                </div>
            </div>
        </div>
    </section>

<!-- ------------------------------------------About us End------------------------------------------------------ -->
    <div class="popup-overlay" id="popupOverlay"></div>

    <div class="popup popup_rs" id="popupBox">

        <div class="rs_popup_box">
            <div class="row">
                <div class="col-xl-12">
                    <form id="rscit_form" action="https://www.bbsmituni.com/rscitfromsubmit" method="POST">
                        <input type="hidden" name="_token" value="PvOzviKyeewRsBDUBOkGxtKoHfZn1kNQCZ8V2w2C">
                        <div class="rs_popup_inner">
                            <span class="close_rs" id="close_rs">x</span>
                            <img src="assets/images/uhublogo.png" alt="">
                            <h5>RS-CIT Course Enrollment Form </h5>

                            <div class="form_box">
                                <label for="name">Name</label>
                                <input name="name" id="name" type="text" placeholder="Full Name"
                                    oninput="this.value = this.value.replace(/[^A-Za-z+.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                            </div>

                            <div class="form_box">
                                <label for="email">Email Id</label>
                                <input name="email" id="email" type="email" placeholder="Email Id">
                            </div>

                            <div class="form_box">
                                <label for="number">Contact Number</label>
                                <input name="number" id="number" type="text" maxlength="10" placeholder="Number"
                                    oninput="this.value = this.value.replace(/[^0-9+.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                            </div>
                            <div class="form_box">
                                <label for="message">Message</label>
                                <textarea name="message" row="10" id="message"></textarea>
                            </div>
                            <div class="form_box pt-3 text-start">
                                <button class="btn" style="background-color: #273291;color:#fff !important"
                                    type="submit">Submit</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <style>
        .iso-certificate {
            width: 100%;
            max-width: 100px;
            border-radius: 10px;
            border: solid 1px #FFDD00;
            background-color: #fff;
            padding: 5px
        }
    </style>


    <div class="g-review-fixed" id="review-fixed">
        <a href="https://maps.app.goo.gl/CcX1TaUhrYZnJTCz7" target="_blank">
            <img src="https://www.bbsmituni.com/images/google-review.png" alt="google review">
        </a>
    </div>




@endsection