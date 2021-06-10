@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 py-2">
                <a class="btn btn-dark float-right float-md-left" href="{{ url()->previous() }}" title="Tagasi">
                    Tagasi
                </a>
            </div>
        </div>

        <div class="row py-5">
            <div class="col-12 col-md-6 order-sm-1 order-md-0">
                <div class="row py-2">
                    <div class="col-12 col-md-6">
                        <h2>{{ $burger[0]->name }}</h2>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="row">
                            <div class="col-12 inline-block text-left text-md-right">
                                @if($burger[0]->is_gf)
                                    <img class="nutrition" data-toggle="tooltip" title="Gluten free" src="/../img/gluten-free.svg">
                                @endif
                                @if($burger[0]->is_vegetarian)
                                    <img class="nutrition" data-toggle="tooltip" title="Vegetarian" src="/../img/plant-based.svg">
                                @endif
                                @if($burger[0]->is_vegan)
                                    <img class="nutrition" data-toggle="tooltip" title="Vegan"  src="/../img/vegan.svg">
                                @endif
                            </div>
                            <div class="col-12 inline-block text-left text-md-right">
                                @for($i = 0; $i < $burger[0]->hotness; $i++)
                                    @if($burger[0]->hotness == 1)
                                        <img  data-toggle="tooltip" title="Väga mahe"  class="nutrition" src="/../img/pepper.svg">
                                    @elseif($burger[0]->hotness == 2)
                                        <img  data-toggle="tooltip" title="Mahe"  class="nutrition" src="/../img/pepper.svg">
                                    @elseif($burger[0]->hotness == 3)
                                        <img  data-toggle="tooltip" title="Keskmine"  class="nutrition" src="/../img/pepper.svg">
                                    @elseif($burger[0]->hotness == 4)
                                        <img  data-toggle="tooltip" title="Päris terav"  class="nutrition" src="/../img/pepper.svg">
                                    @elseif($burger[0]->hotness == 5)
                                        <img  data-toggle="tooltip" title="Põrguburger"  class="nutrition" src="/../img/pepper.svg">
                                    @endif
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 py-4">
                        <h3 class="py-2">Kirjeldus</h3>
                        <p>{{ $burger[0]->description }}</p>
                        <h3 class="py-2">Koostisosad</h3>
                        <p>{{ $burger[0]->ingredients }}</p>
                        <h3 class="py-2">Hind: {{ $burger[0]->price }}€</h3>
                        <a class="btn btn-danger" href="#">Osta</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 order-sm-0 order-md-1">
                <img class="detailed-img py-2" src="{{ $burger[0]->image_path }}" alt="burger">
            </div>
        </div>
    </div>
@endsection
