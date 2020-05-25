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
                <div class="venue-titles" style="color:#FFF;">
                    <h1 class="venue-title title" style="font-weight:bold; font-size:3.0rem;">
                        {{ $venue->name  }}
                    </h1>
                    <h2 class="space-title">
                        Space Title
                    </h2>
                </div>
            </div>
        </div>

        <div class="container">

            <div class="description columns">

                <div class="description-wrapper column is-two-thirds">
                    <div>
                        <form action="" id="availability-checker">
                            <div class="control">
                                <label>StartDate</label>
                                <input class="input" type="date" name="startdate" />
                            </div>

                            <div class="control">
                                <label for="EndDate">EndDate</label>
                                <input type="date" class="input" name="enddate" />
                            </div>

                            <div class="control">
                                <button class="button is-link is-light">Submit</button>
                            </div>
                        </form>
                    </div>
                    <div>
                        Availability: ?
                    </div>
                    <div>
                        <a href="">Reserve Venue</a>
                    </div>
                    <h3 class="description-title">About the space</h3>
                    <ul>
                    @foreach($spaces as $space)
                       <a href="/space/{{ $space->id }}"><li>{{ $space->name }}</li></a> 
                    @endforeach
                    </ul>
                    <h4 class="description-title">Description</h4>
                    <p>{{ $venue->description }}</p>

                    

                    <h6 class="description-title">Considerations</h6>
                    <p> {{$venue->considerations}} </p>

                    <div class="address">
                        <h3 class="address-title">Location</h3>
                        <iframe src="" frameborder="0"></iframe>
                        <p>{{$venue->address}} {{$venue->city}}, {{$venue->state}} {{$venue->zip_code}}</p>
                    </div>
                    <div class="tour">
                        <iframe src="" frameborder="0"></iframe>
                    </div>
                </div> <!-- End Column -->


                <div class="attribute-list column">
                        <p class="attribute-title">Payment Policy</p>
                    <ul>
                        <li class = "ven-{{ $venue->express_booking }}">express booking</li>
                        <li class = "ven-{{ $venue->deposit_required }}">deposit required</li>
                        <li class = "ven-{{ $venue->accepts_credit_card }}">accepts credit cards</li>
                        <li class = "ven-{{ $venue->accepts_check }}">accepts checks</li>
                    </ul>

                    <!-- <p class="attribute-title">Amenities</p>
                    <ul>
                        <li class = "ven-">projector</li>
                        <li class = "ven-">projector screen</li>
                        <li class = "ven-">television</li>
                        <li class = "ven-">HDMI cable</li>
                        <li class = "ven-">HDMI port</li>
                    </ul> -->

                        <p class="attribute-title">Considerations</p>
                    <ul>
                        <li class="venue-{{ $venue->children_not_allowed }}">children not allowed</li>
                        <li class="venue-{{ $venue->under_18_not_allowed }}">under 18 not allowed</li>
                        <li class="venue-{{ $venue->under_21_not_allowed }}">under 21 not allowed</li>
                        <li class="venue-{{ $venue->dog_friendly }}">dog friendly</li>
                        <li class="venue-{{ $venue->smoking }}">smoking</li>
                        <li class="venue-{{ $venue->outside_smoking }}">outside smoking</li>
                        <li class="venue-{{ $venue->handicap_accessible }}">handicap accessible</li>
                        <li class="venue-{{ $venue->has_elevator }}">has elevator</li>
                        <li class="venue-{{ $venue->has_stairs }}">has stairs</li>
                        <li class="venue-{{ $venue->has_wifi }}">has wifi</li>
                    </ul>

                         <p class="attribute-title">Parking</p>
                    <ul>
                        <li class = "ven-{{ $venue->free_lot }}">free parking lot</li>
                        <li class = "ven-{{ $venue->paid_lot }}">paid parking lot</li>
                        <li class = "ven-{{ $venue->free_parking_garage }}">free parking garage</li>
                        <li class = "ven-{{ $venue->paid_parking_garage }}">paid parking garage</li>
                        <li class = "ven-{{ $venue->free_street_parking }}">free street parking</li>
                        <li class = "ven-{{ $venue->paid_street_parking }}">paid street parking</li>
                        <li class = "ven-{{ $venue->valet_parking }}">valet parking</li>
                    </ul>
                        <p class="attribute-title">Food and Drink</p>
                    <ul>
                        <li class = "ven-{{ $venue->private_bar }}">private bar</li>
                        <li class = "ven-{{ $venue->public_bar }}">public bar</li>
                        <li class = "ven-{{ $venue->catering_allowed }}">allows catering</li>
                        <li class = "ven-{{ $venue->venue_caters }}">venue caters</li>
                        <li class = "ven-{{ $venue->allows_byob }}">bring your own beer</li>
                        <li class = "ven-{{ $venue->food_for_purchase }}">food for purchase</li>
                    </ul>
                    
                        <p class="attribute-title">Restrooms</p>
                    <ul>
                        <li class = "ven-{{ $venue->private_restroom }}">private restroom</li>
                        <li class = "ven-{{ $venue->public_restroom }}">public restroom</li>
                        <li class = "ven-{{ $venue->gender_neutral_restrooms }}">gender-neutral</li>
                        <li class = "ven-{{ $venue->handicap_accessible_restrooms }}">handicap accessible</li>
                        <li class = "ven-{{ $venue->portable_restrooms }}">portable restrooms</li>
                    </ul>

                        <p class="attribute-title">Ownership</p>
                    <ul>
                        <li class="venue-{{ $venue->locally_owned }}">locally owned</li>
                        <li class="venue-{{ $venue->woman_owned }}">woman owned</li>
                        <li class="venue-{{ $venue->veteran_owned }}">veteran owned</li>
                        <li class="venue-{{ $venue->franchise_owned }}">franchise owned</li>
                        <li class="venue-{{ $venue->small_business }}">small business</li>
                    </ul>

                </div> <!-- End Column -->
            </div> <!-- End Columns -->

        </div>


    </section>

    <script>
        let checker = document.querySelector('#availability-checker');
        checker.addEventListener('submit', function(e) {
            e.preventDefault();

            let form = e.target;
            let startDate = form.querySelector('[name="startdate"]');
            let endDate = form.querySelector('[name="enddate"]');

            // make availability request
            fetch('/api/venue/1/availability')
                .then(res => res.json())
                .then(res => {
                    let availability = res.availability;
                    console.log(availability)
                })

        })
    </script>

@stop