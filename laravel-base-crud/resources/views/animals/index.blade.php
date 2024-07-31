@extends('layouts.app')

@section('page-title', 'Animal Index')
@section('main-content')
<div class="container ">
    <div class="row">
        <div class="col-12 text-center p-5">
            <h1>Animals</h1>
            <a href="{{route('animals.create')}}" class="btn btn-primary">Add New Animal</a>
        </div>
    </div>
    <div class="row">
        @foreach ($animals as $animal)
            <div class="card" style="width: 18rem; ">
                <img class="card-img-top" src="{{ $animal->image }}" alt="...">
                <div class="card-body">
                <h5 class="card-title">{{ $animal->name }}</h5>
                <p class="card-text">{{ $animal->alimentation }}</p>
                <a href="{{route('animals.show', $animal)}}" class="btn btn-primary">Animals Details</a>
                <a href="{{route('animals.edit', $animal)}}" class="btn btn-success">Edit</a>
                <form action="{{route('animals.destroy',$animal)}}" method="POST" class="d-inline-block animal-distroyer">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-warning">Delete</button>
                </form>

                </div>
            </div>
        @endforeach



    </div>
</div>
@endsection
@section('custom-scripts')
    @vite('resources/js/delete-confirm.js')
@endsection
