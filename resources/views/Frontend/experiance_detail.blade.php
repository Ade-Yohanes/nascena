@extends('frontend.layout.master')

@section('content')


<main class="bg_gray">
    <div class="container margin_30">
        <div class="page_header">
            <div class="breadcrumbs">
                <ul>
                    <li><a href=" {{url('/')}} ">Home</a></li>
                    <li><a href=" {{url('/category_all')}} ">Category</a></li>
                    {{-- <li>Page active</li> --}}
                </ul>
            </div>
        </div>
        <!-- /page_header -->
        <div class="row">
            <div class="col-lg-9">
                <div class="singlepost">

                 @foreach ($experian_details as $exd)
                        
                   
                 {{-- {{asset('assets/img/blog-single.jpg')}} --}}
                    <figure><img alt="" class="img-fluid" src=" {{ asset($exd->image)  }} "></figure>

                    <div class="feat">
                        <div class="container  ">
                            <ul>
                                <li>
                                    <div class="box">
                                        <i class="ti-medall"></i>
                                        <div class="justify-content-center">
                                            <h3> CLIENT </h3>
                                            <h3>{{ $exd->Perusahaan }}</h3>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="box">
                                        <i class="ti-time"></i>
                                        <div class="justify-content-center">
                                            <h3> DATE</h3>
                                            <h3>{{ date('m-Y', strtotime ($exd->date))}}</h3>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="box">
                                        <i class="ti-shopping-cart"></i>
                                        <div class="justify-content-center">
                                            <h3>PRODUCT</h3>
                                            <h3> {{$exd->product_name }} </h3>
                                           
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--/feat-->

                    <h1>{{$exd->project_name }}</h1>
                    {{-- <div class="postmeta">
                        <ul>
                            <li><a href="#"><i class="ti-folder"></i> Category</a></li>
                            <li><i class="ti-calendar"></i> 23/12/2015</li>
                            <li><a href="#"><i class="ti-user"></i> Admin</a></li>
                            <li><a href="#"><i class="ti-comment"></i> (14) Comments</a></li>
                        </ul>
                    </div> --}}
                    <!-- /post meta -->
                    
                    <div class="post-content">
                        <div class="dropcaps">
                            {{-- <p> {!! $exd->description !!} </p> --}}
                        </div>

                        <p> {!! $exd->description !!} </p>
                    </div>
                    <!-- /post -->
                </div>
                <!-- /single-post -->
               
             @endforeach
                <hr>

               

                
                
            </div>
            <!-- /col -->

         

            <aside class="col-lg-3"> 
                <div class="widget">
                    <div class="bg_white small-gutters mt-md-0 mt-sm-2 ">
                        <div class="container margin_60_35">
                            <div class="row small-gutters mt-md-0 mt-sm-2 categories_grid ">
                        @isset($experian_details)
                        @foreach ($experian_details as $item)
                        <a class=""><img src="{{asset( $item->logo )}}" alt="" class="img-fluid" width="400" height="550"></a>
                        @endforeach
                        
                        @endisset
                        </div>
                        </div>
                    </div>    
                        <hr>

                     <div class="widget-title ">
                        {{-- <div class="main_title "> --}}
                            <h2 class="comments-list">EXPERIENCE</h2>
                            {{-- <span >EXPERIENCE</span> --}}
                            {{-- <p>Cum doctus civibus efficiantur in imperdiet deterruisset</p> --}}
                        {{-- </div> --}}
                        {{-- <div class="row small-gutters categories_grid"> --}}
                            {{-- <div class="col-sm-12 col-md-6"> --}}
                                    <div class="row small-gutters mt-md-0 mt-sm-2 categories_grid ">
                                        {{-- @dd($experians) --}}

                                        @foreach ($experians as $ex)
                    
                                        <div class="col-sm-12 mt-sm-2">
                                            <a href="{{ url('/experience/'. $ex->slug ) }} " >
                                                {{-- Link image {{asset('assets/img/Nascena-service/rotating-equitmen.jpg')}} --}}
                                                <img src="{{ asset($ex->image) }}" data-src="{{ asset($ex->image) }}" alt="" class="img-fluid lazy">
                                                <div class="wrapper ">
                                                    <h2>{{ $ex->project_name }}</h2>
                                                    
                                                    {{-- <p>120 Products</p> --}}
                                                </div>
                                            </a>
                                        </div>
                                        
                                        @endforeach
                    
                                    </div>
        
                            {{-- </div> --}}
                        {{-- </div> --}}
                    </div>
                </div>

                    
                
                <!-- /widget -->
                {{-- <div class="widget">
                    <div class="widget-title">
                        <h4>Latest Post</h4>
                    </div>
                    <ul class="comments-list">
                        <li>
                            <div class="alignleft">
                                <a href="#0"><img src="{{asset('assets/img/blog-5.jpg')}}" alt=""></a>
                            </div>
                            <small>Category - 11.08.2016</small>
                            <h3><a href="#" title="">Verear qualisque ex minimum...</a></h3>
                        </li>
                        <li>
                            <div class="alignleft">
                                <a href="#0"><img src="{{asset('assets/img/blog-6.jpg')}}" alt=""></a>
                            </div>
                            <small>Category - 11.08.2016</small>
                            <h3><a href="#" title="">Verear qualisque ex minimum...</a></h3>
                        </li>
                        <li>
                            <div class="alignleft">
                                <a href="#0"><img src="{{asset('assets/img/blog-4.jpg')}}" alt=""></a>
                            </div>
                            <small>Category - 11.08.2016</small>
                            <h3><a href="#" title="">Verear qualisque ex minimum...</a></h3>
                        </li>
                    </ul>
                </div>
                <!-- /widget -->
                <div class="widget">
                    <div class="widget-title">
                        <h4>Categories</h4>
                    </div>
                    <ul class="cats">
                        <li><a href="#">Food <span>(12)</span></a></li>
                        <li><a href="#">Places to visit <span>(21)</span></a></li>
                        <li><a href="#">New Places <span>(44)</span></a></li>
                        <li><a href="#">Suggestions and guides <span>(31)</span></a></li>
                    </ul>
                </div>
                <!-- /widget -->
                <div class="widget">
                    <div class="widget-title">
                        <h4>Popular Tags</h4>
                    </div>
                    <div class="tags">
                        <a href="#">Food</a>
                        <a href="#">Bars</a>
                        <a href="#">Cooktails</a>
                        <a href="#">Shops</a>
                        <a href="#">Best Offers</a>
                        <a href="#">Transports</a>
                        <a href="#">Restaurants</a>
                    </div>
                </div> --}}
                <!-- /widget -->
            </aside>
            <!-- /aside -->
        </div>
        <!-- /row --> 
        
    <!-- /container -->
    </div>
    <div class="bg_gray container-fluid ">
        <div class=" margin_60_35 ">
            <div class="main_title">
                <h2>Client</h2>
                <span>CLIENT</span>
                {{-- <p>Cum doctus civibus efficiantur in imperdiet deterruisset</p> --}}
            </div>
    
            
            <div id="brands" class="owl-carousel owl-theme">
                
                
                
                    @foreach ($client as $item)
           
                <div class="item">

                    
                    <a href=""><img src="{{ asset($item->logo) }}" data-src="{{ asset($item->logo) }}" alt="" class="owl-lazy"></a>

                </div><!-- /item -->
                @endforeach
                

            </div><!-- /carousel -->
    
        </div><!-- /container -->
    
    </div>
    <!-- /bg_gray -->

</main>
<!--/main-->


@endsection