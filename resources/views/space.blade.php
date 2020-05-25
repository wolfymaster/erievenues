@extends('layouts.default')
@section('content')
    <section class="hero">
        <div class="carousel">
            <img src="sheraton.png" alt="">
        </div>
    </section>

    <section class="venue">
    <div class="container is-fluid" style="padding:50px; background:#ED4730; margin-bottom:20px;">
        <div class="container">
        <div class="venue-titles">
        <a href="/venue/{{ $venue->id }}">
            <h1 class="venue-title">
                {{ $venue->name }}
            </h1>
        </a>
            <h2 class="space-title">
                {{ $space->name }}
            </h2>
        </div>
        </div>
    </div>

    <div class="container">
        <div class="description columns">
            <div class="description-wrapper column is-two-thirds">
                <div class="description">
                    <div class="description-wrapper">
                        <h3 class="description-title">About the Space</h3>
                        <h4 class="description-title">Description</h4>
                        <p>{{ $space->description }}</p>

                        <h5 class="description-title">Capacity</h5>
                        <ul class="capacity">
                            <li>Total: {{ $space->maximum_occupancy }}</li>
                            <li>Seated: {{ $space->seating_quantity }}</li>
                            <li>Standing: {{ $space->standing_quantity }}</li>
                        </ul>

                        <h5 class="description-title">Pricing</h5>
                        <ul class="capacity">
                            <li>Base Fee: ${{ $space->base_fee }}</li>
                            <li>Hourly Rate: ${{ $space->hourly_rate}}</li>
                        </ul>

                        <h6 class="description-title">Considerations</h6>
                        <p>{{ $space->considerations }}</p>

                        <div class="address">
                            <h3 class="address-title">Location</h3>
                            <iframe src="" frameborder="0"></iframe>
                            <p>{{ $venue->address }}  {{ $venue->city }}, {{ $venue->state }} {{ $venue->zip_code }}</p>
                        </div>
                        <div class="tour">
                            <iframe src="" frameborder="0"></iframe>
                        </div>
                    </div>
                </div>
             </div>   



            <div class="attribute-list column">
                <p class="attribute-title">Payment Policy</p>
                <ul>
                    <li class="ven-{{$venue->express_booking}}">express booking</li>
                    <li class="ven-{{$venue->deposit_required}}">deposit required</li>
                    <li class="ven-{{$venue->accepts_credit_card}}">accepts credit cards</li>
                    <li class="ven-{{$venue->accepts_check}}">accepts checks</li>
                </ul>

                <p class="attribute-title">Considerations</p>
                <ul>
                    <li class="ven-{{$venue->children_not_allowed}}">children not allowed</li>
                    <li class="ven-{{$venue->under_18_not_allowed}}">under 18 not allowed</li>
                    <li class="ven-{{$venue->under_21_not_allowed}}">under 21 not allowed</li>
                    <li class="ven-{{$venue->dog_friendly}}">dog friendly</li>
                    <li class="ven-{{$venue->smoking}}">smoking</li>
                    <li class="ven-{{$venue->outside_smoking}}">outside smoking</li>
                    <li class="ven-{{$venue->handicap_accessible}}">handicap accessible</li>
                    <li class="ven-{{$venue->has_elevator}}">has elevator</li>
                    <li class="ven-{{$venue->has_stairs}}">has stairs</li>
                    <li class="ven-{{$venue->has_wifi}}">has wifi</li>
                </ul>
            
                <!-- <p class="attribute-title">Amenities</p>
                <ul>
                    <li class="venue-">projector</li>
                    <li class="">projector screen</li>
                    <li class="">television</li>
                    <li class="">HDMI cable</li>
                    <li class="">HDMI port</li>
                </ul> -->

                <p class="attribute-title">Parking</p>
                <ul>
                    <li class="ven-{{$venue->free_lot}}">free parking lot</li>
                    <li class="ven-{{$venue->paid_lot}}">paid parking lot</li>
                    <li class="ven-{{$venue->free_parking_garage}}">free parking garage</li>
                    <li class="ven-{{$venue->paid_parking_garage}}">paid parking garage</li>
                    <li class="ven-{{$venue->free_street_parking}}">free street parking</li>
                    <li class="ven-{{$venue->paid_street_parking}}">paid street parking</li>
                    <li class="ven-{{$venue->valet_parking}}">valet parking</li>
                </ul>

                <p class="attribute-title">Food and Drink</p>
                <ul>
                    <li class="ven-{{$venue->private_bar}}">private bar</li>
                    <li class="ven-{{$venue->public_bar}}">public bar</li>
                    <li class="ven-{{$venue->allows_byob}}">allows catering</li>
                    <li class="ven-{{$venue->catering_allowed}}">venue caters</li>
                    <li class="ven-{{$venue->venue_caters}}">bring your own beer</li>
                    <li class="ven-{{$venue->venue_caters}}">food for purchase</li>
                </ul>

                <p class="attribute-title">Seating</p>
                <ul>
                    <li class="ven-{{$venue->regular_seating}}">regular seating</li>
                    <li class="ven-{{$venue->high_top_seating}}">high-top seating</li>
                    <li class="ven-{{$venue->booth_seating}}">booth seating</li>
                </ul>

                <p class="attribute-title">Restrooms</p>
                <ul>
                    <li class="ven-{{$venue->private_restroom}}">private restroom</li>
                    <li class="ven-{{$venue->public_restroom}}">public restroom</li>
                    <li class="ven-{{$venue->gender_neutral_restroom}}">gender-neutral</li>
                    <li class="ven-{{$venue->handicap_accessible_restrooms}}">handicap accessible</li>
                    <li class="ven-{{$venue->portable_restrooms}}">portable restrooms</li>
                </ul>

                <p class="attribute-title">Ownership</p>
                <ul>
                    <li class="ven-{{$venue->locally_owned}}">locally owned</li>
                    <li class="ven-{{$venue->woman_owned}}">woman owned</li>
                    <li class="ven-{{$venue->veteran_owned}}">veteran owned</li>
                    <li class="ven-{{$venue->franchise_owned}}">franchise owned</li>
                    <li class="ven-{{$venue->small_business}}">small business</li>
                </ul>
        </div>
    </div>
    </section>

@stop