@extends('frontend.layout.master')

@section('content')
    



<main>
		
    <div class="container margin_30">
        <div class="top_banner version_2">
            <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0)">
                <div class="container">
                    <div class="d-flex justify-content-center">
                        <h1>Product</h1>
                    </div>
                </div>
            </div>
            {{-- <img src="img/bg_cat_shoes.jpg" class="img-fluid" alt=""> --}}
        </div>
        <!-- /top_banner -->
        <div id="stick_here"></div>
        
        </div>
        <!-- /toolbox -->
        <div class="row small-gutters">
            @foreach ($products as $item)
            <div class="col-6 col-md-4 col-xl-3">
                <div class="grid_item">
                    <figure>
                        {{-- <span class="ribbon off">-30%</span> --}}
                        <a href="{{ url('/product/'. $item->slug) }}">
                            <img class="img-fluid lazy" src="{{ asset($item->product_pic) }}" 
                            data-src="{{ asset( $item->product_pic ) }}" alt="">
                        </a>
                        {{-- <div data-countdown="2019/05/15" class="countdown"></div> --}}
                    </figure>
                    <a href="{{ url('/product/'. $item->slug) }}">
                        <h3>{{ $item->product_name }}</h3>
                    </a>
                {{-- @if( $item->$price < 1 ) 
                    <div class="price_box">
                        <span class="new_price">Rp {{ number_format($item->price) }}</span>
                        {{-- <span class="old_price">$60.00</span> --}}
                    {{-- </div>
                    @else
                      <div class="price_box">
                        <span class="new_price"> harga belum ada </span>
                      </div>
                @endif --}} 

                <div  >
                    <span ><a href=" {{ url('/product/'. $item->slug) }} " class="btn_1">Product Detail</a></span>
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
            <!-- /col -->

            
            
        <div class="pagination__wrapper">
            <ul class="pagination">
                    
                {{-- <li><a href="{{$products->previousPageUrl()}}" class="prev" title="previous page">&#10094;</a></li> --}}
                {{-- <li>
                    <a href="{{ $products->links() }}" class="active">1</a>
                </li> --}}
                {{-- <li>
                    <a href="#0">2</a>
                </li>
                <li>
                    <a href="#0">3</a>
                </li>
                <li>
                    <a href="#0">4</a>
                </li> --}}
                {{-- <li><a href=" {{$products->nextPageUrl()}}	" class="next" title="next page">&#10095;</a></li> --}}
                {{ $products->links() }}
            </ul>

        </div>
            
    </div>
    <!-- /container -->
</main>
<!-- /main -->

@endsection