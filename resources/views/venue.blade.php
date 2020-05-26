@extends('layouts.app')
@section('content')
    <section class="hero">
        <div class="carousel">
            <img src="sheraton.png" alt="">
        </div>
    </section>
    <section class="venue">
        <div class="venue-titles">
            <h1 class="venue-title">
                Sheraton Erie Bayfront Hotel
            </h1>
            <h2 class="space-title">
                The Ballroom
            </h2>
        </div>
        <div class="description">
            <div class="description-wrapper">
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
            </div>
            <div class="attribute-list">
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
            </div>
        </div>
    </section>

@stop