@extends('layouts.default')
@section('content')
    <section class="hero">
        <div class="carousel">
            <img src="sheraton.png" alt="">
        </div>
    </section>
    <section class="venue">
        <div class="venue-titles">
            <h1 class="venue-title">
                {{ venue->name }}
            </h1>
            <h2 class="space-title">
                {{space->name}}
            </h2>
        </div>
        <div class="description">
            <div class="description-wrapper">
                <h3 class="description-title">About the Space</h3>
                <h4 class="description-title">Description</h4>
                <p>{{ space->description }}</p>

                <h5 class="description-title">Capacity</h5>
                <ul class="capacity">
                    <li>Total: {{ space->maximum_occupancy }}</li>
                    <li>Seated: {{ space->seating_quantity }}</li>
                    <li>Standing: {{ space->standing_quantity }}</li>
                </ul>

                <h5 class="description-title">Pricing</h5>
                <ul class="capacity">
                    <li>Base Fee: {{ space->base_fee }}</li>
                    <li>Hourly Rate: {{ space->hourly_rate}}</li>
                </ul>

                <h6 class="description-title">Considerations</h6>
                <p>{{ space->considerations }}</p>

                <div class="address">
                    <h3 class="address-title">Location</h3>
                    <iframe src="" frameborder="0"></iframe>
                    <p>{{ venue->address }}  {{ venue->city }}, {{ venue->state }} {{ venue->zip_code }}</p>
                </div>
                <div class="tour">
                    <iframe src="" frameborder="0"></iframe>
                </div>
            </div>



            <div class="attribute-list">
                <p class="attribute-title">Payment Policy</p>
                <ul>
                    <li class="venue-{{venue->express_booking}}">express booking</li>
                    <li class="venue-{{venue->deposit_required}}">deposit required</li>
                    <li class="venue-{{venue->accepts_credit_card}}">accepts credit cards</li>
                    <li class="venue-{{venue->accepts_check}}">accepts checks</li>
                </ul>

                <p class="attribute-title">Considerations</p>
                <ul>
                    <li class="venue-{{venue->children_not_allowed}}">children not allowed</li>
                    <li class="venue-{{venue->under_18_not_allowed}}">under 18 not allowed</li>
                    <li class="venue-{{venue->under_21_not_allowed}}">under 21 not allowed</li>
                    <li class="venue-{{venue->dog_friendly}}">dog friendly</li>
                    <li class="venue-{{venue->smoking}}">smoking</li>
                    <li class="venue-{{venue->outside_smoking}}">outside smoking</li>
                    <li class="venue-{{venue->handicap_accessible}}">handicap accessible</li>
                    <li class="venue-{{venue->has_elevator}}">has elevator</li>
                    <li class="venue-{{venue->has_stairs}}">has stairs</li>
                    <li class="venue-{{has_wifi}}">has wifi</li>
                </ul>
            
                <!-- <p class="attribute-title">Amenities</p>
                <ul>
                    <li class="venue-{{venue->accepts_check}}">projector</li>
                    <li class="venue-{{venue->accepts_check}}">projector screen</li>
                    <li class="venue-{{venue->accepts_check}}">television</li>
                    <li class="venue-{{venue->accepts_check}}">HDMI cable</li>
                    <li class="venue-{{venue->accepts_check}}">HDMI port</li>
                </ul> -->

                <p class="attribute-title">Parking</p>
                <ul>
                    <li class="venue-{{venue->free_lot}}">free parking lot</li>
                    <li class="venue-{{venue->paid_lot}}">paid parking lot</li>
                    <li class="venue-{{venue->free_parking_garage}}">free parking garage</li>
                    <li class="venue-{{venue->paid_parking_garage}}">paid parking garage</li>
                    <li class="venue-{{venue-free_street_parking}}">free street parking</li>
                    <li class="venue-{{venue->paid_street_parking}}">paid street parking</li>
                    <li class="venue-{{venue->valet_parking}}">valet parking</li>
                </ul>

                <p class="attribute-title">Food and Drink</p>
                <ul>
                    <li class="venue-{{venue->private_bar}}">private bar</li>
                    <li class="venue-{{venue->public_bar}}">public bar</li>
                    <li class="venue-{{venue->allows_byob}}">allows catering</li>
                    <li class="venue-{{venue->catering_allowed}}">venue caters</li>
                    <li class="venue-{{venue->venue_caters}}">bring your own beer</li>
                    <!--TODO add to migration <li>food for purchase</li> -->
                </ul>

                <p class="attribute-title">Seating</p>
                <ul>
                    <li class="venue-{{venue->regular_seating}}">regular seating</li>
                    <li class="venue-{{venue->high_top_seating}}">high-top seating</li>
                    <li class="venue-{{venue->booth_seating}}">booth seating</li>
                </ul>

                <p class="attribute-title">Restrooms</p>
                <ul>
                    <li class="venue-{{venue->private_restroom}}">private restroom</li>
                    <li class="venue-{{venue->public_restroom}}">public restroom</li>
                    <li class="venue-{{venue->gender_neutral_restroom}}">gender-neutral</li>
                    <li class="venue-{{venue->handicap_accessible_restrooms}}">handicap accessible</li>
                    <li class="venue-{{venue->portable_restrooms}}">portable restrooms</li>
                </ul>

                <p class="attribute-title">Ownership</p>
                <ul>
                    <li class="venue-{{venue->locally_owned}}">locally owned</li>
                    <li class="venue-{{venue->woman_owned}}">woman owned/li>
                    <li class="venue-{{venue->veteran_owned}}">veteran owned</li>
                    <li class="venue-{{venue->franchise_owned}}">franchise owned</li>
                    <li class="venue-{{venue->small_business}}">small business</li>
                </ul>

            </div>
        </div>
    </section>

@stop