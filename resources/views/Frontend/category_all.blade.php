@extends('frontend.layout.master')

@section('content')


<main>

    <div class="container margin_30">
        <div class="top_banner version_2">
            <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0)">
                <div class="container">

                    <div class="d-flex justify-content-center">
                    
                        <h1> CATEGORY ALL</h1>

                    </div>

                </div>
            </div>
            <img src="{{asset('assets/img/Nascena-img-source/brand-product-detail-1.jpg')}}" class="img-fluid" alt="">
        </div>
        <!-- /top_banner -->
        <div id="stick_here"></div>
        <div class="toolbox elemento_stick version_2">
           
        </div>
        <!-- /toolbox -->
        <div class="row small-gutters">
            

            <div class="bg_white">
                {{-- <div class="container margin_30"> --}}
                    {{-- <div class="main_title"> --}}
                    {{-- <h5>Category List</h5> --}}
                    {{-- </div> --}}

                    <div class="row small-gutters">

                                    <div class="  list_articles add_bottom_15 clearfix">
                                        @foreach ($category_all->chunk(20) as $category_all)

                                        <ul>
                                            @foreach ($category_all as $ktg)


                                            <li><a href="{{ url('/category/'. $ktg->slug ) }}"><i class="ti-control-play"></i><strong> {{ $ktg->name_category }} </strong>
                                                {{-- - Et dicit vidisse epicurei pri --}}
                                                </a>
                                            </li>


                                            {{-- <li><a href="#0"><i class="ti-file"></i><strong>Account</strong> - Ad sit virtute rationibus efficiantur</a></li>
                                            <li><a href="#0"><i class="ti-file"></i><strong>Refund</strong> - Partem vocibus omittam pri ne</a></li>
                                            <li><a href="#0"><i class="ti-file"></i><strong>Shipping</strong> - Case debet appareat duo cu</a></li>
                                            <li><a href="#0"><i class="ti-file"></i><strong>Payments</strong> - Impedit torquatos quo in</a></li>
                                            <li><a href="#0"><i class="ti-file"></i><strong>Warranty</strong> - Nec omnis alienum no</a></li>
                                            <li><a href="#0"><i class="ti-file"></i><strong>Refund</strong> - Quo eu soleat facilisi menandri</a></li>
                                            <li><a href="#0"><i class="ti-file"></i><strong>Reviews</strong> - Et dicit vidisse epicurei pri</a></li> --}}

                                            @endforeach

                                        </ul>
                                        @endforeach

                                    </div>
                                    <!-- /list_articles -->

                    </div> 

                </div>
            </div>
            <!-- /bg_white -->
        </main>
        <!--/main-->

  
        

            
            

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
                {{-- {{ $brand_show->links() }} --}}
            </ul>
        </div>
            
    </div>

    <!-- /container -->
</main>
<!-- /main -->

@endsection