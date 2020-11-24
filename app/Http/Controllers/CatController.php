<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cat;

class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cats = Cat::all();

        return view('cat.index', ['cats' => $cats]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:cats|max:36',
            'age' => 'required|max:3',
            'price' => 'nullable',
        ]);


        $cat = new Cat();

        $cat->name = $request->name;
        $cat->age = $request->age;
        $cat->race = $request->race;
        $cat->color = $request->color;
        $cat->price = $request->price;
        $cat->sold = $request->sold;

        if ($cat->save()) {
            return redirect()
                ->back()
                ->with('message', 'Gato adicionado com sucesso!');
        }
        return redirect()
            ->back()
            ->with('message', 'Não foi possível adicionar o gato!');


    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cat = Cat::findOrfail($id);
        return view('cat.edit', ['cat' => $cat]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cat = Cat::findOrFail($id);

        $cat->name = $request->name;
        $cat->age = $request->age;
        $cat->race = $request->race;
        $cat->color = $request->color;
        $cat->price = $request->price;
        $cat->sold = $request->sold;

        if ($cat->update()) {
            return redirect()
                ->back()
                ->with('message', 'Gato atualizado com sucesso!');
        }
        return redirect()
            ->back()
            ->with('message', 'Não foi possível atualizar o gato!');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat = Cat::findOrfail($id);
        $cat->delete();

        return redirect()->back();
    }
}
