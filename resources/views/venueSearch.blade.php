@extends('layouts.default')
@section('content')

<section style="clear:both;">
    <div class="container is-fluid">
        <div class="columns">
            <div class="column">
                @foreach ($venues as $venue)
                    <div style="padding:30px 20px; border-bottom:1px solid #d5d5d5; ">
                        <div class="columns">
                            <div class="column is-one-fifth">
                                <div class="photo" style="font-size:1.5rem;">
                                    <img src="https://www.placehold.it/150x150" />
                                </div>
                            </div>
                            <div class="column">
                                <div style="position:relative; height:100%;">
                                    <div class="name" style="font-size:1.5rem;">
                                        {{ $venue['name'] }}
                                    </div>
                                    <div class="cost" style="position:absolute; bottom:0px; right:10px;">
                                        $25/hour
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="column" style="background:transparent; width:50%; height:800px; top:50px; right:0; bottom:170px;">
                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=erie%20pa&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        <a href="https://www.embedgooglemap.net/blog/divi-discount-code-elegant-themes-coupon/"></a>
                    </div>
                    <style>.mapouter{position:relative;text-align:right;height:100%;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:100%;width:100%;}</style>
                </div>
            </div>
        </div>
    </div>
</section>

@stop