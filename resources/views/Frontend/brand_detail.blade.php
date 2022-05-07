@extends('frontend.layout.master')

@section('content')
    

{{-- @dd($brand_show) --}}
<main>

    <div class="container margin_30">
        <div class="top_banner version_2">
            <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0)">
                <div class="container">

                    <div class="d-flex justify-content-center">
                                            @foreach ($brand_show as $brand )
                            @if ( $loop->first )
                        <h1> {{ $brand->name_brand  }} </h1>
                            @endif
                                            @endforeach

                    </div>

                </div>
            </div>
            <img src="{{asset('assets/img/Nascena-img-source/brand-product-detail-1.jpg')}}" class="img-fluid"  alt="">
        </div>
        <!-- /top_banner -->
        <div id="stick_here"></div>
        <div class="toolbox elemento_stick version_2">
           
        </div>
        <!-- /toolbox -->
        <div class="row small-gutters">
            @foreach ($brand_show as $brand)
           
            <div class="col-6 col-md-4 col-xl-3">

                <div class="grid_item">

                    <figure>

                        {{-- <span class="ribbon off">-30%</span> --}}
                        <a href="{{ url('/product', $brand->slug ) }}">
                            <img class="img-fluid lazy" src="{{ asset( $brand->product_pic) }}" data-src="{{ asset( $brand->product_pic) }}" alt="">
                        </a>
                        {{-- <div data-countdown="2019/05/15" class="countdown"></div> --}}
                    </figure>
                    <a href="{{ url('/product', $brand->slug ) }}">
                        <h3> {{ $brand->product_name }} </h3>
                    </a>
                    {{-- <div class="price_box">
                        <span class="new_price">Rp {{ number_format($brand->price) }} </span>
                        {{-- <span class="old_price">$60.00</span> --}}
                    {{-- </div> --}} 

                    <div  >
                        <span ><a href=" {{ url('/product', $brand->slug )  }} " class="btn_1">Product Detail</a></span>
                    </div>

                    {{-- <ul>
                        <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                        <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
                        <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                    </ul> --}}

                </div>


                <!-- /grid_item -->
            </div>
            <!-- /col -->
            @endforeach

            
            

        <div class="pagination__wrapper">
            <ul class="pagination">
                {{-- <li><a href="#0" class="prev" title="previous page">&#10094;</a></li>
                <li>
                    <a href="#0" class="active">1</a>
                </li>
                <li>
                    <a href="#0">2</a>
                </li>
                <li>
                    <a href="#0">3</a>
                </li>
                <li>
                    <a href="#0">4</a>
                </li>
                <li><a href="#0" class="next" title="next page">&#10095;</a></li> --}}
                {{ $brand_show->links() }}
            </ul>
        </div>
            
    </div>

    <!-- /container -->
</main>
<!-- /main -->
@endsection
