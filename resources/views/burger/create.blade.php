@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Lisa uus burger</h2>
                </div>
                <div class="pull-right my-4">
                    <a class="btn btn-dark" href="{{ route('admin') }}">Tagasi</a>
                </div>
            </div>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Oops!</strong> Sinu sisestatud andmetega oli probleeme.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('burger.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <strong>Nimi:</strong>
                        <input type="text" name="name" class="form-control" placeholder="Sisesta nimi">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <strong>Hind:</strong>
                        <input type="number" class="form-control" name="price" placeholder="Hind" max="255">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <strong>Kirjeldus:</strong>
                        <input type="text" class="form-control" name="description" placeholder="Sisesta kirjeldus">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <strong>Koostisosad:</strong>
                        <input type="text" class="form-control" name="ingredients" placeholder="Koostisosad" max="255">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <strong>Teravus (1-5)</strong>
                        <input type="number" class="form-control" name="hotness" placeholder="Koostisosad" max="5">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="is_gf" name="is_gf">
                        <label class="form-check-label" for="is_gf">
                            Gluteenivaba
                        </label>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="is_vegetarian" name="is_vegetarian">
                        <label class="form-check-label" for="is_vegetarian">
                            Taimetoit
                        </label>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="is_vegan" name="is_vegan">
                        <label class="form-check-label" for="is_vegan">
                            Vegan
                        </label>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <strong>Pilt:</strong>
                        <input type="file" class="form-control" name="image">
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" name="submit" class="btn btn-primary" value="Submit">Sisesta</button>
                </div>
            </div>

        </form>
    </div>
@endsection
