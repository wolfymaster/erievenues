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
                    <h1 class="venue-title" style="font-weight:bold; font-size:3.0rem;">
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
                    <h4 class="description-title">Description</h4>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. At, tenetur necessitatibus laborum, ipsum incidunt impedit laudantium distinctio unde, error cumque explicabo quod officiis officia reiciendis cum rem recusandae aliquam quos.</p>

                    <h5 class="description-title">Capacity</h5>
                    <ul class="capacity">
                        <li>Total: 82</li>
                        <li>Seated: 60</li>
                        <li>Standing: 12</li>
                    </ul>

                    <h6 class="description-title">Considerations</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor neque doloribus distinctio cum quisquam! Repellendus dolore debitis, eveniet delectus repellat reprehenderit ducimus, ullam ab ipsa possimus, fugit quisquam tempore eligendi? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor neque doloribus distinctio cum quisquam! Repellendus dolore debitis, eveniet delectus repellat reprehenderit ducimus, ullam ab ipsa possimus, fugit quisquam tempore eligendi?</p>

                    <div class="address">
                        <h3 class="address-title">Location</h3>
                        <iframe src="" frameborder="0"></iframe>
                        <p>55 West Bay Drive Erie, PA 16507</p>
                    </div>
                    <div class="tour">
                        <iframe src="" frameborder="0"></iframe>
                    </div>
                </div> <!-- End Column -->


                <div class="attribute-list column">
                    <p class="attribute-title">Payment Policy</p>
                    <ul>
                        <li>express booking</li>
                        <li class="strike">deposit required</li>
                        <li>accepts credit cards</li>
                        <li>accepts checks</li>
                    </ul>
                    <p class="attribute-title">Amenities</p>
                    <ul>
                        <li>projector</li>
                        <li>projector screen</li>
                        <li class="strike">television</li>
                        <li class="strike">HDMI cable</li>
                        <li class="strike">HDMI port</li>
                    </ul>
                    <p class="attribute-title">Parking</p>
                    <ul>
                        <li>free parking lot</li>
                        <li>paid parking lot</li>
                        <li class="strike">free parking garage</li>
                        <li class="strike">paid parking garage</li>
                        <li class="strike">free street parking</li>
                        <li>paid street parking</li>
                        <li class="strike">valet parking</li>
                    </ul>
                    <p class="attribute-title">Food and Drink</p>
                    <ul>
                        <li>private bar</li>
                        <li>public bar</li>
                        <li class="strike">allows catering</li>
                        <li class="strike">venue caters</li>
                        <li class="strike">bring your own beer</li>
                        <li>food for purchase</li>
                    </ul>
                    <p class="attribute-title">Seating</p>
                    <ul>
                        <li>regular seating</li>
                        55                   <li class="strike">high-top seating</li>
                        <li class="strike">booth seating</li>
                    </ul>
                    <p class="attribute-title">Restrooms</p>
                    <ul>
                        <li>private restroom</li>
                        <li>public restroom</li>
                        <li>gender-neutral</li>
                        <li class="strike">handicap accessible</li>
                        <li class="strike">portable restrooms</li>
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