@extends('layouts.master')
@section('title', 'index')
@section('content')
    <h1 class="cover-heading">Welcome to Furnituristik!!</h1>
    <p class="lead">
        Here you can find an unexpected furniture to customize your home!
    </p>
    {{-- <p class="text-left">
        Our work encompasses graphics and identity, products and packaging, exhibitions
        and installations, websites and digital experiences, advertising and
        communications, sound and motion.
    </p> --}}
    <div class="card">
        <div class="card-body">
          <h4 class="card-title text-left">About us</h4>
          <p class="card-text text-left">With supporting text below as a natural lead-in to additional content.</p>
          <p class="card-text text-left">
              <a href="http://localhost:8000/about" class="btn btn-primary ">More details</a>
          </p>
        </div>
      </div>

@endsection
