@extends('dashboard.layout.main')
@section('main-containers')



<!-- -------------------------------------Contact us Start---------------------------------------- -->
<!-- Inner Page Breadcrumb -->
{{-- <section class="inner_page_breadcrumb contact_banner">
    <div class="container">
        <div class="row">
            <!-- <div class="col-xl-6 offset-xl-3 text-center">
      <div class="breadcrumb_content">
        <h4 class="breadcrumb_title">Contact Us</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contact us</li>
        </ol>
      </div>
    </div> -->
        </div>
    </div>
</section> --}}



<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 contact-page-location">
                <div class="text-center"><i class="bi bi-geo-alt-fill" style="font-size:40px"></i>
                    <h6 class="mt-3" style="font-size:20px;font-weight:500"><b>Our Location</b></h6>
                    <p>Gurukripa Enclave, Beside Hotel Raas Mahal, <br>Near Old Ramgarh Mod Busstand Jaipur, Rajasthan, 302002</p>
                </div>
                <div class="text-center"><i class="bi bi-telephone-fill" style="font-size:40px"></i>
                    <h6 class="mt-3" style="font-size:20px;font-weight:500"><b>Our Numbers</b></h6>
                    <p>Mobile: <a href="tel:+91 98287 49889">+91 98287 49889 </a></p>
                    <p>Mobile: <a href="tel:+91 72400 12831">+91 72400 12831 </a></p>
                </div>

                <div class="text-center"><i class="bi bi-envelope-paper-fill" style="font-size:40px"></i>
                    <h6 class="mt-3" style="font-size:20px;font-weight:500"><b>Our Email</b></h6>
                    <p></p>
                    <p><a href="mailto:info@bbsmituni.com">info@bbsmituni.com</a></p>

                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row pb-4">
            <div class="col-md-6 mt-4">
                <form id="contact_form"  action="" style="background-color:white;padding:10px;box-shadow:2px 2px 40px 5px #E6EDFE;border-radius:10px;border:solid 1px #043BB3;">
                
                    <h5 style="font-size:25px;font-weight:500"><b>Send Message</b></h5>
                    <label for="contact_name" class="form-label"><b>Name</b></label>
                    <input type="text" class="form-control form-border shadow-sm" id="contact_name" name="contact_name" style="padding:8px"><br>
                    <label for="contact_email" class="form-label"><b>Email address</b></label>
                    <input type="email" class="form-control form-border shadow-sm" id="contact_email" name="contact_email" style="padding:8px"><br>

                    <label for="contact_number" class="form-label"><b>Phone Number</b></label>
                    <input type="text" class="form-control form-border shadow-sm" id="contact_number" name="contact_number" maxlength="10" style="padding:8px" oninput="this.value = this.value.replace(/[^0-9+.]/g, '').replace(/(\..*?)\..*/g, '$1');"><br>
                    <label for="Message" class="form-label"><b>Message</b></label>
                    <textarea class="form-control form-border shadow-sm" name="contact_message" id="contact_message" rows="8" style="padding:8px"></textarea><br>
                    <div class="mt-3"><button class="px-5 py-2 contact-button">Send</button></div>
                </form>
            </div>

            <div class="col-md-6 mt-4">
                <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3556.549732400763!2d75.8375939!3d26.9494854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db116f0ddf9b7%3A0x6d42b8919f551433!2sRamgarhmode%2C%20Parasrampuri%2C%20Jaipur%2C%20Rajasthan%20302002!5e0!3m2!1sen!2sin!4v1665224618098!5m2!1sen!2sin" width="100%" height="600" style="border:0;border-radius:13px" class="shadow" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d7113.718496536404!2d75.83128859306883!3d26.939676256524148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d26.9357847!2d75.8336128!4m5!1s0x396db13bcedbbe75%3A0x70ce72c129b99f99!2sbbsmit!3m2!1d26.9435383!2d75.8382558!5e0!3m2!1sen!2sin!4v1701085925094!5m2!1sen!2sin"
                    width="100%" height="600" style="border:0;border-radius:13px" class="shadow h-100" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>

<!-- ------------------------------------------Contact us End------------------------------------------------------ -->










@endsection