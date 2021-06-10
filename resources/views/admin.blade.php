@extends('layouts.app')

@section('content')
    <div class="container">
        @if (session()->has('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
        @elseif(session()->has('failed'))
            <div class="alert alert-danger">
                {{session('failed')}}
            </div>
        @endif
        @auth
            <a class="btn btn-success my-4" href="{{ route('burger.create') }}">Lisa uus</a>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">Nr</th>
                    <th scope="col">Nimi</th>
                    <th scope="col">Hind</th>
                    <th scope="col">GV</th>
                    <th scope="col">Taimetoit</th>
                    <th scope="col">Vegan</th>
                    <th scope="col">Tegevused</th>
                </tr>
                </thead>
                <tbody>
                @foreach($burgers as $burger)
                    <tr>
                        <th scope="row">{{$burger->id}}</th>
                        <td>{{ $burger->name }}</td>
                        <td>{{ $burger->price }}</td>
                        @if($burger->is_gf)
                            <td>jah</td>
                        @else
                            <td></td>
                        @endif
                        @if($burger->is_vegetarian)
                            <td>jah</td>
                        @else
                            <td></td>
                        @endif
                        @if($burger->is_vegan)
                            <td>jah</td>
                        @else
                            <td></td>
                        @endif
                        <td><form action="{{ route("burger.destroy", $burger->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button
                                    type="submit"
                                    class="btn btn-danger"
                                    title="delete">
                                    <i class="bi-trash"></i>
                                </button>
                                <a href="{{ route("burger.edit", $burger->id) }}" class="btn btn-success">
                                    <i class="bi-pencil"></i>
                                </a>
                                <a href="{{ route('burger.show', $burger->id) }}" class="btn btn-primary">
                                    <i class="bi-eye"></i>
                                </a>
                            </form>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
    </div>
    @endauth
@endsection
