@extends('layouts.main')

@section('asset')
@vite('resources/scss/comic-details.scss')
@endsection

@section('maincontent')

<div class="topbar">
  <div class="container small">    
    <img src="{{ $comic["thumb"] }}" alt="{{ $comic["type"] }} Image">
  </div>
</div>

<div class="container small pt-5">
  <div class="row g-5">
    <div class="col-9 col-content">
      <h2>{{ $comic["title"]}}</h2>
      <div class="info-wrapper">
        <div class="price-wrapper">
          <div class="price">U.S. Price: <span class="value">{{$comic["price"]}}</span></div>
          <div class="available">AVAILABLE</div>
        </div>
        <div class="check-available">Check Availability</div>
      </div>
      <p class="desc">
        {{$comic["description"]}}
      </p>
    </div>
    <div class="col-3 col-adv">
      <a href="#">
        <img src="{{ Vite::asset('resources/img/adv.jpg')}}" alt="">
        <div class="adv-label">ADVERTISEMENT</div>
      </a>
    </div>
  </div>
</div>

<section class="details">
  <div class="container small">
  <div class="row">
    <div class="col-6">talent</div>
    <div class="col-6">specs</div>
  </div>
  </div>
</section>

@endsection