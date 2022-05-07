
@extends('frontend.layout.master')

@section('content')


<main class="bg_gray">
    {{-- <div id="track_order"> --}}
        <div class="container margin_60_35">
            <div class="row justify-content-center text-center">
                <div class="col-xl-7 col-lg-9">
            
                    {{-- <img src="{{asset('assets/img/track_order.svg')}}" alt="" class="img-fluid add_bottom_15" width="200" height="177"> --}}
                    <form action="{{ url('search_list') }}" method="get">
                        {{ csrf_field() }}

                    <h2>Quick Search</h2>
                        <div class="search_bar">
                            <input type="text" class="typeahead form-control" name="q" id="search_input"   placeholder="Search......">
                            <input type="submit" >

                        </div>
                    </form>
                </div>
            </div>
            <!-- /row -->
        </div>

        {{-- taro disini --}}
        <div class="bg_white">

            <div class="container margin_60_35">
        

                
                <div class="main_title">
                    
                    {{-- @foreach ($result as $item) --}}
                        
                    {{-- @if ( $loop->first ) --}}

                    <h2>{{$product}}</h2>
        
                    <span>Products</span>
                    {{-- <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p> --}}
                    {{-- @endif --}}

                    {{-- @endforeach --}}

                </div>

                <div class="owl-carousel owl-theme products_carousel">
        
                    @foreach ($result as $hsl)

                    <div class="item">
        
                        <div class="grid_item">
                            {{-- <span class="ribbon new">New</span> --}}
                            <figure>
                                <a href="{{ url('/product', $hsl->slug )  }} ">
                                    <img class="img-fluid lazy" src="{{$hsl->product_pic }}" data-src="{{$hsl->product_pic }}" alt="">
                                </a>
                            </figure>
                            <a href="{{ url('/product', $hsl->slug )  }} ">
                                <h3>{{ $hsl->product_name }}</h3>
                            </a>
                            {{-- <div class="price_box">
                                <span class="new_price">$110.00</span>
                            </div> --}}
        
                            <div  >
                                <span ><a href=" {{ url('/product', $hsl->slug )  }} " class="btn_1">Product Detail</a></span>
                            </div>
        
                            
        
                        </div>
                        <!-- /grid_item -->
        
        
                    </div>
                    @endforeach

                    <!-- /item -->
                    {{-- {{ $re->render() }} --}}
                    
                    </div>
                    <!-- /item -->

                </div>
                @if(count($result)==0)
                    <div class="main_title">
        
                            <div class='alert alert-info'> <h2> Sorry Product is not found ! </h2> </div>
                    </div>      
                    @endif
                <!-- /products_carousel -->
            </div>
        
             {{-- @else
                <div class="card-panel red darken-3 white-text">Oops.. Data <b>{{$input}}</b> Tidak Ditemukan</div>
             @endif --}}
        
             {!! $result->links() !!}

            </div>

            


        <!-- /container -->
    {{-- </div> --}}
    <!-- /track_order -->

    
    <!-- /container -->
    <!-- /bg_white --> 
</main>
<!--/main-->





    @endsection