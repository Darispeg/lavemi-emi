<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{

    public function index()
    {
        $tags = Tag::all();

        return view('admin.tags.index', compact('tags'));
    }

    public function create()
    {
        $colors = [
            'red' => 'color Rojo',
            'indigo' => 'Color Indigo',
            'green' => 'Color Verde',
            'blue' => 'Color Azul',
            'yellow' => 'Color Amarillo',
            'pink' => 'Color Rosa'
        ];

        return view('admin.tags.create', compact('colors'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:tags',
            'color' => 'required',
        ]);

        $tag = Tag::create($request->all());

        return redirect()->route('admin.tags.edit', compact('tag'))->with('info', 'La Etiqueta se creó con éxito');
    }

    public function edit(Tag $tag)
    {
        $colors = [
            'red' => 'color Rojo',
            'indigo' => 'Color Indigo',
            'green' => 'Color Verde',
            'blue' => 'Color Azul',
            'yellow' => 'Color Amarillo',
            'pink' => 'Color Rosa'
        ];

        return view('admin.tags.edit', compact('tag', 'colors'));
    }

    public function update(Request $request, Tag $tag)
    {
        $request->validate([
            'name' => 'required',
            'slug' => "required|unique:tags,slug,$tag->id",
            'color' => 'required',
        ]);

        $tag->update($request->all());

        return redirect()->route('admin.tags.edit', $tag)->with('info', 'La Etiqueta se Actualizo con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();

        return redirect()->route('admin.tags.index')->with('info', 'La Etiqueta se eliminó con éxito');
    }
}
