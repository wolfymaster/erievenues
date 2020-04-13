@extends('layouts.default')

@section('stylesheet')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@stop

@section('content')
<section>
    <div class="hero-image">
        <div class="hero-content">
            <div class="hero-content-background">
                <h1 class="is-size-4-mobile">Find the Perfect Venue</h1>
                <p class="is-size-6-mobile has-text-centered">Search, select, and schedule. <br>It's that simple.</p>
                <a href="" class="button is-large" id="hero-button">Browse Venues</a>
            </div>
        </div>
    </div>
</section>

<div id="app">
  <router-view></router-view>
</div>

<!-- Venue Cards -->
<section id="venuesContainer">
  <div class="container">
    <div class="has-text-centered">
        <h2 class="title">Venues</h2>
    </div>

    <div class="container">
      <div class="columns" style="margin:0;">
          @foreach ($venues as $venue)
            <div class="column">@include('components.venuecard')</div>
          @endforeach
      </div>
    </div>

  </div>
</section>


<section class="section">
<div class="container has-text-centered">
    <h2 class="title is-4">People are Talking</h2>
    <p>What they're saying...</p>
</div>

<div class="tile is-ancestor">
    <div class="tile">
    
    </div>
    <div class="tile">

    </div>

</div>

</section>

@stop