@extends('layouts.master')
@section('title', 'index')
@section('content')
    <h1 class="cover-heading">Welcome to Furnituristik!!</h1>
    <p class="lead">
        Here you can find an unexpected furniture to customize your home!
    </p>
    <div class="d-flex justify-content-between">
        <div class="card">
            <div class="p-2">
                <h6>&nbsp;</h6>
                <h4 class="text-center">ABOUT</h4>
                <h6>&nbsp;</h6>
                <h6>Furnituristik is a furniture company that offer a lot of</h6>
                <h6>different furniture with futuristic theme. Our customer's</h6>
                <h6>happiness and satisfaction is our motto.</h6>
                <h6>We hope to help you decorate your home elegantly.</h6>
                <h6>&nbsp;</h6>
                <h6>&nbsp;</h6>
                <h6>&nbsp;</h6>
                <h6>&nbsp;</h6>
                <a href="http://localhost:8000/about" class="btn btn-primary ">More details</a>
                <h6>&nbsp;</h6>
            </div>
        </div>
        <div class="card">
            <div class="p-2">
                <h6>&nbsp;</h6>
                <h4 class="text-center">PRODUCTS</h4>
                <h6>&nbsp;</h6>
                <h6>We sell a lot of furniture such as a unique styled chair,</h6>
                <h6>table, bed, sofa, pillow, drawer, tableware, etc.</h6>
                <h6>Each furniture was made by a veteran crafter so the idea</h6>
                <h6>of our design about futuristic so each customer can fulfill</h6>
                <h6>their inner most creativity in their own homes. All of our</h6>
                <h6>products here have been tested about its quality so you</h6>
                <h6>can enjoy your life with our furniture to the fuller</h6>
                <h6>&nbsp;</h6>
                <a href="http://localhost:8000/products" class="btn btn-primary ">See our products</a>
                <h6>&nbsp;</h6>
            </div>
        </div>
        <div class="card">
            <div class="p-2">
                <h6>&nbsp;</h6>
                <h4 class="text-center">TESTIMONIALS</h4>
                <h6>&nbsp;</h6>
                <h6>Our company usualy ask for customer's experience about</h6>
                <h6>buying furniture from us and their experience about</h6>
                <h6>using our products. See what they thought here, maybe</h6>
                <h6>you can find your likes and dislikes about us from their</h6>
                <h6>honest opinions</h6>
                <h6>&nbsp;</h6>
                <h6>&nbsp;</h6>
                <h6>&nbsp;</h6>
                <a href="http://localhost:8000/testimonials" class="btn btn-primary ">See our testimony</a>
                <h6>&nbsp;</h6>
            </div>
        </div>
    </div>
@endsection
