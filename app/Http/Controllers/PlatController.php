<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plat;

class PlatController extends Controller
{
    public function index()
    {
        return view('plats.plat');
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

        $post = new Plat;

        // $img = $request->file('image')->store('public/images/plats');
        // $img =str_replace("public/images", "storage/images", $img);

        $post->name = $request->input('name');
        $post->price = $request->input('price');
       // $post->image = $img; //$request->file('image');
       $post->image = $request->file('image');
        $post->description = $request->input('description');
        
        // dd($post);

        $post->save();

        // return redirect()
        //         ->route('index')
        //         ->with('success', 'bien enregistrer');
        return back()
        ->with('success', 'bien enregistrer');

    }

    public function show()
    {
        return view('posts/plat');
    }

    
    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
