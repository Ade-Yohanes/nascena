@extends('Frontend.layout.master')

@section('content')
<main>
    <div id="carousel-home">
        <div class="owl-carousel owl-theme">
           
            <!--/owl-slide-->
            <div class="owl-slide cover" style="background-image: url(  ); ">
                <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(255, 255, 255, 0.5)">
                    <div class="container">
                        <div class="row justify-content-center justify-content-md-start">
                            <div class="col-lg-12 static">
                                <div class="slide-text text-center black">
                                    <h2 class="owl-slide-animated owl-slide-title"> Any part AnyWhere On Time  </h2>
                                    <p class="owl-slide-animated owl-slide-subtitle">
                                       Part For Power, Construction, Mining and Gas Compression Equipment. 
                                    </p>
                                    <div class="owl-slide-animated owl-slide-cta"><a class="btn_1" 
                                        href="{!! url('/quote') !!}"
                                        role="button"> Request Now </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/owl-slide-->
            </div>
        </div>
        <div id="icon_drag_mobile"></div>
    </div>
    <!--/carousel-->

    
    <!--/banners_grid -->

    <div class="bg_white">
        <div class="container margin_60_35">
            <div class="main_title">
                <h2>PRODUCT</h2>
                <span>PPRODUCT</span>
                {{-- <p>Cum doctus civibus efficiantur in imperdiet deterruisset</p> --}}
            </div>
        

            <div class="row small-gutters">
                @foreach ($data as $item)
                <div class="col-6 col-md-4 col-xl-3">
                    
                    <div class="grid_item">
                        
                        <figure>
                            {{-- <span class="ribbon off">-30%</span> --}}
                            <a href="{{ url('/product/'. $item->slug) }}">
                                <img class="img-fluid lazy" src="img/products/product_placeholder_square_medium.jpg" data-src="{{ $item->product_pic }}" alt="">
                                <img class="img-fluid lazy" src="img/products/product_placeholder_square_medium.jpg" data-src="{{ $item->product_pic }}" alt="">
                            </a>

                        </figure>
                        {{-- <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div> --}}
                        <a href="{{ url('/product/'. $item->slug) }}">
                            <h3>{{ $item->product_name }}</h3>
                        </a>
                        

                        {{-- <div class="price_box">
                            <span class="new_price">Rp {{number_format($item->price)}}  </span>
                            {{-- <span class="old_price">$60.00</span> --}}
                        {{-- </div> --}} 

                        <div  >
                            <span > <a href=" {{ url('/product/'. $item->slug) }} " class="btn_1">Product Detail</a></span>
                        </div>
                        
                        {{-- <ul>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                        </ul> --}}
                    </div>
                    <!-- /grid_item -->
                </div>
                @endforeach          

        
    </div>
    <div class="container margin_60_35">
        <div class="main_title">
            <h2>BRAND</h2>
            <span>BRAND</span>
            {{-- <p>Cum doctus civibus efficiantur in imperdiet deterruisset</p> --}}
        </div>

        <div class="owl-carousel owl-theme products_carousel">
    @foreach ($brand as $item)

            <div class="item">
                <div class="grid_item">
                    {{-- <span class="ribbon new">New</span> --}}
                    
                    <figure>
        
                        <a href="{{ url('/brand/'. $item->slug ) }}">
                            

                            <img class="owl-lazy" src="{{ $item->logo }}" data-src="{{ $item->logo }}" alt="">
                        </a>
                    </figure>
                    {{-- <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div> --}}
                    <a href="{{ url('/brand/'. $item->slug ) }}">
                        <h3>{{ $item->name_brand }}</h3>
                    </a>

                    <div class="price_box">
                        {{-- <span class="new_price">$110.00</span> --}}
                    </div>
                 
                    <ul>
                        <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                        <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
                        <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                    </ul>

                </div>
                <!-- /grid_item -->

            </div>
            <!-- /item -->

     @endforeach  

            <!-- /item -->
           
        </div>
        <!-- /products_carousel -->

    </div>
    <!-- /container -->

    <!-- /row -->
</div>
<!-- /container -->
        <div class="container margin_60_35">
    
            <div class="main_title">
                <h2>EXPERIENCE</h2>
                <span>EXPERIENCE</span>
                {{-- <p>Cum doctus civibus efficiantur in imperdiet deterruisset</p> --}}
            </div>
    
            <div class="row small-gutters categories_grid">
                
                    
    
                <div class="col-sm-12 col-md-6">
    
                    @foreach ($experian->chunk(3) as $experian)
    
    
                    <div class="row small-gutters mt-md-0 mt-sm-2">
    
                        @foreach ($experian as $ex)
                        {{-- @dd($experian) --}}
    
                        <div class="col-sm-12 mt-sm-2">
                            <a href=" {{ url('/experience/'. $ex->slug ) }} " >
                                {{-- Link image {{asset('assets/img/Nascena-service/rotating-equitmen.jpg')}} --}}
                                <img src="{{ asset($ex->image)  }}" data-src="{{ asset($ex->image)  }}" alt="" class="img-fluid lazy">
                                <div class="wrapper ">
                                    <h2>{{ $ex->project_name }}</h2>
                                    
                                    {{-- <p>120 Products</p> --}}
                                </div>
                            </a>
                        </div>
                        {{-- {{-- <div class="col-sm-12 mt-sm-2">
                            <a >
                                <img src="{{asset('assets/img/Nascena-service/Bearings-Power-Transmission.jpg')}}" data-src="{{asset('assets/img/Nascena-service/Bearings-Power-Transmission.jpg')}}" alt="" class="img-fluid lazy">
                                <div class="wrapper">
                                    <h2>Bearings and Power Transmission</h2>
                                    {{-- <p>120 Products</p> --}}
                                {{-- </div>
                            </a>
                        </div>  --}}
    
                        {{-- <div class="col-sm-12 mt-sm-2">
                            <a >
                                <img src="{{asset('assets/img/Nascena-service/metal-working.jpg')}}" data-src="{{asset('assets/img/Nascena-service/metal-working.jpg')}}" alt="" class="img-fluid lazy">
                                <div class="wrapper">
                                    <h2>Metal Working</h2>
                                    {{-- <p>120 Products</p> --}}
                                {{-- </div>
                            </a>
                        </div> --}} 
                        @endforeach
    
                    </div>
            @endforeach
                </div>
            </div>
        </div>
    </div>
     <div class="container margin_60_35">
        <div class="main_title">
            <h2>SERVICE</h2>
            <span>SERVICE</span>
            {{-- <p>Cum doctus civibus efficiantur in imperdiet deterruisset</p> --}}
        </div>

        <div class="row small-gutters categories_grid">
            <div class="col-sm-12 col-md-6">
                <a >
                    <img src="{{asset('assets/img/Nascena-service/service2/rotation-equip.jpg')}}" data-src="{{asset('assets/img/Nascena-service/service2/rotation-equip.jpg')}}" alt="" class="img-fluid lazy">
                    <div class="wrapper">
                        <h2>Rotating Equipment</h2>
                        {{-- <p>115 Products</p> --}}
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="row small-gutters mt-md-0 mt-sm-2">
                    <div class="col-sm-6">
                        <a >
                            <img src="{{asset('assets/img/Nascena-service/service2/Bearing-and-Transmiter.jpg')}}" data-src="{{asset('assets/img/Nascena-service/service2/Bearing-and-Transmiter.jpg')}}" alt="" class="img-fluid lazy">
                            <div class="wrapper">
                                <h2>Bearings and Power Transmission</h2>
                                {{-- <p>150 Products</p> --}}
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6">
                        <a >
                            <img src="{{asset('assets/img/Nascena-service/service2/Pump-solution2.jpg')}}" data-src="{{asset('assets/img/Nascena-service/service2/Pump-solution2.jpg')}}" alt="" class="img-fluid lazy">
                            <div class="wrapper">
                                <h2>Pump Solutions</h2>
                                {{-- <p>90 Products</p> --}}
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-12 mt-sm-2">
                        <a >
                            <img src="{{asset('assets/img/Nascena-service/service2/metal_working.jpg')}}" data-src="{{asset('assets/img/Nascena-service/service2/metal_working.jpg')}}" alt="" class="img-fluid lazy">
                            <div class="wrapper">
                                <h2>Metal Working</h2>
                                {{-- <p>120 Products</p> --}}
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
        <!--/categories_grid-->
    </div>
    <!-- /container -->
        
   
            
    {{-- <div class="featured lazy" data-bg="url(img/featured_home.jpg)">
        <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
            <div class="container margin_60">
                <div class="row justify-content-center justify-content-md-start">
                    <div class="col-lg-6 wow" data-wow-offset="150">
                        <h3>Armor<br>Air Color 720</h3>
                        <p>Lightweight cushioning and durable support with a Phylon midsole</p>
                        <div class="feat_text_block">
                            <div class="price_box">
                                <span class="new_price">$90.00</span>
                                <span class="old_price">$170.00</span>
                            </div>
                            <a class="btn_1" href="listing-grid-1-full.html" role="button">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /featured --> --}}

    
    

    <div class="bg_white">
        <div class="container margin_60_35">
            <div class="main_title ">
                <h2>Client</h2>
                <span>CLIENT</span>
                {{-- <p>Cum doctus civibus efficiantur in imperdiet deterruisset</p> --}}
            </div>
        </div>
    </div>
    
    <div class="bg_gray ">
        <div class="container margin_60_35">
            <div id="brands" class="owl-carousel owl-theme">
                
                @foreach ($client as $item)
                <div class="item">

                    
                    <a href=""><img src="{{$item->logo}}" data-src="{{$item->logo}}" alt="" class="owl-lazy"></a>

                </div><!-- /item -->
                @endforeach

            </div><!-- /carousel -->
     
        </div><!-- /container -->
    
    </div>
    <!-- /bg_gray -->
        
    <!-- /container -->
</main>
<!-- /main -->

    
@stop
