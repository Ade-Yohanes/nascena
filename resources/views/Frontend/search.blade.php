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


        <!-- /container -->
    {{-- </div> --}}
    <!-- /track_order -->

    
    <!-- /container -->
    <!-- /bg_white --> 
</main>
<!--/main-->

@endsection


@push('Javascript')

{{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> --}}

{{-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js" ></script>

<script type="text/javascript">

var path = "{{ url('search_list') }}";
    $('input.typeahead').typeahead({
        source:  function (query, process) {
        return $.get(path, { query: query }, function (data) {
                return process(data);
            });
        }
    });
</script> --}}

{{-- <script type="text/javascript">
    var path = "{{ url('search_list') }}";
      $('#search_input').typeahead({
          source:  function (query, process) {
            return $.get(path, { query: query }, function (data) {
                return process(data);
            });
          }
      });
  </script> --}}


  



@endpush

