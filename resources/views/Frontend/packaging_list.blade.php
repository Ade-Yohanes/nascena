@extends('frontend.layout.master')

@section('content')



<main>
    <div class="top_banner version_2">
        <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0)" style="background-color: rgba(0, 0, 0, 0);">
            <div class="container">
                <div class="d-flex justify-content-center">
                    <h1> we also support package  </h1>
                </div>
            </div>
        </div>
        <img src="{{asset('assets/img/bg-package.jpg')}}" class="img-fluid" alt="">
    </div>
    <!-- /top_banner -->
    <div id="stick_here"></div>
    <div class="toolbox elemento_stick">
        
    </div>
    <!-- /toolbox -->
    <div class="container margin_30">
        <div class="row">
            <div class="col-lg-9">
                @foreach ($package_list as $pk)

                <div class="row row_item">

                    <div class="col-sm-4">
                        {{-- @dd($package_list) --}}
                        {{-- @dd($pk->image_1) --}}
                        <figure>
                                
                            {{-- <span class="ribbon off">-30%</span> --}}
                            <a href="{{ url('/package/'. $pk->slug ) }}">
                                
                                <img class="img-fluid lazy" src="{{ asset( $pk->image_1 ) }}" data-src="{{ asset( $pk->image_1 ) }}" alt="">
                            </a>
                            {{-- <div data-countdown="2019/05/15" class="countdown"></div> --}}
                        </figure>
                    </div>
                    <div class="col-sm-8">
                        {{-- <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div> --}}
                        <a href="{{ url('/package/'. $pk->slug ) }}">
                            <h3>{{ $pk->package_name }}</h3>
                        </a>
                        <p> {!! \Illuminate\Support\Str::limit ($pk->description ,80 , $end = '  ....' )  !!} </p>

                        {{-- <div class="price_box">
                            <span class="new_price">$48.00</span>
                            <span class="old_price">$60.00</span>
                        </div> --}}
                         <ul>
                            <li><a href="{{ url('/package/'. $pk->slug ) }}" class="btn_1">Details</a></li>
                            {{-- <li><a href="#0" class="btn_1 gray tooltip-1" data-toggle="tooltip" data-placement="top" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li> --}}
                            {{-- <li><a href="#0" class="btn_1 gray tooltip-1" data-toggle="tooltip" data-placement="top" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li> --}}
                        </ul> 

                    </div>

                </div>
                @endforeach

                <!-- /row_item -->
                
                <!-- /row_item -->
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
                        {{ $package_list->links() }}
                    </ul>
                </div>
            </div>
            <!-- /col -->
            {{-- aside start --}}

           

            {{-- aside end --}}
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</main>
<!-- /main -->



@endsection