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
    <div class="container" id="menu" name="menu">
        <div class="row my-5">
            @foreach($burgers as $burger)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 my-3">
                    <div class="card">
                        <a href="{{ route('burger.show', $burger->id) }}">
                            <img class="card-img-top" src="{{ $burger->image_path }}" alt="product image">
                        </a>
                        <div class="card-body">
                            <h3 class="card-title">{{ $burger->name }}</h3>
                            <p class="card-text">{{ $burger->description }}</p>
                            <h4 class="card-subtitle text-right">{{ $burger->price }}€</h4>
                            <div class="row">
                                <div class="col">
                                    <a class="btn btn-danger my-1 float-right">Osta kohe</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 inline-block">
                                    @if($burger->is_gf)
                                        <img class="nutrition" data-toggle="tooltip" title="Gluteenivaba" src="./img/gluten-free.svg">
                                    @endif
                                    @if($burger->is_vegetarian)
                                            <img class="nutrition" data-toggle="tooltip" title="Taimetoit" src="./img/plant-based.svg">
                                        @endif
                                    @if($burger->is_vegan)
                                            <img class="nutrition" data-toggle="tooltip" title="Vegan"  src="./img/vegan.svg">
                                    @endif
                                </div>
                                <div class="col-6 inline-block text-right">
                                    @for($i = 0; $i < $burger->hotness; $i++)
                                        @if($burger->hotness == 1)
                                            <img  data-toggle="tooltip" title="Väga mahe"  class="nutrition" src="./img/pepper.svg">
                                        @elseif($burger->hotness == 2)
                                            <img  data-toggle="tooltip" title="Mahe"  class="nutrition" src="./img/pepper.svg">
                                        @elseif($burger->hotness == 3)
                                            <img  data-toggle="tooltip" title="Keskmine"  class="nutrition" src="./img/pepper.svg">
                                        @elseif($burger->hotness == 4)
                                            <img  data-toggle="tooltip" title="Päris terav"  class="nutrition" src="./img/pepper.svg">
                                        @elseif($burger->hotness == 5)
                                            <img  data-toggle="tooltip" title="Põrguburger"  class="nutrition" src="./img/pepper.svg">
                                        @endif
                                    @endfor
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    </div>
    </div>
@endsection
