<?php

namespace App\Http\Controllers;

use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use App\Models\Plat;

class PlatController extends Controller
{
    public function index()
    {
        $plats = Plat::all();
        view()->share('plat', $plats);
        return view('plats.plat',['plats'=> $plats]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'image' => 'required',
            'description' => 'required'
        ]);

        $plats = new Plat;

        $img = $request->file('image')->store('public/images/plats');
        $img =str_replace("public/images", "storage/images", $img);

        $plats->name = $request->input('name');
        $plats->price = $request->input('price');
        $plats->image = $img; 
        $plats->description = $request->input('description');
        
        // dd($plats);

        $plats->save();

        return back()
        ->with('success', 'bien enregistrer');

    }

    public function show(Plat $plats)
    {
        return view('plats.plat', [
            'plat' => $plats,
        ]);
    }

    public function edit($id)
    {
        return view('plats.edit', [
            'plat' => Plat::findorFail($id),
        ]);
    }

    public function update(Request $request, $id)
    { 
        $request->validate([
            'image' => 'required',
        ]);
        $plats = Plat::findOrFail($id);        
        
        $img = $request->file('image')->store('public/images/plats');
        $img =str_replace("public/images", "storage/images", $img);

        $plats->name   = $request->input('name');
        $plats->image  = $img;
        $plats->price  = $request->input('price');
        $plats->description = $request->input('description');

        $plats->save();

        return redirect()
            ->route('plats.index', ['plat' => $plats->id])
            ->with('success', 'bien modifier');
    }      
    
    public function destroy($id)
    {
        $plats = Plat::findOrFail($id); 

        $plats->delete();

        return redirect()
            ->route('plats.index');
    }
}
