@extends('dashboard.layout.main')
@section('main-containers')
  
  <!-- -------------------------------------Blog Start---------------------------------------- -->
  <div class="p-4">
    <ol class="d-flex" style="list-style:none">
        <li class="breadcrumb-item"><a href="#"> <b>Home &nbsp</b></a></li>
        <li class="breadcrumb-item active" aria-current="page"><b>&nbsp Blog</b></li>
    </ol>
</div>

<!-- Main Blog Post Content -->
<section class="blog_post_container">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-xl-9">
                <div class="main_blog_post_content">
                    <div class="row">

{{-- start blog --}}
@foreach ($blogList as $blogs)
    

                        <div class="col-sm-6 col-lg-6 col-xl-6">
                            <div class="blog_grid_post mb30">

                                <a href="#">
                                    <div class="thumb">
                                        <img class="img-fluid" src="{{url('uploads/'.$blogs->image)}}" alt="{{$blogs->alt}}">
                                        <div class="tag">{{$blogs->blogCategory->name}}</div>
                                        <div class="post_date">
                                            <h2>{{ \Carbon\Carbon::parse($blogs->created_at)->format('d') }}</h2> <span>{{ \Carbon\Carbon::parse($blogs->created_at)->format('F') }}</span></div>
                                    </div>
                                </a>
                                <a href="{{url('blog-details/'.$blogs->slug)}}" class="hover-blog-title">
                                    <h4 class="hover-blog-title mt-2"><b>{{$blogs->title}}</b> </h4>
                                    <p>{{$blogs->short_des}}</p>
                                    <!-- </div> -->

                                    <h5 class="text-primary">Read More <i class="bi bi-arrow-right"></i></h5>
                                </a>

                            </div>

                        </div>

                        @endforeach
                        {{-- end blog --}}

               

                       

                       
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mbp_pagination mt20">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-xl-3 pl10 pr10">
                <div class="main_blog_post_widget_list">
                    <div class="blog_search_widget">

                        {{-- <form action="https://www.bbsmituni.com/search-blog" method="GET">
                            <div class="input-group mb-3">
                                <input type="search" class="form-control" name="search" placeholder="Search Here" ria-label="Search" aria-describedby="search-addon" value="" />
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button" id="button-addon2"><span class="flaticon-magnifying-glass"></span></button>
                                </div>
                            </div>
                        </form> --}}

                    </div>
                    <div class="blog_category_widget">
                        <ul class="list-group">
                            <h4 class="title">Category</h4>


                            @foreach ($blogCategory as $blogCategorys)
                                
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <a href="{{url('blog/'.$blogCategorys->slug)}}" class="hover-tab-link"> {{$blogCategorys->name}} </a><span class="float-right">{{$blogCategorys->blogs_count}}</span>
                            </li>
                            @endforeach
                         
                          
                           
                           
                           
                           
                          
                         

                        </ul>
                    </div>
                    <div class="blog_recent_post_widget media_widget">
                        <h4 class="title">Recent Posts</h4>
                      
                     @foreach ($ressentList as $ressentLists)
                         
                     <div class="media">
                         <div class="hover-tab-link">
                             <h5 class="mt-0 post_title"> <a href="{{url('blog-details/'.$ressentLists->slug)}}">{{$ressentLists->title}}</a></h5>
                             <a href="#">{{date('F d Y',strtotime($ressentLists->created_at))}}.</a>
                            </div>
                        </div>
                        
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
<!-- ------------------------------------------Blog End------------------------------------------------------ -->