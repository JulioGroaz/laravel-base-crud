@extends('layouts.app')

@section('page-title', 'Animal Index')
@section('main-content')
<div class="container " style="display:flex; justify-content:center; align-items:center; flex-direction:column">
    <div class="row">
        <div class="col-12  p-5">
            <h1>Animals</h1>
        </div>
    </div>
    <div class="row">

            <div class="card" style="width: 18rem ">
                <img class="card-img-top" src="{{ $animal->image }}" alt="...">
                <div class="card-body">
                <h5 class="card-title">{{ $animal->name }}</h5>
                <ul class="col-12">
                    <li class="card-text"><strong>Scientific name: </strong>{{ $animal->species }}</li>
                    <li class="card-text"><strong>Alimentation: </strong> {{ $animal->alimentation }}</li>
                </ul>


                </div>
            </div>

            <a href="{{route('animals.index', $animal)}}" class="btn btn-primary col-8" style="margin-top: 2rem">Torna alla home</a>
    </div>
</div>
@endsection
