@extends('frontend.layout.master')

@section('content')

<main class="bg_gray">
	
    <div class="container margin_60">
        <div class="main_title">
            <h2>Contact Nascena</h2>
            {{-- <p>Euismod phasellus ac lectus fusce parturient cubilia a nisi blandit sem cras nec tempor adipiscing rcu ullamcorper ligula.</p> --}}
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="box_contacts">
                    <i class="ti-support"></i>
                    <h2>Contact us</h2>
                    <a class="fa fa-whatsapp" href="https://api.whatsapp.com/send?phone={{$phone}}" target="_blank" >{{ $phone }}</a> - <a href="mailto: {{$email}}">{{ $email }}</a>
                    {{-- <small>MON to FRI 9am-6pm SAT 9am-2pm</small> --}}
                </div>
               {{-- {{dd($data)}}  --}}
            </div>
            <div class="col-lg-4">
                <div class="box_contacts">
                    <i class="ti-map-alt"></i>
                    <h2>Nascena Office</h2>
                    <div>{{$alamat}}</div>
                    {{-- <small>MON to FRI 9am-6pm SAT 9am-2pm</small> --}}
                </div>
            </div>
            <div class="col-lg-4">
                <div class="box_contacts">
                    <i class="ti-package"></i>
                    <h2> Orders</h2>
                    <a href="fax:{{$fax}}">Fax: {{$fax}}</a> - <a href="mailto: {{$email}} ">{{$email}}</a>
                    {{-- <small>MON to FRI 9am-6pm SAT 9am-2pm</small> --}}
                </div>
            </div>
        </div>
        <!-- /row -->				
    </div>
    <!-- /container -->
    <div class="bg_white">
    <div class="container margin_60_35">
        {{-- <h4 class="pb-3">Drop Quotation</h4>
        <div class="row">
            <div class="col-lg-4 col-md-6 add_bottom_25">
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="Name *">
                </div>
                <div class="form-group">
                    <input class="form-control" type="email" placeholder="Email *">
                </div>
                <div class="form-group">
                    <textarea class="form-control" style="height: 150px;" placeholder="Message *"></textarea>
                </div>
                <div class="form-group">
                    <input class="btn_1 full-width" type="submit" value="Submit">
                </div>
            </div> --}}
            <div class="col-lg-12 col-md-12 add_bottom_25">
            <iframe class="map_contact" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63460.101287301535!2d106.80603106272615!3d-6.229899099250216!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1505c76d775%3A0xe8503eecf84be674!2sSudirman%20Central%20Busines%20District!5e0!3m2!1sid!2sid!4v1618754798100!5m2!1sid!2sid" 
                    style="border: 0" allowfullscreen></iframe>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /bg_white -->
</main>
<!--/main-->
    
@endsection