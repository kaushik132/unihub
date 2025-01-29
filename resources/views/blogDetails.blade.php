@extends('dashboard.layout.main')
@section('main-containers')


  <!-- -------------------------------------Blog Details Start---------------------------------------- -->
    <style>
        .hover-tab-link:hover {
            text-decoration: underline;
            color: #273291;
        }
    </style>

<div class="p-4">
    <ol class="d-flex" style="list-style:none">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Blog detail/{{$blogData->title}}</li>
    </ol>
</div>

<!-- Main Blog Post Content -->
<section class="blog_post_container">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-xl-9">
                <div class="main_blog_post_content">
                    <div class="mbp_thumb_post" id="training-details">
                        <div class="thumb">
                            <img class="img-fluid" src="https://www.bbsmituni.com/storage/images/Your paragraph text (2).jpg" alt="8 Easy Ways to Become Excellent at Spoken English">
                            <div class="tag">English Proficiency Test</div>
                            <div class="post_date">
                                <h2>30</h2> <span>November</span></div>
                        </div>
                        <div class="details blog-main-details">
                            <h1>{{$blogData->title}}</h1>

                            <ul class="post_meta">
                                <li class="list-text"><a href="#"><i class="fa-solid fa-user"></i> BBSMIT</a></li>
                                <li class="list-text"><a href="#"><i class="fa-solid fa-message"></i> 7 comments</a></li>
                            </ul>

                            <div class="blog-list-dotsvw">
                                <h2><strong>Introduction</strong></h2>

                                <p>{!!$blogData->content!!}</p>

                                
                            </div>



                        </div>
                        <ul class="blog_post_share">
                            <li class="list-text">
                                <p>Share</p>
                            </li>
                            <li class="list-text"><a href="#" target="_blank" id="facebook-btn"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome  - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z" aria-hidden="true"/></svg></a></li>

                            <li class="list-text"><a href="#" target="_blank" id="twitter-btn"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome  - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z" aria-hidden="true"/></svg></a></li>
                            <li class="list-text"><a href="#" target="_blank" id="gmail-btn"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome  - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z" aria-hidden="true"/></svg></a></li>
                            <li class="list-text"><a href="#" target="_blank" id="linkedin-btn"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome  - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M100.3 448H7.4V148.9h92.9zM53.8 108.1C24.1 108.1 0 83.5 0 53.8a53.8 53.8 0 0 1 107.6 0c0 29.7-24.1 54.3-53.8 54.3zM447.9 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448z" aria-hidden="true"/></svg></a></li>
                            <li class="list-text"><a href="#" target="_blank" id="socialButtonsContainer"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"  class="bi bi-whatsapp" viewBox="0 0 16 16"><path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" aria-hidden="true"/></svg></a></li>
                        </ul>
                    </div>


                </div>
            </div>

           

            <div class="col-lg-4 col-xl-3 pl10 pr10">
                <div class="main_blog_post_widget_list">
                    <div class="blog_search_widget">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Search Here" aria-label="Recipient's username" aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button" id="button-addon2"><span class="flaticon-magnifying-glass"></span></button>
                            </div>
                        </div>
                    </div>
                    <div class="blog_category_widget">
                        <ul class="list-group">
                            <h4 class="title">Category</h4>

                            <li class="list-group-item d-flex justify-content-between align-items-center hover-tab-link">
                                <a href="#"> Digital Marketing </a><span class="float-right">28</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center hover-tab-link">
                                <a href="#"> Web Design </a><span class="float-right">2</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center hover-tab-link">
                                <a href="#"> Web Development </a><span class="float-right">1</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center hover-tab-link">
                                <a href="#"> Graphic Design </a><span class="float-right">5</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center hover-tab-link">
                                <a href="#"> Programming Languages </a><span class="float-right">10</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center hover-tab-link">
                                <a href="#"> App Development </a><span class="float-right">1</span>
                            </li>

                        </ul>
                    </div>
                    <div class="blog_recent_post_widget media_widget">
                        <h4 class="title">Recent Posts</h4>
                        <div class="media">
                            <div class="hover-tab-link">
                                <h5 class="mt-0 post_title"> <a href="#">8 Easy Ways to Become Excellent at Spoken English  </a></h5>
                                <a href="#">November 30 2024.</a>
                            </div>
                        </div>
                        <div class="media">
                            <div class="hover-tab-link">
                                <h5 class="mt-0 post_title"> <a href="#">How to Choose Your Courses in College  </a></h5>
                                <a href="#">November 25 2024.</a>
                            </div>
                        </div>
                        <div class="media">
                            <div class="hover-tab-link">
                                <h5 class="mt-0 post_title"> <a href="#">10 Useful Strategies to Help Students Improve Their Creativity  </a></h5>
                                <a href="#">November 22 2024.</a>
                            </div>
                        </div>
                    </div>
                    <div class="blog_tag_widget">
                        <h4 class="title">Tags</h4>
                        <ul class="tag_list">
                            <li class="list-inline-item"><a href="#">Photoshop</a></li>
                            <li class="list-inline-item"><a href="#">Sketch</a></li>
                            <li class="list-inline-item"><a href="#">Beginner</a></li>
                            <li class="list-inline-item"><a href="#">UX/UI</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- ------------------------------------------Blog Details End------------------------------------------------------ -->

@endsection