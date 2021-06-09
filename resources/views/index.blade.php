@extends('layouts.app')

@section('content')
                <div id="hero" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#hero" data-slide-to="0" class="active"></li>
                        <li data-target="#hero" data-slide-to="1"></li>
                        <li data-target="#hero" data-slide-to="2"></li>
                    </ul>

                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./img/carousel1.jpg" alt="Burger">
                        </div>
                        <div class="carousel-item">
                            <img src="./img/carousel2.jpg" alt="Burger">
                        </div>
                        <div class="carousel-item">
                            <img src="./img/carousel3.jpg" alt="Burger">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#hero" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#hero" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                    <div class="row">
                        <div class="col-8 col-md-6 offset-2">
                            <div class="carousel-content">
                                <h1>Nehatu burger</h1>
                                <p>
                                    Parimad burgerid Eestis!
                                </p>
                                <a class="btn btn-danger">Vaata menüüd</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row my-5">
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="card">
                                <a href="#" title="show">
                                    <img class="card-img-top" src="/../img/burger.jpg">
                                </a>
                                <div class="card-body">
                                    <h3 class="card-title">Burger</h3>
                                    <p class="card-text">Väga maitsev burx.</p>
                                    <h4 class="card-title text-right">10€</h4>
                                    <div class="row">
                                        <div class="col">
                                            <a class="btn btn-danger my-1 float-right">Osta kohe</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 inline-block">
                                            <img class="nutrition" src="/../img/gluten-free.svg">
                                            <img class="nutrition" src="/../img/plant-based.svg">
                                            <img class="nutrition" src="/../img/vegan.svg">
                                        </div>
                                        <div class="col-6 inline-block text-right">
                                            <img class="nutrition" src="/../img/pepper.svg">
                                            <img class="nutrition" src="/../img/pepper.svg">
                                            <img class="nutrition" src="/../img/pepper.svg">
                                            <img class="nutrition" src="/../img/pepper.svg">
                                            <img class="nutrition" src="/../img/pepper.svg">
                                        </div>
                                        <div class="col-6">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
@endsection
