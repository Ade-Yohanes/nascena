@extends('frontend.layout.master')

@section('content')

<main class="bg_gray">

    <div class="container margin_30">
        <div class="page_header">
            <div class="breadcrumbs">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Category</a></li>
                    <li>Page active</li>
                </ul>
            </div>
            <h1>Package</h1>
        </div>
        <!-- /page_header -->
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="owl-carousel owl-theme prod_pics magnific-gallery">
                    @foreach($package_detail as $index => $item )

                    @if($item->image_1)

                 
                    <div class="item">
                        <a href="{{ asset($item->image_1) }}" title="{{$item->package_name}}" data-effect="mfp-zoom-in"><img src="{{ asset($item->image_1) }}" alt=""></a>
                    </div>
                    @endif


                    @if($item->image_2)

                    <div class="item">
                        <a href="{{ asset($item->image_2) }}" title="{{$item->package_name}}" data-effect="mfp-zoom-in"><img src="{{ asset($item->image_2) }}" alt=""></a>
                    </div>
                    @endif

                    @if($item->image_3)

                    <div class="item">
                        <a href="{{ asset($item->image_3) }}" title="{{$item->package_name}}" data-effect="mfp-zoom-in"><img src="{{ asset($item->image_3) }}" alt=""></a>
                    </div>
                    @endif

                    @if($item->image_4)

                    <div class="item">
                        <a href="{{ asset($item->image_4) }}" title="{{$item->package_name}}" data-effect="mfp-zoom-in"><img src="{{ asset($item->image_4) }}" alt=""></a>
                    </div>
                    @endif

                    @if($item->image_5)

                    <div class="item">
                        <a href="{{ asset($item->image_5) }}" title="{{$item->package_name}}" data-effect="mfp-zoom-in"><img src="{{ asset($item->image_5) }}" alt=""></a>
                    </div>
                    @endif

                    @if($item->image_6)

                    <div class="item">
                        <a href="{{ asset($item->image_6) }}" title="{{$item->package_name}}" data-effect="mfp-zoom-in"><img src="{{ asset($item->image_6) }}" alt=""></a>
                    </div>
                    @endif



                    @endforeach



                    <!-- /item -->
                    {{-- <div class="item">
                        <a href="{{asset('assets/img/products/shoes/product_detail_2.jpg')}}" title="Photo title" data-effect="mfp-zoom-in"><img src="{{asset('assets/img/products/product_placeholder_detail_2.jpg')}}" data-src="{{asset('assets/img/products/shoes/product_detail_2.jpg')}}" alt="" class="owl-lazy"></a>
                    </div> --}}
                    <!-- /item -->
                </div>
                <!-- /carousel -->
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
    <div class="container margin_30">
        {{-- <div class="page_header">
            <div class="breadcrumbs">
                <ul>
                    <li><a href=" {{url('/')}} ">Home</a></li>
                    <li><a href=" {{url('/category_all')}} ">Category</a></li>
                </ul>
            </div>
        </div> --}}
        <!-- /page_header -->
        <div class="row ">
            <div class="col-lg-9">
                <div class="singlepost">

                 
                        
                   
                 {{-- {{asset('assets/img/blog-single.jpg')}} --}}
                    {{-- <figure><img alt="" class="img-fluid" src=" {{ asset($pkgd->image_1)  }} "></figure> --}}

                    <div class="all">
                    
                        
                    
    
                    </div>
                    @foreach ($package_detail as $pkgd)

                    <h1>{{$pkgd->package_name }}</h1>
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

                        <p> {!! $pkgd->description !!} </p>
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
                    
                        {{-- <hr> --}}

                     <div class="widget-title ">
                        {{-- <div class="main_title "> --}}
                            <h2 class="comments-list">Package</h2>
                            {{-- <span >EXPERIENCE</span> --}}
                            {{-- <p>Cum doctus civibus efficiantur in imperdiet deterruisset</p> --}}
                        {{-- </div> --}}
                        {{-- <div class="row small-gutters categories_grid"> --}}
                            {{-- <div class="col-sm-12 col-md-6"> --}}
                                    <div class="row small-gutters mt-md-0 mt-sm-2 categories_grid ">
                                        {{-- @dd($experians) --}}

                                        @foreach ($package_list as $pkgdl)
                    
                                        <div class="col-sm-12 mt-sm-2">
                                            <a href="{{ url('/package/'. $pkgdl->slug ) }} " >
                                                {{-- Link image {{asset('assets/img/Nascena-service/rotating-equitmen.jpg')}} --}}
                                                <img src="{{ asset($pkgdl->image_1) }}" data-src="{{ asset($pkgdl->image_1) }}" alt="" class="img-fluid lazy">
                                                <div class="wrapper ">
                                                    <h2>{{ $pkgdl->package_name }}</h2>
                                                    
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
    {{-- </div> --}}


    {{-- <div class="bg_gray container-fluid ">
        <div class=" margin_60_35 ">
            <div class="main_title">
                <h2>Client</h2>
                <span>CLIENT</span>
            </div>
    
            <div id="brands" class="owl-carousel owl-theme">
                
                    @foreach ($client as $item)
           
                <div class="item">
                    <a href=""><img src="{{ asset($item->logo) }}" data-src="{{ asset($item->logo) }}" alt="" class="owl-lazy"></a>

                </div><!-- /item -->
                @endforeach
                
            </div><!-- /carousel -->
    
        </div><!-- /container -->
    
    </div> --}}
    <!-- /bg_gray -->

</main>
<!--/main-->




@endsection