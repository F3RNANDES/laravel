<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dog;

class DogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dogs = Dog::all();

        return view('dog.index', ['dogs' => $dogs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $dog = new Dog();

        $dog->name = $request->name;
        $dog->age = $request->age;
        $dog->race = $request->race;
        $dog->color = $request->color;
        $dog->price = $request->price;
        $dog->sold = $request->sold;

        if ($dog->save()) {
            return redirect()
                ->back()
                ->with('message', 'Cachorro adicionado com sucesso!');
        }
        return redirect()
            ->back()
            ->with('message', 'Não foi possível adicionar o cachorro!');
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
    //Função edit procurando o id de cachorro procure o id de $dog na model(banco)Dog ou falhe
    //se achar id retorne a view do dog.edit. ['dog'=>$dog]?
    public function edit($id)
    {
        $dog = Dog::findOrFail($id);
        return view('dog.edit', ['dog'=>$dog]);
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
        $dog = Dog::findOrfail($id);

        $dog->name = $request->name;
        $dog->age = $request->age;
        $dog->race = $request->race;
        $dog->color = $request->color;
        $dog->price = $request->price;
        $dog->sold = $request->sold;

        if($dog->update())
        {
            return redirect()
                ->back()
                ->with('message', 'Cachorro atualizado com sucesso!');
        }
        return redirect()
            ->back()
            ->with('message','Não foi poassivel atualizar!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    //função de deletar o cachorro
    //função destroy procura o id selecionado, se achar na model Dog o id selecionado
    //logo dog selecionado será deletado e após deletado voltara a mesma tela.

    public function destroy($id)
    {
        $dog = Dog::findOrfail($id);
        $dog->delete();
        return redirect()->back();
    }
}
