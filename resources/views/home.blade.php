@extends('layouts.default')

@section('stylesheet')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@stop

@section('content')
<section>
    <div class="hero-image">
        <div class="hero-content-background">
            <div class="hero-content">
                <h1>Find the Perfect Venue</h1>
                <p>Search, select, and schedule. It's that simple.</p>
                <a href="">Browse Venues</a>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="venue-highlight">
        <div class="venue-banner">
            <h2>Venues</h2>
        </div>
        <div class="venue-highlight-grid">
            <div class="venue-card"></div>
            <div class="venue-card"></div>
            <div class="venue-card"></div>
            <div class="venue-card"></div>
            <div class="venue-card"></div>
            <div class="venue-card"></div>
        </div>
    </div>
</section>

<section class="testimonial-section">
    <div class="testimonial-banner">
        <h2>People are talking</h2>
        <p>What they're saying...</p>
    </div>
    <div class="testimonial-grid">
        <div class="testimonial"></div>
        <div class="testimonial"></div>
        <div class="testimonial"></div>
    </div>
</section>

<section class="events-section">
    <div class="testimonial-banner">
        <h2>Events</h2>
        <p>What's Going On...</p>
    </div>
    <div class="testimonial-grid">
        <div class="testimonial"></div>
        <div class="testimonial"></div>
        <div class="testimonial"></div>
    </div>
</section>
@stop