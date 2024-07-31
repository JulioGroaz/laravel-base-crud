<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $animals = Animal::all();
        return view('animals.index', compact('animals'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('animals.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $data = $request->validate([
                'name'=> 'required|unique:animals|min:3',
                'species' => 'required|unique:animals|min:3',
                'alimentation'=> 'required|min:3',
                'image' =>'required|url|unique:animals,image',
            ]);

            $newAnimal = new Animal($data);
            $newAnimal->name = $data['name'];
            $newAnimal->species = $data['species'];
            $newAnimal->alimentation = $data['alimentation'];
            $newAnimal->image = $data['image'];
            $newAnimal->save();
            return redirect()-> route('animals.show',$newAnimal);
    }

    /**
     * Display the specified resource.
     */
    public function show(Animal $animal)
    {
        return view('animals.show', compact('animal'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Animal $animal)
    {
        return view('animals.edit', compact('animal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Animal $animal)
    {
        $data = $request->all();


            $animal->name = $data['name'];
            $animal->species = $data['species'];
            $animal->alimentation = $data['alimentation'];
            $animal->image = $data['image'];
            $animal->update();

            return redirect()-> route('animals.show',$animal);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Animal $animal)
    {
        $animal->delete();
        return redirect()->route('animals.index');
    }
}
