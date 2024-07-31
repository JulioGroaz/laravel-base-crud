@extends('layouts.app')

@section('main-content')
    <div class="row " style="justify-content-center">
        <h1 class="mb-3 fw-bolder text-center p-3">
            Insert new Animal
        </h1>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger ">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="row justify-content-center">
        <div class="col-6 ">
            <form action="{{route('animals.store')}}" method="POST">
                @csrf

                <label for="name">Name</label>
                <input class="form-control form-control-sm" type="text" placeholder="Animal name" aria-label="Animal name" id="name" name="name">

                <label for="species">Scientific name</label>
                <input class="form-control form-control-sm" type="text" placeholder="Species" aria-label="Species" id="species" name="species">

                <label for="alimentation">Alimentation</label>
                <input class="form-control form-control-sm" type="text" placeholder="Alimentation" aria-label="Alimentation" id="alomentation" name="alimentation">

                <label for="image">image url</label>
                <input class="form-control form-control-sm" type="text" placeholder="URL image" aria-label="URL image" id="image" name="image">

                <input type="submit" value='Insert new animal' class="btn btn-primary " style="margin-top:2rem;">
            </form>
            <a href="{{route('animals.index')}}" class="btn btn-primary col-8" style="margin-top: 2rem">Torna alla home</a>
        </div>
    </div>

@endsection
