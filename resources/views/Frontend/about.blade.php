@extends('frontend.layout.master')


@section('content')
    

<main class="bg_gray">
    <div class="container margin_60_35 add_bottom_30">
        <div class="main_title">
            <h2>About Nascena</h2>
            <p>Screw Compressor Packaging.</p>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-5">
                <div class="box_about">
                    <h2>Customized Screw Compressor Packages for Demanding Applications</h2>
                    <p class="lead">Designs and manufactures cost-effective, </p>
                    <p>Customized modular systems and equipment for the oil & gas, renewable energy, petrochemical, 
                        power generation, and industrial applications. We will help you specify a screw-type compression 
                        system for your unique application, 
                        and we will then design and manufacture the package to meet your lead time requirements.</p>
                    <img src="{{asset('assets/img/arrow_about.png')}}" alt="" class="arrow_1">
                </div>
            </div>
            <div class="col-lg-5 pl-lg-5 text-center d-none d-lg-block">
                    <img src="{{asset('assets/img/Nascena-img-source/about-us1.png')}}" alt="" class="img-fluid" width="350" height="268">
            </div>
        </div>
        <!-- /row -->
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-5 pr-lg-5 text-center d-none d-lg-block">
                    <img src="{{asset('assets/img/Nascena-img-source/about-us2.png')}}" alt="" class="img-fluid" width="350" height="268">
            </div>
            <div class="col-lg-5">
                <div class="box_about">
                    <h2>Service</h2>
                    <p class="lead">As a multi-vendor distributor, we'll find the best product for your application needs-not what might meet a sales quota! Personal,</p>
                    <p>As a multi-vendor distributor, we'll find the best product for your application needs-not what might meet a sales quota! Personal, 
                        friendly customer care. No automated systems ... just live, friendly, expert service.
                        If you buy a product and are unhappy with it for any reason, you can return it for a full or partial refund (excludes special orders).
                    </p>
                    <img src="{{asset('assets/img/arrow_about.png')}}" alt="" class="arrow_2">
                </div>
            </div>
        </div>
        <!-- /row -->
        <div class="row justify-content-center align-items-center ">
            <div class="col-lg-5">
                <div class="box_about">
                    <h2>Exceeding Expectations</h2>
                    <p class="lead">In an age when good customer service is hard to find, we go the extra mile to delight our customers and manufacturer partners. </p>
                    <p>Need something we don't sell? We'll find it. Having trouble programming an instrument? 
                        We'll talk you through it. Not sure what you need? We'll lay out the options and help 
                        you make an informed decision no matter how long it takes.</p>
                </div>

            </div>
            <div class="col-lg-5 pl-lg-5 text-center d-none d-lg-block">
                    <img src="{{asset('assets/img/Nascena-img-source/about-us3.png')}}" alt="" class="img-fluid" width="350" height="316">
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
    <hr class="mb-0">

    

    <div class="bg_white">
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
                            <img src="{{ $ex->image }}" data-src="{{ $ex->image }}" alt="" class="img-fluid lazy">
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

            {{-- <div class="col-sm-12 col-md-6">
                <div class="row small-gutters mt-md-0 mt-sm-2">
                   
                    <div class="col-sm-12 mt-sm-2">
                        <a >
                            <img src="{{asset('assets/img/Nascena-service/safety.png')}}" data-src="{{asset('assets/img/Nascena-service/safety.png')}}" alt="" class="img-fluid lazy">
                            <div class="wrapper">
                                <h2>Safety</h2>
                                <p>120 Products</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-12 mt-sm-2">
                        <a >
                            <img src="{{asset('assets/img/Nascena-service/industri-supplay.jpg')}}" data-src="{{asset('assets/img/Nascena-service/industri-supplay.jpg')}}" alt="" class="img-fluid lazy">
                            <div class="wrapper">
                                <h2>Industrial Supplies</h2>
                                <p>120 Products</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-12 mt-sm-2">
                        <a >
                            <img src="{{asset('assets/img/Nascena-service/pump.png')}}" data-src="{{asset('assets/img/Nascena-service/pump.png')}}" alt="" class="img-fluid lazy">
                            <div class="wrapper">
                                <h2>Pump Solutions</h2>
                                <p>120 Products</p>
                            </div>
                        </a>
                    </div>
                    
                </div>
            </div> --}}


        </div>


        


        
        <!--/categories_grid-->
    </div>
    {{-- bg white --}}
    </div>
    <!-- /container -->
    
    <div class="bg_white">
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
    </div>
    {{-- bg white --}}

    <div class="bg_white">
        <div class="container margin_60_35">
            <div class="main_title ">
                <h2>Client</h2>
                <span>CLIENT</span>
                {{-- <p>Cum doctus civibus efficiantur in imperdiet deterruisset</p> --}}
            </div>
        </div>
    </div>
    <div class="bg_gray">
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
</main>
<!--/main-->


@endsection